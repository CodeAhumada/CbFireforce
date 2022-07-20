<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        User::factory(99)->create();

        $Role3 = Role::Create(['name' => 'Admin']);
        $Role2 = Role::Create(['name' => 'User2']);
        $Role1 = Role::Create(['name' => 'User1']);

        Permission::create(['name' => 'carros.index'])->syncRoles($Role3, $Role2, $Role1);
        Permission::create(['name' => 'carros.show'])->syncRoles($Role3, $Role2, $Role1);
        Permission::create(['name' => 'carros.update'])->syncRoles($Role3, $Role2);
        Permission::create(['name' => 'carros.store2'])->syncRoles($Role3, $Role2);

        Permission::create(['name' => 'carros.destroy'])->syncRoles($Role3);
        Permission::create(['name' => 'carros.create'])->syncRoles($Role3);
        Permission::create(['name' => 'admin.users.index'])->syncRoles($Role3);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles($Role3);
        Permission::create(['name' => 'admin.users.update'])->syncRoles($Role3);

        User::create([
            'name' => 'Soul',
            'email' => 'CodeAhumada@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');
        User::create([
            'name' => 'Souluser2',
            'email' => 'CodeAhumada2@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('User2');

        User::create([
            'name' => 'SoulUser1',
            'email' => 'CodeAhumada3@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('User1');
    }
}
