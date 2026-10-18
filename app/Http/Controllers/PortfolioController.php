<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PortfolioController extends Controller
{
    /**
     * Display the home page.
     */
    public function home(): View
    {
        return view('pages.home');
    }

    /**
     * Display the about page.
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * Display the work listing page.
     */
    public function work(): View
    {
        return view('pages.work');
    }

    /**
     * Display the Brand Design project page.
     */
    public function brandDesign(): View
    {
        return view('pages.brand');
    }

    /**
     * Display the Motion Design project page.
     */
    public function motionDesign(): View
    {
        return view('pages.motion');
    }

    /**
     * Display the Product Design project page.
     */
    public function productDesign(): View
    {
        return view('pages.product');
    }

    /**
     * Display the Web Development project page.
     */
    public function webDevelopment(): View
    {
        return view('pages.webdev');
    }

    /**
     * Display the 404 Not Found page.
     */
    public function notFound(): View
    {
        return view('pages.404');
    }
}
