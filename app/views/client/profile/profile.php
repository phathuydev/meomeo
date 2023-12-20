<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div>
        <div class="content social-timeline">
          <div class="">

            <div class="row">
              <div class="col-md-12">
                <div class="social-wallpaper">
                  <div class="">
                    <i class="icofont icofont-ui-edit p-r-10"></i>
                    <i class="icofont icofont-ui-delete"></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-4 col-xs-12">
                <div class="social-timeline-left">
                  <div class="card">
                    <div class="social-profile">
                      <img class="img-fluid width-100" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                      <div class=" m-t-15">
                        <i class="icofont icofont-ui-edit p-r-10"></i>
                        <i class="icofont icofont-ui-delete"></i>
                      </div>
                    </div>
                    <div class="card-block social-follower">
                      <h4>Lữ Phát Huy</h4>
                      <h5>Hạng: Vàng</h5>
                      <div class="row follower-counter">
                        <div class="col-4">
                          <a href="" class="btn btn-primary btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="485">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="" class="btn btn-danger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="2k">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="" class="btn btn-success btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="90">
                            <i class="fa fa-envelope"></i>
                          </a>
                        </div>
                      </div>
                      <div class="">
                        <a href="<?= _WEB_ROOT ?>/dang-xuat" class="btn btn-outline-primary waves-effect btn-block">Đăng xuất khỏi trái đất</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 col-lg-8 col-md-8 col-xs-12 ">
                <div class="card social-tabs">
                  <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#about" role="tab">Thông tin cá nhân</a>
                      <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#photos" role="tab">Lịch sử mua hàng</a>
                      <div class="slide"></div>
                    </li>
                  </ul>
                </div>
                <div class="tab-content">
                  <div class="tab-pane active" id="about">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card">
                          <div class="card-header">
                            <h5 class="card-header-text">Thông tin cá nhân</h5>
                          </div>
                          <div class="card-block">
                            <div id="view-info" class="row">
                              <div class="col-lg-12 col-md-12">
                                <form method="post">
                                  <div class="mb-3">
                                    <label>Họ tên</label>
                                    <input class="form-control w-100" type="text" value="Lữ Phát Huy">
                                  </div>
                                  <div class="mb-3">
                                    <label>Email</label>
                                    <input class="form-control w-100" value="huylppc05334@fpt.edu.vn" disabled>
                                  </div>
                                  <div class="mb-3">
                                    <label>Số điện thoại</label>
                                    <input class="form-control w-100" type="num" value="0945567048">
                                  </div>
                                  <div class="mb-3">
                                    <label>Địa chỉ</label>
                                    <textarea class="form-control w-100">Cần Thơ</textarea>
                                  </div>
                                  <div class="mb-3">
                                    <label>Facebook</label>
                                    <input class="form-control w-100" type="num" value="https://www.facebook.com/anhzachdeptrainhatthegioi/">
                                  </div>
                                  <div class="mb-3">
                                    <label>Instagram</label>
                                    <input class="form-control w-100" type="num" value="">
                                  </div>
                                  <div class="float-right mt-3">
                                    <button type="submit" class="btn btn-outline-success waves-effect">Lưu</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane" id="photos">
                    <div class="card">
                      <table class="table">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Giá tiền</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng cộng</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Hành động</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td class="d-flex"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" style="width: 50px;" alt=""> <label class="ml-2">Mèo cơ trưởng</label></td>
                            <td>3.500.000 VNĐ</td>
                            <td>1</td>
                            <td>3.500.000 VNĐ</td>
                            <td>Chờ xác nhận</td>
                            <td>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Sửa
                              </button>
                              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa địa chỉ giao hàng</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      ...
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                      <button type="button" class="btn btn-primary">Lưu</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter2">
                                Hủy
                              </button>
                              <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Xác nhận hủy đơn hàng</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      ...
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                      <button type="button" class="btn btn-primary">Lưu</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td class="d-flex"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" style="width: 50px;" alt=""> <label class="ml-2">Mèo cơ trưởng</label></td>
                            <td>3.500.000 VNĐ</td>
                            <td>1</td>
                            <td>3.500.000 VNĐ</td>
                            <td>Chờ xác nhận</td>
                            <td>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Sửa
                              </button>
                              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      ...
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter2">
                                Hủy
                              </button>
                              <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      ...
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>