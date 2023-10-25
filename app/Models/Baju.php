<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    public function ModelBaju(){
        return $this->belongsTo(ModelBaju::class, 'model_id');
    }

    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }

    use HasFactory;

    protected $table = 'bajus';

    protected $fillable = [
        "nama",
        "jumlah",
        "ukuran",
        "model_id",

    ];
}
