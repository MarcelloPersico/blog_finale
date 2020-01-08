    <?php require 'modules/header.php'; ?>


<div class="container">
    <h1 class="display-1">Ultimi post</h1>
    <?php foreach($posts as $post):  ?>
    <div>
        <h2><?= $post->title ?> </h2>
        <p> <?= $post->content?>  </p>
        <?php foreach ($post->tags as $tag) : ?>
                <a href="index.php?tag=<?= $tag['title'] ?>"> 
                <?php echo $tag['title'] ?> </a>
            <?php endforeach ?>
        <?php if (isLogged()) { ?>
            <a style="color: red" href="index.php?remove=<?= $post->title?>"> remove </a>
        <?php } ?>
    </div>
    <?php endforeach ?>
</div>
</body>

<?php require 'modules/footer.php'; ?>