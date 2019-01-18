<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sdks')->insert([
            'id' => 1,
            'adapter_name' => 'App\Libs\Adapters\Abdeen',
            'name' => 'Abdeen',
            'created_at' => '2018-11-12 20:02:25',
            'updated_at' => '2018-11-12 20:02:25',
        ]);

        DB::table('outputs')->insert([
            'id' => 1,
            'name' => 'Hawa',
            'parameters' => '{"Code", "Time", "Mobile"}',
            'created_at' => '2018-11-12 20:02:25',
            'updated_at' => '2018-11-12 20:02:25',
        ]);


        DB::table('service_provider_categories')->insert([
            [
                'id' => 1,
                'name' => '{"ar": "شحن عالهوا", "en": "Air Charge"}',
                'icon' => 'air_charge.png',
                'status' => true,
                'order' => 1,
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],
        ]);

        DB::table('service_providers')->insert([
            [
                'id' => 1,
                'name' => '{"ar": "فودافون", "en": "Vodafone"}',
                'icon' => 'vodafone.png',
                'status' => true,
                'order' => 1,
                'service_provider_category_id' => 1,
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],
            [
                'id' => 2,
                'name' => '{"ar": "اتصالات", "en": "Etisalat"}',
                'icon' => 'etisalat.png',
                'status' => true,
                'order' => 3,
                'service_provider_category_id' => 1,
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],
            [
                'id' => 3,
                'name' => '{"ar": "أورانج", "en": "Orange"}',
                'icon' => 'orange.png',
                'status' => true,
                'order' => 3,
                'service_provider_category_id' => 1,
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],
            [
                'id' => 4,
                'name' => '{"ar": "المصرية", "en": "We"}',
                'icon' => 'we.png',
                'status' => true,
                'order' => 4,
                'service_provider_category_id' => 1,
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],
            [
                'id' => 5,
                'name' => '{"ar": "كروت شحن", "en": "Coupons"}',
                'icon' => 'coupons.png',
                'status' => true,
                'order' => 1,
                'service_provider_category_id' => 0,
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],

        ]);

        DB::table('commissions')->insert([
            [
                'id' => 1,
                'name' => '{"ar": "شحن هوا", "en": "hawa abdeen"}',
                'commission_multi' => false,
                'percentage' => true,
                'amount' => 0.982,
                'system' => 0.182,
                'condition_data' => '{"reseller": 0.182, "mob": 0.25 , "ply": 0.2 , "drug": 0.3 , "mrkt": 0.3}',
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],
            [
                'id' => 2,
                'name' => '{"ar": "كروت", "en": "coupons"}',
                'commission_multi' => false,
                'percentage' => true,
                'amount' => 0.982,
                'system' => 0.182,
                'condition_data' => '{"reseller": 0.182, "mob": 0.25 , "ply": 0.2 , "drug": 0.3 , "mrkt": 0.3}',
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],
        ]);

        DB::table('services')->insert([
            [
                'id' => 1,
                'sdk_id' => 1,
                'service_provider_id' => 1,
                'commission_id' => 1,
                'output_id' => 1,
                'name' => '{"ar": "فودافون هوا", "en": "vodafone Hawa"}',
                'request_amount' => true,
                'status' => true,
                'icon' => 'vodafone.png',
                'order' => 1,
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],
            [
                'id' => 2,
                'sdk_id' => 1,
                'service_provider_id' => 1,
                'commission_id' => 3,
                'output_id' => 3,
                'name' => '{"ar": "فودافون مارد ٥", "en": "vodafone Mared 5"}',
                'request_amount' => true,
                'status' => true,
                'icon' => 'vodafone.png',
                'order' => 2,
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],
            [
                'id' => 3,
                'sdk_id' => 1,
                'service_provider_id' => 2,
                'commission_id' => 1,
                'output_id' => 1,
                'name' => '{"ar": "اتصالات هوا", "en": "Etisalat Hawa"}',
                'request_amount' => true,
                'status' => true,
                'icon' => 'etisalat.png',
                'order' => 1,
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],
            [
                'id' => 4,
                'sdk_id' => 1,
                'service_provider_id' => 5,
                'commission_id' => 1,
                'output_id' => 1,
                'name' => '{"ar": "فودافون", "en": "Vodafone"}',
                'request_amount' => true,
                'status' => true,
                'icon' => 'etisalat.png',
                'order' => 1,
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],
            [
                'id' => 5,
                'sdk_id' => 1,
                'service_provider_id' => 5,
                'commission_id' => 1,
                'output_id' => 1,
                'name' => '{"ar": "اتصالات", "en": "Etisalat"}',
                'request_amount' => true,
                'status' => true,
                'icon' => 'etisalat.png',
                'order' => 1,
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],
            [
                'id' => 6,
                'sdk_id' => 1,
                'service_provider_id' => 5,
                'commission_id' => 1,
                'output_id' => 1,
                'name' => '{"ar": "أورانج", "en": "Orange"}',
                'request_amount' => true,
                'status' => true,
                'icon' => 'etisalat.png',
                'order' => 1,
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],
            [
                'id' => 7,
                'sdk_id' => 1,
                'service_provider_id' => 5,
                'commission_id' => 1,
                'output_id' => 1,
                'name' => '{"ar": "المصرية", "en": "We"}',
                'request_amount' => true,
                'status' => true,
                'icon' => 'etisalat.png',
                'order' => 1,
                'created_at' => '2018-11-12 20:02:25',
                'updated_at' => '2018-11-12 20:02:25',
            ],
        ]);

        DB::table('service_apis')->insert([
            [
                'id' => 1,
                'service_id' => 1,
                'sdk_id' => 1,
                'external_key' => 'SRV',
                'service_type' => 'payment',
                'value' => 'Vodafone Hawa',
                'price_type' => 0,
                'service_value' => 0.5,
                'service_value_list' => '',
                'min_value' => 5.0,
                'max_value' => 500.0,
                'commission' => true,
                'commission_type' => 'percent',
                'commission_value' => 1.4286,
                'created_at' => '2018-11-01 10:03:54',
                'updated_at' => '2018-11-01 10:03:54',
            ],
        ]);

        DB::table('service_api_parameters')->insert([
            [
                'id' => 1,
                'service_api_id' => 1,
                'external_api_id' => 'MOB',
                'name' => '{"ar": "رقم العميل", "en": "Customer Number"}',
                'order' => 1,
                'visible' => true,
                'required' => true,
                'type' => 'N',
                'default_value' => '010',
                'min_length' => 10,
                'max_length' => 11,
                'created_at' => '2018-11-01 10:03:55',
                'updated_at' => '2018-11-01 10:03:55',
            ],
            [
                'id' => 2,
                'service_api_id' => 1,
                'external_api_id' => 'VSA',
                'name' => '{"ar": "المبلغ", "en": "Amount"}',
                'order' => 2,
                'visible' => true,
                'required' => true,
                'type' => 'N',
                'default_value' => '5',
                'min_length' => 1,
                'max_length' => 3,
                'created_at' => '2018-11-01 10:03:55',
                'updated_at' => '2018-11-01 10:03:55',
            ],
            [
                'id' => 3,
                'service_api_id' => 1,
                'external_api_id' => 'cType',
                'name' => '{"ar": "النوع", "en": "Charge Type"}',
                'order' => 2,
                'visible' => false,
                'required' => true,
                'type' => 'N',
                'default_value' => 0,
                'min_length' => 1,
                'max_length' => 1,
                'created_at' => '2018-11-01 10:03:55',
                'updated_at' => '2018-11-01 10:03:55',
            ],
        ]);


    }
}
