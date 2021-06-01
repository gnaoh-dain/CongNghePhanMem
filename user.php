<?php require 'nav.php' ?>
    <div class="user-information-container">
      <div class="header">Thông tin cá nhân</div>
      <form action="" class="info-form">
        <div class="avatar">
          <div class="input-img">
            <label for="inputImg">
              <img
                id="avatar"
                src="../CongNghePhanMem/images/20653430.jpg"
                alt="Thay đổi ảnh đại diện"
              />
            </label>
            <input
              id="inputImg"
              name="avartaChange"
              type="file"
              accept="image/*"
              style="display: none; visibility: hidden"
              onchange="getImg(this.value)"
            />
          </div>
          <div class="user-name">Tô Việt Hoàng</div>
        </div>
        <div class="info">
          <div class="input-wrapper-info">
            <label for="name">Họ và tên</label>
            <input type="text" name="name" placeholder="" />
          </div>
          <div class="input-wrapper-info">
            <label for="phone">Số điện thoại</label>
            <input type="text" name="phone" placeholder="" />
          </div>
          <div class="input-wrapper-info">
            <label for="address">Địa chỉ</label>
            <input type="text" name="address" placeholder="" />
          </div>
          <div class="input-wrapper-info">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="" />
          </div>
          <div class="input-wrapper-info">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="" />
          </div>
          <button type="submit" class="btn-info">Lưu thay đổi</button>
        </div>
      </form>
    </div>

    <script>
      function getImg(evt) {
        var tgt = evt.target || window.event.srcElement,
          files = tgt.files;

        if (FileReader && files && files.length) {
          var fr = new FileReader();
          fr.onload = function () {
            document.getElementById("avatar").src = fr.result;
          };
          fr.readAsDataURL(files[0]);
        }
      }
    </script>
  </body>
</html>
