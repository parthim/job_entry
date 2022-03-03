<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Job Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap Stylesheet link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="Assets/css/main.css">
    
</head>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg navbar-light shadow sticky-top">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">JobEntry</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="jobPortal.php" class="nav-item nav-link ">Job Status</a>
                    <a href="admin_login.php" class="nav-item nav-link active">Admin login</a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Content Div Starts -->
        <div id="content_div" class="container-fluid p-0">
            <form action="adminPanel.php" method="post">
                <div class="imageContainer">
                    <img src="Assets/images/admin_profile_image.png" alt="Profile Picture" class="profile_pic">
                </div>

                <div class="container">
                    <label for="uname"><b>Username &nbsp:</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                    <br>
                    <label for="psw"><b>Password &nbsp :</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button><br>
                    <label style="margin-left:30%;">
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    <br>
                    <label style="margin-left:30%;"><span class="psw">Forgot <a href="#">password?</a></span></label>
                </div>
            </form>
        </div>
        <!-- Content Div End -->
    </div>

    <!-- JavaScript Section -->
    <script src="Assets/js/main.js"></script>
</body>
</html>