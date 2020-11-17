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
                <div class="custom-value hasvalue">Căn hộ chung cư</div>
            </div>
            <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="326">
            <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                    <li vl="0"><span class="current">Tất cả nhà đất</span></li>
                                    <li vl="326"><span class="active">Căn hộ chung cư</span></li>
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
                        <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                        <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                categoryId: 326,
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
    <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu" level="1" title="Cho thuê căn hộ chung cư tại Việt Nam">Cho thuê</a><span>/</span><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu" level="2" title="Cho thuê căn hộ chung cư tại Việt Nam">Căn hộ chung cư trên toàn quốc</a>
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
        {"@context":"https://schema.org/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Trang chủ","item":"https://batdongsan.com.vn"},{"@type":"ListItem","position":2,"name":"Cho thuê","item":"https://batdongsan.com.vn/cho-thue-can-ho-chung-cu"},{"@type":"ListItem","position":3,"name":"Căn hộ chung cư trên toàn quốc","item":"https://batdongsan.com.vn/cho-thue-can-ho-chung-cu"}]}
    </script>

<div class="product-list-header pad-top-8">
    <h1>Cho thuê căn hộ chung cư tại Việt Nam</h1>
        <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">23,628</span> bất động sản.</div>
    

</div>
    <div class="product-search-most mar-top-8 mar-bot-8">
        <div class="box-title">Các khu vực, địa điểm nổi bật</div>
        <ul class="clearfix link-hover-blue">
                <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-3">Cho thuê căn hộ Quận 3</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-5">Cho thuê căn hộ Quận 5</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-8">Cho thuê căn hộ Quận 8</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-binh-thanh">Cho thuê căn hộ Bình Thạnh</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-tan-phu">Cho thuê căn hộ Tân Phú</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-phu-nhuan">Cho thuê căn hộ Phú Nhuận</a></li>
        </ul>
    </div>

    <div class="product-nav-bar pad-top-8 clearfix">
        <ul class="ul-tab fl mar-right-16">
            <li class="list-display actived">Danh sách</li>
            <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
            <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-cho-thue-can-ho-chung-cu">Bản đồ</a></li>
        </ul>
        <div class="fr">
            <div class="custom-drop-control sort-control">
                <div class="custom-control-label">
                    Sắp xếp
                </div>
                <div class="custom-dropbox hiding" id="divSort">
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
            <div class="vip0 product-item clearfix" uid="879197">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-ben-van-don-56/t-meland-chuyen-c-ngan-han-dai-han-cac-tai-q4-tu-ot-1-2-3-4pn-0778179179-tuan-pr27778972" title="T-HomeLand Chuyên cho thuê ngắn hạn - dài hạn các Căn Hộ tại Q4 từ OT -1- 2- 3- 4PN,0778179179 Tuấn" onclick="">
                        <img class="product-avatar-img" alt="T-HomeLand Chuyên cho thuê ngắn hạn - dài hạn các Căn Hộ tại Q4 từ OT -1- 2- 3- 4PN,0778179179 Tuấn" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201113104726-a6e3_wm.jpg" is-lazy-image="true" lazy-id="0">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">22</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-ben-van-don-56/t-meland-chuyen-c-ngan-han-dai-han-cac-tai-q4-tu-ot-1-2-3-4pn-0778179179-tuan-pr27778972" title="T-HomeLand Chuyên cho thuê ngắn hạn - dài hạn các Căn Hộ tại Q4 từ OT -1- 2- 3- 4PN,0778179*** Tuấn" class="vipZero product-link" style="overflow: visible;">
                            T-HOMELAND CHUYÊN CHO THUÊ NGẮN HẠN - DÀI HẠN CÁC CĂN HỘ TẠI Q4 TỪ OT -1- 2- 3- 4PN,<span class="hidden-mobile m-on-title" raw="0778179179">0778179***</span> TUẤN
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">13 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">80 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 4, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Công Ty BĐS T- Home&amp;Land Chuyên cho thuê ngắn hạn - dài hạn các căn hộ tại Quận 4 với đa dạng các loại phòng từ OT-1-2-3-4PN 
 
 Phòng kinh doanh  quản lý 100% căn hộ 1 - 2 - 3 phòng ngủ, officetel, 
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
                                <i class="iconSave" data-productid="27778972" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;T-HomeLand Chuy&amp;#234;n cho thu&amp;#234; ngắn hạn - d&amp;#224;i hạn c&amp;#225;c Căn Hộ tại Q4 từ OT -1- 2- 3- 4PN,0778179179 Tuấn&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113104726-a6e3_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/13/20201113104726-a6e3_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="T-HomeLand Chuyên cho thuê ngắn hạn - dài hạn các Căn Hộ tại Q4 từ OT -1- 2- 3- 4PN,0778179179 Tuấn" data-price="13 triệu/tháng" data-area="80 m²" data-pricesort="13000000" data-areasort="80" data-room="0" data-toilets="0" data-address="Quận 4, Hồ Chí Minh" data-description="Công Ty BĐS T- Home&amp;Land Chuyên cho thuê ngắn hạn - dài hạn các căn hộ tại Quận 4 với đa dạng các loại phòng từ OT-1-2-3-4PN 
 
 Phòng kinh doanh  quản lý 100% căn hộ 1 - 2 - 3 phòng ngủ, officetel, " data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 11:09:22" data-contactname="Bùi Đức Tuấn" data-contactmobile="0778179179" data-url="/cho-thue-can-ho-chung-cu-duong-ben-van-don-56/t-meland-chuyen-c-ngan-han-dai-han-cac-tai-q4-tu-ot-1-2-3-4pn-0778179179-tuan-pr27778972" data-totalmedia="22" data-createbyuser="879197"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="198762">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-bo-bao-tan-thang-phuong-son-ky-prj-celadon-city/c-nhanh-q-phu-2pn-1wc-full-noi-that-o-ngay-8tr-0949551199-pr27680834" title="Trùm cho thuê căn hộ Celadon City Q. Tân Phú, giá rẻ nhất 6.5tr, ở ngay, khu Emerald. 0949551199" onclick="">
                        <img class="product-avatar-img" alt="Trùm cho thuê căn hộ Celadon City Q. Tân Phú, giá rẻ nhất 6.5tr, ở ngay, khu Emerald. 0949551199" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201109120852-345a_wm.jpg" is-lazy-image="true" lazy-id="1">
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
                        <img class="product-avatar-img" alt="Chuyên cho thuê CC Richstar 1PN, 2PN, 3PN giá rẻ, view nào cũng có xem nhà dễ dàng. LH:0948614321" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112162038-aed2_wm.jpg" is-lazy-image="true" lazy-id="2"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112162047-f341_wm.jpg" is-lazy-image="true" lazy-id="3"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112162047-f9c5_wm.jpg" is-lazy-image="true" lazy-id="4">
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
            <div class="vip0 product-item clearfix" uid="1333557">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-mai-chi-tho-phuong-an-phu-prj-lexington-residence/chu-nha-cho-gap-ch-2pn-du-noi-that-gia-11-trieu-thang-xem-nha-chot-ngay-pr26976686" title="Giá không thể tốt hơn được nữa - 9 tr/th - đủ nội thất - block yên tĩnh - Lexington - giữ key 24/7" onclick="">
                        <img class="product-avatar-img" alt="Giá không thể tốt hơn được nữa - 9 tr/th - đủ nội thất - block yên tĩnh - Lexington - giữ key 24/7" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019163256-e4b5_wm.jpg" is-lazy-image="true" lazy-id="5">
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
                        <img class="product-avatar-img" alt="Cập nhật những căn hộ cho thuê giá thấp nhất Vinhomes Grand Park, Q9. LH: 0907090388 Pháp" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112101453-7d77_wm.jpg" is-lazy-image="true" lazy-id="6">
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
                        <img class="product-avatar-img" alt="Chuyên cho thuê căn hộ Masteri Thảo Điền từ 1PN-2PN-3PN-Penthouse giá tốt nhất, LH 0909 268 955" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/08/20200608103934-9a92_wm.jpg" is-lazy-image="true" lazy-id="7">
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
                        <img class="product-avatar-img" alt="Giá thật 100% bạn không mất thời gian khi thuê CH Botanica 9tr=50m2, 12tr=68m2, LH 0945576497" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112081536-864e_wm.jpg" is-lazy-image="true" lazy-id="8">
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
            <div class="vip0 product-item clearfix" uid="233197">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-nguyen-xien-phuong-long-thanh-my-prj-vinhomes-grand-park-quan-9/cho-nhieu-ch-33m2-50m2-60m2-70m2-80m2-1pn-2pn-3pn-moi-100-0977771919-pr27610498" title="Cho thuê nhiều CH Vinhomes Grand Park 33m2, 50m2, 60m2 70m2 80m2, 1PN 2PN 3PN, mới 100%, 0977771919" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhiều CH Vinhomes Grand Park 33m2, 50m2, 60m2 70m2 80m2, 1PN 2PN 3PN, mới 100%, 0977771919" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/30/20201030185157-8342_wm.jpg" is-lazy-image="true" lazy-id="9">
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
            <div class="vip0 product-item clearfix" uid="356511">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-hong-ha-prj-botanica-premier/cho-nnh-8-gia-nt-mua-dich-1-2-3pn-officetel-tu-9tr-th-pr27738698" title="Cho thuê nhanh 8 căn Botanica Premier Hồng Hà - giá nhất mùa dịch - 1 - 2 - 3PN - officetel từ 9tr" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhanh 8 căn Botanica Premier Hồng Hà - giá nhất mùa dịch - 1 - 2 - 3PN - officetel từ 9tr" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110144803-5576_wm.jpg" is-lazy-image="true" lazy-id="10">
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
                        <img class="product-avatar-img" alt="Hơn 1000 căn hộ Richstar 1-2-3PN cho thuê gấp, giá rẻ nhất thị trường, xem nhà LH Em : 0358683372" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/18/20201018105409-b9ea_wm.jpg" is-lazy-image="true" lazy-id="11">
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
            <div class="vip0 product-item clearfix" uid="757193">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-nguyen-huu-tho-phuong-tan-hung-14-prj-sunrise-city/do-covid-gia-c-cac-loai-giam-cuc-thap-lh-0888888104-de-co-gia-re-nhat-pr26559693" title="Cho thuê rất nhiều căn hộ Sunrise City - 2PN, giá 13 triệu / 1 tháng, 0888888104 Mr. Giàu" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê rất nhiều căn hộ Sunrise City - 2PN, giá 13 triệu / 1 tháng, 0888888104 Mr. Giàu" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/06/20200806175525-2c95_wm.jpeg" is-lazy-image="true" lazy-id="12">
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
                        <img class="product-avatar-img" alt="Ban quản lý dự án Goldmark City độc quyền cho thuê căn hộ 2 - 3 - 4PN giá tốt (0948541993)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/20201020100848-df3b_wm.jpg" is-lazy-image="true" lazy-id="13"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/20201020100844-e2df_wm.jpg" is-lazy-image="true" lazy-id="14"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/20201020100844-4529_wm.jpg" is-lazy-image="true" lazy-id="15">
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
                        <img class="product-avatar-img" alt="PKD CĐT cho thuê căn hộ Hado Centrosa Q. 10, 0988062208 giá từ 13 triệu/tháng, hỗ trợ suất đậu ô tô" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/20/20200820172057-4bf8_wm.jpg" is-lazy-image="true" lazy-id="16"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/20/20200820172320-36e5_wm.jpg" is-lazy-image="true" lazy-id="17"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/20/20200820172058-87b4_wm.jpg" is-lazy-image="true" lazy-id="18">
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
            <div class="vip0 product-item clearfix" uid="563083">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-xa-lo-ha-noi-phuong-thao-dien-prj-masteri-thao-dien/c-tu-1-3pn-gia-tot-nhat-thi-truong-0902633686-pr11546311" title="Cho thuê căn hộ Masteri Thảo Điền từ 1 - 3PN, giá tốt nhất thị trường, 0902633686" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê căn hộ Masteri Thảo Điền từ 1 - 3PN, giá tốt nhất thị trường, 0902633686" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2019/08/27/x9EWVri8/20190827115011-1302.jpg" is-lazy-image="true" lazy-id="19">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">11</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-xa-lo-ha-noi-phuong-thao-dien-prj-masteri-thao-dien/c-tu-1-3pn-gia-tot-nhat-thi-truong-0902633686-pr11546311" title="Cho thuê căn hộ Masteri Thảo Điền từ 1 - 3PN, giá tốt nhất thị trường, 0902633***" class="vipZero product-link" style="overflow: visible;">
                            CHO THUÊ CĂN HỘ MASTERI THẢO ĐIỀN TỪ 1 - 3PN, GIÁ TỐT NHẤT THỊ TRƯỜNG, <span class="hidden-mobile m-on-title" raw="0902633686">0902633***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">13 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">70 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Hiện tại chúng tôi đang cho thuê những căn hộ Masteri Thảo Điền với giá cả tốt nhất.Lầu cao, lầu thấp, view sông, view hồ bơi, view xa lộ, nhà trống, nhà có nội thất từ cơ bản đến cao cấp. Quý khách 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                4 ngày trước
                                <span class="tooltip-time">09/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="11546311" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; căn hộ Masteri Thảo Điền từ 1 - 3PN, gi&amp;#225; tốt nhất thị trường, 0902633686&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/08/27/x9EWVri8/20190827115011-1302.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2019/08/27/x9EWVri8/20190827115011-1302.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê căn hộ Masteri Thảo Điền từ 1 - 3PN, giá tốt nhất thị trường, 0902633686" data-price="13 triệu/tháng" data-area="70 m²" data-pricesort="13000000" data-areasort="70" data-room="1" data-toilets="0" data-address="Quận 2, Hồ Chí Minh" data-description="Hiện tại chúng tôi đang cho thuê những căn hộ Masteri Thảo Điền với giá cả tốt nhất.Lầu cao, lầu thấp, view sông, view hồ bơi, view xa lộ, nhà trống, nhà có nội thất từ cơ bản đến cao cấp. Quý khách " data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 10:58:41" data-contactname="Doan Thi Quynh" data-contactmobile="0902633686" data-url="/cho-thue-can-ho-chung-cu-duong-xa-lo-ha-noi-phuong-thao-dien-prj-masteri-thao-dien/c-tu-1-3pn-gia-tot-nhat-thi-truong-0902633686-pr11546311" data-totalmedia="11" data-createbyuser="563083"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1195808">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-tran-duy-hung-phuong-trung-hoa-4-prj-vinhomes-dcapitale/bql-c-500-vinmes-a-cau-giay-re-nhat-lh-0968868588-pr27712966" title="BQL cho thuê 500 căn hộ Vinhomes D&#39;Capitale Trần Duy Hưng Trung Hoà Cầu Giấy rẻ nhất, LH 0968868588" onclick="">
                        <img class="product-avatar-img" alt="BQL cho thuê 500 căn hộ Vinhomes D&#39;Capitale Trần Duy Hưng Trung Hoà Cầu Giấy rẻ nhất, LH 0968868588" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108174246-0505_wm.jpg" is-lazy-image="true" lazy-id="20">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">13</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-tran-duy-hung-phuong-trung-hoa-4-prj-vinhomes-dcapitale/bql-c-500-vinmes-a-cau-giay-re-nhat-lh-0968868588-pr27712966" title="BQL cho thuê 500 căn hộ Vinhomes D&#39;Capitale Trần Duy Hưng Trung Hoà Cầu Giấy rẻ nhất, LH 0968868***" class="vipZero product-link" style="overflow: visible;">
                            BQL CHO THUÊ 500 CĂN HỘ VINHOMES D'CAPITALE TRẦN DUY HƯNG TRUNG HOÀ CẦU GIẤY RẺ NHẤT, LH <span class="hidden-mobile m-on-title" raw="0968868588">0968868***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">7 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">38 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Cầu Giấy, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        BQL cho thuê 500 căn hộ làm văn phòng, căn hộ để ở tại dự án Vinhomes D'Capitale, 119 Trần Duy Hưng, Cầu Giấy (đối diện Big C Trần Duy Hưng). Số lượng hơn lớn căn hộ chính chủ và chủ đầu tư.Rất nhiều
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                5 ngày trước
                                <span class="tooltip-time">08/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27712966" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;BQL cho thu&amp;#234; 500 căn hộ Vinhomes D&amp;#39;Capitale Trần Duy Hưng Trung Ho&amp;#224; Cầu Giấy rẻ nhất, LH 0968868588&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108174246-0505_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/08/20201108174246-0505_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="BQL cho thuê 500 căn hộ Vinhomes D&#39;Capitale Trần Duy Hưng Trung Hoà Cầu Giấy rẻ nhất, LH 0968868588" data-price="7 triệu/tháng" data-area="38 m²" data-pricesort="7000000" data-areasort="38" data-room="0" data-toilets="0" data-address="Cầu Giấy, Hà Nội" data-description="BQL cho thuê 500 căn hộ làm văn phòng, căn hộ để ở tại dự án Vinhomes D&#39;Capitale, 119 Trần Duy Hưng, Cầu Giấy (đối diện Big C Trần Duy Hưng). Số lượng hơn lớn căn hộ chính chủ và chủ đầu tư.Rất nhiều" data-duration="5 ngày trước" data-updatedtime="08/11/2020" data-datesort="11/08/2020 17:43:47" data-contactname="Nguyễn Minh Tuấn" data-contactmobile="0968868588" data-url="/cho-thue-can-ho-chung-cu-duong-tran-duy-hung-phuong-trung-hoa-4-prj-vinhomes-dcapitale/bql-c-500-vinmes-a-cau-giay-re-nhat-lh-0968868588-pr27712966" data-totalmedia="13" data-createbyuser="1195808"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="200895">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/c-nhieu-ha-do-1pn-2pn-3pn-gia-tot-noi-that-cao-cap-mien-3-nam-pql-tline0901116468-pr27243916" title="Cho thuê nhiều CH Hà Đô 1PN, 2PN, 3PN, giá tốt nội thất cao cấp, miễn 3 năm PQL, hotline 0901116468" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhiều CH Hà Đô 1PN, 2PN, 3PN, giá tốt nội thất cao cấp, miễn 3 năm PQL, hotline 0901116468" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111145338-44bc_wm.jpg" is-lazy-image="true" lazy-id="21">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">12</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/c-nhieu-ha-do-1pn-2pn-3pn-gia-tot-noi-that-cao-cap-mien-3-nam-pql-tline0901116468-pr27243916" title="Cho thuê nhiều CH Hà Đô 1PN, 2PN, 3PN, giá tốt nội thất cao cấp, miễn 3 năm PQL, hotline 0901116***" class="vipZero product-link" style="overflow: visible;">
                            CHO THUÊ NHIỀU CH HÀ ĐÔ 1PN, 2PN, 3PN, GIÁ TỐT NỘI THẤT CAO CẤP, MIỄN 3 NĂM PQL, HOTLINE <span class="hidden-mobile m-on-title" raw="0901116468">0901116***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">15 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">60 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 10, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Cho thuê nhiều căn hộ 1 - 2 - 3 phòng ngủ Hado Centrosa Garden.Hotline: <span class="hidden-mobile des" raw="090.111.6468">090.111.6***</span> hỗ trợ xem nhà.* Giá thuê căn hộ 1 - 2 - 3 phòng ngủ.- Diện tích 1PN (60m2).+ Giá thuê: 14.5 triệu/tháng; nội thất
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                5 ngày trước
                                <span class="tooltip-time">08/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27243916" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nhiều CH H&amp;#224; Đ&amp;#244; 1PN, 2PN, 3PN, gi&amp;#225; tốt nội thất cao cấp, miễn 3 năm PQL, hotline 0901116468&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111145338-44bc_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111145338-44bc_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhiều CH Hà Đô 1PN, 2PN, 3PN, giá tốt nội thất cao cấp, miễn 3 năm PQL, hotline 0901116468" data-price="15 triệu/tháng" data-area="60 m²" data-pricesort="15000000" data-areasort="60" data-room="1" data-toilets="1" data-address="Quận 10, Hồ Chí Minh" data-description="Cho thuê nhiều căn hộ 1 - 2 - 3 phòng ngủ Hado Centrosa Garden.Hotline: 090.111.6468 hỗ trợ xem nhà.* Giá thuê căn hộ 1 - 2 - 3 phòng ngủ.- Diện tích 1PN (60m2).+ Giá thuê: 14.5 triệu/tháng; nội thất" data-duration="5 ngày trước" data-updatedtime="08/11/2020" data-datesort="11/08/2020 10:30:59" data-contactname="Hotline" data-contactmobile="0901116468" data-url="/cho-thue-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/c-nhieu-ha-do-1pn-2pn-3pn-gia-tot-noi-that-cao-cap-mien-3-nam-pql-tline0901116468-pr27243916" data-totalmedia="12" data-createbyuser="200895"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1461362">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-tran-duy-hung-phuong-trung-hoa-4-prj-vinhomes-dcapitale/xem-nha-24-7-e-huong-0976-282-053-7tr-thang-khong-do-full-nhieu-re-nhat-thi-truong-pr27708103" title="BQL cho thuê CC D&#39;capitale Trần Duy Hưng 1 - 3PN, giá từ 7tr cam kết rẻ nhất thị trường 0976282053" onclick="">
                        <img class="product-avatar-img" alt="BQL cho thuê CC D&#39;capitale Trần Duy Hưng 1 - 3PN, giá từ 7tr cam kết rẻ nhất thị trường 0976282053" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113104008-d83a_wm.jpg" is-lazy-image="true" lazy-id="22">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">17</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-tran-duy-hung-phuong-trung-hoa-4-prj-vinhomes-dcapitale/xem-nha-24-7-e-huong-0976-282-053-7tr-thang-khong-do-full-nhieu-re-nhat-thi-truong-pr27708103" title="BQL cho thuê CC D&#39;capitale Trần Duy Hưng 1 - 3PN, giá từ 7tr cam kết rẻ nhất thị trường 0976282***" class="vipZero product-link" style="overflow: visible;">
                            BQL CHO THUÊ CC D'CAPITALE TRẦN DUY HƯNG 1 - 3PN, GIÁ TỪ 7TR CAM KẾT RẺ NHẤT THỊ TRƯỜNG <span class="hidden-mobile m-on-title" raw="0976282053">0976282***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">9 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">51 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Cầu Giấy, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Ban quản lý chung cư cho thuê danh sách những căn rẻ nhất thích hợp để ở hoặc làm văn phòng Call: Hương <span class="hidden-mobile des" raw="0976.282.053">0976.282.***</span>.
 - Cam kết rẻ nhất thị trường.
 - Xem nhà bất kể lúc nào 24/7 báo trước 10p.
 - H
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                6 ngày trước
                                <span class="tooltip-time">07/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27708103" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;BQL cho thu&amp;#234; CC D&amp;#39;capitale Trần Duy Hưng 1 - 3PN, gi&amp;#225; từ 7tr cam kết rẻ nhất thị trường 0976282053&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113104008-d83a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/13/20201113104008-d83a_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="BQL cho thuê CC D&#39;capitale Trần Duy Hưng 1 - 3PN, giá từ 7tr cam kết rẻ nhất thị trường 0976282053" data-price="9 triệu/tháng" data-area="51 m²" data-pricesort="9000000" data-areasort="51" data-room="0" data-toilets="0" data-address="Cầu Giấy, Hà Nội" data-description="Ban quản lý chung cư cho thuê danh sách những căn rẻ nhất thích hợp để ở hoặc làm văn phòng Call: Hương 0976.282.053.
 - Cam kết rẻ nhất thị trường.
 - Xem nhà bất kể lúc nào 24/7 báo trước 10p.
 - H" data-duration="6 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 20:43:03" data-contactname="" data-contactmobile="0976282053" data-url="/cho-thue-can-ho-chung-cu-duong-tran-duy-hung-phuong-trung-hoa-4-prj-vinhomes-dcapitale/xem-nha-24-7-e-huong-0976-282-053-7tr-thang-khong-do-full-nhieu-re-nhat-thi-truong-pr27708103" data-totalmedia="17" data-createbyuser="1461362"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="1417859">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-tran-duy-hung-phuong-trung-hoa-4-prj-vinhomes-dcapitale/-0901923966-bql-du-an-doc-quyen-cho-200-tu-1-3pn-re-nhat-thi-truong-pr27702969" title="(0901923966) BQL dự án D&#39;capitale độc quyền cho thuê 200 từ 1 - 3PN rẻ nhất thị trường" onclick="">
                        <img class="product-avatar-img" alt="(0901923966) BQL dự án D&#39;capitale độc quyền cho thuê 200 từ 1 - 3PN rẻ nhất thị trường" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/07/20201107112009-0687_wm.jpg" is-lazy-image="true" lazy-id="23"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/07/20201107112008-2e98_wm.jpg" is-lazy-image="true" lazy-id="24"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/07/20201107112009-435a_wm.jpg" is-lazy-image="true" lazy-id="25">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-tran-duy-hung-phuong-trung-hoa-4-prj-vinhomes-dcapitale/-0901923966-bql-du-an-doc-quyen-cho-200-tu-1-3pn-re-nhat-thi-truong-pr27702969" title="(0901923***) BQL dự án D&#39;capitale độc quyền cho thuê 200 từ 1 - 3PN rẻ nhất thị trường" class="vipZero product-link" style="overflow: visible;">
                            (<span class="hidden-mobile m-on-title" raw="0901923966">0901923***</span>) BQL DỰ ÁN D'CAPITALE ĐỘC QUYỀN CHO THUÊ 200 TỪ 1 - 3PN RẺ NHẤT THỊ TRƯỜNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">9 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">35 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">2 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">2 WC</span>
                        <span class="location">Cầu Giấy, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Độc quyền cho thuê toàn bộ quỹ căn giá rẻ nhất tại D'Capitale. Ban quản lý dự án D'Capitale - 119 Trần Duy Hưng, Cầu Giấy, Hà Nội. Hotline: <span class="hidden-mobile des" raw="0901923966">0901923***</span> - <span class="hidden-mobile des" raw="0948541993">0948541***</span> - miễn phí 100% cho khách xem nhà và thuê nhà. Chúng tôi có tất cả các căn hộ cần cho thuê ở các tòa: Tòa C1, C3, C6, C7 căn hộ để ở. Tòa C2, C5 căn hộ để ở và đăng ký văn phòng công ty. Các loại diện tích từ 35m2 đế
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                6 ngày trước
                                <span class="tooltip-time">07/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Đinh Hải Nam">
                                <span class="contact-name">Đinh Hải Nam</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0948541993" raw="0948541993">0948 541 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27702969" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;(0901923966) BQL dự &amp;#225;n D&amp;#39;capitale độc quyền cho thu&amp;#234; 200 từ 1 - 3PN rẻ nhất thị trường&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/07/20201107112009-0687_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/07/20201107112008-2e98_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/07/20201107112009-435a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/07/20201107112009-0687_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="(0901923966) BQL dự án D&#39;capitale độc quyền cho thuê 200 từ 1 - 3PN rẻ nhất thị trường" data-price="9 triệu/tháng" data-area="35 m²" data-pricesort="9000000" data-areasort="35" data-room="2" data-toilets="2" data-address="Cầu Giấy, Hà Nội" data-description="Độc quyền cho thuê toàn bộ quỹ căn giá rẻ nhất tại D&#39;Capitale. Ban quản lý dự án D&#39;Capitale - 119 Trần Duy Hưng, Cầu Giấy, Hà Nội. Hotline: 0901923966 - 0948541993 - miễn phí 100% cho khách xem nhà và thuê nhà. Chúng tôi có tất cả các căn hộ cần cho thuê ở các tòa: Tòa C1, C3, C6, C7 căn hộ để ở. Tòa C2, C5 căn hộ để ở và đăng ký văn phòng công ty. Các loại diện tích từ 35m2 đế" data-duration="6 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 11:21:14" data-contactname="Đinh Hải Nam" data-contactmobile="0948541993" data-url="/cho-thue-can-ho-chung-cu-duong-tran-duy-hung-phuong-trung-hoa-4-prj-vinhomes-dcapitale/-0901923966-bql-du-an-doc-quyen-cho-200-tu-1-3pn-re-nhat-thi-truong-pr27702969" data-totalmedia="6" data-createbyuser="1417859"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1373316">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/chuyen-c-ha-do-gia-tot-mua-dich-1-2-3-4pn-lh-viet-0931342866-pr27012359" title="Chuyên cho thuê căn hộ Hà Đô 1 - 2 - 3 - 4PN giá tốt tháng 11/2020. LH Việt: 0931342866" onclick="">
                        <img class="product-avatar-img" alt="Chuyên cho thuê căn hộ Hà Đô 1 - 2 - 3 - 4PN giá tốt tháng 11/2020. LH Việt: 0931342866" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/12/20200912151501-da1a_wm.jpg" is-lazy-image="true" lazy-id="26">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">7</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/chuyen-c-ha-do-gia-tot-mua-dich-1-2-3-4pn-lh-viet-0931342866-pr27012359" title="Chuyên cho thuê căn hộ Hà Đô 1 - 2 - 3 - 4PN giá tốt tháng 11/2020. LH Việt: 0931342***" class="vipZero product-link" style="overflow: visible;">
                            CHUYÊN CHO THUÊ CĂN HỘ HÀ ĐÔ 1 - 2 - 3 - 4PN GIÁ TỐT THÁNG 11/2020. LH VIỆT: <span class="hidden-mobile m-on-title" raw="0931342866">0931342***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">14 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">86 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 10, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        * Rất hân hạnh được phục vụ quý khách hàng. Tìm được cho quý khách căn hộ đẹp ưng. Cần biết thêm thông tin LH Mr. Việt (Call - Viber - Zalo): <span class="hidden-mobile des" raw="0931342866">0931342***</span>. * Nội thất cơ bản đến full nội thất chỉ cần x
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                6 ngày trước
                                <span class="tooltip-time">07/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27012359" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chuy&amp;#234;n cho thu&amp;#234; căn hộ H&amp;#224; Đ&amp;#244; 1 - 2 - 3 - 4PN gi&amp;#225; tốt th&amp;#225;ng 11/2020. LH Việt: 0931342866&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/12/20200912151501-da1a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/12/20200912151501-da1a_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chuyên cho thuê căn hộ Hà Đô 1 - 2 - 3 - 4PN giá tốt tháng 11/2020. LH Việt: 0931342866" data-price="14 triệu/tháng" data-area="86 m²" data-pricesort="14000000" data-areasort="86" data-room="3" data-toilets="2" data-address="Quận 10, Hồ Chí Minh" data-description="* Rất hân hạnh được phục vụ quý khách hàng. Tìm được cho quý khách căn hộ đẹp ưng. Cần biết thêm thông tin LH Mr. Việt (Call - Viber - Zalo): 0931342866. * Nội thất cơ bản đến full nội thất chỉ cần x" data-duration="6 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 11:12:27" data-contactname="Nguyễn Danh Việt" data-contactmobile="0931342866" data-url="/cho-thue-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/chuyen-c-ha-do-gia-tot-mua-dich-1-2-3-4pn-lh-viet-0931342866-pr27012359" data-totalmedia="7" data-createbyuser="1373316"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="1261394">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-nguyen-huu-canh-phuong-22-prj-vinhomes-central-park/chuyen-c-vinmes-1-2-3-4-pn-va-landmark-81-gia-tot-nhat-lh-0931288-pr27210523" title="Chuyên cho thuê căn hộ Vinhomes Central Park 1,2,3,4 PN và Landmark 81 giá tốt nhất. LH 0931288333" onclick="">
                        <img class="product-avatar-img" alt="Chuyên cho thuê căn hộ Vinhomes Central Park 1,2,3,4 PN và Landmark 81 giá tốt nhất. LH 0931288333" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/29/20200929112331-64bd_wm.jpg" is-lazy-image="true" lazy-id="27"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/29/20200929112331-f4c9_wm.jpg" is-lazy-image="true" lazy-id="28"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/29/20200929112331-2dd6_wm.jpg" is-lazy-image="true" lazy-id="29">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-duong-nguyen-huu-canh-phuong-22-prj-vinhomes-central-park/chuyen-c-vinmes-1-2-3-4-pn-va-landmark-81-gia-tot-nhat-lh-0931288-pr27210523" title="Chuyên cho thuê căn hộ Vinhomes Central Park 1,2,3,4 PN và Landmark 81 giá tốt nhất. LH 0931288***" class="vipZero product-link" style="overflow: visible;">
                            CHUYÊN CHO THUÊ CĂN HỘ VINHOMES CENTRAL PARK 1,2,3,4 PN VÀ LANDMARK 81 GIÁ TỐT NHẤT. LH <span class="hidden-mobile m-on-title" raw="0931288333">0931288***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">12 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">53.3 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">1 PN</span>
                        <span class="location">Bình Thạnh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Chuyên cho thuê căn hộ Vinhomes Central Park 1,2,3,4 PN và Landmark 81 giá tốt nhất. LH: <span class="hidden-mobile des" raw="0931288333">0931288***</span>. Thông tin mô tả: Để tư vấn trực tiếp và biết thêm thông tin LH: Trí Dũng <span class="hidden-mobile des" raw="0931288333">0931288***</span> (chuyên cho thuê căn hộ Vinhomes Central Park). Quản lý 100% căn hộ Vinhomes Central Park đang rao bán.* Căn 1 phòng ngủ. Diện tích 53.3m2 - block C2 - NT cơ bản 12 triệu/tháng, full NT 12.5tr. D
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                6 ngày trước
                                <span class="tooltip-time">07/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Căn Hộ Giá Rẻ">
                                <span class="contact-name">Căn Hộ Giá Rẻ</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0931288333" raw="0931288333">0931 288 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27210523" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chuy&amp;#234;n cho thu&amp;#234; căn hộ Vinhomes Central Park 1,2,3,4 PN v&amp;#224; Landmark 81 gi&amp;#225; tốt nhất. LH 0931288333&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/29/20200929112331-64bd_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/29/20200929112331-f4c9_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/29/20200929112331-2dd6_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/09/29/20200929112331-64bd_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chuyên cho thuê căn hộ Vinhomes Central Park 1,2,3,4 PN và Landmark 81 giá tốt nhất. LH 0931288333" data-price="12 triệu/tháng" data-area="53.3 m²" data-pricesort="12000000" data-areasort="53.3" data-room="1" data-toilets="0" data-address="Bình Thạnh, Hồ Chí Minh" data-description="Chuyên cho thuê căn hộ Vinhomes Central Park 1,2,3,4 PN và Landmark 81 giá tốt nhất. LH: 0931288333. Thông tin mô tả: Để tư vấn trực tiếp và biết thêm thông tin LH: Trí Dũng 0931288333 (chuyên cho thuê căn hộ Vinhomes Central Park). Quản lý 100% căn hộ Vinhomes Central Park đang rao bán.* Căn 1 phòng ngủ. Diện tích 53.3m2 - block C2 - NT cơ bản 12 triệu/tháng, full NT 12.5tr. D" data-duration="6 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 10:06:55" data-contactname="Căn Hộ Giá Rẻ" data-contactmobile="0931288333" data-url="/cho-thue-can-ho-chung-cu-duong-nguyen-huu-canh-phuong-22-prj-vinhomes-central-park/chuyen-c-vinmes-1-2-3-4-pn-va-landmark-81-gia-tot-nhat-lh-0931288-pr27210523" data-totalmedia="8" data-createbyuser="1261394"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-center">
            <div class="pagination">
