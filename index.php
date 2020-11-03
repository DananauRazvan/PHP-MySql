<?php
 
?>
<html>
    <head>
        <title>PROIECT DAW</title>
    </head>
    <body>
        <h1>1. Baza de date</h1>
        <p>Baza de date va avea 6 entitati: </p>
        <p>Hotel: hotel_id(PK), room_size, floor</p>
        <p>Person: person_id(PK), hotel_id(FK), last_name, first_name, email, phone_number</p>
        <p>Booking: hotel_id(PK), person_id(PK), start_book_date, end_book_date</p>
        <p>Employee: employee_id(PK), department_id(FK), first_name,  last_name, email, phone_number, salary, hire_date</p>
        <p>Department: department_id(PK), location_id(FK), department_name, manager_name</p>
        <p>Location: location_id(PK), street_address, postal_code, city, country</p>
        <img src = "ERD.jpg" alt = "erd">
        <h1>2. Functionalitati</h1>
        <p>Aplicatia va avea 2 utilizari majore:</p>
        <p>a). Prin HTML forms va prelua informatii despre persoanele care vor sa se cazeze in hotel, va face rezerevarile si va calcula costul in functie de dimensiunea camerei, etaj, tara, oras</p>
        <p>b). Recruteaza angajati, calculeaza salariul in functie de vechime, departament, tara, oras</p>
    </body>
</html>