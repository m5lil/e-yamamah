<?php

use Illuminate\Database\Seeder;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ticket_categories')->insert([
            ['name' => 'الدعم الفنى'],
            ['name' => 'الحسابات'],
            ['name' => 'الطلبات']
        ]);

    }
}
