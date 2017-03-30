<?php require './partials/links-header.php'; ?>

<?php require './partials/page-header.php'; ?>


<!-- ORDER ONLINE PAGE -->

<main class="container alt-theme">

    <section class="row">

        <div class="col-sm-12">
            <h2 class="font-2">Order Online</h2>
        </div>
    
    </section>

    <section class="row well">

        <div class="col-sm-9 order-form__left-column">

            <table class="table">
                <tr class="table-row-heading">
                    <th>Product</th>
                    <th class="hidden-xs"></th> 
                    <th>Qty</th>
                    <th>Price</th>
                </tr>

                <tr>
                    <td class="hidden-xs">
                        <img class="img-responsive" src="../public/images/pasta-plate.png">
                    </td>
                    <td>
                        <p class="font-thin">Penne Pasta</p>
                        <p>This is an item on your menu. Briefly describe it</p>
                    </td> 
                    <td class="text-right">50</td>
                    <td class="text-right">50</td>
                </tr>

                <tr>
                    <td class="hidden-xs">
                        <img class="img-responsive" src="../public/images/pasta-plate.png">
                    </td>
                    <td>
                        <p class="font-thin">Penne Pasta</p>
                        <p>This is an item on your menu. Briefly describe it</p>
                    </td> 
                    <td class="text-right">50</td>
                    <td class="text-right">50</td>
                </tr>

                <tr>
                    <td class="hidden-xs">
                        <img class="img-responsive" src="../public/images/pasta-plate.png">
                    </td>
                    <td>
                        <p class="font-thin">Penne Pasta</p>
                        <p>This is an item on your menu. Briefly describe it</p>
                    </td> 
                    <td class="text-right">50</td>
                    <td class="text-right">50</td>
                </tr>
            </table>

            <hr>
        
        
        </div>


        
        <div class="col-sm-3 order-form__right-column">

            <div>
                <h5 class="text-center">Subtotal</h5>
                <p class="font-thin">£0</p>
            </div>

             <hr>   

            <div class="text-center">
                <button class="btn btn-primary">Order Now</button>
            
            </div>
        
        
        </div>

    </section>

</main>


<?php require './partials/page-footer.php'; ?>

<?php require './partials/script-footer.php'; ?>