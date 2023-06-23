<?php

namespace App\Http\Livewire\Frontend;

use App\Models\MomoTransactions;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TicketInfo extends Component
{
    public $names;
    public $email;
    public $phone_number;
    public $number_of_tickets;
    public $updateMode = false;
    public $transaction_id;
    public $Payment_in_process='';
    public $payment_status_momo='';
    public $transaction_status_momo='';

    public function mount($id){
        $this->ticket_id = $id;
        $this->ticket_info = Ticket::where('id', $this->ticket_id)->first();
    }
    public function create(){

        $validatedDate = $this->validate([
            'names' => ['required'],
            'email' => 'required',
            'phone_number' => 'required|min:10|max:10|',
            'number_of_tickets' => 'required|min:1|',
        ]);


//        $curl = curl_init();
//        $transaction_id = $this->transaction_id;
//        curl_setopt_array($curl, array(
//            CURLOPT_URL => "http://akokanya.com/api/mtn-integration/9897986718)",
//            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_ENCODING => '',
//            CURLOPT_MAXREDIRS => 10,
//            CURLOPT_TIMEOUT => 0,
//            CURLOPT_FOLLOWLOCATION => true,
//            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//            CURLOPT_CUSTOMREQUEST => 'GET',
//            CURLOPT_HTTPHEADER => array(
//                'token: OINjoOhop()*42CS%EWCSf@4r54%vfds!#gd^',
//                'Cookie: laravel_session=eyJpdiI6Im1YUFwvekRFVys4MzFGK2p5WUoySk5RPT0iLCJ2YWx1ZSI6ImtKUXhLbmNseEZGOTUyZXFOUmt3NUJ1Wm56Vkc2UngxNnZIcFFlWUd4aFFtTlJCU1d3S1V0TlNVdzd5VXNnTWdYV2lxazdqRkRBQ3dXWjFBT3RDTllBPT0iLCJtYWMiOiJjY2JlZDhhMWE2Y2E0MGUyZWQwYmI4NTVhMWI5NTkzNWY2NGU3ZDM2N2YxMDI2YzhmZmIxYTRkZjgwNGRmYjFiIn0%3D'
//            ),
//        ));
//        $response = curl_exec($curl);
//        curl_close($curl);
//        $responsedata=json_decode($response);

//        $this->validate([
//            'names' => ['required'],
//            'email' => 'required',
//            'phone_number' => 'required|max:10|',
//            'number_of_tickets' => 'required|max:10|',
//        ]);
        $ticket_amount = $this->ticket_info[0]['ticket_amount'];
        $new_amount = $ticket_amount * $this-> number_of_tickets;
        $new_num = $this->phone_number;
        $phonenumber = $new_num;
        $dt = Carbon::now();
        $idt = mt_rand(1, 999999999);
        //Generating Payment Gateway
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://akokanya.com/mtn-pay?amount=$new_amount&phone=$phonenumber&company_name=KivuFest",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: laravel_session=eyJpdiI6IkVUNTRJb1hxbkdrTzUwc2I3UDNVOVE9PSIsInZhbHVlIjoiMXhDNUlrVUdRcTI1M2xobngrUFBSZUJEYkxHSk1lRzQ5Y2RIb2Q4bXBVTHlIWXUrUkMxXC9WXC9IT25BZ1FzRlMzcEg4Q3FxZ1M5T2tcL0V2bkd2UWNiXC93PT0iLCJtYWMiOiI3NWI3YTRjYjkzZjVjZjJhM2MxYjhjYTIzY2VjYWU3Yzg2NWZjMDQwNDczYzMwNDAwZTY1NDE0ZjQyMzJkYmMwIn0%3D'
            ),
        ));
        $responseapi = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            //echo "cURL Error #:" . $err;
            $title="Not Connected";
            $message="Sorry you do not have internet connection";
            //return redirect()->route('balance')->with($title,$message);
