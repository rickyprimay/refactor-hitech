<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenTalk extends Model
{
    use HasFactory;
    protected $fillable = [
        'ticket_number',
        'user_id',
        'payment_link',
        'approved_payment'
    ];
}
