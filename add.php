<?php
include("db.php");

$name = $_REQUEST['name'];
$image = $_REQUEST['image'];
$author = $_REQUEST['author'];
$date = $_REQUEST['date'];
$p_name = $_REQUEST['p-name'];
$address = $_REQUEST['address'];
$tel = $_REQUEST['tel'];
$type = $_REQUEST['type'];

$name = strip_tags($name);
$author = strip_tags($author);
$date = strip_tags($date);
$p_name = strip_tags($p_name);
$address = strip_tags($address);
$tel = strip_tags($tel);
$type = strip_tags($type);

   if(strlen($name)>=1) {
    $query = "INSERT INTO `books_cat` (`name`,`image`,`author`,`p-date`,`p-name`,`address`,`tel`,`type`) VALUES('$name','$image','$author','$date','$p_name','$address','$tel','$type')";
	   
    mysqli_query($connection,$query);
    header ("location: ./");
}

?>
<!DOCTYPE html>
<html lang="en">
	
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="books">
  
    <title>Add a new book</title>
    
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
	 <link href="styles/style.css" rel="stylesheet">
	<!-- JQuery -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	 <!-- Fonts -->
	 <link href="https://fonts.googleapis.com/css?family=Lobster|Oswald&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> 
  <style>
  </style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="title">
			<p class="back ml-4 mt-4 p-1"><a href="index.php"><i class="fas fa-book"></i> &#8592; Вернуться в каталог</a></p>
			<div class="text-center mb-3">	
			   <h1>Добавить книгу</h1>
			</div>
			</div>
			<form class="add-book" action="add.php" metod="post" enctype="multipart/form-data">
			   <div class="form-group">
				<label for="b-name">Название книги: </label>
			   <input id="b-name" type="text" name="name" placeholder="название книги" required pattern="^.{1,}$" class="form-control">
			 
			   <label for="image">Фото обложки: </label>
			   <input id="image" class="form-control-file" type="file" name="image">
				
			   <label for="author">Автор: </label>
			   <input id="author" class="form-control" type="text" name="author" required placeholder="автор">
			   
			   <label for="p-date">Дата издательства: </label>
               <input id="p-date" class="form-control" type="date" name="date" required placeholder="дата издательства">
                
			   <label for="p-name">Название издательства: </label>
			   <input id="p-name" class="form-control" type="text" name="p-name" required placeholder="название издательства">
				
			   <label for="p-address">Адрес издательства: </label>
			   <input id="p-address" class="form-control" type="text" name="address" required placeholder="адрес издательства">
				
			   <label for="p-tel">Телефон издательства: </label>
			   <input id="p-tel" class="form-control" type="tel" name="tel" required placeholder="телефон издательства">
				
			   <label for="type">Рубрика: </label>
			   <input id="type" class="form-control" type="text" name="type" required placeholder="рубрика">
				
               <input class="btn-secondary form-control btn mt-4" id="submit" type="submit" name="submit" value="Добавить">
			</div> 
            </form>
			
		</div>
		
		<div class="row">
		   <footer class="footer text-center mt-3 p-3">	
				<p class="text-center"><small>&copy; Copiright &copy; <script>document.write(new Date().getFullYear());</script> | Made with <i class="fab fa-gratipay"></i></small></p>
		   </footer>
	  </div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
      