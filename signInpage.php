<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="signinstyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <?php 
            $servername = 'localhost';
            $databasename='test';
            $username='root';
            $password='';
            try{
                $con = new PDO("mysql:host =$servername;dbname=$databasename",$username, $password);
                echo 'connected successfully.';
            }catch(PDOException $e){
                echo 'connection failed: '.$e;
            }
            if(isset($_POST['submit'])){
                
                function checkifexcist($value, $field){
                    global $con;
                    $query= $con->prepare("SELECT intsignupID FROM signup WHERE ".$field." = :strvalue LIMIT 1;");
                    $query->execute([':strvalue'=>$value]);
                    if($query->rowCount() == 1) {
                        return "invalid credentials";
                    }
                }

                $strusername = $_POST['username'];
                $stremail = $_POST['email'];
                $intnumber = $_POST['number'];
                $strpassword = $_POST['password'];
                
                $inserdata = $con->prepare("INSERT INTO signup(strname,stremail,intnumber, strpassword) VALUES (:strname, :stremail, :intnumber, :strpassword)");
                $dataParas = [':strname'=> $strusername,':stremail'=>$stremail,':intnumber'=>$intnumber,'strpassword'=>$strpassword];
                $inserdata->execute($dataParas);

                $getuserid=$con->prepare("SELECT intsignupID FROM signup where strname IN (:strname)");
                $dataParas  = [':strname'=>$strusername];
                $getuserid->execute($dataParas);
                $data = $getuserid->fetchAll();
                ?><h2><?php echo $data; ?></h2><?php
                $userid = $data['intsignupID'];
                // INSERT INTO signup(strname,stremail,intnumber,strpassword) VALUES ('name3','email3@mail.com',3333333333,'Password3') ;
                // SELECT intsignupID from signup WHERE strname IN ('name3');
                // DELETE from signup where strname IN ('name3');
                unset($_POST['submit']);
                header("Location: {$_SERVER['HTTP_REFERER']}");
            }else{

            }
        ?>
    </head>
    <body>
            <div class="row">
                <div class="col-7 p-0 left-half align-self-end">
                    <div class="row justify-content-end">
                        <button onclick='rnavigate("loginPage.html")' class="col-2 loginbnt m-0 p-0">Login</button>
                    </div>
                </div>
                <div class="col right-half">
                    <div class="stcon">
                        <p>Sign In</p>
                        <h5 class="m-0 p-0">Sign In to get started</h5>
                        <div class="col-md-9">
                            <form action="" method="post">
                                <input type="number" name="number" id="number" min="10" onKeyPress="if(this.value.length==10) return false" class="col-md-10 mt-5 bg-transparent int-sty" placeholder="NUMBER">
                                <input type="email" name="email" id="email" class="col-md-10 mt-3 bg-transparent int-sty" placeholder="E-MAIL">
                                <input type="text" name="username" id="username" class="col-md-10 mt-3 bg-transparent int-sty" placeholder="USERNAME">
                                <input type="password" name="password" id="password" class="col-md-10 mt-3 bg-transparent int-sty" id="password" placeholder="PASSWORD" >
                                <div class="row pt-2 ps-3">
                                    <div class="form-check col-md-10 check-style">
                                        <input type="checkbox" id="termCon" class="form-check-input bg-transparent ">
                                        <label for="termCon" class="form-check-label">I agree to Terms and Conditions</label>
                                    </div>
                                    <!--<a href="" class="col-6 forgotlink-style">Forgot password?</a>-->
                                </div>
                                <button class="col-10 signinbnt mt-5" name="submit">Sign In</button>
                                <h1><?php echo $userid;?></h1>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function rnavigate(string){
                    location.replace(string)
                }
            </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
