<!DOCTYPE html>
<html>
<head>
<link href="shelter.css" type="text/css" rel="stylesheet" >
</head>
<body>
  <h1>Browse All animals</h1>
  <div class="blocks">
  <form action="browse_animals.php" method="post"
    <label for="spca_name">Choose a SPCA:</label>
    <select id="spca_name" name="spca_name">
    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=thicccgirl', "root", "");
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
      $pdo = new PDO('mysql:host=localhost;dbname=thicccgirl', "root", "");
      echo "<table><tr><th>UUID</th><th>Name</th><th>Type</th><th>Arrival Date</th></tr>";
      $sql = "select uuid, location, type, arrival_date from animals where location = ?";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$_POST["spca_name"]]);
      while ($row = $stmt->fetch()) {
        echo "<tr><td>".$row["uuid"]."</td><td>".$row["location"]."</td><td>".$row["type"]."</td><td>".$row["arrival_date"]."</td></tr>";
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
