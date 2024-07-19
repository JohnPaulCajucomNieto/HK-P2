<html>
    <head>
        <title>SUCCESFULL REGISTERING</title>
    </head>
    <body>

<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mylogins";
              
    $conn = new mysqli($servername, $username, $password, $database);
                
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
        $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $birthday = mysqli_real_escape_string($conn, $_POST["day"]);
        $phone = mysqli_real_escape_string($conn, $_POST["no"]);
        $age = mysqli_real_escape_string($conn, $_POST["age"]);
        $facebook_link = mysqli_real_escape_string($conn, $_POST["fb"]);
        $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
        $status = mysqli_real_escape_string($conn, $_POST["status"]);
        $course = mysqli_real_escape_string($conn, $_POST["course"]);
        $campus = mysqli_real_escape_string($conn, $_POST["campus"]);
        $address = mysqli_real_escape_string($conn, $_POST["add"]);
        $school = mysqli_real_escape_string($conn, $_POST["school"]);
        $mother_fname = mysqli_real_escape_string($conn, $_POST["mother_fname"]);
        $mother_lname = mysqli_real_escape_string($conn, $_POST["mother_lname"]);
        $mother_occupation = mysqli_real_escape_string($conn, $_POST["mother_occupation"]);
        $mother_income = mysqli_real_escape_string($conn, $_POST["mother_income"]);
        $father_fname = mysqli_real_escape_string($conn, $_POST["father_fname"]);
        $father_lname = mysqli_real_escape_string($conn, $_POST["father_lname"]);
        $father_occupation = mysqli_real_escape_string($conn, $_POST["father_occupation"]);
        $father_income = mysqli_real_escape_string($conn, $_POST["father_income"]);
        
    
        $sql = "INSERT INTO login_data (fname, lname, email, birthday, phone, age, facebook_link, gender, civil_status, course, campus, address, last_school_attended, mother_fname, mother_lname, mother_occupation, mother_income, father_fname, father_lname, father_occupation, father_income)
                VALUES ('$fname', '$lname', '$email', '$birthday', '$phone', '$age', '$facebook_link', '$gender', '$status', '$course', '$campus', '$address', '$school', '$mother_fname', '$mother_lname', '$mother_occupation', '$mother_income', '$father_fname', '$father_lname', '$father_occupation', '$father_income')";
        
    
        if ($conn->query($sql) === TRUE) {
            echo "Form submitted successfully";

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

        header('location:apply.php')?>
    </body>
</html>