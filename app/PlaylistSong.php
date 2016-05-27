<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaylistSong extends Model
{
    //
    protected $table ="playlistSong";
      public $fillable = ['playlistName','songName'];
}
