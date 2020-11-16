<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypePayment extends Model
{
    protected $table = 'type_payments';

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
