<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
          1=>  ['name' => 'Wireless Headphones', 'description' => 'High-quality wireless headphones with noise cancellation.', 'price' => 99.99, 'image' => 'images/headphones.webp'],
           2=> ['name' => 'Smartphone X200', 'description' => 'Latest smartphone with amazing camera and battery life.', 'price' => 699.99, 'image' => 'images/SmartPhone.webp'],
           3=> ['name' => 'Gaming Laptop', 'description' => 'Powerful laptop for gaming and professional work.', 'price' => 1299.99, 'image' => 'images/Gaming Laptop.webp'],
           4=> ['name' => 'Smartwatch Pro', 'description' => 'Stylish smartwatch with fitness tracking and notifications.', 'price' => 199.99, 'image' => 'images/Smartwatch Pro.webp'],
           5=> ['name' => 'Tablet A10', 'description' => 'High-resolution tablet for work and entertainment.', 'price' => 499.99, 'image' => 'images/pix1861-apple-528461_1920.jpg'],
           6=> ['name' => 'Digital Camera', 'description' => 'Capture high-quality photos and videos easily.', 'price' => 599.99, 'image' => 'images/rkarkowski-camera-431119_1920.jpg'],
           7=> ['name' => 'Bluetooth Speaker', 'description' => 'Portable speaker with deep bass.', 'price' => 79.99, 'image' => 'images/cloudlynx-soundboks-4831442_1920.jpg'],
           8=> ['name' => 'Gaming Mouse', 'description' => 'Ergonomic mouse with customizable buttons.', 'price' => 49.99, 'image' => 'images/jiriaa0-computer-2934025_1920.jpg'],
           9=> ['name' => 'Mechanical Keyboard', 'description' => 'RGB keyboard with tactile switches.', 'price' => 89.99, 'image' => 'images/rezwanahmed-keyboard-7386244_1920.jpg'],
           10=> ['name' => '4K Monitor', 'description' => 'Ultra HD monitor for gaming and design.', 'price' => 399.99, 'image' => 'images/OIP.webp'],
           11=> ['name' => 'External Hard Drive', 'description' => '2TB external storage for backups.', 'price' => 109.99, 'image' => 'images/External Hard Drive.webp'],
           12=> ['name' => 'Wireless Charger', 'description' => 'Fast wireless charging pad.', 'price' => 29.99, 'image' => 'images/charger.webp'],
           13=> ['name' => 'VR Headset', 'description' => 'Immersive virtual reality headset.', 'price' => 299.99, 'image' => 'images/vr.webp'],
           14=> ['name' => 'Smart Home Hub', 'description' => 'Control your smart devices easily.', 'price' => 149.99, 'image' => 'images/hub.webp'],
           15=> ['name' => 'Fitness Tracker', 'description' => 'Monitor your activity and health.', 'price' => 79.99, 'image' => 'images/fitnesstracker.webp'],
           16=> ['name' => 'Drone Pro', 'description' => 'High-end drone with 4K camera.', 'price' => 899.99, 'image' => 'images/drone.png'],
           17=> ['name' => 'Laptop Stand', 'description' => 'Ergonomic laptop stand for comfort.', 'price' => 39.99, 'image' => 'images/laptopstand.webp'],
           18=> ['name' => 'Noise Cancelling Earbuds', 'description' => 'Compact earbuds with active noise cancelling.', 'price' => 129.99, 'image' => 'images/earbuds.jfif'],
           19=> ['name' => 'Portable Projector', 'description' => 'Mini projector for movies and presentations.', 'price' => 249.99, 'image' => 'images/projector.webp'],
           20=> ['name' => 'Smart Thermostat', 'description' => 'Control home temperature remotely.', 'price' => 199.99, 'image' => 'images/thermostat.jfif'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
