<?php require 'view/temp/header.php'?>
<main>
<section class="container">
    <div class="row">
        <div class="col l4 m6 s12 right-align">
            <div class="material-placeholder">
                <img src="https://www.android-kiosk.com/wp-content/themes/androidkioskcom/images/screenshots/1.png"
                     class="responsive-img materialboxed z-depth-2 initialized">
            </div>
        </div>
        <div class="col l8 m6 s12" >
            <ul>
                <li><b>Название - </b><?php echo $product_array['name'] ?></li>
                <li><b>Описание - </b><?php echo $product_array['description'] ?></li>
                <li><b>Цена - </b><?php echo $product_array['price'] ?></li>
                <li><b>Бренд - </b><?php echo $product_array['brand'] ?></li>
                <li><b>Наличие на складе - </b><?php echo $product_array['status'].'%' ?></li>
                <li><b></b></li>
            </ul>
            <a class="waves-effect waves-light btn red add-to-cart" data-id="<?php echo $product_array['id']?>">
                <i class="material-icons left">add</i> Add to cart
            </a>
        </div>
    </div>
</section>
</main>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/products/productID-"+id, {},
                function (data) {
                    $("a[href='#modal1']").addClass("pulse")

                    $("#cart-count").html(data);
                });
            return false;
        });
    });
</script>
<?php require 'view/temp/footer.php'?>
