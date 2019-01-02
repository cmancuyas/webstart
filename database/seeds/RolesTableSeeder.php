<?php

use Illuminate\Database\Seeder;
use App\Model\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    Role::create([
        'name' => 'super-admin',
        'description' => 'Super Admin - God Mode'

    ]);

    Role::create([
        'name' => 'admin',
        'description' => 'Administrator'

        ]);

    Role::create([
        'name' => 'user',
        'description' => 'Normal User'

        ]);
    }

}
