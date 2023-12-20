        <!-- Sale & Revenue Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-line fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Doanh Thu Hôm Nay</p>
                            <h6 class="mb-0">24.000.000 VNĐ</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-bar fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Doanh Thu Tháng Này</p>
                            <h6 class="mb-0">126.000.000 VNĐ</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-area fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Doanh Thu Năm Nay</p>
                            <h6 class="mb-0">350.000.000 VNĐ</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-pie fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Tổng Doanh Thu</p>
                            <h6 class="mb-0">522.000.000 VNĐ</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sale & Revenue End -->


        <!-- Sales Chart Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Thông kê doanh thu tháng này</h6>
                            <a href="" class="text-success"><i class="fa-solid fa-file-excel" style="font-size: 18px;"></i><i class="fa fa-arrow-down small ms-1" style="font-size: 10px;"></i></a>
                        </div>
                        <canvas id="worldwide-sales"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Thống kê đơn hàng thành công / bị hủy</h6>
                            <a href="" class="text-success"><i class="fa-solid fa-file-excel" style="font-size: 18px;"></i><i class="fa fa-arrow-down small ms-1" style="font-size: 10px;"></i></a>
                        </div>
                        <canvas id="salse-revenue"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sales Chart End -->


        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Đơn hàng hôm nay</h6>
                    <a href="/danh-sach-don-hang">Xem tất cả đơn hàng</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">Mã đơn hàng</th>
                                <th scope="col">Khách hàng</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Thanh toán</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#DH2445</td>
                                <td>Lữ Phát Huy</td>
                                <td>7.000.000 VNĐ</td>
                                <td>Chuyển khoản</td>
                                <td>Đang chuẩn bị</td>
                                <td><a class="btn btn-sm btn-outline-primary" href="">Chi tiết</a></td>
                            </tr>
                            <tr>
                                <td>#DH7385</td>
                                <td>Trần Văn A</td>
                                <td>3.000.000 VNĐ</td>
                                <td>Tiền mặt</td>
                                <td>Chờ xác nhận</td>
                                <td><a class="btn btn-sm btn-outline-primary" href="">Chi tiết</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->
        <!-- Widgets Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-md-6 col-xl-12">
                    <div class="h-100 bg-secondary rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h6 class="mb-0">Bình luận hôm nay</h6>
                            <a href="/danh-sach-binh-luan">Xem tất cả bình luận</a>
                        </div>
                        <div class="d-flex align-items-center border-bottom py-3">
                            <img class="rounded-circle flex-shrink-0" src="./app/views/admin/public/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-0">Nguyễn Văn B</h6>
                                    <small>35 phút trước</small>
                                </div>
                                <span>Mèo này còn không ạ?</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Widgets End -->