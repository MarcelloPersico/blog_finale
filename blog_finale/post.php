<?php 
include_once 'core/bootstrap.php';
include_once 'entity/Post-repository.php';

include 'view/post.php';
if (isset($_POST['title'])) {
    $repository->insertpost($_POST['title'], $_POST['content'], $_POST['tag']);
}
?>