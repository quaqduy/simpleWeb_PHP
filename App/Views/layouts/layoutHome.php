<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./public/css/layout.css">
    <link rel="stylesheet" type="text/css" href="./public/css/home.css">
</head>
<body>
    <div id="grid-container">
        <div id="header" class='bg-dark'>
            <div class='container'>
                <div class="iconUser">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="color: white !important;">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </div>
            </div>
        </div>
        <div id="content">
            <?php
            require_once "./App/Views/".$data['viewContent'].".php";
            ?>
        </div>
        <div id="footer" class='bg-dark'></div>
    </div>
</body>
</html>