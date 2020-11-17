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
                <div class="custom-value hasvalue">Nhà riêng</div>
            </div>
            <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="52">
            <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                    <li vl="0"><span class="current">Tất cả nhà đất</span></li>
                                    <li vl="326"><span>Căn hộ chung cư</span></li>
                                    <li vl="52"><span class="active">Nhà riêng</span></li>
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
                        <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-nha-rieng#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-nha-rieng#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                        <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-nha-rieng#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-nha-rieng#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                categoryId: 52,
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
    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng" level="1" title="Cho thuê nhà riêng tại Việt Nam">Cho thuê</a><span>/</span><a href="https://batdongsan.com.vn/cho-thue-nha-rieng" level="2" title="Cho thuê nhà riêng tại Việt Nam">Nhà riêng trên toàn quốc</a>
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
        {"@context":"https://schema.org/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Trang chủ","item":"https://batdongsan.com.vn"},{"@type":"ListItem","position":2,"name":"Cho thuê","item":"https://batdongsan.com.vn/cho-thue-nha-rieng"},{"@type":"ListItem","position":3,"name":"Nhà riêng trên toàn quốc","item":"https://batdongsan.com.vn/cho-thue-nha-rieng"}]}
    </script>

<div class="product-list-header pad-top-8">
    <h1>Cho thuê nhà riêng tại Việt Nam</h1>
        <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">5,956</span> bất động sản.</div>
    

