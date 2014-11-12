<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/


// game loop
while (TRUE)
{
    fscanf(STDIN, "%d %d",
        $SX,
        $SY
    );
    for ($i = 0; $i < 8; $i++)
    {
        fscanf(STDIN, "%d",
            $MH 
        );
        if($MH>0){
            $val=$i;
        }
    }
    if($SX===$val){
    echo("FIRE\n"); 
    }else{
        echo("HOLD\n");
    }
}
?>
