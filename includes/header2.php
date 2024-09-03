<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar2</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .navbar {
            background-color: #f8f8f8;
            padding: 10px;
            display: flex;
            justify-content: center;
            border-bottom: 1px solid #ddd;
        }

        .navbar-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        .navbar-item {
            cursor: pointer;
            color: black;
            text-decoration: none;
            padding: 5px 10px;
            transition: color 0.3s;
        }

        .navbar-item:hover {
            color: red;
        }

        .active {
            color: red;
        }

        /* Media query to hide navbar on small screens */
        @media (max-width: 768px) {
            .navbar {
                display: none;
            }
        }
    </style>
</head>
<body>
        <nav class="navbar">
        <ul class="navbar-list">
        <li class="navbar-item active"><a href="https://newstap.wuaze.com/index.php">Top Stories</a></li>
        <li class="navbar-item"><a href="https://newstap.wuaze.com/index.php">Latest News</a></li>
        <li class="navbar-item"><a href="https://newstap.wuaze.com/index.php">Sri Lanka</a></li>
        <li class="navbar-item"><a href="https://newstap.wuaze.com/category.php?catid=11">Lifestyle</a></li>
        <li class="navbar-item"><a href="https://newstap.wuaze.com/index.php">Watch</a></li>
        <li class="navbar-item"><a href="https://newstap.wuaze.com/index.php">Listen</a></li>
        <li class="navbar-item"><a href="https://newstap.wuaze.com/index.php">+ All Sections</a></li>
        </ul>
        </nav>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbarItems = document.querySelectorAll('.navbar-item');

            navbarItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Remove 'active' class from all items
                    navbarItems.forEach(i => i.classList.remove('active'));
                    
                    // Add 'active' class to the clicked item
                    this.classList.add('active');
                });
            });
        });
    </script>
</body>
</html>