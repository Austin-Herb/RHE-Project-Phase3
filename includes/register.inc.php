<?php
    include 'dbconnect.inc.php';
    
    // Gather First & Last Name, Email, and Password
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $firstName = test_input($_POST['rFirstName']);
        $lastName = test_input($_POST['rLastName']);
        $email = test_input($_POST['rEmail']);
        $password = test_input($_POST['rPassword']);
        
    }

    //validation against XSS (Sanitize Data)
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Hash the Users Password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Enter the Credentials into the DB
    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    if($result->num_rows == 1){
        echo "Email address already exists - please login!"; 
        $stmt->close();
    }else{
        $stmt = $conn->prepare("INSERT INTO users (email, password, firstName, lastName) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $email, $hashedPassword, $firstName, $lastName);
        $stmt->execute();
        $_SESSION['currentUser'] = $firstName;
        $_SESSION['currentUserEmail'] = $email;
        echo "Registration successful!";
        $stmt->close();
    }
    
    $conn->close();

?>