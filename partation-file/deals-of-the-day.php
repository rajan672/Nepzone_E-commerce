<?php
include('./database-connect.php');
?>
<!-- partacision-2     Deals of the day-->
<section id="top-sale">
  <!-- <h3 class="float-left pl-3"> </h3> -->
  <h3 class="font-rubik font-size-20 float-left">Deals of the day </h3>
  <div class="float-left count-down">
    <i class="fas fa-clock"></i> &nbsp;
    <!-- Display the countdown timer in an element -->
    <span id="demo" class="text-secondary"></span>
  </div>
  <a href="./search_filter/offer-deals-search.php" class="btn btn-primary btn-md float-right"> View All</a>
  <div class="container py-5">
    <hr>
    <!-- owl carousel -->
    <div class="owl-carousel owl-theme">

    <?php
      $sql = "SELECT * FROM offer_deals ORDER BY id DESC";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $deal_id = $row['id'];
          echo '
              <div class="item py-2">
                <div class="product font-rale">
                  <a href="./search_filter/offer-deals-search.php?id=' . $deal_id . '"><img src="' . str_replace('..', '.', $row['deal_image']) . '" alt="product1" class="main-2-img"></a>
                  <div class="text-center">
                    <h6>' . $row['deal_name'] . '</h6>
                    <span class="badge badge-success"> ' . $row['deal_rating'] . ' <i class="fas fa-star"></i></span> <span class="text-secondary">(' . $row['deal_review'] . ')</span>
                    <div class="price py-2">
                      <s> NRP.' . $row['deal_market_price'] . ' </s> <br>
                      <strong> NRP. ' . $row['deal_selling_price'] . '</strong>
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
<!--End partacision-2     Deals of the day-->