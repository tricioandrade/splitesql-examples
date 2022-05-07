<?php ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" href="node_modules/bootstrap5/src/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row col-6 m-auto">
            <form action="" method="post" class="form-row g-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>

                <label for="basic-url" class="form-label">Your vanity URL</label>
                <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
                </div>
            </form>
        </div>
    </div>
    <script src="node_modules/bootstrap5/src/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"></script>
</body>
</html>