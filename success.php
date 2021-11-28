<?php 
 $title = 'success';

 require_once 'includes/header.php'; 
 require_once 'db/conn.php';

 if(isset($_POST['submit'])){
     $fname = $_POST['Firstname'];
     $lname = $_POST['Lastname'];
     $dob = $_POST['dob'];
     $email = $_POST['email1'];
     $contact = $_POST['Cell'];
     $specialty = $_POST['Specialty'];



    $isSuccess = $crud->insertAttendees($fname,$lname,$dob,$email,$contact,$specialty);
if($isSuccess){
    include 'includes/successmessage.php';
}
else{
    include 'includes/errormessage.php';

}
 }
 ?>


 <h1 class="text-center text-success">You are Registration, Welcome</h1>


    <div class="card" style="width: 18rem;">
        <div class="card-body">

            <h5 class="card-title">           
              Name:  <?php echo $_POST['Firstname'] . '' . $_POST['Lastname']; ?>
            </h5>

            <h6 class="card-subtitle mb-2 text-muted">
               Area of Trade: <?php echo $_POST['Specialty']; ?>
            </h6>

            <p class="card-text">
                Date of birth: <?php echo $_POST['dob'];?>
            </p>

             <p class="card-text"> 
             Email Address: <?php echo $_POST['email1'];?>
             </p>

             <p class="card-text">
              Contact Number: <?php echo $_POST['Cell'];?>
            </p>
           
         
        </div>
    </div>



   <br>
    <br>
    <br> 
    <br>
    



 <?php require_once 'includes/footer.php' ; ?>