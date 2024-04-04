<?php
$conn = new mysqli('localhost','root','','student_db');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Responsive side bar </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
       

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
        <link rel="stylesheet" type="text/css" href="style.css">
        <script>
            jQuery(document).ready(function($){
                $('#toggler').click(function(event) {
                    {
                        event.preventDefault();
                        $('#wrap').toggleClass('toggled');
                    }
                });
            });
        </script>
    </head>
    <body>
    <style>
            * {
    margin:0px;
    padding:0px;
    box-sizing:border-box;
    font-family:tahoma;
}
.main-body {
    width:100%;
    min-width:0px;
}
.sidebar {
    width:16rem;
    font-size:1.1rem;
    transition:all 0.5s ease;
}
.sidebar a:hover {
       padding-left:5px;
       transition:all 0.5s ease;
       background-color:#dc3545;
       color: white;

}
.sidebar-heading {
    padding-top:10px;
    padding-bottom:10px;
}
.sidebar i{
    background-color:#dc3545;
    border-radius:50%;
    color:white;
    padding:3px;
    margin-right:4px;
}
@media (min-width:300px) {
      #wrap.toggled .sidebar{
        margin-left:-16rem
      }
}
.icon i{
    width:100px;
    height:100px;
    background:white;
    font-size:55px;
    color:#dc3545;
    border-radius:50%;
    padding-top:18px;
    position:relative;
    left:35%;
    bottom:5px;
}

