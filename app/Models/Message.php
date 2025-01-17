<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory , SoftDeletes ;

    protected $dates = ['deleted_at'];


    protected $fillable=[
        'full_name' ,
        'email' ,
        'phone' ,
        'subject' ,
        'content' ,
        'agree' ,

    ];
}
