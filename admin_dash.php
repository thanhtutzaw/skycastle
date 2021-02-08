<?php 

include_once 'db.php';
$con = createDB();

if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($GLOBALS['con'],$_GET['id']);
   $sql = "delete from `account7` where id=$id";
   $result = mysqli_query($GLOBALS['con'],$sql);
//    if(mysqli_num_rows($result)){
//     return $result;
// }
}

function getData(){
    $sql = "select * from account7";
    $result = mysqli_query($GLOBALS['con'],$sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky Castle E-learning</title>
	<link rel="shortcut icon" href="images/skycastle.png" type="image/x-icon" />

    <p src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></p>
      <!-- bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href="style.css">
    <style>
        .noselect {
            -webkit-touch-callout: none; /* iOS Safari */
                -webkit-user-select: none; /* Safari */
                -khtml-user-select: none; /* Konqueror HTML */
                -moz-user-select: none; /* Old versions of Firefox */
                    -ms-user-select: none; /* Internet Explorer/Edge */
                        user-select: none; /* Non-prefixed version, currently
                                            supported by Chrome, Opera and Firefox */
        }
        .admintext{
            letter-spacing: 2.3px;
            margin-left:4px;
        }
        .trashicon:hover{
            transition:all .2s ease-in-out;
            color:#8b0000 !important;
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="height: 100%; background: rgb(52,92,245);
    background: linear-gradient(0deg, rgba(52,92,245,1) 0%, rgba(36,141,224,1) 100%);">
        <div class="row">
            <div class="bg-primary col-md-2">
                    <div class="profile mt-3">
                        <img class="noselect" src="images/clipart3191274.png" alt="Admin Profile" width="50px">
                        <p class="noselect admintext d-inline-block text-uppercase h5 text-light">Admin</p>
                    </div>
                    <div class="mt-5 btn btn-danger text-light" onclick="alert('Logout Success');"><a style="text-decoration:none; color:white;" href="logout.php?logout">Logout</a></div>
                    <div> 
                    </div>
            </div>
            
                    
            <div class="bg-light col-md-10">
                <div class="container my-5">
                    <div class="mb-3 dashboardtext" style="display: inline-block; border: 7px outset #1f6efc; border-radius:50px;">
                            <div class="noselect text px-2" style="letter-spacing: 1.5px;">Dashboard</div>
                    </div>

                    <!-- <a style="text-decoration:none; color:white;" href="delete.php?delete"><div class="mt-5 btn btn-danger text-light">Delete</div></a> -->
                    

                    <div class="row">

                        

                        <div class="col-md-4">
                            
                            <table style="box-shadow: 2px 2px 12px 0px #0000004d;" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Admin</th>
                                                <th scope="col">password</th>
                                                <th scope="col">Action</th>
                                                <!-- <th scope="col">Handle</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">1</th>
                                                <td>Admin(You)</td>
                                                <td>1111</td>
                                                <td>
                                                    <!-- <form action="admin_dash.php"  method="post">  -->
                                                <!-- <?php trashicon(1); ?> -->
                                                <!-- </form> -->
                                                </td>
                                                </tr>
                                                
                                            </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <table style="box-shadow: 2px 2px 12px 0px #0000004d;"  class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">role</th>
                                                    <th scope="col">name</th>
                                                    <th scope="col">email</th>
                                                    <th scope="col">password</th>
                                                    <th scope="col">phone</th>
                                                    <th scope="col">address</th>
                                                    <th scope="col">dob</th>
                                                    <th scope="col">photo</th>
                                                    
                                                    <th scope="col">Action</th>
                                                    <!-- <th scope="col">Handle</th> -->
                                                </tr>
                                            </thead>

                                            <tbody>
                                                    <?php

                                                        $result = getData();
                                                        if($result){
                                                            while($row = mysqli_fetch_assoc($result)){ ?>
                                                                <tr>
                                                                    <td><?php echo $row['id'];?></td>
                                                                    <td><?php echo $row['role'];?></td>
                                                                    <td><?php echo $row['name'];?></td>
                                                                    <td><?php echo $row['email'];?></td>
                                                                    <td><?php echo $row['pass'];?></td>
                                                                    <td><?php echo $row['phone'];?></td>
                                                                    <td><?php echo $row['address'];?></td>
                                                                    <td><?php echo $row['dob'];?></td>
                                                                    <td>
                                                                        <img src="upload img/<?php echo $row['photo'] ?>" alt="" width="100px" height="100px">


                                                                        <!-- <img src='data:image;base64,".base64_encode($row['photo'])."' alt='Your photo'> -->
                                                                    </td>

                                                                    <td><?php trashicon($row['id']); ?></td>
                                                                </tr>  
                                                                    <?php  }
                                                                }
                                                    ?>
                                            </tbody> 
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>





    
    <!-- bootstrap -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
<?php
        function trashicon($id){
            $trash = "<path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>";
            
            $trashicon = "
            <div  class='btn' name='delete' title='Delete'>
            <a href='admin_dash.php?id=$id'>
            <svg xmlns='http://www.w3.org/2000/svg'  width='20' height='20' fill='currentColor' class='trashicon text-danger bi bi-trash viewBox='0 0 16 16'>
  $trash; // change here 
</svg></a>

</div>
            ";
            echo $trashicon ;   
        }

?>