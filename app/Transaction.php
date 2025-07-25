<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function typePayment()
    {
        return $this->belongsTo(TypePayment::class, 'payment_id');
    }
}
