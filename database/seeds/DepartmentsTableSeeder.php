<?php

use Illuminate\Database\Seeder;
use app\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Accounting',
            'description' => 'CCD/Accounting',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),

        ]);
        DB::table('departments')->insert([
            'name' => 'Audit',
            'description' => 'Audit',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'BDD',
            'description' => 'Brand Development Department',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'BLTB',
            'description' => 'Better Living Table and Baths',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'Cebu Clients/Feeds',
            'description' => 'Cebu Clients/Feeds',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'COHACO',
            'description' => 'COHACO',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'Dealer',
            'description' => 'Dealer',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'DIY 1',
            'description' => 'DIY 1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'DIY 2',
            'description' => 'DIY 2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'DIY 3',
            'description' => 'DIY 3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'Engineering/Admin',
            'description' => 'Engineering/Admin',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'HIS',
            'description' => 'HIS',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'Human Resources',
            'description' => 'Human Resources',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'Import',
            'description' => 'Import',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'LNS',
            'description' => 'LNS',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'Logistics',
            'description' => 'Logistics',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'Marketing',
            'description' => 'Marketing',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'Motorpool',
            'description' => 'Motorpool',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'PDD',
            'description' => 'Product Development Department',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'Project 1',
            'description' => 'Project 1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'Project 2',
            'description' => 'Project 2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'Project 3',
            'description' => 'Project 3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'Purchasing',
            'description' => 'Purchasing',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('departments')->insert([
            'name' => 'SMIT',
            'description' => 'Systems Management and Information Technology',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),

        ]);

        DB::table('departments')->insert([
            'name' => 'Top Management',
            'description' => 'Top Management',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

    }
}
