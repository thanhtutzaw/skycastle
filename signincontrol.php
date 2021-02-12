
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in control</title>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>  <!-- sweet alert cdn -->

</head>
<body>
    
</body>
</html>

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
                // echo "<script> alert('Teacher Login success') ;</script>"; 
            //    echo "<script> alert('Admin Login success') ;</script>"; 
               header('Location:admin_dash.php');
            }
            else if($inputemail == $teacher_email && $inputpass == $teacher_pass) {
                // echo "<script> alert('Teacher Login success') ;</script>"; 
                header('Location:teacher_dash.html');
                
            }
            else if($inputemail == $student_email && $inputpass == $student_pass) {
                // echo "<script> alert('Student Login success') ;</script>"; 
                header('Location:student_dash.html');
                
            }
            else{
                echo "<script> Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Log in fail!'
                  });
                  </script>";
                
                echo "<a href='signin'>Try Again</a>"; 
            }
        }
 

?>