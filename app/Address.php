<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ["address", "user_id"];
    protected $table = 'address';
    public $timestamps = false;
    protected $primaryKey = "id_address";
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
