<!doctype html>
<html lang="en">

<?php
include_once __DIR__ . "/../../dui/_index.php";

Head('Natours')->css('css/style.css')->show();
// <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
// <link rel="shortcut icon" type="image/png" href="img/favicon.png">
?>

<body class="flat-style">
        <div class="display-table">
                <div class="display-content p-0 ">
                        <div class="container m-0 hero-bg" id="hero">
                                <!-- REFACTOR: Image component -->
                                <div class="image-wrapper" id="logo-wrapper">
                                        <img src="img/logo-white.png" alt="Logo" class="logo">
                                </div>

                                <div class="wrapper" id="hero-content">
                                        <h1 class="heading-primary">
                                                <span class="main"><span class="highlight-color ">Out</span>doors</span>
                                                <span class="sub">is where <span class="highlight-color ">life</span> happens</span>
                                        </h1>
                                </div>

                        </div>
                </div>
        </div>
        <script async src="../../dui/js/main.js" type="module"></script>
</body>

</html>