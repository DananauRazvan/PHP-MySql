<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>User registration system using PHP and MySQL</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
    <link rel = "stylesheet" type = "text/css" href = "radio_style.css">
</head>
<body>
    <div class = "header">
        <h2>Select location</h2>
    </div>
    <form method = "post" action = "details2.php">
        <label class = "container">InterContinental Bucharest
            <input type = "radio" name = "loc" value = "InterContinental Bucharest">
            <span class = "checkmark"></span>
        </label>
        <label class = "container">JW Marriott Bucharest
            <input type = "radio" name = "loc" value = "JW Marriott Bucharest">
            <span class = "checkmark"></span>
        </label>
        <label class = "container">Hilton Bucharest
            <input type = "radio" name = "loc" value = "Hilton Bucharest">
            <span class = "checkmark"></span>
        </label>
        <label class = "container">InterContinental Berlin
            <input type = "radio" name = "loc" value = "InterContinental Berlin">
            <span class = "checkmark"></span>
        </label>
        <label class = "container">InterContinental Paris
            <input type = "radio" name = "loc" value = "InterContinental Paris">
            <span class = "checkmark"></span>
        </label>
        <label class = "container">InterContinental Vienna
            <input type = "radio" name = "loc" value = "InterContinental Vienna">
            <span class = "checkmark"></span>
        </label>
        <label class = "container">Hilton Amsterdam
            <input type = "radio" name = "loc" value = "Hilton Amsterdam">
            <span class = "checkmark"></span>
        </label>
        <label class = "container">Wyndham Dubai
            <input type = "radio" name = "loc" value = "Wyndham Dubai">
            <span class = "checkmark"></span>
        </label>
        <label class = "container">The Ritz London
            <input type = "radio" name = "loc" value = "The Ritz London">
            <span class = "checkmark"></span>
        </label>
        <label class = "container">Rosewood London
            <input type = "radio" name = "loc" value = "Rosewood London">
            <span class = "checkmark"></span>
        </label>
        <div class = "input-group">
            <button type = "submit" name = "login" class = "btn">Submit</button>
        </div>
    </form>
</body>
</html>