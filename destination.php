<?php
    session_start();
    include 'classes/DB.php';
    include 'classes/Destination.php';
    include 'classes/User.php';
    include 'classes/Wishlist.php';

    $messageForUser = '';

    if (isset($_GET['id'])) {
        // Search destinations in db
        $id = $_GET['id'];
        $destination = Destination::getById($id);
        $user = User::current();
        $isInWishlist = false;
        if ($user) {
            $isInWishlist = Wishlist::entryExists($user->id, $destination->id);
        }
    } else {
        header('Location: index.php');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_wishlist'])) {
        // Add to wishlist
        $user = User::current();

        if (!$user) {
            header('Location: login.php');
        }

        $userId = $user->id;
        $destinationId = $_POST['destination_id'];

        if (!Wishlist::entryExists($userId, $destinationId)) {
            Wishlist::add($userId, $destinationId);
            $messageForUser = 'Successfully added this destination to your wishlist!';
            $isInWishlist = true;
        }
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove_from_wishlist'])) {
        // Remove from wishlist
        $user = User::current();

        if (!$user) {
            header('Location: login.php');
        }

        $userId = $user->id;
        $destinationId = $_POST['destination_id'];

        if (Wishlist::entryExists($userId, $destinationId)) {
            Wishlist::remove($userId, $destinationId);
            $messageForUser = 'Successfully removed this destination from your wishlist!';
            $isInWishlist = false;
        }
    }

    include 'partials/header.php';
?>

<div class="destination-wrapper">
    <section id="destination-page">
        <?php if (!empty($messageForUser)) : ?>
            <div class="alert alert-success"><?= $messageForUser; ?></div>
        <?php endif; ?>
        <div>   
            <h1><?= $destination->title; ?></h1>
            <p><?= $destination->description; ?></p>
            <img src="<?= $destination->img_path; ?>" alt="<?= $destination->title; ?>">
            <div class="destination-price">
                Price&nbsp;(per person)&nbsp;: $<span id="pricePerPerson"><?= $destination->price; ?></span>
            </div>
        </div>
        <div class="form_holder">
            <form action="summary.php" method="post">
                <div>
                    <div id="destination-details">
                        <input type="hidden" name="destination_id" value="<?= $destination->id; ?>" />
                        <input type="hidden" id="formTotalPrice" name="total_price" value="100">
                        <input id="quantity" type="number" name="quantity" placeholder="Number of persons" min="1" max="20" value="1" required>
                        <p>Total price: $<span id="totalPrice"></span> </p>
                        <div class="reserve-holder">
                            <input type="submit" name="summary_details" value="Reserve">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div id="bottom-bar">
            <?php if ($isInWishlist) : ?>
                <form action="" method="post">
                    <div class="wishlist">
                        <input type="hidden" name="destination_id" value="<?= $destination->id; ?>" />
                        <input type="submit" name="remove_from_wishlist" value="Remove from My Wishlist">
                    </div>
                </form>
            <?php else : ?>
                <form action="" method="post">
                    <div class="wishlist">
                        <input type="hidden" name="destination_id" value="<?= $destination->id; ?>" />
                        <input type="submit" name="add_to_wishlist" value="Add to My Wishlist">
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </section>
</div><!-- end wrapper -->
<?php
    include "partials/footer.php";
?>