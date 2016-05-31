<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proba";

// Створюємо з'єднання
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевіряємо з'єднання 
if ($conn->connect_error) { 
die("Помилка з'єднання: " . $conn->connect_error); 
} 

// sql для створення таблиці 
$sql = "CREATE TABLE users ( 
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL, 
surname VARCHAR(30) NOT NULL,
middlename VARCHAR(30) NOT NULL, 
login VARCHAR(30) NOT NULL,
country VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL,
email VARCHAR(50),
phone INT(10) NOT NULL,
password VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
echo "Таблиця успішно створена"; 
} else { 
echo "Помилка створення таблиці: " . $conn->error; 
} 

$conn->close(); 
?>