<?php
    include 'dbconnect.inc.php';
    
    // Gather Username and Password
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = test_input($_POST['lEmail']);
        $password = test_input($_POST['lPassword']);
    }

    //validation against XSS (Sanitize Data)
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Select the record from the DB
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    if($result->num_rows == 1){
        $row = $result->fetch_row();
        $hashedPassword = $row[3];
        if(password_verify($password, $hashedPassword)){
            $_SESSION['currentUser'] = $row[4];
            $_SESSION['currentUserEmail'] = $email;
            echo "Login successful!";
            $stmt->close();
        }else{
            // Invalid Credentials
            echo "Incorrect username and password - try again!"; 
            $stmt->close();  
        }
    }else{
        //Unregistered User & Other Errors
        echo "Login error - try again!"; 
        $stmt->close();  
    }
    
    

    $conn->close();

?>