<?php

require_once 'db/conn.php';

if(isset($_POST['submit'])){

     $id = $_POST['id'];
     $fname = $_POST['Firstname'];
     $lname = $_POST['Lastname'];
     $dob = $_POST['dob'];
     $email = $_POST['email1'];
     $contact = $_POST['Cell'];
     $specialty = $_POST['Specialty'];

     $result = $crud-> editAttendee($id,$fname,$lname,$dob,$email,$contact,$specialty);

     if($result){

        header("Location: viewrecords.php");
     }else

     {
        // echo 'error';
        include 'includes/errormessage.php';
     }
     
}
else{
    //echo 'error';
    include 'includes/successmessage.php';


}

?>