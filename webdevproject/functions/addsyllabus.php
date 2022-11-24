<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Syllabus</title>
</head>
<body>
    <?php 
        // including the database connection file
        include_once("../dbConnection/mysqlconfig_connection.php");
        if(isset($_POST['Submit'])){
            $code = $_POST['code'];
            $author = $_POST['author'];
            $subject = $_POST['subject'];

            if(empty($code) || empty($author)){
                if(empty($code)){
                    echo "<font color='red'>Syllabus Code field is empty</font><br>";
                }
                if(empty($author)){
                    echo "<font color='red'>Syllabus Author field is empty</font><br>";
                }
                echo "<br><a href='javascript:self.history.back()'>Go Back</a>";
            }else{
                // since all fied is not empty proceed to insert (add) the data into database
                $result = mysqli_query($link,"INSERT INTO tblsyllabus(subject_id, syllabus_code, syllabus_author) VALUES(
                    '$subject', '$code', '$author');");
                echo "<font color='green'>Data added Successfully</font><br>";
                echo "<a a href='../index.php'>View Result</a>";
            }
        }
    
    
    ?>
    
</body>
</html>