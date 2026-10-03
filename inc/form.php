<?php
$firstName = '';
$lastName  = '';
$email     = '';

$errors = [
    'firstNameError' => '',
    'lastNameError'  => '',
    'emailError'     => '',
];

if (isset($_POST['submit'])) {

    $firstName = $_POST['firstName'];
    $lastName  = $_POST['lastName'];
    $email     = $_POST['email'] ;

    if (empty($firstName)) {
        $errors['firstNameError'] = 'يرجى إدخال الاسم الأول';
    }

    if (empty($lastName)) {
        $errors['lastNameError'] = 'يرجى إدخال الاسم الأخير';
    }

    if (empty($email)) {
        $errors['emailError'] = 'يرجى إدخال الإيميل';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = 'يرجى إدخال ايميل صحيح';
    }

    if (!array_filter($errors)) {
        $firstName = mysqli_real_escape_string($conn, $firstName);
        $lastName  = mysqli_real_escape_string($conn, $lastName);
        $email     = mysqli_real_escape_string($conn, $email);

        $sql = "INSERT INTO users(firstName, lastName, email) 
                VALUES ('$firstName', '$lastName', '$email')";

        if (mysqli_query($conn, $sql)) {
            header('Location: ' . $_SERVER['PHP_SELF']);
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}
?>