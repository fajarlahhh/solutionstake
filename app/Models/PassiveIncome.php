<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PassiveIncome extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'passive_income';

    public function withdrawal()
    {
        return $this->hasOne('App\Models\Withdrawal', 'id', 'id_withdrawal');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user', 'id');
    }
}
