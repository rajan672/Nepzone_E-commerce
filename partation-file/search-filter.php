<?php
include('./database-connect.php');
?>
<!-- Main section start -->
<div class="container-fluid s-main">
  <div class="row">
    <div class="col-md-3 col-sm-3">
      <aside class="bg-light side">
        <h4>Filters <button class="btn btn-primary btn-sm float-right">Search</button> </h4>
        <button class="btn btn-link btn-sm float-right clear-all">Clear All</button>
        <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>
        <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>
        <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>
        <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>
        <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>

        <div class="brand-item">
          <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
            <h5>CATEGORIES<i class="fa fa-chevron-down float-right"></i></h5>
          </a>
          <div class="collapse show" id="collapseExample1">
            <ul class="navbar-nav flex-column pl-3 mt-3">
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Casual shoes</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Sports Shoes</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Formal Shoes</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Ethnic shoes</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Party Shoes</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Wedding Shoes</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="brand-item">
          <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
            <h5>BRAND<i class="fa fa-chevron-down float-right"></i></h5>
          </a>
          <div class="collapse show" id="collapseExample2">
            <ul class="navbar-nav flex-column pl-3 mt-3">
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Bata</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Sparx</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Nike</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="brand-item">
          <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
            <h5>Sort By<i class="fa fa-chevron-down float-right"></i></h5>
          </a>
          <div class="collapse show" id="collapseExample6">
            <ul class="navbar-nav flex-column pl-3 mt-3">
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Popularity</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Price-Low to High</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Price -High to Low</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Newest First</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Discount</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="brand-item">
          <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
            <h5>Size<i class="fa fa-chevron-down float-right"></i></h5>
          </a>
          <div class="collapse show" id="collapseExample3">
            <ul class="navbar-nav flex-column pl-3 mt-3">
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; 10</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; 9.5</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; 9</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; 8</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="brand-item">
          <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
            <h5>Price<i class="fa fa-chevron-down float-right"></i></h5>
          </a>
          <div class="collapse show" id="collapseExample4">
            <ul class="navbar-nav flex-column pl-3 mt-3">
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Under 5000</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Under 2000</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Under 1000</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Under 500</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="brand-item">
          <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
            <h5>Color<i class="fa fa-chevron-down float-right"></i></h5>
          </a>
          <div class="collapse show" id="collapseExample5">
            <ul class="navbar-nav flex-column pl-3 mt-3">
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Beige</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Black</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Blue</a>
              </li>
              <li class="nav-item">
                <a href=""> <input type="checkbox">&nbsp; Brown</a>
              </li>
            </ul>
          </div>
        </div>

      </aside>
    </div>

    <div class="col-md-9 col-sm-9">
      <section class="bg-light all-product">

        <div class="section-1">

          <div class="section-1-top">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
              </ol>
            </nav>
          </div>

          <div class="section-1-center">
            <a href="#" class="row text-body border laptop-pro">
              <div class="col-md-3 col-sm-3 col-3">
                <i class="fa fa-heart float-right"></i>
                <img class="img-fluid m-1 " src="image/Laptop/33493-6-asus-laptop-transparent-image-thumb.png" alt="">
              </div>
              <div class="col-md-5 col-sm-5 col-5">
                <h5 class="h5">acer Aspire 7 Core i5 10th Gen - (8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 165...</h5> <br>
                <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">180 Ratings </span> <span class="text-secondary">& 24 Reviews</span><br>
                <ul class="pl-3 text-secondary pro-details-li">
                  <li>Intel Core i5 Processor (10th Gen)</li>
                  <li>8 GB DDR4 RAM</li>
                  <li>64 bit Windows 10 Operating System</li>
                  <li>512 GB SSD</li>
                  <li>39.62 cm (15.6 inch) Display</li>
                  <li>Quick Access, Acer Care Center, Acer Product Registration, Acer Collection</li>
                  <li>1 Year International Travelers Warranty</li>
                </ul>
              </div>
              <div class="col-md-4 col-sm-4 col-4 text-center mt-4">
                <h4 class="h4">NRP.59,990</h4>
                <h6 class="text-secondary"><strike>NRP.89,999</strike></h6>
                <span class="text-success"><small> <strong>50% Off</strong> </small></span>
              </div>
            </a>

            <!-- <a href="#" class="row text-body border laptop-pro">
               <div class="col-md-3 col-sm-3 col-3">
                 <i class="fa fa-heart float-right"></i>
                 <img class="img-fluid m-1" src="image/Laptop/33493-6-asus-laptop-transparent-image-thumb.png" alt="">
               </div>
               <div class="col-md-5 col-sm-5 col-5">
                 <h5 class="h5">acer Aspire 7 Core i5 10th Gen - (8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 165...</h5> <br>
                 <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">180 Ratings &nbsp;</span> <span class="text-secondary"> &nbsp; & 24 Reviews</span><br>
                 <ul class="pl-3 text-secondary pro-details-li">
                   <li>Intel Core i5 Processor (10th Gen)</li>
                   <li>8 GB DDR4 RAM</li>
                   <li>64 bit Windows 10 Operating System</li>
                   <li>512 GB SSD</li>
                   <li>39.62 cm (15.6 inch) Display</li>
                   <li>Quick Access, Acer Care Center, Acer Product Registration, Acer Collection</li>
                   <li>1 Year International Travelers Warranty</li>
                 </ul>
               </div>
               <div class="col-md-4 col-sm-4 col-4 text-center mt-4">
                 <h4 class="h4">NRP.59,990</h4>
                 <h6 class="text-secondary"><strike>NRP.89,999</strike></h6>
                 <span class="text-success"><small> <strong>50% Off</strong> </small></span>
               </div>
             </a> -->

            <div class="row">
              <div class="col-md-3 col-sm-4 col-6">

                <a href="" class="product">
                  <div class="product-top">
                    <i class="fa fa-heart float-right"></i>
                    <img class="img-fluid" src="image/t-shirt/1-t-shirt-png-image.png" alt="">
                  </div>

                  <div class="product-bottom">
                    <div class="product-desc-top">
                      <div class="product-brand text-secondary">Puma</div>
                      <div class="product-desc text-dark">T-shirt for mens</div>
                      <div class="product-price">
                        <span><strong>NPR. 500</strong></span> <br>
                        <span class="text-secondary"><strike>NPR.1000</strike></span> <br>
                        <span class="text-success"><small> <strong>50% Off</strong> </small></span>
                      </div>
                    </div>
                    <div class="product-desc-bottom">
                      <div class="product-desc-extra">
                        <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span> <br>
                        <span><strong>Size :</strong></span>
                        <span><strong>XXL,XL,L,M,S</strong></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <!-- For Mobiles -->
              <?php
              /* $sql = "SELECT * FROM mobiles";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    $mob_id = $row['id'];
                    echo '
                        <div class="col-md-3 col-sm-4 col-6">
                          <a href="product-detail.php?id='.$mob_id.'" class="product">
                            <div class="product-top">
                              <i class="fa fa-heart float-right"></i>
                              <img class="img-fluid" src="' . str_replace('..', '.', $row['mob_image']) . '" alt="">
                            </div>

                            <div class="product-bottom">
                              <div class="product-desc-top">
                                <div class="product-brand text-secondary">' . $row['mob_brand'] . '</div>
                                <div class="product-desc text-dark">' . $row['mob_name'] . '</div>
                                <div class="product-price">
                                  <span><strong> NRP. ' . $row['mob_selling_price'] . ' </strong></span> <br>
                                  <span class="text-secondary"><strike> NRP.' . $row['mob_market_price'] . '  </strike></span> <br>
                                  <span class="text-success"><small> <strong> '.$row['mob_discount'].'% Off</strong> </small></span>
                                </div>
                              </div>
                              <div class="product-desc-bottom">
                                <div class="product-desc-extra">
                                  <span class="badge badge-success"> ' . $row['mob_rating'] . ' <i class="fas fa-star"></i></span> <span class="text-secondary"> (' . $row['mob_review'] . ') </span> <br>
                                  <span><strong>Size :</strong></span>
                                  <span><strong>XXL,XL,L,M,S</strong></span>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                        ';
                  }
                } */
              ?>

              <!-- <div class="col-md-3 col-sm-4 col-6">
                 <a href="" class="product">
                   <div class="product-top">
                     <i class="fa fa-heart float-right"></i>
                     <img class="img-fluid" src="image/t-shirt/1-t-shirt-png-image.png" alt="">
                   </div>

                   <div class="product-bottom">
                     <div class="product-desc-top">
                       <div class="product-brand text-secondary">Puma</div>
                       <div class="product-desc text-dark">T-shirt for mens</div>
                       <div class="product-price">
                         <span><strong>NPR. 500</strong></span> <br>
                         <span class="text-secondary"><strike>NPR.1000</strike></span> <br>
                         <span class="text-success"><small> <strong>50% Off</strong> </small></span>
                       </div>
                     </div>
                     <div class="product-desc-bottom">
                       <div class="product-desc-extra">
                         <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span> <br>
                         <span><strong>Size :</strong></span>
                         <span><strong>XXL,XL,L,M,S</strong></span>
                       </div>
                     </div>
                   </div>
                 </a>
               </div>

               <div class="col-md-3 col-sm-4 col-6">
                 <a href="" class="product">
                   <div class="product-top">
                     <i class="fa fa-heart float-right"></i>
                     <img class="img-fluid" src="image/t-shirt/1-t-shirt-png-image.png" alt="">
                   </div>

                   <div class="product-bottom">
                     <div class="product-desc-top">
                       <div class="product-brand text-secondary">Puma</div>
                       <div class="product-desc text-dark">T-shirt for mens</div>
                       <div class="product-price">
                         <span><strong>NPR. 500</strong></span> <br>
                         <span class="text-secondary"><strike>NPR.1000</strike></span> <br>
                         <span class="text-success"><small> <strong>50% Off</strong> </small></span>
                       </div>
                     </div>
                     <div class="product-desc-bottom">
                       <div class="product-desc-extra">
                         <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span> <br>
                         <span><strong>Size :</strong></span>
                         <span><strong>XXL,XL,L,M,S</strong></span>
                       </div>
                     </div>
                   </div>
                 </a>
               </div>

               <div class="col-md-3 col-sm-4 col-6">
                 <a href="" class="product">
                   <div class="product-top">
                     <i class="fa fa-heart float-right"></i>
                     <img class="img-fluid" src="image/t-shirt/1-t-shirt-png-image.png" alt="">
                   </div>

                   <div class="product-bottom">
                     <div class="product-desc-top">
                       <div class="product-brand text-secondary">Puma</div>
                       <div class="product-desc text-dark">T-shirt for mens</div>
                       <div class="product-price">
                         <span><strong>NPR. 500</strong></span> <br>
                         <span class="text-secondary"><strike>NPR.1000</strike></span> <br>
                         <span class="text-success"><small> <strong>50% Off</strong> </small></span>
                       </div>
                     </div>
                     <div class="product-desc-bottom">
                       <div class="product-desc-extra">
                         <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span> <br>
                         <span><strong>Size :</strong></span>
                         <span><strong>XXL,XL,L,M,S</strong></span>
                       </div>
                     </div>
                   </div>
                 </a>
               </div>

               <div class="col-md-3 col-sm-4 col-6">
                 <a href="" class="product">
                   <div class="product-top">
                     <i class="fa fa-heart float-right"></i>
                     <img class="img-fluid" src="image/t-shirt/1-t-shirt-png-image.png" alt="">
                   </div>

                   <div class="product-bottom">
                     <div class="product-desc-top">
                       <div class="product-brand text-secondary">Puma</div>
                       <div class="product-desc text-dark">T-shirt for mens</div>
                       <div class="product-price">
                         <span><strong>NPR. 500</strong></span> <br>
                         <span class="text-secondary"><strike>NPR.1000</strike></span> <br>
                         <span class="text-success"><small> <strong>50% Off</strong> </small></span>
                       </div>
                     </div>
                     <div class="product-desc-bottom">
                       <div class="product-desc-extra">
                         <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span> <br>
                         <span><strong>Size :</strong></span>
                         <span><strong>XXL,XL,L,M,S</strong></span>
                       </div>
                     </div>
                   </div>
                 </a>
               </div> -->

            </div>
          </div>

          <div class="section-1-bottom">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>

        </div>

        <div class="section-2">
          <div class="">
            <strong>Did you find what you need ?</strong>&nbsp; &nbsp; <a href="" class="btn btn-outline-secondary">Yes</a>&nbsp; <a href="" class="btn btn-outline-secondary">No</a>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<!-- Main section start -->