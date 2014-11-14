<?php
/**
 * The code below will read all the game information for you.
 * On each game turn, information will be available on the standard input, you will be sent:
 * -> the total number of visible enemies
 * -> for each enemy, its name and distance from you
 * The system will wait for you to write an enemy name on the standard output.
 * Once you have designated a target:
 * -> the cannon will shoot
 * -> the enemies will move
 * -> new info will be available for you to read on the standard input.
 **/



    // To debug (equivalent to var_dump): error_log(var_export($var, true));


// game loop
while (TRUE)
{
    $tabEnemy=array();
    fscanf(STDIN, "%d",
        $count // The number of current enemy ships within range
    );
    for ($i = 0; $i < $count; $i++){
    
        fscanf(STDIN, "%s %d",
            $enemy, // The name of this enemy
            $dist// The distance to your cannon of this enemy       
        );
        $tabEnemy[$dist]=$enemy;      
    }
    $minDist=min(array_keys($tabEnemy));
    echo("$tabEnemy[$minDist]\n");
}
?>