@extends('layouts.master')

@section('title', 'Khách kẹt tiền cần bán nhanh lô đất Biên Hòa New City, DT 5 x 20m, 6 x 20m, 12 x 20m, đã nhận sổ')

@section('styles')
<link rel="stylesheet" href="./assets/css/bien_hoa1.css">
<link rel="stylesheet" href="./assets/css/bien_hoa2.css">
<link rel="stylesheet" href="./assets/css/filestatic.ver202011121105.msvbds.FrontEnd.Product.ProductDetails.min.css">
<link href="https://file4.batdongsan.com.vn/images/icon-bds.ico" rel="shortcut icon" type="image/x-icon">
<link rel="next" href="https://batdongsan.com.vn/ban-can-ho-chung-cu/p2">
<style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style>
<style media="print" class="jx_ui_StyleSheet" __jx__id="___$_2" type="text/css">.zopim { display: none !important }</style>
@endsection

@section('content')

<body class="bg-site">
<form id="boxSearchForm" action="https://batdongsan.com.vn/microservice-architecture-router/Product/ProductSearch/Index" method="post" novalidate="novalidate">
    <div class="search-bar shadow-lv-1 clearfix">
        <ul class="search-bar-tab mar-left-16 pad-top-8 mar-right-16">
            <li class="actived" ptype="38">Bán</li>
            <li ptype="49">Cho thuê</li>
        </ul>
        <input data-val="true" data-val-required="The CateId field is required." id="type" name="CateId" type="hidden" value="38">

        <div class="search-bar-suggestion pad-top-8 mar-right-16">
            <input type="hidden" id="suggestionTemp">
            <input id="Keyword" name="Keyword" type="hidden" value="">
            <input type="text" placeholder="Tìm kiếm địa điểm, khu vực" value="" class="search-bar-input ui-autocomplete-input" id="search-suggestion" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
            <span class="icon-close hiding">
                <img src="./assets/image/ic_close.png">
            </span>
        </div>
        <div id="divCategoryRe" class="select-control select-cate">
            <div class="select-control-label">
                <div class="dropbox-label">Loại nhà đất</div>
                <div class="custom-value">Tất cả</div>
            </div>
            <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="0">
            <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                    <li vl="0"><span class="active current">Tất cả nhà đất</span></li>
                                    <li vl="324"><span>Căn hộ chung cư</span></li>
                                    <li vl="362"><span>Các loại nhà bán</span>
                                        <ul>
                                            <li vl="41"><span>Nhà riêng</span></li>
                                            <li vl="325"><span>Nhà biệt thự, liền kề</span></li>
                                            <li vl="163"><span>Nhà mặt phố</span></li>
                                        </ul>
                                    </li>
                                    <li vl="361"><span>Các loại đất bán</span>
                                        <ul>
                                            <li vl="40"><span>Đất nền dự án</span></li>
                                            <li vl="283"><span>Bán đất</span></li>
                                        </ul>
                                    </li>
                                    <li vl="44"><span>Trang trại, khu nghỉ dưỡng</span></li>
                                    <li vl="45"><span>Kho, nhà xưởng</span></li>
                                    <li vl="48"><span>Bất động sản khác</span></li>
                                </ul></div></div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
        </div>
        <div class="select-control city-control">
            <div class="select-control-label">
                <div class="dropbox-label">Khu vực</div>
                <div class="custom-value city-label">Toàn quốc</div>
            </div>
            <div class="select-context custom-dropbox advance-select-options hiding" id="divCity" style="display: none;">
                <div class="city-root hiding"></div>
                <input type="text" id="select-context-content" class="select-text-content" placeholder="Tìm Tỉnh/ Thành phố">
                <input type="hidden" name="CityCode" id="hdCboCity" value="CN">
                <input type="hidden" name="DistrictId" id="hdCboDistrict" value="">
                <div id="divCityOptions" class="custom-scroll mCustomScrollbar _mCS_4 mCS_no_scrollbar" hddvalue="hdCboCity,hdCboDistrict" defaulttext="Toàn quốc" ddlid="divCity" currlevel="1" style=""><div id="mCSB_4" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                    <ul class="advance-options"><li vl="CN" class="advance-options adv-arrow active">Toàn quốc</li><li vl="SG" class="advance-options adv-arrow">Hồ Chí Minh</li><li vl="HN" class="advance-options adv-arrow">Hà Nội</li><li vl="DDN" class="advance-options adv-arrow">Đà Nẵng</li><li vl="BD" class="advance-options adv-arrow">Bình Dương</li><li vl="DNA" class="advance-options adv-arrow">Đồng Nai</li><li vl="KH" class="advance-options adv-arrow">Khánh Hòa</li><li vl="HP" class="advance-options adv-arrow">Hải Phòng</li><li vl="LA" class="advance-options adv-arrow">Long An</li><li vl="QNA" class="advance-options adv-arrow">Quảng Nam</li><li vl="VT" class="advance-options adv-arrow">Bà Rịa Vũng Tàu</li><li vl="DDL" class="advance-options adv-arrow">Đắk Lắk</li><li vl="CT" class="advance-options adv-arrow">Cần Thơ</li><li vl="BTH" class="advance-options adv-arrow">Bình Thuận  </li><li vl="LDD" class="advance-options adv-arrow">Lâm Đồng</li><li vl="TTH" class="advance-options adv-arrow">Thừa Thiên Huế</li><li vl="KG" class="advance-options adv-arrow">Kiên Giang</li><li vl="BN" class="advance-options adv-arrow">Bắc Ninh</li><li vl="QNI" class="advance-options adv-arrow">Quảng Ninh</li><li vl="TH" class="advance-options adv-arrow">Thanh Hóa</li><li vl="NA" class="advance-options adv-arrow">Nghệ An</li><li vl="HD" class="advance-options adv-arrow">Hải Dương</li><li vl="GL" class="advance-options adv-arrow">Gia Lai</li><li vl="BP" class="advance-options adv-arrow">Bình Phước</li><li vl="HY" class="advance-options adv-arrow">Hưng Yên</li><li vl="BDD" class="advance-options adv-arrow">Bình Định</li><li vl="TG" class="advance-options adv-arrow">Tiền Giang</li><li vl="TB" class="advance-options adv-arrow">Thái Bình</li><li vl="BG" class="advance-options adv-arrow">Bắc Giang</li><li vl="HB" class="advance-options adv-arrow">Hòa Bình</li><li vl="AG" class="advance-options adv-arrow">An Giang</li><li vl="VP" class="advance-options adv-arrow">Vĩnh Phúc</li><li vl="TNI" class="advance-options adv-arrow">Tây Ninh</li><li vl="TN" class="advance-options adv-arrow">Thái Nguyên</li><li vl="LCA" class="advance-options adv-arrow">Lào Cai</li><li vl="NDD" class="advance-options adv-arrow">Nam Định</li><li vl="QNG" class="advance-options adv-arrow">Quảng Ngãi</li><li vl="BTR" class="advance-options adv-arrow">Bến Tre</li><li vl="DNO" class="advance-options adv-arrow">Đắk Nông</li><li vl="CM" class="advance-options adv-arrow">Cà Mau</li><li vl="VL" class="advance-options adv-arrow">Vĩnh Long</li><li vl="NB" class="advance-options adv-arrow">Ninh Bình</li><li vl="PT" class="advance-options adv-arrow">Phú Thọ</li><li vl="NT" class="advance-options adv-arrow">Ninh Thuận</li><li vl="PY" class="advance-options adv-arrow">Phú Yên</li><li vl="HNA" class="advance-options adv-arrow">Hà Nam</li><li vl="HT" class="advance-options adv-arrow">Hà Tĩnh</li><li vl="DDT" class="advance-options adv-arrow">Đồng Tháp</li><li vl="ST" class="advance-options adv-arrow">Sóc Trăng</li><li vl="KT" class="advance-options adv-arrow">Kon Tum</li><li vl="QB" class="advance-options adv-arrow">Quảng Bình</li><li vl="QT" class="advance-options adv-arrow">Quảng Trị</li><li vl="TV" class="advance-options adv-arrow">Trà Vinh</li><li vl="HGI" class="advance-options adv-arrow">Hậu Giang</li><li vl="SL" class="advance-options adv-arrow">Sơn La</li><li vl="BL" class="advance-options adv-arrow">Bạc Liêu</li><li vl="YB" class="advance-options adv-arrow">Yên Bái</li><li vl="TQ" class="advance-options adv-arrow">Tuyên Quang</li><li vl="DDB" class="advance-options adv-arrow">Điện Biên</li><li vl="LCH" class="advance-options adv-arrow">Lai Châu</li><li vl="LS" class="advance-options adv-arrow">Lạng Sơn</li><li vl="HG" class="advance-options adv-arrow">Hà Giang</li><li vl="BK" class="advance-options adv-arrow">Bắc Kạn</li><li vl="CB" class="advance-options adv-arrow">Cao Bằng</li></ul>
                </div><div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
            </div>
        </div>

        <div class="select-control price-control">
            <div class="select-control-label">
                <div class="dropbox-label">Mức giá</div>
                <div class="custom-value">Tất cả</div>
            </div>
            <div id="divPrice" class="select-area-option custom-dropbox hiding advance-select-options" style="display: none;">
                <input type="hidden" id="hdCboPrice" name="PriceId" value="-1">
                <div class="pad-bot-40 pad-top-8">
                    <div class="price-slider-range slider-range">
                        <input id="txtPriceMinValue" name="MinPrice" placeholder="Từ" class="min-value advance-options" maxlength="6" numbersonly="true" decimal="true" type="text">
                        <span><img src="./assets/image/ic_arrow_left.png"></span>
                        <input id="txtPriceMaxValue" name="MaxPrice" placeholder="Đến" class="max-value advance-options" maxlength="6" numbersonly="true" decimal="true" type="text">
                        <div class="clearfix pad-bot-16"></div>
                        <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
                    </div>
                    <div class="custom-scroll mCustomScrollbar _mCS_5 mCS_no_scrollbar" id="divPriceOptions" minvalue="txtPriceMinValue" maxvalue="txtPriceMaxValue" unit="money" lblmin="lblPriceMin" lblmax="lblPriceMax" hddvalue="hdCboPrice" defaulttext="Tất cả" ddlid="divPrice" currlevel="1" style=""><div id="mCSB_5" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_5_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                        <ul class="advance-options"><li vl="-1" class="advance-options active">Tất cả</li><li vl="0" class="advance-options">Thỏa thuận</li><li vl="1" class="advance-options">&lt; 500 triệu</li><li vl="2" class="advance-options">500<span class="arrow-icon"></span>800 triệu</li><li vl="3" class="advance-options">800 triệu<span class="arrow-icon"></span>1 tỷ</li><li vl="4" class="advance-options">1<span class="arrow-icon"></span>2 tỷ</li><li vl="5" class="advance-options">2<span class="arrow-icon"></span>3 tỷ</li><li vl="6" class="advance-options">3<span class="arrow-icon"></span>5 tỷ</li><li vl="7" class="advance-options">5<span class="arrow-icon"></span>7 tỷ</li><li vl="8" class="advance-options">7<span class="arrow-icon"></span>10 tỷ</li><li vl="9" class="advance-options">10<span class="arrow-icon"></span>20 tỷ</li><li vl="10" class="advance-options">20<span class="arrow-icon"></span>30 tỷ</li><li vl="11" class="advance-options">&gt; 30 tỷ</li></ul>
                    </div><div id="mCSB_5_scrollbar_vertical" class="mCSB_scrollTools mCSB_5_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_5_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                    <div class="select-reset price-reset">Đặt lại</div>
                </div>

            </div>
        </div>
        <div class="select-control area-control">
            <div class="select-control-label">
                <div class="dropbox-label">Diện tích</div>
                <div class="custom-value">Tất cả</div>
            </div>
            <div id="divArea" class="select-area-option custom-dropbox hiding advance-select-options" style="display: none;">
                <input type="hidden" id="hdCboArea" name="AreaId" value="-1">
                <div class="pad-bot-40 pad-top-8">
                    <div class="area-slider-range slider-range">
                        <input id="txtAreaMinValue" name="MinArea" placeholder="Từ" class="min-value" maxlength="6" numbersonly="true" decimal="true" type="text">
                        <span><img src="./assets/image/ic_arrow_left.png"></span>
                        <input id="txtAreaMaxValue" name="MaxArea" placeholder="Đến" class="max-value" maxlength="6" numbersonly="true" decimal="true" type="text">
                        <div class="clearfix pad-bot-16"></div>
                        <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
                    </div>
                    <div class="custom-scroll mCustomScrollbar _mCS_6 mCS_no_scrollbar" id="divAreaOptions" minvalue="txtAreaMinValue" maxvalue="txtAreaMaxValue" unit="area" hddvalue="hdCboArea" defaulttext="Tất cả" ddlid="divArea" currlevel="1" style=""><div id="mCSB_6" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_6_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                        <ul>
                            <li vl="-1" class="advance-options active">Tất cả</li>
                            <li vl="1" class="advance-options">0<span class="arrow-icon"></span>30 m²</li>
                            <li vl="2" class="advance-options">30 m²<span class="arrow-icon"></span>50 m²</li>
                            <li vl="3" class="advance-options">50 m²<span class="arrow-icon"></span>80 m²</li>
                            <li vl="4" class="advance-options">80 m²<span class="arrow-icon"></span>100 m²</li>
                            <li vl="5" class="advance-options">100 m²<span class="arrow-icon"></span>150 m²</li>
                            <li vl="6" class="advance-options">150 m²<span class="arrow-icon"></span>200 m²</li>
                            <li vl="7" class="advance-options">200 m²<span class="arrow-icon"></span>250 m²</li>
                            <li vl="8" class="advance-options">250 m²<span class="arrow-icon"></span>300 m²</li>
                            <li vl="9" class="advance-options">300 m²<span class="arrow-icon"></span>500 m²</li>
                            <li vl="10" class="advance-options">&gt;= 500 m²</li>
                        </ul>
                    </div><div id="mCSB_6_scrollbar_vertical" class="mCSB_scrollTools mCSB_6_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_6_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                    <div class="select-reset area-reset">Đặt lại</div>
                </div>

            </div>
        </div>
        <div class="select-control project-control" aria-label="Bạn hãy chọn tỉnh thành trước" data-microtip-position="top" role="tooltip">
            <div class="select-control-label">
                <div class="dropbox-label">Dự án</div>
                <div class="custom-value custom-value-project">Tất cả</div>
            </div>
            <div id="divProjects" class="select-context custom-dropbox advance-select-options hiding" style="display: none;">
                <input type="hidden" id="hdCboProjects" name="ProjectId" value="0">
                <input type="text" class="select-text-content" value="" placeholder="Tìm Dự án">
                <div id="divProjectsOptions" class="custom-scroll mCustomScrollbar _mCS_7 mCS_no_scrollbar" hddvalue="hdCboProjects" defaulttext="Tất cả" ddlid="divProjects" currlevel="1" style=""><div id="mCSB_7" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_7_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                    <ul class="advance-options"><li vl="0" class="advance-options active">Tất cả</li></ul>
                </div><div id="mCSB_7_scrollbar_vertical" class="mCSB_scrollTools mCSB_7_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_7_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
            </div>
        </div>
        <div class="select-control filter-control">
            <div class="select-control-label" aria-label="Tìm kiếm nâng cao" data-microtip-position="top" role="tooltip">
                Lọc thêm<span class="filter-info"><img src="./assets/image/ic_filter.svg" class="icon-filter"><span class="icon-number" style="display: none;"></span></span>
            </div>
            <input type="hidden" id="hdbFilter" value="0">
            <div class="select-filter-dropbox custom-dropbox advance-select-options hiding" style="display: none; height: 516px;">
                <div class="custom-scroll-outside mCustomScrollbar _mCS_9 mCS_no_scrollbar" style="position: relative; overflow: visible; max-height: 460px;"><div id="mCSB_9" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_outside" tabindex="0" style="max-height: 0px;"><div id="mCSB_9_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                    <div class="search-bar-filter"></div>

                    <div class="relative-control select-context">
                        <label class="mar-top-8">Phường/ Xã</label>
                        <div id="divWard" class="relative-control" aria-label="Bạn hãy chọn quận huyện trước" data-microtip-position="top" role="tooltip">
                            <div class="filter-label"><span>Tất cả phường, xã</span><i class="icon-arrow icon-arrow-down"></i></div>
                            <input type="hidden" id="hdCboWard" name="WardId" value="0">
                            <input type="text" placeholder="Tìm Phường, Xã" value="" class="select-text-content icon-arrow-up hiding" style="display: none;">
                        </div>
                    </div>

                    <div class="relative-control select-context">
                        <label>Đường/ Phố</label>
                        <div id="divStreet" class="relative-control" aria-label="Bạn hãy chọn tỉnh thành trước" data-microtip-position="top" role="tooltip">
                            <div class="filter-label"><span>Tất cả đường, phố</span><i class="icon-arrow icon-arrow-down"></i></div>
                            <input type="hidden" id="hdCboStreet" name="StreetId" value="0">
                            <input type="text" placeholder="Tìm Đường/ Phố" value="" class="select-text-content hiding icon-arrow-up" style="display: none;">
                        </div>
                    </div>

                    <div id="divBedRoom" class="select-bedroom ul-new clearfix">
                        <label>Phòng ngủ</label>
                        <input type="hidden" id="hdCboBedRoom" name="RoomId" value="-1">
                        <div id="divBedRoomOptions" hddvalue="hdCboBedRoom" ddlid="divBedRoom" currlevel="1">
                            <ul>
                                <li vl="-1" class="advance-options">Tất cả</li>
                                <li vl="1" class="advance-options">1+</li>
                                <li vl="2" class="advance-options">2+</li>
                                <li vl="3" class="advance-options">3+</li>
                                <li vl="4" class="advance-options">4+</li>
                            </ul>
                        </div>
                    </div>

                    <div class="relative-control select-context">
                        <label>Hướng nhà</label>
                        <div id="divHomeDirection" class="relative-control">
                            <div class="filter-label"><span>Tất cả hướng nhà</span><i class="icon-arrow icon-arrow-down"></i></div>
                            <input type="text" placeholder="Tìm hướng nhà" value="Tất cả hướng nhà" class="select-text-content hiding icon-arrow-up" style="display: none;">
                            <input type="hidden" id="hdCboHomeDirection" name="DirectionId" value="">
                        </div>
                    </div>

                    <div id="divMedia" class="select-media-type ul-new clearfix">
                        <label>Loại tin đăng</label>
                        <input type="hidden" id="hdCboMedia" name="TabIndex" value="0">
                        <div id="divMediaOptions" hddvalue="hdCboMedia" ddlid="divMedia" currlevel="1">
                            <ul>
                                <li vl="0">Tất cả</li>
                                <li vl="1">Hình ảnh</li>
                                <li vl="2">Video</li>
                                <li vl="4">3D &amp; 360°</li>
                            </ul>
                        </div>
                    </div>
                </div></div><div id="mCSB_9_scrollbar_vertical" class="mCSB_scrollTools mCSB_9_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_9_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
                <div class="select-reset filter-reset">Đặt lại</div>
            </div>
            <!--khuvu loc them -->
            <div id="divWardOptions" ddlid="divWard" class="fly-options custom-dropbox custom-dropbox hiding  advance-select-options mCustomScrollbar _mCS_1 mCS_no_scrollbar" hddvalue="hdCboWard" isfilter="true" currlevel="1" style="display: none;"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 48px;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                <ul class="advance-options"><li vl="0" class="advance-options active">Tất cả phường, xã</li></ul>
            </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>

            <div id="divStreetOptions" ddlid="divStreet" class="fly-options custom-dropbox custom-dropbox hiding advance-select-options mCustomScrollbar _mCS_2 mCS_no_scrollbar" hddvalue="hdCboStreet" isfilter="true" currlevel="1" style="display: none;"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 48px;"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                <ul class="advance-options"><li vl="0" class="advance-options active">Tất cả đường, phố</li></ul>
            </div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>

            <div id="divHomeDirectionOptions" ddlid="divHomeDirection" class="hiding fly-options custom-dropbox custom-scroll advance-select-options mCustomScrollbar _mCS_8 mCS_no_scrollbar" hddvalue="hdCboHomeDirection" isfilter="true" currlevel="1" style="display: none;"><div id="mCSB_8" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 308px;"><div id="mCSB_8_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                <ul class="advance-options">
                    <li vl="-1" class="advance-options active">Tất cả hướng nhà</li>
                    <li vl="1" class="advance-options">Đông</li>
                    <li vl="2" class="advance-options">Tây</li>
                    <li vl="3" class="advance-options">Nam</li>
                    <li vl="4" class="advance-options">Bắc</li>
                    <li vl="5" class="advance-options">Đông-Bắc</li>
                    <li vl="6" class="advance-options">Tây-Bắc</li>
                    <li vl="7" class="advance-options">Tây-Nam</li>
                    <li vl="8" class="advance-options">Đông-Nam</li>
                </ul>
            </div><div id="mCSB_8_scrollbar_vertical" class="mCSB_scrollTools mCSB_8_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_8_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
        </div>


        <input type="button" id="btnSearch" class="btn-blue-7" value="Tìm kiếm">
        <div id="link-reset" aria-label="Xóa tiêu chí lọc" data-microtip-position="bottom" role="tooltip"><img src="./assets/image/ic_reset.svg"></div>
    </div>
