<?php
if (isset($_POST['submit'])) {
    $pdfName = $_FILES['pdf']['name'];
    $pdfTempName = $_FILES['pdf']['tmp_name'];
    $pdfSize = $_FILES['pdf']['size'];
    
    // Set the folder where you want to save the uploaded PDFs
    $uploadFolder = "uploads/";
    
    // Database connection setup
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alvi";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare and execute database insertion
    $stmt = $conn->prepare("INSERT INTO books (name, pdf) VALUES (?, ?)");
    
    if (!$stmt) {
        die("Error in prepare statement: " . $conn->error);
    }
    
    // Read the PDF file content
    $pdfData = file_get_contents($pdfTempName);
    
    $stmt->bind_param("sb", $pdfName, $pdfData);
    
    if (!is_dir($uploadFolder)) {
        mkdir($uploadFolder, 0755, true);
    }
    
    $uploadPath = $uploadFolder . $pdfName;
    
    if (move_uploaded_file($pdfTempName, $uploadPath) && $stmt->execute()) {
        echo "PDF uploaded and stored in the database.";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}
?>
