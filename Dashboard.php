<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="mycss.css">-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
.button {
  background-color: #4CAF50; /* Green */ 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  height:150px;
  width:150px;
  top-margin:50px;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 4px solid #4CAF50;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 4px solid #008CBA;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 4px solid #f44336;
}

.button4 {
  background-color: white;
  color: black;
  border: 4px solid purple;
}

.button5 {
  background-color: white;
  color: black;
  border: 4px solid #555555;
}
.link{
	
	text-decoration:none;
	border-radius:5px;
}
.topnav
{
	position:sticky;
	top:0;
}
.ab{
	text-decoration:bold;
	color:blue;
	font-size:15px;
	/* font-decoration:bold; */
}
.nilesh2{
	
	border-radius:10px;
}
.link:hover{
	color:white;
}
.nilesh2:hover{
	
	background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
}
.nil{
	display:flex;
	justify-content:flex-end;
	//margin-left:50%;
}
.nil123{
	
	position:sticky;
	top:0;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary nil123">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> product Management<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#">User Management<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#">Oreder Management <span class="sr-only">(current)</span></a>
      </li>
	  	
    </ul>
    <form class="form-inline my-2 my-lg-0 nil">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div >
<br><br><br>
<center>
<a href="add_product.php" class="link"><button class="button button1 nilesh2">Add Product</button></a>
<a href="update_product.php" class="link"><button class="button button2 nilesh2">Update Product</button></a>
<a href="delete_product.php" class="link"><button class="button button3 nilesh2">Delete Product</button><br></a>
<a href="add_category.php" class="link"><button class="button button4 nilesh2">Add Category</button></a>
<a href="update_category.php" class="link"><button class="button button5 nilesh2">Update Category</button></a>
<a href='delete_category.php' class='link'><button class="button button1 nilesh2">Delete Category</button></a><br>
<a href='user_management.php' class='link'><button class="button button2 nilesh2">User Management</button></a>
<a href='view_product.php' class='link'><button class="button button3 nilesh2">View Product</button></a>
<button class="button button4 nilesh2">Billing Details</button>
</center>
</div>
<div>
<br><br><br><br><br>
<!--<center>
<button class="button button1"><a href="add_product.php" class="link">Add Product</a></button>
<button class="button button2"><a href="update_product.php" class="link">Update Product</a></button>
<button class="button button3"><a href="delete_product.php" class="link">Delete Product</a></button><br>
<button class="button button4"><a href="add_category.php" class="link">Add Category</a></button>
<button class="button button5">Update Category</button>
<button class="button button1">Delete Category</button><br>
<button class="button button2">User Management</button>
<button class="button button3">View Product</button>
<button class="button button4">Billing Details</button>
</center>-->
</div>
</body>
</html>