</form>
<script type="text/javascript">
    ///<reference path='../../../../../../../DVG.BDS.WebApp.FrontEnd.StaticFiles/wwwroot/js/Common/FrontEnd.BoxSearch.js' />
    (function getData() {
        if (window.FrontEnd && window.FrontEnd.BoxSearch) {
            var boxSearchServices = new FrontEnd.BoxSearch({
                boxSearchDataCacheKey: 'BoxSearchData',
                boxSearchDataCacheTime: 120,
                getDataForBoxSearchUrl: '/Systems/Home/GetDataForBoxSearch'
            })

            boxSearchServices.GetData().then(function (data) {
                (function callJQuery() {
                    if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.BoxProductSearchBinnova) {
                        new FrontEnd.Product.BoxProductSearchBinnova({
                            cities: data.cities,
                            prices: data.priceLevels,
                            url: '/Product/ProductSearch',
                            serverCss: 'https://staticfile.batdongsan.com.vn',
                            model: {
                                type: 38,
                                categoryId: 0,
                                cityCode: 'CN',
                                districtId: 0,
                                projectId: 0,
                                priceId: -1,
                                maxPrice: !!'' ? +'' : undefined,
                                minPrice: !!'' ? +'' : undefined,
                                areaId: -1,
                                maxArea: !!'' ? +'' : undefined,
                                minArea: !!'' ? +'' : undefined,
                                roomId: -1,
                                wardId: -1 < 0 ? 0 : -1,
                                streetId: (-1 < 0 ? 0 : -1),
                                directionId: 0,
                                tabIndex: 0
                            },
                            maxSearchingHistoriesLength: 20,
                            syncTimeSearchingHistories: 5,
                            syncSearchingHistoriesUrl: '/Product/ProductSearch/SyncSearchingHistories',
                            removeSearchingHistoryUrl: '/Product/ProductSearch/RemoveSearchingHistory'
                        });
                    } else {
                        setTimeout(callJQuery, 100);
                    }
                })();
            })
        } else {
            setTimeout(getData, 100);
        }
    })();
</script>

        <div class="popupMarking  save" style="display: none">
            <img src="./assets/image/ic_unsave.svg">
            <span> Lưu tin thành công</span>
        </div>
        <div class="popupMarking  unsave" style="display: none">
            <img src="./assets/image/ic_save.svg">
            <span> Đã bỏ lưu tin</span>
        </div>




<!-- Product-detail-->
<div class="main-container clearfix">
    <div class="main-left">
        <section class="product-detail">
            <!--start slide-product-->
            <!--end slide-product-->
            <!--start description-->
            




    <div class="slide-product" tabindex="0">
        <div class="swiper-container gallery-top swiper-container-initialized swiper-container-horizontal">
            <ul class="swiper-wrapper list-unstyled row" style="transform: translate3d(0px, 0px, 0px);">
                                                                        <li class="swiper-slide swiper-slide-active" data-filter="image" data-index="0" style="width: 840px; margin-right: 10px;">
                            <a onmouseover="this.style.cursor=&#39;pointer&#39;" style="background-image: url(&quot;https://file4.batdongsan.com.vn/resize/745x510/2020/11/11/20201111095750-3277_wm.jpg&quot;); cursor: pointer;">
                            </a>
                            <div class="ioverlay" style="display: none;">
                                <img class="img-responsive" onmouseover="this.style.cursor=&#39;pointer&#39;" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="./assets/image/20201111095750-3277_wm.jpg" is-lazy-image="true" lazy-id="0">
                            </div>
                        </li>
                        <li class="swiper-slide swiper-slide-next" data-filter="image" data-index="1" style="width: 840px; margin-right: 10px;">
                            <a onmouseover="this.style.cursor=&#39;pointer&#39;" style="background-image:url(&#39;https://file4.batdongsan.com.vn/resize/745x510/2020/11/11/20201111095757-9bf4_wm.jpg&#39;)">
                            </a>
                            <div class="ioverlay">
                                <img class="img-responsive" onmouseover="this.style.cursor=&#39;pointer&#39;" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="./assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/resize/745x510/2020/11/11/20201111095757-9bf4_wm.jpg" is-lazy-image="true" lazy-id="1">
                            </div>
                        </li>
                        <li class="swiper-slide" data-filter="image" data-index="2" style="width: 840px; margin-right: 10px;">
                            <a onmouseover="this.style.cursor=&#39;pointer&#39;" style="background-image:url(&#39;https://file4.batdongsan.com.vn/resize/745x510/2020/11/11/20201111095817-45e1_wm.jpg&#39;)">
                            </a>
                            <div class="ioverlay">
                                <img class="img-responsive" onmouseover="this.style.cursor=&#39;pointer&#39;" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="./assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/resize/745x510/2020/11/11/20201111095817-45e1_wm.jpg" is-lazy-image="true" lazy-id="2">
                            </div>
                        </li>
            </ul>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-fraction"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">3</span></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next slide-next1" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><img src="./assets/image/ic_carousel_caret_right.png"> </div>
                <div class="swiper-button-prev slide-prev1 swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"><img src="./assets/image/ic_carousel_caret_left.png"></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        <div class="swiper-container gallery-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-free-mode swiper-container-thumbs">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                                                        <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" style="margin-right: 8px;">
                            <img onmouseover="this.style.cursor=&#39;pointer&#39;" alt="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" title="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/20201111095750-3277_wm(1).jpg" is-lazy-image="true" lazy-id="3">
                        </div>
                        <div class="swiper-slide swiper-slide-visible swiper-slide-next" style="margin-right: 8px;">
                            <img onmouseover="this.style.cursor=&#39;pointer&#39;" alt="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" title="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/20201111095757-9bf4_wm.jpg" is-lazy-image="true" lazy-id="4">
                        </div>
                        <div class="swiper-slide swiper-slide-visible" style="margin-right: 8px;">
                            <img onmouseover="this.style.cursor=&#39;pointer&#39;" alt="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" title="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/20201111095817-45e1_wm.jpg" is-lazy-image="true" lazy-id="5">
                        </div>
            </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        <!-- Initialize Swiper -->
    </div>
    <!--slide-product-->
    <div id="popup">
        <div class="icon-close"></div>
        <div class="popup-choice pad-16">
            <ul>
                                                    <li data-filter="image">Ảnh</li>
                <li data-filter="map">Bản đồ</li>
            </ul>
        </div>
            <div class="popup-pagination">
                <div class="swiper-pagination-full swiper-pagination-fraction"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">3</span></div>
                <div class="swiper-pagination-full-360 swiper-pagination-fraction hidden">
                    <span class="swiper-pagination-current">0</span> / <span class="swiper-pagination-total">0</span>
                </div>
            </div>
        <div class="content">
            <div class="slide-content slide-3d">
                <iframe frameborder="0" width="840" height="473" scrolling="no" src="./assets/image/saved_resource(6).html" allowfullscreen=""></iframe>
            </div>
            <div class="slide-content slide-360 group-img360" id="photo360">
                <div class="view-full">
                    <div class="view-img360">
                        <div id="divPhoto360Active" class="show-img">
                            <div class="top-controls">
                                <span id="btnCloseFullscreen" class="close-popup360"></span>
                                <ul class="nav-img360">
                                    <li>
                                        <span class="nav" id="zoom-in">
                                            <i class="icon360-zoomin"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="nav" id="zoom-out">
                                            <i class="icon360-zoomout"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="nav" id="pan-left">
                                            <i class="icon360-prev"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="nav" id="pan-right">
                                            <i class="icon360-next"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="nav" id="pan-up">
                                            <i class="icon360-up"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="nav" id="pan-down">
                                            <i class="icon360-down"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="nav" id="auto-rotate">
                                            <i class="icon360-reload"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="nav" id="fullscreen">
                                            <i class="icon360-viewfull"></i>
                                        </span>
                                    </li>
                                </ul>
                            <div class="control-popup360"><span class="prev-thumb360"></span><div class="thumb-img360 swiper-container"><ul class="list-thumb360 swiper-wrapper">null</ul></div><span class="next-thumb360"></span></div></div>
                        </div>
                        <div id="titImg360" class="tit-img"></div>
                    </div>
                </div>

            </div>
            <div class="slide-content slide-image">

                <div class="swiper-container gallery-top-full swiper-container-initialized swiper-container-horizontal">
                    <ul class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                                        <li class="swiper-slide swiper-slide-active" style="width: 1576px;">
                                    <img alt="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="./assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/2020/11/11/20201111095750-3277_wm.jpg" is-lazy-image="true" lazy-id="6">
                                </li>
                                <li class="swiper-slide swiper-slide-next" style="width: 1576px;">
                                    <img alt="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="./assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/2020/11/11/20201111095757-9bf4_wm.jpg" is-lazy-image="true" lazy-id="7">
                                </li>
                                <li class="swiper-slide" style="width: 1576px;">
                                    <img alt="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="./assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/2020/11/11/20201111095817-45e1_wm.jpg" is-lazy-image="true" lazy-id="8">
                                </li>
                    </ul>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                <div class="swiper-container gallery-thumbs-full swiper-container-initialized swiper-container-horizontal swiper-container-thumbs" style="max-width: 360px;">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                                        <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" style="margin-right: 8px;">
                                    <img alt="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" title="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="./assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/2020/11/11/20201111095750-3277_wm.jpg" is-lazy-image="true" lazy-id="9">
                                </div>
                                <div class="swiper-slide swiper-slide-visible swiper-slide-next" style="margin-right: 8px;">
                                    <img alt="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" title="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="./assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/2020/11/11/20201111095757-9bf4_wm.jpg" is-lazy-image="true" lazy-id="10">
                                </div>
                                <div class="swiper-slide swiper-slide-visible" style="margin-right: 8px;">
                                    <img alt="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" title="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src-preloading="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image.png" src="./assets/image/lazy-preview-image.png" src-lazy="https://file4.batdongsan.com.vn/2020/11/11/20201111095817-45e1_wm.jpg" is-lazy-image="true" lazy-id="11">
                                </div>
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
            <div class="slide-content slide-map"></div>
        </div>
    </div>
    <script type="text/javascript">
        (function callJQuery() {
            if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Details && window.FrontEnd.Product.Details.MediaSlide) {
                new FrontEnd.Product.Details.MediaSlide({})
            }
            else {
                setTimeout(callJQuery, 100);
            }
        })();
    </script>

<div class="breadcrumb all-grey-7 link-hover-blue">
    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an" level="1" title="Bán đất nền dự án tại Việt Nam">Bán</a><span>/</span><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-dong-nai" level="2" title="Bán đất nền dự án tại Đồng Nai">Đồng Nai</a><span>/</span><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-dna" level="3" title="Bán đất nền dự án tại Thành phố Biên Hòa">Biên Hòa</a><span>/</span><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-new-city" level="4" title="Bán đất nền dự án tại Biên Hòa New City">Đất nền dự án tại Biên Hòa New City</a>
</div>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Breadcrumbs) {
            new FrontEnd.Product.Breadcrumbs({});
        } else {
            setTimeout(callJQuery, 100);
        }
    })();
</script>

