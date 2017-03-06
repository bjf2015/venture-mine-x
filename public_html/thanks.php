<?php
/**
 * @author JKetelaar
 */
require_once('header.php');
$venture = $ventures->get_venture($_GET['id']);
$bid = $bids->get_last_bid($users->get_loggedin_user());
if ($venture == null || $bid == null) {
    echo('<script>location.href = "index.php"</script>');
} else {
    ?>

    <section id="content" class="light_section page404 parallax">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-center">

                    <h2 class="module-header"><strong>Thanks for your bid</strong></h2>

                    <p>We have successfully received your bid for <b><?php echo($venture->get_name()); ?></b>, we will notice you as soon as the venture is
                        over.</p>
                    <p>You have offered $<?php echo($bid->get_price()) ?> per share for <?php echo($bid->get_amount()) ?> shares.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="bottomlogo" class="dark_section action_section gradient">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 text-center to_animate" data-animation="expandOpen">
                    <a href="index.php" class="logo">
                        <strong>
                            <span class="highlight">V</span><span class="highlight2">ent</span>ure mine
                        </strong>
                        <span>Next Level Creativity</span>
                    </a>
                </div>

            </div>

        </div>
    </section>
    <?php
    require_once('footer.php');
}
?>