<?php
    session_start();
    include 'classes/DB.php';
    include 'classes/Destination.php';

    $destinations = Destination::getAll();
    // include 'classes/User.php';

    // $user = User::current();

    // TODO: Ako je poslat POST request uzeti 'destination_title'
    // Uraditi pretragu sa Destinations::getAllByTitle($destination_title);
    // getAllByTitle ima SQL query sa LIKE %:destination_title%
    // getAllByTitle vraca niz destinacija
    // ako nema rezultata napisi error poruku
    // ako ima rezultata pregazi $destinations sa vracenim destinacijama

    include "partials/header.php";
?> 
        
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
            
                <div class="destinations_holder">
                    <input type="text" name="destination_title" placeholder="Enter destination name" />
                    <div>
                        <?php if (count($destinations)) : ?>
                            <?php foreach($destinations as $destination) : ?>
                                Naslov: <?php echo $destination->title; ?>
                                <img src="<?php echo $destination->img_path; ?>" />
                            <?php endforeach; ?>
                        <?php else : ?>
                        <p>Trenutno nemamo destinacija</p>
                        <?php endif; ?>
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
    		
  
<?php
    include "partials/footer.php";
?> 