<?php

namespace App\Models\Contact;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'user_name',
        'email',
        'subject',
        'message',
        'remarks',
        'insert_dt',
        'update_dt'
    ];
}
