<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now()->format('Y-m-d H:i:s');
        $insert = [
            [Product::NAME => 'Milk', Product::QOH => 12, Product::QOH_THRESHOLD => 10 , Product::ORIGINAL_PRICE=>2.40, Product::DISCNT_RATE=>0.1, Product::SID=> 0, Product::CREATED_AT=>$now, Product::UPDATED_AT=>$now],
            [Product::NAME => 'Egg', Product::QOH => 20, Product::QOH_THRESHOLD => 10 , Product::ORIGINAL_PRICE=>1.50, Product::DISCNT_RATE=>0.2, Product::SID=> 1, Product::CREATED_AT=>$now, Product::UPDATED_AT=>$now],
            [Product::NAME => 'Bread', Product::QOH => 15, Product::QOH_THRESHOLD => 10 , Product::ORIGINAL_PRICE=>1.20, Product::DISCNT_RATE=>0.1, Product::SID=> 0, Product::CREATED_AT=>$now, Product::UPDATED_AT=>$now],
            [Product::NAME => 'Pineapple', Product::QOH => 6, Product::QOH_THRESHOLD => 5 , Product::ORIGINAL_PRICE=>2.00, Product::DISCNT_RATE=>0.3, Product::SID=> 0, Product::CREATED_AT=>$now, Product::UPDATED_AT=>$now],
            [Product::NAME => 'Knife', Product::QOH => 10, Product::QOH_THRESHOLD => 8 , Product::ORIGINAL_PRICE=>2.50, Product::DISCNT_RATE=>0.2, Product::SID=> 1, Product::CREATED_AT=>$now, Product::UPDATED_AT=>$now],
            [Product::NAME => 'Shovel', Product::QOH => 5, Product::QOH_THRESHOLD => 5 , Product::ORIGINAL_PRICE=>7.99, Product::DISCNT_RATE=>0.1, Product::SID=> 0, Product::CREATED_AT=>$now, Product::UPDATED_AT=>$now],
        ];

        Product::query()->insert($insert);
    }
}
