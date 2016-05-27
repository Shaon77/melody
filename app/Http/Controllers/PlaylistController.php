<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Playlist;
use App\Album;
use App\UploadedFile;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function create()
    {
        $playlists=Playlist::all();
         return view('files.playlist')->with(array('playlists' => $playlists));
    }


    public function handleplaylistUpload(Request $request)
    {
        $playlistName=$request->input('playlistName');
        

        Playlist::create(['playlistName' => $playlistName]);

        return redirect()->to('playlist');



    }

    public function deletePlaylist($id)
    {

        $playlist=Playlist::find($id);
        //Storage::delete(config('app.fileDestinationPath').'/'.$file->albumName.'/'.$file->filename);
        $playlist->delete();
        return redirect()->to('/playlist');
    }

    public function addSong()
    {

       
       $playlists=Playlist::all();

        return view('files.PlaylistSongAdd')->with(array('playlists' =>$playlists));

    }


    public function handleUploadPlaylistSong(Request $request)
    {

          // $albums=Album::all();
           $playlistName=$request->input('playlistName');
            return view('files.PlaylistSongAdd2')->with('playlistName', $playlistName);


    }


    public function ShowPlaylistAlbumSongs($id,$playlistName)
    {

        $albums=Album::all();
       // $albumName=Album::find($id);
       // $songs=DB::table('files')->where('albumName', $albumName->albumName)->first();
        //$u = DB::table('users')->where('name', 'John')->first();
      //  $songs=UploadedFile::where('albumName', $albumName->albumName)->get();


         return view('files.PASS')->with(array('albums' => $albums))->with('playlistName',$playlistName);
    }
}
