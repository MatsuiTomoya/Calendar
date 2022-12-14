<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    protected $dates = ['start_date', 'end_date'];
    
    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
