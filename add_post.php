<?php
include_once("menu.php");
?>
<?php
include_once("is_login.php");
?>

	</div>
	</div>

<div class="container">
<div class="row">
		<div class="col-md-11">
			<div class="jumbotron">

<form class="form-horizontal" action ="validate.php" method ="post">
	<fieldset>

	<!-- Form Name -->
	<legend>Add new post</legend>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="textinput">Title input</label>  
	  <div class="col-md-4">
	  <input id="title" name="title" type="text" placeholder="title" class="form-control input-md">
	  </div>
	</div>

	<!-- Textarea -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="textarea">Description</label>
	  <div class="col-md-4">                     
	    <textarea class="form-control" id="description" name="description"></textarea>
	  </div>
	</div>

	<!-- Button -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="submit">Submit Post</label>
	  <div class="col-md-4">
	    <button id="submit" name="submit" class="btn btn-primary" >Sumbit</button>
	  </div>
	</div>

	</fieldset>
</form>

<div id="result"></div>

			</div>
		</div>
</div>



			
<?php
include_once("footer.php");
?>
