<?php

namespace App\Models;

use App\Models\Team;
use App\Models\Season;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salary extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at', 'updated_at'];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function team(){
        return $this->belongsTo(Team::class);
    }

    public function season(){
        return $this->belongsTo(Season::class);
    }
}
