 <?php 
 include "includes/header.php";
 ?>
        <div class="row">

          <div class="card">
              <div class="card-content">
               <div class="carousel carousel-slider grey">
              
                <a class="carousel-item" href="#"><img src="img/1.jpeg"></a>
                <a class="carousel-item" href="#"><img src="img/5.jpeg"></a>
                <a class="carousel-item" href="#"><img src="img/3.jpeg"></a>
                <a class="carousel-item" href="#"><img src="img/4.jpeg"></a>
                <a class="carousel-item" href="#"><img src="img/5.jpeg"></a>
               </div>
              </div>
           </div>
                      <div class="center">
                         <h6 class="blue-text"><i class="fa fa-users" aria-hidden="true"></i></a> Vender Account</h6>
                           <?php 
                          if(isset($_SESSION['message']))
                           {
                           echo $_SESSION['message'];
                           unset($_SESSION['message']);
                           }
                          ?>
                       <a href="register.php" class="waves-effect waves-light btn blue lighten-5"><span class="black-text">Register</span></a>
                      </div><br>
            
            <div class="center">
              <a href="price.php" class="waves-effect waves-light btn blue lighten-5"><span class="black-text">Get Price</span></a>
             </div>
        </div>
   
        
  <!--this is main sidebar area-->
  
   <marquee direction = "left"><div class="card blue lighten-5 center black-text"> <h4>Welcome to AmazingCG the company of Event Planner And Organizer.</div></h4></marquee>


     <div class="row">
  <!--this is main content area-->
  <div class="col l12 m12 s12">
   <div class="col l2 m3 s6">
    <div class="card hoverable">
      <div class="card-image">
      <img src="img/5.jpeg" alt="" height="300">
      <span class="card-title red-text"><h5>Wedding</h5></span>
     </div>
     <ul class="collapsible">
    <li>
      <div class="collapsible-header">Read more...</div>
      <div class="collapsible-body"><span>this is my first blog which is very nice because it is writtrn by me</span></div>
    </li>
  </ul>
     </div>
  </div>

  <div class="col l2 m3 s6">
    <div class="card hoverable">
      <div class="card-image">
      <img src="img/3.jpeg" alt="" height="300">
      <span class="card-title"><h5>Promotion</h5></span>
     </div>
          <ul class="collapsible">
    <li>
      <div class="collapsible-header">Read more...</div>
      <div class="collapsible-body"><span>this is my first blog which is very nice because it is writtrn by me</span></div>
    </li>
  </ul>
     </div>
  </div>

  <div class="col l2 m3 s6">
    <div class="card hoverable">
      <div class="card-image">
      <img src="img/1.jpeg" alt="" height="300">
      <span class="card-title red-text"><h5>Compaign</h5></span>
     </div>
          <ul class="collapsible">
    <li>
      <div class="collapsible-header">Read more...</div>
      <div class="collapsible-body"><span>this is my first blog which is very nice because it is writtrn by me</span></div>
    </li>
  </ul>
     </div>
  </div>

  <div class="col l2 m3 s6">
    <div class="card hoverable">
      <div class="card-image">
      <img src="img/4.jpeg" alt="" height="300">
      <span class="card-title"><h5>Birthday</h5></span>
     </div>
          <ul class="collapsible">
    <li>
      <div class="collapsible-header">Read more...</div>
      <div class="collapsible-body"><span>this is my first blog which is very nice because it is writtrn by me</span></div>
    </li>
  </ul>
     </div>
  </div>

  <div class="col l2 m3 s6">
    <div class="card hoverable">
      <div class="card-image">
      <img src="img/5.jpeg" alt="" height="300">
      <span class="card-title red-text"><h5>Aniversary</h5></span>
     </div>
          <ul class="collapsible">
    <li>
      <div class="collapsible-header">Read more...</div>
      <div class="collapsible-body"><span>this is my first blog which is very nice because it is writtrn by me</span></div>
    </li>
  </ul>
     </div>
  </div>

  <div class="col l2 m3 s6">
    <div class="card hoverable" height="00">
      <div class="card-image">
      <img src="img/3.jpeg" alt="" height="300">
      <span class="card-title"><h5>Rent</h5></span>
     </div>
     <ul class="collapsible">
    <li>
      <div class="collapsible-header">Read more...</div>
      <div class="collapsible-body"><span>this is my first blog which is very nice because it is writtrn by me</span></div>
    </li>
  </ul>
     </div>
  </div>


        </div>
     </div>

 <div class="row container">
        <h1 class="header black-text center">About<span class="blue-text"> Us</span></h1>
        <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
</div>


<div class="row">
  <img src="img/lap.png" height="140" width="100%">
    <div class="center">
      <h3 class="black-text">Our<span class="blue-text"> Services</span></h3>
    </div>
   <div class="container">
    <div class="col s12 m4 l4">
    <img src="img/1.jpeg" alt="">
   </div>
   <div class="col s12 m4 l4">
    <img src="img/3.jpeg" alt="">
   </div>
   <div class="col s12 m4 l4">
    <img src="img/5.jpeg" alt="">
   </div>
   <div class="col s12 m4 l4">
    <img src="img/1.jpeg" alt="">
   </div>
   <div class="col s12 m4 l4">
    <img src="img/3.jpeg" alt="">
   </div>
   <div class="col s12 m4 l4">
    <img src="img/5.jpeg" alt="">
   </div>
   </div>
</div>

         <div class="row black">
              <div class="center">
                <h2 class="blue-text">Contact<span class="white-text"> Us</span></h2>
               </div>
 <div class="col s6">
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
          <textarea id="textarea1" class="materialize-textarea"></textarea>
         <label for="message">Message:</label>
        </div>
      </div>

         <div class="center">
            <input type="submit" name="signup" class="btn blue white-text" value="Submit" class="btn">
          </div>
    </form>

              </div>
              <div class="col s12 m6 l6">
                <h4 style="color: d4af33; padding-top: 50px;">Contact Information</4>
                <p class="white-text">"Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industriescommon name dummy text often used in the design, printing, and type "</p>
              </div>
             </div>

        
       <?php
       include "includes/footer.php"; 
       ?>
       <script>
          $(document).ready(function(){
           $('.carousel').carousel({
            indicators:true});

          $('.carousel').carousel({
           dist:0});

           $('.carousel.carousel-slider').carousel({
           fullWidth: true});

             setInterval(function()
             {
               $('.carousel').carousel('next');
             },3000);
           
           $('.collapsible').collapsible();
        });
        </script>

        
     