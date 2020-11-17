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
                <div class="custom-value hasvalue">Nhà mặt phố</div>
            </div>
            <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="51">
            <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                    <li vl="0"><span class="current">Tất cả nhà đất</span></li>
                                    <li vl="326"><span>Căn hộ chung cư</span></li>
                                    <li vl="52"><span>Nhà riêng</span></li>
                                    <li vl="51"><span class="active">Nhà mặt phố</span></li>
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
                        <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                        <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                categoryId: 51,
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
    <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho" level="1" title="Cho thuê nhà mặt phố tại Việt Nam">Cho thuê</a><span>/</span><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho" level="2" title="Cho thuê nhà mặt phố tại Việt Nam">Nhà mặt phố trên toàn quốc</a>
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
        {"@context":"https://schema.org/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Trang chủ","item":"https://batdongsan.com.vn"},{"@type":"ListItem","position":2,"name":"Cho thuê","item":"https://batdongsan.com.vn/cho-thue-nha-mat-pho"},{"@type":"ListItem","position":3,"name":"Nhà mặt phố trên toàn quốc","item":"https://batdongsan.com.vn/cho-thue-nha-mat-pho"}]}
    </script>

<div class="product-list-header pad-top-8">
    <h1>Cho thuê nhà mặt phố tại Việt Nam</h1>
        <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">5,643</span> bất động sản.</div>
    

