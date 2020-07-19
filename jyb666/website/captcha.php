<?php
$a=rand()%2;
$c=rand()%100;
$d=rand()%100;
if($a==0)
{
  echo $c."+".$d."=？";
  setcookie("captcha", $c+$d, time()+300, "/");
}
if($a==1)
{
  if($c<$d)
  {
    $b=$c;
    $c=$d;
    $d=$b;
  }
  echo $c."-".$d."=？";
  setcookie("captcha", $c-$d, time()+300, "/");
}
/*
if($a==2)
{
  echo $c."*".$d."=？";
  setcookie("captcha", $c*$d, time()+300, "/");
}
*/
?>
