<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form  name="form" method="post" action="index.php">
        <label for="first_name" >First Name:
 <input type="text" name="first_name" placeholder="Alex"></label>
        <label>s2<input type="text" name="last_name" placeholder="Njuguna"></label><br>
        <label for="password">password</label>
        <input type="password" name="password" required><br>
        <label for="phonenumber">phonenumber</label>
        <input type="number" name="phonenumber" aria-multiselectable="true" required><br>
        <label for="email">email
        <input type="email" name="email" placeholder="@email.com"required></label><br>
        <label for="radio">       <input type="radio" name="radio">
        <label for="radio">male</label>
        <input type="radio" name="radio">
        <label for="radio">female</label>
       <br>
        <label for="checkbox" aria-multiselectable="false">married</label>
        <input type="checkbox" name="married">
        <label for="checkbox"aria-multiselectable="false">single</label>
        <input type="checkbox" name="single"><br>
<input type="file" name="file" id="file">
       <label><input type="submit" name="submit" value="submit" ></label>
    </form>
    <script src="index.js"></script>
    <script  src="new_tab_page.js"></script>
    <link rel="stylesheet" href="shared_vars.css">
</body>
</html>