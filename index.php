<html>
<head>
<title>ifsc</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#" style="color:white;">Search Bank by IFSC Code</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link btn btn-danger btn-md" href="index.php" style="color:white;"><strong>Refresh</strong><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:white;"><strong>About</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:white;"><strong>More Tools</strong></a>
      </li>
    </ul>
  </div>
</nav>
<br>
<br>
<br>
<center><h5>Search Bank Details by IFSC Code</h5></center>
<center>
<form method="post">
<input type="textbox" name="ifsc" required placeholder="Enter IFSC code here"/>
<input type="submit" name="submit" class="btn btn-danger btn-sm">
</form>
</center>
<br>
<?php
if (isset($_POST['submit'])){
    $ifsc=$_POST['ifsc'];
  $json=@file_get_contents('https://ifsc.razorpay.com/' .$ifsc);
  $arr=json_decode($json);
  if (isset($arr->BRANCH)){
  echo "<center><b>Branch:-</b>".$arr->BRANCH."<br/></center>";
  echo "<center><b>State:-</b>".$arr->STATE."<br/></center>";
  echo "<center><b>City:-</b>".$arr->CITY."<br/></center>";
  echo "<center><b>Bank:-</b>".$arr->BANK."<br/></center>";
  echo "<center><b>Address:-</b>".$arr->ADDRESS."<br/></center>";
  
  }else{
    echo "invalid IFSC Code";
  }
}
?>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>