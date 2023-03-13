<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Gallery Noir">
    <meta name="description" content="MDA Officers Colony Multan Official Website page">
    <title>Gallery Noir| Customers</title>
    <link rel="stylesheet" href="exhibitions1.css">
    <script src="https://kit.fontawesome.com/9524c3e80f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Play:wght@700&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    

</head>
<body>
    <div id="header">
        <div id="mail">
            <a href="umazen103@gmail.com">
                <i class="fa-solid fa-envelope">umazen103@gmail.com</i>
            </a>
        </div>
        <div id="phone">
            <a href="tel:+920 3481 694 445">
                <i class="fa-solid fa-phone"> +920 3481 694 445</i>
            </a>
        </div>
        <div class="socials">
            <a href="https://www.facebook.com/umama.zainab.372?mibextid=ZbWKwL" target="_blank">
                <i class="fa-brands fa-1.5x fa-facebook-f"></i>
            </a>
            <a href="https://instagram.com/umama__7?igshid=YmMyMTA2M2Y=" target="_blank">
                <i class="fa-brands fa-1.5x fa-instagram"></i>
            </a>
            <a href="https://www.twitter.com" target="_blank">
                <i class="fa-brands fa-1.5x fa-twitter"></i>
            </a>
        </div>
    </div>



    <div id="navbar" class="h-nav">
        <div class="logo" id="logo1">
            <img src="logo.png" alt="loading logo">
        </div>
        <div>
            <ul class=" nav-list v-class">
                <<li><a href="index.html">Home</li></a>
                <li><a href="customer1.php">Customers</li></a>
                <li><a href="order1_front.php">Orders</li></a>
                <li><a href="exhibitions_front.php">Exhibition</li></a>
                <li><a href="artworks_front.php">Art Pieces</li></a>
            </ul>
        </div>
    </div>
    <div id="background"></div>
    <div id="heading">
        <h1>Gallery Noir</h1>
        <p id="p1">Welcome to our art gallery! We are dedicated to showcasing the work of talented artists
            from all over the
            world. Our mission is to provide a platform for artists to share their vision and inspire others through
            their creations
            Our gallery features a wide range of mediums, including painting, sculpture, photography, and more. We
            strive to bring together a diverse selection of art that reflects the creativity and diversity of the art
            world.
            We hope that you will take the time to explore our exhibitions and discover the beauty and inspiration that
            art has to offer. Thank you for visiting, and we hope to see you at our gallery soon!</p>
    </div>

    <div id="form">
        <h1>Please enter the following details: </h1>
        <form method="post" action="arts_exhibition.php" >
            <ul>
                <li><input type="number" name="e_id" id="cname" placeholder="Enter the exhibtion ID"></li>
                <li><input type="text" name="art_title" id="customer_id" placeholder="Enter the art title"></li>
                <li id="button"><a href="exhibition1_front.php"><button>Insert</button></a></li>
            </ul>
        </form>
    </div>

        <br>
    <table class="table">
        <thead>
            <tr>
                <th class="heading">Exhibition ID</th>
                <th class="heading">Art Title</th>
                
            </tr>
        </thead>

        <tbody class="body">
            <?php
            $servername = "127.0.0.1:3306";
            $username = "root";
            $password = "";
            $database = "myartgallery";

            // Create connection
            $connection = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            // read all row from database table
            $sql = "SELECT * FROM arts_in_exhibition";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
            }

            // read data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["e_id"] . "</td>
                    <td>" . $row["art_title"] . "</td>
                </tr>";
            }

            $connection->close();
            ?>

    <div class="footer">
        <div class="con">
            <h2 class="sh">Contact us</h2>
            <div class="ver">
                <div id="mai">
                    <a href="mailto:umazen103@gmail.com">
                        <i class="fa-solid fa-envelope">umazen103@gmail.com</i>
                    </a>
                </div>
                <div id="phon">
                    <a href="tel:+920 3060 040 951">
                        <i class="fa-solid fa-phone">+920 3060 040 951</i>
                    </a>
                </div>
                <div id="telphon">
                    <a href="tel:+920 3481 694 445">
                        <i class="fa-solid fa-phone"> +920 3481 694 445</i>
                    </a>
                </div>


                <div class="soc">
                    <a href="https://www.facebook.com/umama.zainab.372?mibextid=ZbWKwL" target="_blank">
                        <i class="fa-brands fa-1.8x fa-facebook-f"></i>
                    </a>
                    <a href="https://instagram.com/umama__7?igshid=YmMyMTA2M2Y=" target="_blank">
                        <i class="fa-brands fa-1.8x fa-instagram"></i>
                    </a>
                    <a href="https://www.twitter.com" target="_blank">
                        <i class="fa-brands fa-1.8x fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>




        <div class="tmg">
            <h2 class="sh">Timings</h2>
            <h3>Office Timings:</h3>
            <p>Monday to Saturday</p>
            <p id="space">0900 to 1500 hours</p>
            <h3>Off Day:</h3>
            <p>Sunday</p>
        </div>


            <div id="ql">
                <h2 class="sh">Quick Links</h2>
                <ul>
                <li><a href="index.html">Home</li></a>
                <li><a href="artworks_front.php">Art Pieces</li></a>
                <li><a href="order1_front.php">Orders</li></a>
                <li><a href="customer1.php">Customers</li></a>
                <li><a href="exhibitions_front.php">Exhibition</li></a>
            </div>

    </div>

    </div>
    <div id="copy">
        &copy;Copyright AUZ Holdings
    </div>
</body>

</html>