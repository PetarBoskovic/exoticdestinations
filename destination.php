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
        
        <form action="account.php" method="post">
        
            <div id="middle_bar"  class="cf">
            
                <div id="destination_details">
                	
					<label>Destination&nbsp;:&nbsp; Gozo, Malta</label>
                    <label>Destination description&nbsp;:&nbsp;<span>The enchanting island of Gozo is an integral part of the Maltese archipelago. Besides being one of the top diving destinations in the Mediterranean, it boasts of mystical backwaters, historical forts and amazing panoramas.</span></label>
                    <img src="images/gozo_malta.jpg" alt="gozo_malta">
                    <label>Price&nbsp;(per person)&nbsp;: $100 </label>
                    <input type="number" name="quantity" placeholder="&nbsp;Number of persons" min="1" max="20" required>
                	<label>Total price&nbsp;: $200 </label>
                
                
                
                     <div class="reserve_holder">
                     
                                <input type="submit" name="summary_details" value="Reserve">
                     </div>
                 
               </div><!-- end destination_details --> 
               
           </div><!-- end middle bar -->
           
     </form>
   
  	</div><!-- end form_holder -->  
                          
           <div id="bottom_bar" class="cf">
                        
                    <form action="wishlist_success.php" method="post">
                        <div class="wishlist wrapper">
                            <input type="submit" name="add_to_wishlist" value="Add to My Wishlist">
                        </div>
                    </form>
                        
            </div><!-- end bottom bar -->
                 
</section><!-- end choose_bar -->      
    		
<?php
    include "partials/footer.php";
?> 