

<?php require './partials/links-header.php'; ?>

<?php require './partials/page-header.php'; ?>


<!-- HOME PAGE -->

<main class="home-page">

    <section class="container-fluid text-center welcome-section">
        <div class="row">
            <div class="jumbotron container">
                <h3><span class="font-family--heading">A Little Taste of Italy</span></h3>
                <h6>Italy's' Most Acclaimed Italian Restaurant</h6>
            </div>
        </div>
    </section>

    <section class="row menu-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center menu-section__category">
                    <div class="inner-box">
                        <div class="outer-box"></div>
                        <hr class="small-line">
                        <h5>Pasta</h5>
                        <p>I'm a paragraph. Click here to add your own text and edit me.</p>
                        <img src="../public/images/pasta-icon.png">
                    </div>
                </div>

                <div class="col-sm-4 text-center menu-section__category">
                    <div class="inner-box">
                        <div class="outer-box"></div>
                        <hr class="small-line">
                        <h5>Pizza</h5>
                        <p>I'm a paragraph. Click here to add your own text and edit me.</p>
                        <img src="../public/images/pizza-icon.png">
                    </div>
                </div>

                <div class="col-sm-4 text-center menu-section__category">
                    <div class="inner-box">
                        <div class="outer-box"></div>
                        <hr class="small-line">
                        <h5>Panini's</h5>
                        <p>I'm a paragraph. Click here to add your own text and edit me.</p>
                        <img src="../public/images/panini-icon.png">
                    </div>
                </div>

                <div class="col-sm-12 text-center">
                    <button class="btn btn-primary">See Menu</button>
                </div>
            </div>
        </div>
    </section>

    <section id="home-about-section" class="row about-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 about-section__text-block">
                    <hr class="pull-left small-line">
                    <h2>Our Story Begins In The East</h2>
                    <p>
                        I'm a paragraph. Click here to add your own text and edit me. 
                        It’s easy. Just click “Edit Text” or double click me to add your 
                        own content and make changes to the font. Feel free to drag and 
                        drop me anywhere you like on your page. I’m a great place for you 
                        to tell a story and let your users know a little more about you.
                        This is a great space to write long text about your company and 
                        your services. You can use this space to go into a little more 
                        detail about your company.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="row quote-section">
        <div class="container">
            <div class="row">
                <div class="quote-section__img-wrapper">
                    <img src="../public/images/eating-pizza.jpg">
                </div>
                <div class="col-xs-10 col-sm-10 col-sm-offset-2 col-md-7 col-md-offset-5">
                    <div class="quote-section__text">
                         <hr class="small-line">
                        <h3 class="smaller">"When you drink the water, <span class="font-family--heading">remember the spring"</span></h3>
                    </div>

                    <p>
                        Yin Shui Si Yuan
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require './partials/page-footer.php'; ?>

<?php require './partials/script-footer.php'; ?>
