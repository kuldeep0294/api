<!DOCTYPE html>
<html lang="en">
<head>
  <title> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <h2></h2>
        <form action="data.php" method="POST">
          <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="pwd">Email:</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Phone:</label>
            <input type="text" class="form-control" name="phone">
          </div>
          <div class="form-group">
            <label for="pwd">subject:</label>
            <input type="text" class="form-control" name="subject">
          </div>
          <div class="form-group">
            <label for="pwd">message:</label>
            <input type="text" class="form-control" name="message">
          </div>
          <input type="hidden" name="type" value="insert">
           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form> 
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</body>
</html>
