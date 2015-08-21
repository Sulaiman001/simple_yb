<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = array(
            ['id' => 1, 'role' => 'admin', 'email' => 'a@a.com', 'password' => bcrypt('a'), 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'role' => 'admin', 'email' => 'c@c.com','password' => bcrypt('c'), 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'role' => 'user', 'email' => 'b@b.com','password' => bcrypt('b'), 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
}
