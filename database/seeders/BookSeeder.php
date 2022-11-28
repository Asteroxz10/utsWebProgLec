<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Book::create([
            'publisher_id' => '1',
            'title' => 'Lands of Lost Borders: A Journey On The Silk Road',
            'author' => 'Kate Harris',
            'year' => '2022',
            'synopsis' => '"Every day on a bike trip is like the one before--but it is also completely different, or perhaps you are different, woken up in new ways by the mile."
                            I had travelled on a bicycle to Central Asia and I know the range of emotions and experiences one goes',
            'image' => 'images1.jpg'
        ]);

        Book::create([
            'publisher_id' => '1',
            'title' => 'Running Home',
            'author' => 'Katie Arnold',
            'year' => '2022',
            'synopsis' => 'In the tradition of Wild, an Outside magazine writer tells her story—of fathers and daughters, grief and renewal, adventure and obsession, and the power of running to change your life.
            I have been obsessed with running! When there has been a lack of trai',
            'image' => 'images2.jpg'
        ]);

        Book::create([
            'publisher_id' => '2',
            'title' => 'Beyond Possible: One Soldier, Fourteen Peaks — My Life In The Death Zone',
            'author' => 'Nimsdai Purja',
            'year' => '2022',
            'synopsis' => 'I have hiked some mountains in India and Nepal but the amazing feats by Nimsdai Purja is not an ordinary one for the mountaineering world! Nims, for short — achieved what most thought impossible. 
            He scaled 14 mountains more than 8,000m high in six month',
            'image' => 'images3.png'
        ]);

        Book::create([
            'publisher_id' => '2',
            'title' => 'The Lost Pianos of Siberia ',
            'author' => 'Sophy Roberts',
            'year' => '2022',
            'synopsis' => 'Lost pianos, who’d have thought? I recall reading this story and wondering what an odd subject but as I read further, I understood why. 
            This book is an interesting mixture of travel writing, Russian history, and music as the author travels across Siberi',
            'image' => 'images4.jpg'
        ]);

        Book::create([
            'publisher_id' => '3',
            'title' => 'This Road I Ride: Sometimes It Takes Losing Everything to Find Yourself',
            'author' => 'Juliana Buhring',
            'year' => '2022',
            'synopsis' => 'This book by Juliana Buhring is an inspirational cycling memoir especially enjoyed by those who appreciate mental and physical endurance. 
            I find myself bookmarking several pages in her book as I make a mental note of how I would approach certain situati',
            'image' => 'images5.jpg'
        ]);
    }
}
