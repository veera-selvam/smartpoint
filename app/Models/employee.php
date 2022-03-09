<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table    = 'employees';
    protected $fillable = ['emp_id','emp_name','ip_address'];
    
    public function employee_web_history()
    {
        return $this->hasMany(employee_web_history::class,'ip_address','ip_address');
    }
}
