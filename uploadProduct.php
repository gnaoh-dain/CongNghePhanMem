<?php
 require 'nav.php'?>
    <div class="upload-container">
     <div class="header">Bài đăng</div>
      <div class="form-upload">
        <form action="upload1.php" method = "POST" enctype ="multipart/form-data">
         <div class="upload-input-wrapper">
        
          <label for="category">Danh mục:</label>
          <select name="category">
            <option value="">--- Vui lòng chọn danh mục ---</option>
            <option value="xe cộ">Xe cộ</option>
            <option value="máy tính">Máy tính</option>
            <option value="mỹ phẩm">Mỹ phẩm</option>
            <option value="điện thoại">Điện thoại</option>
            <option value="máy ảnh">Máy ảnh - Máy quay phim</option>
          </select>
        </div>
        <div class="upload-input-wrapper">
          <label for="address">Địa chỉ:</label>
          <input type="text" name="address" placeholder="Vui lòng nhập địa chỉ" id="" />
        </div>
        <div class="upload-input-wrapper">
          <label for="name">Tên sản phẩm:</label>
          <input type="text" name="name" placeholder="Vui lòng nhập tên sản phẩm" id="" />
        </div>
        <div class="upload-input-wrapper">
          <label for="price">Giá:</label>
          <input
            type="number"
            name="price"
            placeholder="Vui lòng nhập giá của sản phẩm"
            id="priceProduct"
          />
        </div>
        <div class="upload-input-wrapper">
          <label for="describe">Mô tả:</label>
          <textarea
            name="describe"
            id=""
            cols="30"
            rows="10"
            placeholder="Vui lòng nhập mô tả về sản phẩm của bạn"
          ></textarea>
        </div>

        <div class="upload-img">
          <label for="img">Chọn ảnh:</label>
          <input type="file" accept="image/*" name="avatar" id="photo" />
        </div>
        <div class="button-upload">
          <button type = "submit" class="btn-upload">Đăng bài</button>
        </div> 
      </form>
      </div>
    </div>

    <?php require 'footer.php'; ?>

  </body>
</html>
