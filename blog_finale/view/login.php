<?php require 'modules/header.php'; ?>
<div class="row">
            <div class="col-4 offset-4">
                    <div class="card">
                        <div class="card-body bg-light">
                    <h5 class="card-title">Login</h5>
                    <form method="POST" action="login.php">
                    <!--  <label>Username
                            
                        </label>
                        <input class="form-control" type="text"> -->
                        <label>Mail 
                            
                        </label>
                        <input class="form-control" name="email" type="email">
                        <label>Password
                           
                        </label>
                        <input class="form-control" name="password" type="password">    
                        <br>
                        <button class="btn btn-primary btn-block" type="submit">Daje.</button>
                        <input class="btn btn-secondary btn-block" type="reset" value="coppa"></input>
                    </form>
                    </div>
                    </div>
            
                


        </div>
   
</div>
</body>
<?php require 'modules/footer.php'; ?>