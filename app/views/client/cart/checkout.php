 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg center-bg" data-setbg="https://www.mcb.rs/blog/wp-content/uploads/2019/06/19822-curious-cat-1920x1080-animal-wallpaper.jpg">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 text-center">
                 <div class="breadcrumb__text">
                     <h2>Thanh toán</h2>
                     <div class="breadcrumb__option">
                         <a href="<?= _WEB_ROOT ?>/trang-chu">Trang chủ</a>
                         <span>Thanh toán</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section class="checkout spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <h6><span class="icon_tag_alt"></span> Bạn có mã giảm giá? <a href="<?= _WEB_ROOT ?>/gio-hang">Nhấn vào đây</a> để nhập mã
                 </h6>
             </div>
         </div>
         <div class="checkout__form">
             <h4>Chi tiết thanh toán</h4>
             <form action="#">
                 <div class="row">
                     <div class="col-lg-8 col-md-6">
                         <div class="checkout__input">
                             <p>Họ tên<span>*</span></p>
                             <input type="text" value="">
                         </div>
                         <div class="checkout__input">
                             <p>Số điện thoại<span>*</span></p>
                             <input type="text" value="">
                         </div>
                         <div class="checkout__input">
                             <p>Email<span>*</span></p>
                             <input type="text" value="">
                         </div>
                         <div class="checkout__input">
                             <p>Địa chỉ<span>*</span></p>
                             <textarea></textarea>
                         </div>
                         <div class="checkout__input">
                             <p>Ghi chú</p>
                             <textarea></textarea>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="checkout__order">
                             <h4>Đơn hàng của bạn</h4>
                             <div class="checkout__order__products">Sản phẩm <span>Tổng cộng</span></div>
                             <ul>
                                 <li>Mèo tam thể <span>3.500.000 VNĐ</span></li>
                                 <li>Mèo tam thể <span>3.500.000 VNĐ</span></li>
                                 <li>Mèo tam thể <span>3.500.000 VNĐ</span></li>
                             </ul>
                             <div class="checkout__order__subtotal">Tạm tính <span>11.500.000 VNĐ</span></div>
                             <div class="checkout__order__total">Tổng cộng <span>11.500.000 VNĐ</span></div>
                             <div class="checkout__input__checkbox">
                                 <label for="payment">
                                     Thanh toán khi nhận hàng
                                     <input type="checkbox" id="payment" checked>
                                     <span class="checkmark"></span>
                                 </label>
                             </div>
                             <a href="" class="site-btn w-100 text-center">
                                 Thanh toán VNPAY
                             </a>
                             <button type="submit" class="site-btn">Đặt hàng</button>
                         </div>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </section>