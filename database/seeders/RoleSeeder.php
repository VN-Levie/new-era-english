<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['name' => 'admin', 'label' => 'Quản trị viên'],
            ['name' => 'manager', 'label' => 'Quản lý'],
            ['name' => 'teacher', 'label' => 'Giáo viên'],
            ['name' => 'parent', 'label' => 'Phụ huynh'],
            ['name' => 'student', 'label' => 'Học sinh'],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(['name' => $role['name']], ['label' => $role['label']]);
        }
    }
}
