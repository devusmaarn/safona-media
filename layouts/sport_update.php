<section class="sport_update">
<!--    Calender-->
    <div class="calender">
        <h5 class="sub_heading">Jan 2023</h5>

<!--        Calender Body-->
        <div class="dates">
<!--            Calendar Week Days-->
            <div class="date weekdays">
                <?php
                    $week_days = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];
                    foreach ($week_days as $day):
                        echo "<td> $day </td>";
                    endforeach;
                ?>
            </div>
<!--            Calendar Week Days End-->

<!--            Calender Dates-->
            <div class="date week_dates" style="width:400px;display: grid; grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;">
                <?php
                    $matches = [
                        '2' => 'manu',
                        '13' => 'mancity',
                        '19' => 'arsenal',
                        '22' => 'liverpool',
                    ];

                    for ($i = 1; $i <=30; $i++):
                        if (array_key_exists($i, $matches)):
                            echo "<span class='week_date'><img src='../../images/icons/$matches[$i].svg' /></span>";
                        else:
                            echo "<span class='week-date'>$i</span>";
                        endif;
                    endfor;
                ?>
            </div>
<!--            Calender Dates End-->

        </div>
<!--        Calendar body End-->

    </div>
<!--    Calender End-->

<!--    Rank Table-->
    <table class="rank_table">
        <thead class="table_head">
            <td>Club</td>
            <td>GP</td>
            <td>W</td>
            <td>D</td>
            <td>L</td>
            <td>F</td>
            <td>A</td>
            <td>GD</td>
            <td>Pts</td>
        </thead>

        <tbody class="table_body">
            <?php
                $table = [
                        ['name' => 'Manchester City', 'icon' => 'mancity.svg'],
                        ['name' => 'Liverpool', 'icon' => 'liverpool.svg'],
                        ['name' => 'Chelsea', 'icon' => 'chelsea.svg'],
                        ['name' => 'Tottenham Hotspur', 'icon' => 'tottenham.svg'],
                        ['name' => 'Arsenal', 'icon' => 'arsenal.svg'],
                        ['name' => 'Manchester United', 'icon' => 'manu.svg'],
                ];

                foreach ($table as $team):
                    $index = array_search($team, $table);
            ?>
                <tr>
                    <td>
                        <span><?= $index ?></span>
                        <span>
                            <img src="../../images/icons/<?= $team['icon'] ?>" alt="">
                            <?= $team['name'] ?>
                        </span>
                    </td>
                    <?php
                        foreach ([38, 29, 6, 3, 99, 26, 73, 96] as $data):
                            echo "<td>$data</td>";
                        endforeach;
                    ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<!--    Rank Table End-->

<!--    Next Match-->
    <div class="match">
        <h3 class="heading">The Final Round</h3>
        <div class="">
            <img src="../../images/icons/mancity-lg.svg" alt="man city image" />
            <div class="middle">
                <h3>VS</h3>
                <p>Sunday, August 8th</p>
            </div>
            <img src="../../images/icons/liverpool-lg.svg" alt="liverpool logo" />
        </div>

        <div class="foot">
            <span class="team-name">Manchester City</span>
            <span class="score">00</span>
            <span class="score">00</span>
            <span class="team-name">Liverpool</span>
        </div>
    </div>
<!--    Next Match End-->
</section>