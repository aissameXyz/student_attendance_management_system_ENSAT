<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_adm = Role::create(['name' => 'admin']);
        $role_wri = Role::create(['name' => 'writer']);
        $role_usr = Role::create(['name' => 'user']);
        $role_std = Role::create(['name' => 'student']);
        $role_tch = Role::create(['name' => 'teacher']);


    //         $permissionsByRole = [
    //     'admin' => [
    //         'user_management_access',
    //         'permission_create',
    //         'permission_edit',
    //         'permission_show',
    //         'permission_delete',
    //         'permission_access',
    //         'role_create',
    //         'role_edit',
    //         'role_show',
    //         'role_delete',
    //         'role_access',
    //         'student_create',
    //         'student_edit',
    //         'student_show',
    //         'student_delete',
    //         'student_access',
    //         'student_unenroll',
    //         'student_enroll',
    //         'teacher_create',
    //         'teacher_edit',
    //         'teacher_show',
    //         'teacher_delete',
    //         'teacher_access',
    //         'module_create',
    //         'module_edit',
    //         'module_show',
    //         'module_delete',
    //         'module_access',
    //         'admin_create',
    //         'admin_delete',
    //         ],
    //     'teacher' => [
    //         'user_management_access',
    //         'permission_create',
    //         'permission_edit',
    //         'permission_show',
    //         'permission_delete',
    //         'permission_access',
    //         'role_create',
    //         'role_edit',
    //         'role_show',
    //         'role_delete',
    //         'role_access',
    //         'student_create',
    //         'student_edit',
    //         'student_show',
    //         'student_delete',
    //         'student_access',
    //         'student_unenroll',
    //         'student_enroll',
    //         'teacher_create',
    //         'teacher_edit',
    //         'teacher_show',
    //         'teacher_delete',
    //         'teacher_access',
    //         'module_create',
    //         'module_edit',
    //         'module_show',
    //         'module_delete',
    //         'module_access',
    //         'admin_create',
    //         'admin_delete',
    //         ],
    //     'student' => ['module_show','student_show','teacher_show']
    // ];

    $role_adm->givePermissionTo(['user_management_access',
    'permission_create',
    'permission_edit',
    'permission_show',
    'permission_delete',
    'permission_access',
    'role_create',
    'role_edit',
    'role_show',
    'role_delete',
    'role_access',
    'student_create',
    'student_edit',
    'student_show',
    'student_delete',
    'student_access',
    'student_unenroll',
    'student_enroll',
    'teacher_create',
    'teacher_edit',
    'teacher_show',
    'teacher_delete',
    'teacher_access',
    'module_create',
    'module_edit',
    'module_show',
    'module_delete',
    'module_access',
    'admin_create',
    'admin_delete']);
    $role_std->givePermissionTo(['module_show','student_show','teacher_show']);
    $role_tch->givePermissionTo(['user_management_access',
    'permission_create',
    'permission_edit',
    'permission_show',
    'permission_delete',
    'permission_access',
    'role_create',
    'role_edit',
    'role_show',
    'role_delete',
    'role_access',
    'student_create',
    'student_edit',
    'student_show',
    'student_delete',
    'student_access',
    'student_unenroll',
    'student_enroll',
    'teacher_create',
    'teacher_edit',
    'teacher_show',
    'teacher_delete',
    'teacher_access',
    'module_create',
    'module_edit',
    'module_show',
    'module_delete',
    'module_access',
    'admin_create',
    'admin_delete']);
    $role_usr->givePermissionTo(['module_show','student_show','teacher_show']);
    $role_wri->givePermissionTo(['user_management_access',
    'permission_create',
    'permission_edit',
    'permission_show',
    'permission_delete',
    'permission_access',
    'role_create',
    'role_edit',
    'role_show',
    'role_delete',
    'role_access',
    'student_create',
    'student_edit',
    'student_show',
    'student_delete',
    'student_access',
    'student_unenroll',
    'student_enroll',
    'teacher_create',
    'teacher_edit',
    'teacher_show',
    'teacher_delete',
    'teacher_access',
    'module_create',
    'module_edit',
    'module_show',
    'module_delete',
    'module_access',
    'admin_create',
    'admin_delete']);
    }
}
