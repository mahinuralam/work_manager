<?php
  // Include config file
  require_once "config.php";

  //if (isset($_POST['Submit'])) {
  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $designation = $_POST['Designation'];
  $password = $_POST['password1'];
  $password2 = $_POST['password2'];
    if($password!=$password2){
        ?>
          <script type="text/javascript">
          alert("Two Password Not Matched! Please Try Again");
          window.location = "register.php";
          </script>
        <?php
    }

  $sql_e = "SELECT * FROM users WHERE email='$email'";
  $res_e = mysqli_query($conn, $sql_e);
  if (mysqli_num_rows($res_e) > 0) {
          echo '<script type="text/javascript">alert("Sorry... This Email Already Registered");
          history.go(-1);</script>';
    }
    else{
          $query = "INSERT INTO users(userid, email, password, fullName, designation) VALUES (NULL, '$email', sha1('{$password}'), '$fullName', '$designation')";
          if(mysqli_query($conn,$query) )
          {
              echo '<script type="text/javascript">
              alert("Registration Compleate!!");
              window.location.href = "index.php";
              </script>';
          }
           else{
            echo "ERROR: Could not able to execute . " . mysqli_error($conn);
          }

        }
// }
// else{
//     echo "Not submited";
// }
?>