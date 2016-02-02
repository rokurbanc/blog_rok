<?php
include_once("menu.php");
?>

	



<br>
<?php
//pridobivanje post_id
$id = $con->real_escape_string($_GET["id"]);

$sql   = "Select * From posts  p
INNER join  users s
ON s.id=p.user_id
WHERE p.id=$id";
$query = $con->query($sql);

$numrows = $query->num_rows; //ce ni posta
if ($numrows == 0) {
    
    header("location: index.php");
}


$row = $query->fetch_array();



echo "
<div class='container-fluid'>
	<div class='row'>
		<div class='col-md-12'>
			<div class='row'>
				<div class='col-md-2'>
				</div>
				<div class='col-md-8'>
					<h3>
				{$row['title']}
					</h3>
					Created by: {$row['name']}({$row['email']})
					<p>
	{$row['description']}					</p>
				</div>
				<div class='col-md-2'>
				</div>
			</div> 
			
			
	</div>
</div>


";










?>

								<a class='btn btn-primary btn-large' href='index.php'>back</a>

		</div>
<?php
include_once("footer.php");
?>
