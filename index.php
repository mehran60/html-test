<?php
include "header.php";
?>
  <p>
    <a href="form.php" class="btn btn-primary btn-block">Add New</a>
  </p>
  <div class="list-group">
    <?php
    $stmt = $dbh->prepare("SELECT * FROM items");
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
    <a href="form.php?type=edit&id=<?php echo $row['id_item'] ?>" class="list-group-item"><?php echo $row['title_item'] ?></a>
    <?php
    }
    ?>
  </div>
<?php
include "footer.php";
?>