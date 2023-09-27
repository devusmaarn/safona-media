<section class="popular_posts">

    <div class="top">
        <h2 class="heading">Popular Posts</h2>
        <div class="nav_btns">
            <button class="left_btn"><</button>
            <button class="right_btn">></button>
        </div>
    </div>

    <div class="articles">
        <?php
            $articles = [
                ['title' => 'Opening Day of boating seasons, Seattle WA'],
                ['title' => 'How to chose the right laptop for your tech career'],
                ['title' => 'Howq we built the first real SELF-DRIVING CAR for public transportation'],
                ['title' => 'How to persuade your parents to buy fast food for you'],
            ];

            foreach ($articles as $article):
        ?>
        <article class="article">
            <div class="thumbnail_wrapper">
                <img src="#" alt="Article thumbnail" class="thumbnail">
            </div>

            <div class="content">
                <h3 class="title"><?= $article['title'] ?></h3>
                <div class="body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur beatae blanditiis, cumque ea eos facere natus nemo neque nisi placeat saepe sunt. Aperiam atque aut deleniti illum, inventore quis sint!
                </div>
            </div>

            <div class="meta">
                <a href="#" class="author_link">
                    <img src="#" alt="Avatar" class="avatar" />
                    <div class="">
                        <h4 class="author">Usman Muhammad</h4>
                        <p class="article_date">August 25, 2022</p>
                    </div>
                </a>

                <button class="bookmark">
                    bookmark
                </button>
            </div>
        </article>

        <?php endforeach; ?>
    </div>
</section>