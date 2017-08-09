<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TFConfig extends Model
{
    public function config()
    {
      return $this->morphOne('App\ViewConfig', 'viewable');
    }
}
