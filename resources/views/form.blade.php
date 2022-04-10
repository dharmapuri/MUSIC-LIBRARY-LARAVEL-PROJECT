<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Welcome!</h1> 
    <form class="" action="form" method="POST">
     @csrf
    Name: <input type="text" name="name"> <br> <br>
    E-mail: <input type="text" name="email" value="dharmapuri.karthik@gmail.com"> <br> <br>
    TextBox: <textarea rows="4" cols="50" name="comment">
Enter text here...</textarea><br> <br>

<input type="radio" name="gender" value="female">Female <br> <br>
<input type="radio" name="gender" value="male">Male <br> <br>
<input type="radio" name="gender" value="other">Other <br> <br>
<input type="submit" name="" value="Submit">
    </body>
</html>