<div class="description" id="product-detail-web" uid="649852">
    <h1 class="tile-product"> KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ</h1>
    <div class="short-detail">
        Dự án Biên Hòa New City, Phố Nam Cao, Phường Phước Tân, Biên Hòa, Đồng Nai
    </div>
    <div class="divide">&nbsp;</div>
    <div class="short-detail-wrap">
        <ul class="short-detail-2 clearfix pad-16">
            <li><span class="sp1">Mức giá:</span><span class="sp2">1.45 tỷ</span></li>
                <li><span class="sp1">Diện tích:</span><span class="sp2">100 m²</span></li>
                    </ul>
        <div class="repost">
            <span class="product-share">Chia sẻ <span class="ic_share">&nbsp;</span></span>
            <div class="box-share hidden">
                <ul>
                    <li>
                        <a id="facebook" target="_blank" rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072&amp;t=Kh%C3%A1ch%20k%E1%BA%B9t%20ti%E1%BB%81n%20c%E1%BA%A7n%20b%C3%A1n%20nhanh%20l%C3%B4%20%C4%91%E1%BA%A5t%20Bi%C3%AAn%20H%C3%B2a%20New%20City,%20DT%205%20x%2020m,%206%20x%2020m,%2012%20x%2020m,%20%C4%91%C3%A3%20nh%E1%BA%ADn%20s%E1%BB%95"><img src="./assets/image/ic_facebook.png">Facebook</a>
                    </li>
                    <li>
                        <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="blue" data-customize="true"><img src="./assets/image/ic_zalo.png">Zalo<iframe frameborder="0" allowfullscreen="" scrolling="no" width="0px" height="0px" src="./assets/image/share.html" style="position: absolute;"></iframe></div>
                    </li>
                    <li>
                        <a id="copyLink"><img src="./assets/image/ic_link.png">Sao chép liên kết</a>
                    </li>
                </ul>
            </div>
            <span class="product-save iconSave" data-productid="27748072" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Kh&amp;#225;ch kẹt tiền cần b&amp;#225;n nhanh l&amp;#244; đất Bi&amp;#234;n H&amp;#242;a New City, DT 5 x 20m, 6 x 20m, 12 x 20m, đ&amp;#227; nhận sổ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111095750-3277_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111095750-3277_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" data-price="1.45 tỷ" data-area="100 m²" data-pricesort="1450000000" data-areasort="100" data-room="" data-toilets="" data-address="Biên Hòa, Đồng Nai" data-description="Khách kẹt tiền muốn đẩy nhanh một số Lô Biên Hòa New City ở sân golf Long Thành. DT: 5 x 20m. 6 x 18m. 9 x 20 m. 12 x 20 m. Giá: 1.450 tỷ bao sang tên và ra sổ hồng. Tất cả đã có sổ hồng từng nền, mặ" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:58:51" data-contactname="Thái Bá Lợi" data-contactmobile="0946722227" data-totalmedia="3" data-url="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" data-createbyuser="649852">Lưu tin <span class="ic_save">&nbsp;</span></span>
        </div>
    </div>

    <div class="divide">&nbsp;</div>
    <div class="detail-product">
        <div class="detail-1 pad-bot-16">
            <span class="title-detail">Thông tin mô tả</span>
            <div class="des-product" style="overflow: visible;">
                Khách kẹt tiền muốn đẩy nhanh một số Lô Biên Hòa New City ở sân golf Long Thành.<br>DT:<br>5 x 20m.<br>6 x 18m.<br>9 x 20 m.<br>12 x 20 m.<br>Giá: 1.450 tỷ bao sang tên và ra sổ hồng.<br>Tất cả đã có sổ hồng từng nền, mặt tiền đường 24m, 18m, 15m, 13m.<br>Làm việc trực tiếp chính chủ thương lượng giá tốt nhất cho anh chị mua đầu tư hoặc để dành ở sau này.<br>LH: <span class="hidden-phone hidden-mobile des" raw="0903224939">0903224***</span> (Bá Lợi).<br><br>Một số thông tin cơ bản Biên Hòa New City.<br>- Hỗ trợ vay ngân hàng.<br>- Cơ sở hạ tầng hoàn chỉnh 100% (điện, đường, cây xanh, nước... ).<br>- Cắm mốc phân lô từng nền.<br>- Dự án đất nền Biên Hoà New City năm trong khu kinh tế trọng điểm, khu sân golf Long Thành kết nối Quốc Lộ 51, cao tốc Long Thành - Vũng Tàu, Hương Lộ 2 - Cầu Đồng Nai 2, bên cạnh khu đô thị Aqua City, Cách dự án Vincity - Quận 9 chỉ một cây cầu.<br>- Cầu Vàm Cái Sứt đã khởi công đi ngang dự án đến cao tốc Long Thành, rút ngắn đoạn đường về Quận 2, TP. HCM chỉ còn 20 phút.<br>- Tiện ích đẳng cấp tiêu chuẩn Quốc tế:<br>+ Quần thể sân golf, nhà hàng.<br>+ Khuôn viên lớn, công viên xanh tươi mát.<br>+ Khu thương mại, hồ bơi, phòng gym, spa, trường học, khu y tế.<br>+ An ninh 24/24.
            </div>
            <div class="box-view-more hidden">
                <div class="gradient">&nbsp;</div>
                <div class="view-more">Xem thêm<img src="./assets/image/ic_caret_down.svg"></div>
            </div>
            <div class="box-view-less hidden" style="display: block;">
                <div class="view-less">Thu gọn<img src="./assets/image/ic_caret_up.svg"></div>
            </div>
        </div>
        <div class="detail-2 pad-16">
            <span class="title-detail">Đặc điểm bất động sản</span>
            <div class="box-round-grey3">
                <div class="row-1"><span class="r1">Loại tin đăng:</span><span class="r2">Bán đất nền dự án (đất trong dự án quy hoạch)</span></div>
                <div class="row-1"><span class="r1">Địa chỉ:</span><span class="r2">Dự án Biên Hòa New City, Phố Nam Cao, Phường Phước Tân, Biên Hòa, Đồng Nai</span></div>
                                    <div class="row-1"><span class="r1">Đường vào:</span><span class="r2">13 (m)</span></div>
                                                                                                                                    <div class="row-1"><span class="r1">Pháp lý:</span><span class="r2">Có sổ</span></div>
            </div>
        </div>
            <div class="detail-2 pad-16">
                <span class="title-detail">Thông tin dự án</span>
                <div class="box-round-grey3">
                    <div class="row-1">
                        <span class="r1">Tên dự án:</span><span class="r2">
                            Biên Hòa New City<span class="dot">·</span>
                            <a href="https://batdongsan.com.vn/khu-do-thi-moi-bien-hoa-dna/bien-hoa-new-city-pj3684" target="_blank" class="link">Xem dự án</a>
                        </span>
                    </div>
                                            <div class="row-1"><span class="r1">Quy mô:</span><span class="r2">3.625 lô biệt thự, liền kề</span></div>
                </div>
            </div>
                <div class="detail-2 pad-16">
            <span class="title-detail">Xem trên bản đồ</span>
            <div class="map">
                <iframe width="100%" height="246px" ignore-lazy-loading="" frameborder="0" style="border:0" src="./assets/image/place.html" allowfullscreen=""></iframe>
                <div class="map-overlay"></div>
            </div>
        </div>
            <div class="tablet-box-contact clearfix">
        <h4 class="tablet-box-contact-title">Liên hệ</h4>
            <div class="avatar">
                        <span>L</span>
            </div>
        <div class="tablet-name">
            <div class="tablet-cell">
                    <div class="name" title="Thái Bá Lợi">
                        Thái Bá Lợi
                    </div>
                                    <div class="info">
                        <a href="https://batdongsan.com.vn/tin-rao-cung-nguoi-dang-nha-dat-ban-us649852">Xem thêm 1 tin khác</a>
                </div>
            </div>
        </div>
        <div class="btn-border-grey text-center"><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#divSendContact" id="btnSendContact">Yêu cầu liên hệ lại</a></div>               
    </div>       

        <!--start product seo tag-->
            <div class="product-seo-tag">
                <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>
                <ul class="ul-round clearfix">
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-gan-cong-vien-xanh-tuoi-mat-thanh-pho-bien-hoa" title="Bán đất nền gần công viên xanh tươi mát Thành phố Biên Hòa">Bán đất nền gần công viên xanh tươi mát Thành phố Biên Hòa</a></li>
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-gan-cau-dong-nai-thanh-pho-bien-hoa" title="Bán đất nền gần Cầu Đồng Nai Thành phố Biên Hòa">Bán đất nền gần Cầu Đồng Nai Thành phố Biên Hòa</a></li>
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-bien-hoa-new-city" title="Bán đất nền Biên Hòa New City">Bán đất nền Biên Hòa New City</a></li>
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-thanh-pho-bien-hoa" title="Bán đất nền Thành phố Biên Hòa">Bán đất nền Thành phố Biên Hòa</a></li>
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-gan-cau-vam-thanh-pho-bien-hoa" title="Bán đất nền gần Cầu Vàm Thành phố Biên Hòa">Bán đất nền gần Cầu Vàm Thành phố Biên Hòa</a></li>
                </ul>
            </div>
        <!--end product seo tag-->
        <div class="divide">&nbsp;</div>
        <div class="product-config pad-16">
            <ul class="short-detail-2 list2 clearfix">
                <li><span class="sp1">Ngày đăng:</span><span class="sp3">11/11/2020</span></li>
                <li><span class="sp1">Ngày hết hạn:</span><span class="sp3">21/11/2020</span></li>
                <li><span class="sp1">Loại tin:</span><span class="sp3">Tin Vip đặc biệt</span></li>
                <li><span class="sp1">Mã tin:</span><span class="sp3">27748072</span></li>
            </ul>
            <div class="repost"><a id="report">Báo cáo<span class="ic_report">&nbsp;</span></a></div>
            <div class="pl-popup fb-popup" id="popup_feedback" style="display: none;">
    <div class="pl-popup-title fb-popup">
        <span class="fb-popup">Tin rao có các thông tin không đúng:</span>
        <div id="pl-popup-close" class="fb-popup">X</div>
    </div>
    <div class="pl-popup-tab fb-popup">
        <div class="button current fb-popup" rel="info">Tin rao</div>
        <div class="button fb-popup" rel="map">Bản đồ</div>
        <div class="pl-popup-tab-content tab-info fb-popup">
            <label for="info-1" class="fb-popup">
                <input type="checkbox" id="info-1" class="fb-popup" value="Địa chỉ của bất động sản">Địa chỉ của bất động sản
            </label>
            <label for="info-2" class="fb-popup">
                <input type="checkbox" id="info-2" class="fb-popup" value=" Các thông tin về đặc điểm: giá, diện tích, mô tả ....">Các thông tin về đặc điểm: giá, diện tích, mô tả ....
            </label>
            <label for="info-3" class="fb-popup">
                <input type="checkbox" id="info-3" class="fb-popup" value="Ảnh">Ảnh
            </label>
            <label for="info-4" class="fb-popup">
                <input type="checkbox" id="info-4" class="fb-popup" value="Trùng với tin rao khác">Trùng với tin rao khác
            </label>
            <label for="info-5" class="fb-popup">
                <input type="checkbox" id="info-5" class="fb-popup" value="Không liên lạc được">Không liên lạc được
            </label>
            <label for="info-6" class="fb-popup">
                <input type="checkbox" id="info-7" class="fb-popup" value="Tin không có thật">Tin không có thật
            </label>
            <label for="info-7" class="fb-popup">
                <input type="checkbox" id="info-8" class="fb-popup" value="Bất động sản đã bán">Bất động sản đã bán
            </label>
            <label class="fb-popup">Phản hồi khác:</label>
            <textarea cols="20" rows="5" id="info-9" class="fb-popup"></textarea>
        </div>
        <div class="pl-popup-tab-content tab-map fb-popup">
            <label for="map-1" class="fb-popup">
                <input type="checkbox" id="map-1" class="fb-popup" value="Tốc độ load chậm">Tốc độ load chậm
            </label>
            <label for="map-2" class="fb-popup">
                <input type="checkbox" id="map-2" class="fb-popup" value="Vị trí bất động sản chưa chính xác">Vị trí bất động sản chưa chính xác
            </label>
            <label for="map-3" class="fb-popup">
                <input type="checkbox" id="map-3" class="fb-popup" value="Vị trí tiện ích chưa chính xác">Vị trí tiện ích chưa chính xác
            </label>
            <label for="map-4" class="fb-popup">
                <input type="checkbox" id="map-4" class="fb-popup" value="Bản đồ lỗi">Bản đồ lỗi
            </label>
            <label class="fb-popup">Phản hồi khác:</label>
            <textarea cols="20" rows="5" id="map-5" class="fb-popup"></textarea>
        </div>
        <div class="pl-popup-captcha fb-popup">
            <div class="fb-input"><span>Họ và tên </span><input type="text" value="" id="userFullName" class="fb-popup"></div>
            <div class="fb-input"><span>Email <i>*</i></span><input type="text" id="userEmail" value="" class="fb-popup"></div>
            <div class="fb-input"><span>SDT <i>*</i></span><input type="text" id="userMobile" value="" class="fb-popup"></div>
        </div>
        <div class="pl-popup-message"></div>
        <div class="btn-green fb-popup">
            <span class="fb-popup">
                <span class="fb-popup">
                    <div><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe src="./assets/image/anchor.html" width="256" height="60" role="presentation" name="a-dden5yvkd606" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div><button class="btn-sendfeedback fb-popup g-recaptcha" rel="nofollow" href="javascript:void(0)" data-sitekey="6Lf-hbgZAAAAAGWhpwOnaSnHeERaH7lqJ065rGM4" data-callback="onSubmit_FrontEnd_Product_Details_DetailsBinnova_SendFeedback" data-action="submit">
                        Gửi
                    </button>
                </span>
            </span>
        </div>
    </div>
</div>
<script>
    function onSubmit_FrontEnd_Product_Details_DetailsBinnova_SendFeedback(token) {
        (function callFunction() {
            if (FrontEnd_Product_Details_DetailsBinnova) {
                FrontEnd_Product_Details_DetailsBinnova.SendFeedback(token);
            } else {
                setTimeout(callFunction, 100);
            }
        })();
    }
</script>
            <div id="divSendContact">
    <div class="sendContactContent">
        <div class="title">Thông tin liên hệ</div>
        <div class="note1">Yêu cầu người đăng tin liên hệ theo thông tin dưới đây.</div>
        <div class="contact-result"></div>
        <div class="row">
            <div class="colleft">Họ và tên</div>
            <div class="colright"><input type="text" id="txtSenderName"></div>
        </div>
        <div class="row">
            <div class="colleft">Số điện thoại <span class="redfont">(*)</span></div>
            <div class="colright"><input type="text" id="txtSenderMobile"></div>
        </div>
        <div class="row">
            <div class="colleft">Email</div>
            <div class="colright"><input type="text" id="txtSenderEmail"></div>
        </div>
        <div class="row">
            <div class="colleft">Lời nhắn</div>
            <div class="colright">
                <textarea id="txtSenderContent" maxlength="160">Tôi có quan tâm đến bất động sản này.</textarea>
            </div>
        </div>

        <div class="row text-center">
            <div><div class="grecaptcha-badge" data-style="none" style="width: 256px; height: 60px; position: fixed; visibility: hidden;"><div class="grecaptcha-logo"><iframe src="./assets/image/anchor(1).html" width="256" height="60" role="presentation" name="a-3u4gfsgp33hz" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;" src="./assets/image/saved_resource(7).html"></iframe></div><button class="g-recaptcha" data-sitekey="6Lf-hbgZAAAAAGWhpwOnaSnHeERaH7lqJ065rGM4" data-callback="onSubmit_FrontEnd_Product_Details_ContactBox_SendRequest" data-action="submit" onmouseover="this.style.cursor=&#39;pointer&#39;" id="btnSendRequest">Gửi yêu cầu</button>
        </div>
    </div>
</div>
<script>
    function onSubmit_FrontEnd_Product_Details_ContactBox_SendRequest(token) {
        (function callFunction() {
            if (FrontEnd_Product_Details_ContactBox) {
                FrontEnd_Product_Details_ContactBox.SendRequest(token);
            } else {
                setTimeout(callFunction, 100);
            }
        })();
    }
</script>
        </div>
    </div>
