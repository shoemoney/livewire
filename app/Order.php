<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Order extends Model
{
    use HasFactory;

 protected $fillable = ['buying_coin','pair', 'selling_coin', 'amount', 'type','rate'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
