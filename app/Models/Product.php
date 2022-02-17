<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct(){
        return [
            0 => [
                'id' => 1,
                'name' => 'T-shirt',
                'price' => '1250',
                'description' => 'description',
                'image' => asset('/img/p1.jpg'),
            ],
            1 => [
                'id' => 2,
                'name' => 'T-shirt',
                'price' => '1750',
                'description' => 'description',
                'image' => asset('/img/p2.jpg'),
            ],
            2 => [
                'id' => 3,
                'name' => 'T-shirt',
                'price' => '1500',
                'description' => 'description',
                'image' => asset('/img/p3.jpg'),
            ],
            3 => [
                'id' => 4,
                'name' => 'T-shirt',
                'price' => '1100',
                'description' => 'description',
                'image' => asset('/img/p4.jpg'),
            ],
            4 => [
                'id' => 5,
                'name' => 'T-shirt',
                'price' => '1800',
                'description' => 'description',
                'image' => asset('/img/p5.jpg'),
            ],
            5 => [
                'id' => 6,
                'name' => 'T-shirt',
                'price' => '1200',
                'description' => 'description',
                'image' => asset('/img/p6.jpg'),
            ],
            6 => [
                'id' => 7,
                'name' => 'T-shirt',
                'price' => '1300',
                'description' => 'description',
                'image' => asset('/img/p7.jpg'),
            ],
            7 => [
                'id' => 8,
                'name' => 'T-shirt',
                'price' => '1500',
                'description' => 'description',
                'image' => asset('/img/p8.jpg'),
            ],
            8 => [
                'id' => 9,
                'name' => 'T-shirt',
                'price' => '2000',
                'description' => 'description',
                'image' => asset('/img/p9.jpg'),
            ],
        ];
    }
}
