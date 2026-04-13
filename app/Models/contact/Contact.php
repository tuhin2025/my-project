<?php

namespace App\Models\Contact;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    protected $primaryKey = 'sl_id';

    public $timestamps = false;

    protected $fillable = [
        'sl_id',
        'user_name',
        'email',
        'subject',
        'remarks',
        'insert_dt'
    ];
}
