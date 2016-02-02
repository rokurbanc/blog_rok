<?php include_once("menu.php");?>

</div>
</div>

<div class="container-fluid">
  
  
  
  
  
  <br>
  <?php 
//pridobivanje vseh postov
$sql ="Select p.id as id,p.title as title, p.description as description, u.name as name From posts p INNER JOIN users u ON u.id=p.user_id ORDER By p.id DESC
";
$query = $con->
query($sql);
$post_id =get_post_id();

//dobi top post in ga izpise v jumbotronu
$top_sql = "Select p.id as id,p.title as title, p.description as description, u.name as name From posts p INNER JOIN users u ON u.id=p.user_id  WHERE p.id=$post_id  ORDER By p.id DESC ";
$top_query = $con->
query($top_sql);
$row1 = $top_query->
fetch_assoc();
echo "
<div class='row'>
<div class='col-md-6'>
<div class='jumbotron'>
<h2>
{$row1['title']}		
<h6>
Featured post
</h6>

</h2>

<p style= ' white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
max-width: 200px;'>
{$row1['description']}
</p>
<p>
<h4>
by: {$row1['name']}
</h4>
<a class='btn btn-primary btn-large' href='show_post.php?id={$row1['id']}'>
More about that awesome post!
</a>
</p>
</div>
</div>
<br>
";


while($row = $query->
fetch_assoc())

{



if($row['id']==$post_id)
{

}
else
{
echo "

<div class='col-md-4'>
<div class='panel panel-default'>
<div class='panel-heading'>
<h3 class='panel-title'>
{$row['title']}
</h3>
</div>
<div class='panel-body' style= ' white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
max-width: 200px;'>
{$row['description']}
</div>
<h6>
by: {$row['name']}
</h6>
<div class='panel-footer'>
<a href='show_post.php?id={$row['id']}' class='btn btn-info btn-default'>
More
</a>
</div>
</div>


</div>


";}


}

?>
  
  
</div>


<?php include_once("footer.php");?>
