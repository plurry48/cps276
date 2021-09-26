<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Form Project</title>
  </head>
  <body>
      <div class="container">
      <form class="row g-3">
  <div class="col-md-6">
      <label for="FirstName" class="form-label">First Name</label>
      <input type="text" class="form-control" id="FirstName">
  </div>
  <div class="col-md-6">
      <label for="LastName" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="LastName">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" placeholder="City" aria-label="City">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
        <option selected>Select State</option>
        <option value="1">California</option>
        <option value="2">Texas</option>
        <option value="3" selected>Michigan</option>
        <option value="4">New York</option>
        <option value="5">Florida</option>
   </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
  </div>
  <div class="col-12">
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">Female</label>
 </div>
</div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>
</div>
    
  </body>
</html>