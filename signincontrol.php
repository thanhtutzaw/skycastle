<?php 

$admin_email = "admin";
$admin_pass = 1111;

$teacher_email = "teacher";
$teacher_pass = 2222;

$student_email = "student";
$student_pass = 3333;


$inputemail = $_POST['email'];
$inputpass = $_POST['pass'];
      
        if(isset($_POST['submit'])){
            if($inputemail == $admin_email && $inputpass == $admin_pass){
               echo "<script> alert('Admin Login success') ;</script>"; 
               header('Location:admin_dash.php');
            }
            else if($inputemail == $teacher_email && $inputpass == $teacher_pass) {
                echo "<script> alert('Teacher Login success') ;</script>"; 
                header('Location:teacher_dash.php');
                
            }
            else if($inputemail == $student_email && $inputpass == $student_pass) {
                echo "<script> alert('Student Login success') ;</script>"; 
                header('Location:student_dash.php');
                
            }
            else{
                echo "<script> alert('Login Error !') ;</script>"; 
                echo "<a href='signin.php'>Try Again</a>"; 
                // header('Location:signin.php');

            }
        }
 

?>