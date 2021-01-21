<?php
    session_start();
    $username = "";
    $email = "";
    $errors = array();
    $hostname = "xxxxxx";
    $dbUsername = "xxxxxx";
    $dbPassword = "xxxxxx";
    $dbName = "xxxxxx";
    $db = mysqli_connect($hostname, $dbUsername, $dbPassword, $dbName);

    $sql = "CREATE TABLE department (
                id INTEGER PRIMARY KEY,
                department_name VARCHAR(100),
                manager_name VARCHAR(100)
            );";
    mysqli_query($db, $sql);
    $sql = "CREATE TABLE location (
                id INTEGER PRIMARY KEY,
                address VARCHAR(100),
                postal_code INTEGER,
                city VARCHAR(100),
                country VARCHAR(100)
            );";
    mysqli_query($db, $sql);
    $sql = "CREATE TABLE hotel (
                id INTEGER PRIMARY KEY,
                price INTEGER,
                stars INTEGER,
                room_size INTEGER, 
                no_rooms INTEGER,
                name VARCHAR(100),
                location_id INTEGER,
                FOREIGN KEY(location_id) REFERENCES location(id)
            );";
    mysqli_query($db, $sql);
    $sql = "CREATE TABLE register (
                id INTEGER PRIMARY KEY,
                username VARCHAR(100),
                password VARCHAR(100),
                email VARCHAR(100),
                phone_number INTEGER
            );";
    mysqli_query($db, $sql);
    $sql = "CREATE TABLE booking (
                hotel_id INTEGER,
                register_id INTEGER,
                first_name VARCHAR(100),
                last_name VARCHAR(100),
                start_book_date DATE,
                end_book_date DATE,
                FOREIGN KEY(hotel_id) REFERENCES hotel(id),
                FOREIGN KEY(register_id) REFERENCES register(id)
            );";
    mysqli_query($db, $sql);
    $sql = "CREATE TABLE employee (
                id INTEGER PRIMARY KEY,
                hotel_id INTEGER,
                department_id INTEGER,
                first_name VARCHAR(100),
                last_name VARCHAR(100),
                email VARCHAR(100), 
                phone_number INTEGER,
                salary INTEGER,
                hire_date DATE,
                FOREIGN KEY(hotel_id) REFERENCES hotel(id),
                FOREIGN KEY(department_id) REFERENCES department(id)
            );";
    mysqli_query($db, $sql);
    
    $query = "SELECT * FROM department";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) == 0){
        $sql = "INSERT INTO department (id, department_name, manager_name) VALUES (1, 'HR', 'John');";
        $sql .= "INSERT INTO department (id, department_name, manager_name) VALUES (2, 'front_office', 'Smith');";
        $sql .= "INSERT INTO department (id, department_name, manager_name) VALUES (3, 'housekeeping', 'Harry')";
        $sql .= "INSERT INTO department (id, department_name, manager_name) VALUES (4, 'food_production', 'Joe');";
        $sql .= "INSERT INTO department (id, department_name, manager_name) VALUES (5, 'maintenance', 'James');";
        $sql .= "INSERT INTO department (id, department_name, manager_name) VALUES (6, 'security', 'Hefner')";
        mysqli_multi_query($db, $sql);
    }
    $query = "SELECT * FROM location";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) == 0){
        $sql = "INSERT INTO location VALUES (8, 'Bld Nicolae Balcescu 4', 10051, 'Bucharest', 'Romania');";
        $sql .= "INSERT INTO location VALUES (9, 'Calea 13 Septembrie 90', 50726, 'Bucharest', 'Romania');";
        $sql .= "INSERT INTO location VALUES (10, 'Strada Episcopiei 1-3', 10292, 'Bucharest', 'Romania');"; 
        $sql .= "INSERT INTO location VALUES (11, 'Budapester Str. 2', 10787, 'Berlin', 'Germany');";
        $sql .= "INSERT INTO location VALUES (12, '2 Rue Scribe', 75009, 'Paris', 'France');";
        $sql .= "INSERT INTO location VALUES (13, 'Johannesgasse 28', 1030, 'Vienna', 'Austria');";
        $sql .= "INSERT INTO location VALUES (14, 'Apollolaan 138', 1077, 'Amsterdam', 'Netherlands');";
        $sql .= "INSERT INTO location VALUES (15, 'Al Seba Street', 394, 'Dubai', 'United Arab Emirates');";
        $sql .= "INSERT INTO location VALUES (16, '150 Piccadilly, St. James', 7397, 'London', 'United Kingdom');";
        $sql .= "INSERT INTO location VALUES (17, '41 - 43 Brook Street, Westminster', 7120, 'London', 'United Kingdom')";
        mysqli_multi_query($db, $sql);
    }
    $query = "SELECT * FROM hotel";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) == 0){
        $sql = "INSERT INTO hotel VALUES (16, 95, 5, 29, 200, 'InterContinental', 8);";
        $sql .= "INSERT INTO hotel VALUES (17, 110, 5, 32, 160, 'JW Marriott', 9);";
        $sql .= "INSERT INTO hotel VALUES (18, 90, 5, 36, 100, 'Hilton', 10);";
        $sql .= "INSERT INTO hotel VALUES (19, 130, 5, 35, 300, 'InterContinental', 11);";
        $sql .= "INSERT INTO hotel VALUES (20, 120, 5, 32, 250, 'InterContinental', 12);";
        $sql .= "INSERT INTO hotel VALUES (21, 110, 5, 30, 200, 'InterContinental', 13);";
        $sql .= "INSERT INTO hotel VALUES (22, 135, 5, 38, 185, 'Hilton', 14);";
        $sql .= "INSERT INTO hotel VALUES (23, 90, 4, 28, 165, 'Wyndham', 15);";
        $sql .= "INSERT INTO hotel VALUES (24, 160, 5, 40, 110, 'The Ritz', 16);";
        $sql .= "INSERT INTO hotel VALUES (25, 190, 5, 37, 170, 'Rosewood', 17);";
        mysqli_multi_query($db, $sql);
    }
    $query = "SELECT * FROM employee";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) == 0){
        $sql = "INSERT INTO employee VALUES (12, 16, 1, 'Ana', 'Anghel', 'anaang@gmail.com', 0757129642, 700, TO_DATE('2020-06-16','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (13, 16, 1, 'Andrei', 'Enescu', 'andrei_enescu@gmail.com', 746845375, 800, TO_DATE('2019-07-10','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (14, 16, 2, 'David', 'Albu', 'dalbu12@yahoo.com', 732658712, 670, TO_DATE('2020-10-14','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (15, 16, 2, 'Bogdan', 'Ionescu', 'bogdan.ionescu@gmail.com', 782746319, 730, TO_DATE('2020-12-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (16, 16, 2, 'Ioana', 'Udrea', 'udrea_ioana@gmail.com', 712531289, 880, TO_DATE('2018-02-19','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (17, 16, 2, 'Albert', 'Roman', 'albertroman@yahoo.com', 789127466, 960, TO_DATE('2017-10-19','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (18, 16, 3, 'Maria', 'Istrate', 'istratemaria@gmail.com', 789652145, 560, TO_DATE('2020-06-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (19, 16, 3, 'Ramona', 'Dumitrescu', 'dumitresscu_ramona1234@gmail.com', 796412034, 590, TO_DATE('2018-08-19','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (20, 16, 3, 'Andreea', 'Olaru', 'andreea.olaru@yahoo.com', 797542844, 560, TO_DATE('2020-12-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (21, 16, 3, 'Paula', 'Toma', 'tomapaula@gmail.com', 789981423, 700, TO_DATE('2019-08-05','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (22, 16, 3, 'Andreea', 'Chivu', 'a.chivu@yahoo.com', 724644312, 820, TO_DATE('2016-12-19','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (23, 16, 4, 'Paul', 'Achim', 'paulachim@yahoo.com', 789213287, 820, TO_DATE('2019-08-15','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (24, 16, 4, 'Andrei', 'Marin', 'marin_andrei@gmail.com', 714406959, 900, TO_DATE('2018-09-10','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (25, 16, 4, 'Stefan', 'Lazar', 'lazar.stefan19912gmail.com', 797111698, 1000, TO_DATE('2017-04-20','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (26, 16, 5, 'Alin', 'Popa', 'popa23alin@gmail.com', 759021024, 970, TO_DATE('2020-08-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (27, 16, 5, 'Radu', 'Popescu', 'popescu.radu@yahoo.com', 719702159, 1300, TO_DATE('2020-01-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (28, 16, 6, 'Mihai', 'Ion', 'm.ion@yahoo.com', 795497014, 780, TO_DATE('2017-12-19','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (29, 17, 1, 'Ioana', 'Pirvu', 'pirvuioana@yahoo.com', 758235996, 750, TO_DATE('2019-12-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (30, 17, 2, 'Mircea', 'Iliescu', 'iliescu_mircea@gmail.com', 769824866, 740, TO_DATE('2019-08-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (31, 17, 3, 'Maria', 'Ioan', 'ioan_maria@gmail.com', 721547855, 600, TO_DATE('2020-07-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (32, 17, 3, 'Cristina', 'Filip', 'filip_cristina', 789461849, 620, TO_DATE('2017-06-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (33, 17, 3, 'Alexandra', 'Rosu', 'rosu.alexa@yahoo.com', 799263481, 600, TO_DATE('2018-09-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (34, 17, 4, 'Eugen', 'Cristea', 'eugencristea@gmail.com', 788423128, 800, TO_DATE('2020-09-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (35, 17, 5, 'Adina', 'Coman', 'adina.coman23@gmail.com', 712556199, 920, TO_DATE('2020-04-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (36, 17, 6, 'Denis', 'Radut', 'dennis1995@gmail.com', 731894327, 870, TO_DATE('2019-02-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (37, 18, 1, 'Claudia', 'Vasilescu', 'vasilescu_claudia@yahoo.com', 719505214, 700, TO_DATE('2018-08-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (38, 18, 2, 'Andrei', 'Iancu', 'andrei_iancu@gmail.com', 727028340, 760, TO_DATE('2020-04-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (39, 18, 3, 'Iulia', 'Voinea', 'voineaiulia@gmail.com', 729405175, 670, TO_DATE('2020-12-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (40, 18, 4, 'Ion', 'Nicolae', 'i.nicolae@yahoo.com', 789416386, 860, TO_DATE('2017-11-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (41, 18, 5, 'Andrei', 'Ilie', 'ilieandrei@gmail.com', 711859326, 1450, TO_DATE('2016-08-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (42, 18, 6, 'Razvan', 'Dobre', 'dobrerazvan@yahoo.com', 793481262, 780, TO_DATE('2019-10-19','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (43, 19, 1, 'Lukas', 'Muller', 'muller.lukas@gmail.com', 493090182, 2300, TO_DATE('2019-07-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (44, 19, 2, 'Manuel', 'Schmidt', 'schmidt_manuel@gmail.com', 493582189, 2600, TO_DATE('2020-05-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (45, 19, 3, 'Marco', 'Becker', 'marco.becker@gmail.com', 497190192, 2100, TO_DATE('2019-04-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (46, 19, 4, 'Ben', 'Meyer', 'b.meyer@yahoo.com', 493697192, 2900, TO_DATE('2020-12-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (47, 19, 5, 'Toni', 'Fischer', 'fischer_toni@yahoo.com', 493396121, 3800, TO_DATE('2020-08-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (48, 19, 6, 'Jonas', 'Werner', 'jonas_wener@gmail.com', 499094188, 3000, TO_DATE('2018-07-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (49, 20, 1, 'Ciel', 'Aubert', 'ciel.aubertl@gmail.com', 331403203, 3100, TO_DATE('2019-07-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (50, 20, 2, 'Amy', 'Bellaire', 'a.bellaire@yahoo.com', 339421207, 3500, TO_DATE('2018-01-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (51, 20, 3, 'Garner', 'Benoit', 'g.benoit@yahoo.com', 334423633, 3900, TO_DATE('2019-02-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (52, 20, 4, 'Elle', 'Brevard', 'e.brevard@gmail.com', 331423288, 4000, TO_DATE('2018-07-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (53, 20, 5, 'Hugo', 'Cartier', 'hugo_cartier@gmail.com', 331403214, 6800, TO_DATE('2015-09-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (54, 20, 6, 'Gilles', 'Gardy', 'gillesgardy@yahoo.com', 331426403, 3500, TO_DATE('2020-07-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (55, 21, 1, 'Tobias', 'Gruber', 'tobiasgruber312@gmail.com', 431742856, 3100, TO_DATE('2019-08-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (56, 21, 2, 'David', 'Huber', 'd.huber@gmail.com', 435792116, 3800, TO_DATE('2018-08-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (57, 21, 3, 'Maximilian', 'Bauer', 'm.bauer@yahoo.com', 439142276, 4500, TO_DATE('2017-11-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (58, 21, 4, 'Lukas', 'Wagner', 'l.wagner@yahoo.com', 431557810, 3900, TO_DATE('2020-12-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (59, 21, 5, 'Sophia', 'Pichler', 'sophia1997@gmail.com', 431742852, 2950, TO_DATE('2020-07-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (60, 21, 6, 'Simon', 'Hofer', 'simonhofer@yahoo.com', 430142059, 3000, TO_DATE('2018-02-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (61, 22, 1, 'Emma', 'De Jong', 'emma58@gmail.com', 318460021, 3800, TO_DATE('2020-05-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (62, 22, 2, 'Ruben', 'Janssen', 'ruben_janssen@gmail.com', 314783647, 4100, TO_DATE('2020-04-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (63, 22, 3, 'Anna', 'Wisser', 'anna.visser@gmail.com', 318960361, 3500, TO_DATE('2019-08-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (64, 22, 4, 'Jesse', 'Van Djik', 'jesse812@gmail.com', 311370921, 5000, TO_DATE('2017-11-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (65, 22, 5, 'Lynn', 'Meijer', 'lynn.meijer@yahoo.com', 318968070, 8500, TO_DATE('2015-05-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (66, 22, 6, 'Milan', 'Smit', 'milansmit@gmail.com', 319479521, 4200, TO_DATE('2019-05-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (67, 23, 1, 'Ali', 'Nahas', 'alinahas@yahoo.com', 971639002, 4500, TO_DATE('2020-03-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (68, 23, 2, 'Fakih', 'Nader', 'f.nader@yahoo.com', 971094022, 6000, TO_DATE('2018-08-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (69, 23, 3, 'Kayley', 'Rahar', 'k.rahar@gmail.com', 971633070, 4200, TO_DATE('2019-10-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (70, 23, 4, 'Haik', 'Hassan', 'haikhassan@yahoo.com', 971829053, 5300, TO_DATE('2019-06-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (71, 23, 5, 'Jabir', 'Isa', 'j.isa@gmail.com', 971239522, 8700, TO_DATE('2018-07-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (72, 23, 6, 'Munir', 'Wasem', 'munir_wasem@yahoo.com', 971432057, 4100, TO_DATE('2018-11-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (73, 24, 1, 'Oliver', 'Adams', 'oliver_adams@gmail.com', 442195385, 3100, TO_DATE('2020-04-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (74, 24, 2, 'Harry', 'Allen', 'h.allen@gmail.com', 449125345, 4900, TO_DATE('2018-08-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (75, 24, 3, 'George', 'Baker', 'george_baker@gmail.com', 440148124, 3600, TO_DATE('2019-02-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (76, 24, 4, 'Amelia', 'Cole', 'amelia_cole@yahoo.com', 442005882, 4700, TO_DATE('2020-12-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (77, 24, 5, 'Harper', 'Dawson', 'h.dawson@yahoo.com', 442125332, 7100, TO_DATE('2020-01-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (78, 24, 6, 'Henry', 'Evans', 'h.evans@gmail.com', 442792700, 3800, TO_DATE('2019-07-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (79, 25, 1, 'Noah', 'Foster', 'n.foster@gmail.com', 446190389, 2900, TO_DATE('2020-12-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (80, 25, 2, 'Oscar', 'Grant', 'oscargrant2910@gmail.com', 442865180, 3800, TO_DATE('2019-10-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (81, 25, 3, 'Harper', 'James', 'h.james007@yahoo.com', 446007492, 3700, TO_DATE('2018-07-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (82, 25, 4, 'Theo', 'Hill', 'theo_hill@gmail.com', 441295282, 4900, TO_DATE('2019-05-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (83, 25, 5, 'Jacob', 'Lee', 'jacoblee@gmail.com', 440135681, 8500, TO_DATE('2017-10-01','YYYY-MM-DD'));";
        $sql .= "INSERT INTO employee VALUES (84, 25, 6, 'Martin', 'Robinsom', 'martin_robinson@gmail.com', 441590350, 5000, TO_DATE('2016-07-01','YYYY-MM-DD'));";
        mysqli_multi_query($db, $sql);
    }
     
    if(isset($_POST['register'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
        if(empty($username)){
            array_push($errors, "The username is required");
        }
        if(empty($email)){
            array_push($errors, "The email is required");
        }
        if(empty($password_1)){
            array_push($errors, "The password is required");
        }
        if(strlen($password_1) <= 7){
            array_push($errors, "The password must be at least 8 characters long");
        }
        $digits = preg_match('/\d/', $password_1);
        if($digits == 0){
            array_push($errors, "The password must contain at least one digit");
        }
        if($password_1 != $password_2){
            array_push($errors, "The passwords do not match");
        }
        if(empty($phone_number)){
            array_push($errors, "The phone number is required");
        }
        if(strlen($phone_number) != 10){
            array_push($errors, "The phone number must have 10 digits");
        }
        if(count($errors) == 0){
            $password = md5($password_1);
            $sql = "INSERT INTO register (username, email, password, phone_number)
                        VALUES ('$username', '$email', '$password', '$phone_number')";
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');

        }
    }

    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        if(empty($username)){
            array_push($errors, "Username is required");
        }
        if(empty($password)){
            array_push($errors, "Password is required");
        }   
        if(count($errors) == 0){
            $password = md5($password);
            $query = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($db, $query);
            if(mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }
            else{
                array_push($errors, "Wrong username/password combination");
            }
        }
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>
