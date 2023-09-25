
<?php
    function getImage($imageName){
        return "../../images/nav_menu/$imageName.png";
    }
?>

<li class="nav_item dropdown">
    <a href="#">Categories</a>

    <ul class="dropdown_menu">

<!--    CAR DROPDOWN MENU    -->
        <li class="dropdown_item">

            <div class="dropdown_item_image">
                <img src="<?= getImage('car') ?>" alt="car image" />
            </div>

            <ul class="dropdown_item_menu">
                <li class="dropdown_item_list_heading">
                    <a href="#" class="dropdown_item_link">Car</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Car news</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Car news</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Car news</a>
                </li>

            </ul>

        </li>
<!--        END CAR DROPDOWN MENU-->

        <!--    SPORT DROPDOWN MENU    -->
        <li class="dropdown_item">

            <div class="dropdown_item_image">
                <img src="<?= getImage('sport') ?>" alt="sport image" />
            </div>

            <ul class="dropdown_item_menu">
                <li class="dropdown_item_list_heading">
                    <a href="#" class="dropdown_item_link">Sport</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Football</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Olympics</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Basket Ball</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">More</a>
                </li>

            </ul>

        </li>
        <!--        END SPORT DROPDOWN MENU-->

        <!--    CAREER DROPDOWN MENU    -->
        <li class="dropdown_item">

            <div class="dropdown_item_image">
                <img src="<?= getImage('dance') ?>" alt="dance image" />
            </div>

            <ul class="dropdown_item_menu">
                <li class="dropdown_item_list_heading">
                    <a href="#" class="dropdown_item_link">CAREER</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Lifestyle</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Jobs</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Opportunities</a>
                </li>

            </ul>

        </li>
        <!--        END CAREER DROPDOWN MENU-->

        <!--    TECHNOLOGY DROPDOWN MENU    -->
        <li class="dropdown_item">

            <div class="dropdown_item_image">
                <img src="<?= getImage('tech') ?>" alt="tech image" />
            </div>

            <ul class="dropdown_item_menu">
                <li class="dropdown_item_list_heading">
                    <a href="#" class="dropdown_item_link">Technology</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Gadgets</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Internet Network</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Social Media</a>
                </li>

            </ul>

        </li>
        <!--        END TECHNOLOGY DROPDOWN MENU-->

        <!--    ENTERTAINMENT DROPDOWN MENU    -->
        <li class="dropdown_item">

            <div class="dropdown_item_image">
                <img src="<?= getImage('music') ?>" alt="entertainment image" />
            </div>

            <ul class="dropdown_item_menu">
                <li class="dropdown_item_list_heading">
                    <a href="#" class="dropdown_item_link">Entertainment</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Music</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Social Talks</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Movies</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Comedies</a>
                </li>

            </ul>

        </li>
        <!--        END ENTERTAINMENT DROPDOWN MENU-->

        <!--    EDUCATION DROPDOWN MENU    -->
        <li class="dropdown_item">

            <div class="dropdown_item_image">
                <img src="<?= getImage('tech') ?>" alt="education image" />
            </div>

            <ul class="dropdown_item_menu">
                <li class="dropdown_item_list_heading">
                    <a href="#" class="dropdown_item_link">Education</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">WAEC/NECO/JAMB</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Campus Gists</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">Admission</a>
                </li>

                <li class="dropdown_item_list_item">
                    <a href="#" class="dropdown-item_link">More</a>
                </li>

            </ul>

        </li>
        <!--        END EDUCATION DROPDOWN MENU-->
    </ul>
</li>