</div>
<input type="hidden" value="0" id="vipOrder">



    <div class="divide divide-full">&nbsp;</div>
    <div class="list-product list-product-area pad-16">
        <div class="title-list">Bất động sản cùng khu vực</div>
        <div class="list-product-slide">
            <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-free-mode">
                <ul class="ul-list-product swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <li class="vip5 swiper-slide swiper-slide-visible swiper-slide-active" uid="783243">
                            <div class="img-product">
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/chinh-chu-toi-can-ban-gap-100m2-gia-1-4-ty-cho-vay-70-gia-tri-0931113767-pr27605272">
                                    <img alt="Chính chủ tôi cần bán gấp lô Biên Hoà New City, 100m2, giá 1,4 tỷ, cho vay 70% giá trị, 0931113767" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" imgerr="3" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/257x147/2020/10/30/20201030115255-63bf_wm.jpg" is-lazy-image="true" lazy-id="12">
                                </a>
                                <span class="product-feature">
                                                                                                        </span>
                            </div>
                            <div class="info-product">
                                <h3 class="p-title">
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/chinh-chu-toi-can-ban-gap-100m2-gia-1-4-ty-cho-vay-70-gia-tri-0931113767-pr27605272" title="Chính chủ tôi cần bán gấp lô Biên Hoà New City, 100m2, giá 1,4 tỷ, cho vay 70% giá trị, 0931113***" style="overflow: visible;">Chính chủ tôi cần bán gấp lô Biên Hoà New City, 100m2, giá 1,4 tỷ, cho vay 70% giá trị, <span class="hidden-mobile m-on-title" raw="0931113767">0931113***</span></a>
                                </h3>
                                <div class="pro-price">1.4 tỷ</div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">100 m²</div>
                                <div class="pro-adress">Biên Hòa, Đồng Nai</div>
                                <div class="date">
                                    Hôm nay
                                    <span class="tooltip-time">13/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                    <i class="iconSave" data-productid="27605272" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ t&amp;#244;i cần b&amp;#225;n gấp l&amp;#244; Bi&amp;#234;n Ho&amp;#224; New City, 100m2, gi&amp;#225; 1,4 tỷ, cho vay 70% gi&amp;#225; trị, 0931113767&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/30/20201030115255-63bf_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/30/20201030115255-63bf_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án dự án Biên Hòa New City" data-price="1.4 tỷ" data-area="100 m²" data-pricesort="1400000000" data-areasort="100" data-room="Undefined" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Tôi chính chủ cần tiền làm ăn cần bán 2 nền 100m2 dự án Biên Hòa New City, liền kề sân golf đã có sổ đỏ riêng từng nền.Giá bán chỉ 1,4 tỷ/nền.Hạ tầng hoàn thiện 100%.Ngân hàng hỗ trợ vay - thủ tục nh" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 13:54:33" data-contactname="Trần Thụy Như Hoàng" data-contactmobile="0931113767" data-url="/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/chinh-chu-toi-can-ban-gap-100m2-gia-1-4-ty-cho-vay-70-gia-tri-0931113767-pr27605272" data-totalmedia="8" data-createbyuser="783243"></i>
                                </span>
                            </div>
                        </li>
                        <li class="vip5 swiper-slide swiper-slide-visible swiper-slide-next" uid="364325">
                            <div class="img-product">
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/can-ban-5x19-5x20-6x20-7x20-8x20-9x20-10x20-12x20-15x20-lh-0908207092-pr24098861">
                                    <img alt="Cần bán Biên Hòa New City, 5x19, 5x20, 6x20, 7x20, 8x20, 9x20, 10x20, 12x20, 15x20 (m), 0908207092" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" imgerr="3" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/257x147/2020/01/03/20200103171148-e8e2_wm.jpg" is-lazy-image="true" lazy-id="13">
                                </a>
                                <span class="product-feature">
                                                                                                        </span>
                            </div>
                            <div class="info-product">
                                <h3 class="p-title">
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/can-ban-5x19-5x20-6x20-7x20-8x20-9x20-10x20-12x20-15x20-lh-0908207092-pr24098861" title="Cần bán Biên Hòa New City, 5x19, 5x20, 6x20, 7x20, 8x20, 9x20, 10x20, 12x20, 15x20 (m), 0908207***" style="overflow: visible;">Cần bán Biên Hòa New City, 5x19, 5x20, 6x20, 7x20, 8x20, 9x20, 10x20, 12x20, 15x20 (m), <span class="hidden-mobile m-on-title" raw="0908207092">0908207***</span></a>
                                </h3>
                                <div class="pro-price">1.3 tỷ</div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">100 m²</div>
                                <div class="pro-adress">Biên Hòa, Đồng Nai</div>
                                <div class="date">
                                    Hôm nay
                                    <span class="tooltip-time">13/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                    <i class="iconSave" data-productid="24098861" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần b&amp;#225;n Bi&amp;#234;n H&amp;#242;a New City, 5x19, 5x20, 6x20, 7x20, 8x20, 9x20, 10x20, 12x20, 15x20 (m), 0908207092&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/01/03/20200103171148-e8e2_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/01/03/20200103171148-e8e2_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án dự án Biên Hòa New City" data-price="1.3 tỷ" data-area="100 m²" data-pricesort="1300000000" data-areasort="100" data-room="Undefined" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Chuyên đất Biên Hòa New City, sang nhượng nhiều nền giá cực kỳ hấp dẫn từ 12tr/m2. LH: 0908207092 (Ms. Lài alo, viber, Call, SMS,.. ). Email: Lai. Thaithi@propertyx.com.vn.Hạ tầng hoàn thiện, đang bà" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 12:13:33" data-contactname="Thái Lài" data-contactmobile="0908207092" data-url="/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/can-ban-5x19-5x20-6x20-7x20-8x20-9x20-10x20-12x20-15x20-lh-0908207092-pr24098861" data-totalmedia="8" data-createbyuser="364325"></i>
                                </span>
                            </div>
                        </li>
                        <li class="vip5 swiper-slide swiper-slide-visible" uid="364325">
                            <div class="img-product">
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/chuyen-ban-so-do-trao-tay-gia-8tr-m2-ha-tang-n-thien-lh-0908207092-pr27318799">
                                    <img alt="Chuyên bán đất nền Biên Hòa New City, sổ đỏ trao tay giá 8tr/m2 hạ tầng hoàn thiện, LH: 0908207092" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" imgerr="3" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/257x147/2020/10/07/20201007104021-3940_wm.jpg" is-lazy-image="true" lazy-id="14">
                                </a>
                                <span class="product-feature">
                                                                                                        </span>
                            </div>
                            <div class="info-product">
                                <h3 class="p-title">
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/chuyen-ban-so-do-trao-tay-gia-8tr-m2-ha-tang-n-thien-lh-0908207092-pr27318799" title="Chuyên bán đất nền Biên Hòa New City, sổ đỏ trao tay giá 8tr/m2 hạ tầng hoàn thiện, LH: 0908207***" style="overflow: visible;">Chuyên bán đất nền Biên Hòa New City, sổ đỏ trao tay giá 8tr/m2 hạ tầng hoàn thiện, LH: <span class="hidden-mobile m-on-title" raw="0908207092">0908207***</span></a>
                                </h3>
                                <div class="pro-price">8 triệu/m²</div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">680 m²</div>
                                <div class="pro-adress">Biên Hòa, Đồng Nai</div>
                                <div class="date">
                                    Hôm nay
                                    <span class="tooltip-time">13/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                    <i class="iconSave" data-productid="27318799" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chuy&amp;#234;n b&amp;#225;n đất nền Bi&amp;#234;n H&amp;#242;a New City, sổ đỏ trao tay gi&amp;#225; 8tr/m2 hạ tầng ho&amp;#224;n thiện, LH: 0908207092&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/07/20201007104021-3940_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/07/20201007104021-3940_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án dự án Biên Hòa New City" data-price="8 triệu/m²" data-area="680 m²" data-pricesort="5440000000" data-areasort="680" data-room="Undefined" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Chuyên bán đất nền Biên Hòa New City, sổ đỏ trao tay, giá 8tr/m2 hạ tầng hoàn thiện, LH: 0908207092. Em chuyên bán đất nền sổ đỏ Biên Hòa New City năm nhiều lô giá tốt nhất và vị trí đẹp anh/chị nhé!" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:55:39" data-contactname="Thái Lài" data-contactmobile="0908207092" data-url="/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/chuyen-ban-so-do-trao-tay-gia-8tr-m2-ha-tang-n-thien-lh-0908207092-pr27318799" data-totalmedia="8" data-createbyuser="364325"></i>
                                </span>
                            </div>
                        </li>
                        <li class="vip5 swiper-slide swiper-slide-visible" uid="1322974">
                            <div class="img-product">
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/chinh-chu-b-nha-pho-100m2-gia-tot-nhat-so-do-trao-tay-lh-0906757522-pr27776406">
                                    <img alt="Chính chủ bán nền nhà phố 100m2 dự án Biên Hòa New City, giá tốt nhất sổ đỏ trao tay, LH 0906757522" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" imgerr="3" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/257x147/2020/11/13/20201113093830-5fb5_wm.jpg" is-lazy-image="true" lazy-id="15">
                                </a>
                                <span class="product-feature">
                                                                                                        </span>
                            </div>
                            <div class="info-product">
                                <h3 class="p-title">
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/chinh-chu-b-nha-pho-100m2-gia-tot-nhat-so-do-trao-tay-lh-0906757522-pr27776406" title="Chính chủ bán nền nhà phố 100m2 dự án Biên Hòa New City, giá tốt nhất sổ đỏ trao tay, LH 0906757***" style="overflow: visible;">Chính chủ bán nền nhà phố 100m2 dự án Biên Hòa New City, giá tốt nhất sổ đỏ trao tay, LH <span class="hidden-mobile m-on-title" raw="0906757522">0906757***</span></a>
                                </h3>
                                <div class="pro-price">13 triệu/m²</div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">100 m²</div>
                                <div class="pro-adress">Biên Hòa, Đồng Nai</div>
                                <div class="date">
                                    Hôm nay
                                    <span class="tooltip-time">13/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                    <i class="iconSave" data-productid="27776406" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n nền nh&amp;#224; phố 100m2 dự &amp;#225;n Bi&amp;#234;n H&amp;#242;a New City, gi&amp;#225; tốt nhất sổ đỏ trao tay, LH 0906757522&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113093830-5fb5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/13/20201113093830-5fb5_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án dự án Biên Hòa New City" data-price="13 triệu/m²" data-area="100 m²" data-pricesort="1300000000" data-areasort="100" data-room="Undefined" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Liên hệ ngay hotline phòng CĐT để được hỗ trợ đưa đón tận nhà để quý khách thoải mái và chủ động tham quan dự án: 
 
 Đất nền biệt thự trung tâm Biên Hòa, giá 15tr/m2. 
 - Đất nền sổ đỏ trao tay, ful" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:39:40" data-contactname="Nguyễn Tùng" data-contactmobile="0906757522" data-url="/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/chinh-chu-b-nha-pho-100m2-gia-tot-nhat-so-do-trao-tay-lh-0906757522-pr27776406" data-totalmedia="8" data-createbyuser="1322974"></i>
                                </span>
                            </div>
                        </li>
                        <li class="vip5 swiper-slide" uid="471310">
                            <div class="img-product">
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/chinh-chu-can-sang-tay-mua-dich-hd-re-1-2-ty-cl-it-newcity-lh-chinh-chu-0903042938-pr25190644">
                                    <img alt="Chính chủ cần sang tay mùa dịch nền HD rẻ 1,2 tỷ + CL ít Biên Hoà New City, LH chính chủ 0903042938" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" imgerr="3" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/257x147/2020/04/19/20200419105412-f3fd_wm.jpg" is-lazy-image="true" lazy-id="16">
                                </a>
                                <span class="product-feature">
                                                                                                        </span>
                            </div>
                            <div class="info-product">
                                <h3 class="p-title">
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/chinh-chu-can-sang-tay-mua-dich-hd-re-1-2-ty-cl-it-newcity-lh-chinh-chu-0903042938-pr25190644" title="Chính chủ cần sang tay mùa dịch nền HD rẻ 1,2 tỷ + CL ít Biên Hoà New City, LH chính chủ 0903042***" style="overflow: visible;">Chính chủ cần sang tay mùa dịch nền HD rẻ 1,2 tỷ + CL ít Biên Hoà New City, LH chính chủ <span class="hidden-mobile m-on-title" raw="0903042938">0903042***</span></a>
                                </h3>
                                <div class="pro-price">1.2 tỷ</div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">100 m²</div>
                                <div class="pro-adress">Biên Hòa, Đồng Nai</div>
                                <div class="date">
                                    Hôm nay
                                    <span class="tooltip-time">13/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                    <i class="iconSave" data-productid="25190644" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần sang tay m&amp;#249;a dịch nền HD rẻ 1,2 tỷ + CL &amp;#237;t Bi&amp;#234;n Ho&amp;#224; New City, LH ch&amp;#237;nh chủ 0903042938&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/04/19/20200419105412-f3fd_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/04/19/20200419105412-f3fd_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án dự án Biên Hòa New City" data-price="1.2 tỷ" data-area="100 m²" data-pricesort="1200000000" data-areasort="100" data-room="Undefined" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Cần tiền bán gấp mùa dịch Tôi cần bán 1 nền đất DT 5x20m, hướng Đông Nam, sát sông thoáng mát, thuận tiện đầu tư có sổ đỏ giá rẻ Biên Hòa New City ngay sân gôn Long Thành 3 mặt sông Đồng Nai của CĐT " data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 08:45:04" data-contactname="Vũ Thị Thơm" data-contactmobile="0966733629" data-url="/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/chinh-chu-can-sang-tay-mua-dich-hd-re-1-2-ty-cl-it-newcity-lh-chinh-chu-0903042938-pr25190644" data-totalmedia="8" data-createbyuser="471310"></i>
                                </span>
                            </div>
                        </li>
                        <li class="vip5 swiper-slide" uid="1407352">
                            <div class="img-product">
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/ban-pg3-12-09-newcity-da-co-so-cdt-090913xxxx-pr27194518">
                                    <img alt="Bán nền PG3-12-09, Biên hòa New City, đã có sổ, CĐT 0909138896" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" imgerr="3" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/257x147/2020/09/28/20200928125344-e386.jpg" is-lazy-image="true" lazy-id="17">
                                </a>
                                <span class="product-feature">
                                                                                                        </span>
                            </div>
                            <div class="info-product">
                                <h3 class="p-title">
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/ban-pg3-12-09-newcity-da-co-so-cdt-090913xxxx-pr27194518" title="Bán nền PG3-12-09, Biên hòa New City, đã có sổ, CĐT 0909138***" style="overflow: visible;">Bán nền PG3-12-09, Biên hòa New City, đã có sổ, CĐT <span class="hidden-mobile m-on-title" raw="0909138896">0909138***</span></a>
                                </h3>
                                <div class="pro-price">1.9 tỷ</div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">100 m²</div>
                                <div class="pro-adress">Biên Hòa, Đồng Nai</div>
                                <div class="date">
                                    Hôm nay
                                    <span class="tooltip-time">13/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                    <i class="iconSave" data-productid="27194518" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nền PG3-12-09, Bi&amp;#234;n h&amp;#242;a New City, đ&amp;#227; c&amp;#243; sổ, CĐT 0909138896&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/28/20200928125344-e386.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/28/20200928125344-e386.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án dự án Biên Hòa New City" data-price="1.9 tỷ" data-area="100 m²" data-pricesort="1900000000" data-areasort="100" data-room="Undefined" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Cần bán nền PG3-12-09 (đã có sổ), giá 1,9 tỷ(bao thuế phí), xây tự do, hạ tầng hoàn thiện 100%. PKD: 0909138896 Mr. Tuyên. Thông tin cơ bản Biên Hòa New City: + Chủ đầu tư: Golf Long Thành. + Phát tr" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 08:20:10" data-contactname="Giáp Tuyên" data-contactmobile="0909138896" data-url="/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/ban-pg3-12-09-newcity-da-co-so-cdt-090913xxxx-pr27194518" data-totalmedia="5" data-createbyuser="1407352"></i>
                                </span>
                            </div>
                        </li>
                        <li class="vip5 swiper-slide" uid="725724">
                            <div class="img-product">
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/chinh-chu-c-b-gap-lo-100m2-khu-khg-thinh-city-pr27430193">
                                    <img alt="Chính chủ cần bán gấp lô đất 100m2 khu Khang Thịnh - dự án Biên Hòa New City" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" imgerr="3" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/257x147/2020/10/15/20201015190331-f1e5_wm.jpg" is-lazy-image="true" lazy-id="18">
                                </a>
                                <span class="product-feature">
                                                                                                        </span>
                            </div>
                            <div class="info-product">
                                <h3 class="p-title">
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/chinh-chu-c-b-gap-lo-100m2-khu-khg-thinh-city-pr27430193" title="Chính chủ cần bán gấp lô đất 100m2 khu Khang Thịnh - dự án Biên Hòa New City">Chính chủ cần bán gấp lô đất 100m2 khu Khang Thịnh - dự án Biên Hòa New City</a>
                                </h3>
                                <div class="pro-price">16 triệu/m²</div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">100 m²</div>
                                <div class="pro-adress">Biên Hòa, Đồng Nai</div>
                                <div class="date">
                                    Hôm qua
                                    <span class="tooltip-time">12/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                    <i class="iconSave" data-productid="27430193" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần b&amp;#225;n gấp l&amp;#244; đất 100m2 khu Khang Thịnh - dự &amp;#225;n Bi&amp;#234;n H&amp;#242;a New City&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/15/20201015190331-f1e5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/15/20201015190331-f1e5_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án dự án Biên Hòa New City" data-price="16 triệu/m²" data-area="100 m²" data-pricesort="1600000000" data-areasort="100" data-room="Undefined" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="* Tôi chính chủ cần bán nền đất nhà phố đã có sổ - khu Khang Thịnh, dự án Biên Hòa New City. * DT: 100m2. * Ngay bến du thuyền và nền đối diện khu club house. * Khách thiện chí mua nhanh bớt nhẹ lấy " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 19:50:45" data-contactname="Lê An Nhiên" data-contactmobile="0933223146" data-url="/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/chinh-chu-c-b-gap-lo-100m2-khu-khg-thinh-city-pr27430193" data-totalmedia="8" data-createbyuser="725724"></i>
                                </span>
                            </div>
                        </li>
                        <li class="vip5 swiper-slide" uid="747423">
                            <div class="img-product">
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/-so-do-tp-gia-chi-12tr-m2-thanh-toan-linh-t-ha-tang-day-lh-0939339337-pr27625490">
                                    <img alt="Đất nền sổ đỏ TP Biên Hòa, giá chỉ 12tr/m2 thanh toán linh hoạt hạ tầng đầy đủ, LH: 0939339337" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" imgerr="3" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/257x147/2020/11/02/20201102081917-8899_wm.jpg" is-lazy-image="true" lazy-id="19">
                                </a>
                                <span class="product-feature">
                                                                                                        </span>
                            </div>
                            <div class="info-product">
                                <h3 class="p-title">
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/-so-do-tp-gia-chi-12tr-m2-thanh-toan-linh-t-ha-tang-day-lh-0939339337-pr27625490" title="Đất nền sổ đỏ TP Biên Hòa, giá chỉ 12tr/m2 thanh toán linh hoạt hạ tầng đầy đủ, LH: 0939339***" style="overflow: visible;">Đất nền sổ đỏ TP Biên Hòa, giá chỉ 12tr/m2 thanh toán linh hoạt hạ tầng đầy đủ, LH: <span class="hidden-mobile m-on-title" raw="0939339337">0939339***</span></a>
                                </h3>
                                <div class="pro-price">12 triệu/m²</div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">100 m²</div>
                                <div class="pro-adress">Biên Hòa, Đồng Nai</div>
                                <div class="date">
                                    Hôm qua
                                    <span class="tooltip-time">12/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                    <i class="iconSave" data-productid="27625490" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Đất nền sổ đỏ TP Bi&amp;#234;n H&amp;#242;a, gi&amp;#225; chỉ 12tr/m2 thanh to&amp;#225;n linh hoạt hạ tầng đầy đủ, LH: 0939339337&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102081917-8899_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/02/20201102081917-8899_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án dự án Biên Hòa New City" data-price="12 triệu/m²" data-area="100 m²" data-pricesort="1200000000" data-areasort="100" data-room="Undefined" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Pháp lý: Sở hữu lâu dài. ngân hàng cho vay 80% - Đã có sổ hồng riêng. - Diện tích: 100m2. - Đặt cọc công chứng chuyển nhượng. - Cơ sở hạ tầng hoàn chỉnh 100% (điện, đương, cây xanh, nươc... ). - Cắm " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 18:19:01" data-contactname="Đoàn Ngọc Sơn" data-contactmobile="0939339337" data-url="/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/-so-do-tp-gia-chi-12tr-m2-thanh-toan-linh-t-ha-tang-day-lh-0939339337-pr27625490" data-totalmedia="4" data-createbyuser="747423"></i>
                                </span>
                            </div>
                        </li>
                        <li class="vip5 swiper-slide" uid="747423">
                            <div class="img-product">
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/-so-do-tp-gia-chi-1-7-ty-thanh-toan-linh-t-ha-tang-day-lh-0939339337-pr26000833">
                                    <img alt="Đất nền sổ đỏ TP Biên Hòa, giá chỉ 1,7 tỷ/nền, thanh toán linh hoạt hạ tầng đầy đủ, LH: 0939339337" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" imgerr="3" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/257x147/2020/06/25/20200625105323-2a57_wm.jpg" is-lazy-image="true" lazy-id="20">
                                </a>
                                <span class="product-feature">
                                                                                                        </span>
                            </div>
                            <div class="info-product">
                                <h3 class="p-title">
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/-so-do-tp-gia-chi-1-7-ty-thanh-toan-linh-t-ha-tang-day-lh-0939339337-pr26000833" title="Đất nền sổ đỏ TP Biên Hòa, giá chỉ 1,7 tỷ/nền, thanh toán linh hoạt hạ tầng đầy đủ, LH: 0939339***" style="overflow: visible;">Đất nền sổ đỏ TP Biên Hòa, giá chỉ 1,7 tỷ/nền, thanh toán linh hoạt hạ tầng đầy đủ, LH: <span class="hidden-mobile m-on-title" raw="0939339337">0939339***</span></a>
                                </h3>
                                <div class="pro-price">17 triệu/m²</div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">100 m²</div>
                                <div class="pro-adress">Biên Hòa, Đồng Nai</div>
                                <div class="date">
                                    Hôm qua
                                    <span class="tooltip-time">12/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                    <i class="iconSave" data-productid="26000833" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Đất nền sổ đỏ TP Bi&amp;#234;n H&amp;#242;a, gi&amp;#225; chỉ 1,7 tỷ/nền, thanh to&amp;#225;n linh hoạt hạ tầng đầy đủ, LH: 0939339337&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/25/20200625105323-2a57_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/06/25/20200625105323-2a57_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án dự án Biên Hòa New City" data-price="17 triệu/m²" data-area="100 m²" data-pricesort="1700000000" data-areasort="100" data-room="Undefined" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Thông tin dự án. Diện tích dự án: 118,95 ha. Nằm trong tổng thể dự án khu đô thị, sân golf, thể thao và du lịch sinh thái Long Thành với quy mô 334 ha. Địa chỉ: Phước Tân - Tam Phước, TP. Biên Hòa, t" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 18:18:37" data-contactname="Đoàn Ngọc Sơn" data-contactmobile="0939339337" data-url="/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/-so-do-tp-gia-chi-1-7-ty-thanh-toan-linh-t-ha-tang-day-lh-0939339337-pr26000833" data-totalmedia="8" data-createbyuser="747423"></i>
                                </span>
                            </div>
                        </li>
                        <li class="vip5 swiper-slide" uid="604881">
                            <div class="img-product">
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/c-sg-nhuong-so-do-mot-so-gia-tot-cho-chu-moi-dau-tu-0908833902-pr22860024">
                                    <img alt="Cần sang nhượng đất sổ đỏ dự án Biên Hòa New City, một số nền giá tốt cho chủ mới đầu tư 0908833902" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" imgerr="3" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/257x147/2019/10/07/20191007093206-29a3_wm.jpg" is-lazy-image="true" lazy-id="21">
                                </a>
                                <span class="product-feature">
                                                                                                        </span>
                            </div>
                            <div class="info-product">
                                <h3 class="p-title">
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/c-sg-nhuong-so-do-mot-so-gia-tot-cho-chu-moi-dau-tu-0908833902-pr22860024" title="Cần sang nhượng đất sổ đỏ dự án Biên Hòa New City, một số nền giá tốt cho chủ mới đầu tư 0908833***" style="overflow: visible;">Cần sang nhượng đất sổ đỏ dự án Biên Hòa New City, một số nền giá tốt cho chủ mới đầu tư <span class="hidden-mobile m-on-title" raw="0908833902">0908833***</span></a>
                                </h3>
                                <div class="pro-price">14 triệu/m²</div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">100 m²</div>
                                <div class="pro-adress">Biên Hòa, Đồng Nai</div>
                                <div class="date">
                                    Hôm qua
                                    <span class="tooltip-time">12/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                    <i class="iconSave" data-productid="22860024" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần sang nhượng đất sổ đỏ dự &amp;#225;n Bi&amp;#234;n H&amp;#242;a New City, một số nền gi&amp;#225; tốt cho chủ mới đầu tư 0908833902&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/10/07/20191007093206-29a3_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2019/10/07/20191007093206-29a3_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án dự án Biên Hòa New City" data-price="14 triệu/m²" data-area="100 m²" data-pricesort="1400000000" data-areasort="100" data-room="Undefined" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Tôi cần sang nhượng gấp một số lô đất nhà phố liên kế, diện tích 100m2.MA1 - 02 - 32, KT - 08 - 06, MA2 - 01 - 26. HV1 - 03 - 09, HV1 - 03 - 20, HV2 - 02 - 14. VQ2 - 05 - 28, VQ2 - 05 - 20, VQ1 - 03 " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 18:05:20" data-contactname="Ho Van Duoc" data-contactmobile="0908833902" data-url="/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/c-sg-nhuong-so-do-mot-so-gia-tot-cho-chu-moi-dau-tu-0908833902-pr22860024" data-totalmedia="2" data-createbyuser="604881"></i>
                                </span>
                            </div>
                        </li>
                        <li class="vip5 swiper-slide" uid="364325">
                            <div class="img-product">
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-phuong-phuoc-tan-prj-bien-hoa-new-city/chuyen-ban-so-do-trao-tay-gia-8tr-m2-ha-tang-n-thien-lh-0908207092-pr27355733">
                                    <img alt="Chuyên bán đất nền Biên Hòa New City, sổ đỏ trao tay, giá 8tr/m2 hạ tầng hoàn thiện, LH: 0908207092" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" imgerr="3" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/257x147/2020/10/09/20201009161933-0fe7_wm.jpg" is-lazy-image="true" lazy-id="22">
                                </a>
                                <span class="product-feature">
                                                                                                        </span>
                            </div>
                            <div class="info-product">
                                <h3 class="p-title">
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-phuong-phuoc-tan-prj-bien-hoa-new-city/chuyen-ban-so-do-trao-tay-gia-8tr-m2-ha-tang-n-thien-lh-0908207092-pr27355733" title="Chuyên bán đất nền Biên Hòa New City, sổ đỏ trao tay, giá 8tr/m2 hạ tầng hoàn thiện, LH: 0908207***" style="overflow: visible;">Chuyên bán đất nền Biên Hòa New City, sổ đỏ trao tay, giá 8tr/m2 hạ tầng hoàn thiện, LH: <span class="hidden-mobile m-on-title" raw="0908207092">0908207***</span></a>
                                </h3>
                                <div class="pro-price">8 triệu/m²</div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">100 m²</div>
                                <div class="pro-adress">Biên Hòa, Đồng Nai</div>
                                <div class="date">
                                    Hôm qua
                                    <span class="tooltip-time">12/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                    <i class="iconSave" data-productid="27355733" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chuy&amp;#234;n b&amp;#225;n đất nền Bi&amp;#234;n H&amp;#242;a New City, sổ đỏ trao tay, gi&amp;#225; 8tr/m2 hạ tầng ho&amp;#224;n thiện, LH: 0908207092&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/09/20201009161933-0fe7_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/09/20201009161933-0fe7_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án dự án Biên Hòa New City" data-price="8 triệu/m²" data-area="100 m²" data-pricesort="800000000" data-areasort="100" data-room="Undefined" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Tranh thủ đợt này giá còn tốt gom đất sổ đỏ Biên Hoà New City a/c nha! Về giao thông:   Đường thủy cách VinCity Quận 9 1con sông (tương lai sẽ xây cầu bắt qua ạ).  Hiện tại anh/chị đi bằng xe máy có " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 17:52:15" data-contactname="Thái Lài" data-contactmobile="0908207092" data-url="/ban-dat-nen-du-an-phuong-phuoc-tan-prj-bien-hoa-new-city/chuyen-ban-so-do-trao-tay-gia-8tr-m2-ha-tang-n-thien-lh-0908207092-pr27355733" data-totalmedia="5" data-createbyuser="364325"></i>
                                </span>
                            </div>
                        </li>
                        <li class="vip5 swiper-slide" uid="364325">
                            <div class="img-product">
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/can-ban-5x19m-5x20m-6x20m-7x20m-8x20-9x20-10x20-12x20-15x20m-0908207092-pr26958479">
                                    <img alt="Cần bán Biên Hòa New City, 5x19m, 5x20m, 6x20m, 7x20m, 8x20, 9x20, 10x20, 12x20, 15x20m, 0908207092" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" imgerr="3" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/257x147/2020/09/08/20200908184541-807d_wm.jpg" is-lazy-image="true" lazy-id="23">
                                </a>
                                <span class="product-feature">
                                                                                                        </span>
                            </div>
                            <div class="info-product">
                                <h3 class="p-title">
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/can-ban-5x19m-5x20m-6x20m-7x20m-8x20-9x20-10x20-12x20-15x20m-0908207092-pr26958479" title="Cần bán Biên Hòa New City, 5x19m, 5x20m, 6x20m, 7x20m, 8x20, 9x20, 10x20, 12x20, 15x20m, 0908207***" style="overflow: visible;">Cần bán Biên Hòa New City, 5x19m, 5x20m, 6x20m, 7x20m, 8x20, 9x20, 10x20, 12x20, 15x20m, <span class="hidden-mobile m-on-title" raw="0908207092">0908207***</span></a>
                                </h3>
                                <div class="pro-price">8 triệu/m²</div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">100 m²</div>
                                <div class="pro-adress">Biên Hòa, Đồng Nai</div>
                                <div class="date">
                                    Hôm qua
                                    <span class="tooltip-time">12/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                    <i class="iconSave" data-productid="26958479" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần b&amp;#225;n Bi&amp;#234;n H&amp;#242;a New City, 5x19m, 5x20m, 6x20m, 7x20m, 8x20, 9x20, 10x20, 12x20, 15x20m, 0908207092&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/08/20200908184541-807d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/08/20200908184541-807d_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án dự án Biên Hòa New City" data-price="8 triệu/m²" data-area="100 m²" data-pricesort="800000000" data-areasort="100" data-room="Undefined" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Chuyên đất Biên Hòa New City, sang nhượng nhiều nền giá cực kỳ hấp dẫn từ 12tr/m2. LH: 0908207092 (Ms. Lài alo, viber, call, sms,.. ). Email: lai.thaithi@propertyx.com.vnHạ tầng hoàn thiện, đang bàn " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 17:31:18" data-contactname="Thái Lài" data-contactmobile="0908207092" data-url="/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/can-ban-5x19m-5x20m-6x20m-7x20m-8x20-9x20-10x20-12x20-15x20m-0908207092-pr26958479" data-totalmedia="8" data-createbyuser="364325"></i>
                                </span>
                            </div>
                        </li>
                </ul>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="swiper-button-next slide-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><img src="./assets/image/slide-next.png"></div>
            <div class="swiper-button-prev slide-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"><img src="./assets/image/slide-prev.png"></div>
        </div>
    </div>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Details && window.FrontEnd.Product.Details.SimilarListing) {
            new FrontEnd.Product.Details.SimilarListing()
        }
        else {
            setTimeout(callJQuery, 100);
        }
    })();
