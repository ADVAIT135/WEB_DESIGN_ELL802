<!DOCTYPE html>
<html>
  <head>
    <title>Elex Currency Chest Dashboard</title>
    <style>
      table {
        border-collapse: collapse;
        width: 50%;
        margin: 0 auto;
      }
      th, td {
        text-align: center;
        padding: 8px;
        border: 1px solid black;
      }
      th {
        background-color: #ddd;
      }
    </style>
  </head>
  <body>
    <h1>Elex Currency Chest Dashboard</h1>
    <table>
      <caption>Transaction Summary</caption>
      <tr>
        <th>Date</th>
        <th>Denomination</th>
        <th>Number Of Notes</th>
        <th>Total Value</th>
        <th>Transaction Type</th>
      </tr>
      <?php
      session_start();

        if (!isset($_SESSION["username"])) {
          header("Location: admin_login.php");
          exit();
        }
      ?>

      <?php

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

        // Query the currency_notes table to get the transaction summary
        $sql_2 = "SELECT date,denomination, SUM(number_of_notes) AS number_of_notes, SUM(total_value) AS total_value, transaction_type FROM currency_details GROUP BY date,denomination, transaction_type";
        $result_2 = $conn->query($sql_2);
        if ($result_2->num_rows > 0) {
          while($row = $result_2->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['date']."</td>";            
            echo "<td>" . $row['denomination'] . "</td>";
            echo "<td>" . $row['number_of_notes'] . "</td>";
            echo "<td>" . $row['total_value'] . "</td>";
            echo "<td>" . $row['transaction_type'] . "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='3'>No transactions found.</td></tr>";
        }

        $conn->close();
      ?>
    </table>
  </body>
</html>
