<?php
/**
 * @author JKetelaar
 */
require_once('header.php');
?>


    <section class="light_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p><img src="img/ventures/3.jpg" alt=""></p>

                    <p>Now you can buy equity shares in new inventions using VentureMineX. Participate in the auction, and bid on innovation at the ground floor. Bid  on shares at whatever price you think the ideas are worth.  </p>
                    <ul class="list1">
                        <li><b>How the auction works</b></li>
                    </ul>
                    <p style="font-size: 14px;">Each participant in the auction bid a quantity at a price they choose
                        The bids are considered to be the maximum price that each bidder is willing to pay per unit
                        at the time of purchase, and the desired quantity at that price
                        VentureMineX will look to the highest bid and determine whether the total quantity of units
                        on offer may be sold at that price
                        If not, VentureMineX will look to the second highest bid and determine if at that price plus
                        the first bid price clear the total quantity of units on offer for sale
                        VentureMineX continues this iterative process
                        As the price reduces, so the quantity of units being demanded at that price increases
                        VentureMineX works it way down lower and lower until it finalizes a level at which supply
                        meets demand for the quantity of units on offer.</p>
                    <ul class="list1">
                        <b><li>A Successful VentureMineX Bidder</li></b>
                    </ul>
                    

                    <p style="font-size: 14px;">
                        <ul>
  <li>Successful bidders are those that bid at the unit clearing price or above it.</li>
  <li>Successful bidders pay the same unit clearing price</li>
  <li>Priority is given to the highest bidder first, giving them the number of units requested,
                        then the second highest bidder and so forth until the supply of the commodity is exhausted.</li>
</ul>
                        
                        </p>

                    <img src="img/graph.jpg"/>
                </div>
                <div class="col-sm-6">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        Auction 1: The Centrax
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p><i>A handheld tool that identifies the middle point on a laser-generated line
                                            projected onto a surface</i>
                                         
                                    <h4>Business problem</h4>
                                    Users who quickly need to identify the middle of a targeted surface area
                                    <br>
                                    <h4>Example uses</h4>
                                    An interior designer is staging a home, and wants furniture and other household
                                    goods to look symmetrical and organized—such as centering a couch against a
                                    wall, placing photos on a partition, or hanging a mirror.
                                    </p>
                                     <br>
<a href="item.php?id=1" class="theme_button inverse">Find out more about this Venture!</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"
                                       class="collapsed">
                                        Auction 2: The Parallax 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p><i>Takes measurement of the space between targeted endpoints from a distance</i>
                                        <br><br>
                                        Measures from a distance the length between two user-targeted laser endpoints

                                        <h4>Business problem</h4>
                                        A person wants to identify the length of a segment in a hard to reach area. Or
                                        wants to quickly measure the space of an area without having to move
                                         
                                        <h4>Example uses</h4>
                                        A handyman wants to measure the span between two vents in the ceiling. The
                                        ceiling is too high to measure using a measuring tape
<br>
<a href="item.php?id=2" class="theme_button inverse">Find out more about this Venture!</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php
require_once('footer.php');
?>