</script>
<div class="divide divide-full">&nbsp;</div>
<div class="list-product list-history pad-16 clearfix">
    <div class="title-list">Tin đăng đã xem</div>
    <div class="list-product-slide">
        <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-free-mode">
            <ul class="ul-list-product swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);"><li class="vip0 swiper-slide swiper-slide-visible swiper-slide-active">
                                        <div class="img-product">
                                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072"><img src="./assets/image/20201111095750-3277_wm(2).jpg" alt="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"></a>
                                            <span class="product-feature">
                                                
                                                
                                                
                                            </span>
                                        </div>
                                        <div class="info-product">
                                            <h3 class="p-title"><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" title="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ">KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ</a></h3>
                                            <div class="pro-price">1.45 tỷ</div>
                                            <span class="ic_dot">·</span><div class="pro-m2">100 m²</div>
                                            <div class="pro-adress">Biên Hòa, Đồng Nai</div>
                                            <div class="date">2 ngày trước<span class="tooltip-time">11/11/2020</span></div>
                                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                                <i class="iconSave" data-productid="27748072" data-avatar="%3Cimg%20class%3D%22product-avatar-img%22%20alt%3D%22Kh%26%23225%3Bch%20k%E1%BA%B9t%20ti%E1%BB%81n%20c%E1%BA%A7n%20b%26%23225%3Bn%20nhanh%20l%26%23244%3B%20%C4%91%E1%BA%A5t%20Bi%26%23234%3Bn%20H%26%23242%3Ba%20New%20City%2C%20DT%205%20x%2020m%2C%206%20x%2020m%2C%2012%20x%2020m%2C%20%C4%91%26%23227%3B%20nh%E1%BA%ADn%20s%E1%BB%95%22%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fno-image.png%22%20src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Ficons%2Flazy-preview-image-DFE3E8.png%22%20src-lazy%3D%22https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F350x232%2F2020%2F11%2F11%2F20201111095750-3277_wm.jpg%22%20is-lazy-image%3D%22true%22%2F%3E" data-avatarwap="https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F200x140%2F2020%2F11%2F11%2F20201111095750-3277_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ" data-price="1.45 tỷ" data-area="100 m²" data-pricesort="1450000000" data-areasort="100" data-room="" data-toilets="" data-address="Biên Hòa, Đồng Nai" data-description="Khách kẹt tiền muốn đẩy nhanh một số Lô Biên Hòa New City ở sân golf Long Thành.&lt;br/&gt;DT:&lt;br/&gt;5 x 20m.&lt;br/&gt;6 x 18m.&lt;br/&gt;9 x 20 m.&lt;br/&gt;12 x 20 m.&lt;br/&gt;Giá: 1.450 tỷ bao sang tên và ra sổ hồng.&lt;br/&gt;Tất cả đã có sổ hồng từng nền, mặt tiền đường 24m, 18m, 15m, 13m.&lt;br/&gt;Làm việc trực tiếp chính chủ thương lượng giá tốt nhất cho anh chị mua đầu tư hoặc để dành ở sau này.&lt;br/&gt;LH: 0903224939 (Bá Lợi).&lt;br/&gt;&lt;br/&gt;Một số thông tin cơ bản Biên Hòa New City.&lt;br/&gt;- Hỗ trợ vay ngân hàng.&lt;br/&gt;- Cơ sở hạ tầng hoàn chỉnh 100% (điện, đường, cây xanh, nước... ).&lt;br/&gt;- Cắm mốc phân lô từng nền.&lt;br/&gt;- Dự án đất nền Biên Hoà New City năm trong khu kinh tế trọng điểm, khu sân golf Long Thành kết nối Quốc Lộ 51, cao tốc Long Thành - Vũng Tàu, Hương Lộ 2 - Cầu Đồng Nai 2, bên cạnh khu đô thị Aqua City, Cách dự án Vincity - Quận 9 chỉ một cây cầu.&lt;br/&gt;- Cầu Vàm Cái Sứt đã khởi công đi ngang dự án đến cao tốc Long Thành, rút ngắn đoạn đường về Quận 2, TP. HCM chỉ còn 20 phút.&lt;br/&gt;- Tiện ích đẳng cấp tiêu chuẩn Quốc tế:&lt;br/&gt;+ Quần thể sân golf, nhà hàng.&lt;br/&gt;+ Khuôn viên lớn, công viên xanh tươi mát.&lt;br/&gt;+ Khu thương mại, hồ bơi, phòng gym, spa, trường học, khu y tế.&lt;br/&gt;+ An ninh 24/24." data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:58:51" data-contactname="Thái Bá Lợi" data-contactmobile="0946722227" data-url="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" data-totalmedia="3" data-createbyuser="649852"></i>
                                                </span>
                                        </div>
                                    </li><li class="vip0 swiper-slide swiper-slide-visible swiper-slide-next">
                                        <div class="img-product">
                                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-nguyen-hoang-ton-phuong-xuan-la/cho-tai-tay-ho-dt-150m2-mt-6m-lh-0376561855-pr27617698"><img src="./assets/image/20201031152534-92ea_wm.jpg" alt="CHO THUÊ NHÀ RIÊNG TẠI NGUYỄN HOÀNG TÔN, XUÂN LA TÂY HỒ. DT 150M2, MT 6M. LH 0376561855" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"></a>
                                            <span class="product-feature">
                                                
                                                
                                                
                                            </span>
                                        </div>
                                        <div class="info-product">
                                            <h3 class="p-title"><a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-nguyen-hoang-ton-phuong-xuan-la/cho-tai-tay-ho-dt-150m2-mt-6m-lh-0376561855-pr27617698" title="CHO THUÊ NHÀ RIÊNG TẠI NGUYỄN HOÀNG TÔN, XUÂN LA TÂY HỒ. DT 150M2, MT 6M. LH 0376561***">CHO THUÊ NHÀ RIÊNG TẠI NGUYỄN HOÀNG TÔN, XUÂN LA TÂY HỒ. DT 150M2, MT 6M. LH <span class="hidden-mobile box" raw="0376561855">0376561***</span></a></h3>
                                            <div class="pro-price">100 triệu/tháng</div>
                                            <span class="ic_dot">·</span><div class="pro-m2">150 m²</div>
                                            <div class="pro-adress">Tây Hồ, Hà Nội</div>
                                            <div class="date">3 ngày trước<span class="tooltip-time">10/11/2020</span></div>
                                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                                <i class="iconSave" data-productid="27617698" data-avatar="%3Cimg%20class%3D%22product-avatar-img%22%20alt%3D%22Cho%20thu%26%23234%3B%20nh%26%23224%3B%20ri%26%23234%3Bng%20t%E1%BA%A1i%20Nguy%E1%BB%85n%20Ho%26%23224%3Bng%20T%26%23244%3Bn%2C%20Xu%26%23226%3Bn%20La%20T%26%23226%3By%20H%E1%BB%93.%20DT%20150m2%2C%20MT%206m.%20LH%200376561855%22%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fno-image.png%22%20src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Ficons%2Flazy-preview-image-DFE3E8.png%22%20src-lazy%3D%22https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F350x232%2F2020%2F10%2F31%2FF5s5yBIs%2F20201031152534-92ea_wm.jpg%22%20is-lazy-image%3D%22true%22%2F%3E" data-avatarwap="https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F200x140%2F2020%2F10%2F31%2FF5s5yBIs%2F20201031152534-92ea_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="CHO THUÊ NHÀ RIÊNG TẠI NGUYỄN HOÀNG TÔN, XUÂN LA TÂY HỒ. DT 150M2, MT 6M. LH 0376561855" data-price="100 triệu/tháng" data-area="150 m²" data-pricesort="100000000" data-areasort="150" data-room="" data-toilets="" data-address="Tây Hồ, Hà Nội" data-description="Cho thuê nhà riêng tại Nguyễn Hoàng Tôn, Xuân La Tây Hồ đối diện Tân Hoàng Minh, mặt tiền 6m. Diện tích đất 150m2.&lt;br/&gt;Nhà 6 tầng 1 hầm. Tầng 1 83m2 còn lại là sân, lên Tầng 2,3,4,5 là 106m2. Tầng tum 106m đã có mái kín. Có thang máy điện 3 pha đầy đủ. Nhà 2 mặt tiền trước sau, đi ra 8 sở ban ngành chỉ 100m.&lt;br/&gt;Giá thuê 100triệu/tháng, thanh toán 6 tháng/lần hợp đồng dài hạn. &lt;br/&gt;Liên hệ chính chủ: 0376561855" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 15:47:43" data-contactname="Anh Khoa" data-contactmobile="0376561855" data-url="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-nguyen-hoang-ton-phuong-xuan-la/cho-tai-tay-ho-dt-150m2-mt-6m-lh-0376561855-pr27617698" data-totalmedia="5" data-createbyuser="1500303"></i>
                                                </span>
                                        </div>
                                    </li><li class="vip3 swiper-slide swiper-slide-visible">
                                        <div class="img-product">
                                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-pho-thai-ha-phuong-trung-liet/-yen-lang-studio-1pn-3pn-550tr-full-noi-tt-pr27761871"><img src="./assets/image/20201112090734-bd84_wm.jpg" alt="Chung cư Thái Hà - Yên Lãng, studio, 1PN - 3PN, 550tr/căn, full nội thất" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"></a>
                                            <span class="product-feature">
                                                
                                                
                                                
                                            </span>
                                        </div>
                                        <div class="info-product">
                                            <h3 class="p-title"><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-pho-thai-ha-phuong-trung-liet/-yen-lang-studio-1pn-3pn-550tr-full-noi-tt-pr27761871" title="Chung cư Thái Hà - Yên Lãng, studio, 1PN - 3PN, 550tr/căn, full nội thất">Chung cư Thái Hà - Yên Lãng, studio, 1PN - 3PN, 550tr/căn, full nội thất</a></h3>
                                            <div class="pro-price">550 triệu</div>
                                            <span class="ic_dot">·</span><div class="pro-m2">35 m²</div>
                                            <div class="pro-adress">Đống Đa, Hà Nội</div>
                                            <div class="date">Hôm nay<span class="tooltip-time">12/11/2020</span></div>
                                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                                <i class="iconSave" data-productid="27761871" data-avatar="%3Cimg%20class%3D%22product-avatar-img%22%20alt%3D%22Chung%20c%C6%B0%20Th%26%23225%3Bi%20H%26%23224%3B%20-%20Y%26%23234%3Bn%20L%26%23227%3Bng%2C%20studio%2C%201PN%20-%203PN%2C%20550tr%2Fc%C4%83n%2C%20full%20n%E1%BB%99i%20th%E1%BA%A5t%22%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fno-image.png%22%20src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Ficons%2Flazy-preview-image-DFE3E8.png%22%20src-lazy%3D%22https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F350x232%2F2020%2F11%2F12%2F20201112090734-bd84_wm.jpg%22%20is-lazy-image%3D%22true%22%2F%3E" data-avatarwap="https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F200x140%2F2020%2F11%2F12%2F20201112090734-bd84_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chung cư Thái Hà - Yên Lãng, studio, 1PN - 3PN, 550tr/căn, full nội thất" data-price="550 triệu" data-area="35 m²" data-pricesort="550000000" data-areasort="35" data-room="" data-toilets="" data-address="Đống Đa, Hà Nội" data-description="Chung cư Thái Hà - Yên Lãng, studio, 1PN - 3PN, 550tr/căn, full nội thất, ở ngay.&lt;br/&gt;&lt;br/&gt;Liên hệ CĐT: 0785658886.&lt;br/&gt;&lt;br/&gt;Tòa nhà mới xây 100% dân trí cao, hệ thống thang máy, phòng cháy chữa cháy an toàn 100%.&lt;br/&gt;&lt;br/&gt;Chiết khấu cao và nhiều ưu đãi cho các khách hàng tham quan và mua căn hộ tại dự án này.&lt;br/&gt;&lt;br/&gt;Giá gốc chủ đầu tư - cam kết chuẩn - không chênh - không phí môi giới.&lt;br/&gt;&lt;br/&gt;Quy mô: Chung cư mini Thái Hà, Yên Lãng với diện tích rộng hơn 300m2.&lt;br/&gt;&lt;br/&gt;+ Với 1 thang máy tốc độ cao, 1 thang bộ. Hệ thống phòng cháy chữa cháy đảm bảo.&lt;br/&gt;&lt;br/&gt;Vị trí đắc địa này, chắc chắn sẽ mang lại cho quý vị nhiều lợi ích khi mua tại dự án:&lt;br/&gt;&lt;br/&gt;+ Cách trường ĐH Thủy Lợi chỉ 300m.&lt;br/&gt;&lt;br/&gt;+ Cách các tuyến phố Hoàng Cầu, Chùa Bộc, Đặng Tiến Đông chi 500m.&lt;br/&gt;&lt;br/&gt;+ Cách Ngã Tư Sở chỉ 350m.&lt;br/&gt;&lt;br/&gt;+ Cách hồ Hoàng Cầu 200m.&lt;br/&gt;&lt;br/&gt;+ Cách trung tâm rạp chiếu phim Quốc Gia chỉ 800m.&lt;br/&gt;&lt;br/&gt;* Diện tích và giá bán: 25m2, 33m2, 45m2, 47m2, 49m2, 61m2 (bao gồm từ 1PN - 3PN).&lt;br/&gt;+ Có giá từ 550tr, 650tr, 850tr, 920tr, 970tr, 1,23 tỷ.&lt;br/&gt;&lt;br/&gt;* Pháp lý mua chung cư Thái Hà - Yên Lãng khách hàng ký HĐ trực tiếp với chủ đầu tư, tách sổ hồng sở hữu từng căn theo quy định của nhà nước đã ban hành." data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 09:16:51" data-contactname="Chủ Đầu Tư" data-contactmobile="0785658886" data-url="https://batdongsan.com.vn/ban-can-ho-chung-cu-pho-thai-ha-phuong-trung-liet/-yen-lang-studio-1pn-3pn-550tr-full-noi-tt-pr27761871" data-totalmedia="5" data-createbyuser="977228"></i>
                                                </span>
                                        </div>
                                    </li><li class="vip1 swiper-slide swiper-slide-visible">
                                        <div class="img-product">
                                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-phuong-khuong-dinh/ban-mini-168-chinh-chu-2pn-2wc-pr27521585"><img src="./assets/image/20201023143815-829d_wm.jpg" alt="BÁN CĂN HỘ CHUNG CƯ MINI 168 KHƯƠNG ĐÌNH CHÍNH CHỦ 2PN 2WC" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"></a>
                                            <span class="product-feature">
                                                
                                                
                                                
                                            </span>
                                        </div>
                                        <div class="info-product">
                                            <h3 class="p-title"><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-phuong-khuong-dinh/ban-mini-168-chinh-chu-2pn-2wc-pr27521585" title="BÁN CĂN HỘ CHUNG CƯ MINI 168 KHƯƠNG ĐÌNH CHÍNH CHỦ 2PN 2WC">BÁN CĂN HỘ CHUNG CƯ MINI 168 KHƯƠNG ĐÌNH CHÍNH CHỦ 2PN 2WC</a></h3>
                                            <div class="pro-price">1.19 tỷ</div>
                                            <span class="ic_dot">·</span><div class="pro-m2">53 m²</div>
                                            <div class="pro-adress">Thanh Xuân, Hà Nội</div>
                                            <div class="date">6 ngày trước<span class="tooltip-time">06/11/2020</span></div>
                                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                                <i class="iconSave" data-productid="27521585" data-avatar="%3Cimg%20class%3D%22product-avatar-img%22%20alt%3D%22B%26%23225%3Bn%20c%C4%83n%20h%E1%BB%99%20chung%20c%C6%B0%20mini%20168%20Kh%C6%B0%C6%A1ng%20%C4%90%26%23236%3Bnh%20ch%26%23237%3Bnh%20ch%E1%BB%A7%202PN%202WC%22%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fno-image.png%22%20src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Ficons%2Flazy-preview-image-DFE3E8.png%22%20src-lazy%3D%22https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F350x232%2F2020%2F10%2F23%2FrMP3VdP9%2F20201023143815-829d_wm.jpg%22%20is-lazy-image%3D%22true%22%2F%3E" data-avatarwap="https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F200x140%2F2020%2F10%2F23%2FrMP3VdP9%2F20201023143815-829d_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="BÁN CĂN HỘ CHUNG CƯ MINI 168 KHƯƠNG ĐÌNH CHÍNH CHỦ 2PN 2WC" data-price="1.19 tỷ" data-area="53 m²" data-pricesort="1190000000" data-areasort="53" data-room="2" data-toilets="2" data-address="Thanh Xuân, Hà Nội" data-description="Do chưa có nhu cầu sử dụng nên gia đình mình bán căn căn hộ tầng 4, căn 402, DT 53m vuông, Giá 1.19 tỷ tại 166 Khương Đình (gần Ngã tư Sở, Royal City). Đây là khu căn hộ mini mới nên rất sạch sẽ, thoáng mát, có 2 thang máy. Mặt ngoài quay ra đường lớn Khương Đình nên ô tô ra vào thoải mái, bên dưới có hầm gửi xe và bảo vệ riêng của tòa nhà nên đảm bảo về an ninh. Nhà mình gồm 1 PK và phòng bếp, 2 PN, 2 vệ sinh, 1 ban công (mặt đường Khương Đình) hướng ĐN nên mùa hè rất mát và thoáng. Hiện tại nhà có trần thạch cao, tủ bếp cao cấp, điều hòa, bình nóng lạnh, vòi sen đầy đủ, đường truyền hình cáp, internet,... Điện nước theo công tơ giá nhà nước.&lt;br/&gt;Nếu ai có nhu cầu thuê vui lòng LH Ms. Thúy 0989 315 565 hoặc 0946 966 288.&lt;br/&gt;Giá: 1.19 tỷ (có thể thương lượng) - Không qua môi giới." data-duration="6 ngày trước" data-updatedtime="06/11/2020" data-datesort="11/06/2020 17:14:01" data-contactname="Ms. Thúy" data-contactmobile="0989 315 565 ho?c 0946 966 288." data-url="https://batdongsan.com.vn/ban-can-ho-chung-cu-phuong-khuong-dinh/ban-mini-168-chinh-chu-2pn-2wc-pr27521585" data-totalmedia="10" data-createbyuser="166526"></i>
                                                </span>
                                        </div>
                                    </li><li class="vip1 vipaddon swiper-slide">
                                        <div class="img-product">
                                            <a href="https://batdongsan.com.vn/ban-nha-rieng-pho-phuong-liet-phuong-phuong-liet/ban-lo-goc-thanh-xuan-56m2-gia-4-ty-pr27621571"><img src="./assets/image/20201101095158-7226_wm.jpg" alt="BÁN NHÀ PHỐ PHƯƠNG LIỆT LÔ GÓC, THANH XUÂN, 56M2 GIÁ 4 TỶ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"></a>
                                            <span class="product-feature">
                                                
                                                
                                                
                                            </span>
                                        </div>
                                        <div class="info-product">
                                            <h3 class="p-title"><a href="https://batdongsan.com.vn/ban-nha-rieng-pho-phuong-liet-phuong-phuong-liet/ban-lo-goc-thanh-xuan-56m2-gia-4-ty-pr27621571" title="BÁN NHÀ PHỐ PHƯƠNG LIỆT LÔ GÓC, THANH XUÂN, 56M2 GIÁ 4 TỶ">BÁN NHÀ PHỐ PHƯƠNG LIỆT LÔ GÓC, THANH XUÂN, 56M2 GIÁ 4 TỶ</a></h3>
                                            <div class="pro-price">4 tỷ</div>
                                            <span class="ic_dot">·</span><div class="pro-m2">56 m²</div>
                                            <div class="pro-adress">Thanh Xuân, Hà Nội</div>
                                            <div class="date">Hôm nay<span class="tooltip-time">12/11/2020</span></div>
                                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                                <i class="iconSave" data-productid="27621571" data-avatar="%3Cimg%20class%3D%22product-avatar-img%22%20alt%3D%22B%26%23225%3Bn%20nh%26%23224%3B%20ph%E1%BB%91%20Ph%C6%B0%C6%A1ng%20Li%E1%BB%87t%20l%26%23244%3B%20g%26%23243%3Bc%2C%20Thanh%20Xu%26%23226%3Bn%2C%2056m2%20gi%26%23225%3B%204%20t%E1%BB%B7%22%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fno-image.png%22%20src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Ficons%2Flazy-preview-image-DFE3E8.png%22%20src-lazy%3D%22https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F350x232%2F2020%2F11%2F01%2F20201101095158-7226_wm.jpg%22%20is-lazy-image%3D%22true%22%2F%3E%3Cimg%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fmobile%2FNoImage.svg%22%20src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Ficons%2Flazy-preview-image-DFE3E8.png%22%20src-lazy%3D%22https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F350x232%2F2020%2F11%2F01%2F20201101095158-7ecb_wm.jpg%22%20is-lazy-image%3D%22true%22%2F%3E%3Cimg%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fmobile%2FNoImage.svg%22%20src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Ficons%2Flazy-preview-image-DFE3E8.png%22%20src-lazy%3D%22https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F350x232%2F2020%2F11%2F01%2F20201101095158-32b4_wm.jpg%22%20is-lazy-image%3D%22true%22%2F%3E" data-avatarwap="https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F640x430%2F2020%2F11%2F01%2F20201101095158-7226_wm.jpg" data-vipclass="vip1 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="BÁN NHÀ PHỐ PHƯƠNG LIỆT LÔ GÓC, THANH XUÂN, 56M2 GIÁ 4 TỶ" data-price="4 tỷ" data-area="56 m²" data-pricesort="4000000000" data-areasort="56" data-room="3" data-toilets="2" data-address="Thanh Xuân, Hà Nội" data-description="+ Nhà con cái đi nước ngoài nên không xây sửa mà đang cho thuê 10 triệu/tháng.&lt;br/&gt;+ Nhà cách ngõ ô tô 15m, cách đường to ô tô tránh 30m, khu dân trí cao, giao thông thuận lợi, tiện ích không thiếu thứ gì.&lt;br/&gt;+ Mảnh đất lô góc vuông vắn 2 mặt tiền đón lộc, thoáng sáng và tràn ngập sinh khí, hiện có 2 nhà 2 tầng và 3 tầng.&lt;br/&gt;+ Nhà nằm ở vị trí sầm uất, trong tuyến phố Phương Liệt giao Trường Chinh, Giải Phóng, gần các phố Đại La, Tôn Thất Tùng, Lê Trọng Tấn, Nguyễn Lân... Xung quanh là các trường Đại học Bách Khoa, ĐH Xây dựng, ĐH Kinh tế Quốc dân, Trường cấp 1, 2 Phương Liệt... Gần bệnh viện Bạch Mai, Việt Pháp, Tai Mũi Họng TW, ga Giáp Bát, cách hồ sinh thái Phương Liệt vài chục mét, gần trạm y tế, nhà văn hoá, UBND phường vô cùng tiện lợi...&lt;br/&gt;+ Thửa đất vuông vắn, lô góc, 2 mặt thoáng đón lộc, từ tầng 2 xây đua ra thành 80m2. Khách mua về xây toà chung cư mini 7 tầng thang máy cho thuê thì hái ra tiền.&lt;br/&gt;+ Sổ đỏ vuông vắn chính chủ." data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 08:28:10" data-contactname="Đinh Xuân Lượng" data-contactmobile="0987818089" data-url="https://batdongsan.com.vn/ban-nha-rieng-pho-phuong-liet-phuong-phuong-liet/ban-lo-goc-thanh-xuan-56m2-gia-4-ty-pr27621571" data-totalmedia="3" data-createbyuser="1496408"></i>
                                                </span>
                                        </div>
                                    </li><li class="vip0 swiper-slide">
                                        <div class="img-product">
                                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-hong-ha-prj-botanica-premier/cho-nnh-8-gia-nt-mua-dich-1-2-3pn-officetel-tu-9tr-th-pr27738698"><img src="./assets/image/20201110144803-5576_wm.jpg" alt="Cho thuê nhanh 8 căn Botanica Premier Hồng Hà - giá nhất mùa dịch - 1 - 2 - 3PN - officetel từ 9tr" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"></a>
                                            <span class="product-feature">
                                                
                                                
                                                
                                            </span>
                                        </div>
                                        <div class="info-product">
                                            <h3 class="p-title"><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-hong-ha-prj-botanica-premier/cho-nnh-8-gia-nt-mua-dich-1-2-3pn-officetel-tu-9tr-th-pr27738698" title="Cho thuê nhanh 8 căn Botanica Premier Hồng Hà - giá nhất mùa dịch - 1 - 2 - 3PN - officetel từ 9tr">Cho thuê nhanh 8 căn Botanica Premier Hồng Hà - giá nhất mùa dịch - 1 - 2 - 3PN - officetel từ 9tr</a></h3>
                                            <div class="pro-price">9 triệu/tháng</div>
                                            <span class="ic_dot">·</span><div class="pro-m2">75 m²</div>
                                            <div class="pro-adress">Hồ Chí Minh, Tân Bình</div>
                                            <div class="date">2 ngày trước<span class="tooltip-time">10/11/2020</span></div>
                                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                                <i class="iconSave" data-productid="27738698" data-avatar="%3Cimg%20class%3D%22product-avatar-img%22%20alt%3D%22Cho%20thu%26%23234%3B%20nhanh%208%20c%C4%83n%20Botanica%20Premier%20H%E1%BB%93ng%20H%26%23224%3B%20-%20gi%26%23225%3B%20nh%E1%BA%A5t%20m%26%23249%3Ba%20d%E1%BB%8Bch%20-%201%20-%202%20-%203PN%20-%20officetel%20t%E1%BB%AB%209tr%22%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fno-image.png%22%20src%3D%22https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F350x232%2F2020%2F11%2F10%2F20201110144803-5576_wm.jpg%22%2F%3E" data-avatarwap="https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F200x140%2F2020%2F11%2F10%2F20201110144803-5576_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhanh 8 căn Botanica Premier Hồng Hà - giá nhất mùa dịch - 1 - 2 - 3PN - officetel từ 9tr" data-price="9 triệu/tháng" data-area="75 m²" data-pricesort="9000000" data-areasort="75" data-room="" data-toilets="0" data-address="Hồ Chí Minh, Tân Bình" data-description="Hotline: 0933.46.3434 chuyên hỗ trợ khách hàng tìm thuê căn hộ Botanica Novaland 24/07, cam kết rổ hàng tốt nhất khu vực, chính chủ giá tốt, tìm căn nhanh và phù hợp cho khách hàng nhanh nhất, chuyên" data-duration="2 ngày trước" data-updatedtime="10/11/2020" data-datesort="2020-11-10T14:52:39+07:00" data-contactname="Nguyenvanquang" data-contactmobile="0933463434" data-url="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-hong-ha-prj-botanica-premier/cho-nnh-8-gia-nt-mua-dich-1-2-3pn-officetel-tu-9tr-th-pr27738698" data-totalmedia="0" data-createbyuser="356511"></i>
                                                </span>
                                        </div>
                                    </li><li class="vip0 swiper-slide">
                                        <div class="img-product">
                                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-phuong-8-12/ban-duong-127-le-van-tho-trung-tam-quan-go-vap-gan-cho-hanh-thong-tay-pr27742648"><img src="./assets/image/20201110185937-3217_wm.jpg" alt="Bán nhà mặt 127 Lê Văn Thọ, trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"></a>
                                            <span class="product-feature">
                                                
                                                
                                                
                                            </span>
                                        </div>
                                        <div class="info-product">
                                            <h3 class="p-title"><a href="https://batdongsan.com.vn/ban-nha-mat-pho-phuong-8-12/ban-duong-127-le-van-tho-trung-tam-quan-go-vap-gan-cho-hanh-thong-tay-pr27742648" title="Bán nhà mặt 127 Lê Văn Thọ, trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây">Bán nhà mặt 127 Lê Văn Thọ, trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây</a></h3>
                                            <div class="pro-price">22 tỷ</div>
                                            <span class="ic_dot">·</span><div class="pro-m2">104 m²</div>
                                            <div class="pro-adress">Hồ Chí Minh, Gò Vấp</div>
                                            <div class="date">2 ngày trước<span class="tooltip-time">10/11/2020</span></div>
                                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                                <i class="iconSave" data-productid="27742648" data-avatar="%3Cimg%20class%3D%22product-avatar-img%22%20alt%3D%22B%26%23225%3Bn%20nh%26%23224%3B%20m%E1%BA%B7t%20127%20L%26%23234%3B%20V%C4%83n%20Th%E1%BB%8D%2C%20trung%20t%26%23226%3Bm%20qu%E1%BA%ADn%20G%26%23242%3B%20V%E1%BA%A5p%2C%20g%E1%BA%A7n%20ch%E1%BB%A3%20H%E1%BA%A1nh%20Th%26%23244%3Bng%20T%26%23226%3By%22%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fno-image.png%22%20src%3D%22https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F350x232%2F2020%2F11%2F10%2F20201110185937-3217_wm.jpg%22%2F%3E" data-avatarwap="https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F200x140%2F2020%2F11%2F10%2F20201110185937-3217_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà mặt 127 Lê Văn Thọ, trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây" data-price="22 tỷ" data-area="104 m²" data-pricesort="22000000000" data-areasort="104" data-room="" data-toilets="0" data-address="Hồ Chí Minh, Gò Vấp" data-description="Bán nhà mặt 127 Lê Văn Thọ, Gò Vấp. Trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây, đang cho thuê làm khách sạn. Diện tích 4x26m, SHR. Khu dân cư rất đông, hiện hữu, tiện ích xung quanh. Vị trí đẹp, n" data-duration="2 ngày trước" data-updatedtime="10/11/2020" data-datesort="2020-11-10T19:02:46+07:00" data-contactname="Bé Hường" data-contactmobile="0794686866" data-url="https://batdongsan.com.vn/ban-nha-mat-pho-phuong-8-12/ban-duong-127-le-van-tho-trung-tam-quan-go-vap-gan-cho-hanh-thong-tay-pr27742648" data-totalmedia="0" data-createbyuser="1101976"></i>
                                                </span>
                                        </div>
                                    </li><li class="vip5 swiper-slide">
                                        <div class="img-product">
                                            <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-hoa-bang-phuong-yen-hoa-2/can-ban-ngo-90-pho-o-to-do-cua-kinh-doanh-70m2x4t-gia-chi-6-75-ty-pr27722031"><img src="./assets/image/20201109140612-2d75_wm.jpg" alt="Cần bán nhà ngõ 90 phố Hoa Bằng, Yên Hòa. Ô tô đỗ cửa, kinh doanh, 70m2 x 4T, giá chỉ 6,75 tỷ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"></a>
                                            <span class="product-feature">
                                                
                                                
                                                
                                            </span>
                                        </div>
                                        <div class="info-product">
                                            <h3 class="p-title"><a href="https://batdongsan.com.vn/ban-nha-rieng-duong-hoa-bang-phuong-yen-hoa-2/can-ban-ngo-90-pho-o-to-do-cua-kinh-doanh-70m2x4t-gia-chi-6-75-ty-pr27722031" title="Cần bán nhà ngõ 90 phố Hoa Bằng, Yên Hòa. Ô tô đỗ cửa, kinh doanh, 70m2 x 4T, giá chỉ 6,75 tỷ">Cần bán nhà ngõ 90 phố Hoa Bằng, Yên Hòa. Ô tô đỗ cửa, kinh doanh, 70m2 x 4T, giá chỉ 6,75 tỷ</a></h3>
                                            <div class="pro-price">6.75 tỷ</div>
                                            <span class="ic_dot">·</span><div class="pro-m2">70 m²</div>
                                            <div class="pro-adress">Hà Nội, Cầu Giấy</div>
                                            <div class="date">3 ngày trước<span class="tooltip-time">09/11/2020</span></div>
                                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                                <i class="iconSave" data-productid="27722031" data-avatar="%3Cimg%20class%3D%22product-avatar-img%22%20alt%3D%22C%E1%BA%A7n%20b%26%23225%3Bn%20nh%26%23224%3B%20ng%26%23245%3B%2090%20ph%E1%BB%91%20Hoa%20B%E1%BA%B1ng%2C%20Y%26%23234%3Bn%20H%26%23242%3Ba.%20%26%23212%3B%20t%26%23244%3B%20%C4%91%E1%BB%97%20c%E1%BB%ADa%2C%20kinh%20doanh%2C%2070m2%20x%204T%2C%20gi%26%23225%3B%20ch%E1%BB%89%206%2C75%20t%E1%BB%B7%22%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fno-image.png%22%20src%3D%22https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F350x232%2F2020%2F11%2F09%2F20201109140612-2d75_wm.jpg%22%2F%3E" data-avatarwap="https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F200x140%2F2020%2F11%2F09%2F20201109140612-2d75_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần bán nhà ngõ 90 phố Hoa Bằng, Yên Hòa. Ô tô đỗ cửa, kinh doanh, 70m2 x 4T, giá chỉ 6,75 tỷ" data-price="6.75 tỷ" data-area="70 m²" data-pricesort="6750000000" data-areasort="70" data-room="4" data-toilets="4" data-address="Hà Nội, Cầu Giấy" data-description="Cần bán nhà ngõ 90 phố Hoa Bằng, Yên Hòa. Ô tô đỗ cửa, kinh doanh, 70m2 x 4T, giá chỉ 6,75 tỷ. Thiết kế 4 tầng bao gồm: + Tầng 1: Phòng khách, bếp, nhà vệ sinh. + Tầng 2 + 3: Tầng 2 phòng + 1 nhà vệ " data-duration="3 ngày trước" data-updatedtime="09/11/2020" data-datesort="2020-11-09T14:07:29+07:00" data-contactname="Anh Tuyến" data-contactmobile="0862820127" data-url="https://batdongsan.com.vn/ban-nha-rieng-duong-hoa-bang-phuong-yen-hoa-2/can-ban-ngo-90-pho-o-to-do-cua-kinh-doanh-70m2x4t-gia-chi-6-75-ty-pr27722031" data-totalmedia="0" data-createbyuser="1493788"></i>
                                                </span>
                                        </div>
                                    </li><li class="vip5 swiper-slide">
                                        <div class="img-product">
                                            <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-hoa-bang-phuong-yen-hoa-2/chinh-chu-ban-gap-ngo-184-gia-1-5-ty-dt-35mx3t-o-luon-pr24298624"><img src="./assets/image/20200210153555-cd11_wm.jpg" alt="Chính chủ bán gấp nhà ngõ 184 Hoa Bằng. Giá 1.5 tỷ, DT 35m2 x 3T, ở luôn" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"></a>
                                            <span class="product-feature">
                                                
                                                
                                                
                                            </span>
                                        </div>
                                        <div class="info-product">
                                            <h3 class="p-title"><a href="https://batdongsan.com.vn/ban-nha-rieng-duong-hoa-bang-phuong-yen-hoa-2/chinh-chu-ban-gap-ngo-184-gia-1-5-ty-dt-35mx3t-o-luon-pr24298624" title="Chính chủ bán gấp nhà ngõ 184 Hoa Bằng. Giá 1.5 tỷ, DT 35m2 x 3T, ở luôn">Chính chủ bán gấp nhà ngõ 184 Hoa Bằng. Giá 1.5 tỷ, DT 35m2 x 3T, ở luôn</a></h3>
                                            <div class="pro-price">1.5 tỷ</div>
                                            <span class="ic_dot">·</span><div class="pro-m2">35 m²</div>
                                            <div class="pro-adress">Hà Nội, Cầu Giấy</div>
                                            <div class="date">3 tháng trước<span class="tooltip-time">04/08/2020</span></div>
                                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                                <i class="iconSave" data-productid="24298624" data-avatar="%3Cimg%20class%3D%22product-avatar-img%22%20alt%3D%22Ch%26%23237%3Bnh%20ch%E1%BB%A7%20b%26%23225%3Bn%20g%E1%BA%A5p%20nh%26%23224%3B%20ng%26%23245%3B%20184%20Hoa%20B%E1%BA%B1ng.%20Gi%26%23225%3B%201.5%20t%E1%BB%B7%2C%20DT%2035m2%20x%203T%2C%20%E1%BB%9F%20lu%26%23244%3Bn%22%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fno-image.png%22%20src%3D%22https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F350x232%2F2020%2F02%2F10%2F20200210153555-cd11_wm.jpg%22%2F%3E" data-avatarwap="https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F200x140%2F2020%2F02%2F10%2F20200210153555-cd11_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ bán gấp nhà ngõ 184 Hoa Bằng. Giá 1.5 tỷ, DT 35m2 x 3T, ở luôn" data-price="1.5 tỷ" data-area="35 m²" data-pricesort="1500000000" data-areasort="35" data-room="3" data-toilets="2" data-address="Hà Nội, Cầu Giấy" data-description="Chính chủ bán gấp nhà ngõ 184 Hoa Bằng, giá 1.5 tỷ, DT 35m2 x 3T, ở luôn. Mô tả: Diện tích xây dựng 35m2 x 2,5 tầng. Mặt tiền rộng 3,3m. Hướng Bắc mát mẻ. Ngõ nông, gần phố chính, xe máy tránh nhau t" data-duration="3 tháng trước" data-updatedtime="04/08/2020" data-datesort="2020-08-04T12:17:03.427+07:00" data-contactname="Chính Chủ" data-contactmobile="0943699922" data-url="https://batdongsan.com.vn/ban-nha-rieng-duong-hoa-bang-phuong-yen-hoa-2/chinh-chu-ban-gap-ngo-184-gia-1-5-ty-dt-35mx3t-o-luon-pr24298624" data-totalmedia="0" data-createbyuser="377624"></i>
                                                </span>
                                        </div>
                                    </li><li class="vip5 swiper-slide">
                                        <div class="img-product">
                                            <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-tran-thai-tong-phuong-dich-vong-hau/ban-30m2-4tang-1-95-ty-cau-giay-pr27234497"><img src="./assets/image/20200930133829-6bf0_wm.jpg" alt="Bán nhà Trần Thái Tông 30m2 - 4 tầng - 1.95 tỷ Cầu Giấy" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"></a>
                                            <span class="product-feature">
                                                
                                                
                                                
                                            </span>
                                        </div>
                                        <div class="info-product">
                                            <h3 class="p-title"><a href="https://batdongsan.com.vn/ban-nha-rieng-duong-tran-thai-tong-phuong-dich-vong-hau/ban-30m2-4tang-1-95-ty-cau-giay-pr27234497" title="Bán nhà Trần Thái Tông 30m2 - 4 tầng - 1.95 tỷ Cầu Giấy">Bán nhà Trần Thái Tông 30m2 - 4 tầng - 1.95 tỷ Cầu Giấy</a></h3>
                                            <div class="pro-price">1.95 tỷ</div>
                                            <span class="ic_dot">·</span><div class="pro-m2">30 m²</div>
                                            <div class="pro-adress">Hà Nội, Cầu Giấy</div>
                                            <div class="date">1 tháng trước<span class="tooltip-time">30/09/2020</span></div>
                                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                                <i class="iconSave" data-productid="27234497" data-avatar="%3Cimg%20class%3D%22product-avatar-img%22%20alt%3D%22B%26%23225%3Bn%20nh%26%23224%3B%20Tr%E1%BA%A7n%20Th%26%23225%3Bi%20T%26%23244%3Bng%2030m2%20-%204%20t%E1%BA%A7ng%20-%201.95%20t%E1%BB%B7%20C%E1%BA%A7u%20Gi%E1%BA%A5y%22%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fno-image.png%22%20src%3D%22https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F350x232%2F2020%2F09%2F30%2F20200930133829-6bf0_wm.jpg%22%2F%3E" data-avatarwap="https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F200x140%2F2020%2F09%2F30%2F20200930133829-6bf0_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà Trần Thái Tông 30m2 - 4 tầng - 1.95 tỷ Cầu Giấy" data-price="1.95 tỷ" data-area="30 m²" data-pricesort="1950000000" data-areasort="30" data-room="4" data-toilets="3" data-address="Hà Nội, Cầu Giấy" data-description="- Phố Trần Thái Tông nằm ở trung tâm quận Cầu Giấy. - Nhà đẹp ở luôn, giá siêu dễ thương. - Vị trí ngay gần ngã tư phố Xuân Thuỷ và Nguyễn Phong Sắc Trần Thái Tông. - Nhà chủ tự xây chắc chắn, hàng x" data-duration="1 tháng trước" data-updatedtime="30/09/2020" data-datesort="2020-10-08T09:52:51.733+07:00" data-contactname="Nguyễn Xuân Mạnh" data-contactmobile="0971188995" data-url="https://batdongsan.com.vn/ban-nha-rieng-duong-tran-thai-tong-phuong-dich-vong-hau/ban-30m2-4tang-1-95-ty-cau-giay-pr27234497" data-totalmedia="0" data-createbyuser="1318585"></i>
                                                </span>
                                        </div>
                                    </li><li class="vip5 swiper-slide">
                                        <div class="img-product">
                                            <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-xuan-thuy-phuong-dich-vong/ban-gap-mat-ngo-gia-1-45-ty-26m2-oto-chay-qua-pr27544966"><img src="./assets/image/no-image.png" alt="Bán gấp nhà mặt ngõ Xuân Thủy giá 1,45 tỷ - 26m2, ô tô chạy qua" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"></a>
                                            <span class="product-feature">
                                                
                                                
                                                
                                            </span>
                                        </div>
                                        <div class="info-product">
                                            <h3 class="p-title"><a href="https://batdongsan.com.vn/ban-nha-rieng-duong-xuan-thuy-phuong-dich-vong/ban-gap-mat-ngo-gia-1-45-ty-26m2-oto-chay-qua-pr27544966" title="Bán gấp nhà mặt ngõ Xuân Thủy giá 1,45 tỷ - 26m2, ô tô chạy qua">Bán gấp nhà mặt ngõ Xuân Thủy giá 1,45 tỷ - 26m2, ô tô chạy qua</a></h3>
                                            <div class="pro-price">1.45 tỷ</div>
                                            <span class="ic_dot">·</span><div class="pro-m2">26 m²</div>
                                            <div class="pro-adress">Hà Nội, Cầu Giấy</div>
                                            <div class="date">2 tuần trước<span class="tooltip-time">26/10/2020</span></div>
                                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                                <i class="iconSave" data-productid="27544966" data-avatar="%3Cimg%20class%3D%22product-avatar-img%22%20alt%3D%22B%26%23225%3Bn%20g%E1%BA%A5p%20nh%26%23224%3B%20m%E1%BA%B7t%20ng%26%23245%3B%20Xu%26%23226%3Bn%20Th%E1%BB%A7y%20gi%26%23225%3B%201%2C45%20t%E1%BB%B7%20-%2026m2%2C%20%26%23244%3B%20t%26%23244%3B%20ch%E1%BA%A1y%20qua%22%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fno-image.png%22%20src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fno-image.png%22%2F%3E" data-avatarwap="https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fmobile%2FNoImage.svg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán gấp nhà mặt ngõ Xuân Thủy giá 1,45 tỷ - 26m2, ô tô chạy qua" data-price="1.45 tỷ" data-area="26 m²" data-pricesort="1450000000" data-areasort="26" data-room="1" data-toilets="1" data-address="Hà Nội, Cầu Giấy" data-description="Bán gấp nhà mặt ngõ Xuân Thủy giá 1,45 tỷ - 26m2, ô tô chạy qua. Thông tin: Diện tích xây dựng 26m2 x 2 tầng. Mặt tiền 4m. Hướng Đông. - Nhà gần đường lớn, ngõ rộng, tối oto có thể vào được, di chuyể" data-duration="2 tuần trước" data-updatedtime="26/10/2020" data-datesort="2020-10-26T09:36:10+07:00" data-contactname="Chính Chủ" data-contactmobile="0943699922" data-url="https://batdongsan.com.vn/ban-nha-rieng-duong-xuan-thuy-phuong-dich-vong/ban-gap-mat-ngo-gia-1-45-ty-26m2-oto-chay-qua-pr27544966" data-totalmedia="0" data-createbyuser="377624"></i>
                                                </span>
                                        </div>
                                    </li><li class="vip5 swiper-slide">
                                        <div class="img-product">
                                            <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-xuan-thuy-phuong-dich-vong-hau/ban-gap-mat-ngo-gia-1-35-ty-dt-26m2-oto-chay-qua-pr27635395"><img src="./assets/image/20201102172750-466d_wm.jpg" alt="Bán gấp nhà mặt ngõ Xuân Thủy, giá 1,35 tỷ. DT 26m2, ô tô chạy qua" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png"></a>
                                            <span class="product-feature">
                                                
                                                
                                                
                                            </span>
                                        </div>
                                        <div class="info-product">
                                            <h3 class="p-title"><a href="https://batdongsan.com.vn/ban-nha-rieng-duong-xuan-thuy-phuong-dich-vong-hau/ban-gap-mat-ngo-gia-1-35-ty-dt-26m2-oto-chay-qua-pr27635395" title="Bán gấp nhà mặt ngõ Xuân Thủy, giá 1,35 tỷ. DT 26m2, ô tô chạy qua">Bán gấp nhà mặt ngõ Xuân Thủy, giá 1,35 tỷ. DT 26m2, ô tô chạy qua</a></h3>
                                            <div class="pro-price">1.35 tỷ</div>
                                            <span class="ic_dot">·</span><div class="pro-m2">26 m²</div>
                                            <div class="pro-adress">Hà Nội, Cầu Giấy</div>
                                            <div class="date">1 tuần trước<span class="tooltip-time">02/11/2020</span></div>
                                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                                <i class="iconSave" data-productid="27635395" data-avatar="%3Cimg%20class%3D%22product-avatar-img%22%20alt%3D%22B%26%23225%3Bn%20g%E1%BA%A5p%20nh%26%23224%3B%20m%E1%BA%B7t%20ng%26%23245%3B%20Xu%26%23226%3Bn%20Th%E1%BB%A7y%2C%20gi%26%23225%3B%201%2C35%20t%E1%BB%B7.%20DT%2026m2%2C%20%26%23244%3B%20t%26%23244%3B%20ch%E1%BA%A1y%20qua%22%20error-image-src%3D%22https%3A%2F%2Fstaticfile.batdongsan.com.vn%2Fimages%2Fno-image.png%22%20src%3D%22https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F350x232%2F2020%2F11%2F02%2F20201102172750-466d_wm.jpg%22%2F%3E" data-avatarwap="https%3A%2F%2Ffile4.batdongsan.com.vn%2Fcrop%2F200x140%2F2020%2F11%2F02%2F20201102172750-466d_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán gấp nhà mặt ngõ Xuân Thủy, giá 1,35 tỷ. DT 26m2, ô tô chạy qua" data-price="1.35 tỷ" data-area="26 m²" data-pricesort="1350000000" data-areasort="26" data-room="" data-toilets="0" data-address="Hà Nội, Cầu Giấy" data-description="Bán gấp nhà mặt ngõ Xuân Thủy giá 1,35 tỷ. DT 26m2, ô tô chạy qua. Thông tin: Diện tích xây dựng 26m2 x 2 tầng. Mặt tiền 4m. Hướng Đông. - Nhà gần đường lớn, ngõ rộng, tối oto có thể vào được, di chu" data-duration="1 tuần trước" data-updatedtime="02/11/2020" data-datesort="2020-11-02T17:28:15+07:00" data-contactname="Chính Chủ" data-contactmobile="0988796665" data-url="https://batdongsan.com.vn/ban-nha-rieng-duong-xuan-thuy-phuong-dich-vong-hau/ban-gap-mat-ngo-gia-1-35-ty-dt-26m2-oto-chay-qua-pr27635395" data-totalmedia="0" data-createbyuser="377624"></i>
                                                </span>
                                        </div>
                                    </li></ul>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        <div class="swiper-button-next slide-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><img src="./assets/image/slide-next.png"></div>
        <div class="swiper-button-prev slide-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"><img src="./assets/image/slide-prev.png"></div>
    </div>
