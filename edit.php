<?php 
 $title = 'Edit Record';


 require_once 'includes/header.php' ; 
 require_once 'db/conn.php';

 $results = $crud->getSpecialties();
 
 if(!isset($_GET['id']))
 {
        //echo'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
 }
 else {
     $id = $_GET['id'];
     $attendee  = $crud->getAttendeeDetails($id);


 
 ?>

<div class="container">


    <h1 class="text-center">Edit Record</h1>

 <form method="post" action="editpost.php">
  
<input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>" />
   <div class="mb-3">
    <label for="Firstname" class="form-label" ">First Name</label>
    <input type="text" class="form-control" value="<?php echo $attendee['Firstname'] ?>" id="Firstname" name="Firstname"
     placeholder="Boss whats your name">
   
  </div>

 <div class="mb-3">
    <label for="Lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" value="<?php echo $attendee['Lastname'] ?>" id="Lastname" name="Lastname"
     placeholder="Enter Last Name">
   
  </div> 

   <div class="mb-3">
    <label for="dob">Date of Birth</label>
    <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob">
   
  </div>

 <div class="mb-3">

 <label for="Specialty">Area of Trade</label>

  <select class="form-control"  id="Specialty" name="Specialty">
 
         <?php while($r = $results->fetch(PDO::FETCH_ASSOC))  { ?>

            <option value="<?php echo $r['specialty_id'] ?>" <?php if ($r['specialty_id'] 
            == 
            
            $attendee['specialty_id']) echo 'selected'?>> 
            
            <?php echo $r['name']; ?> </option>
          <?php }?>
</select>

</div>


  <div class="mb-3">
    <label for="email1" class="form-label">Email address</label>
    <input type="email" class="form-control" value="<?php echo $attendee['emailaddress'] ?>" id="email1" name="email1"
    aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

   <div class="mb-3">
    <label for="Cell" class="form-label">Contact Number</label>
    <input type="text" class="form-control" value="<?php echo $attendee['Contactnumber'] ?>"id="Cell" name="Cell"
    aria-describedby="Cellhelp" placeholder="Enter cell #876">
    <small id="CellHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
  </div>
  
<br>
  <button type="submit" name="submit" class="btn btn-success btn=block">Save Changes</button>
    </form>

 <?php } ?>
    <br>
    <br>
    <br>
    <br>



 <?php require_once 'includes/footer.php' ; ?>
   