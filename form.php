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
            font-style:italic;
            font-size: 2rem;
            font-weight: bolder;
            color:white;
            margin-bottom:3rem;
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
            border-spacing: 10px;
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
    </style>
</head>

<body>
    <div class="form">
        <p>Form</p>
        <form method="post">
            <table>
                <tbody>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email" ></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><input type="number" name="phone" ></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <input type="radio" name="gender" value="M">Male
                            <input type="radio" name="gender" value="F">Female
                            <input type="radio" name="gender" value="O">Others
                        </td>
                    </tr>
                    <tr>
                        <td>Hobbies:</td>
                        <td>
                            <input type="checkbox" name="hobby1" value="">Reading<br>
                            <input type="checkbox" name="hobby2">Travelling<br>
                            <input type="checkbox" name="hobby3">Listening to Music<br>
                            <input type="checkbox" name="hobby4">Watching Anime<br>   
                        </td>                 
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>

<!-- <label for="name">Name:</label><input type="text" name="name">
        <label for="email">E-mail:</label><input type="text" name="email">
        <label for="phone">Phone:</label><input type="number" name="phone" >
        <label for="gender">Gender:
        <input type="radio" name="gender" value="M">Male
        <input type="radio" name="gender" value="F">Female
        </label>
        <label for="hobby">Hobbies:
        <input type="checkbox" name="hobby" value="">Reading <br>
        <input type="checkbox" name="hobby">Travelling<br>
        <input type="checkbox" name="hobby">Listening to Music<br>
        <input type="checkbox" name="hobby">Watching Anime  
        </label>
        <input type="submit" value="Submit"> -->