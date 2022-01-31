<?php
include('./database-connect.php');
?>
<!-- partacision-9    fashion & Jeans-->
<section id="fashion">
  <div class="container">
    <h4 class="font-rubik font-size-20">Women's Clothes</h4>
    <hr>
    <!-- owl carousel -->
    <div class="owl-carousel owl-theme">

      <?php
      $sql = "SELECT * FROM wmen_clothes ORDER BY id DESC";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $wmen_id = $row['id'];
          echo '
              <div class="item py-2">
                <div class="product font-rale">
                  <a href="./search_filter/womens-clothes-search.php?id=' . $wmen_id . '"><img src="' . str_replace('..', '.', $row['wmen_image']) . '" alt="product1" class="main-2-img"></a>
                  <div class="text-center">
                    <h6>' . $row['wmen_name'] . '</h6>
                    <span class="badge badge-success"> ' . $row['wmen_rating'] . ' <i class="fas fa-star"></i></span> <span class="text-secondary">(' . $row['wmen_review'] . ')</span>
                    <div class="price py-2">
                      <s> NRP.' . $row['wmen_market_price'] . ' </s> <br>
                      <strong> NRP. ' . $row['wmen_selling_price'] . '</strong>
                    </div>
                  </div>
                </div>
              </div>
            ';
        }
      }
      ?>

    </div>
    <!-- !owl carousel -->
  </div>
</section>