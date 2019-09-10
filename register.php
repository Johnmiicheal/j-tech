<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_register.css">
    <script src="https://kit.fontawesome.com/546d8880f2.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Docnt</title>
</head>
<style>
  .swal-footer {
  text-align: center;
}
</style>
<body>



<form class="mt-5 " action="reg_backend.php" method="post">
<?php
if(isset($_SESSION['errors'])){
  foreach($_SESSION['errors'] as $error){
    echo '<div class="alert alert-warning" role="alert">'
    .$error.
  '</div>';
  unset($_SESSION['errors']);
  }

}
if(isset($_SESSION['success'])){
  echo '<script>
  swal({
    title: "SUCCESS!",
    text: "Your account was created successfully!",
    icon: "success",
  })
  </script>';
};
unset( $_SESSION['success']);

?>



  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card card_style mb-5" style="height: 48em;" >
           <h4 class="ml-5 mr-5 mt-2"><marquee>FILL THE FORM BELOW</marquee></h4>
            <div class="form-group ml-5 mr-5">
                <label for="" class="label_style ">FIRST NAME</label>
                <input type="text" class="form-control" id=""  placeholder="Enter First Name" value="<?php  
                if(isset($_SESSION['reg_fname'])){
                  echo $_SESSION['reg_fname'];
                }
                ?>" name="reg_fname" required>
              </div>

              <div class="form-group ml-5 mr-5">
                  <label for="" class="label_style">LAST NAME</label>
                  <input type="text" class="form-control" id=""  placeholder="Enter Last Name" value="<?php  
                if(isset($_SESSION['reg_lname'])){
                  echo $_SESSION['reg_lname'];
                }
                ?>" name="reg_lname" required>
                </div>

                <div class="form-group ml-5 mr-5">
                    <label for="exampleInputEmail1" class="label_style">EMAIL ADDRESS</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address" value="<?php  
                if(isset($_SESSION['reg_email'])){
                  echo $_SESSION['reg_email'];
                }
                ?>" name="reg_email" required>
                  </div>

          <div class="form-group ml-5 mr-5">
            <label class="label_style">PHONE NUMBER</label>
            <input type="number" class="form-control" placeholder=" Phone number" value="<?php  
                if(isset($_SESSION['reg_phonenumber'])){
                  echo $_SESSION['reg_phonenumber'];
                }
                ?>" name="reg_phonenumber" required >
          </div>

          <div class="form-group ml-5 mr-5">
            <label for="exampleInputPassword1" class="label_style">PASSWORD</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" Enter Password" name="reg_password1" required>
          </div>

          <div class="form-group ml-5 mr-5">
              <label for="exampleInputPassword2" class="label_style"> CONFIRM PASSWORD</label>
              <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password" name="reg_password2" required>
            </div>

          <button type="submit" class="btn btn-primary ml-5 mr-5 mx-auto"  style="width:20em;" name="reg_register">Register!</button>
<div class="inn d-flex">
  <a href="login.php" class="btn btn-success ml-5 mt-3">Login</a>

  <a href="index.php" class="btn btn-info ml-auto mr-5 mt-3 ">Back To Homepage</a>

</div>

        </div>
      </div>
    </div>
  </div>
</form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>