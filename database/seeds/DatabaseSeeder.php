<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('UserTableSeeder');
		factory(App\Post::class, 10)
			->create()
			->each(function($post) {
				for($i = 0; $i <= rand(0, 5); $i++) {
					$post->comments()->save(factory(App\Comment::class)->make());
				}
			});

        Model::reguard();
    }
}
