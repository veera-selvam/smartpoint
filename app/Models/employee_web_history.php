<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class employee_web_history extends Model
{
    use HasFactory, SoftDeletes;
    protected $table    = 'employee_web_histories';
    protected $fillable = ['id','ip_address','url'];

    public function employee()
    {
        return $this->belongsTo(employee::class,'ip_address','ip_address');
    }
}
