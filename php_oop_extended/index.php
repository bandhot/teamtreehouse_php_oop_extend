<?php
include 'inc/config.php';

$filter = ['status'=>'active'];
if (isset($_GET['status'])) {
    $filter['status'] = filter_input(
        INPUT_GET, 
        'status', 
        FILTER_SANITIZE_STRING
    );
}
$directory->selectListings($filter);

$title = "PHP Conferences";
require 'inc/header.php';               
// $test = new ListingPremium(['description' => 'My description with <b>good tags</b> and <a href="http://example.com">bad tags</a>']);

echo '<ul class="nav nav-tabs">';

foreach($directory->getStatuses() as $status) {
    echo '<li role="presentation"';
    if ($filter['status'] == $status) echo 'class="active"';
    echo '><a href="index.php"?status='.$status.'">';
    echo ucwords($status).'</a></li>';
}

foreach ($directory->listings as $listing) {
    include 'views/list_item.php';
}

require 'inc/footer.php';