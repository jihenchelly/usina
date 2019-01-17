 <?php  
 $connect = mysqli_connect("localhost", "root", "", "usina");  
 $output = '';  
 if(isset($_POST["export_excel"]))  
 {  
      $sql = "SELECT * FROM clients";  
      $result = mysqli_query($connect, $sql);  
      if(mysqli_num_rows($result) > 0)  
      {  
           $output .= '  
                <table class="table" bordered="1">  
                     <tr>  
                          <th>First Name</th>  
                          <th>Last Name</th>  
                          <th>Sex</th>
                          <th>Email</th>
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'.$row["First_Name"].'</td>  
                          <td>'.$row["Last_Name"].'</td>  
                          <td>'.$row["Sex"].'</td>
                          <td>'.$row["Email"].'</td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
           header("Content-Type: application/xls");   
           header("Content-Disposition: attachment; filename=download.xls");  
           echo $output;  
      }  
 }  
 ?> 