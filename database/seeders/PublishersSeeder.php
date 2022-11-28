<?php

namespace Database\Seeders;

use App\Models\Publishers;
use Illuminate\Database\Seeder;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Publishers::create([
            'name' => 'James Groban',
            'address' => 'Rosebud West, Victoria - Australia',
            'phone' => '0491 570 156',
            'email' => 'jamesgroban001@gmail.com',
            'image' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fasset.kompas.com%2Fcrops%2FfG_QYzsqvSOe-vz22aRgvnX81ec%3D%2F0x29%3A1200x829%2F750x500%2Fdata%2Fphoto%2F2021%2F09%2F22%2F614a8fbb80ab5.jpg&imgrefurl=https%3A%2F%2Flifestyle.kompas.com%2Fread%2F2021%2F09%2F'
        ]);

        Publishers::create([
            'name' => 'Christina Lohan',
            'address' => 'Cooyar, Queensland - Australia',
            'phone' => '0491 570 158',
            'email' => 'christinalohann@gmail.com',
            'image' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fasset.kompas.com%2Fcrops%2FfG_QYzsqvSOe-vz22aRgvnX81ec%3D%2F0x29%3A1200x829%2F750x500%2Fdata%2Fphoto%2F2021%2F09%2F22%2F614a8fbb80ab5.jpg&imgrefurl=https%3A%2F%2Flifestyle.kompas.com%2Fread%2F2021%2F09%2F'
        ]);

        Publishers::create([
            'name' => 'David Axelsen',
            'address' => 'Polo Flat, New South Wales - Australia',
            'phone' => '0491 570 159',
            'email' => 'davidaxelsen102@gmail.com',
            'image' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fasset.kompas.com%2Fcrops%2FfG_QYzsqvSOe-vz22aRgvnX81ec%3D%2F0x29%3A1200x829%2F750x500%2Fdata%2Fphoto%2F2021%2F09%2F22%2F614a8fbb80ab5.jpg&imgrefurl=https%3A%2F%2Flifestyle.kompas.com%2Fread%2F2021%2F09%2F'
        ]);
    }
}
