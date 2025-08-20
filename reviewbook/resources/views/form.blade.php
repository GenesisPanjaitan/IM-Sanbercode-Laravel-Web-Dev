<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="post">
        @csrf
        <label>First Name:</label><br>
        <input type="text" name="first_name"><br><br>
        <label>Last Name:</label><br>
        <input type="text" name="last_name"><br><br>
        <label>Gender:</label><br>
        <input type="radio" name="gender"> Male<br>
        <input type="radio" name="gender"> Female<br>
        <input type="radio" name="gender"> Other<br><br>
        <label>Nationality:</label>
        <select name="nationality">
            <option value="">Indonesian</option>
            <option value="">Malaysian</option>
            <option value="">Singaporean</option>
            <option value="">Australian</option>
        </select><br><br>
        <label>Language Spoken:</label><br>
        <input type="checkbox" name="language"> Bahasa Indonesia<br>
        <input type="checkbox" name="language"> English<br>
        <input type="checkbox" name="language"> Other<br><br>
        <label>Bio:</label><br>
        <textarea rows="10" cols="30"></textarea><br><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>