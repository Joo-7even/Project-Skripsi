<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $permissions = [
            'view_dashboard',
            'view_upload',
            'upload_skripsi',
            'edit_skripsi',
            'delete_skripsi',
            'user_management',
            'roles',
        ];
        
        
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
        
         
         // Create roles
         $superadminRole = Role::create(['name' => 'superadmin']);
         $adminRole = Role::create(['name' => 'user']);
 
         // Assign permissions to roles
         $superadminRole->givePermissionTo(['view_dashboard', 'view_upload', 'edit_skripsi', 'delete_skripsi', 'user_management', 'roles', 'upload_skripsi']);
         $adminRole->givePermissionTo(['view_dashboard','view_upload','upload_skripsi']);


        Role::where('name', 'superadmin')->first()->givePermissionTo([
            'view_dashboard',
            'view_upload',
            'upload_skripsi',
            'edit_skripsi',
            'delete_skripsi',
            'user_management',
            'roles'
        ]);
        

        $role = Role::all();
        foreach ($role as $r) {
            if ($r->name == 'admin1') {
                $r->givePermissionTo(['view_dashboard','view_upload','upload_skripsi']);
            } elseif ($r->name == 'admin2') {
                $r->givePermissionTo(['view_dashboard','view_upload','upload_skripsi']);
            }
        }
        $user = User::where('role', 'superadmin')->first();
        $user->assignRole('superadmin');
    }
}
