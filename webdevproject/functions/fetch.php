<?php
    $query = "SELECT * FROM tblsubject LEFT JOIN tblsyllabus ON tblsyllabus.subject_id = tblsubject.subject_id";
    $result= mysqli_query($link, $query);
?>
