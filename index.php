<?php
require_once 'includes/class-query.php';
/*if(!empty($_GET)) {
    $post = $_GET['p'];
    $cat = $_GET['cat'];
} */
// poboljsana verzija od iznad
$post = filter_input(INPUT_GET, 'p');
$cat = filter_input(INPUT_GET, 'cat');

if(empty($post) && empty($cat)){
    $post_array = $query->all_posts();
}elseif(!empty($post)){
    $post_array = $query->post($post);
}elseif(!empty($cat)){
    echo 'Catalog';
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
    <?php foreach($post_array as $post): ?>
    <div class="post">
        <h1><a href="?p=<?php echo $post->ID ?>"><?php echo $post->post_title; ?>  </a></h1>
        <p><?php  echo $post->post_content;  ?></p>
    </div>
    <?php endforeach; ?>
</body>
</html>