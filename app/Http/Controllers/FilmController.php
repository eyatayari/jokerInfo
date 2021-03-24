<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function show(){
        $films= Film::all()
            ->sortByDesc('id')
//            ->skip(40)
            ->take(40);
//        $films->appends(['sort' => 'created_at']);
//        dump($films);
//        die();
        return view('MovieList')->with('films',$films);
    }
    public function add(Request $request){


        $data =new Film;
        $data->original_title=$request->title;
        $data->overview=$request->overview;
        $data->release_date=$request->release_date;
        $data->genres=$request->category;

        $data->vote_average=random_int(0,50)/10;


        if ($request->hasFile('poster_film')) {
            $file = $request->file('poster_film');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $picture = date('His') . '-' . $filename;
            $file->move(public_path('img/nivo'), $picture);
            $data->poster_path =asset('img/nivo/'.$picture);
        }
        $data->save();
        session(['status' => 'success']);

        return redirect(route('MovieList'))/*->with()*/;

    }
    public function showDetails($id){
        $film=Film::find($id);

//        dump($film,$id);
        return view('MovieSingle')->with('film',$film);

    }
    public function showGrid(){
        $films=Film::all();
        return view('MovieGrid')->with('films',$films);
    }
}