</div>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Details && window.FrontEnd.Product.Details.ListingHistory) {
            new FrontEnd.Product.Details.ListingHistory({
                product: {
                    productId: 27748072,
                    avatar: 'https://file4.batdongsan.com.vn/crop/257x147/2020/11/11/20201111095750-3277_wm.jpg',
                    avatarinfo: '<img class="product-avatar-img" alt="Kh&#225;ch kẹt tiền cần b&#225;n nhanh l&#244; đất Bi&#234;n H&#242;a New City, DT 5 x 20m, 6 x 20m, 12 x 20m, đ&#227; nhận sổ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111095750-3277_wm.jpg" is-lazy-image="true"/>',
                    avatarinfowap: 'https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111095750-3277_wm.jpg',
                    vipClass: 'vip0',
                    isAddon: 'false' === 'true',
                    has3D: 'false' === 'true',
                    has360: 'false' === 'true',
                    hasVideo: 'false' === 'true',
                    title: 'KH&#xC1;CH K&#x1EB8;T TI&#x1EC0;N C&#x1EA6;N B&#xC1;N NHANH L&#xD4; &#x110;&#x1EA4;T BI&#xCA;N H&#xD2;A NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, &#x110;&#xC3; NH&#x1EAC;N S&#x1ED4;',
                    price: '1.45 t&#x1EF7;',
                    area: '100 m&#xB2;',
                    address: 'Bi&#xEA;n H&#xF2;a, &#x110;&#x1ED3;ng Nai',
                    duration: '2 ng&#xE0;y tr&#x1B0;&#x1EDB;c',
                    updatedTime: '11/11/2020',
                    avatarSave: '&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Kh&amp;#225;ch k&#x1EB9;t ti&#x1EC1;n c&#x1EA7;n b&amp;#225;n nhanh l&amp;#244; &#x111;&#x1EA5;t Bi&amp;#234;n H&amp;#242;a New City, DT 5 x 20m, 6 x 20m, 12 x 20m, &#x111;&amp;#227; nh&#x1EAD;n s&#x1ED5;&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111095750-3277_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;',
                    avatarWapSave: 'https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111095750-3277_wm.jpg',
                    priceSort: '1450000000',
                    areaSort: '100',
                    room: '',
                    toilets: '',
                    description: 'Kh&#xE1;ch k&#x1EB9;t ti&#x1EC1;n mu&#x1ED1;n &#x111;&#x1EA9;y nhanh m&#x1ED9;t s&#x1ED1; L&#xF4; Bi&#xEA;n H&#xF2;a New City &#x1EDF; s&#xE2;n golf Long Th&#xE0;nh.&lt;br/&gt;DT:&lt;br/&gt;5 x 20m.&lt;br/&gt;6 x 18m.&lt;br/&gt;9 x 20 m.&lt;br/&gt;12 x 20 m.&lt;br/&gt;Gi&#xE1;: 1.450 t&#x1EF7; bao sang t&#xEA;n v&#xE0; ra s&#x1ED5; h&#x1ED3;ng.&lt;br/&gt;T&#x1EA5;t c&#x1EA3; &#x111;&#xE3; c&#xF3; s&#x1ED5; h&#x1ED3;ng t&#x1EEB;ng n&#x1EC1;n, m&#x1EB7;t ti&#x1EC1;n &#x111;&#x1B0;&#x1EDD;ng 24m, 18m, 15m, 13m.&lt;br/&gt;L&#xE0;m vi&#x1EC7;c tr&#x1EF1;c ti&#x1EBF;p ch&#xED;nh ch&#x1EE7; th&#x1B0;&#x1A1;ng l&#x1B0;&#x1EE3;ng gi&#xE1; t&#x1ED1;t nh&#x1EA5;t cho anh ch&#x1ECB; mua &#x111;&#x1EA7;u t&#x1B0; ho&#x1EB7;c &#x111;&#x1EC3; d&#xE0;nh &#x1EDF; sau n&#xE0;y.&lt;br/&gt;LH: 0903224939 (B&#xE1; L&#x1EE3;i).&lt;br/&gt;&lt;br/&gt;M&#x1ED9;t s&#x1ED1; th&#xF4;ng tin c&#x1A1; b&#x1EA3;n Bi&#xEA;n H&#xF2;a New City.&lt;br/&gt;- H&#x1ED7; tr&#x1EE3; vay ng&#xE2;n h&#xE0;ng.&lt;br/&gt;- C&#x1A1; s&#x1EDF; h&#x1EA1; t&#x1EA7;ng ho&#xE0;n ch&#x1EC9;nh 100% (&#x111;i&#x1EC7;n, &#x111;&#x1B0;&#x1EDD;ng, c&#xE2;y xanh, n&#x1B0;&#x1EDB;c... ).&lt;br/&gt;- C&#x1EAF;m m&#x1ED1;c ph&#xE2;n l&#xF4; t&#x1EEB;ng n&#x1EC1;n.&lt;br/&gt;- D&#x1EF1; &#xE1;n &#x111;&#x1EA5;t n&#x1EC1;n Bi&#xEA;n Ho&#xE0; New City n&#x103;m trong khu kinh t&#x1EBF; tr&#x1ECD;ng &#x111;i&#x1EC3;m, khu s&#xE2;n golf Long Th&#xE0;nh k&#x1EBF;t n&#x1ED1;i Qu&#x1ED1;c L&#x1ED9; 51, cao t&#x1ED1;c Long Th&#xE0;nh - V&#x169;ng T&#xE0;u, H&#x1B0;&#x1A1;ng L&#x1ED9; 2 - C&#x1EA7;u &#x110;&#x1ED3;ng Nai 2, b&#xEA;n c&#x1EA1;nh khu &#x111;&#xF4; th&#x1ECB; Aqua City, C&#xE1;ch d&#x1EF1; &#xE1;n Vincity - Qu&#x1EAD;n 9 ch&#x1EC9; m&#x1ED9;t c&#xE2;y c&#x1EA7;u.&lt;br/&gt;- C&#x1EA7;u V&#xE0;m C&#xE1;i S&#x1EE9;t &#x111;&#xE3; kh&#x1EDF;i c&#xF4;ng &#x111;i ngang d&#x1EF1; &#xE1;n &#x111;&#x1EBF;n cao t&#x1ED1;c Long Th&#xE0;nh, r&#xFA;t ng&#x1EAF;n &#x111;o&#x1EA1;n &#x111;&#x1B0;&#x1EDD;ng v&#x1EC1; Qu&#x1EAD;n 2, TP. HCM ch&#x1EC9; c&#xF2;n 20 ph&#xFA;t.&lt;br/&gt;- Ti&#x1EC7;n &#xED;ch &#x111;&#x1EB3;ng c&#x1EA5;p ti&#xEA;u chu&#x1EA9;n Qu&#x1ED1;c t&#x1EBF;:&lt;br/&gt;&#x2B; Qu&#x1EA7;n th&#x1EC3; s&#xE2;n golf, nh&#xE0; h&#xE0;ng.&lt;br/&gt;&#x2B; Khu&#xF4;n vi&#xEA;n l&#x1EDB;n, c&#xF4;ng vi&#xEA;n xanh t&#x1B0;&#x1A1;i m&#xE1;t.&lt;br/&gt;&#x2B; Khu th&#x1B0;&#x1A1;ng m&#x1EA1;i, h&#x1ED3; b&#x1A1;i, ph&#xF2;ng gym, spa, tr&#x1B0;&#x1EDD;ng h&#x1ECD;c, khu y t&#x1EBF;.&lt;br/&gt;&#x2B; An ninh 24/24.',
                    dateSort: '11/11/2020 09:58:51',
                    contactName: 'Th&#xE1;i B&#xE1; L&#x1EE3;i',
                    contactMobile: '0946722227',
                    totalMedia: '3',
                    createByUser: '649852'
                },
                getListingHistory: '/Product/ProductDetail/GetListingHistory',
                listingLimit: 20,
                displayedItemCount: 12,
                asyncTime: 24,
                errorImageSrc: 'https://staticfile.batdongsan.com.vn/images/no-image.png'
            });
        }
        else {
            setTimeout(callJQuery, 100);
        }
    })();
