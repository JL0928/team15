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
        'orgin',
        'dir',
        'ep_num',
        'cp_id',
        'play_time'
        
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company', 'cp_id', 'id');
    }


    
    public function scopeseason($query, $start, $end)
    {
        return $query->whereMonth('play_time', ">=", $start)
                    ->whereMonth('play_time', "<=", $end)
                    ->orderBy('play_time', 'asc');
    }

    public function scopeseasonSP($query, $start, $end)
    {
        return $query->whereMonth('play_time', ">=", $start)
                    ->orwhereMonth('play_time', "<=", $end)
                    ->orderBy('play_time', 'asc');
    }

    public function scopeAlltypes($query)
    { 
        return $query->select('type')->groupBy('type');
    }

    public function scopeType($query, $type)
    {
        return $query->where('type', '=', $type);
    }
}