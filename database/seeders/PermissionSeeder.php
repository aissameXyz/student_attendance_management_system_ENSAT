<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use DB;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app() [\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        // create permissions
        $permissions = [
        'user_management_access',
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
        'admin_delete',
        ];

        $permissionsi = collect($permissions)->map(function ($permission) {
            return ['name' => $permission, 'guard_name' => 'web'];
        });
    
        Permission::insert($permissionsi->toArray());

//         foreach ($permissions as $permission){
//             Permission::create(['name' => $permission]);
            
//    } 

        // $permissions = collect($permissions)->map(function ($permission) {
        //     return ['name' => $permission, 'guard_name' => 'web'];
        // });
    
        // Permission::insert($permissions->toArray());


    // $permissionsByRole = [
    //     'admin' => $permissions,
    //     'teacher' => $permissions,
    //     'student' => ['module_show','student_show','teacher_show']
    // ];

    // foreach ($permissionIdsByRole as $role => $permissionIds) {
    //     $role = Role::whereName($role)->first();
    
    //     DB::table('role_has_permissions')
    //         ->insert(
    //             collect($permissionIds)->map(fn ($id) => [
    //                 'role_id' => $role->id,
    //                 'permission_id' => $id
    //             ])->toArray()
    //         );
    // }

    }
}
