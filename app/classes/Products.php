<?php


namespace App\Classes;


class Products
{
    protected $allProducts;
    protected $result = [];
    public function index()
    {
        return [
            0=>[
                'id'            => 1,
                'category_id'   => 1,
                'name'          =>'T-Shirt',
                'price'         => 700,
                'description'   => 'Product Description',
                'image'         => 'assets/img/p1.jpg',
            ],
            1=>[
                'id'            => 2,
                'category_id'   => 1,
                'name'          =>'T-Shirt',
                'price'         => 700,
                'description'   => 'Product Description',
                'image'         => 'assets/img/p11.jpg',
            ],
            2=>[
                'id'            => 3,
                'category_id'   => 2,
                'name'          =>'Red Saree',
                'price'         => 5600,
                'description'   => 'Description',
                'image'         => 'assets/img/s1.jpg',
            ],
            3=>[
                'id'            => 4,
                'category_id'   => 2,
                'name'          =>'Red Saree',
                'price'         => 5600,
                'description'   => 'Description',
                'image'         => 'assets/img/s2.jpg',
            ],
            4=>[
                'id'            => 5,
                'category_id'   => 3,
                'name'          =>'Kids',
                'price'         => 3600,
                'description'   => 'Product Description',
                'image'         => 'assets/img/k3.jpg',
            ],
            6=>[
                'id'            => 6,
                'category_id'   => 3,
                'name'          =>'Kids',
                'price'         => 3600,
                'description'   => 'Product Description',
                'image'         => 'assets/img/k2.jpg',
            ],

        ];
    }
    public function shortProducts ($categoryID)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['category_id'] == $categoryID)
            {
                array_push($this->result, $product);
            }
        }
        return $this->result;
    }
    public function getProductDetails ($productId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['id'] == $productId)
            {
                return $product;
            }
        }
    }
}