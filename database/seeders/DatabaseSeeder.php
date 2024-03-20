<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Category::factory()->create(['name'=>'Informatica']); 1
        // \App\Models\Category::factory()->create(['name'=>'Telefoni']); 2
        // \App\Models\Category::factory()->create(['name'=>'Auto']); 3
        // \App\Models\Category::factory()->create(['name'=>'Arredamento']); 4
        // \App\Models\Category::factory()->create(['name'=>'Lavoro']); 5
        // \App\Models\Category::factory()->create(['name'=>'Immobili']); 6
        // \App\Models\Category::factory()->create(['name'=>'Elettrodomestici']); 7
        // \App\Models\Category::factory()->create(['name'=>'Musica']); 8
        // \App\Models\Category::factory()->create(['name'=>'Accessori']); 9
        // \App\Models\Category::factory()->create(['name'=>'Giochi']); 10
        // \App\Models\Category::factory()->create(['name'=>'Sport']); 11
        // \App\Models\Category::factory()->create(['name'=>'Manga']); 12

        \App\Models\Announcement::factory()->create([
            'title'=>'PC Desktop Gaming',
            'body'=>'Potente PC desktop adatto per il gaming e la produttività',
            'price'=>'1200',
            'category_id'=>1, 
            
        ]);
        
        \App\Models\Announcement::factory()->create([
            'title'=>'iphone 15 pro max',
            'body'=>"Potente, innovativo ad un prezzo competitivo.",
            'price'=>'1349',
            'category_id'=>2,
        ]);

        \App\Models\Announcement::factory()->create([
            'title' => 'Fiat 500X Lounge',
            'body' => 'Fiat 500X Lounge, un\'auto compatta e versatile perfetta per la città e i viaggi fuori porta. Dotata di tecnologia all\'avanguardia e design accattivante.',
            'price' => '15000',
            'category_id' => 3,
        ]);

        \App\Models\Announcement::factory()->create([
            'title'=>'Pesi palestra',
            'body'=>'Athlyt - Set di manubri rivestiti in neoprene',
            'price'=>'40',
            'category_id'=>11,
        ]);



        \App\Models\Announcement::factory()->create([
            'title'=>'Orologio uomo',
            'body'=>'Tommy Hilfiger Analogue Quartz Watch for Men, Stainless Steel',
            'price'=>'170',
            'category_id'=>9,
        ]);

        






        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
