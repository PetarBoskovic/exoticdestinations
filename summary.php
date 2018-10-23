<?php
    session_start();

    include 'classes/DB.php';
    include 'classes/Reservation.php';
    include 'classes/User.php';
    include 'classes/Destination.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['summary_details'])) {
        
        $destination_id = $_POST['destination_id'];
        $user = User::current();     
        
        if (!$user){
            header('Location: login.php');
        }

        $destination = Destination::getById($destination_id);
        $total_price = $_POST['total_price'];
        $quantity = $_POST['quantity'];
    } else {
        header('Location: index.php');
    }
    
    include 'partials/header.php';
?>

<div class="summary-wrapper">
    <section id="destination-page">
        <div id="top_bar">
            <div class="choose">
                <p>Reservation Details</p>
            </div>
        </div>
        <div class="destination-info">
            <h1><?= $destination->title; ?></h1>
            <p><?= $destination->description; ?></p>
            <img src="<?= $destination->img_path; ?>" alt="<?= $destination->title; ?>">
            <div class="destination-price">Total persons: <?= $quantity; ?></div>
            <div class="destination-price">Price (per person): $<?= $destination->price; ?></div>
            <div class="destination-price">Total Price: $<?= $total_price; ?></div>
            <form action="booked.php" method="post">
                <div>
                    <div id="destination-details">
                        <input type="hidden" name="destination_id" value="<?= $destination->id; ?>" />
                        <input type="hidden" name="total_price" value="<?= $total_price; ?>">
                        <input type="hidden" name="quantity" value="<?= $quantity; ?>">
                        <div class="reserve-holder">
                            <input type="submit" name="confirm" value="Confirm">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div><!-- end wrapper -->
<?php
    include 'partials/footer.php';
?>