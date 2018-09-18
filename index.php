<?php
    session_start();
    include 'classes/DB.php';
    include 'classes/Destination.php';

    $destinations = Destination::getAll();
    // include 'classes/User.php';

    // $user = User::current();

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
            
                <div class="destination_holder">
                    <?php if (count($destinations)) : ?>
                    <select name="destination_title">
                        <option value="0">Choose your destination</option>
                        <?php foreach($destinations as $destination) : ?>
                        <option value="<?php echo $destination->id; ?>"><?php echo $destination->title; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php else : ?>
                    <p>Trenutno nemamo destinacija</p>
                    <?php endif; ?>
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
    		
  
<?php
    include "partials/footer.php";
?> 