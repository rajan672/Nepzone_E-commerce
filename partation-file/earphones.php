<?php
include('./database-connect.php');
?>
<!-- partacision-8   Best on Electronics-->
<section id="electronic">
  <div class="container">
    <h4 class="font-rubik font-size-20">Earphones & Headphones</h4>
    <hr>
    <!-- owl carousel -->
    <div class="owl-carousel owl-theme">



      <?php
      $sql = "SELECT * FROM earphones ORDER BY id DESC";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $ep_id = $row['id'];
          echo '
              <div class="item py-2">
                <div class="product font-rale">
                  <a href="./search_filter/earphones-search.php?id=' . $ep_id . '"><img src="' . str_replace('..', '.', $row['ep_image']) . '" alt="product1" class="main-2-img"></a>
                  <div class="text-center">
                    <h6>' . $row['ep_name'] . '</h6>
                    <span class="badge badge-success"> ' . $row['ep_rating'] . ' <i class="fas fa-star"></i></span> <span class="text-secondary">(' . $row['ep_review'] . ')</span>
                    <div class="price py-2">
                      <s> NRP.' . $row['ep_market_price'] . ' </s> <br>
                      <strong> NRP. ' . $row['ep_selling_price'] . '</strong>
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