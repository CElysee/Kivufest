<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MomoTransactions extends Model
{
    use HasFactory;
    protected $table = "momo_transactions";
    protected $fillable = ['phone_number','ticket_id','transaction_id', 'status', 'assigned_id', 'company_name', 'code', 'amount','client_name','client_email', 'payment_code',
        'external_payment_code', 'payment_status', 'payment_type', 'momo_deleted_at', 'momo_created_at', 'momo_updated_at',
    ];
}
