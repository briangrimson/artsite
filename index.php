<?php require('logic.php') ?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Brian Grimson</title>
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
  <meta name="description" content="The artwork of Brian Grimson">
  <link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css>
  <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js></script>
  <link rel=stylesheet href=css/main.css>
</head>
<body>



<div class=searchNav>
<h1>Brian<br> Grimson</h1>

<form method=get action="index.php">
<!-- filter by work -->
<h3> Series </h3>
   <input type=checkbox name='bw' checked> <label>Black and White </label><br>
   <input type=checkbox  name='color'  checked> <label >Color</label><br>
   <input type=checkbox name='photo'  checked> <label > Photo Transfer </label> <br>
<!-- filter by year -->

<h3>Year</h3>
  <select  name=year>
    <option value=''>All </option>
    <option value=2017>2017 </option>
    <option value=2016>2016 </option>
  </select><br>
  <input type=submit class='btn btn-primary btn-md' value='Filter'>
</form>
<div class='info contact'>
<h3>Contact</h3>
leifgrimson@gmail.com
</div>

</div>







<div class=gallery>
<?php $newArtLibrary  = new ArtLibrary();
      $newArtLibrary->displayArtLibrary('artwork.json');
?>


</div>





</body>
</html>
