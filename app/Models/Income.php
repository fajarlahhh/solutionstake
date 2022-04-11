<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Income extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'income';

    public function withdrawal()
    {
        return $this->belongsTo('App\Models\Withdrawal', 'id_withdrawal', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'id_user');
    }
}
