<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcels extends Model
{
    use HasFactory;
    protected $fillable = [
        'origin',
        'item',
        'weight',
        'destination',
        'order_date',
        'type',
        'receiver_number'
    ];
    public function parcels() {
        return $this->belongsTo(\App\Models\User::class);
    }
}
