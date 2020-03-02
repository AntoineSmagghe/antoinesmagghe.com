<?php

namespace Test\App\Entity;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    /**
     * @dataProvider pricesForFoodProduct
     */
    public function testComputeTVAProductFood($price, $result)
    {
        $product = new Product('banane', Product::FOOD_PRODUCT, $price);

        $this->assertSame($result, $product->computeTVA());
    }

    public function testComputeTVAProductOther()
    {
        $product = new Product('dvd', 'video', 40);

        $this->assertSame(7.84, $product->computeTVA());
    }

    public function testComputeTVAPriceNegative()
    {
        $product = new Product('douille', 'metal', -5);

        $this->expectException('LogicException');
        
        $product->computeTVA();
    }

    public function pricesForFoodProduct()
    {
        return [
            [20, 1.1],
            [35, 1.925],
            [100, 5.5],
        ];
    }
}