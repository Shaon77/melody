<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('/welcome');
});


Route::group(['middleware' => ['web']],function() {

 Route::get('upload','FilesController@upload'); 	
Route::get('/deleteFile/{id}', ['as' => 'deleteFile', 'uses' => 'FilesController@deleteFile']);
Route::get('/playCheck{id}', ['as' => 'playCheck', 'uses' => 'FilesController@play']);
 Route::post('/handleUpload','FilesController@handleUpload');

 Route::get('artist','ArtistController@upload');
 Route::post('/artisthandleUpload','ArtistController@handleUpload');
 Route::get('/deleteArtist/{id}', ['as' => 'deleteArtist', 'uses' => 'ArtistController@deleteArtist']);

 Route::get('album','AlbumController@upload');
 Route::post('/handlealbumUpload','AlbumController@handlealbumUpload');
 Route::get('/deleteAlbum/{id}', ['as' => 'deleteAlbum', 'uses' => 'AlbumController@deleteAlbum']);



Route::get('/playalbum','PlayController@showAlbum');
Route::get('/albumSongs/{id}',[ 'as' => 'albumSongs', 'uses' => 'PlayController@albumSongs']);
Route::get('/albumplay{id}', ['as' => 'albumplay', 'uses' => 'PlayController@play']);


Route::get('/playartist','PlayController@showArtist');
Route::get('/artistSongs/{id}',[ 'as' => 'artistSongs', 'uses' => 'PlayController@artistSongs']);
Route::get('/artistplay{id}', ['as' => 'artistplay', 'uses' => 'PlayController@artistplay']);



Route::get('playlist','PlaylistController@create');
Route::post('/handleplaylistUpload','PlaylistController@handleplaylistUpload');
Route::get('/deletePlaylist/{id}', ['as' => 'deletePlaylist', 'uses' => 'PlaylistController@deletePlaylist']);


Route::get('playlistaddsong','PlaylistController@addSong');
Route::post('/handleUploadPlaylistSong','PlaylistController@handleUploadPlaylistSong');
Route::get('/ShowPlaylistAlbumSongs{id}',['as' => 'ShowPlaylistAlbumSongs', 'uses' =>'PlaylistController@ShowPlaylistAlbumSongs']);
//Route::get('/PASS{id,playlistName}',['as' => 'PASS', 'uses' =>])


});
