<?php 
// question 1
function year_check($my_year)
{
   if ($my_year % 400 == 0)
      print("It is a leap year");
   if ($my_year % 4 == 0)
      print("It is a leap year");
   else if ($my_year % 100 == 0)
      print("It is not a leap year");
   else
      print("It is not a leap year");
}
$my_year = 2024;
year_check($my_year);
///////////////////////////////////////////////
echo "<br>";
// question 2
$tem=25;
if($tem < 20){
    echo "it's winter";
}else{
    echo "its summer";
}
///////////////////////////////////////////////
echo "<br>";
// question 3
$x=10;
$y=10;

if($x==$y){
    echo($x+$y)* 3;
}else{
    echo $x+$y;
}

///////////////////////////////////////////////
echo "<br>";
// question 4
function absolute($n) 
{
    

     if ($n > 100)
     {
       return ($n - 100)*3;
     }
   return 100 - $n;
}
echo absolute(110)."\n";
 
///////////////////////////////////////////////
echo "<br>";
// question 5

$xy=15;
$yx=15;

if ($xy==30||$yx==30||(($xy+$yx)==30) ){
    echo "True";
}else{
    echo "False";
}
///////////////////////////////////////////////
echo "<br>";
// question 6
function intger($xx) 
{
   if(abs($xx - 100) <= 10 || abs($xx - 200) <= 10)
            return $xx;
     return false;
}
echo intger(103);

///////////////////////////////////////////////
echo "<br>";
// question 7
$yy=6;
if ($yy%3==0 ){
    echo "it's multiple of 3";
}elseif($yy%7==0){
    echo "it's multiple of 7 ";
    
}

///////////////////////////////////////////////
echo "<br>";
// question 10
$xz=150;
$zx=150;
if(($xz||$zx>=100)&&($xz||$zx<=200)){
    echo "the integers is in the range";
}else{
    echo "the integers is not in the range";
}

///////////////////////////////////////////////
echo "<br>";
// question 11
$xx1=25;
$xx2=6;
if (!($xx1&&$xx2>=20)&&($xx1&&$xx2<=50) ){
    echo 'True';
}

///////////////////////////////////////////////
echo "<br>";
// question 12
$cc=100;
$dd=1000;
$ll=5000;
$largest=$cc;
$large="cc";
if($largest<$dd && $ll<$dd){
    $large="dd";
    $largest=$dd;
} elseif($largest<$ll && $dd<$ll){
    $largest=$ll;
    $large='ll';
}
echo "the largest num is $large which is" ." ".$largest;


///////////////////////////////////////////////
echo "<br>";
// question 13
$zz1=9;
$zz2=50;
if((100-$zz1) < (100-$zz2)){
    echo "zz1  $zz1 is more close to 100";
}elseif(($zz1-100) ==($zz2-100)){
    echo " 0";
}else{
    echo "zz2 $zz2 is more close to 100"; 
}

///////////////////////////////////////////////
echo "<br>";
// question 14
$yy1=4;
$yy2=5;

if(($yy1||$yy2==5)||($yy1+$yy2==5)||(absolute($yy1)-absolute($yy2)==5)){
    echo "true";
}


?>