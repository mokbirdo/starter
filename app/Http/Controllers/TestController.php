<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function i_am_test(Request $request)
    {
        $var = 1;
        $VAR = 2;
        $snake_var = 2;
        $camelCaseVar = 3;
        $UcFirstCamelCaseVar = 4;
        return Array($var, $VAR, $snake_var, $camelCaseVar, $UcFirstCamelCaseVar);
    }

    public function iAmTest(Request $request)
    {
        $var = 1;
        $VAR = 2;
        $snake_var = 2;
        $camelCaseVar = 3;
        $UcFirstCamelCaseVar = 4;
        return Array($var, $VAR, $snake_var, $camelCaseVar, $UcFirstCamelCaseVar);
    }
}
