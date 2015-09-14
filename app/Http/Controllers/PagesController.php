<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function contact()
    {
        return view('pages/contact');
    }

    public function about()
    {
        $first = 'Hakob';
        $last = 'Baghdasaryan';
        $work_list = [
            'Web Sites', 'Web Apps', 'Responsive Web Sites'
        ];

        return view('pages/about', compact('first', 'last', 'work_list'));


        /* Method 1 */

        /*$data = [];
        $data['first'] = 'Hakob';
        $data['last'] = 'Baghdasaryan';
        return view('pages/about', $data);*/


        /* Method 2 */

        /*return view('pages/about')->with([
            'first' => 'Hakob',
            'last' => 'Baghdasaryan'
        ]);*/


        /*  Method 3   */

        /*$name = 'Hakob Baghdasaryan';
        return view('pages/about')->with('name', $name);*/
    }
}
