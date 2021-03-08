<?php 
$title="php_";
 $str="php first";
 $str1="class";
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title><?php echo $title?></title>
</head>
<body>
    <h1> <?php echo "".$str . " " .$str1?> </h1>
    <div class="card" style="width: 18rem;" >
  <div class="card-body">
    <form method="Post" action="form.php">
   
    
    name:    <input type="text"  class="form-control" name="name"><br>
      email:   <input  type="email" class="form-control" name="email"><br>
      <br>
     <button type="submit" class="btn btn-primary"> submit</button>
    </form>
   
<?php

$names = array("maryam", "ramsha");
$count =count( $names)
?>


<ul> 
 <?php 
 for($value=0;$value<$count;$value++ )
 #foreach($colors as $value)
{?> 
   
<li>
  <?php  echo $names[$value] . "<br>";?>
    </li>

   
<?php } ?>
</ul>
    
      

  
  

</div>
</div>
    <box>
    

   
</body>
</html>