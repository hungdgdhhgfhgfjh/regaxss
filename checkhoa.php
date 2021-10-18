<?php
$check = '/^[A-Z]/';
$color = "sssSSA@";
if(preg_match($check,$color,$match))
{
  echo "TRUE"."<br>";
}
else
{
    echo "false"."<br>";
}
$checkString = preg_match($check,$color,$match);
var_dump($match);
function isFirstLetterUpperCase($str)
{
        $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo("String's first character is uppercase");
    } else {
        echo("String's first character is not uppercase");
    }
}
isFirstLetterUpperCase("ASFSZXXS");