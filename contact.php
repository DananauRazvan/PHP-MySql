<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>User registration system using PHP and MySQL</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>
    <div class = "header">
        <h2>Contact Us</h2>
    </div>
    <form method = "post" action = "contact_send.php">
        <div class = "input-group">
            <label>Your name</label>
            <input type = "text" name = "name">
        </div>
        <div class = "input-group">
            <label>Your email</label>
            <input type = "text" name = "email">
        </div>
        <div class = "input-group">
            <label>Your comment</label>
            <textarea rows = "11" cols = "77" name = "comment"></textarea>
        </div>
        <div class = "input-group">
            <button type = "submit" name = "submit" class = "btn">Submit</button>
        </div>
    </form>
</body>
</html>