<?php require 'view/temp/header.php'?>
<section class="container">
    <div class="row">
        <div class="col s12 l3">
            <div class="collection z-depth-3">
                <a href="/products" class="collection-item waves-effect">Все товары</a>
                <?php foreach ($categorylist as $category): ?>
                    <a href="/products/category-<?php echo $category['id'] ?>"
                       class="collection-item waves-effect">
                        <?php echo $category['name'] ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col s12 l9 z-depth-1 white" style="padding-bottom: 20px">
            <div class="col m12 section-title">
                <h2 class="center">Правила доставки</h2>
            </div>
            <div class="col m12 " style="margin-top: 3em">
                <ul>
                    <li><p>- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis deserunt eum fugit illum itaque laboriosam neque obcaecati quos tempore, voluptas. Accusamus autem beatae consectetur debitis deleniti dolores eaque earum eius et expedita ipsa ipsum iure, maiores nam nemo nihil nobis officia optio pariatur quam quas reiciendis sed similique temporibus, voluptatem.</p></li>
                    <li><p>- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloribus fuga impedit molestiae nisi quas qui rem sed vel veniam? Blanditiis distinctio dolores neque rem repudiandae ullam veritatis. Asperiores consectetur cupiditate eveniet facere modi molestias mollitia sed ut velit voluptate. Aperiam incidunt iusto laborum officia omnis reprehenderit saepe, veritatis voluptatibus.</p></li>
                    <li><p>- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias atque beatae consequuntur corporis cum eos ex fugiat in ipsa ipsum iure iusto maxime minus molestias necessitatibus nemo, nisi nobis nulla odio officiis optio provident quae quia quisquam quo ratione repellat saepe sed sunt tempora tempore temporibus vel veritatis vero.</p></li>
                    <li><p>- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto atque deleniti eligendi, error eum explicabo laudantium magni nam non quaerat quis quisquam ullam? Commodi consequatur debitis ipsum voluptate! Aliquid aperiam asperiores facilis, quos reprehenderit sunt voluptate? Aliquam aliquid animi atque consequuntur dignissimos enim illum laboriosam magni odit, quis vero.</p></li>
                    <li><p>- Lorem ipsum dolor sit amet, consectetur adipisicing elit. At eius facere quibusdam suscipit tempora tempore! Adipisci amet aspernatur atque doloribus esse nostrum obcaecati quasi repellat, veritatis. Ad aliquid, aperiam, aspernatur atque blanditiis dicta dignissimos et expedita fuga fugiat id impedit inventore, maiores natus nihil odit omnis praesentium quis ut voluptatum!</p></li>
                    <li><p>- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at beatae excepturi nam nobis pariatur qui ratione sed sint suscipit.</p></li>
                    <li><p>- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus!</p></li>
                </ul>
            </div>
        </div>
    </div>

</section>
<?php require 'view/temp/footer.php'?>
