<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
	
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="books">
  
    <title>Books catalogue</title>
    
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
	 <link href="styles/style.css" rel="stylesheet">
	<!-- JQuery -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	 <!-- Fonts -->
	 <link href="https://fonts.googleapis.com/css?family=Lobster|Oswald&display=swap" rel="stylesheet">
	 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> 
  <script>
	</script>  
</head>
<body>
	<div class="container">   <!--CONTAINER-->
		<div class="row justify-content-center">
			<div class="title text-center mb-3">	
			   <h1><a href="index.php">Каталог книг</a></h1>
			</div>
				<?php 
			    $query = "SELECT * FROM `books_cat` ORDER BY `id`";
				
			    $result = mysqli_query($connection, $query);
				
			    while($row = mysqli_fetch_array($result)){
	            ?>
			<div id="<?php echo $row['id'];?>" class="books col-3 text-center py-1 m-2">  <!--BOOK BOX-->
					<h3 class="book-name"><a href="#"><?php echo $row['name'];?></a></h3>
					 <div class="img-size">
					     <img src="./image/<?php echo $row['image'];?>" alt="<?php echo $row['name'];?>" class="book-img img">
				     </div>
					 <p class="authors">Автор: <?php echo $row['author'];?></p>
					 <p class="publish-date">Дата издательства: <?php echo $row['p-date'];?></p>
					 <p class="publish-name">Название издательства: <?php echo $row['p-name'];?></p>
					 <p>Адрес издательства: <?php echo $row['address'];?></p>
					 <p>Телефон: <?php echo $row['tel'];?> </p>
					 <p>Рубрика: <?php echo $row['type'];?></p>
					
					 <form action="#" class="my-3" method="get">
					   <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary m-1">Удалить</a>
					   <a class="btn btn-secondary m-1" href="add.php">Добавить</a>
					 </form>
			</div>                                         <!--BOOK BOX-->
		    <?php } ?> 
		</div>
		<div class="row">
		   <footer class="footer text-center mt-3 p-3">	
				<p class="text-center"><small>&copy; Copiright &copy; <script>document.write(new Date().getFullYear());</script> | Made with <i class="fab fa-gratipay"></i></small></p>
		   </footer>
	    </div>
	</div> <!--CONTAINER-->
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
