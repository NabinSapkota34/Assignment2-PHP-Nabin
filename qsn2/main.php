<?php
function evaluate($name,$w_attendance,$w_hygiene,$w_rating)
  {
    if(($w_attendance<80 && $w_hygiene<50) || ($w_hygiene<50 && $w_rating) )
    {
      ECHO "$name,You are fired";
    }
    else
    {
      ECHO "Don't worry you are not fired";
    }
  }
evaluate("Nabin",20,70,30);
?>