<?php
     $n=1;
      echo recursion($n);
      function recursion($n)
   {
   	  if ($n<=5)
   {
   	  if($n<5)
   {
   	  echo "$n+";
   }  else echo "$n=";

      return $n+recursion($n+1);
   }		
   }




?>