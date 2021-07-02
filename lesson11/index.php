<?php 
    class Weather{
       public static $tempConditions = ["cold", "mild", "warm"];
       

       public static function celsiusToFahrenheit($cels){
           return $cels * 9 / 5 + 32;
       }

       public static function determineTempCondition($fahr){
           if($fahr < 40){
               return self::$tempConditions[0];
           }else if($fahr < 70){
               return self::$tempConditions[1]; 
           }else{
               return self::$tempConditions[2];
           }
       }

       
    }

    // print_r(Weather::$tempConditions);
    // echo Weather::celsiusToFahrenheit(20);
    echo Weather::determineTempCondition(Weather::celsiusToFahrenheit(30));


    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Tutorial</title>
</head>
<body>
    
</body>
</html>