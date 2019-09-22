  <?php

  require 'config.php';

  $sql = "SELECT * FROM images ";
  $qry = mysqli_query($con,$sql);
  //$row = mysqli_fetch_array($qry);

           
  while ($row = mysqli_fetch_array($qry)) {
     
   ?>
  
  <img src="<?php echo $row["path"]; ?>"> 
<?php
}

   mysqli_close($con);

?>