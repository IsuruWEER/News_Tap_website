<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsTap</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/newstap.wuaze.com/htdocs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/newstap.wuaze.com/htdocs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/newstap.wuaze.com/htdocs/favicon-16x16.png">
    <link rel="manifest" href="../site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;500;700&display=swap');

    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
        color: #333;
    }

    header {
        background-color: #1e2124;
        color: #fff;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        z-index: 999;
    }

    .logo img {
        height: 40px;
    }

    nav {
        display: flex;
        align-items: center;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
        margin: 0 15px;
        transition: color 0.3s ease;
        display: flex;
        align-items: center;
    }

    nav a:hover {
        color: #ddd;
    }

    nav a i {
        margin-right: 8px;
    }

    .menu-icon {
        display: none;
        font-size: 24px;
        cursor: pointer;
    }

    .nav-links {
        display: flex;
    }

    @media (max-width: 768px) {
        .nav-links {
            display: none;
            flex-direction: column;
            width: 100%;
        }

        .nav-links.active {
            display: flex;
        }

        nav {
            flex-direction: column;
            align-items: flex-start;
        }

        nav a {
            margin: 10px 0;
        }

        .menu-icon {
            display: block;
        }
    }
</style>
</head>
<body>
    <header>
        <a href="index.php" class="logo"><img src="images/newstap.png" alt="newstap"></a>
        <nav>
            <div class="menu-icon" onclick="toggleMenu()"><i class="fas fa-bars"></i></div>
            <div class="nav-links" id="navLinks">
                <a href="index.php"><i class="fas fa-home"></i>Home</a>
                <a href="https://newstap.wuaze.com/category.php?catid=8">World</a>
                <a href="https://newstap.wuaze.com/category.php?catid=9">Sport</a>
                <a href="https://newstap.wuaze.com/category.php?catid=10">Finance</a>
                <a href="https://newstap.wuaze.com/category.php?catid=11">Entertainment</a>
                <a href="https://newstap.wuaze.com/category.php?catid=12">Technology</a>
                <a href="https://newstap.wuaze.com/category.php?catid=14">Politics</a>
                <!--<a href=""><i class="fas fa-search"></i>Search</a>
                <a href="#">More...</a> -->
            </div>
        </nav>
    </header>
    <script>
    function toggleMenu() {
        const navLinks = document.getElementById('navLinks');
        navLinks.classList.toggle('active');
    }
    </script>
</body>
</html>