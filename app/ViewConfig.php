<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewConfig extends Model
{
    public function tasks()
    {
      return $this->belongsToMany('App\Task')->withTimestamps();
    }

    public function viewable()
    {
      return $this->morphToMany();
    }
}
