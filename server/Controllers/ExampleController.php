<?php
namespace Controller;

use Fragmency\Control\Controller;

/**
 * Class ExampleController
 * @package Controller
 */
class ExampleController extends Controller
{
    /**
     * Basic function
     */
    public function index(){
        return view('index');
    }

    public function any(){
        return view('any');
    }

    /**
     * GET Method
     */
    public function show(){
    }

    /**
     * PATCH Method
     */
    public function edit(){
    }

    /**
     * PUT Method
     */
    public function store(){
    }

    /**
     * DELETE Method
     */
    public function destroy(){
    }
}