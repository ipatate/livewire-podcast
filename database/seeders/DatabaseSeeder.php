<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Podcast;
use App\Models\Presentator;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        Presentator::factory( 2 )->create();

        $presentators = Presentator::all();

        Podcast::factory( 10 )
               ->hasComments( rand( 0, 5 ) )
               ->create()->each( function ( $podcast ) use ( $presentators ) {
                $loop = rand( 1, 2 );
                for ( $i = 0; $i < $loop; $i ++ ) {
                    $podcast->presentators()->save( $presentators[ $i ] );
                }
            } );


        User::factory()->create( [
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ] );
    }
}
