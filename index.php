<?php include('server.php'); 
    if(empty($_SESSION['username'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>User registration system using PHP and MySQL</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
    <link rel = "stylesheet" type = "text/css" href = "radio_style.css">
</head>
<body>
    <div class = "header">
        <h2>Home page</h2>
    </div>
    <div class = "content">
        <?php if(isset($_SESSION['success'])): ?>
            <div class = "error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <?php if(isset($_SESSION["username"])): ?>
            <p>Welcome <strong><?php echo $_SESSION["username"]; ?></strong></p>
            <p><a href = "login.php?logout = '1'" style = "color: red;">Logout</a></p>
        <?php endif ?>
    </div>
    <div class = "header">
        <h2>Make a booking</h2>
    </div>
    <form method = "post" action = "index.php">
        <div class = "input-group">
            <label for = "hotels">Choose a hotel:</label>
            <select id = "hotels" name = "hotels">
                <option value = "InterContinental Bucharest">InterContinental Bucharest</option>
                <option value = "JW Marriott Bucharest">JW Marriott Bucharest</option>
                <option value = "Hilton Bucharest">Hilton Bucharest</option>
                <option value = "InterContinental Berlin">InterContinental Berlin</option>
                <option value = "InterContinental Paris">InterContinental Paris</option>
                <option value = "InterContinental Vienna">InterContinental Vienna</option>
                <option value = "Hilton Amsterdam">Hilton Amsterdam</option>
                <option value = "Wyndham Dubai">Wyndham Dubai</option>
                <option value = "The Ritz London">The Ritz London</option>
                <option value = "Rosewood London">Rosewood London</option>
            </select>
        </div>
        <div class = "input-group">
            <label>First name</label>
            <input type = "text" name = "first_name">
        </div>
        <div class = "input-group">
            <label>Last name</label>
            <input type = "text" name = "last_name">
        </div>
        <div class = "input-group">
            <label>Start date</label>
            <input type = "date" name = "start_book_date">
        </div>
        <div class = "input-group">
            <label>End date</label>
            <input type = "date" name = "end_book_date">
        </div>
        <div class = "input-group">
            <button type = "submit" name = "book" class = "btn">Submit</button>
        </div>
    </form>
    <br>
    <?php
        $sql = "SELECT id FROM register WHERE username = '" . $_SESSION["username"] ."'";
        $result = mysqli_query($db, $sql);
        while ($row = $result->fetch_assoc()) {
            $id_booking_register = $row['id'];
        }
        if($_POST["hotels"] == "InterContinental Bucharest"){
            $sql = "SELECT hotel.id FROM hotel INNER JOIN location ON (hotel.location_id = location.id) WHERE hotel.name = 'InterContinental' AND location.city = 'Bucharest'";
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $id_booking_hotel = $row["id"];
                }
            }
        }
        if($_POST["hotels"] == "JW Marriott Bucharest"){
            $sql = "SELECT id FROM hotel WHERE name = 'JW Marriott'";
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $id_booking_hotel = $row["id"];
                }
            }
        }
        if($_POST["hotels"] == "Hilton Bucharest"){
            $sql = "SELECT hotel.id FROM hotel INNER JOIN location ON (hotel.location_id = location.id) WHERE hotel.name = 'Hilton' AND location.city = 'Bucharest'";
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $id_booking_hotel = $row["id"];
                }
            }
        }
        if($_POST["hotels"] == "InterContinental Berlin"){
            $sql = "SELECT hotel.id FROM hotel INNER JOIN location ON (hotel.location_id = location.id) WHERE hotel.name = 'InterContinental' AND location.city = 'Berlin'";
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $id_booking_hotel = $row["id"];
                }
            }
        }
        if($_POST["hotels"] == "InterContinental Paris"){
            $sql = "SELECT hotel.id FROM hotel INNER JOIN location ON (hotel.location_id = location.id) WHERE hotel.name = 'InterContinental' AND location.city = 'Paris'";
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $id_booking_hotel = $row["id"];
                }
            }
        }
        if($_POST["hotels"] == "InterContinental Vienna"){
            $sql = "SELECT hotel.id FROM hotel INNER JOIN location ON (hotel.location_id = location.id) WHERE hotel.name = 'InterContinental' AND location.city = 'Vienna'";
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $id_booking_hotel = $row["id"];
                }
            }
        }
        if($_POST["hotels"] == "Hilton Amsterdam"){
            $sql = "SELECT hotel.id FROM hotel INNER JOIN location ON (hotel.location_id = location.id) WHERE hotel.name = 'Hilton' AND location.city = 'Amsterdam'";
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $id_booking_hotel = $row["id"];
                }
            }
        }
        if($_POST["hotels"] == "Wyndham Dubai"){
            $sql = "SELECT hotel.id FROM hotel WHERE name = 'Wyndham'";
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $id_booking_hotel = $row["id"];
                }
            }
        }
        if($_POST["hotels"] == "The Ritz London"){
            $sql = "SELECT hotel.id FROM hotel WHERE name = 'The Ritz'";
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $id_booking_hotel = $row["id"];
                }
            }
        }
        if($_POST["hotels"] == "Rosewood London"){
            $sql = "SELECT hotel.id FROM hotel WHERE name = 'Rosewood'";
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $id_booking_hotel = $row["id"];
                }
            }
        }
        $sql = "INSERT INTO booking (hotel_id, register_id, first_name, last_name, start_book_date, end_book_date)
                VALUES ('$id_booking_hotel', '$id_booking_register', '" . $_POST["first_name"] ."', '" . $_POST["last_name"] ."', '" . $_POST["start_book_date"] ."', '" . $_POST["end_book_date"] ."')";
        mysqli_query($db, $sql);
    ?>
    <br>
    <br>
    <h2><a href = "details.php">Details about hotels?</a></h2>
    <h2><a href = "contact.php">Contact us</a></h2>
</body>
</html>