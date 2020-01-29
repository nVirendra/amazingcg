<?php  
include "includes/header.php";
?>


 <div class="parallax-container">
 	    <div class="container">
 	    	<h3 class="center blue-text" style="padding-top: 200px">The Company OF Event Planner | Organizer .</h3>
<div class="center">
	
   <a class="waves-effect waves-light btn blue modal-trigger" href="#modal1">more about</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <p>Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-pink btn-flat">Close</a>
    </div>
  </div>

  

</div>
 	    </div>
      <div class="parallax"><img src="img/plx1.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <h1 class="header blue-text center">About<span class="black-text"> Us</span></h1>
        <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p><br><br><br>
        <h1 class="center blue-text">Who We<span class="black-text"> Are</span></h1>
        <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
      </div>
    </div>
    <div class="parallax-container">
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
      <div class="parallax"><img src="img/plx1.jpg" class="responsive-img"></div>
    </div>

<?php 
include "includes/footer.php";
?>

<script>
	$(document).ready(function(){
    $('.parallax').parallax();
    $('.collapsible').collapsible();
    $('.modal').modal();
  });
</script>