<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Css-->
    <link rel="stylesheet" href="cart.css">
     <!-- boxicons -->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Cart</title>
</head>
<body>
    <!--Cart-->
<main id="main">
        <section class="section cart__area">
            <div class="container">
                <div class="responsive__cart-area">
                    <form class="cart__form">
                        <div class="cart__table table-responsive">
                            <table width="100%" class="table">
                                <thead>
                                    <tr>
                                        <th>PRODUCT</th>
                                        <th>NAME</th>
                                        <th>UNIT PRICE</th>
                                        <th>QUANTITY</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product__thumbnail">
                                            <a href="#">
                                                <img src="./images/Smartphone/samsung-galaxy-note20-ultra-.jpg" alt="">
                                            </a>
                                        </td>
                                        <td class="product__name">
                                            <a href="#">Samsung Galaxy Note 20 Ultra 5G</a>
                                            <br><br>
                                        </td>
                                        <td class="product__price">
                                            <div class="price">
                                                <span class="new__price">$871</span>
                                            </div>
                                        </td>
                                        <td class="product__quantity">
                                            <div class="input-counter">
                                                <div>
                                                    <span class="minus-btn">
                                                        <svg>
                                                            <use xlink:href="./images/sprite.svg#icon-minus"></use>
                                                        </svg>
                                                    </span>
                                                    <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                    <span class="plus-btn">
                                                        <svg>
                                                            <use xlink:href="./images/sprite.svg#icon-plus"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product__subtotal">
                                            <div class="price">
                                                <span class="new__price">$871</span>
                                            </div>
                                            <a href="#" class="remove__cart-item">
                                                <svg>
                                                    <use xlink:href="./images/sprite.svg#icon-trash"></use>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>                                  
                                    <tr>
                                        <td class="product__thumbnail">
                                            <a href="#">
                                            <img src="./images/Smartphone/samsung-galaxy-s22-ultra-5g.jpg" alt="">
                                            </a>
                                        </td>
                                        <td class="product__name">
                                            <a href="#">Samsung Galaxy S22 Ultra</a>
                                            <br><br>
                                        </td>
                                        <td class="product__price">
                                            <div class="price">
                                                <span class="new__price">$1350</span>
                                            </div>
                                        </td>
                                        <td class="product__quantity">
                                            <div class="input-counter">
                                                <div>
                                                    <span class="minus-btn">
                                                        <svg>
                                                            <use xlink:href="./images/sprite.svg#icon-minus"></use>
                                                        </svg>
                                                    </span>
                                                    <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                    <span class="plus-btn">
                                                        <svg>
                                                            <use xlink:href="./images/sprite.svg#icon-plus"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product__subtotal">
                                            <div class="price">
                                                <span class="new__price">$1350</span>
                                            </div>
                                            <a href="#" class="remove__cart-item">
                                                <svg>
                                                    <use xlink:href="./images/sprite.svg#icon-trash"></use>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>                                                            
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-btns">
                            <div class="continue__shopping">
                                <a href="welcome.php">Continue Shopping</a>
                            </div>
                            <div class="check__shipping">
                                <input type="checkbox">
                                <span>Shipping(+7$)</span>
                            </div>
                        </div>

                        <div class="cart__totals">
                            <h3>Cart Totals</h3>
                            <ul>
                                <li>
                                    Shipping
                                    <span>$7</span>
                                </li>
                                <li>
                                    Total
                                    <span class="new__price">$6458,05</span>
                                </li>
                            </ul>
                            <a href="">PROCEED TO CHECKOUT</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Facility Section -->
        <section class="facility__section section" id="facility">
            <div class="container">
                <div class="facility__contianer">
                    <div class="facility__box">
                        <div class="facility-img__container">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-airplane"></use>
                            </svg>
                        </div>
                        <p>FREE SHIPPING WORLD WIDE</p>
                    </div>

                    <div class="facility__box">
                        <div class="facility-img__container">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-credit-card-alt"></use>
                            </svg>
                        </div>
                        <p>100% MONEY BACK GUARANTEE</p>
                    </div>

                    <div class="facility__box">
                        <div class="facility-img__container">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-credit-card"></use>
                            </svg>
                        </div>
                        <p>MANY PAYMENT GATWAYS</p>
                    </div>

                    <div class="facility__box">
                        <div class="facility-img__container">
                            <svg>
                                <use xlink:href="./images/sprite.svg#icon-headphones"></use>
                            </svg>
                        </div>
                        <p>24/7 ONLINE SUPPORT</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

     <!--Footer-->

     <footer class="footer-distributed">
        <div class="footer-left">
          <h3>Imagine</h3> 
          <p class="footer-links">
            <a href="#" class="link-1">Home</a>                          
            <a href="#">About</a>                    
            <a href="#">Contact</a>
          </p> 
          <p class="footer-company-name">Imagine © 2022</p>
        </div> 
        <div class="footer-center">
          <div>
            <i class='bx bx-map'></i>
            <p><span>1st Street, An Don Industrial Park, An Hai Bac Ward</span>Son Tra District, Da Nang, Vietnam</p>
          </div>
          <div>
            <i class='bx bxs-phone'></i>
            <p>0914048099</p>
          </div>
          <div>
            <i class='bx bxs-envelope'></i>
            <p><a href="https://greenwich.edu.vn/en/english/">https://greenwich.edu.vn/en/english/</a></p>
          </div>
        </div> 
        <div class="footer-right"> 
          <p class="footer-company-about">
            <span>About the company</span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
          </p>
          <div class="footer-icons">
            <a href="https://www.facebook.com/minhhuy.huynh.5076"><i class='bx bxl-facebook-circle'></i></a>
            <a href="https://www.instagram.com/call_me_irisssss/"><i class='bx bxl-instagram-alt' ></i></a>
            <a href="https://github.com/1Ir-is"><i class='bx bxl-github'></i></a>
          </div>
        </div>
      </footer>

</body>
</html>