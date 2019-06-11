<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;


class MovieController extends Controller{
        public function index(){
        $movies = Movie::all();
        return view ('movies.index')->with('movies', $movies);
        
    }

    public function create(){
        return view ('movies.create')->with('genres', Genre::all());
    }

    public function store(Request $request){
        $reglas=[
            'title'=>'required',
            'awards'=>'required',
            'length'=>'required',
            'rating'=>'required',
            'release_date'=>'required',
            'genre_id'=>'required'
        
        ];

        $mensaje=[
            'required'=> 'El campo :attribute es obligatorio'
        ];

        $this->validate($request,$reglas,$mensaje);

        //$dia=$request->input('dia');

       // $release_date= date_format($request->input('release_date'), 'Y-m-d H:i:s');

        $pelicula= new Movie([
            'title'=>$request->input('title'),
            'awards'=>$request->input('awards'),
            'length'=>$request->input('length'),
            'rating'=>$request->input('rating'),
            'release_date'=>$request->input('release_date'),
            'genre_id'=>$request->input('genre_id')


        ]

        );

        $pelicula->save();


    }

    public function show($id){
        $movie = Movie::findOrFail($id);
        return view ('movies.show')->with('movie',$movie);
    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        
    }

}
