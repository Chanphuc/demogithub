<?php session_start();?>
<?php
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
	 $_SESSION['url'] = "https://";   
  else  
    $_SESSION['url'] = "http://";   
  // Append the host(domain name, ip) to the URL.   
  $_SESSION['url'].= $_SERVER['HTTP_HOST'];   

  // Append the requested resource location to the URL   
  $_SESSION['url'].= $_SERVER['REQUEST_URI'];     
?>

<div class="header">
        <div class="menu">
          <div class="up">
            <ul>
              <li class="logo">
                <a href="">
                  <img src="images/logo-fuck.jpg">
                </a>
              </li>
              <li>
                <a href="./index.php">
                  <img src="images/icon1.PNG">
                  Trang chủ
                </a>
              </li>
              <li>
                <a href="./lienhe.php">
                  <img src="images/icon4.PNG">
                  Liên Hệ
                </a>
              </li>
              <li>
              <a href="giohang.php">
                <i class="fa-solid fa-cart-shopping" style="cursor: pointer; color: #000; padding-right: 10px"></i>
                Giỏ Hàng
              </a>
              </li>
            </ul>
            <div class="cart-login">
              <div class="login-card">
                <?php
                  if(isset($_SESSION['username'])){
                    echo '<i class="fa-solid fa-user" style="padding-right: 10px"></i>';
                    echo $_SESSION['username'];
                    echo '<a href="?dangxuat=1">
                          <p class="login-text" style="color: #000;">Đăng Xuất</p>
                        </a>';
                    if(isset($_GET["dangxuat"])){
                      session_destroy();
                      echo '<script> window.location="http://localhost/webbanhang/index.php" </script>';
                    }
                  }
                  else{
                    echo '<i class="fa-solid fa-user" style="color: #000;"></i>
                          <a href="./login.php">
                            <p class="login-text" style="color: #000;">Đăng Nhập</p>
                          </a>';
                  }
                ?>
              </div>
            </div>
          </div>
          <div class="down">
            <div class="search">
              <input type="" class="header__search" name="" placeholder="Tìm kiếm">
              <button>
                <img src="images/search.png">
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- <script src="./js/search.js"></script> -->
<!-- update -->