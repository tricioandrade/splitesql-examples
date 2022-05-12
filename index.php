<?php 

if(isset($_POST['btn-submit'])):





endif;


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
                    <input type="text" class="form-control" id="inputUserName">
                </div>
                <div class="col-6">
                    <label for="inputEmail4" class="form-label"><i class="fa fa-envelope"></i>&nbsp;Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label"><i class="fa fa-lock"></i>&nbsp;Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label"><i class="fa fa-map"></i>&nbsp;Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
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