<?php  
$conn = new mysqli('localhost','root','','student_db');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['add'])){
    $sub1       =   $_POST['sub1'];
    $sub2       =	$_POST['sub2'];
    $sub3       =	$_POST['sub3'];
    $sub4       =	$_POST['sub4'];
    $sub5       =	$_POST['sub5'];
    $sub6       =	$_POST['sub6'];
    $sub7       =	$_POST['sub7'];
    $sub8       =	$_POST['sub8'];
    $sub9       =	$_POST['sub9'];
   
    $sub1mid1   =	$_POST['sub1mid1'];
    $sub2mid1   =	$_POST['sub2mid1'];
    $sub3mid1   =	$_POST['sub3mid1'];
    $sub4mid1   =	$_POST['sub4mid1'];
    $sub5mid1   =   $_POST['sub5mid1'];
    $reg_no     =   $_POST['reg_no'];	
    $sub6mid1	=   $_POST['sub6mid1'];
    $sub7mid1	=   $_POST['sub7mid1'];
    $sub8mid1	=   $_POST['sub8mid1'];
    $sub9mid1	=   $_POST['sub9mid1'];
  
    $sub1mid2	=   $_POST['sub1mid2'];
    $sub2mid2	=   $_POST['sub2mid2'];
    $sub3mid2	=   $_POST['sub3mid2'];
    $sub4mid2	=   $_POST['sub4mid2'];
    $sub5mid2	=   $_POST['sub5mid2'];
    $sub6mid2   =   $_POST['sub6mid2'];
    $sub7mid2	=   $_POST['sub7mid2'];
    $sub8mid2	=   $_POST['sub8mid2'];
    $sub9mid2	=   $_POST['sub9mid2'];
   
    @$sub1sem	=   $_POST['sub1sem'];
    $sub2sem	=   $_POST['sub2sem'];
    $sub3sem	=   $_POST['sub3sem'];
    $sub4sem	=   $_POST['sub4sem'];
    $sub5sem	=   $_POST['sub5sem'];
    $sub6sem	=   $_POST['sub6sem'];
    $sub7sem	=   $_POST['sub7sem'];
    $sub8sem	=   $_POST['sub8sem'];
    $sub9sem    =   $_POST['sub9sem'];
    $sql = "INSERT INTO sem1 (sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8,sub9,sub1mid1,sub2mid1,sub3mid1,sub4mid1,sub5mid1,reg_no,sub6mid1,sub7mid1,sub8mid1,sub9mid1,sub1mid2,sub2mid2,sub3mid2,sub4mid2,sub5mid2,sub6mid2,sub7mid2,sub8mid2,sub9mid2,sub1sem,sub2sem,sub3sem,sub4sem,sub5sem,sub6sem,sub7sem,sub8sem,sub9sem)
    VALUES ('$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$sub7','$sub8','$sub9','$sub1mid1','$sub2mid1','$sub3mid1','$sub4mid1','$sub5mid1','$reg_no','$sub6mid1','$sub7mid1','$sub8mid1','$sub9mid1','$sub1mid2','$sub2mid2','$sub3mid2','$sub4mid2','$sub5mid2','$sub6mid2','$sub7mid2','$sub8mid2','$sub9mid2','$sub1sem','$sub2sem','$sub3sem','$sub4sem','$sub5sem','$sub6sem','$sub7sem','$sub8sem','$sub9sem')";
    
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "the register already exist...";
}

