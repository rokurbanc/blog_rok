<?php

include_once("config.php");



//prebere cas


$time1 = fopen("inc/time", "r");
$last  = fgets($time1);
fclose($time1);
//konec branja






if (time() >= $last + (60 * 5)) //ce je minilo 5min
    {
    //zapise nov cas 
    $timeSaveFile = fopen("inc/time", "w") or die("Unable to open file!");
    $time = time(); // doda cas
    fwrite($timeSaveFile, $time);
    fclose($timeSaveFile);
    //konc
    
    //nov post id:D
    $post          = fopen("inc/post", "w");
    $sql           = "SELECT id
					FROM
					    posts
					ORDER BY RAND()
					LIMIT 1;";
    $post_id_query = $con->query($sql);
    $post_id_row   = $post_id_query->fetch_assoc();
    $post_id       = $post_id_row['id'];
    
    fwrite($post, $post_id);
    fclose($post); //konec zapisan nov post_id
    
    
    
}



?>