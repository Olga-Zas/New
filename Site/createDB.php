<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 

// Створюємо з'єднання 
$conn = new mysqli($servername, $username, $password);

// Перевіряємо з'єднання 
if ($conn->connect_error) { 
die("Помилка з'єднання: " . $conn->connect_error); 
} 

// Створення Бази Даних 
$sql = "CREATE DATABASE proba";
if ($conn->query($sql) === TRUE) { 
echo "База Даних успішно створена"; 
} else { 
echo "Помилка при створенні Бази Даних: " . $conn->error; 
} 
$conn->close(); 
?>