    <footer class="py-5 bg-dark">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

        .footer {
            background-color: #222222;
            padding: 20px;
            color: #cccccc;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .footer-section {
            margin: 20px;
            min-width: 200px;
        }

        .footer-section h3 {
            color: white;
            margin-bottom: 15px;
            font-size: 18px;
            position: relative;
            padding-left: 20px;
        }

        .footer-section h3::before {
            content: '\\';
            position: absolute;
            left: 0;
            top: 0;
            font-size: 24px;
            color: red;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            text-decoration: none;
            color: #cccccc;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: #ffffff;
        }

        .footer-social {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-social a {
            text-decoration: none;
            color: #cccccc;
            transition: color 0.3s;
            font-size: 20px;
        }

        .footer-social a:hover {
            color: #ffffff;
        }

        .footer-apps {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .footer-apps img {
            height: 30px;
            transition: transform 0.3s;
        }

        .footer-apps img:hover {
            transform: scale(1.1);
        }

        .footer-bottom {
            background-color: #111111;
            color: #cccccc;
            text-align: center;
            padding: 10px;
            font-size: 14px;
        }

        .footer-bottom a {
            text-decoration: none;
            color: #cccccc;
            margin: 0 5px;
            transition: color 0.3s;
        }

        .footer-bottom a:hover {
            color: #ffffff;
        }
        .social-icons a {
        margin: 0 10px;
        font-size: 20px;
    }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-section">
            <h3>NT Sections</h3>
            <ul>
                <li><a href="#">World</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Live</a></li>
                <li><a href="#">World</a></li>
                <li><a href="#">Srilanka</a></li>
                <li><a href="#">Sport</a></li>
                <li><a href="#">Special Reports</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>About NewsTap</h3>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Advertise With Us</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Follow our news</h3>
            <div class="footer-social">
                    <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>|
                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>|
                    <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>|
                    <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
        <p>Copyright© News Tap 2024.<br>All rights reserved.</p>
        <a href="#">Official Domain</a> |
        <a href="#">Terms & Conditions</a> |
        <a href="#">Privacy Policy</a>
    </div>
</body>
</html>
    </footer>