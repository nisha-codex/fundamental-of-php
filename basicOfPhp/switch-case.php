<?php
   $color =strtolower(readline("Enter color name:"));

   switch ($color) {
    case "red": echo "you have chosen red color";
    break;
    case "blue": echo "you have chosen blue color";
    break;
    case "black": echo "you have chosen black color";
    break;
    case "yellow": echo "you haven chosen yellow color";
    break;
    default: echo "you have enter wrong color";
   }