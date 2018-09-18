<?php
    include "partials/header.php";
?> 
        
<section id="choose_bar" class="wrapper">

        		
    <div id="top_bar"  class="cf">
                
                 <div class="choose">
                       <p>Reservation details</p>
                 </div>
                        
                 <div class="login">
                       <a href="login.php">Login</a>
                       <a href="register.php">Register</a>
                 </div>
                
     </div><!-- end top bar -->
        
     <div class="form_holder">
        
        <form action="booked.php" method="post">
        
            <div id="middle_bar"  class="cf">
            
                <div id="destination_details">
                	
                    <label>Customer name:&nbsp;:&nbsp; Petar Boskovic</label>
					<label>Destination&nbsp;:&nbsp; Gozo, Malta</label>
                    <img src="images/gozo_malta.jpg" alt="gozo_malta">
                    <label>Number of passengers&nbsp;: 7 </label>
                	<label>Total price&nbsp;: $200 </label>
                
                
                
                     <div class="reserve_holder">
                          <input type="submit" name="summary_details" value="Confirm">
                     </div>
                 
               </div><!-- end destination_details --> 
               
           </div><!-- end middle bar -->
           
     </form>
   
  	</div><!-- end form_holder -->  
                          
                 
</section><!-- end choose_bar -->      
    		
<?php
    include "partials/footer.php";
?> 