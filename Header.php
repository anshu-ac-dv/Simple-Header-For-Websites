<!doctype html>
<html lang="en">
  <head>
    <style>
      * {box-sizing: border-box;}
body {
margin: 0;
font-family: Arial;
}
.header {
overflow: hidden;
background-color: black;
padding: 10px 10px;
}
.header a {
float: left;
color: white;
text-align: center;
padding: 12px;
text-decoration: none;
font-size: 15px;
line-height: 25px;
border-radius: 5px;
}
.headera.logo {
font-size: 25px;
font-weight: bold;
}
.header a:hover {
background-color: red;
color: black;
}
.headera.active {
background-color: green;
color: white;
}
.header-right {
float: right;
}
@media screen and (max-width: 500px) {
.header a {
float: none;
display: block;
text-align: left;
}
.header-right {
float: none;
}
}
    </style>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>



<div class="header">
<div class="container">
<a href="#default" class="logo">Hezard</a>
<div class="header-right">
<a class="active" href="#home">Home</a>
<a href="#contact">Blog</a>
<a href="#contact">Articles</a>
<a href="#about">About Us</a>
<a href="#about">Contact Us</a>
</div>
</div>
</div>
</body>
</html>