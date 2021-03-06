<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
  use HasFactory;
  protected $guarded = [];

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function attendances(){
    return $this->hasMany(Attendance::class);
  }
}
