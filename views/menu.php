<?php require './partials/links-header.php'; ?>

<?php require './partials/page-header.php'; ?>


<!-- MENU PAGE -->

<main class="container alt-theme" id="menu-page">

    <section class="row">

        <div class="col-sm-12">
            <h2 class="font-2">Menu</h2>
        </div>
    
    </section>

    <section class="row">

        <div class="col-sm-12">

            <div class="panel panel-default">

                <div class="jumbotron menu-block">
                    <h5>Lunch Menu</h5>

                    <p class="lead font-family--paragraph">
                        <em>Get people excited about your menu and your food. Briefly describe it.</em>
                    </p>
                </div>

                <div class="panel-body">

                <ul class="nav nav-tabs">
                    <li class="active"><a href="menu.php?category=pizza">Pizza</a></li>
                    <li><a href="menu.php?category=pasta">Pasta</a></li>
                    <li><a href="?category=panini">Panini's</a></li>
                </ul>

                <div class="tab-content">
                    <div class="">

                        <?php

                            if (isset($_GET)) {
                                
                                if ($_GET['category'] == 'pizza') {

                                    include './partials/database.php';

                                    $pdo = Database::connect();
                                    $sql = "SELECT food_categories.name, food_items.name, food_items.description, food_items.price
                                            FROM food_categories 
                                            INNER JOIN food_items 
                                            ON (food_categories.food_category_id = food_items.food_category_id) 
                                            WHERE food_categories.name = 'pizza'";

                                    foreach ($pdo->query($sql) as $row) {
                                        
                                        echo '<div class="menu-item">
                                            <h4>'.$row['name'].'</h4>
                                            <div class="menu-item__inner-text">
                                                <p>'.$row['description'].'</p>
                                                <span></span>
                                                <p class="font-thin">'.$row['price'].'</p>
                                                <button class="btn btn-primary btn-primary--sm">Order</button>
                                            </div>
                                            </div>';
                                    }
                                    
                                    Database::disconnect();
                                }

                                if ($_GET['category'] == 'pasta') {

                                    include './partials/database.php';

                                    $pdo = Database::connect();
                                    $sql = "SELECT food_categories.name, food_items.name, food_items.description, food_items.price
                                            FROM food_categories 
                                            INNER JOIN food_items 
                                            ON (food_categories.food_category_id = food_items.food_category_id) 
                                            WHERE food_categories.name = 'pasta'";

                                    foreach ($pdo->query($sql) as $row) {
                                        
                                        echo '<div class="menu-item">
                                            <h4>'.$row['name'].'</h4>
                                            <div class="menu-item__inner-text">
                                                <p>'.$row['description'].'</p>
                                                <span></span>
                                                <p class="font-thin">'.$row['price'].'</p>
                                                <button class="btn btn-primary btn-primary--sm">Order</button>
                                            </div>
                                            </div>';
                                    }
                                    Database::disconnect();
                                }

                                if ($_GET['category'] == 'panini') {

                                    include './partials/database.php';

                                    $pdo = Database::connect();
                                    $sql = "SELECT food_categories.name, food_items.name, food_items.description, food_items.price
                                            FROM food_categories 
                                            INNER JOIN food_items 
                                            ON (food_categories.food_category_id = food_items.food_category_id) 
                                            WHERE food_categories.name = 'panini'";

                                    foreach ($pdo->query($sql) as $row) {
                                        
                                        echo '<div class="menu-item">
                                            <h4>'.$row['name'].'</h4>
                                            <div class="menu-item__inner-text">
                                                <p>'.$row['description'].'</p>
                                                <span></span>
                                                <p class="font-thin">'.$row['price'].'</p>
                                                <button class="btn btn-primary btn-primary--sm">Order</button>
                                            </div>
                                            </div>';
                                    }
                                    Database::disconnect();
                                }
                            }
                        ?>

                    </div>
                </div>

<!--
                <h5 class="menu-title">SOUPS</h5>
                <p><em>This is a section of your menu. Briefly describe it</em></p>

                <hr>

                <div class="menu-item">
                    <h4>Chicken Noodle Soup</h4>
                    <div class="menu-item__inner-text">
                        <p>This is an item on your menu. Briefly describe it</p>
                        <span></span>
                        <p class="font-thin">£9</p>
                        <button class="btn btn-primary btn-primary--sm">Order</button>
                    </div>
                </div>

                <div class="menu-item">
                    <h4>Chicken Noodle Soup</h4>
                    <div class="menu-item__inner-text">
                        <p>This is an item on your menu. Briefly describe it</p>
                        <span></span>
                        <p class="font-thin">£9</p>
                    </div>
                </div>

                <div class="menu-item">
                    <h4>Chicken Noodle Soup</h4>
                    <div class="menu-item__inner-text">
                        <p>This is an item on your menu. Briefly describe it</p>
                        <span></span>
                        <p class="font-thin">£9</p>
                    </div>
                </div>

                <div class="menu-item">
                    <h4>Chicken Noodle Soup</h4>
                    <div class="menu-item__inner-text">
                        <p>This is an item on your menu. Briefly describe it</p>
                        <span></span>
                        <p class="font-thin">£9</p>
                    </div>
                </div>

                <hr>

                <h5 class="menu-title">Dumplings</h5>
                <p>This is a section of your menu. Briefly describe it</p>

                <hr>

                <div class="menu-item">
                    <h4>Chicken Noodle Soup</h4>
                    <div class="menu-item__inner-text">
                        <p>This is an item on your menu. Briefly describe it</p>
                        <span></span>
                        <p class="font-thin">£9</p>
                    </div>
                </div>

                <div class="menu-item">
                    <h4>Chicken Noodle Soup</h4>
                    <div class="menu-item__inner-text">
                        <p>This is an item on your menu. Briefly describe it</p>
                        <span></span>
                        <p class="font-thin">£9</p>
                    </div>
                </div>

                <div class="menu-item">
                    <h4>Chicken Noodle Soup</h4>
                    <div class="menu-item__inner-text">
                        <p>This is an item on your menu. Briefly describe it</p>
                        <span></span>
                        <p class="font-thin">£9</p>
                    </div>
                </div>

                <div class="menu-item">
                    <h4>Chicken Noodle Soup</h4>
                    <div class="menu-item__inner-text">
                        <p>This is an item on your menu. Briefly describe it</p>
                        <span></span>
                        <p class="font-thin">£9</p>
                    </div>
                </div>
-->
                </div>

            </div>

        </div>

    <section>

</main>


<?php require './partials/page-footer.php'; ?>

<?php require './partials/script-footer.php'; ?>