<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Artist;
use App\Models\Track;

use App\Models\Author;
use App\Models\Book;

class QueryController extends Controller
{
    function show(Request $request){
        // $artists = Artist::find(1);
        // $artist = Artist::find([1,2,3]);
        // $artists = Artist::all();
        // $artists = Artist::limit(10)->offset(20)->get();
        // $artists = Artist::where('name','like','c%')->get();
        // $artists = Artist::where('name','=','Cássia Eller')->get();
        // $artists = Artist::whereName('Cássia Eller')->get();

        // return response()->json($artists->albums);
        // $artists = Artist::with('albums')->find(1);
        // $artists = Artist::with('albums')->find([1,2,3]);
        // $artists = Artist::where('name','AC/DC')->with('albums')->first();
        // $artists = Artist::limit(5)->with('albums')->get();
        // return response()->json($artists);

        // $album = Album::with('artist')->find(1);
        // $album = Album::with('tracks')->find(1);
        // return response()->json($album);

        // $artist = Artist::with('albums.tracks')->find(1);
        // $artist = Artist::with('tracks')->find(1);
        // return response()->json($artist);

        $track = Track::with('album.artist')->find(1);
        return response()->json($track);

    }

    function books(Request $request){
        // $author = Author::with('books')->find(1);
        // return response()->json($author);

        $book = Book::with('authors')->find(3);
        return response()->json($book);

        // $author = Author::find(1);
        // return response()->json($author);

        // $book = Book::find(3);
        // return response()->json($book);
    }
}
