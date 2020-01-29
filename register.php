 <?php 
 include "includes/header.php";
 ?>
  
<div class="wrapper">
  <div class="container">
      <div class="row" style="margin-top:80px">
          
            <div class="col 16 offset-13 m8 offset-m2 s12">
                <div class="card-pannel center blue lighten-5" style="margin-top:0px">
                  
               
                   <div class="card-panel hoverable"> 
                   <div class="row">
    <form class="col s12" action="register.php" method="POST">
      <div class="row">
        <div class="input-field col s6">
          <input name="shop" type="text" class="validate">
          <label for="shop">Shop Name</label>
        </div>
        <div class="input-field col s6">
          <input name="owner" type="text" class="validate">
          <label for="owner_name">Owner Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="number" type="tel" class="validate">
          <label for="number">Mobile No:</label>
        </div>
        <div class="input-field col s6">
          <input name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
        <div class="input-field col s6">
          <input name="c_password" type="password" class="validate">
          <label for="c_password">Retype Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="services" type="text" class="validate">
          <label for="services">Services</label>
        </div>
      </div>
      
      <div class="row">
        <div class="col s12">
          Location :
          <div class="input-field inline">
            <input name="address" type="text" class="validate">
            <label for="address">Address</label>
          </div>
        </div>
      </div>

        <div class="center">
        <input type="submit" name="signup" class="btn blue lighten-5 black-text" value="Sign Up" class="btn">
        </div>
    </form>
  </div>
                  
           </div>
          </div>
        </div>
    </div>
 </div>

  
 <?php 
 include "includes/footer.php";
 ?>

 <?php 


if(isset($_POST['signup']))
{
  $shop=$_POST['shop'];
  $owner=$_POST['owner'];
  $number=$_POST['number'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $c_password=$_POST['c_password'];
  $Services=$_POST['services'];
  $address=$_POST['address'];

  $shop=mysqli_real_escape_string($con,$shop);
  $owner=mysqli_real_escape_string($con,$owner);
  $number=mysqli_real_escape_string($con,$number);
  $email=mysqli_real_escape_string($con,$email);
  $password=mysqli_real_escape_string($con,$password);
  $c_password=mysqli_real_escape_string($con,$c_password);
  $services=mysqli_real_escape_string($con,$services);
  $address=mysqli_real_escape_string($con,$address);

  $email=htmlentities($email);
  $shop=htmlentities($shop);
  $owner=htmlentities($owner);
  $number=htmlentities($number);
  $email=htmlentities($email);
  $password=htmlentities($password);
  $c_password=htmlentities($c_password);
  $services=htmlentities($services);
  $address=htmlentities($address);
  $password=password_hash($password,PASSWORD_BCRYPT);
  $c_password=password_hash($c_password,PASSWORD_BCRYPT);

    $sql1="select * from venders where shop='$shop' or owner='$owner' or number='$number'";
    $res1=mysqli_query($con,$sql1);
    if(mysqli_num_rows($res1)>0)
    {
      header("Location: index.php");
      $_SESSION['message']="<div class='chip red black-text'>Account Already Exists.</div>";
    }
    else
    {
      $sql="insert into shops(shop,owner,number,email,password,c_password,services,address) values('$shop','$owner','$number','$email','$password','$c_password','$services','$address')";
      $res=mysqli_query($con,$sql);
      if($res)
      {
         header("Location: index.php");
         $_SESSION['message']="<div class='chip green white-text'>You Are Successfully Registered.</div>";
      }
      else
      {
         header("Location: register.php");
         $_SESSION['message']="<div class='chip red black-text'>Sorry Something Wrong ,Please Signup Again</div>";
      }
    }
  
}
?>


