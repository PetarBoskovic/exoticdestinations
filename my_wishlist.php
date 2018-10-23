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

<section id="wishlist-wrapper">
    <div class="top-bar">
        <div id="center-wishlist">
            <p>My Wishlist&nbsp;<i class="far fa-heart"></i></p>
        </div>
    </div>
    <div id="destinations-list">
    <div class="flex-container destinations-list">
        <?php if (count($destinations)) : ?>
            <?php foreach($destinations as $destination) : ?>
            <a href="destination.php?id=<?= $destination->id; ?>" class="destination-item">
                <div class="destination-title">
                   <h1><?php echo $destination->title; ?></h1>
                </div>
                <div class="destination-image-holder" style="background-image: url('<?php echo $destination->img_path; ?>');"></div>
            </a>
            <?php endforeach; ?>
            <?php else : ?>
            <p>Your wishlist is empty :(</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
    include "partials/footer.php";
?>