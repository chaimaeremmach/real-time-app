<?php
use Illuminate\Support\Facades\DB;
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
    

       factory(App\User::class,10)->create();
       factory(App\Model\Category::class,5)->create();
       factory(App\Model\Question::class,10)->create();
       factory(App\Model\Reply::class,50)->create()->each(function($reply){
            return $reply->like()->save(factory(App\Model\Like::class)->make());
        }

        );
    }
}
