<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus?">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Preference Choose</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" type="text/css"/>

  <style>
	.Select{
	margin-left:550PX;
	margin-TOP:150PX;

	}
	h1{
	margin-TOP:20PX;
	margin-left:400PX;
	font-size:60PX;
	}
  </style>
 </head>

 <body>
<h1>Welcome to Music Preference!</h1>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example-getting-started').multiselect({
            buttonWidth: '400px',
            dropRight: true,
			numberDisplayed: 6,
			includeSelectAllOption: true,
        });
    });
</script>

<div class="Select">
<form method="post" action="style.php">
<select id="example-getting-started" name = "Style[]" multiple="multiple">
    <option value="punk">Punk</option>
    <option value="rock">Rock</option>
    <option value="hip-hop">Hip-Hop</option>
    <option value="electronic">Electronic</option>
    <option value="jazz">Jazz</option>
    <option value="country">Country</option>
</select>
<input type="submit" value="Start!" />
</div>


 </body>
</html>
