<?php

include('header.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submit Offer</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Submit Offer</h2>
            <form method="post" action="process_offer.php"> <!-- Change 'process_offer.php' to your processing page -->
              <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" name="amount" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="deadline">Deadline:</label>
                <input type="date" name="deadline" class="form-control" required>
              </div>
              <input type="hidden" name="id_project" value="123"> <!-- Replace '123' with the actual project ID -->
              <input type="hidden" name="Id_freelance" value="456"> <!-- Replace '456' with the freelancer's ID -->
              <button type="submit" class="btn btn-primary">Submit Offer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
