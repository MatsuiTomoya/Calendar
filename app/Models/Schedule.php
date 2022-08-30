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
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // start_dateで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('start_date', 'DESC')->paginate($limit_count);
    }
}
