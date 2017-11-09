<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
      DB::table('users')->insert([
        'name' => 'Gru',
        'email' => 'gru@vmail.com',
        'password' => bcrypt('ilovelucy'),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('users')->insert([
        'name' => 'Bob',
        'email' => 'bob@vmail.com',
        'password' => bcrypt('banana'),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('users')->insert([
        'name' => 'Kevin',
        'email' => 'kevin@vmail.com',
        'password' => bcrypt('banana'),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('users')->insert([
        'name' => 'Stuart',
        'email' => 'stuart@vmail.com',
        'password' => bcrypt('banana'),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('users')->insert([
        'name' => 'Scarlet Overkill',
        'email' => 'scarlet@vmail.com',
        'password' => bcrypt('youllpayforthat'),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('users')->insert([
        'name' => 'Darth Maul',
        'email' => 'dmaul@sith.org',
        'password' => bcrypt('darkside'),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

    }
}
