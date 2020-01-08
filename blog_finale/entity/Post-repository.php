


<?php

class PostRepository
{
    public function insertpost($title, $content, $tag)
    {
        try {
            $username = 'root';
            $passwordDB = '';
            $emailDB = 'persico.mlo@gmail.com';
            $pdo = new PDO('mysql:host=localhost;dbname=blog', $username, $passwordDB);
            $query="INSERT INTO post (user_id, title, content ) VALUES (1,?,?)";
            $statement = $pdo->prepare($query);
            $statement->execute([$title, $content]);
            $postId = $pdo->lastInsertId();
            $tags = explode(", ", $tag);
            foreach ($tags as $tag) {
                $insertTag = $pdo->prepare("INSERT INTO tag ( title ) values (?) ");
                $insertTag->execute([$tag]);
                $tagId = $pdo->lastInsertId();
                $insertPostTag = $pdo->exec("INSERT INTO post_tag (post_id, tag_id) values ($postId, $tagId )");
            }
            return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function getAllDbPosts()
    {
        $everypost = [];
        $int = 0;
        $tagfinal = [];
        $tagsraw = [];
        $everytag = [];
        $username = 'root';
        $passwordDB = '';
        $pdo = new PDO('mysql:host=localhost;dbname=blog', $username, $passwordDB);
        $statement = $pdo->query("SELECT id, title, content FROM post");
        $data = $statement->fetchAll();
        foreach ($data as $post) {
            $postID = $post['id'];
            $statement2 = $pdo->prepare("SELECT tag_id FROM post_tag where post_id = :id");
            $statement2->bindParam(':id', $postID);
            $statement2->execute();
            if ($statement2->rowCount() >0) {
                $tagsraw = $statement2->fetchall();
                foreach ($tagsraw as $tag) {
                    $statement3 = $pdo->query("SELECT title from tag where id = $tag[tag_id]");
                    $everytag[] = $statement3->fetch();
                }
                $everypost[] = new Post($post['title'], $post['content'], $everytag);
                unset($everytag);
            } else {
                $everypost[] = new Post($post['title'], $post['content'], []);
            }
        }
        return $everypost;
    }
    public function getAllPostsByTag() {
        $newpost = [];
        $everypost = $this->getAllDbPosts();
        foreach ($everypost as $post) {
            foreach ($post->tags as $tags){
                if ($tags['title'] == $_GET['tag']){
                    $newpost[] = $post;
                }
            }

       }
       return $newpost;
    }
    public function removePost($title) {
        echo $title;
        $username = 'root';
        $passwordDB = '';
        $pdo = new PDO('mysql:host=localhost;dbname=blog', $username, $passwordDB);
        $pdo->exec("DELETE FROM post WHERE title = '$title'");
        header("location: index.php");
    }


}
