<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Investment;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesAndPermissionSeeder::class);
        $user1 = User::factory()->create();
        $user1->assignRole('Emprendedor');
        $user2 = User::factory()->create();
        $user2->assignRole('Emprendedor');
        $user3 = User::factory()->create();
        $user3->assignRole('Emprendedor');
        $user4 = User::factory()->create();
        $user4->assignRole('Emprendedor');
        $user5 = User::factory()->create();
        $user5->assignRole('Emprendedor');
        $user6 = User::factory()->create();
        $user6->assignRole('Emprendedor');

        $user11 = User::factory()->create();
        $user11->assignRole('Inversor');
        $user22 = User::factory()->create();
        $user22->assignRole('Inversor');
        $user33 = User::factory()->create();
        $user33->assignRole('Inversor');
        $user44 = User::factory()->create();
        $user44->assignRole('Inversor');
        $user55 = User::factory()->create();
        $user55->assignRole('Inversor');
        $user66 = User::factory()->create();
        $user66->assignRole('Inversor');

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(EntrepreneurshipSeeder::class);
        $this->call(InvestmentSeeder::class);
        $this->call(InvestorApplicationSeeder::class);
    }
}
