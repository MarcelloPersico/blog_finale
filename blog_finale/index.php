<?php 
include_once 'entity/Post.php';
include_once 'core/bootstrap.php';
include_once 'entity/Post-repository.php';

if (!empty($_GET['tag'])) {
    $posts = $repository->getAllPostsByTag();
} else { 
    $posts = $repository->getAllDbPosts();
}
if (!empty($_GET['remove'])) {
    $repository->removePost($_GET['remove']);
}
include 'view/index.php';
?>