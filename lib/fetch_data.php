<table  class='table table-hover table-responsive table-bordered'>
<tr>
   <th>Name</th>
   <th>email</th>
</tr>

<?php
    /*
    *fetch_data.php 
    * used for retrieving data from database , used by select.php ajax
    * Author Ruben Faraj 
    * Email: Reben_f@hotmail.co.uk 
    * Date : 02-05-2017 
   */
    
  /*||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| */
   include '../config/db_connector.php';// database connection 
 /*||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| */

   if(isset($_POST['get_option']))
   {
   $school_name = $_POST['get_option'];
   $query = "SELECT  * from school_ where school_name='$school_name'";//display all the school in selector 
   $stmt = $con->prepare($query);
   $stmt->execute();
   $num = $stmt->rowCount();
   /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */
   while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
   { 
               echo"<tr>";
                 echo "<td>".$row['name']."</td>";// print out all member names 
                 echo "<td>".$row['email']."</td>";// print out all member emails
                 echo"</tr>";
                 echo"<table>";                
   }// end while
  /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */
  
   exit;//exit query
   }//end if
   ?>