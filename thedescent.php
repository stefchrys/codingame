<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

while (TRUE)
{
    fscanf(STDIN, "%d %d",
        $SX,
        $SY
    );
    $tab=array();
    for ($i = 0; $i < 8; $i++)
    {
        fscanf(STDIN, "%d",
            $MH 
        );
    $tab[]=$MH;
    }
    $max=max($tab);
    $cle=array_search($max,$tab);
    if($SX== $cle){
        echo("FIRE\n");
    }else{
        echo("HOLD\n");
    }
    
}
?>