
<?php
include 'connection.php';
$data2=mysqli_query($con,"select * from studentreg");
?>

<html>
<table class="table table-bordered table-dark">
                      <thead>
                        <tr>
                         
                          <th>
                          student name
                          </th>
                         
                         
                        </tr>
                      </thead>
                      <tbody>
                      
                        <tr >
                        <?php
while($row2=mysqli_fetch_assoc($data2))
{
    ?>       
        <td><?php echo $row2['name'];?></td>
        
        
        
      
    </tr>
    <?php
}
             ?>


                        
                      </tbody>
                    </table>
                    </html>