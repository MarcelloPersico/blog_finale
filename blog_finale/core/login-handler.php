<?php



    // start connection
   
    
    function loginUser($email, $password)
    
    {
    try {
        
        $username = 'root';
        $passwordDB = '';
        $emailDB = 'persico.mlo@gmail.com';
        $pdo = new PDO('mysql:host=localhost;dbname=blog', $username, $passwordDB);
        $statement = $pdo->prepare("SELECT password FROM user WHERE email=:id");
        $statement->bindParam(':id', $_POST['email']);
        $statement->execute();
        $passUser = $statement->fetch();
        $finalp = $passUser[0];
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
        if ($email === $_POST['email']) {
            if (password_verify($password, $finalp)) {
                $_SESSION['loggedUser'] = [ 'name' => 'admin'];
                
                // header("location: index.php");
                return true;
            }
        }
        return false;
    }

   
function isLogged()
{
   return isset($_SESSION['loggedUser']);
  
}
function logoutUser()
{
    unset($_SESSION['loggedUser']);
}
 if (isset($_GET['logout'])) {
    logoutUser();
    

 }