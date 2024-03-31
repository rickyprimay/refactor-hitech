<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTeam extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'name_team',
        'name_app',
        'institution',
        'email',
        'name_member1',
        'phone_member1',
        'name_member2',
        'phone_member2',
        'link_project',
        'approved_project',
        'payment_photo',
        'approved_payment',
        'participant_id'
    ];
}
