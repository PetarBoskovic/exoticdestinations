<?php
    session_start();
    include "classes/DB.php";
    include "classes/Wishlist.php";
    include "classes/User.php";
    include "classes/Destination.php";

    $user = User::current();
    $destinations = Wishlist::getDestinationsByUserId($user->id);

    include "partials/header.php";
?>

<section class="wrapper">


    <div id="top_bar" class="cf">

        <div id="center_wishlist" class="choose">
            <p>My Wishlist<i class="far fa-heart"></i></p>
        </div>

    </div><!-- end top bar -->

    <div id="destinations-list">
    <div class="flex-container destinations-list">
        <?php if (count($destinations)) : ?>
            <?php foreach($destinations as $destination) : ?>
            <a href="destination.php?id=<?= $destination->id; ?>" class="destination-item">
                <div class="destination-title">
                    <?php echo $destination->title; ?>
                </div>
                <img class="destination-image" src="<?php echo $destination->img_path; ?>" />
            </a>
            <?php endforeach; ?>
            <?php else : ?>
            <p>Your wishlist is empty :(</p>
            <?php endif; ?>
        </div>
    </div>

</section><!-- end choose_bar -->

<?php
    include "partials/footer.php";
?>