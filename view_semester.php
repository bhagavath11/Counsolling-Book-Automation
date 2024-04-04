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
                   <h2 class="text-center text-danger pt-3 font-weight-bold"> student management system</h2>
                   <div class="container bg-danger" id="formsetting">
                    <h3 class="text-center text-white pb-4 pt-2 font-weight-bold">View student detail</h3>
                    <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                              <table class="table table-bordered text-white table-responsive">

                                <?php 
                                   $sql="select * from sem1 ";
                                   $run=mysqli_query($conn,$sql);
                                   
                                   while($row=mysqli_fetch_assoc($run))



                                  {

                                ?>
                                   <tbody>
                                    <th>Register Number</th>
                                    <th><?php echo $row['reg_no']?></th>
                                   <tr>
                                       <th>sl no</th>
                                        <th>subject/cource</th>
                                        <th>mid1 Marks</th>
                                        <th>Mid2 marks</th>
                                        <th>Semester Grade</th></tr> 
                                   <tr>
                                        <td>1</td>

                                        <td><?php echo $row['sub1'] ?></td>
                                        <td> <?php echo $row['sub1mid1'] ?></td>
                                        <td> <?php echo $row['sub1mid2'] ?></td>
                                        <td>  <?php echo $row['sub1sem'] ?></td>
                                    </tr>
                                    <tr>
                                        <td> 2</td>
                                        <td>  <?php echo $row['sub2'] ?></td>
                                        <td> <?php echo $row['sub2mid1'] ?> </td>
                                        <td>  <?php echo $row['sub2mid2'] ?></td>
                                        <td> <?php echo $row['sub2sem'] ?> </td>
                                  </tr>
                                  <tr>
                                        <td>3</td>
                                        <td> <?php echo $row['sub3'] ?> </td>
                                        <td> <?php echo $row['sub3mid1'] ?> </td>
                                        <td> <?php echo $row['sub3mid2'] ?> </td>
                                        <td> <?php echo $row['sub3sem'] ?> </td>
                                  </tr>
                                  <tr>
                                        <td>4</td>
                                        <td> <?php echo $row['sub4'] ?> </td>
                                        <td> <?php echo $row['sub4mid1'] ?> </td>
                                        <td> <?php echo $row['sub4mid2'] ?> </td>
                                        <td> <?php echo $row['sub4sem'] ?> </td>
                                  </tr>
                                  <tr>
                                        <td>5</td>
                                        <td> <?php echo $row['sub5'] ?> </td>
                                        <td> <?php echo $row['sub5mid1'] ?> </td>
                                        <td> <?php echo $row['sub5mid2'] ?> </td>
                                        <td> <?php echo $row['sub5sem'] ?> </td>
                                  </tr>
                                  <tr>
                                        <td>6</td>
                                        <td> <?php echo $row['sub6'] ?> </td>
                                        <td> <?php echo $row['sub6mid1'] ?> </td>
                                        <td> <?php echo $row['sub6mid2'] ?> </td>
                                        <td> <?php echo $row['sub6sem'] ?> </td>
                                  </tr>
                                  <tr>
                                        <td>7</td>
                                        <td> <?php echo $row['sub7'] ?> </td>
                                        <td> <?php echo $row['sub7mid1'] ?> </td>
                                        <td> <?php echo $row['sub7mid2'] ?> </td>
                                        <td> <?php echo $row['sub7sem'] ?> </td>
                                  </tr>
                                  <tr>
                                        <td>8</td>
                                        <td> <?php echo $row['sub8'] ?> </td>
                                        <td> <?php echo $row['sub8mid1'] ?> </td>
                                        <td> <?php echo $row['sub8mid2'] ?> </td>
                                        <td> <?php echo $row['sub8sem'] ?> </td>
                                  </tr>
                                  <tr>
                                        <td>9</td>
                                        <td> <?php echo $row['sub9'] ?> </td>
                                        <td> <?php echo $row['sub9mid1'] ?> </td>
                                        <td> <?php echo $row['sub9mid2'] ?> </td>
                                        <td> <?php echo $row['sub9sem'] ?> </td>
                                  </tr>
                                  
                                        <tr>                                        
                                        <td>
                                        <a  style="color:white; text-decoration:none;" href="edit_semester.php?edit_student=<?php echo $row['st_id'];?>">Edit </a>|
                                            <a style="color:white; text-decoration:none;" href="delete_semester.php?delete_student=<?php echo $row['st_id'];?>">Delete</a>
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