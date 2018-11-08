<?php

use Illuminate\Database\Seeder;

class KhachLuuTruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\KhachLuuTru::class, 10)->create();
    }
}
