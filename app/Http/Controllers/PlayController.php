<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Album;
use DB ;
use App\UploadedFile;
use App\Artist;


class PlayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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


    public function showAlbum()
    {
        $albums=Album::all();

        return view('files.showAlbum')->with(array('albums' => $albums));


    }

    public function albumSongs($id)
    {
        $albumName=Album::find($id);
       // $songs=DB::table('files')->where('albumName', $albumName->albumName)->first();
        //$u = DB::table('users')->where('name', 'John')->first();
        $songs=UploadedFile::where('albumName', $albumName->albumName)->get();


         return view('files.albumSongs')->with(array('songs' => $songs));
       // return view('files.albumSongs')->with('songs',$albumName);
        //return view('files.albumSongs')->with('songs',$albumName);

    }



     public function play($id)
    {
        $file=UploadedFile::find($id);

        //$filepath='app'.'/'.config('app.fileDestinationPath').'/'.$file->filename;

        return view('files.playCheck')->with('filepath',$file);
    }

     public function showArtist()
    {
        $artists=Artist::all();

        return view('files.showArtist')->with(array('artists' => $artists));


    }

    public function artistSongs($id)
    {
        $artistName=Artist::find($id);
       // $songs=DB::table('files')->where('albumName', $albumName->albumName)->first();
        //$u = DB::table('users')->where('name', 'John')->first();
        $songs=UploadedFile::where('artistName', $artistName->artistName)->get();


         return view('files.artistsongs')->with(array('songs' => $songs));
       // return view('files.albumSongs')->with('songs',$albumName);
        //return view('files.albumSongs')->with('songs',$albumName);

    }



     public function artistplay($id)
    {
        $file=UploadedFile::find($id);

        //$filepath='app'.'/'.config('app.fileDestinationPath').'/'.$file->filename;

        return view('files.playCheck')->with('filepath',$file);
    }

}
