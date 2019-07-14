<?php require 'view/temp/header.php'?>
<section class="container">
    <div class="row">
        <div class="col s12 l3">
            <div class="collection z-depth-3">
                <a href="/products" class="collection-item waves-effect <?php if (!isset($idCategory))echo 'active'?>">Все товары</a>
                <?php foreach ($categorylist as $category): ?>
                <a href="/products/category-<?php echo $category['id'] ?>"
                   class="collection-item waves-effect <?php
                   if (isset($idCategory))
                   if ($idCategory==$category['id'])echo 'active'?>">
                        <?php echo $category['name'] ?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col s12 l9 z-depth-1 white" style="padding-bottom: 20px">
            <div class="col m12 section-title">
                <h2 class="center">Популярные товары</h2>
            </div>
            <div class="col m12 " style="margin-top: 3em">
                <div class="col m6 l3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi eaque earum facere iste iusto quis repellendus velit? Accusamus, alias architecto assumenda, beatae cupiditate dolore dolorem, dolorum esse est eum eveniet facere in incidunt ipsa ipsum iste mollitia necessitatibus neque numquam possimus quasi reiciendis reprehenderit sequi soluta suscipit vel vitae?
                </div>
                <div class="col m6 l3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid atque, deserunt dolorum id iusto nesciunt odit praesentium tenetur voluptas. Ab ad adipisci amet, at aut blanditiis corporis illo incidunt, maiores mollitia nam pariatur porro quasi reiciendis sunt totam voluptatem. Est labore modi molestiae praesentium, quaerat quis reiciendis repellat repellendus velit!</div>
                <div class="col m6 l3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus deserunt enim facilis ipsa nemo? Ad alias at cum cumque delectus et eum facere fugit incidunt ipsa iste, minus modi nobis non odit optio praesentium, provident quae quaerat, quas quis quo ratione repellendus sint tempora temporibus unde ut vel velit voluptatem?</div>
                <div class="col m6 l3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam assumenda beatae commodi eum exercitationem illo incidunt iure iusto maiores minima obcaecati, porro quae quasi reiciendis voluptas voluptate. Architecto asperiores debitis dicta doloremque eum fugit, impedit iure magni natus nulla, pariatur quam quasi reiciendis similique sint sunt temporibus tenetur voluptatem?</div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach ($products_array as $product): ?>
            <div class="col s12 m6 l3 ">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="https://materializecss.com/images/sample-1.jpg">
                        <span class="card-title"><?php echo $product['name'];
                            if ($product['is_new']) echo '<span class="red-text darken-4"> NEW</span>' ?></span>
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content product-cards">
                        <span class="card-title"><?php echo $product['price'].' РУБ'?></span>
                        <p><?php echo $product['description']?></p>
                        <a class="about-product-link" href="/products/<?php echo $product['id'] ?>">
                            Посмотреть описание
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <div class="center-align">
        <?php echo $pagination->get()?>

    </div>
</section>

<?php require 'view/temp/footer.php'?>
