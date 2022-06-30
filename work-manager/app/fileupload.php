<?php
require_once "..\config.php";
//check if form is submitted
if (isset($_POST['submit']))
{
    $filename = $_FILES['file1']['name'];
    $workId = $_POST['workId'];
    session_start();
    $createdBy = $_SESSION['email'];
    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'PDF,', 'txt', 'TXT', 'doc', 'DOC', 'docx', 'DOCX', 'png', 'PNG', 'jpg', 'JPG', 'jpeg', 'JPEG', 'gif', 'GIF'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = 'select max(workid) as id from workfile';
            $result = mysqli_query($conn, $sql);
            if ($result)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $filename;

            //set target directory
            $path = 'uploads/';
                
            $createdAt = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO workfile(workid, workfileName, createdAt, createdBy) VALUES('$workId', '$filename', '$createdAt', '$createdBy')";
            if(mysqli_query($conn, $sql))
            {

                echo '
                <script>
                alert("File Upladed!");
                window.history.go(-1);
                </script>
                ';
            }
            
        }
        else
        {
            echo '
                <script>
                alert("Something Wrong!");
                window.history.go(-1);
                </script>
                ';
        }
    }
    else
    echo '
    <script>
    alert("Something Wrong!");
    window.history.go(-1);
    </script>
    ';
}
?>