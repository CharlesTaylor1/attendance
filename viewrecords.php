<?php 
 $title = 'View Records';


 require_once 'includes/header.php' ; 
 require_once 'db/conn.php';
 

 $results = $crud->getAttendees();
 ?>


 <table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Email Address</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Specialty</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
 
<?php while($r = $results->fetch(PDO::FETCH_ASSOC))  { ?>



  <tr>
      <td><?php echo $r['attendee_id']?></td>
      <td><?php echo $r['Firstname']?></td>
      <td><?php echo $r['Lastname']?></td>
      <td><?php echo $r['dateofbirth']?></td>
      <td><?php echo $r['emailaddress']?></td>
      <td><?php echo $r['Contactnumber']?></td>
      <td><?php echo $r['name']?></td>
      <td> 
      
          <a href="view.php?id=<?php echo $r['attendee_id']?>" class="btn btn-primary">View</a>
          <a href="edit.php?id=<?php echo $r['attendee_id']?>" class="btn btn-warning">Edit</a>
          <a onclick="return confirm('Are you sure you want to delete this record?');" 
          href="delete.php?id=<?php echo $r['attendee_id']?>" class="btn btn-danger">Delete</a>
          
          </td>



    </tr>
 
    <?php }?>
 

</table>


  <br>
    <br>
    <br>
    <br>



 <?php require_once 'includes/footer.php' ; ?>
   