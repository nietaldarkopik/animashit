<?php
include("widgets/head.php");
?>

<?php
include("widgets/navbar.php");
?>

<?php
$start_date = date("Y-m-d", strtotime("2023-09-15"));
$end_date = date("Y-m-d", strtotime("2023-12-01"));

?>

<?php
$start_date_tmp = $start_date;
$end_date_tmp = $end_date;
$th_year = [];

while ($start_date_tmp <= $end_date_tmp) {
    $date_tmp_d = date("d", strtotime($start_date_tmp));
    $date_tmp_y = date("Y", strtotime($start_date_tmp));
    $date_tmp_w = date("W", strtotime($start_date_tmp));
    $date_tmp_M = date("M", strtotime($start_date_tmp));
    $date_tmp_m = date("m", strtotime($start_date_tmp));
    $date_tmp_day_name = date("l", strtotime($start_date_tmp));
    $total_days = cal_days_in_month(CAL_GREGORIAN, $date_tmp_m, $date_tmp_y);
    $total_weeks = floor($total_days / 7);
    $day_no = date("N", strtotime($start_date_tmp));
    $day_no2 = date("n", strtotime($start_date_tmp));

    $th_year[$date_tmp_y] = (isset($th_year[$date_tmp_y])) ? $th_year[$date_tmp_y] : [];
    $th_year[$date_tmp_y][$date_tmp_M] = (isset($th_year[$date_tmp_y][$date_tmp_M])) ? $th_year[$date_tmp_y][$date_tmp_M] : [];
    $th_year[$date_tmp_y][$date_tmp_M][$date_tmp_w] = (isset($th_year[$date_tmp_y][$date_tmp_M][$date_tmp_w])) ? $th_year[$date_tmp_y][$date_tmp_M][$date_tmp_w] : [];
    $th_year[$date_tmp_y][$date_tmp_M][$date_tmp_w][] = ['day_no2' => $day_no2, 'day_no' => $day_no, 'day_name' => $date_tmp_day_name, 'date' => $date_tmp_d];

    $start_date_tmp = date("Y-m-d", strtotime($start_date_tmp . " +1 day"));
}

function get_childs_number($arr, $deep = 1, $curr_deep = 0, $curr_output = 0)
{
    $output = (is_array($arr)) ? count($arr) : 0;

    if ($deep > $curr_deep) {
        $output = 0;
        foreach ($arr as $i => $v) {
            $output += get_childs_number($v, $deep, $curr_deep + 1, $output);
        }
    }
    return $output;
}
?>
<section id="main-banner" class="p-0 min-vh-100">
    <div class="container-fluid video-container position-relative p-0">
        <video class="w-100 h-100vh" autoplay loop muted>
            <source src="./assets/videos/video1.mp4" type="video/mp4" class="w-100">
        </video>
        <div class="container-fluid container-main d-flex">
            <div class="row justify-content-start align-items-center g-2 flex-row w-100">
                <div class="col-sm-12 mx-auto text-center">
                    <h1 class="text1">Our Schedules</h1>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Schedule</h4>
                        </div>
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Gantt</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">List</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="messages-tab" data-bs-toggle="tab"
                                        data-bs-target="#messages" type="button" role="tab" aria-controls="messages"
                                        aria-selected="false">Board</button>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="btn-toolbar float-end my-2" role="toolbar" aria-label="Toolbar">
                                                <div class="btn-group" role="group" aria-label="Button Group">
                                                    <button type="button" class="btn btn-outline-primary">Dayly</button>
                                                    <button type="button"
                                                        class="btn btn-outline-primary">Weekly</button>
                                                    <button type="button"
                                                        class="btn btn-outline-primary">Monthly</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-striped table-hover table-bordered table-primary table-schedule">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th rowspan="4">#</th>
                                                            <th rowspan="4">Clients</th>
                                                            <?php
                                                            foreach ($th_year as $i => $y) {
                                                                ?>
                                                                <th
                                                                    colspan="<?php echo get_childs_number($th_year[$i], 2); ?>">
                                                                    <?php echo $i; ?>
                                                                </th>
                                                                <?php
                                                            }
                                                            ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            foreach ($th_year as $i => $y) {
                                                                foreach ($y as $i2 => $m) {
                                                                    ?>
                                                                    <th colspan="<?php echo get_childs_number($y[$i2], 1); ?>">
                                                                        <?php echo $i2; ?>
                                                                    </th>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </tr>
                                                        <!-- <tr>
                                                            <?php
                                                            foreach ($th_year as $i => $y) {
                                                                foreach ($y as $i2 => $m) {
                                                                    foreach ($m as $i3 => $w) {
                                                                        ?>
                                                                        <th colspan="<?php echo get_childs_number($m[$i3], 0); ?>">
                                                                            w
                                                                            <?php echo $i3; ?>
                                                                        </th>
                                                                        <?php
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                        </tr> -->
                                                        <tr>
                                                            <?php
                                                            foreach ($th_year as $i => $y) {
                                                                foreach ($y as $i2 => $m) {
                                                                    foreach ($m as $i3 => $w) {
                                                                        foreach ($w as $i3 => $d) {
                                                                            ?>
                                                                            <th class="schedule-date">
                                                                                <?php echo $d['date']; ?><br />
                                                                                <?php echo substr($d['day_name'], 0, 3); ?>
                                                                            </th>
                                                                            <?php
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-group-divider">
                                                        <tr class="table-primary">
                                                            <td>
                                                                <span class="fa fa-caret-right"></span>
                                                            </td>
                                                            <td class="text-nowrap">
                                                                <span class="fa fa-caret-right"></span>
                                                                Waiting List
                                                            </td>
                                                            <?php
                                                            for ($i = 0; $i < get_childs_number($th_year, 3); $i++) {
                                                                ?>
                                                                <td class="schedule-date">&nbsp;</td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr class="table-primary">
                                                            <td>
                                                                <span class="fa fa-caret-right"></span>
                                                            </td>
                                                            <td class="text-nowrap">
                                                                <span class="fa fa-caret-right"></span>
                                                                Waiting List
                                                            </td>
                                                            <?php
                                                            for ($i = 0; $i < get_childs_number($th_year, 3); $i++) {
                                                                ?>
                                                                <td class="schedule-date">&nbsp;</td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr class="table-primary">
                                                            <td>
                                                                <span class="fa fa-caret-right"></span>
                                                            </td>
                                                            <td class="text-nowrap">
                                                                <span class="fa fa-caret-right"></span>
                                                                In Progress
                                                            </td>
                                                            <?php
                                                            for ($i = 0; $i < get_childs_number($th_year, 3); $i++) {
                                                                ?>
                                                                <td class="schedule-date">&nbsp;</td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr class="table-primary">
                                                            <td>
                                                                <span class="fa fa-caret-right"></span>
                                                            </td>
                                                            <td class="text-nowrap">
                                                                <span class="fa fa-caret-right"></span>
                                                                Completed
                                                            </td>
                                                            <?php
                                                            for ($i = 0; $i < get_childs_number($th_year, 3); $i++) {
                                                                ?>
                                                                <td class="schedule-date">&nbsp;</td>
                                                            <?php } ?>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>

                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    profile </div>
                                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                    messages </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include("widgets/footer.php");
?>
<?php
include("widgets/stickynav.php");
?>
<?php
include("widgets/foot.php");
?>