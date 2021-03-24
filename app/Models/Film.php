<?php
	
	namespace App\Models;
	
	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;
	
	class Film extends Model
	{
		use HasFactory;
		protected $fillable = [
			'original_title',
			'poster_path',
			'overview',
			'release_date',
			'genres',
			'vote_average'
		];
		
		public function Actors()
		{
			$this->belongsToMany(Actor::class)->withPivot('title');
		}
	}
