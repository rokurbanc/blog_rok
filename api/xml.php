<?php

include_once("config.php"); 

    $sql = "select * from posts";
    $res = $con->query($sql) or die("Error Json Api 1");


$xml = new XMLWriter();

$xml->openURI("php://output");
$xml->startDocument();
$xml->setIndent(true);

$xml->startElement('Posts');

while ($row = $res->fetch_assoc()) {
  $xml->startElement("Post");
	  	$xml->startElement("title");
	    	$xml->writeRaw($row['title']);
	  	$xml->endElement();
	  	
  	    $xml->startElement("description");
	  		$xml->writeRaw($row['description']);
	    $xml->endElement();


		$xml->startElement("user_id");
	  		$xml->writeRaw($row['user_id']);
	  	$xml->endElement();
 

  $xml->endElement();
}

$xml->endElement();

header('Content-type: text/xml');
$xml->flush();
    $con->close();
?>