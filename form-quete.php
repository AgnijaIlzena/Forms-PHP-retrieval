
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="thanks.php" method="post">
<br>
<label for="name" >NAME:</label>
<input type="text" id="name" name="user-name" >
<br>

<label for="lastname" >LAST NAME:</label>
<input type="text" id="lastname" name="user-lastname" >
<br>
<label for="email" >EMAIL:</label>
<input type="email" id="email" name="user-email">
<br>
<label for="phonenb" >PHONE NUMBER:</label>
<input type="text" id="phonenb" name="user-phonenb">
<br>

<label for="password" >PASSWORD</label>
<input type="password" id="password" name="Password">
<br>

<label for="theme">Choose a theme:</label>
<select id="theme" name="user-theme">
    <option value="comment">comment</option>
    <option value="request">request</option>
    <option value="other">other</option>
</select>
<br>

<label for="message" >MESSAGE:</label>
<input id="message" name="user-message">


<input type="submit" value="Send Your Data">
    <br>
    <br>
 </form>


</body>
</html>