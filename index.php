<!doctype html>
<html lang="en">

<?php
include_once __DIR__ . "/../../dui/_index.php";

Head('Natours')
        ->meta(author: "enginoobz")
        ->css('css/style.css')
        // FIX: decrete movement on page load if using animated class but load its css async
        // ADHOC: load sync, or extract the used class from Animate.css
        ->css('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css')
        ->show();
// <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
// <link rel="shortcut icon" type="image/png" href="img/favicon.png">
?>

<body class="flat-style ">
        <div class="display-table">
                <div class="display-content p-0 ">
                        <!-- TODO-DUI: make section component and customize individually in setting (add UI style in <section>, not <body>) -->
                        <section class="container m-0 hero-bg" id="hero">
                                <!-- REFACTOR-DUI: Image component -->
                                <div class="image-wrapper" id="logo-wrapper">
                                        <img src="img/logo-white.png" alt="Logo" class="logo">
                                </div>

                                <!-- REFACTOR - DUI: Headline component -->
                                <div class="wrapper text-center headline">
                                        <h1 class="headline__text">
                                                <span class="headline__text--main animate__animated animate__fadeInLeft"><span class="highlight-color ">Out</span>doors</span>
                                                <span class="headline__text--sub animate__animated animate__fadeInRight">is where <span class="highlight-color ">life</span> happens</span>
                                        </h1>
                                        <?php Button(label: "Discover our tours", wrapperClass: "mt-5 animate__animated animate__fadeInUp", class: "uppercase headline__btn")->show() ?>
                                </div>

                        </section>
                </div>
        </div>
        <script async src="../../dui/js/main.js" type="module"></script>
</body>

</html>