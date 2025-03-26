<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolePermissions = [
            'admin' => [
                'user.manage',
                'role.manage',
                'score.view.any',
                'score.edit.any',
                'student.manage',
                'teacher.manage',
                'class.manage',
                'post.manage',
                'contact.manage',
                'faq.manage',
            ],
            'manager' => [
                'score.view.any',
                'score.edit.any',
                'student.manage',
                'teacher.manage',
                'class.manage',
                'post.manage',
                'faq.manage',
            ],
            'teacher' => [
                'score.view.class',
                'score.edit.student',
                'contact.manage',
            ],
            'parent' => [
                'score.view.children',
            ],
            'student' => [
                'score.view.own',
            ],
        ];

        foreach ($rolePermissions as $roleName => $perms) {
            $role = Role::where('name', $roleName)->first();
            if (!$role) continue;

            $permissionIds = Permission::whereIn('name', $perms)->pluck('id')->toArray();
            $role->permissions()->sync($permissionIds);
        }
    }
}
