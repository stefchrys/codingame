<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $L
);
fscanf(STDIN, "%d",
    $H
);
$T = stream_get_line(STDIN, 256, "\n");
//--------------------------------------------
//tableau
$alphab=array();

$place=1;
for($i='A';$i<='Z';$i++){
    $alphab[$i]=$place;
    $place++;if($place==27){
        break;
        
    }
}
$place=1;
for($i='a';$i<='z';$i++){
    $alphab[$i]=$place;
    $place++;
    if($place==53){
        break;
        
    }
}


$asci="";
//---------------------------------------------
for ($i = 0; $i < $H; $i++)
{
    $ROW = stream_get_line(STDIN, 1024, "\n");
    for($j=0;$j<strlen($T);$j++){
       $asci=$asci.substr($ROW,$alphab[$T[$j]]*$L-$L,$L);
    }
    echo $asci."\n";
    $asci='';
}
//---------------------------------------------
// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));



?>