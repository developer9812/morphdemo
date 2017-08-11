<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FibConfig extends Model
{
    public function config()
    {
      return $this->morphToMany('App\ViewConfig', 'viewable');
    }
}
