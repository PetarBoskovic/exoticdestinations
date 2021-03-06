<?php
    session_start();
    include 'autoload.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['confirm'])) {
        
        $destination_id = $_POST['destination_id'];
        $user = User::current();     
        
        if (!$user) {
            header('Location: login.php');
        }

        $destination = Destination::getById($destination_id);
        $total_price = $_POST['total_price'];
        $quantity = $_POST['quantity'];
        $reservation = new Reservation($user->id, $destination, $quantity, $total_price);
        $reservationId = $reservation->make();
    } else {
        header('Location: index.php');
    }
    
    include 'partials/header.php';
?> 
<section id="choose-bar">
    <div id="booked_container">
        <div class="booked-top">
            <p>Dear <?= $user->username; ?>, you succesfully booked your destination!
            Your reservation ID is <?= $reservationId; ?>.</p>
        </div>
    </div>
</section>
<?php
    include 'partials/footer.php';
?>
