<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Display</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-3">
        <h2>Filters</h2>
        <!-- Add filter options here -->
        <form>
          <div class="form-group">
            <label for="category">Category:</label>
            <select class="form-control" id="category">
              <option>All</option>
              <option>Category 1</option>
              <option>Category 2</option>
              <option>Category 3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="location">Location:</label>
            <select class="form-control" id="location">
              <option>All</option>
              <option>Location 1</option>
              <option>Location 2</option>
              <option>Location 3</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Apply Filters</button>
        </form>
      </div>
      <div class="col-md-9">
        <h2>All Projects</h2>
        <!-- Display projects here -->
        <div class="container">
  <div class="row">
    <?php
    $query = "SELECT * FROM project";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="images/<?php echo $row['image']; ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['titre']; ?></h5>
            <p class="card-text"><?php echo $row['description']; ?>.</p>

            <?php if (isset($_SESSION['email']) && isset($_SESSION['ROLE'])) :
              if ($_SESSION['ROLE'] == 'freelincer') : ?>
                <a class="btn btn-primary me-2 sign-style-color" href="offer.php?project_id=<?php echo $row['id_project']; ?>" role="button">Apply now</a>
            <?php endif;
              endif; ?>

          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

