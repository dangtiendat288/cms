<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

include('includes/config.php');
include('includes/database.php');
include('includes/functions.php');
secure();

include('includes/header.php');

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            Dashboard
        </div>

    </div>
</div>

<?php
include('includes/footer.php');
?>