</script>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Details && window.FrontEnd.Product.Details.Details) {
            window.FrontEnd_Product_Details_DetailsBinnova = new FrontEnd.Product.Details.Details({
                urlSubmitFeedback: '/Product/ProductDetail/SendFeedback'
            });
        }
        else {
            setTimeout(callJQuery, 100);
        }
    })();
    (function callJQueryChart() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Details && window.FrontEnd.Product.Details.Chart) {
            window.FrontEnd_Product_Details_ChartBinnova = new FrontEnd.Product.Details.Chart({
                urlGetData: '/Product/ProductDetail/GetProductChart',
                cateId: '40',
                projectId: '3684',
                districtId: '245',
                chartlabel: 'Qu&#xFD; 1/2019, Qu&#xFD; 2/2019, Qu&#xFD; 3/2019, Qu&#xFD; 4/2019, Qu&#xFD; 1/2020, Qu&#xFD; 2/2020'
            });
        }
        else {
            setTimeout(callJQueryChart, 100);
        }
    })();
</script>

            <!--end description-->
            <!--start product-area-->
            <!--end product area-->
            <!--start product history-->
            <!--end product history-->
            <div class="divide divide-full">&nbsp;</div>
            <div class="note pad-16">
                Quý vị đang xem nội dung tin rao "Khách kẹt tiền cần bán nhanh lô đất Biên Hòa New City, DT 5 x 20m, 6 x 20m, 12 x 20m, đã nhận sổ" - <strong style="font-weight: bold">Mã tin 27748072</strong>.
                Mọi thông tin, nội dung liên quan tới tin rao này là do người đăng tin đăng tải và chịu trách nhiệm.
                Batdongsan.com.vn luôn cố gắng để các thông tin được hữu ích nhất cho quý vị tuy nhiên Batdongsan.com.vn không đảm bảo và không chịu trách nhiệm về bất kỳ thông tin, nội dung nào liên quan tới tin rao này.
                Trường hợp phát hiện nội dung tin đăng không chính xác, Quý vị hãy thông báo và cung cấp thông tin cho Ban quản trị Batdongsan.com.vn theo <strong style="font-weight: bold">Hotline 19001881</strong> để được hỗ trợ nhanh và kịp thời nhất.
            </div>
        </section>
    </div>
    <div class="main-right">
                <div class="box-contact">
            <div class="user">
                    <div class="avatar">
                                <span>L</span>
                    </div>
                                    <div class="name" title="Thái Bá Lợi">
                        Thái Bá Lợi
                    </div>
                                    <div class="info">
                        <a href="https://batdongsan.com.vn/tin-rao-cung-nguoi-dang-nha-dat-ban-us649852">Xem thêm 1 tin khác</a>
                </div>
                <div class="phone text-center"><span class="phoneEvent" raw="0946722227" moblie="094672222709467222270946722227">0946 722 ***&nbsp;·&nbsp;Hiện số</span></div>
                    <div class="mail btn-border-grey text-center">
                        <a id="email" href="mailto:bdscamranh@gmail.com?subject=Kha%CC%81ch%20ha%CC%80ng%20Batdongsan.com%20quan%20t%C3%A2m%20t%C6%A1%CC%81i%20tin%20%C4%91%C4%83ng&amp;body=T%C3%B4i%20co%CC%81%20quan%20t%C3%A2m%20t%C6%A1%CC%81i%20tin%20%C4%91%C4%83ng%20na%CC%80y%20https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" data-email="bdscamranh@gmail.com" class="email-copy">Gửi email</a>
                    </div>
                <div class="btn-border-grey text-center div-send-contact"><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#divSendContact" id="btnSendContact">Yêu cầu liên hệ lại</a></div>
            </div>
        </div>       

        
    <div class="divide-full"></div>
    <div class="box-common box-common-filled box-max-item-cate">
        <h2 class="box-title">Bán đất nền dự án theo dự án tại Thành phố Biên Hòa</h2>

        <div class="box-content link-hover-blue">
            <ul>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-golden-town" title="Bán đất nền dự án Biên Hòa Golden Town">
                                Biên Hòa Golden Town (12)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-new-city" title="Bán đất nền dự án Biên Hòa New City">
                                Biên Hòa New City (184)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-new-town" title="Bán đất nền dự án Biên Hòa New Town">
                                Biên Hòa New Town (16)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-dreamland-city" title="Bán đất nền dự án Dreamland City">
                                Dreamland City (45)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-golden-center-city-3" title="Bán đất nền dự án Golden Center City 3">
                                Golden Center City 3 (20)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-khu-dan-cu-duong-5-noi-dai" title="Bán đất nền dự án Khu dân cư đường 5 nối dài">
                                Khu dân cư đường 5 nối dài (27)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-paradise-riverside" title="Bán đất nền dự án Paradise Riverside">
                                Paradise Riverside (30)
                            </a>
                        </h3>
                    </li>
            </ul>
        </div>
    </div>

        
    <div class="divide-full"></div>
    <div class="box-common box-common-filled box-max-item-keyword">
        <h4 class="box-title">Bất động sản nổi bật</h4>

        <div class="box-content link-hover-blue">
            <ul>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-ba-dinh" title="Nhà đất Ba Đình">
                                    Nhà đất Ba Đình
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-bien-hoa-dna" title="Nhà đất Biên Hòa">
                                    Nhà đất Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-bien-hoa-dna" title="Bán nhà xưởng Biên Hòa">
                                    Bán nhà xưởng Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-bien-hoa-dna" title="Cho thuê kho xưởng Biên Hòa">
                                    Cho thuê kho xưởng Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-bien-hoa-dna" title="Cho thuê phòng trọ Biên Hòa">
                                    Cho thuê phòng trọ Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-hai-duong" title="Mua bán nhà đất Hải Dương">
                                    Mua bán nhà đất Hải Dương
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-dna" title="Bán đất nền Biên Hòa">
                                    Bán đất nền Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-pham-van-thuan-245" title="Cho thuê cửa hàng Phạm Văn Thuận">
                                    Cho thuê cửa hàng Phạm Văn Thuận
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-quan-1" title="Bán nhà Quận 1">
                                    Bán nhà Quận 1
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-xa-an-hoa-10" title="Bán nhà An Hòa">
                                    Bán nhà An Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-phuong-24" title="Bán nhà Phường 24 Bình Thạnh">
                                    Bán nhà Phường 24 Bình Thạnh
                                </a>
                            </h3>
                        </li>
                                            </ul>
        </div>
    </div>

        <div class="box-common box-common-filled box-utility link-hover-blue">
    <h4 class="box-title">Hỗ trợ tiện ích</h4>
    <div class="box-content">
        <ul>
            <li>
                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-xem-huong-nha" title="Tư vấn phong thủy" rel="nofollow">
                    Tư vấn phong thủy
                </a>
            </li>
            <li>
                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-du-toan-chi-tiet" title="Dự tính chi phí làm nhà" rel="nofollow">
                    Dự tính chi phí làm nhà
                </a>
            </li>
            <li>
                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-tinh-lai-suat" title="Tính lãi suất" rel="nofollow">
                    Tính lãi suất
                </a>
            </li>
            <li>
                <a href="https://batdongsan.com.vn/quy-trinh-xay-nha" title="Quy trình xây nhà" rel="nofollow">Quy trình xây nhà</a>
            </li>
            <li>
                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-xem-tuoi-xay-nha" title="Xem tuổi làm nhà" rel="nofollow">Xem tuổi làm nhà</a>
            </li>
        </ul>
    </div>
