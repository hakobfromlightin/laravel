<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Config; //facade

class ContractsTestController extends Controller
{
/*    protected $config; //constructor injection

    public function __construct(Repository $config)
    {
        $this->config = $config;
    }*/

//    public function test(Repository $config) //method injection
    public function test()
    {
        // constructor injection
//        return $this->config->get('database.default');

        // method injection
//        return $config->get('database.default');


        // facade
//        return Config::get('database.default');


        // config helper function
        return config('database.default'); //recommended


    }
}
