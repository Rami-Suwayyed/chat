<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        foreach(config('project.admin.roles') as $role) {
            Role::firstOrCreate([
                "guard_name" => "admin",
                "name" => $role
            ]);
        }

        $admins = [
            [
                "role" => "administrator",
                "name" => "algorithm",
                "email" => "Swead96@gmail.com",
                "password" => "password"
            ],
            [
                "role" => "moderator",
                "name" => "Rami",
                "email" => "Rami.Suwayyed@gmail.com",
                "password" => "password"
            ]
        ];

        foreach($admins as $admin) {
            $exist = Admin::where("email", $admin["email"])->first();

            if (empty($exist)) {
                $super_admin = Admin::firstOrCreate([
                    "name" => $admin["name"],
                    "email" => $admin["email"],
                    "password" => bcrypt($admin["password"])
                ]);
                $super_admin->assignRole($admin["role"]);
            }
        }
    }
}