</div>
    <div class="product-search-most mar-top-8 mar-bot-8">
        <div class="box-title">Các khu vực, địa điểm nổi bật</div>
        <ul class="clearfix link-hover-blue">
                <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-binh-chanh">Cho thuê nhà mặt tiền Bình Chánh</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-binh-tan">Cho thuê nhà mặt tiền Bình Tân</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-go-vap">Cho thuê nhà mặt tiền Gò Vấp</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-hoc-mon">Cho thuê nhà mặt tiền Hóc Môn</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-nha-be">Cho thuê nhà mặt tiền Nhà Bè</a></li>
                <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-tan-phu">Cho thuê nhà mặt tiền Tân Phú</a></li>
        </ul>
    </div>

    <div class="product-nav-bar pad-top-8 clearfix">
        <ul class="ul-tab fl mar-right-16">
            <li class="list-display actived">Danh sách</li>
            <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
            <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-cho-thue-nha-mat-pho">Bản đồ</a></li>
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
            <div class="vip0 vipaddon product-item clearfix" uid="337034">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-hoang-ngan-phuong-trung-hoa-4/chinh-chu-cho-ca-122-vi-tri-hot-t-cau-giay-130m2-7-tang-1-ham-pr27780382" title="chính chủ cho thuê cả nhà mặt phố 122 hoàng ngân , vị trí hot nhất cầu giấy , 130m2 , 7 tầng, 1 hầm" onclick="">
                        <img class="product-avatar-img" alt="chính chủ cho thuê cả nhà mặt phố 122 hoàng ngân , vị trí hot nhất cầu giấy , 130m2 , 7 tầng, 1 hầm" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201113125235-6f96_wm.jpg" is-lazy-image="true" lazy-id="0"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/20201113125252-6370_wm.jpg" is-lazy-image="true" lazy-id="1"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/20201113125256-2c6f_wm.jpg" is-lazy-image="true" lazy-id="2">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-hoang-ngan-phuong-trung-hoa-4/chinh-chu-cho-ca-122-vi-tri-hot-t-cau-giay-130m2-7-tang-1-ham-pr27780382" title="chính chủ cho thuê cả nhà mặt phố 122 hoàng ngân , vị trí hot nhất cầu giấy , 130m2 , 7 tầng, 1 hầm" class="vipZero product-link">
                            CHÍNH CHỦ CHO THUÊ CẢ NHÀ MẶT PHỐ 122 HOÀNG NGÂN , VỊ TRÍ HOT NHẤT CẦU GIẤY , 130M2 , 7 TẦNG, 1 HẦM
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">90 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">130 m²</span>
                                                <span class="location">Cầu Giấy, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        chính chủ cho thuê cả nhà mặt phố 122 hoàng ngân , 7 tầng , mỗi tầng chia 2 phòng , 1 hầm , có thang máy , đầy đủ các trang thiết bị , mặt tiền 7m vị trí đẹp , tập chung nhiều văn phòng , mặt phố kinh doanh sầm uất . giá 90 triệu/tháng . anh chị có nhu cầu xin liên hệ : <span class="hidden-mobile des" raw="0333.333.313">0333.333.***</span>
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">13/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Đỗ Thế">
                                <span class="contact-name">Đỗ Thế</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0988988169" raw="0988988169">0988 988 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27780382" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;ch&amp;#237;nh chủ cho thu&amp;#234; cả nh&amp;#224; mặt phố 122 ho&amp;#224;ng ng&amp;#226;n , vị tr&amp;#237; hot nhất cầu giấy , 130m2 , 7 tầng, 1 hầm&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113125235-6f96_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113125252-6370_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113125256-2c6f_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/13/20201113125235-6f96_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="chính chủ cho thuê cả nhà mặt phố 122 hoàng ngân , vị trí hot nhất cầu giấy , 130m2 , 7 tầng, 1 hầm" data-price="90 triệu/tháng" data-area="130 m²" data-pricesort="90000000" data-areasort="130" data-room="0" data-toilets="0" data-address="Cầu Giấy, Hà Nội" data-description="chính chủ cho thuê cả nhà mặt phố 122 hoàng ngân , 7 tầng , mỗi tầng chia 2 phòng , 1 hầm , có thang máy , đầy đủ các trang thiết bị , mặt tiền 7m vị trí đẹp , tập chung nhiều văn phòng , mặt phố kinh doanh sầm uất . giá 90 triệu/tháng . anh chị có nhu cầu xin liên hệ : 0333.333.313" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 12:55:10" data-contactname="Đỗ Thế" data-contactmobile="0988988169" data-url="/cho-thue-nha-mat-pho-duong-hoang-ngan-phuong-trung-hoa-4/chinh-chu-cho-ca-122-vi-tri-hot-t-cau-giay-130m2-7-tang-1-ham-pr27780382" data-totalmedia="5" data-createbyuser="337034"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1143345">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-nguyen-cu-trinh-phuong-nguyen-cu-trinh/cho-ngang-9m-tien-quan-1-dtsd-450m2-pr27712859" title="Cho thuê nhà ngang 9m mặt tiền Nguyễn Cư Trinh Quận 1, DTSD 450m2" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà ngang 9m mặt tiền Nguyễn Cư Trinh Quận 1, DTSD 450m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201108171254-edc5_wm.jpg" is-lazy-image="true" lazy-id="3">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-nguyen-cu-trinh-phuong-nguyen-cu-trinh/cho-ngang-9m-tien-quan-1-dtsd-450m2-pr27712859" title="Cho thuê nhà ngang 9m mặt tiền Nguyễn Cư Trinh Quận 1, DTSD 450m2" class="vipZero product-link">
                            CHO THUÊ NHÀ NGANG 9M MẶT TIỀN NGUYỄN CƯ TRINH QUẬN 1, DTSD 450M2
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">110 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">135 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 1, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cho thuê nhà mặt tiền Nguyễn Cư Trinh - Trần Đình Xu, Phường Nguyễn Cư Trinh, quận 1. - Diện tích: 9x15m. - Kết cấu: Trệt 3 lầu sàn trống suốt, cầu thang cuối nhà. - Cho thuê dài hạn. Giá: 
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
                                <i class="iconSave" data-productid="27712859" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; ngang 9m mặt tiền Nguyễn Cư Trinh Quận 1, DTSD 450m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108171254-edc5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/08/20201108171254-edc5_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà ngang 9m mặt tiền Nguyễn Cư Trinh Quận 1, DTSD 450m2" data-price="110 triệu/tháng" data-area="135 m²" data-pricesort="110000000" data-areasort="135" data-room="0" data-toilets="0" data-address="Quận 1, Hồ Chí Minh" data-description="Chính chủ cho thuê nhà mặt tiền Nguyễn Cư Trinh - Trần Đình Xu, Phường Nguyễn Cư Trinh, quận 1. - Diện tích: 9x15m. - Kết cấu: Trệt 3 lầu sàn trống suốt, cầu thang cuối nhà. - Cho thuê dài hạn. Giá: " data-duration="5 ngày trước" data-updatedtime="08/11/2020" data-datesort="11/08/2020 17:13:48" data-contactname="Nguyễn Khắc Chiến" data-contactmobile="0886617644" data-url="/cho-thue-nha-mat-pho-duong-nguyen-cu-trinh-phuong-nguyen-cu-trinh/cho-ngang-9m-tien-quan-1-dtsd-450m2-pr27712859" data-totalmedia="3" data-createbyuser="1143345"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="541403">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-pham-hong-thai-phuong-truc-bach/cho-hoac-ban-ca-co-28-thai-pr26089348" title="Bán nhà mặt phố cổ 28D Phạm Hồng Thái" onclick="">
                        <img class="product-avatar-img" alt="Bán nhà mặt phố cổ 28D Phạm Hồng Thái" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/02/20200702144236-9f2a_wm.jpg" is-lazy-image="true" lazy-id="4">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-pham-hong-thai-phuong-truc-bach/cho-hoac-ban-ca-co-28-thai-pr26089348" title="Bán nhà mặt phố cổ 28D Phạm Hồng Thái" class="vipOne product-link">
                            BÁN NHÀ MẶT PHỐ CỔ 28D PHẠM HỒNG THÁI
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">45 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Ba Đình, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Bán nhà 28D Phạm Hồng Thái. Nhà 4,5 tầng, 2 mặt thoáng trước và sau nhà. Mặt bằng 45m2, mặt tiền 4m. Thiết kế mỗi tầng 1 phòng tiện kinh doanh. Giá 20tỷ, có thương lượng. Liên hệ: Chị My: <span class="hidden-mobile des" raw="0963369268">0963369***</span>.
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
                                <i class="iconSave" data-productid="26089348" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; mặt phố cổ 28D Phạm Hồng Th&amp;#225;i&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/02/20200702144236-9f2a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/07/02/20200702144236-9f2a_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà mặt phố cổ 28D Phạm Hồng Thái" data-price="Giá thỏa thuận" data-area="45 m²" data-pricesort="0" data-areasort="45" data-room="0" data-toilets="0" data-address="Ba Đình, Hà Nội" data-description="Bán nhà 28D Phạm Hồng Thái. Nhà 4,5 tầng, 2 mặt thoáng trước và sau nhà. Mặt bằng 45m2, mặt tiền 4m. Thiết kế mỗi tầng 1 phòng tiện kinh doanh. Giá 20tỷ, có thương lượng. Liên hệ: Chị My: 0963369268." data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 22:30:45" data-contactname="Chị My" data-contactmobile="0963369268" data-url="/cho-thue-nha-mat-pho-duong-pham-hong-thai-phuong-truc-bach/cho-hoac-ban-ca-co-28-thai-pr26089348" data-totalmedia="1" data-createbyuser="541403"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1409847">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-pho-pham-huy-thong-phuong-ngoc-khanh/cho-ho-6-tang-x-80m2-gia-canh-tranh-pr26527613" title="Cho thuê nhà mặt phố Phạm Huy Thông, mặt hồ Ngọc Khánh, 6 tầng x 80m2, giá cạnh tranh" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà mặt phố Phạm Huy Thông, mặt hồ Ngọc Khánh, 6 tầng x 80m2, giá cạnh tranh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="5">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-pho-pham-huy-thong-phuong-ngoc-khanh/cho-ho-6-tang-x-80m2-gia-canh-tranh-pr26527613" title="Cho thuê nhà mặt phố Phạm Huy Thông, mặt hồ Ngọc Khánh, 6 tầng x 80m2, giá cạnh tranh" class="vipOne product-link">
                            CHO THUÊ NHÀ MẶT PHỐ PHẠM HUY THÔNG, MẶT HỒ NGỌC KHÁNH, 6 TẦNG X 80M2, GIÁ CẠNH TRANH
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">80 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Ba Đình, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nhà mặt phố Phạm Huy Thông, Ba Đình, Hà Nội. Nhà hướng Đông Nam, view hồ Ngọc Khánh, đối diện đài Truyền hình Việt Nam. Diện tích 80m2 x 6 tầng, mỗi tầng có 2 phòng.Cho khách hàng thuê có nh
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
                                <i class="iconSave" data-productid="26527613" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; mặt phố Phạm Huy Th&amp;#244;ng, mặt hồ Ngọc Kh&amp;#225;nh, 6 tầng x 80m2, gi&amp;#225; cạnh tranh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà mặt phố Phạm Huy Thông, mặt hồ Ngọc Khánh, 6 tầng x 80m2, giá cạnh tranh" data-price="Giá thỏa thuận" data-area="80 m²" data-pricesort="0" data-areasort="80" data-room="12" data-toilets="6" data-address="Ba Đình, Hà Nội" data-description="Cho thuê nhà mặt phố Phạm Huy Thông, Ba Đình, Hà Nội. Nhà hướng Đông Nam, view hồ Ngọc Khánh, đối diện đài Truyền hình Việt Nam. Diện tích 80m2 x 6 tầng, mỗi tầng có 2 phòng.Cho khách hàng thuê có nh" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 09:34:42" data-contactname="Nguyễn Thu Hương" data-contactmobile="0357778899" data-url="/cho-thue-nha-mat-pho-pho-pham-huy-thong-phuong-ngoc-khanh/cho-ho-6-tang-x-80m2-gia-canh-tranh-pr26527613" data-totalmedia="0" data-createbyuser="1409847"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="255912">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-thao-dien-phuong-thao-dien/chinh-chu-ban-hoac-cho-tien-quan-2-tich-220-m2-rat-dep-tien-moi-pr27650626" title="Chính chủ bán hoặc cho thuê nhà mặt tiền Thảo Điền, Quận 2, dt 220 m2, siêu đẹp, 0395202371" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ bán hoặc cho thuê nhà mặt tiền Thảo Điền, Quận 2, dt 220 m2, siêu đẹp, 0395202371" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/MrdZYqBH/20201103172405-61e1_wm.jpg" is-lazy-image="true" lazy-id="6">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-thao-dien-phuong-thao-dien/chinh-chu-ban-hoac-cho-tien-quan-2-tich-220-m2-rat-dep-tien-moi-pr27650626" title="Chính chủ bán hoặc cho thuê nhà mặt tiền Thảo Điền, Quận 2, dt 220 m2, siêu đẹp, 0395202***" class="vipOne product-link" style="overflow: visible;">
                            CHÍNH CHỦ BÁN HOẶC CHO THUÊ NHÀ MẶT TIỀN THẢO ĐIỀN, QUẬN 2, DT 220 M2, SIÊU ĐẸP, <span class="hidden-mobile m-on-title" raw="0395202371">0395202***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">40.07 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">220 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ bán hoặc cho thuê nhà mặt tiền Thảo Điền, Quận 2, diện tích 220 m2, rất đẹp, tiện mọi mặt, thích hợp kinh doanh các ngành nghề. Giá cho thuê 1800USD/tháng (tương đương 40,07 triệu/tháng) ho
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
                                <i class="iconSave" data-productid="27650626" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n hoặc cho thu&amp;#234; nh&amp;#224; mặt tiền Thảo Điền, Quận 2, dt 220 m2, si&amp;#234;u đẹp, 0395202371&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/MrdZYqBH/20201103172405-61e1_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/03/MrdZYqBH/20201103172405-61e1_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ bán hoặc cho thuê nhà mặt tiền Thảo Điền, Quận 2, dt 220 m2, siêu đẹp, 0395202371" data-price="40.07 triệu/tháng" data-area="220 m²" data-pricesort="40070000" data-areasort="220" data-room="0" data-toilets="0" data-address="Quận 2, Hồ Chí Minh" data-description="Chính chủ bán hoặc cho thuê nhà mặt tiền Thảo Điền, Quận 2, diện tích 220 m2, rất đẹp, tiện mọi mặt, thích hợp kinh doanh các ngành nghề. Giá cho thuê 1800USD/tháng (tương đương 40,07 triệu/tháng) ho" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 15:44:17" data-contactname="Chính Chủ" data-contactmobile="0395202371" data-url="/cho-thue-nha-mat-pho-duong-thao-dien-phuong-thao-dien/chinh-chu-ban-hoac-cho-tien-quan-2-tich-220-m2-rat-dep-tien-moi-pr27650626" data-totalmedia="5" data-createbyuser="255912"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1119046">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-lac-long-quan-phuong-xuan-la/cho-khu-dan-cu-tien-kinh-doanh-van-phong-hang-dt-80m2-tang-pr20729268" title="Cho thuê nhà mặt đường Lạc Long Quân khu dân cư tiện kinh doanh, văn phòng, nhà hàng, DT80m2x4 tầng" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà mặt đường Lạc Long Quân khu dân cư tiện kinh doanh, văn phòng, nhà hàng, DT80m2x4 tầng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/ZOb4F5Iz/20201020204429-0ca0_wm.jpg" is-lazy-image="true" lazy-id="7">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">14</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-lac-long-quan-phuong-xuan-la/cho-khu-dan-cu-tien-kinh-doanh-van-phong-hang-dt-80m2-tang-pr20729268" title="Cho thuê nhà mặt đường Lạc Long Quân khu dân cư tiện kinh doanh, văn phòng, nhà hàng, DT80m2x4 tầng" class="vipOne product-link">
                            CHO THUÊ NHÀ MẶT ĐƯỜNG LẠC LONG QUÂN KHU DÂN CƯ TIỆN KINH DOANH, VĂN PHÒNG, NHÀ HÀNG, DT80M2X4 TẦNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">80 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tây Hồ, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cần cho thuê lâu dài nhà mặt đường Lạc Long Quân giá thỏa thuận. - Khu dân cư tiện kinh doanh, văn phòng, nhà hàng; DT 80m2/tầng x 4 tầng; MT gần 5m, sau nhà đường ô tô; Tầng hầm. Đường rộn
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
                                <i class="iconSave" data-productid="20729268" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; mặt đường Lạc Long Qu&amp;#226;n khu d&amp;#226;n cư tiện kinh doanh, văn ph&amp;#242;ng, nh&amp;#224; h&amp;#224;ng, DT80m2x4 tầng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/ZOb4F5Iz/20201020204429-0ca0_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/20/ZOb4F5Iz/20201020204429-0ca0_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà mặt đường Lạc Long Quân khu dân cư tiện kinh doanh, văn phòng, nhà hàng, DT80m2x4 tầng" data-price="Giá thỏa thuận" data-area="80 m²" data-pricesort="0" data-areasort="80" data-room="0" data-toilets="0" data-address="Tây Hồ, Hà Nội" data-description="Chính chủ cần cho thuê lâu dài nhà mặt đường Lạc Long Quân giá thỏa thuận. - Khu dân cư tiện kinh doanh, văn phòng, nhà hàng; DT 80m2/tầng x 4 tầng; MT gần 5m, sau nhà đường ô tô; Tầng hầm. Đường rộn" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 14:08:29" data-contactname="Tạ Phan Lương" data-contactmobile="0328006459" data-url="/cho-thue-nha-mat-pho-duong-lac-long-quan-phuong-xuan-la/cho-khu-dan-cu-tien-kinh-doanh-van-phong-hang-dt-80m2-tang-pr20729268" data-totalmedia="14" data-createbyuser="1119046"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1495097">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-chau-van-liem-phuong-tan-an-1/cho-khach-san-2-tien-dong-khoi-gan-ben-ninh-kieu-can-tho-pr27524438" title="CHO THUÊ KHÁCH SẠN 2 MẶT TIỀN CHÂU VĂN LIÊM - ĐỒNG KHỞI GẦN BẾN NINH KIỀU, CẦN THƠ" onclick="">
                        <img class="product-avatar-img" alt="CHO THUÊ KHÁCH SẠN 2 MẶT TIỀN CHÂU VĂN LIÊM - ĐỒNG KHỞI GẦN BẾN NINH KIỀU, CẦN THƠ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/23/20201023154206-9c11_wm.jpg" is-lazy-image="true" lazy-id="8">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-chau-van-liem-phuong-tan-an-1/cho-khach-san-2-tien-dong-khoi-gan-ben-ninh-kieu-can-tho-pr27524438" title="CHO THUÊ KHÁCH SẠN 2 MẶT TIỀN CHÂU VĂN LIÊM - ĐỒNG KHỞI GẦN BẾN NINH KIỀU, CẦN THƠ" class="vipOne product-link">
                            CHO THUÊ KHÁCH SẠN 2 MẶT TIỀN CHÂU VĂN LIÊM - ĐỒNG KHỞI GẦN BẾN NINH KIỀU, CẦN THƠ
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">260 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">790 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Ninh Kiều, Cần Thơ</span>
                    </div>
                    <div class="product-content">
                        Cho thuê toàn bộ Khách Sạn với 2 mặt tiền đường Châu Văn Liêm và đường Đồng Khởi, cách Bến Ninh Kiều 500m (kinh doanh tốt) gồm 65 phòng, 2 nhà hàng, 2 phòng hội thảo và tổ chức tiệc cưới. + Địa chỉ: 
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
                                <i class="iconSave" data-productid="27524438" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;CHO THU&amp;#202; KH&amp;#193;CH SẠN 2 MẶT TIỀN CH&amp;#194;U VĂN LI&amp;#202;M - ĐỒNG KHỞI GẦN BẾN NINH KIỀU, CẦN THƠ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/23/20201023154206-9c11_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/23/20201023154206-9c11_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="CHO THUÊ KHÁCH SẠN 2 MẶT TIỀN CHÂU VĂN LIÊM - ĐỒNG KHỞI GẦN BẾN NINH KIỀU, CẦN THƠ" data-price="260 triệu/tháng" data-area="790 m²" data-pricesort="260000000" data-areasort="790" data-room="65" data-toilets="0" data-address="Ninh Kiều, Cần Thơ" data-description="Cho thuê toàn bộ Khách Sạn với 2 mặt tiền đường Châu Văn Liêm và đường Đồng Khởi, cách Bến Ninh Kiều 500m (kinh doanh tốt) gồm 65 phòng, 2 nhà hàng, 2 phòng hội thảo và tổ chức tiệc cưới. + Địa chỉ: " data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 10:06:25" data-contactname="Mr. Hùng" data-contactmobile="0936222677" data-url="/cho-thue-nha-mat-pho-duong-chau-van-liem-phuong-tan-an-1/cho-khach-san-2-tien-dong-khoi-gan-ben-ninh-kieu-can-tho-pr27524438" data-totalmedia="1" data-createbyuser="1495097"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="438445">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-truong-son-phuong-4-20/toa-vp-gan-san-bay-mt-q-tan-binh-free-01-thang-tien-ngoai-gio-cac-dt-50-232m2-pr27626628" title="Tòa nhà VP gần sân bay MT Trường Sơn Tân Bình free 01 tháng tiền thuê + ngoài giờ các DT 50 - 232m2" onclick="">
                        <img class="product-avatar-img" alt="Tòa nhà VP gần sân bay MT Trường Sơn Tân Bình free 01 tháng tiền thuê + ngoài giờ các DT 50 - 232m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102091313-8fc3_wm.jpg" is-lazy-image="true" lazy-id="9">
                    </a>
                    <span class="product-feature">
                                                                            <img src="./assets/image/ic_video.svg">
                    </span>
                        <span class="product-media">9</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-truong-son-phuong-4-20/toa-vp-gan-san-bay-mt-q-tan-binh-free-01-thang-tien-ngoai-gio-cac-dt-50-232m2-pr27626628" title="Tòa nhà VP gần sân bay MT Trường Sơn Tân Bình free 01 tháng tiền thuê + ngoài giờ các DT 50 - 232m2" class="vipOne product-link">
                            TÒA NHÀ VP GẦN SÂN BAY MT TRƯỜNG SƠN TÂN BÌNH FREE 01 THÁNG TIỀN THUÊ + NGOÀI GIỜ CÁC DT 50 - 232M2
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">268 nghìn/m²/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">1500 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tân Bình, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Tòa nhà chuẩn Văn phòng HHP TOWER. Địa chỉ: Số 31 Đường Trường Sơn, Phường 4, Quận Tân Bình. Tầng trệt đang là Showroom trưng bày ô tô HYUNDAI. Diện tích: 50 - 135 - 232m2. Giá chỉ từ 256.001,5đ/m2/t
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
                                <i class="iconSave" data-productid="27626628" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;T&amp;#242;a nh&amp;#224; VP gần s&amp;#226;n bay MT Trường Sơn T&amp;#226;n B&amp;#236;nh free 01 th&amp;#225;ng tiền thu&amp;#234; + ngo&amp;#224;i giờ c&amp;#225;c DT 50 - 232m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102091313-8fc3_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/02/20201102091313-8fc3_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="true" data-title="Tòa nhà VP gần sân bay MT Trường Sơn Tân Bình free 01 tháng tiền thuê + ngoài giờ các DT 50 - 232m2" data-price="268 nghìn/m²/tháng" data-area="1500 m²" data-pricesort="402000000" data-areasort="1500" data-room="0" data-toilets="0" data-address="Tân Bình, Hồ Chí Minh" data-description="Tòa nhà chuẩn Văn phòng HHP TOWER. Địa chỉ: Số 31 Đường Trường Sơn, Phường 4, Quận Tân Bình. Tầng trệt đang là Showroom trưng bày ô tô HYUNDAI. Diện tích: 50 - 135 - 232m2. Giá chỉ từ 256.001,5đ/m2/t" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 11:58:14" data-contactname="Thư" data-contactmobile="0907288639" data-url="/cho-thue-nha-mat-pho-duong-truong-son-phuong-4-20/toa-vp-gan-san-bay-mt-q-tan-binh-free-01-thang-tien-ngoai-gio-cac-dt-50-232m2-pr27626628" data-totalmedia="9" data-createbyuser="438445"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="711043">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-tran-ke-xuong-phuong-3-19/cho-gap-biet-thu-mini-140m2-tien-quan-binh-thanh-pr23955712" title="Cho thuê nhà 135m2 mặt tiền đường Trần Kế Xương, quận Bình Thạnh" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà 135m2 mặt tiền đường Trần Kế Xương, quận Bình Thạnh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2019/12/20/20191220124912-9d6f_wm.jpg" is-lazy-image="true" lazy-id="10">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-tran-ke-xuong-phuong-3-19/cho-gap-biet-thu-mini-140m2-tien-quan-binh-thanh-pr23955712" title="Cho thuê nhà 135m2 mặt tiền đường Trần Kế Xương, quận Bình Thạnh" class="vipOne product-link">
                            CHO THUÊ NHÀ 135M2 MẶT TIỀN ĐƯỜNG TRẦN KẾ XƯƠNG, QUẬN BÌNH THẠNH
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">25 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">135 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bình Thạnh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Cho thuê gấp nhà mặt tiền đường Trần Kế Xương, diện tích 135m2 tại trung tâm quận Bình Thạnh, cách Quận 1 3 phút di chuyển, quận Phú Nhuận 3 phút di chuyển. Diện tích: 9 x 15m. Số tầng: 2 tầng và 1 t
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
                                <i class="iconSave" data-productid="23955712" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; 135m2 mặt tiền đường Trần Kế Xương, quận B&amp;#236;nh Thạnh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/12/20/20191220124912-9d6f_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2019/12/20/20191220124912-9d6f_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà 135m2 mặt tiền đường Trần Kế Xương, quận Bình Thạnh" data-price="25 triệu/tháng" data-area="135 m²" data-pricesort="25000000" data-areasort="135" data-room="3" data-toilets="3" data-address="Bình Thạnh, Hồ Chí Minh" data-description="Cho thuê gấp nhà mặt tiền đường Trần Kế Xương, diện tích 135m2 tại trung tâm quận Bình Thạnh, cách Quận 1 3 phút di chuyển, quận Phú Nhuận 3 phút di chuyển. Diện tích: 9 x 15m. Số tầng: 2 tầng và 1 t" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 10:27:13" data-contactname="Nguyễn Tuấn Tâm" data-contactmobile="0902454186" data-url="/cho-thue-nha-mat-pho-duong-tran-ke-xuong-phuong-3-19/cho-gap-biet-thu-mini-140m2-tien-quan-binh-thanh-pr23955712" data-totalmedia="8" data-createbyuser="711043"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 vipaddon product-item clearfix" uid="1294018">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/chinh-chu-cho-shophouse-chung-cu-go-vap-gia-18tr-thang-lh-0978-171756-pr27718344" title="Chính chủ cho thuê shophouse chung cư Cityland Park Hills Gò Vấp, giá 18 tr/tháng. LH: 0978 171756" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cho thuê shophouse chung cư Cityland Park Hills Gò Vấp, giá 18 tr/tháng. LH: 0978 171756" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109102335-4180_wm.jpg" is-lazy-image="true" lazy-id="11"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109102350-ae55_wm.jpg" is-lazy-image="true" lazy-id="12"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109102356-48ce_wm.jpg" is-lazy-image="true" lazy-id="13">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/chinh-chu-cho-shophouse-chung-cu-go-vap-gia-18tr-thang-lh-0978-171756-pr27718344" title="Chính chủ cho thuê shophouse chung cư Cityland Park Hills Gò Vấp, giá 18 tr/tháng. LH: 0978 171***" class="vipOne product-link" style="overflow: visible;">
                            CHÍNH CHỦ CHO THUÊ SHOPHOUSE CHUNG CƯ CITYLAND PARK HILLS GÒ VẤP, GIÁ 18 TR/THÁNG. LH: <span class="hidden-mobile m-on-title" raw="0978 171756">0978 171***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">18 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">55 m²</span>
                                                        <span class="dot">·</span>
                                <span class="toilet">1 WC</span>
                        <span class="location">Gò Vấp, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cần cho thuê shophouse chung cư Cityland Park Hills Gò Vấp, giá 18 tr/tháng. - Vị trí: Nằm ngay MT Phan Văn Trị KDC Cityland Park Hills, Gò Vấp. - Diện tích: 55m2 - Giá thuê 18tr/tháng. Shophouse sạch sẽ, thoáng, chuyên khu văn phòng cao cấp. Là nơi tập trung đông dân cư dân trí cao. An ninh 24/24. Gần các trục đường lớn như Nguyễn Văn Lượng, Phan Văn Trị,... Xung qua
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                4 ngày trước
                                <span class="tooltip-time">09/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Thanh Ngoc">
                                <span class="contact-name">Thanh Ngoc</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0978171756" raw="0978171756">0978 171 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27718344" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; shophouse chung cư Cityland Park Hills G&amp;#242; Vấp, gi&amp;#225; 18 tr/th&amp;#225;ng. LH: 0978 171756&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109102335-4180_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109102350-ae55_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109102356-48ce_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/09/20201109102335-4180_wm.jpg" data-vipclass="vip1 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê shophouse chung cư Cityland Park Hills Gò Vấp, giá 18 tr/tháng. LH: 0978 171756" data-price="18 triệu/tháng" data-area="55 m²" data-pricesort="18000000" data-areasort="55" data-room="0" data-toilets="1" data-address="Gò Vấp, Hồ Chí Minh" data-description="Chính chủ cần cho thuê shophouse chung cư Cityland Park Hills Gò Vấp, giá 18 tr/tháng. - Vị trí: Nằm ngay MT Phan Văn Trị KDC Cityland Park Hills, Gò Vấp. - Diện tích: 55m2 - Giá thuê 18tr/tháng. Shophouse sạch sẽ, thoáng, chuyên khu văn phòng cao cấp. Là nơi tập trung đông dân cư dân trí cao. An ninh 24/24. Gần các trục đường lớn như Nguyễn Văn Lượng, Phan Văn Trị,... Xung qua" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 10:26:24" data-contactname="Thanh Ngoc" data-contactmobile="0978171756" data-url="/cho-thue-nha-mat-pho-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/chinh-chu-cho-shophouse-chung-cu-go-vap-gia-18tr-thang-lh-0978-171756-pr27718344" data-totalmedia="6" data-createbyuser="1294018"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1498207">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-bui-xuong-trach-phuong-khuong-dinh/chinh-chu-cho-lau-dai-so-190-trach-pr27576411" title="Chính chủ cho thuê lâu dài nhà 62m2 mặt phố số 190 Bùi Xương Trạch chỉ 15tr/tháng. LH 0362860970" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cho thuê lâu dài nhà 62m2 mặt phố số 190 Bùi Xương Trạch chỉ 15tr/tháng. LH 0362860970" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/28/20201028115036-79fd_wm.jpg" is-lazy-image="true" lazy-id="14">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">2</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-bui-xuong-trach-phuong-khuong-dinh/chinh-chu-cho-lau-dai-so-190-trach-pr27576411" title="Chính chủ cho thuê lâu dài nhà 62m2 mặt phố số 190 Bùi Xương Trạch chỉ 15tr/tháng. LH 0362860***" class="vipOne product-link" style="overflow: visible;">
                            CHÍNH CHỦ CHO THUÊ LÂU DÀI NHÀ 62M2 MẶT PHỐ SỐ 190 BÙI XƯƠNG TRẠCH CHỈ 15TR/THÁNG. LH <span class="hidden-mobile m-on-title" raw="0362860970">0362860***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">15 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">62 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thanh Xuân, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cho thuê nhà mặt phố số 190 phố Bùi Xương Trạch. Diện tích 62m2, mặt tiền 4m, hai mặt thoáng trước sau, mặt trước có vỉa hè, mặt sau view hồ. Nhà 3.5 tầng còn mới, mỗi tầng 2 phòng ngủ. Tần
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
                                <i class="iconSave" data-productid="27576411" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; l&amp;#226;u d&amp;#224;i nh&amp;#224; 62m2 mặt phố số 190 B&amp;#249;i Xương Trạch chỉ 15tr/th&amp;#225;ng. LH 0362860970&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/28/20201028115036-79fd_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/28/20201028115036-79fd_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê lâu dài nhà 62m2 mặt phố số 190 Bùi Xương Trạch chỉ 15tr/tháng. LH 0362860970" data-price="15 triệu/tháng" data-area="62 m²" data-pricesort="15000000" data-areasort="62" data-room="5" data-toilets="3" data-address="Thanh Xuân, Hà Nội" data-description="Chính chủ cho thuê nhà mặt phố số 190 phố Bùi Xương Trạch. Diện tích 62m2, mặt tiền 4m, hai mặt thoáng trước sau, mặt trước có vỉa hè, mặt sau view hồ. Nhà 3.5 tầng còn mới, mỗi tầng 2 phòng ngủ. Tần" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 07:42:52" data-contactname="Đặng Thị Hường" data-contactmobile="0362860970" data-url="/cho-thue-nha-mat-pho-duong-bui-xuong-trach-phuong-khuong-dinh/chinh-chu-cho-lau-dai-so-190-trach-pr27576411" data-totalmedia="2" data-createbyuser="1498207"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="732111">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-tran-kim-xuyen-phuong-yen-hoa-2/cho-nguyen-can-goc-2-tien-12-250m2-x-5-tang-1-ham-thang-may-thong-san-pr27449458" title="Cho thuê nguyên căn góc 2 mặt tiền 12 Trần Kim Xuyến, 250m2 x 5 tầng 1 hầm, thang máy, thông sàn" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nguyên căn góc 2 mặt tiền 12 Trần Kim Xuyến, 250m2 x 5 tầng 1 hầm, thang máy, thông sàn" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/17/wyRdB1q5/20201017105316-67a8_wm.jpg" is-lazy-image="true" lazy-id="15">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-tran-kim-xuyen-phuong-yen-hoa-2/cho-nguyen-can-goc-2-tien-12-250m2-x-5-tang-1-ham-thang-may-thong-san-pr27449458" title="Cho thuê nguyên căn góc 2 mặt tiền 12 Trần Kim Xuyến, 250m2 x 5 tầng 1 hầm, thang máy, thông sàn" class="vipOne product-link">
                            CHO THUÊ NGUYÊN CĂN GÓC 2 MẶT TIỀN 12 TRẦN KIM XUYẾN, 250M2 X 5 TẦNG 1 HẦM, THANG MÁY, THÔNG SÀN
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">190 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">250 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Cầu Giấy, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cho thuê nguyên căn biệt thự góc 2 mặt tiền số 12 Trần Kim Xuyến, Yên Hoà, Cầu Giấy, HN:- Diện tích 250m2, diện tích xây dựng 150m2 * 5 tầng + 1 hầm. Mặt tiền 20m.- Thiết kế theo kiến trúc 
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
                                <i class="iconSave" data-productid="27449458" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nguy&amp;#234;n căn g&amp;#243;c 2 mặt tiền 12 Trần Kim Xuyến, 250m2 x 5 tầng 1 hầm, thang m&amp;#225;y, th&amp;#244;ng s&amp;#224;n&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/17/wyRdB1q5/20201017105316-67a8_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/17/wyRdB1q5/20201017105316-67a8_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nguyên căn góc 2 mặt tiền 12 Trần Kim Xuyến, 250m2 x 5 tầng 1 hầm, thang máy, thông sàn" data-price="190 triệu/tháng" data-area="250 m²" data-pricesort="190000000" data-areasort="250" data-room="0" data-toilets="0" data-address="Cầu Giấy, Hà Nội" data-description="Chính chủ cho thuê nguyên căn biệt thự góc 2 mặt tiền số 12 Trần Kim Xuyến, Yên Hoà, Cầu Giấy, HN:- Diện tích 250m2, diện tích xây dựng 150m2 * 5 tầng + 1 hầm. Mặt tiền 20m.- Thiết kế theo kiến trúc " data-duration="6 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 11:12:56" data-contactname="Anh Phương" data-contactmobile="0904441118" data-url="/cho-thue-nha-mat-pho-duong-tran-kim-xuyen-phuong-yen-hoa-2/cho-nguyen-can-goc-2-tien-12-250m2-x-5-tang-1-ham-thang-may-thong-san-pr27449458" data-totalmedia="6" data-createbyuser="732111"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1110802">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-nguyen-van-troi-phuong-15-7/cho-toa-moi-xay-tien-56a-phu-nhuan-pr27695564" title="Cho thuê tòa nhà mới xây mặt tiền 56A Nguyễn Văn Trỗi, Phú Nhuận" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê tòa nhà mới xây mặt tiền 56A Nguyễn Văn Trỗi, Phú Nhuận" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106164303-62d4_wm.jpg" is-lazy-image="true" lazy-id="16">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-nguyen-van-troi-phuong-15-7/cho-toa-moi-xay-tien-56a-phu-nhuan-pr27695564" title="Cho thuê tòa nhà mới xây mặt tiền 56A Nguyễn Văn Trỗi, Phú Nhuận" class="vipOne product-link">
                            CHO THUÊ TÒA NHÀ MỚI XÂY MẶT TIỀN 56A NGUYỄN VĂN TRỖI, PHÚ NHUẬN
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">672 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">280 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Phú Nhuận, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Tòa nhà mới xây dựng 100% mặt tiền 56A Nguyễn Văn Trỗi, Phú Nhuận. Diện tích: 10x28m thiết kế 1 hầm 1 trệt 6 lầu sân thượng, sàn trống suốt. Được trang bị đầy đủ hệ thống PCCC, thang máy cao cấp, máy
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                1 tuần trước
                                <span class="tooltip-time">06/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27695564" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; t&amp;#242;a nh&amp;#224; mới x&amp;#226;y mặt tiền 56A Nguyễn Văn Trỗi, Ph&amp;#250; Nhuận&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106164303-62d4_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/06/20201106164303-62d4_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê tòa nhà mới xây mặt tiền 56A Nguyễn Văn Trỗi, Phú Nhuận" data-price="672 triệu/tháng" data-area="280 m²" data-pricesort="672000000" data-areasort="280" data-room="0" data-toilets="0" data-address="Phú Nhuận, Hồ Chí Minh" data-description="Tòa nhà mới xây dựng 100% mặt tiền 56A Nguyễn Văn Trỗi, Phú Nhuận. Diện tích: 10x28m thiết kế 1 hầm 1 trệt 6 lầu sân thượng, sàn trống suốt. Được trang bị đầy đủ hệ thống PCCC, thang máy cao cấp, máy" data-duration="1 tuần trước" data-updatedtime="06/11/2020" data-datesort="11/06/2020 16:48:00" data-contactname="Hp Land" data-contactmobile="0906877628" data-url="/cho-thue-nha-mat-pho-duong-nguyen-van-troi-phuong-15-7/cho-toa-moi-xay-tien-56a-phu-nhuan-pr27695564" data-totalmedia="1" data-createbyuser="1110802"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 vipaddon product-item clearfix" uid="520258">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-dien-bien-phu-phuong-minh-khai-1/cho-rieng-tai-137-hong-bang-hai-phong-dt-40m2-4-tang-mt-3-5m-pr27657374" title="Cho thuê nhà tại 137 Điện Biên Phủ, Hồng Bàng, Hải Phòng - DT 40m2/4 tầng - MT 3.5m" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà tại 137 Điện Biên Phủ, Hồng Bàng, Hải Phòng - DT 40m2/4 tầng - MT 3.5m" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/04/20201104102502-50d8_wm.jpg" is-lazy-image="true" lazy-id="17"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/04/20201104102505-c441_wm.jpg" is-lazy-image="true" lazy-id="18"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/04/20201104102508-4377_wm.jpg" is-lazy-image="true" lazy-id="19">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-dien-bien-phu-phuong-minh-khai-1/cho-rieng-tai-137-hong-bang-hai-phong-dt-40m2-4-tang-mt-3-5m-pr27657374" title="Cho thuê nhà tại 137 Điện Biên Phủ, Hồng Bàng, Hải Phòng - DT 40m2/4 tầng - MT 3.5m" class="vipOne product-link">
                            CHO THUÊ NHÀ TẠI 137 ĐIỆN BIÊN PHỦ, HỒNG BÀNG, HẢI PHÒNG - DT 40M2/4 TẦNG - MT 3.5M
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">40 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">3 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">1 WC</span>
                        <span class="location">Hồng Bàng, Hải Phòng</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cần cho thuê nhà tại số 137 Điện Biên Phủ, mặt tiền 3.5m. Diện tích đất 40m2. Nhà 4 tầng. Mỗi tầng 40m2. Nhà mặt tiền rộng rãi, để ô tô, xe máy thuận lợi, cách nhà hát lớn 5 phút đi bộ, gần cơ quan hành chính trung tâm, thuận lợi cho việc kinh doanh cửa hàng, nhà hàng, căn hộ cho thuê, văn phòng tư nhân... Giá thuê: Thỏa thuận trực tiếp với chính chủ, thanh toán 6 thá
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                1 tuần trước
                                <span class="tooltip-time">04/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Cô Liêm">
                                <span class="contact-name">Cô Liêm</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0915348889" raw="0915348889">0915 348 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27657374" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; tại 137 Điện Bi&amp;#234;n Phủ, Hồng B&amp;#224;ng, Hải Ph&amp;#242;ng - DT 40m2/4 tầng - MT 3.5m&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/04/20201104102502-50d8_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/04/20201104102505-c441_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/04/20201104102508-4377_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/04/20201104102502-50d8_wm.jpg" data-vipclass="vip1 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà tại 137 Điện Biên Phủ, Hồng Bàng, Hải Phòng - DT 40m2/4 tầng - MT 3.5m" data-price="Giá thỏa thuận" data-area="40 m²" data-pricesort="0" data-areasort="40" data-room="3" data-toilets="1" data-address="Hồng Bàng, Hải Phòng" data-description="Chính chủ cần cho thuê nhà tại số 137 Điện Biên Phủ, mặt tiền 3.5m. Diện tích đất 40m2. Nhà 4 tầng. Mỗi tầng 40m2. Nhà mặt tiền rộng rãi, để ô tô, xe máy thuận lợi, cách nhà hát lớn 5 phút đi bộ, gần cơ quan hành chính trung tâm, thuận lợi cho việc kinh doanh cửa hàng, nhà hàng, căn hộ cho thuê, văn phòng tư nhân... Giá thuê: Thỏa thuận trực tiếp với chính chủ, thanh toán 6 thá" data-duration="1 tuần trước" data-updatedtime="04/11/2020" data-datesort="11/04/2020 12:01:57" data-contactname="Cô Liêm" data-contactmobile="0915348889" data-url="/cho-thue-nha-mat-pho-duong-dien-bien-phu-phuong-minh-khai-1/cho-rieng-tai-137-hong-bang-hai-phong-dt-40m2-4-tang-mt-3-5m-pr27657374" data-totalmedia="4" data-createbyuser="520258"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="606895">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-nguyen-van-linh-phuong-phuc-dong/cho-607-55m2-x-4-tang-q-long-bien-lh-0979304268-pr19109977" title="Cho thuê nhà mặt đường 607 Nguyễn Văn Linh, 55m2 x 4 tầng, Q. Long Biên. LH 0979665860" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà mặt đường 607 Nguyễn Văn Linh, 55m2 x 4 tầng, Q. Long Biên. LH 0979665860" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/ZmCSrmc5/20201102154640-c187_wm.jpg" is-lazy-image="true" lazy-id="20">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-nguyen-van-linh-phuong-phuc-dong/cho-607-55m2-x-4-tang-q-long-bien-lh-0979304268-pr19109977" title="Cho thuê nhà mặt đường 607 Nguyễn Văn Linh, 55m2 x 4 tầng, Q. Long Biên. LH 0979665***" class="vipOne product-link" style="overflow: visible;">
                            CHO THUÊ NHÀ MẶT ĐƯỜNG 607 NGUYỄN VĂN LINH, 55M2 X 4 TẦNG, Q. LONG BIÊN. LH <span class="hidden-mobile m-on-title" raw="0979665860">0979665***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">12 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">55 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Long Biên, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nhà hoặc bán nhà (nếu ai có nhu cầu mua)  mặt đường 607 Nguyễn Văn Linh, Quận Long Biên, Hà Nội. - Nhà 4 tầng, mặt tiền 5m. - Nhà diện tích sàn 55m2. - Diện tích sử dụng 240m2. - Cách Aeon M
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
                                <i class="iconSave" data-productid="19109977" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; mặt đường 607 Nguyễn Văn Linh, 55m2 x 4 tầng, Q. Long Bi&amp;#234;n. LH 0979665860&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/ZmCSrmc5/20201102154640-c187_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/02/ZmCSrmc5/20201102154640-c187_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà mặt đường 607 Nguyễn Văn Linh, 55m2 x 4 tầng, Q. Long Biên. LH 0979665860" data-price="12 triệu/tháng" data-area="55 m²" data-pricesort="12000000" data-areasort="55" data-room="0" data-toilets="0" data-address="Long Biên, Hà Nội" data-description="Cho thuê nhà hoặc bán nhà (nếu ai có nhu cầu mua)  mặt đường 607 Nguyễn Văn Linh, Quận Long Biên, Hà Nội. - Nhà 4 tầng, mặt tiền 5m. - Nhà diện tích sàn 55m2. - Diện tích sử dụng 240m2. - Cách Aeon M" data-duration="1 tuần trước" data-updatedtime="02/11/2020" data-datesort="11/02/2020 15:49:47" data-contactname="Cô Hồng" data-contactmobile="0979665860" data-url="/cho-thue-nha-mat-pho-duong-nguyen-van-linh-phuong-phuc-dong/cho-607-55m2-x-4-tang-q-long-bien-lh-0979304268-pr19109977" data-totalmedia="3" data-createbyuser="606895"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 vipaddon product-item clearfix" uid="498301">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-nguyen-binh-khiem-phuong-da-kao/cho-tien-dakao-quan-1-lien-he-0909-40-66-79-pr26408417" title="Cho thuê nhà mặt tiền đường Nguyễn Bỉnh Khiêm, Phường Đakao, Quận 1, liên hệ 0909 40 66 79" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà mặt tiền đường Nguyễn Bỉnh Khiêm, Phường Đakao, Quận 1, liên hệ 0909 40 66 79" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/25/rco9YpRi/20200725204827-cd72_wm.jpg" is-lazy-image="true" lazy-id="21"><img src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" is-lazy-image="true" lazy-id="22"><img src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" is-lazy-image="true" lazy-id="23">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-nguyen-binh-khiem-phuong-da-kao/cho-tien-dakao-quan-1-lien-he-0909-40-66-79-pr26408417" title="Cho thuê nhà mặt tiền đường Nguyễn Bỉnh Khiêm, Phường Đakao, Quận 1, liên hệ 0909 40 6* **" class="vipOne product-link" style="overflow: visible;">
                            CHO THUÊ NHÀ MẶT TIỀN ĐƯỜNG NGUYỄN BỈNH KHIÊM, PHƯỜNG ĐAKAO, QUẬN 1, LIÊN HỆ <span class="hidden-mobile m-on-title" raw="0909 40 66 79">0909 40 6* **</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">133 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">520 m²</span>
                                                <span class="location">Quận 1, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Công ty Cổ phần Phát triển Nam Sài Gòn (SADECO) cho thuê nhà mặt tiền đường Nguyễn Bỉnh Khiêm, phường Đakao, Quận 1, thành phố Hồ Chí Minh.  + Diện tích xây dựng: 86 m2 (23 m x 3,5 m) + Diện tích sàn sử dụng: 520 m2  + Kết cấu: hầm, trệt, lửng và 04 lầu + Hiện trạng nhà: nội thất cơ bản + Pháp lý đầy đủ. + Bàn giao nhà ngayNhà cho thuê có mặt tiền đường Nguyễn Bỉnh Khiêm 23m, m
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                2 tuần trước
                                <span class="tooltip-time">27/10/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Pkd Sadeco">
                                <span class="contact-name">Pkd Sadeco</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0909406679" raw="0909406679">0909 406 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="26408417" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; mặt tiền đường Nguyễn Bỉnh Khi&amp;#234;m, Phường Đakao, Quận 1, li&amp;#234;n hệ 0909 40 66 79&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/25/rco9YpRi/20200725204827-cd72_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/07/25/rco9YpRi/20200725204827-cd72_wm.jpg" data-vipclass="vip1 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà mặt tiền đường Nguyễn Bỉnh Khiêm, Phường Đakao, Quận 1, liên hệ 0909 40 66 79" data-price="133 triệu/tháng" data-area="520 m²" data-pricesort="133000000" data-areasort="520" data-room="0" data-toilets="0" data-address="Quận 1, Hồ Chí Minh" data-description="Công ty Cổ phần Phát triển Nam Sài Gòn (SADECO) cho thuê nhà mặt tiền đường Nguyễn Bỉnh Khiêm, phường Đakao, Quận 1, thành phố Hồ Chí Minh.  + Diện tích xây dựng: 86 m2 (23 m x 3,5 m) + Diện tích sàn sử dụng: 520 m2  + Kết cấu: hầm, trệt, lửng và 04 lầu + Hiện trạng nhà: nội thất cơ bản + Pháp lý đầy đủ. + Bàn giao nhà ngayNhà cho thuê có mặt tiền đường Nguyễn Bỉnh Khiêm 23m, m" data-duration="2 tuần trước" data-updatedtime="27/10/2020" data-datesort="10/27/2020 09:10:35" data-contactname="Pkd Sadeco" data-contactmobile="0909406679" data-url="/cho-thue-nha-mat-pho-duong-nguyen-binh-khiem-phuong-da-kao/cho-tien-dakao-quan-1-lien-he-0909-40-66-79-pr26408417" data-totalmedia="1" data-createbyuser="498301"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 vipaddon product-item clearfix" uid="1458590">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-song-hanh-phuong-an-phu-prj-khu-do-thi-lakeview-city/-can-cho-1-can-duy-nhat-full-noi-that-gia-hot-26tr-th-lh-0982608460-pr27777729" title="NHÀ PHỐ LAKEVIEW CITY CẦN CHO THUÊ 1 CĂN DUY NHẤT, FULL NỘI THẤT GIÁ HOT 26TR/TH. LH 0982608460" onclick="">
                        <img class="product-avatar-img" alt="NHÀ PHỐ LAKEVIEW CITY CẦN CHO THUÊ 1 CĂN DUY NHẤT, FULL NỘI THẤT GIÁ HOT 26TR/TH. LH 0982608460" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113102454-8155_wm.jpg" is-lazy-image="true" lazy-id="24"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113101440-6343_wm.jpg" is-lazy-image="true" lazy-id="25"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113101739-4463_wm.jpg" is-lazy-image="true" lazy-id="26">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">18</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-song-hanh-phuong-an-phu-prj-khu-do-thi-lakeview-city/-can-cho-1-can-duy-nhat-full-noi-that-gia-hot-26tr-th-lh-0982608460-pr27777729" title="NHÀ PHỐ LAKEVIEW CITY CẦN CHO THUÊ 1 CĂN DUY NHẤT, FULL NỘI THẤT GIÁ HOT 26TR/TH. LH 0982608***" class="vipTwo product-link" style="overflow: visible;">
                            NHÀ PHỐ LAKEVIEW CITY CẦN CHO THUÊ 1 CĂN DUY NHẤT, FULL NỘI THẤT GIÁ HOT 26TR/TH. LH <span class="hidden-mobile m-on-title" raw="0982608460">0982608***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">26 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">4 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">5 WC</span>
                        <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        LAKEVIEW CITY Cần cho thuê nhà phố FULL nội thất không thiếu một thứ gì chỉ cần xách vali vào là ở ngay.
 -Diện tích xây dựng: 5x20m 1 trệt 3 lầu 4 phòng ngủ 5WC, nhà đầy đủ nội thất rất đẹp.
 -Giá thuê hot: 26.000.000 VNĐ/Th Có bớt lộc cho khách thiện chí thuê nhanh.
 -Địa chỉ: 697 Đỗ Xuân Hợp phường An Phú quận 2 TP HCM.
 -Gọi ngay Trường Giang <span class="hidden-mobile des" raw="0982608460">0982608***</span>.
 Sở hữu căn nhà Lak
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">13/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Lê Trường Giang">
                                <span class="contact-name">Lê Trường Giang</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0982608460" raw="0982608460">0982 608 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27777729" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;NH&amp;#192; PHỐ LAKEVIEW CITY CẦN CHO THU&amp;#202; 1 CĂN DUY NHẤT, FULL NỘI THẤT GI&amp;#193; HOT 26TR/TH. LH 0982608460&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113102454-8155_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113101440-6343_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113101739-4463_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/13/20201113102454-8155_wm.jpg" data-vipclass="vip2 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="NHÀ PHỐ LAKEVIEW CITY CẦN CHO THUÊ 1 CĂN DUY NHẤT, FULL NỘI THẤT GIÁ HOT 26TR/TH. LH 0982608460" data-price="26 triệu/tháng" data-area="100 m²" data-pricesort="26000000" data-areasort="100" data-room="4" data-toilets="5" data-address="Quận 2, Hồ Chí Minh" data-description="LAKEVIEW CITY Cần cho thuê nhà phố FULL nội thất không thiếu một thứ gì chỉ cần xách vali vào là ở ngay.
 -Diện tích xây dựng: 5x20m 1 trệt 3 lầu 4 phòng ngủ 5WC, nhà đầy đủ nội thất rất đẹp.
 -Giá thuê hot: 26.000.000 VNĐ/Th Có bớt lộc cho khách thiện chí thuê nhanh.
 -Địa chỉ: 697 Đỗ Xuân Hợp phường An Phú quận 2 TP HCM.
 -Gọi ngay Trường Giang 0982608460.
 Sở hữu căn nhà Lak" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:26:20" data-contactname="Lê Trường Giang" data-contactmobile="0982608460" data-url="/cho-thue-nha-mat-pho-duong-song-hanh-phuong-an-phu-prj-khu-do-thi-lakeview-city/-can-cho-1-can-duy-nhat-full-noi-that-gia-hot-26tr-th-lh-0982608460-pr27777729" data-totalmedia="18" data-createbyuser="1458590"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="1507498">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-quoc-lo-13-phuong-hiep-binh-phuoc-prj-khu-do-thi-van-phuc-city/cho-dt-5x20m-5x22m-6x17m-7x20m-ham-4-lau-gia-23tr-60-tr-th-pr27771532" title="Cho thuê nhà Vạn Phúc City - DT 5x20m 5x22m 6x17m 7x20m (Hầm 4 lầu) giá thuê 23tr - 60 tr/th" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà Vạn Phúc City - DT 5x20m 5x22m 6x17m 7x20m (Hầm 4 lầu) giá thuê 23tr - 60 tr/th" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112172700-3e81_wm.jpg" is-lazy-image="true" lazy-id="27">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">9</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-quoc-lo-13-phuong-hiep-binh-phuoc-prj-khu-do-thi-van-phuc-city/cho-dt-5x20m-5x22m-6x17m-7x20m-ham-4-lau-gia-23tr-60-tr-th-pr27771532" title="Cho thuê nhà Vạn Phúc City - DT 5x20m 5x22m 6x17m 7x20m (Hầm 4 lầu) giá thuê 23tr - 60 tr/th" class="vipTwo product-link">
                            CHO THUÊ NHÀ VẠN PHÚC CITY - DT 5X20M 5X22M 6X17M 7X20M (HẦM 4 LẦU) GIÁ THUÊ 23TR - 60 TR/TH
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">23 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">105 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thủ Đức, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        CHO THUÊ VĂN PHÒNG, NHÀ Ở TẠI VẠN PHÚC CITY
 1. Cho thuê nhà nguyên căn: phù hợp vừa ở vừa làm văn phòng, kinh doanh.
 Diện tích: 5x20, kết cấu hầm, trệt, 4 lầu: giá từ 25  28 triệu.
 Diện tích: 7x20
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
                                <i class="iconSave" data-productid="27771532" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; Vạn Ph&amp;#250;c City - DT 5x20m 5x22m 6x17m 7x20m (Hầm 4 lầu) gi&amp;#225; thu&amp;#234; 23tr - 60 tr/th&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112172700-3e81_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112172700-3e81_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà Vạn Phúc City - DT 5x20m 5x22m 6x17m 7x20m (Hầm 4 lầu) giá thuê 23tr - 60 tr/th" data-price="23 triệu/tháng" data-area="105 m²" data-pricesort="23000000" data-areasort="105" data-room="0" data-toilets="0" data-address="Thủ Đức, Hồ Chí Minh" data-description="CHO THUÊ VĂN PHÒNG, NHÀ Ở TẠI VẠN PHÚC CITY
 1. Cho thuê nhà nguyên căn: phù hợp vừa ở vừa làm văn phòng, kinh doanh.
 Diện tích: 5x20, kết cấu hầm, trệt, 4 lầu: giá từ 25  28 triệu.
 Diện tích: 7x20" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 06:21:57" data-contactname="Nguyễn Thị Hải Phượng" data-contactmobile="0962514415" data-url="/cho-thue-nha-mat-pho-duong-quoc-lo-13-phuong-hiep-binh-phuoc-prj-khu-do-thi-van-phuc-city/cho-dt-5x20m-5x22m-6x17m-7x20m-ham-4-lau-gia-23tr-60-tr-th-pr27771532" data-totalmedia="9" data-createbyuser="1507498"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="1168605">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-le-van-viet-phuong-hiep-phu/cho-nguyen-can-goc-2-tien-quan-9-tphcm-8x30-45tr-th-pr27773405" title="Cho thuê nhà nguyên căn góc 2 mặt tiền đường Lê Văn Việt, Quận 9, TP.HCM, 8.5x30m, 45tr/th" onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà nguyên căn góc 2 mặt tiền đường Lê Văn Việt, Quận 9, TP.HCM, 8.5x30m, 45tr/th" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113014445-ab92_wm.jpg" is-lazy-image="true" lazy-id="28">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-le-van-viet-phuong-hiep-phu/cho-nguyen-can-goc-2-tien-quan-9-tphcm-8x30-45tr-th-pr27773405" title="Cho thuê nhà nguyên căn góc 2 mặt tiền đường Lê Văn Việt, Quận 9, TP.HCM, 8.5x30m, 45tr/th" class="vipTwo product-link">
                            CHO THUÊ NHÀ NGUYÊN CĂN GÓC 2 MẶT TIỀN ĐƯỜNG LÊ VĂN VIỆT, QUẬN 9, TP.HCM, 8.5X30M, 45TR/TH
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">45 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">240 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 9, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Cho thuê nhà nguyên căn góc 2 mặt tiền đường Lê Văn Việt, Quận 9, TP.HCM. DT: 8,5 x 30m, nhà mới xây trống suốt, vị trí góc 2 mặt tiền cực đẹp, gần Vincom và ngã tư Thủ Đức, thích hợp showroom, phòng
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
                                <i class="iconSave" data-productid="27773405" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; nguy&amp;#234;n căn g&amp;#243;c 2 mặt tiền đường L&amp;#234; Văn Việt, Quận 9, TP.HCM, 8.5x30m, 45tr/th&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113014445-ab92_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/13/20201113014445-ab92_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà nguyên căn góc 2 mặt tiền đường Lê Văn Việt, Quận 9, TP.HCM, 8.5x30m, 45tr/th" data-price="45 triệu/tháng" data-area="240 m²" data-pricesort="45000000" data-areasort="240" data-room="1" data-toilets="1" data-address="Quận 9, Hồ Chí Minh" data-description="Cho thuê nhà nguyên căn góc 2 mặt tiền đường Lê Văn Việt, Quận 9, TP.HCM. DT: 8,5 x 30m, nhà mới xây trống suốt, vị trí góc 2 mặt tiền cực đẹp, gần Vincom và ngã tư Thủ Đức, thích hợp showroom, phòng" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 01:46:29" data-contactname="Nguyễn Văn Hổ" data-contactmobile="0979555306" data-url="/cho-thue-nha-mat-pho-duong-le-van-viet-phuong-hiep-phu/cho-nguyen-can-goc-2-tien-quan-9-tphcm-8x30-45tr-th-pr27773405" data-totalmedia="1" data-createbyuser="1168605"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="1508648">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-xa-tan-binh-15/cho-tien-600m2-tai-thon-an-la-gi-phu-hop-lam-xuong-cong-ty-pr27770885" title="Cho thuê nhà mặt tiền 600m2 tại thôn Bình An, Tân Bình, La Gi phù hợp làm xương, công ty..." onclick="">
                        <img class="product-avatar-img" alt="Cho thuê nhà mặt tiền 600m2 tại thôn Bình An, Tân Bình, La Gi phù hợp làm xương, công ty..." error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/UaN6k8zq/20201112164951-2d61_wm.jpg" is-lazy-image="true" lazy-id="29">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">2</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-xa-tan-binh-15/cho-tien-600m2-tai-thon-an-la-gi-phu-hop-lam-xuong-cong-ty-pr27770885" title="Cho thuê nhà mặt tiền 600m2 tại thôn Bình An, Tân Bình, La Gi phù hợp làm xương, công ty..." class="vipFour product-link">
                            CHO THUÊ NHÀ MẶT TIỀN 600M2 TẠI THÔN BÌNH AN, TÂN BÌNH, LA GI PHÙ HỢP LÀM XƯƠNG, CÔNG TY...
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">30 triệu/tháng</span>
                            <span class="dot">·</span>
                            <span class="area">644 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">La Gi, Bình Thuận  </span>
                    </div>
                    <div class="product-content">
                        Chính chủ cho thuê nhà nguyên căn mặt tiền 600m2, DT: 11,5m x 56m2 tường bao, thôn Bình An, xã Tân Bình - thị xã La gi - Bình Thuận (cách bãi biển Đồ Dương 2 km) khu dân cư, có chợ xây lớn, 2 trường 
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
                                <i class="iconSave" data-productid="27770885" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; mặt tiền 600m2 tại th&amp;#244;n B&amp;#236;nh An, T&amp;#226;n B&amp;#236;nh, La Gi ph&amp;#249; hợp l&amp;#224;m xương, c&amp;#244;ng ty...&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/UaN6k8zq/20201112164951-2d61_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/UaN6k8zq/20201112164951-2d61_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nhà mặt tiền 600m2 tại thôn Bình An, Tân Bình, La Gi phù hợp làm xương, công ty..." data-price="30 triệu/tháng" data-area="644 m²" data-pricesort="30000000" data-areasort="644" data-room="0" data-toilets="0" data-address="La Gi, Bình Thuận  " data-description="Chính chủ cho thuê nhà nguyên căn mặt tiền 600m2, DT: 11,5m x 56m2 tường bao, thôn Bình An, xã Tân Bình - thị xã La gi - Bình Thuận (cách bãi biển Đồ Dương 2 km) khu dân cư, có chợ xây lớn, 2 trường " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 16:50:17" data-contactname="Chị Hà" data-contactmobile="0349144965" data-url="/cho-thue-nha-mat-pho-xa-tan-binh-15/cho-tien-600m2-tai-thon-an-la-gi-phu-hop-lam-xuong-cong-ty-pr27770885" data-totalmedia="2" data-createbyuser="1508648"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-center">
            <div class="pagination">
