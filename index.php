 <?php

require_once realpath('includes/autoload.inc.php');
include 'templates/header.php'; ?>

<!-- ==== main container section starts ==== -->

<div class="container">

<!-- ===== form section starts ===== -->

<form action="post.process.php" method="post">

<!-- ====== navbar section starts ====== -->

<div class="navbar">
    <h1>Product List</h1>
    <div class="btn-section">
        <a href="productAdd.php" class="btn btn-add">ADD</a>
        <button type="submit" name="product_delete" id="delete-product-btn" class="btn btn-delete">MASS DELETE</button>
    </div>
</div>

<!-- ====== navbar section ends ====== -->


<!-- ====== product list section starts ====== -->

<div class="product-list">
    <div class="row">

<!-- === php code for class object === -->

<?php

// initializing class object

$post = new DataPost();
$row = $post->showPost();

if ($row) {
    foreach ($row as $rows) {
        ?>
        <div class="main-item">
       <input type="checkbox" name="selector[]" class = "delete-checkbox" value="<?php echo $rows['id']; ?>">
       <p><?php echo $rows['sku']; ?></p>
       <p><?php echo $rows['name']; ?></p>
       <p><?php echo $rows['price']; ?>.00 $</p>
       <?php

 // fetching data of different product types

    if ($rows['size'] > 0) {
        echo '<p>Size: '.$rows['size'].' MB </p>';
    } elseif ($rows['weight'] > 0) {
        echo '<p>Weight: '.$rows['weight'].' KG </p>';
    } elseif ($rows['height'] > 0 && $rows['width'] > 0 && $rows['length'] > 0) {
        echo '<p>Dimensions: '.$rows['height'].' x '.$rows['width'].' x '.$rows['length'].' </p>';
    } else {
        return false;
    }
        ?>
        </div>
 
  <?php

    }
} else {
    echo "<p style = 'color:red; font-size:40px; font-weight:700;'>Empty Post</p>";
} ?>
    </div>
</div>
 
<!-- == footer banner section starts == -->

<?php include 'templates/footer-banner.php'; ?>

<!-- == footer banner section ends == -->

<!-- ====== product list section ends ====== -->

</form>

<!-- ===== form section starts ===== -->

</div>


<!-- ==== main container section ends ==== -->

<?php include 'templates/footer.php'; ?>
 
 