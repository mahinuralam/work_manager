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
                    <h1 class="card-title text-center text-custom-red">Work Manager</h1>
                    <h4 class="card-title text-center">Create New Account</h4>
                    <form action="process-registration.php" method="POST">
                        <div class="form-group py-2">
                            <label for="fullName">Full Name</label>
                            <input type="text" name="fullName" class="form-control" id="fullName"
                                placeholder="Enter Full Name" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="InputEmail">Email address</label>
                            <input type="email" name="email" class="form-control" id="InputEmail"
                                placeholder="Enter email" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="InputPassword1">Designation</label>
                            <input type="text" name="Designation" class="form-control" id="InputDesignation"
                                placeholder="Enter Designation" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="InputPassword1">Password</label>
                            <input type="password" name="password1" class="form-control" id="InputPassword1"
                                placeholder="Create Password" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="InputPassword2">Retype Password</label>
                            <input type="password" name="password2" class="form-control" id="InputPassword2"
                                placeholder="Retype Password">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" id="btnSubmit" name="Submit">Submit</button>
                        </div>

                    </form>
                    <div class="mt-2" id="message">
                        <h3 class="fs-6">Password must contain the following:</h3>
                        <ul class="list-group">
                            <li id="letter" class="list-group-item fs-6 invalid">A <b>lowercase</b> letter</li>
                            <li id="capital" class="list-group-item fs-6 invalid">A <b>capital (uppercase)</b> letter
                            </li>
                            <li id="number" class="list-group-item fs-6 invalid">A <b>number</b></li>
                            <li id="length" class="list-group-item fs-6 invalid">Minimum <b>8 characters</b></li>
                        </ul>
                    </div>
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