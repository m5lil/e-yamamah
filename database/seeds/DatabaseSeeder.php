<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(SettingsTableseeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(AreaTableSeeder::class);
        $this->call(MerchantsTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(TicketsSeeder::class);

        DB::table('staff')->insert([
            'name' => "Mahmoud Khalil",
            'email' => "m5lil@live.com",
            'username' => "123",
            'password' => bcrypt('123123123'),
            'group_id' => 1,
            'last_login_at' => NULL,
            'last_login_ip' => "192.168.1.23",
            'created_at' => '2018-02-20 00:00:00',
            'email_verified_at' => '2018-02-26 14:54:45',
            'updated_at' => '2018-02-26 14:54:45',
            'remember_token' => 'bAMpxI0NOKiDhgHAxFL1OSFAfou5s7jHbMOHmJ6p39Y6DqfPNdsbvxJ2SMlt',
        ]);


    }
}
