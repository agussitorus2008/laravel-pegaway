<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    use HasFactory;
    protected $table = 'log_activity';
    protected $fillable = [
        'user_id', 
        'activity_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');  
    }

}
