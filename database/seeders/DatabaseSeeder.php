<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(ProductDetailSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(InvoiceDetailSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
