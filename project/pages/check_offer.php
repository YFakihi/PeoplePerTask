<?php
include('header.php');
  /*
// Fetch offers from the database
$query = "SELECT * FROM offre";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <!-- HTML form for accepting offers -->
    <form method="post" action="">
        <input type="hidden" name="offer_id" value="<?php echo $row['Id_offer']; ?>">
        <button type="submit" name="accept_offer_<?php echo $row['Id_offer']; ?>">Accept Offer <?php echo $row['Id_offer']; ?></button>
    </form>
    <?php
    
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'accept_offer_') !== false) {
            $offer_id = str_replace('accept_offer_', '', $key);

            // Update the 'is_accepted' field in the database for the specific offer
            $update_query = "UPDATE offre SET is_accepted = 'true' WHERE Id_offer = '$offer_id'";
            $update_result = mysqli_query($conn, $update_query);

            if ($update_result) {
                echo "Offer $offer_id accepted successfully!";
            } else {
                echo "Error accepting offer $offer_id: " . mysqli_error($conn);
            }
        }
    }
}
*/
?>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $amount = $_POST['amount'];
    $deadline = $_POST['deadline'];
    $project_id = $_POST['project_id'];

    // Assuming you have the freelancer's ID in the session
    $freelancer_id = $_SESSION["id"]; // Adjust as per your session structure

    // Insert proposal into the database
    $insert_query = "INSERT INTO proposel (id_project, id) VALUES ('$project_id', '$freelancer_id')";
    $insert_result = mysqli_query($conn, $insert_query);

    if ($insert_result) {
        echo "Proposal submitted successfully!";
    } else {
        echo "Error submitting proposal: " . mysqli_error($conn);
    }
}
?>



