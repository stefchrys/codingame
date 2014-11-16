<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $N
);
$tabStrenght=array();
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d",
        $Pi
    );
    $tabStrenght[$i]=$Pi;  
}
rsort($tabStrenght);

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));
(int)$dif3= $tabStrenght[0]- $tabStrenght[1];
for ((int)$i = 1; $i < $N-2; $i++){
    if( $tabStrenght[$i]- $tabStrenght[$i+1]<$dif3){
        $dif3=$tabStrenght[$i]- $tabStrenght[$i+1];
    }
}
echo"$dif3\n";
?>