<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    protected $roles = [
        [
            'name' => 'admin',
            'guard_name' => 'web'
        ],
        [
            'name' => 'service',
            'guard_name' => 'web',
        ],
        [
            'name' => 'agent',
            'guard_name' => 'web'
        ],
        [
            'name' => 'guarantee',
            'guard_name' => 'web'
        ],
        [
            'name' => 'lessee',
            'guard_name' => 'web'
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert($this->roles);
    }
}
