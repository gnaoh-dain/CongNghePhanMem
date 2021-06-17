<?php require 'nav.php'; ?>
<div class="post-container">
  <div class="header">Quản lý tin</div>
  <div class="posts">
    
      <div class="quanLyTin" id="quanLyTin">
        <div class="quanLy_item active" id="inProgress" onclick="change1()">
          <p>Đang xét duyệt</p>
        </div>
        <div class="quanLy_item" id="cancel" onclick="change2()">
          <p>Bị từ chối</p>
        </div>
        <div class="quanLy_item" id="done" onclick="change3()">
          <p>Đã xét duyệt</p>
        </div>
      </div>
      <div id="listInProgress">
      <?php $sql = "SELECT * from user where email='" . $_SESSION['email'] . "'";
            $result = mysqli_query($conn, $sql);
            $row = $result->fetch_assoc();
            $sqli = "SELECT * from sanpham where iduser = '" . $row['iduser'] . "' AND level = 0 order by idsp DESC";
            $resulti = mysqli_query($conn, $sqli);
            while ($rowi = mysqli_fetch_assoc($resulti)) {
        ?>
        <div class="post">
          <div class="img-post">
            <?php echo '<img src="data:avatar;base64,' . base64_encode($rowi['photo']) . '"alt="">'; ?>
          </div>
          <div class="info-post">
            <div class="title-post"><?php echo $rowi['tensp']; ?></div>
            <div class="update-btn"><a href="editPost.php?id=<?php echo $rowi['idsp'] ?>&&function=update"><button>Chỉnh sửa</button></a></div>
            <div class="delete-btn"><a href="editPost.php?id=<?php echo $rowi['idsp'] ?>&&function=delete"><button>Xóa</button></a></div>
          </div>
        </div>
      <?php } ?>
      </div>
      <div id="listCancel">
      <?php 
      $a = 0;
      $b = 0;
      $sqlii = "SELECT * from sanpham where iduser = '" . $row['iduser'] . "' AND level = 1 order by idsp DESC";
            $resultii = mysqli_query($conn, $sqlii);
            while ($row1 = mysqli_fetch_assoc($resultii)) {
        ?>
        <div class="post">
          <div class="img-post">
            <?php echo '<img src="data:avatar;base64,' . base64_encode($row1['photo']) . '"alt="">'; ?>
          </div>
          <div class="info-post">
            <div class="title-post"><?php echo $row1['tensp']; ?></div>
            <div class="update-btn"><a href="editPost.php?id=<?php echo $row1['idsp'] ?>&&function=update"><button>Chỉnh sửa</button></a></div>
            <div class="delete-btn"><a href="editPost.php?id=<?php echo $row1['idsp'] ?>&&function=post"><button>Duyệt Lại</button></a></div>
            <div class="delete-btn"><a href="editPost.php?id=<?php echo $row1['idsp'] ?>&&function=delete"><button>Xóa</button></a></div>
            <div class="w3-container">
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Lý Do</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <?php echo $row1['lydo'] ; ?>
      </div>
    </div>
  </div>
</div>
    </div>
      </div>
          </div>
        </div>
      <?php } ?>
      </div>
      <div id="listDone">
      <?php 
      $sql2 = "SELECT * from sanpham where iduser = '" . $row['iduser'] . "' AND level = 2 order by idsp DESC";
            $result2 = mysqli_query($conn, $sql2);
            while ($row2 = mysqli_fetch_assoc($result2)) {
        ?>
        <div class="post">
          <div class="img-post">
            <?php echo '<img src="data:avatar;base64,' . base64_encode($row2['photo']) . '"alt="">'; ?>
          </div>
          <div class="info-post">
            <div class="title-post"><?php echo $row2['tensp']; ?></div>
            <div class="delete-btn"><a href="editPost.php?id=<?php echo $row2['idsp'] ?>&&function=delete"><button>Xóa</button></a></div>
          </div>
        </div>
      <?php } ?>
      </div>

  </div>
</div>
<script>
  var quanLyTin = document.getElementById("quanLyTin");
  console.log(quanLyTin)
  var quanLy_items = quanLyTin.getElementsByClassName("quanLy_item");
  console.log(quanLy_items)
  for (var i = 0; i < quanLy_items.length; i++) {
    quanLy_items[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }

  function change1() {
    document.getElementById("listInProgress").style.display = "block"
    document.getElementById("listCancel").style.display = "none"
    document.getElementById("listDone").style.display = "none"
  }

  function change2() {
    document.getElementById("listInProgress").style.display = "none"
    document.getElementById("listCancel").style.display = "block"
    document.getElementById("listDone").style.display = "none"
  }

  function change3() {
    document.getElementById("listInProgress").style.display = "none"
    document.getElementById("listCancel").style.display = "none"
    document.getElementById("listDone").style.display = "block"
  }
</script>
</body>

</html>
