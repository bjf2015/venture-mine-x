<?php
/**
 * @author JKetelaar
 */
$action = null;
if (isset($_GET['action']) && ($action = $_GET['action']) != null) {
    require_once('include.php');
    switch ($action) {
        case "login":
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (is_valid($email) && is_valid($password)){
                if (($fail_result = $users->login($email, $password)) !== true){
                    echo($fail_result);
                }else{
                    echo("correct");
                }
            }
            break;
        case "register":
            $email = $_POST['email'];
            $password = $_POST['password'];
            $first_name = $_POST['first'];
            $last_name = $_POST['last'];

            if (is_valid($email) && is_valid($password) && is_valid($first_name) && is_valid($last_name)){
                $users->add_user($email, $password, $first_name, $last_name);
                if (($fail_result = $users->login($email, $password)) !== true){
                    echo($fail_result);
                }else{
                    echo("correct");
                }
            }
            break;
        case "bid":
            $venture_id = $_POST['venture'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            if (is_valid($venture_id) && is_valid($price) && is_valid($amount)) {
                $user = $users->get_loggedin_user();
                if (($fail_result = $bids->add_bid($user, $venture_id, $price, $amount)) !== true){
                    echo($fail_result);
                }else{
                    echo("correct");
                }
            }
            break;
        case "updates":
            header('Content-Type: application/json');
            $time = time() - 5;
            if (is_valid($time) && is_numeric($time)) {
                $latest_bid = $bids->get_last_bid_since(date("Y-m-d H:i:s", $time));
                if ($latest_bid != null) {
                    $result = array(
                        "result"     => 1,
                        "price"      => $latest_bid->get_price(),
                        "amount"     => $latest_bid->get_amount(),
                        "venture_id" => $latest_bid->get_venture()->get_id(),
                        "venture"    => $latest_bid->get_venture()->get_name()
                    );
                    echo(json_encode($result));
                } else {
                    echo(json_encode(array("result" => 0)));
                }
            }
            break;
        case "graph":
            if (is_valid($_POST['id'])){
                $data_points = array();

                $venture = $ventures->get_venture($_POST['id']);
                $prices = array();
                $time = time() - 5;
                foreach ($venture->get_bids() as $bid) {
                    if (strtotime($bid->get_date()) > $time) {
                        $prices[$bid->get_price()] += $bid->get_amount();
                    }
                }
                krsort($prices);

                foreach ($prices as $key => $value){
                    array_push($data_points, array("x" => $key , "y" => $value));
                }

                echo json_encode($data_points, JSON_NUMERIC_CHECK);
            }
            break;
        case "totalgraph":
            if (is_valid($_POST['id'])){
                $data_points = array();

                $venture = $ventures->get_venture($_POST['id']);
                $prices = array();
                foreach ($venture->get_bids() as $bid) {
                    $prices[$bid->get_price()] += $bid->get_amount();
                }
                krsort($prices);

                foreach ($prices as $key => $value){
                    array_push($data_points, array("x" => $key , "y" => $value));
                }

                echo json_encode($data_points, JSON_NUMERIC_CHECK);
            }
            break;
    }
}

function is_valid($value){
    return isset($value) && !empty($value);
}