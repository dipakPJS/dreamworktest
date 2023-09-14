<?php

include 'templates/header.php';

?>

<!-- ======= Main container section starts ======= -->

<div class="container">


  <!-- ======== form section starts ========= -->


  <form action="post.process.php" method="post" id="product_form">



    <!-- navbar section starts -->

    <nav class="navbar">
      <h1>Product Add</h1>

      <div class="btn-section">



        <button type="submit" id="save" name="save_product" class="btn btn-save">Save</button>

        <a href="index.php" class="btn btn-cancel">Cancel</a>

      </div>
    </nav>

    <!-- navbar section ends -->

    <!-- ==== product add main form section starts ==== -->
    <div class="form-section">

      <div class="main-form">

        <!-- ==== SKU section starts ===== -->

        <div class=" form-div sku">
          <div class="form-div1">
            <label for="sku">
              <h3>SKU:</h3>
            </label>
            <span id="error-message"></span>
          </div>
          <div class="form-div2">
            <input type="text" name="sku" id="sku" placeholder="please enter sku id" required>
          </div>
        </div>

        <!-- ==== SKU section ends ===== -->

        <!-- ==== name section starts ===== -->

        <div class=" form-div name">
          <div class="form-div1">
            <label for="name">
              <h3>Name:</h3>
            </label>
          </div>
          <div class="form-div2">
            <input type="text" name="name" id="name" placeholder="please enter product name" required>
          </div>
        </div>

        <!-- ==== name section ends ==== -->

        <!-- ==== price section starts ====== -->

        <div class=" form-div price">
          <div class="form-div1">
            <label for="price">
              <h3>Price ($):</h3>
            </label>
          </div>
          <div class="form-div2">
            <input type="number" pattern="[0-9]*" name="price" id="price" placeholder="please enter price of a product" required>
          </div>
        </div>

        <!-- ==== price section ends ====-->

        <!-- ==== product Type section starts ====== -->

        <div class=" form-div select">

          <div class="form-div1">
            <label for="productType">
              <h3>Type Selector:</h3>
            </label>
          </div>

          <div class="form-div2">

            <select id="productType" required>
              <option value="">Type Select</option>
              <option id="DVD" value="DVD">DVD</option>
              <option id="Furniture" value="Book">Book</option>
              <option id="Book" value="Furniture">furniture</option>
            </select>

          </div>
        </div>

        <!-- ==== product Type section ends ====-->


        <!-- ==== size section starts ====== -->

        <div class=" size">

          <!-- form inner starts -->

          <div class=" form-div form-inner">

            <div class="form-div1">
              <label for="size">
                <h3>Size (MB):</h3>
              </label>
            </div>


            <div class="form-div2">
              <input type="number" pattern="[0-9]*" name="size" id="size" placeholder="please enter dvd size in MB">
            </div>

          </div>
          <!-- form inner ends -->
          <div class="message">
            <h3>Please enter the size in MB.</h3>
          </div>

        </div>

        <!-- ==== size section ends ====-->

        <!-- ==== weight section starts ====== -->

        <div class=" weight">

          <!-- form inner starts -->

          <div class=" form-div form-inner">

            <div class="form-div1">
              <label for="weight">
                <h3>Weight (KG):</h3>
              </label>
            </div>


            <div class="form-div2">
              <input type="number" pattern="[0-9]*" name="weight" id="weight" placeholder="please enter weight in KG">
            </div>

          </div>
          <!-- form inner ends -->
          <div class="message">
            <h3>Please enter the weight of the product in KG.</h3>
          </div>

        </div>

        <!-- ==== weight section ends ====-->



        <!-- ==== height section starts ====== -->

        <div class=" height">

          <!-- form inner starts -->

          <div class=" form-div form-inner">

            <div class="form-div1">
              <label for="height">
                <h3>Height:</h3>
              </label>
            </div>


            <div class="form-div2">
              <input type="number" pattern="[0-9]*" name="height" id="height" placeholder="please enter height of the furniture">
            </div>

          </div>
          <!-- form inner ends -->

        </div>

        <!-- ==== height section ends ====-->



        <!-- ==== width section starts ====== -->

        <div class=" width">

          <!-- form inner starts -->

          <div class=" form-div form-inner">

            <div class="form-div1">
              <label for="width">
                <h3>Width:</h3>
              </label>
            </div>


            <div class="form-div2">
              <input type="number" pattern="[0-9]*" name="width" id="width" placeholder="please enter width of the furniture">
            </div>

          </div>
          <!-- form inner ends -->


        </div>

        <!-- ==== width section ends ====-->

        <!-- ==== length section starts ====== -->

        <div class=" length">

          <!-- form inner starts -->

          <div class=" form-div form-inner">

            <div class="form-div1">
              <label for="length">
                <h3>Length:</h3>
              </label>
            </div>


            <div class="form-div2">
              <input type="number" pattern="[0-9]*" name="length" id="length" placeholder="please enter length of the furniture">
            </div>

          </div>
          <!-- form inner ends -->
          <div class="message">
            <h3>Please enter height x width x length of the product.</h3>
          </div>

        </div>

        <!-- ==== length section ends ====-->



      </div>
    </div>


    <!-- ==== product add main form section ends ==== -->


  </form>



  <!-- ======== form section ends ========= -->

<?php include 'templates/footer-banner.php'; ?>


</div>

<!-- ======= Main container section ends ======= -->


<?php

include_once 'templates/footer.php';

?>