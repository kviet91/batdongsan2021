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
                    <div class="custom-value hasvalue">Cửa hàng, ki ốt</div>
                </div>
                <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="55">
                <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                        <li vl="0"><span class="current">Tất cả nhà đất</span></li>
                                        <li vl="326"><span>Căn hộ chung cư</span></li>
                                        <li vl="52"><span>Nhà riêng</span></li>
                                        <li vl="51"><span>Nhà mặt phố</span></li>
                                        <li vl="57"><span>Nhà trọ, phòng trọ</span></li>
                                        <li vl="50"><span>Văn phòng</span></li>
                                        <li vl="55"><span class="active">Cửa hàng, ki ốt</span></li>
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
                            <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                            <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                    categoryId: 55,
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
        <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot" level="1" title="Cho thuê cửa hàng, ki ốt tại Việt Nam">Cho thuê</a><span>/</span><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot" level="2" title="Cho thuê cửa hàng, ki ốt tại Việt Nam">Cửa hàng, ki ốt trên toàn quốc</a>
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
            {"@context":"https://schema.org/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Trang chủ","item":"https://batdongsan.com.vn"},{"@type":"ListItem","position":2,"name":"Cho thuê","item":"https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot"},{"@type":"ListItem","position":3,"name":"Cửa hàng, ki ốt trên toàn quốc","item":"https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot"}]}
        </script>
    
    <div class="product-list-header pad-top-8">
        <h1>Cho thuê cửa hàng, ki ốt tại Việt Nam</h1>
            <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">1,598</span> bất động sản.</div>
        
    
    </div>
        <div class="product-search-most mar-top-8 mar-bot-8">
            <div class="box-title">Các khu vực, địa điểm nổi bật</div>
            <ul class="clearfix link-hover-blue">
                    <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-quan-6">Cho thuê của hàng Quận 6 </a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-quan-8">Cho thuê của hàng Quận 8 </a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-pho-bach-mai-4">Cho thuê cửa hàng phố Bạch Mai</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-pho-kim-ma-2">Cho thuê cửa hàng phố Kim Mã</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-pho-pho-hue-4">Cho thuê cửa hàng Phố Huế</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-cau-giay">Cho thuê của hàng Cầu Giấy</a></li>
            </ul>
        </div>
    
        <div class="product-nav-bar pad-top-8 clearfix">
            <ul class="ul-tab fl mar-right-16">
                <li class="list-display actived">Danh sách</li>
                <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
                <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-cho-thue-cua-hang-ki-ot">Bản đồ</a></li>
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
                <div class="vip0 product-item clearfix" uid="539774">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-to-huu-phuong-la-khe-prj-hpc-landmark-105/cho-gap-mat-bang-trung-tam-thuong-mai-tai-ha-dong-ha-noi-chi-tu-8-usd-m2-thang-pr27609375" title="CHO THUÊ GẤP MẶT BẰNG TRUNG TÂM THƯƠNG MẠI TẠI TỐ HỮU-HÀ ĐÔNG, HÀ NỘI (CHỈ TỪ 8 USD/M2/THÁNG)" onclick="">
                            <img class="product-avatar-img" alt="CHO THUÊ GẤP MẶT BẰNG TRUNG TÂM THƯƠNG MẠI TẠI TỐ HỮU-HÀ ĐÔNG, HÀ NỘI (CHỈ TỪ 8 USD/M2/THÁNG)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201030162703-0e71_wm.jpg" is-lazy-image="true" lazy-id="1">
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
                <div class="vip0 vipaddon product-item clearfix" uid="326484">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-mai-chi-tho-phuong-an-phu-prj-the-sun-avenue/can-ban-shophouse-gia-tot-nhat-6-2-ty-0903989800-pr22904816" title="Cần cho thuê shophouse The Sun Avenue - Giá tốt nhất 556.525đ/m2 - 0903989800" onclick="">
                            <img class="product-avatar-img" alt="Cần cho thuê shophouse The Sun Avenue - Giá tốt nhất 556.525đ/m2 - 0903989800" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2019/10/09/20191009143415-bd98_wm.jpg" is-lazy-image="true" lazy-id="2"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2019/10/09/20191009143441-80e3_wm.jpg" is-lazy-image="true" lazy-id="3"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2019/10/09/20191009143457-834b_wm.jpg" is-lazy-image="true" lazy-id="4">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-mai-chi-tho-phuong-an-phu-prj-the-sun-avenue/can-ban-shophouse-gia-tot-nhat-6-2-ty-0903989800-pr22904816" title="Cần cho thuê shophouse The Sun Avenue - Giá tốt nhất 556.525đ/m2 - 0903989***" class="vipZero product-link" style="overflow: visible;">
                                CẦN CHO THUÊ SHOPHOUSE THE SUN AVENUE - GIÁ TỐT NHẤT 556.525Đ/M2 - <span class="hidden-mobile m-on-title" raw="0903989800">0903989***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">556.52 nghìn/m²/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">55 m²</span>
                                                    <span class="location">Quận 2, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Thông tin mô tả. Quản lý 100% căn hộ tại dự án The Sun Avenue, Mai Chí Thọ, quận 2. Chúng tôi cam kết sẽ đem lại dịch vụ cho thuê và mua bán với giá cả tốt nhất thị trường, liên hệ phòng kinh doanh căn hộ The Sun Avenue gọi <span class="hidden-mobile des" raw="0903 989 800">0903 989 ***</span>.Nhận ký gửi mua bán cho thuê giao dịch nhanh gọi phòng kinh doanh <span class="hidden-mobile des" raw="0903 989 800">0903 989 ***</span> (Zalo/Viber).- Shophouse: 55m2, 85m2, 100m2... Giá thuê 556.525đ
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 tuần trước
                                    <span class="tooltip-time">27/10/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Trịnh Tâm">
                                    <span class="contact-name">Trịnh Tâm</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0903989800" raw="0903989800">0903 989 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="22904816" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần cho thu&amp;#234; shophouse The Sun Avenue - Gi&amp;#225; tốt nhất 556.525đ/m2 - 0903989800&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/10/09/20191009143415-bd98_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/10/09/20191009143441-80e3_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/10/09/20191009143457-834b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2019/10/09/20191009143415-bd98_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần cho thuê shophouse The Sun Avenue - Giá tốt nhất 556.525đ/m2 - 0903989800" data-price="556.52 nghìn/m²/tháng" data-area="55 m²" data-pricesort="30608600" data-areasort="55" data-room="0" data-toilets="0" data-address="Quận 2, Hồ Chí Minh" data-description="Thông tin mô tả. Quản lý 100% căn hộ tại dự án The Sun Avenue, Mai Chí Thọ, quận 2. Chúng tôi cam kết sẽ đem lại dịch vụ cho thuê và mua bán với giá cả tốt nhất thị trường, liên hệ phòng kinh doanh căn hộ The Sun Avenue gọi 0903 989 800.Nhận ký gửi mua bán cho thuê giao dịch nhanh gọi phòng kinh doanh 0903 989 800 (Zalo/Viber).- Shophouse: 55m2, 85m2, 100m2... Giá thuê 556.525đ" data-duration="2 tuần trước" data-updatedtime="27/10/2020" data-datesort="10/27/2020 11:35:10" data-contactname="Trịnh Tâm" data-contactmobile="0903989800" data-url="/cho-thue-cua-hang-ki-ot-duong-mai-chi-tho-phuong-an-phu-prj-the-sun-avenue/can-ban-shophouse-gia-tot-nhat-6-2-ty-0903989800-pr22904816" data-totalmedia="3" data-createbyuser="326484"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1435844">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-20-5-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/chinh-chu-cho-can-shop-s1-10-trung-tam-du-an-chi-26tr-vh-0936202399-pr27633971" title="Chính chủ cho thuê căn shop S1.10 trung tâm dự án giá chỉ 25tr/th VH Ocean Park, 0936202399" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cho thuê căn shop S1.10 trung tâm dự án giá chỉ 25tr/th VH Ocean Park, 0936202399" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102155803-2335_wm.jpg" is-lazy-image="true" lazy-id="5">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-20-5-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/chinh-chu-cho-can-shop-s1-10-trung-tam-du-an-chi-26tr-vh-0936202399-pr27633971" title="Chính chủ cho thuê căn shop S1.10 trung tâm dự án giá chỉ 25tr/th VH Ocean Park, 0936202***" class="vipOne product-link" style="overflow: visible;">
                                CHÍNH CHỦ CHO THUÊ CĂN SHOP S1.10 TRUNG TÂM DỰ ÁN GIÁ CHỈ 25TR/TH VH OCEAN PARK, <span class="hidden-mobile m-on-title" raw="0936202399">0936202***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">25 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">46 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Gia Lâm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Mình chính chủ cho thuê căn shop đế chung cư toà S1.01 Vinhomes Ocean Park giá chỉ 25tr/tháng. DT 46m2. Mặt đường 17m, sát sảnh. Vị trí đắc địa nằm ngay Tháp Hải Đăng, đối diện khu căn hộ cao cấp Mas
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
                                    <i class="iconSave" data-productid="27633971" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; căn shop S1.10 trung t&amp;#226;m dự &amp;#225;n gi&amp;#225; chỉ 25tr/th VH Ocean Park, 0936202399&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102155803-2335_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/02/20201102155803-2335_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê căn shop S1.10 trung tâm dự án giá chỉ 25tr/th VH Ocean Park, 0936202399" data-price="25 triệu/tháng" data-area="46 m²" data-pricesort="25000000" data-areasort="46" data-room="0" data-toilets="0" data-address="Gia Lâm, Hà Nội" data-description="Mình chính chủ cho thuê căn shop đế chung cư toà S1.01 Vinhomes Ocean Park giá chỉ 25tr/tháng. DT 46m2. Mặt đường 17m, sát sảnh. Vị trí đắc địa nằm ngay Tháp Hải Đăng, đối diện khu căn hộ cao cấp Mas" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 08:59:37" data-contactname="Trần Tuấn" data-contactmobile="0936202399" data-url="/cho-thue-cua-hang-ki-ot-duong-20-5-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/chinh-chu-cho-can-shop-s1-10-trung-tam-du-an-chi-26tr-vh-0936202399-pr27633971" data-totalmedia="1" data-createbyuser="1435844"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 vipaddon product-item clearfix" uid="987828">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-do-quang-dau-phuong-pham-ngu-lao-1/cho-mat-bang-mat-tien-q1-ngay-pho-bui-vien-so-05-q1-lien-he-0985241524-pr27757332" title="Cho thuê mặt bằng - Mặt tiền Q1 ngay phố Bùi Viện - Số 05 Đỗ Quang Đẩu Q1 - Liên hệ 0985241524" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê mặt bằng - Mặt tiền Q1 ngay phố Bùi Viện - Số 05 Đỗ Quang Đẩu Q1 - Liên hệ 0985241524" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111175629-9f3c_wm.jpg" is-lazy-image="true" lazy-id="6"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111175629-b2d3_wm.jpg" is-lazy-image="true" lazy-id="7"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111175629-4aca_wm.jpg" is-lazy-image="true" lazy-id="8">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-do-quang-dau-phuong-pham-ngu-lao-1/cho-mat-bang-mat-tien-q1-ngay-pho-bui-vien-so-05-q1-lien-he-0985241524-pr27757332" title="Cho thuê mặt bằng - Mặt tiền Q1 ngay phố Bùi Viện - Số 05 Đỗ Quang Đẩu Q1 - Liên hệ 0985241***" class="vipOne product-link" style="overflow: visible;">
                                CHO THUÊ MẶT BẰNG - MẶT TIỀN Q1 NGAY PHỐ BÙI VIỆN - SỐ 05 ĐỖ QUANG ĐẨU Q1 - LIÊN HỆ <span class="hidden-mobile m-on-title" raw="0985241524">0985241***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">18 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">30 m²</span>
                                                    <span class="location">Quận 1, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cho thuê mặt bằng kinh doanh hoặc sân thượng kinh doanh có thang máy, ngay phố Bùi Viện, mặt tiền sầm uất.* Địa chỉ: Mặt tiền 05 Đỗ Quang Đẩu, P. Phạm Ngũ Lão, Quận 1.* Phù hợp: Bia úp ngược, Cafe, Cafe mang đi, Shop trái cây, sinh tố, coctail, Shop mini, siêu thị mini, bách hóa, cửa hàng, tạp hóa, shop quần áo, công ty tour du lịch, văn phòng công ty,...* Vị trí: + Nhà nằm nga
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">11/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Nguyen Van Tuan">
                                    <span class="contact-name">Nguyen Van Tuan</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0985241524" raw="0985241524">0985 241 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27757332" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; mặt bằng - Mặt tiền Q1 ngay phố B&amp;#249;i Viện - Số 05 Đỗ Quang Đẩu Q1 - Li&amp;#234;n hệ 0985241524&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111175629-9f3c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111175629-b2d3_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111175629-4aca_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/11/20201111175629-9f3c_wm.jpg" data-vipclass="vip1 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê mặt bằng - Mặt tiền Q1 ngay phố Bùi Viện - Số 05 Đỗ Quang Đẩu Q1 - Liên hệ 0985241524" data-price="18 triệu/tháng" data-area="30 m²" data-pricesort="18000000" data-areasort="30" data-room="0" data-toilets="0" data-address="Quận 1, Hồ Chí Minh" data-description="Cho thuê mặt bằng kinh doanh hoặc sân thượng kinh doanh có thang máy, ngay phố Bùi Viện, mặt tiền sầm uất.* Địa chỉ: Mặt tiền 05 Đỗ Quang Đẩu, P. Phạm Ngũ Lão, Quận 1.* Phù hợp: Bia úp ngược, Cafe, Cafe mang đi, Shop trái cây, sinh tố, coctail, Shop mini, siêu thị mini, bách hóa, cửa hàng, tạp hóa, shop quần áo, công ty tour du lịch, văn phòng công ty,...* Vị trí: + Nhà nằm nga" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 17:57:10" data-contactname="Nguyen Van Tuan" data-contactmobile="0985241524" data-url="/cho-thue-cua-hang-ki-ot-duong-do-quang-dau-phuong-pham-ngu-lao-1/cho-mat-bang-mat-tien-q1-ngay-pho-bui-vien-so-05-q1-lien-he-0985241524-pr27757332" data-totalmedia="6" data-createbyuser="987828"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 vipaddon product-item clearfix" uid="1024355">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/cho-mat-bang-kinh-doanh-shophouse-mat-tien-lh-0905-008-202-pr24669859" title="Cho thuê mặt bằng kinh doanh, shophouse Cityland, mặt tiền Phan Văn Trị, LH: 0905008202" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê mặt bằng kinh doanh, shophouse Cityland, mặt tiền Phan Văn Trị, LH: 0905008202" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/03/05/20200305123512-94aa_wm.jpg" is-lazy-image="true" lazy-id="9"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/03/05/20200305123519-bbae_wm.jpg" is-lazy-image="true" lazy-id="10"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/03/05/20200305123528-d8f4_wm.jpg" is-lazy-image="true" lazy-id="11">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">8</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/cho-mat-bang-kinh-doanh-shophouse-mat-tien-lh-0905-008-202-pr24669859" title="Cho thuê mặt bằng kinh doanh, shophouse Cityland, mặt tiền Phan Văn Trị, LH: 0905008***" class="vipOne product-link" style="overflow: visible;">
                                CHO THUÊ MẶT BẰNG KINH DOANH, SHOPHOUSE CITYLAND, MẶT TIỀN PHAN VĂN TRỊ, LH: <span class="hidden-mobile m-on-title" raw="0905008202">0905008***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">18 triệu/tháng</span>
                                                    <span class="location">Gò Vấp, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cho thuê mặt bằng thương mại kinh doanh, Shophouse, mặt tiền Phan Văn Trị, Nguyễn Văn Lượng thuộc Khu dân cư Cityland Park Hills. Diện tích: Đa dạng điện tích từ 60m2, 80m2 và trên 100m2,...+ Thích hợp mở cửa hàng dịch vụ ăn uống, café, trà sữa, siêu thị mini,.. + Khu dân cư cao cấp với đầy đủ các dịch vụ tiện ích xung quanh, tập trung nhiều văn phòng, showroom. + Con đường kin
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">11/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Nguyễn Thị Ngọc Thục">
                                    <span class="contact-name">Nguyễn Thị Ngọc Thục</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0906397115" raw="0906397115">0906 397 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="24669859" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; mặt bằng kinh doanh, shophouse Cityland, mặt tiền Phan Văn Trị, LH: 0905008202&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/03/05/20200305123512-94aa_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/03/05/20200305123519-bbae_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/03/05/20200305123528-d8f4_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/03/05/20200305123512-94aa_wm.jpg" data-vipclass="vip1 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê mặt bằng kinh doanh, shophouse Cityland, mặt tiền Phan Văn Trị, LH: 0905008202" data-price="18 triệu/tháng" data-area="Không xác định" data-pricesort="18000000" data-areasort="0" data-room="0" data-toilets="0" data-address="Gò Vấp, Hồ Chí Minh" data-description="Cho thuê mặt bằng thương mại kinh doanh, Shophouse, mặt tiền Phan Văn Trị, Nguyễn Văn Lượng thuộc Khu dân cư Cityland Park Hills. Diện tích: Đa dạng điện tích từ 60m2, 80m2 và trên 100m2,...+ Thích hợp mở cửa hàng dịch vụ ăn uống, café, trà sữa, siêu thị mini,.. + Khu dân cư cao cấp với đầy đủ các dịch vụ tiện ích xung quanh, tập trung nhiều văn phòng, showroom. + Con đường kin" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 14:18:39" data-contactname="Nguyễn Thị Ngọc Thục" data-contactmobile="0906397115" data-url="/cho-thue-cua-hang-ki-ot-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/cho-mat-bang-kinh-doanh-shophouse-mat-tien-lh-0905-008-202-pr24669859" data-totalmedia="8" data-createbyuser="1024355"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1487629">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-phuong-linh-trung/sang-quan-tra-sua-lang-dai-hoc-quoc-gia-thu-duc-pr27401608" title="Sang quán trà sữa Làng Đại Học Quốc Gia - Thủ Đức" onclick="">
                            <img class="product-avatar-img" alt="Sang quán trà sữa Làng Đại Học Quốc Gia - Thủ Đức" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/13/20201013203114-5591_wm.jpg" is-lazy-image="true" lazy-id="12">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">8</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-phuong-linh-trung/sang-quan-tra-sua-lang-dai-hoc-quoc-gia-thu-duc-pr27401608" title="Sang quán trà sữa Làng Đại Học Quốc Gia - Thủ Đức" class="vipOne product-link">
                                SANG QUÁN TRÀ SỮA LÀNG ĐẠI HỌC QUỐC GIA - THỦ ĐỨC
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">11 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">110 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Thủ Đức, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Sang quán trà sữa ở Làng Đại Học Quốc Gia - Thủ Đức - Nơi hội tụ tất cả các trường Đại Học Quốc Gia như Bách Khoa, Nhân Văn, Khoa Học Tự Nhiên, Công Nghệ Thông Tin, Luật... - Vị trí: Ngay sát trường 
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
                                    <i class="iconSave" data-productid="27401608" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Sang qu&amp;#225;n tr&amp;#224; sữa L&amp;#224;ng Đại Học Quốc Gia - Thủ Đức&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/13/20201013203114-5591_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/13/20201013203114-5591_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Sang quán trà sữa Làng Đại Học Quốc Gia - Thủ Đức" data-price="11 triệu/tháng" data-area="110 m²" data-pricesort="11000000" data-areasort="110" data-room="1" data-toilets="2" data-address="Thủ Đức, Hồ Chí Minh" data-description="Sang quán trà sữa ở Làng Đại Học Quốc Gia - Thủ Đức - Nơi hội tụ tất cả các trường Đại Học Quốc Gia như Bách Khoa, Nhân Văn, Khoa Học Tự Nhiên, Công Nghệ Thông Tin, Luật... - Vị trí: Ngay sát trường " data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:45:13" data-contactname="Nguyen Huy" data-contactmobile="0877662118" data-url="/cho-thue-cua-hang-ki-ot-phuong-linh-trung/sang-quan-tra-sua-lang-dai-hoc-quoc-gia-thu-duc-pr27401608" data-totalmedia="8" data-createbyuser="1487629"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1283786">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-pho-phung-hung-1-phuong-hang-bong/cho-tai-p-hoan-kiem-pr27729010" title="Cho thuê cửa hàng tại phố Phùng Hưng, P Hàng Bông, Hoàn Kiếm" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê cửa hàng tại phố Phùng Hưng, P Hàng Bông, Hoàn Kiếm" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110030159-f5a0_wm.jpg" is-lazy-image="true" lazy-id="13">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-pho-phung-hung-1-phuong-hang-bong/cho-tai-p-hoan-kiem-pr27729010" title="Cho thuê cửa hàng tại phố Phùng Hưng, P Hàng Bông, Hoàn Kiếm" class="vipOne product-link">
                                CHO THUÊ CỬA HÀNG TẠI PHỐ PHÙNG HƯNG, P HÀNG BÔNG, HOÀN KIẾM
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">14 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">38 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hoàn Kiếm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Chính chủ cho thuê cửa hàng tại phố Phùng Hưng (đường đôi) ngay ngã 3 Phùng Hưng, Hàng Bông. Hướng Đông, DT = 38 m2, vỉa hè rộng thông thoáng, có chỗ để xe máy, ô tô miễn phí, cửa hàng thuê riêng biệ
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
                                    <i class="iconSave" data-productid="27729010" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; cửa h&amp;#224;ng tại phố Ph&amp;#249;ng Hưng, P H&amp;#224;ng B&amp;#244;ng, Ho&amp;#224;n Kiếm&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110030159-f5a0_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110030159-f5a0_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê cửa hàng tại phố Phùng Hưng, P Hàng Bông, Hoàn Kiếm" data-price="14 triệu/tháng" data-area="38 m²" data-pricesort="14000000" data-areasort="38" data-room="1" data-toilets="1" data-address="Hoàn Kiếm, Hà Nội" data-description="Chính chủ cho thuê cửa hàng tại phố Phùng Hưng (đường đôi) ngay ngã 3 Phùng Hưng, Hàng Bông. Hướng Đông, DT = 38 m2, vỉa hè rộng thông thoáng, có chỗ để xe máy, ô tô miễn phí, cửa hàng thuê riêng biệ" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 16:52:18" data-contactname="Nguyễn Mạnh Hùng" data-contactmobile="0918888886" data-url="/cho-thue-cua-hang-ki-ot-pho-phung-hung-1-phuong-hang-bong/cho-tai-p-hoan-kiem-pr27729010" data-totalmedia="1" data-createbyuser="1283786"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1498567">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-tinh-lo-8-xa-tan-thanh-tay/cho-mat-bang-doi-dien-acb-ngay-trung-tam-quy-cu-chi-12-5-60m-gia-re-dai-han-pr27711666" title="Cho thuê mặt bằng đối diện ACB ngay trung tâm Tân Quy, Củ Chi, 12,5 * 60m giá rẻ dài hạn" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê mặt bằng đối diện ACB ngay trung tâm Tân Quy, Củ Chi, 12,5 * 60m giá rẻ dài hạn" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108134331-b972_wm.jpeg" is-lazy-image="true" lazy-id="14">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-tinh-lo-8-xa-tan-thanh-tay/cho-mat-bang-doi-dien-acb-ngay-trung-tam-quy-cu-chi-12-5-60m-gia-re-dai-han-pr27711666" title="Cho thuê mặt bằng đối diện ACB ngay trung tâm Tân Quy, Củ Chi, 12,5 * 60m giá rẻ dài hạn" class="vipOne product-link">
                                CHO THUÊ MẶT BẰNG ĐỐI DIỆN ACB NGAY TRUNG TÂM TÂN QUY, CỦ CHI, 12,5 * 60M GIÁ RẺ DÀI HẠN
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">40 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">750 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Củ Chi, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Tôi cần cho thuê mặt bằng 104 Tỉnh Lộ 8 ngay trung tâm ngã Tân Quy, DT: 12,5 * 60m, 6,5 * 60m, đối diện NH ACB dài hạn giá mùa Covid. Call: <span class="hidden-mobile des" raw="0932678938">0932678***</span> Tú.
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
                                    <i class="iconSave" data-productid="27711666" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; mặt bằng đối diện ACB ngay trung t&amp;#226;m T&amp;#226;n Quy, Củ Chi, 12,5 * 60m gi&amp;#225; rẻ d&amp;#224;i hạn&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108134331-b972_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/08/20201108134331-b972_wm.jpeg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê mặt bằng đối diện ACB ngay trung tâm Tân Quy, Củ Chi, 12,5 * 60m giá rẻ dài hạn" data-price="40 triệu/tháng" data-area="750 m²" data-pricesort="40000000" data-areasort="750" data-room="0" data-toilets="7" data-address="Củ Chi, Hồ Chí Minh" data-description="Tôi cần cho thuê mặt bằng 104 Tỉnh Lộ 8 ngay trung tâm ngã Tân Quy, DT: 12,5 * 60m, 6,5 * 60m, đối diện NH ACB dài hạn giá mùa Covid. Call: 0932678938 Tú." data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 14:54:01" data-contactname="Nguyễn Tú" data-contactmobile="0932678938" data-url="/cho-thue-cua-hang-ki-ot-duong-tinh-lo-8-xa-tan-thanh-tay/cho-mat-bang-doi-dien-acb-ngay-trung-tam-quy-cu-chi-12-5-60m-gia-re-dai-han-pr27711666" data-totalmedia="4" data-createbyuser="1498567"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1370629">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-cong-hoa-phuong-12-10-prj-cong-hoa-garden/cho-mat-bang-kinh-doanh-tttm-ngay-tt-q-tan-binh-pr25634848" title="Cho thuê mặt bằng kinh doanh TTTM Cộng Hòa Garden liền kề sân bay. LH trực tiếp CĐT" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê mặt bằng kinh doanh TTTM Cộng Hòa Garden liền kề sân bay. LH trực tiếp CĐT" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/05/29/g6kzA32X/20200529183126-88e1_wm.jpg" is-lazy-image="true" lazy-id="15">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-cong-hoa-phuong-12-10-prj-cong-hoa-garden/cho-mat-bang-kinh-doanh-tttm-ngay-tt-q-tan-binh-pr25634848" title="Cho thuê mặt bằng kinh doanh TTTM Cộng Hòa Garden liền kề sân bay. LH trực tiếp CĐT" class="vipOne product-link">
                                CHO THUÊ MẶT BẰNG KINH DOANH TTTM CỘNG HÒA GARDEN LIỀN KỀ SÂN BAY. LH TRỰC TIẾP CĐT
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">162 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Tân Bình, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Công ty TNHH đầu tư bất động sản DHA Corporation cho thuê mặt bằng thương mại tại dự án Cộng Hòa Garden. Là một công ty có uy tín hoạt động trên thị trường bất động sản cùng với ban lãnh đạo có tầm n
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
                                    <i class="iconSave" data-productid="25634848" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; mặt bằng kinh doanh TTTM Cộng H&amp;#242;a Garden liền kề s&amp;#226;n bay. LH trực tiếp CĐT&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/05/29/g6kzA32X/20200529183126-88e1_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/05/29/g6kzA32X/20200529183126-88e1_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê mặt bằng kinh doanh TTTM Cộng Hòa Garden liền kề sân bay. LH trực tiếp CĐT" data-price="Giá thỏa thuận" data-area="162 m²" data-pricesort="0" data-areasort="162" data-room="0" data-toilets="0" data-address="Tân Bình, Hồ Chí Minh" data-description="Công ty TNHH đầu tư bất động sản DHA Corporation cho thuê mặt bằng thương mại tại dự án Cộng Hòa Garden. Là một công ty có uy tín hoạt động trên thị trường bất động sản cùng với ban lãnh đạo có tầm n" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 13:27:17" data-contactname="Dha Leasing Executive" data-contactmobile="0833030103" data-url="/cho-thue-cua-hang-ki-ot-duong-cong-hoa-phuong-12-10-prj-cong-hoa-garden/cho-mat-bang-kinh-doanh-tttm-ngay-tt-q-tan-binh-pr25634848" data-totalmedia="6" data-createbyuser="1370629"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip2 product-item clearfix" uid="1435844">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/chinh-chu-cho-shop-chan-de-dt-85m-chi-30tr-thang-0936202399-pr27559251" title="Chính chủ cho thuê shop chân đế, DT 85m2 giá chỉ 30tr/tháng, Vinhomes Ocean Park, 0936202399" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cho thuê shop chân đế, DT 85m2 giá chỉ 30tr/tháng, Vinhomes Ocean Park, 0936202399" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/27/20201027094245-4ea7_wm.jpg" is-lazy-image="true" lazy-id="16">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/chinh-chu-cho-shop-chan-de-dt-85m-chi-30tr-thang-0936202399-pr27559251" title="Chính chủ cho thuê shop chân đế, DT 85m2 giá chỉ 30tr/tháng, Vinhomes Ocean Park, 0936202***" class="vipTwo product-link" style="overflow: visible;">
                                CHÍNH CHỦ CHO THUÊ SHOP CHÂN ĐẾ, DT 85M2 GIÁ CHỈ 30TR/THÁNG, VINHOMES OCEAN PARK, <span class="hidden-mobile m-on-title" raw="0936202399">0936202***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">30 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">85 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Gia Lâm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Mình chính chủ cho thuê shop đế chung cư toà S2.12 Vinhomes Ocean Park giá 30tr/tháng. DT 85m2. Mặt tiền gần 8m. Vị trí đắc địa view bể bơi, khu đông dân cư Thuận lợi kinh doanh mọi mặt hàng. Có nhu 
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
                                    <i class="iconSave" data-productid="27559251" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; shop ch&amp;#226;n đế, DT 85m2 gi&amp;#225; chỉ 30tr/th&amp;#225;ng, Vinhomes Ocean Park, 0936202399&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/27/20201027094245-4ea7_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/27/20201027094245-4ea7_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê shop chân đế, DT 85m2 giá chỉ 30tr/tháng, Vinhomes Ocean Park, 0936202399" data-price="30 triệu/tháng" data-area="85 m²" data-pricesort="30000000" data-areasort="85" data-room="0" data-toilets="0" data-address="Gia Lâm, Hà Nội" data-description="Mình chính chủ cho thuê shop đế chung cư toà S2.12 Vinhomes Ocean Park giá 30tr/tháng. DT 85m2. Mặt tiền gần 8m. Vị trí đắc địa view bể bơi, khu đông dân cư Thuận lợi kinh doanh mọi mặt hàng. Có nhu " data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:00:12" data-contactname="Trần Tuấn" data-contactmobile="0936202399" data-url="/cho-thue-cua-hang-ki-ot-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/chinh-chu-cho-shop-chan-de-dt-85m-chi-30tr-thang-0936202399-pr27559251" data-totalmedia="1" data-createbyuser="1435844"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip2 product-item clearfix" uid="957441">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-xuan-la-phuong-xuan-tao-prj-kosmo-tay-ho/c-spuse-tang-thuong-mai-chung-cu-quan-ngoai-giao-doan-lh-0969165889-pr27768706" title="Cho thuê shophouse tầng thương mại chung cư Kosmo Xuân La, Ngoại Giao Đoàn, LH 0969165889" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê shophouse tầng thương mại chung cư Kosmo Xuân La, Ngoại Giao Đoàn, LH 0969165889" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112144530-b718_wm.jpg" is-lazy-image="true" lazy-id="17">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">7</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-xuan-la-phuong-xuan-tao-prj-kosmo-tay-ho/c-spuse-tang-thuong-mai-chung-cu-quan-ngoai-giao-doan-lh-0969165889-pr27768706" title="Cho thuê shophouse tầng thương mại chung cư Kosmo Xuân La, Ngoại Giao Đoàn, LH 0969165***" class="vipTwo product-link" style="overflow: visible;">
                                CHO THUÊ SHOPHOUSE TẦNG THƯƠNG MẠI CHUNG CƯ KOSMO XUÂN LA, NGOẠI GIAO ĐOÀN, LH <span class="hidden-mobile m-on-title" raw="0969165889">0969165***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">154 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bắc Từ Liêm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Chính chủ tôi cần cho thuê lô shophouse chân đế tòa chung cư cao cấp Kosmo Xuân La. Diện tích 154m2. Vị trí: Lô góc cạnh The Coffee House mặt đường Đỗ Nhuận, lượng giao thông qua lại đông đúc từ khu 
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
                                    <i class="iconSave" data-productid="27768706" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; shophouse tầng thương mại chung cư Kosmo Xu&amp;#226;n La, Ngoại Giao Đo&amp;#224;n, LH 0969165889&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112144530-b718_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112144530-b718_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê shophouse tầng thương mại chung cư Kosmo Xuân La, Ngoại Giao Đoàn, LH 0969165889" data-price="Giá thỏa thuận" data-area="154 m²" data-pricesort="0" data-areasort="154" data-room="0" data-toilets="0" data-address="Bắc Từ Liêm, Hà Nội" data-description="Chính chủ tôi cần cho thuê lô shophouse chân đế tòa chung cư cao cấp Kosmo Xuân La. Diện tích 154m2. Vị trí: Lô góc cạnh The Coffee House mặt đường Đỗ Nhuận, lượng giao thông qua lại đông đúc từ khu " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 14:56:59" data-contactname="Tran Ngoc Bich" data-contactmobile="0969165889" data-url="/cho-thue-cua-hang-ki-ot-duong-xuan-la-phuong-xuan-tao-prj-kosmo-tay-ho/c-spuse-tang-thuong-mai-chung-cu-quan-ngoai-giao-doan-lh-0969165889-pr27768706" data-totalmedia="7" data-createbyuser="957441"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip2 product-item clearfix" uid="980242">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-phuong-kien-hung-prj-khu-do-thi-thanh-ha-muong-thanh/cho-nua-san-tang-2-va-1-kiot-thong-tang-toa-n-hh03e-cienco5-tang-dep-pr27767386" title="Cho thuê nửa sàn tầng 2 và 1 kiot thông tầng toà nhà HH03E khu Đô Thị Thanh Hà Cienco5. Hạ tầng đẹp" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê nửa sàn tầng 2 và 1 kiot thông tầng toà nhà HH03E khu Đô Thị Thanh Hà Cienco5. Hạ tầng đẹp" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/2bNpQlC2/20201112140237-5718_wm.jpg" is-lazy-image="true" lazy-id="18">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">15</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-phuong-kien-hung-prj-khu-do-thi-thanh-ha-muong-thanh/cho-nua-san-tang-2-va-1-kiot-thong-tang-toa-n-hh03e-cienco5-tang-dep-pr27767386" title="Cho thuê nửa sàn tầng 2 và 1 kiot thông tầng toà nhà HH03E khu Đô Thị Thanh Hà Cienco5. Hạ tầng đẹp" class="vipFour product-link">
                                CHO THUÊ NỬA SÀN TẦNG 2 VÀ 1 KIOT THÔNG TẦNG TOÀ NHÀ HH03E KHU ĐÔ THỊ THANH HÀ CIENCO5. HẠ TẦNG ĐẸP
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">45 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">42 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hà Đông, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Hiện mình đang cho thuê nửa sàn tầng 2 và 1 kiot thông tầng tòa nhà HH03E khu Đô Thị Thanh Hà Cienco5. Tòa ngay mặt đường (đối diện công viên nước đã phá). Hạ tầng xung quanh cực đẹp. 11 tòa sát sát 
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
                                    <i class="iconSave" data-productid="27767386" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nửa s&amp;#224;n tầng 2 v&amp;#224; 1 kiot th&amp;#244;ng tầng to&amp;#224; nh&amp;#224; HH03E khu Đ&amp;#244; Thị Thanh H&amp;#224; Cienco5. Hạ tầng đẹp&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/2bNpQlC2/20201112140237-5718_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/2bNpQlC2/20201112140237-5718_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê nửa sàn tầng 2 và 1 kiot thông tầng toà nhà HH03E khu Đô Thị Thanh Hà Cienco5. Hạ tầng đẹp" data-price="45 triệu/tháng" data-area="42 m²" data-pricesort="45000000" data-areasort="42" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="Hiện mình đang cho thuê nửa sàn tầng 2 và 1 kiot thông tầng tòa nhà HH03E khu Đô Thị Thanh Hà Cienco5. Tòa ngay mặt đường (đối diện công viên nước đã phá). Hạ tầng xung quanh cực đẹp. 11 tòa sát sát " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 14:29:54" data-contactname="Nguyễn Thu Hiền" data-contactmobile="0904700785" data-url="/cho-thue-cua-hang-ki-ot-phuong-kien-hung-prj-khu-do-thi-thanh-ha-muong-thanh/cho-nua-san-tang-2-va-1-kiot-thong-tang-toa-n-hh03e-cienco5-tang-dep-pr27767386" data-totalmedia="15" data-createbyuser="980242"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip2 product-item clearfix" uid="894676">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-4-phuong-phuoc-hai-prj-khu-do-thi-vcn-phuoc-hai/cho-mat-bang-rong-11m-dai-21-5m-2-2-tang-400m2-o-91-93-so-4-hai-pr27635729" title="Cho thuê mặt bằng rộng 11m dài 21.5m,2 - 2 tầng (400m2) ở 91-93 đường số 4 VCN Phước Hải" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê mặt bằng rộng 11m dài 21.5m,2 - 2 tầng (400m2) ở 91-93 đường số 4 VCN Phước Hải" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/g6kzA32X/20201102175812-9ef3_wm.jpg" is-lazy-image="true" lazy-id="19">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-4-phuong-phuoc-hai-prj-khu-do-thi-vcn-phuoc-hai/cho-mat-bang-rong-11m-dai-21-5m-2-2-tang-400m2-o-91-93-so-4-hai-pr27635729" title="Cho thuê mặt bằng rộng 11m dài 21.5m,2 - 2 tầng (400m2) ở 91-93 đường số 4 VCN Phước Hải" class="vipTwo product-link">
                                CHO THUÊ MẶT BẰNG RỘNG 11M DÀI 21.5M,2 - 2 TẦNG (400M2) Ở 91-93 ĐƯỜNG SỐ 4 VCN PHƯỚC HẢI
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">50 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">236.5 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Nha Trang, Khánh Hòa</span>
                        </div>
                        <div class="product-content">
                            Cho thuê mặt bằng rộng 11m dài 21.5m x 2 tầng (400m2) ở 91-93 đường số 4 VCN Phước Hải Mặt bằng bao gồm: *Máy lạnh 2 tầng *Bàn ghế văn phòng *Kệ áp tường Rất thích hợp cho thuê để làm showroom, quán 
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
                                    <i class="iconSave" data-productid="27635729" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; mặt bằng rộng 11m d&amp;#224;i 21.5m,2 - 2 tầng (400m2) ở 91-93 đường số 4 VCN Phước Hải&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/g6kzA32X/20201102175812-9ef3_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/02/g6kzA32X/20201102175812-9ef3_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê mặt bằng rộng 11m dài 21.5m,2 - 2 tầng (400m2) ở 91-93 đường số 4 VCN Phước Hải" data-price="50 triệu/tháng" data-area="236.5 m²" data-pricesort="50000000" data-areasort="236.5" data-room="0" data-toilets="0" data-address="Nha Trang, Khánh Hòa" data-description="Cho thuê mặt bằng rộng 11m dài 21.5m x 2 tầng (400m2) ở 91-93 đường số 4 VCN Phước Hải Mặt bằng bao gồm: *Máy lạnh 2 tầng *Bàn ghế văn phòng *Kệ áp tường Rất thích hợp cho thuê để làm showroom, quán " data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 08:12:49" data-contactname="Ms Phương Anh" data-contactmobile="0988607160" data-url="/cho-thue-cua-hang-ki-ot-duong-4-phuong-phuoc-hai-prj-khu-do-thi-vcn-phuoc-hai/cho-mat-bang-rong-11m-dai-21-5m-2-2-tang-400m2-o-91-93-so-4-hai-pr27635729" data-totalmedia="6" data-createbyuser="894676"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip2 product-item clearfix" uid="991299">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-phan-xich-long-phuong-7-11/cho-le-tung-tang-nha-mat-tien-phu-nhuan-pr27735603" title="Cho thuê lẻ từng tầng nhà mặt tiền Phan Xích Long, Phú Nhuận. LH: 0938232869 Hương" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê lẻ từng tầng nhà mặt tiền Phan Xích Long, Phú Nhuận. LH: 0938232869 Hương" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110113813-2111_wm.jpg" is-lazy-image="true" lazy-id="20">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">13</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-phan-xich-long-phuong-7-11/cho-le-tung-tang-nha-mat-tien-phu-nhuan-pr27735603" title="Cho thuê lẻ từng tầng nhà mặt tiền Phan Xích Long, Phú Nhuận. LH: 0938232*** Hương" class="vipFour product-link" style="overflow: visible;">
                                CHO THUÊ LẺ TỪNG TẦNG NHÀ MẶT TIỀN PHAN XÍCH LONG, PHÚ NHUẬN. LH: <span class="hidden-mobile m-on-title" raw="0938232869">0938232***</span> HƯƠNG
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">30 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">56 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Phú Nhuận, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Chính chủ cho thuê lẻ từng tầng nhà mặt tiền đường Phan Xích Long, Phú Nhuận. Trước sự ảnh hưởng nặng nề của Covid 19, việc thuê nhà nguyên căn trở thành điều khó khăn với nhiều doanh nghiệp nhỏ và v
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
                                    <i class="iconSave" data-productid="27735603" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; lẻ từng tầng nh&amp;#224; mặt tiền Phan X&amp;#237;ch Long, Ph&amp;#250; Nhuận. LH: 0938232869 Hương&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110113813-2111_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110113813-2111_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê lẻ từng tầng nhà mặt tiền Phan Xích Long, Phú Nhuận. LH: 0938232869 Hương" data-price="30 triệu/tháng" data-area="56 m²" data-pricesort="30000000" data-areasort="56" data-room="0" data-toilets="0" data-address="Phú Nhuận, Hồ Chí Minh" data-description="Chính chủ cho thuê lẻ từng tầng nhà mặt tiền đường Phan Xích Long, Phú Nhuận. Trước sự ảnh hưởng nặng nề của Covid 19, việc thuê nhà nguyên căn trở thành điều khó khăn với nhiều doanh nghiệp nhỏ và v" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 14:05:39" data-contactname="Chị Hương" data-contactmobile="0938232869" data-url="/cho-thue-cua-hang-ki-ot-duong-phan-xich-long-phuong-7-11/cho-le-tung-tang-nha-mat-tien-phu-nhuan-pr27735603" data-totalmedia="13" data-createbyuser="991299"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip2 product-item clearfix" uid="1044467">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-pho-ton-that-thiep-phuong-ben-nghe/shophouse-danh-cho-nguoi-muon-kinh-doanh-cho-voi-gia-15tr-thang-tai-q1-lien-he-0909134608-pr22682749" title="Chính chủ cho thuê lâu dài mặt bằng đẹp tại đường Tôn Thất Thiệp quận Q1. LH Vy 0909.134.608" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cho thuê lâu dài mặt bằng đẹp tại đường Tôn Thất Thiệp quận Q1. LH Vy 0909.134.608" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/10/SHlrrFY0/20200910171329-b5a7_wm.jpg" is-lazy-image="true" lazy-id="21">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">9</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-pho-ton-that-thiep-phuong-ben-nghe/shophouse-danh-cho-nguoi-muon-kinh-doanh-cho-voi-gia-15tr-thang-tai-q1-lien-he-0909134608-pr22682749" title="Chính chủ cho thuê lâu dài mặt bằng đẹp tại đường Tôn Thất Thiệp quận Q1. LH Vy 0909.134.***" class="vipFour product-link" style="overflow: visible;">
                                CHÍNH CHỦ CHO THUÊ LÂU DÀI MẶT BẰNG ĐẸP TẠI ĐƯỜNG TÔN THẤT THIỆP QUẬN Q1. LH VY <span class="hidden-mobile m-on-title" raw="0909.134.608">0909.134.***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">16 triệu/tháng</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 1, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Mình chính chủ cho thuê lâu dài mặt bằng đẹp tại đường Tôn Thất Thiệp quận Q1- Đia chỉ: 60 Tôn Thất Thiệp, Phường Bến Nghé, Q1- Diện tích: tầng 1, lối đi riêng ngay từ mặt tiền thoáng rộng, không gia
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
                                    <i class="iconSave" data-productid="22682749" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; l&amp;#226;u d&amp;#224;i mặt bằng đẹp tại đường T&amp;#244;n Thất Thiệp quận Q1. LH Vy 0909.134.608&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/10/SHlrrFY0/20200910171329-b5a7_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/10/SHlrrFY0/20200910171329-b5a7_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê lâu dài mặt bằng đẹp tại đường Tôn Thất Thiệp quận Q1. LH Vy 0909.134.608" data-price="16 triệu/tháng" data-area="Không xác định" data-pricesort="16000000" data-areasort="0" data-room="0" data-toilets="0" data-address="Quận 1, Hồ Chí Minh" data-description="Mình chính chủ cho thuê lâu dài mặt bằng đẹp tại đường Tôn Thất Thiệp quận Q1- Đia chỉ: 60 Tôn Thất Thiệp, Phường Bến Nghé, Q1- Diện tích: tầng 1, lối đi riêng ngay từ mặt tiền thoáng rộng, không gia" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 15:14:50" data-contactname="Trần Nhật Vy" data-contactmobile="0909134608" data-url="/cho-thue-cua-hang-ki-ot-pho-ton-that-thiep-phuong-ben-nghe/shophouse-danh-cho-nguoi-muon-kinh-doanh-cho-voi-gia-15tr-thang-tai-q1-lien-he-0909134608-pr22682749" data-totalmedia="9" data-createbyuser="1044467"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip2 product-item clearfix" uid="569296">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-bui-dinh-tuy-phuong-12-7/cho-mat-bang-gia-tot-tai-quan-binh-thanh-pr26009141" title="Cho thuê mặt bằng giá tốt tại quận Bình Thạnh" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê mặt bằng giá tốt tại quận Bình Thạnh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/25/20200625223315-3dca_wm.jpg" is-lazy-image="true" lazy-id="22">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-bui-dinh-tuy-phuong-12-7/cho-mat-bang-gia-tot-tai-quan-binh-thanh-pr26009141" title="Cho thuê mặt bằng giá tốt tại quận Bình Thạnh" class="vipFour product-link">
                                CHO THUÊ MẶT BẰNG GIÁ TỐT TẠI QUẬN BÌNH THẠNH
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">15 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">120 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bình Thạnh, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Diện tích 5 x 17m (chưa bao gồm gác), trong đó: - Sân 5 x 10m. - Trong nhà phòng máy lạnh 5 x 7m. - Gác 5 x 7. Đã set up. Khu vực rất nhiều phòng trọ. Không cho thuê bán đồ ăn (cơm, phở, hủ tiếu,... 
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
                                    <i class="iconSave" data-productid="26009141" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; mặt bằng gi&amp;#225; tốt tại quận B&amp;#236;nh Thạnh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/25/20200625223315-3dca_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/06/25/20200625223315-3dca_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê mặt bằng giá tốt tại quận Bình Thạnh" data-price="15 triệu/tháng" data-area="120 m²" data-pricesort="15000000" data-areasort="120" data-room="0" data-toilets="1" data-address="Bình Thạnh, Hồ Chí Minh" data-description="Diện tích 5 x 17m (chưa bao gồm gác), trong đó: - Sân 5 x 10m. - Trong nhà phòng máy lạnh 5 x 7m. - Gác 5 x 7. Đã set up. Khu vực rất nhiều phòng trọ. Không cho thuê bán đồ ăn (cơm, phở, hủ tiếu,... " data-duration="1 tuần trước" data-updatedtime="06/11/2020" data-datesort="11/06/2020 17:03:44" data-contactname="Giang" data-contactmobile="0942188066" data-url="/cho-thue-cua-hang-ki-ot-duong-bui-dinh-tuy-phuong-12-7/cho-mat-bang-gia-tot-tai-quan-binh-thanh-pr26009141" data-totalmedia="1" data-createbyuser="569296"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip2 product-item clearfix" uid="1280757">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-nguyen-huy-tuong-phuong-thanh-xuan-trung-prj-imperia-garden/chinh-chu-cho-shophouse-tang-1-chung-cu-lien-he-chinh-chu-0964065501-c-v-anh-pr26155305" title="Chính chủ cho thuê shophouse tầng 1 chung cư Imperia Garden. Liên hệ chính chủ: 0964065501 (C Anh)" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cho thuê shophouse tầng 1 chung cư Imperia Garden. Liên hệ chính chủ: 0964065501 (C Anh)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/07/20200707141639-7de8_wm.jpg" is-lazy-image="true" lazy-id="23">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-nguyen-huy-tuong-phuong-thanh-xuan-trung-prj-imperia-garden/chinh-chu-cho-shophouse-tang-1-chung-cu-lien-he-chinh-chu-0964065501-c-v-anh-pr26155305" title="Chính chủ cho thuê shophouse tầng 1 chung cư Imperia Garden. Liên hệ chính chủ: 0964065*** (C Anh)" class="vipTwo product-link" style="overflow: visible;">
                                CHÍNH CHỦ CHO THUÊ SHOPHOUSE TẦNG 1 CHUNG CƯ IMPERIA GARDEN. LIÊN HỆ CHÍNH CHỦ: <span class="hidden-mobile m-on-title" raw="0964065501">0964065***</span> (C ANH)
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">68 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">168 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Thanh Xuân, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            - Chính chủ cho thuê shophouse tầng 1 chung cư Imperia Garden, 203 Nguyễn Huy Tưởng/143 Nguyễn Tuân. - Vị trí cực đẹp: Ngay tầng 1 tòa B, cạnh sảnh cư dân. 2 cửa ra vào, đối diện là trường mầm non &amp; 
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
                                    <i class="iconSave" data-productid="26155305" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; shophouse tầng 1 chung cư Imperia Garden. Li&amp;#234;n hệ ch&amp;#237;nh chủ: 0964065501 (C Anh)&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/07/20200707141639-7de8_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/07/07/20200707141639-7de8_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê shophouse tầng 1 chung cư Imperia Garden. Liên hệ chính chủ: 0964065501 (C Anh)" data-price="68 triệu/tháng" data-area="168 m²" data-pricesort="68000000" data-areasort="168" data-room="0" data-toilets="0" data-address="Thanh Xuân, Hà Nội" data-description="- Chính chủ cho thuê shophouse tầng 1 chung cư Imperia Garden, 203 Nguyễn Huy Tưởng/143 Nguyễn Tuân. - Vị trí cực đẹp: Ngay tầng 1 tòa B, cạnh sảnh cư dân. 2 cửa ra vào, đối diện là trường mầm non &amp; " data-duration="1 tuần trước" data-updatedtime="04/11/2020" data-datesort="11/04/2020 11:22:29" data-contactname="Vân Anh" data-contactmobile="0964065501" data-url="/cho-thue-cua-hang-ki-ot-duong-nguyen-huy-tuong-phuong-thanh-xuan-trung-prj-imperia-garden/chinh-chu-cho-shophouse-tang-1-chung-cu-lien-he-chinh-chu-0964065501-c-v-anh-pr26155305" data-totalmedia="3" data-createbyuser="1280757"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip3 product-item clearfix" uid="267806">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-dinh-thon-phuong-my-dinh-1/can-cho-mat-bang-vua-o-va-kinh-doanh-ngo-50-gia-re-bang-gia-phong-tro-pr27778504" title="Cần cho thuê mặt bằng vừa ở và kinh doanh ngõ 50 Đình Thôn, giá rẻ bằng giá thuê phòng trọ" onclick="">
                            <img class="product-avatar-img" alt="Cần cho thuê mặt bằng vừa ở và kinh doanh ngõ 50 Đình Thôn, giá rẻ bằng giá thuê phòng trọ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113104549-4b78_wm.jpg" is-lazy-image="true" lazy-id="24">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-dinh-thon-phuong-my-dinh-1/can-cho-mat-bang-vua-o-va-kinh-doanh-ngo-50-gia-re-bang-gia-phong-tro-pr27778504" title="Cần cho thuê mặt bằng vừa ở và kinh doanh ngõ 50 Đình Thôn, giá rẻ bằng giá thuê phòng trọ" class="vipThree product-link">
                                Cần cho thuê mặt bằng vừa ở và kinh doanh ngõ 50 Đình Thôn, giá rẻ bằng giá thuê phòng trọ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">40 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Nam Từ Liêm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Mình chính chủ có 2 căn tầng 1 cho thuê. + Có thể vừa ở vừa kết hợp Shop kinh doanh rất tốt, hoặc 1 trong 2 tùy nhu cầu! Diện tích 40m2 và 20m2 + Có gác xép rộng để ngủ lại + Có bếp nấu ăn, vệ sinh k
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
                                    <i class="iconSave" data-productid="27778504" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần cho thu&amp;#234; mặt bằng vừa ở v&amp;#224; kinh doanh ng&amp;#245; 50 Đ&amp;#236;nh Th&amp;#244;n, gi&amp;#225; rẻ bằng gi&amp;#225; thu&amp;#234; ph&amp;#242;ng trọ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113104549-4b78_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/13/20201113104549-4b78_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần cho thuê mặt bằng vừa ở và kinh doanh ngõ 50 Đình Thôn, giá rẻ bằng giá thuê phòng trọ" data-price="Giá thỏa thuận" data-area="40 m²" data-pricesort="0" data-areasort="40" data-room="0" data-toilets="0" data-address="Nam Từ Liêm, Hà Nội" data-description="Mình chính chủ có 2 căn tầng 1 cho thuê. + Có thể vừa ở vừa kết hợp Shop kinh doanh rất tốt, hoặc 1 trong 2 tùy nhu cầu! Diện tích 40m2 và 20m2 + Có gác xép rộng để ngủ lại + Có bếp nấu ăn, vệ sinh k" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:51:49" data-contactname="Hùng Nguyễn" data-contactmobile="0989569586" data-url="/cho-thue-cua-hang-ki-ot-duong-dinh-thon-phuong-my-dinh-1/can-cho-mat-bang-vua-o-va-kinh-doanh-ngo-50-gia-re-bang-gia-phong-tro-pr27778504" data-totalmedia="3" data-createbyuser="267806"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip3 product-item clearfix" uid="286927">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-ham-nghi-phuong-my-dinh-1/sieu-pham-mat-bang-kinh-doanh-mi-ha-noi-70m2-phu-hop-moi-mo-hinh-kinh-doanh-pr27576627" title="Siêu phẩm mặt bằng kinh doanh Mỹ Đình, Hà Nội 70m2, phù hợp mọi mô hình kinh doanh" onclick="">
                            <img class="product-avatar-img" alt="Siêu phẩm mặt bằng kinh doanh Mỹ Đình, Hà Nội 70m2, phù hợp mọi mô hình kinh doanh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/28/20201028120721-78df_wm.jpg" is-lazy-image="true" lazy-id="25">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-ham-nghi-phuong-my-dinh-1/sieu-pham-mat-bang-kinh-doanh-mi-ha-noi-70m2-phu-hop-moi-mo-hinh-kinh-doanh-pr27576627" title="Siêu phẩm mặt bằng kinh doanh Mỹ Đình, Hà Nội 70m2, phù hợp mọi mô hình kinh doanh" class="vipThree product-link">
                                Siêu phẩm mặt bằng kinh doanh Mỹ Đình, Hà Nội 70m2, phù hợp mọi mô hình kinh doanh
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">17 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">70 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Nam Từ Liêm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Cho thuê mặt bằng siêu đẹp 70m2, phố Hàm Nghi, Mỹ Đình, Nam Từ Liêm, Hà Nội. Thông số cơ bản: - Mặt tiền 8m - vỉa hè rộng rãi. - Diện tích sử dụng: 70m2. - Mặt tiền thông sàn, riêng biệt. - Nhà đã se
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
                                    <i class="iconSave" data-productid="27576627" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Si&amp;#234;u phẩm mặt bằng kinh doanh Mỹ Đ&amp;#236;nh, H&amp;#224; Nội 70m2, ph&amp;#249; hợp mọi m&amp;#244; h&amp;#236;nh kinh doanh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/28/20201028120721-78df_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/28/20201028120721-78df_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Siêu phẩm mặt bằng kinh doanh Mỹ Đình, Hà Nội 70m2, phù hợp mọi mô hình kinh doanh" data-price="17 triệu/tháng" data-area="70 m²" data-pricesort="17000000" data-areasort="70" data-room="0" data-toilets="0" data-address="Nam Từ Liêm, Hà Nội" data-description="Cho thuê mặt bằng siêu đẹp 70m2, phố Hàm Nghi, Mỹ Đình, Nam Từ Liêm, Hà Nội. Thông số cơ bản: - Mặt tiền 8m - vỉa hè rộng rãi. - Diện tích sử dụng: 70m2. - Mặt tiền thông sàn, riêng biệt. - Nhà đã se" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:04:39" data-contactname="Lê Nguyệt" data-contactmobile="0943906735" data-url="/cho-thue-cua-hang-ki-ot-duong-ham-nghi-phuong-my-dinh-1/sieu-pham-mat-bang-kinh-doanh-mi-ha-noi-70m2-phu-hop-moi-mo-hinh-kinh-doanh-pr27576627" data-totalmedia="3" data-createbyuser="286927"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="text-center">
                <div class="pagination">
    <a pid="1" class="actived" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot">1</a>
    <a pid="2" class="" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/p2">2</a>
    <a pid="3" class="" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/p3">3</a>
    <a pid="4" class="" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/p4">4</a>
    <a pid="5" class="" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/p5">5</a>
    <a pid="80" href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/p80"><img src="./assets/image/ic_double_caret_right.png"></a>
    </div>
    
            </div>
        </div>
    
    
    
    
    
    
        <div class="divide">&nbsp;</div>
    <div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Cho thuê cửa hàng chính chủ" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-cua-hang-chinh-chu">Cho thuê cửa hàng chính chủ</a></li>    <li><a title="Cho thuê cửa hàng giá rẻ" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-cua-hang-gia-re">Cho thuê cửa hàng giá rẻ</a></li>    <li><a title="Cho thuê cửa hàng gần trường học" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-cua-hang-gan-truong-hoc">Cho thuê cửa hàng gần trường học</a></li>    <li><a title="sang quán ăn gia đình" href="https://batdongsan.com.vn/tags/cho-thue/sang-quan-an-gia-dinh">sang quán ăn gia đình</a></li>    <li><a title="Cho thuê cửa hàng chính chủ Hà Nội" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-cua-hang-chinh-chu-ha-noi">Cho thuê cửa hàng chính chủ Hà Nội</a></li>    <li><a title="Sang cửa hàng quận Tân Phú" href="https://batdongsan.com.vn/tags/cho-thue/sang-cua-hang-quan-tan-phu">Sang cửa hàng quận Tân Phú</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
        <div class="product-seo-text">
            <div>Cho thuê cửa hàng, ki ốt <strong>Việt Nam</strong></div>
                                    <div>Thị trường cho thuê cửa hàng, ki ốt tại các thành phố lớn như Hà Nội, Tp.HCM luôn thu hút được sự quan tâm của nhiều người. Mặt bằng giá thuê cũng có sự chênh lệch khá lớn giữa cho thuê cửa hàng, ki ốt <strong>Việt Nam</strong> ở những tuyến đường chính thuộc trung tâm so với những tuyến phố xa trung tâm hơn. </div>
                                    <div>Mức giá <strong>thuê mặt bằng Việt Nam</strong> dao động từ vài triệu đồng cho đến vài chục triệu đồng hoặc có thể hơn. Tuy nhiên, việc tìm được cửa hàng, ki ốt phù hợp, đáp ứng được nhu cầu không phải là dễ dàng, bạn cần phải có được nguồn thông tin phong phú, đáng tin cậy để có thể so sánh và đưa ra lựa chọn.</div>
                                    <div>Hiện nay, <strong>Batdongsan.com.vn</strong> là kênh thông tin uy tín nhất về lĩnh vực bất động sản, tại đây khách hàng có thể tìm kiếm rất nhiều tin tức <strong>cho thuê Việt Nam giá rẻ</strong> được cập nhật liên tục, chính xác và chi tiết nhất.
                                    Batdongsan.com.vn gợi ý một số thông tin quan trọng cần lưu ý khi tìm thuê cửa hàng, ki ốt.</div>
                                    <ul>
                                    <li>- Lựa chọn vị trí, diện tích, giá thuê...phù hợp với mục đích kinh doanh của bạn.</li>
                                    <li>- Lưu ý các yếu tố về tiện ích như điều hòa, máy phát điện, thang máy...</li>
                                    <li>- Xem xét kỹ các điều khoản trong hợp đồng cho thuê bao gồm chi phí thuê và các chi phí phát sinh khác như điện, nước, internet...</li>
                                    </ul>
        </div>
    <form id="productListBinnova" method="post">
        <input id="hashAlias" type="hidden" value="df9e1a209bba8270327461a57488a3abc442ee3092274ca4de602421718e039d">
    </form>
    <script type="text/javascript">
        (function callJQuery() {
            if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
                var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                    getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                    model: {
                        typeOfProduct: 49,
                        categoryId: 55,
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
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/-1/2/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam giá 1 - 3 triệu">1 - 3 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/-1/3/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam giá 3 - 5 triệu">3 - 5 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/-1/4/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam giá 5 - 10 triệu">5 - 10 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/-1/5/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam giá 10 - 40 triệu">10 - 40 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/-1/6/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam giá 40 - 70 triệu">40 - 70 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/-1/7/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam giá 70 - 100 triệu">70 - 100 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/-1/8/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam giá &gt; 100 triệu">&gt; 100 triệu</a></li>
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
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/1/-1/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/2/-1/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/3/-1/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/4/-1/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/5/-1/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/6/-1/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/7/-1/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/8/-1/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/9/-1/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot/10/-1/-1/-1" title="Cho thuê cửa hàng, ki ốt Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
            <h2 class="box-title">Cho thuê cửa hàng, ki ốt</h2>
    
            <div class="box-content link-hover-blue">
                <ul>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-tp-hcm" title="Cho thuê cửa hàng, ki ốt tại Hồ Chí Minh">
                                    Hồ Chí Minh (818)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-ha-noi" title="Cho thuê cửa hàng, ki ốt tại Hà Nội">
                                    Hà Nội (570)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-binh-duong" title="Cho thuê cửa hàng, ki ốt tại Bình Dương">
                                    Bình Dương (66)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-da-nang" title="Cho thuê cửa hàng, ki ốt tại Đà Nẵng">
                                    Đà Nẵng (32)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-khanh-hoa" title="Cho thuê cửa hàng, ki ốt tại Khánh Hòa">
                                    Khánh Hòa (24)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-thanh-hoa" title="Cho thuê cửa hàng, ki ốt tại Thanh Hóa">
                                    Thanh Hóa (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-nam-dinh" title="Cho thuê cửa hàng, ki ốt tại Nam Định">
                                    Nam Định (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-nghe-an" title="Cho thuê cửa hàng, ki ốt tại Nghệ An">
                                    Nghệ An (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-binh-thuan" title="Cho thuê cửa hàng, ki ốt tại Bình Thuận  ">
                                    Bình Thuận   (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-quang-ninh" title="Cho thuê cửa hàng, ki ốt tại Quảng Ninh">
                                    Quảng Ninh (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-bac-giang" title="Cho thuê cửa hàng, ki ốt tại Bắc Giang">
                                    Bắc Giang (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-hai-phong" title="Cho thuê cửa hàng, ki ốt tại Hải Phòng">
                                    Hải Phòng (13)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-dak-lak" title="Cho thuê cửa hàng, ki ốt tại Đắk Lắk">
                                    Đắk Lắk (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-an-giang" title="Cho thuê cửa hàng, ki ốt tại An Giang">
                                    An Giang (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-hung-yen" title="Cho thuê cửa hàng, ki ốt tại Hưng Yên">
                                    Hưng Yên (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-thua-thien-hue" title="Cho thuê cửa hàng, ki ốt tại Thừa Thiên Huế">
                                    Thừa Thiên Huế (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-kien-giang" title="Cho thuê cửa hàng, ki ốt tại Kiên Giang">
                                    Kiên Giang (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-quang-nam" title="Cho thuê cửa hàng, ki ốt tại Quảng Nam">
                                    Quảng Nam (3)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-ba-ria-vung-tau" title="Cho thuê cửa hàng, ki ốt tại Bà Rịa Vũng Tàu">
                                    Bà Rịa Vũng Tàu (22)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-binh-phuoc" title="Cho thuê cửa hàng, ki ốt tại Bình Phước">
                                    Bình Phước (1)
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
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-quan-9" title="Cho thuê cửa hàng Quận 9">
                                        Cho thuê cửa hàng Quận 9
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-quan-4" title="Cho thuê cửa hàng Quận 4">
                                        Cho thuê cửa hàng Quận 4
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-cam-le-ddn" title="Cho thuê cửa hàng Cẩm Lệ">
                                        Cho thuê cửa hàng Cẩm Lệ
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-son-tra-ddn" title="Cho thuê cửa hàng Sơn Trà">
                                        Cho thuê cửa hàng Sơn Trà
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-nha-trang-kh" title="Cho thuê cửa hàng Nha Trang">
                                        Cho thuê cửa hàng Nha Trang
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-nha-be" title="Cho thuê cửa hàng Nhà Bè">
                                        Cho thuê cửa hàng Nhà Bè
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-bien-hoa-dna" title="Cho thuê cửa hàng Biên Hòa">
                                        Cho thuê cửa hàng Biên Hòa
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-di-an-bd" title="Cho thuê cửa hàng Dĩ An">
                                        Cho thuê cửa hàng Dĩ An
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-thu-dau-mot-bd" title="Cho thuê cửa hàng Thủ Dầu Một">
                                        Cho thuê cửa hàng Thủ Dầu Một
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-da-lat-ldd" title="Cho thuê cửa hàng Đà Lạt">
                                        Cho thuê cửa hàng Đà Lạt
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-ben-cat-bd" title="Cho thuê cửa hàng Bến Cát">
                                        Cho thuê cửa hàng Bến Cát
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-hue-tth" title="Cho thuê cửa hàng Huế">
                                        Cho thuê cửa hàng Huế
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-buon-ma-thuot-ddl" title="Cho thuê cửa hàng Buôn Ma Thuột">
                                        Cho thuê cửa hàng Buôn Ma Thuột
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-hai-duong-hd" title="Cho thuê cửa hàng Hải Dương">
                                        Cho thuê cửa hàng Hải Dương
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-ha-long-qni" title="Cho thuê cửa hàng Hạ Long">
                                        Cho thuê cửa hàng Hạ Long
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-hoai-duc" title="Cho thuê cửa hàng Hoài Đức">
                                        Cho thuê cửa hàng Hoài Đức
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-plei-ku-gl" title="Cho thuê cửa hàng Plei Ku">
                                        Cho thuê cửa hàng Plei Ku
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-quy-nhon-bdd" title="Cho thuê cửa hàng Quy Nhơn">
                                        Cho thuê cửa hàng Quy Nhơn
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-phan-thiet-bth" title="Cho thuê cửa hàng Phan Thiết">
                                        Cho thuê cửa hàng Phan Thiết
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/du-an-khac-phu-quoc-kg/intercon-phu-quoc-pj2589" title="Intercon Phú Quốc">
                                        Intercon Phú Quốc
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
            