.icon i:hover {
    font-size:65px;
    background:#dc3545;
    color:white;
}
</style>
        <div class="d-flex" id="wrap">
            <div class="sidebar bg-light border-light">
                <div class="sidebar-heading">
                    <p class="text-center">Manage students</p>
                </div>
                <ul class="list-group list-group-flush">
                    <a href="main.php" class="list-group-item list-group-item-action">
                        <i class="fa fa-vcard-o" ></i>Dashboard</a>
                        <a href="add_semester.php" class="list-group-item list-group-item-action">
                        <i class="fa fa-user" ></i>Add semester detail</a>
                        <a href="view_semester.php" class="list-group-item list-group-item-action">
                        <i class="fa fa-eye" ></i>View semester detail</a>
                        <a href="edit_semester.php" class="list-group-item list-group-item-action">
                        <i class="fa fa-pencil" ></i>Edit semester detail</a>
                       
                </ul>
                <ul class="list-group list-group-flush">
                    <a href="add_student.php" class="list-group-item list-group-item-action">
                       
                        <i class="fa fa-user" ></i>Add student</a>
                        <a href="view_student.php" class="list-group-item list-group-item-action">
                        <i class="fa fa-eye" ></i>View student</a>
                        <a href="edit_student.php" class="list-group-item list-group-item-action">
                        <i class="fa fa-pencil" ></i>Edit student</a>
                        <a href="logout.php" class="list-group-item list-group-item-action">
                        <i class="fa fa-sign-out" ></i>Logout</a>
            </ul>
        </div>
            <div class="main-body">
                <button class="btn btn-outline-light bg-danger mt-3" id="toggler">
                

                <i class="fa fa-bars"></i>
                </button>
                <section id="main-form">
                   <h2 class="text-center text-danger pt-3 font-weight-bold"> student management system</h2>
                   <div class="container bg-danger" id="formsetting">
                    <h3 class="text-center text-white pb-4 pt-2 font-weight-bold">Edit student Detail</h3>
                    <?php 
                    if(isset($_GET['edit_student'])){
                        $edit_st_id =$_GET['edit_student'];
                        $query = "select * from student_detail where st_id = '$edit_st_id'";
                        $run = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($run)){

                       
                    ?>
                    <form method="post" action="" enctype="multipart/form-data">
                    <div class="row">
                          <div class="col-md-5 col-sm-5 col-12 m-auto">
                               <div class="form-group">
                                <label class="text-white">First name</label>
                                <input type="text" name="fname" placeholder="Enter your first name" class="form-control" required="required" value="<?php echo $row['fname'];  ?>">
                               </div>
                               <div class="form-group">
                                <label class="text-white">Email</label>
                                <input type="email" name="email" placeholder="Enter your email" class="form-control" value="<?php echo $row['email'];  ?>">
                               </div>
                               <div class="form-group">
                                <label class="text-white">Father name</label>
                                <input type="text" name="father_name" placeholder="Enter your Father name" class="form-control" value="<?php echo $row['father_name'];  ?>">
                               </div>
                               <div class="form-group" >
                                <label class="text-white"> Gender </label>
                                <input type="radio" name="gender" value="male" class="form-check-input ml-2" <?php if($row['gender']=='male') echo "checked";  ?>>
                                <label class="form-check-label text-white pl-4">Male</label>
                                <input type="radio" name="gender" value="female" class="form-check-input ml-2" <?php if($row['gender']=='female') echo "checked";  ?>>
                                <label class="form-check-label text-white pl-4">Female</label>
                               </div>
                               <div class="form-group">
                                <label class="text-white">City</label>
                                <input type="text" name="city" placeholder="Enter your City" class="form-control" value="<?php echo $row['city'];  ?>">
                               </div>
                               <div class="form-group">
                                <label class="text-white">Nationality</label>
                                <input type="text" name="nation" placeholder="Enter your nationality" class="form-control" value="<?php echo $row['nation'];  ?>">
                               </div>
                          </div>
                          <div class="col-md-5 col-sm-5 col-12 m-auto">
                          <div class="form-group">
                                <label class="text-white">Last name</label>
                                <input type="text" name="lname" placeholder="Enter your last name" class="form-control" value="<?php echo $row['lname'];  ?>">
                          </div>
                          <div class="form-group">
                                <label class="text-white">Birthdate</label>
                                <input type="date" name="birthdate" placeholder="Enter your Birthdate" class="form-control" value="<?php echo $row['birthdate'];  ?>">
                          </div>
                          <div class="form-group">
                                <label class="text-white">Mobile</label>
                                <input type="text" name="mobile" placeholder="Enter your Mobile number" class="form-control" value="<?php echo $row['mobile'];  ?>">
                          </div>
                          <div class="form-group">
                                <label class="text-white">District</label>
                                <input type="text" name="district" placeholder="Enter your District" class="form-control" value="<?php echo $row['district'];  ?>">
                          </div>
                          <div class="form-group">
                                <label class="text-white">State</label>
                                <input type="text" name="state" placeholder="Enter your State" class="form-control" value="<?php echo $row['state'];  ?>"> 
                          </div>
                          <div class="input-group">
                            <div class="input-group-prepend"> <span class="input-group-text" id="inputGroupFileAddon01">Upload</span></div>
                            <div class="custom-file"> 
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby ="inputGroupAddon01"> 
                                <label class="custom-file-label" for="inputGroupFile01"> Choose file</label>
                            </div>
                            
                   </div>
                   <input type="submit" name="update" value="update detail" class="btn btn-success px-5 mt-2">
                    </div>
                    </form>
                    <?php   }  }  ?>
                   </div>
                  </section>
         </div>
        </div>
               
        
    </body>
</html>
<?php 
if(isset($_POST['update'])){
    $edit_st_id = $_GET['edit_student'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$father_name = $_POST['father_name'];
$birthdate = $_POST['birthdate'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$district = $_POST['district'];
$city = $_POST['city'];
$state = $_POST['state'];
$nation = $_POST['nation'];
$photo = $_POST['photo'];
$sql = "Update student_detail set fname = '$fname', lname = '$lname', email ='$email', father_name='$father_name', birthdate= '$birthdate', mobile ='$mobile', gender='$gender', district ='$district', city='$city', state = '$state', nation = '$nation', photo='$photo' where st_id ='$edit_st_id'";

if (mysqli_query($conn, $sql)) {
   echo "<script>window.open('view_student.php?updated_success=student data updated successfully','_self')</script>";
} else {
    echo "hi";
    echo "<script>window.open('view_student.php?update_error= Unable to update data please try again..','_self')</script>";


}
}
?>