<?php
/*if(!empty($_GET)) {
    $post = $_GET['p'];
    $cat = $_GET['cat'];
} */
// poboljsana verzija od iznad
$post = filter_input(INPUT_GET, 'p');
$cat = filter_input(INPUT_GET, 'cat');

if(empty($post) && empty($cat)){
    echo 'Home';
}elseif(!empty($post)){
    echo 'Single';
}elseif(!empty($cat)){
    echo 'Catalog';
}