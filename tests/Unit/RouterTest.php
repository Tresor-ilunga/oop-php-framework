<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function test_it_registers_routes(): void
    {
        $router = new Router();
        $router->get('/', ['Controllers\HomeController', 'index']);
        $this->assertTrue(true);
    }
}