//            echo "$err";
            session()->flash('success', $message);

        } else {
            //echo $response;

            //Showing Status
            //second part Status checking

            $responseid=json_decode($responseapi);
            $curl = curl_init();
            if($responseapi =='{"@attributes":{"errorcode":"TARGET_AUTHORIZATION_ERROR"}}'){
                //checking balance
                $maintitle="Balance";
                $title="Not Enough Balance";
                $response ="Sorry you do not have enough money on your account to make this transaction, please try again after topping up your account";
                session()->flash('success', $response);
            }
            elseif($responseapi =='{"@attributes":{"errorcode":"ACCOUNTHOLDER_WITH_FRI_NOT_FOUND"},"arguments":{"@attributes":{"name":"fri","value":"FRI:25'.$phonenumber.'\/MSISDN"}}}'){
                //User not registered in Momo
                $maintitle="Not Registered";
                $title="Not Registered";
                $response="Sorry you're not registered with MTN Mobile Rwanda";
                session()->flash('success', $response);
            }
            elseif($responseapi == '{"@attributes":{"errorcode":"AUTHORIZATION_SENDER_ACCOUNT_NOT_ACTIVE"}}'){
                $response="Sorry, Sender Account is not active";
                session()->flash('success', $response);
            }
            elseif($responseapi=='{"error":"the minimum amount is 100"}'){
                //User not registered in Momo
                $maintitle="Minimum amount";
                $title="Minimum amount";
                $response="Sorry the minimum amount to send is 100Frw";
                session()->flash('success', $response);
            }
            elseif($responseapi=='{"@attributes":{"errorcode":"AUTHORIZATION_MAXIMUM_AMOUNT_ALLOWED_TO_SEND"}}'){
                //User not registered in Momo
                $maintitle="Maximum amount";
                $title="Maximum amount";
                $response="Sorry the maximum amount to send is 2,000,000Frw";
                session()->flash('success', $response);
            }
            elseif($responseapi=='{"@attributes":{ "errorcode": "AUTHORIZATION_SENDER_ACCOUNT_NOT_ACTIVE"}}'){
                //User not registered in Momo
                $response="Sorry, Sender Account is not active";
                session()->flash('success', $response);
            }
            else{
                curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://akokanya.com/api/mtn-integration/$responseid->transactionid",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_POSTFIELDS => "",
                    CURLOPT_HTTPHEADER => array(
                        "Accept: */*",
                        "Cache-Control: no-cache",
                        "Connection: keep-alive",
                        "Host: akokanya.com",
                        "Postman-Token: 8ee69e07-b01a-490c-8bb5-249ae3563665,a2e45631-b5fd-4ba1-95e6-0b6c2409059a",
                        "User-Agent: PostmanRuntime/7.11.0",
                        "accept-encoding: gzip, deflate",
                        "cache-control: no-cache",
                        "cookie: laravel_session=eyJpdiI6IjlYMkl6MSt4amVKdGdaTlREQkVTdVE9PSIsInZhbHVlIjoicHM5QWdlemZ3M0pVNTZWakEzOVozZFdcL0RJKzJ0WnNxV0FBdlZ3T1h0eEVHeUJcL21CTkRTaElnU1NwUGczeFVoNGxnUkRzcXJPb0xLeUg5QlJmZXZwUT09IiwibWFjIjoiYTM5MTA2NzdjYjE5YjFkZjlmNmU3ZmQ4ZjliN2ZiODc4ZjFjMWEzNDMwN2FmNjI1ZjFjNTU2ZjljZTZiNmRiOSJ9",
                        "token: OINjoOhop()*42CS%EWCSf@4r54%vfds!#gd^"
                    ),
                ));

                $responseapis = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);
                if ($err) {
                    echo "cURL Error #:" . $err;
                } else {
                    //echo $response;

                    $responsedata=json_decode($responseapis);
                    $deletedat=0;
                    $Momopayment = MomoTransactions::create([
                        'phone_number'=> $new_num,
                        'ticket_id'=> $this->ticket_id,
                        'transaction_id'=> $responsedata[0]->external_payment_code,
                        'status'=> $responsedata[0]->payment_status,
                        'assigned_id'=> $responsedata[0]->code,
                        'company_name'=> $responsedata[0]->company_name,
                        'code'=> $responsedata[0]->code,
                        'amount'=> $new_amount,
                        'client_name'=> $this->names,
                        'client_email'=> $this->email,
                        'payment_code'=> $responsedata[0]->payment_code,
                        'external_payment_code'=> $responsedata[0]->external_payment_code,
                        'payment_status'=> $responsedata[0]->payment_status,
                        'payment_type'=> $responsedata[0]->payment_type,
                        'momo_deleted_at'=> $deletedat,
                        'momo_created_at'=> $responsedata[0]->created_at,
                        'momo_updated_at'=> $responsedata[0]->updated_at,
                    ]);
                    if($Momopayment){
                        $this->transaction_id = $Momopayment->transaction_id;
                        $this->transaction_status_momo = $Momopayment->payment_status;
                        $this->Payment_in_process = "Momo";
                        $response="Ntufunge iyi paji izenguruka (Loading). Emeza igikorwa cyo kwishyura wakiriye";
                        session()->flash('success', $response);
                    }
                }
            }
        }
    }

    public function render()
    {
        $this->ticket_info = DB::table('tickets')->where('id',$this->ticket_id)->get();
        if ($this->Payment_in_process == "Momo"){
            $client_payment_id = MomoTransactions::where('transaction_id',$this->transaction_id)->value('id');
            $client_payment_names = MomoTransactions::where('transaction_id',$this->transaction_id)->value('client_name');
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://akokanya.com/api/mtn-integration/$this->transaction_id",
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
            if($responsedata){
                $status = $responsedata[0]->payment_status;
                if ($responsedata[0]->payment_status == "SUCCESSFUL"){
                    $this->payment_status_momo = "Transaction is $status";
                    $this->transaction_status_momo = "SUCCESSFUL";
                    $update_transaction = \App\Models\MomoTransactions::find($client_payment_id);
                    $update_transaction->payment_status =  $responsedata[0]->payment_status;
                    $update_transaction->updated_at = $responsedata[0]->updated_at;
                    $update_transaction->save();
                    $ticket_number = substr($client_payment_names, -4) .'FEST'. mt_rand(10000, 999999);
                    $newticket = \App\Models\TicketGenerated::create([
                        'client_id' => $client_payment_id,
                        'ticket_number' => $ticket_number,
                        'ticket_status' => "Valid",
                    ]);
                    $new_num = '+25'.$this->phone_number;
                    $sms_message = "Thank you for buying KIVUFEST Ticket, Here is your ticket number: $ticket_number ! See on July 1st -3rd";
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
                }else{
                    $this->payment_status_momo = "Transaction is $status, Niba utahise wakira message yo kubikuza, kanda *182*7*1# ukurikize amabwiriza.";
                }
            }

        }
        return view('livewire.frontend.ticket-info')->layout('layouts.frontend');
    }
}
