@extends('layouts.master')

@section('title', 'Mua Bán Nhà Đất Việt Nam Giá Rẻ, Mới Nhất 2020')

@section('styles')
<link rel="stylesheet" href="./assets/css/filestatic.ver202011110505.msvbds.productlisting.min.css" />
@endsection

@section('content')
<body class="bg-site">
<form id="boxSearchForm" action="https://batdongsan.com.vn/microservice-architecture-router/Product/ProductSearch/Index" method="post" novalidate="novalidate">
    <div class="search-bar shadow-lv-1 clearfix">
        <ul class="search-bar-tab mar-left-16 pad-top-8 mar-right-16">
            <li ptype="38">Bán</li>
            <li class="actived" ptype="49">Cho thuê</li>
        </ul>
        <input data-val="true" data-val-required="The CateId field is required." id="type" name="CateId" type="hidden" value="49">

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
                                    <li vl="326"><span>Căn hộ chung cư</span></li>
                                    <li vl="52"><span>Nhà riêng</span></li>
                                    <li vl="51"><span>Nhà mặt phố</span></li>
                                    <li vl="57"><span>Nhà trọ, phòng trọ</span></li>
                                    <li vl="50"><span>Văn phòng</span></li>
                                    <li vl="55"><span>Cửa hàng, ki ốt</span></li>
                                    <li vl="53"><span>Kho, nhà xưởng, đất</span></li>
                                    <li vl="59"><span>Bất động sản khác</span></li>
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
                        <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/nha-dat-cho-thue#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/nha-dat-cho-thue#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
                    </div>
                    <div class="custom-scroll mCustomScrollbar _mCS_5 mCS_no_scrollbar" id="divPriceOptions" minvalue="txtPriceMinValue" maxvalue="txtPriceMaxValue" unit="money" lblmin="lblPriceMin" lblmax="lblPriceMax" hddvalue="hdCboPrice" defaulttext="Tất cả" ddlid="divPrice" currlevel="1" style=""><div id="mCSB_5" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_5_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                        <ul class="advance-options"><li vl="-1" class="advance-options active">Tất cả</li><li vl="0" class="advance-options">Thỏa thuận</li><li vl="1" class="advance-options">&lt; 1 triệu</li><li vl="2" class="advance-options">1<span class="arrow-icon"></span>3 triệu</li><li vl="3" class="advance-options">3<span class="arrow-icon"></span>5 triệu</li><li vl="4" class="advance-options">5<span class="arrow-icon"></span>10 triệu</li><li vl="5" class="advance-options">10<span class="arrow-icon"></span>40 triệu</li><li vl="6" class="advance-options">40<span class="arrow-icon"></span>70 triệu</li><li vl="7" class="advance-options">70<span class="arrow-icon"></span>100 triệu</li><li vl="8" class="advance-options">&gt; 100 triệu</li></ul>
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
                        <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/nha-dat-cho-thue#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/nha-dat-cho-thue#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                            <input type="hidden" id="hdCboHomeDirection" name="DirectionId" value="-1">
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
                                type: 49,
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
                                directionId: -1,
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



<input type="hidden" value="2" id="activeTxtSelect">
<div id="MiddleSubMenu">
</div>

<div class="main-container clearfix">
    <div class="main-left">
        <!--Product List Binnova-->
        

<!-- Header listing-->
<div class="breadcrumb all-grey-7 link-hover-blue">
    <a href="https://batdongsan.com.vn/nha-dat-cho-thue" level="1" title="Nhà đất cho thuê tại Việt Nam">Cho thuê</a><span>/</span><a href="https://batdongsan.com.vn/nha-dat-cho-thue" level="2" title="Nhà đất cho thuê tại Việt Nam">Tất cả BĐS trên toàn quốc</a>
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
    <script type="application/ld+json">
        {"@context":"https://schema.org/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Trang chủ","item":"https://batdongsan.com.vn"},{"@type":"ListItem","position":2,"name":"Cho thuê","item":"https://batdongsan.com.vn/nha-dat-cho-thue"},{"@type":"ListItem","position":3,"name":"Tất cả BĐS trên toàn quốc","item":"https://batdongsan.com.vn/nha-dat-cho-thue"}]}
    </script>

<div class="product-list-header pad-top-8">
    <h1>Nhà đất cho thuê tại Việt Nam</h1>
        <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">46,329</span> bất động sản.</div>
    

