<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    public $table = 'datas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idUser', 'from', 'city', 'money', 'item', 'note'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }
}
