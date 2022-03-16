<?php 

require('vendor/autoload.php');

use Valitron\Validator;

if(isset($_POST["submit"])){
    $array= $_POST;
    // print_r($array);
    
    $rules = [
        'required' => ['name', 'email', 'phone', 'gender', 'hobby'],
        'lengthmin'=> [['name', 5]],
        'numeric' => 'phone',
        'length' => [['phone', 10]],
        'email' => 'email'];

    $validator = new Validator($array);
    $validator->rules($rules);

    if ($validator->validate()) {
        echo "Validation passed";
    } else {
        $errors = $validator->errors();
        // print_r($errors);

        foreach ($errors['name'] as $err) {
            $nameErr[]=$err;
        }
        foreach ($errors['email'] as $err) {
            $emailErr[]=$err;
        }
        foreach ($errors['phone'] as $err) {
            $phoneErr[]=$err;
        }
        foreach ($errors['gender'] as $err) {
            $genderErr[]=$err;
        }
        foreach ($errors['hobby'] as $err) {
            $hobbyErr[]=$err;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend-Task</title>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        body{
            background-color: #5262c9;
            font-family: Arial, Helvetica, sans-serif;

        }
        .form{
            height:100vh;
            display:flex;
            flex-direction:column;
            justify-content:center;            
            align-items:center;
        }
        p{
            font-size: 28px;
            font-weight: bolder;
            color:white;
            background-color:black;
            margin-bottom:2rem;
            padding: 8px 16px;
            border: 1px solid black;
            border-radius: 10px;
        }
        form{
            width:20rem;
            padding: 2rem;
            background-color: white; 
            display:flex;
            justify-content:center; 
            border: 1px solid black;
            border-radius: 25px;
        }
        table{
            border-spacing: 5px;
        }
        table, td{
            border: 2px solid white;
        }
        input{
            padding: 8px 22px;
            background-color: #efefef;
            border-radius: 4px;
        }
        input[type="radio"], input[type="checkbox"]{
            accent-color: black;
        }
        .error{
            color: red;
        }
    </style>
</head>

<body>
    <div class="form">
        <p>F O R M</p>
        <form method="post">
            <table>
                <tbody>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span class="error"><?php 
                        if(isset($nameErr)){
                            foreach ($nameErr as $err) {
                                echo "*". $err . "\n";
                            }
                        }
                        ?></span></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email" ></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span class="error"><?php 
                        if(isset($emailErr)){
                            foreach ($emailErr as $err) {
                                echo "*". $err . "<br/>";
                            }
                        }
                        ?></span></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><input type="number" name="phone" ></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span class="error"><?php 
                        if(isset($phoneErr)){
                            foreach ($phoneErr as $err) {
                                echo "*". $err . "<br/>";
                            }
                        }
                        ?></span></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <input type="radio" name="gender" <?php if($_POST['gender']=='M'){echo "checked";}?> value="M">Male
                            <input type="radio" name="gender" <?php if($_POST['gender']=='F'){echo "checked";}?> value="F">Female
                            <input type="radio" name="gender" <?php if($_POST['gender']=='O'){echo "checked";}?> value="O">Others
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span class="error"><?php 
                        if(isset($genderErr)){
                            foreach ($genderErr as $err) {
                                echo "*". $err;
                            }
                        }
                        ?></span></td>
                    </tr>
                    <tr>
                        <td>Hobbies:</td>
                        <td>
                            <input type="checkbox" name="hobby" <?php if($_POST['hobby']=='1'){echo "checked";}?> value="1">Reading<br>
                            <input type="checkbox" name="hobby" <?php if($_POST['hobby']=='2'){echo "checked";}?> value="2">Travelling<br>
                            <input type="checkbox" name="hobby" <?php if($_POST['hobby']=='3'){echo "checked";}?> value="3">Listening to Music<br>
                            <input type="checkbox" name="hobby" <?php if($_POST['hobby']=='4'){echo "checked";}?> value="4">Watching Anime<br>   
                        </td>                 
                    </tr>
                    <tr>
                        <td></td>
                        <td><span class="error"><?php 
                        if(isset($hobbyErr)){
                            foreach ($hobbyErr as $err) {
                                echo "*". $err;
                            }
                        }
                        ?></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>


