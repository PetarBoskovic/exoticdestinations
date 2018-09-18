<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exotic Destinations | Register</title>

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

        		<div id="register_container">
                
                
                	<div class="register_top">
                    
                    	<p>Create your account</p>
                    
                    </div>
                    
                    <div class="register_form">
                    
                    	<form action="register_success.php" method="post">
                            
                            <label>Username</label><br>
                            <input type="text" name="username" autocomplete="off" placeholder="&nbsp;Username" required>
                            
                            <label>E-mail</label><br>
                            <input type="text" name="email" autocomplete="on" placeholder="&nbsp;E-mail" required>
                            
                            <label>Password</label><br>
                            <input type="password" name="password" placeholder="&nbsp;Password" required>
                            <input type="submit" name="login" value="create account">
                            
                        <div class="yes_account">
                       
                        	<a href="login.php">I already have an account.<span>Log In!</span></a>
                        
                        </div>
                        
                        </form>
                        
                        
                    
                    </div><!-- end register_form --> 
               
                
                </div><!-- end register_container -->  
    
</section><!-- end choose_bar -->      
    		
   
         

</body>
</html>
