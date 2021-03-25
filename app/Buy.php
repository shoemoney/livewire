<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    protected $fillable = ['id','user_id', 'price', 'amount'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