</div>
    <div class="product-search-most mar-top-8 mar-bot-8">
        <div class="box-title">Các khu vực, địa điểm nổi bật</div>
        <ul class="clearfix link-hover-blue">
                <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng-ha-noi">Cho thuê nhà Hà Nội</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng-tp-hcm">Cho thuê nhà Hồ Chí Minh</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng-da-nang">Thuê nhà Đà Nẵng</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng-hai-phong">Thuê nhà Hải Phòng</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu">Thuê nhà chung cư</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng-go-vap">Thuê nhà nguyên căn Gò Vấp</a></li>
        </ul>
    </div>

    <div class="product-nav-bar pad-top-8 clearfix">
        <ul class="ul-tab fl mar-right-16">
            <li class="list-display actived">Danh sách</li>
            <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
            <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-cho-thue-nha-rieng">Bản đồ</a></li>
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
            <div class="vip0 product-item clearfix" uid="1500303">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-nguyen-hoang-ton-phuong-xuan-la/cho-tai-tay-ho-dt-150m2-mt-6m-lh-0376561855-pr27617698" title="Cho thuê nhà riêng tại Nguyễn Hoàng Tôn, Xuân La Tây Hồ. DT 150m2, MT 6m. LH 0376561855" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà riêng tại Nguyễn Hoàng Tôn, Xuân La Tây Hồ. DT 150m2, MT 6m. LH 0376561855" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201031152534-92ea_wm.jpg" is-lazy-image="true" lazy-id="0">
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
            <div class="vip1 product-item clearfix" uid="177702">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-lien-phuong-phuong-phu-huu-2-prj-lucasta-villa/cho-biet-thu-resort-quan-9-pr27325136" title="Cho thuê biệt thự Lucasta - Resort Quận 9" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê biệt thự Lucasta - Resort Quận 9" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201007153546-69ce_wm.jpeg" is-lazy-image="true" lazy-id="1">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">11</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-lien-phuong-phuong-phu-huu-2-prj-lucasta-villa/cho-biet-thu-resort-quan-9-pr27325136" title="Cho thuê biệt thự Lucasta - Resort Quận 9" class="vipOne product-link">
                            CHO THUÊ BIỆT THỰ LUCASTA - RESORT QUẬN 9
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">30 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">270 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 9, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Lucasta là khu biệt thự cao cấp, tuyệt đẹp như resort 5* tại đường Liên Phường, Q9, gần cao tốc Long Thành, KCN cao, di chuyển về Q1 khoảng 15', đến KCN cao 5. Lucasta được quản lý bởi CBRE, bảo vệ a
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
                                <i class="iconSave" data-productid="27325136" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; biệt thự Lucasta - Resort Quận 9&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/07/20201007153546-69ce_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/07/20201007153546-69ce_wm.jpeg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê biệt thự Lucasta - Resort Quận 9" data-price="30 triệu/tháng" data-area="270 m²" data-pricesort="30000000" data-areasort="270" data-room="5" data-toilets="4" data-address="Quận 9, Hồ Chí Minh" data-description="Lucasta là khu biệt thự cao cấp, tuyệt đẹp như resort 5* tại đường Liên Phường, Q9, gần cao tốc Long Thành, KCN cao, di chuyển về Q1 khoảng 15&#39;, đến KCN cao 5. Lucasta được quản lý bởi CBRE, bảo vệ a" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 17:35:12" data-contactname="Lê Viết Hùng" data-contactmobile="0902940656" data-url="/cho-thue-nha-rieng-duong-lien-phuong-phuong-phu-huu-2-prj-lucasta-villa/cho-biet-thu-resort-quan-9-pr27325136" data-totalmedia="11" data-createbyuser="177702"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1400674">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-su-van-hanh-phuong-12-5/cho-moi-xay-hxh-q10-pr27763979" title="Cho thuê nhà mới xây HXH đường Sư Vạn Hạnh, Q10" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà mới xây HXH đường Sư Vạn Hạnh, Q10" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112101442-eff1_wm.jpg" is-lazy-image="true" lazy-id="2">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">7</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-su-van-hanh-phuong-12-5/cho-moi-xay-hxh-q10-pr27763979" title="Cho thuê nhà mới xây HXH đường Sư Vạn Hạnh, Q10" class="vipOne product-link">
                            CHO THUÊ NHÀ MỚI XÂY HXH ĐƯỜNG SƯ VẠN HẠNH, Q10
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">25 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">82.8 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 10, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        * Cho thuê nhà mới xây q10 (gần Vạn Hạnh Mall). * Nhà giá rẻ nhất khu vực Quận 10. - Địa chỉ: 585/17G đường Sư Vạn Hạnh, phường 12, Quận 10. - Diện tịch: Ngang 4,6 x 18 mét. - Kết cấu: 1 trệt, 3 lầu,
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
                                <i class="iconSave" data-productid="27763979" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; mới x&amp;#226;y HXH đường Sư Vạn Hạnh, Q10&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112101442-eff1_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112101442-eff1_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà mới xây HXH đường Sư Vạn Hạnh, Q10" data-price="25 triệu/tháng" data-area="82.8 m²" data-pricesort="25000000" data-areasort="82.8" data-room="0" data-toilets="6" data-address="Quận 10, Hồ Chí Minh" data-description="* Cho thuê nhà mới xây q10 (gần Vạn Hạnh Mall). * Nhà giá rẻ nhất khu vực Quận 10. - Địa chỉ: 585/17G đường Sư Vạn Hạnh, phường 12, Quận 10. - Diện tịch: Ngang 4,6 x 18 mét. - Kết cấu: 1 trệt, 3 lầu," data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 11:42:59" data-contactname="Le Ngoc" data-contactmobile="0903752978" data-url="/cho-thue-nha-rieng-duong-su-van-hanh-phuong-12-5/cho-moi-xay-hxh-q10-pr27763979" data-totalmedia="7" data-createbyuser="1400674"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="915309">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-lac-long-quan-phuong-buoi/can-cho-quan-pr27763788" title="Chính chủ cần cho thuê nhà 5 tầng 2 mặt ngõ diện tích 50m2 ngõ 172 Lạc Long Quân" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần cho thuê nhà 5 tầng 2 mặt ngõ diện tích 50m2 ngõ 172 Lạc Long Quân" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112101602-9992_wm.jpg" is-lazy-image="true" lazy-id="3">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-lac-long-quan-phuong-buoi/can-cho-quan-pr27763788" title="Chính chủ cần cho thuê nhà 5 tầng 2 mặt ngõ diện tích 50m2 ngõ 172 Lạc Long Quân" class="vipOne product-link">
                            CHÍNH CHỦ CẦN CHO THUÊ NHÀ 5 TẦNG 2 MẶT NGÕ DIỆN TÍCH 50M2 NGÕ 172 LẠC LONG QUÂN
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">18 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">50 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tây Hồ, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Gia đình có nhu cầu cho thuê nhà 5 tầng số 35 ngõ 172 Lạc Long Quân, mặt tiền 4,5m. Tổng diện tích sử dụng 50m2 bao gồm 1 bếp, 1 phòng khách 5 phòng ngủ, 1 phòng thờ và 1 tum. Ô tô vào tận nhà, 2 xe 
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
                                <i class="iconSave" data-productid="27763788" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần cho thu&amp;#234; nh&amp;#224; 5 tầng 2 mặt ng&amp;#245; diện t&amp;#237;ch 50m2 ng&amp;#245; 172 Lạc Long Qu&amp;#226;n&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112101602-9992_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112101602-9992_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần cho thuê nhà 5 tầng 2 mặt ngõ diện tích 50m2 ngõ 172 Lạc Long Quân" data-price="18 triệu/tháng" data-area="50 m²" data-pricesort="18000000" data-areasort="50" data-room="5" data-toilets="0" data-address="Tây Hồ, Hà Nội" data-description="Gia đình có nhu cầu cho thuê nhà 5 tầng số 35 ngõ 172 Lạc Long Quân, mặt tiền 4,5m. Tổng diện tích sử dụng 50m2 bao gồm 1 bếp, 1 phòng khách 5 phòng ngủ, 1 phòng thờ và 1 tum. Ô tô vào tận nhà, 2 xe " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 11:22:18" data-contactname="Chị Hà Phương" data-contactmobile="0902012069" data-url="/cho-thue-nha-rieng-duong-lac-long-quan-phuong-buoi/can-cho-quan-pr27763788" data-totalmedia="1" data-createbyuser="915309"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1507347">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-pho-kim-hoa-phuong-phuong-lien/cho-o-hoac-lam-van-phong-pr27744000" title="Cho thuê nhà 6 tầng để ở, làm văn phòng tại Kim Hoa, Phương Liên, Đống Đa" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà 6 tầng để ở, làm văn phòng tại Kim Hoa, Phương Liên, Đống Đa" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110225016-8e2b_wm.jpg" is-lazy-image="true" lazy-id="4">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-pho-kim-hoa-phuong-phuong-lien/cho-o-hoac-lam-van-phong-pr27744000" title="Cho thuê nhà 6 tầng để ở, làm văn phòng tại Kim Hoa, Phương Liên, Đống Đa" class="vipOne product-link">
                            CHO THUÊ NHÀ 6 TẦNG ĐỂ Ở, LÀM VĂN PHÒNG TẠI KIM HOA, PHƯƠNG LIÊN, ĐỐNG ĐA
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">35 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Đống Đa, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nhà 6 tầng, diện tích 35m2 tại SN12 Ngõ 188 đường Kim Hoa, P. Phương Liên, Đống Đa, HN - Nhà có 1 phòng khách + 4 phòng khép kín+ 4WC - Có chỗ để xe cho chủ và khách. - Nhà cách đường oto 30
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
                                <i class="iconSave" data-productid="27744000" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; 6 tầng để ở, l&amp;#224;m văn ph&amp;#242;ng tại Kim Hoa, Phương Li&amp;#234;n, Đống Đa&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110225016-8e2b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110225016-8e2b_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà 6 tầng để ở, làm văn phòng tại Kim Hoa, Phương Liên, Đống Đa" data-price="Giá thỏa thuận" data-area="35 m²" data-pricesort="0" data-areasort="35" data-room="4" data-toilets="4" data-address="Đống Đa, Hà Nội" data-description="Cho thuê nhà 6 tầng, diện tích 35m2 tại SN12 Ngõ 188 đường Kim Hoa, P. Phương Liên, Đống Đa, HN - Nhà có 1 phòng khách + 4 phòng khép kín+ 4WC - Có chỗ để xe cho chủ và khách. - Nhà cách đường oto 30" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 09:49:48" data-contactname="Chú Hà" data-contactmobile="0914256280" data-url="/cho-thue-nha-rieng-pho-kim-hoa-phuong-phuong-lien/cho-o-hoac-lam-van-phong-pr27744000" data-totalmedia="8" data-createbyuser="1507347"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1291446">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-1-phuong-truong-tho-2/cho-nguyen-can-gan-nga-tu-binh-thai-pr26057491" title="Cho thuê nhà nguyên căn gần ngã tư Bình Thái Thủ Đức, 13 tr/tháng, LH 0773517219" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà nguyên căn gần ngã tư Bình Thái Thủ Đức, 13 tr/tháng, LH 0773517219" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/30/20200630133457-32c0_wm.jpg" is-lazy-image="true" lazy-id="5">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-1-phuong-truong-tho-2/cho-nguyen-can-gan-nga-tu-binh-thai-pr26057491" title="Cho thuê nhà nguyên căn gần ngã tư Bình Thái Thủ Đức, 13 tr/tháng, LH 0773517***" class="vipOne product-link" style="overflow: visible;">
                            CHO THUÊ NHÀ NGUYÊN CĂN GẦN NGÃ TƯ BÌNH THÁI THỦ ĐỨC, 13 TR/THÁNG, LH <span class="hidden-mobile m-on-title" raw="0773517219">0773517***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">13 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">54 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thủ Đức, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Nhà nguyên căn DT đất 54m2. 1 trệt 2 lầu. 3 PN, 1 Phòng khách, 1 Phòng bếp, 1 Phòng Thờ. Nhà mặt tiền đường nhựa 8m, vỉa hè mỗi bên 3m. Tiện làm VP hoặc gia đình ở. Nhà gần Ngã Tư Bình Thái, Siêu Thị
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
                                <i class="iconSave" data-productid="26057491" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; nguy&amp;#234;n căn gần ng&amp;#227; tư B&amp;#236;nh Th&amp;#225;i Thủ Đức, 13 tr/th&amp;#225;ng, LH 0773517219&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/30/20200630133457-32c0_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/06/30/20200630133457-32c0_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà nguyên căn gần ngã tư Bình Thái Thủ Đức, 13 tr/tháng, LH 0773517219" data-price="13 triệu/tháng" data-area="54 m²" data-pricesort="13000000" data-areasort="54" data-room="3" data-toilets="4" data-address="Thủ Đức, Hồ Chí Minh" data-description="Nhà nguyên căn DT đất 54m2. 1 trệt 2 lầu. 3 PN, 1 Phòng khách, 1 Phòng bếp, 1 Phòng Thờ. Nhà mặt tiền đường nhựa 8m, vỉa hè mỗi bên 3m. Tiện làm VP hoặc gia đình ở. Nhà gần Ngã Tư Bình Thái, Siêu Thị" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 16:23:33" data-contactname="Chị Văn" data-contactmobile="0773517219" data-url="/cho-thue-nha-rieng-duong-1-phuong-truong-tho-2/cho-nguyen-can-gan-nga-tu-binh-thai-pr26057491" data-totalmedia="4" data-createbyuser="1291446"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="202473">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-truong-chinh-phuong-phuong-liet/-cho-chinh-pr18748768" title="Chính chủ cần cho thuê nhà đường Trường Chinh, vị trí đắc địa nhất khu phố" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần cho thuê nhà đường Trường Chinh, vị trí đắc địa nhất khu phố" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/23/jk05RraK/20200923105528-78e3_wm.jpg" is-lazy-image="true" lazy-id="6">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-truong-chinh-phuong-phuong-liet/-cho-chinh-pr18748768" title="Chính chủ cần cho thuê nhà đường Trường Chinh, vị trí đắc địa nhất khu phố" class="vipOne product-link">
                            CHÍNH CHỦ CẦN CHO THUÊ NHÀ ĐƯỜNG TRƯỜNG CHINH, VỊ TRÍ ĐẮC ĐỊA NHẤT KHU PHỐ
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">17 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">50 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thanh Xuân, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nguyên nhà 5 tầng, mặt ngõ rộng, khu an ninh tốt. - Khu phố đầy đủ tiện ích, thuận lợi di chuyển, sát đường Trường Chinh, đỗ ô tô, xe máy thoải mái. - Nhà 5 phòng rộng thoáng, 4 nhà vệ sinh.
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
                                <i class="iconSave" data-productid="18748768" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần cho thu&amp;#234; nh&amp;#224; đường Trường Chinh, vị tr&amp;#237; đắc địa nhất khu phố&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/23/jk05RraK/20200923105528-78e3_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/23/jk05RraK/20200923105528-78e3_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần cho thuê nhà đường Trường Chinh, vị trí đắc địa nhất khu phố" data-price="17 triệu/tháng" data-area="50 m²" data-pricesort="17000000" data-areasort="50" data-room="5" data-toilets="4" data-address="Thanh Xuân, Hà Nội" data-description="Cho thuê nguyên nhà 5 tầng, mặt ngõ rộng, khu an ninh tốt. - Khu phố đầy đủ tiện ích, thuận lợi di chuyển, sát đường Trường Chinh, đỗ ô tô, xe máy thoải mái. - Nhà 5 phòng rộng thoáng, 4 nhà vệ sinh." data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 11:59:14" data-contactname="Lê Hồng Giang" data-contactmobile="0904025786" data-url="/cho-thue-nha-rieng-duong-truong-chinh-phuong-phuong-liet/-cho-chinh-pr18748768" data-totalmedia="6" data-createbyuser="202473"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="574115">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-phuong-phuc-loi-prj-vinhomes-riverside/chinh-chu-cho-biet-thu-lo-goc-quan-long-bien-ha-noi-pr17523448" title="Chính chủ cho thuê biệt thự lô góc Vinhomes Riverside, Quận Long Biên, Hà Nội" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cho thuê biệt thự lô góc Vinhomes Riverside, Quận Long Biên, Hà Nội" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2018/09/08/20180908133708-4c9a.jpg" is-lazy-image="true" lazy-id="7">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">20</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-phuong-phuc-loi-prj-vinhomes-riverside/chinh-chu-cho-biet-thu-lo-goc-quan-long-bien-ha-noi-pr17523448" title="Chính chủ cho thuê biệt thự lô góc Vinhomes Riverside, Quận Long Biên, Hà Nội" class="vipOne product-link">
                            CHÍNH CHỦ CHO THUÊ BIỆT THỰ LÔ GÓC VINHOMES RIVERSIDE, QUẬN LONG BIÊN, HÀ NỘI
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">300 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Long Biên, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cho thuê biệt thự lô góc Vinhomes Riverside, Quận Long Biên, Hà Nội.Diện tích đất 300m2, diện tích xây dựng gần 400m2, thiết kế hiện đại 3 tầng với 1 phòng. Khách, 1 bếp, 4 phòng ngủ, 3 phò
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
                                <i class="iconSave" data-productid="17523448" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; biệt thự l&amp;#244; g&amp;#243;c Vinhomes Riverside, Quận Long Bi&amp;#234;n, H&amp;#224; Nội&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2018/09/08/20180908133708-4c9a.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2018/09/08/20180908133708-4c9a.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê biệt thự lô góc Vinhomes Riverside, Quận Long Biên, Hà Nội" data-price="Giá thỏa thuận" data-area="300 m²" data-pricesort="0" data-areasort="300" data-room="4" data-toilets="3" data-address="Long Biên, Hà Nội" data-description="Chính chủ cho thuê biệt thự lô góc Vinhomes Riverside, Quận Long Biên, Hà Nội.Diện tích đất 300m2, diện tích xây dựng gần 400m2, thiết kế hiện đại 3 tầng với 1 phòng. Khách, 1 bếp, 4 phòng ngủ, 3 phò" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 10:15:25" data-contactname="Lê Mạnh Hùng" data-contactmobile="0913239228" data-url="/cho-thue-nha-rieng-phuong-phuc-loi-prj-vinhomes-riverside/chinh-chu-cho-biet-thu-lo-goc-quan-long-bien-ha-noi-pr17523448" data-totalmedia="20" data-createbyuser="574115"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1505995">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-so-7-phuong-7-10-prj-khu-dan-cu-cityland-z751/chinh-chu-cho-tai-kdc-go-vap-5x20-tret-3-lau-gia-35-trieu-th-lh-0934194545-pr27723645" title="Chính chủ cho thuê nhà tại KDC Cityland Gò Vấp 5x20m, trệt 3 lầu, giá 35 triệu/th LH: 0934194545" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cho thuê nhà tại KDC Cityland Gò Vấp 5x20m, trệt 3 lầu, giá 35 triệu/th LH: 0934194545" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109150109-79dc_wm.jpg" is-lazy-image="true" lazy-id="8">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">13</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-so-7-phuong-7-10-prj-khu-dan-cu-cityland-z751/chinh-chu-cho-tai-kdc-go-vap-5x20-tret-3-lau-gia-35-trieu-th-lh-0934194545-pr27723645" title="Chính chủ cho thuê nhà tại KDC Cityland Gò Vấp 5x20m, trệt 3 lầu, giá 35 triệu/th LH: 0934194***" class="vipOne product-link" style="overflow: visible;">
                            CHÍNH CHỦ CHO THUÊ NHÀ TẠI KDC CITYLAND GÒ VẤP 5X20M, TRỆT 3 LẦU, GIÁ 35 TRIỆU/TH LH: <span class="hidden-mobile m-on-title" raw="0934194545">0934194***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">35 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">100 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Gò Vấp, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cho thuê nhà nguyên căn trong khu dân cư Cityland Center Hills. Khu dự án biệt thự liền kề cao cấp nằm ngay trung tâm của quận Gò Vấp:- Kiến trúc Tây Âu cổ đẹp, khu dân trí cao, mặt tiền th
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
                                <i class="iconSave" data-productid="27723645" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; nh&amp;#224; tại KDC Cityland G&amp;#242; Vấp 5x20m, trệt 3 lầu, gi&amp;#225; 35 triệu/th LH: 0934194545&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109150109-79dc_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109150109-79dc_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê nhà tại KDC Cityland Gò Vấp 5x20m, trệt 3 lầu, giá 35 triệu/th LH: 0934194545" data-price="35 triệu/tháng" data-area="100 m²" data-pricesort="35000000" data-areasort="100" data-room="5" data-toilets="4" data-address="Gò Vấp, Hồ Chí Minh" data-description="Chính chủ cho thuê nhà nguyên căn trong khu dân cư Cityland Center Hills. Khu dự án biệt thự liền kề cao cấp nằm ngay trung tâm của quận Gò Vấp:- Kiến trúc Tây Âu cổ đẹp, khu dân trí cao, mặt tiền th" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 15:44:44" data-contactname="Nguyễn Minh Tâm" data-contactmobile="0934194545" data-url="/cho-thue-nha-rieng-duong-so-7-phuong-7-10-prj-khu-dan-cu-cityland-z751/chinh-chu-cho-tai-kdc-go-vap-5x20-tret-3-lau-gia-35-trieu-th-lh-0934194545-pr27723645" data-totalmedia="13" data-createbyuser="1505995"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1210667">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-nguyen-nhu-do-phuong-van-mieu/cho-4-tang-pho-mieu-pr27647335" title="Cho thuê nhà 4 tầng phố Nguyễn Như Đổ - Văn Miếu, nhà mới rộng đẹp" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà 4 tầng phố Nguyễn Như Đổ - Văn Miếu, nhà mới rộng đẹp" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109132314-1edb.jpg" is-lazy-image="true" lazy-id="9">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">15</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-nguyen-nhu-do-phuong-van-mieu/cho-4-tang-pho-mieu-pr27647335" title="Cho thuê nhà 4 tầng phố Nguyễn Như Đổ - Văn Miếu, nhà mới rộng đẹp" class="vipOne product-link">
                            CHO THUÊ NHÀ 4 TẦNG PHỐ NGUYỄN NHƯ ĐỔ - VĂN MIẾU, NHÀ MỚI RỘNG ĐẸP
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">13 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">70 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Đống Đa, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cần cho thuê nhà tại phố Nguyễn Như Đổ - phường Văn Miếu - quận Đống Đa HN - Diện tích 70m2 x 4 tầng - Mỗi tầng chia 2 phòng có wc Vị trí ngay tại trung tâm thành phố, đi lại rất thuận tiện
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
                                <i class="iconSave" data-productid="27647335" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; 4 tầng phố Nguyễn Như Đổ - Văn Miếu, nh&amp;#224; mới rộng đẹp&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109132314-1edb.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109132314-1edb.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà 4 tầng phố Nguyễn Như Đổ - Văn Miếu, nhà mới rộng đẹp" data-price="13 triệu/tháng" data-area="70 m²" data-pricesort="13000000" data-areasort="70" data-room="5" data-toilets="4" data-address="Đống Đa, Hà Nội" data-description="Chính chủ cần cho thuê nhà tại phố Nguyễn Như Đổ - phường Văn Miếu - quận Đống Đa HN - Diện tích 70m2 x 4 tầng - Mỗi tầng chia 2 phòng có wc Vị trí ngay tại trung tâm thành phố, đi lại rất thuận tiện" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 14:34:35" data-contactname="Anh Bằng" data-contactmobile="0387882557" data-url="/cho-thue-nha-rieng-duong-nguyen-nhu-do-phuong-van-mieu/cho-4-tang-pho-mieu-pr27647335" data-totalmedia="15" data-createbyuser="1210667"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1400737">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-de-tham-53/can-sang-nhuong-khach-san-quan-1-pr27721625" title="Cần sang nhượng khách sạn Đề Thám, Quận 1" onclick="">
                        <img class="product-avatar-img" alt="Cần sang nhượng khách sạn Đề Thám, Quận 1" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/r3rI1LyC/20201109170840-ce6d_wm.jpg" is-lazy-image="true" lazy-id="10">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">14</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-de-tham-53/can-sang-nhuong-khach-san-quan-1-pr27721625" title="Cần sang nhượng khách sạn Đề Thám, Quận 1" class="vipOne product-link">
                            CẦN SANG NHƯỢNG KHÁCH SẠN ĐỀ THÁM, QUẬN 1
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">32 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">67.8 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 1, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        - Giá: 100 triệu VNĐ. - Cọc: 96 triệu VNĐ. Tổng: 196 triệu. - Diện tích: 67,8m2. - Tiền thuê: 32 triệu VNĐ (đóng trực tiếp chủ nhà).Khách sạn có 7 phòng. Hiện tại đang full khách (khách thuê dài hạn 
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
                                <i class="iconSave" data-productid="27721625" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần sang nhượng kh&amp;#225;ch sạn Đề Th&amp;#225;m, Quận 1&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/r3rI1LyC/20201109170840-ce6d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/r3rI1LyC/20201109170840-ce6d_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần sang nhượng khách sạn Đề Thám, Quận 1" data-price="32 triệu/tháng" data-area="67.8 m²" data-pricesort="32000000" data-areasort="67.8" data-room="0" data-toilets="0" data-address="Quận 1, Hồ Chí Minh" data-description="- Giá: 100 triệu VNĐ. - Cọc: 96 triệu VNĐ. Tổng: 196 triệu. - Diện tích: 67,8m2. - Tiền thuê: 32 triệu VNĐ (đóng trực tiếp chủ nhà).Khách sạn có 7 phòng. Hiện tại đang full khách (khách thuê dài hạn " data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 13:51:50" data-contactname="Chị An" data-contactmobile="0941965704" data-url="/cho-thue-nha-rieng-duong-de-tham-53/can-sang-nhuong-khach-san-quan-1-pr27721625" data-totalmedia="14" data-createbyuser="1400737"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="679423">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-lac-long-quan-phuong-xuan-la-prj-khu-do-thi-nam-thang-long-ciputra/chinh-chu-cho-biet-thu-t5-7-dt-230m2-so-full-noi-that-ngoai-cao-cap-pr27718977" title="Chính chủ cho thuê biệt thự Ciputra T5-7, DT 230m2, sổ đỏ, full nội thất ngoại cao cấp" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cho thuê biệt thự Ciputra T5-7, DT 230m2, sổ đỏ, full nội thất ngoại cao cấp" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109103622-6943_wm.jpg" is-lazy-image="true" lazy-id="11">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">20</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-lac-long-quan-phuong-xuan-la-prj-khu-do-thi-nam-thang-long-ciputra/chinh-chu-cho-biet-thu-t5-7-dt-230m2-so-full-noi-that-ngoai-cao-cap-pr27718977" title="Chính chủ cho thuê biệt thự Ciputra T5-7, DT 230m2, sổ đỏ, full nội thất ngoại cao cấp" class="vipOne product-link">
                            CHÍNH CHỦ CHO THUÊ BIỆT THỰ CIPUTRA T5-7, DT 230M2, SỔ ĐỎ, FULL NỘI THẤT NGOẠI CAO CẤP
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">230 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tây Hồ, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Biệt thự số T5-7. Diện tích: 230m2. 3 tầng, 4PN, 4WC, 1 phòng thờ. Vị trí thuận lợi: - Bảo vệ, an ninh tuyệt đối. - Gần trường học quốc tế, bể bơi... - Đường khu T rộng rãi. - Nhà sạch sẽ, thoáng mát
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
                                <i class="iconSave" data-productid="27718977" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; biệt thự Ciputra T5-7, DT 230m2, sổ đỏ, full nội thất ngoại cao cấp&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109103622-6943_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109103622-6943_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê biệt thự Ciputra T5-7, DT 230m2, sổ đỏ, full nội thất ngoại cao cấp" data-price="Giá thỏa thuận" data-area="230 m²" data-pricesort="0" data-areasort="230" data-room="4" data-toilets="4" data-address="Tây Hồ, Hà Nội" data-description="Biệt thự số T5-7. Diện tích: 230m2. 3 tầng, 4PN, 4WC, 1 phòng thờ. Vị trí thuận lợi: - Bảo vệ, an ninh tuyệt đối. - Gần trường học quốc tế, bể bơi... - Đường khu T rộng rãi. - Nhà sạch sẽ, thoáng mát" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 11:10:36" data-contactname="Huyền Nguyễn" data-contactmobile="0972505595" data-url="/cho-thue-nha-rieng-duong-lac-long-quan-phuong-xuan-la-prj-khu-do-thi-nam-thang-long-ciputra/chinh-chu-cho-biet-thu-t5-7-dt-230m2-so-full-noi-that-ngoai-cao-cap-pr27718977" data-totalmedia="20" data-createbyuser="679423"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="478078">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-vanh-dai-trong-phuong-phu-huu-2-prj-melosa-garden/chuyen-cho-pho-biet-thu-moi-dep-gia-tu-12tr-thang-full-noi-that-pr26512373" title="Chuyên cho thuê nhà phố, biệt thự Melosa Garden, nhà mới đẹp, giá từ 12tr/tháng full nội thất" onclick="">
                        <img class="product-avatar-img" alt="Chuyên cho thuê nhà phố, biệt thự Melosa Garden, nhà mới đẹp, giá từ 12tr/tháng full nội thất" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/03/20200803131801-13e1_wm.jpg" is-lazy-image="true" lazy-id="12">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">16</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-vanh-dai-trong-phuong-phu-huu-2-prj-melosa-garden/chuyen-cho-pho-biet-thu-moi-dep-gia-tu-12tr-thang-full-noi-that-pr26512373" title="Chuyên cho thuê nhà phố, biệt thự Melosa Garden, nhà mới đẹp, giá từ 12tr/tháng full nội thất" class="vipOne product-link">
                            CHUYÊN CHO THUÊ NHÀ PHỐ, BIỆT THỰ MELOSA GARDEN, NHÀ MỚI ĐẸP, GIÁ TỪ 12TR/THÁNG FULL NỘI THẤT
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">11 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">80 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 9, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chuyên cho thuê nhà phố khu compound Melosa Garden Khang Điền, P. Phú Hữu, Quận 9:+ Có 4 phòng ngủ, 4 toilet, 1 phòng sinh hoạt chung, có 2 balcony. + Xây dựng 1 trệt và 2 lầu có gara ô tô riêng, có 
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
                                <i class="iconSave" data-productid="26512373" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chuy&amp;#234;n cho thu&amp;#234; nh&amp;#224; phố, biệt thự Melosa Garden, nh&amp;#224; mới đẹp, gi&amp;#225; từ 12tr/th&amp;#225;ng full nội thất&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/08/03/20200803131801-13e1_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/08/03/20200803131801-13e1_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chuyên cho thuê nhà phố, biệt thự Melosa Garden, nhà mới đẹp, giá từ 12tr/tháng full nội thất" data-price="11 triệu/tháng" data-area="80 m²" data-pricesort="11000000" data-areasort="80" data-room="4" data-toilets="4" data-address="Quận 9, Hồ Chí Minh" data-description="Chuyên cho thuê nhà phố khu compound Melosa Garden Khang Điền, P. Phú Hữu, Quận 9:+ Có 4 phòng ngủ, 4 toilet, 1 phòng sinh hoạt chung, có 2 balcony. + Xây dựng 1 trệt và 2 lầu có gara ô tô riêng, có " data-duration="5 ngày trước" data-updatedtime="08/11/2020" data-datesort="11/08/2020 13:25:09" data-contactname="Vòng Xuân Kim" data-contactmobile="0908119226" data-url="/cho-thue-nha-rieng-duong-vanh-dai-trong-phuong-phu-huu-2-prj-melosa-garden/chuyen-cho-pho-biet-thu-moi-dep-gia-tu-12tr-thang-full-noi-that-pr26512373" data-totalmedia="16" data-createbyuser="478078"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1477760">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-bang-a-phuong-hoang-liet-prj-tay-nam-ho-linh-dam/cho-lien-ke-60m2x5t-dam-pr27188808" title="Cho thuê nhà liền kề 60m2x5T Tây Nam Linh Đàm" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà liền kề 60m2x5T Tây Nam Linh Đàm" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/27/20200927071242-8f92_wm.jpg" is-lazy-image="true" lazy-id="13">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-bang-a-phuong-hoang-liet-prj-tay-nam-ho-linh-dam/cho-lien-ke-60m2x5t-dam-pr27188808" title="Cho thuê nhà liền kề 60m2x5T Tây Nam Linh Đàm" class="vipOne product-link">
                            CHO THUÊ NHÀ LIỀN KỀ 60M2X5T TÂY NAM LINH ĐÀM
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">18 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">60 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hoàng Mai, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nhà liền kề khu dịch vụ Tây Nam Linh Đàm Hoàng Mai Hà Nội. DT: 60m2 x 5 tầng, mặt tiền 5m. Tầng 1: Thông sàn, 1 WC Tầng 2,3,4: Mỗi tầng 2P, 1 hoặc 2 WC Tầng 5:  Phòng thờ,Tum và sân phơi. Nh
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
                                <i class="iconSave" data-productid="27188808" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; liền kề 60m2x5T T&amp;#226;y Nam Linh Đ&amp;#224;m&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/27/20200927071242-8f92_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/27/20200927071242-8f92_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà liền kề 60m2x5T Tây Nam Linh Đàm" data-price="18 triệu/tháng" data-area="60 m²" data-pricesort="18000000" data-areasort="60" data-room="9" data-toilets="5" data-address="Hoàng Mai, Hà Nội" data-description="Cho thuê nhà liền kề khu dịch vụ Tây Nam Linh Đàm Hoàng Mai Hà Nội. DT: 60m2 x 5 tầng, mặt tiền 5m. Tầng 1: Thông sàn, 1 WC Tầng 2,3,4: Mỗi tầng 2P, 1 hoặc 2 WC Tầng 5:  Phòng thờ,Tum và sân phơi. Nh" data-duration="6 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 20:41:48" data-contactname="Chị Dung" data-contactmobile="0982116637" data-url="/cho-thue-nha-rieng-duong-bang-a-phuong-hoang-liet-prj-tay-nam-ho-linh-dam/cho-lien-ke-60m2x5t-dam-pr27188808" data-totalmedia="8" data-createbyuser="1477760"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="255434">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-vanh-dai-trong-phuong-phu-huu-2-prj-melosa-garden/cho-nguyen-can-4-tang-5-pn-mat-tien-nguyen-hoang-quan-2-gia-33tr-thang-0902-442-039-pr19450405" title="Cho thuê nhà Melosa Garden Khang Điền Q9, 1T, 2 lầu nội thất đẹp, an ninh 11-15tr/th, 0902 442 039" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà Melosa Garden Khang Điền Q9, 1T, 2 lầu nội thất đẹp, an ninh 11-15tr/th, 0902 442 039" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2019/08/28/kBqBK34A/20190828112331-45c4.jpg" is-lazy-image="true" lazy-id="14">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-vanh-dai-trong-phuong-phu-huu-2-prj-melosa-garden/cho-nguyen-can-4-tang-5-pn-mat-tien-nguyen-hoang-quan-2-gia-33tr-thang-0902-442-039-pr19450405" title="Cho thuê nhà Melosa Garden Khang Điền Q9, 1T, 2 lầu nội thất đẹp, an ninh 11-15tr/th, 0902 442 ***" class="vipOne product-link" style="overflow: visible;">
                            CHO THUÊ NHÀ MELOSA GARDEN KHANG ĐIỀN Q9, 1T, 2 LẦU NỘI THẤT ĐẸP, AN NINH 11-15TR/TH, <span class="hidden-mobile m-on-title" raw="0902 442 039">0902 442 ***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">11 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">75 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 9, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nhà Melosa Garden, Khang Điền, Quận 9. Melosa Garden là khu Compound view 2 mặt sông, được bảo vệ 24/24, có đầy đủ các tiện ích như hồ bơi, phòng gym, siêu thị, tennis, sân đa năng, khu barb
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
                                <i class="iconSave" data-productid="19450405" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; Melosa Garden Khang Điền Q9, 1T, 2 lầu nội thất đẹp, an ninh 11-15tr/th, 0902 442 039&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/08/28/kBqBK34A/20190828112331-45c4.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2019/08/28/kBqBK34A/20190828112331-45c4.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà Melosa Garden Khang Điền Q9, 1T, 2 lầu nội thất đẹp, an ninh 11-15tr/th, 0902 442 039" data-price="11 triệu/tháng" data-area="75 m²" data-pricesort="11000000" data-areasort="75" data-room="4" data-toilets="4" data-address="Quận 9, Hồ Chí Minh" data-description="Cho thuê nhà Melosa Garden, Khang Điền, Quận 9. Melosa Garden là khu Compound view 2 mặt sông, được bảo vệ 24/24, có đầy đủ các tiện ích như hồ bơi, phòng gym, siêu thị, tennis, sân đa năng, khu barb" data-duration="6 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 13:28:51" data-contactname="Đặng Văn Sự" data-contactmobile="0902442039" data-url="/cho-thue-nha-rieng-duong-vanh-dai-trong-phuong-phu-huu-2-prj-melosa-garden/cho-nguyen-can-4-tang-5-pn-mat-tien-nguyen-hoang-quan-2-gia-33tr-thang-0902-442-039-pr19450405" data-totalmedia="8" data-createbyuser="255434"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1039929">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-tran-hung-dao-phuong-cau-ong-lanh/cho-1-tret-5-lau-hem-135-cach-bui-vien-30m-dien-tich-72m-lien-he-0902868121-pr27662130" title="Cho thuê nhà 1 trệt 5 lầu Trần Hưng Đạo hẻm 135 cách Bùi Viện 30m diện tích 72m² liên hệ 0902868121" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà 1 trệt 5 lầu Trần Hưng Đạo hẻm 135 cách Bùi Viện 30m diện tích 72m² liên hệ 0902868121" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/04/jrWuDBKD/20201104144733-7426_wm.jpg" is-lazy-image="true" lazy-id="15">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">12</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-tran-hung-dao-phuong-cau-ong-lanh/cho-1-tret-5-lau-hem-135-cach-bui-vien-30m-dien-tich-72m-lien-he-0902868121-pr27662130" title="Cho thuê nhà 1 trệt 5 lầu Trần Hưng Đạo hẻm 135 cách Bùi Viện 30m diện tích 72m² liên hệ 0902868***" class="vipOne product-link" style="overflow: visible;">
                            CHO THUÊ NHÀ 1 TRỆT 5 LẦU TRẦN HƯNG ĐẠO HẺM 135 CÁCH BÙI VIỆN 30M DIỆN TÍCH 72M² LIÊN HỆ <span class="hidden-mobile m-on-title" raw="0902868121">0902868***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">85 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">72 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 1, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nhà số 135/22 Đường Trần Hưng Đạo, hẻm 135 cách Bùi Viện 30m. Nhà 1 trệt 5 lầu. Diện tích: 4x18. Gồm: 11 phòng căn hộ có bếp. Đầy đủ nội thất chỉ vào kinh doanh. Giá thuê 85 triệu/Tháng liên
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                1 tuần trước
                                <span class="tooltip-time">04/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27662130" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; 1 trệt 5 lầu Trần Hưng Đạo hẻm 135 c&amp;#225;ch B&amp;#249;i Viện 30m diện t&amp;#237;ch 72m&amp;#178; li&amp;#234;n hệ 0902868121&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/04/jrWuDBKD/20201104144733-7426_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/04/jrWuDBKD/20201104144733-7426_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà 1 trệt 5 lầu Trần Hưng Đạo hẻm 135 cách Bùi Viện 30m diện tích 72m² liên hệ 0902868121" data-price="85 triệu/tháng" data-area="72 m²" data-pricesort="85000000" data-areasort="72" data-room="0" data-toilets="0" data-address="Quận 1, Hồ Chí Minh" data-description="Cho thuê nhà số 135/22 Đường Trần Hưng Đạo, hẻm 135 cách Bùi Viện 30m. Nhà 1 trệt 5 lầu. Diện tích: 4x18. Gồm: 11 phòng căn hộ có bếp. Đầy đủ nội thất chỉ vào kinh doanh. Giá thuê 85 triệu/Tháng liên" data-duration="1 tuần trước" data-updatedtime="04/11/2020" data-datesort="11/04/2020 17:00:44" data-contactname="Chị Thuý" data-contactmobile="0902868121" data-url="/cho-thue-nha-rieng-duong-tran-hung-dao-phuong-cau-ong-lanh/cho-1-tret-5-lau-hem-135-cach-bui-vien-30m-dien-tich-72m-lien-he-0902868121-pr27662130" data-totalmedia="12" data-createbyuser="1039929"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1498622">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-xo-viet-nghe-tinh-phuong-21/cho-nguyen-can-2-phong-ngu-2-tolet-co-san-rong-dau-xe-hem-cut-an-ninh-co-wifi-va-cap-pr27629310" title="Cho thuê nhà nguyên căn, 2 phòng ngủ 2 toilet. Có sân rộng đậu xe, hẻm cụt an ninh, có wifi và cáp" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà nguyên căn, 2 phòng ngủ 2 toilet. Có sân rộng đậu xe, hẻm cụt an ninh, có wifi và cáp" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102112742-ce56.jpeg" is-lazy-image="true" lazy-id="16">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">13</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-xo-viet-nghe-tinh-phuong-21/cho-nguyen-can-2-phong-ngu-2-tolet-co-san-rong-dau-xe-hem-cut-an-ninh-co-wifi-va-cap-pr27629310" title="Cho thuê nhà nguyên căn, 2 phòng ngủ 2 toilet. Có sân rộng đậu xe, hẻm cụt an ninh, có wifi và cáp" class="vipOne product-link">
                            CHO THUÊ NHÀ NGUYÊN CĂN, 2 PHÒNG NGỦ 2 TOILET. CÓ SÂN RỘNG ĐẬU XE, HẺM CỤT AN NINH, CÓ WIFI VÀ CÁP
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">10 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">42 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bình Thạnh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cho thuê nhà nguyên căn. 1 trệt, 1 gác gỗ. 2 phòng, 2 toilet. Diện tích SD 42m2. Giá: 10tr/tháng. Địa chỉ: 66/26K Xô Viết Nghệ Tĩnh, phường 21, Quận Bình Thạnh. Diện tích sử dụng: 42 m2. 1 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                1 tuần trước
                                <span class="tooltip-time">02/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27629310" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; nguy&amp;#234;n căn, 2 ph&amp;#242;ng ngủ 2 toilet. C&amp;#243; s&amp;#226;n rộng đậu xe, hẻm cụt an ninh, c&amp;#243; wifi v&amp;#224; c&amp;#225;p&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102112742-ce56.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/02/20201102112742-ce56.jpeg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà nguyên căn, 2 phòng ngủ 2 toilet. Có sân rộng đậu xe, hẻm cụt an ninh, có wifi và cáp" data-price="10 triệu/tháng" data-area="42 m²" data-pricesort="10000000" data-areasort="42" data-room="2" data-toilets="2" data-address="Bình Thạnh, Hồ Chí Minh" data-description="Chính chủ cho thuê nhà nguyên căn. 1 trệt, 1 gác gỗ. 2 phòng, 2 toilet. Diện tích SD 42m2. Giá: 10tr/tháng. Địa chỉ: 66/26K Xô Viết Nghệ Tĩnh, phường 21, Quận Bình Thạnh. Diện tích sử dụng: 42 m2. 1 " data-duration="1 tuần trước" data-updatedtime="02/11/2020" data-datesort="11/02/2020 11:55:42" data-contactname="Lê Hữu Huy Hoàng" data-contactmobile="0909212367" data-url="/cho-thue-nha-rieng-duong-xo-viet-nghe-tinh-phuong-21/cho-nguyen-can-2-phong-ngu-2-tolet-co-san-rong-dau-xe-hem-cut-an-ninh-co-wifi-va-cap-pr27629310" data-totalmedia="13" data-createbyuser="1498622"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="1283539">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-lam-son-phuong-2-22/phong-cao-cap-gia-binh-dan-ngay-san-bay-tsn-tai-95-p2-q-tan-binh-call-0985-04-77-88-pr27052579" title="Cho thuê khách sạn sân bay TSN tại 95 Lam Sơn, P2, Q. Tân Bình. Call: 0985.04.77.88 Anh Hùng" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê khách sạn sân bay TSN tại 95 Lam Sơn, P2, Q. Tân Bình. Call: 0985.04.77.88 Anh Hùng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106110322-a2b5_wm.jpg" is-lazy-image="true" lazy-id="17">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">11</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-lam-son-phuong-2-22/phong-cao-cap-gia-binh-dan-ngay-san-bay-tsn-tai-95-p2-q-tan-binh-call-0985-04-77-88-pr27052579" title="Cho thuê khách sạn sân bay TSN tại 95 Lam Sơn, P2, Q. Tân Bình. Call: 0985.04.7*.** Anh Hùng" class="vipTwo product-link" style="overflow: visible;">
                            CHO THUÊ KHÁCH SẠN SÂN BAY TSN TẠI 95 LAM SƠN, P2, Q. TÂN BÌNH. CALL: <span class="hidden-mobile m-on-title" raw="0985.04.77.88">0985.04.7*.**</span> ANH HÙNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">68 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">200 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tân Bình, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Sang nhượng hoặc cho thuê lại khách sạn có đầy đủ GPKD (có thể làm căn hộ dịch vụ) vào là có thể kinh doanh được ngay (được hướng dẫn nếu chưa có kinh nghiệm). Diện tích ngang 8m, dài 25m, gồm 1 trệt
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
                                <i class="iconSave" data-productid="27052579" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; kh&amp;#225;ch sạn s&amp;#226;n bay TSN tại 95 Lam Sơn, P2, Q. T&amp;#226;n B&amp;#236;nh. Call: 0985.04.77.88 Anh H&amp;#249;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106110322-a2b5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/06/20201106110322-a2b5_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê khách sạn sân bay TSN tại 95 Lam Sơn, P2, Q. Tân Bình. Call: 0985.04.77.88 Anh Hùng" data-price="68 triệu/tháng" data-area="200 m²" data-pricesort="68000000" data-areasort="200" data-room="0" data-toilets="0" data-address="Tân Bình, Hồ Chí Minh" data-description="Sang nhượng hoặc cho thuê lại khách sạn có đầy đủ GPKD (có thể làm căn hộ dịch vụ) vào là có thể kinh doanh được ngay (được hướng dẫn nếu chưa có kinh nghiệm). Diện tích ngang 8m, dài 25m, gồm 1 trệt" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:50:49" data-contactname="Anh Hùng" data-contactmobile="0985047788" data-url="/cho-thue-nha-rieng-duong-lam-son-phuong-2-22/phong-cao-cap-gia-binh-dan-ngay-san-bay-tsn-tai-95-p2-q-tan-binh-call-0985-04-77-88-pr27052579" data-totalmedia="11" data-createbyuser="1283539"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="1082852">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-hoang-van-thai-phuong-khuong-mai/cho-mat-bang-kinh-doanh-gia-re-tu-tang-1-6-tai-thanh-xuan-mat-tien-5m-pr27776908" title="Cho thuê mặt bằng kinh doanh giá rẻ, từ tầng 1 - 6. Tại Hoàng Văn Thái, Thanh Xuân, mặt tiền 5m" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê mặt bằng kinh doanh giá rẻ, từ tầng 1 - 6. Tại Hoàng Văn Thái, Thanh Xuân, mặt tiền 5m" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/unWuIkRS/20201113095456-f49a_wm.jpg" is-lazy-image="true" lazy-id="18">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-hoang-van-thai-phuong-khuong-mai/cho-mat-bang-kinh-doanh-gia-re-tu-tang-1-6-tai-thanh-xuan-mat-tien-5m-pr27776908" title="Cho thuê mặt bằng kinh doanh giá rẻ, từ tầng 1 - 6. Tại Hoàng Văn Thái, Thanh Xuân, mặt tiền 5m" class="vipTwo product-link">
                            CHO THUÊ MẶT BẰNG KINH DOANH GIÁ RẺ, TỪ TẦNG 1 - 6. TẠI HOÀNG VĂN THÁI, THANH XUÂN, MẶT TIỀN 5M
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">60 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">100 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thanh Xuân, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cần cho thuê mặt bằng từ tầng 1 - tầng 6 tại số 6 ngõ 71 phố Hoàng Văn Thái, DT 100 m2/sàn, mặt tiền 5m, ngõ rộng ôtô tải ra vào, gần trường học, bệnh viện, chợ, siêu thị, tòa nhà thiết kế 
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
                                <i class="iconSave" data-productid="27776908" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; mặt bằng kinh doanh gi&amp;#225; rẻ, từ tầng 1 - 6. Tại Ho&amp;#224;ng Văn Th&amp;#225;i, Thanh Xu&amp;#226;n, mặt tiền 5m&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/unWuIkRS/20201113095456-f49a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/13/unWuIkRS/20201113095456-f49a_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê mặt bằng kinh doanh giá rẻ, từ tầng 1 - 6. Tại Hoàng Văn Thái, Thanh Xuân, mặt tiền 5m" data-price="60 triệu/tháng" data-area="100 m²" data-pricesort="60000000" data-areasort="100" data-room="0" data-toilets="0" data-address="Thanh Xuân, Hà Nội" data-description="Chính chủ cần cho thuê mặt bằng từ tầng 1 - tầng 6 tại số 6 ngõ 71 phố Hoàng Văn Thái, DT 100 m2/sàn, mặt tiền 5m, ngõ rộng ôtô tải ra vào, gần trường học, bệnh viện, chợ, siêu thị, tòa nhà thiết kế " data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:10:31" data-contactname="Huyền" data-contactmobile="0938545668" data-url="/cho-thue-nha-rieng-duong-hoang-van-thai-phuong-khuong-mai/cho-mat-bang-kinh-doanh-gia-re-tu-tang-1-6-tai-thanh-xuan-mat-tien-5m-pr27776908" data-totalmedia="3" data-createbyuser="1082852"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="993108">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-cu-xa-phu-lam-d-phuong-10-4/chinh-chu-can-cho-lo-g-mat-tien-cho-ho-trong-quy-18tr-thang-pr25131732" title="Chính chủ cần cho thuê nhà 48 lô G, Cư xá Phú Lâm D, mặt tiền chợ Hồ Trọng Quý 18 triệu/tháng" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần cho thuê nhà 48 lô G, Cư xá Phú Lâm D, mặt tiền chợ Hồ Trọng Quý 18 triệu/tháng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/04/09/YsmRilY7/20200409140132-9146_wm.jpg" is-lazy-image="true" lazy-id="19">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-cu-xa-phu-lam-d-phuong-10-4/chinh-chu-can-cho-lo-g-mat-tien-cho-ho-trong-quy-18tr-thang-pr25131732" title="Chính chủ cần cho thuê nhà 48 lô G, Cư xá Phú Lâm D, mặt tiền chợ Hồ Trọng Quý 18 triệu/tháng" class="vipTwo product-link">
                            CHÍNH CHỦ CẦN CHO THUÊ NHÀ 48 LÔ G, CƯ XÁ PHÚ LÂM D, MẶT TIỀN CHỢ HỒ TRỌNG QUÝ 18 TRIỆU/THÁNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">18 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">64 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 6, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cần cho thuê nhà 48 lô G, Cư Xá Phú Lâm D. Nhà mặt tiền chợ Hồ Trọng Quý khu vực đông dân cư thuận tiện buôn bán kinh doanh. Diện tích 4x16m gác suốt. Giá 18 triệu (không cho thuê bán hàng
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
                                <i class="iconSave" data-productid="25131732" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần cho thu&amp;#234; nh&amp;#224; 48 l&amp;#244; G, Cư xá Ph&amp;#250; L&amp;#226;m D, mặt tiền chợ Hồ Trọng Qu&amp;#253; 18 triệu/th&amp;#225;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/04/09/YsmRilY7/20200409140132-9146_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/04/09/YsmRilY7/20200409140132-9146_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần cho thuê nhà 48 lô G, Cư xá Phú Lâm D, mặt tiền chợ Hồ Trọng Quý 18 triệu/tháng" data-price="18 triệu/tháng" data-area="64 m²" data-pricesort="18000000" data-areasort="64" data-room="0" data-toilets="0" data-address="Quận 6, Hồ Chí Minh" data-description="Chính chủ cần cho thuê nhà 48 lô G, Cư Xá Phú Lâm D. Nhà mặt tiền chợ Hồ Trọng Quý khu vực đông dân cư thuận tiện buôn bán kinh doanh. Diện tích 4x16m gác suốt. Giá 18 triệu (không cho thuê bán hàng" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:59:35" data-contactname="Kim Loan" data-contactmobile="0908668742" data-url="/cho-thue-nha-rieng-duong-cu-xa-phu-lam-d-phuong-10-4/chinh-chu-can-cho-lo-g-mat-tien-cho-ho-trong-quy-18tr-thang-pr25131732" data-totalmedia="4" data-createbyuser="993108"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-center">
            <div class="pagination">
<a pid="1" class="actived" href="https://batdongsan.com.vn/cho-thue-nha-rieng">1</a>
<a pid="2" class="" href="https://batdongsan.com.vn/cho-thue-nha-rieng/p2">2</a>
<a pid="3" class="" href="https://batdongsan.com.vn/cho-thue-nha-rieng/p3">3</a>
<a pid="4" class="" href="https://batdongsan.com.vn/cho-thue-nha-rieng/p4">4</a>
<a pid="5" class="" href="https://batdongsan.com.vn/cho-thue-nha-rieng/p5">5</a>
<a pid="298" href="https://batdongsan.com.vn/cho-thue-nha-rieng/p298"><img src="./assets/image/ic_double_caret_right.png"></a>
</div>

        </div>
    </div>






    <div class="divide">&nbsp;</div>
<div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Cho thuê nhà ngõ Trần Duy Hưng" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-ngo-tran-duy-hung">Cho thuê nhà ngõ Trần Duy Hưng</a></li>    <li><a title="Cho thuê nhà ngõ Đào Tấn" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-ngo-dao-tan">Cho thuê nhà ngõ Đào Tấn</a></li>    <li><a title="Cho thuê nhà ngõ Thông Phong" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-ngo-thong-phong">Cho thuê nhà ngõ Thông Phong</a></li>    <li><a title="Cho thuê nhà ngõ Quỳnh" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-ngo-quynh">Cho thuê nhà ngõ Quỳnh</a></li>    <li><a title="Cho thuê nhà chính chủ" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-chinh-chu">Cho thuê nhà chính chủ</a></li>    <li><a title="Cho thuê nhà ngõ Gốc Đề" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-ngo-goc-de">Cho thuê nhà ngõ Gốc Đề</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
    <div class="product-seo-text">
        <div>Cho thuê nhà riêng, cho thuê nhà nguyên căn <strong>Việt Nam</strong></div>
                                <div>Vài năm trở lại đây, cho thuê nhà riêng là hình thức kinh doanh nhận được sự quan tâm lớn trên thị trường. Tại các thành phố lớn như Tp.HCM, Hà Nội, thuê nhà riêng là lựa chọn phổ biến của người trẻ mới đi làm hoặc các gia đình trẻ có con nhỏ...Theo khảo sát của <strong>Batdongsan.com.vn</strong> nhu cầu thuê nhà nguyên căn tăng lên một phần do tài chính của người thuê nhà đang dần được cải thiện, họ có nhu cầu thuê nhà ở có chất lượng cao hơn. Họ quan tâm nhiều hơn đến môi trường sống và những tiện ích xung quanh. Điều này rất khó được đáp ứng ở phân khúc phòng trọ cho thuê. Ngoài ra, vấn đề an ninh, giờ giấc tự do, tự chủ cùng với các loại chi phí dịch vụ như điện, nước rẻ hơn khiến cho phân khúc <strong>cho thuê nhà riêng/nhà nguyên căn giá rẻ</strong> ngày càng thu hút khách.</div>
                                <div>Không chỉ dành riêng cho những ai có ý định tìm nhà cho thuê nguyên căn để sinh sống, nhiều công ty đã thuê nhà nguyên căn để mở văn phòng khi mà chi phí thuê mặt bằng ở những tòa văn phòng hiện nay khá cao.  Mặt khác, hình thức thuê nhà nguyên căn để sửa sang, tách phòng và cho thuê lại trở thành một xu hướng hot trên thị trường. Chẳng hạn, bạn có thể <strong>thuê nhà riêng Việt Nam</strong> với nhiều loại diện tích khác nhau với mức giá dao động từ 5-10 triệu, bên trong căn nhà được chia thành nhiều phòng và bạn có thể cho thuê lại với mức giá từ 2-3 triệu/phòng. Đó là một khoản chênh lệch rất hấp dẫn, vì lý do đó mà giá thuê nhà riêng ngày càng tăng cao. </div>
                                <div>Thị trường <strong>cho thuê nhà riêng Việt Nam giá rẻ</strong> hiện nay đầy tiềm năng, trong đó phân khúc giá được nhiều người quan tâm nhất là <strong>thuê nhà nguyên căn Việt Nam giá 5 triệu, 6 triệu, 7 triệu,</strong>...</div>
                                <div>Để tìm được nhà thuê nguyên căn <strong>Việt Nam</strong> giá rẻ và phù hợp nhất, hãy tham khảo các thông tin được cập nhật một cách nhanh chóng, chính xác và đầy đủ nhất trên trang web <strong>Batdongsan.com.vn</strong>.</div>
    </div>
<form id="productListBinnova" method="post">
    <input id="hashAlias" type="hidden" value="97f465d49a76d0ecb83c6907d55ca6b195931fe236baf5c71f8f5170290ad8a4">
</form>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
            var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                model: {
                    typeOfProduct: 49,
                    categoryId: 52,
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
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/-1/2/-1/-1" title="Cho thuê nhà riêng Việt Nam giá 1 - 3 triệu">1 - 3 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/-1/3/-1/-1" title="Cho thuê nhà riêng Việt Nam giá 3 - 5 triệu">3 - 5 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/-1/4/-1/-1" title="Cho thuê nhà riêng Việt Nam giá 5 - 10 triệu">5 - 10 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/-1/5/-1/-1" title="Cho thuê nhà riêng Việt Nam giá 10 - 40 triệu">10 - 40 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/-1/6/-1/-1" title="Cho thuê nhà riêng Việt Nam giá 40 - 70 triệu">40 - 70 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/-1/7/-1/-1" title="Cho thuê nhà riêng Việt Nam giá 70 - 100 triệu">70 - 100 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/-1/8/-1/-1" title="Cho thuê nhà riêng Việt Nam giá &gt; 100 triệu">&gt; 100 triệu</a></li>
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
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/1/-1/-1/-1" title="Cho thuê nhà riêng Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/2/-1/-1/-1" title="Cho thuê nhà riêng Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/3/-1/-1/-1" title="Cho thuê nhà riêng Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/4/-1/-1/-1" title="Cho thuê nhà riêng Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/5/-1/-1/-1" title="Cho thuê nhà riêng Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/6/-1/-1/-1" title="Cho thuê nhà riêng Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/7/-1/-1/-1" title="Cho thuê nhà riêng Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/8/-1/-1/-1" title="Cho thuê nhà riêng Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/9/-1/-1/-1" title="Cho thuê nhà riêng Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-rieng/10/-1/-1/-1" title="Cho thuê nhà riêng Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
        <h2 class="box-title">Cho thuê nhà riêng</h2>

        <div class="box-content link-hover-blue">
            <ul>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-tp-hcm" title="Cho thuê nhà riêng tại Hồ Chí Minh">
                                Hồ Chí Minh (3043)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-ha-noi" title="Cho thuê nhà riêng tại Hà Nội">
                                Hà Nội (2288)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-binh-duong" title="Cho thuê nhà riêng tại Bình Dương">
                                Bình Dương (196)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-da-nang" title="Cho thuê nhà riêng tại Đà Nẵng">
                                Đà Nẵng (130)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-hai-phong" title="Cho thuê nhà riêng tại Hải Phòng">
                                Hải Phòng (63)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quang-ninh" title="Cho thuê nhà riêng tại Quảng Ninh">
                                Quảng Ninh (3)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quang-nam" title="Cho thuê nhà riêng tại Quảng Nam">
                                Quảng Nam (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quang-ngai" title="Cho thuê nhà riêng tại Quảng Ngãi">
                                Quảng Ngãi (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-hung-yen" title="Cho thuê nhà riêng tại Hưng Yên">
                                Hưng Yên (16)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-an-giang" title="Cho thuê nhà riêng tại An Giang">
                                An Giang (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-tra-vinh" title="Cho thuê nhà riêng tại Trà Vinh">
                                Trà Vinh (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-ba-ria-vung-tau" title="Cho thuê nhà riêng tại Bà Rịa Vũng Tàu">
                                Bà Rịa Vũng Tàu (20)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-dak-lak" title="Cho thuê nhà riêng tại Đắk Lắk">
                                Đắk Lắk (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-hai-duong" title="Cho thuê nhà riêng tại Hải Dương">
                                Hải Dương (6)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-khanh-hoa" title="Cho thuê nhà riêng tại Khánh Hòa">
                                Khánh Hòa (48)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-ben-tre" title="Cho thuê nhà riêng tại Bến Tre">
                                Bến Tre (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-binh-dinh" title="Cho thuê nhà riêng tại Bình Định">
                                Bình Định (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-vinh-phuc" title="Cho thuê nhà riêng tại Vĩnh Phúc">
                                Vĩnh Phúc (9)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-nghe-an" title="Cho thuê nhà riêng tại Nghệ An">
                                Nghệ An (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-dong-thap" title="Cho thuê nhà riêng tại Đồng Tháp">
                                Đồng Tháp (1)
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
                                <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-ha-noi" title="Thuê nhà nguyên căn Hà Nội">
                                    Thuê nhà nguyên căn Hà Nội
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-tp-hcm" title="Thuê nhà nguyên căn TPHCM">
                                    Thuê nhà nguyên căn TPHCM
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro" title="Thuê phòng trọ">
                                    Thuê phòng trọ
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-ha-noi" title="Thuê phòng trọ Hà Nội">
                                    Thuê phòng trọ Hà Nội
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-tp-hcm" title="Thuê phòng trọ TPHCM">
                                    Thuê phòng trọ TPHCM
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-da-nang" title="Thuê phòng trọ Đà Nẵng">
                                    Thuê phòng trọ Đà Nẵng
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-da-nang" title="Thuê nhà Đà Nẵng">
                                    Thuê nhà Đà Nẵng
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-hai-phong" title="Thuê nhà Hải Phòng">
                                    Thuê nhà Hải Phòng
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu" title="Thuê nhà chung cư">
                                    Thuê nhà chung cư
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-go-vap" title="Thuê nhà nguyên căn Gò Vấp">
                                    Thuê nhà nguyên căn Gò Vấp
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-thu-duc" title="Thuê nhà nguyên căn Thủ Đức">
                                    Thuê nhà nguyên căn Thủ Đức
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-binh-thanh" title="Thuê nhà nguyên căn Bình Thạnh">
                                    Thuê nhà nguyên căn Bình Thạnh
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-12" title="Thuê nhà nguyên căn Quận 12">
                                    Thuê nhà nguyên căn Quận 12
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-7" title="Thuê nhà nguyên căn Quận 7">
                                    Thuê nhà nguyên căn Quận 7
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-binh-thanh" title="Cho thuê nhà Bình Thạnh">
                                    Cho thuê nhà Bình Thạnh
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-go-vap" title="Cho thuê nhà Gò Vấp">
                                    Cho thuê nhà Gò Vấp
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-hoc-mon" title="Cho thuê nhà Hóc Môn">
                                    Cho thuê nhà Hóc Môn
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-nha-be" title="Cho thuê nhà Nhà Bè">
                                    Cho thuê nhà Nhà Bè
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-phu-nhuan" title="Cho thuê nhà Phú Nhuận">
                                    Cho thuê nhà Phú Nhuận
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-tan-binh" title="Cho thuê nhà Tân Bình">
                                    Cho thuê nhà Tân Bình
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
            