</div>
                <div class="product-detail-scroll" style="opacity: 0; top: 0px; display: none;">
            <div class="scroll-wrap clearfix">
                <div class="scroll-info" style="width: auto;">
                    <label>1.45 tỷ</label>
                        <span class="dot">·</span><label>100 m²</label>
                                        <div class="scroll-address ellipsis">Dự án Biên Hòa New City, Phố Nam Cao, Phường Phước Tân, Biên Hòa, Đồng Nai</div>
                </div>
                <div class="scroll-contact clearfix" style="">
                        <div class="avatar">
                                    <span>L</span>
                        </div>
                                            <div class="name" title="Thái Bá Lợi">
                            Lợi
                        </div>
                    <div class="btn-border-grey"><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#divSendContact" id="btnSendContact">Yêu cầu liên hệ lại</a></div>
                    <div class="phone phoneEvent" raw="0946722227" moblie="0946 722 *** · Hiện số09467222270946722227">0946 722 ***&nbsp;·&nbsp;Hiện số</div>
                </div>
            </div>
        </div>
        <div class="product-detail-fix">
            <div class="fix-wrap">
                    <a href="mailto:bdscamranh@gmail.com?subject=Kha%CC%81ch%20ha%CC%80ng%20Batdongsan.com%20quan%20t%C3%A2m%20t%C6%A1%CC%81i%20tin%20%C4%91%C4%83ng&amp;body=T%C3%B4i%20co%CC%81%20quan%20t%C3%A2m%20t%C6%A1%CC%81i%20tin%20%C4%91%C4%83ng%20na%CC%80y%20https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" class="link_mail" target="_blank" rel="nofollow">
                        Gửi email
                    </a>
                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#" data-href="sms://0946722227/?body=Toi co quan tam den tin dang nay https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" rel="nofollow" class="link_sms">Nhắn tin</a>
            </div>
            <div class="phone text-center"><span class="phoneEvent" raw="0946722227" moblie="0946 722 *** · Hiện số0946 722 *** · Hiện số0946722227">0946 722 ***&nbsp;·&nbsp;Hiện số</span></div>
        </div>

        

    <div class="divide-full"></div>
    <div class="box-common box-common-filled box-broker">
        <h4 class="box-title">Nhà môi giới trong khu vực</h4>
        <div class="box-content">
            <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-928px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/c-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2712" rel="nofollow">
                                                                            <img src="./assets/image/20190531173625-b770.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/c-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2712" rel="nofollow">C TY TNHH XÂY DỰNG THƯƠNG MẠI MÔI GIỚI BẤT ĐỘNG SẢN ĐẤT VIỆT</a></div>
                                <div class="broker-phone">0914920202</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-co-phan-dv-tm-xd-dia-oc-kim-oanh-eb2466" rel="nofollow">
                                                                            <img src="./assets/image/20180104105026-5581.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-co-phan-dv-tm-xd-dia-oc-kim-oanh-eb2466" rel="nofollow">Công ty Cổ phần DV-TM &amp; XD Địa Ốc Kim Oanh</a></div>
                                <div class="broker-phone">0933733655</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-co-phan-dau-tu-viet-hung-phat-eb2420" rel="nofollow">
                                                                            <img src="./assets/image/20170825163101-f2fb.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-co-phan-dau-tu-viet-hung-phat-eb2420" rel="nofollow">Công Ty Cổ Phần Đầu Tư Việt Hưng Phát</a></div>
                                <div class="broker-phone"></div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-tnhh-dich-vu-bat-dong-san-dong-a-eb946" rel="nofollow">
                                                                            <img src="./assets/image/thumb200x200.2306.cong-ty-tnhh-dich-vu-bat-dong-san-dong-a.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-tnhh-dich-vu-bat-dong-san-dong-a-eb946" rel="nofollow">Công ty TNHH Dịch vụ Bất động sản Đông Á</a></div>
                                <div class="broker-phone">0919951010</div>
                            </div>
                        </div></div>
                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-cp-kinh-doanh-dia-oc-dat-moi-eb2588" rel="nofollow">
                                                                            <img src="./assets/image/20180817111042-29df.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-cp-kinh-doanh-dia-oc-dat-moi-eb2588" rel="nofollow">Công ty CP Kinh doanh Địa ốc Đất Mới</a></div>
                                <div class="broker-phone">0934579676</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/vpdd-cong-ty-cppt-dia-oc-van-xuan-eb2538" rel="nofollow">
                                                                            <img src="./assets/image/20180618174008-4ee6.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/vpdd-cong-ty-cppt-dia-oc-van-xuan-eb2538" rel="nofollow">VPĐD Công ty CPPT Địa Ốc Vạn Xuân</a></div>
                                <div class="broker-phone">0937437613</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuhappyland-eb2512" rel="nofollow">
                                                                            <img src="./assets/image/20180510151049-8b4b.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuhappyland-eb2512" rel="nofollow">Sàn giao dịch Dohuhappyland</a></div>
                                <div class="broker-phone">0906031033</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuinternational-eb2511" rel="nofollow">
                                                                            <img src="./assets/image/20180510142917-d740.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuinternational-eb2511" rel="nofollow">Sàn giao dịch Dohuinternational</a></div>
                                <div class="broker-phone">0938150151</div>
                            </div>
                        </div></div>
                        
                        
                        
                        <div class="swiper-slide" data-swiper-slide-index="1" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohudona-eb2510" rel="nofollow">
                                                                            <img src="./assets/image/20180510141326-909b.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohudona-eb2510" rel="nofollow">Sàn giao dịch Dohudona</a></div>
                                <div class="broker-phone">0939233433</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuhousing-eb2509" rel="nofollow">
                                                                            <img src="./assets/image/20180510141042-e71d.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuhousing-eb2509" rel="nofollow">Sàn giao dịch Dohuhousing</a></div>
                                <div class="broker-phone">0932086088</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuhcm-eb2508" rel="nofollow">
                                                                            <img src="./assets/image/20180510140751-1857.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuhcm-eb2508" rel="nofollow">Sàn giao dịch Dohuhcm</a></div>
                                <div class="broker-phone">0938967796</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohumiennam-eb2507" rel="nofollow">
                                                                            <img src="./assets/image/20180510140422-59d2.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohumiennam-eb2507" rel="nofollow">Sàn giao dịch Dohumiennam</a></div>
                                <div class="broker-phone">0915565639</div>
                            </div>
                        </div></div>
                        
                        
                        
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohumiendong-eb2506" rel="nofollow">
                                                                            <img src="./assets/image/20180510120438-a0e5.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohumiendong-eb2506" rel="nofollow">Sàn giao dịch Dohumiendong</a></div>
                                <div class="broker-phone">0901890891</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohureal-eb2505" rel="nofollow">
                                                                            <img src="./assets/image/20180510113359-da64.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohureal-eb2505" rel="nofollow">Sàn giao dịch Dohureal</a></div>
                                <div class="broker-phone">0934077477</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuland-eb1100" rel="nofollow">
                                                                            <img src="./assets/image/20180510143557-2bfd.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuland-eb1100" rel="nofollow">Sàn giao dịch Dohuland</a></div>
                                <div class="broker-phone">0937777247</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2762" rel="nofollow">
                                                                            <img src="./assets/image/20191207111310-b5e7.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2762" rel="nofollow">CÔNG TY TNHH XÂY DỰNG THƯƠNG MẠI MÔI GIỚI BẤT ĐỘNG SẢN ĐẤT VIỆT</a></div>
                                <div class="broker-phone">0914920202</div>
                            </div>
                        </div></div>
                        
                        
                        
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/c-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2712" rel="nofollow">
                                                                            <img src="./assets/image/20190531173625-b770.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/c-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2712" rel="nofollow">C TY TNHH XÂY DỰNG THƯƠNG MẠI MÔI GIỚI BẤT ĐỘNG SẢN ĐẤT VIỆT</a></div>
                                <div class="broker-phone">0914920202</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-co-phan-dv-tm-xd-dia-oc-kim-oanh-eb2466" rel="nofollow">
                                                                            <img src="./assets/image/20180104105026-5581.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-co-phan-dv-tm-xd-dia-oc-kim-oanh-eb2466" rel="nofollow">Công ty Cổ phần DV-TM &amp; XD Địa Ốc Kim Oanh</a></div>
                                <div class="broker-phone">0933733655</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-co-phan-dau-tu-viet-hung-phat-eb2420" rel="nofollow">
                                                                            <img src="./assets/image/20170825163101-f2fb.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-co-phan-dau-tu-viet-hung-phat-eb2420" rel="nofollow">Công Ty Cổ Phần Đầu Tư Việt Hưng Phát</a></div>
                                <div class="broker-phone"></div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-tnhh-dich-vu-bat-dong-san-dong-a-eb946" rel="nofollow">
                                                                            <img src="./assets/image/thumb200x200.2306.cong-ty-tnhh-dich-vu-bat-dong-san-dong-a.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-tnhh-dich-vu-bat-dong-san-dong-a-eb946" rel="nofollow">Công ty TNHH Dịch vụ Bất động sản Đông Á</a></div>
                                <div class="broker-phone">0919951010</div>
                            </div>
                        </div></div>
                        
                        
                        
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-cp-kinh-doanh-dia-oc-dat-moi-eb2588" rel="nofollow">
                                                                            <img src="./assets/image/20180817111042-29df.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-cp-kinh-doanh-dia-oc-dat-moi-eb2588" rel="nofollow">Công ty CP Kinh doanh Địa ốc Đất Mới</a></div>
                                <div class="broker-phone">0934579676</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/vpdd-cong-ty-cppt-dia-oc-van-xuan-eb2538" rel="nofollow">
                                                                            <img src="./assets/image/20180618174008-4ee6.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/vpdd-cong-ty-cppt-dia-oc-van-xuan-eb2538" rel="nofollow">VPĐD Công ty CPPT Địa Ốc Vạn Xuân</a></div>
                                <div class="broker-phone">0937437613</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuhappyland-eb2512" rel="nofollow">
                                                                            <img src="./assets/image/20180510151049-8b4b.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuhappyland-eb2512" rel="nofollow">Sàn giao dịch Dohuhappyland</a></div>
                                <div class="broker-phone">0906031033</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuinternational-eb2511" rel="nofollow">
                                                                            <img src="./assets/image/20180510142917-d740.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuinternational-eb2511" rel="nofollow">Sàn giao dịch Dohuinternational</a></div>
                                <div class="broker-phone">0938150151</div>
                            </div>
                        </div></div></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="broker-pagination">
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        (function callJQuery() {
            if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Details && window.FrontEnd.Product.Details.BrokerSlide) {
                new FrontEnd.Product.Details.BrokerSlide({})
            }
            else {
                setTimeout(callJQuery, 100);
            }
        })();
    </script>

    </div>
</div>
<!-- end product-detail-->

            <div class="banner-bottom">
                <div style="float: left; width: 560px">
                </div>
                <div style="float: left; width: 430px; margin-left: 5px">
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="boxLinkFooter newLayout">
                


            </div>

        <div id="SiteRight" class="banner-right clearfix">

        </div>
@endsection
