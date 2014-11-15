<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $N // Number of elements which make up the association table.
);
fscanf(STDIN, "%d",
    $Q // Number Q of file names to be analyzed.
);
 $tabExtMt=array();
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%s %s",
        $EXT, // file extension
        $MT // MIME type.
    );
    //creer tableau extension=>myme
    $tabExtMt[$EXT]=$MT;//error_log(var_export(sizeof($tabExtMt), true));
}
;//error_log(var_export($tabExtMt['mpg'], true));
//copie tableau en minuscule
    $tabExtMtMin=array();
  $tabMin=array_keys($tabExtMt);//error_log(var_export($tabMin, true));
  foreach($tabMin as $val){
      $valMin=strtolower($val);
      $tabExtMtMin[$valMin]=$tabExtMt[$val];
  }
  $tabMin=array_keys($tabExtMtMin);//error_log(var_export($tabMin, true));
  $extMin='';
    $out='';
for ($i = 0; $i < $Q; $i++)
{   
    $extension='UNKNOWN'; $out="UNKNOWN";
    $FNAME = stream_get_line(STDIN, 256, "\n");
    //analyse $FNAME extension:
    $sizeChaine=strlen($FNAME);//error_log(var_export($FNAME, true));
    $extension="";//error_log(var_export($extension, true));
    //on parcours la chaine en partant de la fin
    for($j=$sizeChaine-1;$j>0;$j--){
        //si on repere un point et recupere sa position et extrait l'extension
        //s'assurer que le point n'est ni premier ni dernier
        if(($FNAME[$j]=='.')  && ($j!=$sizeChaine-1) ){
            $extension=substr($FNAME,$j+1,($sizeChaine-$j+1));//error_log(var_export($extension, true));
            break;
        }
    }
    //comparaison de l'extension à celles recueillies dans le tableau 
   $extMin=strtolower($extension);
    if(in_array($extMin,$tabMin)){
        $out=$tabExtMtMin[$extMin];
    }
   echo "$out\n";
}
?>