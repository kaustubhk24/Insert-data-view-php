<?php  
//MySQL connection      host   username  password  databasename
$conn = mysqli_connect("localhost", "root", "", "student");  

$query ="SELECT * FROM stud_table";  


 $result = mysqli_query($conn, $query); 
 
 
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>View Details</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

      </head>  
      <body>  
      
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h3 align="center">Students Data</h3>                 
                <br />  
              
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="25%">Name</th>  
                               <th width="25%">College</th>  
                               <th width="25%">City</th>  
                               <th width="25%">Pincode</th>  
                               
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["stu_name"]; ?></td>  
                               <td><?php echo $row["college"]; ?></td>  
                               <td><?php echo $row["city"]; ?></td>  
                               <td><?php echo $row["pincode"]; ?></td>  
                               
                          </tr>  
                     <?php       
                     }  
                     
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html> 



 
    
    
    
    
    



    