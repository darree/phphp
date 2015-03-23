<!--<pre> <?php print_r($_POST); ?> </pre> -->

<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if(!empty($_POST)) {
        require_once('../includes/class-insert.php');
 //       print_r($_POST);
       if ($insert->post($_POST)){
           echo '<p>Data inserted successfuly</p>';
       }
    }
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Insert Post</title>
 <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
</head>
<body>
    <form action="post-edit.php" method="post">
        <p><input type="text" name="post_title"/></p>
        <p><textarea name="post_content" id="" cols="30" rows="10"></textarea></p>
        <p>
            <label for="post_category">Cat 1</label>
            <input type="checkbox" name="post_category[1]" value="cat1"/>
            <br/>
            <label for="post_category">Cat 2</label>
            <input type="checkbox" name="post_category[2]" value="cat2"/>
        </p>
        <p><input type="submit" name="Submit"/></p>

    </form>
</body>
</html>