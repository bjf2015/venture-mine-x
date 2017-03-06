<?php
/**
 * @author JKetelaar
 */
require_once('header.php');
?>
<section id="mainslider" class="color_section diagonal_section with_background_image" style="height: 500px;">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <div style="margin-top: 20%"></div>
                    <div class="slide_description_wrapper">
                        <div class="container">
                            <div class="slide_description row">
                                <div class="col-sm-12">
                                    <p data-animation="fadeInLeft">Invention auctions</p>
                                    <h3 data-animation="fadeInLeft">
                                        <strong>
                                            Your individual stake in innovation<br>
                                            at your price
                                        </strong>
                                    </h3>
                                    <div data-animation="fadeInRight">
                                        <a href="about.php" class="theme_button inverse">Start here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section id="blog" class="light_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 to_animate">
                    <h2 class="section_header text-center">Our VentureMines</h2>

                    <p>Check out our latest auctions</p>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($ventures->get_ventures() as $venture) {
                    ?>
                    <div class="col-sm-6" onclick="location.href = 'item.php?id=<?php echo($venture->get_id()); ?>';">
                        <div class="blog-item">
                            <img src="img/ventures/<?php echo($venture->get_image()); ?>" alt="">

                            <div class="blog-item-info">
                                <h3>
                                    <a href="item.php?id=<?php echo($venture->get_id()); ?>"><b><?php echo($venture->get_name()); ?></b></a>
                                </h3>

                                <p style="color: #F6F6F6">Ends on
                                    <?php
                                        $timestamp = strtotime($venture->get_end_date());
                                        echo(date("m-d-Y", $timestamp));
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
<?php
require_once('footer.php');