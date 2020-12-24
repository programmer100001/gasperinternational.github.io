<?php include('clientserver.php') ?>
<!DOCTYPE html>
<html>
<style>
body{
  margin: 0 auto;
  background-image: url("uploads/Building-Bedsitters-in-Kenya.jpg");
  background-repeat: no-repeat;
  background-size: 100% 750px;
}
p{
  color: #00FF00;
}
a{
  color: #00FF00;
}
.container{
  width: 500px;
  height: 450px;
  text-align: center;
  margin: 0 auto;
  background-color: rgba(44, 62, 80,0.7);
  margin-top: 160px;
}

.container img{
  width: 150px;
  height: 150px;
  margin-top: -60px;
}

input[type="text"],input[type="password"]{
  margin-top: 30px;
  height: 45px;
  width: 300px;
  font-size: 18px;
  margin-bottom: 20px;
  background-color: #fff;
  padding-left: 40px;
}

.form-input::before{
  content: "\f007";
  font-family: "FontAwesome";
  padding-left: 07px;
  padding-top: 40px;
  position: absolute;
  font-size: 35px;
  color: #2980b9; 
}

.form-input:nth-child(2)::before{
  content: "\f023";
}

.btn-login{
  padding: 15px 25px;
  border: none;
  background-color: white;
  color: #fff;
}
</style>
<head>
  <title> Client Login</title>
  <link rel="stylesheet" a href="css\style">
  <link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
  <div class="container">
    <img src="uploads/rentaback.jpg" alt="Avatar">
  
    <form method="post" action="clientlogin.php">
                <?php include('clienterrors.php'); ?>
      <div class="form-input">
        <input type="text" name="username" placeholder="Enter usename| Email"/>  
      </div>
      <div class="form-input">
        <input type="password" name="password" placeholder="password"/>
      </div>
        <button type="submit" class="btn"  name="login_user">Login</button>

        <br> <br>
        

    </form>

<form action="clientindex.php">
         <button type="submit">Register</button>
         <br> <br>
      </form> 

        </form>

<form action="login.html">
         <button type="submit">Landrod</button>
      </form>
  </div>
</body>
</html>