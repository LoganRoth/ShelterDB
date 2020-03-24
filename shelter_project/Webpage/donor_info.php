<!DOCTYPE html>
<html>
<head>
<link href="shelter.css" type="text/css" rel="stylesheet" >
</head>
<body>
  <h1>Donor Information</h1>
  <div class="blocks">
  <form action="donor_info.php" method="post"
    <label for="donor_name">Select a donor:</label>
    <select id="donor_name" name="donor_name">
    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=thicccgirl', "root", "");
    $sql = "select distinct donor from donations";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    if (!empty($_POST["donor_name"])) {
      echo "<option value = '".$_POST["donor_name"]."'>".$_POST["donor_name"]."</option>";
    }
    while ($val = $stmt->fetch()) {
      if ($val["donor"] != $_POST["donor_name"]){
        echo "<option value = '".$val["donor"]."'>".$val["donor"]."</option>";
      }
    }
    ?>
    </select><br>
    <input type='submit'>
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
