<?php
  // Get the form data
  $transaction_type = $_POST['transaction_type'];
  $denomination = $_POST['denomination'];
  $number_of_notes = $_POST['number_of_notes'];
  $total_value = $_POST['total_value'];

  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "Advait@0305";
  $dbname = "elex_bank";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
   // Get the current total value of the currency chest
  $sql = "SELECT total_value FROM currency_details WHERE transaction_id = 1";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  if (!$row) {
    die("Error retrieving currency chest total value: " . $conn->error);
  }


  $current_total = $row['total_value'];
  // Determine if the transaction is a deposit or withdrawal
  if ($transaction_type === 'deposit') {
    // Deposit
    $new_total = $current_total + $total_value;
  } else {
    // Withdrawal
    $new_total = $current_total - $total_value;
  }

  // Update the currency chest total value
  $sql = "UPDATE currency_details SET total_value = '$new_total' WHERE transaction_id = 1";
  if ($conn->query($sql) !== TRUE) {
    die("Error updating currency chest total value: " . $conn->error);
  }

  // Insert data into currency_notes table
  $sql = "INSERT INTO currency_details (denomination, number_of_notes, total_value, transaction_type)
  VALUES ('$denomination', '$number_of_notes', '$total_value','$transaction_type')";

  if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
