<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Menu;

class PageController extends Controller
{
    public function getpage($url)
    {
        
        $the_page = Page::where('url', $url)->first();
        $Menu = Menu::all();

        $data = [
            'Page' => $the_page,
            'Menu' => $Menu
        ];

        return view('showpage')->with('Data', $data);
    }
}
