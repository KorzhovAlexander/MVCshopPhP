<?php require 'view/temp/header.php'?>
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

        </div>
    </div>
</section>
<script>

</script>
<?php require 'view/temp/footer.php'?>
