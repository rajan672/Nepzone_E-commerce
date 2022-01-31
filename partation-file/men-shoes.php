<?php
include('./database-connect.php');
?>
<!-- partacision-6   Men's Footwear-->
<section id="shoes">
  <div class="container">
    <h4 class="font-rubik font-size-20">Men's Footwear</h4>
    <hr>
    <!-- owl carousel -->
    <div class="owl-carousel owl-theme">

    <?php
      $sql = "SELECT * FROM men_shoes ORDER BY id DESC";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $mens_id = $row['id'];
          echo '
              <div class="item py-2">
                <div class="product font-rale">
                  <a href="./search_filter/mens-shoes-search.php?id=' . $mens_id . '"><img src="' . str_replace('..', '.', $row['mens_image']) . '" alt="product1" class="main-2-img"></a>
                  <div class="text-center">
                    <h6>' . $row['mens_name'] . '</h6>
                    <span class="badge badge-success"> ' . $row['mens_rating'] . ' <i class="fas fa-star"></i></span> <span class="text-secondary">(' . $row['mens_review'] . ')</span>
                    <div class="price py-2">
                      <s> NRP.' . $row['mens_market_price'] . ' </s> <br>
                      <strong> NRP. ' . $row['mens_selling_price'] . '</strong>
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