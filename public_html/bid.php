<?php
/**
 * @author JKetelaar
 */
require_once('header.php');
$venture = $ventures->get_venture($_GET['id']);
if ($venture == null) {
    echo('<script>location.href = "index.php"</script>');
} else {
    ?>

    <section id="content" class="light_section blog-single right-sidebar" >
        <div class="container">
            <div class="row">

                <!-- content -->
                <div class="col-sm-8 col-md-8 col-lg-9" style="margin-bottom: 500px; margin-top: -5%">
                    <article class="post type-post with-share-buttons">
                        <h2 class="entry-title">
                            <?php echo($venture->get_name()); ?>
                        </h2>
                        <header class="entry-header">
                            <div class="entry-meta">
                            <span class="date">
                                <time
                                    class="entry-date"><?php echo(date("m-d-Y", strtotime($venture->get_end_date()))); ?></time>
                            </span>
                            <span class="item-likes">
                                <?php echo($venture->bid_amount()); ?> bids so far
                            </span>
                            </div>
                            <!-- .entry-meta -->

                        </header>
                        <!-- .entry-header -->

                        <div class="entry-thumbnail">
                            <div id="chartContainer"></div>
                        </div>
                    </article>

                </div>
                <!-- eof content -->


                <!-- Sidebar -->
                <aside class="col-sm-4 col-md-4 col-lg-3">

                    <div class="widget widget_text">
                        <h3 class="widget-title">Invest!</h3>

                        <div class="textwidget">
                            Make an offer. Bid how many shares you want at the price you are willing to pay!
                            <hr>
                            <?php
                            if ($venture->still_valid()) {
                                ?>
                                You can get them from $<?php echo($venture->get_minimum()); ?> to $<?php echo($venture->get_maximum()); ?>
                                <hr>
                                <button class="theme_button inverse" data-toggle="modal"
                                        data-target=".<?php echo(($users->is_loggedin() ? "bid" : "signup")) ?>">
                                    Get yours
                                </button>
                                <input type="hidden" id="min_value" value="<?php echo($venture->get_minimum()); ?>">
                                <input type="hidden" id="max_value" value="<?php echo($venture->get_maximum()); ?>">
                                <input type="hidden" id="venture_id" value="<?php echo($venture->get_id()); ?>">
                            <?php
                            } else {
                                ?>
                                <p>Unfortunately this invention is sold out</p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </aside>
                <!-- eof sidebar -->
            </div>
        </div>
    </section>
    <?php
    if ($users->is_loggedin()) {
        include_once('modals/bid-modal.html');
    } else {
        include_once('modals/login-modal.html');
    }
    $custom_scripts = array(($users->is_loggedin() ? "js/custom/bid.js" : "js/custom/sign.js"));
    require_once('footer.php');
}