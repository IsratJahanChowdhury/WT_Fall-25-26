<!DOCTYPE html>
<html>
<head>
<title>Student Registration & Course List</title>
<style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #eef4ff;
    }
     h2 {
     text-align: center;
     color: rgba(3, 8, 14, 1);
    }
    form {
     background-color: #ffffff;
     padding: 20px;
     border-radius: 10px;
     width: 300px;
     margin: 0 auto;
     box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input, button { 
        width: 100%;
        padding: 8px;
        margin-top: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    button {
      background-color: #003366;
      color: white;
      cursor: pointer;
    }
    #output {
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      color: #003366;
    }
    #error {
      margin-top: 10px;
      color: red;
      text-align: center;
    }
</style>
</head>
 <body>
<h2>Student Registration</h2>
<form onsubmit="return registerStudent()">
<label>Full Name:</label>
<input type="text" id="name" />
<label>Email:</label>
<input type="text" id="email" />
<label>Password:</label>
<input type="password" id="password" />
<label>Confirm Password:</label>
<input type="password" id="confirmpass" />
<button type="submit">Register</button>
</form>
<div id="error"></div>
<div id="output"></div>
<h2>Course Registration</h2>
<form onsubmit="return addCourse()">
<label>Course Name:</label>
<input type="text" id="course" />
<button type="submit">Add Course</button>
</form>
<div id="courselist" style="width:300px; margin:auto; margin-top:10px;"></div>
<script>

function registerStudent() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var pass = document.getElementById("password").value;
  var cpass = document.getElementById("confirmpass").value;
  var error = document.getElementById("error");
  var output = document.getElementById("output");
  error.innerHTML = "";
  output.innerHTML = "";

    if (name === "" || email === "" || pass === "" || cpass === "") {
    error.innerHTML = "Please fill all fields.";
    return false;

  }

  if(email.indexOf("@") === -1) {
    error.innerHTML = "Invalid email format.";
    return false;

  }
 if(pass !== cpass) {
    error.innerHTML = "Passwords do not match.";
    return false;
  }

  output.innerHTML = "<b>Registration Successful!</b><br><br>" + "Name: " + name + "<br>" + "Email: " + email;
  return false;

}

function addCourse() {

  var course = document.getElementById("course").value;
  var list = document.getElementById("courselist");
  if (course === "") return false;
var row = document.createElement("div");
  row.style.background = "#9eb3c9ff";
  row.style.padding = "8px";
  row.style.marginTop = "8px";
  row.style.borderRadius = "5px";
  row.style.display = "flex";
  row.style.justifyContent = "space-between";


  var cname = document.createElement("span");
  cname.innerHTML = course;
  row.appendChild(cname);
   var del = document.createElement("button");
  del.innerHTML = "Delete";
  del.style.width = "60px";
  del.style.background = "#ffcccc";
  del.style.color = "black";
  del.style.marginLeft = "10px";

  del.onclick = function () {
    row.remove();
  };
  row.appendChild(del);
  list.appendChild(row);
  document.getElementById("course").value = "";
  return false;
}
</script>
</body>
</html>