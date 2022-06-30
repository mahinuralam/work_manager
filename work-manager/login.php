<?php
    // Include config file
    require_once "config.php";

    if (isset($_POST['login'])) {
        
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $h_password = sha1($password);

        $sql = "SELECT * FROM  `users`
        WHERE  `email` ='" . $email . "' AND  `password` =  '" . $h_password . "'";

        $result = $conn->query($sql);

        if ($result){
            
                if ( $result->num_rows > 0) {
                    
                    $found_user = mysqli_fetch_array($result);
                    //fill the result to session variable
                    session_start();

                    $_SESSION['loggedin']  = true; 
                    $_SESSION['email'] = $found_user['email'];
                    $_SESSION['fullName'] = $found_user['fullName'];
                    $_SESSION['designation'] = $found_user['designation'];

                    ?>
                        <script type="text/javascript">
                            //then it will be redirected to index.php
                            alert("<?php echo  $_SESSION['name']; ?> Welcome!");
                            window.location = "app/index.php";
                        </script>
                    <?php        
                }
                else {
                    //IF theres no result
                    ?>
                        <script type="text/javascript">
                            alert("Username or Password Not Registered! Contact Your administrator.");
                            window.location = "index.php";
                        </script>
                    <?php
    
                }
    
             } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
    } 
    else{
        echo 'Fill-Up Login Form First';
    }
     $conn->close();
    ?>