<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Work Manager</title>
</head>

<body class="bg-custom overflow-auto">
    <main>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="p-1 w-md-50 h-100 d-flex justify-content-center">
                <div class="card p-2 p-md-5 m-md-5 shadow w-sm-50 ">
                    <h1 class="card-title text-center text-custom-red">Update Work Details</h1>
                    <form action="work-update-db.php" method="POST">
                        <div class="form-group py-2">
                            <label for="project_name">Project Name</label>
                            <input type="text" name="project_name" class="form-control" id="project_name"
                                placeholder="Enter Full Work Name" required>
                        </div>
                        
                        <div class="form-group py-2">
                            <label for="complete_date">Project Complete date</label>
                            <input type="text" name="complete_date" class="form-control" id="complete_date"
                                placeholder="project complete date" required>
                        </div>

                        <div class="form-group py-2"></div>


                        <div class="form-group py-2">
                            <label for="complete_date">Project Progress</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Requirements Collection Complete</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Frontend Complete</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Backend Complete</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Debugging Complete</label>
                        </div>

                        <div class="form-group py-2"></div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" id="btnSubmit" name="Submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </main>


    <script>
    $(document).ready(function() {
        $("#message").hide();
    });
    $("#InputPassword1").focus(
        function() {
            $("#message").show();
        }
    );
    $("#InputPassword1").keyup(
        function() {

            var pass = $("#InputPassword1").val();

            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if (lowerCaseLetters.test(pass) == true) {
                $("#letter").removeClass("invalid");
                $("#letter").addClass("valid");
            } else {
                $("#letter").removeClass("valid");
                $("#letter").addClass("invalid");
            }

            // Validate uppercase letters
            var upperCaseLetters = /[A-Z]/g;
            if (upperCaseLetters.test(pass) == true) {
                $("#capital").removeClass("invalid");
                $("#capital").addClass("valid");
            } else {
                $("#capital").removeClass("valid");
                $("#capital").addClass("invalid");
            }

            // Validate Numbers
            var numbers = /[0-9]/g;
            if (numbers.test(pass) == true) {
                $("#number").removeClass("invalid");
                $("#number").addClass("valid");
            } else {
                $("#number").removeClass("valid");
                $("#number").addClass("invalid");
            }

            // Validate Length
            if (pass.length > 8) {
                $("#length").removeClass("invalid");
                $("#length").addClass("valid");
            } else {
                $("#length").removeClass("valid");
                $("#length").addClass("invalid");
            }
        }
    );
    $("#InputPassword1").blur(
        function() {
            $("#message").hide();
        }
    );

    $("form").submit(function(e) {
        e.preventDefault();
        var password = $("#InputPassword1").val();
        var confirmPassword = $("#InputPassword2").val();
        if (password != confirmPassword) {
            alert("Passwords do not match.");
        } else {
            e.currentTarget.submit();
        }
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>