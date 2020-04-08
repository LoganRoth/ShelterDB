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
      <h1>Select Driver</h1>
      <div class="blocks">
      <form action="driver_info.php" method="post">
        <label for="rescue_org">Choose a Rescue Org:</label>
        <select id="rescue_org" name="rescue_org">
        <?php
        $pdo = new PDO('mysql:host=localhost;dbname=shelter_database', "root", "");
        $sql = "select name from locations where type = 'RESCUE_ORG'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        if (!empty($_POST["rescue_org"])) {
          echo "<option value = '".$_POST["rescue_org"]."'>".$_POST["rescue_org"]."</option>";
        }
        while ($val = $stmt->fetch()) {
          if ($val["name"] != $_POST["rescue_org"]){
            echo "<option value = '".$val["name"]."'>".$val["name"]."</option>";
          }
        }
        ?>
        </select><br>
        <input type='submit'>
      </form>
      </div>
      <?php
        if (!empty($_POST["rescue_org"])) {
          $pdo = new PDO('mysql:host=localhost;dbname=shelter_database', "root", "");
          echo "<table><tr><th style='padding:0 15px 0 15px;'>Name</th><th style='padding:0 15px 0 15px;'>Phone</th><th style='padding:0 15px 0 15px;'>Address</th><th style='padding:0 15px 0 15px;'>Licence Number</th><th style='padding:0 15px 0 15px;'>Licence Plate</th></tr>";
          $sql = "select people.name, phone, address, licence_num, licence_plate from drivers left outer join people on people.name = drivers.name WHERE workplace = ?";
          $stmt = $pdo->prepare($sql);
          $stmt->execute([$_POST["rescue_org"]]);
          while ($row = $stmt->fetch()) {
            echo "<tr><td style='padding:0 15px 0 15px;'>".$row["name"]."</td><td style='padding:0 15px 0 15px;'>".$row["phone"]."</td><td style='padding:0 15px 0 15px;'>".$row["address"]."</td><td style='padding:0 15px 0 15px;'>".$row["licence_num"]."</td><td style='padding:0 15px 0 15px;'>".$row["licence_plate"]."</td></tr>";
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