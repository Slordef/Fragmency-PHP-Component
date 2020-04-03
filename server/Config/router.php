<?php
use Fragmency\Routing\Routes;

Routes::GET('*',"Example@any");
Routes::GET('/',function (){
   return view('index');
});
Routes::GET('/test',function (){
    return root("/test.html");
});