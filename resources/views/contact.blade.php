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
            <a href="/contact" class="active">Contact</a>
        </nav>
    </header>

    <!-- contact -->

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form action="https://formspree.io/f/moqggdlg" method="POST">
            <div class="input-box">
                <input name="name"="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="input-box">
                <input type="number" name="number" placeholder="Mobile Number" required>
                <input type="text" name="text" placeholder="Email Subjeck" required>
            </div>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <button type="submit" value="Send Message" class="btn"> Send Message</button>
        </form>
    </section>

    <!-- footer -->

    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by Khoyum Masalik</p>
        </div>
        <div class="footer-iconTop">
            <a href="#home"><i class='bx bxs-chevrons-up'></i></a>
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
