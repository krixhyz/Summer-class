<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;


class MovieSeeder extends Seeder
{
   
 public function run(): void
    {
    Movie::create([
    'name' => 'Fast & Furious',
    'description' => 'A high-octane action movie with fast cars and thrilling chases.',
    'duration' => 2.10,
    'release_date' => '2009-06-04',
    'rating' => 7.2,
    'genre_id' => 1,
    'language' => 'English',
    'cast' => 'Vin Diesel, Paul Walker, Michelle Rodriguez'
]);

Movie::create([
    'name' => 'Die Hard',
    'description' => 'An NYPD officer tries to save his wife and others from terrorists.',
    'duration' => 2.12,
    'release_date' => '1988-07-15',
    'rating' => 8.2,
    'genre_id' => 1,
    'language' => 'English',
    'cast' => 'Bruce Willis, Alan Rickman'
]);

Movie::create([
    'name' => 'John Wick',
    'description' => 'An ex-hitman comes out of retirement to track down the gangsters.',
    'duration' => 1.41,
    'release_date' => '2014-10-24',
    'rating' => 7.4,
    'genre_id' => 1,
    'language' => 'English',
    'cast' => 'Keanu Reeves, Michael Nyqvist'
]);

Movie::create([
    'name' => 'Rush Hour',
    'description' => 'A Hong Kong detective teams up with a loudmouthed LAPD officer.',
    'duration' => 1.38,
    'release_date' => '1998-09-18',
    'rating' => 7.0,
    'genre_id' => 2,
    'language' => 'English',
    'cast' => 'Jackie Chan, Chris Tucker'
]);

Movie::create([
    'name' => 'The Mask',
    'description' => 'A man finds a magical mask that transforms him into a wild alter ego.',
    'duration' => 1.41,
    'release_date' => '1994-07-29',
    'rating' => 6.9,
    'genre_id' => 2,
    'language' => 'English',
    'cast' => 'Jim Carrey, Cameron Diaz'
]);

Movie::create([
    'name' => 'Bad Boys',
    'description' => 'Two Miami detectives try to protect a murder witness.',
    'duration' => 1.59,
    'release_date' => '1995-04-07',
    'rating' => 6.9,
    'genre_id' => 1,
    'language' => 'English',
    'cast' => 'Will Smith, Martin Lawrence'
]);

Movie::create([
    'name' => '21 Jump Street',
    'description' => 'Two cops go undercover at a high school.',
    'duration' => 1.49,
    'release_date' => '2012-03-16',
    'rating' => 7.2,
    'genre_id' => 2,
    'language' => 'English',
    'cast' => 'Jonah Hill, Channing Tatum'
]);

Movie::create([
    'name' => 'The Other Guys',
    'description' => 'Two mismatched New York detectives seize an opportunity to step up.',
    'duration' => 1.47,
    'release_date' => '2010-08-06',
    'rating' => 6.6,
    'genre_id' => 2,
    'language' => 'English',
    'cast' => 'Will Ferrell, Mark Wahlberg'
]);

Movie::create([
    'name' => 'Mission: Impossible',
    'description' => 'An American agent is framed for the deaths of his espionage team.',
    'duration' => 1.50,
    'release_date' => '1996-05-22',
    'rating' => 7.1,
    'genre_id' => 1,
    'language' => 'English',
    'cast' => 'Tom Cruise, Jon Voight'
]);

Movie::create([
    'name' => 'Liar Liar',
    'description' => 'A fast-talking attorney can’t lie for 24 hours due to his son’s wish.',
    'duration' => 1.26,
    'release_date' => '1997-03-21',
    'rating' => 6.9,
    'genre_id' => 2,
    'language' => 'English',
    'cast' => 'Jim Carrey, Maura Tierney'
]);

}
}
