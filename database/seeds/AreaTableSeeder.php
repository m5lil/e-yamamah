<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            0 =>
                array (
                    'id' => 1,
                    'area_type' => 1,
                    'name' => 'مصر',
                    'parent_id' => 0,
                    'created_at' => '2018-09-16 10:57:03',
                    'updated_at' => '2018-09-16 10:57:03',
                ),
            1 =>
                array (
                    'id' => 2,
                    'area_type' => 2,
                    'name' => 'القاهرة الكبري',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            2 =>
                array (
                    'id' => 3,
                    'area_type' => 2,
                    'name' => 'القاهرة الجديدة',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            3 =>
                array (
                    'id' => 4,
                    'area_type' => 2,
                    'name' => 'الاسكندرية',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            4 =>
                array (
                    'id' => 5,
                    'area_type' => 2,
                    'name' => 'الساحل الشمالي',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            5 =>
                array (
                    'id' => 6,
                    'area_type' => 2,
                    'name' => 'مرسي مطروح',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            6 =>
                array (
                    'id' => 7,
                    'area_type' => 2,
                    'name' => 'شمال سيناء',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            7 =>
                array (
                    'id' => 8,
                    'area_type' => 2,
                    'name' => 'جنوب سيناء',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            8 =>
                array (
                    'id' => 9,
                    'area_type' => 2,
                    'name' => 'البحر الاحمر',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            9 =>
                array (
                    'id' => 10,
                    'area_type' => 2,
                    'name' => 'العين السخنة',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            10 =>
                array (
                    'id' => 11,
                    'area_type' => 2,
                    'name' => 'السويس',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            11 =>
                array (
                    'id' => 12,
                    'area_type' => 2,
                    'name' => 'القليوبية - بنها',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            12 =>
                array (
                    'id' => 13,
                    'area_type' => 2,
                    'name' => 'دمياط',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            13 =>
                array (
                    'id' => 14,
                    'area_type' => 2,
                    'name' => 'كفر الشيخ',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            14 =>
                array (
                    'id' => 15,
                    'area_type' => 2,
                    'name' => 'الاسماعيلية',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            15 =>
                array (
                    'id' => 16,
                    'area_type' => 2,
                    'name' => 'الدقهلية - المنصورة',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            16 =>
                array (
                    'id' => 17,
                    'area_type' => 2,
                    'name' => 'الشرقية - الزقازيق',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            17 =>
                array (
                    'id' => 18,
                    'area_type' => 2,
                    'name' => 'الغربية - طنطا',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            18 =>
                array (
                    'id' => 19,
                    'area_type' => 2,
                    'name' => 'الفيوم',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            19 =>
                array (
                    'id' => 20,
                    'area_type' => 2,
                    'name' => 'المنوفية - شبين الكوم',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            20 =>
                array (
                    'id' => 21,
                    'area_type' => 2,
                    'name' => 'بورسعيد',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            21 =>
                array (
                    'id' => 22,
                    'area_type' => 2,
                    'name' => 'البحيرة - دمنهور',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            22 =>
                array (
                    'id' => 23,
                    'area_type' => 2,
                    'name' => 'بني سويف',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            23 =>
                array (
                    'id' => 24,
                    'area_type' => 2,
                    'name' => 'المنيا',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            24 =>
                array (
                    'id' => 25,
                    'area_type' => 2,
                    'name' => 'اسيوط',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            25 =>
                array (
                    'id' => 26,
                    'area_type' => 2,
                    'name' => 'سوهاج',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            26 =>
                array (
                    'id' => 27,
                    'area_type' => 2,
                    'name' => 'قنا',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            27 =>
                array (
                    'id' => 28,
                    'area_type' => 2,
                    'name' => 'اسوان',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            28 =>
                array (
                    'id' => 29,
                    'area_type' => 2,
                    'name' => 'الاقصر',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            29 =>
                array (
                    'id' => 30,
                    'area_type' => 2,
                    'name' => 'الوادي الجديد',
                    'parent_id' => 1,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            30 =>
                array (
                    'id' => 32,
                    'area_type' => 3,
                    'name' => 'مدينة نصر',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            31 =>
                array (
                    'id' => 33,
                    'area_type' => 3,
                    'name' => 'مصر الجديدة',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            32 =>
                array (
                    'id' => 34,
                    'area_type' => 3,
                    'name' => '6 اكتوبر',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            33 =>
                array (
                    'id' => 35,
                    'area_type' => 3,
                    'name' => 'الشيخ زايد',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            34 =>
                array (
                    'id' => 36,
                    'area_type' => 3,
                    'name' => 'مدينة العبور',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            35 =>
                array (
                    'id' => 37,
                    'area_type' => 3,
                    'name' => 'مدينة الشروق',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            36 =>
                array (
                    'id' => 38,
                    'area_type' => 3,
                    'name' => 'مدينة بدر',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            37 =>
                array (
                    'id' => 39,
                    'area_type' => 3,
                    'name' => 'مدينة السلام',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            38 =>
                array (
                    'id' => 40,
                    'area_type' => 3,
                    'name' => 'مدينة العاشر من رمضان',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            39 =>
                array (
                    'id' => 41,
                    'area_type' => 3,
                    'name' => 'الزيتون',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            40 =>
                array (
                    'id' => 42,
                    'area_type' => 3,
                    'name' => 'عين شمس',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            41 =>
                array (
                    'id' => 43,
                    'area_type' => 3,
                    'name' => 'المطارية',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            42 =>
                array (
                    'id' => 44,
                    'area_type' => 3,
                    'name' => 'المرج',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            43 =>
                array (
                    'id' => 45,
                    'area_type' => 3,
                    'name' => 'العباسية',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            44 =>
                array (
                    'id' => 46,
                    'area_type' => 3,
                    'name' => 'وسط البلد',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            45 =>
                array (
                    'id' => 47,
                    'area_type' => 3,
                    'name' => 'جاردن سيتي',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            46 =>
                array (
                    'id' => 48,
                    'area_type' => 3,
                    'name' => 'منيل الروضة',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            47 =>
                array (
                    'id' => 49,
                    'area_type' => 3,
                    'name' => 'مصر القديمة',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            48 =>
                array (
                    'id' => 50,
                    'area_type' => 3,
                    'name' => 'القصر العيني',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            49 =>
                array (
                    'id' => 51,
                    'area_type' => 3,
                    'name' => 'المعادي',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            50 =>
                array (
                    'id' => 52,
                    'area_type' => 3,
                    'name' => 'دار السلام',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            51 =>
                array (
                    'id' => 53,
                    'area_type' => 3,
                    'name' => 'البساتين',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            52 =>
                array (
                    'id' => 54,
                    'area_type' => 3,
                    'name' => 'حلوان',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            53 =>
                array (
                    'id' => 55,
                    'area_type' => 3,
                    'name' => '15 مايو',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            54 =>
                array (
                    'id' => 56,
                    'area_type' => 3,
                    'name' => 'المقطم',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            55 =>
                array (
                    'id' => 57,
                    'area_type' => 3,
                    'name' => 'الدقي',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            56 =>
                array (
                    'id' => 58,
                    'area_type' => 3,
                    'name' => 'العجوزة',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            57 =>
                array (
                    'id' => 59,
                    'area_type' => 3,
                    'name' => 'المهندسين',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            58 =>
                array (
                    'id' => 60,
                    'area_type' => 3,
                    'name' => 'الزمالك',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            59 =>
                array (
                    'id' => 61,
                    'area_type' => 3,
                    'name' => 'ارض اللواء',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            60 =>
                array (
                    'id' => 62,
                    'area_type' => 3,
                    'name' => 'امبابة',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            61 =>
                array (
                    'id' => 63,
                    'area_type' => 3,
                    'name' => 'الهرم',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            62 =>
                array (
                    'id' => 64,
                    'area_type' => 3,
                    'name' => 'فيصل',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            63 =>
                array (
                    'id' => 65,
                    'area_type' => 3,
                    'name' => 'شبرا',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            64 =>
                array (
                    'id' => 66,
                    'area_type' => 3,
                    'name' => 'العمرانية',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            65 =>
                array (
                    'id' => 67,
                    'area_type' => 3,
                    'name' => 'بولاق',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            66 =>
                array (
                    'id' => 68,
                    'area_type' => 3,
                    'name' => 'الشرابية',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            67 =>
                array (
                    'id' => 69,
                    'area_type' => 3,
                    'name' => 'الزاوية الحمراء',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            68 =>
                array (
                    'id' => 70,
                    'area_type' => 3,
                    'name' => 'طريق مصر الاسكندرية الصحراوي',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            69 =>
                array (
                    'id' => 71,
                    'area_type' => 3,
                    'name' => 'طريق مصر السويس الصحراوي',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            70 =>
                array (
                    'id' => 72,
                    'area_type' => 3,
                    'name' => 'طريق مصر الاسماعيلية الصحراوي',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            71 =>
                array (
                    'id' => 73,
                    'area_type' => 3,
                    'name' => 'التجمع الخامس',
                    'parent_id' => 3,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            72 =>
                array (
                    'id' => 74,
                    'area_type' => 3,
                    'name' => 'التجمع الاول',
                    'parent_id' => 3,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            73 =>
                array (
                    'id' => 75,
                    'area_type' => 3,
                    'name' => 'التجمع الثالث',
                    'parent_id' => 3,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            74 =>
                array (
                    'id' => 76,
                    'area_type' => 3,
                    'name' => 'الرحاب',
                    'parent_id' => 3,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            75 =>
                array (
                    'id' => 78,
                    'area_type' => 3,
                    'name' => 'مدينتي',
                    'parent_id' => 3,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            76 =>
                array (
                    'id' => 79,
                    'area_type' => 3,
                    'name' => 'كومباوندز',
                    'parent_id' => 3,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            77 =>
                array (
                    'id' => 80,
                    'area_type' => 3,
                    'name' => 'كفر عبده',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            78 =>
                array (
                    'id' => 81,
                    'area_type' => 3,
                    'name' => 'سيدي جابر',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            79 =>
                array (
                    'id' => 82,
                    'area_type' => 3,
                    'name' => 'سيدي بشر',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            80 =>
                array (
                    'id' => 83,
                    'area_type' => 3,
                    'name' => 'ميامي',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            81 =>
                array (
                    'id' => 84,
                    'area_type' => 3,
                    'name' => 'المعمورة',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            82 =>
                array (
                    'id' => 85,
                    'area_type' => 3,
                    'name' => 'جناكليس',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            83 =>
                array (
                    'id' => 86,
                    'area_type' => 3,
                    'name' => 'سان ستيفانو',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            84 =>
                array (
                    'id' => 87,
                    'area_type' => 3,
                    'name' => 'سموحه',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            85 =>
                array (
                    'id' => 88,
                    'area_type' => 3,
                    'name' => 'رشدي',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            86 =>
                array (
                    'id' => 89,
                    'area_type' => 3,
                    'name' => 'فيكتوريا',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            87 =>
                array (
                    'id' => 90,
                    'area_type' => 3,
                    'name' => 'محرم بك',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            88 =>
                array (
                    'id' => 91,
                    'area_type' => 3,
                    'name' => 'سابا باشا',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            89 =>
                array (
                    'id' => 92,
                    'area_type' => 3,
                    'name' => 'كامب شيراز',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            90 =>
                array (
                    'id' => 93,
                    'area_type' => 3,
                    'name' => 'لوران',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            91 =>
                array (
                    'id' => 94,
                    'area_type' => 3,
                    'name' => 'برج العرب',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            92 =>
                array (
                    'id' => 95,
                    'area_type' => 3,
                    'name' => 'الهانوفيل',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            93 =>
                array (
                    'id' => 96,
                    'area_type' => 3,
                    'name' => 'جليم',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            94 =>
                array (
                    'id' => 97,
                    'area_type' => 3,
                    'name' => 'العصافرة',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            95 =>
                array (
                    'id' => 98,
                    'area_type' => 3,
                    'name' => 'البيطاش',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            96 =>
                array (
                    'id' => 99,
                    'area_type' => 3,
                    'name' => 'المندرة',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            97 =>
                array (
                    'id' => 100,
                    'area_type' => 3,
                    'name' => 'ستانلي',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            98 =>
                array (
                    'id' => 101,
                    'area_type' => 3,
                    'name' => 'العامرية',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            99 =>
                array (
                    'id' => 102,
                    'area_type' => 3,
                    'name' => 'بولوكي',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            100 =>
                array (
                    'id' => 103,
                    'area_type' => 3,
                    'name' => 'الابراهيمية',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            101 =>
                array (
                    'id' => 104,
                    'area_type' => 3,
                    'name' => 'زيزينيا',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            102 =>
                array (
                    'id' => 105,
                    'area_type' => 3,
                    'name' => 'كينج ماريوت',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            103 =>
                array (
                    'id' => 106,
                    'area_type' => 3,
                    'name' => 'سبورتينج',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            104 =>
                array (
                    'id' => 107,
                    'area_type' => 3,
                    'name' => 'كليوباترا',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            105 =>
                array (
                    'id' => 108,
                    'area_type' => 3,
                    'name' => '6 اكتوبر - شاطئ النخيل',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            106 =>
                array (
                    'id' => 109,
                    'area_type' => 3,
                    'name' => 'بحري - الانفوشي',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            107 =>
                array (
                    'id' => 110,
                    'area_type' => 3,
                    'name' => 'المنتزة',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            108 =>
                array (
                    'id' => 111,
                    'area_type' => 3,
                    'name' => 'المنشية',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            109 =>
                array (
                    'id' => 112,
                    'area_type' => 3,
                    'name' => 'الشاطبي',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            110 =>
                array (
                    'id' => 113,
                    'area_type' => 3,
                    'name' => 'الحاضرة',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            111 =>
                array (
                    'id' => 114,
                    'area_type' => 3,
                    'name' => 'فلمنج',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            112 =>
                array (
                    'id' => 115,
                    'area_type' => 3,
                    'name' => 'ابو يوسف',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            113 =>
                array (
                    'id' => 116,
                    'area_type' => 3,
                    'name' => 'ابو تلات',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            114 =>
                array (
                    'id' => 117,
                    'area_type' => 3,
                    'name' => 'الدخيلة',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            115 =>
                array (
                    'id' => 118,
                    'area_type' => 3,
                    'name' => 'الطابية',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            116 =>
                array (
                    'id' => 119,
                    'area_type' => 3,
                    'name' => 'الساعه',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            117 =>
                array (
                    'id' => 120,
                    'area_type' => 3,
                    'name' => 'العوايد',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            118 =>
                array (
                    'id' => 121,
                    'area_type' => 3,
                    'name' => 'القباري',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            119 =>
                array (
                    'id' => 122,
                    'area_type' => 3,
                    'name' => 'الماكس',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            120 =>
                array (
                    'id' => 123,
                    'area_type' => 3,
                    'name' => 'كرموز',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            121 =>
                array (
                    'id' => 124,
                    'area_type' => 3,
                    'name' => 'السيوف',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            122 =>
                array (
                    'id' => 125,
                    'area_type' => 3,
                    'name' => 'محطة الرمل',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            123 =>
                array (
                    'id' => 126,
                    'area_type' => 3,
                    'name' => 'ابو قير',
                    'parent_id' => 4,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            124 =>
                array (
                    'id' => 127,
                    'area_type' => 4,
                    'name' => 'غرب سوميد',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            139 =>
                array (
                    'id' => 142,
                    'area_type' => 4,
                    'name' => 'الحي الاول',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            140 =>
                array (
                    'id' => 143,
                    'area_type' => 4,
                    'name' => 'الحي الثاني',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            141 =>
                array (
                    'id' => 144,
                    'area_type' => 4,
                    'name' => 'الحي الثالث',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            142 =>
                array (
                    'id' => 145,
                    'area_type' => 4,
                    'name' => 'الحي الرابع',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            143 =>
                array (
                    'id' => 146,
                    'area_type' => 4,
                    'name' => 'الحي الخامس',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            144 =>
                array (
                    'id' => 147,
                    'area_type' => 4,
                    'name' => 'الحي السادس',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            145 =>
                array (
                    'id' => 148,
                    'area_type' => 4,
                    'name' => 'الحي السابع',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            146 =>
                array (
                    'id' => 149,
                    'area_type' => 4,
                    'name' => 'الحي الثامن',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            147 =>
                array (
                    'id' => 150,
                    'area_type' => 4,
                    'name' => 'الحي التاسع',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            148 =>
                array (
                    'id' => 151,
                    'area_type' => 4,
                    'name' => 'الحي العاشر',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            149 =>
                array (
                    'id' => 152,
                    'area_type' => 4,
                    'name' => 'الحي الحادي عشر',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            150 =>
                array (
                    'id' => 153,
                    'area_type' => 4,
                    'name' => 'الحي الثاني عشر',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            151 =>
                array (
                    'id' => 154,
                    'area_type' => 4,
                    'name' => 'جنوب الاحياء',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            162 =>
                array (
                    'id' => 165,
                    'area_type' => 4,
                    'name' => 'حدائق اكتوبر',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            174 =>
                array (
                    'id' => 177,
                    'area_type' => 4,
                    'name' => 'التوسعات الشمالية',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            178 =>
                array (
                    'id' => 181,
                    'area_type' => 4,
                    'name' => 'الحي المتميز',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            183 =>
                array (
                    'id' => 186,
                    'area_type' => 4,
                    'name' => 'المنطقة الصناعية 1',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            184 =>
                array (
                    'id' => 187,
                    'area_type' => 4,
                    'name' => 'المنطقة الصناعية 2',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            185 =>
                array (
                    'id' => 188,
                    'area_type' => 4,
                    'name' => 'المنطقة الصناعية 3',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            186 =>
                array (
                    'id' => 189,
                    'area_type' => 4,
                    'name' => 'المنطقة الصناعية 4',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            187 =>
                array (
                    'id' => 190,
                    'area_type' => 4,
                    'name' => 'المنطقة الصناعية 5',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            188 =>
                array (
                    'id' => 191,
                    'area_type' => 4,
                    'name' => 'المنطقة الصناعية 6',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            189 =>
                array (
                    'id' => 192,
                    'area_type' => 4,
                    'name' => 'كمبوندز',
                    'parent_id' => 34,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            190 =>
                array (
                    'id' => 193,
                    'area_type' => 4,
                    'name' => 'الحي الاول',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            191 =>
                array (
                    'id' => 194,
                    'area_type' => 4,
                    'name' => 'الحي الثاني',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            192 =>
                array (
                    'id' => 195,
                    'area_type' => 4,
                    'name' => 'الحي الثالث',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            193 =>
                array (
                    'id' => 196,
                    'area_type' => 4,
                    'name' => 'الحي الرابع',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            194 =>
                array (
                    'id' => 197,
                    'area_type' => 4,
                    'name' => 'الحي الخامس',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            195 =>
                array (
                    'id' => 198,
                    'area_type' => 4,
                    'name' => 'الحي السادس',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            196 =>
                array (
                    'id' => 199,
                    'area_type' => 4,
                    'name' => 'الحي السابع',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            197 =>
                array (
                    'id' => 200,
                    'area_type' => 4,
                    'name' => 'الحي الثامن',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            198 =>
                array (
                    'id' => 201,
                    'area_type' => 4,
                    'name' => 'الحي التاسع',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            199 =>
                array (
                    'id' => 202,
                    'area_type' => 4,
                    'name' => 'الحي العاشر',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            200 =>
                array (
                    'id' => 203,
                    'area_type' => 4,
                    'name' => 'الحي الحادي عشر',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            201 =>
                array (
                    'id' => 204,
                    'area_type' => 4,
                    'name' => 'الحي الثاني عشر',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            202 =>
                array (
                    'id' => 205,
                    'area_type' => 4,
                    'name' => 'الحي الثالث عشر',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            203 =>
                array (
                    'id' => 206,
                    'area_type' => 4,
                    'name' => 'الحي الرابع عشر',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            204 =>
                array (
                    'id' => 207,
                    'area_type' => 4,
                    'name' => 'الحي السادس عشر',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            205 =>
                array (
                    'id' => 208,
                    'area_type' => 4,
                    'name' => 'الثورة الخضراء',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            206 =>
                array (
                    'id' => 209,
                    'area_type' => 4,
                    'name' => 'حي الياسمين',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            207 =>
                array (
                    'id' => 210,
                    'area_type' => 4,
                    'name' => 'كمبوندز',
                    'parent_id' => 35,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            208 =>
                array (
                    'id' => 211,
                    'area_type' => 4,
                    'name' => 'الحي الاول',
                    'parent_id' => 36,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            209 =>
                array (
                    'id' => 212,
                    'area_type' => 4,
                    'name' => 'الحي الثاني',
                    'parent_id' => 36,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            210 =>
                array (
                    'id' => 213,
                    'area_type' => 4,
                    'name' => 'الحي الثالث',
                    'parent_id' => 36,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            211 =>
                array (
                    'id' => 214,
                    'area_type' => 4,
                    'name' => 'الحي الرابع',
                    'parent_id' => 36,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            212 =>
                array (
                    'id' => 215,
                    'area_type' => 4,
                    'name' => 'الحي الخامس',
                    'parent_id' => 36,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            213 =>
                array (
                    'id' => 216,
                    'area_type' => 4,
                    'name' => 'الحي السادس',
                    'parent_id' => 36,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            214 =>
                array (
                    'id' => 217,
                    'area_type' => 4,
                    'name' => 'الحي السابع',
                    'parent_id' => 36,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            215 =>
                array (
                    'id' => 218,
                    'area_type' => 4,
                    'name' => 'الحي الثامن',
                    'parent_id' => 36,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            216 =>
                array (
                    'id' => 219,
                    'area_type' => 4,
                    'name' => 'الحي التاسع',
                    'parent_id' => 36,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            217 =>
                array (
                    'id' => 220,
                    'area_type' => 4,
                    'name' => 'جولف سيتي',
                    'parent_id' => 36,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            218 =>
                array (
                    'id' => 221,
                    'area_type' => 4,
                    'name' => 'المناطق الصناعية',
                    'parent_id' => 36,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            219 =>
                array (
                    'id' => 222,
                    'area_type' => 4,
                    'name' => 'اسكان الشباب',
                    'parent_id' => 36,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            220 =>
                array (
                    'id' => 223,
                    'area_type' => 4,
                    'name' => 'اسكان المستقبل',
                    'parent_id' => 36,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            221 =>
                array (
                    'id' => 224,
                    'area_type' => 4,
                    'name' => 'عرابي',
                    'parent_id' => 36,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            222 =>
                array (
                    'id' => 225,
                    'area_type' => 4,
                    'name' => 'الحي الاول',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            223 =>
                array (
                    'id' => 226,
                    'area_type' => 4,
                    'name' => 'الحي الثاني',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            224 =>
                array (
                    'id' => 227,
                    'area_type' => 4,
                    'name' => 'الحي الثالث',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            225 =>
                array (
                    'id' => 228,
                    'area_type' => 4,
                    'name' => 'الحي الرابع',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            226 =>
                array (
                    'id' => 229,
                    'area_type' => 4,
                    'name' => 'الحي الخامس',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            227 =>
                array (
                    'id' => 230,
                    'area_type' => 4,
                    'name' => 'الشويفات',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            228 =>
                array (
                    'id' => 231,
                    'area_type' => 4,
                    'name' => 'النرجس',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            229 =>
                array (
                    'id' => 232,
                    'area_type' => 4,
                    'name' => 'الياسمين',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            230 =>
                array (
                    'id' => 233,
                    'area_type' => 4,
                    'name' => 'البنفسج',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            231 =>
                array (
                    'id' => 234,
                    'area_type' => 4,
                    'name' => 'جنوب الاكاديمية',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            232 =>
                array (
                    'id' => 235,
                    'area_type' => 4,
                    'name' => 'المستثمرين',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            233 =>
                array (
                    'id' => 236,
                    'area_type' => 4,
                    'name' => 'اللوتس',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            234 =>
                array (
                    'id' => 237,
                    'area_type' => 4,
                    'name' => 'شرق الاكاديمية',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            235 =>
                array (
                    'id' => 238,
                    'area_type' => 4,
                    'name' => 'جنوب القطامية',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            236 =>
                array (
                    'id' => 239,
                    'area_type' => 4,
                    'name' => 'غرب الجولف',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            237 =>
                array (
                    'id' => 240,
                    'area_type' => 4,
                    'name' => 'غرب اربيلا',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            238 =>
                array (
                    'id' => 241,
                    'area_type' => 4,
                    'name' => 'الدبلوماسيين',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            239 =>
                array (
                    'id' => 242,
                    'area_type' => 4,
                    'name' => 'تمر حنة',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            240 =>
                array (
                    'id' => 243,
                    'area_type' => 4,
                    'name' => 'القرنفل',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            241 =>
                array (
                    'id' => 244,
                    'area_type' => 4,
                    'name' => 'الاندلس',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            242 =>
                array (
                    'id' => 245,
                    'area_type' => 4,
                    'name' => 'ابو الهول',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            243 =>
                array (
                    'id' => 246,
                    'area_type' => 4,
                    'name' => 'المنطقة الصناعيه',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            244 =>
                array (
                    'id' => 247,
                    'area_type' => 4,
                    'name' => 'المرحلة الاولي',
                    'parent_id' => 76,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            245 =>
                array (
                    'id' => 248,
                    'area_type' => 4,
                    'name' => 'المرحلة الثانية',
                    'parent_id' => 76,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            246 =>
                array (
                    'id' => 249,
                    'area_type' => 4,
                    'name' => 'المرحلة الثالثة',
                    'parent_id' => 76,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            247 =>
                array (
                    'id' => 250,
                    'area_type' => 4,
                    'name' => 'المرحلة الرابعه',
                    'parent_id' => 76,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            248 =>
                array (
                    'id' => 251,
                    'area_type' => 4,
                    'name' => 'المرحلة الخامسة',
                    'parent_id' => 76,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            249 =>
                array (
                    'id' => 252,
                    'area_type' => 4,
                    'name' => 'المرحلة السادسة',
                    'parent_id' => 76,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            250 =>
                array (
                    'id' => 253,
                    'area_type' => 4,
                    'name' => 'المرحلة السابعه',
                    'parent_id' => 76,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            251 =>
                array (
                    'id' => 254,
                    'area_type' => 4,
                    'name' => 'المرحلة الثامنة',
                    'parent_id' => 76,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            252 =>
                array (
                    'id' => 255,
                    'area_type' => 4,
                    'name' => 'المرحلة التاسعه',
                    'parent_id' => 76,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            253 =>
                array (
                    'id' => 256,
                    'area_type' => 4,
                    'name' => 'المرحلة العاشرة',
                    'parent_id' => 76,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            254 =>
                array (
                    'id' => 257,
                    'area_type' => 4,
                    'name' => 'B1',
                    'parent_id' => 78,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            255 =>
                array (
                    'id' => 258,
                    'area_type' => 4,
                    'name' => 'B2',
                    'parent_id' => 78,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            256 =>
                array (
                    'id' => 259,
                    'area_type' => 4,
                    'name' => 'B3',
                    'parent_id' => 78,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            257 =>
                array (
                    'id' => 260,
                    'area_type' => 4,
                    'name' => 'B6',
                    'parent_id' => 78,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            258 =>
                array (
                    'id' => 261,
                    'area_type' => 4,
                    'name' => 'B7',
                    'parent_id' => 78,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            259 =>
                array (
                    'id' => 262,
                    'area_type' => 4,
                    'name' => 'B8',
                    'parent_id' => 78,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            260 =>
                array (
                    'id' => 263,
                    'area_type' => 4,
                    'name' => 'B10',
                    'parent_id' => 78,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            261 =>
                array (
                    'id' => 264,
                    'area_type' => 4,
                    'name' => 'B11',
                    'parent_id' => 78,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            262 =>
                array (
                    'id' => 265,
                    'area_type' => 3,
                    'name' => 'الصحفين',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            263 =>
                array (
                    'id' => 266,
                    'area_type' => 3,
                    'name' => 'اخري',
                    'parent_id' => 2,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            307 =>
                array (
                    'id' => 412,
                    'area_type' => 4,
                    'name' => 'امتداد غرب الجولف',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            338 =>
                array (
                    'id' => 443,
                    'area_type' => 3,
                    'name' => 'مارينا',
                    'parent_id' => 5,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            339 =>
                array (
                    'id' => 444,
                    'area_type' => 3,
                    'name' => 'جولف بورتو مارينا',
                    'parent_id' => 5,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            340 =>
                array (
                    'id' => 445,
                    'area_type' => 4,
                    'name' => 'جامعه الدول العربيه',
                    'parent_id' => 59,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            341 =>
                array (
                    'id' => 446,
                    'area_type' => 4,
                    'name' => 'الزمالك القبليه',
                    'parent_id' => 60,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            342 =>
                array (
                    'id' => 447,
                    'area_type' => 4,
                    'name' => 'عباس العقاد',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            343 =>
                array (
                    'id' => 448,
                    'area_type' => 3,
                    'name' => 'مراسى',
                    'parent_id' => 5,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            344 =>
                array (
                    'id' => 449,
                    'area_type' => 3,
                    'name' => 'أمواج',
                    'parent_id' => 5,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            345 =>
                array (
                    'id' => 450,
                    'area_type' => 3,
                    'name' => 'تلال',
                    'parent_id' => 5,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            346 =>
                array (
                    'id' => 451,
                    'area_type' => 3,
                    'name' => 'سيدى عبد الرحمن',
                    'parent_id' => 5,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            347 =>
                array (
                    'id' => 452,
                    'area_type' => 3,
                    'name' => 'هاسيندا',
                    'parent_id' => 5,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            348 =>
                array (
                    'id' => 453,
                    'area_type' => 3,
                    'name' => 'سيدى كرير',
                    'parent_id' => 5,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            349 =>
                array (
                    'id' => 454,
                    'area_type' => 4,
                    'name' => 'احمد عرابى',
                    'parent_id' => 59,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            350 =>
                array (
                    'id' => 455,
                    'area_type' => 4,
                    'name' => 'جامعه الدول العربيه',
                    'parent_id' => 59,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            351 =>
                array (
                    'id' => 456,
                    'area_type' => 4,
                    'name' => 'البطل احمد عبد العزيز',
                    'parent_id' => 59,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            352 =>
                array (
                    'id' => 457,
                    'area_type' => 4,
                    'name' => 'شارع شهاب',
                    'parent_id' => 59,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            353 =>
                array (
                    'id' => 458,
                    'area_type' => 4,
                    'name' => 'شارع السودان',
                    'parent_id' => 59,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            354 =>
                array (
                    'id' => 459,
                    'area_type' => 4,
                    'name' => 'شارع سوريا',
                    'parent_id' => 59,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            355 =>
                array (
                    'id' => 460,
                    'area_type' => 4,
                    'name' => 'شارع وادى النيل',
                    'parent_id' => 59,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            356 =>
                array (
                    'id' => 461,
                    'area_type' => 4,
                    'name' => 'شارع عبد المنعم رياض',
                    'parent_id' => 59,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            357 =>
                array (
                    'id' => 462,
                    'area_type' => 4,
                    'name' => 'كورنيش النيل',
                    'parent_id' => 58,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            358 =>
                array (
                    'id' => 463,
                    'area_type' => 4,
                    'name' => 'شارع مصدق',
                    'parent_id' => 57,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            359 =>
                array (
                    'id' => 464,
                    'area_type' => 4,
                    'name' => 'شارع التحرير / البحوث',
                    'parent_id' => 57,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            360 =>
                array (
                    'id' => 465,
                    'area_type' => 4,
                    'name' => 'ميدان فينى / السد العالى',
                    'parent_id' => 57,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            361 =>
                array (
                    'id' => 466,
                    'area_type' => 4,
                    'name' => 'شارع وزراة الزراعه',
                    'parent_id' => 57,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            362 =>
                array (
                    'id' => 467,
                    'area_type' => 4,
                    'name' => 'كورنيش النيل',
                    'parent_id' => 57,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            363 =>
                array (
                    'id' => 468,
                    'area_type' => 4,
                    'name' => 'ميدان الجلاء',
                    'parent_id' => 57,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            364 =>
                array (
                    'id' => 469,
                    'area_type' => 4,
                    'name' => 'شارع الثوره',
                    'parent_id' => 57,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            365 =>
                array (
                    'id' => 470,
                    'area_type' => 4,
                    'name' => 'شارع الانصار',
                    'parent_id' => 57,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            366 =>
                array (
                    'id' => 471,
                    'area_type' => 4,
                    'name' => 'بين السرايات',
                    'parent_id' => 57,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            367 =>
                array (
                    'id' => 472,
                    'area_type' => 4,
                    'name' => 'منطقه نادى الصيد',
                    'parent_id' => 57,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            368 =>
                array (
                    'id' => 473,
                    'area_type' => 4,
                    'name' => 'شارع محى الدين ابو العز',
                    'parent_id' => 57,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            369 =>
                array (
                    'id' => 474,
                    'area_type' => 4,
                    'name' => 'شارع 26 يوليو',
                    'parent_id' => 60,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            370 =>
                array (
                    'id' => 475,
                    'area_type' => 4,
                    'name' => 'الجبلايه',
                    'parent_id' => 60,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            371 =>
                array (
                    'id' => 476,
                    'area_type' => 4,
                    'name' => 'أبو الفدا',
                    'parent_id' => 60,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            372 =>
                array (
                    'id' => 477,
                    'area_type' => 4,
                    'name' => 'مصطفى النحاس',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            373 =>
                array (
                    'id' => 478,
                    'area_type' => 4,
                    'name' => 'مكرم عبيد',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            374 =>
                array (
                    'id' => 479,
                    'area_type' => 4,
                    'name' => 'احمد فخرى',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            375 =>
                array (
                    'id' => 480,
                    'area_type' => 4,
                    'name' => 'الحى الثامن',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            376 =>
                array (
                    'id' => 481,
                    'area_type' => 4,
                    'name' => 'شارع الطيران',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            377 =>
                array (
                    'id' => 482,
                    'area_type' => 4,
                    'name' => 'طريق النصر',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            378 =>
                array (
                    'id' => 483,
                    'area_type' => 4,
                    'name' => 'شارع المقريزى',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            379 =>
                array (
                    'id' => 484,
                    'area_type' => 4,
                    'name' => 'شارع الميرغنى',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            380 =>
                array (
                    'id' => 485,
                    'area_type' => 4,
                    'name' => 'ارض الجولف',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            381 =>
                array (
                    'id' => 486,
                    'area_type' => 4,
                    'name' => 'عمارات العبور',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            382 =>
                array (
                    'id' => 487,
                    'area_type' => 4,
                    'name' => 'روكسى',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            383 =>
                array (
                    'id' => 488,
                    'area_type' => 4,
                    'name' => 'الشيراتون',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            384 =>
                array (
                    'id' => 489,
                    'area_type' => 4,
                    'name' => 'ميدان الحجاز',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            385 =>
                array (
                    'id' => 490,
                    'area_type' => 4,
                    'name' => 'هليوبلس',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            386 =>
                array (
                    'id' => 491,
                    'area_type' => 4,
                    'name' => 'الخليفة المامون',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            387 =>
                array (
                    'id' => 492,
                    'area_type' => 4,
                    'name' => 'النزهه',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            388 =>
                array (
                    'id' => 493,
                    'area_type' => 4,
                    'name' => 'المحكمه',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            389 =>
                array (
                    'id' => 494,
                    'area_type' => 4,
                    'name' => 'عبد الحميد بدوى',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            390 =>
                array (
                    'id' => 495,
                    'area_type' => 4,
                    'name' => 'الكوربه',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            391 =>
                array (
                    'id' => 496,
                    'area_type' => 4,
                    'name' => 'ألماظه',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            392 =>
                array (
                    'id' => 497,
                    'area_type' => 4,
                    'name' => 'شارع الثوره',
                    'parent_id' => 33,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            408 =>
                array (
                    'id' => 513,
                    'area_type' => 4,
                    'name' => 'الحي العاشر',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            409 =>
                array (
                    'id' => 514,
                    'area_type' => 3,
                    'name' => 'شرم الشيخ',
                    'parent_id' => 8,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            410 =>
                array (
                    'id' => 515,
                    'area_type' => 3,
                    'name' => 'دهب',
                    'parent_id' => 8,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            411 =>
                array (
                    'id' => 516,
                    'area_type' => 3,
                    'name' => 'نويبع',
                    'parent_id' => 8,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            412 =>
                array (
                    'id' => 517,
                    'area_type' => 6,
                    'name' => 'اللوتس الجنوبية 6',
                    'parent_id' => 411,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            413 =>
                array (
                    'id' => 518,
                    'area_type' => 4,
                    'name' => 'المنطقة الأولى',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            414 =>
                array (
                    'id' => 519,
                    'area_type' => 4,
                    'name' => 'المنطقة السادسة',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            415 =>
                array (
                    'id' => 520,
                    'area_type' => 4,
                    'name' => 'المنطقة التاسعة',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            416 =>
                array (
                    'id' => 521,
                    'area_type' => 4,
                    'name' => 'المنطقة العاشرة',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            417 =>
                array (
                    'id' => 522,
                    'area_type' => 4,
                    'name' => 'المنطقه الثامنه',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            418 =>
                array (
                    'id' => 523,
                    'area_type' => 4,
                    'name' => 'شارع النادى الاهلى',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            419 =>
                array (
                    'id' => 524,
                    'area_type' => 4,
                    'name' => 'شارع حسن المامون',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            420 =>
                array (
                    'id' => 525,
                    'area_type' => 4,
                    'name' => 'رابعه العدويه',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            421 =>
                array (
                    'id' => 526,
                    'area_type' => 4,
                    'name' => 'شارع ابراهيم نوار',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            422 =>
                array (
                    'id' => 527,
                    'area_type' => 4,
                    'name' => 'شارع المقريفى',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            423 =>
                array (
                    'id' => 528,
                    'area_type' => 4,
                    'name' => 'حديقه الطفل',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            424 =>
                array (
                    'id' => 529,
                    'area_type' => 4,
                    'name' => 'شارع محمد غنيم',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            425 =>
                array (
                    'id' => 530,
                    'area_type' => 4,
                    'name' => 'شارع محمود غنيم',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            426 =>
                array (
                    'id' => 531,
                    'area_type' => 4,
                    'name' => 'مساكن الشروق',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            427 =>
                array (
                    'id' => 532,
                    'area_type' => 4,
                    'name' => 'عمارات الفردوس',
                    'parent_id' => 32,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            428 =>
                array (
                    'id' => 533,
                    'area_type' => 4,
                    'name' => 'جولف القطامية',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            478 =>
                array (
                    'id' => 583,
                    'area_type' => 6,
                    'name' => 'عمارة 1',
                    'parent_id' => 582,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            479 =>
                array (
                    'id' => 584,
                    'area_type' => 4,
                    'name' => 'المرحلة الاولى فيلات',
                    'parent_id' => 78,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            480 =>
                array (
                    'id' => 585,
                    'area_type' => 4,
                    'name' => 'المرحلة الثانية فيلات',
                    'parent_id' => 78,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            481 =>
                array (
                    'id' => 586,
                    'area_type' => 4,
                    'name' => 'المرحلة الثالثة فيلات',
                    'parent_id' => 78,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
            502 =>
                array (
                    'id' => 607,
                    'area_type' => 4,
                    'name' => 'كمبوند',
                    'parent_id' => 73,
                    'created_at' => '2018-01-16 18:47:16',
                    'updated_at' => '2018-01-16 18:47:16',
                ),
        ]);
    }
}
