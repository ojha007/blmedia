<?php

namespace Modules\Auth\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        foreach ($this->getAllPermissions() as $permission) {
            foreach ($this->getAllPermissionTypes() as $type) {
                Permission::firstOrCreate(
                    [
                        'name' => $permission . '-' . $type,
                        'guard_name' => 'web'
                    ]);
            }
        }
        $role = Role::firstOrCreate(['name' => 'Administrator', 'guard_name' => 'web']);
        $permissions = Permission::where('guard_name', 'web')->get();
        $role->syncPermissions($permissions);

    }

    public function getAllPermissions()
    {
        return [
            'news',
            'news-category',
            'gallery',
            'advertisement',
            'setting',
            'role',
        ];
    }

    public function getAllPermissionTypes()
    {
        return [
            'view',
            'edit',
            'create',
            'delete',
        ];
    }
}
