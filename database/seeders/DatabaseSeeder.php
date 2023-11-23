<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\Role;
use App\Models\Transaction;
use App\Models\Category;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            "name" => "Syahnas Agustina",
            "role" => 'siswa',
            "email" => 'syahnas@gmail.com',
            "password" => Hash::make("syahnas")
        ]);

        User::create([
            "name" => "Admin",
            "role" => 'admin',
            "email" => 'admin@gmail.com',
            "password" => Hash::make("admin123")
        ]);

        User::create([
            "name" => "Bank",
            "email" => 'bank@gmail.com',
            "role" => 'bank',
            "password" => Hash::make("bank123")
        ]);

        User::create([
            "name" => "Kantin",
            "email" => 'kantin@gmail.com',
            "role" => 'kantin',
            "password" => Hash::make("kantin123")
        ]);

        Category::create([
            "name" => "Makanan",
        ]);
        Category::create([
            "name" => "Minuman",
        ]);
        Category::create([
            "name" => "Snack",
        ]);

        Product::create([
            "name" => "Nasi Bakar",
            "price" => 6000,
            "stock" => 14,
            "photo" => "img/nasi.jpeg",
            "description" => "Nasi Bakar isi",
        ]);

        Product::create([
            "name" => "Lemon Ice Tea",
            "price" => 3000,
            "stock" => 30,
            "photo" => "img/ice-tea.jpeg",
            "description" => "Lemon teh segar",
        ]);

        Product::create([
            "name" => "Dimsum",
            "price" => 6000,
            "stock" => 26,
            "photo" => "img/dimsum.jpeg",
            "description" => "Pangsit ayam",
        ]);


        Product::create([
            "name" => "Sosis Bakar",
            "price" => 15000,
            "stock" => 20,
            "photo" => "img/sosis.jpeg",
            "description" => "Sosis sapi bakar",
        ]);

        // Wallet::create([
        //     "user_id" => 1,
        //     "credit" => 100000,
        //     "debit" => 0,
        //     "description" => "Open Rekening"
        // ]);


        // Transaction::create([
        //     "user_id" => 1,
        //     "product_id" => 1,
        //     "status" => 'not_paid',
        //     "order_id" => 'INV_12345',
        //     "quantity" => 1,
        //     "price" => 6000
        // ]);


    }
}
