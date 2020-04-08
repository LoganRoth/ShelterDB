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
      <h1>Donation Information by Year</h1>
      <div class="blocks">
      <form action="donations_year.php" method="post">
        <label for="select_year">Input a Year:</label>
        <input type='text' id="select_year" name="select_year" value=2018><br>
        <select id="organization" name = "organization">
        <?php
        $pdo = new PDO('mysql:host=localhost;dbname=shelter_database', "root", "");
        $sql = "select name from locations";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        if (!empty($_POST["organization"])) {
          echo "<option value = '".$_POST["organization"]."'>".$_POST["organization"]."</option>";
        }
        while ($val = $stmt->fetch()) {
          if ($val["name"] != $_POST["organization"]){
            echo "<option value = '".$val["name"]."'>".$val["name"]."</option>";
          }
        }
        ?>
        </select><br><br>
        <input type="submit">
      </form>
      </div>
      <?php
        if (!empty($_POST["select_year"])) {
          $pdo = new PDO('mysql:host=localhost;dbname=shelter_database', "root", "");
          echo "<table><tr><th style='padding:0 15px 0 15px;'>Recipient</th><th style='padding:0 15px 0 15px;'>Total Donations</th><th style='padding:0 15px 0 15px;'>Year</th></tr>";
          $sql = "select recipient, sum(amount) as amt, year(date_transaction) as year from `donations` where year(date_transaction) = ? and recipient = ? group by recipient";
          $stmt = $pdo->prepare($sql);
          $stmt->execute([$_POST["select_year"], $_POST["organization"]]);
          while ($row = $stmt->fetch()) {
            echo "<tr><td style='padding:0 15px 0 15px;'>".$row["recipient"]."</td><td style='padding:0 15px 0 15px;''>".$row["amt"]."</td><td style='padding:0 15px 0 15px;'td>".$row["year"]."</td></tr>";
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
