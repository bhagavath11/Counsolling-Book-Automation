







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
                        <i class="fa fa-pencil" ></i>Edit semester </a>
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
                   <h2 class="text-center text-danger pt-3 font-weight-bold"> student counselling book management</h2>
                   <div class="container bg-danger" id="formsetting">
                    <h3 class="text-center text-white pb-4 pt-2 font-weight-bold">Welcome to dashboard</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="add_student.php" class="text-white text-center"><i class="fa fa-user"></i>
                            <h3>Add student detail</h3></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="view_student.php" class="text-white text-center"><i class="fa fa-eye"></i>
                            <h3>View student detail </h3></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="edit_student.php" class="text-white text-center"><i class="fa fa-pencil"></i>
                            <h3>Edit student detail </h3></a>
                        </div>
                   </div>
                   <hr>
                   <div class="row">
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                        
                            <a href="add_semester.php" class="text-white text-center"><i class="fa fa-user"></i>
                            
                            <h3>Add semester detail</h3></a>
                            


                        </div>
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="view_semester.php" class="text-white text-center"><i class="fa fa-eye"></i>
                            <h3>View semester detail </h3></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="edit_semester.php" class="text-white text-center"><i class="fa fa-pencil"></i>
                            <h3>Edit semester detail </h3></a>
                        </div>
                   </div>
                   </div>
                   
                </section>

         </div>
        </div>
               
        
    </body>
</html>