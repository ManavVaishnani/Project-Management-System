<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
        #container {
            display: flex;
            height: 100vh;
        }
        
        #left {
            width: 50%;
            background-color: #fff;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        #right {
            width: 50%;
            overflow-y: scroll;
            background-color: #f0f0f0;
            padding: 20px;
        }
        
        #logo {
            max-width: 600px;
            max-height: 600px;
        }
        
        #address-bar {
            margin-top: 20px;
        }
        
        #nav {
            margin-top: 15px;
            margin-left: 90px;
            margin-bottom: 25px;
        }
        
        #nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        
        #nav ul li {
            display: inline;
            margin-right: 20px;
        }
        
        #nav ul li a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            border-radius: 15px;
        }
        
        #nav ul li a:hover {
            background-color: #333;
            color: #fff;
        }
        
        #About {
            margin-top: 25px;
        }
    </style>
</head>

<body>
    <div id="container">
        <div id="left">
            <!-- left part of web page -->
            <div id="logo">
                <img src="Asset\images\Logo.png" alt="Logo">
            </div>
        </div>
        <div id="right">
            <!-- right  part of web page -->
            <div id="nav">
                <ul>
                    <li><a href="homepage.html" style="font-size: 20px;">Home</a></li>
                    <li><a href="#desc" style="font-size: 20px;">About Us</a></li>
                    <li><a href="#contact" style="font-size: 20px;">Contact Us</a></li>
                    <li><a href="Login.php" style="font-size: 20px;">Login</a></li>
                </ul>
            </div>
            <hr>
            <div id="About">
                <div id="name" style="font-size: 100px; text-decoration-style: inherit;">
                    Project Management system
                </div>
                <div id="head">
                    <h1 style="font-size: 50px
                    ;"><b>Welcome,</b></h1>
                </div>
                <div id="desc">
                    <p style="font-size: large;">
                        We are a dedicated team of professionals who are passionate about helping businesses and individuals effectively manage their projects from start to finish. Our system provides a comprehensive set of tools and features designed to streamline project workflows,
                        enhance collaboration, and ensure project success. Our mission is to provide a reliable and efficient platform that simplifies project management processes, enabling our users to focus on what they do best - delivering exceptional
                        results. We strive to stay ahead of the curve by continuously updating and improving our system to meet the evolving needs of modern project management.
                    </p>
                </div>
                <div id="contact" style="text-align: center;">
                    <h2>Contact Us</h2>
                    <p>If you have any questions or inquiries, feel free to reach out to us:</p>

                    <p><i class="fas fa-phone"></i><a href="tel:+123456789">+123456789</a></p>
                    <p><i class="fas fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></p>
                </div>

            </div>
        </div>

    </div>
</body>

</html>