<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversionController extends Controller
{
    public function temperature(){
        return view('temperatureConvert');
    }

    public function tempConvert(Request $request){
        if(filter_var($request->temp,FILTER_VALIDATE_FLOAT)){
            switch($request->srcTemp){
                case "srcTemp-c":
                    //Convert from celsius to other temps
                    $celsius = $request->temp;
                    $fahrenheit = $request->temp * 1.8 + 32;
                    $kelvin = $request->temp + 273.15;
                    $origTemp = "Celsius";
                    break;
                case "srcTemp-f":
                    //Convert from fahrenheit to other temps
                    $celsius = ($request->temp - 32) / 1.8;
                    $fahrenheit = $request->temp;
                    $kelvin = $celsius + 273.15;
                    $origTemp = "Fahrenheit";
                    break;
                case "srcTemp-k":
                    //Convert from kelvin to other temps
                    $celsius = $request->temp -273.15;
                    $fahrenheit = $celsius * 1.8 + 32;
                    $kelvin = $request->temp;
                    $origTemp = "Kelvin";
                    break;
                default:
                    $error = "Invalid Input";
                    $celsius = 0;
                    $fahrenheit = 0;
                    $kelvin = 0;
                    $origTemp = "Invalid Input";
                    break;
            }

            $result = ["celsius" => $celsius, "fahrenheit" => $fahrenheit, "kelvin" => $kelvin, "origUnit" => $origTemp, "origTemp" => $request->temp];

            if(isset($error)){
                $result["error"] = $error;
            }

            return view('temperatureConvert', ["result" => $result]);

        } else {
            return view('temperatureConvert',["result" => ["error" => "Invalid Input"]]);
        }


    }
}
