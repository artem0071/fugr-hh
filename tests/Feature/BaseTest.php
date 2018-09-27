<?php

namespace Tests\Feature;

use Tests\TestCase;

class BaseTest extends TestCase
{
    /** @test */
    function user_can_see_telephone()
    {
        $this->get('/')->assertSee('Телефон: (499) 340-94-71');
    }

    /** @test */
    function user_can_see_email()
    {
        $this->get('/')
            ->assertSee('Email')
            ->assertSee('info@future-group.ru');
    }

    /** @test */
    function user_can_see_address()
    {
        $this->get('/')
            ->assertSee('Адрес')
            ->assertSee('115088 Москва, ул. 2-я Машиностроения, д.7 стр. 1');
    }

    /** @test */
    function user_can_see_copyright()
    {
        $this->get('/')
            ->assertSee('&copy; 2010 - 2014 Future. Все права защищены');
    }

    /** @test */
    function user_can_see_logo()
    {
        $this->get('/')
            ->assertSee('http://localhost/images/logo.png');
    }
}
