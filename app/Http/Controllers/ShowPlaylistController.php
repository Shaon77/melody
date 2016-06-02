<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Playlist;
use App\PlaylistSong;
use App\UploadedFile;

class ShowPlaylistController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show()
    {
    	$playlists=Playlist::all();

        return view('files.showPlaylist')->with(array('playlists' => $playlists));



    }

    public function expand($id)
    {
    	$playlist=Playlist::find($id);
    	
    	$songs=PlaylistSong::where('playlistName', $playlist->playlistName)->select('songId')->distinct()->get();
    	$playlistSong;

    	foreach($songs as $song){

    		$playlistSong[]=(UploadedFile::find($song->songId));
    	}


        if(count($songs))
        {
    	return view('files.songlistPlaylist')->with(array('songs' => $playlistSong));
        }
        else{
        	return view('files.songlistPlaylist');

        }
    	
    }
}
