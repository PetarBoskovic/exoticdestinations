<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exotic Destinations | Destination Page</title>

<link href="css/style.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>


</head>

<body>

<header id="header">
    	
        <div class="wrapper cf">
        
            <div id="logo">
            	<a href="index.php">
                	<img src="images/exotic_destinations_logo.svg" alt="Exotic Destination">
                </a>
         	</div>
            
        <nav id="nav">
        	
            <ul>
                            
                	<li><a href="index.php">Home</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                    <li><a href="my_wishlist.php">My Wishlist<i class="far fa-heart"></i></a></li>
                 
         	</ul>
        
        </nav>
        
        </div>
        
</header>  
        
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
    		
  
         

</body>
</html>
