<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $data=[];
    private $products;
    public function index(){

        return view('test');
    }

    public function bitm(){
        $this->city = 'Dhaka';
        $this->mobile = '01846434816';
        $this->data = [
            0 => [
            'name' => 'Hasib',
            'city' => 'Dhaka',
            'mobile' => '01284554'
        ],
            1 => [
                'name' => 'rafa',
                'city' => 'rampura',
                'mobile' => '0128455254'
            ],
            2 => [
                'name' => 'alamin',
                'city' => 'vatara',
                'mobile' => '084554'
            ],
            ];

        return view('demo', [
            'a' => $this->city,
            'b' => $this->mobile,
            'c' => $this->data
        ]);
    }
    public function about(){
        $this->products = Product::getAllProduct();

        return view('about',['products' => $this->products]);
    }
    public function contact(){

        return view('contact');
    }
    public function detail($id){
        $this->products = Product::getAllProduct();
        foreach ($this->products as $item){
            if ($item['id']==$id){
                return view('detail',['data'=>$item]);
            }
        }


    }
}