<a pid="1" class="actived" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu">1</a>
<a pid="2" class="" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/p2">2</a>
<a pid="3" class="" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/p3">3</a>
<a pid="4" class="" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/p4">4</a>
<a pid="5" class="" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/p5">5</a>
<a pid="1182" href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/p1182"><img src="./assets/image/ic_double_caret_right.png"></a>
</div>

        </div>
    </div>






    <div class="divide">&nbsp;</div>
<div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Cho thuê chung cư giá rẻ Hà Nội" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-chung-cu-gia-re-ha-noi">Cho thuê chung cư giá rẻ Hà Nội</a></li>    <li><a title="Cho thuê căn hộ giá rẻ Quận 8" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-can-ho-gia-re-quan-8">Cho thuê căn hộ giá rẻ Quận 8</a></li>    <li><a title="Cho thuê căn hộ giá rẻ Quận 3" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-can-ho-gia-re-quan-3">Cho thuê căn hộ giá rẻ Quận 3</a></li>    <li><a title="Cho thuê chung cư giá rẻ Quận 7" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-chung-cu-gia-re-quan-7">Cho thuê chung cư giá rẻ Quận 7</a></li>    <li><a title="Cho thuê căn hộ giá rẻ Quận 4" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-can-ho-gia-re-quan-4">Cho thuê căn hộ giá rẻ Quận 4</a></li>    <li><a title="Cho thuê chung cư MINI GIÁ RẺ" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-chung-cu-mini-gia-re">Cho thuê chung cư MINI GIÁ RẺ</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
    <div class="product-seo-text">
        <div>Phân khúc thị trường cho thuê căn hộ chung cư cho thuê ngày càng trở nên sôi động, đặc biệt ở thị trường Tp.HCM và Hà Nội. Hiện nay, một bộ phận không nhỏ những gia đình trẻ, người trẻ tuổi và thậm chí những sinh viên có điều kiện đang có xu hướng tìm thuê căn hộ chung cư <strong>Việt Nam</strong> giá rẻ với không gian sống chất lượng hơn. Hơn nữa, đối tượng khách thuê ngày càng có sự phân hóa rõ nét. Ở phân khúc cao cấp, người thuê căn hộ chung cư chủ yếu là người nước ngoài, quản lý các doanh nghiệp…phân khúc trung cấp lại chủ yếu phục vụ đối tượng nhân viên văn phòng, hộ gia đình, còn phân khúc căn hộ giá rẻ và chung cư mini hướng đến những gia đình có con nhỏ chưa đủ điều kiện mua nhà, người trẻ, sinh viên...</div>
                                <div>Bên cạnh đó, mặc dù số lượng căn hộ tung ra thị trường ngày càng nhiều nhưng sức hút của các căn hộ mini cho thuê <strong>Việt Nam</strong> vẫn không hề giảm. Diện tích các căn hộ chung cư cho thuê giá rẻ dao động phổ biến từ 30-90m2, tương ứng với giá thuê từ 3-7 triệu đồng/tháng, cung cấp cho người thuê nhà ở chất lượng, kèm theo tiện ích và dịch vụ đi kèm rất thuận tiện.  </div>
                                <div>Nếu bạn đang có nhu cầu tìm kiếm thông tin cho thuê căn hộ chung cư <strong>Việt Nam</strong> giá 4 triệu, 5 triệu - 10 triệu hoặc các căn hộ cao cấp hơn... một cách cập nhật, chính xác và đầy đủ nhất thì batdongsan.com.vn là lựa chọn phù hợp. Batdongsan.com.vn là kênh thông tin chuyên nghiệp và uy tín trong việc cung cấp các thông tin cho thuê căn hộ chung cư tại <strong>Việt Nam</strong>. Những thông tin cập nhật và chi tiết trên batdongsan.com.vn sẽ giúp kết nối người cho thuê và người có nhu cầu thuê căn hộ chung cư để làm nơi an cư lý tưởng.</div>
                                <div>Cùng <strong>Bất Động Sản Cho Thuê</strong> tìm hiểu một số lưu ý quan trọng khi tìm thuê căn hộ chung cư Việt Nam:</div>
                                <ul>
                                <li> - Xác định nhu cầu để lựa chọn phân khúc phù hợp: điều quan trọng đầu tiên khi <strong>tìm thuê căn hộ chung cư</strong> là bạn cần xác định được nhu cầu về nhà ở của mình, qua đó sẽ giúp bạn lựa chọn nên hướng đến phân khúc căn hộ cao cấp, tầm trung hay chung cư bình dân hay thuê chung cư mini giá rẻ.</li>
                                <li>- Tìm hiểu chi phí thuê và các khoản chi phí phát sinh khác: Trong quá trình lựa chọn căn hộ để thuê, ngoài việc cân nhắc mức giá cho thuê thì bạn nên tìm hiểu về các khoản chi phí phát sinh như điện, nước, các phí dịch vụ vệ sinh, gửi xe…để cân đối và đưa ra lựa chọn phù hợp.</li>
                                <li>- Kiểm tra kỹ hợp đồng cho thuê: xác minh lại các thông tin về tiền đặt cọc, tiền thuê và các khoản chi phí phát sinh khác, về thời hạn kết thúc hợp đồng và những quyền hạn sử dụng tiện ích trong căn hộ chung cư cho thuê, có chữ ký xác nhận 2 bên và của người làm chứng.</li>
                                </ul>
                                <div>Liên hệ với <strong>Batdongsan.com.vn</strong> để được tư vấn, giải đáp các thắc mắc hoặc các thông tin về dự án căn hộ chung cư tại Việt Nam cũng như thông tin về căn hộ chung cư ở những khu vực khác.</div>
    </div>
