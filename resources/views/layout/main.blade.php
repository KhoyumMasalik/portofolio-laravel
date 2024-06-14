<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Website</title>
    <link rel="stylesheet" href="css/styles/style.css">
    <link rel="stylesheet" href="css/styles/responsive.css">
    <link rel="website icon" type="png" href="./images/icon/icon.png">
    <!-- box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <!-- header -->

    <header class="header">
        <a href="" class="logo">Khoyum <span>Masalik</span></a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="/home" class="active">Home</a>
            <a href="/about">About</a>
            <a href="/service">Services</a>
            <a href="/education">Education</a>
            <a href="/portofolio">Certificate</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <!-- home -->

        @yield('content')

    <!-- footer -->

    <footer class="footer">
        <div class="footer-text">
            @yield('footer')
        </div>
        <div class="footer-iconTop">
            <a href="#"><i class='bx bxs-chevrons-up'></i></a>
        </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- js -->
    <script src="scripts/script.js"></script>
</body>

</html>
