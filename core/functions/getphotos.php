<?php 


    $sql_get_all_photos_1 = "SELECT * FROM student_arts WHERE student_grade='Grade 01'";

    $result_1 = $conn->query($sql_get_all_photos_1);

    $sql_get_all_photos_2 = "SELECT * FROM student_arts WHERE student_grade='Grade 02'";

    $result_2 = $conn->query($sql_get_all_photos_2);

    $sql_get_all_photos_3 = "SELECT * FROM student_arts WHERE student_grade='Grade 03'";

    $result_3 = $conn->query($sql_get_all_photos_3);

    $sql_get_all_photos_4 = "SELECT * FROM student_arts WHERE student_grade='Grade 04'";

    $result_4 = $conn->query($sql_get_all_photos_4);

    $sql_get_all_photos_5 = "SELECT * FROM student_arts WHERE student_grade='Grade 05'";

    $result_5 = $conn->query($sql_get_all_photos_5);

?>