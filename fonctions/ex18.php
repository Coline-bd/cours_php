<?php

// function joursVecus(DateTime $naissance): int{
//     return 
// }

$naissance=new DateTime();
echo mktime(0,0,0,date("m",$naissance),date("d",$naissance),date("Y",$naissance));