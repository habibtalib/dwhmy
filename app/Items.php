<?php

namespace App;


class Items extends Model
{
    //
    public function gallery() {

        return $this->hasMany(Gallery::class);
    }
}
