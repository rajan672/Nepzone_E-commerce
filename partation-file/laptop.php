<!-- partacision-10    Laptops-->
<section id="laptop">
  <div class="container">
    <h4 class="font-rubik font-size-20">Laptops</h4>
    <hr>
    <!-- owl carousel -->
    <div class="owl-carousel owl-theme">



      <?php
      $sql = "SELECT * FROM laptops ORDER BY id DESC";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $lap_id = $row['id'];
          echo '
              <div class="itemss py-2">
                <div class="product font-rale">
                  <a href="./search_filter/laptop-search.php?id=' . $lap_id . '"><img src="' . str_replace('..', '.', $row['lap_image']) . '" alt="product1" class="main-2-img"></a>
                  <div class="text-center">
                    <h6>' . $row['lap_name'] . '</h6>
                    <span class="badge badge-success"> ' . $row['lap_rating'] . ' <i class="fas fa-star"></i></span> <span class="text-secondary">(' . $row['lap_review'] . ')</span>
                    <div class="price py-2">
                      <s> NRP.' . $row['lap_market_price'] . ' </s> <br>
                      <strong> NRP. ' . $row['lap_selling_price'] . '</strong>
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