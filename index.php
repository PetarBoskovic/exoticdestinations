<?php
    session_start();
    include 'classes/DB.php';
    include 'classes/Destination.php';

    $destinations = Destination::getAll();

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['destination_title'])) {
        // Search destinations in db
        $destinationTitle = $_GET['destination_title'];
        $destinations = Destination::getByTitle($destinationTitle);
    }

    include "partials/header.php";
?>
<div class="wrapper">
    <section id="destinations-page">
        <div id="top_bar" class="cf">
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
                <img class="destination-image" src="<?php echo $destination->img_path; ?>" />
            </a>
            <?php endforeach; ?>
            <?php else : ?>
            <p>Sorry, no destinations, yet.</p>
            <?php endif; ?>
        </div>
    </section><!-- end choose_bar -->

</div>

<?php
    include "partials/footer.php";
?>