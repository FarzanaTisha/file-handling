<?php

$error = '';

if(isset($_POST['submit'])){

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $reEmail = $_POST['reEmail'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = !empty($_POST['gender']);

    if($firstName == '' || $lastName == '' || $email == '' || $reEmail == '' || $username == '' || $password == '') {
        $error = 'Please submit All the fields';
    } else {

        $genderValue = $_POST['gender'];
        // echo 'You have submitted: ' . $firstName . $lastName . $email . $reEmail . $username . $password . $gender;
        $userData =
        'First name: ' .$firstName .PHP_EOL .
        'Last name: ' . $lastName .PHP_EOL .
        'Email: ' . $email .PHP_EOL .
        'Recovery Mail: ' . $reEmail .PHP_EOL .
        'Username: ' . $username .PHP_EOL .
        'Password: ' . $password .PHP_EOL .
        'Gender: ' . $genderValue;

        $myFile = fopen('data.txt', 'w');
        fwrite($myFile, $userData);
    }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Registration form</title>
  </head>
  <body>
    <form method='post' action='index.php'>
      <fieldset>
        <legend></legend>
        <h1>Registration Form</h1>
      </fieldset>
      <fieldset>
        <table>
          <h3>Basic Information</h3>
          <tr>
            <td>FirstName :</td>
            <td>
              <input type="text" placeholder="First Name" name="firstName" />
            </td>
          </tr>
          <tr>
            <td>LastName :</td>
            <td>
              <input type="text" placeholder="Last Name" name="lastName" />
            </td>
          </tr>
          <tr>
            <td>Gender :</td>
            <td>
                <input type="radio" name="gender"  value='male' />Male
                <input type="radio" name="gender" value='female'/>Female</td>
          </tr>
          <tr>
            <td>Email :</td>
            <td>
              <input type="email" placeholder="Enter valid email address" name="email" />
            </td>
          </tr>
          <tr>
            <td>
              <h3>User Information</h3>
            </td>
          </tr>
          <tr>
            <td>Username :</td>
            <td>
              <input type="text" placeholder="User Name" name="username" />
            </td>
          </tr>
          <tr>
            <td>Password :</td>
            <td>
              <input type="Password" name="password" />
            </td>
          </tr>
          <tr>
            <td>Recovery email address :</td>
            <td>
              <input type="email" placeholder="Recovery email address" name="reEmail" />
            </td>
          </tr>
          <tr>
            <td>
              <h2>
                <input type="submit" name='submit' value="Submit" />
              </h2>
            </td>
          </tr>
        </table>
        <?php echo $error; ?>
      </fieldset>
    </form>
  </body>
</html>
