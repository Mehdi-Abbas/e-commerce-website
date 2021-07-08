<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Login</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         .container {
             /* display: flex; */
             /* margin: auto; */
             margin-top: 124px;
         }

         @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
           .form-signin {
             -webkit-backdrop-filter: blur(10px);
             backdrop-filter: blur(10px);
           }
         }
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url('images/mountain.jpg');
            background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: 100% 100%;
            /*background-color: #ADABAB;*/
         }
         
         
         .form-signin {
             max-width: 330px;
             padding: 42px 48px;
             margin: 0 auto;
             color: #f5f5f5;
             background-color: #ADABAB;
             border-radius: 10px;
             background: rgba(255, 255, 255,0.2);
             display: table;
             padding: auto;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         .btn-group-lg>.btn, .btn-lg {
             padding: 18px 0px;
             font-size: 18px;
             line-height: 1.3333333;
             border-radius: 6px;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
             margin-bottom: 25px;
             background: none;
             color: #FFFFFF;
             /* border-bottom-color: #f5f5f5; */
             border-bottom-width: 2px;
             border-top-width: 0px;
             border-right-width: 0px;
             border-left-width: 0px;
             width: 227px;
             border-radius: 0;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 38px;
             background: none;
             color: #FFFFFF;
             /* border-bottom-color: #f5f5f5; */
             border-bottom-width: 2px;
             border-top-width: 0px;
             border-right-width: 0px;
             border-left-width: 0px;
             width: 227px;
             border-radius: 0;
         }
         .form-signin input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
           color: #f5f5f5;
           opacity: 1; /* Firefox */

         }
         
         h2{
            text-align: center;
            color: #017572;
         }
         .form-signin h5{
            text-align: center;
            color: #f5f5f5;
         }
         .form-signin a{
            text-decoration: none;
            color: #f5f5f5;
         }
         .form-signin img {
           border-radius: 50%;
         }
      </style>
      
   </head>
	
   <body>
      
      <!-- <h2>Enter Email and Password</h2>  -->
      <div class = "container form-signin" style="display: none;">
         
         <?php
            include('connection.php');
            $txtEmail = $_POST['email'];
            $txtPassword = $_POST['password'];
            $sql = "SELECT * FROM credentials where email='$txtEmail' AND password='$txtPassword' ;";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['email']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['email'] == $row['email'] && 
                  $_POST['password'] == $row['password'] ) {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['is_user']=1;
                  $_SESSION['username']=$row['username'];
                  //echo 'You have entered valid use name and password';
                  header('Location: dashboard.php');
               }else {
                  $msg = 'Wrong email or password';
               }
            }
         ?>
      </div> 
      
      <div class = "container">
         <div class="col-md-12" style="text-align: center;">
            <form class = "form-signin" role = "form" 
               action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
               ?>" method = "post">
               <img src="images/profile.jpg" style="width: 135px">
               <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
               <input type = "email" class = "form-control" 
                  name = "email" placeholder = "Email" 
                  required autofocus></br>
               <input type = "password" class = "form-control"
                  name = "password" placeholder = "Password" required>
               <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
                  name = "login">Login</button>

                  <h5><a href = "logout.php" tite = "Logout">Click here to Logout</a></h5>
            </form>
   			
            
            
         </div> 
      </div>
   </body>
</html>