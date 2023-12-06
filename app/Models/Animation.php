<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'type',
        'orgin',
        'dir',
        'ep_num',
        'cp_id',
        'play_time'
        
    ];
    public function company()
    {
        return $this ->belongsTo('App\Models\Company','cp_id','id');
    }

}
