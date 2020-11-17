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
                <div class="custom-value hasvalue">Kho, nhà xưởng, đất</div>
            </div>
            <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="53">
            <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                    <li vl="0"><span class="current">Tất cả nhà đất</span></li>
                                    <li vl="326"><span>Căn hộ chung cư</span></li>
                                    <li vl="52"><span>Nhà riêng</span></li>
                                    <li vl="51"><span>Nhà mặt phố</span></li>
                                    <li vl="57"><span>Nhà trọ, phòng trọ</span></li>
                                    <li vl="50"><span>Văn phòng</span></li>
                                    <li vl="55"><span>Cửa hàng, ki ốt</span></li>
                                    <li vl="53"><span class="active">Kho, nhà xưởng, đất</span></li>
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
                        <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                        <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                categoryId: 53,
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
    <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat" level="1" title="Cho thuê kho, nhà xưởng, đất tại Việt Nam">Cho thuê</a><span>/</span><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat" level="2" title="Cho thuê kho, nhà xưởng, đất tại Việt Nam">Kho, nhà xưởng, đất trên toàn quốc</a>
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
        {"@context":"https://schema.org/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Trang chủ","item":"https://batdongsan.com.vn"},{"@type":"ListItem","position":2,"name":"Cho thuê","item":"https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat"},{"@type":"ListItem","position":3,"name":"Kho, nhà xưởng, đất trên toàn quốc","item":"https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat"}]}
    </script>

<div class="product-list-header pad-top-8">
    <h1>Cho thuê kho, nhà xưởng, đất tại Việt Nam</h1>
        <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">2,485</span> bất động sản.</div>
    

