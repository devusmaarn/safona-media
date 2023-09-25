<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safona Media</title>
    <link rel="stylesheet" href="../styles/global.css">

</head>
<body>

    <header id="header" class="navbar">

<!--        Header Navmenu-->

        <nav class="nav_menu">

<!--            Application Logo-->
            <h1 class="app_logo">
                <a href="#" class="logo_link">Safona.Media</a>
            </h1>
<!--            End Application Logo-->

<!--            Navigation Menu List-->
            <ul class="nav_list">
                <?php require_once 'header_layouts/categories_dropdown.php'?>

<!--                Dropdown Menu-->
                <li class="nav_item dropdown">
                    <a class="nav_link">Pages</a>

                    <ul class="dropdown_menu">
                        <li class="dropdown_item">
                            <a href="#" class="dropdown_link">Page link One</a>
                        </li>

                        <li class="dropdown_item">
                            <a href="#" class="dropdown_link">Page link One</a>
                        </li>

                        <li class="dropdown_item">
                            <a href="#" class="dropdown_link">Page link One</a>
                        </li>

                        <li class="dropdown_item">
                            <a href="#" class="dropdown_link">Page link One</a>
                        </li>
                    </ul>
                </li>
<!--                End Dropdown Menu-->

                <li class="nav_item">
                    <a href="#" class="nav_link">Contact Us</a>
                </li>

                <li class="nav_item">
                    <a href="#" class="nav_link">About US</a>
                </li>
            </ul>
<!--            End Navigation Menu List-->

<!--            Nav Search-->
            <div class="nav_search">

                <button class="search_option">
                    <span class="search_option_icon"></span>
                </button>

                <input type="text" class="search_input" placeholder="search anything..." />

                <button class="search_btn">
                    <span class="search_btn_icon"></span>
                </button>

            </div>
<!--            End Nav Search-->

<!--            User Avatar-->
            <div class="user_menu">
                <img src="../images/avatar/nav_avatar.png" alt="User Avatar" class="user_avatar" />
<!--                User Dropdown-->
                <div class="user_dropdown">
                    <button class="user_dropdown_btn">
                        <span class="dropdown_text">Usman Muhammad</span>
                        <span class="dropdown_icon"></span>
                    </button>

<!--                    User Dropdown Menu-->
                    <ul class="dropdown_menu">
                        <li class="dropdown_item">
                            <a href="#" class="dropdown_link">
                                <span class="icon"></span>
                                Profile
                            </a>
                        </li>

                        <li class="dropdown_item">
                            <a href="#" class="dropdown_link">
                                <span class="icon"></span>
                                Marked
                            </a>
                        </li>

                        <li class="dropdown_item">
                            <a href="#" class="dropdown_link">
                                <span class="icon"></span>
                                Exit
                            </a>
                        </li>
                    </ul>
<!--                    End User Dropdown Menu-->
                </div>
<!--                End user Dropdown-->
            </div>
<!--            End User Avatar-->

<!--            Bookmark Button-->

<!--            End Bookmark Button-->
        </nav>
<!--        End Navigation Menu-->

<!--        End Header Navbar-->

<!--        Sub Nav-->
        <section class="sub_nav">
            <ul class="sub_nav_menu">
                <?php
                    $subNavItems = [
                            'food', 'animal', 'car', 'sport', 'music', 'technology', 'abstract', 'education',
                        'jamb', 'waec', 'neco', 'cbt', 'north'
                    ];

                    foreach ($subNavItems as $item):
                ?>
                <li class="sub_nav_item">
                    <a href="#" class="sub_nav_link"><?= "#$item" ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </section>
<!--        End Sub Nav-->

<!--        Latest Articles Section-->
        <section class="latest_articles">
<!--            Article-->
            <div class="article">
                <img src="#" alt="Article image" class="thumbnail">
                <div class="details">
                    <h2 class="heading">How to Drive Car Safely</h2>
                    <p class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi aut culpa facilis fuga iusto laudantium neque obcaecati odio omnis placeat quae quaerat qui, quisquam reiciendis repellendus sapiente sed suscipit?
                    </p>
                </div>
            </div>
<!--            End Article-->
            <!--            Article-->
            <div class="article">
                <img src="#" alt="Article image" class="thumbnail">
                <div class="details">
                    <h2 class="heading">How to Make Dance Moves</h2>
                    <p class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi aut culpa facilis fuga iusto laudantium neque obcaecati odio omnis placeat quae quaerat qui, quisquam reiciendis repellendus sapiente sed suscipit?
                    </p>
                </div>
            </div>
            <!--            End Article-->

<!--            SlideShow-->
            <div class="slideshow">

                <button class="left_btn"><-</button>
                <button class="right_btn">-></button>

                <!--            Article-->
                <div class="article">
                    <img src="#" alt="Article image" class="thumbnail">
                    <div class="details">
                        <h2 class="heading">Why I Stopped Using Multiple laptops</h2>
                        <p class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi aut culpa facilis fuga iusto laudantium neque obcaecati odio omnis placeat quae quaerat qui, quisquam reiciendis repellendus sapiente sed suscipit?
                        </p>
                    </div>
                </div>
                <!--            End Article-->

                <div class="slide_bars">
                    <button class="bar"></button>
                    <button class="bar"></button>
                    <button class="bar current"></button>
                    <button class="bar"></button>
                    <button class="bar"></button>
                </div>
            </div>
<!--            End Slideshow-->
        </section>
<!--        End Latest Articles Section-->
    </header>