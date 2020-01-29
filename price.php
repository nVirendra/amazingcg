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
                   	<span>Please Select Your Require .</span>
    <form class="col s12" action=" " method="POST">
       <div class="col s6 blue">
       <h6>Camera</h6>
       <div class="input-field col s6">
        <p>
           
            <input type="checkbox" class="filled-in" checked="checked"  name="camera_list[]"  value="Nikon = 400/Rs." />
            <span class="black-text">Nikon</span>
           </label>
          </p>
        </div>

        <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="camera_list[]"  value="Canon = 500/Rs." />
            <span class="black-text">Canon</span>
           </label>
          </p>
        </div>
        <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="camera_list[]"  value="Sony = 600/Rs." />
            <span class="black-text">Sony</span>
           </label>
          </p>
        </div>
        <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="camera_list[]"  value="Vivo v9 = 700/Rs." />
            <span class="black-text">Vivo</span>
           </label>
          </p>
        </div>
      </div>

        
       <div class="col s6 red">
       <h6>Lense</h6>
       <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="lense_list[]"  value="lense 18-55 = 400/Rs." />
            <span class="black-text">18-55</span>
           </label>
          </p>
        </div>

        <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="lense_list[]"  value="lense 55-200 = 500/Rs." />
            <span class="black-text">55-200</span>
           </label>
          </p>
        </div>
        <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="lense_list[]"  value="lense 70-300 = 600/Rs." />
            <span class="black-text">70-300</span>
           </label>
          </p>
        </div>
        <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="lense_list[]"  value="lense 90-500 = 700/Rs." />
            <span class="black-text">90-500</span>
           </label>
          </p>
        </div>
      </div>

      <div class="col s6 pink">
       <h6>Album type</h6>
       <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="album_list[]"  value="normal = 400/Rs." />
            <span class="black-text">normal</span>
           </label>
          </p>
        </div>

        <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="album_list[]"  value="karizma= 500/Rs." />
            <span class="black-text">karizma</span>
           </label>
          </p>
        </div>
        <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="album_list[]"  value="bandhan = 600/Rs." />
            <span class="black-text">bandhan</span>
           </label>
          </p>
        </div>
        <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="album_list[]"  value="Special = 700/Rs." />
            <span class="black-text">Special</span>
           </label>
          </p>
        </div>
      </div>

      <div class="col s6 green">
       <h6>Album pages</h6>
       <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="pages_list[]"  value="10 pages = 400/Rs." />
            <span class="black-text">10 pages</span>
           </label>
          </p>
        </div>

        <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="pages_list[]"  value="20 pages = 500/Rs." />
            <span class="black-text">20 pages </span>
           </label>
          </p>
        </div>
        <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="pages_list[]"  value="30 pages = 600/Rs." />
            <span class="black-text">30 pages</span>
           </label>
          </p>
        </div>
        <div class="input-field col s6">
        <p>
           <label>
            <input type="checkbox"  name="pages_list[]"  value=" 50 pages= 700/Rs." />
            <span class="black-text">50 pages</span>
           </label>
          </p>
        </div>
      </div>


        
 <div class="center">
        <input type="submit" name="submit" class="btn blue lighten-5 black-text" value="Send" class="btn">
  </div>       
 	
        
    </form>
  </div>
                  
           </div>
          </div>
        </div>
    </div>
 </div>


		



<?php 
if(isset($_POST['submit']))
{
	if (!empty($_POST['camera_list'])) 
	{
		foreach ($_POST['camera_list'] as $selected) 
		{
			echo $selected."</br>";
		}
	}

	if (!empty($_POST['lense_list'])) 
	{
		foreach ($_POST['lense_list'] as $selected) 
		{
			echo $selected."</br>";
		}
	}

	if (!empty($_POST['album_list'])) 
	{
		foreach ($_POST['album_list'] as $selected) 
		{
			echo $selected."</br>";
		}
	}

	if (!empty($_POST['pages_list'])) 
	{
		foreach ($_POST['pages_list'] as $selected) 
		{
			echo $selected."</br>";
    }
	}
}
?>


<div class="container">
  
      <table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
              <th>Album types</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
            <td>Karizma</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
            <td>Bandhan</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
            <td>Normal</td>
          </tr>
        </tbody>
      </table>
</div>