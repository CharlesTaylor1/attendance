<?php 
 $title = 'View Record';


 require_once 'includes/header.php' ; 
 require_once 'db/conn.php';
 
  if(!isset($_GET['id'])){

    echo "<h1 class='text-danger'>Please check information and Try again</h1>";
     
  } else{

   
      $id = $_GET['id'];
      $result = $crud->getAttendeeDetails($id);

 
 ?>

  <div class="card" style="width: 18rem;">
        <div class="card-body">

            <h5 class="card-title">           
              Name:  <?php echo $result['Firstname'] . '' . $result['Lastname']; ?>
            </h5>

            <h6 class="card-subtitle mb-2 text-muted">
               Area of Trade: <?php echo $result['name']; ?>
            </h6>

            <p class="card-text">
                Date of birth: <?php echo $result['dateofbirth'];?>
            </p>

             <p class="card-text"> 
             Email Address: <?php echo $result['emailaddress'];?>
             </p>

             <p class="card-text">
              Contact Number: <?php echo $result['Contactnumber'];?>
            </p>
           

      </div>

</div>
 <br/>
<a href="viewrecords.php?" class="btn btn-info">Back to List</a>
          <a href="edit.php?id=<?php echo $result['attendee_id']?>" class="btn btn-warning">Edit</a>
          <a onclick="return confirm('Are you sure you want to delete this record?');" 
          href="delete.php?id=<?php echo $result['attendee_id']?>" class="btn btn-danger">Delete</a>


    <?php   } ?>
 <br>
    <br>
    <br>
    <br>



 <?php require_once 'includes/footer.php' ; ?>
   