<?php
session_start();
ob_start();
/*error_reporting(E_ALL ^ E_NOTICE);*/


$con = new mysqli('localhost', 'sh5549_blog', 'cgdDhgoY', 'sh5549_blog') or die("Napaka pri povezavi s podatkovno bazo");
include_once("top_post.php");



//funkcije

function get_post_id()
{
    
    $post    = fopen("inc/post", "r");
    $post_id = fgets($post); //dobi post id in ga shrani v post_id
    fclose($post);
    
    return $post_id;
}
?>