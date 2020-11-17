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
                    <div class="custom-value hasvalue">Văn phòng</div>
                </div>
                <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="50">
                <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                        <li vl="0"><span class="current">Tất cả nhà đất</span></li>
                                        <li vl="326"><span>Căn hộ chung cư</span></li>
                                        <li vl="52"><span>Nhà riêng</span></li>
                                        <li vl="51"><span>Nhà mặt phố</span></li>
                                        <li vl="57"><span>Nhà trọ, phòng trọ</span></li>
                                        <li vl="50"><span class="active">Văn phòng</span></li>
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
                            <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-van-phong#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-van-phong#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                            <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-van-phong#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-van-phong#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                    categoryId: 50,
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
        <a href="https://batdongsan.com.vn/cho-thue-van-phong" level="1" title="Cho thuê văn phòng tại Việt Nam">Cho thuê</a><span>/</span><a href="https://batdongsan.com.vn/cho-thue-van-phong" level="2" title="Cho thuê văn phòng tại Việt Nam">Văn phòng trên toàn quốc</a>
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
            {"@context":"https://schema.org/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Trang chủ","item":"https://batdongsan.com.vn"},{"@type":"ListItem","position":2,"name":"Cho thuê","item":"https://batdongsan.com.vn/cho-thue-van-phong"},{"@type":"ListItem","position":3,"name":"Văn phòng trên toàn quốc","item":"https://batdongsan.com.vn/cho-thue-van-phong"}]}
        </script>
    
    <div class="product-list-header pad-top-8">
        <h1>Cho thuê văn phòng tại Việt Nam</h1>
            <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">5,372</span> bất động sản.</div>
        
    
    </div>
        <div class="product-search-most mar-top-8 mar-bot-8">
            <div class="box-title">Các khu vực, địa điểm nổi bật</div>
            <ul class="clearfix link-hover-blue">
                    <li><a href="https://batdongsan.com.vn/cho-thue-van-phong-binh-chanh">Cho thuê văn phòng Bình Chánh</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-van-phong-phu-my-hung">Văn phòng Phú Mỹ Hưng</a></li>
                    <li><a href="https://batdongsan.com.vn/khu-du-lich-nghi-duong-quoc-oai/khu-du-lich-sinh-thai-tuan-chau-ha-noi-pj585">Khu du lịch sinh thái Tuần Châu Hà Nội</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-van-phong-khu-do-thi-moi-dich-vong">Văn phòng ĐTM Dịch Vọng</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-van-phong-khu-do-thi-yen-hoa">Cho thuê văn phòng Yên Hòa</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-my-hao">Biệt thự Mỹ Hào</a></li>
            </ul>
        </div>
    
        <div class="product-nav-bar pad-top-8 clearfix">
            <ul class="ul-tab fl mar-right-16">
                <li class="list-display actived">Danh sách</li>
                <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
                <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-cho-thue-van-phong">Bản đồ</a></li>
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
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-hoang-quoc-viet-phuong-nghia-tan-3/chinh-chu-cho-mat-bang-kinh-doanh-dep-gia-re-tai-69-pham-tuan-tai-cau-giay-pr27779109" title="CHÍNH CHỦ CHO THUÊ VĂN PHÒNG , MẶT BẰNG KINH DOANH, ĐẸP , GIÁ RẺ ,TẠI 69 PHẠM TUẤN TÀI , CẦU GIẤY" onclick="">
                            <img class="product-avatar-img" alt="CHÍNH CHỦ CHO THUÊ VĂN PHÒNG , MẶT BẰNG KINH DOANH, ĐẸP , GIÁ RẺ ,TẠI 69 PHẠM TUẤN TÀI , CẦU GIẤY" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201113105528-0eda_wm.jpg" is-lazy-image="true" lazy-id="0"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/20201113105509-a1fd_wm.jpg" is-lazy-image="true" lazy-id="1"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/20201113105534-6543_wm.jpg" is-lazy-image="true" lazy-id="2">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-hoang-quoc-viet-phuong-nghia-tan-3/chinh-chu-cho-mat-bang-kinh-doanh-dep-gia-re-tai-69-pham-tuan-tai-cau-giay-pr27779109" title="CHÍNH CHỦ CHO THUÊ VĂN PHÒNG , MẶT BẰNG KINH DOANH, ĐẸP , GIÁ RẺ ,TẠI 69 PHẠM TUẤN TÀI , CẦU GIẤY" class="vipZero product-link">
                                CHÍNH CHỦ CHO THUÊ VĂN PHÒNG , MẶT BẰNG KINH DOANH, ĐẸP , GIÁ RẺ ,TẠI 69 PHẠM TUẤN TÀI , CẦU GIẤY
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">9.5 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">75 m²</span>
                                                            <span class="dot">·</span>
                                    <span class="bedroom">8 PN</span>
                            <span class="location">Cầu Giấy, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Chính chủ cho thuê văn phòng , mặt bằng kinh doanh , đẹp giá rẻ , diện tích 75m2/sàn .
     tầng 1 : giá 15 triệu/tháng
     tầng 2 : giá 9.5 triệu/tháng
     tầng 6 : giá 9.5 triệu/tháng
     tầng 8 : giá 6.5 triệu/tháng
     tòa nhà đã trang bị đầy đủ điều hòa , đèn , thang máy , camera 24/24, có bảo vệ , có hầm để xe.
     phù hợp mô hình : văn phòng , phòng trưng bày , kinh doanh .....
     Tòa nhà nằ
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
                                    <i class="iconSave" data-productid="27779109" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;CH&amp;#205;NH CHỦ CHO THU&amp;#202; VĂN PH&amp;#210;NG , MẶT BẰNG KINH DOANH, ĐẸP , GI&amp;#193; RẺ ,TẠI 69 PHẠM TUẤN T&amp;#192;I , CẦU GIẤY&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113105528-0eda_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113105509-a1fd_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113105534-6543_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/13/20201113105528-0eda_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="CHÍNH CHỦ CHO THUÊ VĂN PHÒNG , MẶT BẰNG KINH DOANH, ĐẸP , GIÁ RẺ ,TẠI 69 PHẠM TUẤN TÀI , CẦU GIẤY" data-price="9.5 triệu/tháng" data-area="75 m²" data-pricesort="9500000" data-areasort="75" data-room="8" data-toilets="0" data-address="Cầu Giấy, Hà Nội" data-description="Chính chủ cho thuê văn phòng , mặt bằng kinh doanh , đẹp giá rẻ , diện tích 75m2/sàn .
     tầng 1 : giá 15 triệu/tháng
     tầng 2 : giá 9.5 triệu/tháng
     tầng 6 : giá 9.5 triệu/tháng
     tầng 8 : giá 6.5 triệu/tháng
     tòa nhà đã trang bị đầy đủ điều hòa , đèn , thang máy , camera 24/24, có bảo vệ , có hầm để xe.
     phù hợp mô hình : văn phòng , phòng trưng bày , kinh doanh .....
     Tòa nhà nằ" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 11:15:09" data-contactname="Đỗ Thế" data-contactmobile="0988988169" data-url="/cho-thue-van-phong-duong-hoang-quoc-viet-phuong-nghia-tan-3/chinh-chu-cho-mat-bang-kinh-doanh-dep-gia-re-tai-69-pham-tuan-tai-cau-giay-pr27779109" data-totalmedia="4" data-createbyuser="337034"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 vipaddon product-item clearfix" uid="602090">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-tan-mai-phuong-tan-mai-2-prj-mandarin-garden-2/cho-cao-cap-tai-2-quan-hoang-pr27407491" title="Cho thuê văn phòng cao cấp tại Mandarin Garden 2, Tân Mai, Quận Hoàng Mai" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê văn phòng cao cấp tại Mandarin Garden 2, Tân Mai, Quận Hoàng Mai" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201014103539-c3bb_wm.jpg" is-lazy-image="true" lazy-id="3"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/14/20201014103538-4369_wm.jpg" is-lazy-image="true" lazy-id="4"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/14/20201014103538-ebb0_wm.jpg" is-lazy-image="true" lazy-id="5">
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
                <div class="vip0 vipaddon product-item clearfix" uid="193626">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-huynh-tan-phat-phuong-phu-thuan-3/toa-moi-cho-30-50-180-1000m2-ngay-canh-my-hung-200k-m2-pr25774115" title="Tòa văn phòng mới cho thuê 30-50-180-1000m2 ngay cạnh Phú Mỹ Hưng 200k/m2" onclick="">
                            <img class="product-avatar-img" alt="Tòa văn phòng mới cho thuê 30-50-180-1000m2 ngay cạnh Phú Mỹ Hưng 200k/m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609222756-484d_wm.jpg" is-lazy-image="true" lazy-id="6"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609222756-722b_wm.jpg" is-lazy-image="true" lazy-id="7"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609222756-ad4f_wm.jpg" is-lazy-image="true" lazy-id="8">
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
                <div class="vip0 product-item clearfix" uid="257124">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-tho-thap-phuong-dich-vong-hau/chinh-chu-cho-san-gia-re-ho-tro-mua-tai-pho-tran-thai-tong-duy-tan-pr26757419" title="Chính chủ cho thuê sàn văn phòng tại số 21 mặt phố Thọ Tháp và phố 76 Duy Tân nhiều diện tích" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cho thuê sàn văn phòng tại số 21 mặt phố Thọ Tháp và phố 76 Duy Tân nhiều diện tích" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/07/20201007160504-80a5_wm.jpg" is-lazy-image="true" lazy-id="9">
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
                            <img class="product-avatar-img" alt="Cho thuê mặt bằng kinh doanh văn phòng khu đô thị Sala" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111100217-fe7c_wm.jpg" is-lazy-image="true" lazy-id="10"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111100238-3f8a_wm.jpg" is-lazy-image="true" lazy-id="11"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111100245-7b8c_wm.jpg" is-lazy-image="true" lazy-id="12">
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
                <div class="vip0 product-item clearfix" uid="1364106">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-luong-bang-1-phuong-tan-phu-19-prj-golden-king/ban-va-cho-can-ho-officetel-duy-nhat-tai-my-hung-pr27466486" title="Bán và Cho thuê căn hộ văn phòng (Officetel) duy nhất tại Phú Mỹ Hưng" onclick="">
                            <img class="product-avatar-img" alt="Bán và Cho thuê căn hộ văn phòng (Officetel) duy nhất tại Phú Mỹ Hưng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019140345-cefb_wm.jpg" is-lazy-image="true" lazy-id="13">
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
                <div class="vip0 product-item clearfix" uid="343756">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-le-trung-nghia-69/chinh-chu-cho-khu-k300-tan-binh-gia-tot-pr26046894" title="Chính chủ cho thuê văn phòng khu K300, Tân Bình, giá tốt (có thương lượng)" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cho thuê văn phòng khu K300, Tân Bình, giá tốt (có thương lượng)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/29/20200629160745-7317_wm.jpg" is-lazy-image="true" lazy-id="14">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">9</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-le-trung-nghia-69/chinh-chu-cho-khu-k300-tan-binh-gia-tot-pr26046894" title="Chính chủ cho thuê văn phòng khu K300, Tân Bình, giá tốt (có thương lượng)" class="vipZero product-link">
                                CHÍNH CHỦ CHO THUÊ VĂN PHÒNG KHU K300, TÂN BÌNH, GIÁ TỐT (CÓ THƯƠNG LƯỢNG)
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">12 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">50 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Tân Bình, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Chính chủ cho thuê 2 văn phòng khu K300 mặt tiền đường Lê Trung Nghĩa, quận Tân Bình vị trí đẹp, giá tốt.Địa chỉ: 21 Lê Trung Nghĩa, Tân Bình, HCM.Diện tích: 40m2. Giá thuê: 10,000,000 vnđ (chưa VAT)
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
                                    <i class="iconSave" data-productid="26046894" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; văn ph&amp;#242;ng khu K300, T&amp;#226;n B&amp;#236;nh, gi&amp;#225; tốt (c&amp;#243; thương lượng)&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/29/20200629160745-7317_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/06/29/20200629160745-7317_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê văn phòng khu K300, Tân Bình, giá tốt (có thương lượng)" data-price="12 triệu/tháng" data-area="50 m²" data-pricesort="12000000" data-areasort="50" data-room="0" data-toilets="0" data-address="Tân Bình, Hồ Chí Minh" data-description="Chính chủ cho thuê 2 văn phòng khu K300 mặt tiền đường Lê Trung Nghĩa, quận Tân Bình vị trí đẹp, giá tốt.Địa chỉ: 21 Lê Trung Nghĩa, Tân Bình, HCM.Diện tích: 40m2. Giá thuê: 10,000,000 vnđ (chưa VAT)" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 16:03:31" data-contactname="Nga Linh" data-contactmobile="0989208221" data-url="/cho-thue-van-phong-duong-le-trung-nghia-69/chinh-chu-cho-khu-k300-tan-binh-gia-tot-pr26046894" data-totalmedia="9" data-createbyuser="343756"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="146931">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-pho-dich-vong-hau-phuong-dich-vong-hau/chinh-chu-cho-mat-bang-kd-va-tai-quan-hoa-nguyenc-khang-cau-giay-pr27666375" title="Chính chủ cho thuê mặt bằng KD văn phòng tại Dịch Vọng Hậu, Quan Hoa, Nguyễn Khang, Cầu Giấy" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cho thuê mặt bằng KD văn phòng tại Dịch Vọng Hậu, Quan Hoa, Nguyễn Khang, Cầu Giấy" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/05/20201105071311-fe58_wm.jpg" is-lazy-image="true" lazy-id="15">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">5</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-pho-dich-vong-hau-phuong-dich-vong-hau/chinh-chu-cho-mat-bang-kd-va-tai-quan-hoa-nguyenc-khang-cau-giay-pr27666375" title="Chính chủ cho thuê mặt bằng KD văn phòng tại Dịch Vọng Hậu, Quan Hoa, Nguyễn Khang, Cầu Giấy" class="vipZero product-link">
                                CHÍNH CHỦ CHO THUÊ MẶT BẰNG KD VĂN PHÒNG TẠI DỊCH VỌNG HẬU, QUAN HOA, NGUYỄN KHANG, CẦU GIẤY
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">22 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">110 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Cầu Giấy, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Chính chủ cho thuê mặt bằng kinh doanh văn phòng tại Quận Cầu Giấy diện tích từ 65m2 đến 700m2. 1. Cho thuê mặt bằng tại số C15D21 Dịch Vọng Hậu, diện tích 110m2 tầng lửng giá cho thuê 32 triệu/tháng
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    1 tuần trước
                                    <span class="tooltip-time">05/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27666375" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; mặt bằng KD văn ph&amp;#242;ng tại Dịch Vọng Hậu, Quan Hoa, Nguyễn Khang, Cầu Giấy&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/05/20201105071311-fe58_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/05/20201105071311-fe58_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê mặt bằng KD văn phòng tại Dịch Vọng Hậu, Quan Hoa, Nguyễn Khang, Cầu Giấy" data-price="22 triệu/tháng" data-area="110 m²" data-pricesort="22000000" data-areasort="110" data-room="0" data-toilets="0" data-address="Cầu Giấy, Hà Nội" data-description="Chính chủ cho thuê mặt bằng kinh doanh văn phòng tại Quận Cầu Giấy diện tích từ 65m2 đến 700m2. 1. Cho thuê mặt bằng tại số C15D21 Dịch Vọng Hậu, diện tích 110m2 tầng lửng giá cho thuê 32 triệu/tháng" data-duration="1 tuần trước" data-updatedtime="05/11/2020" data-datesort="11/05/2020 07:15:26" data-contactname="Khắc Thống Luxury Land" data-contactmobile="0978127635" data-url="/cho-thue-van-phong-pho-dich-vong-hau-phuong-dich-vong-hau/chinh-chu-cho-mat-bang-kd-va-tai-quan-hoa-nguyenc-khang-cau-giay-pr27666375" data-totalmedia="5" data-createbyuser="146931"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 vipaddon product-item clearfix" uid="1509191">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/-sat-35m2-pr27780231" title="VĂN PHÒNG CITYLAND SÁT PHAN VĂN TRỊ 35M2" onclick="">
                            <img class="product-avatar-img" alt="VĂN PHÒNG CITYLAND SÁT PHAN VĂN TRỊ 35M2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113122255-a9fc_wm.jpg" is-lazy-image="true" lazy-id="16"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113122254-5eba_wm.jpg" is-lazy-image="true" lazy-id="17"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113122254-4617_wm.jpg" is-lazy-image="true" lazy-id="18">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/-sat-35m2-pr27780231" title="VĂN PHÒNG CITYLAND SÁT PHAN VĂN TRỊ 35M2" class="vipOne product-link">
                                VĂN PHÒNG CITYLAND SÁT PHAN VĂN TRỊ 35M2
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">5 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">35 m²</span>
                                                    <span class="location">Gò Vấp, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cho thuê văn phòng trong nhà nguyên cán Nhà số 5 đường số 5 kdc cityland p10 gò vấp Vân phòng rộng 35m2 Có cho thuê nguyên tầng Nhà mới CÓ MÁY LẠNH INVECTER 1.5HP Cách phan văn trị 5m Giá 5tr/ tháng Miễn môi giới Còn tin còn phòng
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    Hôm nay
                                    <span class="tooltip-time">13/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Phạm Văn Dũng">
                                    <span class="contact-name">Phạm Văn Dũng</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0901203350" raw="0901203350">0901 203 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27780231" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;VĂN PH&amp;#210;NG CITYLAND S&amp;#193;T PHAN VĂN TRỊ 35M2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113122255-a9fc_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113122254-5eba_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113122254-4617_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/13/20201113122255-a9fc_wm.jpg" data-vipclass="vip1 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="VĂN PHÒNG CITYLAND SÁT PHAN VĂN TRỊ 35M2" data-price="5 triệu/tháng" data-area="35 m²" data-pricesort="5000000" data-areasort="35" data-room="0" data-toilets="0" data-address="Gò Vấp, Hồ Chí Minh" data-description="Cho thuê văn phòng trong nhà nguyên cán Nhà số 5 đường số 5 kdc cityland p10 gò vấp Vân phòng rộng 35m2 Có cho thuê nguyên tầng Nhà mới CÓ MÁY LẠNH INVECTER 1.5HP Cách phan văn trị 5m Giá 5tr/ tháng Miễn môi giới Còn tin còn phòng" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 12:39:17" data-contactname="Phạm Văn Dũng" data-contactmobile="0901203350" data-url="/cho-thue-van-phong-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/-sat-35m2-pr27780231" data-totalmedia="6" data-createbyuser="1509191"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1433992">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-le-quang-dao-phuong-my-dinh-2/cho-dien-tich-80m2-mat-dao-pr26399960" title="Cho thuê văn phòng diện tích 80m2, mặt đường Lê Quang Đạo" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê văn phòng diện tích 80m2, mặt đường Lê Quang Đạo" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="19">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-le-quang-dao-phuong-my-dinh-2/cho-dien-tich-80m2-mat-dao-pr26399960" title="Cho thuê văn phòng diện tích 80m2, mặt đường Lê Quang Đạo" class="vipOne product-link">
                                CHO THUÊ VĂN PHÒNG DIỆN TÍCH 80M2, MẶT ĐƯỜNG LÊ QUANG ĐẠO
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">12 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">80 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Nam Từ Liêm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Tôi đang có diện tích sàn 80m2 tại số nhà 44 Lê Quang Đạo, nằm trên mặt đường Lê Quang Đạo cho thuê làm văn phòng, spa, lớp học, các văn phòng đại diện, các công ty vừa và nhỏ. Giá tôi cho thuê là 12
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
                                    <i class="iconSave" data-productid="26399960" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; văn ph&amp;#242;ng diện t&amp;#237;ch 80m2, mặt đường L&amp;#234; Quang Đạo&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê văn phòng diện tích 80m2, mặt đường Lê Quang Đạo" data-price="12 triệu/tháng" data-area="80 m²" data-pricesort="12000000" data-areasort="80" data-room="0" data-toilets="0" data-address="Nam Từ Liêm, Hà Nội" data-description="Tôi đang có diện tích sàn 80m2 tại số nhà 44 Lê Quang Đạo, nằm trên mặt đường Lê Quang Đạo cho thuê làm văn phòng, spa, lớp học, các văn phòng đại diện, các công ty vừa và nhỏ. Giá tôi cho thuê là 12" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:31:37" data-contactname="Ngô Mai Hương" data-contactmobile="0976118630" data-url="/cho-thue-van-phong-duong-le-quang-dao-phuong-my-dinh-2/cho-dien-tich-80m2-mat-dao-pr26399960" data-totalmedia="0" data-createbyuser="1433992"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="517347">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-thi-thap-phuong-tan-phong-9/can-ho-mini-thong-minh-full-noi-that-nhu-hinh-bao-ve-24-24-an-ninh-sach-se-nha-moi-xay-the-tu-pr16978548" title="Văn phòng cho thuê tại 171 Nguyễn Thị Thập, Quận 7, DT 30m2, chỉ 6,5tr/th, 24/24, an ninh, view đẹp" onclick="">
                            <img class="product-avatar-img" alt="Văn phòng cho thuê tại 171 Nguyễn Thị Thập, Quận 7, DT 30m2, chỉ 6,5tr/th, 24/24, an ninh, view đẹp" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/05/14/20200514105246-f14c_wm.jpg" is-lazy-image="true" lazy-id="20">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">5</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-thi-thap-phuong-tan-phong-9/can-ho-mini-thong-minh-full-noi-that-nhu-hinh-bao-ve-24-24-an-ninh-sach-se-nha-moi-xay-the-tu-pr16978548" title="Văn phòng cho thuê tại 171 Nguyễn Thị Thập, Quận 7, DT 30m2, chỉ 6,5tr/th, 24/24, an ninh, view đẹp" class="vipOne product-link">
                                VĂN PHÒNG CHO THUÊ TẠI 171 NGUYỄN THỊ THẬP, QUẬN 7, DT 30M2, CHỈ 6,5TR/TH, 24/24, AN NINH, VIEW ĐẸP
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">6.5 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">30 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 7, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Văn phòng cho thuê tại 171 Nguyễn Thị Thập, Quận 7, DT 30m2, chỉ 6,5tr/th, 24/24, an ninh, view đẹp.- Vị trí vô cùng thuận lợi gần trung tâm hành chính Q7. - 5 phút đến ủy ban quận 7 và 8 phút đến Lo
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
                                    <i class="iconSave" data-productid="16978548" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Văn ph&amp;#242;ng cho thu&amp;#234; tại 171 Nguyễn Thị Thập, Quận 7, DT 30m2, chỉ 6,5tr/th, 24/24, an ninh, view đẹp&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/05/14/20200514105246-f14c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/05/14/20200514105246-f14c_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Văn phòng cho thuê tại 171 Nguyễn Thị Thập, Quận 7, DT 30m2, chỉ 6,5tr/th, 24/24, an ninh, view đẹp" data-price="6.5 triệu/tháng" data-area="30 m²" data-pricesort="6500000" data-areasort="30" data-room="0" data-toilets="0" data-address="Quận 7, Hồ Chí Minh" data-description="Văn phòng cho thuê tại 171 Nguyễn Thị Thập, Quận 7, DT 30m2, chỉ 6,5tr/th, 24/24, an ninh, view đẹp.- Vị trí vô cùng thuận lợi gần trung tâm hành chính Q7. - 5 phút đến ủy ban quận 7 và 8 phút đến Lo" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 17:45:21" data-contactname="Trần Văn Tấn" data-contactmobile="0703040590" data-url="/cho-thue-van-phong-duong-nguyen-thi-thap-phuong-tan-phong-9/can-ho-mini-thong-minh-full-noi-that-nhu-hinh-bao-ve-24-24-an-ninh-sach-se-nha-moi-xay-the-tu-pr16978548" data-totalmedia="5" data-createbyuser="517347"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="132100">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-trai-phuong-khuong-trung-prj-fafilm-vnt-tower/cho-tai-quan-thanh-xuan-ha-noi-gia-180-nghin-m2-thang-dien-pr26202530" title="Cho thuê văn phòng tại Fafilm - VNT Tower - Quận Thanh Xuân - Hà Nội, giá chỉ từ 150 nghìn/m2/tháng" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê văn phòng tại Fafilm - VNT Tower - Quận Thanh Xuân - Hà Nội, giá chỉ từ 150 nghìn/m2/tháng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/10/20200710120800-b4c8_wm.jpg" is-lazy-image="true" lazy-id="21">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">18</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-trai-phuong-khuong-trung-prj-fafilm-vnt-tower/cho-tai-quan-thanh-xuan-ha-noi-gia-180-nghin-m2-thang-dien-pr26202530" title="Cho thuê văn phòng tại Fafilm - VNT Tower - Quận Thanh Xuân - Hà Nội, giá chỉ từ 150 nghìn/m2/tháng" class="vipOne product-link">
                                CHO THUÊ VĂN PHÒNG TẠI FAFILM - VNT TOWER - QUẬN THANH XUÂN - HÀ NỘI, GIÁ CHỈ TỪ 150 NGHÌN/M2/THÁNG
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">150 nghìn/m²/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">80 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Thanh Xuân, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Tòa nhà Fafim Việt Nam cho thuê văn phòng tại số 19 đường Nguyễn Trãi, ngay Ngã Tư Sở. Cho thuê làm văn phòng, phòng tập, spa... * Các diện tích còn trống: + Tầng 6 (có thang máy) tòa nhà Fafim Việt 
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
                                    <i class="iconSave" data-productid="26202530" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; văn ph&amp;#242;ng tại Fafilm - VNT Tower - Quận Thanh Xu&amp;#226;n - H&amp;#224; Nội, gi&amp;#225; chỉ từ 150 ngh&amp;#236;n/m2/th&amp;#225;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/10/20200710120800-b4c8_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/07/10/20200710120800-b4c8_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê văn phòng tại Fafilm - VNT Tower - Quận Thanh Xuân - Hà Nội, giá chỉ từ 150 nghìn/m2/tháng" data-price="150 nghìn/m²/tháng" data-area="80 m²" data-pricesort="12000000" data-areasort="80" data-room="0" data-toilets="0" data-address="Thanh Xuân, Hà Nội" data-description="Tòa nhà Fafim Việt Nam cho thuê văn phòng tại số 19 đường Nguyễn Trãi, ngay Ngã Tư Sở. Cho thuê làm văn phòng, phòng tập, spa... * Các diện tích còn trống: + Tầng 6 (có thang máy) tòa nhà Fafim Việt " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 14:09:37" data-contactname="Phạm Diệu Hương" data-contactmobile="0978335871" data-url="/cho-thue-van-phong-duong-nguyen-trai-phuong-khuong-trung-prj-fafilm-vnt-tower/cho-tai-quan-thanh-xuan-ha-noi-gia-180-nghin-m2-thang-dien-pr26202530" data-totalmedia="18" data-createbyuser="132100"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="146931">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-khang-phuong-yen-hoa-2-prj-khu-do-thi-yen-hoa/chinh-chu-o-mat-bang-kinh-doanh-va-tai-291-san-dep-gia-re-pr27620698" title="Chính chủ cho thuê mặt bằng kinh doanh và văn phòng tại 291 Nguyễn Khang sàn đẹp, giá rẻ" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cho thuê mặt bằng kinh doanh và văn phòng tại 291 Nguyễn Khang sàn đẹp, giá rẻ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/01/20201101073147-bc25_wm.jpg" is-lazy-image="true" lazy-id="22">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-khang-phuong-yen-hoa-2-prj-khu-do-thi-yen-hoa/chinh-chu-o-mat-bang-kinh-doanh-va-tai-291-san-dep-gia-re-pr27620698" title="Chính chủ cho thuê mặt bằng kinh doanh và văn phòng tại 291 Nguyễn Khang sàn đẹp, giá rẻ" class="vipOne product-link">
                                CHÍNH CHỦ CHO THUÊ MẶT BẰNG KINH DOANH VÀ VĂN PHÒNG TẠI 291 NGUYỄN KHANG SÀN ĐẸP, GIÁ RẺ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">37 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">115 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Cầu Giấy, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Chính chủ cho thuê mặt bằng kinh doanh tại 291 Nguyễn Khang - Yên Hòa - Cầu Giấy. Diện tích T1 115m2 mặt tiền 7.5 mét, thông sàn. Tiện kinh doanh, spa, ngân hàng, thẩm mỹ viện, siêu thị tiện lợi, sho
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
                                    <i class="iconSave" data-productid="27620698" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; mặt bằng kinh doanh v&amp;#224; văn ph&amp;#242;ng tại 291 Nguyễn Khang s&amp;#224;n đẹp, gi&amp;#225; rẻ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/01/20201101073147-bc25_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/01/20201101073147-bc25_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê mặt bằng kinh doanh và văn phòng tại 291 Nguyễn Khang sàn đẹp, giá rẻ" data-price="37 triệu/tháng" data-area="115 m²" data-pricesort="37000000" data-areasort="115" data-room="0" data-toilets="0" data-address="Cầu Giấy, Hà Nội" data-description="Chính chủ cho thuê mặt bằng kinh doanh tại 291 Nguyễn Khang - Yên Hòa - Cầu Giấy. Diện tích T1 115m2 mặt tiền 7.5 mét, thông sàn. Tiện kinh doanh, spa, ngân hàng, thẩm mỹ viện, siêu thị tiện lợi, sho" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:19:59" data-contactname="Khắc Thống Luxury Land" data-contactmobile="0978127635" data-url="/cho-thue-van-phong-duong-nguyen-khang-phuong-yen-hoa-2-prj-khu-do-thi-yen-hoa/chinh-chu-o-mat-bang-kinh-doanh-va-tai-291-san-dep-gia-re-pr27620698" data-totalmedia="1" data-createbyuser="146931"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="861077">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-luong-bang-1-phuong-tan-phu-19-prj-golden-king/chinh-chu-cho-can-ho-officetel-toa-nha-full-noi-that-lh-0918349932-pr27763828" title="Chính chủ cho thuê căn hộ văn phòng ( Officetel) tòa nhà Golden King. Full nội thất. Lh: 0918349932" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cho thuê căn hộ văn phòng ( Officetel) tòa nhà Golden King. Full nội thất. Lh: 0918349932" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/gx6LfYTa/20201102164449-e559_wm.jpg" is-lazy-image="true" lazy-id="23">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-luong-bang-1-phuong-tan-phu-19-prj-golden-king/chinh-chu-cho-can-ho-officetel-toa-nha-full-noi-that-lh-0918349932-pr27763828" title="Chính chủ cho thuê căn hộ văn phòng ( Officetel) tòa nhà Golden King. Full nội thất. Lh: 0918349***" class="vipOne product-link" style="overflow: visible;">
                                CHÍNH CHỦ CHO THUÊ CĂN HỘ VĂN PHÒNG ( OFFICETEL) TÒA NHÀ GOLDEN KING. FULL NỘI THẤT. LH: <span class="hidden-mobile m-on-title" raw="0918349932">0918349***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">12 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">50 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 7, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cho thuê căn hộ văn phòng (Officetel) toà nhà Golden King, 15 Nguyễn Lương Bằng quận 7, Tp.HCM Tòa nhà đã đi vào hoạt động, mới hoàn toàn Thiết kế sang trọng, thiết bị nội thất cao cấp, view thoáng m
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
                                    <i class="iconSave" data-productid="27763828" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; căn hộ văn ph&amp;#242;ng ( Officetel) t&amp;#242;a nh&amp;#224; Golden King. Full nội thất. Lh: 0918349932&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/gx6LfYTa/20201102164449-e559_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/02/gx6LfYTa/20201102164449-e559_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê căn hộ văn phòng ( Officetel) tòa nhà Golden King. Full nội thất. Lh: 0918349932" data-price="12 triệu/tháng" data-area="50 m²" data-pricesort="12000000" data-areasort="50" data-room="0" data-toilets="0" data-address="Quận 7, Hồ Chí Minh" data-description="Cho thuê căn hộ văn phòng (Officetel) toà nhà Golden King, 15 Nguyễn Lương Bằng quận 7, Tp.HCM Tòa nhà đã đi vào hoạt động, mới hoàn toàn Thiết kế sang trọng, thiết bị nội thất cao cấp, view thoáng m" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:18:12" data-contactname="Chị Vân" data-contactmobile="0918349932" data-url="/cho-thue-van-phong-duong-nguyen-luong-bang-1-phuong-tan-phu-19-prj-golden-king/chinh-chu-cho-can-ho-officetel-toa-nha-full-noi-that-lh-0918349932-pr27763828" data-totalmedia="6" data-createbyuser="861077"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 vipaddon product-item clearfix" uid="1457119">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-pho-giang-vo-phuong-giang-vo/cho-to-hop-working-space-thevuon-lon-nhat-ha-noi-pr26911174" title="Cho thuê địa điểm tổ chức hội thảo, event, trainning" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê địa điểm tổ chức hội thảo, event, trainning" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102163815-fc1a_wm.jpg" is-lazy-image="true" lazy-id="24"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/04/20200904160159-180a_wm.jpg" is-lazy-image="true" lazy-id="25"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/04/20200904160158-575f_wm.jpg" is-lazy-image="true" lazy-id="26">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">8</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-pho-giang-vo-phuong-giang-vo/cho-to-hop-working-space-thevuon-lon-nhat-ha-noi-pr26911174" title="Cho thuê địa điểm tổ chức hội thảo, event, trainning" class="vipOne product-link">
                                CHO THUÊ ĐỊA ĐIỂM TỔ CHỨC HỘI THẢO, EVENT, TRAINNING
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">400 m²</span>
                                                    <span class="location">Ba Đình, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            - Diện tích từ 30 ~ 400m2 sức chứa từ 10 - 300 người. - Trang bị đầy đủ âm thanh, ánh sáng cơ bản, máy chiếu, màn hình LED,... - Hỗ trợ setup theo layout yêu cầu. - Cung cấp dịch vụ: Backdrop, standee, tờ rơi quảng cáo, teabreak, livestream, quay video, chụp hình, MC,... - Không gian sang trọng, cây xanh quanh hội trường, nội thất gỗ Ngọc Am tốt cho sức khoẻ. - Đội ngũ nhân viê
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    Hôm qua
                                    <span class="tooltip-time">12/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Cskh Thevuon">
                                    <span class="contact-name">Cskh Thevuon</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0976931293" raw="0976931293">0976 931 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="26911174" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; địa điểm tổ chức hội thảo, event, trainning&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102163815-fc1a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/04/20200904160159-180a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/04/20200904160158-575f_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/02/20201102163815-fc1a_wm.jpg" data-vipclass="vip1 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê địa điểm tổ chức hội thảo, event, trainning" data-price="Giá thỏa thuận" data-area="400 m²" data-pricesort="0" data-areasort="400" data-room="0" data-toilets="0" data-address="Ba Đình, Hà Nội" data-description="- Diện tích từ 30 ~ 400m2 sức chứa từ 10 - 300 người. - Trang bị đầy đủ âm thanh, ánh sáng cơ bản, máy chiếu, màn hình LED,... - Hỗ trợ setup theo layout yêu cầu. - Cung cấp dịch vụ: Backdrop, standee, tờ rơi quảng cáo, teabreak, livestream, quay video, chụp hình, MC,... - Không gian sang trọng, cây xanh quanh hội trường, nội thất gỗ Ngọc Am tốt cho sức khoẻ. - Đội ngũ nhân viê" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:03:40" data-contactname="Cskh Thevuon" data-contactmobile="0976931293" data-url="/cho-thue-van-phong-pho-giang-vo-phuong-giang-vo/cho-to-hop-working-space-thevuon-lon-nhat-ha-noi-pr26911174" data-totalmedia="8" data-createbyuser="1457119"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="282149">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-truong-chinh-phuong-phuong-mai/cho-mat-bang-100m2-trung-tam-quan-dong-da-lh-0963257799-pr27763336" title="Cho thuê văn phòng mặt bằng 100m2 trung tâm quận Đống Đa. LH: 0963257799" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê văn phòng mặt bằng 100m2 trung tâm quận Đống Đa. LH: 0963257799" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112095934-77c2_wm.jpg" is-lazy-image="true" lazy-id="27">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-truong-chinh-phuong-phuong-mai/cho-mat-bang-100m2-trung-tam-quan-dong-da-lh-0963257799-pr27763336" title="Cho thuê văn phòng mặt bằng 100m2 trung tâm quận Đống Đa. LH: 0963257***" class="vipOne product-link" style="overflow: visible;">
                                CHO THUÊ VĂN PHÒNG MẶT BẰNG 100M2 TRUNG TÂM QUẬN ĐỐNG ĐA. LH: <span class="hidden-mobile m-on-title" raw="0963257799">0963257***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">20 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Đống Đa, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Cho thuê văn phòng mặt bằng 100m2 trung tâm quận Đống Đa. Vị trí tại tầng 3 của tòa nhà 9 tầng, đã làm sàn và đầy đủ đồ để set up văn phòng, hoạt động ngay với các tiện ích đi kèm: - 02 thang máy nhậ
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
                                    <i class="iconSave" data-productid="27763336" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; văn ph&amp;#242;ng mặt bằng 100m2 trung t&amp;#226;m quận Đống Đa. LH: 0963257799&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112095934-77c2_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112095934-77c2_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê văn phòng mặt bằng 100m2 trung tâm quận Đống Đa. LH: 0963257799" data-price="20 triệu/tháng" data-area="100 m²" data-pricesort="20000000" data-areasort="100" data-room="0" data-toilets="0" data-address="Đống Đa, Hà Nội" data-description="Cho thuê văn phòng mặt bằng 100m2 trung tâm quận Đống Đa. Vị trí tại tầng 3 của tòa nhà 9 tầng, đã làm sàn và đầy đủ đồ để set up văn phòng, hoạt động ngay với các tiện ích đi kèm: - 02 thang máy nhậ" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:01:58" data-contactname="Pham Nam" data-contactmobile="0941195433" data-url="/cho-thue-van-phong-duong-truong-chinh-phuong-phuong-mai/cho-mat-bang-100m2-trung-tam-quan-dong-da-lh-0963257799-pr27763336" data-totalmedia="6" data-createbyuser="282149"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1478683">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-luong-bang-1-phuong-quang-trung/cho-mat-san-lam-dien-tich-co-so-dao-tao-pho-bang-pr27216661" title="Cho thuê mặt sàn làm diện tích văn phòng, cơ sở đào tạo phố Nguyễn Lương Bằng" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê mặt sàn làm diện tích văn phòng, cơ sở đào tạo phố Nguyễn Lương Bằng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/29/ep6YzfY7/20200929180045-f32e_wm.jpg" is-lazy-image="true" lazy-id="28">
                        </a>
                        <span class="product-feature">
                                                                                <img src="./assets/image/ic_video.svg">
                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-luong-bang-1-phuong-quang-trung/cho-mat-san-lam-dien-tich-co-so-dao-tao-pho-bang-pr27216661" title="Cho thuê mặt sàn làm diện tích văn phòng, cơ sở đào tạo phố Nguyễn Lương Bằng" class="vipOne product-link">
                                CHO THUÊ MẶT SÀN LÀM DIỆN TÍCH VĂN PHÒNG, CƠ SỞ ĐÀO TẠO PHỐ NGUYỄN LƯƠNG BẰNG
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">132 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Đống Đa, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            - Vị trí: Tòa nhà chung cư - 187 Nguyễn Lương Bằng , Phường Quang Trung, Quận Đống Đa, Hà Nội. - Số tầng: 17 tầng nổi, 1 tầng hầm. - Diện tích sàn: 2000m2. - Chiều cao trần: 3,1m. - Đỗ xe: Tầng hầm r
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
                                    <i class="iconSave" data-productid="27216661" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; mặt s&amp;#224;n l&amp;#224;m diện t&amp;#237;ch văn ph&amp;#242;ng, cơ sở đ&amp;#224;o tạo phố Nguyễn Lương Bằng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/29/ep6YzfY7/20200929180045-f32e_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/29/ep6YzfY7/20200929180045-f32e_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="true" data-title="Cho thuê mặt sàn làm diện tích văn phòng, cơ sở đào tạo phố Nguyễn Lương Bằng" data-price="Giá thỏa thuận" data-area="132 m²" data-pricesort="0" data-areasort="132" data-room="0" data-toilets="0" data-address="Đống Đa, Hà Nội" data-description="- Vị trí: Tòa nhà chung cư - 187 Nguyễn Lương Bằng , Phường Quang Trung, Quận Đống Đa, Hà Nội. - Số tầng: 17 tầng nổi, 1 tầng hầm. - Diện tích sàn: 2000m2. - Chiều cao trần: 3,1m. - Đỗ xe: Tầng hầm r" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 17:33:47" data-contactname="Nguyễn Trung" data-contactmobile="0988629121" data-url="/cho-thue-van-phong-duong-nguyen-luong-bang-1-phuong-quang-trung/cho-mat-san-lam-dien-tich-co-so-dao-tao-pho-bang-pr27216661" data-totalmedia="3" data-createbyuser="1478683"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1262915">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-bang-a-phuong-hoang-liet-prj-tay-nam-ho-linh-dam/cho-mat-lam-cong-ty-ha-noi-tien-nghi-hien-dai-pr27756973" title="Cho thuê mặt bằng làm văn phòng công ty - Tây Nam Linh Đàm - Hà Nội. Tiện nghi hiện đại" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê mặt bằng làm văn phòng công ty - Tây Nam Linh Đàm - Hà Nội. Tiện nghi hiện đại" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/2bNpQlC2/20201111171921-f399_wm.jpg" is-lazy-image="true" lazy-id="29">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">14</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-bang-a-phuong-hoang-liet-prj-tay-nam-ho-linh-dam/cho-mat-lam-cong-ty-ha-noi-tien-nghi-hien-dai-pr27756973" title="Cho thuê mặt bằng làm văn phòng công ty - Tây Nam Linh Đàm - Hà Nội. Tiện nghi hiện đại" class="vipOne product-link">
                                CHO THUÊ MẶT BẰNG LÀM VĂN PHÒNG CÔNG TY - TÂY NAM LINH ĐÀM - HÀ NỘI. TIỆN NGHI HIỆN ĐẠI
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">7 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">70 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hoàng Mai, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Cho thuê mặt bằng văn phòng công ty - Tây Nam Linh Đàm - Hà Nội  Thông tin: - Giá cho thuê là 7- 8tr/1 tháng  - Tổng diện tích 1 sàn 70m2. (Thang máy, thang bộ, vệ sinh, VP)  - Vị trí: Tòa nhà LAPHO 
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
                                    <i class="iconSave" data-productid="27756973" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; mặt bằng l&amp;#224;m văn ph&amp;#242;ng c&amp;#244;ng ty - T&amp;#226;y Nam Linh Đ&amp;#224;m - H&amp;#224; Nội. Tiện nghi hiện đại&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/2bNpQlC2/20201111171921-f399_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/2bNpQlC2/20201111171921-f399_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê mặt bằng làm văn phòng công ty - Tây Nam Linh Đàm - Hà Nội. Tiện nghi hiện đại" data-price="7 triệu/tháng" data-area="70 m²" data-pricesort="7000000" data-areasort="70" data-room="0" data-toilets="1" data-address="Hoàng Mai, Hà Nội" data-description="Cho thuê mặt bằng văn phòng công ty - Tây Nam Linh Đàm - Hà Nội  Thông tin: - Giá cho thuê là 7- 8tr/1 tháng  - Tổng diện tích 1 sàn 70m2. (Thang máy, thang bộ, vệ sinh, VP)  - Vị trí: Tòa nhà LAPHO " data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 17:30:20" data-contactname="Chị Na; Anh Lê" data-contactmobile="0977833338" data-url="/cho-thue-van-phong-duong-bang-a-phuong-hoang-liet-prj-tay-nam-ho-linh-dam/cho-mat-lam-cong-ty-ha-noi-tien-nghi-hien-dai-pr27756973" data-totalmedia="14" data-createbyuser="1262915"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1069488">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-thi-minh-khai-phuong-5-8/chinh-chu-cho-mat-tien-quan-3-pr26461383" title="Cho thuê văn phòng ngay MT Nguyễn Thị Minh Khai Quận 3, chỉ 12tr/tháng" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê văn phòng ngay MT Nguyễn Thị Minh Khai Quận 3, chỉ 12tr/tháng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/30/0oXsLGW4/20200730090205-ae61_wm.jpg" is-lazy-image="true" lazy-id="30">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-duong-nguyen-thi-minh-khai-phuong-5-8/chinh-chu-cho-mat-tien-quan-3-pr26461383" title="Cho thuê văn phòng ngay MT Nguyễn Thị Minh Khai Quận 3, chỉ 12tr/tháng" class="vipOne product-link">
                                CHO THUÊ VĂN PHÒNG NGAY MT NGUYỄN THỊ MINH KHAI QUẬN 3, CHỈ 12TR/THÁNG
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">12 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">50 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 3, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Văn phòng cho thuê mới xây, sang trọng đường Nguyễn Thị Minh Khai, ngày trung tâm quận 3.Diện tích phòng từ 25m2 - 60m2. Văn phòng sẵn điều hòa, trần thạch cao, sàn gỗ lát kính. Tòa nhà chung có lễ t
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
                                    <i class="iconSave" data-productid="26461383" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; văn ph&amp;#242;ng ngay MT Nguyễn Thị Minh Khai Quận 3, chỉ 12tr/th&amp;#225;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/30/0oXsLGW4/20200730090205-ae61_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/07/30/0oXsLGW4/20200730090205-ae61_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê văn phòng ngay MT Nguyễn Thị Minh Khai Quận 3, chỉ 12tr/tháng" data-price="12 triệu/tháng" data-area="50 m²" data-pricesort="12000000" data-areasort="50" data-room="0" data-toilets="0" data-address="Quận 3, Hồ Chí Minh" data-description="Văn phòng cho thuê mới xây, sang trọng đường Nguyễn Thị Minh Khai, ngày trung tâm quận 3.Diện tích phòng từ 25m2 - 60m2. Văn phòng sẵn điều hòa, trần thạch cao, sàn gỗ lát kính. Tòa nhà chung có lễ t" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 15:41:38" data-contactname="Tran Thi Huong Quynh" data-contactmobile="0948239119" data-url="/cho-thue-van-phong-duong-nguyen-thi-minh-khai-phuong-5-8/chinh-chu-cho-mat-tien-quan-3-pr26461383" data-totalmedia="3" data-createbyuser="1069488"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1069488">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-van-phong-pho-ly-thuong-kiet-phuong-14-5/chinh-chu-cho-quan-10-pr27501788" title="Chính chủ cho thuê văn phòng Lý Thường Kiệt, Quận 10" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cho thuê văn phòng Lý Thường Kiệt, Quận 10" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/22/0oXsLGW4/20201022094931-f1b1_wm.jpg" is-lazy-image="true" lazy-id="31">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-van-phong-pho-ly-thuong-kiet-phuong-14-5/chinh-chu-cho-quan-10-pr27501788" title="Chính chủ cho thuê văn phòng Lý Thường Kiệt, Quận 10" class="vipOne product-link">
                                CHÍNH CHỦ CHO THUÊ VĂN PHÒNG LÝ THƯỜNG KIỆT, QUẬN 10
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">250 nghìn/m²/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">240 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 10, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cho thuê văn phòng ngay trung tâm quận 10. Giá thuê 250.000/m2, diện tích 240m2. Tòa nhà gồm: 1 hầm, 9 lầu, thang máy, PCCC, sàn gỗ, điều hòa, đèn led đầy đủ. Ngay giáp 3/2, đối diện trường đua Phú T
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
                                    <i class="iconSave" data-productid="27501788" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; văn ph&amp;#242;ng L&amp;#253; Thường Kiệt, Quận 10&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/22/0oXsLGW4/20201022094931-f1b1_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/22/0oXsLGW4/20201022094931-f1b1_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê văn phòng Lý Thường Kiệt, Quận 10" data-price="250 nghìn/m²/tháng" data-area="240 m²" data-pricesort="60000000" data-areasort="240" data-room="0" data-toilets="0" data-address="Quận 10, Hồ Chí Minh" data-description="Cho thuê văn phòng ngay trung tâm quận 10. Giá thuê 250.000/m2, diện tích 240m2. Tòa nhà gồm: 1 hầm, 9 lầu, thang máy, PCCC, sàn gỗ, điều hòa, đèn led đầy đủ. Ngay giáp 3/2, đối diện trường đua Phú T" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 15:41:26" data-contactname="Tran Thi Huong Quynh" data-contactmobile="0948239119" data-url="/cho-thue-van-phong-pho-ly-thuong-kiet-phuong-14-5/chinh-chu-cho-quan-10-pr27501788" data-totalmedia="3" data-createbyuser="1069488"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="text-center">
                <div class="pagination">
    <a pid="1" class="actived" href="https://batdongsan.com.vn/cho-thue-van-phong">1</a>
    <a pid="2" class="" href="https://batdongsan.com.vn/cho-thue-van-phong/p2">2</a>
    <a pid="3" class="" href="https://batdongsan.com.vn/cho-thue-van-phong/p3">3</a>
    <a pid="4" class="" href="https://batdongsan.com.vn/cho-thue-van-phong/p4">4</a>
    <a pid="5" class="" href="https://batdongsan.com.vn/cho-thue-van-phong/p5">5</a>
    <a pid="269" href="https://batdongsan.com.vn/cho-thue-van-phong/p269"><img src="./assets/image/ic_double_caret_right.png"></a>
    </div>
    
            </div>
        </div>
    
    
    
    
    
    
        <div class="divide">&nbsp;</div>
    <div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Cho thuê văn phòng chính chủ" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-van-phong-chinh-chu">Cho thuê văn phòng chính chủ</a></li>    <li><a title="Cho thuê văn phòng giá rẻ quận Tân Bình" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-van-phong-gia-re-quan-tan-binh">Cho thuê văn phòng giá rẻ quận Tân Bình</a></li>    <li><a title="Cho thuê văn phòng giá rẻ Quận 7" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-van-phong-gia-re-quan-7">Cho thuê văn phòng giá rẻ Quận 7</a></li>    <li><a title="Cho thuê văn phòng giá rẻ   Quận 3" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-van-phong-gia-re-quan-3">Cho thuê văn phòng giá rẻ   Quận 3</a></li>    <li><a title="Cho thuê văn phòng giá rẻ  quận Phú Nhuận" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-van-phong-gia-re-quan-phu-nhuan">Cho thuê văn phòng giá rẻ  quận Phú Nhuận</a></li>    <li><a title="Cho thuê văn phòng giá rẻ Hà Nội" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-van-phong-gia-re-ha-noi">Cho thuê văn phòng giá rẻ Hà Nội</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
        <div class="product-seo-text">
            <div>Cho thuê văn phòng <strong>Việt Nam</strong></div>
                                    <div>Hiện nay, ngày càng xuất hiện nhiều doanh nghiệp mới thành lập, trong đó 97% là các doanh nghiệp vừa, nhỏ và siêu nhỏ. Hầu hết 3 loại hình doanh nghiệp này đều có nguồn vốn không lớn, cho nên việc đầu tư để có thể sở hữu một văn phòng riêng là bài toán khó và văn phòng cho thuê trở thành một lựa chọn hợp lý đối với phần lớn doanh nghiệp. </div>
                                    <div>Nhiều chủ doanh nghiệp muốn lựa chọn những mảnh đất "vàng" để đặt văn phòng đã góp phần đẩy giá <strong>thuê văn phòng Việt Nam</strong> tăng mạnh trong những năm gần đây. </div>
                                    <div>Bên cạnh nhu cầu lớn về các văn phòng hạng A, B thì thị trường <strong>cho thuê văn phòng Việt Nam</strong> giá rẻ rất được khách hàng quan tâm. Tại các khu vực trung tâm, nguồn cung cho thuê văn phòng <strong>Việt Nam</strong> gần như không đáp ứng đủ nhu cầu và có xu hướng dịch chuyển ra các khu vực xa trung tâm một chút. </div>
                                    <div>Trước sự chênh lệch về cung - cầu trên thị trường, việc tìm được <strong>văn phòng cho thuê Việt Nam</strong> đáp ứng được các tiêu chí mà doanh nghiệp đề ra như thuận lợi về vị trí, giá cả phù hợp, nhiều tiện ích là khá khó khăn, vì vậy, <strong>Batdongsan.com.vn</strong> cung cấp cho khách hàng kênh tin rao về cho thuê văn phòng Việt Nam với nhiều phân khúc giá đáp ứng đa dạng nhu cầu của khách hàng.  </div>
                                    <div><strong>Batdongsan.com.vn</strong> lưu ý bạn một số điều sau đây để có thể nhanh chóng lựa chọn được văn phòng cho thuê phù hợp nhất:</div>
                                    <ul>
                                    <li>- Xác định rõ nhu cầu của doanh nghiệp về văn phòng cho thuê như: vị trí, diện tích, phân khúc giá thuê...</li>
                                    <li>- Tìm hiểu rõ về các tiện ích của văn phòng cho thuê như hệ thống điện nước, điều hòa, máy phát điện, thang máy...</li>
                                    <li>- Xem xét kỹ hợp đồng cho thuê với các điều khoản và chi phí thuê, chi phí phát sinh như phí dịch vụ, điện, nước...</li>
                                    </ul>
        </div>
    <form id="productListBinnova" method="post">
        <input id="hashAlias" type="hidden" value="eb84145b8950355b9f66271b3a5156ea14986e35cb1ea92815684a7cb1fe2363">
    </form>
    <script type="text/javascript">
        (function callJQuery() {
            if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
                var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                    getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                    model: {
                        typeOfProduct: 49,
                        categoryId: 50,
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
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/-1/2/-1/-1" title="Cho thuê văn phòng Việt Nam giá 1 - 3 triệu">1 - 3 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/-1/3/-1/-1" title="Cho thuê văn phòng Việt Nam giá 3 - 5 triệu">3 - 5 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/-1/4/-1/-1" title="Cho thuê văn phòng Việt Nam giá 5 - 10 triệu">5 - 10 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/-1/5/-1/-1" title="Cho thuê văn phòng Việt Nam giá 10 - 40 triệu">10 - 40 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/-1/6/-1/-1" title="Cho thuê văn phòng Việt Nam giá 40 - 70 triệu">40 - 70 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/-1/7/-1/-1" title="Cho thuê văn phòng Việt Nam giá 70 - 100 triệu">70 - 100 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/-1/8/-1/-1" title="Cho thuê văn phòng Việt Nam giá &gt; 100 triệu">&gt; 100 triệu</a></li>
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
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/1/-1/-1/-1" title="Cho thuê văn phòng Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/2/-1/-1/-1" title="Cho thuê văn phòng Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/3/-1/-1/-1" title="Cho thuê văn phòng Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/4/-1/-1/-1" title="Cho thuê văn phòng Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/5/-1/-1/-1" title="Cho thuê văn phòng Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/6/-1/-1/-1" title="Cho thuê văn phòng Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/7/-1/-1/-1" title="Cho thuê văn phòng Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/8/-1/-1/-1" title="Cho thuê văn phòng Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/9/-1/-1/-1" title="Cho thuê văn phòng Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-van-phong/10/-1/-1/-1" title="Cho thuê văn phòng Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
            <h2 class="box-title">Cho thuê văn phòng</h2>
    
            <div class="box-content link-hover-blue">
                <ul>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-ha-noi" title="Cho thuê văn phòng tại Hà Nội">
                                    Hà Nội (3685)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-tp-hcm" title="Cho thuê văn phòng tại Hồ Chí Minh">
                                    Hồ Chí Minh (1543)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-da-nang" title="Cho thuê văn phòng tại Đà Nẵng">
                                    Đà Nẵng (111)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-hai-phong" title="Cho thuê văn phòng tại Hải Phòng">
                                    Hải Phòng (25)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-binh-duong" title="Cho thuê văn phòng tại Bình Dương">
                                    Bình Dương (11)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-thai-nguyen" title="Cho thuê văn phòng tại Thái Nguyên">
                                    Thái Nguyên (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-quang-ninh" title="Cho thuê văn phòng tại Quảng Ninh">
                                    Quảng Ninh (3)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-khanh-hoa" title="Cho thuê văn phòng tại Khánh Hòa">
                                    Khánh Hòa (11)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-dak-lak" title="Cho thuê văn phòng tại Đắk Lắk">
                                    Đắk Lắk (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-nghe-an" title="Cho thuê văn phòng tại Nghệ An">
                                    Nghệ An (4)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-hung-yen" title="Cho thuê văn phòng tại Hưng Yên">
                                    Hưng Yên (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-can-tho" title="Cho thuê văn phòng tại Cần Thơ">
                                    Cần Thơ (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-binh-dinh" title="Cho thuê văn phòng tại Bình Định">
                                    Bình Định (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-phu-tho" title="Cho thuê văn phòng tại Phú Thọ">
                                    Phú Thọ (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-thai-binh" title="Cho thuê văn phòng tại Thái Bình">
                                    Thái Bình (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-bac-giang" title="Cho thuê văn phòng tại Bắc Giang">
                                    Bắc Giang (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-vinh-phuc" title="Cho thuê văn phòng tại Vĩnh Phúc">
                                    Vĩnh Phúc (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-dong-nai" title="Cho thuê văn phòng tại Đồng Nai">
                                    Đồng Nai (3)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-ba-ria-vung-tau" title="Cho thuê văn phòng tại Bà Rịa Vũng Tàu">
                                    Bà Rịa Vũng Tàu (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-van-phong-dong-thap" title="Cho thuê văn phòng tại Đồng Tháp">
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
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-10" title="Cho thuê nhà Quận 10">
                                        Cho thuê nhà Quận 10
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-11" title="Cho thuê nhà Quận 11">
                                        Cho thuê nhà Quận 11
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-12" title="Cho thuê nhà Quận 12">
                                        Cho thuê nhà Quận 12
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-2" title="Cho thuê nhà Quận 2">
                                        Cho thuê nhà Quận 2
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-7" title="Cho thuê nhà Quận 7">
                                        Cho thuê nhà Quận 7
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-cho-thue-binh-chanh" title="Cho thuê nhà Bình Chánh">
                                        Cho thuê nhà Bình Chánh
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-binh-tan" title="Cho thuê nhà Bình Tân">
                                        Cho thuê nhà Bình Tân
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
                                    <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-7" title="Cho thuê căn hộ Quận 7">
                                        Cho thuê căn hộ Quận 7
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
                                    <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-go-vap" title="Cho thuê căn hộ Gò Vấp">
                                        Cho thuê căn hộ Gò Vấp
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
                                    <a href="https://batdongsan.com.vn/cho-thue-van-phong-quan-3" title="Cho thuê văn phòng Quận 3">
                                        Cho thuê văn phòng Quận 3
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
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-thu-duc" title="Cho thuê căn hộ Thủ Đức">
                                        Cho thuê căn hộ Thủ Đức
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
            