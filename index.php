<?php
    session_start();
    include 'classes/DB.php';
    include 'classes/Destination.php';
    include 'classes/User.php';

    $destinations = Destination::getAll();

    $messageForUser = "";

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
        $messageForUser = 'Welcome ' . User::current()->username . '!';
        $_SESSION['logged_in'] = false;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['destination_title'])) {
        // Search destinations in db
        $destinationTitle = $_GET['destination_title'];
        $destinations = Destination::getByTitle($destinationTitle);
    }

    include "partials/header.php";
?>
<div class="main-wrapper">
    <section id="destinations-page">
    <?php if (!empty($messageForUser)) : ?>
        <div class="alert alert-success"><?= $messageForUser; ?></div>
    <?php endif; ?>
        <div id="top-bar" class="cf">
            <div class="choose">
                <p>Search Offers</p>
            </div>
        </div><!-- end top bar -->

        <div class="form-holder">
            <form action="" method="get">
                <div class="flex-container">
                    <div class="greedy-child">
                        <input type="text" name="destination_title" placeholder="Enter destination name" class="search-input" value="<?php echo (isset($destinationTitle)) ? $destinationTitle : ''; ?>"/>
                    </div>
                    <div class="humble-child">
                        <div class="input-button-holder">
                            <input type="submit" name="reservation_details" value="Search" class="search-button">
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- end form_holder -->
        <div class="flex-container destinations-list">
            <?php if (count($destinations)) : ?>
            <?php foreach($destinations as $destination) : ?>
            <a href="destination.php?id=<?= $destination->id; ?>" class="destination-item">
                <div class="destination-title">
                    <?php echo $destination->title; ?>
                </div>
                <div class="destination-image-holder" style="background-image: url('<?php echo $destination->img_path; ?>');"></div>
            </a>
            <?php endforeach; ?>
            <?php else : ?>
            <p>Sorry, no destinations!</p>
            <?php endif; ?>
        </div>
    </section>

</div>

<?php
    include "partials/footer.php";
?>