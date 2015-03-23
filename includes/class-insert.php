<?php
require_once('class-db.php');

if (!class_exists('INSERT')){
    class INSERT{
        public  function post($post_data){
            global $db;
            $category = serialize($post_data['post_category']);
            $query= "
                       INSERT INTO posts(post_title, post_content, post_category)
                       VALUES ('$post_data[post_title]', '$post_data[post_content]', '$category')
            ";
            return $db->insert($query);
        }
    }
}
$insert = new INSERT;
