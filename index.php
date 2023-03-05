
<?php

include 'session_home.php';
include 'includes/autoloader.inc.php';// ຍັງບໍເຂົ້າໃຈ=============================================
include 'functions.php';// ຍັງບໍເຂົ້າໃຈ==========================================================

 $users = new Users;

$errormsg = "";
$infomesg = "";


if(isset($_POST['loginnow'])){


        $email              =   cleaninput($_POST['email']);
        $password           =   cleaninput($_POST['password']);

   /*
       * 
   */


   if($users->Query("SELECT * FROM users WHERE email = ?", [$email])){

    if($users->CountRows() > 0){

        $row = $users->Single();
        $password_real   = decryptdata($row->password);
        $idis   = $row->id;

        if($password_real == $password)
        {
             $infomesg .= "Password Matched<br>";
        }
        else
        {
             $errormsg .= "Wrong Email or Password<br>";
        }

    }
    else
        {
             $errormsg .= "Wrong Email or Password<br>";
        }

    }
   

   /*
        * Submit the form
   */ 

   if($errormsg == ""){

            $infomesg .= "Logined";
            $_SESSION['idis'] = $idis;
            header("location:home/");
            exit();
            
     }

   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>ຮ້ານຄົບວົງຈອນ - login</title>
	
	<?php
	
	include 'includes/header.inc.php';
   
	?>	

</head>
<body>



	<?php
	include 'includes/top.inc.php';
	?>
    
	
	
	 <!-------------------PAGE Content---------------------->



	 <div class="container" style="margin-top:50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>
                <?php if(isset($_SESSION['messeage_d'])){ ?>
                <div class="alert alert-success" style="text-align: center;">               
                  <?php 

                  		echo $_SESSION['messeage_d'];

                  		unset($_SESSION['messeage_d']);

                   ?>
                </div>
                <?php } ?>
                    <!-- ຕົວສະແດງເມື່ອປ້ອນລະຫັດ ຫຼື password ຜິດ -->
                <?php if($infomesg != ""){ ?>
                <div class="alert alert-success" style="text-align: center;">               
                  <?php echo $infomesg; ?>        
                </div>
                <?php } ?>

                <?php if($errormsg != ""){ ?>
                <div class="alert alert-danger" style="text-align: center;">               
                  <?php echo $errormsg; ?>        
                </div>
                <?php } ?>
                <!-- ============================ -->
				                <div class="card-body">
                    <form method="POST" action="">
                        <input type="hidden" name="_token" value="1f4OpwIwES2fjOmBHlq9vwrO9CL4oIAnfSsut4o3">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value="" required="" autocomplete="email" autofocus="">

                                                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password" required="" autocomplete="current-password">

                                                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" name="loginnow" class="btn btn-primary">
                                    Login
                                </button>

                                    <a class="btn btn-link" href="./forgotpassword">
                                        Forgot Your Password?
                                    </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


	 <!----------------------------------------->



	 
	<?php

	include 'includes/footer.inc.php';

	?>


</body>
</html>