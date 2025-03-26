<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['name' => 'user.manage',          'description' => 'Quản lý người dùng'],
            ['name' => 'role.manage',          'description' => 'Gán/phân quyền người dùng'],
            ['name' => 'score.view.any',       'description' => 'Xem điểm tất cả học sinh'],
            ['name' => 'score.edit.any',       'description' => 'Sửa điểm tất cả học sinh'],
            ['name' => 'score.view.class',     'description' => 'Xem điểm học sinh lớp mình'],
            ['name' => 'score.edit.student',   'description' => 'Sửa điểm học sinh lớp mình'],
            ['name' => 'score.view.children',  'description' => 'Xem điểm học sinh là con'],
            ['name' => 'score.view.own',       'description' => 'Xem điểm bản thân'],
            ['name' => 'class.manage',         'description' => 'Quản lý lớp học'],
            ['name' => 'student.manage',       'description' => 'Quản lý học sinh'],
            ['name' => 'teacher.manage',       'description' => 'Quản lý giáo viên'],
            ['name' => 'post.create',         'description' => 'Đăng bài viết'],
            ['name' => 'contact.view',        'description' => 'Xem thông tin từ form liên hệ'],
            ['name' => 'faq.manage',          'description' => 'Sửa đổi FAQ'],
        ];

        foreach ($permissions as $perm) {
            Permission::updateOrCreate(['name' => $perm['name']], ['description' => $perm['description']]);
        }
    }
}