</div>

    <div class="product-nav-bar pad-top-8 clearfix">
        <ul class="ul-tab fl mar-right-16">
            <li class="list-display actived">Danh sách</li>
            <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
            <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-nha-dat-cho-thue">Bản đồ</a></li>
        </ul>
        <div class="fr">
            <div class="custom-drop-control sort-control">
                <div class="custom-control-label">
                    Sắp xếp
                </div>
                <div class="custom-dropbox hiding" id="divSort" style="display: none;">
                    <div id="divSortOptions">
                        <ul class="advance-options">
                                    <li vl="0" class="actived">Thông thường</li>
                                    <li vl="1">Tin mới nhất</li>
                                    <li vl="2">Giá thấp đến cao</li>
                                    <li vl="3">Giá cao đến thấp</li>
                                    <li vl="4">Diện tích bé đến lớn</li>
                                    <li vl="5">Diện tích lớn đến bé</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-lists mar-top-16" id="product-lists-web" style="display:block">
            <div class="vip0 product-item clearfix" uid="602090">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-tan-mai-phuong-tan-mai-2-prj-mandarin-garden-2/cho-mat-bang-kinh-doanh-tai-tttm-2-trung-tam-quan-hoang-mai-pr27407704" title="Cho thuê mặt bằng kinh doanh tại TTTM Mandarin Garden 2 - trung tâm quận Hoàng Mai" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê mặt bằng kinh doanh tại TTTM Mandarin Garden 2 - trung tâm quận Hoàng Mai" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201014104118-6f99_wm.jpg" is-lazy-image="true" lazy-id="0">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-tan-mai-phuong-tan-mai-2-prj-mandarin-garden-2/cho-mat-bang-kinh-doanh-tai-tttm-2-trung-tam-quan-hoang-mai-pr27407704" title="Cho thuê mặt bằng kinh doanh tại TTTM Mandarin Garden 2 - trung tâm quận Hoàng Mai" class="vipZero product-link">
                            CHO THUÊ MẶT BẰNG KINH DOANH TẠI TTTM MANDARIN GARDEN 2 - TRUNG TÂM QUẬN HOÀNG MAI
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hoàng Mai, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        - Chủ đầu tư: Tập đoàn Hòa Phát. - Vị trí: TTTM Mandarin Garden 2 sở hữu vị trí đắc địa ngay ngã tư Tân Mai - Kim Đồng - Trương Định, phù hợp nhiều mô hình kinh doanh (showroom giới thiệu sản phẩm, c
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">13/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27407704" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; mặt bằng kinh doanh tại TTTM Mandarin Garden 2 - trung t&amp;#226;m quận Ho&amp;#224;ng Mai&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/14/20201014104118-6f99_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/14/20201014104118-6f99_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê mặt bằng kinh doanh tại TTTM Mandarin Garden 2 - trung tâm quận Hoàng Mai" data-price="Giá thỏa thuận" data-area="Không xác định" data-pricesort="0" data-areasort="0" data-room="0" data-toilets="0" data-address="Hoàng Mai, Hà Nội" data-description="- Chủ đầu tư: Tập đoàn Hòa Phát. - Vị trí: TTTM Mandarin Garden 2 sở hữu vị trí đắc địa ngay ngã tư Tân Mai - Kim Đồng - Trương Định, phù hợp nhiều mô hình kinh doanh (showroom giới thiệu sản phẩm, c" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:36:40" data-contactname="Dương Hân" data-contactmobile="0918507886" data-url="/cho-thue-cua-hang-ki-ot-duong-tan-mai-phuong-tan-mai-2-prj-mandarin-garden-2/cho-mat-bang-kinh-doanh-tai-tttm-2-trung-tam-quan-hoang-mai-pr27407704" data-totalmedia="5" data-createbyuser="602090"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="602090">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-tan-mai-phuong-tan-mai-2-prj-mandarin-garden-2/cho-cao-cap-tai-2-quan-hoang-pr27407491" title="Cho thuê văn phòng cao cấp tại Mandarin Garden 2, Tân Mai, Quận Hoàng Mai" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê văn phòng cao cấp tại Mandarin Garden 2, Tân Mai, Quận Hoàng Mai" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201014103539-c3bb_wm.jpg" is-lazy-image="true" lazy-id="1"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/20201014103538-4369_wm.jpg" is-lazy-image="true" lazy-id="2"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/20201014103538-ebb0_wm.jpg" is-lazy-image="true" lazy-id="3">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-tan-mai-phuong-tan-mai-2-prj-mandarin-garden-2/cho-cao-cap-tai-2-quan-hoang-pr27407491" title="Cho thuê văn phòng cao cấp tại Mandarin Garden 2, Tân Mai, Quận Hoàng Mai" class="vipZero product-link">
                            CHO THUÊ VĂN PHÒNG CAO CẤP TẠI MANDARIN GARDEN 2, TÂN MAI, QUẬN HOÀNG MAI
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                                                <span class="location">Hoàng Mai, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        - Chủ đầu tư: Tập đoàn Hòa Phát. - Vị trí: Mandarin Garden 2 sở hữu vị trí đắc địa bậc nhất phía Nam Hà Nội, nằm ngay trung tâm quận Hoàng Mai, ngã tư Tân Mai Kim Đồng Trương Định, cách Hồ Gươm chỉ 4km rất thuận tiện trong việc di chuyển và giao dịch. - Diện tích cho thuê: Linh hoạt, đáp ứng nhu cầu các doanh nghiệp mới thành lập và tăng trưởng quy mô. - Giá thuê: Thỏa thuận (b
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">13/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Dương Hân">
                                <span class="contact-name">Dương Hân</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0918507886" raw="0918507886">0918 507 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27407491" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; văn ph&amp;#242;ng cao cấp tại Mandarin Garden 2, T&amp;#226;n Mai, Quận Ho&amp;#224;ng Mai&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/14/20201014103539-c3bb_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/14/20201014103538-4369_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/14/20201014103538-ebb0_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/10/14/20201014103539-c3bb_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê văn phòng cao cấp tại Mandarin Garden 2, Tân Mai, Quận Hoàng Mai" data-price="Giá thỏa thuận" data-area="Không xác định" data-pricesort="0" data-areasort="0" data-room="0" data-toilets="0" data-address="Hoàng Mai, Hà Nội" data-description="- Chủ đầu tư: Tập đoàn Hòa Phát. - Vị trí: Mandarin Garden 2 sở hữu vị trí đắc địa bậc nhất phía Nam Hà Nội, nằm ngay trung tâm quận Hoàng Mai, ngã tư Tân Mai Kim Đồng Trương Định, cách Hồ Gươm chỉ 4km rất thuận tiện trong việc di chuyển và giao dịch. - Diện tích cho thuê: Linh hoạt, đáp ứng nhu cầu các doanh nghiệp mới thành lập và tăng trưởng quy mô. - Giá thuê: Thỏa thuận (b" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:06:54" data-contactname="Dương Hân" data-contactmobile="0918507886" data-url="/cho-thue-van-phong-duong-tan-mai-phuong-tan-mai-2-prj-mandarin-garden-2/cho-cao-cap-tai-2-quan-hoang-pr27407491" data-totalmedia="4" data-createbyuser="602090"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="198762">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-bo-bao-tan-thang-phuong-son-ky-prj-celadon-city/c-nhanh-q-phu-2pn-1wc-full-noi-that-o-ngay-8tr-0949551199-pr27680834" title="Trùm cho thuê căn hộ Celadon City Q. Tân Phú, giá rẻ nhất 6.5tr, ở ngay, khu Emerald. 0949551199" onclick="">
                        <img class="product-avatar-img" alt="Trùm cho thuê căn hộ Celadon City Q. Tân Phú, giá rẻ nhất 6.5tr, ở ngay, khu Emerald. 0949551199" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201109120852-345a_wm.jpg" is-lazy-image="true" lazy-id="4">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">15</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-bo-bao-tan-thang-phuong-son-ky-prj-celadon-city/c-nhanh-q-phu-2pn-1wc-full-noi-that-o-ngay-8tr-0949551199-pr27680834" title="Trùm cho thuê căn hộ Celadon City Q. Tân Phú, giá rẻ nhất 6.5tr, ở ngay, khu Emerald. 0949551***" class="vipZero product-link" style="overflow: visible;">
                            TRÙM CHO THUÊ CĂN HỘ CELADON CITY Q. TÂN PHÚ, GIÁ RẺ NHẤT 6.5TR, Ở NGAY, KHU EMERALD. <span class="hidden-mobile m-on-title" raw="0949551199">0949551***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">6.5 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">53 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tân Phú, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        - Cam kết 100% có hàng tại chung cư Celadon City phường Sơn Kỳ, Q. Tân Phú. I: Khu Topaz - Celadon City. - 50m2; 1PN, 1WC, nội thất cơ bản; Giá 6.5tr/tháng. - 60m2; 2PN, 1WC, 2 logia; nội thất cơ bản
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">13/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27680834" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Tr&amp;#249;m cho thu&amp;#234; căn hộ Celadon City Q. T&amp;#226;n Ph&amp;#250;, gi&amp;#225; rẻ nhất 6.5tr, ở ngay, khu Emerald. 0949551199&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109120852-345a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109120852-345a_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Trùm cho thuê căn hộ Celadon City Q. Tân Phú, giá rẻ nhất 6.5tr, ở ngay, khu Emerald. 0949551199" data-price="6.5 triệu/tháng" data-area="53 m²" data-pricesort="6500000" data-areasort="53" data-room="2" data-toilets="1" data-address="Tân Phú, Hồ Chí Minh" data-description="- Cam kết 100% có hàng tại chung cư Celadon City phường Sơn Kỳ, Q. Tân Phú. I: Khu Topaz - Celadon City. - 50m2; 1PN, 1WC, nội thất cơ bản; Giá 6.5tr/tháng. - 60m2; 2PN, 1WC, 2 logia; nội thất cơ bản" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:10:49" data-contactname="Nguyễn Châu Tùng" data-contactmobile="0949551199" data-url="/cho-thue-can-ho-chung-cu-duong-bo-bao-tan-thang-phuong-son-ky-prj-celadon-city/c-nhanh-q-phu-2pn-1wc-full-noi-that-o-ngay-8tr-0949551199-pr27680834" data-totalmedia="15" data-createbyuser="198762"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="926461">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-hoa-binh-1-phuong-hiep-tan-prj-can-ho-richstar/chuyen-cho-1pn-2pn-3pn-gia-re-view-nao-cung-co-xem-nha-de-dang-lh-0948614321-pr27770395" title="Chuyên cho thuê CC Richstar 1PN, 2PN, 3PN giá rẻ, view nào cũng có xem nhà dễ dàng. LH:0948614321" onclick="">
                        <img class="product-avatar-img" alt="Chuyên cho thuê CC Richstar 1PN, 2PN, 3PN giá rẻ, view nào cũng có xem nhà dễ dàng. LH:0948614321" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112162038-aed2_wm.jpg" is-lazy-image="true" lazy-id="5"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112162047-f341_wm.jpg" is-lazy-image="true" lazy-id="6"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112162047-f9c5_wm.jpg" is-lazy-image="true" lazy-id="7">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-hoa-binh-1-phuong-hiep-tan-prj-can-ho-richstar/chuyen-cho-1pn-2pn-3pn-gia-re-view-nao-cung-co-xem-nha-de-dang-lh-0948614321-pr27770395" title="Chuyên cho thuê CC Richstar 1PN, 2PN, 3PN giá rẻ, view nào cũng có xem nhà dễ dàng. LH:0948614***" class="vipZero product-link" style="overflow: visible;">
                            CHUYÊN CHO THUÊ CC RICHSTAR 1PN, 2PN, 3PN GIÁ RẺ, VIEW NÀO CŨNG CÓ XEM NHÀ DỄ DÀNG. LH:<span class="hidden-mobile m-on-title" raw="0948614321">0948614***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">11 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">65 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">2 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">2 WC</span>
                        <span class="location">Tân Phú, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Cần cho thuê gấp căn hộ cao cấp - RichStar Novaland quận Tân Phú. LH: <span class="hidden-mobile des" raw="0948614321">0948614***</span>.Bên em có nhiều căn độc quyền giá tốt mùa dịch, thương lượng như giá mong muốn.* Căn 2PN. Diện tích 55m2, giá 9 triệu/tháng. Có máy lạnh, rèm. Đầy đủ nội thất giá 10 triệu/tháng.* Thiết kế diện tích: 65m2 gồm 2PN + 2WC: Giá 10 triệu/tháng (bếp và máy lạnh, rèm cửa). Có căn đầy đủ nội thất giá: 11 t
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">12/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Đạt">
                                <span class="contact-name">Đạt</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0948614321" raw="0948614321">0948 614 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27770395" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chuy&amp;#234;n cho thu&amp;#234; CC Richstar 1PN, 2PN, 3PN gi&amp;#225; rẻ, view n&amp;#224;o cũng c&amp;#243; xem nh&amp;#224; dễ d&amp;#224;ng. LH:0948614321&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112162038-aed2_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112162047-f341_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112162047-f9c5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/12/20201112162038-aed2_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chuyên cho thuê CC Richstar 1PN, 2PN, 3PN giá rẻ, view nào cũng có xem nhà dễ dàng. LH:0948614321" data-price="11 triệu/tháng" data-area="65 m²" data-pricesort="11000000" data-areasort="65" data-room="2" data-toilets="2" data-address="Tân Phú, Hồ Chí Minh" data-description="Cần cho thuê gấp căn hộ cao cấp - RichStar Novaland quận Tân Phú. LH: 0948614321.Bên em có nhiều căn độc quyền giá tốt mùa dịch, thương lượng như giá mong muốn.* Căn 2PN. Diện tích 55m2, giá 9 triệu/tháng. Có máy lạnh, rèm. Đầy đủ nội thất giá 10 triệu/tháng.* Thiết kế diện tích: 65m2 gồm 2PN + 2WC: Giá 10 triệu/tháng (bếp và máy lạnh, rèm cửa). Có căn đầy đủ nội thất giá: 11 t" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 16:41:38" data-contactname="Đạt" data-contactmobile="0948614321" data-url="/cho-thue-can-ho-chung-cu-duong-hoa-binh-1-phuong-hiep-tan-prj-can-ho-richstar/chuyen-cho-1pn-2pn-3pn-gia-re-view-nao-cung-co-xem-nha-de-dang-lh-0948614321-pr27770395" data-totalmedia="8" data-createbyuser="926461"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="539774">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-to-huu-phuong-la-khe-prj-hpc-landmark-105/cho-gap-mat-bang-trung-tam-thuong-mai-tai-ha-dong-ha-noi-chi-tu-8-usd-m2-thang-pr27609375" title="CHO THUÊ GẤP MẶT BẰNG TRUNG TÂM THƯƠNG MẠI TẠI TỐ HỮU-HÀ ĐÔNG, HÀ NỘI (CHỈ TỪ 8 USD/M2/THÁNG)" onclick="">
                        <img class="product-avatar-img" alt="CHO THUÊ GẤP MẶT BẰNG TRUNG TÂM THƯƠNG MẠI TẠI TỐ HỮU-HÀ ĐÔNG, HÀ NỘI (CHỈ TỪ 8 USD/M2/THÁNG)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/30/20201030162703-0e71_wm.jpg" is-lazy-image="true" lazy-id="8">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">12</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-to-huu-phuong-la-khe-prj-hpc-landmark-105/cho-gap-mat-bang-trung-tam-thuong-mai-tai-ha-dong-ha-noi-chi-tu-8-usd-m2-thang-pr27609375" title="CHO THUÊ GẤP MẶT BẰNG TRUNG TÂM THƯƠNG MẠI TẠI TỐ HỮU-HÀ ĐÔNG, HÀ NỘI (CHỈ TỪ 8 USD/M2/THÁNG)" class="vipZero product-link">
                            CHO THUÊ GẤP MẶT BẰNG TRUNG TÂM THƯƠNG MẠI TẠI TỐ HỮU-HÀ ĐÔNG, HÀ NỘI (CHỈ TỪ 8 USD/M2/THÁNG)
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">1000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hà Đông, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        - Tòa HPC Landmark 105 nằm trên trục đường Tố Hữu, thuộc khu ĐT Văn Khê, quận Hà Đông, Hà Nội. Dự án nằm tại vị trí đắc địa, thuận lợi: Gần công viên thiên văn học, gần trường học, gần siêu thị AEON,
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">12/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27609375" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;CHO THU&amp;#202; GẤP MẶT BẰNG TRUNG T&amp;#194;M THƯƠNG MẠI TẠI TỐ HỮU-H&amp;#192; Đ&amp;#212;NG, H&amp;#192; NỘI (CHỈ TỪ 8 USD/M2/TH&amp;#193;NG)&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/30/20201030162703-0e71_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/30/20201030162703-0e71_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="CHO THUÊ GẤP MẶT BẰNG TRUNG TÂM THƯƠNG MẠI TẠI TỐ HỮU-HÀ ĐÔNG, HÀ NỘI (CHỈ TỪ 8 USD/M2/THÁNG)" data-price="Giá thỏa thuận" data-area="1000 m²" data-pricesort="0" data-areasort="1000" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="- Tòa HPC Landmark 105 nằm trên trục đường Tố Hữu, thuộc khu ĐT Văn Khê, quận Hà Đông, Hà Nội. Dự án nằm tại vị trí đắc địa, thuận lợi: Gần công viên thiên văn học, gần trường học, gần siêu thị AEON," data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 16:05:29" data-contactname="Công Ty Hải Phát Thủ Đô" data-contactmobile="0949004788" data-url="/cho-thue-cua-hang-ki-ot-duong-to-huu-phuong-la-khe-prj-hpc-landmark-105/cho-gap-mat-bang-trung-tam-thuong-mai-tai-ha-dong-ha-noi-chi-tu-8-usd-m2-thang-pr27609375" data-totalmedia="12" data-createbyuser="539774"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="193626">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-huynh-tan-phat-phuong-phu-thuan-3/toa-moi-cho-30-50-180-1000m2-ngay-canh-my-hung-200k-m2-pr25774115" title="Tòa văn phòng mới cho thuê 30-50-180-1000m2 ngay cạnh Phú Mỹ Hưng 200k/m2" onclick="">
                        <img class="product-avatar-img" alt="Tòa văn phòng mới cho thuê 30-50-180-1000m2 ngay cạnh Phú Mỹ Hưng 200k/m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609222756-484d_wm.jpg" is-lazy-image="true" lazy-id="9"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609222756-722b_wm.jpg" is-lazy-image="true" lazy-id="10"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609222756-ad4f_wm.jpg" is-lazy-image="true" lazy-id="11">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-huynh-tan-phat-phuong-phu-thuan-3/toa-moi-cho-30-50-180-1000m2-ngay-canh-my-hung-200k-m2-pr25774115" title="Tòa văn phòng mới cho thuê 30-50-180-1000m2 ngay cạnh Phú Mỹ Hưng 200k/m2" class="vipZero product-link">
                            TÒA VĂN PHÒNG MỚI CHO THUÊ 30-50-180-1000M2 NGAY CẠNH PHÚ MỸ HƯNG 200K/M2
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">200 nghìn/m²/tháng</span>
                                                <span class="location">Quận 7, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        - Vị trí nằm trên mặt đường 829 Huỳnh Tấn Phát, nằm giữa con đường Nguyễn Thị Thập và đường Phú Thuận, cạnh ngay Phú Mỹ Hưng, khu vực tập trung nhiều ngân hàng công ty,... 10 phút về trung tâm Quận 1. - Tòa nhà phù hợp với văn phòng cho thuê, công ty, ngân hàng, trung tâm anh văn, mọi ngành nghề hợp pháp,... - Diện tích: 9,6 x 23 m, 1 hầm, 1 trệt, 8 lầu, sân thượng. - Giá: 200.
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">12/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Nguyễn Vũ">
                                <span class="contact-name">Nguyễn Vũ</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0901458000" raw="0901458000">0901 458 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="25774115" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;T&amp;#242;a văn ph&amp;#242;ng mới cho thu&amp;#234; 30-50-180-1000m2 ngay cạnh Ph&amp;#250; Mỹ Hưng 200k/m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609222756-484d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609222756-722b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609222756-ad4f_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/06/09/20200609222756-484d_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Tòa văn phòng mới cho thuê 30-50-180-1000m2 ngay cạnh Phú Mỹ Hưng 200k/m2" data-price="200 nghìn/m²/tháng" data-area="Không xác định" data-pricesort="0" data-areasort="0" data-room="0" data-toilets="0" data-address="Quận 7, Hồ Chí Minh" data-description="- Vị trí nằm trên mặt đường 829 Huỳnh Tấn Phát, nằm giữa con đường Nguyễn Thị Thập và đường Phú Thuận, cạnh ngay Phú Mỹ Hưng, khu vực tập trung nhiều ngân hàng công ty,... 10 phút về trung tâm Quận 1. - Tòa nhà phù hợp với văn phòng cho thuê, công ty, ngân hàng, trung tâm anh văn, mọi ngành nghề hợp pháp,... - Diện tích: 9,6 x 23 m, 1 hầm, 1 trệt, 8 lầu, sân thượng. - Giá: 200." data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 15:05:27" data-contactname="Nguyễn Vũ" data-contactmobile="0901458000" data-url="/cho-thue-van-phong-duong-huynh-tan-phat-phuong-phu-thuan-3/toa-moi-cho-30-50-180-1000m2-ngay-canh-my-hung-200k-m2-pr25774115" data-totalmedia="8" data-createbyuser="193626"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1333557">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-mai-chi-tho-phuong-an-phu-prj-lexington-residence/chu-nha-cho-gap-ch-2pn-du-noi-that-gia-11-trieu-thang-xem-nha-chot-ngay-pr26976686" title="Giá không thể tốt hơn được nữa - 9 tr/th - đủ nội thất - block yên tĩnh - Lexington - giữ key 24/7" onclick="">
                        <img class="product-avatar-img" alt="Giá không thể tốt hơn được nữa - 9 tr/th - đủ nội thất - block yên tĩnh - Lexington - giữ key 24/7" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019163256-e4b5_wm.jpg" is-lazy-image="true" lazy-id="12">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">9</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-mai-chi-tho-phuong-an-phu-prj-lexington-residence/chu-nha-cho-gap-ch-2pn-du-noi-that-gia-11-trieu-thang-xem-nha-chot-ngay-pr26976686" title="Giá không thể tốt hơn được nữa - 9 tr/th - đủ nội thất - block yên tĩnh - Lexington - giữ key 24/7" class="vipZero product-link">
                            GIÁ KHÔNG THỂ TỐT HƠN ĐƯỢC NỮA - 9 TR/TH - ĐỦ NỘI THẤT - BLOCK YÊN TĨNH - LEXINGTON - GIỮ KEY 24/7
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">9 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">50 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chuyên mua bán - cho thuê CH Lexington - bảng giá thật 100%. (Công ty City Land - Văn phòng Block E chung cư Lexington).Hiện công ty có nhiều căn hộ giá tốt:- Office, 33 - 40m2, giá 8 triệu/tháng.- D
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">12/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="26976686" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Gi&amp;#225; kh&amp;#244;ng thể tốt hơn được nữa - 9 tr/th - đủ nội thất - block y&amp;#234;n tĩnh - Lexington - giữ key 24/7&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019163256-e4b5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/19/20201019163256-e4b5_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Giá không thể tốt hơn được nữa - 9 tr/th - đủ nội thất - block yên tĩnh - Lexington - giữ key 24/7" data-price="9 triệu/tháng" data-area="50 m²" data-pricesort="9000000" data-areasort="50" data-room="1" data-toilets="1" data-address="Quận 2, Hồ Chí Minh" data-description="Chuyên mua bán - cho thuê CH Lexington - bảng giá thật 100%. (Công ty City Land - Văn phòng Block E chung cư Lexington).Hiện công ty có nhiều căn hộ giá tốt:- Office, 33 - 40m2, giá 8 triệu/tháng.- D" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 14:36:26" data-contactname="Bảo Oanh" data-contactmobile="0906919228" data-url="/cho-thue-can-ho-chung-cu-duong-mai-chi-tho-phuong-an-phu-prj-lexington-residence/chu-nha-cho-gap-ch-2pn-du-noi-that-gia-11-trieu-thang-xem-nha-chot-ngay-pr26976686" data-totalmedia="9" data-createbyuser="1333557"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1049316">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-phuong-long-thanh-my-prj-vinhomes-grand-park-quan-9/cap-nhat-nhung-c-gia-thap-nhat-vinmes-9-lh-0907090388-phap-pr27764031" title="Cập nhật những căn hộ cho thuê giá thấp nhất Vinhomes Grand Park, Q9. LH: 0907090388 Pháp" onclick="">
                        <img class="product-avatar-img" alt="Cập nhật những căn hộ cho thuê giá thấp nhất Vinhomes Grand Park, Q9. LH: 0907090388 Pháp" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112101453-7d77_wm.jpg" is-lazy-image="true" lazy-id="13">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-phuong-long-thanh-my-prj-vinhomes-grand-park-quan-9/cap-nhat-nhung-c-gia-thap-nhat-vinmes-9-lh-0907090388-phap-pr27764031" title="Cập nhật những căn hộ cho thuê giá thấp nhất Vinhomes Grand Park, Q9. LH: 0907090*** Pháp" class="vipZero product-link" style="overflow: visible;">
                            CẬP NHẬT NHỮNG CĂN HỘ CHO THUÊ GIÁ THẤP NHẤT VINHOMES GRAND PARK, Q9. LH: <span class="hidden-mobile m-on-title" raw="0907090388">0907090***</span> PHÁP
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.5 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">33 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 9, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Giá chỉ 3,5tr/tháng.Cho thuê căn hộ khu đô thị Vinhomes Grand Park, quận 9 - Vincity quận 9. * Studio - 1PN - 2PN - 3PN tại giá tốt thị trường xem nhà bất kỳ lúc nào 247.Liên hệ: <span class="hidden-mobile des" raw="0907090388">0907090***</span> - Mr Pháp
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">12/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27764031" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cập nhật những căn hộ cho thu&amp;#234; gi&amp;#225; thấp nhất Vinhomes Grand Park, Q9. LH: 0907090388 Ph&amp;#225;p&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112101453-7d77_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112101453-7d77_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cập nhật những căn hộ cho thuê giá thấp nhất Vinhomes Grand Park, Q9. LH: 0907090388 Pháp" data-price="3.5 triệu/tháng" data-area="33 m²" data-pricesort="3500000" data-areasort="33" data-room="1" data-toilets="1" data-address="Quận 9, Hồ Chí Minh" data-description="Giá chỉ 3,5tr/tháng.Cho thuê căn hộ khu đô thị Vinhomes Grand Park, quận 9 - Vincity quận 9. * Studio - 1PN - 2PN - 3PN tại giá tốt thị trường xem nhà bất kỳ lúc nào 247.Liên hệ: 0907090388 - Mr Pháp" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:24:53" data-contactname="Nguyễn Văn Pháp" data-contactmobile="0907090388" data-url="/cho-thue-can-ho-chung-cu-phuong-long-thanh-my-prj-vinhomes-grand-park-quan-9/cap-nhat-nhung-c-gia-thap-nhat-vinmes-9-lh-0907090388-phap-pr27764031" data-totalmedia="6" data-createbyuser="1049316"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="581019">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-xa-lo-ha-noi-phuong-thao-dien-prj-masteri-thao-dien/chuyen-c-tu-1pn-2pn-3pn-penuse-gia-tot-thang-6-lh-0909-268-955-pr25730334" title="Chuyên cho thuê căn hộ Masteri Thảo Điền từ 1PN-2PN-3PN-Penthouse giá tốt nhất, LH 0909 268 955" onclick="">
                        <img class="product-avatar-img" alt="Chuyên cho thuê căn hộ Masteri Thảo Điền từ 1PN-2PN-3PN-Penthouse giá tốt nhất, LH 0909 268 955" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/08/20200608103934-9a92_wm.jpg" is-lazy-image="true" lazy-id="14">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">7</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-xa-lo-ha-noi-phuong-thao-dien-prj-masteri-thao-dien/chuyen-c-tu-1pn-2pn-3pn-penuse-gia-tot-thang-6-lh-0909-268-955-pr25730334" title="Chuyên cho thuê căn hộ Masteri Thảo Điền từ 1PN-2PN-3PN-Penthouse giá tốt nhất, LH 0909 268 ***" class="vipZero product-link" style="overflow: visible;">
                            CHUYÊN CHO THUÊ CĂN HỘ MASTERI THẢO ĐIỀN TỪ 1PN-2PN-3PN-PENTHOUSE GIÁ TỐT NHẤT, LH <span class="hidden-mobile m-on-title" raw="0909 268 955">0909 268 ***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">13 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">72 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Quản lý nhiều căn hộ Masteri Thảo Điền cho thuê.Quý khách hàng có thể add Zalo, Viber hoặc Whatsapp theo số: <span class="hidden-mobile des" raw="0984 111 702">0984 111 ***</span> để được tư vấn gửi hình ảnh thực tế từng căn hộ. Hoặc liên hệ số <span class="hidden-mobile des" raw="0909 268 955">0909 268 ***</span>
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">12/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="25730334" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chuy&amp;#234;n cho thu&amp;#234; căn hộ Masteri Thảo Điền từ 1PN-2PN-3PN-Penthouse gi&amp;#225; tốt nhất, LH 0909 268 955&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/08/20200608103934-9a92_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/06/08/20200608103934-9a92_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chuyên cho thuê căn hộ Masteri Thảo Điền từ 1PN-2PN-3PN-Penthouse giá tốt nhất, LH 0909 268 955" data-price="13 triệu/tháng" data-area="72 m²" data-pricesort="13000000" data-areasort="72" data-room="2" data-toilets="2" data-address="Quận 2, Hồ Chí Minh" data-description="Quản lý nhiều căn hộ Masteri Thảo Điền cho thuê.Quý khách hàng có thể add Zalo, Viber hoặc Whatsapp theo số: 0984 111 702 để được tư vấn gửi hình ảnh thực tế từng căn hộ. Hoặc liên hệ số 0909 268 955" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 09:32:12" data-contactname="Trần Tiến Trung" data-contactmobile="0909268955" data-url="/cho-thue-can-ho-chung-cu-duong-xa-lo-ha-noi-phuong-thao-dien-prj-masteri-thao-dien/chuyen-c-tu-1pn-2pn-3pn-penuse-gia-tot-thang-6-lh-0909-268-955-pr25730334" data-totalmedia="7" data-createbyuser="581019"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1037909">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-hong-ha-phuong-2-22-prj-botanica-premier/gia-that-100-ban-khong-mat-thoi-gian-khi-ch-9tr-50m2-12tr-68m2-lh-0945576497-pr27760241" title="Giá thật 100% bạn không mất thời gian khi thuê CH Botanica 9tr=50m2, 12tr=68m2, LH 0945576497" onclick="">
                        <img class="product-avatar-img" alt="Giá thật 100% bạn không mất thời gian khi thuê CH Botanica 9tr=50m2, 12tr=68m2, LH 0945576497" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112081536-864e_wm.jpg" is-lazy-image="true" lazy-id="15">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-hong-ha-phuong-2-22-prj-botanica-premier/gia-that-100-ban-khong-mat-thoi-gian-khi-ch-9tr-50m2-12tr-68m2-lh-0945576497-pr27760241" title="Giá thật 100% bạn không mất thời gian khi thuê CH Botanica 9tr=50m2, 12tr=68m2, LH 0945576***" class="vipZero product-link" style="overflow: visible;">
                            GIÁ THẬT 100% BẠN KHÔNG MẤT THỜI GIAN KHI THUÊ CH BOTANICA 9TR=50M2, 12TR=68M2, LH <span class="hidden-mobile m-on-title" raw="0945576497">0945576***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">9 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">72 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tân Bình, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Giá bán cập nhật mới nhất. LH <span class="hidden-mobile des" raw="098 4543 251">098 4543 ***</span> - 1 phòng ngủ diện tích 50m2 giá từ 8tr. - 2 phòng ngủ diện tích 68m2 giá từ 12tr. - 2 phòng ngủ diện tích 71m2 giá từ 13tr. - 3 phòng ngủ diện tích 87m2 gi
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">12/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27760241" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Gi&amp;#225; thật 100% bạn kh&amp;#244;ng mất thời gian khi thu&amp;#234; CH Botanica 9tr=50m2, 12tr=68m2, LH 0945576497&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112081536-864e_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112081536-864e_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Giá thật 100% bạn không mất thời gian khi thuê CH Botanica 9tr=50m2, 12tr=68m2, LH 0945576497" data-price="9 triệu/tháng" data-area="72 m²" data-pricesort="9000000" data-areasort="72" data-room="2" data-toilets="2" data-address="Tân Bình, Hồ Chí Minh" data-description="Giá bán cập nhật mới nhất. LH 098 4543 251 - 1 phòng ngủ diện tích 50m2 giá từ 8tr. - 2 phòng ngủ diện tích 68m2 giá từ 12tr. - 2 phòng ngủ diện tích 71m2 giá từ 13tr. - 3 phòng ngủ diện tích 87m2 gi" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 08:15:51" data-contactname="Tấn Hiệp" data-contactmobile="0984543251" data-url="/cho-thue-can-ho-chung-cu-duong-hong-ha-phuong-2-22-prj-botanica-premier/gia-that-100-ban-khong-mat-thoi-gian-khi-ch-9tr-50m2-12tr-68m2-lh-0945576497-pr27760241" data-totalmedia="6" data-createbyuser="1037909"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="257124">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-tho-thap-phuong-dich-vong-hau/chinh-chu-cho-san-gia-re-ho-tro-mua-tai-pho-tran-thai-tong-duy-tan-pr26757419" title="Chính chủ cho thuê sàn văn phòng tại số 21 mặt phố Thọ Tháp và phố 76 Duy Tân nhiều diện tích" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cho thuê sàn văn phòng tại số 21 mặt phố Thọ Tháp và phố 76 Duy Tân nhiều diện tích" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/07/20201007160504-80a5_wm.jpg" is-lazy-image="true" lazy-id="16">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-tho-thap-phuong-dich-vong-hau/chinh-chu-cho-san-gia-re-ho-tro-mua-tai-pho-tran-thai-tong-duy-tan-pr26757419" title="Chính chủ cho thuê sàn văn phòng tại số 21 mặt phố Thọ Tháp và phố 76 Duy Tân nhiều diện tích" class="vipZero product-link">
                            CHÍNH CHỦ CHO THUÊ SÀN VĂN PHÒNG TẠI SỐ 21 MẶT PHỐ THỌ THÁP VÀ PHỐ 76 DUY TÂN NHIỀU DIỆN TÍCH
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">4 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">20 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Cầu Giấy, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        - Chính chủ cho thuê sàn văn phòng tại tòa nhà Tim Building số 21 mặt phố Thọ Tháp và phố 76 Duy Tân nhiều diện tích. Có hầm để xe. Chỗ để xe máy ô tô thoải mái. - Tòa Tim Building số 21 Thọ Tháp (Ng
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                2 ngày trước
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="26757419" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; s&amp;#224;n văn ph&amp;#242;ng tại số 21 mặt phố Thọ Th&amp;#225;p v&amp;#224; phố 76 Duy T&amp;#226;n nhiều diện t&amp;#237;ch&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/07/20201007160504-80a5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/07/20201007160504-80a5_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê sàn văn phòng tại số 21 mặt phố Thọ Tháp và phố 76 Duy Tân nhiều diện tích" data-price="4 triệu/tháng" data-area="20 m²" data-pricesort="4000000" data-areasort="20" data-room="0" data-toilets="0" data-address="Cầu Giấy, Hà Nội" data-description="- Chính chủ cho thuê sàn văn phòng tại tòa nhà Tim Building số 21 mặt phố Thọ Tháp và phố 76 Duy Tân nhiều diện tích. Có hầm để xe. Chỗ để xe máy ô tô thoải mái. - Tòa Tim Building số 21 Thọ Tháp (Ng" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 15:47:40" data-contactname="Trần Tuấn Anh" data-contactmobile="0918820022" data-url="/cho-thue-van-phong-duong-tho-thap-phuong-dich-vong-hau/chinh-chu-cho-san-gia-re-ho-tro-mua-tai-pho-tran-thai-tong-duy-tan-pr26757419" data-totalmedia="1" data-createbyuser="257124"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="1475472">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-co-thach-phuong-an-loi-dong-prj-sarimi-sala/cho-mat-bang-kinh-doanh-khu-do-thi-sala-pr27748363" title="Cho thuê mặt bằng kinh doanh văn phòng khu đô thị Sala" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê mặt bằng kinh doanh văn phòng khu đô thị Sala" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111100217-fe7c_wm.jpg" is-lazy-image="true" lazy-id="17"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111100238-3f8a_wm.jpg" is-lazy-image="true" lazy-id="18"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111100245-7b8c_wm.jpg" is-lazy-image="true" lazy-id="19">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">9</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-co-thach-phuong-an-loi-dong-prj-sarimi-sala/cho-mat-bang-kinh-doanh-khu-do-thi-sala-pr27748363" title="Cho thuê mặt bằng kinh doanh văn phòng khu đô thị Sala" class="vipZero product-link">
                            CHO THUÊ MẶT BẰNG KINH DOANH VĂN PHÒNG KHU ĐÔ THỊ SALA
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">250 nghìn/m²/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">100 m²</span>
                                                <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Bạn đang mở công ty hay tìm kiếm mặt bằng văn phòng mới mà những tiêu chí những khu vực hiện hữu không giải quyết được:- Giao thông kết nối, kẹt xe ngập lụt.- Chỗ đậu xe, đặc biệt là xe ô tô cho khách và cho nhân viên.- Chi phí thuê mặt bằng quá lớn.- Không gian đô thị ngột ngạt.Tại khu đô thị Sala các lo ngại trên sẽ được giải quyết trệt để:1 - Vị trí và kết nối: Thuận lợi, kế
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                2 ngày trước
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Trần Việt Hùng">
                                <span class="contact-name">Trần Việt Hùng</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0902978166" raw="0902978166">0902 978 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27748363" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; mặt bằng kinh doanh văn ph&amp;#242;ng khu đ&amp;#244; thị Sala&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111100217-fe7c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111100238-3f8a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111100245-7b8c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/11/20201111100217-fe7c_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê mặt bằng kinh doanh văn phòng khu đô thị Sala" data-price="250 nghìn/m²/tháng" data-area="100 m²" data-pricesort="25000000" data-areasort="100" data-room="0" data-toilets="0" data-address="Quận 2, Hồ Chí Minh" data-description="Bạn đang mở công ty hay tìm kiếm mặt bằng văn phòng mới mà những tiêu chí những khu vực hiện hữu không giải quyết được:- Giao thông kết nối, kẹt xe ngập lụt.- Chỗ đậu xe, đặc biệt là xe ô tô cho khách và cho nhân viên.- Chi phí thuê mặt bằng quá lớn.- Không gian đô thị ngột ngạt.Tại khu đô thị Sala các lo ngại trên sẽ được giải quyết trệt để:1 - Vị trí và kết nối: Thuận lợi, kế" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 11:23:45" data-contactname="Trần Việt Hùng" data-contactmobile="0902978166" data-url="/cho-thue-van-phong-duong-nguyen-co-thach-phuong-an-loi-dong-prj-sarimi-sala/cho-mat-bang-kinh-doanh-khu-do-thi-sala-pr27748363" data-totalmedia="9" data-createbyuser="1475472"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="233197">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-nguyen-xien-phuong-long-thanh-my-prj-vinhomes-grand-park-quan-9/cho-nhieu-ch-33m2-50m2-60m2-70m2-80m2-1pn-2pn-3pn-moi-100-0977771919-pr27610498" title="Cho thuê nhiều CH Vinhomes Grand Park 33m2, 50m2, 60m2 70m2 80m2, 1PN 2PN 3PN, mới 100%, 0977771919" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhiều CH Vinhomes Grand Park 33m2, 50m2, 60m2 70m2 80m2, 1PN 2PN 3PN, mới 100%, 0977771919" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/30/20201030185157-8342_wm.jpg" is-lazy-image="true" lazy-id="20">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-nguyen-xien-phuong-long-thanh-my-prj-vinhomes-grand-park-quan-9/cho-nhieu-ch-33m2-50m2-60m2-70m2-80m2-1pn-2pn-3pn-moi-100-0977771919-pr27610498" title="Cho thuê nhiều CH Vinhomes Grand Park 33m2, 50m2, 60m2 70m2 80m2, 1PN 2PN 3PN, mới 100%, 0977771***" class="vipZero product-link" style="overflow: visible;">
                            CHO THUÊ NHIỀU CH VINHOMES GRAND PARK 33M2, 50M2, 60M2 70M2 80M2, 1PN 2PN 3PN, MỚI 100%, <span class="hidden-mobile m-on-title" raw="0977771919">0977771***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.5 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">33 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 9, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Quản lý 100% căn hộ Vinhomes Grand Park Quận 9. Diện tích: 33m2 (studio) giá thuê từ 3.5 - 5 triệu/tháng. - Diện tích: 50m2 (1 + 1PN - 1WC) giá thuê từ 5 - 6.5 triệu/tháng. Call <span class="hidden-mobile des" raw="0977771919">0977771***</span>. - Diện tí
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                2 ngày trước
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27610498" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nhiều CH Vinhomes Grand Park 33m2, 50m2, 60m2 70m2 80m2, 1PN 2PN 3PN, mới 100%, 0977771919&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/30/20201030185157-8342_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/30/20201030185157-8342_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhiều CH Vinhomes Grand Park 33m2, 50m2, 60m2 70m2 80m2, 1PN 2PN 3PN, mới 100%, 0977771919" data-price="3.5 triệu/tháng" data-area="33 m²" data-pricesort="3500000" data-areasort="33" data-room="0" data-toilets="0" data-address="Quận 9, Hồ Chí Minh" data-description="Quản lý 100% căn hộ Vinhomes Grand Park Quận 9. Diện tích: 33m2 (studio) giá thuê từ 3.5 - 5 triệu/tháng. - Diện tích: 50m2 (1 + 1PN - 1WC) giá thuê từ 5 - 6.5 triệu/tháng. Call 0977771919. - Diện tí" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 11:11:16" data-contactname="Lê Nguyễn Viết Tùng" data-contactmobile="0938179199" data-url="/cho-thue-can-ho-chung-cu-duong-nguyen-xien-phuong-long-thanh-my-prj-vinhomes-grand-park-quan-9/cho-nhieu-ch-33m2-50m2-60m2-70m2-80m2-1pn-2pn-3pn-moi-100-0977771919-pr27610498" data-totalmedia="1" data-createbyuser="233197"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1500303">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-nguyen-hoang-ton-phuong-xuan-la/cho-tai-tay-ho-dt-150m2-mt-6m-lh-0376561855-pr27617698" title="Cho thuê nhà riêng tại Nguyễn Hoàng Tôn, Xuân La Tây Hồ. DT 150m2, MT 6m. LH 0376561855" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà riêng tại Nguyễn Hoàng Tôn, Xuân La Tây Hồ. DT 150m2, MT 6m. LH 0376561855" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/31/F5s5yBIs/20201031152534-92ea_wm.jpg" is-lazy-image="true" lazy-id="21">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-nguyen-hoang-ton-phuong-xuan-la/cho-tai-tay-ho-dt-150m2-mt-6m-lh-0376561855-pr27617698" title="Cho thuê nhà riêng tại Nguyễn Hoàng Tôn, Xuân La Tây Hồ. DT 150m2, MT 6m. LH 0376561***" class="vipZero product-link" style="overflow: visible;">
                            CHO THUÊ NHÀ RIÊNG TẠI NGUYỄN HOÀNG TÔN, XUÂN LA TÂY HỒ. DT 150M2, MT 6M. LH <span class="hidden-mobile m-on-title" raw="0376561855">0376561***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">100 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">150 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tây Hồ, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nhà riêng tại Nguyễn Hoàng Tôn, Xuân La Tây Hồ đối diện Tân Hoàng Minh, mặt tiền 6m. Diện tích đất 150m2. Nhà 6 tầng 1 hầm. Tầng 1 83m2 còn lại là sân, lên Tầng 2,3,4,5 là 106m2. Tầng tum 10
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                3 ngày trước
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27617698" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; ri&amp;#234;ng tại Nguyễn Ho&amp;#224;ng T&amp;#244;n, Xu&amp;#226;n La T&amp;#226;y Hồ. DT 150m2, MT 6m. LH 0376561855&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/31/F5s5yBIs/20201031152534-92ea_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/31/F5s5yBIs/20201031152534-92ea_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà riêng tại Nguyễn Hoàng Tôn, Xuân La Tây Hồ. DT 150m2, MT 6m. LH 0376561855" data-price="100 triệu/tháng" data-area="150 m²" data-pricesort="100000000" data-areasort="150" data-room="0" data-toilets="0" data-address="Tây Hồ, Hà Nội" data-description="Cho thuê nhà riêng tại Nguyễn Hoàng Tôn, Xuân La Tây Hồ đối diện Tân Hoàng Minh, mặt tiền 6m. Diện tích đất 150m2. Nhà 6 tầng 1 hầm. Tầng 1 83m2 còn lại là sân, lên Tầng 2,3,4,5 là 106m2. Tầng tum 10" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 15:47:43" data-contactname="Anh Khoa" data-contactmobile="0376561855" data-url="/cho-thue-nha-rieng-duong-nguyen-hoang-ton-phuong-xuan-la/cho-tai-tay-ho-dt-150m2-mt-6m-lh-0376561855-pr27617698" data-totalmedia="5" data-createbyuser="1500303"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="356511">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-hong-ha-prj-botanica-premier/cho-nnh-8-gia-nt-mua-dich-1-2-3pn-officetel-tu-9tr-th-pr27738698" title="Cho thuê nhanh 8 căn Botanica Premier Hồng Hà - giá nhất mùa dịch - 1 - 2 - 3PN - officetel từ 9tr" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhanh 8 căn Botanica Premier Hồng Hà - giá nhất mùa dịch - 1 - 2 - 3PN - officetel từ 9tr" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110144803-5576_wm.jpg" is-lazy-image="true" lazy-id="22">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">12</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-hong-ha-prj-botanica-premier/cho-nnh-8-gia-nt-mua-dich-1-2-3pn-officetel-tu-9tr-th-pr27738698" title="Cho thuê nhanh 8 căn Botanica Premier Hồng Hà - giá nhất mùa dịch - 1 - 2 - 3PN - officetel từ 9tr" class="vipZero product-link">
                            CHO THUÊ NHANH 8 CĂN BOTANICA PREMIER HỒNG HÀ - GIÁ NHẤT MÙA DỊCH - 1 - 2 - 3PN - OFFICETEL TỪ 9TR
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">9 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">75 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tân Bình, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Hotline: <span class="hidden-mobile des" raw="0933.46.3434">0933.46.3***</span> chuyên hỗ trợ khách hàng tìm thuê căn hộ Botanica Novaland 24/07, cam kết rổ hàng tốt nhất khu vực, chính chủ giá tốt, tìm căn nhanh và phù hợp cho khách hàng nhanh nhất, chuyên
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                3 ngày trước
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27738698" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nhanh 8 căn Botanica Premier Hồng H&amp;#224; - gi&amp;#225; nhất m&amp;#249;a dịch - 1 - 2 - 3PN - officetel từ 9tr&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110144803-5576_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110144803-5576_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhanh 8 căn Botanica Premier Hồng Hà - giá nhất mùa dịch - 1 - 2 - 3PN - officetel từ 9tr" data-price="9 triệu/tháng" data-area="75 m²" data-pricesort="9000000" data-areasort="75" data-room="0" data-toilets="0" data-address="Tân Bình, Hồ Chí Minh" data-description="Hotline: 0933.46.3434 chuyên hỗ trợ khách hàng tìm thuê căn hộ Botanica Novaland 24/07, cam kết rổ hàng tốt nhất khu vực, chính chủ giá tốt, tìm căn nhanh và phù hợp cho khách hàng nhanh nhất, chuyên" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 14:52:39" data-contactname="Nguyenvanquang" data-contactmobile="0933463434" data-url="/cho-thue-can-ho-chung-cu-duong-hong-ha-prj-botanica-premier/cho-nnh-8-gia-nt-mua-dich-1-2-3pn-officetel-tu-9tr-th-pr27738698" data-totalmedia="12" data-createbyuser="356511"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1319931">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-hoa-binh-1-phuong-hiep-tan-prj-can-ho-richstar/n-1000-1-2-3pn-c-gap-gia-re-nhat-thi-truong-xem-nha-24-24-goi-em-ngay-pr27456264" title="Hơn 1000 căn hộ Richstar 1-2-3PN cho thuê gấp, giá rẻ nhất thị trường, xem nhà LH Em : 0358683372" onclick="">
                        <img class="product-avatar-img" alt="Hơn 1000 căn hộ Richstar 1-2-3PN cho thuê gấp, giá rẻ nhất thị trường, xem nhà LH Em : 0358683372" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/18/20201018105409-b9ea_wm.jpg" is-lazy-image="true" lazy-id="23">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">9</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-hoa-binh-1-phuong-hiep-tan-prj-can-ho-richstar/n-1000-1-2-3pn-c-gap-gia-re-nhat-thi-truong-xem-nha-24-24-goi-em-ngay-pr27456264" title="Hơn 1000 căn hộ Richstar 1-2-3PN cho thuê gấp, giá rẻ nhất thị trường, xem nhà LH Em : 0358683***" class="vipZero product-link" style="overflow: visible;">
                            HƠN 1000 CĂN HỘ RICHSTAR 1-2-3PN CHO THUÊ GẤP, GIÁ RẺ NHẤT THỊ TRƯỜNG, XEM NHÀ LH EM : <span class="hidden-mobile m-on-title" raw="0358683372">0358683***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">11 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">65 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tân Phú, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Cần cho thuê gấp căn hộ cao cấp - RichStar Novaland quận Tân Phú. LH: <span class="hidden-mobile des" raw="0358683372">0358683***</span>.Bên em có nhiều căn độc quyền giá tốt mùa dịch, thương lượng như giá mong muốn.* Căn 2PN. Diện tích 55m2, giá 9 triệu/
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                3 ngày trước
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27456264" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Hơn 1000 căn hộ Richstar 1-2-3PN cho thu&amp;#234; gấp, gi&amp;#225; rẻ nhất thị trường, xem nh&amp;#224; LH Em : 0358683372&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/18/20201018105409-b9ea_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/18/20201018105409-b9ea_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Hơn 1000 căn hộ Richstar 1-2-3PN cho thuê gấp, giá rẻ nhất thị trường, xem nhà LH Em : 0358683372" data-price="11 triệu/tháng" data-area="65 m²" data-pricesort="11000000" data-areasort="65" data-room="2" data-toilets="2" data-address="Tân Phú, Hồ Chí Minh" data-description="Cần cho thuê gấp căn hộ cao cấp - RichStar Novaland quận Tân Phú. LH: 0358683372.Bên em có nhiều căn độc quyền giá tốt mùa dịch, thương lượng như giá mong muốn.* Căn 2PN. Diện tích 55m2, giá 9 triệu/" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 11:00:22" data-contactname="Thám Hoàng" data-contactmobile="0358683372" data-url="/cho-thue-can-ho-chung-cu-duong-hoa-binh-1-phuong-hiep-tan-prj-can-ho-richstar/n-1000-1-2-3pn-c-gap-gia-re-nhat-thi-truong-xem-nha-24-24-goi-em-ngay-pr27456264" data-totalmedia="9" data-createbyuser="1319931"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1364106">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-luong-bang-1-phuong-tan-phu-19-prj-golden-king/ban-va-cho-can-ho-officetel-duy-nhat-tai-my-hung-pr27466486" title="Bán và Cho thuê căn hộ văn phòng (Officetel) duy nhất tại Phú Mỹ Hưng" onclick="">
                        <img class="product-avatar-img" alt="Bán và Cho thuê căn hộ văn phòng (Officetel) duy nhất tại Phú Mỹ Hưng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019140345-cefb_wm.jpg" is-lazy-image="true" lazy-id="24">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">7</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-luong-bang-1-phuong-tan-phu-19-prj-golden-king/ban-va-cho-can-ho-officetel-duy-nhat-tai-my-hung-pr27466486" title="Bán và Cho thuê căn hộ văn phòng (Officetel) duy nhất tại Phú Mỹ Hưng" class="vipZero product-link">
                            BÁN VÀ CHO THUÊ CĂN HỘ VĂN PHÒNG (OFFICETEL) DUY NHẤT TẠI PHÚ MỸ HƯNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">35 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 7, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Bán và Cho thuê căn hộ văn phòng (Officetel) mặt tiền Nguyễn Lương Bằng - Phú Mỹ Hưng - Vị trí đắc địa 3 mặt tiền đường Nguyễn Lương Bằng - Trần Văn Trà - Đường nội khu.  - Thích hợp: Mở văn phòng cô
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                3 ngày trước
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27466486" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n v&amp;#224; Cho thu&amp;#234; căn hộ văn ph&amp;#242;ng (Officetel) duy nhất tại Ph&amp;#250; Mỹ Hưng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019140345-cefb_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/19/20201019140345-cefb_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán và Cho thuê căn hộ văn phòng (Officetel) duy nhất tại Phú Mỹ Hưng" data-price="Giá thỏa thuận" data-area="35 m²" data-pricesort="0" data-areasort="35" data-room="0" data-toilets="1" data-address="Quận 7, Hồ Chí Minh" data-description="Bán và Cho thuê căn hộ văn phòng (Officetel) mặt tiền Nguyễn Lương Bằng - Phú Mỹ Hưng - Vị trí đắc địa 3 mặt tiền đường Nguyễn Lương Bằng - Trần Văn Trà - Đường nội khu.  - Thích hợp: Mở văn phòng cô" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 09:38:53" data-contactname="Công Ty Tnhh Tập Đoàn Hoàng Quân" data-contactmobile="0896691515" data-url="/cho-thue-van-phong-duong-nguyen-luong-bang-1-phuong-tan-phu-19-prj-golden-king/ban-va-cho-can-ho-officetel-duy-nhat-tai-my-hung-pr27466486" data-totalmedia="7" data-createbyuser="1364106"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="757193">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-nguyen-huu-tho-phuong-tan-hung-14-prj-sunrise-city/do-covid-gia-c-cac-loai-giam-cuc-thap-lh-0888888104-de-co-gia-re-nhat-pr26559693" title="Cho thuê rất nhiều căn hộ Sunrise City - 2PN, giá 13 triệu / 1 tháng, 0888888104 Mr. Giàu" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê rất nhiều căn hộ Sunrise City - 2PN, giá 13 triệu / 1 tháng, 0888888104 Mr. Giàu" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/06/20200806175525-2c95_wm.jpeg" is-lazy-image="true" lazy-id="25">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-nguyen-huu-tho-phuong-tan-hung-14-prj-sunrise-city/do-covid-gia-c-cac-loai-giam-cuc-thap-lh-0888888104-de-co-gia-re-nhat-pr26559693" title="Cho thuê rất nhiều căn hộ Sunrise City - 2PN, giá 13 triệu / 1 tháng, 0888888*** Mr. Giàu" class="vipZero product-link" style="overflow: visible;">
                            CHO THUÊ RẤT NHIỀU CĂN HỘ SUNRISE CITY - 2PN, GIÁ 13 TRIỆU / 1 THÁNG, <span class="hidden-mobile m-on-title" raw="0888888104">0888888***</span> MR. GIÀU
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">13 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">76 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 7, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Mr Giàu - Quản lý cho thuê rất nhiều căn hộ Sunrise City và City View. Giá tốt nhất thị trường cho thuê hiện nay. - Liên hệ Mr Giàu: <span class="hidden-mobile des" raw="0916606100">0916606***</span> - Zalo/ SMS... Để được tư vấn và dẫn đi xem nhà và thuê
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                3 ngày trước
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="26559693" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; rất nhiều căn hộ Sunrise City - 2PN, gi&amp;#225; 13 triệu / 1 th&amp;#225;ng, 0888888104 Mr. Gi&amp;#224;u&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/08/06/20200806175525-2c95_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/08/06/20200806175525-2c95_wm.jpeg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê rất nhiều căn hộ Sunrise City - 2PN, giá 13 triệu / 1 tháng, 0888888104 Mr. Giàu" data-price="13 triệu/tháng" data-area="76 m²" data-pricesort="13000000" data-areasort="76" data-room="2" data-toilets="0" data-address="Quận 7, Hồ Chí Minh" data-description="Mr Giàu - Quản lý cho thuê rất nhiều căn hộ Sunrise City và City View. Giá tốt nhất thị trường cho thuê hiện nay. - Liên hệ Mr Giàu: 0916606100 - Zalo/ SMS... Để được tư vấn và dẫn đi xem nhà và thuê" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 09:01:19" data-contactname="Dương Văn Giàu" data-contactmobile="0916606100" data-url="/cho-thue-can-ho-chung-cu-duong-nguyen-huu-tho-phuong-tan-hung-14-prj-sunrise-city/do-covid-gia-c-cac-loai-giam-cuc-thap-lh-0888888104-de-co-gia-re-nhat-pr26559693" data-totalmedia="8" data-createbyuser="757193"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="1417859">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-ho-tung-mau-phuong-phu-dien-prj-goldmark-city/ban-quan-ly-du-an-doc-quyen-c-2-3-4pn-gia-tot-0948541993-pr27475733" title="Ban quản lý dự án Goldmark City độc quyền cho thuê căn hộ 2 - 3 - 4PN giá tốt (0948541993)" onclick="">
                        <img class="product-avatar-img" alt="Ban quản lý dự án Goldmark City độc quyền cho thuê căn hộ 2 - 3 - 4PN giá tốt (0948541993)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/20201020100848-df3b_wm.jpg" is-lazy-image="true" lazy-id="26"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/20201020100844-e2df_wm.jpg" is-lazy-image="true" lazy-id="27"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/20201020100844-4529_wm.jpg" is-lazy-image="true" lazy-id="28">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">19</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-ho-tung-mau-phuong-phu-dien-prj-goldmark-city/ban-quan-ly-du-an-doc-quyen-c-2-3-4pn-gia-tot-0948541993-pr27475733" title="Ban quản lý dự án Goldmark City độc quyền cho thuê căn hộ 2 - 3 - 4PN giá tốt (0948541***)" class="vipZero product-link" style="overflow: visible;">
                            BAN QUẢN LÝ DỰ ÁN GOLDMARK CITY ĐỘC QUYỀN CHO THUÊ CĂN HỘ 2 - 3 - 4PN GIÁ TỐT (<span class="hidden-mobile m-on-title" raw="0948541993">0948541***</span>)
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">8 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">84 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">2 PN</span>
                        <span class="location">Bắc Từ Liêm, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Độc quyền cho thuê toàn bộ quỹ căn giá rẻ nhất tại Goldmark City. Ban quản lý dự án Goldmark City - 136 Hồ Tùng Mậu, Hà Nội. Liên hệ xem căn hộ tại tòa Sapphire 3, dự án Goldmark City, 136 Hồ Tùng Mậu, Hà Nội. Hotline: <span class="hidden-mobile des" raw="0901923966">0901923***</span> - <span class="hidden-mobile des" raw="0948541993">0948541***</span>. http://thuecanho.goldmarkscity.com/ - miễn phí 100% cho khách xem nhà và thuê nhà.- Cam kết làm thẻ cư dân, vé ô tô, xe máy cho khách. -
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                4 ngày trước
                                <span class="tooltip-time">09/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Đinh Hải Nam">
                                <span class="contact-name">Đinh Hải Nam</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0948541993" raw="0948541993">0948 541 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27475733" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ban quản l&amp;#253; dự &amp;#225;n Goldmark City độc quyền cho thu&amp;#234; căn hộ 2 - 3 - 4PN gi&amp;#225; tốt (0948541993)&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/20201020100848-df3b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/20201020100844-e2df_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/20201020100844-4529_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/10/20/20201020100848-df3b_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Ban quản lý dự án Goldmark City độc quyền cho thuê căn hộ 2 - 3 - 4PN giá tốt (0948541993)" data-price="8 triệu/tháng" data-area="84 m²" data-pricesort="8000000" data-areasort="84" data-room="2" data-toilets="0" data-address="Bắc Từ Liêm, Hà Nội" data-description="Độc quyền cho thuê toàn bộ quỹ căn giá rẻ nhất tại Goldmark City. Ban quản lý dự án Goldmark City - 136 Hồ Tùng Mậu, Hà Nội. Liên hệ xem căn hộ tại tòa Sapphire 3, dự án Goldmark City, 136 Hồ Tùng Mậu, Hà Nội. Hotline: 0901923966 - 0948541993. http://thuecanho.goldmarkscity.com/ - miễn phí 100% cho khách xem nhà và thuê nhà.- Cam kết làm thẻ cư dân, vé ô tô, xe máy cho khách. -" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 16:58:27" data-contactname="Đinh Hải Nam" data-contactmobile="0948541993" data-url="/cho-thue-can-ho-chung-cu-duong-ho-tung-mau-phuong-phu-dien-prj-goldmark-city/ban-quan-ly-du-an-doc-quyen-c-2-3-4pn-gia-tot-0948541993-pr27475733" data-totalmedia="19" data-createbyuser="1417859"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="1385604">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/pkd-chuyen-c-q-10-0979308662-gia-chi-tu-13-trieu-thang-pr26740155" title="PKD CĐT cho thuê căn hộ Hado Centrosa Q. 10, 0988062208 giá từ 13 triệu/tháng, hỗ trợ suất đậu ô tô" onclick="">
                        <img class="product-avatar-img" alt="PKD CĐT cho thuê căn hộ Hado Centrosa Q. 10, 0988062208 giá từ 13 triệu/tháng, hỗ trợ suất đậu ô tô" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/20/20200820172057-4bf8_wm.jpg" is-lazy-image="true" lazy-id="29"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/20/20200820172320-36e5_wm.jpg" is-lazy-image="true" lazy-id="30"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/20/20200820172058-87b4_wm.jpg" is-lazy-image="true" lazy-id="31">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">11</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/pkd-chuyen-c-q-10-0979308662-gia-chi-tu-13-trieu-thang-pr26740155" title="PKD CĐT cho thuê căn hộ Hado Centrosa Q. 10, 0988062*** giá từ 13 triệu/tháng, hỗ trợ suất đậu ô tô" class="vipZero product-link" style="overflow: visible;">
                            PKD CĐT CHO THUÊ CĂN HỘ HADO CENTROSA Q. 10, <span class="hidden-mobile m-on-title" raw="0988062208">0988062***</span> GIÁ TỪ 13 TRIỆU/THÁNG, HỖ TRỢ SUẤT ĐẬU Ô TÔ
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">13 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">53 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">1 PN</span>
                        <span class="location">Quận 10, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Phòng kinh doanh chủ đầu tư Hado xin cập nhật giỏ hàng cho thuê căn hộ Hado Centrosa Garden Quận 10 với giá chỉ từ 13 triệu/ full nội thất, bao phí quản lý, hồ bơi. Ưu đãi những giao dịch sớm nhất suất đổ ô tô, phí quản lý và phí hồ bơi tiêu chuẩn Olympic. - Hotline: <span class="hidden-mobile des" raw="0988062208">0988062***</span> / <span class="hidden-mobile des" raw="0979308662">0979308***</span>. 1. Vị trí trung tâm ngay mặt tiền số 200 đường 3/2, cách quận 1,3,5 khoảng 5 phút. 2
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                4 ngày trước
                                <span class="tooltip-time">09/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Phòng Kinh Doanh">
                                <span class="contact-name">Phòng Kinh Doanh</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0988062208" raw="0988062208">0988 062 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="26740155" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;PKD CĐT cho thu&amp;#234; căn hộ Hado Centrosa Q. 10, 0988062208 gi&amp;#225; từ 13 triệu/th&amp;#225;ng, hỗ trợ suất đậu &amp;#244; t&amp;#244;&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/08/20/20200820172057-4bf8_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/08/20/20200820172320-36e5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/08/20/20200820172058-87b4_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/08/20/20200820172057-4bf8_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="PKD CĐT cho thuê căn hộ Hado Centrosa Q. 10, 0988062208 giá từ 13 triệu/tháng, hỗ trợ suất đậu ô tô" data-price="13 triệu/tháng" data-area="53 m²" data-pricesort="13000000" data-areasort="53" data-room="1" data-toilets="0" data-address="Quận 10, Hồ Chí Minh" data-description="Phòng kinh doanh chủ đầu tư Hado xin cập nhật giỏ hàng cho thuê căn hộ Hado Centrosa Garden Quận 10 với giá chỉ từ 13 triệu/ full nội thất, bao phí quản lý, hồ bơi. Ưu đãi những giao dịch sớm nhất suất đổ ô tô, phí quản lý và phí hồ bơi tiêu chuẩn Olympic. - Hotline: 0988062208 / 0979308662. 1. Vị trí trung tâm ngay mặt tiền số 200 đường 3/2, cách quận 1,3,5 khoảng 5 phút. 2" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 16:32:35" data-contactname="Phòng Kinh Doanh" data-contactmobile="0988062208" data-url="/cho-thue-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/pkd-chuyen-c-q-10-0979308662-gia-chi-tu-13-trieu-thang-pr26740155" data-totalmedia="11" data-createbyuser="1385604"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-center">
            <div class="pagination">
<a pid="1" class="actived" href="https://batdongsan.com.vn/nha-dat-cho-thue">1</a>
<a pid="2" class="" href="https://batdongsan.com.vn/nha-dat-cho-thue/p2">2</a>
<a pid="3" class="" href="https://batdongsan.com.vn/nha-dat-cho-thue/p3">3</a>
<a pid="4" class="" href="https://batdongsan.com.vn/nha-dat-cho-thue/p4">4</a>
<a pid="5" class="" href="https://batdongsan.com.vn/nha-dat-cho-thue/p5">5</a>
<a pid="2317" href="https://batdongsan.com.vn/nha-dat-cho-thue/p2317"><img src="./assets/image/ic_double_caret_right.png"></a>
</div>

        </div>
    </div>






    <div class="divide">&nbsp;</div>
<div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Cho thuê nhà trọ gần Kinh Tế Quốc Dân" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-tro-gan-kinh-te-quoc-dan">Cho thuê nhà trọ gần Kinh Tế Quốc Dân</a></li>    <li><a title="Cho thuê phòng trọ gần Kinh Tế Quốc Dân" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-phong-tro-gan-kinh-te-quoc-dan">Cho thuê phòng trọ gần Kinh Tế Quốc Dân</a></li>    <li><a title="Cho thuê nhà ngõ Trần Duy Hưng" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-ngo-tran-duy-hung">Cho thuê nhà ngõ Trần Duy Hưng</a></li>    <li><a title="Cho thuê nhà ngõ Đào Tấn" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-ngo-dao-tan">Cho thuê nhà ngõ Đào Tấn</a></li>    <li><a title="Cho thuê nhà ngõ Thông Phong" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-ngo-thong-phong">Cho thuê nhà ngõ Thông Phong</a></li>    <li><a title="Cho thuê phòng trọ chính chủ quận Đống Đa" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-phong-tro-chinh-chu-quan-dong-da">Cho thuê phòng trọ chính chủ quận Đống Đa</a></li>    </ul></div><form id="productListBinnova" method="post">
    <input id="hashAlias" type="hidden" value="1cfacd3bd165555559638cbce13b4710d7f1a64f43c4f9c7e858852c7b323868">
</form>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
            var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                model: {
                    typeOfProduct: 49,
                    categoryId: 0,
                    cityCode: 'CN',
                    districtId: 0,
                    projectId: 0,
                    wardId: 0,
                    streetId: 0
                }
            });
        } else {
            setTimeout(callJQuery, 100);
        }
    })();
