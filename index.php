<?php 
    session_start(); 

      include 'dbconnect.php';
      $email_err=$pws_err=$success=$error='';
     
      if(isset($_POST['submit'])) {
       $fname=$_POST['fname'];
       $email=$_POST['email'];
       $password=$_POST['password'];
       $cpassword=$_POST['cpassword'];
       $pass = password_hash($password, PASSWORD_BCRYPT);
       $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
       $query="select * from register where email='$email'";
       $run=mysqli_query($conn,$query);
       $row=mysqli_num_rows($run);
       if($row>0) {
        $email_err="Email id already exists,please try again with another email";
       }
       else if($password!==$cpassword) {
        $pws_err="Your password do not match";
       }
       else {
        $sql="insert into register(fname,email,password,cpassword)values('$fname','$email','$pass','$cpass')";
        $run=mysqli_query($conn,$sql);
        if($run) {
            $success="Registered successfully";
        }
        else {
            $error="Unable to submit data.Please try again.......";
        }
       }
       
      }
?> 
<!DOCTYPE html>  
<html>  
<head> 
    
    <title>STUDENT DETAILS</title>
   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link ref="stylesheet" type="text/css" href="style.css">
<script> 
     function content1() {
        document.getElementById("div1").style.display="block";
        document.getElementById("div2").style.display="none";
     }
     function content2() {
        document.getElementById("div1").style.display="none";
        document.getElementById("div2").style.display="block";
     }
</script>
</head>  
<body>
    <style>* {
    margin:0px;
    padding:0px;
    box-sizing:border-box;
}

#formsetting {
    padding:10px;
    border-radius:10px;
}
</style>
  <section class="">
    <p class="text-center text-warning font-weight-bold"> <?php echo @$_SESSION['login first'];  ?></p>
    
    <h2 class="text-center text-danger pt-5 pb-4 font-weight-bold">STUDENTS DETAILS</h2>
    <p class="text-center font-weight-bold text-danger"><?php echo @$_GET['error'] ?> </p>
    <div class="container bg-danger" id="formsetting">
        <h3 class="text-white text-center py-3">
            Admin Login / Register                  
        </h3>
        <div class="row">
            <div class="col-md-7 col-sm-7 col-12">
                <img src="images/students-removebg-preview.png" class="image-fluid">
            </div>
            <div class="col-md-5 col-sm-5 col-12">
                <button class="btn btn-info px-5" onclick="content1()">Register</button>
                <button class="btn btn-info px-5" onclick="content2()">Login</button>
                <div id="div1" style="display: block" class="mt-4">
                <form method="post" action="">
                    <div class="form-group">
                        <label class="text-white">Full name</label>
                        <input type="text" name="fname" placeholder="Enter your name" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Email</label>
                        <span class="float-right text-white font-weight-bold"><?php echo $email_err; ?></span>
                        <input type="email" name="email" placeholder="Enter your email" class="form-control"required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Password</label>
                        <input type="text" name="password" placeholder="Enter your password" class="form-control"required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Confirm Password</label>
                        <span class="float-right text-white font-weight-bold"><?php echo $pws_err; ?></span>
                        <input type="text" name="cpassword" placeholder="RE-enter your Password" class="form-control"required="required">
                    </div>
                    <input type="submit" name="submit" value="register" class="btn btn-success px-5">
                    <span class="float-right text-white font-weight-bold"><?php echo $success; echo $error; ?></span>
                </form>
                </div>      
                <div id="div2" style="display:none;" class="mt-4">
                    <form method="post" action="">
                    <div class="form-group">
                        <label class="text-white">Email</label>
                        <input type="email" name="fname" placeholder="Enter your email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Password</label>
                        <input type="text" name="fname" placeholder="Enter your password" class="form-control">
                    </div>
                    <input type="submit" name="submit1" value="Login" class="btn btn-success px-5">

                    </form>
                </div>
            </div>

        </div>
    </div>
  </section>
</body>  
</html>  
<?php 
if(isset($_POST['submit1'])) {
    $email=$_SESSION['email']=$_POST['email'];
    $pwd=$_POST['password'];
    $sql="select * from register where email='$email'";
    $run=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($run);
    $pwd_fetch=$row['password'];
    $pwd_decode=password_verify($pwd,$pwd_fetch);
    if($pwd_decode) {
        echo "<script>window.open('main.php?success=Loggedin successfully','_self')</script>";
    }
    else {
        echo "<script>window.open('index.php?error=username or password is incorrect','_self')</script>";
    }
}
?>