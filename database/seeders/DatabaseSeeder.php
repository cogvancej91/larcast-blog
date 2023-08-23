<?php

namespace Database\Seeders;

 use Database\Factories\PostFactory;
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create([
           'name' => 'Austin V'
        ]);

        Post::factory(30)->create([
            'user_id' => $user->id
        ]);

//         $user = User::factory()->create();
//
//         $personal = Category::create([
//             'name' => 'Personal',
//             'slug' => 'personal'
//         ]);
//
//         $family = Category::create([
//             'name' => 'Family',
//             'slug' => 'family'
//         ]);
//
//         $work = Category::create([
//             'name' => 'Work',
//             'slug' => 'work'
//         ]);
//
//         Post::create([
//        'user_id' => $user->id,
//        'category_id' => $family->id,
//        'title' => 'My Family Post',
//        'slug' => 'my-first-post',
//        'excerpt' => 'Loerm ipsum dolar sit amet.',
//        'body' => '<p>Et sint quia laboriosam omnis. Repellendus voluptatibus sit ad sit consequatur ipsa voluptas quos. Quae consequatur ducimus dolorem illum. Eveniet minus optio ab voluptate aut quae voluptatem.</p>',
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post',
//            'excerpt' => 'Loerm ipsum dolar sit amet.',
//            'body' => '<p>Et sint quia laboriosam omnis. Repellendus voluptatibus sit ad sit consequatur ipsa voluptas quos. Quae consequatur ducimus dolorem illum. Eveniet minus optio ab voluptate aut quae voluptatem.</p>',
//        ]);

    }
}
