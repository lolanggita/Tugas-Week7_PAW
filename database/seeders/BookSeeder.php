<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'John Doe',
            'isbn' => '978-1234567890',
            'quantity' => 50,
            'price' => 125000.00,
            'description' => 'Panduan lengkap belajar Laravel dari dasar'
        ]);
        Book::create([
            'title'=> 'Pecinta Kucing',
            'author'=> 'Jerico Ken',
            'isbn'=> '979-0987612235',
            'quantity'=> 50,
            'price'=> 84500.00,
            'description'=> '10 Tips memahami perilaku terhadap emosional kucing'
        ]);
        Book::create([
            'title'=> '1009',
            'authoe'=> 'Melisa',
            'isbn' => '978-2345567518',
            'quantity'=> 50,
            'price'=> 134000.00,
            'description'=> 'Veri dan Sena berpetualang menelusuri bukit yang memiliki bentuk yang aneh..'
        ]);
        Book::create([
            'title'=> 'PHP untuk Pemula',
            'author'=> 'John Doe',
            'isbn'=> '978-3418262101',
            'quantity'=> 50,
            'price'=> 99000.00,
            'description'=> 'Panduan lengkap belajar PHP untuk pemula'
        ]);
    }
}
