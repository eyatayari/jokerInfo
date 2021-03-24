@extends('layouts.layout')
@section('content')
<div class="hero user-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-ct">
                    <h1>ADD NEW MOVIE</h1>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-single">
    <div class="container">
        <div class="row ipad-width">

            <div class="col-md-11 col-sm-12 col-xs-12">
                <div class="form-style-1 user-pro" >
                    <form method="post" class="user" action="{{route('save_movie')}}" enctype="multipart/form-data">
                        @csrf
                        <h4>Movie details</h4>
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                <div class="kv-avatar">
                                    <div class="file-loading">
                                        <input id="avatar-1" name="poster_film" type="file" required>
                                    </div>
                                </div>
                                <div class="kv-avatar-hint">
                                    <small>Select file < 1500 KB</small>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-6 form-it">
                                <label>title</label>
                                <input type="text" name="title" placeholder="movie name">
                            </div>
                            <div class="col-md-6 form-it">
                                <label>overview</label>
                                <input type="text" height="200px" name="overview">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-it">
                                <label>Release Date</label>
                                <input type="date" name="release_date" />
                            </div>
                            <div class="col-md-6 form-it">
                                <label>Category</label>
                                <input type="text" name="category" placeholder="action">
                            </div>
                        </div>

                            <div class="col-md-2">
                                <input class="submit" type="submit" value="save" id="Swal.fire">
                            </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

