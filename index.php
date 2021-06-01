<?php
require 'nav.php'; ?>
    <!-- Nav -->

    <div class="category-container">
      <span class="categories">Danh mục</span>
      <div>
        <div class="detail-category">
          <div class="img-category">
            <img src="./images/31234a27876fb89cd522d7e3db1ba5ca_tn.png" alt="" />
          </div>
          <div class="title">Điện thoại</div>
        </div>
        <div class="detail-category">
          <div class="img-category">
            <img src="./images/ec14dd4fc238e676e43be2a911414d4d_tn.png" alt="" />
          </div>
          <div class="title">Máy ảnh - Máy quay phim</div>
        </div>
        <div class="detail-category">
          <div class="img-category">
            <img src="./images/c3f3edfaa9f6dafc4825b77d8449999d_tn.png" alt="" />
          </div>
          <div class="title">Máy tính</div>
        </div>
        <div class="detail-category">
          <div class="img-category">
            <img src="./images/978b9e4cb61c611aaaf58664fae133c5_tn.png" alt="" />
          </div>
          <div class="title">Màn hình</div>
        </div>
        <div class="detail-category">
          <div class="img-category">
            <img src="./images/bba68b7dc2d664748dd075d500049d72_tn.png" alt="" />
          </div>
          <div class="title">Mỹ phẩm</div>
        </div>
      </div>
    </div>
    <?php
    $sqli = "SELECT TOP 10 * FROM sanpham ORDER BY idsp DESC";
    $resulti = mysqli_query($conn,$sqli);
    //$rows = mysqli_fetch_assoc($resulti);
     ?>
    <div class="product-container">
      <div class="header-product">Tin đăng dành cho bạn</div>
      <div class="products">
        <div class="product">
          <div class="img-product">
            <img src="./images/7e2abbc999e1df70f962151002dc1073-2721290836556722572.jpg" alt="" />
          </div>
          <div class="title">Macbook Air M1 2021</div>
          <div class="price">23.700.000</div>
        </div>
        <div class="product">
          <div class="img-product">
            <img src="./images/7e2abbc999e1df70f962151002dc1073-2721290836556722572.jpg" alt="" />
          </div>
          <div class="title">Macbook Air M1 2021</div>
          <div class="price">23.700.000</div>
        </div>
        <div class="product">
          <div class="img-product">
            <img src="./images/7e2abbc999e1df70f962151002dc1073-2721290836556722572.jpg" alt="" />
          </div>
          <div class="title">Macbook Air M1 2021</div>
          <div class="price">23.700.000</div>
        </div>
        <div class="product">
          <div class="img-product">
            <img src="./images/7e2abbc999e1df70f962151002dc1073-2721290836556722572.jpg" alt="" />
          </div>
          <div class="title">Macbook Air M1 2021</div>
          <div class="price">23.700.000</div>
        </div>
        <div class="product">
          <div class="img-product">
            <img src="./images/7e2abbc999e1df70f962151002dc1073-2721290836556722572.jpg" alt="" />
          </div>
          <div class="title">Macbook Air M1 2021</div>
          <div class="price">23.700.000</div>
        </div>
        <div class="product">
          <div class="img-product">
            <img src="./images/7e2abbc999e1df70f962151002dc1073-2721290836556722572.jpg" alt="" />
          </div>
          <div class="title">Macbook Air M1 2021</div>
          <div class="price">23.700.000</div>
        </div>
        <div class="product">
          <div class="img-product">
            <img src="./images/7e2abbc999e1df70f962151002dc1073-2721290836556722572.jpg" alt="" />
          </div>
          <div class="title">Macbook Air M1 2021</div>
          <div class="price">23.700.000</div>
        </div>
        <div class="product">
          <div class="img-product">
            <img src="./images/7e2abbc999e1df70f962151002dc1073-2721290836556722572.jpg" alt="" />
          </div>
          <div class="title">Macbook Air M1 2021</div>
          <div class="price">23.700.000</div>
        </div>
        <div class="product">
          <div class="img-product">
            <img src="./images/7e2abbc999e1df70f962151002dc1073-2721290836556722572.jpg" alt="" />
          </div>
          <div class="title">Macbook Air M1 2021</div>
          <div class="price">23.700.000</div>
        </div>
        <div class="product">
          <div class="img-product">
            <img src="./images/7e2abbc999e1df70f962151002dc1073-2721290836556722572.jpg" alt="" />
          </div>
          <div class="title">Macbook Air M1 2021</div>
          <div class="price">23.700.000</div>
        </div>
      </div>
    </div>
  </body>
</html>
