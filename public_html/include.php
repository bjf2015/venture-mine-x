<?php
/**
 * @author JKetelaar
 */
require_once('app/Configuration.php');
require_once('app/datastore/Connector.php');
require_once('app/datastore/Worker.php');
require_once("app/users/Users.php");
require_once("app/bids/Bids.php");
require_once("app/ventures/Ventures.php");
$configuration = new Configuration();
$connector = new Connector($configuration);
$worker = new Worker($connector->get_connection());
$users = new Users($worker, $configuration);
$ventures = new Ventures($worker, $users);
$bids = new Bids($worker, $users, $ventures);