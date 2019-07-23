<?php
// several predefined variables in PHP
//superglobals, which means that they are
//always accessible,regardless of the scope and
// they can be accesed from any function ,class
// without having to do anything special


//$GLOBALS
//$GLOBALS is a php super global variable which is used to acccess global variables from anywhere in the php script(also from within functions or methods).

//PHP stores all global variables in an array called
//$GLOBALS[index].The index holds the


//The example below shows how to use the super global
// variable $GLOBALS
//$x=75;
//$y=25;
//
//function addition (){
//    $GLOBALS["z"]=$GLOBALS["x"] + $GLOBALS["y"];
//    $c = "local variable";
//}
//addition()
//echo$c;

//$_SERVER
//$_SERVERis a php super g;lobal variable which holds information about headers,paths and script locations
// The example below shows how to use some of the
// elements in $_SERVER:
//PHP_SELF-RETURNS THE FILENAME OF THE CURRENTLY EXECUTIG FILE/SCRIPT
//echo //executing script
//$_SERVER["PHP_SELF"]

//$_REQUEST- is used to collect data after submitting
//an HTML form.

if ( $_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_REQUEST["name"];
    $country=$_REQUEST["country"];

    if(empty($name)and empty ($country)){
        echo "Name and country fields are empty";
    }else{
        echo $name."<br>";
        echo $country."<br>";
    }
}
if





?>