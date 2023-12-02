<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sIGNIN</title>
    
    <STYLE>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;700&display=swap');

body{
  margin: 0;
  padding: 0;
  min-height: 100vh;
  align-items: center;
  justify-content: center;
  display: flex;
  font-family: 'Plus Jakarta Sans', sans-serif;
}

.container {
  justify-content: center;
  align-items: center;
  height: 100%;
}

.card {
  width: 350px;
  background-color: rgb(255, 255, 255);
  overflow: hidden;
  border: 2px solid;
  border-radius: 10px;
  transition: transform 1s ease-in-out, opacity 1s ease-in-out;
}

.card:hover {
  transition: transform 1s ease-in-out, opacity 1s ease-in-out;
  transform: scale(1.2);
}

form {
  display: flex;
  flex-direction: column;
  padding: 30px;
  gap: 10px;
}

input {
  padding: 15px;
  border: none;
}

input:focus {
  outline: none;
  border-color: #3498db;
}

h1,
h5,
.button {
  text-align: center;
  text-decoration: none;
  font-weight: 700;
}
.forget {
  float: right;
}

.check {
  margin-top: 1px;
  float: left;
}
p, a {
  font-size: 12px;
  text-decoration: none;
}

.button {
  background-color: rgb(53, 53, 53);
  padding: 10px;
  color: white;
}
.button:hover {
  background-color: rgb(0, 0, 0);
  padding: 10px;
  color: white;
}

@media (max-width: 450px) {
  .card {
      width: 100%;
      max-width: 300px;
  }
}
    </STYLE>
<body>
<div class="container">
  <div class="card">
    <form action="signininf.php" method="POST">
      <h1>Login Page</h1>
      <input type="text" placeholder="Username" name="username">
      <input type="password" placeholder="Password" name="password">    
      <button type="submit">Submit</button>
      <p><input class="check" type="checkbox">Remember me<a         class="forget" href="#">Forgot account?</a></p>
      <h5>create account?<a href="#"> Create</a></h5>

      
    </form>
    </div>
  </div>
</body>
</body>
</html>