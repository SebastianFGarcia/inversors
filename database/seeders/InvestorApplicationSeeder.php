<?php

namespace Database\Seeders;

use App\Models\InvestorApplication;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvestorApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $investors = [
            [
                'user_id'=>7,
                'investment_id'=>1
            ],
            [
                'user_id'=>8,
                'investment_id'=>2
            ],
            [
                'user_id'=>9,
                'investment_id'=>3
            ],
            [
                'user_id'=>10,
                'investment_id'=>4
            ],
            [
                'user_id'=>11,
                'investment_id'=>5
            ],
            [
                'user_id'=>12,
                'investment_id'=>6
            ],
        ];

        foreach($investors as $investor) InvestorApplication::create($investor);
    }
}
