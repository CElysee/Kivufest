<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketGenerated extends Model
{
    use HasFactory;
    protected $table = "ticket_generated";
    protected $fillable = ['client_id','ticket_number','ticket_status'];

}
