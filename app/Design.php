<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    protected $table ="designs";

    public function category () {
        return $this->belongsTo(DesignCategory::class);
    }
    public function image () {
        return $this->belongsTo(Image::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }

}
