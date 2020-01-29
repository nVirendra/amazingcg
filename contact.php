<?php 
include "includes/header.php";
?>

<div class="row">
	<div class=" card center" style="padding-top: 0px;">
          	<img src="img/plx1.jpg" height="150" width="100%">
          	  <h4 class="blue-text">View<span class="black-text"> On Map</span></h4>
          	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29743.326511675845!2d81.65240572118465!3d21.274799740940047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28e78c9eedd9ab%3A0xc8c62e7ba9530e77!2sMowa%2C+Raipur%2C+Chhattisgarh!5e0!3m2!1sen!2sin!4v1543851349447" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

          	 <div class="row white">
          	 	<div class="center">
          	 		<h2 class="blue-text">Contact<span class="white-text"> Us</span></h2>
          	 	 </div>
 <div class="col s6">
    <?php 
     if(isset($_POST['submit']))
     {
       $name=$_POST['name'];
       $email=$_POST['email'];
       $number=$_POST['number'];
       $comment=$_POST['comment'];

       $name=mysqli_real_escape_string($con,$_POST['name']);
       $email=mysqli_real_escape_string($con,$_POST['email']);
       $number=mysqli_real_escape_string($con,$_POST['number']);
       $comment=mysqli_real_escape_string($con,$_POST['comment']);
       
       $name=htmlentities($_POST['name']);
       $email=htmlentities($_POST['email']);
       $number=htmlentities($_POST['number']);
       $comment=htmlentities($_POST['comment']);
          
       $to="virendranishad8943@gmail.com";
       $header="From $name<$email>";
       $subject="Message From $name";
       $message="Name: $name \n\n Email: $email \n\n Number:> $number \n\n Message: \n\n $message";
       
        if(empty($name) OR empty($email) OR empty($number) OR empty($comment))
        {
          $error="All Fields Are Required";
        }
        else
        {
          if(mail($to,$subject,$message,$header))
          {
            $msg="Message Has Been Sent";
          }
          else
          {
            $error="Message Has Not Been Sent";
          }
        }
     }
    ?>
   <form class="col s12" action="" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input name="name" type="text" class="validate">
          <label for="name">Name</label>
        </div>
        <div class="input-field col s12">
          <input name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="number" type="tel" class="validate">
          <label for="number">Mobile No:</label>
        </div>
      </div>

      <div class="row">
      	<div class="input-field col s12">
          <textarea name="message" id="textarea1" class="materialize-textarea"></textarea>
         <label for="message">Message:</label>
        </div>
      </div>

      <?php 
        if(isset($msg))
        {
          echo "<span class='center black-text'>$msg</span>";
        }
        if(isset($error))
        {
          echo "<span class='center black-text'>$error</span>";
        }
      ?>

         <div class="center">
            <input type="submit" name="submit" class="btn blue white-text" value="Submit" class="btn">
          </div>
    </form>

          	  </div>
          	  <div class="col s12 m6 l6">
          	  	<h4 style="color: d4af33; padding-top: 50px;">Contact Information</4>
          	  	<p class="white-text">"Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industriescommon name dummy text often used in the design, printing, and type "</p>
          	  </div>
          	 </div>

          	 	<div class="container">
            <div class="row" style="padding-top: 100px">
            	<div class="col s12 m4 l4">
            		<div class="card blue lighten-5">
                  <h6 class="black-text center" style="padding-top: 20px">Address</h6>
            		</div>
            	</div>
            	<div class="col s12 m4 l4">
            		<div class="card blue lighten-5">
            		<h6 class="black-text center" style="padding-top: 20px">Contact No:</h6>
            		</div>
            	</div>
            	<div class="col s12 m4 l4">
            		<div class="card blue lighten-5">
            		<h6 class="black-text center" style="padding-top: 20px">Email</h6>
            		</div>
            	</div>
            </div>
    </div>
</div>
	
<?php 
include "includes/footer.php";
?>
