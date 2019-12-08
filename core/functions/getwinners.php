<?php
/**
 * Created by PhpStorm.
 * User: pasin
 * Date: 12/8/2019
 * Time: 12:10 AM
 */

$year = $_GET['year'];

$sql_get_all_photos_1 = "SELECT * FROM winners WHERE class='Grade 01' AND year=$year";

$result_1 = $conn->query($sql_get_all_photos_1);

$sql_get_all_photos_2 = "SELECT * FROM winners WHERE class='Grade 02' AND year=$year";

$result_2 = $conn->query($sql_get_all_photos_2);

$sql_get_all_photos_3 = "SELECT * FROM winners WHERE class='Grade 03' AND year=$year";

$result_3 = $conn->query($sql_get_all_photos_3);

$sql_get_all_photos_4 = "SELECT * FROM winners WHERE class='Grade 04' AND year=$year";

$result_4 = $conn->query($sql_get_all_photos_4);

$sql_get_all_photos_5 = "SELECT * FROM winners WHERE class='Grade 05' AND year=$year";

$result_5 = $conn->query($sql_get_all_photos_5);