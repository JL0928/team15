<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'founder',
        'create',
        'head',
        'address'
        
    ];
    public function animations(){
        return $this->hasMany('App\Models\Animation','cp_id');
    }

    public function delete(){
        $this->animations()->delete();
        return parent::delete();
    }
    
    public function scopeYears($query,$years)
    {
        return $query->whereYear('create','<=',$years)->orderBy('create','asc');
    }
}