mysqli_close($conn);
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
*{  
    margin:0;
    padding:0;
    font-family:arial;
    box-sizing:border-box;
}
body{
height:100vh;
display:grid;
}
table {
    width: 600px;
    box-shadow:-1px 12px 12px -6px rgba(0,0,0,0.5);
   margin-left:auto;
   margin-right:auto;
   
}
table,td,th {
    padding:12px;
    border:1px solid lightgray;
    border-collapse:collapse;
    text-align:center;
    cursor:pointer;
}
td {
    font-size:11px;
}
th {
    background-color:red;
    color:white;
    cursor:pointer;
}
tr:nth-child(odd) {
    background-color:orangered;
}
tr:nth-child(odd){
    background-color:orangered;
    color:white;
}
tr:nth-child(even):hover{
    background-color:#ededed;
}
tr:nth-child(even):hover{
    background-color:lightgray;
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
                   <h2 class="text-center text-danger pt-3 font-weight-bold"> student counselling book management</h2>
                   <form method="post" action="" enctype="multipart/form-data">
                </section>
<div>

   <label for="registration_no">Reg no:</label>
                    <input type="text"name="reg_no" placeholder="Enter your reg no">
<table>

<tr>
   <th> S.NO</th>
   <Th> Subject/course </Th>
   <th> MID1 Marks</th>
   <th>MID2 Marks</th>
   <th>Semester grade </th>
   <th>Sgpa</th>
</tr>
<TR  >
   
   <td  >1  </td>
   <td ><input type="text" name="sub1">   </td>
   <td> <input type="text" name="sub1mid1" style="width:35px" > </td>
   <td>  <input type="text" name="sub1mid2" style="width:35px"> </td>
   <td>   <input type="text" name="sub1sem1" style="width:45px">  </td>
   
</TR>
<TR>
   <td>  2  </td>
   <td><input type="text" name="sub2"> </td>
   <td>  <input type="text" name="sub2mid1" style="width:35px">   </td>
   <td> <input type="text" name="sub2mid2" style="width:35px">  </td>
   <td>   <input type="text" name="sub2sem" style="width:45px">   </td>
  
</TR>

<TR>
   <td> 3  </td>
   <td><input type="text" name="sub3"> </td>
   <td>  <input type="text" name="sub3mid1" style="width:35px">   </td>
   <td> <input type="text" name="sub3mid2" style="width:35px">  </td>
   <td>   <input type="text" name="sub3sem" style="width:45px">   </td>
  
</TR>
<TR>
   <td> 4  </td>
   <td><input type="text" name="sub4"> </td>
   <td>  <input type="text" name="sub4mid1" style="width:35px">   </td>
   <td> <input type="text" name="sub4mid2" style="width:35px">  </td>
   <td>   <input type="text" name="sub4sem" style="width:45px">   </td>
  
</TR>
<TR>
   <td> 5  </td>
   <td><input type="text" name="sub5"> </td>
   <td>  <input type="text" name="sub5mid1" style="width:35px">   </td>
   <td> <input type="text" name="sub5mid2" style="width:35px">  </td>
   <td>   <input type="text" name="sub5sem" style="width:45px">   </td>
  
</TR>
<TR>
   <td> 6  </td>
   <td><input type="text" name="sub6"> </td>
   <td>  <input type="text" name="sub6mid1" style="width:35px">   </td>
   <td> <input type="text" name="sub6mid2" style="width:35px">  </td>
   <td>   <input type="text" name="sub6sem" style="width:45px">   </td>
  
</TR>
<TR>
   <td> 7 </td>
   <td><input type="text" name="sub7"> </td>
   <td>  <input type="text" name="sub7mid1" style="width:35px">   </td>
   <td> <input type="text" name="sub7mid2" style="width:35px">  </td>
   <td>   <input type="text" name="sub7sem" style="width:45px">   </td>
</TR>
<TR>
   <td> 8  </td>
   <td><input type="text" name="sub8"> </td>
   <td>  <input type="text" name="sub8mid1" style="width:35px">   </td>
   <td> <input type="text" name="sub8mid2" style="width:35px">  </td>
   <td>   <input type="text" name="sub8sem" style="width:45px">   </td>
</TR>
<TR>
   <td> 9  </td>
   <td><input type="text" name="sub9"> </td>
   <td>  <input type="text" name="sub9mid1" style="width:35px">   </td>
   <td> <input type="text" name="sub9mid2" style="width:35px">  </td>
   <td>   <input type="text" name="sub9sem" style="width:45px">   </td>
</TR>
<TR>
<td><input type="submit" name="add"  value="Add detail" class="btn btn-success"></td> 
</TR>
</table>
</div>
</form>
</div>
</section>
</div>
</div>
               
        
</body>
</html>
