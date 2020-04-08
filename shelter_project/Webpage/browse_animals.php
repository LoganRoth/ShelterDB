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
      <h1>Browse All Animals</h1>
      <div class="blocks">
      <form action="browse_animals.php" method="post">
        <label for="spca_name">Choose a SPCA:</label>
        <select id="spca_name" name="spca_name">
        <?php
        $pdo = new PDO('mysql:host=localhost;dbname=shelter_database', "root", "");
        $sql = "select name from locations where type = 'SPCA'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        if (!empty($_POST["spca_name"])) {
          echo "<option value = '".$_POST["spca_name"]."'>".$_POST["spca_name"]."</option>";
        }
        while ($val = $stmt->fetch()) {
          if ($val["name"] != $_POST["spca_name"]){
            echo "<option value = '".$val["name"]."'>".$val["name"]."</option>";
          }
        }
        ?>
        </select><br>
        <input type='submit'>
      </form>
      </div>
      <?php
        if (!empty($_POST["spca_name"])) {
          $pdo = new PDO('mysql:host=localhost;dbname=shelter_database', "root", "");
          echo "<table><tr><th>UUID</th><th>Name</th><th>Type</th><th>Arrival Date</th></tr>";
          $sql = "select uuid, location, type, arrival_date from animals where location = ?";
          $stmt = $pdo->prepare($sql);
          $stmt->execute([$_POST["spca_name"]]);
          while ($row = $stmt->fetch()) {
            echo "<tr><td>".$row["uuid"]."</td><td>".$row["location"]."</td><td>".$row["type"]."</td><td>".$row["arrival_date"]."</td></tr>";
          }
        }
        ?>

      <br>
      <br>
      <form action="shelter.html" method="get">
        <button class="contact1-form-btn">
            <span>
              Home
            </span>
          </button>
      </form>
    </div>
  </div>
</body>
</html>
