<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function viewConfigs()
    {
      return $this->belongsToMany('App\ViewConfig')->withTimestamps();
    }

    public function taskGroups()
    {
      return $this->belongsToMany('App\TaskGroup')->withTimestamps();
    }
}
