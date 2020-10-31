<?php include 'database.php' ; ?>
<?php 
    $query = "SELECT * FROM shouts";
    $shouts = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ShoutiSHOUT IT!t</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
        <div id="container">
            <header>
                 <h1>SHOUT IT! shoutbox</h1>
            </header>
            <div id="shouts">
                <ul>
                    <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                        <li class="shout"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?></strong>:<?php echo $row['message'] ?></li>
                    <?php endwhile; ?> 
                </ul>
            </div>
            <div id="input">
                <?php if(isset($_GET['error'])) : ?>
                    <div class="error"><?php echo $_GET['error']; ?></div>
                <?php endif; ?>
                <form action="process.php" method="post">
                    <input type="text" name="user" placeholder="Enter Your Name" />
                    <input type="text" name="message" placeholder="Enter Message" />
                    <br/>
                    <input type="submit" class="shout-btn" name="submit" value="Shout It Out" />
                </form>
            </div>
        </div>
    </body>
</html>