</div>
    <div class="product-search-most mar-top-8 mar-bot-8">
        <div class="box-title">Các khu vực, địa điểm nổi bật</div>
        <ul class="clearfix link-hover-blue">
                <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-go-vap">Cho thuê kho xưởng Gò Vấp </a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-thuan-an-bd">Cho thuê kho xưởng Thuận An</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-di-an-bd">Cho thuê kho xưởng Dĩ An</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-thanh-xuan">Cho thuê kho xưởng Thanh Xuân</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-long-bien">Cho thuê kho xưởng Long Biên</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-thu-dau-mot-bd">Cho thuê kho xưởng Thủ Dầu Một</a></li>
        </ul>
    </div>

    <div class="product-nav-bar pad-top-8 clearfix">
        <ul class="ul-tab fl mar-right-16">
            <li class="list-display actived">Danh sách</li>
            <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
            <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-cho-thue-kho-nha-xuong-dat">Bản đồ</a></li>
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
            <div class="vip0 product-item clearfix" uid="1360826">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-tan-uyen-bd/cho-canh-kcn-nam-dien-tich-10000m2-gia-chi-65k-m2-pr27698805" title="Cho thuê nhà xưởng Tân Uyên, cạnh KCN Nam Tân Uyên. Diện tích 10000m2, giá chỉ 65k/m2" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà xưởng Tân Uyên, cạnh KCN Nam Tân Uyên. Diện tích 10000m2, giá chỉ 65k/m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201107094739-cdf6_wm.jpg" is-lazy-image="true" lazy-id="0">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">17</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-tan-uyen-bd/cho-canh-kcn-nam-dien-tich-10000m2-gia-chi-65k-m2-pr27698805" title="Cho thuê nhà xưởng Tân Uyên, cạnh KCN Nam Tân Uyên. Diện tích 10000m2, giá chỉ 65k/m2" class="vipZero product-link">
                            CHO THUÊ NHÀ XƯỞNG TÂN UYÊN, CẠNH KCN NAM TÂN UYÊN. DIỆN TÍCH 10000M2, GIÁ CHỈ 65K/M2
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">65 nghìn/m²/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">10000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tân Uyên, Bình Dương</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nhà xưởng Tân Uyên, Bình Dương. Vị trí sát bên cạnh KCN Nam Tân Uyên. Diện tích xưởng 10.000m2. Khuôn viên riêng biệt 18.000m2. PCCC tự động. Trạm điện 630kva (2 trạm x 630kva). Xưởng mới xâ
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
                                <i class="iconSave" data-productid="27698805" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; xưởng T&amp;#226;n Uy&amp;#234;n, cạnh KCN Nam T&amp;#226;n Uy&amp;#234;n. Diện t&amp;#237;ch 10000m2, gi&amp;#225; chỉ 65k/m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/07/20201107094739-cdf6_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/07/20201107094739-cdf6_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà xưởng Tân Uyên, cạnh KCN Nam Tân Uyên. Diện tích 10000m2, giá chỉ 65k/m2" data-price="65 nghìn/m²/tháng" data-area="10000 m²" data-pricesort="650000000" data-areasort="10000" data-room="0" data-toilets="0" data-address="Tân Uyên, Bình Dương" data-description="Cho thuê nhà xưởng Tân Uyên, Bình Dương. Vị trí sát bên cạnh KCN Nam Tân Uyên. Diện tích xưởng 10.000m2. Khuôn viên riêng biệt 18.000m2. PCCC tự động. Trạm điện 630kva (2 trạm x 630kva). Xưởng mới xâ" data-duration="6 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 07:47:39" data-contactname="Nguyễn Quang Huấn" data-contactmobile="0911291671" data-url="/cho-thue-kho-nha-xuong-dat-tan-uyen-bd/cho-canh-kcn-nam-dien-tich-10000m2-gia-chi-65k-m2-pr27698805" data-totalmedia="17" data-createbyuser="1360826"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1040086">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-hoan-son-xa-hoan-son-prj-kcn-dai-dong-hoan-son/cho-moi-1000-2000-3000-5000-m2-tai-tien-du-bac-ninh-pr27772698" title="Cho thuê xưởng mới 1000, 2000, 3000, 5000m2 tại KCN Đại Đồng - Hoàn Sơn, Tiên Du, Bắc Ninh" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê xưởng mới 1000, 2000, 3000, 5000m2 tại KCN Đại Đồng - Hoàn Sơn, Tiên Du, Bắc Ninh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201112210240-c3bc_wm.jpg" is-lazy-image="true" lazy-id="1">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">7</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-hoan-son-xa-hoan-son-prj-kcn-dai-dong-hoan-son/cho-moi-1000-2000-3000-5000-m2-tai-tien-du-bac-ninh-pr27772698" title="Cho thuê xưởng mới 1000, 2000, 3000, 5000m2 tại KCN Đại Đồng - Hoàn Sơn, Tiên Du, Bắc Ninh" class="vipOne product-link">
                            CHO THUÊ XƯỞNG MỚI 1000, 2000, 3000, 5000M2 TẠI KCN ĐẠI ĐỒNG - HOÀN SƠN, TIÊN DU, BẮC NINH
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">80 nghìn/m²/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">1700 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tiên Du, Bắc Ninh</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nhà xưởng tại KCN Đại Đồng - Hoàn Sơn Bắc Ninh giá rẻ nhất thị trường, diện tích đa dạng 1000m2, 2000m2,... 5000m2 có thể nhận xưởng ngay, nhà xưởng mới thiết kế hiện đại thuận tiện cho việc
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
                                <i class="iconSave" data-productid="27772698" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; xưởng mới 1000, 2000, 3000, 5000m2 tại KCN Đại Đồng - Ho&amp;#224;n Sơn, Ti&amp;#234;n Du, Bắc Ninh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112210240-c3bc_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112210240-c3bc_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê xưởng mới 1000, 2000, 3000, 5000m2 tại KCN Đại Đồng - Hoàn Sơn, Tiên Du, Bắc Ninh" data-price="80 nghìn/m²/tháng" data-area="1700 m²" data-pricesort="136000000" data-areasort="1700" data-room="0" data-toilets="0" data-address="Tiên Du, Bắc Ninh" data-description="Cho thuê nhà xưởng tại KCN Đại Đồng - Hoàn Sơn Bắc Ninh giá rẻ nhất thị trường, diện tích đa dạng 1000m2, 2000m2,... 5000m2 có thể nhận xưởng ngay, nhà xưởng mới thiết kế hiện đại thuận tiện cho việc" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:41:42" data-contactname="Nguyen Truong" data-contactmobile="0986653488" data-url="/cho-thue-kho-nha-xuong-dat-duong-hoan-son-xa-hoan-son-prj-kcn-dai-dong-hoan-son/cho-moi-1000-2000-3000-5000-m2-tai-tien-du-bac-ninh-pr27772698" data-totalmedia="7" data-createbyuser="1040086"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="489751">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-phuong-binh-chuan/cong-ty-huyen-vinh-chuyen-cho-mua-ban-du-dien-tich-thuan-an-duong-pr24370197" title="Công ty Huyền Vinh chuyên cho thuê, mua bán nhà xưởng đủ diện tích Bình Chuẩn, Thuận An, Bình Dương" onclick="">
                        <img class="product-avatar-img" alt="Công ty Huyền Vinh chuyên cho thuê, mua bán nhà xưởng đủ diện tích Bình Chuẩn, Thuận An, Bình Dương" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/02/14/ez3djUsr/20200214134542-9a04_wm.jpg" is-lazy-image="true" lazy-id="2">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">13</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-phuong-binh-chuan/cong-ty-huyen-vinh-chuyen-cho-mua-ban-du-dien-tich-thuan-an-duong-pr24370197" title="Công ty Huyền Vinh chuyên cho thuê, mua bán nhà xưởng đủ diện tích Bình Chuẩn, Thuận An, Bình Dương" class="vipOne product-link">
                            CÔNG TY HUYỀN VINH CHUYÊN CHO THUÊ, MUA BÁN NHÀ XƯỞNG ĐỦ DIỆN TÍCH BÌNH CHUẨN, THUẬN AN, BÌNH DƯƠNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">600 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thuận An, Bình Dương</span>
                    </div>
                    <div class="product-content">
                        Công ty Huyền Vinh chuyên cho thuê mua bán nhà xưởng đủ diện tích Từ 600m2-10000m2 tại Bình Chuẩn, Thuận An, Bình Dương. Sản xuất đa ngành nghề, cho thuê mua bán sản xuất đa ngành nghề. Liên hệ: Quan
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
                                <i class="iconSave" data-productid="24370197" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;C&amp;#244;ng ty Huyền Vinh chuy&amp;#234;n cho thu&amp;#234;, mua b&amp;#225;n nh&amp;#224; xưởng đủ diện t&amp;#237;ch B&amp;#236;nh Chuẩn, Thuận An, B&amp;#236;nh Dương&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/02/14/ez3djUsr/20200214134542-9a04_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/02/14/ez3djUsr/20200214134542-9a04_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Công ty Huyền Vinh chuyên cho thuê, mua bán nhà xưởng đủ diện tích Bình Chuẩn, Thuận An, Bình Dương" data-price="Giá thỏa thuận" data-area="600 m²" data-pricesort="0" data-areasort="600" data-room="0" data-toilets="0" data-address="Thuận An, Bình Dương" data-description="Công ty Huyền Vinh chuyên cho thuê mua bán nhà xưởng đủ diện tích Từ 600m2-10000m2 tại Bình Chuẩn, Thuận An, Bình Dương. Sản xuất đa ngành nghề, cho thuê mua bán sản xuất đa ngành nghề. Liên hệ: Quan" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 15:07:29" data-contactname="Quang Hà" data-contactmobile="0978061945" data-url="/cho-thue-kho-nha-xuong-dat-phuong-binh-chuan/cong-ty-huyen-vinh-chuyen-cho-mua-ban-du-dien-tich-thuan-an-duong-pr24370197" data-totalmedia="13" data-createbyuser="489751"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="111189">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-huynh-tan-phat-phuong-tan-hung-14/cho-quan-7-gia-re-lh-ngay-0913-109-865-chi-nhung-pr26703667" title="Cho thuê kho Quận 7, giá rẻ. LH ngay: 0913.109.865 Chị Tuyền" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê kho Quận 7, giá rẻ. LH ngay: 0913.109.865 Chị Tuyền" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/18/FpeEZA5u/20200818110920-c50d_wm.jpg" is-lazy-image="true" lazy-id="3">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">2</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-huynh-tan-phat-phuong-tan-hung-14/cho-quan-7-gia-re-lh-ngay-0913-109-865-chi-nhung-pr26703667" title="Cho thuê kho Quận 7, giá rẻ. LH ngay: 0913.109.*** Chị Tuyền" class="vipOne product-link" style="overflow: visible;">
                            CHO THUÊ KHO QUẬN 7, GIÁ RẺ. LH NGAY: <span class="hidden-mobile m-on-title" raw="0913.109.865">0913.109.***</span> CHỊ TUYỀN
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">90 nghìn/m²/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">1000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 7, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Cho thuê kho xưởng khu Nam Long, Huỳnh Tấn Phát, Trần Xuân Soạn, Quận 7. Có nhiều diện tích từ: 200m2 – 360m2 - 400m2- 500m2 - 1000m2 - 2000m2.... Giá từ 90.000đ/m2/tháng - 120.000đ/m2/tháng. Thời gi
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
                                <i class="iconSave" data-productid="26703667" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; kho Quận 7, gi&amp;#225; rẻ. LH ngay: 0913.109.865 Chị Tuyền&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/08/18/FpeEZA5u/20200818110920-c50d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/08/18/FpeEZA5u/20200818110920-c50d_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê kho Quận 7, giá rẻ. LH ngay: 0913.109.865 Chị Tuyền" data-price="90 nghìn/m²/tháng" data-area="1000 m²" data-pricesort="90000000" data-areasort="1000" data-room="0" data-toilets="0" data-address="Quận 7, Hồ Chí Minh" data-description="Cho thuê kho xưởng khu Nam Long, Huỳnh Tấn Phát, Trần Xuân Soạn, Quận 7. Có nhiều diện tích từ: 200m2 – 360m2 - 400m2- 500m2 - 1000m2 - 2000m2.... Giá từ 90.000đ/m2/tháng - 120.000đ/m2/tháng. Thời gi" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 13:50:00" data-contactname="Lê Thị Thanh Tuyền" data-contactmobile="0913109865" data-url="/cho-thue-kho-nha-xuong-dat-duong-huynh-tan-phat-phuong-tan-hung-14/cho-quan-7-gia-re-lh-ngay-0913-109-865-chi-nhung-pr26703667" data-totalmedia="2" data-createbyuser="111189"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1132132">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-ben-luc-la/-moi-kcn-xuyen-a-dt-1500m2-hop-nhieu-nghanh-nghe-gia-100-trieu-pr27310442" title="Cho thuê kho - xưởng tỉnh Long An, DT từ: 500m2 - 16.000m2" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê kho - xưởng tỉnh Long An, DT từ: 500m2 - 16.000m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/06/20201006164822-6557_wm.jpg" is-lazy-image="true" lazy-id="4">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-ben-luc-la/-moi-kcn-xuyen-a-dt-1500m2-hop-nhieu-nghanh-nghe-gia-100-trieu-pr27310442" title="Cho thuê kho - xưởng tỉnh Long An, DT từ: 500m2 - 16.000m2" class="vipOne product-link">
                            CHO THUÊ KHO - XƯỞNG TỈNH LONG AN, DT TỪ: 500M2 - 16.000M2
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">100 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">2000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bến Lức, Long An</span>
                    </div>
                    <div class="product-content">
                        Cần cho thuê kho xưởng trong và ngoài KCN - Tỉnh Long An. + Nằm dọc các trục đường chính: Tỉnh Lộ 825, Tỉnh Lộ 824, Tỉnh lộ 823, Quốc Lộ 1A, Nguyễn Hữu Trí, Tỉnh Lộ 830. Thuộc huyện Bến Lức, tỉnh Lon
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
                                <i class="iconSave" data-productid="27310442" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; kho - xưởng tỉnh Long An, DT từ: 500m2 - 16.000m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/06/20201006164822-6557_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/06/20201006164822-6557_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê kho - xưởng tỉnh Long An, DT từ: 500m2 - 16.000m2" data-price="100 triệu/tháng" data-area="2000 m²" data-pricesort="100000000" data-areasort="2000" data-room="0" data-toilets="0" data-address="Bến Lức, Long An" data-description="Cần cho thuê kho xưởng trong và ngoài KCN - Tỉnh Long An. + Nằm dọc các trục đường chính: Tỉnh Lộ 825, Tỉnh Lộ 824, Tỉnh lộ 823, Quốc Lộ 1A, Nguyễn Hữu Trí, Tỉnh Lộ 830. Thuộc huyện Bến Lức, tỉnh Lon" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 07:40:38" data-contactname="Nguyễn Phước Ấm" data-contactmobile="0903179346" data-url="/cho-thue-kho-nha-xuong-dat-ben-luc-la/-moi-kcn-xuyen-a-dt-1500m2-hop-nhieu-nghanh-nghe-gia-100-trieu-pr27310442" data-totalmedia="1" data-createbyuser="1132132"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="77226">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duc-hoa-la/cho-san-xuat-trong-khu-cong-nghiep-tinh-long-an-dt-2000m2-den-80-000m2-lh-0933781138-pr17879911" title="Cho thuê kho xưởng sản xuất trong khu công nghiệp tỉnh Long An DT 2000m2 đến 80.000m2, 0933781138" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê kho xưởng sản xuất trong khu công nghiệp tỉnh Long An DT 2000m2 đến 80.000m2, 0933781138" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="5">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duc-hoa-la/cho-san-xuat-trong-khu-cong-nghiep-tinh-long-an-dt-2000m2-den-80-000m2-lh-0933781138-pr17879911" title="Cho thuê kho xưởng sản xuất trong khu công nghiệp tỉnh Long An DT 2000m2 đến 80.000m2, 0933781***" class="vipOne product-link" style="overflow: visible;">
                            CHO THUÊ KHO XƯỞNG SẢN XUẤT TRONG KHU CÔNG NGHIỆP TỈNH LONG AN DT 2000M2 ĐẾN 80.000M2, <span class="hidden-mobile m-on-title" raw="0933781138">0933781***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">605.8 nghìn/m²/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">80000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Đức Hòa, Long An</span>
                    </div>
                    <div class="product-content">
                        Cho thuê và bán kho xưởng trong KCN Long An. TDT 80.000m2 DT xây dựng mỗi kho là 6200m2 62x100. Xưởng xây mới 100% có đầy đủ VP điện 3F. PCCC tự động. 6200m2 xưởng 1 bàn giao trong tháng 10/2018 xưởn
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
                                <i class="iconSave" data-productid="17879911" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; kho xưởng sản xuất trong khu c&amp;#244;ng nghiệp tỉnh Long An DT 2000m2 đến 80.000m2, 0933781138&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê kho xưởng sản xuất trong khu công nghiệp tỉnh Long An DT 2000m2 đến 80.000m2, 0933781138" data-price="605.8 nghìn/m²/tháng" data-area="80000 m²" data-pricesort="48464000000" data-areasort="80000" data-room="0" data-toilets="0" data-address="Đức Hòa, Long An" data-description="Cho thuê và bán kho xưởng trong KCN Long An. TDT 80.000m2 DT xây dựng mỗi kho là 6200m2 62x100. Xưởng xây mới 100% có đầy đủ VP điện 3F. PCCC tự động. 6200m2 xưởng 1 bàn giao trong tháng 10/2018 xưởn" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 12:51:24" data-contactname="Phan Thanh Bình" data-contactmobile="0933781138" data-url="/cho-thue-kho-nha-xuong-dat-duc-hoa-la/cho-san-xuat-trong-khu-cong-nghiep-tinh-long-an-dt-2000m2-den-80-000m2-lh-0933781138-pr17879911" data-totalmedia="0" data-createbyuser="77226"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="909575">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-k1-phuong-thanh-my-loi/can-cho-tieu-chuan-cao-tu-11000-15000-m2-tai-kcn-cat-lai-quan-2-pr27747401" title="Cần cho thuê kho tiêu chuẩn cao từ 11000 - 15000 m2 tại KCN Cát Lái - Quận 2" onclick="">
                        <img class="product-avatar-img" alt="Cần cho thuê kho tiêu chuẩn cao từ 11000 - 15000 m2 tại KCN Cát Lái - Quận 2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111092055-4b3e_wm.jpg" is-lazy-image="true" lazy-id="6">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-k1-phuong-thanh-my-loi/can-cho-tieu-chuan-cao-tu-11000-15000-m2-tai-kcn-cat-lai-quan-2-pr27747401" title="Cần cho thuê kho tiêu chuẩn cao từ 11000 - 15000 m2 tại KCN Cát Lái - Quận 2" class="vipOne product-link">
                            CẦN CHO THUÊ KHO TIÊU CHUẨN CAO TỪ 11000 - 15000 M2 TẠI KCN CÁT LÁI - QUẬN 2
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">116.35 nghìn/m²/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">50000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        - Cần cho thuê kho tại Khu Công Nghiệp Cát Lái Giai đoạn 2, thuận tiện phát triển các ngành về cầu cảng, xuất nhập khẩu, vận chuyển và đặc biệt là Logistic. - Công ty TNHH Xây Dựng và Thương Mại Tân 
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
                                <i class="iconSave" data-productid="27747401" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần cho thu&amp;#234; kho ti&amp;#234;u chuẩn cao từ 11000 - 15000 m2 tại KCN C&amp;#225;t L&amp;#225;i - Quận 2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111092055-4b3e_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111092055-4b3e_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần cho thuê kho tiêu chuẩn cao từ 11000 - 15000 m2 tại KCN Cát Lái - Quận 2" data-price="116.35 nghìn/m²/tháng" data-area="50000 m²" data-pricesort="5817500000" data-areasort="50000" data-room="0" data-toilets="0" data-address="Quận 2, Hồ Chí Minh" data-description="- Cần cho thuê kho tại Khu Công Nghiệp Cát Lái Giai đoạn 2, thuận tiện phát triển các ngành về cầu cảng, xuất nhập khẩu, vận chuyển và đặc biệt là Logistic. - Công ty TNHH Xây Dựng và Thương Mại Tân " data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 10:38:43" data-contactname="Trần Quang Nhựt" data-contactmobile="0936605414" data-url="/cho-thue-kho-nha-xuong-dat-duong-k1-phuong-thanh-my-loi/can-cho-tieu-chuan-cao-tu-11000-15000-m2-tai-kcn-cat-lai-quan-2-pr27747401" data-totalmedia="3" data-createbyuser="909575"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="430068">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-phuong-ha-cau/chinh-chu-can-cho-gan-uy-ban-quan-dong-lien-he-0987451888-pr27502560" title="Chính chủ cần cho thuê kho, nhà xưởng gần ủy ban quận Hà Đông. Liên hệ 0987451888" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần cho thuê kho, nhà xưởng gần ủy ban quận Hà Đông. Liên hệ 0987451888" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="7">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-phuong-ha-cau/chinh-chu-can-cho-gan-uy-ban-quan-dong-lien-he-0987451888-pr27502560" title="Chính chủ cần cho thuê kho, nhà xưởng gần ủy ban quận Hà Đông. Liên hệ 0987451***" class="vipOne product-link" style="overflow: visible;">
                            CHÍNH CHỦ CẦN CHO THUÊ KHO, NHÀ XƯỞNG GẦN ỦY BAN QUẬN HÀ ĐÔNG. LIÊN HỆ <span class="hidden-mobile m-on-title" raw="0987451888">0987451***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">70 nghìn/m²/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">600 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hà Đông, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Cho thuê kho xưởng tại Hà Đông, Hà Nội. Vị trí Gần ủy ban quận Hà Đông. Diện tích: 150m2 đến 600m2. Nhà xưởng được thiết kế thông thoáng, sạch sẽ, nằm trong khu an ninh tốt, giao thông thuận tiện, xe
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
                                <i class="iconSave" data-productid="27502560" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần cho thu&amp;#234; kho, nh&amp;#224; xưởng gần ủy ban quận H&amp;#224; Đ&amp;#244;ng. Li&amp;#234;n hệ 0987451888&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần cho thuê kho, nhà xưởng gần ủy ban quận Hà Đông. Liên hệ 0987451888" data-price="70 nghìn/m²/tháng" data-area="600 m²" data-pricesort="42000000" data-areasort="600" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="Cho thuê kho xưởng tại Hà Đông, Hà Nội. Vị trí Gần ủy ban quận Hà Đông. Diện tích: 150m2 đến 600m2. Nhà xưởng được thiết kế thông thoáng, sạch sẽ, nằm trong khu an ninh tốt, giao thông thuận tiện, xe" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 16:53:47" data-contactname="Hoàng Phát" data-contactmobile="0987451888" data-url="/cho-thue-kho-nha-xuong-dat-phuong-ha-cau/chinh-chu-can-cho-gan-uy-ban-quan-dong-lien-he-0987451888-pr27502560" data-totalmedia="0" data-createbyuser="430068"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="430068">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-xa-lai-yen/cho-gap-2000m2-gan-khu-do-thi-bac-an-khanh-splendora-ngay-cau-vuot-an-khanh-pr27502800" title="Cho thuê gấp kho xưởng 2000m2 gần khu đô thị Bắc An Khánh (Splendora). Ngay cầu vượt An Khánh" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê gấp kho xưởng 2000m2 gần khu đô thị Bắc An Khánh (Splendora). Ngay cầu vượt An Khánh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="8">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-xa-lai-yen/cho-gap-2000m2-gan-khu-do-thi-bac-an-khanh-splendora-ngay-cau-vuot-an-khanh-pr27502800" title="Cho thuê gấp kho xưởng 2000m2 gần khu đô thị Bắc An Khánh (Splendora). Ngay cầu vượt An Khánh" class="vipOne product-link">
                            CHO THUÊ GẤP KHO XƯỞNG 2000M2 GẦN KHU ĐÔ THỊ BẮC AN KHÁNH (SPLENDORA). NGAY CẦU VƯỢT AN KHÁNH
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">70 nghìn/m²/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">2000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hoài Đức, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Cho thuê kho xưởng tại Lại Yên, Hoài Đức, Hà Nội. Nằm trong cụm công nghiệp, gần Khu đô thị Bắc An Khánh (Splendora), Huyện Hoài Đức Hà Nội. Vị trí gần cầu vượt An Khánh. Đường dẫn vào xưởng rộng tho
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
                                <i class="iconSave" data-productid="27502800" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; gấp kho xưởng 2000m2 gần khu đ&amp;#244; thị Bắc An Kh&amp;#225;nh (Splendora). Ngay cầu vượt An Kh&amp;#225;nh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê gấp kho xưởng 2000m2 gần khu đô thị Bắc An Khánh (Splendora). Ngay cầu vượt An Khánh" data-price="70 nghìn/m²/tháng" data-area="2000 m²" data-pricesort="140000000" data-areasort="2000" data-room="0" data-toilets="0" data-address="Hoài Đức, Hà Nội" data-description="Cho thuê kho xưởng tại Lại Yên, Hoài Đức, Hà Nội. Nằm trong cụm công nghiệp, gần Khu đô thị Bắc An Khánh (Splendora), Huyện Hoài Đức Hà Nội. Vị trí gần cầu vượt An Khánh. Đường dẫn vào xưởng rộng tho" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 16:53:37" data-contactname="Hoàng Phát" data-contactmobile="0987451888" data-url="/cho-thue-kho-nha-xuong-dat-xa-lai-yen/cho-gap-2000m2-gan-khu-do-thi-bac-an-khanh-splendora-ngay-cau-vuot-an-khanh-pr27502800" data-totalmedia="0" data-createbyuser="430068"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="395720">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-phuong-thuan-giao/can-cho-5-moi-100-gan-kcn-vsip-1-an-binh-duong-lh-0938999978-pr17102181" title="Cần cho thuê 5 nhà xưởng mới 100% gần KCN VSIP 1 Thuận An, Bình Dương. LH 0938999978" onclick="">
                        <img class="product-avatar-img" alt="Cần cho thuê 5 nhà xưởng mới 100% gần KCN VSIP 1 Thuận An, Bình Dương. LH 0938999978" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2018/08/04/Tan3b7Cw/20180804144059-ab7f.jpg" is-lazy-image="true" lazy-id="9">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-phuong-thuan-giao/can-cho-5-moi-100-gan-kcn-vsip-1-an-binh-duong-lh-0938999978-pr17102181" title="Cần cho thuê 5 nhà xưởng mới 100% gần KCN VSIP 1 Thuận An, Bình Dương. LH 0938999***" class="vipOne product-link" style="overflow: visible;">
                            CẦN CHO THUÊ 5 NHÀ XƯỞNG MỚI 100% GẦN KCN VSIP 1 THUẬN AN, BÌNH DƯƠNG. LH <span class="hidden-mobile m-on-title" raw="0938999978">0938999***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">60 nghìn/m²/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">3000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thuận An, Bình Dương</span>
                    </div>
                    <div class="product-content">
                        Kho xưởng phù hợp cho nhiều ngành nghề mới 100%. Diện tích: 2.000m2 - 3.000m2 - 5.000m2 - 8.000m2. Hệ thống hạ tầng đầy đủ, đường nhựa 20m xe tải ra vào dễ dàng. Nằm gần KCN thuận tiện cho việc di ch
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
                                <i class="iconSave" data-productid="17102181" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần cho thu&amp;#234; 5 nh&amp;#224; xưởng mới 100% gần KCN VSIP 1 Thuận An, B&amp;#236;nh Dương. LH 0938999978&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2018/08/04/Tan3b7Cw/20180804144059-ab7f.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2018/08/04/Tan3b7Cw/20180804144059-ab7f.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần cho thuê 5 nhà xưởng mới 100% gần KCN VSIP 1 Thuận An, Bình Dương. LH 0938999978" data-price="60 nghìn/m²/tháng" data-area="3000 m²" data-pricesort="180000000" data-areasort="3000" data-room="0" data-toilets="0" data-address="Thuận An, Bình Dương" data-description="Kho xưởng phù hợp cho nhiều ngành nghề mới 100%. Diện tích: 2.000m2 - 3.000m2 - 5.000m2 - 8.000m2. Hệ thống hạ tầng đầy đủ, đường nhựa 20m xe tải ra vào dễ dàng. Nằm gần KCN thuận tiện cho việc di ch" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 15:45:52" data-contactname="Dịch Vụ Hoàn Hảo" data-contactmobile="0938999978" data-url="/cho-thue-kho-nha-xuong-dat-phuong-thuan-giao/can-cho-5-moi-100-gan-kcn-vsip-1-an-binh-duong-lh-0938999978-pr17102181" data-totalmedia="1" data-createbyuser="395720"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1506567">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-xa-long-dinh-1/can-cho-dai-han-tai-cang-thanh-tai-cum-cong-nghiep-lh-0913718077-pr27734223" title="Cần cho thuê dài hạn nhà xưởng tại Cảng Thành Tài: cụm công nghiệp Long Định - lh 0913718077" onclick="">
                        <img class="product-avatar-img" alt="Cần cho thuê dài hạn nhà xưởng tại Cảng Thành Tài: cụm công nghiệp Long Định - lh 0913718077" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/tGeAfAMv/20201110104744-07da_wm.jpg" is-lazy-image="true" lazy-id="10">
                    </a>
                    <span class="product-feature">
                                                                            <img src="./assets/image/ic_video.svg">
                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-xa-long-dinh-1/can-cho-dai-han-tai-cang-thanh-tai-cum-cong-nghiep-lh-0913718077-pr27734223" title="Cần cho thuê dài hạn nhà xưởng tại Cảng Thành Tài: cụm công nghiệp Long Định - lh 0913718***" class="vipOne product-link" style="overflow: visible;">
                            CẦN CHO THUÊ DÀI HẠN NHÀ XƯỞNG TẠI CẢNG THÀNH TÀI: CỤM CÔNG NGHIỆP LONG ĐỊNH - LH <span class="hidden-mobile m-on-title" raw="0913718077">0913718***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">6 triệu/m²/tháng</span>
                                                    <span class="dot">·</span>
                        <span class="location">Cần Đước, Long An</span>
                    </div>
                    <div class="product-content">
                        Cần cho thuê dài hạn nhà xưởng tại Cảng Thành Tài: cụm công nghiệp Long Định, Xã Long Định, huyện Cần Đước, tỉnh Long An.  - Tổng diện tích 3.400 m2, 6800 m2, 1200 m2.  - Khuôn viên rộng rãi, có sân 
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
                                <i class="iconSave" data-productid="27734223" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần cho thu&amp;#234; d&amp;#224;i hạn nh&amp;#224; xưởng tại Cảng Th&amp;#224;nh T&amp;#224;i: cụm c&amp;#244;ng nghiệp Long Định - lh 0913718077&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/tGeAfAMv/20201110104744-07da_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/tGeAfAMv/20201110104744-07da_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="true" data-title="Cần cho thuê dài hạn nhà xưởng tại Cảng Thành Tài: cụm công nghiệp Long Định - lh 0913718077" data-price="6 triệu/m²/tháng" data-area="Không xác định" data-pricesort="0" data-areasort="0" data-room="0" data-toilets="0" data-address="Cần Đước, Long An" data-description="Cần cho thuê dài hạn nhà xưởng tại Cảng Thành Tài: cụm công nghiệp Long Định, Xã Long Định, huyện Cần Đước, tỉnh Long An.  - Tổng diện tích 3.400 m2, 6800 m2, 1200 m2.  - Khuôn viên rộng rãi, có sân " data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 10:49:12" data-contactname="Chị Thơ" data-contactmobile="0913718077" data-url="/cho-thue-kho-nha-xuong-dat-xa-long-dinh-1/can-cho-dai-han-tai-cang-thanh-tai-cum-cong-nghiep-lh-0913718077-pr27734223" data-totalmedia="6" data-createbyuser="1506567"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="613918">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-2f-xa-vinh-loc-a-1/p-tu-de-tim-theo-cum-tu-cho-tim-kiem-cho-chu-hng-kcn-loc-pr25623489" title="Cho thuê kho chứa hàng, quản lý hàng hóa tại KCN Tân Bình, KCN Vĩnh Lộc, Hồ Chí Minh" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê kho chứa hàng, quản lý hàng hóa tại KCN Tân Bình, KCN Vĩnh Lộc, Hồ Chí Minh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/05/29/20200529085241-347a_wm.jpg" is-lazy-image="true" lazy-id="11">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-2f-xa-vinh-loc-a-1/p-tu-de-tim-theo-cum-tu-cho-tim-kiem-cho-chu-hng-kcn-loc-pr25623489" title="Cho thuê kho chứa hàng, quản lý hàng hóa tại KCN Tân Bình, KCN Vĩnh Lộc, Hồ Chí Minh" class="vipOne product-link">
                            CHO THUÊ KHO CHỨA HÀNG, QUẢN LÝ HÀNG HÓA TẠI KCN TÂN BÌNH, KCN VĨNH LỘC, HỒ CHÍ MINH
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">200 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bình Chánh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Cho thuê kho chứa hàng, quản lý hàng hóa tại KCN Tân Bình, KCN Vĩnh Lộc, Hồ Chí Minh. - Đường 2F, KCN Vĩnh Lộc, xã Vĩnh Lộc A, Bình Chánh. (Đối diện KCN Tân Bình). - Đường CN 13 KCN Tân Bình - Tân Ph
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
                                <i class="iconSave" data-productid="25623489" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; kho chứa h&amp;#224;ng, quản l&amp;#253; h&amp;#224;ng h&amp;#243;a tại KCN T&amp;#226;n B&amp;#236;nh, KCN Vĩnh Lộc, Hồ Ch&amp;#237; Minh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/05/29/20200529085241-347a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/05/29/20200529085241-347a_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê kho chứa hàng, quản lý hàng hóa tại KCN Tân Bình, KCN Vĩnh Lộc, Hồ Chí Minh" data-price="Giá thỏa thuận" data-area="200 m²" data-pricesort="0" data-areasort="200" data-room="0" data-toilets="0" data-address="Bình Chánh, Hồ Chí Minh" data-description="Cho thuê kho chứa hàng, quản lý hàng hóa tại KCN Tân Bình, KCN Vĩnh Lộc, Hồ Chí Minh. - Đường 2F, KCN Vĩnh Lộc, xã Vĩnh Lộc A, Bình Chánh. (Đối diện KCN Tân Bình). - Đường CN 13 KCN Tân Bình - Tân Ph" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 08:50:37" data-contactname="Thái" data-contactmobile="0915492212" data-url="/cho-thue-kho-nha-xuong-dat-duong-2f-xa-vinh-loc-a-1/p-tu-de-tim-theo-cum-tu-cho-tim-kiem-cho-chu-hng-kcn-loc-pr25623489" data-totalmedia="5" data-createbyuser="613918"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1160005">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-song-hanh-phuong-thao-dien/cho-tich-540m2-duoc-cap-phep-xay-7-tan-q2-pr27726832" title="Cho thuê đất diện tích 540m2 được cấp phép xây dựng 7 tầng đường Song Hành, Thảo Điền, Q2" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê đất diện tích 540m2 được cấp phép xây dựng 7 tầng đường Song Hành, Thảo Điền, Q2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109180559-69da_wm.jpg" is-lazy-image="true" lazy-id="12">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-song-hanh-phuong-thao-dien/cho-tich-540m2-duoc-cap-phep-xay-7-tan-q2-pr27726832" title="Cho thuê đất diện tích 540m2 được cấp phép xây dựng 7 tầng đường Song Hành, Thảo Điền, Q2" class="vipOne product-link">
                            CHO THUÊ ĐẤT DIỆN TÍCH 540M2 ĐƯỢC CẤP PHÉP XÂY DỰNG 7 TẦNG ĐƯỜNG SONG HÀNH, THẢO ĐIỀN, Q2
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">120 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">540 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Cho thuê 540m2 đất đường Song Hành, Thảo Điền, Q2. Đã được cấp phép xây dựng 7 tầng, vị trí thuận lợi xây dựng như tòa nhà văn phòng, căn hộ cao cấp, showroom, siêu thị, trường học quốc tế... Thời gi
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
                                <i class="iconSave" data-productid="27726832" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; đất diện t&amp;#237;ch 540m2 được cấp ph&amp;#233;p x&amp;#226;y dựng 7 tầng đường Song H&amp;#224;nh, Thảo Điền, Q2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109180559-69da_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109180559-69da_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê đất diện tích 540m2 được cấp phép xây dựng 7 tầng đường Song Hành, Thảo Điền, Q2" data-price="120 triệu/tháng" data-area="540 m²" data-pricesort="120000000" data-areasort="540" data-room="0" data-toilets="0" data-address="Quận 2, Hồ Chí Minh" data-description="Cho thuê 540m2 đất đường Song Hành, Thảo Điền, Q2. Đã được cấp phép xây dựng 7 tầng, vị trí thuận lợi xây dựng như tòa nhà văn phòng, căn hộ cao cấp, showroom, siêu thị, trường học quốc tế... Thời gi" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 18:08:38" data-contactname="Nguyễn Thành Chức" data-contactmobile="0909952877" data-url="/cho-thue-kho-nha-xuong-dat-duong-song-hanh-phuong-thao-dien/cho-tich-540m2-duoc-cap-phep-xay-7-tan-q2-pr27726832" data-totalmedia="5" data-createbyuser="1160005"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1281439">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-dan-di-thi-tran-dong-anh-1/cong-ty-chung-toi-co-cac-cho-dien-tich-da-dang-moi-lh-0913510081-pr27634140" title="Công ty chúng tôi có các kho xưởng cho thuê. Diện tích đa dạng, kho mới. LH 0913510081" onclick="">
                        <img class="product-avatar-img" alt="Công ty chúng tôi có các kho xưởng cho thuê. Diện tích đa dạng, kho mới. LH 0913510081" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/F5s5yBIs/20201102160822-28b7_wm.jpg" is-lazy-image="true" lazy-id="13">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-dan-di-thi-tran-dong-anh-1/cong-ty-chung-toi-co-cac-cho-dien-tich-da-dang-moi-lh-0913510081-pr27634140" title="Công ty chúng tôi có các kho xưởng cho thuê. Diện tích đa dạng, kho mới. LH 0913510***" class="vipOne product-link" style="overflow: visible;">
                            CÔNG TY CHÚNG TÔI CÓ CÁC KHO XƯỞNG CHO THUÊ. DIỆN TÍCH ĐA DẠNG, KHO MỚI. LH <span class="hidden-mobile m-on-title" raw="0913510081">0913510***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">2000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Đông Anh, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Công ty chúng tôi có các kho xưởng cho thuê. Diện tích 1000, 2000 và 3000m2. Kho mới xây, hiện đại đầy đủ điện nước, PCCC, cơ sở pháp lý ổn định lâu dài, giao thông thuận tiện xe container vào cửa, g
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
                                <i class="iconSave" data-productid="27634140" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;C&amp;#244;ng ty ch&amp;#250;ng t&amp;#244;i c&amp;#243; c&amp;#225;c kho xưởng cho thu&amp;#234;. Diện t&amp;#237;ch đa dạng, kho mới. LH 0913510081&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/F5s5yBIs/20201102160822-28b7_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/02/F5s5yBIs/20201102160822-28b7_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Công ty chúng tôi có các kho xưởng cho thuê. Diện tích đa dạng, kho mới. LH 0913510081" data-price="Giá thỏa thuận" data-area="2000 m²" data-pricesort="0" data-areasort="2000" data-room="0" data-toilets="0" data-address="Đông Anh, Hà Nội" data-description="Công ty chúng tôi có các kho xưởng cho thuê. Diện tích 1000, 2000 và 3000m2. Kho mới xây, hiện đại đầy đủ điện nước, PCCC, cơ sở pháp lý ổn định lâu dài, giao thông thuận tiện xe container vào cửa, g" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 16:17:58" data-contactname="Anh Cư" data-contactmobile="0913510081" data-url="/cho-thue-kho-nha-xuong-dat-duong-dan-di-thi-tran-dong-anh-1/cong-ty-chung-toi-co-cac-cho-dien-tich-da-dang-moi-lh-0913510081-pr27634140" data-totalmedia="1" data-createbyuser="1281439"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="816536">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-bung-co-xa-loc-an-3/cho-long-thanh-dt-500m2-mat-rong-xe-container-vao-duoc-lh-0946957867-hong-pr26074159" title="Cho thuê xưởng Long Thành. DT:500m2, Mặt đường rộng xe container vào được. LH: 0946957867 Hồng" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê xưởng Long Thành. DT:500m2, Mặt đường rộng xe container vào được. LH: 0946957867 Hồng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/24/5X71G0yZ/20200924173948-e33f_wm.jpg" is-lazy-image="true" lazy-id="14">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">2</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-bung-co-xa-loc-an-3/cho-long-thanh-dt-500m2-mat-rong-xe-container-vao-duoc-lh-0946957867-hong-pr26074159" title="Cho thuê xưởng Long Thành. DT:500m2, Mặt đường rộng xe container vào được. LH: 0946957*** Hồng" class="vipOne product-link" style="overflow: visible;">
                            CHO THUÊ XƯỞNG LONG THÀNH. DT:500M2, MẶT ĐƯỜNG RỘNG XE CONTAINER VÀO ĐƯỢC. LH: <span class="hidden-mobile m-on-title" raw="0946957867">0946957***</span> HỒNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">30 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">500 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Long Thành, Đồng Nai</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Cho thuê xưởng Ấp Bưng Cơ, Lộc An, Long Thành, Đồng Nai. Đường lớn, xe container vào được. Diện tích: 500 m2 (Hình ảnh thật) Giá thuê 30 triệu/1 tháng  Liên Hệ : <span class="hidden-mobile des" raw="0946957867">0946957***</span> Hồng
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
                                <i class="iconSave" data-productid="26074159" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; xưởng Long Th&amp;#224;nh. DT:500m2, Mặt đường rộng xe container v&amp;#224;o được. LH: 0946957867 Hồng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/24/5X71G0yZ/20200924173948-e33f_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/24/5X71G0yZ/20200924173948-e33f_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê xưởng Long Thành. DT:500m2, Mặt đường rộng xe container vào được. LH: 0946957867 Hồng" data-price="30 triệu/tháng" data-area="500 m²" data-pricesort="30000000" data-areasort="500" data-room="0" data-toilets="0" data-address="Long Thành, Đồng Nai" data-description="Cho thuê xưởng Ấp Bưng Cơ, Lộc An, Long Thành, Đồng Nai. Đường lớn, xe container vào được. Diện tích: 500 m2 (Hình ảnh thật) Giá thuê 30 triệu/1 tháng  Liên Hệ : 0946957867 Hồng" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 12:10:53" data-contactname="Phạm Hồng" data-contactmobile="0946957867" data-url="/cho-thue-kho-nha-xuong-dat-duong-bung-co-xa-loc-an-3/cho-long-thanh-dt-500m2-mat-rong-xe-container-vao-duoc-lh-0946957867-hong-pr26074159" data-totalmedia="2" data-createbyuser="816536"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 vipaddon product-item clearfix" uid="706867">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-duong-dinh-hoi-phuong-phuoc-long-b/quan-9-cho-3-dien-tich-100m2-200m2-240m2-pr27406991" title="Quận 9 cho thuê kho diện tích  200m2 " onclick="">
                        <img class="product-avatar-img" alt="Quận 9 cho thuê kho diện tích  200m2 " error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/14/20201014101447-8a4b_wm.jpg" is-lazy-image="true" lazy-id="15"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/14/20201014101447-3932_wm.jpg" is-lazy-image="true" lazy-id="16"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/14/20201014101447-9c31_wm.jpg" is-lazy-image="true" lazy-id="17">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-duong-dinh-hoi-phuong-phuoc-long-b/quan-9-cho-3-dien-tich-100m2-200m2-240m2-pr27406991" title="Quận 9 cho thuê kho diện tích  200m2 " class="vipOne product-link">
                            QUẬN 9 CHO THUÊ KHO DIỆN TÍCH  200M2 
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">16 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">200 m²</span>
                                                        <span class="dot">·</span>
                                <span class="toilet">1 WC</span>
                        <span class="location">Quận 9, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Cho thuê kho, chính chủ. * Thông tin kho như sau: - Diện tích: 8m*25m - 200m2. - Giá thuê: 16 tr/tháng. - Cho thuê lâu dài làm kho chứa hàng. - Đường xe container vào tới kho. - Địa chỉ: Dương Đình Hội - Phước Long B - Quận 9. - Tất cả các kho mới xây dựng. Có điện nước, WC đầy đủ, cửa cuốn, nền beton sạch sẽ. * Thông tin liên hệ: <span class="hidden-mobile des" raw="0937.969.179">0937.969.***</span> - Mr Thịnh -  Chính chủ cho thuê *
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                4 ngày trước
                                <span class="tooltip-time">09/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Đặng Sỹ Nguyên">
                                <span class="contact-name">Đặng Sỹ Nguyên</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0937969179" raw="0937969179">0937 969 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27406991" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Quận 9 cho thu&amp;#234; kho diện t&amp;#237;ch  200m2 &quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/14/20201014101447-8a4b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/14/20201014101447-3932_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/14/20201014101447-9c31_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/10/14/20201014101447-8a4b_wm.jpg" data-vipclass="vip1 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Quận 9 cho thuê kho diện tích  200m2 " data-price="16 triệu/tháng" data-area="200 m²" data-pricesort="16000000" data-areasort="200" data-room="0" data-toilets="1" data-address="Quận 9, Hồ Chí Minh" data-description="Cho thuê kho, chính chủ. * Thông tin kho như sau: - Diện tích: 8m*25m - 200m2. - Giá thuê: 16 tr/tháng. - Cho thuê lâu dài làm kho chứa hàng. - Đường xe container vào tới kho. - Địa chỉ: Dương Đình Hội - Phước Long B - Quận 9. - Tất cả các kho mới xây dựng. Có điện nước, WC đầy đủ, cửa cuốn, nền beton sạch sẽ. * Thông tin liên hệ: 0937.969.179 - Mr Thịnh -  Chính chủ cho thuê *" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 08:17:57" data-contactname="Đặng Sỹ Nguyên" data-contactmobile="0937969179" data-url="/cho-thue-kho-nha-xuong-dat-duong-duong-dinh-hoi-phuong-phuoc-long-b/quan-9-cho-3-dien-tich-100m2-200m2-240m2-pr27406991" data-totalmedia="3" data-createbyuser="706867"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1132132">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-dt-830-415/cong-ty-chuyen-cho-tinh-long-an-lh-0933-449-578-pr24932909" title="Công ty Nguyên Phước chuyên cho thuê kho xưởng trong và ngoài KCN tỉnh Long An" onclick="">
                        <img class="product-avatar-img" alt="Công ty Nguyên Phước chuyên cho thuê kho xưởng trong và ngoài KCN tỉnh Long An" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/01/20200601152226-2b03_wm.jpg" is-lazy-image="true" lazy-id="18">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-dt-830-415/cong-ty-chuyen-cho-tinh-long-an-lh-0933-449-578-pr24932909" title="Công ty Nguyên Phước chuyên cho thuê kho xưởng trong và ngoài KCN tỉnh Long An" class="vipOne product-link">
                            CÔNG TY NGUYÊN PHƯỚC CHUYÊN CHO THUÊ KHO XƯỞNG TRONG VÀ NGOÀI KCN TỈNH LONG AN
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">1000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bến Lức, Long An</span>
                    </div>
                    <div class="product-content">
                        Công ty chúng tôi có một số kho xưởng trong và ngoài KCN - Tỉnh Long An cần cho thuê. Kho xưởng xây dựng hiện đại theo tiêu chuẩn KCN. Giao thông thuận tiện container ra vào 24/24, nước máy, điện bìn
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
                                <i class="iconSave" data-productid="24932909" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;C&amp;#244;ng ty Nguy&amp;#234;n Phước chuy&amp;#234;n cho thu&amp;#234; kho xưởng trong v&amp;#224; ngo&amp;#224;i KCN tỉnh Long An&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/01/20200601152226-2b03_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/06/01/20200601152226-2b03_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Công ty Nguyên Phước chuyên cho thuê kho xưởng trong và ngoài KCN tỉnh Long An" data-price="Giá thỏa thuận" data-area="1000 m²" data-pricesort="0" data-areasort="1000" data-room="0" data-toilets="0" data-address="Bến Lức, Long An" data-description="Công ty chúng tôi có một số kho xưởng trong và ngoài KCN - Tỉnh Long An cần cho thuê. Kho xưởng xây dựng hiện đại theo tiêu chuẩn KCN. Giao thông thuận tiện container ra vào 24/24, nước máy, điện bìn" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 06:43:45" data-contactname="Nguyễn Phước Ấm" data-contactmobile="0961498812" data-url="/cho-thue-kho-nha-xuong-dat-duong-dt-830-415/cong-ty-chuyen-cho-tinh-long-an-lh-0933-449-578-pr24932909" data-totalmedia="1" data-createbyuser="1132132"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 vipaddon product-item clearfix" uid="760905">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-no-trang-long-phuong-12-7/cho-toan-bo-toa-lam-truong-hoc-van-phong-hoac-xuong-pr24717338" title="Cho thuê xưởng, kho, văn phòng tại 217/4 đường Nơ Trang Long, Q. Bình Thạnh" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê xưởng, kho, văn phòng tại 217/4 đường Nơ Trang Long, Q. Bình Thạnh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/26/ylnAN8oZ/20201026101733-d2ab_wm.jpg" is-lazy-image="true" lazy-id="19"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/26/ylnAN8oZ/20201026101639-bab3_wm.jpg" is-lazy-image="true" lazy-id="20"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/26/ylnAN8oZ/20201026101639-6e1b_wm.jpg" is-lazy-image="true" lazy-id="21">
                    </a>
                    <span class="product-feature">
                                                                            <img src="./assets/image/ic_video.svg">
                    </span>
                        <span class="product-media">7</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-no-trang-long-phuong-12-7/cho-toan-bo-toa-lam-truong-hoc-van-phong-hoac-xuong-pr24717338" title="Cho thuê xưởng, kho, văn phòng tại 217/4 đường Nơ Trang Long, Q. Bình Thạnh" class="vipOne product-link">
                            CHO THUÊ XƯỞNG, KHO, VĂN PHÒNG TẠI 217/4 ĐƯỜNG NƠ TRANG LONG, Q. BÌNH THẠNH
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">250 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">2750 m²</span>
                                                        <span class="dot">·</span>
                                <span class="toilet">15 WC</span>
                        <span class="location">Bình Thạnh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        cho thuê nhà xưởng &amp; văn phòng tại 217/2 đường Nơ Trang Long, P12, Quận Bình Thạnh, TP. HCM.  - Diện tích đất 800 mét vuông. Diện tích sàn xây dựng 2750 mét vuông. Bốn tầng, có thang máy, trạm hạ thế 560 KVA, có hệ thống phòng cháy chữa cháy đã được thẩm duyệt. Gần trục đường chính, ô tô tải vào được. Thích hợp làm trường học, làm kho, nhà xưởng và văn phòng.- Giá thuê toàn bộ 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                1 tuần trước
                                <span class="tooltip-time">05/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Lương Vĩnh Kim">
                                <span class="contact-name">Lương Vĩnh Kim</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0833505050" raw="0833505050">0833 505 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="24717338" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; xưởng, kho, văn ph&amp;#242;ng tại 217/4 đường Nơ Trang Long, Q. B&amp;#236;nh Thạnh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/26/ylnAN8oZ/20201026101733-d2ab_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/26/ylnAN8oZ/20201026101639-bab3_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/26/ylnAN8oZ/20201026101639-6e1b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/10/26/ylnAN8oZ/20201026101733-d2ab_wm.jpg" data-vipclass="vip1 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="true" data-title="Cho thuê xưởng, kho, văn phòng tại 217/4 đường Nơ Trang Long, Q. Bình Thạnh" data-price="250 triệu/tháng" data-area="2750 m²" data-pricesort="250000000" data-areasort="2750" data-room="0" data-toilets="15" data-address="Bình Thạnh, Hồ Chí Minh" data-description="cho thuê nhà xưởng &amp; văn phòng tại 217/2 đường Nơ Trang Long, P12, Quận Bình Thạnh, TP. HCM.  - Diện tích đất 800 mét vuông. Diện tích sàn xây dựng 2750 mét vuông. Bốn tầng, có thang máy, trạm hạ thế 560 KVA, có hệ thống phòng cháy chữa cháy đã được thẩm duyệt. Gần trục đường chính, ô tô tải vào được. Thích hợp làm trường học, làm kho, nhà xưởng và văn phòng.- Giá thuê toàn bộ " data-duration="1 tuần trước" data-updatedtime="05/11/2020" data-datesort="11/05/2020 14:47:03" data-contactname="Lương Vĩnh Kim" data-contactmobile="0833505050" data-url="/cho-thue-kho-nha-xuong-dat-duong-no-trang-long-phuong-12-7/cho-toan-bo-toa-lam-truong-hoc-van-phong-hoac-xuong-pr24717338" data-totalmedia="7" data-createbyuser="760905"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1383803">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-truong-chinh-phuong-tan-hung-thuan-1/-chu-can-cho-trong-72-quan-12-pr27649396" title="Chính chủ cần cho thuê đất trống, 72 Trường Chinh phường Tân Hưng Thuận, quận 12" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần cho thuê đất trống, 72 Trường Chinh phường Tân Hưng Thuận, quận 12" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/S7h4oM7n/20201103160506-4cbd_wm.jpg" is-lazy-image="true" lazy-id="22">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-duong-truong-chinh-phuong-tan-hung-thuan-1/-chu-can-cho-trong-72-quan-12-pr27649396" title="Chính chủ cần cho thuê đất trống, 72 Trường Chinh phường Tân Hưng Thuận, quận 12" class="vipOne product-link">
                            CHÍNH CHỦ CẦN CHO THUÊ ĐẤT TRỐNG, 72 TRƯỜNG CHINH PHƯỜNG TÂN HƯNG THUẬN, QUẬN 12
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">60 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">340 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 12, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cần cho thuê đất trống, 72 Trường Chinh, phường Tân Hưng Thuận, quận 12. Tổng diện tích 340 m2. Ngang 8, nở hậu 20. Dài 31,5. Thuận tiện cho việc mở kho xưởng, cửa nhà hàng, kinh doanh... G
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                1 tuần trước
                                <span class="tooltip-time">03/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27649396" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần cho thu&amp;#234; đất trống, 72 Trường Chinh phường T&amp;#226;n Hưng Thuận, quận 12&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/S7h4oM7n/20201103160506-4cbd_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/03/S7h4oM7n/20201103160506-4cbd_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần cho thuê đất trống, 72 Trường Chinh phường Tân Hưng Thuận, quận 12" data-price="60 triệu/tháng" data-area="340 m²" data-pricesort="60000000" data-areasort="340" data-room="0" data-toilets="0" data-address="Quận 12, Hồ Chí Minh" data-description="Chính chủ cần cho thuê đất trống, 72 Trường Chinh, phường Tân Hưng Thuận, quận 12. Tổng diện tích 340 m2. Ngang 8, nở hậu 20. Dài 31,5. Thuận tiện cho việc mở kho xưởng, cửa nhà hàng, kinh doanh... G" data-duration="1 tuần trước" data-updatedtime="03/11/2020" data-datesort="11/03/2020 16:18:08" data-contactname="Mỹ Anh" data-contactmobile="0973856707" data-url="/cho-thue-kho-nha-xuong-dat-duong-truong-chinh-phuong-tan-hung-thuan-1/-chu-can-cho-trong-72-quan-12-pr27649396" data-totalmedia="1" data-createbyuser="1383803"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1425518">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-xa-lac-hong/cho-moi-xay-kcn-pho-noi-a-hung-yen-dt-21-000m2-lh-0949-187-168-moi-xay-pr27101672" title="Cho thuê kho xưởng KCN Phố Nối A, Hưng Yên, DT 21.000m2, LH 0949.187.168 (kho chính chủ mới xây)" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê kho xưởng KCN Phố Nối A, Hưng Yên, DT 21.000m2, LH 0949.187.168 (kho chính chủ mới xây)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/19/rco9YpRi/20200919175226-1bec_wm.jpg" is-lazy-image="true" lazy-id="23">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-xa-lac-hong/cho-moi-xay-kcn-pho-noi-a-hung-yen-dt-21-000m2-lh-0949-187-168-moi-xay-pr27101672" title="Cho thuê kho xưởng KCN Phố Nối A, Hưng Yên, DT 21.000m2, LH 0949.187.*** (kho chính chủ mới xây)" class="vipOne product-link" style="overflow: visible;">
                            CHO THUÊ KHO XƯỞNG KCN PHỐ NỐI A, HƯNG YÊN, DT 21.000M2, LH <span class="hidden-mobile m-on-title" raw="0949.187.168">0949.187.***</span> (KHO CHÍNH CHỦ MỚI XÂY)
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">21 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Văn Lâm, Hưng Yên</span>
                    </div>
                    <div class="product-content">
                        Cho thuê kho KCN Phố Nối, cho thuê xưởng mới xây.* Vị trí: KCN Phố Nối A, Hưng Yên. DT: Khuôn viên 4ha, DT kho xưởng cho thuê: 21.000m2. DT các kho xưởng: 2000m2, 3000m2, 5000m2, 8000m2... 21000m2.- 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                1 tháng trước
                                <span class="tooltip-time">14/10/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27101672" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; kho xưởng KCN Phố Nối A, Hưng Y&amp;#234;n, DT 21.000m2, LH 0949.187.168 (kho ch&amp;#237;nh chủ mới x&amp;#226;y)&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/19/rco9YpRi/20200919175226-1bec_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/19/rco9YpRi/20200919175226-1bec_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê kho xưởng KCN Phố Nối A, Hưng Yên, DT 21.000m2, LH 0949.187.168 (kho chính chủ mới xây)" data-price="Giá thỏa thuận" data-area="21 m²" data-pricesort="0" data-areasort="21" data-room="0" data-toilets="0" data-address="Văn Lâm, Hưng Yên" data-description="Cho thuê kho KCN Phố Nối, cho thuê xưởng mới xây.* Vị trí: KCN Phố Nối A, Hưng Yên. DT: Khuôn viên 4ha, DT kho xưởng cho thuê: 21.000m2. DT các kho xưởng: 2000m2, 3000m2, 5000m2, 8000m2... 21000m2.- " data-duration="1 tháng trước" data-updatedtime="14/10/2020" data-datesort="10/14/2020 14:53:14" data-contactname="Công Ty Cp Logistics Npl" data-contactmobile="0949187168" data-url="/cho-thue-kho-nha-xuong-dat-xa-lac-hong/cho-moi-xay-kcn-pho-noi-a-hung-yen-dt-21-000m2-lh-0949-187-168-moi-xay-pr27101672" data-totalmedia="3" data-createbyuser="1425518"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-center">
            <div class="pagination">
