<?php

require_once 'vendor/autoload.php';

use Tricioandrade\Splitesql\Query;

const host = 'localhost';
const user = 'root'; 
const database = 'splitesql';
const charset = 'utf8';


/**
 * Setting Connection
 */
$conne = new Query();
$conne->connectDB(host, user,  charset, database, '');

if(isset($_POST['btn-submit'])):

    $customer = new ArrayObject();
    $customer->name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $customer->email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $customer->phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_EMAIL);

    /**
     * @method insert
     * Inserting data With insert method
     */

    $conne->insert('customers', $customer);
    if ($conne->result()->queryState):
        echo "<div class='container text-center'>Customer is Inserted</div>";
    endif;
endif;

$conne->where('name', 'splitesql', '1');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="node_modules/bootstrap5/src/css/bootstrap.min.css">
    <title>splitesql - Example usage</title>
</head>
<body>
    <div class="container">
        <div class="row col-6 m-auto">
            <form action="" method="post" class="row g-3">
                <div class="col-md-6">
                    <label for="inputUserName" class="form-label"><i class="fa fa-user"></i>&nbsp;Name</label>
                    <input type="text" class="form-control" id="inputUserName" name="name">
                </div>
                <div class="col-6">
                    <label for="inputEmail4" class="form-label"><i class="fa fa-envelope"></i>&nbsp;Email</label>
                    <input type="email" class="form-control"  name="email" id="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label"><i class="fa fa-map"></i>&nbsp;Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <button name="btn-submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <hr>
        <div class="row col-6 m-auto">
            
        </div>
    </div>
    <script src="node_modules/bootstrap5/src/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"></script>
</body>
</html>