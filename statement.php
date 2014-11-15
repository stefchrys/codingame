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
$tabExt=array();
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%s %s",
        $EXT, // file extension
        $MT // MIME type.
    );
    $tabExt[strtolower($EXT)]=$MT;
}
for ($i = 0; $i < $Q; $i++)
{
    $FNAME = stream_get_line(STDIN, 256, "\n"); 
    $ext=strtolower(strrchr($FNAME,'.'));
    $ext=substr($ext,1,strlen($ext)-1);
    if(isset($tabExt[$ext])){
        echo "$tabExt[$ext]\n";
    }else{
        echo "UNKNOWN\n";
    }
}

?>