<a pid="1" class="actived" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat">1</a>
<a pid="2" class="" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/p2">2</a>
<a pid="3" class="" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/p3">3</a>
<a pid="4" class="" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/p4">4</a>
<a pid="5" class="" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/p5">5</a>
<a pid="125" href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/p125"><img src="./assets/image/ic_double_caret_right.png"></a>
</div>

        </div>
    </div>






    <div class="divide">&nbsp;</div>
<div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Cho thuê xưởng giá rẻ" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-xuong-gia-re">Cho thuê xưởng giá rẻ</a></li>    <li><a title="Cho thuê kho giá rẻ" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-kho-gia-re">Cho thuê kho giá rẻ</a></li>    <li><a title="Cho thuê nhà xưởng chính chủ" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-xuong-chinh-chu">Cho thuê nhà xưởng chính chủ</a></li>    <li><a title="Cho thuê nhà xưởng giá rẻ" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-xuong-gia-re">Cho thuê nhà xưởng giá rẻ</a></li>    <li><a title="thuê nhà xưởng nhỏ" href="https://batdongsan.com.vn/tags/cho-thue/thue-nha-xuong-nho">thuê nhà xưởng nhỏ</a></li>    <li><a title="cho thuê kho xưởng giá rẻ" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-kho-xuong-gia-re">cho thuê kho xưởng giá rẻ</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
    <div class="product-seo-text">
        <div>Cho thuê kho, nhà xưởng, đất <strong>Việt Nam</strong></div>
                                <div>Các hoạt động kinh doanh ngày càng phát triển và mở rộng, vì thế thị trường cho thuê kho, nhà xưởng, đất nhận được sự quan tâm của nhiều người. Những vị trí <strong>cho thuê, nhà xưởng, đất Việt Nam</strong> chủ yếu không nằm ở khu vực trung tâm gây trở ngại cho việc tìm kiếm thông tin của khách hàng.</div>
                                <div><strong>Batdongsan.com.vn</strong> chính là giải pháp tối ưu khi bạn muốn cập nhật các thông tin mới nhất về cho thuê kho, nhà xưởng, đất Việt Nam. Đây là kênh thông tin uy tín, chính xác và chi tiết về tất cả các loại hình bán/cho thuê bất động sản trên thị trường.</div>
                                <div>Để tìm <strong>thuê kho, nhà xưởng, đất Việt Nam giá rẻ</strong>, phù hợp nhất bạn nên nắm được một số lưu ý sau đây:</div>
                                <ul>
                                <li>- Xem xét các yếu tố liên quan đến kho, xưởng, đất cần thuê như vị trí, diện tích, an ninh, an toàn trong khu vực, tình hình giao thông có thuận tiện hay không?...</li>
                                <li>- Lưu ý các điều khoản trong hợp đồng cho thuê, trong đó có giá thuê và các chi phí phát sinh liên quan khác.</li>
                                </ul>
    </div>
