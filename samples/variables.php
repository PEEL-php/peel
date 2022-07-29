<?php
$a=1;//int
$b=2.34;//float
$c="string";//string

//dynamic typing
$changing=1;
$changing="string";
$changing=new StdClass();

$staticTyped = "a";//optional static typing (like TS)
$unionType=[];//union types
$specificValues=false;
$nullable = null;
//any value other that null

//testing bad values
try{
    if(!(1 instanceof string)) throw new \Peel\Stdlib\IllegalTypeException();
    $staticTyped=1;
    if(!(null instanceof int || null instanceof array)) throw new \Peel\Stdlib\IllegalTypeException();
    $unionType=null;
    if(!("c" === "a"||"c"==="b"||"c"===false)) throw new \Peel\Stdlib\IllegalTypeException();
    $specificValues="c";
    if(null===null) throw new \Peel\Stdlib\IllegalTypeException();
    $notNullable=null;
}catch(\Throwable $_){}