<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioRoutesTest extends TestCase
{
    /**
     * Test all pages return status 200 and expected markup.
     */
    public function test_all_portfolio_routes_respond_with_success(): void
    {
        $routes = [
            '/' => 'home',
            '/about' => 'about',
            '/work' => 'work',
            '/work/brand-design' => 'projects',
            '/work/motion-design' => 'projects',
            '/work/product-design' => 'projects',
            '/work/web-development' => 'projects',
        ];

        foreach ($routes as $url => $namespace) {
            $response = $this->get($url);
            $response->assertStatus(200);
            $response->assertSee('data-barba="wrapper"', false);
            $response->assertSee('data-barba-namespace="'.$namespace.'"', false);
            $response->assertSee('/_astro/js/main.DQzkjJVx.js', false);
        }
    }

    /**
     * Test fallback route renders 404 page.
     */
    public function test_unknown_routes_render_404_page(): void
    {
        $response = $this->get('/non-existent-page-xyz');
        $response->assertStatus(200);
        $response->assertSee('data-barba-namespace="404"', false);
        $response->assertSee('404 Not found', false);
    }
}
