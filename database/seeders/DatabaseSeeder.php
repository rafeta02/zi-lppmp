<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ArticleCategory;
use App\Models\ArticleTag;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call([
        //     PermissionsTableSeeder::class,
        //     RolesTableSeeder::class,
        //     PermissionRoleTableSeeder::class,
        //     UsersTableSeeder::class,
        //     RoleUserTableSeeder::class,
        // ]);

        Post::factory()->count(50)->create();

        // Assuming you want to assign tags to each post
        $posts = Post::all();
        $tags = ArticleTag::all(); // Fetch all available tags
        $categories = ArticleCategory::all(); // Fetch all available tags

        foreach ($posts as $post) {
            $post->tags()->attach(
                $tags->random(1)->pluck('id')->toArray() // Attaching 3 random tags
            );
            $post->categories()->attach(
                $categories->random(1)->pluck('id')->toArray() // Attaching 3 random tags
            );
        }
    }
}
