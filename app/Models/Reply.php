<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = ['reply'];
    use HasFactory;

    public function thread()
    {
        return $this->belongsTo(Tread::class);
    }
}
