<?php
// $gods = array( [
//     {"name": "Shiva", "age": 2000},
//     {name: "Bramha", age: 9000},
//     {name: "Krishna", age: 6000},
// ]);
$gods=array();
$gods[] = "Krishna";
$gods[] = "Kringe";
$gods[] = "Shiva";
$gods[] = "Bramha";
$gods[] = "Asura";

$searchString=strtolower($_GET['search']);
// print_r($gods);



// echo $_GET['search'].' searching...';
$hint='';
$len = strlen($searchString);
if($len==0){
    exit(0);
}
foreach ($gods as $god){
    if($searchString==strtolower(substr($god,0,$len))){
        $hint.= $god.',';
    }
   
}
print_r($hint);
?>