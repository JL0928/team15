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
        'orign',
        'dir',
        'ep_num',
        'cp_id',
        'play_time'
        
    ];

    public function company(){

        return $this->belongsTo('App\Models\Company','cp_id','id');
    }

    public function scopeSeason($query,$M_start,$M_end)
    {
        return $query->whereMonth('play_time',">=",$M_start)->whereMonth('play_time',"<=",$M_end)->orderBy('play_time','asc');
    }

    public function scopeSeasonSP($query,$M_start,$M_end)
    {
        return $query->whereMonth('play_time',">=",$M_start)->orwhereMonth('play_time',"<=",$M_end)->orderBy('play_time','asc');

    }
    
}
