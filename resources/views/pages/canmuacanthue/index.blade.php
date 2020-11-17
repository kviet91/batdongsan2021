@extends('layouts.master')
@section('title', 'Nhà đất cho thuê, cho thuê nhà Việt Nam | Nhà đất cho thuê, cho thuê nhà tại Việt Nam')
@section('style-libraries')
    <link rel="stylesheet" type="text/css" href="./assets/css/box.css">
@endsection
@section('content')
    <div class="site-center">


        <input type="hidden" value="1" id="activeTxtSelect">
        <div id="MiddleSubMenu">
            <div class="home-top-search" style="padding-bottom: 10px !important;">
                <div class="home-top-search-keyword" >
                    <input type="text" placeholder="Nhập từ khóa để tìm theo cụm từ" id="txt1" class="txtKeyword">
                </div>
                <div class="advance-select-box" id="home-top-search">
                    <span class="select-text">
                        <span class="select-text-content" style="width: 100.778px;">Nhà đất bán</span>
                    </span>
                    <input type="hidden" id="cboTypeSearch" value="1">
                </div>
                <div id="home-top-search-otions" class="advance-select-options advance-options" hddvalue="cboTypeSearch"
                    ddlid="home-top-search" style="">
                    <ul class="advance-options" style="min-width: 124px;">
                        <li vl="1" class="advance-options current" style="min-width: 92px;">Nhà đất bán</li>
                        <li vl="2" class="advance-options" style="min-width: 92px;">Nhà đất cho thuê</li>
                        <li vl="3" class="advance-options" style="min-width: 92px;">Tin tức</li>
                        <li vl="5" class="advance-options" style="min-width: 92px;">Dự án</li>
                        <li vl="6" class="advance-options" style="min-width: 92px;">Doanh nghiệp</li>
                        <li vl="7" class="advance-options" style="min-width: 92px;">Môi giới</li>
                    </ul>
                </div>
                <img src="./assets/image/header-bottom-button.jpg" onclick="SearchKeyword();"
                    class="fg-button fg-button-bg-default fg-button-toggleable ui-corner-all" alt="Tìm kiếm"
                    name="btnSearch" id="btnSearch">
            </div>
            <div id="gglbody"></div>
            <div class="clear"></div>
        </div>
        <div class="body-left">
            <div id="Breadcrumb"></div>
            <div id="TopContent"></div>
            <div>
                <div id="TopContentLeft" class="SubTopContent"></div>
                <div id="TopContentRight" class="SubTopContent"></div>
            </div>
            <div style="clear: both;"></div>

            <div id="LeftMainContent">

                <div class="container-default">
                    <div>
                        <div class="product-list product-list-page other-product">
                            <div class="Title">
                                <h1>
                                    Nhà đất Cần mua - Cần thuê tại Việt Nam
                                </h1>
                                <div class="Footer">
                                    Có <span class="greencolor"><strong>1,375</strong></span> bất động sản.
                                </div>
                            </div>
                            <div class="Main">
                                <div class="Header">
                                    <div class="Left"></div>
                                    <div class="Repeat">
                                        <h2>
                                            Nhà đất Cần mua - Cần thuê tại Việt Nam
                                        </h2>
                                    </div>
                                    <div class="Right"></div>
                                </div>
                                <div class="vip1" uid="217282">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-nen-du-an-ben-cat-bd/can-mua-dat-khu-vuc-my-phuoc-1-2-3-4-tpm-binh-duong-vsip-1-2-tdm-mua-nhanh-gia-cao-ad104597"
                                            title="Cần mua đất khu vực Mỹ Phước 1 - 2 - 3 - 4, TPM Bình Dương, Vsip 1 - 2, tdm, mua nhanh, giá cao">Cần
                                            mua đất khu vực Mỹ Phước 1 - 2 - 3 - 4, TPM Bình Dương, Vsip 1 - 2, tdm, mua
                                            nhanh, giá cao</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-nen-du-an-ben-cat-bd/can-mua-dat-khu-vuc-my-phuoc-1-2-3-4-tpm-binh-duong-vsip-1-2-tdm-mua-nhanh-gia-cao-ad104597">
                                                <img class="product-avatar-img"
                                                    src="./assets/image/20201021134221-29c0_wm.jpg"
                                                    alt="Cần mua đất khu vực Mỹ Phước 1 - 2 - 3 - 4, TPM Bình Dương, Vsip 1 - 2, tdm, mua nhanh, giá cao">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Cần mua đất nền để đầu tư tại Bình Dương (Mỹ
                                                Phước 3 - 4, Vsip 1, 2, TPM Bình Dương). Điện thoại/zalo, viber, imess:
                                                0909.214.679 (24/7).Ưu tiên mua gấp (không hạn chế số lượng, hoa hồng 2% cho
                                                người giới thiệu).- Cần mua đất khu L Mỹ Phước 3: Lô L55, lô L57, lô L45, lô
                                                L16, lô L17, lô L18, lô L30, ...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Bến Cát, Tân Uyên, Thủ Dầu
                                                        Một, Thuận An</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Bình Dương</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    22/10/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip1" uid="1395401">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-nen-du-an-khu-do-thi-my-phuoc-3/can-mua-dat-my-phuoc-3-4-ben-cat-binh-duong-gia-cao-nhat-thi-truong-cong-chung-ngay-0899355779-ad99607"
                                            title="Cần mua đất Mỹ Phước 3, 4 Bến Cát, Bình Dương giá cao nhất thị trường công chứng ngay, 0899355779">Cần
                                            mua đất Mỹ Phước 3, 4 Bến Cát, Bình Dương giá cao nhất thị trường công chứng
                                            ngay, 0899355779</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-nen-du-an-khu-do-thi-my-phuoc-3/can-mua-dat-my-phuoc-3-4-ben-cat-binh-duong-gia-cao-nhat-thi-truong-cong-chung-ngay-0899355779-ad99607">
                                                <img class="product-avatar-img"
                                                    src="./assets/image/20200612100919-849c_wm.jpg"
                                                    alt="Cần mua đất Mỹ Phước 3, 4 Bến Cát, Bình Dương giá cao nhất thị trường công chứng ngay, 0899355779">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Tôi cần mua đất thuộc khu đô thị Mỹ Phước 3,
                                                4, Bình Dương số lượng lớn, mua nhanh ký công chứng thanh toán đủ tiền ngay
                                                trong ngày. Quý khách hàng đã mua đất Mỹ Phước 3, 4 các khu K, L, J, H, G,
                                                F, I, 5B, 5C, 5A nay cần bán lại gấp hoặc cần tìm địa chỉ ký gửi đất uy tín
                                                hãy gọi ngay 0899 355 779 gặ...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">3 tỷ - 5 tỷ</span>&nbsp;
                                                    Diện tích: <span class="product-area">100 m² - 600 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Bến Cát</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Bình Dương</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    15/06/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip2" uid="153939">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-nha-mat-pho-binh-thanh/can-tim-mua-nha-chinh-chu-gia-tot-tai-cac-quan-tp-hcm-ad105920"
                                            title="Cần tìm mua nhà chính chủ giá tốt tại các quận TP HCM">Cần tìm mua nhà
                                            chính chủ giá tốt tại các quận TP HCM</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-nha-mat-pho-binh-thanh/can-tim-mua-nha-chinh-chu-gia-tot-tai-cac-quan-tp-hcm-ad105920">
                                                <img class="product-avatar-img" src="./assets/image/nophoto-175x116.jpg"
                                                    alt="Cần tìm mua nhà chính chủ giá tốt tại các quận TP HCM">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Cần tìm mua nhà chính chủ giá tốt, chưa qua
                                                kinh doanh, ngang trên 3m, có kết cấu. Đúng nhu cầu alo mình đi xem nha
                                                liền, và xuống tiền ngay nhé. Mặt tiền từ 1 tỷ - 10 tỷ. Khu vực: Q1, 3, 10,
                                                Bình Thạnh, Phú Nhuận, Tân Bình, Gò Vấp và Thủ Đức. Nếu mua được giá tốt sẽ
                                                gửi thêm 0,5% - 1.5%. Cho ace gi...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">1 tỷ - 10 tỷ</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Bình Thạnh, Quận 1, Quận 10,
                                                        Quận 3, Thủ Đức</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip3" uid="153939">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-nen-du-an-green-city/khach-ha-noi-can-tim-hang-gia-tot-du-an-green-city-va-seaview-dau-tu-ad104242"
                                            title="Khách Hà Nội cần tìm hàng gía tốt dự án Green City và Seaview đầu tư">Khách
                                            Hà Nội cần tìm hàng gía tốt dự án Green City và Seaview đầu tư</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-nen-du-an-green-city/khach-ha-noi-can-tim-hang-gia-tot-du-an-green-city-va-seaview-dau-tu-ad104242">
                                                <img class="product-avatar-img" src="./assets/image/20201013134209-a3f8.jpg"
                                                    alt="Khách Hà Nội cần tìm hàng gía tốt dự án Green City và Seaview đầu tư">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Khách Hà Nội cần tìm hàng gía tốt dự án Green
                                                City và Seaview đầu tư.Mình có khách nét cần đầu tư 2 dự án Green City và
                                                Sea View.- Yêu cầu: + Lô sạch không dính cống và ngã 3. + Seaview cần tìm
                                                block quanh chợ. + Gía tốt so với thị trường hiện tại.- Anh chị ai có nhu
                                                cầu ra hàng 2 dự án trên hoặc ac...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Điện Bàn</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Quảng Nam</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    13/10/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="828735">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-nen-du-an-khu-do-thi-my-phuoc-3/khu-g-my-phuoc-3-dang-hot-ace-dau-tu-alo-e-0908778752-nhanh-nhe-ad105917"
                                            title="Khu G Mỹ Phước 3 đang hot ace đầu tư alo e 0908778752 nhanh nhé">Khu G Mỹ
                                            Phước 3 đang hot ace đầu tư alo e 0908778752 nhanh nhé</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-nen-du-an-khu-do-thi-my-phuoc-3/khu-g-my-phuoc-3-dang-hot-ace-dau-tu-alo-e-0908778752-nhanh-nhe-ad105917">
                                                <img class="product-avatar-img" src="./assets/image/nophoto-175x116.jpg"
                                                    alt="Khu G Mỹ Phước 3 đang hot ace đầu tư alo e 0908778752 nhanh nhé">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Khu G Mỹ Phước 3 đang hot ace đầu tư alo e
                                                0908778752 nhanh nhé. Ai có hàng cần bán gửi qua zalo cho e nhé.
                                                0908778752....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Bến Cát</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Bình Dương</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="828735">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-nen-du-an-khu-do-thi-cong-nghiep-my-phuoc-1/tim-mua-dat-cac-khu-my-phuoc-1-2-3-4-ben-cat-binh-duong-0908778752-zalo-ad105916"
                                            title="Tìm mua đất các khu Mỹ Phước 1, 2, 3, 4, Bến Cát, Bình Dương - 0908778752 zalo">Tìm
                                            mua đất các khu Mỹ Phước 1, 2, 3, 4, Bến Cát, Bình Dương - 0908778752 zalo</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-nen-du-an-khu-do-thi-cong-nghiep-my-phuoc-1/tim-mua-dat-cac-khu-my-phuoc-1-2-3-4-ben-cat-binh-duong-0908778752-zalo-ad105916">
                                                <img class="product-avatar-img" src="./assets/image/nophoto-175x116.jpg"
                                                    alt="Tìm mua đất các khu Mỹ Phước 1, 2, 3, 4, Bến Cát, Bình Dương - 0908778752 zalo">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Tìm mua đất các khu Mỹ Phước 1, 2, 3, 4, Bến
                                                Cát, Bình Dương - 0908778752 zalo. Ai có đất nt cho tôi....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Bến Cát</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Bình Dương</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1053776">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/can-thue-nha-mat-pho-binh-thanh/can-thue-nha-mat-tien-lam-showroom-ad105889"
                                            title="Cần thuê nhà mặt tiền làm showroom">Cần thuê nhà mặt tiền làm
                                            showroom</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/can-thue-nha-mat-pho-binh-thanh/can-thue-nha-mat-tien-lam-showroom-ad105889">
                                                <img class="product-avatar-img"
                                                    src="./assets/image/20200903202409-2ee9_wm.jpg"
                                                    alt="Cần thuê nhà mặt tiền làm showroom">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Tôi cần thuê nhà để làm showroom ở khu vực Hồ
                                                Chí Minh. Với những yêu cầu như sau: Diện tích ngân hàng cần thuê: - Bề
                                                ngang tối thiểu là 6m (phù hợp nhất là 6m - 12m). - Chiều dài tối thiểu là
                                                15m (phù hợp nhất là trên 20m). - Có lầu. Vị trí ngân hàng yêu cầu:- Nhà cho
                                                thuê làm ngân hàng phải nằm ng...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Dưới 400 triệu/tháng</span>&nbsp;
                                                    Diện tích: <span class="product-area">Trên 90 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Bình Thạnh, Hóc Môn, Phú
                                                        Nhuận, Quận 1, Quận 11</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1053776">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/can-thue-nha-mat-pho-go-vap/ngan-hang-techcombank-can-thue-nha-mt-cac-tuyen-duong-lon-de-mo-phong-giao-dich-ad105885"
                                            title="Ngân hàng Techcombank cần thuê nhà MT các tuyến đường lớn để mở phòng giao dịch">Ngân
                                            hàng Techcombank cần thuê nhà MT các tuyến đường lớn để mở phòng giao dịch</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/can-thue-nha-mat-pho-go-vap/ngan-hang-techcombank-can-thue-nha-mt-cac-tuyen-duong-lon-de-mo-phong-giao-dich-ad105885">
                                                <img class="product-avatar-img"
                                                    src="./assets/image/20200908094654-3022_wm.jpg"
                                                    alt="Ngân hàng Techcombank cần thuê nhà MT các tuyến đường lớn để mở phòng giao dịch">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Do nhu cầu mở rộng chi nhánh, ngân hàng cần
                                                tìm các vị trí phù hợp làm ngân hàng các trục đường chính: DT 5x20m, 1 lầu,
                                                giá 30 - 100tr. DT 8x20m, trệt, nhiều lầu giá từ 300tr đổ lại.Các tuyến
                                                đường sầm uất. Các bạn bè anh chị, chủ nhà có xin vui lòng liên hệ, xin cảm
                                                ơn. LH: 090 267 9991 Nam mail ph...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">30 triệu - 300 triệu/tháng</span>&nbsp;
                                                    Diện tích: <span class="product-area">Trên 100 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Gò Vấp, Quận 1, Quận 10,
                                                        Quận 3, Quận 5</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1053776">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/can-thue-nha-mat-pho-binh-tan/nha-hang-kieu-nhat-manmaru-can-thue-nha-tai-trung-tam-tphcm-ad105884"
                                            title="Nhà hàng kiểu Nhật Manmaru cần thuê nhà tại trung tâm TPHCM">Nhà hàng
                                            kiểu Nhật Manmaru cần thuê nhà tại trung tâm TPHCM</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/can-thue-nha-mat-pho-binh-tan/nha-hang-kieu-nhat-manmaru-can-thue-nha-tai-trung-tam-tphcm-ad105884">
                                                <img class="product-avatar-img"
                                                    src="./assets/image/20200908094748-cea5_wm.jpg"
                                                    alt="Nhà hàng kiểu Nhật Manmaru cần thuê nhà tại trung tâm TPHCM">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Nhà hàng kiểu Nhật Manmaru cần thuê nhà tại
                                                trung tâm TPHCM. Cần thuê nhà mặt phố tại Quận Bình Tân, Quận Bình Thạnh,
                                                Quận Gò Vấp, Quận Phú Nhuận, Quận 1 - Hồ Chí Minh.Dãy nhà hàng phong cách
                                                Nhật Manmaru cần thuê các vị trí trung tâm hoặc khu dân cư đông đúc để kinh
                                                doanh. Cần có các mặt bằng với d...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Trên 500 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Bình Tân, Bình Thạnh, Gò
                                                        Vấp, Phú Nhuận, Quận 1</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1053776">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/can-thue-nha-mat-pho-phu-nhuan/thuong-hieu-my-pham-han-quoc-innisfree-can-thue-nha-mat-tien-lam-showroom-ad105883"
                                            title="Thương hiệu mỹ phẩm Hàn Quốc Innisfree cần thuê nhà mặt tiền làm showroom">Thương
                                            hiệu mỹ phẩm Hàn Quốc Innisfree cần thuê nhà mặt tiền làm showroom</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/can-thue-nha-mat-pho-phu-nhuan/thuong-hieu-my-pham-han-quoc-innisfree-can-thue-nha-mat-tien-lam-showroom-ad105883">
                                                <img class="product-avatar-img"
                                                    src="./assets/image/20200908095047-f4b7_wm.jpg"
                                                    alt="Thương hiệu mỹ phẩm Hàn Quốc Innisfree cần thuê nhà mặt tiền làm showroom">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Đại diện cho thương hiệu Innisfree cần thuê
                                                các mặt tiền phố để làm showroom, thông tin nhu cầu chi tiết như sau: - Diện
                                                tích: Chiều ngang ít nhất 6m. - Khu vực: Sầm uất, đông dân cư, gần các văn
                                                phòng, trường học. - Năng lực tài chính: Tùy vào vị trí và khu vực thuê.Rất
                                                mong nhận được hợp tác quý c...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Phú Nhuận, Quận 10, Quận 2,
                                                        Quận 3, Quận 4</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1053776">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/can-thue-nha-mat-pho-phu-nhuan/can-thue-nha-2mt-de-mo-chuoi-cua-hang-ga-ran-kfc-ad105882"
                                            title="Cần thuê nhà 2MT để mở chuỗi cửa hàng gà rán KFC">Cần thuê nhà 2MT để mở
                                            chuỗi cửa hàng gà rán KFC</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/can-thue-nha-mat-pho-phu-nhuan/can-thue-nha-2mt-de-mo-chuoi-cua-hang-ga-ran-kfc-ad105882">
                                                <img class="product-avatar-img"
                                                    src="./assets/image/20200908095159-9d16_wm.jpg"
                                                    alt="Cần thuê nhà 2MT để mở chuỗi cửa hàng gà rán KFC">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Chúng tôi cần nhiều nhà ở tuyến đường lớn ở TP
                                                HCM cửa hàng. Yêu cầu sơ bộ. Diện tích: Ngang thấp nhất 5m, dài thấp nhất
                                                12m, nhà cấp 4 hoặc có lầu cũng được. Giá: Giá cao nhất là 126.8 triệu. Hợp
                                                đồng tối thiểu 3 năm. Cọc và thanh toán thương lượng trực tiếp. Khu vực:
                                                Quận 1, 2, 3, 4, 5, 6, 8, 9, 1...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Dưới 126.8 triệu/tháng</span>&nbsp;
                                                    Diện tích: <span class="product-area">Trên 60 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Phú Nhuận, Quận 1, Quận 10,
                                                        Quận 5, Quận 6</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1053776">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/can-thue-nha-mat-pho-quan-1/hoc-vien-toc-quoc-te-thao-tay-can-thue-nha-nguyen-can-mat-tien-cac-quan-trung-tam-tp-ho-chi-minh-ad105881"
                                            title="Học viện tóc quốc tế Thảo Tây cần thuê nhà nguyên căn mặt tiền các quận trung tâm TP. Hồ Chí Minh">Học
                                            viện tóc quốc tế Thảo Tây cần thuê nhà nguyên căn mặt tiền các quận trung tâm
                                            TP. Hồ Chí Minh</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/can-thue-nha-mat-pho-quan-1/hoc-vien-toc-quoc-te-thao-tay-can-thue-nha-nguyen-can-mat-tien-cac-quan-trung-tam-tp-ho-chi-minh-ad105881">
                                                <img class="product-avatar-img"
                                                    src="./assets/image/20200909201926-62e4_wm.jpg"
                                                    alt="Học viện tóc quốc tế Thảo Tây cần thuê nhà nguyên căn mặt tiền các quận trung tâm TP. Hồ Chí Minh">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Học viện tóc quốc tế Thảo Tây cần thuê nhà ở
                                                tất cả các quận trung tâm TP. HCM với các yêu cầu như sau: Diện tích cần
                                                thuê: - Bề ngang tối thiểu là 8m (phù hợp nhất là 9m - 10m). - Chiều dài tối
                                                thiểu là 20m (phù hợp nhất là trên 25m). Vị trí yêu cầu: - Nhà nằm ở các
                                                trục đường chính, khu đông dân c...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Trên 160 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Quận 1, Quận 2, Quận 3, Quận
                                                        4, Quận 5</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="828735">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-dat-phuong-my-phuoc/nhan-tim-dat-lam-kho-xuong-dat-lon-theo-yeu-cau-tai-binh-duong-0908-778-752-ad105914"
                                            title="Nhận tìm đất làm kho xưởng - đất lớn theo yêu cầu tại Bình Dương 0908.778.752">Nhận
                                            tìm đất làm kho xưởng - đất lớn theo yêu cầu tại Bình Dương 0908.778.752</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-dat-phuong-my-phuoc/nhan-tim-dat-lam-kho-xuong-dat-lon-theo-yeu-cau-tai-binh-duong-0908-778-752-ad105914">
                                                <img class="product-avatar-img" src="./assets/image/nophoto-175x116.jpg"
                                                    alt="Nhận tìm đất làm kho xưởng - đất lớn theo yêu cầu tại Bình Dương 0908.778.752">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Nhận tìm đất làm kho xưởng - đất lớn theo yêu
                                                cầu tại Bình Dương 0908.778.752....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Bến Cát</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Bình Dương</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="621767">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-nha-rieng-quan-4/can-mua-nha-trung-tam-quan-4-ho-chi-minh-ad105913"
                                            title="Cần mua nhà trung tâm Quận 4 - Hồ Chí Minh">Cần mua nhà trung tâm Quận 4
                                            - Hồ Chí Minh</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-nha-rieng-quan-4/can-mua-nha-trung-tam-quan-4-ho-chi-minh-ad105913">
                                                <img class="product-avatar-img" src="./assets/image/nophoto-175x116.jpg"
                                                    alt="Cần mua nhà trung tâm Quận 4 - Hồ Chí Minh">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Cần mua nhà ở trung tâm Quận 4 - Hồ Chí Minh.
                                                DT khoảng 30m2....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Dưới 30 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Quận 4</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="0">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-nha-rieng-quan-4/can-mua-nha-dat-trung-tam-tphcm-ad105912"
                                            title="Cần mua nhà đất trung tâm TPHCM">Cần mua nhà đất trung tâm TPHCM</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-nha-rieng-quan-4/can-mua-nha-dat-trung-tam-tphcm-ad105912">
                                                <img class="product-avatar-img" src="./assets/image/nophoto-175x116.jpg"
                                                    alt="Cần mua nhà đất trung tâm TPHCM">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Cần mua nhà, nhà nát, đất tại trung tâm
                                                TPHCM....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Thỏa thuận</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Quận 4</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="0">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-nha-rieng-quan-2/can-mua-nha-q2-hxh-tai-chinh-4-ty-ad105911"
                                            title="Cần mua nhà Q2 HXH tài chính 4 tỷ">Cần mua nhà Q2 HXH tài chính 4 tỷ</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-nha-rieng-quan-2/can-mua-nha-q2-hxh-tai-chinh-4-ty-ad105911">
                                                <img class="product-avatar-img" src="./assets/image/nophoto-175x116.jpg"
                                                    alt="Cần mua nhà Q2 HXH tài chính 4 tỷ">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Mình đang tìm mua nhà để ở, khu vực Q2, không
                                                yêu cầu hướng, các yêu cầu khác: - Xe hơi đi được tới trước cửa nhà. - Khu
                                                vực không có mồ mả. - Không dính quy hoạch, không bị lộ giới. - Có thể cân
                                                nhắc mua đất cùng yêu cầu trên nhưng vẫn ưu tiên nhà vì người nhà đang cần
                                                dọn ra ở riêng sớm....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">3 tỷ - 4 tỷ</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Quận 2</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1508078">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/mua-can-ho-chung-cu-eco-lake-view/can-mua-can-ho-eco-lake-view-32-dai-tu-hoang-mai-ad105910"
                                            title="Cần mua căn hộ Eco Lake View 32 Đại Từ, Hoàng Mai">Cần mua căn hộ Eco
                                            Lake View 32 Đại Từ, Hoàng Mai</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/mua-can-ho-chung-cu-eco-lake-view/can-mua-can-ho-eco-lake-view-32-dai-tu-hoang-mai-ad105910">
                                                <img class="product-avatar-img" src="./assets/image/nophoto-175x116.jpg"
                                                    alt="Cần mua căn hộ Eco Lake View 32 Đại Từ, Hoàng Mai">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Mình cần mua 1 căn hộ 2pn, 2vs tại khu chung
                                                cư Eco Lake View 32 Đại Từ, Hoàng Mai. Giá cả liên hệ trực tiếp với chủ
                                                nhà....</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">1.4 tỷ - 1.8 tỷ</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Hoàng Mai</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hà Nội</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1440228">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/can-thue-kho-nha-xuong-dat-phuong-13-10/nhu-cau-thue-dat-phat-trien-chuoi-vuon-uom-khoi-nghiep-sang-tao-diyas-sky-ad105907"
                                            title="Nhu cầu thuê đất phát triển chuỗi vườn ươm khởi nghiệp sáng tạo - Diyas Sky">Nhu
                                            cầu thuê đất phát triển chuỗi vườn ươm khởi nghiệp sáng tạo - Diyas Sky</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/can-thue-kho-nha-xuong-dat-phuong-13-10/nhu-cau-thue-dat-phat-trien-chuoi-vuon-uom-khoi-nghiep-sang-tao-diyas-sky-ad105907">
                                                <img class="product-avatar-img"
                                                    src="./assets/image/20201111202529-2edf_wm.jpg"
                                                    alt="Nhu cầu thuê đất phát triển chuỗi vườn ươm khởi nghiệp sáng tạo - Diyas Sky">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Tập đoàn C. T Group có nhu cầu thuê đất có
                                                diện tích từ 1.500 m2 trở lên trong thời hạn từ 20 đến 30 năm trở lên, chấp
                                                nhận mọi loại đất phù hợp quy hoạch, để phát triển chuỗi Vườn ươm Khởi
                                                nghiệp sáng tạo Diyas Sky. - Chi tiết liên hệ Ban Phát triển dự án. Điện
                                                thoại: 0911807675. Email: ptda@ctgro...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">Trên 100 triệu</span>&nbsp;
                                                    Diện tích: <span class="product-area">Trên 1500 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Tân Bình</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1476810">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/can-thue-nha-mat-pho-phu-nhuan/giam-doc-ngan-hang-maritime-bank-can-thue-mat-bang-tai-trung-tam-tp-hcm-ad105906"
                                            title="Giám đốc Ngân hàng Maritime Bank cần thuê mặt bằng tại trung tâm Tp.HCM">Giám
                                            đốc Ngân hàng Maritime Bank cần thuê mặt bằng tại trung tâm Tp.HCM</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/can-thue-nha-mat-pho-phu-nhuan/giam-doc-ngan-hang-maritime-bank-can-thue-mat-bang-tai-trung-tam-tp-hcm-ad105906">
                                                <img class="product-avatar-img"
                                                    src="./assets/image/20201002165724-3c34_wm.jpg"
                                                    alt="Giám đốc Ngân hàng Maritime Bank cần thuê mặt bằng tại trung tâm Tp.HCM">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Hiện nay chúng tôi cần thuê mặt bằng hoặc nhà
                                                nguyên căn với những tiêu chi và tại các khu vực sau:- Diện tích: Ngang tối
                                                thiểu 8m - Dài 16m. - Khu vực đang cần thuê: + Quận 1: Toàn quận, các tuyến
                                                đường trên 8m. + Quận 2: Trần Não, Song Hành (Từ Trần Não đến Big C An Phú).
                                                + Quận 3: (Võ Văn Tần, CM...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">70 triệu - 250 triệu/tháng</span>&nbsp;
                                                    Diện tích: <span class="product-area">Trên 128 m²</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Phú Nhuận, Quận 3, Quận 7,
                                                        Quận 8, Quận 9</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>
                                <div class="vip5" uid="1476810">
                                    <div class="p-title">
                                        <a href="https://batdongsan.com.vn/can-thue-nha-mat-pho-hoc-mon/nha-cho-thue-de-lam-truong-hoc-anh-ngu-vus-can-co-nhung-tieu-chi-nhu-sau-ad105904"
                                            title="Nhà cho thuê để làm trường học Anh Ngữ VUS cần có những tiêu chí như sau">Nhà
                                            cho thuê để làm trường học Anh Ngữ VUS cần có những tiêu chí như sau</a>
                                    </div>
                                    <div class="p-main">
                                        <div class="p-main-image-crop">
                                            <a
                                                href="https://batdongsan.com.vn/can-thue-nha-mat-pho-hoc-mon/nha-cho-thue-de-lam-truong-hoc-anh-ngu-vus-can-co-nhung-tieu-chi-nhu-sau-ad105904">
                                                <img class="product-avatar-img"
                                                    src="./assets/image/20201007103357-eade_wm.jpg"
                                                    alt="Nhà cho thuê để làm trường học Anh Ngữ VUS cần có những tiêu chí như sau">
                                            </a>
                                        </div>
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">Mặt bằng: Bề ngang tối thiểu 12m, diện tích
                                                tổng sử dụng 1000m2 đến 1200m2. Ưu tiên mặt bằng có sẵn nhà. - Nhà cho thuê
                                                có đầy đủ tính pháp lý để có thể công chứng kí hợp đồng dài hạn. Hợp đồng
                                                tối thiểu 5 năm trở lên. - Giá nhà cho thuê tùy thuộc vào khu vực (Không
                                                quan trọng về giá nếu vị trí nhà ...</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">150 triệu - 500
                                                        triệu/tháng</span>&nbsp;
                                                    Diện tích: <span class="product-area">Không xác định</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">Hóc Môn, Quận 3, Quận 6,
                                                        Quận 7, Tân Bình</span>
                                                    <span class="inline-blk">
                                                        Tỉnh/TP: <span class="product-city-dist">Hồ Chí Minh</span>
                                                    </span>
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    12/11/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear10"></div>
                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="separable"></div>
                            <div>
                                <h3></h3>
                            </div>
                            <div class="separable">
                                <br>
                            </div>
                            <div>
                                <h3>Tìm Nhà đất Cần mua - Cần thuê khác tại Việt Nam</h3>
                            </div>
                            <div class="separable">
                                <br>
                            </div>
                            <div class="margit5">
                                <div class="tc-tit-bottom">
                                    <div class="ks-pagination-links" align="center" stype="float: right">
                                        <a pid="1" href="https://batdongsan.com.vn/can-mua-can-thue">
                                            <div class="style-pager-row-selected">1</div>
                                        </a>
                                        <a pid="2" href="https://batdongsan.com.vn/can-mua-can-thue/p2">
                                            <div class="">2</div>
                                        </a>
                                        <a pid="3" href="https://batdongsan.com.vn/can-mua-can-thue/p3">
                                            <div class="">3</div>
                                        </a>
                                        <a pid="4" href="https://batdongsan.com.vn/can-mua-can-thue/p4">
                                            <div class="">4</div>
                                        </a>
                                        <a pid="5" href="https://batdongsan.com.vn/can-mua-can-thue/p5">
                                            <div class="">5</div>
                                        </a>
                                        <a pid="2" href="https://batdongsan.com.vn/can-mua-can-thue/p2">
                                            <div>...</div>
                                        </a>
                                        <a pid="69" href="https://batdongsan.com.vn/can-mua-can-thue/p69">
                                            <div>&gt;</div>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="body-right" id="RightMainContent">
            <div>
                <div class="container-common">
                    <div>
                        <div>
                            <div class="newsletter-form-small">
                                <div class="mb5">
                                    <div class="fl">
                                        <img src="./assets/image/icon-newsletter-small.jpg">
                                    </div>
                                    <div class="fl news-text">Nhận bản tin từ Batdongsan.com.vn</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="newsletter-content">
                                    <div class="newsletter-bound">
                                        <div class="fl input">
                                            <input type="text" id="email" placeholder="Nhập email của bạn">
                                        </div>
                                        <div class="fl a"><a href="https://batdongsan.com.vn/can-mua-can-thue#"
                                                class="newsletter-register" id="newsletterRegister">Đăng ký</a></div>
                                        <div class="clear">&nbsp;</div>
                                        <div id="emailValid"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div style="clear:both;"></div>

            <div id="content-main-right">
                <div id="column-right">


                    <div>
                        <div id="product_search" class="box-left">
                            <div class="box-title">
                                Tìm kiếm tin rao cần mua, cần thuê
                            </div>
                            <div id="searchcp" class="search-form">
                                <form
                                    action="https://batdongsan.com.vn/microservice-architecture-router/Demand/DemandSearch/Index"
                                    method="post" novalidate="novalidate">
                                    <div class="result"></div>
                                    <div id="divCategory" class="searchrow advance-select-box">
                                        <span class="select-text">
                                            <span class="select-text-content" style="width: 192.778px;">--Chọn loại tin
                                                rao--</span>
                                        </span>
                                        <input data-val="true" data-val-required="The CateId field is required."
                                            id="hdCboCatagory" name="CateId" type="hidden" value="-1">
                                    </div>
                                    <div id="divCatagoryOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboCatagory" ddlid="divCategory" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="-1" style="min-width: 186px;">--Chọn loại tin rao--</li>
                                            <li vl="400" class="" style="min-width: 186px;">Nhà đất Cần mua</li>
                                            <li vl="401" class="" style="min-width: 186px;">Nhà đất Cần thuê</li>
                                        </ul>
                                    </div>

                                    <div id="divCategoryRe" class="searchrow advance-select-box">
                                        <span class="select-text">
                                            <span class="select-text-content" style="width: 192.778px;">--Chọn loại nhà
                                                đất--</span>
                                        </span>
                                        <input data-val="true" data-val-required="The SubCateId field is required."
                                            id="hdCboCatagoryRe" name="SubCateId" type="hidden" value="0">
                                    </div>
                                    <div id="divCatagoryReOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboCatagoryRe" ddlid="divCategoryRe" style="" value="[object Object]">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" style="min-width: 186px;">--Chọn loại nhà đất--</li>
                                        </ul>
                                    </div>

                                    <div id="divCity" class="searchrow advance-select-box">
                                        <span class="select-text"><input type="text" class="select-text-content"
                                                value="--Chọn Tỉnh/Thành phố--" placeholder="--Chọn Tỉnh/Thành phố--"
                                                style="width: 192.778px;"></span>
                                        <input id="hdCboCity" name="CityCode" type="hidden" value="CN">
                                    </div>
                                    <div id="divCityOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboCity" ddlid="divCity" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="CN" class="advance-options" style="min-width: 186px;">--Chọn Tỉnh/Thành
                                                phố--</li>
                                            <li vl="SG" class="advance-options " style="min-width: 186px;">Hồ Chí Minh</li>
                                            <li vl="HN" class="advance-options " style="min-width: 186px;">Hà Nội</li>
                                            <li vl="DDN" class="advance-options " style="min-width: 186px;">Đà Nẵng</li>
                                            <li vl="BD" class="advance-options " style="min-width: 186px;">Bình Dương</li>
                                            <li vl="DNA" class="advance-options " style="min-width: 186px;">Đồng Nai</li>
                                            <li vl="KH" class="advance-options " style="min-width: 186px;">Khánh Hòa</li>
                                            <li vl="HP" class="advance-options " style="min-width: 186px;">Hải Phòng</li>
                                            <li vl="LA" class="advance-options " style="min-width: 186px;">Long An</li>
                                            <li vl="QNA" class="advance-options " style="min-width: 186px;">Quảng Nam</li>
                                            <li vl="VT" class="advance-options " style="min-width: 186px;">Bà Rịa Vũng Tàu
                                            </li>
                                            <li vl="DDL" class="advance-options " style="min-width: 186px;">Đắk Lắk</li>
                                            <li vl="CT" class="advance-options " style="min-width: 186px;">Cần Thơ</li>
                                            <li vl="BTH" class="advance-options " style="min-width: 186px;">Bình Thuận </li>
                                            <li vl="LDD" class="advance-options " style="min-width: 186px;">Lâm Đồng</li>
                                            <li vl="TTH" class="advance-options " style="min-width: 186px;">Thừa Thiên Huế
                                            </li>
                                            <li vl="KG" class="advance-options " style="min-width: 186px;">Kiên Giang</li>
                                            <li vl="BN" class="advance-options " style="min-width: 186px;">Bắc Ninh</li>
                                            <li vl="QNI" class="advance-options " style="min-width: 186px;">Quảng Ninh</li>
                                            <li vl="TH" class="advance-options " style="min-width: 186px;">Thanh Hóa</li>
                                            <li vl="NA" class="advance-options " style="min-width: 186px;">Nghệ An</li>
                                            <li vl="HD" class="advance-options " style="min-width: 186px;">Hải Dương</li>
                                            <li vl="GL" class="advance-options " style="min-width: 186px;">Gia Lai</li>
                                            <li vl="BP" class="advance-options " style="min-width: 186px;">Bình Phước</li>
                                            <li vl="HY" class="advance-options " style="min-width: 186px;">Hưng Yên</li>
                                            <li vl="BDD" class="advance-options " style="min-width: 186px;">Bình Định</li>
                                            <li vl="TG" class="advance-options " style="min-width: 186px;">Tiền Giang</li>
                                            <li vl="TB" class="advance-options " style="min-width: 186px;">Thái Bình</li>
                                            <li vl="BG" class="advance-options " style="min-width: 186px;">Bắc Giang</li>
                                            <li vl="HB" class="advance-options " style="min-width: 186px;">Hòa Bình</li>
                                            <li vl="AG" class="advance-options " style="min-width: 186px;">An Giang</li>
                                            <li vl="VP" class="advance-options " style="min-width: 186px;">Vĩnh Phúc</li>
                                            <li vl="TNI" class="advance-options " style="min-width: 186px;">Tây Ninh</li>
                                            <li vl="TN" class="advance-options " style="min-width: 186px;">Thái Nguyên</li>
                                            <li vl="LCA" class="advance-options " style="min-width: 186px;">Lào Cai</li>
                                            <li vl="NDD" class="advance-options " style="min-width: 186px;">Nam Định</li>
                                            <li vl="QNG" class="advance-options " style="min-width: 186px;">Quảng Ngãi</li>
                                            <li vl="BTR" class="advance-options " style="min-width: 186px;">Bến Tre</li>
                                            <li vl="DNO" class="advance-options " style="min-width: 186px;">Đắk Nông</li>
                                            <li vl="CM" class="advance-options " style="min-width: 186px;">Cà Mau</li>
                                            <li vl="VL" class="advance-options " style="min-width: 186px;">Vĩnh Long</li>
                                            <li vl="NB" class="advance-options " style="min-width: 186px;">Ninh Bình</li>
                                            <li vl="PT" class="advance-options " style="min-width: 186px;">Phú Thọ</li>
                                            <li vl="NT" class="advance-options " style="min-width: 186px;">Ninh Thuận</li>
                                            <li vl="PY" class="advance-options " style="min-width: 186px;">Phú Yên</li>
                                            <li vl="HNA" class="advance-options " style="min-width: 186px;">Hà Nam</li>
                                            <li vl="HT" class="advance-options " style="min-width: 186px;">Hà Tĩnh</li>
                                            <li vl="DDT" class="advance-options " style="min-width: 186px;">Đồng Tháp</li>
                                            <li vl="ST" class="advance-options " style="min-width: 186px;">Sóc Trăng</li>
                                            <li vl="KT" class="advance-options " style="min-width: 186px;">Kon Tum</li>
                                            <li vl="QB" class="advance-options " style="min-width: 186px;">Quảng Bình</li>
                                            <li vl="QT" class="advance-options " style="min-width: 186px;">Quảng Trị</li>
                                            <li vl="TV" class="advance-options " style="min-width: 186px;">Trà Vinh</li>
                                            <li vl="HGI" class="advance-options " style="min-width: 186px;">Hậu Giang</li>
                                            <li vl="SL" class="advance-options " style="min-width: 186px;">Sơn La</li>
                                            <li vl="BL" class="advance-options " style="min-width: 186px;">Bạc Liêu</li>
                                            <li vl="YB" class="advance-options " style="min-width: 186px;">Yên Bái</li>
                                            <li vl="TQ" class="advance-options " style="min-width: 186px;">Tuyên Quang</li>
                                            <li vl="DDB" class="advance-options " style="min-width: 186px;">Điện Biên</li>
                                            <li vl="LCH" class="advance-options " style="min-width: 186px;">Lai Châu</li>
                                            <li vl="LS" class="advance-options " style="min-width: 186px;">Lạng Sơn</li>
                                            <li vl="HG" class="advance-options " style="min-width: 186px;">Hà Giang</li>
                                            <li vl="BK" class="advance-options " style="min-width: 186px;">Bắc Kạn</li>
                                            <li vl="CB" class="advance-options " style="min-width: 186px;">Cao Bằng</li>
                                        </ul>
                                    </div>


                                    <div id="divDistrict" class="searchrow advance-select-box" title="" bt-xtitle="">
                                        <span class="select-text"><input type="text" class="select-text-content"
                                                value="--Chọn Quận/Huyện--" placeholder="--Chọn Quận/Huyện--"
                                                style="width: 192.778px;"></span>
                                        <input data-val="true" data-val-required="The DistrictId field is required."
                                            id="hdCboDistrict" name="DistrictId" type="hidden" value="0">
                                    </div>
                                    <div id="divDistrictOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboDistrict" ddlid="divDistrict" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" class="advance-options current" style="min-width: 186px;">--Chọn
                                                Quận/Huyện--</li>
                                        </ul>
                                    </div>


                                    <div id="divArea" class="searchrow advance-select-box ">
                                        <span class="select-text">
                                            <span class="select-text-content" style="width: 192.778px;">--Chọn Diện
                                                tích--</span>
                                        </span>
                                        <input data-val="true" data-val-required="The AreaId field is required."
                                            id="hdCboArea" name="AreaId" type="hidden" value="-1">
                                    </div>
                                    <div id="divAreaOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        minvalue="txtAreaMinValue" maxvalue="txtAreaMaxValue" unit="area"
                                        hddvalue="hdCboArea" ddlid="divArea" style="">
                                        <table class="header-options options">
                                            <tbody>
                                                <tr class="advance-options">
                                                    <td class="advance-options">
                                                        <input value="" type="text" id="txtAreaMinValue" name="MinArea"
                                                            placeholder="Từ" class="min-value advance-options" maxlength="6"
                                                            numbersonly="true" decimal="false">
                                                    </td>
                                                    <td class="advance-options"><span class="advance-options">- </span></td>
                                                    <td class="advance-options">
                                                        <input value="" type="text" id="txtAreaMaxValue" name="MaxArea"
                                                            placeholder="Đến" class="max-value advance-options"
                                                            maxlength="6" numbersonly="true" decimal="false">
                                                    </td>
                                                    <td class="advance-options"><span class="advance-options">m2</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="-1" class="advance-options" style="min-width: 186px;">--Chọn Diện tích--
                                            </li>
                                            <li vl="0" class="advance-options " style="min-width: 186px;">Chưa xác định</li>
                                            <li vl="1" class="advance-options " style="min-width: 186px;">&lt;= 30 m2</li>
                                            <li vl="2" class="advance-options " style="min-width: 186px;">30 - 50 m2</li>
                                            <li vl="3" class="advance-options " style="min-width: 186px;">50 - 80 m2</li>
                                            <li vl="4" class="advance-options " style="min-width: 186px;">80 - 100 m2</li>
                                            <li vl="5" class="advance-options " style="min-width: 186px;">100 - 150 m2</li>
                                            <li vl="6" class="advance-options " style="min-width: 186px;">150 - 200 m2</li>
                                            <li vl="7" class="advance-options " style="min-width: 186px;">200 - 250 m2</li>
                                            <li vl="8" class="advance-options " style="min-width: 186px;">250 - 300 m2</li>
                                            <li vl="9" class="advance-options " style="min-width: 186px;">300 - 500 m2</li>
                                            <li vl="10" class="advance-options " style="min-width: 186px;">&gt;= 500 m2</li>
                                        </ul>
                                    </div>

                                    <div id="divPrice" class="searchrow advance-select-box">
                                        <span class="select-text">
                                            <span class="select-text-content" style="width: 192.778px;">--Chọn mức
                                                giá--</span>
                                        </span>
                                        <input data-val="true" data-val-required="The PriceId field is required."
                                            id="hdCboPrice" name="PriceId" type="hidden" value="-1">
                                    </div>
                                    <div id="divPriceOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        minvalue="txtPriceMinValue" maxvalue="txtPriceMaxValue" unit="money"
                                        lblmin="lblPriceMin" lblmax="lblPriceMax" hddvalue="hdCboPrice" ddlid="divPrice"
                                        style="">
                                        <table class="header-options options">
                                            <tbody>
                                                <tr class="advance-options">
                                                    <td class="advance-options">
                                                        <input value="" type="text" id="txtPriceMinValue" name="MinPrice"
                                                            placeholder="Từ" class="min-value advance-options" maxlength="6"
                                                            numbersonly="true" decimal="true">
                                                        <div id="lblPriceMin"></div>
                                                    </td>
                                                    <td class="advance-options"><span class="advance-options">- </span></td>
                                                    <td class="advance-options">
                                                        <input value="" type="text" id="txtPriceMaxValue" name="MaxPrice"
                                                            placeholder="Đến" class="max-value advance-options"
                                                            maxlength="6" numbersonly="true" decimal="true">
                                                        <div id="lblPriceMax"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="-1" class="advance-options" style="min-width: 186px;">--Chọn mức giá--
                                            </li>
                                            <li vl="0" class="advance-options " style="min-width: 186px;">Thỏa thuận</li>
                                            <li vl="1" class="advance-options " style="min-width: 186px;">&lt; 500 triệu
                                            </li>
                                            <li vl="2" class="advance-options " style="min-width: 186px;">500 - 800 triệu
                                            </li>
                                            <li vl="3" class="advance-options " style="min-width: 186px;">800 triệu - 1 tỷ
                                            </li>
                                            <li vl="4" class="advance-options " style="min-width: 186px;">1 - 2 tỷ</li>
                                            <li vl="5" class="advance-options " style="min-width: 186px;">2 - 3 tỷ</li>
                                            <li vl="6" class="advance-options " style="min-width: 186px;">3 - 5 tỷ</li>
                                            <li vl="7" class="advance-options " style="min-width: 186px;">5 - 7 tỷ</li>
                                            <li vl="8" class="advance-options " style="min-width: 186px;">7 - 10 tỷ</li>
                                            <li vl="9" class="advance-options " style="min-width: 186px;">10 - 20 tỷ</li>
                                            <li vl="10" class="advance-options " style="min-width: 186px;">20 - 30 tỷ</li>
                                            <li vl="11" class="advance-options " style="min-width: 186px;">&gt; 30 tỷ</li>
                                        </ul>
                                    </div>

                                    <div id="divWard" class="searchrow adv-search advance-select-box" title=""
                                        style="display: none; width: 218px;" bt-xtitle="">
                                        <span class="select-text" style=""><input type="text" class="select-text-content"
                                                value="--Chọn Phường/Xã--" placeholder="--Chọn Phường/Xã--"
                                                style="width: 75px;"></span>
                                        <input data-val="true" data-val-required="The WardId field is required."
                                            id="hdCboWard" name="WardId" type="hidden" value="0">
                                    </div>
                                    <div id="divWardOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboWard" ddlid="divWard" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" class="advance-options current" style="min-width: 186px;">--Chọn
                                                Phường/Xã--</li>
                                        </ul>
                                    </div>

                                    <div id="divStreet" class="searchrow adv-search advance-select-box" title=""
                                        style="display: none; width: 218px;" bt-xtitle="">
                                        <span class="select-text" style=""><input type="text" class="select-text-content"
                                                value="--Chọn Đường/Phố--" placeholder="--Chọn Đường/Phố--"
                                                style="width: 75px;"></span>
                                        <input data-val="true" data-val-required="The StreetId field is required."
                                            id="hdCboStreet" name="StreetId" type="hidden" value="0">
                                    </div>
                                    <div id="divStreetOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboStreet" ddlid="divStreet" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" class="advance-options current" style="min-width: 186px;">--Chọn
                                                Đường/Phố--</li>
                                        </ul>
                                    </div>

                                    <div id="divProject" class="searchrow adv-search advance-select-box" title=""
                                        style="display: none; width: 218px;" bt-xtitle="">
                                        <span class="select-text" style=""><input type="text" class="select-text-content"
                                                value="--Chọn dự án bất động sản--"
                                                placeholder="--Chọn dự án bất động sản--" style="width: 75px;"></span>
                                        <input data-val="true" data-val-required="The ProjectId field is required."
                                            id="hdCboProject" name="ProjectId" type="hidden" value="0">
                                    </div>
                                    <div id="divProjectOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboProject" ddlid="divProject" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" class="advance-options current" style="min-width: 186px;">--Chọn dự
                                                án bất động sản--</li>
                                        </ul>
                                    </div>

                                    <div class="searchbtn">
                                        <input type="image" name="btnSearch" id="btnSearchContext"
                                            onmouseover="this.src = &#39;https://file4.batdongsan.com.vn/images/search2.jpg&#39;"
                                            onmouseout="this.src = &#39;https://file4.batdongsan.com.vn/images/opt/search1.jpg&#39;"
                                            src="./assets/image/search1.jpg">
                                    </div>
                                    <div id="divLabelSearchAdv">
                                        <span class="box-sub-title" id="lblSearch">Tìm nâng cao</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear:both;"></div>

            <div class="adPosition" positioncode="BANNER_POSITION_RIGHT_MAIN_CONTENT" style=""></div>
            <script type="text/javascript">
                var bannerContext = {
                    "CateId": null,
                    "PageId": 575,
                    "CityCode": null,
                    "DistrictId": null,
                    "CurrentPage": 575
                };

            </script>
            <div style="clear:both;"></div>


            <div class="box1">
                <h2 class="h1">Dành cho người xây nhà</h2>
                <ul>
                    <li>
                        <a href="https://batdongsan.com.vn/quy-trinh-xay-nha" title="Quy trình xây nhà" rel="nofollow">Quy
                            trình xây nhà</a>
                    </li>
                    <li class="last">
                        <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-xem-tuoi-xay-nha" title="Xem tuổi xây nhà"
                            rel="nofollow">Xem tuổi xây nhà</a>
                    </li>
                </ul>
            </div>

            <div style="clear:both;"></div>

            <div class="container-default">
                <div>
                    <div class="adPosition" positioncode="BANNER_POSITION_FIX" style=""></div>
                    <script type="text/javascript">
                        var bannerContext = {
                            "CateId": null,
                            "PageId": 575,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 575
                        };

                    </script>
                </div>
            </div>
        </div>


        <div class="banner-bottom">
            <div style="float: left; width: 560px">
            </div>
            <div style="float: left; width: 430px; margin-left: 5px">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="boxLinkFooter">
            <div id="boxLink" class="footer-link-new">
                <ul>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-rivera-park-ha-noi">Chung cư Rivera Park Hà
                            Nội</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-chung-cu-c1-c2-xuan-dinh">Chung cư C1 C2 Xuân
                            Đỉnh</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-anland-nam-cuong">Chung cư Anland Nam
                            Cường</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-hanhud-hoang-quoc-viet">Chung cư Hanhud Hoàng
                            Quốc Việt</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-sunshine-center">Sunshine Center</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-khu-do-thi-lakeview-city">Bán biệt thự
                            Lakeview City</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-ha-do-756-sai-gon">Bán biệt thự Hà Đô
                            756 Sài Gòn</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-park-12-park-hill-times-city">Bán chung cư
                            Park 12 Park Hill Times City</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinpearl-condotel-da-nang">Bán căn hộ
                            Vinpearl Condotel Đà Nẵng</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-soho-premier">Bán căn hộ Soho Premier</a>
                    </li>
                </ul>
                <ul>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duc-long-golden-land">Bán căn hộ Đức Long
                            Golden Land</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-hung-phat-golden-star">Bán căn hộ Hưng Phát
                            Golden Star</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-chung-cu-129d-truong-dinh">Bán chung cư 129D
                            Trương Định</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-e4-tower">Bán chung cư E4 Tower</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng-duong-nguyen-trung-truc-66">Bán nhà Nguyễn Trung
                            Trực Bình Thạnh</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-bac-ninh">Nhà đất Bắc Ninh</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-n03-t3-t4-ngoai-giao-doan">Bán chung cư N03
                            T3 T4 Ngoại Giao Đoàn</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-valeo-dam-sen">Bán căn hộ Valeo Đầm Sen</a>
                    </li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-khu-do-thi-an-thinh">Bán đất nền Khu đô thị An
                            Thịnh</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-golden-land">Chung cư Golden Land</a></li>
                </ul>
                <ul>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-happy-star-tower">Bán chung cư Happy Star
                            Tower</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-sunrise-city">Căn hộ Sunrise City</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-thai-nguyen">Nhà đất Thái Nguyên</a></li>
                    <li><a href="https://batdongsan.com.vn/khu-thuong-mai-dich-vu-long-bien/vincom-center-long-bien-pj994">Vincom
                            Long Bien</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-sunview-1-2">Sunview Town</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-times-city">Chung cư Times City</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-chung-cu-golden-west-le-van-thiem">Chung cư
                            Golden West</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-alphanam-luxury-apartment">Bán căn hộ
                            Alphanam Luxury Apartment</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-ecolife-tay-ho">Bán chung cư Ecolife Tây
                            Hồ</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-nam-dinh">Nhà đất Nam Định</a></li>
                </ul>
                <ul>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-hai-phong">Nhà đất Hải Phòng</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-hai-duong">Nhà đất Hải Dương</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-can-tho">Nhà đất Cần Thơ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-centara-thu-thiem">Căn hộ Centara Thủ
                            Thiêm</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-athena-complex">Chung cư Athena Complex</a>
                    </li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-tu-hiep-plaza">Chung cư Tứ Hiệp Plaza</a>
                    </li>
                    <li><a href="https://batdongsan.com.vn/tags/cho-thue/Sang-quan-cafe">Sang quán café</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-gemek-premium">Chung cư Gemek Premium</a>
                    </li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinpearl-condotel-nha-trang">Căn hộ Vinpearl
                            Condotel Nha Trang</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-binh-chanh">Bán nhà Bình Chánh</a></li>
                </ul>
                <ul>
                    <li><a href="https://batdongsan.com.vn/ban-dat-ninh-kieu-ct">Bán đất Ninh Kiều</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-quan-11">Bán nhà Quận 11</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-16-3">Bán nhà Phường 16 Gò Vấp</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-4-15">Bán nhà Phường 4 Quận 8</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-9-6">Bán nhà Phường 9 Quận 5</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-phuong-dong-hoa">Bán đất Đông Hòa</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-duong-noi">Bán nhà Dương Nội</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-thi-tran-trau-quy">Bán nhà Trâu Quỳ</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-xa-tien-xuan">Bán nhà Tiến Xuân</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<div class="modal fade" id="dialogPopup" role="dialog">
    <div class="nomodal"></div>
    <div class="modal-dialog">
        <div class="modal-content ">
        </div>
    </div>
</div>

<div class="adPosition" positionCode="BANNER_POSITION_FLOADING_BOTTOM" style=""></div>
<script type='text/javascript'> var bannerContext={"CateId":null,"PageId":575,"CityCode":null,"DistrictId":null,"CurrentPage":575};</script>

<div class="hide" id="domainUserInfo" data-value="https://batdongsan.com.vn"></div>
<div class="hide" id="domainWeb" data-value="https://batdongsan.com.vn"></div>
<div class="hide" id="getBannerUrl" data-value="/microservice-architecture-router/Systems/Banner/GetBanners"></div>
<div class="hide" id="domainStatistic" data-value="https://statistic.batdongsan.com.vn"></div>
<div class="popup-content ">
</div>
<div class="lg-backdrop in" id="dialog-backdrop" style="transition-duration: 150ms;display: none;" onclick="account.CloseAccountPopup()"></div>
<div id="gototop" title="Go to top"></div>
</div>
<div style="display: none"
 class="searching-histories-configs"
 max-searching-histories-length="20"
 sync-time-searching-histories="5"
 sync-searching-histories-url="/Product/ProductSearch/SyncSearchingHistories"
 remove-searching-histories-url="/Product/ProductSearch/RemoveSearchingHistory">
</div>


    <script src="https://staticfile.batdongsan.com.vn/js/Common/filestatic.ver202011121057.msvbds.FrontEnd.Common.min.js"></script>

<!--start BannerContext-->
<script type='text/javascript'> var __bannerContext={"PageId":575,"CateId":null,"CityCode":null,"DistrictId":null,"CurrentPage":1};</script>
<!--end BannerContext-->
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim || (function (d, s) {
    var z = $zopim = function (c) { z._.push(c) }, $ = z.s =
        d.createElement(s), e = d.getElementsByTagName(s)[0]; z.set = function (o) {
            z.set.
                _.push(o)
        }; z._ = []; z.set._ = []; $.async = !0; $.setAttribute("charset", "utf-8");
    $.src = "https://v2.zopim.com/?6fJlcOXWwJofJZOzmeDIifb7bHGvvSte"; z.t = +new Date; $.
        type = "text/javascript"; e.parentNode.insertBefore($, e)
})(document, "script");
</script>
<!--End of Zendesk Chat Script-->
<script type="text/javascript">
    var newsLetterRegister = new newsLetterRegister.NewsLetterRegister();
    newsLetterRegister.InitializeLoad();

    var commentUser = new commentUser.CommentUser();
    commentUser.InitializeLoad();

    var paramAccount = {
        urlListLogin: '/Systems/Account/Login',
        urlListRegister: '/Systems/Account/Register',
        urlListForgetPass: '/Systems/Account/ForgetPassword',
        urlListCity: '/Contacts/CommonData/GetCityList',
        urlListDistrict: '/Contacts/CommonData/GetListDistrictByCity',
        urlListWard: '/Contacts/CommonData/GetWardList',
    };

    var account = new account.Content();
    account.Initialize(paramAccount);

    var footer = new footer.Footer();
    footer.Initialize();

    var menu = new menu.Menu();
    menu.Initialize();
</script>

<div sync-marked-products-url="/Product/MarkedProducts/SyncMarkedProducts"
 unmarked-product-url="/Product/MarkedProducts/UnmarkProduct"
 marked-product-ids-sync-time="0.5"></div>



<script src="https://staticfile.batdongsan.com.vn/js/Product/filestatic.ver202011121057.msvbds.FrontEnd.Product.Search.min.js"></script>
<script src="https://staticfile.batdongsan.com.vn/js/Product/filestatic.ver202011121057.msvbds.FrontEnd.Product.ProductHome.min.js"></script>

<script type="text/javascript">
var params = {
    formSubmit: "#formSubmit",
    loadContent: "#contentPage",
    ddlSortBy: "#ddlSortBy",
    tabActive: ".tabactive",
    tabIndexValue: "#tabIndexValue",
    sortValue: "#sortValue",
    urlListDistrict: '/Contacts/CommonData/GetListDistrictByCity',
    urlListStreet: '/Contacts/CommonData/GetStreetList',
    urlListWard: '/Contacts/CommonData/GetWardList',
    urlListRoom: '/Contacts/CommonData/GetRoomList',
    urlListDirection: '/Contacts/CommonData/GetDirectionList',
    urlListProject: '/Contacts/CommonData/GetListProjectByDistrict',
    urlListSubCate: '/Contacts/CommonData/GetCategoryByParentId',
    urlListPrice: '/Contacts/CommonData/GetPriceList',
    suggestionApi: {
        apiForSell: 'https://suggestion1.batdongsan.com.vn/',
        apiForRent: 'https://suggestion2.batdongsan.com.vn/'
    }
};

var productHome = new product.ProductHome();
productHome.InitializeLoad(params);

var hdbCategory = $('#divCategory').AdvanceHiddenDropbox({
    id: 'divCatagoryOptions',
    hddValue: 'hdCboCatagory'
});
</script>

<script type="text/javascript">
try {
    var script_imported = document.createElement('script');
    script_imported.src = 'https://log.batdongsan.com.vn/js/bds/bds-msv-log.min.js?hv=2&amp;dv=' + (new Date().toJSON().slice(0, 10));
    if (document.body != null && document.body != undefined) {
        document.body.appendChild(script_imported);
    } else {
        document.head.appendChild(script_imported);
    }
} catch (e) { }
</script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
    var lazyImages = [].slice.call(document.querySelectorAll('[src-lazy]'));
    window.countOfLazyImages = lazyImages.length;
    if ('IntersectionObserver' in window) {
        let lazyImageObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    let lazyImage = entry.target;
                    if (lazyImage.attributes['src-lazy']) {
                        lazyImage.src = lazyImage.attributes['src-lazy'].value;
                        lazyImage.removeAttribute('src-lazy');
                        lazyImageObserver.unobserve(lazyImage);
                    }
                };
            });
        });
        lazyImages.forEach(function (lazyImage, i) {
            lazyImage.setAttribute('lazy-id', i);
            lazyImageObserver.observe(lazyImage);
        });
        (function checkDuplicate() {
            var countOfLazyElements = [].slice.call(document.querySelectorAll('[lazy-id]'));
            if (countOfLazyElements.length > window.countOfLazyImages) {
                var elements = [].slice.call(document.querySelectorAll('[src-lazy]'));
                elements.forEach(element => {
                    var lazyId = element.attributes['lazy-id'].value;
                    var lazyElements = [].slice.call(document.querySelectorAll(`[lazy-id="${lazyId}"]`));
                    if (lazyElements.length > 1) {
                        for (var i = 1; i < lazyElements.length; i++) {
                            var lazyElement = lazyElements[i];
                            lazyImageObserver.observe(lazyElement);
                            lazyElement.setAttribute('lazy-id', window.countOfLazyImages);
                            window.countOfLazyImages++;
                        }
                    }
                });
            }
            setTimeout(checkDuplicate, 1000)
        })();
    } else {
        $('[src-lazy]').each(function () {
            this.src = this.attributes['src-lazy'].value;
            this.removeAttribute('src-lazy');
        });
    }
});
</script>
@endsection