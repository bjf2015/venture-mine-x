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

    <section id="content" class="light_section blog-single right-sidebar" style="margin-top: -5%">
        <div class="container">
            <div class="row">

                <!-- content -->
                <div class="col-sm-8 col-md-8 col-lg-9">
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
                            <!-- TODO Replace with graph -->
                            <img src="img/ventures/<?php echo($venture->get_image()); ?>" alt="">
                        </div>

                        <div class="entry-content">
                            <?php echo($venture->get_description()); ?>
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
                                <button class="theme_button inverse" onclick='location.href="bid.php?id=<?php echo($venture->get_id());?>"'>
                                    Get yours
                                </button>
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
    require_once('footer.php');
}