<a pid="1" class="actived" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho">1</a>
<a pid="2" class="" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/p2">2</a>
<a pid="3" class="" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/p3">3</a>
<a pid="4" class="" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/p4">4</a>
<a pid="5" class="" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/p5">5</a>
<a pid="283" href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/p283"><img src="./assets/image/ic_double_caret_right.png"></a>
</div>

        </div>
    </div>






    <div class="divide">&nbsp;</div>
<div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Cho thuê nhà mặt phố giá rẻ" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-mat-pho-gia-re">Cho thuê nhà mặt phố giá rẻ</a></li>    <li><a title="Cho thuê nhà mặt phố chính chủ" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-mat-pho-chinh-chu">Cho thuê nhà mặt phố chính chủ</a></li>    <li><a title="thuê cửa hàng gần trường học" href="https://batdongsan.com.vn/tags/cho-thue/thue-cua-hang-gan-truong-hoc">thuê cửa hàng gần trường học</a></li>    <li><a title="cho thuê nhà nguyên căn kinh doanh" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-nguyen-can-kinh-doanh">cho thuê nhà nguyên căn kinh doanh</a></li>    <li><a title="cho thuê nhà nguyên căn mặt tiền" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-nguyen-can-mat-tien">cho thuê nhà nguyên căn mặt tiền</a></li>    <li><a title="cho thuê nhà nguyên căn tại 7" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-nguyen-can-tai-7">cho thuê nhà nguyên căn tại 7</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
    <div class="product-seo-text">
        <div><strong>Cho thuê nhà mặt phố, cho thuê nhà mặt tiền giá rẻ</strong></div>
                                <div>Thị trường cho thuê nhà mặt phố chưa bao giờ có dấu hiệu hạ nhiệt bởi ngành dịch vụ đang ngày càng phát triển mạnh không chỉ ở các thành phố lớn, vì vậy nhu cầu thuê nhà mặt phố để kinh doanh luôn thu hút sự quan tâm của nhiều khách hàng. </div>
                                <div>Đặc biệt, người Việt có thói quen mua hàng tại các vị trí tiện lợi như mặt đường. Đồng thời giá thuê nhà mặt phố và thuê mặt bằng tại các trung tâm thương mại gần như ngang nhau, trong khi lượng khách hàng đến mua sắm và tiêu dùng ở những cửa hàng mặt phố thường đông hơn, cho nên thị trường cho thuê nhà mặt phố vẫn được nhiều người ưu tiên chọn thuê. Theo <strong>Batdongsan.com.vn</strong> đánh giá thì thị trường này vẫn tiềm năng do số lượng nhà mặt phố cho thuê còn lại không nhiều, nhất là cho thuê cửa hàng Hà Nội chính chủ hay cho thuê nhà nguyên căn Tphcm để kinh doanh.</div>
                                <div>Trước sức hút của thị trường cho thuê nhà mặt phố <strong>Việt Nam</strong>, nhiều người đã có quyết định chuyển sang định cư tại các căn hộ chung cư và để dành nhà mặt phố cho thuê. Thay vì bán căn nhà đi, họ xem nhà mặt phố như một loại tài sản tích lũy dài hạn mà không sợ mất giá.</div>
                                <div>Hơn nữa, việc cho thuê nhà mặt phố <strong>Việt Nam</strong> hiện nay khá dễ do nhu cầu cao và lợi nhuận thu về tốt hơn so với căn hộ chung cư, cũng như nguồn thu ổn định hơn so với các kênh đầu tư khác.</div>
                                <div><strong>Batdongsan.com.vn</strong> là kênh thông tin uy tín về thị trường bán và cho thuê bất động sản, tại đây bạn sẽ tìm thấy những tin tức cho thuê nhà mặt phố <strong>Việt Nam</strong> chính xác, nhanh chóng và đầy đủ nhất. </div>
                                <div>Để tìm được căn nhà mặt phố cho thuê ưng ý nhất, batdongsan.com.vn gợi ý một số kinh nghiệm hữu ích sau đây:</div>
                                <ul>
                                <li>- Lựa chọn vị trí phù hợp: việc xem xét, đánh giá vị trí của căn nhà phố trước khi quyết định thuê là vô cùng cần thiết. Bạn nên chú ý đến các yếu tố quan trọng như hướng căn nhà, diện tích và mặt bằng có phù hợp với mục đích kinh doanh hay không, hệ thống điện, nước, internet...</li>
                                <li>- Không nên vội vàng: Hãy tìm hiểu thật nhiều thông tin cho thuê nhà mặt phố <strong>Việt Nam</strong> trên trang <strong>Batdongsan.com.vn</strong> để so sánh về mức giá, về những ưu nhược điểm của các căn nhà, từ đó đưa ra quyết định thuê đúng đắn nhất.</li>
                                <li>- Xem xét kỹ hợp đồng cho thuê: bạn hãy xem xét thật kỹ hợp đồng cho thuê về các điều khoản, thỏa thuận cũng như chi phí đặt cọc, chi phí thuê và các khoản phát sinh khác. Ngoài ra, hãy thỏa thuận về cam kết không tăng giá thuê trong một thời gian nhất định để tránh trường hợp chủ nhà đòi tăng giá thuê nhiều lần. </li>
                                </ul>
    </div>
