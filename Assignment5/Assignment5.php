<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Payment Confirmation</title>
     <link rel="stylesheet" href="../StyleSheet1.css" />
</head>
<body>
    <header id="darkBackground">
        <h1>Payment Confirmation Page</h1>
    </header>
    
    <main id="darkBackground">

        <div style="margin: 1%;
            border: 5px solid gray;
            width: 30%;
            text-align: left;
            padding: 1%;
            line-height: 1.5;
            font-size: 1.25em;">
            
            <h3 ><?php echo "Your payment has been recieved."?> </h3><br>

            Card Owner: <?php echo $_REQUEST["CC_Owner"] ?> <br>
            Credit Card Number: <?php echo $_REQUEST["CC_Num"] ?> <br> 
            Card Type: <?php echo $_REQUEST["Card_Type"] ?> <br>
            Card Expiration: <?php echo $_REQUEST["Exp_Month"] ?> <?php echo $_REQUEST["Exp_Year"] ?> <br>
            Authorization: <?php echo $_REQUEST["Auth"] ?> <br>
         </div>
    </main>

    <nav id="darkBackground">
        <ul>

            <li id="darkBackground">
                <a href="https://icarus.cs.weber.edu/~ch07318/Assignment1/recipe.html" alt="Assignment 1" target="_blank"> Assignment 1 </a>
            </li>
            <li id="darkBackground">
                <a href="https://icarus.cs.weber.edu/~ch07318/Assignment2/ImageMap.html" alt="Assignment 2" target="_blank"> Assignment 2 </a>
            </li>
            <li id="darkBackground">
                <a href="https://icarus.cs.weber.edu/~ch07318" alt="Assignment 3" target="_blank"> Assignment 3 </a>
            </li>
            <li vertical id="darkBackground">
                <a href="https://icarus.cs.weber.edu/~ch07318/Assignment4/Basketball.html" alt="Assignment 4" target="_blank"> Assignment 4 </a>
            </li>
            <li id="darkBackground">
                <a href="https://icarus.cs.weber.edu/~ch07318/Assignment5/Assignment5.html" alt="Assignment 5" target="_blank"> Assignment 5 </a>
            </li>
            <li id="darkBackground">
                <a href="https://icarus.cs.weber.edu/~ch07318/Assignment5/Assignment5.html" alt="Assignment 6" target="_blank"> Assignment 6 </a>
            </li>
            <li id="darkBackground">
                <a href="https://icarus.cs.weber.edu/~ch07318/Assignment7/Assignment7.html" alt="Assignment 7" target="_blank"> Assignment 7 </a>
            </li>
            <li id="darkBackground">
                <a href="https://icarus.cs.weber.edu/~ch07318/Assignment8/Assignment8.html" alt="Assignment 8" target="_blank"> Assignment 8 </a>
            </li>
            <li id="darkBackground">
                <a href="https://icarus.cs.weber.edu/~ch07318/Assignment9/Assignment9.html" alt="Assignment 9" target="_blank"> Assignment 9 </a>
            </li>
            <li id="darkBackground">
                <a href="https://icarus.cs.weber.edu/~ch07318/Midterm/MidtermPractice.html" alt="Midterm" target="_blank"> Midterm </a>
            </li>
            <li id="darkBackground">
                <a href="https://icarus.cs.weber.edu/~ch07318/Final/Final.html" alt="Final" target="_blank"> Final </a>
            </li>
        </ul>

    </nav>

    <footer id="darkBackground">

        <span><a href="https://weber.edu" alt="Weber State University" target="_blank"> Weber State University </a></span>
        <span><a href="http://www.w3schools.com/html" alt="W3Schools HTML" target="_blank"> W3Schools HTML </a></span>
        <span><a href="http://www.w3schools.com/css" alt="W3Schools CSS" target="_blank"> W3Schools CSS </a></span>
        <span><a href="http://www.w3schools.com/js" alt="W3Schools JavaScript" target="_blank"> W3Schools JavaScript </a></span>
        <span><a href="http://www.grsites.com/archive/textures/" alt="GR Sites Textures" target="_blank"> GR Sites Textures </a></span>
    </footer>

</body>
</html>