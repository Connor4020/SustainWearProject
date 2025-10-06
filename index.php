<!DOCTYPE html>
<html lang="en">
<?php include 'header-footer.php'; ?>
<?php include 'header-footer-mobile.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles/desktop.css" media="screen and (min-width: 769px)">
    <link rel="stylesheet" href="styles/mobile.css" media="screen and (max-width: 768px)">
    <script src="/scripts/script.js"></script>
</head>


<body>
    <?php renderMobileHeader(); ?>

    <main>
        <section>
            <h1>Sustain Wear</h1>

            <img src="/media/images/Laundry Stack.jpg" alt="An Image of Fresh Clothes Stacked Upon Each Other">
        </section>



        <section id="mainIntroduction">
            <div class="infoBox">
                <h3>What?</h3>
                <p>At SustainWear we are Commited to Helping Reduce CO2 Emissions Caused by Clothes Waste. We aim to Provide a Friendly way to Donate Unwanted Clothes.</p>
            </div>
            <div id="seperator"><br></div>
            <div class="infoBox">
                <h3>Why?</h3>
                <p>Pollution Has Become an Even More Prevalent Problem in the Modern Day. It’s up to People Like us to Make a Change.</p>
            </div>
        </section>

    </main>
    <?php render_footer(); ?>
</body>

</html>