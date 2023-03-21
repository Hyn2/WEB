<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $conn = mysqli_connect("localhost", "root", "e0527907", "my_first_web");

    if(!$conn) {
        die ("접속 불가".mysqli_connect_error());
    }

    $name = $_POST["name"];
    $title = $_POST["title"];
    $article = $_POST["article"];

    $inputPost = "INSERT INTO post(name, title, article, dateAndTime)
                    VALUES('$name', '$title', '$article', NOW())";

   $inputPostQuery =  mysqli_query($conn, $inputPost);

   if($inputPostQuery === false) {
    echo mysqli_error($conn);
   }    

    echo "등록 완료되었습니다.";
?>
</body>
</html>

