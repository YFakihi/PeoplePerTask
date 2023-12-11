<?php
include('header.php');

if (isset($_GET['project_id'])) {
  $project_id = (int) $_GET['project_id'];
} else {
  die("Missing project ID in URL");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $amount = $_POST['amount'];
  $deadline = $_POST['deadline'];
  $project_id = $_POST['project_id'];
  $freelancer_id = $_SESSION["id"]; 

  $insert_query = "INSERT INTO proposel (id_project, id, amount, deadline) VALUES ('$project_id', '$freelancer_id', '$amount', '$deadline')";
  $insert_result = mysqli_query($conn, $insert_query);

  if ($insert_result) {
      // echo "Proposal submitted successfully!";
  } else {
      echo "Error submitting proposal: " . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>  
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submit Offer</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Submit Offer</h2>
            <form method="POST" action="">
              <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" name="amount" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="deadline">Deadline:</label>
                <input type="date" name="deadline" class="form-control" required>
              </div>
              <input type="hidden" name="project_id" value="<?php echo $project_id; ?>">
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
