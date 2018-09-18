<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exotic Destinations | Home Page</title>

<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">


<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/jquery-ui.theme.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="js/jquery-ui.js"></script>

<script>

		$(document).ready(function() {
				$(".datepicker").datepicker(); 
		});
		

</script>
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
                       <p>Offers</p>
                 </div>
                        
                 <div class="login">
                       <a href="login.php">Login</a>
                       <a href="register.php">Register</a>
                 </div>
                
     </div><!-- end top bar -->
        
     <div class="form_holder">
        
        <form action="destination.php" method="post">
        
            <div id="middle_bar" class="cf">
            
                <div class="destination_holder">
                
                    <select name="destination_title" placeholder="&nbsp;Choose Destination">
                            <option  value="1">&nbsp;Choose Destination</option>
                            <option  value="2">&nbsp;Choose Destination</option>
                            <option  value="3">&nbsp;Choose Destination</option>
                            <option  value="4">&nbsp;Choose Destination</option>
                    </select>
                        
                    <div id="date_holder">
                        
                          <div class="date_holder_left" >
                               <input type="hidden" name="date_from_value" value="#">
                               <input type="text" class="datepicker"  name="date_from" autocomplete="off" placeholder="Date from">
                          </div>
                            
                          <div class="date_holder_right">
                               <input type="hidden" name="date_to_value" value="#">
                               <input type="text" class="datepicker" name="date_to" autocomplete="off" placeholder="Date to">
                          </div>
                        
                    </div>
                 
               </div>
                
           </div><!-- end middle bar -->
                        
           <div id="bottom_bar" class="cf">
                 
                        <div class="continue_holder wrapper">
                            <input type="submit" name="reservation_details" value="Continue">
                        </div>
                        
            </div><!-- end bottom bar -->
                    
     </form>
   
  </div><!-- end form_holder -->  

                 
</section><!-- end choose_bar -->      
    		
  
         

</body>
</html>
