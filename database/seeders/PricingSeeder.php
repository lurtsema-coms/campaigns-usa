<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pricing;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pricing::updateOrCreate(
            [
                'name' => 'Free',
                'description' => 'Limited access to selected courses and resources.',
                'cost' => 0,
                'price_id' => 'free'
            ]
        );
        
        Pricing::updateOrCreate(
            [
                'name' => 'Monthly',
                'description' => 'Full access to all courses, exclusive content, and priority support for one month.',
                'cost' => 99,
                'price_id' => 'monthly'
            ]
        );
        
        Pricing::updateOrCreate(
            [
                'name' => 'Yearly',
                'description' => 'Save more with an annual plan! Get unlimited access to all courses and premium features for a full year.',
                'cost' => 999,
                'price_id' => 'yearly'
            ]
        );
    }
}
