<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>User registration system using PHP and MySQL</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
    <link rel = "stylesheet" type = "text/css" href = "radio_style.css">
</head>
<body>
    <?php
    if($_POST["loc"] == "InterContinental Bucharest"){
        $sql = "SELECT name, price, room_size FROM hotel INNER JOIN location ON (hotel.location_id = location.id) WHERE hotel.name = 'InterContinental' AND location.city = 'Bucharest'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "name: " . $row["name"]. " - Price: " . $row["price"]. " " . $row["room_size"]. "<br>";
            }
        } 
        else {
            echo "0 results";
        }
    }
    if($_POST["loc"] == "JW Marriott Bucharest"){
        $sql = "SELECT name, price, room_size FROM hotel WHERE name = 'JW Marriott'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "name: " . $row["name"]. " - Price: " . $row["price"]. " " . $row["room_size"]. "<br>";
            }
        } 
        else {
            echo "0 results";
        }
    }
    if($_POST["loc"] == "Hilton Bucharest"){
        $sql = "SELECT name, price, room_size FROM hotel INNER JOIN location ON (hotel.location_id = location.id) WHERE hotel.name = 'Hilton' AND location.city = 'Bucharest'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "name: " . $row["name"]. " - Price: " . $row["price"]. " " . $row["room_size"]. "<br>";
            }
        } 
        else {
            echo "0 results";
        }
    }
    if($_POST["loc"] == "InterContinental Berlin"){
        $sql = "SELECT name, price, room_size FROM hotel INNER JOIN location ON (hotel.location_id = location.id) WHERE hotel.name = 'InterContinental' AND location.city = 'Berlin'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "name: " . $row["name"]. " - Price: " . $row["price"]. " " . $row["room_size"]. "<br>";
            }
        } 
        else {
            echo "0 results";
        }
    }
    if($_POST["loc"] == "InterContinental Paris"){
        $sql = "SELECT name, price, room_size FROM hotel INNER JOIN location ON (hotel.location_id = location.id) WHERE hotel.name = 'InterContinental' AND location.city = 'Paris'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "name: " . $row["name"]. " - Price: " . $row["price"]. " " . $row["room_size"]. "<br>";
            }
        } 
        else {
            echo "0 results";
        }
    }
    if($_POST["loc"] == "InterContinental Vienna"){
        $sql = "SELECT name, price, room_size FROM hotel INNER JOIN location ON (hotel.location_id = location.id) WHERE hotel.name = 'InterContinental' AND location.city = 'Vienna'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "name: " . $row["name"]. " - Price: " . $row["price"]. " " . $row["room_size"]. "<br>";
            }
        } 
        else {
            echo "0 results";
        }
    }
    if($_POST["loc"] == "Hilton Amsterdam"){
        $sql = "SELECT name, price, room_size FROM hotel INNER JOIN location ON (hotel.location_id = location.id) WHERE hotel.name = 'Hilton' AND location.city = 'Amsterdam'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "name: " . $row["name"]. " - Price: " . $row["price"]. " " . $row["room_size"]. "<br>";
            }
        } 
        else {
            echo "0 results";
        }
    }
    if($_POST["loc"] == "Wyndham Dubai"){
        $sql = "SELECT name, price, room_size FROM hotel WHERE name = 'Wyndham'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "name: " . $row["name"]. " - Price: " . $row["price"]. " " . $row["room_size"]. "<br>";
            }
        } 
        else {
            echo "0 results";
        }
    }
    if($_POST["loc"] == "The Ritz London"){
        $sql = "SELECT name, price, room_size FROM hotel WHERE name = 'The Ritz'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "name: " . $row["name"]. " - Price: " . $row["price"]. " " . $row["room_size"]. "<br>";
            }
        } 
        else {
            echo "0 results";
        }
    }
    if($_POST["loc"] == "Rosewood London"){
        $sql = "SELECT name, price, room_size FROM hotel WHERE name = 'Rosewood'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "name: " . $row["name"]. " - Price: " . $row["price"]. " " . $row["room_size"]. "<br>";
            }
        } 
        else {
            echo "0 results";
        }
    }
    ?>
</body>
</html> 