<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskGroup extends Model
{
    public function tasks()
    {
      return $this->belongsToMany('App\Task')->withTimestamps();
    }
}
