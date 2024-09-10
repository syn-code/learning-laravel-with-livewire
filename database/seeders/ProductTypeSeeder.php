<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getInsertData() as $data) {
            DB::table('product_types')->insert([
                 'name' => $data,
            ]);
        }
    }

    private function getInsertData(): array
    {
        return [
            'clothing',
            'toys',
            'furniture',
            'electrical',
            'gardening',
        ];
    }
}
