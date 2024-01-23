<!DOCTYPE html>
<head>
    <title>Learn</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                
                <h2 class="logo">Learn To earn</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Sevice</a></li>
                    <li><a href="">Design</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="search">
                <input class="srch" type="Search" name="" placeholder="Search Here">
                <a href=""><button class="btn">Search</button></a>
            </div>

        </div>
        <div class="content">
            <h1>Web Design &<br><span>Development</span><br>cource</h1>
            <p class="par">We, at Brainwonders, Strive to help you to make an informaed decision about your career. 
                <br>Based on the analysis that you opt for we assist you in understanding you or your child's capabilities better.</p>

            <button class="cn"><a href="">JOIN US</a></button>
            

            <div class="form">
                <h2>Login Here</h2>
                <form action="#" method="POST" autocomplete="off">
                    
                    <input type="email" name="email" placeholder="Enter Email Here" id="email">
                    <input type="password" name="password" placeholder="Enter password Here" id="password">
                    <button class="btrn" name="C"><a href="#"></a>Login </button>
                </form>

                <p class="link">Don't have an account</p>
                <p href="">Sign up here</p>
                <p class="liw">Log in with</p>

                <div class="icon">
                   <a href=""><ion-icon name="logo-facebook"></ion-icon></a>
                   <a href=""><ion-icon name="logo-twitter"></ion-icon></a>
                   <a href=""><ion-icon name="logo-whatsapp"></ion-icon></a>
                   <a href=""><ion-icon name="logo-skype"></ion-icon></a>
                   <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
                </div>
            </div>
                
        
        </div>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>


<?php
    include("connect.php");
    

    if (isset($_POST['C'])) {
        $username = $_POST['email'];
        $pwd = $_POST['password'];

        // Use prepared statements to prevent SQL injection
        $query = "SELECT * FROM radhe WHERE `Email Id` = ? AND `Password` = ?";
        $stmt = mysqli_prepare($connect, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $username, $pwd);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if ($result) {
                $total = mysqli_num_rows($result);

                if ($total == 1) {
                    echo "Login Successfully";
                } else {
                    echo "Login failed";
                }
            } else {
                echo "Query execution failed: " . mysqli_error($connect);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Prepared statement initialization failed: " . mysqli_error($connect);
        }

        mysqli_close($connect);
    }
?>


