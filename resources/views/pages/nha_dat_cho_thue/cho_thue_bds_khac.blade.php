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
                    <div class="custom-value hasvalue">Bất động sản khác</div>
                </div>
                <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="59">
                <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                        <li vl="0"><span class="current">Tất cả nhà đất</span></li>
                                        <li vl="326"><span>Căn hộ chung cư</span></li>
                                        <li vl="52"><span>Nhà riêng</span></li>
                                        <li vl="51"><span>Nhà mặt phố</span></li>
                                        <li vl="57"><span>Nhà trọ, phòng trọ</span></li>
                                        <li vl="50"><span>Văn phòng</span></li>
                                        <li vl="55"><span>Cửa hàng, ki ốt</span></li>
                                        <li vl="53"><span>Kho, nhà xưởng, đất</span></li>
                                        <li vl="59"><span class="active">Bất động sản khác</span></li>
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
                            <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                            <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                    categoryId: 59,
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
        <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac" level="1" title="Cho thuê loại bất động sản khác tại Việt Nam">Cho thuê</a><span>/</span><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac" level="2" title="Cho thuê loại bất động sản khác tại Việt Nam">Loại bất động sản khác trên toàn quốc</a>
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
            {"@context":"https://schema.org/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Trang chủ","item":"https://batdongsan.com.vn"},{"@type":"ListItem","position":2,"name":"Cho thuê","item":"https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac"},{"@type":"ListItem","position":3,"name":"Loại bất động sản khác trên toàn quốc","item":"https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac"}]}
        </script>
    
    <div class="product-list-header pad-top-8">
        <h1>Cho thuê loại bất động sản khác tại Việt Nam</h1>
            <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">48</span> bất động sản.</div>
        
    
    </div>
    
        <div class="product-nav-bar pad-top-8 clearfix">
            <ul class="ul-tab fl mar-right-16">
                <li class="list-display actived">Danh sách</li>
                <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
                <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-cho-thue-loai-bat-dong-san-khac">Bản đồ</a></li>
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
                <div class="vip1 vipaddon product-item clearfix" uid="877976">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-phuong-phuong-son/cho-toa-nha-showroom-1600m2-ngang-20-gan-lotte-mart-duong-23-10-rong-40m-pr27779705" title="Cho thuê toà nhà Showroom 1600m2 ngang 20 gần Lotte Mart đường 23/10 rộng 40m" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê toà nhà Showroom 1600m2 ngang 20 gần Lotte Mart đường 23/10 rộng 40m" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201113114038-9d6f_wm.jpg" is-lazy-image="true" lazy-id="0"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/20201113114040-3733_wm.jpg" is-lazy-image="true" lazy-id="1"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/20201113114040-de02_wm.jpg" is-lazy-image="true" lazy-id="2">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-phuong-phuong-son/cho-toa-nha-showroom-1600m2-ngang-20-gan-lotte-mart-duong-23-10-rong-40m-pr27779705" title="Cho thuê toà nhà Showroom 1600m2 ngang 20 gần Lotte Mart đường 23/10 rộng 40m" class="vipOne product-link">
                                CHO THUÊ TOÀ NHÀ SHOWROOM 1600M2 NGANG 20 GẦN LOTTE MART ĐƯỜNG 23/10 RỘNG 40M
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">200 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">1600 m²</span>
                                                            <span class="dot">·</span>
                                    <span class="bedroom">8 PN</span>
                            <span class="location">Nha Trang, Khánh Hòa</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Cho thuê toà nhà 4 tầng gần Lotte Mart hợp đồng dài hạn , cho sửa chữa ...
     Nằm trên đường 23/10 rộng 40m
     Diện tích 400m2 ngang 20 x 4 sàn , có tháng máy
     Giá 200 triệu / tháng
     Zalo bách : <span class="hidden-mobile des" raw="033.864.3333">033.864.3***</span>
     
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    Hôm nay
                                    <span class="tooltip-time">13/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Văn Bách">
                                    <span class="contact-name">Văn Bách</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0338643333" raw="0338643333">0338 643 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27779705" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; to&amp;#224; nh&amp;#224; Showroom 1600m2 ngang 20 gần Lotte Mart đường 23/10 rộng 40m&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113114038-9d6f_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113114040-3733_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113114040-de02_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/13/20201113114038-9d6f_wm.jpg" data-vipclass="vip1 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê toà nhà Showroom 1600m2 ngang 20 gần Lotte Mart đường 23/10 rộng 40m" data-price="200 triệu/tháng" data-area="1600 m²" data-pricesort="200000000" data-areasort="1600" data-room="8" data-toilets="0" data-address="Nha Trang, Khánh Hòa" data-description="Cho thuê toà nhà 4 tầng gần Lotte Mart hợp đồng dài hạn , cho sửa chữa ...
     Nằm trên đường 23/10 rộng 40m
     Diện tích 400m2 ngang 20 x 4 sàn , có tháng máy
     Giá 200 triệu / tháng
     Zalo bách : 033.864.3333
     " data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 11:41:41" data-contactname="Văn Bách" data-contactmobile="0338643333" data-url="/cho-thue-loai-bat-dong-san-khac-phuong-phuong-son/cho-toa-nha-showroom-1600m2-ngang-20-gan-lotte-mart-duong-23-10-rong-40m-pr27779705" data-totalmedia="4" data-createbyuser="877976"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="1012510">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-tan-xuan-phuong-xuan-dinh-prj-ecohome-3/cho-lo-goc-mat-3-152m-2-g-mat-tien-8m-via-he-8m-35tr-thang-0989089608-pr27778834" title="Cho thuê lô góc Mặt Tân Xuân Ecohome 3 152m 2 tầng! mặt tiền 8m vỉa hè 8m 35tr/ tháng! 0989089608" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê lô góc Mặt Tân Xuân Ecohome 3 152m 2 tầng! mặt tiền 8m vỉa hè 8m 35tr/ tháng! 0989089608" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201113110335-54ec_wm.jpg" is-lazy-image="true" lazy-id="3">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-tan-xuan-phuong-xuan-dinh-prj-ecohome-3/cho-lo-goc-mat-3-152m-2-g-mat-tien-8m-via-he-8m-35tr-thang-0989089608-pr27778834" title="Cho thuê lô góc Mặt Tân Xuân Ecohome 3 152m 2 tầng! mặt tiền 8m vỉa hè 8m 35tr/ tháng! 0989089***" class="vipFive product-link" style="overflow: visible;">
                                Cho thuê lô góc Mặt Tân Xuân Ecohome 3 152m 2 tầng! mặt tiền 8m vỉa hè 8m 35tr/ tháng! <span class="hidden-mobile m-on-title" raw="0989089608">0989089***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">35 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">152 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bắc Từ Liêm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            + Nằm ngay tại khu đô thị có mật độ dân số cao cư dân chủ yếu là tầng lớp trung lưu, trí thức, gia đình trẻ thích hợp đầu tư và kinh doanh.
     Khu nhà ở Ecohome 1: Có 1,500 cư dân.
     Khu nhà ở Ecohome 2
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
                                    <i class="iconSave" data-productid="27778834" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; l&amp;#244; g&amp;#243;c Mặt T&amp;#226;n Xu&amp;#226;n Ecohome 3 152m 2 tầng! mặt tiền 8m vỉa h&amp;#232; 8m 35tr/ th&amp;#225;ng! 0989089608&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113110335-54ec_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/13/20201113110335-54ec_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê lô góc Mặt Tân Xuân Ecohome 3 152m 2 tầng! mặt tiền 8m vỉa hè 8m 35tr/ tháng! 0989089608" data-price="35 triệu/tháng" data-area="152 m²" data-pricesort="35000000" data-areasort="152" data-room="1" data-toilets="1" data-address="Bắc Từ Liêm, Hà Nội" data-description="+ Nằm ngay tại khu đô thị có mật độ dân số cao cư dân chủ yếu là tầng lớp trung lưu, trí thức, gia đình trẻ thích hợp đầu tư và kinh doanh.
     Khu nhà ở Ecohome 1: Có 1,500 cư dân.
     Khu nhà ở Ecohome 2" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 11:03:46" data-contactname="Nguyễn Xuân Tiến" data-contactmobile="0989089608" data-url="/cho-thue-loai-bat-dong-san-khac-duong-tan-xuan-phuong-xuan-dinh-prj-ecohome-3/cho-lo-goc-mat-3-152m-2-g-mat-tien-8m-via-he-8m-35tr-thang-0989089608-pr27778834" data-totalmedia="3" data-createbyuser="1012510"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="728287">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/chua-su-dung-nen-can-cho-shop-de-s1-08-2-mat-tien-40trieu-thang-pr27776129" title="CHƯA SỬ DỤNG NÊN CẦN CHO THUÊ SHOP ĐẾ S1.08 2 MẶT TIỀN, VINHOMES OCEAN PARK, 40TRIỆU/THÁNG " onclick="">
                            <img class="product-avatar-img" alt="CHƯA SỬ DỤNG NÊN CẦN CHO THUÊ SHOP ĐẾ S1.08 2 MẶT TIỀN, VINHOMES OCEAN PARK, 40TRIỆU/THÁNG " error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201113092101-7a99_wm.jpg" is-lazy-image="true" lazy-id="4">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/chua-su-dung-nen-can-cho-shop-de-s1-08-2-mat-tien-40trieu-thang-pr27776129" title="CHƯA SỬ DỤNG NÊN CẦN CHO THUÊ SHOP ĐẾ S1.08 2 MẶT TIỀN, VINHOMES OCEAN PARK, 40TRIỆU/THÁNG " class="vipFive product-link">
                                CHƯA SỬ DỤNG NÊN CẦN CHO THUÊ SHOP ĐẾ S1.08 2 MẶT TIỀN, VINHOMES OCEAN PARK, 40TRIỆU/THÁNG 
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">40 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">78.7 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Gia Lâm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            CHƯA SỬ DỤNG NÊN CẦN CHO THUÊ SHOP ĐẾ S1.08 2 MẶT TIỀN, VINHOMES OCEAN PARK, 40TRIỆU/THÁNG 
     Thông tin chi tiết:
     - Diện tích: 78.7 m2.
     - Thiết kế: 2 mặt tiền lên tới 17m, nội thất bàn giao thô, hướ
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
                                    <i class="iconSave" data-productid="27776129" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;CHƯA SỬ DỤNG N&amp;#202;N CẦN CHO THU&amp;#202; SHOP ĐẾ S1.08 2 MẶT TIỀN, VINHOMES OCEAN PARK, 40TRIỆU/TH&amp;#193;NG &quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113092101-7a99_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/13/20201113092101-7a99_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="CHƯA SỬ DỤNG NÊN CẦN CHO THUÊ SHOP ĐẾ S1.08 2 MẶT TIỀN, VINHOMES OCEAN PARK, 40TRIỆU/THÁNG " data-price="40 triệu/tháng" data-area="78.7 m²" data-pricesort="40000000" data-areasort="78.6999969482422" data-room="0" data-toilets="0" data-address="Gia Lâm, Hà Nội" data-description="CHƯA SỬ DỤNG NÊN CẦN CHO THUÊ SHOP ĐẾ S1.08 2 MẶT TIỀN, VINHOMES OCEAN PARK, 40TRIỆU/THÁNG 
     Thông tin chi tiết:
     - Diện tích: 78.7 m2.
     - Thiết kế: 2 mặt tiền lên tới 17m, nội thất bàn giao thô, hướ" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:31:11" data-contactname="Minh Hùng" data-contactmobile="0975344463" data-url="/cho-thue-loai-bat-dong-san-khac-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/chua-su-dung-nen-can-cho-shop-de-s1-08-2-mat-tien-40trieu-thang-pr27776129" data-totalmedia="4" data-createbyuser="728287"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="1007698">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-dien-khanh-kh/cho-hoac-hop-tac-kinh-doanh-trang-trai-5-8-hecta-cach-tttp-nha-trang-16km-pr26908640" title="Cho thuê hoặc hợp tác kinh doanh trang trại 5,8 hecta, cách TTTP Nha Trang 16km" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê hoặc hợp tác kinh doanh trang trại 5,8 hecta, cách TTTP Nha Trang 16km" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/04/A1ouC3uN/20200904140802-3ad5_wm.jpg" is-lazy-image="true" lazy-id="5">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">7</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-dien-khanh-kh/cho-hoac-hop-tac-kinh-doanh-trang-trai-5-8-hecta-cach-tttp-nha-trang-16km-pr26908640" title="Cho thuê hoặc hợp tác kinh doanh trang trại 5,8 hecta, cách TTTP Nha Trang 16km" class="vipFive product-link">
                                Cho thuê hoặc hợp tác kinh doanh trang trại 5,8 hecta, cách TTTP Nha Trang 16km
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">19 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">58000 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Diên Khánh, Khánh Hòa</span>
                        </div>
                        <div class="product-content">
                            Tôi đang có trang trại 5,8ha tại Diên Khánh, do bận việc không có thời gian quản lý nên cần cho thuê hoặc hợp tác kinh doanh. Trang trại tổng hợp vẫn đang sản xuất bình thường, được đầu tư hệ thống h
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
                                    <i class="iconSave" data-productid="26908640" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; hoặc hợp t&amp;#225;c kinh doanh trang trại 5,8 hecta, c&amp;#225;ch TTTP Nha Trang 16km&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/04/A1ouC3uN/20200904140802-3ad5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/04/A1ouC3uN/20200904140802-3ad5_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê hoặc hợp tác kinh doanh trang trại 5,8 hecta, cách TTTP Nha Trang 16km" data-price="19 triệu/tháng" data-area="58000 m²" data-pricesort="19000000" data-areasort="58000" data-room="0" data-toilets="0" data-address="Diên Khánh, Khánh Hòa" data-description="Tôi đang có trang trại 5,8ha tại Diên Khánh, do bận việc không có thời gian quản lý nên cần cho thuê hoặc hợp tác kinh doanh. Trang trại tổng hợp vẫn đang sản xuất bình thường, được đầu tư hệ thống h" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 07:59:10" data-contactname="Đoàn Bình Minh" data-contactmobile="0794045518" data-url="/cho-thue-loai-bat-dong-san-khac-dien-khanh-kh/cho-hoac-hop-tac-kinh-doanh-trang-trai-5-8-hecta-cach-tttp-nha-trang-16km-pr26908640" data-totalmedia="7" data-createbyuser="1007698"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="1371991">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-quan-7/co-6-mat-bang-vi-tri-dep-7-dt-5x20m-tro-len-gia-tu-19-trieu-tro-len-lh-0901-296-116-t-huyen-pr27771310" title="Có 6 mặt bằng vị trí đẹp Quận 7 .DT: 5x20m trở lên.Giá; từ 19 triệu trở lên.LH;0901.296.116 T.Huyền" onclick="">
                            <img class="product-avatar-img" alt="Có 6 mặt bằng vị trí đẹp Quận 7 .DT: 5x20m trở lên.Giá; từ 19 triệu trở lên.LH;0901.296.116 T.Huyền" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112171729-79b7_wm.jpg" is-lazy-image="true" lazy-id="6">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">5</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-quan-7/co-6-mat-bang-vi-tri-dep-7-dt-5x20m-tro-len-gia-tu-19-trieu-tro-len-lh-0901-296-116-t-huyen-pr27771310" title="Có 6 mặt bằng vị trí đẹp Quận 7 .DT: 5x20m trở lên.Giá; từ 19 triệu trở lên.LH;0901.296.*** T.Huyền" class="vipFive product-link" style="overflow: visible;">
                                Có 6 mặt bằng vị trí đẹp Quận 7 .DT: 5x20m trở lên.Giá; từ 19 triệu trở lên.LH;<span class="hidden-mobile m-on-title" raw="0901.296.116">0901.296.***</span> T.Huyền
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">19 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 7, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Có 6 Mặt bằng cho thuê vị trí đẹp Quận 7. 
     1/ Mặt bằng cho thuê KDC Him Lam Quận 7.
     Diện tích ; 10x20m , mặt bằng đẹp ưu tiên văn phòng công ty ,phòng khám tư nhân , phòng thẩm mỹ , (trừ cafphe, ăn
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
                                    <i class="iconSave" data-productid="27771310" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;C&amp;#243; 6 mặt bằng vị tr&amp;#237; đẹp Quận 7 .DT: 5x20m trở l&amp;#234;n.Gi&amp;#225;; từ 19 triệu trở l&amp;#234;n.LH;0901.296.116 T.Huyền&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112171729-79b7_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112171729-79b7_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Có 6 mặt bằng vị trí đẹp Quận 7 .DT: 5x20m trở lên.Giá; từ 19 triệu trở lên.LH;0901.296.116 T.Huyền" data-price="19 triệu/tháng" data-area="100 m²" data-pricesort="19000000" data-areasort="100" data-room="0" data-toilets="0" data-address="Quận 7, Hồ Chí Minh" data-description="Có 6 Mặt bằng cho thuê vị trí đẹp Quận 7. 
     1/ Mặt bằng cho thuê KDC Him Lam Quận 7.
     Diện tích ; 10x20m , mặt bằng đẹp ưu tiên văn phòng công ty ,phòng khám tư nhân , phòng thẩm mỹ , (trừ cafphe, ăn" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 17:18:29" data-contactname="Phan Thi Thanh Huyen" data-contactmobile="0901296116" data-url="/cho-thue-loai-bat-dong-san-khac-quan-7/co-6-mat-bang-vi-tri-dep-7-dt-5x20m-tro-len-gia-tu-19-trieu-tro-len-lh-0901-296-116-t-huyen-pr27771310" data-totalmedia="5" data-createbyuser="1371991"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="365080">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-70-2-phuong-xuan-phuong-prj-khu-do-thi-xuan-phuong/cho-biet-thu-lk-kdt-sinh-thai-dt-170m2-gia-20tr-thang-lh-0969749993-pr27768747" title="Cho thuê biệt thự LK Xuân Phương, KĐT sinh thái Xuân Phương DT 170m2 giá 20tr/tháng LH 0969749993 " onclick="">
                            <img class="product-avatar-img" alt="Cho thuê biệt thự LK Xuân Phương, KĐT sinh thái Xuân Phương DT 170m2 giá 20tr/tháng LH 0969749993 " error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112150220-124d_wm.jpg" is-lazy-image="true" lazy-id="7">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-70-2-phuong-xuan-phuong-prj-khu-do-thi-xuan-phuong/cho-biet-thu-lk-kdt-sinh-thai-dt-170m2-gia-20tr-thang-lh-0969749993-pr27768747" title="Cho thuê biệt thự LK Xuân Phương, KĐT sinh thái Xuân Phương DT 170m2 giá 20tr/tháng LH 0969749*** " class="vipFive product-link" style="overflow: visible;">
                                Cho thuê biệt thự LK Xuân Phương, KĐT sinh thái Xuân Phương DT 170m2 giá 20tr/tháng LH <span class="hidden-mobile m-on-title" raw="0969749993">0969749***</span> 
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">20 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">170 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Nam Từ Liêm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Tôi chính chủ cần cho thuê biệt thự liền kề nằm trong khu đô thị Tasso Xuân Phương, lô nhà tôi thuộc BT5, diện tích 170m2 với thiết kế 3 tầng, hoàn thiện toàn bộ mặt ngoài và lan can inox kính, cửa E
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
                                    <i class="iconSave" data-productid="27768747" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; biệt thự LK Xu&amp;#226;n Phương, KĐT sinh th&amp;#225;i Xu&amp;#226;n Phương DT 170m2 gi&amp;#225; 20tr/th&amp;#225;ng LH 0969749993 &quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112150220-124d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112150220-124d_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê biệt thự LK Xuân Phương, KĐT sinh thái Xuân Phương DT 170m2 giá 20tr/tháng LH 0969749993 " data-price="20 triệu/tháng" data-area="170 m²" data-pricesort="20000000" data-areasort="170" data-room="0" data-toilets="0" data-address="Nam Từ Liêm, Hà Nội" data-description="Tôi chính chủ cần cho thuê biệt thự liền kề nằm trong khu đô thị Tasso Xuân Phương, lô nhà tôi thuộc BT5, diện tích 170m2 với thiết kế 3 tầng, hoàn thiện toàn bộ mặt ngoài và lan can inox kính, cửa E" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 14:59:06" data-contactname="anh Đăng" data-contactmobile="0969749993" data-url="/cho-thue-loai-bat-dong-san-khac-duong-70-2-phuong-xuan-phuong-prj-khu-do-thi-xuan-phuong/cho-biet-thu-lk-kdt-sinh-thai-dt-170m2-gia-20tr-thang-lh-0969749993-pr27768747" data-totalmedia="1" data-createbyuser="365080"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="763764">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-nguyen-dinh-chieu-phuong-mui-ne/cho-resort-13-phong-ho-boi-quay-bar-105-hai-tien-lh-0972055399-pr27588590" title="Cho thuê resort 13 phòng, hồ bơi, quầy bar 105 Nguyễn Đình Chiểu, Mũi Né. LH 0972055399" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê resort 13 phòng, hồ bơi, quầy bar 105 Nguyễn Đình Chiểu, Mũi Né. LH 0972055399" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/29/20201029102320-cffb_wm.jpg" is-lazy-image="true" lazy-id="8">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">7</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-nguyen-dinh-chieu-phuong-mui-ne/cho-resort-13-phong-ho-boi-quay-bar-105-hai-tien-lh-0972055399-pr27588590" title="Cho thuê resort 13 phòng, hồ bơi, quầy bar 105 Nguyễn Đình Chiểu, Mũi Né. LH 0972055***" class="vipFive product-link" style="overflow: visible;">
                                Cho thuê resort 13 phòng, hồ bơi, quầy bar 105 Nguyễn Đình Chiểu, Mũi Né. LH <span class="hidden-mobile m-on-title" raw="0972055399">0972055***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">1200 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Phan Thiết, Bình Thuận  </span>
                        </div>
                        <div class="product-content">
                            - Chính chủ cần cho thuê resort rộng 1200m2 bao gồm 13 phòng, hồ bơi, quầy bar số 105 đường Nguyễn Đình Chiểu, Phường Hàm Tiến, Mũi Né, Phan Thiết, Bình Thuận. - Có thể cho thuê dài hạn, giá thỏa thu
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
                                    <i class="iconSave" data-productid="27588590" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; resort 13 ph&amp;#242;ng, hồ bơi, quầy bar 105 Nguyễn Đ&amp;#236;nh Chiểu, Mũi N&amp;#233;. LH 0972055399&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/29/20201029102320-cffb_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/29/20201029102320-cffb_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê resort 13 phòng, hồ bơi, quầy bar 105 Nguyễn Đình Chiểu, Mũi Né. LH 0972055399" data-price="Giá thỏa thuận" data-area="1200 m²" data-pricesort="0" data-areasort="1200" data-room="0" data-toilets="0" data-address="Phan Thiết, Bình Thuận  " data-description="- Chính chủ cần cho thuê resort rộng 1200m2 bao gồm 13 phòng, hồ bơi, quầy bar số 105 đường Nguyễn Đình Chiểu, Phường Hàm Tiến, Mũi Né, Phan Thiết, Bình Thuận. - Có thể cho thuê dài hạn, giá thỏa thu" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 14:42:27" data-contactname="Phạm Đăng" data-contactmobile="0972055399" data-url="/cho-thue-loai-bat-dong-san-khac-duong-nguyen-dinh-chieu-phuong-mui-ne/cho-resort-13-phong-ho-boi-quay-bar-105-hai-tien-lh-0972055399-pr27588590" data-totalmedia="7" data-createbyuser="763764"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="1503034">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-xa-an-khanh-4-prj-vinhomes-thang-long/cho-biet-thu-vinhome-day-du-do-18tr-pr27766322" title="Cho thuê biệt thự Vinhome Thăng Long, đầy đủ đồ, 18tr/rg" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê biệt thự Vinhome Thăng Long, đầy đủ đồ, 18tr/rg" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112120141-c329_wm.jpg" is-lazy-image="true" lazy-id="9">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-xa-an-khanh-4-prj-vinhomes-thang-long/cho-biet-thu-vinhome-day-du-do-18tr-pr27766322" title="Cho thuê biệt thự Vinhome Thăng Long, đầy đủ đồ, 18tr/rg" class="vipFive product-link">
                                Cho thuê biệt thự Vinhome Thăng Long, đầy đủ đồ, 18tr/rg
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">18 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">154 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hoài Đức, Hà Nội</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Tôi có nhu cầu cho thuê biệt thự Vinhome Thăng Long, nội thất đầy đủ. Tủ bếp, điều hòa, nóng lạnh, tủ quần áo. DT 154m2, DT xây dựng: 300m2 (4 tầng). Giá thuê: 18 triệu/tháng. LH: <span class="hidden-mobile des" raw="0911143788">0911143***</span>.
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
                                    <i class="iconSave" data-productid="27766322" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; biệt thự Vinhome Thăng Long, đầy đủ đồ, 18tr/rg&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112120141-c329_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112120141-c329_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê biệt thự Vinhome Thăng Long, đầy đủ đồ, 18tr/rg" data-price="18 triệu/tháng" data-area="154 m²" data-pricesort="18000000" data-areasort="154" data-room="0" data-toilets="0" data-address="Hoài Đức, Hà Nội" data-description="Tôi có nhu cầu cho thuê biệt thự Vinhome Thăng Long, nội thất đầy đủ. Tủ bếp, điều hòa, nóng lạnh, tủ quần áo. DT 154m2, DT xây dựng: 300m2 (4 tầng). Giá thuê: 18 triệu/tháng. LH: 0911143788." data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 14:35:32" data-contactname="Nguyễn Thị Hồi" data-contactmobile="0911143788" data-url="/cho-thue-loai-bat-dong-san-khac-xa-an-khanh-4-prj-vinhomes-thang-long/cho-biet-thu-vinhome-day-du-do-18tr-pr27766322" data-totalmedia="1" data-createbyuser="1503034"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="863720">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-le-van-luong-phuong-nhan-chinh/cho-be-boi-gym-yoga-dien-tich-1000m2-gia-re-thanh-xuan-vi-tri-dep-0902131683-pr26987573" title="Cho thuê bể bơi, diện tích 1000m2 giá rẻ Thanh Xuân, vị trí đẹp, 0902131683" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê bể bơi, diện tích 1000m2 giá rẻ Thanh Xuân, vị trí đẹp, 0902131683" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/10/20200910164939-5721_wm.jpg" is-lazy-image="true" lazy-id="10">
                        </a>
                        <span class="product-feature">
                                                                                <img src="./assets/image/ic_video.svg">
                        </span>
                            <span class="product-media">2</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-le-van-luong-phuong-nhan-chinh/cho-be-boi-gym-yoga-dien-tich-1000m2-gia-re-thanh-xuan-vi-tri-dep-0902131683-pr26987573" title="Cho thuê bể bơi, diện tích 1000m2 giá rẻ Thanh Xuân, vị trí đẹp, 0902131***" class="vipFive product-link" style="overflow: visible;">
                                Cho thuê bể bơi, diện tích 1000m2 giá rẻ Thanh Xuân, vị trí đẹp, <span class="hidden-mobile m-on-title" raw="0902131683">0902131***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">100 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">1000 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Thanh Xuân, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Hiện nay tôi đang cần cho thuê bể bơi mặt đường Lê Văn Lương vị trí đẹp. Khu vực có bể bơi tràn viền vị trí view rất đẹp bể bơi tầng 5. Nên view khắp Hà Nội bể có diện tích 1000m2. Và không gian tập 
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
                                    <i class="iconSave" data-productid="26987573" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; bể bơi, diện t&amp;#237;ch 1000m2 gi&amp;#225; rẻ Thanh Xu&amp;#226;n, vị tr&amp;#237; đẹp, 0902131683&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/10/20200910164939-5721_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/10/20200910164939-5721_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="true" data-title="Cho thuê bể bơi, diện tích 1000m2 giá rẻ Thanh Xuân, vị trí đẹp, 0902131683" data-price="100 triệu/tháng" data-area="1000 m²" data-pricesort="100000000" data-areasort="1000" data-room="0" data-toilets="0" data-address="Thanh Xuân, Hà Nội" data-description="Hiện nay tôi đang cần cho thuê bể bơi mặt đường Lê Văn Lương vị trí đẹp. Khu vực có bể bơi tràn viền vị trí view rất đẹp bể bơi tầng 5. Nên view khắp Hà Nội bể có diện tích 1000m2. Và không gian tập " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 14:25:12" data-contactname="Văn Ngọc" data-contactmobile="0988095174" data-url="/cho-thue-loai-bat-dong-san-khac-duong-le-van-luong-phuong-nhan-chinh/cho-be-boi-gym-yoga-dien-tich-1000m2-gia-re-thanh-xuan-vi-tri-dep-0902131683-pr26987573" data-totalmedia="2" data-createbyuser="863720"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="1021218">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-ham-nghi-thi-tran-cau-dien/chuyen-nhuong-truong-mam-non-khu-vuc-nguyen-co-thach-lh-0865-315-080-pr21788562" title="Chuyển nhượng trường mầm non cao cấp khu vực Hàm Nghi, Nguyễn Cơ Thạch. LH 0865.315.080" onclick="">
                            <img class="product-avatar-img" alt="Chuyển nhượng trường mầm non cao cấp khu vực Hàm Nghi, Nguyễn Cơ Thạch. LH 0865.315.080" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="11">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-ham-nghi-thi-tran-cau-dien/chuyen-nhuong-truong-mam-non-khu-vuc-nguyen-co-thach-lh-0865-315-080-pr21788562" title="Chuyển nhượng trường mầm non cao cấp khu vực Hàm Nghi, Nguyễn Cơ Thạch. LH 0865.315.***" class="vipFive product-link" style="overflow: visible;">
                                Chuyển nhượng trường mầm non cao cấp khu vực Hàm Nghi, Nguyễn Cơ Thạch. LH <span class="hidden-mobile m-on-title" raw="0865.315.080">0865.315.***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">1069 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Nam Từ Liêm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Cần nhượng trường mầm non cao cấp trong khối đế tòa nhà hỗn hợp khu vực Nguyễn Cơ Thạch, Hàm Nghi. * Mô tả: - Diện tích mặt bằng là 1069m2 trong đó tầng 1 là 200m2 còn lại chia đều diện tích tại tầng
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
                                    <i class="iconSave" data-productid="21788562" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chuyển nhượng trường mầm non cao cấp khu vực H&amp;#224;m Nghi, Nguyễn Cơ Thạch. LH 0865.315.080&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chuyển nhượng trường mầm non cao cấp khu vực Hàm Nghi, Nguyễn Cơ Thạch. LH 0865.315.080" data-price="Giá thỏa thuận" data-area="1069 m²" data-pricesort="0" data-areasort="1069" data-room="0" data-toilets="0" data-address="Nam Từ Liêm, Hà Nội" data-description="Cần nhượng trường mầm non cao cấp trong khối đế tòa nhà hỗn hợp khu vực Nguyễn Cơ Thạch, Hàm Nghi. * Mô tả: - Diện tích mặt bằng là 1069m2 trong đó tầng 1 là 200m2 còn lại chia đều diện tích tại tầng" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 13:50:44" data-contactname="Thuyvt.tamviet" data-contactmobile="0865315080" data-url="/cho-thue-loai-bat-dong-san-khac-duong-ham-nghi-thi-tran-cau-dien/chuyen-nhuong-truong-mam-non-khu-vuc-nguyen-co-thach-lh-0865-315-080-pr21788562" data-totalmedia="0" data-createbyuser="1021218"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="723422">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-nguyen-van-linh-phuong-tan-phong-9-prj-happy-valley/cho-shop-mat-tien-khu-phu-my-hung-pr27630751" title="Cho thuê shop Happy mặt tiền Nguyễn Văn Linh - khu Phú Mỹ Hưng" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê shop Happy mặt tiền Nguyễn Văn Linh - khu Phú Mỹ Hưng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102130955-330c_wm.jpg" is-lazy-image="true" lazy-id="12">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-nguyen-van-linh-phuong-tan-phong-9-prj-happy-valley/cho-shop-mat-tien-khu-phu-my-hung-pr27630751" title="Cho thuê shop Happy mặt tiền Nguyễn Văn Linh - khu Phú Mỹ Hưng" class="vipFive product-link">
                                Cho thuê shop Happy mặt tiền Nguyễn Văn Linh - khu Phú Mỹ Hưng
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">70 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">281 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 7, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Cho thuê shop Happy mặt tiền Nguyễn Văn Linh - khu Phú Mỹ Hưng.Tổng diện: 281m2.Giá: 70 tr/tháng.LH: <span class="hidden-mobile des" raw="0915 805 129">0915 805 ***</span> Phước Nhân.
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
                                    <i class="iconSave" data-productid="27630751" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; shop Happy mặt tiền Nguyễn Văn Linh - khu Ph&amp;#250; Mỹ Hưng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102130955-330c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/02/20201102130955-330c_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê shop Happy mặt tiền Nguyễn Văn Linh - khu Phú Mỹ Hưng" data-price="70 triệu/tháng" data-area="281 m²" data-pricesort="70000000" data-areasort="281" data-room="0" data-toilets="0" data-address="Quận 7, Hồ Chí Minh" data-description="Cho thuê shop Happy mặt tiền Nguyễn Văn Linh - khu Phú Mỹ Hưng.Tổng diện: 281m2.Giá: 70 tr/tháng.LH: 0915 805 129 Phước Nhân." data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 13:14:44" data-contactname="Nguyễn Phước Nhân" data-contactmobile="0915805129" data-url="/cho-thue-loai-bat-dong-san-khac-duong-nguyen-van-linh-phuong-tan-phong-9-prj-happy-valley/cho-shop-mat-tien-khu-phu-my-hung-pr27630751" data-totalmedia="1" data-createbyuser="723422"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="1371991">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-quan-7/mat-bang-cho-le-van-luong-q7-dt-5x20m-gia-20-trieu-thang-tl-lh-0901-296-116-thanh-huyen-pr27766258" title="Mặt bằng cho thuê Lê Văn Lương Q7.DT:5x20m. Giá; 20 triệu/tháng(TL).Lh;0901.296.116 Thanh Huyền" onclick="">
                            <img class="product-avatar-img" alt="Mặt bằng cho thuê Lê Văn Lương Q7.DT:5x20m. Giá; 20 triệu/tháng(TL).Lh;0901.296.116 Thanh Huyền" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112115653-ccb8_wm.jpg" is-lazy-image="true" lazy-id="13">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">5</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-quan-7/mat-bang-cho-le-van-luong-q7-dt-5x20m-gia-20-trieu-thang-tl-lh-0901-296-116-thanh-huyen-pr27766258" title="Mặt bằng cho thuê Lê Văn Lương Q7.DT:5x20m. Giá; 20 triệu/tháng(TL).Lh;0901.296.*** Thanh Huyền" class="vipFive product-link" style="overflow: visible;">
                                Mặt bằng cho thuê Lê Văn Lương Q7.DT:5x20m. Giá; 20 triệu/tháng(TL).Lh;<span class="hidden-mobile m-on-title" raw="0901.296.116">0901.296.***</span> Thanh Huyền
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">20 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 7, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Mặt bằng cho thuê Lê Văn Lương Quận 7 .
     Diện tích ; 5x20m ,trống suốt, vỉa hè 4m, thích hợp làm văn phòng công ty , sản phẩm trưng bày, showroom, salon , kinh doanh tự do .
     Vị trí ; gần siêu thị lo
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
                                    <i class="iconSave" data-productid="27766258" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Mặt bằng cho thu&amp;#234; L&amp;#234; Văn Lương Q7.DT:5x20m. Gi&amp;#225;; 20 triệu/th&amp;#225;ng(TL).Lh;0901.296.116 Thanh Huyền&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112115653-ccb8_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112115653-ccb8_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Mặt bằng cho thuê Lê Văn Lương Q7.DT:5x20m. Giá; 20 triệu/tháng(TL).Lh;0901.296.116 Thanh Huyền" data-price="20 triệu/tháng" data-area="100 m²" data-pricesort="20000000" data-areasort="100" data-room="0" data-toilets="0" data-address="Quận 7, Hồ Chí Minh" data-description="Mặt bằng cho thuê Lê Văn Lương Quận 7 .
     Diện tích ; 5x20m ,trống suốt, vỉa hè 4m, thích hợp làm văn phòng công ty , sản phẩm trưng bày, showroom, salon , kinh doanh tự do .
     Vị trí ; gần siêu thị lo" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 11:58:05" data-contactname="Phan Thi Thanh Huyen" data-contactmobile="0901296116" data-url="/cho-thue-loai-bat-dong-san-khac-quan-7/mat-bang-cho-le-van-luong-q7-dt-5x20m-gia-20-trieu-thang-tl-lh-0901-296-116-thanh-huyen-pr27766258" data-totalmedia="5" data-createbyuser="1371991"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="549774">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-hoang-ngan-phuong-trung-hoa-4/nhuong-nha-nghi-9-phong-160-trieu-du-do-pr27766010" title="Nhượng nhà nghỉ 9 phòng hoàng ngân 160 triệu đủ đồ" onclick="">
                            <img class="product-avatar-img" alt="Nhượng nhà nghỉ 9 phòng hoàng ngân 160 triệu đủ đồ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112114152-77b0_wm.jpg" is-lazy-image="true" lazy-id="14">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-hoang-ngan-phuong-trung-hoa-4/nhuong-nha-nghi-9-phong-160-trieu-du-do-pr27766010" title="Nhượng nhà nghỉ 9 phòng hoàng ngân 160 triệu đủ đồ" class="vipFive product-link">
                                Nhượng nhà nghỉ 9 phòng hoàng ngân 160 triệu đủ đồ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">23 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">400 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Cầu Giấy, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            
     Do công việc nên tôi không quản lý được nên cần sang nhượng nhà nghỉ hoàng ngân , quận Cầu Giấy. Gồm 9 phòng: 2 phòng đôi, 7 phòng đơn, giá thuê 23 triệu/1 tháng, giá sang nhượng 160 triệu, có thươ
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
                                    <i class="iconSave" data-productid="27766010" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Nhượng nh&amp;#224; nghỉ 9 ph&amp;#242;ng ho&amp;#224;ng ng&amp;#226;n 160 triệu đủ đồ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112114152-77b0_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112114152-77b0_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Nhượng nhà nghỉ 9 phòng hoàng ngân 160 triệu đủ đồ" data-price="23 triệu/tháng" data-area="400 m²" data-pricesort="23000000" data-areasort="400" data-room="0" data-toilets="0" data-address="Cầu Giấy, Hà Nội" data-description="
     Do công việc nên tôi không quản lý được nên cần sang nhượng nhà nghỉ hoàng ngân , quận Cầu Giấy. Gồm 9 phòng: 2 phòng đôi, 7 phòng đơn, giá thuê 23 triệu/1 tháng, giá sang nhượng 160 triệu, có thươ" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 11:42:10" data-contactname="Trần Hữu Cường" data-contactmobile="0974634988" data-url="/cho-thue-loai-bat-dong-san-khac-duong-hoang-ngan-phuong-trung-hoa-4/nhuong-nha-nghi-9-phong-160-trieu-du-do-pr27766010" data-totalmedia="3" data-createbyuser="549774"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="1012510">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-tan-xuan-phuong-xuan-dinh-prj-ecohome-3/cho-khoi-de-3-mat-152m-2-g-35tr-thang-ky-lau-dai-lien-he-0989089608-pr27765920" title="Cho thuê Khối đế Ecohome 3 Mặt tân Xuân 152m 2 tầng 35tr/ tháng Ký lâu dài! Liên hệ! 0989089608" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê Khối đế Ecohome 3 Mặt tân Xuân 152m 2 tầng 35tr/ tháng Ký lâu dài! Liên hệ! 0989089608" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112113719-0f06_wm.jpg" is-lazy-image="true" lazy-id="15">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-tan-xuan-phuong-xuan-dinh-prj-ecohome-3/cho-khoi-de-3-mat-152m-2-g-35tr-thang-ky-lau-dai-lien-he-0989089608-pr27765920" title="Cho thuê Khối đế Ecohome 3 Mặt tân Xuân 152m 2 tầng 35tr/ tháng Ký lâu dài! Liên hệ! 0989089***" class="vipFive product-link" style="overflow: visible;">
                                Cho thuê Khối đế Ecohome 3 Mặt tân Xuân 152m 2 tầng 35tr/ tháng Ký lâu dài! Liên hệ! <span class="hidden-mobile m-on-title" raw="0989089608">0989089***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">35 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">152 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bắc Từ Liêm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            + Nằm ngay tại khu đô thị có mật độ dân số cao cư dân chủ yếu là tầng lớp trung lưu, trí thức, gia đình trẻ thích hợp đầu tư và kinh doanh.
     Khu nhà ở Ecohome 1: Có 1,500 cư dân.
     Khu nhà ở Ecohome 2
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
                                    <i class="iconSave" data-productid="27765920" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; Khối đế Ecohome 3 Mặt t&amp;#226;n Xu&amp;#226;n 152m 2 tầng 35tr/ th&amp;#225;ng K&amp;#253; l&amp;#226;u d&amp;#224;i! Li&amp;#234;n hệ! 0989089608&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112113719-0f06_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112113719-0f06_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê Khối đế Ecohome 3 Mặt tân Xuân 152m 2 tầng 35tr/ tháng Ký lâu dài! Liên hệ! 0989089608" data-price="35 triệu/tháng" data-area="152 m²" data-pricesort="35000000" data-areasort="152" data-room="1" data-toilets="1" data-address="Bắc Từ Liêm, Hà Nội" data-description="+ Nằm ngay tại khu đô thị có mật độ dân số cao cư dân chủ yếu là tầng lớp trung lưu, trí thức, gia đình trẻ thích hợp đầu tư và kinh doanh.
     Khu nhà ở Ecohome 1: Có 1,500 cư dân.
     Khu nhà ở Ecohome 2" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 11:37:29" data-contactname="Nguyễn Xuân Tiến" data-contactmobile="0989089608" data-url="/cho-thue-loai-bat-dong-san-khac-duong-tan-xuan-phuong-xuan-dinh-prj-ecohome-3/cho-khoi-de-3-mat-152m-2-g-35tr-thang-ky-lau-dai-lien-he-0989089608-pr27765920" data-totalmedia="3" data-createbyuser="1012510"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="816515">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-tu-son-bn/cho-bai-xe-tai-bac-ninh-voi-dien-tich-6500m2-pr27592553" title="Cho thuê bãi xe tại Từ Sơn, Bắc Ninh, với diện tích 6500m2" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê bãi xe tại Từ Sơn, Bắc Ninh, với diện tích 6500m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/29/20201029154332-18d2_wm.jpg" is-lazy-image="true" lazy-id="16">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-tu-son-bn/cho-bai-xe-tai-bac-ninh-voi-dien-tich-6500m2-pr27592553" title="Cho thuê bãi xe tại Từ Sơn, Bắc Ninh, với diện tích 6500m2" class="vipFive product-link">
                                Cho thuê bãi xe tại Từ Sơn, Bắc Ninh, với diện tích 6500m2
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">7500 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Từ Sơn, Bắc Ninh</span>
                        </div>
                        <div class="product-content">
                            CHuỗi Toyota xin gửi đến quý khách hàng tại thành phố Bắc Ninh một số dịch vụ kèm theo của.+ Giới thiệu:Hiện tại phía Toyota Từ sơn, thành phố Bắc Ninh của chúng tôi hiện tại đang có hơn 6500m2 cho t
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
                                    <i class="iconSave" data-productid="27592553" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; b&amp;#227;i xe tại Từ Sơn, Bắc Ninh, với diện t&amp;#237;ch 6500m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/29/20201029154332-18d2_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/29/20201029154332-18d2_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê bãi xe tại Từ Sơn, Bắc Ninh, với diện tích 6500m2" data-price="Giá thỏa thuận" data-area="7500 m²" data-pricesort="0" data-areasort="7500" data-room="0" data-toilets="0" data-address="Từ Sơn, Bắc Ninh" data-description="CHuỗi Toyota xin gửi đến quý khách hàng tại thành phố Bắc Ninh một số dịch vụ kèm theo của.+ Giới thiệu:Hiện tại phía Toyota Từ sơn, thành phố Bắc Ninh của chúng tôi hiện tại đang có hơn 6500m2 cho t" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 11:31:24" data-contactname="Ban Quản Lý Tòa Nhà" data-contactmobile="0329016994" data-url="/cho-thue-loai-bat-dong-san-khac-tu-son-bn/cho-bai-xe-tai-bac-ninh-voi-dien-tich-6500m2-pr27592553" data-totalmedia="3" data-createbyuser="816515"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="863720">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-le-duc-tho-phuong-my-dinh-1/cho-gym-va-be-boi-vi-tri-dep-view-khap-1500m2-0902131683-pr26991804" title="Cho thuê gym và bể bơi Mỹ Đình vị trí đẹp view khắp Mỹ Đình 1500m2. 0902131683" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê gym và bể bơi Mỹ Đình vị trí đẹp view khắp Mỹ Đình 1500m2. 0902131683" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/11/20200911084442-397e_wm.jpg" is-lazy-image="true" lazy-id="17">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">2</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-le-duc-tho-phuong-my-dinh-1/cho-gym-va-be-boi-vi-tri-dep-view-khap-1500m2-0902131683-pr26991804" title="Cho thuê gym và bể bơi Mỹ Đình vị trí đẹp view khắp Mỹ Đình 1500m2. 0902131683" class="vipFive product-link">
                                Cho thuê gym và bể bơi Mỹ Đình vị trí đẹp view khắp Mỹ Đình 1500m2. 0902131683
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">100 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">1500 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Nam Từ Liêm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Cần cho thuê mặt bằng làm gym, bể bơi mặt đường Lê Đức Thọ. Vị trí đẹp ô góc khu vực đông dân cư và văn phòng. Tòa chung cư có 42 tầng. Có 3 hầm để xe tầng 1 tới tầng 4 là sàn thương mại. Có rạp chiế
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
                                    <i class="iconSave" data-productid="26991804" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; gym v&amp;#224; bể bơi Mỹ Đ&amp;#236;nh vị tr&amp;#237; đẹp view khắp Mỹ Đ&amp;#236;nh 1500m2. 0902131683&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/11/20200911084442-397e_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/11/20200911084442-397e_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê gym và bể bơi Mỹ Đình vị trí đẹp view khắp Mỹ Đình 1500m2. 0902131683" data-price="100 triệu/tháng" data-area="1500 m²" data-pricesort="100000000" data-areasort="1500" data-room="0" data-toilets="0" data-address="Nam Từ Liêm, Hà Nội" data-description="Cần cho thuê mặt bằng làm gym, bể bơi mặt đường Lê Đức Thọ. Vị trí đẹp ô góc khu vực đông dân cư và văn phòng. Tòa chung cư có 42 tầng. Có 3 hầm để xe tầng 1 tới tầng 4 là sàn thương mại. Có rạp chiế" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 11:13:46" data-contactname="Văn Ngọc" data-contactmobile="0902131683" data-url="/cho-thue-loai-bat-dong-san-khac-duong-le-duc-tho-phuong-my-dinh-1/cho-gym-va-be-boi-vi-tri-dep-view-khap-1500m2-0902131683-pr26991804" data-totalmedia="2" data-createbyuser="863720"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="863720">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-tran-phu-phuong-mo-lao/cho-be-boi-ha-vi-tri-dep-be-boi-bon-mua-dep-dien-tich-be-200m2-0902131683-pr27764878" title="cho thuê bể bơi hà đông vị trí đẹp bể bơi bốn mùa đẹp diện tích bể 200m2 0902131683" onclick="">
                            <img class="product-avatar-img" alt="cho thuê bể bơi hà đông vị trí đẹp bể bơi bốn mùa đẹp diện tích bể 200m2 0902131683" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112105439-9b42_wm.jpg" is-lazy-image="true" lazy-id="18">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">2</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-duong-tran-phu-phuong-mo-lao/cho-be-boi-ha-vi-tri-dep-be-boi-bon-mua-dep-dien-tich-be-200m2-0902131683-pr27764878" title="cho thuê bể bơi hà đông vị trí đẹp bể bơi bốn mùa đẹp diện tích bể 200m2 0902131683" class="vipFive product-link">
                                cho thuê bể bơi hà đông vị trí đẹp bể bơi bốn mùa đẹp diện tích bể 200m2 0902131683
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">700 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hà Đông, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            tôi cần cho thuê bể bơi bốn mùa khu vực hà đông 
     bể bơi bốn mùa trong nhà tầng đẹp view rộng 
     khu vực mỗ lao hà đông 
     khu rất đông dân cư và nhiều người nước ngoài sinh sống 
     khu vực sầm uất có n
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
                                    <i class="iconSave" data-productid="27764878" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;cho thu&amp;#234; bể bơi h&amp;#224; đ&amp;#244;ng vị tr&amp;#237; đẹp bể bơi bốn m&amp;#249;a đẹp diện t&amp;#237;ch bể 200m2 0902131683&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112105439-9b42_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112105439-9b42_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="cho thuê bể bơi hà đông vị trí đẹp bể bơi bốn mùa đẹp diện tích bể 200m2 0902131683" data-price="Giá thỏa thuận" data-area="700 m²" data-pricesort="0" data-areasort="700" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="tôi cần cho thuê bể bơi bốn mùa khu vực hà đông 
     bể bơi bốn mùa trong nhà tầng đẹp view rộng 
     khu vực mỗ lao hà đông 
     khu rất đông dân cư và nhiều người nước ngoài sinh sống 
     khu vực sầm uất có n" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:54:48" data-contactname="Văn Ngọc" data-contactmobile="0988095174" data-url="/cho-thue-loai-bat-dong-san-khac-duong-tran-phu-phuong-mo-lao/cho-be-boi-ha-vi-tri-dep-be-boi-bon-mua-dep-dien-tich-be-200m2-0902131683-pr27764878" data-totalmedia="2" data-createbyuser="863720"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="728287">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/cho-lai-shophouse-do-chua-co-nhu-cau-su-dung-s2-12-vhop-doi-dien-vinuni-80tr-thang-co-ho-tro-pr27764767" title="CHO THUÊ LẠI SHOPHOUSE DO CHƯA CÓ NHU CẦU SỬ DỤNG, S2.12 VHOP ĐỐI DIỆN VINUNI 80TR/THÁNG CÓ HỖ TRỢ" onclick="">
                            <img class="product-avatar-img" alt="CHO THUÊ LẠI SHOPHOUSE DO CHƯA CÓ NHU CẦU SỬ DỤNG, S2.12 VHOP ĐỐI DIỆN VINUNI 80TR/THÁNG CÓ HỖ TRỢ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112104854-6997_wm.jpg" is-lazy-image="true" lazy-id="19">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/cho-lai-shophouse-do-chua-co-nhu-cau-su-dung-s2-12-vhop-doi-dien-vinuni-80tr-thang-co-ho-tro-pr27764767" title="CHO THUÊ LẠI SHOPHOUSE DO CHƯA CÓ NHU CẦU SỬ DỤNG, S2.12 VHOP ĐỐI DIỆN VINUNI 80TR/THÁNG CÓ HỖ TRỢ" class="vipFive product-link">
                                CHO THUÊ LẠI SHOPHOUSE DO CHƯA CÓ NHU CẦU SỬ DỤNG, S2.12 VHOP ĐỐI DIỆN VINUNI 80TR/THÁNG CÓ HỖ TRỢ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">80 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">175.4 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Gia Lâm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            CHO THUÊ LẠI SHOPHOUSE DO CHƯA CÓ NHU CẦU SỬ DỤNG, S2.12 VHOP ĐỐI DIỆN VINUNI 80TR/THÁNG CÓ HỖ TRỢ
     Thông tin chi tiết:
     -Diện tích: 175.4 m2
     -Thiết kế: 2 mặt tiền lên tới 20m, nội thất bàn giao thô
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
                                    <i class="iconSave" data-productid="27764767" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;CHO THU&amp;#202; LẠI SHOPHOUSE DO CHƯA C&amp;#211; NHU CẦU SỬ DỤNG, S2.12 VHOP ĐỐI DIỆN VINUNI 80TR/TH&amp;#193;NG C&amp;#211; HỖ TRỢ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112104854-6997_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112104854-6997_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="CHO THUÊ LẠI SHOPHOUSE DO CHƯA CÓ NHU CẦU SỬ DỤNG, S2.12 VHOP ĐỐI DIỆN VINUNI 80TR/THÁNG CÓ HỖ TRỢ" data-price="80 triệu/tháng" data-area="175.4 m²" data-pricesort="80000000" data-areasort="175.399993896484" data-room="0" data-toilets="0" data-address="Gia Lâm, Hà Nội" data-description="CHO THUÊ LẠI SHOPHOUSE DO CHƯA CÓ NHU CẦU SỬ DỤNG, S2.12 VHOP ĐỐI DIỆN VINUNI 80TR/THÁNG CÓ HỖ TRỢ
     Thông tin chi tiết:
     -Diện tích: 175.4 m2
     -Thiết kế: 2 mặt tiền lên tới 20m, nội thất bàn giao thô" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:50:19" data-contactname="Minh Hùng" data-contactmobile="0975344463" data-url="/cho-thue-loai-bat-dong-san-khac-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/cho-lai-shophouse-do-chua-co-nhu-cau-su-dung-s2-12-vhop-doi-dien-vinuni-80tr-thang-co-ho-tro-pr27764767" data-totalmedia="4" data-createbyuser="728287"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="1026524">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-pho-le-trong-tan-phuong-khuong-mai/ban-chung-cu-90m2-2pn-view-quang-truong-toa-r5-tang-8-gia-3-9-ty-lh-0842869966-pr27592584" title="Cho thuê hội trường, phòng họp từ 50 - 300 ghế ngồi quận Thanh Xuân" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê hội trường, phòng họp từ 50 - 300 ghế ngồi quận Thanh Xuân" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/29/20201029141725-47cb_wm.jpg" is-lazy-image="true" lazy-id="20">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-pho-le-trong-tan-phuong-khuong-mai/ban-chung-cu-90m2-2pn-view-quang-truong-toa-r5-tang-8-gia-3-9-ty-lh-0842869966-pr27592584" title="Cho thuê hội trường, phòng họp từ 50 - 300 ghế ngồi quận Thanh Xuân" class="vipFive product-link">
                                Cho thuê hội trường, phòng họp từ 50 - 300 ghế ngồi quận Thanh Xuân
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">2 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">300 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Thanh Xuân, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            + Đáp ứng nhu cầu thuê địa điểm tổ chức các khóa học, hội thảo, đào tạo của các đơn vị cũng như các diễn giả, với kinh nghiệm nhiều năm trong lĩnh vực cho thuê hội trường, chúng tôi tin rằng sẽ mang 
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
                                    <i class="iconSave" data-productid="27592584" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; hội trường, ph&amp;#242;ng họp từ 50 - 300 ghế ngồi quận Thanh Xu&amp;#226;n&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/29/20201029141725-47cb_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/29/20201029141725-47cb_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê hội trường, phòng họp từ 50 - 300 ghế ngồi quận Thanh Xuân" data-price="2 triệu/tháng" data-area="300 m²" data-pricesort="2000000" data-areasort="300" data-room="0" data-toilets="0" data-address="Thanh Xuân, Hà Nội" data-description="+ Đáp ứng nhu cầu thuê địa điểm tổ chức các khóa học, hội thảo, đào tạo của các đơn vị cũng như các diễn giả, với kinh nghiệm nhiều năm trong lĩnh vực cho thuê hội trường, chúng tôi tin rằng sẽ mang " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 09:52:57" data-contactname="Mr. Nam" data-contactmobile="0901703628" data-url="/cho-thue-loai-bat-dong-san-khac-pho-le-trong-tan-phuong-khuong-mai/ban-chung-cu-90m2-2pn-view-quang-truong-toa-r5-tang-8-gia-3-9-ty-lh-0842869966-pr27592584" data-totalmedia="6" data-createbyuser="1026524"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip5 product-item clearfix" uid="1371991">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-quan-7/mat-bang-cho-kdc-him-lam-q7-dt-10x20m-gia-19tr-th-lh-0901-296-116-thanh-huyen-pr27762667" title="Mặt bằng cho thuê KDC Him Lam Q7.DT: 10x20m. Giá : 19tr/th.LH; 0901.296.116 Thanh Huyền " onclick="">
                            <img class="product-avatar-img" alt="Mặt bằng cho thuê KDC Him Lam Q7.DT: 10x20m. Giá : 19tr/th.LH; 0901.296.116 Thanh Huyền " error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112093909-d230_wm.jpg" is-lazy-image="true" lazy-id="21">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">8</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-quan-7/mat-bang-cho-kdc-him-lam-q7-dt-10x20m-gia-19tr-th-lh-0901-296-116-thanh-huyen-pr27762667" title="Mặt bằng cho thuê KDC Him Lam Q7.DT: 10x20m. Giá : 19tr/th.LH; 0901.296.*** Thanh Huyền " class="vipFive product-link" style="overflow: visible;">
                                Mặt bằng cho thuê KDC Him Lam Q7.DT: 10x20m. Giá : 19tr/th.LH; <span class="hidden-mobile m-on-title" raw="0901.296.116">0901.296.***</span> Thanh Huyền 
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">19 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">200 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 7, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cho thuê mặt bằng khu dân cư Him Lam Quận.
     Diện tích : 10x20 vị trí góc, nội thất đầy đủ và có thể tháo theo ý khách, có sân vườn thoáng mát .Thích hợp làm văn phòng , showroom , phòng khám tư nhân 
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
                                    <i class="iconSave" data-productid="27762667" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Mặt bằng cho thu&amp;#234; KDC Him Lam Q7.DT: 10x20m. Gi&amp;#225; : 19tr/th.LH; 0901.296.116 Thanh Huyền &quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112093909-d230_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112093909-d230_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Mặt bằng cho thuê KDC Him Lam Q7.DT: 10x20m. Giá : 19tr/th.LH; 0901.296.116 Thanh Huyền " data-price="19 triệu/tháng" data-area="200 m²" data-pricesort="19000000" data-areasort="200" data-room="0" data-toilets="0" data-address="Quận 7, Hồ Chí Minh" data-description="Cho thuê mặt bằng khu dân cư Him Lam Quận.
     Diện tích : 10x20 vị trí góc, nội thất đầy đủ và có thể tháo theo ý khách, có sân vườn thoáng mát .Thích hợp làm văn phòng , showroom , phòng khám tư nhân " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 09:39:58" data-contactname="Phan Thi Thanh Huyen" data-contactmobile="0901296116" data-url="/cho-thue-loai-bat-dong-san-khac-quan-7/mat-bang-cho-kdc-him-lam-q7-dt-10x20m-gia-19tr-th-lh-0901-296-116-thanh-huyen-pr27762667" data-totalmedia="8" data-createbyuser="1371991"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="text-center">
                <div class="pagination">
    <a pid="1" class="actived" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac">1</a>
    <a pid="2" class="" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/p2">2</a>
    <a pid="3" class="" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/p3">3</a>
    <a pid="3" href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/p3"><img src="./assets/image/ic_double_caret_right.png"></a>
    </div>
    
            </div>
        </div>
    
    
    
    
    
    
        <div class="divide">&nbsp;</div>
    <div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="sang tiệm Spa" href="https://batdongsan.com.vn/tags/cho-thue/sang-tiem-spa">sang tiệm Spa</a></li>    <li><a title="nhượng cửa hàng ăn" href="https://batdongsan.com.vn/tags/cho-thue/nhuong-cua-hang-an">nhượng cửa hàng ăn</a></li>    <li><a title="sang tiệm tóc quận Tân Bình" href="https://batdongsan.com.vn/tags/cho-thue/sang-tiem-toc-quan-tan-binh">sang tiệm tóc quận Tân Bình</a></li>    <li><a title="thuê nhà chính chủ đống đa" href="https://batdongsan.com.vn/tags/cho-thue/thue-nha-chinh-chu-dong-da">thuê nhà chính chủ đống đa</a></li>    <li><a title="thuê nhà chính chủ ở quận đống đa" href="https://batdongsan.com.vn/tags/cho-thue/thue-nha-chinh-chu-o-quan-dong-da">thuê nhà chính chủ ở quận đống đa</a></li>    <li><a title="thuê nhà chính chủ quận đống đa" href="https://batdongsan.com.vn/tags/cho-thue/thue-nha-chinh-chu-quan-dong-da">thuê nhà chính chủ quận đống đa</a></li>    </ul></div><form id="productListBinnova" method="post">
        <input id="hashAlias" type="hidden" value="388d4a7d905de7c4f78a16361a5636d108b780f70d15ab2746b6072def0d1ff0">
    </form>
    <script type="text/javascript">
        (function callJQuery() {
            if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
                var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                    getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                    model: {
                        typeOfProduct: 49,
                        categoryId: 59,
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
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/-1/2/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam giá 1 - 3 triệu">1 - 3 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/-1/3/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam giá 3 - 5 triệu">3 - 5 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/-1/4/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam giá 5 - 10 triệu">5 - 10 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/-1/5/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam giá 10 - 40 triệu">10 - 40 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/-1/6/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam giá 40 - 70 triệu">40 - 70 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/-1/7/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam giá 70 - 100 triệu">70 - 100 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/-1/8/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam giá &gt; 100 triệu">&gt; 100 triệu</a></li>
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
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/1/-1/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/2/-1/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/3/-1/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/4/-1/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/5/-1/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/6/-1/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/7/-1/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/8/-1/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/9/-1/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac/10/-1/-1/-1" title="Cho thuê loại bất động sản khác Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
            <h2 class="box-title">Cho thuê loại bất động sản khác</h2>
    
            <div class="box-content link-hover-blue">
                <ul>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-ha-noi" title="Cho thuê loại bất động sản khác tại Hà Nội">
                                    Hà Nội (25)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-tp-hcm" title="Cho thuê loại bất động sản khác tại Hồ Chí Minh">
                                    Hồ Chí Minh (10)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-khanh-hoa" title="Cho thuê loại bất động sản khác tại Khánh Hòa">
                                    Khánh Hòa (4)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-dong-nai" title="Cho thuê loại bất động sản khác tại Đồng Nai">
                                    Đồng Nai (3)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-binh-duong" title="Cho thuê loại bất động sản khác tại Bình Dương">
                                    Bình Dương (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-bac-ninh" title="Cho thuê loại bất động sản khác tại Bắc Ninh">
                                    Bắc Ninh (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-binh-thuan" title="Cho thuê loại bất động sản khác tại Bình Thuận  ">
                                    Bình Thuận   (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-hoa-binh" title="Cho thuê loại bất động sản khác tại Hòa Bình">
                                    Hòa Bình (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-hai-duong" title="Cho thuê loại bất động sản khác tại Hải Dương">
                                    Hải Dương (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-loai-bat-dong-san-khac-hau-giang" title="Cho thuê loại bất động sản khác tại Hậu Giang">
                                    Hậu Giang (1)
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
            