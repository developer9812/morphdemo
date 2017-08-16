<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewConfig extends Model
{
    public function tasks()
    {
      return $this->belongsToMany('App\Task')->withTimestamps();
    }

    public function fib()
    {
      return $this->morphedByMany('App\FibConfig', 'viewable');
    }
}

// sudo chown www-data:www-data /path/to/your/project/vendor
// sudo chown www-data:www-data /path/to/your/project/storage
// https://stackoverflow.com/a/30746362
