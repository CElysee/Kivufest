<?php

namespace App\Console\Commands;

use App\Models\MomoTransactions;
use App\Models\TicketGenerated;
use Illuminate\Console\Command;

class UpdateMomo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Momo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to update momo transaction and send tickets';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $check_pending_transaction = MomoTransactions::where('payment_status', 'PENDING')->get();
        foreach ($check_pending_transaction as $transaction){
            $client_payment_id = $transaction['transaction_id'];
            $client_payment_names = $transaction['client_name'];
            $client_ticket_number = $transaction['ticket_number'];
            $client_phone_number = $transaction['phone_number'];
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://akokanya.com/api/mtn-integration/$client_payment_id",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'token: OINjoOhop()*42CS%EWCSf@4r54%vfds!#gd^',
                    'Cookie: laravel_session=eyJpdiI6ImFVZm5NR05FdkMrY0JLVGRiVmVTXC9BPT0iLCJ2YWx1ZSI6InhuNCtIMTBLXC94ZCtiNGo5R3hRMm5SU05NanlXWmdMTURrY0lEand1OWlaK3NqdlJYZnhYbEptOWtXeU5WT09UbFlpS2tOUlhnNjUyeUNoNnRjUWJ2UT09IiwibWFjIjoiOTU1OWUxZTcwMTQ0ZmQwNTlmMTEzYmEwNzgwYTQ1YTg5MGQ2MDYwN2U4ZWMyNDE1MjlhMzkzZTgwMjI3NDJjZSJ9'
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $responsedata=json_decode($response);
//            dd($responsedata);
            if($responsedata){
                if ($responsedata[0]->payment_status == "SUCCESSFUL"){
                    $update_transaction = MomoTransactions::find($client_payment_id);
                    $update_transaction->payment_status =  $responsedata[0]->payment_status;
                    $update_transaction->updated_at = $responsedata[0]->updated_at;
                    $update_transaction->save();
                    if($client_ticket_number > 1){
                        for ($x = 1; $x <= $client_ticket_number; $x++) {
                            $ticket_number = substr($client_payment_names, -4) .'FEST'. mt_rand(10000, 999999);
                            $newticket = TicketGenerated::create([
                                'client_id' => $client_payment_id,
                                'ticket_number' => $ticket_number,
                                'ticket_status' => "Valid",
                            ]);
                            $new_num = '+25'.$client_phone_number;
                            $ticketLink = "https://kivufest.co.rw/generate-qrcode/$ticket_number";
                            $sms_message = "Thank you for buying KIVUFEST Ticket, Here is your ticket number: $ticketLink \n,See on July 1st -3rd";
                            $curl = curl_init();
                            curl_setopt_array($curl, array(
                                CURLOPT_URL => 'https://api.mista.io/sms',
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => '',
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 0,
                                CURLOPT_FOLLOWLOCATION => true,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => 'POST',
                                CURLOPT_POSTFIELDS => array('to' => $new_num,'from' => 'KIVUFEST','unicode' => '0','sms' => $sms_message,'action' => 'send-sms'),
                                CURLOPT_HTTPHEADER => array(
                                    'x-api-key: 12|S7455JX2BatRojzHKl24cU5DyFsPeAVefGMrK1Bc '
                                ),
                            ));
                            $response = curl_exec($curl);
                            curl_close($curl);
                        }
                    }else{
                        $ticket_number = substr($client_payment_names, -4) .'FEST'. mt_rand(10000, 999999);
                        $newticket = TicketGenerated::create([
                            'client_id' => $client_payment_id,
                            'ticket_number' => $ticket_number,
                            'ticket_status' => "Valid",
                        ]);
                        $new_num = '+25'.$client_phone_number;
                        $ticketLink = "https://kivufest.co.rw/generate-qrcode/$ticket_number";
                        $sms_message = "Thank you for buying KIVUFEST Ticket, Here is your ticket number: $ticketLink \n,See on July 1st -3rd";
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                            CURLOPT_URL => 'https://api.mista.io/sms',
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_ENCODING => '',
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 0,
                            CURLOPT_FOLLOWLOCATION => true,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => 'POST',
                            CURLOPT_POSTFIELDS => array('to' => $new_num,'from' => 'KIVUFEST','unicode' => '0','sms' => $sms_message,'action' => 'send-sms'),
                            CURLOPT_HTTPHEADER => array(
                                'x-api-key: 12|S7455JX2BatRojzHKl24cU5DyFsPeAVefGMrK1Bc '
                            ),
                        ));
                        $response = curl_exec($curl);
                        curl_close($curl);
                    }
                }else{
                    $update_transaction = MomoTransactions::find($client_payment_id);
                    $update_transaction->payment_status =  $responsedata[0]->payment_status;
                    $update_transaction->updated_at = $responsedata[0]->updated_at;
                    $update_transaction->save();
                }
            }
        }
    }
}
