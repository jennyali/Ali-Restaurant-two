<?php 

function menu_item_handler ($category) {

    include './partials/database.php';

    $pdo = Database::connect();
    $sql = "SELECT food_categories.name, food_items.name, food_items.description, food_items.price
            FROM food_categories 
            INNER JOIN food_items 
            ON (food_categories.food_category_id = food_items.food_category_id) 
            WHERE food_categories.name = $category";

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


?>