<?php

use Illuminate\Database\Seeder;

class MerchantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchant_categories')->insert([
                [
                    'name' => "موبايلات",
                    'name' => "mob",
                    'status' => true,
                ],
                [
                    'name' => "بلاي ستيشن",
                    'name' => "ply",
                    'status' => true,
                ],
                [
                    'name' => "صيدلية",
                    'name' => "drug",
                    'status' => true,
                ],
                [
                    'name' => "ماركت",
                    'name' => "mrkt",
                    'status' => true,
                ]
            ]
        );

        DB::table('merchant_contracts')->insert([
            'name' => "Mahmoud Khalil",
            'email' => "m5lil@live.com",
            'image' => "asd.png",
            'phone' => "01023023336",
            'bd' => "2018-02-20",
            'status' => 1,
            'is_reseller' => 1,
            'parent_id' => 1,
            'nationality_id' => "123456789123456",
            'id_image_f' => "asd.png",
            'id_image_b' => "asd.png",
            'merchant_category_id' => 1,
            'area_id' => 1,
            'address' => "Luxor",
            'created_at' => '2018-02-20 00:00:00',
            'updated_at' => '2018-02-26 14:54:45',
            'deleted_at' => NULL,
        ]);
        DB::table('wallets')->insert([
            'wallet_type' => 2,
            'store_name' => "Tala Store",
            'model_id' => 1,
            'model_type' => 'App\Staff\Merchant',
            'balance' => 120,
            'created_at' => '2018-02-20 00:00:00',
            'updated_at' => '2018-02-26 14:54:45',
        ]);

        DB::table('merchants')->insert([
            'name' => "Mahmoud Khalil (Merchant)",
            'email' => "m5lil@live.com",
            'phone' => "01204560756",
            'username' => "123",
            'password' => bcrypt('123123123'),
            'status' => 1,
            'merchant_contract_id' => 1,
            'wallet_id' => 1111,
            'change_password' => 1,
            'language_key' => "ar",
            'verified_at' => NULL,
            'last_login_at' => NULL,
            'last_login_ip' => "192.168.1.23",
            'created_at' => '2018-02-20 00:00:00',
            'updated_at' => '2018-02-26 14:54:45',
            'remember_token' => 'bAMpxI0NOKiDhgHAxFL1OSFAfou5s7jHbMOHmJ6p39Y6DqfPNdsbvxJ2SMlt',
        ]);

    }
}
