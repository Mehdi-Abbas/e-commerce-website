<?php
  include('connection.php');
  include('header.php');

  $txtName = $_POST['name'];
  $txtEmail = $_POST['email'];
  $txtPhone = $_POST['phone'];
  $txtMessage = $_POST['message'];

  $sql = "INSERT INTO `contact_db` (`name`, `email`, `phone`, `message`) VALUES ( '$txtName', '$txtEmail', '$txtPhone', '$txtMessage');";


  $rs = mysqli_query($conn, $sql);

  if($rs)
  {
    echo "Contact Records Inserted";
  }
  else{
    echo "Contact  Records Not Inserted";
  }


?>

    
    <div class="title">
      <h1>Contact Us</h1>
    </div>
    

    <section class="contact1">
      <div class="container">
        <div class="col-md-8">
          <h2>ASK A QUESTION</h2>
          <form action="contact-us.php" method="post">
            
            <input type="text" placeholder="Your Name" name="name">
            <input type="email" placeholder="Your Mail" name="email"><br>
            <input type="text"  class="phone" placeholder="Your Phone" name="phone"><br>
            <textarea type="text" rows='5' col='5' placeholder="Your Message" name="message"></textarea><br>
            <input type="submit" value="Send Now" name="Submit">
          </form> 
        </div>
        <div class="col-md-4">
          <h2>GET IN TOUCH</h2>
          <h5>Address</h5>
          <p>123 Oth Awe Floor 12 New York, NY 123456</p>
          
          <h5>Phone</h5>
          <p>+123 456 7890</p>
          
          <h5>Email</h5>
          <p>yourname@gmail.com</p>

          <ul>
            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          </ul>

          
          
          
          
        </div>
      </div>
    </section>
    <?php
      include('footer.php');
    ?>