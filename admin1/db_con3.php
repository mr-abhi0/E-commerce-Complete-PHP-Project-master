
  <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbdatabase ='akasha123';
         $con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbdatabase);
   
         if(! $con ){
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
         mysqli_close($con);
      ?>