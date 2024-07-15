<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Page</title>
        <?php
            $servername='localhost';
            $username='root';
            $password='';
            try{
            $con= new PDO("mysql:host=$servername;dbname=test",$username, $password);
            }catch(PDOException $e){
                echo "connection failed ".$e->getMessage();
            }
            
            // $insertdata = $con->prepare("INSERT INTO summary(intuserId, strname, stremail, strlocation, strpassword) VALUES (6,'name6','email6','assam','password6'),(7,'name7','email7','manipur','password7');");
            // $insertdata->execute();
            // $updatedata = $con->prepare("Update summary set strlocation='assam' str where intuserId = 0;");
            // $updatedata->execute();
            // $dropdata = $con->prepare("alter table summary auto_increament=1;");
            // $dropdata->execute();

            if(isset($_POST['submit'])){
                $name= $_POST['name'];
                $email= $_POST['email'];
                $number= $_POST['location'];
                $password= $_POST['password'];

                $insertdata = $con->prepare("INSERT INTO signup(strname,stremail,intnumber, strpassword) VALUES (:strname, :stremail, :intnumber, :strpassword)");
                $paras = [':strname'=>$name,':stremail'=>$email,':intnumber'=>$number,'strpassword'=>$password];
                $insertdata->execute($paras); 
                $userid = $con->lastInsertId();
                
                    
                unset($_POST['submit']);  
                header("Location: {$_SERVER['HTTP_REFERER']}");           

            }else{unset($_POST['submit']);}
        ?>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" id="name" name="name" placeholder="name"><br><br>
            <input type="email" id="email" name="email" placeholder="email"><br><br>
            <input type="text" id="location" name="location" placeholder="location"><br><br>
            <input type="password" id="password" name="password" placeholder="password"><br><br>
            <button type="submit" name="submit">Submit</button><br><br>
        </form>
        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Location</th>
                    <th>newid</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $std=$con->prepare("select * from signup;");
                    $std->execute();
                    $data = $std->fetchAll();
                    foreach($data as $row){
                        echo "sffsdafd ".$userid." Name: ".$row['strname']." - Email: ".$row['stremail']." Location: ".$row['strpassword']."<br>";
                        ?>
                            <tr>
                                <td><?php echo $row['intnumber']?></td>
                                <td><?php echo $row['strname']?></td>
                                <td><?php echo $row['stremail']?></td>
                                <td><?php echo $row['strpassword']?></td>
                            </tr>
                            <tr><td><?php echo $userid.'nnnj'; ?></td></tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <?php $conn = null; ?>
    </body>
</html>