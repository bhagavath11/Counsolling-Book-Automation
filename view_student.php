<?php 
     include 'dbconnect.php';
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
                        <i class="fa fa-user" ></i>Add semester </a>
                        <a href="view_semester.php" class="list-group-item list-group-item-action">
                        <i class="fa fa-eye" ></i>View semester </a>
                        <a href="edit_semester.php" class="list-group-item list-group-item-action">
                        <i class="fa fa-pencil" ></i>Edit semester</a>
                       
                </ul>
                <ul class="list-group list-group-flush">
                    <a href="add_student.php" class="list-group-item list-group-item-action">
                       
                        <i class="fa fa-user" ></i>Add student detail</a>
                        <a href="view_student.php" class="list-group-item list-group-item-action">
                        <i class="fa fa-eye" ></i>View student detail</a>
                        <a href="edit_student.php" class="list-group-item list-group-item-action">
                        <i class="fa fa-pencil" ></i>Edit student detail</a>
                        <a href="logout.php" class="list-group-item list-group-item-action">
                        <i class="fa fa-sign-out" ></i>Logout</a>
            </ul>
        </div>
            <div class="main-body">
                <button class="btn btn-outline-light bg-danger mt-3" id="toggler">
                <i class="fa fa-bars"></i>
                </button>
                <section id="main-form">
                   <h2 class="text-center text-danger pt-3 font-weight-bold">student counselling book management</h2>
                   <div class="container bg-danger" id="formsetting">
                    <h3 class="text-center text-white pb-4 pt-2 font-weight-bold">View student detail</h3>
                    <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                              <table class="table table-bordered text-white table-responsive">
                                <thead>
                                    <tr>
                                        <th>SNO.</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Fathername</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Birthdate</th>
                                        <th>Mobile</th>
                                        <th>City</th>
                                        <th>District</th>
                                        <th>State</th>
                                        <th>Nationality</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php 
                                   $sql="select * from student_detail ";
                                   $run=mysqli_query($conn,$sql);
                                   $i=1;
                                   while($row=mysqli_fetch_assoc($run))



                                  {

                                ?>
                                   <tbody>
                                    <tr>
                                        <td><?php echo $i++; ?> </td>
                                        <td><?php echo $row['fname'] ?></td>
                                        <td> <?php echo $row['lname'] ?></td>
                                        <td>  <?php echo $row['father_name'] ?></td>
                                        <td>  <?php echo $row['gender'] ?></td>
                                        <td>  <?php echo $row['email'] ?></td>
                                        <td>  <?php echo $row['birthdate'] ?></td>
                                        <td> <?php echo $row['mobile'] ?> </td>
                                        <td>  <?php echo $row['city'] ?></td>
                                        <td> <?php echo $row['district'] ?> </td>
                                        <td> <?php echo $row['state'] ?> </td>
                                        <td> <?php echo $row['nation'] ?> </td>
                                        <td>
                                            <a href="st_image/<?php echo $row['photo']; ?>">
                                            <img src="st_image/<?php echo $row['photo']; ?>" width="50" 
                                            height="50"></a>
                                        </td>
                                        <td>
                                        <a  style="color:white; text-decoration:none;" href="edit_student.php?edit_student=<?php echo $row['st_id'];?>">Edit </a>|
                                            <a style="color:white; text-decoration:none;" href="delete_student.php?delete_student=<?php echo $row['st_id'];?>">Delete</a>
                                        </td>
                                    </tr>
                                   </tbody>
                                  <?php } ?>
                              </table>
                        </div>
                   </div>
                   </div>
                   
                </section>

         </div>
        </div>
               
        
    </body>
</html>