</script>

    </div>
    <div class="main-right">
        
    <div class="box-common box-common-border box-price fixgradient">
        <h4 class="box-title">Lọc theo khoảng giá</h4>
        <div class="box-content">
            <ul class="link-hover-blue height">
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/-1/2/-1/-1" title="Nhà đất cho thuê Việt Nam giá 1 - 3 triệu">1 - 3 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/-1/3/-1/-1" title="Nhà đất cho thuê Việt Nam giá 3 - 5 triệu">3 - 5 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/-1/4/-1/-1" title="Nhà đất cho thuê Việt Nam giá 5 - 10 triệu">5 - 10 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/-1/5/-1/-1" title="Nhà đất cho thuê Việt Nam giá 10 - 40 triệu">10 - 40 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/-1/6/-1/-1" title="Nhà đất cho thuê Việt Nam giá 40 - 70 triệu">40 - 70 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/-1/7/-1/-1" title="Nhà đất cho thuê Việt Nam giá 70 - 100 triệu">70 - 100 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/-1/8/-1/-1" title="Nhà đất cho thuê Việt Nam giá &gt; 100 triệu">&gt; 100 triệu</a></li>
            </ul>
            <div class="box-view-more ">
                <a href="javascript:void(0);" class="box-product-right-viewmore">
                    <div class="gradient">&nbsp;</div>
                    <div class="view-more">Xem thêm<img src="./assets/image/ic_caret_down.svg"></div>
                </a>
            </div>
        </div>
    </div>


        
    <div class="box-common box-common-border box-price fixgradient">
        <h4 class="box-title">Lọc theo diện tích</h4>
        <div class="box-content">
            <ul class="link-hover-blue height">
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/1/-1/-1/-1" title="Nhà đất cho thuê Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/2/-1/-1/-1" title="Nhà đất cho thuê Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/3/-1/-1/-1" title="Nhà đất cho thuê Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/4/-1/-1/-1" title="Nhà đất cho thuê Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/5/-1/-1/-1" title="Nhà đất cho thuê Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/6/-1/-1/-1" title="Nhà đất cho thuê Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/7/-1/-1/-1" title="Nhà đất cho thuê Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/8/-1/-1/-1" title="Nhà đất cho thuê Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/9/-1/-1/-1" title="Nhà đất cho thuê Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-cho-thue/10/-1/-1/-1" title="Nhà đất cho thuê Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
            </ul>
            <div class="box-view-more ">
                <a href="javascript:void(0);" class="box-product-right-viewmore">
                    <div class="gradient">&nbsp;</div>
                    <div class="view-more">Xem thêm<img src="./assets/image/ic_caret_down.svg"></div>
                </a>
            </div>
        </div>
    </div>


        
    <div class="divide-full"></div>
    <div class="box-common box-common-filled box-max-item-cate">
        <h2 class="box-title">Nhà đất cho thuê</h2>

        <div class="box-content link-hover-blue">
            <ul>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-tp-hcm" title="Nhà đất cho thuê tại Hồ Chí Minh">
                                Hồ Chí Minh (25107)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-ha-noi" title="Nhà đất cho thuê tại Hà Nội">
                                Hà Nội (17389)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-binh-duong" title="Nhà đất cho thuê tại Bình Dương">
                                Bình Dương (1084)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-da-nang" title="Nhà đất cho thuê tại Đà Nẵng">
                                Đà Nẵng (741)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-hai-phong" title="Nhà đất cho thuê tại Hải Phòng">
                                Hải Phòng (368)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-bac-ninh" title="Nhà đất cho thuê tại Bắc Ninh">
                                Bắc Ninh (91)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-phu-tho" title="Nhà đất cho thuê tại Phú Thọ">
                                Phú Thọ (6)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-lang-son" title="Nhà đất cho thuê tại Lạng Sơn">
                                Lạng Sơn (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-dong-thap" title="Nhà đất cho thuê tại Đồng Tháp">
                                Đồng Tháp (7)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-ha-nam" title="Nhà đất cho thuê tại Hà Nam">
                                Hà Nam (9)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-nam-dinh" title="Nhà đất cho thuê tại Nam Định">
                                Nam Định (8)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-nghe-an" title="Nhà đất cho thuê tại Nghệ An">
                                Nghệ An (6)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-lam-dong" title="Nhà đất cho thuê tại Lâm Đồng">
                                Lâm Đồng (25)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-bac-lieu" title="Nhà đất cho thuê tại Bạc Liêu">
                                Bạc Liêu (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-hung-yen" title="Nhà đất cho thuê tại Hưng Yên">
                                Hưng Yên (146)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-hai-duong" title="Nhà đất cho thuê tại Hải Dương">
                                Hải Dương (18)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-tra-vinh" title="Nhà đất cho thuê tại Trà Vinh">
                                Trà Vinh (5)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-hau-giang" title="Nhà đất cho thuê tại Hậu Giang">
                                Hậu Giang (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-vinh-phuc" title="Nhà đất cho thuê tại Vĩnh Phúc">
                                Vĩnh Phúc (37)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue-tay-ninh" title="Nhà đất cho thuê tại Tây Ninh">
                                Tây Ninh (5)
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
    </div>
</div>
<div class="banner-bottom">
    <div style="float: left; width: 560px">
    </div>
    <div style="float: left; width: 430px; margin-left: 5px">
    </div>
</div>
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
            