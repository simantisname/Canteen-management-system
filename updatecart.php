<?php
session_start();
include "conn.php";
        $query = "SELECT * FROM tbl_product ORDER BY id ASC";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>
     
      <?php
          }
        }
      ?>


