<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder\strpos;

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
    public function company()
    {
        return $this ->belongsTo('App\Models\Company','cp_id','id');
    }
    public function scopeseason($query, $start, $end)
    {
        return $query->whereMonth('play_time', ">=", $start)
                    ->whereMonth('play_time', "<=", $end)
                    ->orderBy('play_time', 'asc');
    }

    public function scopeseason_OR($query, $start, $end)
    { 
        return $query->whereMonth('play_time', ">=", $start)
                    ->orwhereMonth('play_time', "<=", $end)
                    ->orderBy('play_time', 'asc');
    }
}
