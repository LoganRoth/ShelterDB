<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
   <div class="contact1">
    <div class="container-contact1">
      <h1>Donor Information</h1>
      <div class="blocks">
      <form action="donor_info.php" method="post">
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
        <button class="contact1-form-btn">
          <span>
            Home James!
          </span>
        </button>
      </form>
    </div>
  </div>
</body>
</html>
