<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserTableSeeder::class);
        $this->call(SubscriptionTableSeeder::class);
        $this->call(SizeTableSeeder::class);
        $this->call(ShapeTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(PackageTableSeeder::class);
        $this->call(OurServiceTableSeeder::class);
        $this->call(OTPTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(OrderImageTableSeeder::class);
        $this->call(NotificationTableSeeder::class);
        $this->call(FAQTableSeeder::class);
        $this->call(ComplaintSuggestionTableSeeder::class);
        $this->call(AdminTableSeeder::class);
    }
}
