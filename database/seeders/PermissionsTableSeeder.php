<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'blog_master_access',
            ],
            [
                'id'    => 20,
                'title' => 'article_category_create',
            ],
            [
                'id'    => 21,
                'title' => 'article_category_edit',
            ],
            [
                'id'    => 22,
                'title' => 'article_category_show',
            ],
            [
                'id'    => 23,
                'title' => 'article_category_delete',
            ],
            [
                'id'    => 24,
                'title' => 'article_category_access',
            ],
            [
                'id'    => 25,
                'title' => 'article_tag_create',
            ],
            [
                'id'    => 26,
                'title' => 'article_tag_edit',
            ],
            [
                'id'    => 27,
                'title' => 'article_tag_show',
            ],
            [
                'id'    => 28,
                'title' => 'article_tag_delete',
            ],
            [
                'id'    => 29,
                'title' => 'article_tag_access',
            ],
            [
                'id'    => 30,
                'title' => 'post_create',
            ],
            [
                'id'    => 31,
                'title' => 'post_edit',
            ],
            [
                'id'    => 32,
                'title' => 'post_show',
            ],
            [
                'id'    => 33,
                'title' => 'post_delete',
            ],
            [
                'id'    => 34,
                'title' => 'post_access',
            ],
            [
                'id'    => 188,
                'title' => 'team_create',
            ],
            [
                'id'    => 189,
                'title' => 'team_edit',
            ],
            [
                'id'    => 190,
                'title' => 'team_show',
            ],
            [
                'id'    => 191,
                'title' => 'team_delete',
            ],
            [
                'id'    => 192,
                'title' => 'team_access',
            ],
            [
                'id'    => 193,
                'title' => 'aduan_create',
            ],
            [
                'id'    => 194,
                'title' => 'aduan_edit',
            ],
            [
                'id'    => 195,
                'title' => 'aduan_show',
            ],
            [
                'id'    => 196,
                'title' => 'aduan_delete',
            ],
            [
                'id'    => 197,
                'title' => 'aduan_access',
            ],
            [
                'id'    => 198,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