<form id="productListBinnova" method="post">
    <input id="hashAlias" type="hidden" value="968bc015bba62aab11eb1da307b5c98e02ac9c0b05bfd842940c6c651c5bf5d6">
</form>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
            var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                model: {
                    typeOfProduct: 49,
                    categoryId: 51,
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
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/-1/2/-1/-1" title="Cho thuê nhà mặt phố Việt Nam giá 1 - 3 triệu">1 - 3 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/-1/3/-1/-1" title="Cho thuê nhà mặt phố Việt Nam giá 3 - 5 triệu">3 - 5 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/-1/4/-1/-1" title="Cho thuê nhà mặt phố Việt Nam giá 5 - 10 triệu">5 - 10 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/-1/5/-1/-1" title="Cho thuê nhà mặt phố Việt Nam giá 10 - 40 triệu">10 - 40 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/-1/6/-1/-1" title="Cho thuê nhà mặt phố Việt Nam giá 40 - 70 triệu">40 - 70 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/-1/7/-1/-1" title="Cho thuê nhà mặt phố Việt Nam giá 70 - 100 triệu">70 - 100 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/-1/8/-1/-1" title="Cho thuê nhà mặt phố Việt Nam giá &gt; 100 triệu">&gt; 100 triệu</a></li>
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
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/1/-1/-1/-1" title="Cho thuê nhà mặt phố Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/2/-1/-1/-1" title="Cho thuê nhà mặt phố Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/3/-1/-1/-1" title="Cho thuê nhà mặt phố Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/4/-1/-1/-1" title="Cho thuê nhà mặt phố Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/5/-1/-1/-1" title="Cho thuê nhà mặt phố Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/6/-1/-1/-1" title="Cho thuê nhà mặt phố Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/7/-1/-1/-1" title="Cho thuê nhà mặt phố Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/8/-1/-1/-1" title="Cho thuê nhà mặt phố Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/9/-1/-1/-1" title="Cho thuê nhà mặt phố Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho/10/-1/-1/-1" title="Cho thuê nhà mặt phố Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
        <h2 class="box-title">Cho thuê nhà mặt phố</h2>

        <div class="box-content link-hover-blue">
            <ul>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-tp-hcm" title="Cho thuê nhà mặt phố tại Hồ Chí Minh">
                                Hồ Chí Minh (3323)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-ha-noi" title="Cho thuê nhà mặt phố tại Hà Nội">
                                Hà Nội (1727)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-da-nang" title="Cho thuê nhà mặt phố tại Đà Nẵng">
                                Đà Nẵng (164)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-hai-phong" title="Cho thuê nhà mặt phố tại Hải Phòng">
                                Hải Phòng (94)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-binh-duong" title="Cho thuê nhà mặt phố tại Bình Dương">
                                Bình Dương (71)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-thanh-hoa" title="Cho thuê nhà mặt phố tại Thanh Hóa">
                                Thanh Hóa (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-can-tho" title="Cho thuê nhà mặt phố tại Cần Thơ">
                                Cần Thơ (40)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-binh-dinh" title="Cho thuê nhà mặt phố tại Bình Định">
                                Bình Định (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-hung-yen" title="Cho thuê nhà mặt phố tại Hưng Yên">
                                Hưng Yên (9)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-kien-giang" title="Cho thuê nhà mặt phố tại Kiên Giang">
                                Kiên Giang (11)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-gia-lai" title="Cho thuê nhà mặt phố tại Gia Lai">
                                Gia Lai (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-long-an" title="Cho thuê nhà mặt phố tại Long An">
                                Long An (6)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-ca-mau" title="Cho thuê nhà mặt phố tại Cà Mau">
                                Cà Mau (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-quang-ninh" title="Cho thuê nhà mặt phố tại Quảng Ninh">
                                Quảng Ninh (9)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-hai-duong" title="Cho thuê nhà mặt phố tại Hải Dương">
                                Hải Dương (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-an-giang" title="Cho thuê nhà mặt phố tại An Giang">
                                An Giang (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-lam-dong" title="Cho thuê nhà mặt phố tại Lâm Đồng">
                                Lâm Đồng (4)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-ninh-binh" title="Cho thuê nhà mặt phố tại Ninh Bình">
                                Ninh Bình (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-khanh-hoa" title="Cho thuê nhà mặt phố tại Khánh Hòa">
                                Khánh Hòa (44)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-quang-binh" title="Cho thuê nhà mặt phố tại Quảng Bình">
                                Quảng Bình (2)
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
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-pho-chua-lang-3" title="Cho thuê nhà mặt phố Chùa Láng">
                                    Cho thuê nhà mặt phố Chùa Láng
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-tran-hung-dao-1" title="Cho thuê nhà mặt phố Trần Hưng Đạo">
                                    Cho thuê nhà mặt phố Trần Hưng Đạo
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-pho-bach-mai-4" title="Cho thuê nhà mặt phố Bạch Mai">
                                    Cho thuê nhà mặt phố Bạch Mai
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-tran-duy-hung-7" title="Cho thuê nhà mặt phố Trần Duy Hưng">
                                    Cho thuê nhà mặt phố Trần Duy Hưng
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-doi-can-2" title="Cho thuê nhà mặt phố Đội cấn">
                                    Cho thuê nhà mặt phố Đội cấn
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-nguyen-chi-thanh-3" title="Cho thuê nhà mặt phố Nguyễn Chí Thanh">
                                    Cho thuê nhà mặt phố Nguyễn Chí Thanh
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-to-hieu-7" title="Cho thuê nhà mặt phố Tô Hiệu">
                                    Cho thuê nhà mặt phố Tô Hiệu
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-five-star-eco-city" title="Five Star">
                                    Five Star
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-pho-trung-hoa-7" title="Cho thuê nhà mặt phố Trung Hòa">
                                    Cho thuê nhà mặt phố Trung Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-pho-ton-duc-thang-3" title="Cho thuê nhà mặt phố Tôn Đức Thắng">
                                    Cho thuê nhà mặt phố Tôn Đức Thắng
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-pho-kham-thien-3" title="Cho thuê nhà mặt phố Khâm Thiên">
                                    Cho thuê nhà mặt phố Khâm Thiên
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-dao-tan-2" title="Cho thuê nhà mặt phố Đào Tấn">
                                    Cho thuê nhà mặt phố Đào Tấn
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-gia-hoa" title="Khu dân cư Gia Hòa">
                                    Khu dân cư Gia Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-hoang-quoc-viet-7" title="Cho thuê nhà mặt phố Hoàng Quốc Việt">
                                    Cho thuê nhà mặt phố Hoàng Quốc Việt
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-nguyen-khanh-toan-7" title="Cho thuê nhà mặt phố Nguyễn Khánh Toàn">
                                    Cho thuê nhà mặt phố Nguyễn Khánh Toàn
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-phan-xich-long-68" title="Cho thuê nhà mặt tiền Phan Xích Long">
                                    Cho thuê nhà mặt tiền Phan Xích Long
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-vo-van-tan-55" title="Cho thuê nhà mặt tiền Võ Văn Tần">
                                    Cho thuê nhà mặt tiền Võ Văn Tần
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-nguyen-trai-53" title="Cho thuê nhà mặt tiền Nguyễn Trãi">
                                    Cho thuê nhà mặt tiền Nguyễn Trãi
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-ocean-vista" title="Bán chung cư Ocean Vista">
                                    Bán chung cư Ocean Vista
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-mat-pho-duong-3-2-3-62" title="Cho thuê nhà mặt tiền 3-2">
                                    Cho thuê nhà mặt tiền 3-2
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
            