<form id="productListBinnova" method="post">
    <input id="hashAlias" type="hidden" value="d380c48ec5c559a0c0b3794187d20d13a12a3d97f6f825b440031e5c5f0e7c52">
</form>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
            var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                model: {
                    typeOfProduct: 49,
                    categoryId: 53,
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
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/-1/2/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam giá 1 - 3 triệu">1 - 3 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/-1/3/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam giá 3 - 5 triệu">3 - 5 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/-1/4/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam giá 5 - 10 triệu">5 - 10 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/-1/5/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam giá 10 - 40 triệu">10 - 40 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/-1/6/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam giá 40 - 70 triệu">40 - 70 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/-1/7/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam giá 70 - 100 triệu">70 - 100 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/-1/8/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam giá &gt; 100 triệu">&gt; 100 triệu</a></li>
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
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/1/-1/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/2/-1/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/3/-1/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/4/-1/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/5/-1/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/6/-1/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/7/-1/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/8/-1/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/9/-1/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat/10/-1/-1/-1" title="Cho thuê kho, nhà xưởng, đất Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
        <h2 class="box-title">Cho thuê kho, nhà xưởng, đất</h2>

        <div class="box-content link-hover-blue">
            <ul>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-tp-hcm" title="Cho thuê kho, nhà xưởng, đất tại Hồ Chí Minh">
                                Hồ Chí Minh (910)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-ha-noi" title="Cho thuê kho, nhà xưởng, đất tại Hà Nội">
                                Hà Nội (540)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-binh-duong" title="Cho thuê kho, nhà xưởng, đất tại Bình Dương">
                                Bình Dương (408)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-dong-nai" title="Cho thuê kho, nhà xưởng, đất tại Đồng Nai">
                                Đồng Nai (119)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-long-an" title="Cho thuê kho, nhà xưởng, đất tại Long An">
                                Long An (114)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-kon-tum" title="Cho thuê kho, nhà xưởng, đất tại Kon Tum">
                                Kon Tum (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-phu-yen" title="Cho thuê kho, nhà xưởng, đất tại Phú Yên">
                                Phú Yên (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-da-nang" title="Cho thuê kho, nhà xưởng, đất tại Đà Nẵng">
                                Đà Nẵng (52)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-hai-phong" title="Cho thuê kho, nhà xưởng, đất tại Hải Phòng">
                                Hải Phòng (72)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-hau-giang" title="Cho thuê kho, nhà xưởng, đất tại Hậu Giang">
                                Hậu Giang (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-lam-dong" title="Cho thuê kho, nhà xưởng, đất tại Lâm Đồng">
                                Lâm Đồng (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-tien-giang" title="Cho thuê kho, nhà xưởng, đất tại Tiền Giang">
                                Tiền Giang (8)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-ha-nam" title="Cho thuê kho, nhà xưởng, đất tại Hà Nam">
                                Hà Nam (7)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-quang-ngai" title="Cho thuê kho, nhà xưởng, đất tại Quảng Ngãi">
                                Quảng Ngãi (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-vinh-phuc" title="Cho thuê kho, nhà xưởng, đất tại Vĩnh Phúc">
                                Vĩnh Phúc (11)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-thanh-hoa" title="Cho thuê kho, nhà xưởng, đất tại Thanh Hóa">
                                Thanh Hóa (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-thai-nguyen" title="Cho thuê kho, nhà xưởng, đất tại Thái Nguyên">
                                Thái Nguyên (6)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-thai-binh" title="Cho thuê kho, nhà xưởng, đất tại Thái Bình">
                                Thái Bình (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-quang-ninh" title="Cho thuê kho, nhà xưởng, đất tại Quảng Ninh">
                                Quảng Ninh (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-dong-thap" title="Cho thuê kho, nhà xưởng, đất tại Đồng Tháp">
                                Đồng Tháp (3)
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
            