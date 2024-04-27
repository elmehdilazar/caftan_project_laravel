<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Database\Factories\OrderFactory;


class OrdersTableSeeder extends Seeder
{
    public function run()
    {

        Order::factory()->count(10)->create();
    }
}

