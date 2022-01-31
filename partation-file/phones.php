<?php
include('./database-connect.php');
?>
<!-- partacision-5    PHONES-->
<section id="new-phones">
  <div class="container">
    <h4 class="font-rubik font-size-20">Mobiles</h4>
    <hr>
    <!-- owl carousel -->
    <div class="owl-carousel owl-theme">



      <?php
      $sql = "SELECT * FROM mobiles ORDER BY id DESC";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $mob_id = $row['id'];
          echo '
              <div class="item py-2">
                <div class="product font-rale">
                  <a href="./search_filter/mobile-search.php?id=' . $mob_id . '"><img src="' . str_replace('..', '.', $row['mob_image']) . '" alt="product1" class="main-2-img"></a>
                  <div class="text-center">
                    <h6>' . $row['mob_name'] . '</h6>
                    <span class="badge badge-success"> ' . $row['mob_rating'] . ' <i class="fas fa-star"></i></span> <span class="text-secondary">(' . $row['mob_review'] . ')</span>
                    <div class="price py-2">
                      <s> NRP.' . $row['mob_market_price'] . ' </s> <br>
                      <strong> NRP. ' . $row['mob_selling_price'] . '</strong>
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
<!-- !Phones -->