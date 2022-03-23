
<?php 
session_start();
if (isset($_SESSION['username'])) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Login</title>
    <style type="text/css">
        .kotak-form {
            width: 50%;
            margin-top: 50px;
            border-radius: 20px;
            box-shadow: 0 2px 4px 0 rgb(0 0 0 / 10%), 0 3px 10px 0 rgb(0 0 0 / 10%);
        }
        .inputan {
        width: 100%;
        border-radius: 20px;
        padding: 10px 30px;
        margin-bottom: 20px;
        box-shadow: none;
        border: 0;
      }

      .btn{
          margin-top: 20px;
          border-radius: 20px;
          width: 100%;
      }
    </style>
</head>

<body>
    <div class="container landing-page">
        <div class="row justify-content-center">
            <div class="card kotak-form">
                <div class="card-body" style="padding: 30px;">
                    <p style="text-align: center; font-weight: bold; margin-bottom: 50px;">Log In to Your Account</p>

                    <label>Username</label>
                    <input class="inputan bg-light align-middle" type="text" class="form-control" placeholder="Username" name="username" width="80%;">
                    <label>Password</label>
                    <input class="inputan bg-light" type="password" class="form-control" name="password" placeholder="Password" width="80%;">

                    <button type="button" class="btn btn-success" id="prosesLogin">Login</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $("#prosesLogin").on("click", function() {
            let username = $("input[name=username]").val();
            let password = $("input[name=password]").val();
            $.ajax({
                url: 'api/login.php',
                type: 'POST',
                data: {
                    username,
                    password
                },
                success: function(data) {
                    if (!data.success) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal Login!',
                            text: data.message,
                        });
                        return;
                    }

                    Swal.fire({
                        icon: 'success',
                        title: data.message,
                        timer: 2000,
                        showConfirmButton: false
                    }).then(res => {
                        window.location.href = "index.php";
                    });
                    //           
                }
            });
        });
    </script>
</body>

</html>