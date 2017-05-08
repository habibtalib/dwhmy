<?php

namespace App;


class Gallery extends Model
{
    //
    public function items() {

        return $this->belongsTo(Items::class);
    }
}