<form id="productListBinnova" method="post">
    <input id="hashAlias" type="hidden" value="bcd6c88a8206ac9ab13446fe3fcd25618cd52ecacc9486154f9958fb3711a4e4">
</form>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
            var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                model: {
                    typeOfProduct: 49,
                    categoryId: 326,
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
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/-1/2/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam giá 1 - 3 triệu">1 - 3 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/-1/3/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam giá 3 - 5 triệu">3 - 5 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/-1/4/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam giá 5 - 10 triệu">5 - 10 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/-1/5/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam giá 10 - 40 triệu">10 - 40 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/-1/6/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam giá 40 - 70 triệu">40 - 70 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/-1/7/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam giá 70 - 100 triệu">70 - 100 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/-1/8/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam giá &gt; 100 triệu">&gt; 100 triệu</a></li>
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
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/1/-1/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/2/-1/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/3/-1/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/4/-1/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/5/-1/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/6/-1/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/7/-1/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/8/-1/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/9/-1/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu/10/-1/-1/-1" title="Cho thuê căn hộ chung cư Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
        <h2 class="box-title">Cho thuê căn hộ chung cư</h2>

        <div class="box-content link-hover-blue">
            <ul>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-tp-hcm" title="Cho thuê căn hộ chung cư tại Hồ Chí Minh">
                                Hồ Chí Minh (14452)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-ha-noi" title="Cho thuê căn hộ chung cư tại Hà Nội">
                                Hà Nội (8092)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-binh-duong" title="Cho thuê căn hộ chung cư tại Bình Dương">
                                Bình Dương (322)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-da-nang" title="Cho thuê căn hộ chung cư tại Đà Nẵng">
                                Đà Nẵng (227)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-khanh-hoa" title="Cho thuê căn hộ chung cư tại Khánh Hòa">
                                Khánh Hòa (117)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-ba-ria-vung-tau" title="Cho thuê căn hộ chung cư tại Bà Rịa Vũng Tàu">
                                Bà Rịa Vũng Tàu (67)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-kien-giang" title="Cho thuê căn hộ chung cư tại Kiên Giang">
                                Kiên Giang (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-lam-dong" title="Cho thuê căn hộ chung cư tại Lâm Đồng">
                                Lâm Đồng (3)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-hung-yen" title="Cho thuê căn hộ chung cư tại Hưng Yên">
                                Hưng Yên (68)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-thanh-hoa" title="Cho thuê căn hộ chung cư tại Thanh Hóa">
                                Thanh Hóa (6)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-hai-phong" title="Cho thuê căn hộ chung cư tại Hải Phòng">
                                Hải Phòng (98)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-thai-nguyen" title="Cho thuê căn hộ chung cư tại Thái Nguyên">
                                Thái Nguyên (4)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-binh-dinh" title="Cho thuê căn hộ chung cư tại Bình Định">
                                Bình Định (8)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-can-tho" title="Cho thuê căn hộ chung cư tại Cần Thơ">
                                Cần Thơ (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-binh-thuan" title="Cho thuê căn hộ chung cư tại Bình Thuận  ">
                                Bình Thuận   (5)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-vinh-phuc" title="Cho thuê căn hộ chung cư tại Vĩnh Phúc">
                                Vĩnh Phúc (3)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-bac-ninh" title="Cho thuê căn hộ chung cư tại Bắc Ninh">
                                Bắc Ninh (8)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quang-ninh" title="Cho thuê căn hộ chung cư tại Quảng Ninh">
                                Quảng Ninh (13)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-long-an" title="Cho thuê căn hộ chung cư tại Long An">
                                Long An (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-dong-nai" title="Cho thuê căn hộ chung cư tại Đồng Nai">
                                Đồng Nai (26)
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
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-1" title="Cho thuê căn hộ Quận 1">
                                    Cho thuê căn hộ Quận 1
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-2" title="Cho thuê căn hộ Quận 2">
                                    Cho thuê căn hộ Quận 2
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-3" title="Cho thuê căn hộ Quận 3">
                                    Cho thuê căn hộ Quận 3
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-4" title="Cho thuê căn hộ Quận 4">
                                    Cho thuê căn hộ Quận 4
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-5" title="Cho thuê căn hộ Quận 5">
                                    Cho thuê căn hộ Quận 5
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-6" title="Cho thuê căn hộ Quận 6">
                                    Cho thuê căn hộ Quận 6
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-7" title="Cho thuê căn hộ Quận 7">
                                    Cho thuê căn hộ Quận 7
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-8" title="Cho thuê căn hộ Quận 8">
                                    Cho thuê căn hộ Quận 8
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-9" title="Cho thuê căn hộ Quận 9">
                                    Cho thuê căn hộ Quận 9
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-10" title="Cho thuê căn hộ Quận 10">
                                    Cho thuê căn hộ Quận 10
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-11" title="Cho thuê căn hộ Quận 11">
                                    Cho thuê căn hộ Quận 11
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-12" title="Cho thuê căn hộ Quận 12">
                                    Cho thuê căn hộ Quận 12
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-go-vap" title="Cho thuê căn hộ Gò Vấp">
                                    Cho thuê căn hộ Gò Vấp
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-thu-duc" title="Cho thuê căn hộ Thủ Đức">
                                    Cho thuê căn hộ Thủ Đức
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-binh-thanh" title="Cho thuê căn hộ Bình Thạnh">
                                    Cho thuê căn hộ Bình Thạnh
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-binh-chanh" title="Cho thuê căn hộ Bình Chánh">
                                    Cho thuê căn hộ Bình Chánh
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-nha-be" title="Cho thuê căn hộ Nhà Bè">
                                    Cho thuê căn hộ Nhà Bè
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-phu-nhuan" title="Cho thuê căn hộ Phú Nhuận">
                                    Cho thuê căn hộ Phú Nhuận
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-tan-binh" title="Cho thuê căn hộ Tân Bình">
                                    Cho thuê căn hộ Tân Bình
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-tan-phu" title="Cho thuê căn hộ Tân Phú">
                                    Cho thuê căn hộ Tân Phú
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
            