<?php
/*
*scope 3 
*global===>outside of function var dec
*local===>inside of function var dec
*static==> 
*/


$count=90;

function zero(){
     $num =90;
    return $num;
}

 echo zero();"</br>";

 function salamicount($tk){
   static $salami = 200;
    $salami += $tk;
    echo $salami."</br>";
 }
 salamicount(200);
 salamicount(60); 
 salamicount(90);


/** array
 * indexcing
 * accociative
 * multi dimentional
 * nested array
*/
$user = [
 'name' =>'iffatara orpa',
 'number' =>'01718573898',
 'email'=> 'iffat@gmail.com',
'address'=>'kaptai',
'social_link'=>'facebook.com',
];

echo"<pre>";
print_r($user['number']);
echo"</pre>";


$user = [
    'name' =>'iffatara orpa',
    'number' =>'01718573898',
    'email'=> 'iffat@gmail.com',
   'address'=>'kaptai',
   'social_link' => [
    'fb'=> 'facebook.com',
    'tiktok'=>'tioktok.com',
    'instraram'=>'instragram.com',

   ]

   ];
   echo"<pre>";
   print_r($user['social_link']);
   echo"</pre>";

   /**string fumction */

$name='iffat';
  echo strtoupper( $name);
  echo'</br/>';
  echo strtolower($name);
echo'</br>';
printf('wellcome to our deshboard %s',ucwords($name));
echo'</br>';
$email='Iffat@GMAIL.Com';
echo strtolower($email);
echo'</br>';
$name='rumi';
echo strtoupper($name);
echo'</br>';
$name='Isfat Jahan';
echo strrev($name);
echo'</br>';
$name="Aniha hossien";
echo str_shuffle($name);
