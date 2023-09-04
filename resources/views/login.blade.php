<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Buku | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<style>
    .btn-color {
        background-color: #0e1c36;
        color: #fff;
    }

    .profile-image-pic {
        height: 200px;
        width: 200px;
        object-fit: cover;
    }

    .cardbody-color {
        background-color: #ebf2fa;
    }

    a {
        text-decoration: none;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (session('status'))
                <div class="alert alert-danger ">
                    {{ session('message') }}
                </div>
                @endif

                <div class="card my-3">
                    <form action="" class="card-body cardbody-color p-lg-5" method="post">
                        @csrf
                        <div class="text-center">
                            <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="username" class="form-control" id="username" placeholder="User Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button>
                        </div>
                        <div class="form-text text-center mb-5 text-dark">
                            Not Registered? <a href="register" class="text-dark fw-bold"> Create an Account</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>