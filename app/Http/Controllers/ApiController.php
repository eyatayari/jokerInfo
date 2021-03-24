<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Carbon\Carbon;
use Exception;

class ApiController extends Controller
{
	CONST BASE_URL = 'https://api.themoviedb.org/3';
	CONST KEY_SECRET = '?api_key=762ef0752fde70b023ea626437b1977f';
	CONST MAX_FILM_TO_GET = 200; // -1 illimité
	
    private function handleCallApi($url, $params = ''){
    	try{
    		if(isset($url)):
			    $ch = curl_init();
			    curl_setopt($ch, CURLOPT_URL,$this::BASE_URL . $url . $this::KEY_SECRET . $params);
			    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			    $response = curl_exec($ch);
			    curl_close($ch);
		        return json_decode($response, true);
	        else:
		        throw new Exception("URL indifinie");
	        endif;
        } catch(\Exception $e){ dump($e); return false; }
    }
    
    public function getFilms(){
    	$apiType = '/movie/popular';
	    $movies = [];
    	$result = $this->handleCallApi($apiType);
	    if(isset($result, $result['total_results']) AND $result['total_results'] > 20):
		    $movies = array_merge($movies, $result['results']);
		    dump(count($movies) . ' filmes collecté !');
		    
    	    for($i = 2; $i <= $result['total_pages']; $i++):
		        if($this::MAX_FILM_TO_GET > 0 AND count($movies) >= $this::MAX_FILM_TO_GET): break; endif;
		        $result = $this->handleCallApi($apiType);
    	        if(isset($result, $result['results'])):
		            $movies = array_merge($movies, $result['results']);
    	            dump(count($movies) . ' filmes collecté !');
	            endif;
	            
	        endfor;
    	endif;
	
	    foreach ($movies as $movie) {
	    	$data = new Film();
			$data->original_title = $movie['original_title'];
			$data->poster_path    = 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'];
			$data->overview       = $movie['overview'].
			$data->release_date   = Carbon::createFromFormat('Y-m-d', $movie['release_date']);
			$data->genres         = $movie['genre_ids'][0];
			$data->vote_average   = $movie['vote_average'];
			$data->save();
    	}
    }
}
