<!DOCTYPE html>
<html>
<head>
<title>Student Registration & Course List</title>
<style>
           body{
               font-family: Arial, sans-serif;
               background-color: #eef7ff;
               padding: 20px;
           }
</style>
</head>
<body>
<h2> Student Registration</h2>
<form onsubmit="return handleSubmit()">
<label>Full Name:</label>
<input type="text" id="fullname">
<label>Email:</label>
<input type="text" id="email">
<label>Password:</label>
<input type="password" id="password">
<label>Confirm Password:</label>
<input type="password" id="confirm">
<button type="submit">Submit</button>
</form>
</body>

</html>