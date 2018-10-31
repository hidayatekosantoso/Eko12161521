<?php
include ('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('id' => '432', 'description' => 'putih');
$result = $myStripe->editproduct($data);
	echo "<pre>"; print_r($result);