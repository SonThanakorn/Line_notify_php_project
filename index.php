<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Link css bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Line notify project</title>
</head>
<body>
<!--Form get data-->
<form  name="admin" action="re_form_add_db.php" method="POST" id="admin" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-6" align="left">
      <div class="col-sm-6 control-label">ชื่อจริง :</div>
        <input  name="firstname" type="text" autocomplete="off" autofocus required class="form-control" id="firstname" placeholder="Firstname" />
      </div>
    </div>
  </div><p></p>
  <div class="form-group">
    <div class="col-sm-6" align="left">
      <div class="col-sm-6 control-label">นามสกุล :</div>
        <input type="text" name="lastname" id="lastname" placeholder="Lastname">
      </div>
    </div>
  </div><p></p>
  <div class="form-group">
    <div class="col-sm-3"> </div>
      <button type="submit" class="btn btn-sm btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก </button>      
    </div> 
  </div>
</form>
  <!--Script bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
