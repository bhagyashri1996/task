<!DOCTYPE html>
<html>
<head>
    <title>ToDo List Application </title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">GRAMIKSHA INTERNSHIP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="insert.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php">ToDos</a>
            </li>
          </ul>
        </div>
      </nav>
    <table>
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Tasks</th>
                <th>DeadLine</th>
                <th style="width: 60px;">Action</th>
            </tr>
        </thead>
        <tbody>       
<?php 
include'index.php';
$query="SELECT * FROM tasks";
$task=mysqli_query($cn,$query);
   while ($row = mysqli_fetch_assoc($task)) { ?>
		<tr>
    <td><?php echo $row['id']; ?></td>
			<td><?php echo $row['task']; ?></td>
			<td><?php echo $row['deadLine']; ?></td>
      
      <td class="delete"> 
					
          
      <button type="button"><a href="delete.php?id=<?php echo $row['id'] ?>">x</a> 
      </button>
				</td>
		</tr>
	<?php } ?>
        </tbody>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>