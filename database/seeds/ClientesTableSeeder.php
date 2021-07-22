<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Client::class, 100)->create();

    }
}
