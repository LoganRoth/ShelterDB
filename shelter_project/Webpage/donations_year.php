<!DOCTYPE html>
<html>
<head>
<link href="shelter.css" type="text/css" rel="stylesheet" >
</head>
<body>
  <h1>Donation Information by Year</h1>
  <div class="blocks">
  <form action="donor_info.php" method="post"
    <label for="donor_name">Select a Year:</label>
    <input type='text' id="year" name="year">
  </form>
  </div>
  <?php
    if (!empty($_POST["donor_name"])) {
      $pdo = new PDO('mysql:host=localhost;dbname=thicccgirl', "root", "");
      echo "<table><tr><th>Donor</th><th>Recipient</th><th>Total Donation</th></tr>";
      $sql = "select donor, recipient, sum(amount) as total from donations where donor = ? group by recipient";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$_POST["donor_name"]]);
      while ($row = $stmt->fetch()) {
        echo "<tr><td>".$row["donor"]."</td><td>".$row["recipient"]."</td><td>".$row["total"]."</td>></tr>";
      }
    }
  ?>

  <br></br>
  <br></br>
  <form action="shelter.html" method="get">
    <button class="homebutton">
      Home James!!
    </button>
  </form>
</body>
</html>
