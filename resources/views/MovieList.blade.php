@extends('layouts.layout')
@section('content')
<div class="hero common-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-ct">
                    <h1> movie listing - list</h1>
                    <ul class="breadcumb">
                        <li class="active"><a href="#">Home</a></li>
                        <li> <span class="ion-ios-arrow-right"></span> movie listing</li>
                    </ul>
                </div>
                @if(session('status'))
                    <div class="alert alert-success" role="alert">Votre Film a été ajouter avec succées !</div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="page-single movie_list">
    <div class="container">
        <div class="row ipad-width2">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="topbar-filter">
                    <p>Found <span>{{count($films)}} movies</span> in total</p>
                    <label>Sort by:</label>
                    <select>
                        <option value="popularity">Popularity Descending</option>
                        <option value="popularity">Popularity Ascending</option>
                        <option value="rating">Rating Descending</option>
                        <option value="rating">Rating Ascending</option>
                        <option value="date">Release date Descending</option>
                        <option value="date">Release date Ascending</option>
                    </select>
                    <a href="movielist.html" class="list"><i class="ion-ios-list-outline active"></i></a>
                    <a  href="{{route('MovieGrid')}}" class="grid"><i class="ion-grid"></i></a>
                </div>
                @foreach($films as $film)
                <div class="movie-item-style-2">
                    <img src="{{$film->poster_path}}" alt="">
                    <div class="mv-item-infor">
                        <h6><a href="{{route('DetailMovie',$film->id)}}">{{$film->original_title}}</a></h6>
                        <p class="rate"><i class="ion-android-star"></i><span>{{$film->vote_average}}</span> /10</p>
                        <p class="describe">{{$film->overview}}</p>
                        <p class="run-time"> Run Time: 2h21’    .     <span>MMPA: PG-13 </span>    .     <span>Release: {{$film->release_date}}</span></p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="searh-form">
                        <h4 class="sb-title">Search for movie</h4>
                        <form class="form-style-1" action="#">
                            <div class="row">
                                <div class="col-md-12 form-it">
                                    <label>Movie name</label>
                                    <input type="text" placeholder="Enter keywords">
                                </div>
                                <div class="col-md-12 form-it">
                                    <label>Genres & Subgenres</label>
                                    <div class="group-ip">
                                        <select
                                                name="skills" multiple="" class="ui fluid dropdown">
                                            <option value="">Enter to filter genres</option>
                                            <option value="Action1">Action 1</option>
                                            <option value="Action2">Action 2</option>
                                            <option value="Action3">Action 3</option>
                                            <option value="Action4">Action 4</option>
                                            <option value="Action5">Action 5</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-12 form-it">
                                    <label>Rating Range</label>

                                    <select>
                                        <option value="range">-- Select the rating range below --</option>
                                        <option value="saab">-- Select the rating range below --</option>
                                        <option value="saab">-- Select the rating range below --</option>
                                        <option value="saab">-- Select the rating range below --</option>
                                    </select>

                                </div>
                                <div class="col-md-12 form-it">
                                    <label>Release Year</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select>
                                                <option value="range">From</option>
                                                <option value="number">10</option>
                                                <option value="number">20</option>
                                                <option value="number">30</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select>
                                                <option value="range">To</option>
                                                <option value="number">20</option>
                                                <option value="number">30</option>
                                                <option value="number">40</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <input class="submit" type="submit" value="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="ads">
                        <img src="images/uploads/ads1.png" alt="">
                    </div>
                    <div class="sb-facebook sb-it">
                        <h4 class="sb-title">Find us on Facebook</h4>
                        <iframe src="" data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhaintheme%2F%3Ffref%3Dts&tabs=timeline&width=340&height=315px&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"  height="315" style="width:100%;border:none;overflow:hidden" ></iframe>
                    </div>
                    <div class="sb-twitter sb-it">
                        <h4 class="sb-title">Tweet to us</h4>
                        <div class="slick-tw">
                            <div class="tweet item" id="599202861751410688">
                            </div>
                            <div class="tweet item" id="297462728598122498">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection