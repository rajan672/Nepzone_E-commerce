<?php
include('./database-connect.php');
?>
<!-- partacision-6   Men's Footwear-->
<section id="shoes">
  <div class="container">
    <h4 class="font-rubik font-size-20">Women's Footwear</h4>
    <hr>
    <!-- owl carousel -->
    <div class="owl-carousel owl-theme">

    <?php
      $sql = "SELECT * FROM women_shoes ORDER BY id DESC";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $wmens_id = $row['id'];
          echo '
              <div class="item py-2">
                <div class="product font-rale">
                  <a href="./search_filter/womens-shoes-search.php?id=' . $wmens_id . '"><img src="' . str_replace('..', '.', $row['wmens_image']) . '" alt="product1" class="main-2-img"></a>
                  <div class="text-center">
                    <h6>' . $row['wmens_name'] . '</h6>
                    <span class="badge badge-success"> ' . $row['wmens_rating'] . ' <i class="fas fa-star"></i></span> <span class="text-secondary">(' . $row['wmens_review'] . ')</span>
                    <div class="price py-2">
                      <s> NRP.' . $row['wmens_market_price'] . ' </s> <br>
                      <strong> NRP. ' . $row['wmens_selling_price'] . '</strong>
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