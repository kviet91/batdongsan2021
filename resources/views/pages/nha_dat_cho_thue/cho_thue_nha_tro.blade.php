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
                    <div class="custom-value hasvalue">Nhà trọ, phòng trọ</div>
                </div>
                <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="57">
                <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                        <li vl="0"><span class="current">Tất cả nhà đất</span></li>
                                        <li vl="326"><span>Căn hộ chung cư</span></li>
                                        <li vl="52"><span>Nhà riêng</span></li>
                                        <li vl="51"><span>Nhà mặt phố</span></li>
                                        <li vl="57"><span class="active">Nhà trọ, phòng trọ</span></li>
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
                            <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                            <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                    categoryId: 57,
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
        <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro" level="1" title="Cho thuê nhà trọ, phòng trọ tại Việt Nam">Cho thuê</a><span>/</span><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro" level="2" title="Cho thuê nhà trọ, phòng trọ tại Việt Nam">Nhà trọ, phòng trọ trên toàn quốc</a>
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
            {"@context":"https://schema.org/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Trang chủ","item":"https://batdongsan.com.vn"},{"@type":"ListItem","position":2,"name":"Cho thuê","item":"https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro"},{"@type":"ListItem","position":3,"name":"Nhà trọ, phòng trọ trên toàn quốc","item":"https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro"}]}
        </script>
    
    <div class="product-list-header pad-top-8">
        <h1>Cho thuê nhà trọ, phòng trọ tại Việt Nam</h1>
            <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">1,628</span> bất động sản.</div>
        
    
    </div>
        <div class="product-search-most mar-top-8 mar-bot-8">
            <div class="box-title">Các khu vực, địa điểm nổi bật</div>
            <ul class="clearfix link-hover-blue">
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-quan-7">Cho thuê phòng trọ Quận 7</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-nha-trang-kh">Cho thuê phòng trọ Nha Trang</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-binh-thanh">Cho thuê phòng trọ Bình Thạnh</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-hoang-mai">Cho thuê phòng trọ Hoàng Mai</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-tan-binh">Cho thuê phòng trọ Tân Bình</a></li>
                    <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-quan-10">Cho thuê phòng trọ Quận 10</a></li>
            </ul>
        </div>
    
        <div class="product-nav-bar pad-top-8 clearfix">
            <ul class="ul-tab fl mar-right-16">
                <li class="list-display actived">Danh sách</li>
                <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
                <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-cho-thue-nha-tro-phong-tro">Bản đồ</a></li>
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
                <div class="vip1 product-item clearfix" uid="1292234">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-quang-trung-phuong-10-8/cho-chi-2tr1-den-2tr2-th-tai-go-vap-lh-0904255910-pr27638371" title="Cho thuê phòng chỉ 1tr7 đến 1tr8/th tại Quang Trung, Gò Vấp, LH 0904255910" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê phòng chỉ 1tr7 đến 1tr8/th tại Quang Trung, Gò Vấp, LH 0904255910" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201102174044-69b7_wm.jpg" is-lazy-image="true" lazy-id="0">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-quang-trung-phuong-10-8/cho-chi-2tr1-den-2tr2-th-tai-go-vap-lh-0904255910-pr27638371" title="Cho thuê phòng chỉ 1tr7 đến 1tr8/th tại Quang Trung, Gò Vấp, LH 0904255***" class="vipOne product-link" style="overflow: visible;">
                                CHO THUÊ PHÒNG CHỈ 1TR7 ĐẾN 1TR8/TH TẠI QUANG TRUNG, GÒ VẤP, LH <span class="hidden-mobile m-on-title" raw="0904255910">0904255***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">1.7 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">12 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Gò Vấp, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Nhà mới xây cho thuê phòng chỉ 1tr7 đến 1tr8/tháng Địa chỉ: 385/72/12 Quang Trung, P10, Gò Vấp, HCM. Có internet, sử dụng nước máy, khu vực an ninh, dân trí cao. Vị trí đẹp, thuận tiện, gần nhà thờ X
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
                                    <i class="iconSave" data-productid="27638371" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; ph&amp;#242;ng chỉ 1tr7 đến 1tr8/th tại Quang Trung, G&amp;#242; Vấp, LH 0904255910&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/LPaqNGzD/20201102174044-69b7_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/02/LPaqNGzD/20201102174044-69b7_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê phòng chỉ 1tr7 đến 1tr8/th tại Quang Trung, Gò Vấp, LH 0904255910" data-price="1.7 triệu/tháng" data-area="12 m²" data-pricesort="1700000" data-areasort="12" data-room="1" data-toilets="1" data-address="Gò Vấp, Hồ Chí Minh" data-description="Nhà mới xây cho thuê phòng chỉ 1tr7 đến 1tr8/tháng Địa chỉ: 385/72/12 Quang Trung, P10, Gò Vấp, HCM. Có internet, sử dụng nước máy, khu vực an ninh, dân trí cao. Vị trí đẹp, thuận tiện, gần nhà thờ X" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:10:26" data-contactname="Quynh" data-contactmobile="0904255910" data-url="/cho-thue-nha-tro-phong-tro-duong-quang-trung-phuong-10-8/cho-chi-2tr1-den-2tr2-th-tai-go-vap-lh-0904255910-pr27638371" data-totalmedia="6" data-createbyuser="1292234"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1452241">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-ly-chinh-thang-phuong-8-6/-chu-cho-can-ho-dich-vu-cuc-dep-gia-hop-day-du-tien-ich-noi-that-tai-quan-3-pr27761733" title="CHÍNH CHỦ CHO THUÊ CĂN HỘ DỊCH VỤ PHÒNG TRỌ CỰC ĐẸP GIÁ HỢP LÝ ĐẦY ĐỦ TIỆN ÍCH NỘI THẤT TẠI QUẬN 3" onclick="">
                            <img class="product-avatar-img" alt="CHÍNH CHỦ CHO THUÊ CĂN HỘ DỊCH VỤ PHÒNG TRỌ CỰC ĐẸP GIÁ HỢP LÝ ĐẦY ĐỦ TIỆN ÍCH NỘI THẤT TẠI QUẬN 3" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201112085749-b85d_wm.jpg" is-lazy-image="true" lazy-id="1">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">12</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-ly-chinh-thang-phuong-8-6/-chu-cho-can-ho-dich-vu-cuc-dep-gia-hop-day-du-tien-ich-noi-that-tai-quan-3-pr27761733" title="CHÍNH CHỦ CHO THUÊ CĂN HỘ DỊCH VỤ PHÒNG TRỌ CỰC ĐẸP GIÁ HỢP LÝ ĐẦY ĐỦ TIỆN ÍCH NỘI THẤT TẠI QUẬN 3" class="vipOne product-link">
                                CHÍNH CHỦ CHO THUÊ CĂN HỘ DỊCH VỤ PHÒNG TRỌ CỰC ĐẸP GIÁ HỢP LÝ ĐẦY ĐỦ TIỆN ÍCH NỘI THẤT TẠI QUẬN 3
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">7 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">35 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 3, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            CHÍNH CHỦ CHO THUÊ CHDV CAO CẤP - THOÁNG MÁT ĐẦY ĐỦ TIỆN ÍCH  - Khóa vân tay, giờ giấc tự do , an ninh tuyệt đối                                        - Vị trí : Trung tâm Q3 . Thuận tiện đi lại Các
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
                                    <i class="iconSave" data-productid="27761733" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;CH&amp;#205;NH CHỦ CHO THU&amp;#202; CĂN HỘ DỊCH VỤ PH&amp;#210;NG TRỌ CỰC ĐẸP GI&amp;#193; HỢP L&amp;#221; ĐẦY ĐỦ TIỆN &amp;#205;CH NỘI THẤT TẠI QUẬN 3&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/7D1aYL3B/20201112085749-b85d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/7D1aYL3B/20201112085749-b85d_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="CHÍNH CHỦ CHO THUÊ CĂN HỘ DỊCH VỤ PHÒNG TRỌ CỰC ĐẸP GIÁ HỢP LÝ ĐẦY ĐỦ TIỆN ÍCH NỘI THẤT TẠI QUẬN 3" data-price="7 triệu/tháng" data-area="35 m²" data-pricesort="7000000" data-areasort="35" data-room="0" data-toilets="0" data-address="Quận 3, Hồ Chí Minh" data-description="CHÍNH CHỦ CHO THUÊ CHDV CAO CẤP - THOÁNG MÁT ĐẦY ĐỦ TIỆN ÍCH  - Khóa vân tay, giờ giấc tự do , an ninh tuyệt đối                                        - Vị trí : Trung tâm Q3 . Thuận tiện đi lại Các" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 11:27:11" data-contactname="Hà Đình Hiếu" data-contactmobile="0902711335" data-url="/cho-thue-nha-tro-phong-tro-duong-ly-chinh-thang-phuong-8-6/-chu-cho-can-ho-dich-vu-cuc-dep-gia-hop-day-du-tien-ich-noi-that-tai-quan-3-pr27761733" data-totalmedia="12" data-createbyuser="1452241"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="517347">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-10-phuong-tan-thuan-dong-1/can-ho-giam-gia-mua-dich-full-noi-that-chi-4-5tr-th-kdc-nam-long-quan-7-kcx-thuan-pr27030959" title="Căn hộ giảm giá mùa dịch, full nội thất, chỉ 5tr/th, KDC Nam Long, quận 7, KCX Tân Thuận" onclick="">
                            <img class="product-avatar-img" alt="Căn hộ giảm giá mùa dịch, full nội thất, chỉ 5tr/th, KDC Nam Long, quận 7, KCX Tân Thuận" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/14/20200914152237-968a_wm.jpg" is-lazy-image="true" lazy-id="2">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">5</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-10-phuong-tan-thuan-dong-1/can-ho-giam-gia-mua-dich-full-noi-that-chi-4-5tr-th-kdc-nam-long-quan-7-kcx-thuan-pr27030959" title="Căn hộ giảm giá mùa dịch, full nội thất, chỉ 5tr/th, KDC Nam Long, quận 7, KCX Tân Thuận" class="vipOne product-link">
                                CĂN HỘ GIẢM GIÁ MÙA DỊCH, FULL NỘI THẤT, CHỈ 5TR/TH, KDC NAM LONG, QUẬN 7, KCX TÂN THUẬN
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">5 triệu/tháng</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 7, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Đầy đủ nội thất, dọn vào ở ngay, không cần trang bị thêm. Tự do giờ giấc 24/24, bạn bè đến chơi thoải mái, không chung chủ. Môi trường xung quanh là những hàng xóm trí thức, văn minh, lịch sự với mức
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
                                    <i class="iconSave" data-productid="27030959" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Căn hộ giảm gi&amp;#225; m&amp;#249;a dịch, full nội thất, chỉ 5tr/th, KDC Nam Long, quận 7, KCX T&amp;#226;n Thuận&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/14/20200914152237-968a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/14/20200914152237-968a_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Căn hộ giảm giá mùa dịch, full nội thất, chỉ 5tr/th, KDC Nam Long, quận 7, KCX Tân Thuận" data-price="5 triệu/tháng" data-area="Không xác định" data-pricesort="5000000" data-areasort="0" data-room="0" data-toilets="0" data-address="Quận 7, Hồ Chí Minh" data-description="Đầy đủ nội thất, dọn vào ở ngay, không cần trang bị thêm. Tự do giờ giấc 24/24, bạn bè đến chơi thoải mái, không chung chủ. Môi trường xung quanh là những hàng xóm trí thức, văn minh, lịch sự với mức" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 21:26:59" data-contactname="Trần Văn Tấn" data-contactmobile="0703040590" data-url="/cho-thue-nha-tro-phong-tro-duong-10-phuong-tan-thuan-dong-1/can-ho-giam-gia-mua-dich-full-noi-that-chi-4-5tr-th-kdc-nam-long-quan-7-kcx-thuan-pr27030959" data-totalmedia="5" data-createbyuser="517347"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="224931">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-tran-duy-hung-phuong-trung-hoa-4/can-ho-mini-khep-kin-du-do-tai-166-chinh-chu-cho-thue-pr27241591" title="Căn hộ mini khép kín đủ đồ tại 166 Trần Duy Hưng chính chủ cho thuê" onclick="">
                            <img class="product-avatar-img" alt="Căn hộ mini khép kín đủ đồ tại 166 Trần Duy Hưng chính chủ cho thuê" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/30/20200930231953-e4ae_wm.jpeg" is-lazy-image="true" lazy-id="3">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-tran-duy-hung-phuong-trung-hoa-4/can-ho-mini-khep-kin-du-do-tai-166-chinh-chu-cho-thue-pr27241591" title="Căn hộ mini khép kín đủ đồ tại 166 Trần Duy Hưng chính chủ cho thuê" class="vipOne product-link">
                                CĂN HỘ MINI KHÉP KÍN ĐỦ ĐỒ TẠI 166 TRẦN DUY HƯNG CHÍNH CHỦ CHO THUÊ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">3 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">20 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Cầu Giấy, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Chính chủ cho thuê phòng trọ 166 Trần Duy Hưng. Phòng nhà mình setup đồ bao gồm điều hòa, nóng lạnh, giường, tủ quần áo kệ, tủ lạnh, lò vi sóng. Có nhà để xe rộng rãi... Giờ giấc đi lại thoải mái, tự
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
                                    <i class="iconSave" data-productid="27241591" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Căn hộ mini kh&amp;#233;p k&amp;#237;n đủ đồ tại 166 Trần Duy Hưng ch&amp;#237;nh chủ cho thu&amp;#234;&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/30/20200930231953-e4ae_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/30/20200930231953-e4ae_wm.jpeg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Căn hộ mini khép kín đủ đồ tại 166 Trần Duy Hưng chính chủ cho thuê" data-price="3 triệu/tháng" data-area="20 m²" data-pricesort="3000000" data-areasort="20" data-room="0" data-toilets="0" data-address="Cầu Giấy, Hà Nội" data-description="Chính chủ cho thuê phòng trọ 166 Trần Duy Hưng. Phòng nhà mình setup đồ bao gồm điều hòa, nóng lạnh, giường, tủ quần áo kệ, tủ lạnh, lò vi sóng. Có nhà để xe rộng rãi... Giờ giấc đi lại thoải mái, tự" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 19:42:43" data-contactname="Dương Hoàng Phong" data-contactmobile="0902222629" data-url="/cho-thue-nha-tro-phong-tro-duong-tran-duy-hung-phuong-trung-hoa-4/can-ho-mini-khep-kin-du-do-tai-166-chinh-chu-cho-thue-pr27241591" data-totalmedia="4" data-createbyuser="224931"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="981057">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-phuong-11-3/cho-25m2-30m2-sach-dep-nhat-tai-quan-6-lh-0943852323-pr17964535" title="Cho thuê phòng 25m2-30m2 sạch, đẹp nhất tại Quận 6. LH: 0943852323" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê phòng 25m2-30m2 sạch, đẹp nhất tại Quận 6. LH: 0943852323" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2018/10/10/70g8ncfJ/20181010102108-5990.jpg" is-lazy-image="true" lazy-id="4">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-phuong-11-3/cho-25m2-30m2-sach-dep-nhat-tai-quan-6-lh-0943852323-pr17964535" title="Cho thuê phòng 25m2-30m2 sạch, đẹp nhất tại Quận 6. LH: 0943852***" class="vipOne product-link" style="overflow: visible;">
                                CHO THUÊ PHÒNG 25M2-30M2 SẠCH, ĐẸP NHẤT TẠI QUẬN 6. LH: <span class="hidden-mobile m-on-title" raw="0943852323">0943852***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">3.2 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">30 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 6, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cần cho thuê phòng tại Quận 6. - Phòng rộng, mới xây, nội thất cao cấp tiện nghi hơn khách sạn. DT 25m2-30m2, gồm PN riêng biệt, PK, bếp, toilet, ban công, wifi miễn phí, chỗ để xe miễn phí. Khu dân 
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
                                    <i class="iconSave" data-productid="17964535" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; ph&amp;#242;ng 25m2-30m2 sạch, đẹp nhất tại Quận 6. LH: 0943852323&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2018/10/10/70g8ncfJ/20181010102108-5990.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2018/10/10/70g8ncfJ/20181010102108-5990.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê phòng 25m2-30m2 sạch, đẹp nhất tại Quận 6. LH: 0943852323" data-price="3.2 triệu/tháng" data-area="30 m²" data-pricesort="3200000" data-areasort="30" data-room="0" data-toilets="0" data-address="Quận 6, Hồ Chí Minh" data-description="Cần cho thuê phòng tại Quận 6. - Phòng rộng, mới xây, nội thất cao cấp tiện nghi hơn khách sạn. DT 25m2-30m2, gồm PN riêng biệt, PK, bếp, toilet, ban công, wifi miễn phí, chỗ để xe miễn phí. Khu dân " data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 16:34:39" data-contactname="C.huệ" data-contactmobile="0943852323" data-url="/cho-thue-nha-tro-phong-tro-phuong-11-3/cho-25m2-30m2-sach-dep-nhat-tai-quan-6-lh-0943852323-pr17964535" data-totalmedia="3" data-createbyuser="981057"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="340348">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-nguyen-minh-hoang-phuong-12-10/chinh-chu-cho-tai-so-6-12-quan-tan-binh-lh-0977885445-pr24038715" title="Gấp! Cho thuê phòng trọ tại số 6, Nguyễn Minh Hoàng, Phường 12, Quận Tân Bình. LH: 0977885445" onclick="">
                            <img class="product-avatar-img" alt="Gấp! Cho thuê phòng trọ tại số 6, Nguyễn Minh Hoàng, Phường 12, Quận Tân Bình. LH: 0977885445" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="5">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-nguyen-minh-hoang-phuong-12-10/chinh-chu-cho-tai-so-6-12-quan-tan-binh-lh-0977885445-pr24038715" title="Gấp! Cho thuê phòng trọ tại số 6, Nguyễn Minh Hoàng, Phường 12, Quận Tân Bình. LH: 0977885***" class="vipOne product-link" style="overflow: visible;">
                                GẤP! CHO THUÊ PHÒNG TRỌ TẠI SỐ 6, NGUYỄN MINH HOÀNG, PHƯỜNG 12, QUẬN TÂN BÌNH. LH: <span class="hidden-mobile m-on-title" raw="0977885445">0977885***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">2.5 triệu/tháng</span>
                                                        <span class="dot">·</span>
                            <span class="location">Tân Bình, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cho thuê phòng trọ mới xây giờ tự do tại số 6 Nguyễn Minh Hoàng Phường 12 Quận Tân Bình. Trang bị sẵn các thiết bị: Kệ bếp, Wifi cáp quang cực nhanh, truyền hình cáp. Có gác, toilet, chỗ để xe rộng r
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
                                    <i class="iconSave" data-productid="24038715" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Gấp! Cho thu&amp;#234; ph&amp;#242;ng trọ tại số 6, Nguyễn Minh Ho&amp;#224;ng, Phường 12, Quận T&amp;#226;n B&amp;#236;nh. LH: 0977885445&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Gấp! Cho thuê phòng trọ tại số 6, Nguyễn Minh Hoàng, Phường 12, Quận Tân Bình. LH: 0977885445" data-price="2.5 triệu/tháng" data-area="Không xác định" data-pricesort="2500000" data-areasort="0" data-room="0" data-toilets="0" data-address="Tân Bình, Hồ Chí Minh" data-description="Cho thuê phòng trọ mới xây giờ tự do tại số 6 Nguyễn Minh Hoàng Phường 12 Quận Tân Bình. Trang bị sẵn các thiết bị: Kệ bếp, Wifi cáp quang cực nhanh, truyền hình cáp. Có gác, toilet, chỗ để xe rộng r" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 14:43:04" data-contactname="Anh Chung" data-contactmobile="0977885997" data-url="/cho-thue-nha-tro-phong-tro-duong-nguyen-minh-hoang-phuong-12-10/chinh-chu-cho-tai-so-6-12-quan-tan-binh-lh-0977885445-pr24038715" data-totalmedia="0" data-createbyuser="340348"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="363940">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-giai-phong-phuong-4-20/-ky-tuc-xa-quan-tan-binh-gia-1-35-trieu-thang-pr27742785" title="Phòng trọ ký túc xá đường Giải Phóng Q. Tân Bình, gần sân bay Tân Sơn Nhất. Giá 1.25 triệu/tháng" onclick="">
                            <img class="product-avatar-img" alt="Phòng trọ ký túc xá đường Giải Phóng Q. Tân Bình, gần sân bay Tân Sơn Nhất. Giá 1.25 triệu/tháng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110185915-08fb_wm.jpg" is-lazy-image="true" lazy-id="6">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">15</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-giai-phong-phuong-4-20/-ky-tuc-xa-quan-tan-binh-gia-1-35-trieu-thang-pr27742785" title="Phòng trọ ký túc xá đường Giải Phóng Q. Tân Bình, gần sân bay Tân Sơn Nhất. Giá 1.25 triệu/tháng" class="vipOne product-link">
                                PHÒNG TRỌ KÝ TÚC XÁ ĐƯỜNG GIẢI PHÓNG Q. TÂN BÌNH, GẦN SÂN BAY TÂN SƠN NHẤT. GIÁ 1.25 TRIỆU/THÁNG
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">1.25 triệu/tháng</span>
                                                        <span class="dot">·</span>
                            <span class="location">Tân Bình, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Phòng đã trang bị Full nội thất, máy lạnh, gần ngay sân bay Tân Sơn Nhất.- ĐC số 30 Giải Phóng, P. 4, Q. Tân Bình. - Free điện, nước, wifi, máy lạnh, máy giặt. - Liên hệ: <span class="hidden-mobile des" raw="0969 225679">0969 225***</span>.* Phòng đôi 40m2
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
                                    <i class="iconSave" data-productid="27742785" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ph&amp;#242;ng trọ k&amp;#253; t&amp;#250;c x&amp;#225; đường Giải Ph&amp;#243;ng Q. T&amp;#226;n B&amp;#236;nh, gần s&amp;#226;n bay T&amp;#226;n Sơn Nhất. Gi&amp;#225; 1.25 triệu/th&amp;#225;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110185915-08fb_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110185915-08fb_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Phòng trọ ký túc xá đường Giải Phóng Q. Tân Bình, gần sân bay Tân Sơn Nhất. Giá 1.25 triệu/tháng" data-price="1.25 triệu/tháng" data-area="Không xác định" data-pricesort="1250000" data-areasort="0" data-room="0" data-toilets="0" data-address="Tân Bình, Hồ Chí Minh" data-description="Phòng đã trang bị Full nội thất, máy lạnh, gần ngay sân bay Tân Sơn Nhất.- ĐC số 30 Giải Phóng, P. 4, Q. Tân Bình. - Free điện, nước, wifi, máy lạnh, máy giặt. - Liên hệ: 0969 225679.* Phòng đôi 40m2" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:02:14" data-contactname="Mr. Vien" data-contactmobile="0969225679" data-url="/cho-thue-nha-tro-phong-tro-duong-giai-phong-phuong-4-20/-ky-tuc-xa-quan-tan-binh-gia-1-35-trieu-thang-pr27742785" data-totalmedia="15" data-createbyuser="363940"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="363940">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-pham-huu-lau-phuong-phu-my-9/cho-40m2-full-noi-that-quan-7-gia-5-8-trieu-pr27506029" title="Cho thuê căn hộ mini đường Phạm Hữu Lầu - Quận 7. DT 40m2, full nội thất, giá 5.5 triệu/tháng" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê căn hộ mini đường Phạm Hữu Lầu - Quận 7. DT 40m2, full nội thất, giá 5.5 triệu/tháng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/22/20201022133628-0f7d_wm.jpg" is-lazy-image="true" lazy-id="7">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">10</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-pham-huu-lau-phuong-phu-my-9/cho-40m2-full-noi-that-quan-7-gia-5-8-trieu-pr27506029" title="Cho thuê căn hộ mini đường Phạm Hữu Lầu - Quận 7. DT 40m2, full nội thất, giá 5.5 triệu/tháng" class="vipOne product-link">
                                CHO THUÊ CĂN HỘ MINI ĐƯỜNG PHẠM HỮU LẦU - QUẬN 7. DT 40M2, FULL NỘI THẤT, GIÁ 5.5 TRIỆU/THÁNG
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">5.5 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">40 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 7, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Căn hộ gồm phòng bếp + phòng ăn, phòng ngủ, trang bị full nội thất, giường, tủ quần áo, 2 máy lạnh, bàn ăn, máy giặt, tủ lạnh, bếp..., nhà có thang máy. - Giá 5.5 triệu/tháng. - Liên hệ: <span class="hidden-mobile des" raw="0969 225679">0969 225***</span>.
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
                                    <i class="iconSave" data-productid="27506029" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; căn hộ mini đường Phạm Hữu Lầu - Quận 7. DT 40m2, full nội thất, gi&amp;#225; 5.5 triệu/th&amp;#225;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/22/20201022133628-0f7d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/22/20201022133628-0f7d_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê căn hộ mini đường Phạm Hữu Lầu - Quận 7. DT 40m2, full nội thất, giá 5.5 triệu/tháng" data-price="5.5 triệu/tháng" data-area="40 m²" data-pricesort="5500000" data-areasort="40" data-room="1" data-toilets="0" data-address="Quận 7, Hồ Chí Minh" data-description="Căn hộ gồm phòng bếp + phòng ăn, phòng ngủ, trang bị full nội thất, giường, tủ quần áo, 2 máy lạnh, bàn ăn, máy giặt, tủ lạnh, bếp..., nhà có thang máy. - Giá 5.5 triệu/tháng. - Liên hệ: 0969 225679." data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 17:40:48" data-contactname="Mr. Vien" data-contactmobile="0969225679" data-url="/cho-thue-nha-tro-phong-tro-duong-pham-huu-lau-phuong-phu-my-9/cho-40m2-full-noi-that-quan-7-gia-5-8-trieu-pr27506029" data-totalmedia="10" data-createbyuser="363940"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1337033">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-nguyen-huu-tho-phuong-tan-phong-9/sieu-giam-2tr-th-chi-con-1-2tr-th-moi-xay-moi-100-co-gac-co-may-lanh-0903-62-1992-pr27254926" title="Cho thuê phòng mới, full nội thất cao cấp, 40m2, ngay chợ, ngay ĐH TĐT. LH: 0903 62 1992 A Địa" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê phòng mới, full nội thất cao cấp, 40m2, ngay chợ, ngay ĐH TĐT. LH: 0903 62 1992 A Địa" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/04/20201104150245-189b_wm.jpg" is-lazy-image="true" lazy-id="8">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">5</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-nguyen-huu-tho-phuong-tan-phong-9/sieu-giam-2tr-th-chi-con-1-2tr-th-moi-xay-moi-100-co-gac-co-may-lanh-0903-62-1992-pr27254926" title="Cho thuê phòng mới, full nội thất cao cấp, 40m2, ngay chợ, ngay ĐH TĐT. LH: 0903 62 1*** A Địa" class="vipOne product-link" style="overflow: visible;">
                                CHO THUÊ PHÒNG MỚI, FULL NỘI THẤT CAO CẤP, 40M2, NGAY CHỢ, NGAY ĐH TĐT. LH: <span class="hidden-mobile m-on-title" raw="0903 62 1992">0903 62 1***</span> A ĐỊA
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">3.7 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">40 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 7, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cho thuê phòng trọ cao cấp full nội thất cao cấp, rộng 40m2, sát chợ, chỉ xách vali vào ở. Còn duy nhất 1 phòng.- Hệ thống phòng trọ Thiên Kim:- Vị trí: 19 Nguyễn Hữu Thọ, P. Tân Phong, Quận 7. - Tiệ
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
                                    <i class="iconSave" data-productid="27254926" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; ph&amp;#242;ng mới, full nội thất cao cấp, 40m2, ngay chợ, ngay ĐH TĐT. LH: 0903 62 1992 A Địa&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/04/20201104150245-189b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/04/20201104150245-189b_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê phòng mới, full nội thất cao cấp, 40m2, ngay chợ, ngay ĐH TĐT. LH: 0903 62 1992 A Địa" data-price="3.7 triệu/tháng" data-area="40 m²" data-pricesort="3700000" data-areasort="40" data-room="0" data-toilets="0" data-address="Quận 7, Hồ Chí Minh" data-description="Cho thuê phòng trọ cao cấp full nội thất cao cấp, rộng 40m2, sát chợ, chỉ xách vali vào ở. Còn duy nhất 1 phòng.- Hệ thống phòng trọ Thiên Kim:- Vị trí: 19 Nguyễn Hữu Thọ, P. Tân Phong, Quận 7. - Tiệ" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 09:53:40" data-contactname="Anh Thương" data-contactmobile="0903621992" data-url="/cho-thue-nha-tro-phong-tro-duong-nguyen-huu-tho-phuong-tan-phong-9/sieu-giam-2tr-th-chi-con-1-2tr-th-moi-xay-moi-100-co-gac-co-may-lanh-0903-62-1992-pr27254926" data-totalmedia="5" data-createbyuser="1337033"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="363940">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-giai-phong-phuong-4-20/cho-trung-tam-quan-tan-binh-gan-san-bay-tan-son-nhat-pr27013486" title="Cho thuê căn hộ mini đường Giải Phóng Q. Tân Bình, DT 40m2, full nội thất. Giá 5 triệu/tháng" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê căn hộ mini đường Giải Phóng Q. Tân Bình, DT 40m2, full nội thất. Giá 5 triệu/tháng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/08/20201008093123-70da_wm.jpg" is-lazy-image="true" lazy-id="9">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">15</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-giai-phong-phuong-4-20/cho-trung-tam-quan-tan-binh-gan-san-bay-tan-son-nhat-pr27013486" title="Cho thuê căn hộ mini đường Giải Phóng Q. Tân Bình, DT 40m2, full nội thất. Giá 5 triệu/tháng" class="vipOne product-link">
                                CHO THUÊ CĂN HỘ MINI ĐƯỜNG GIẢI PHÓNG Q. TÂN BÌNH, DT 40M2, FULL NỘI THẤT. GIÁ 5 TRIỆU/THÁNG
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">5 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">40 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Tân Bình, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Đã trang bị full nội thất, giường ngủ Gỗ Sồi Nga, tủ quần áo bằng gỗ, máy lạnh mới 100%, bàn ăn, máy giặt, tủ lạnh, bếp, bàn ăn...- Giá chỉ từ 5,0 triệu/tháng. - Địa chỉ: 30 Giải Phóng, P. 4, Q. Tân 
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
                                    <i class="iconSave" data-productid="27013486" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; căn hộ mini đường Giải Ph&amp;#243;ng Q. T&amp;#226;n B&amp;#236;nh, DT 40m2, full nội thất. Gi&amp;#225; 5 triệu/th&amp;#225;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/08/20201008093123-70da_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/08/20201008093123-70da_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê căn hộ mini đường Giải Phóng Q. Tân Bình, DT 40m2, full nội thất. Giá 5 triệu/tháng" data-price="5 triệu/tháng" data-area="40 m²" data-pricesort="5000000" data-areasort="40" data-room="1" data-toilets="0" data-address="Tân Bình, Hồ Chí Minh" data-description="Đã trang bị full nội thất, giường ngủ Gỗ Sồi Nga, tủ quần áo bằng gỗ, máy lạnh mới 100%, bàn ăn, máy giặt, tủ lạnh, bếp, bàn ăn...- Giá chỉ từ 5,0 triệu/tháng. - Địa chỉ: 30 Giải Phóng, P. 4, Q. Tân " data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 09:16:35" data-contactname="A. Vien" data-contactmobile="0969225679" data-url="/cho-thue-nha-tro-phong-tro-duong-giai-phong-phuong-4-20/cho-trung-tam-quan-tan-binh-gan-san-bay-tan-son-nhat-pr27013486" data-totalmedia="15" data-createbyuser="363940"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="490086">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-dong-dieu-phuong-4-15/cho-cao-cap-tai-quan-8-pr10505482" title="Cho thuê phòng trọ cao cấp tại Đồng Diều, Quận 8" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê phòng trọ cao cấp tại Đồng Diều, Quận 8" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2016/10/11/20161011154355-9f6c.jpg" is-lazy-image="true" lazy-id="10">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">9</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-dong-dieu-phuong-4-15/cho-cao-cap-tai-quan-8-pr10505482" title="Cho thuê phòng trọ cao cấp tại Đồng Diều, Quận 8" class="vipOne product-link">
                                CHO THUÊ PHÒNG TRỌ CAO CẤP TẠI ĐỒNG DIỀU, QUẬN 8
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">2 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">20 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 8, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cho CBCNV &amp; SV thuê phòng trọ. Nhà mới 100% chưa sử dụng. Nội thất cao cấp, tiện nghi đầy đủ, có tivi mới máy lạnh máy nước nóng năng lượng mặt trời, trên sân thượng phơi đồ có sẵn máy giặt phục vụ t
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
                                    <i class="iconSave" data-productid="10505482" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; ph&amp;#242;ng trọ cao cấp tại Đồng Diều, Quận 8&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2016/10/11/20161011154355-9f6c.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2016/10/11/20161011154355-9f6c.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê phòng trọ cao cấp tại Đồng Diều, Quận 8" data-price="2 triệu/tháng" data-area="20 m²" data-pricesort="2000000" data-areasort="20" data-room="0" data-toilets="0" data-address="Quận 8, Hồ Chí Minh" data-description="Cho CBCNV &amp; SV thuê phòng trọ. Nhà mới 100% chưa sử dụng. Nội thất cao cấp, tiện nghi đầy đủ, có tivi mới máy lạnh máy nước nóng năng lượng mặt trời, trên sân thượng phơi đồ có sẵn máy giặt phục vụ t" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 23:59:36" data-contactname="Trần Thị Kim Luân" data-contactmobile="0919753753" data-url="/cho-thue-nha-tro-phong-tro-duong-dong-dieu-phuong-4-15/cho-cao-cap-tai-quan-8-pr10505482" data-totalmedia="9" data-createbyuser="490086"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="461527">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-phan-anh-phuong-binh-tri-dong/cho-25m2-moi-xay-co-may-l-gio-tu-do-o-119-lh-0912027870-pr24228584" title="Cho thuê phòng trọ 25m2 mới xây có máy lạnh, giờ tự do ở 119 Phan Anh, Bình Trị Đông, LH 0912027870" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê phòng trọ 25m2 mới xây có máy lạnh, giờ tự do ở 119 Phan Anh, Bình Trị Đông, LH 0912027870" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="11">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-phan-anh-phuong-binh-tri-dong/cho-25m2-moi-xay-co-may-l-gio-tu-do-o-119-lh-0912027870-pr24228584" title="Cho thuê phòng trọ 25m2 mới xây có máy lạnh, giờ tự do ở 119 Phan Anh, Bình Trị Đông, LH 0912027***" class="vipOne product-link" style="overflow: visible;">
                                CHO THUÊ PHÒNG TRỌ 25M2 MỚI XÂY CÓ MÁY LẠNH, GIỜ TỰ DO Ở 119 PHAN ANH, BÌNH TRỊ ĐÔNG, LH <span class="hidden-mobile m-on-title" raw="0912027870">0912027***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">1.8 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">25 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bình Tân, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cho thuê phòng trọ 25m2 mới xây, có máy lạnh, giờ tự do tại 119 Phan Anh, P Bình Trị Đông, Q Tân Bình, TP HCM. Phòng có gác lửng, toilet, bếp trong phòng, cap, net miễn phí. Giá từ: 1,8tr - 2,5tr - 3
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
                                    <i class="iconSave" data-productid="24228584" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; ph&amp;#242;ng trọ 25m2 mới x&amp;#226;y c&amp;#243; m&amp;#225;y lạnh, giờ tự do ở 119 Phan Anh, B&amp;#236;nh Trị Đ&amp;#244;ng, LH 0912027870&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê phòng trọ 25m2 mới xây có máy lạnh, giờ tự do ở 119 Phan Anh, Bình Trị Đông, LH 0912027870" data-price="1.8 triệu/tháng" data-area="25 m²" data-pricesort="1800000" data-areasort="25" data-room="0" data-toilets="0" data-address="Bình Tân, Hồ Chí Minh" data-description="Cho thuê phòng trọ 25m2 mới xây, có máy lạnh, giờ tự do tại 119 Phan Anh, P Bình Trị Đông, Q Tân Bình, TP HCM. Phòng có gác lửng, toilet, bếp trong phòng, cap, net miễn phí. Giá từ: 1,8tr - 2,5tr - 3" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 18:04:50" data-contactname="Anh Minh" data-contactmobile="0912027870" data-url="/cho-thue-nha-tro-phong-tro-duong-phan-anh-phuong-binh-tri-dong/cho-25m2-moi-xay-co-may-l-gio-tu-do-o-119-lh-0912027870-pr24228584" data-totalmedia="0" data-createbyuser="461527"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="461527">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-duong-duc-hien-phuong-tay-thanh/cho-18m2-gio-tu-do-tai-38-tan-phu-lh-0912027870-pr15905975" title="Cho thuê phòng trọ 18m2 giờ tự do tại 38 Dương Đức Hiền, Tây Thạnh, Tân Phú. LH: 0914280675" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê phòng trọ 18m2 giờ tự do tại 38 Dương Đức Hiền, Tây Thạnh, Tân Phú. LH: 0914280675" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="12">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-duong-duc-hien-phuong-tay-thanh/cho-18m2-gio-tu-do-tai-38-tan-phu-lh-0912027870-pr15905975" title="Cho thuê phòng trọ 18m2 giờ tự do tại 38 Dương Đức Hiền, Tây Thạnh, Tân Phú. LH: 0914280***" class="vipOne product-link" style="overflow: visible;">
                                CHO THUÊ PHÒNG TRỌ 18M2 GIỜ TỰ DO TẠI 38 DƯƠNG ĐỨC HIỀN, TÂY THẠNH, TÂN PHÚ. LH: <span class="hidden-mobile m-on-title" raw="0914280675">0914280***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">1.8 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">18 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Tân Phú, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Cho thuê gấp phòng trọ 18m2, phòng mới, có gác lửng, có toilet trong phòng, giờ tự do tại 38 Dương Đức Hiền, Tây Thạnh, Tân Phú. Giá từ 1,8 tr - 2 tr/tháng. Liên hệ Anh Lĩnh: <span class="hidden-mobile des" raw="0914280675">0914280***</span>.
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
                                    <i class="iconSave" data-productid="15905975" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; ph&amp;#242;ng trọ 18m2 giờ tự do tại 38 Dương Đức Hiền, T&amp;#226;y Thạnh, T&amp;#226;n Ph&amp;#250;. LH: 0914280675&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê phòng trọ 18m2 giờ tự do tại 38 Dương Đức Hiền, Tây Thạnh, Tân Phú. LH: 0914280675" data-price="1.8 triệu/tháng" data-area="18 m²" data-pricesort="1800000" data-areasort="18" data-room="0" data-toilets="0" data-address="Tân Phú, Hồ Chí Minh" data-description="Cho thuê gấp phòng trọ 18m2, phòng mới, có gác lửng, có toilet trong phòng, giờ tự do tại 38 Dương Đức Hiền, Tây Thạnh, Tân Phú. Giá từ 1,8 tr - 2 tr/tháng. Liên hệ Anh Lĩnh: 0914280675." data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 18:04:47" data-contactname="Anh Lĩnh" data-contactmobile="0914280675" data-url="/cho-thue-nha-tro-phong-tro-duong-duong-duc-hien-phuong-tay-thanh/cho-18m2-gio-tu-do-tai-38-tan-phu-lh-0912027870-pr15905975" data-totalmedia="0" data-createbyuser="461527"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="461527">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-binh-tri-dong-phuong-binh-tri-dong/cho-moi-xay-25m2-gio-tu-do-tai-417-p-q-tan-pr24546877" title="Cho thuê phòng trọ mới xây 25m2, giờ tự do tại 417 Bình Trị Đông, P. Bình Trị Đông, Q. Bình Tân" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê phòng trọ mới xây 25m2, giờ tự do tại 417 Bình Trị Đông, P. Bình Trị Đông, Q. Bình Tân" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="13">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-binh-tri-dong-phuong-binh-tri-dong/cho-moi-xay-25m2-gio-tu-do-tai-417-p-q-tan-pr24546877" title="Cho thuê phòng trọ mới xây 25m2, giờ tự do tại 417 Bình Trị Đông, P. Bình Trị Đông, Q. Bình Tân" class="vipOne product-link">
                                CHO THUÊ PHÒNG TRỌ MỚI XÂY 25M2, GIỜ TỰ DO TẠI 417 BÌNH TRỊ ĐÔNG, P. BÌNH TRỊ ĐÔNG, Q. BÌNH TÂN
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">1.8 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">25 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bình Tân, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cho thuê phòng trọ mới 25m2 xây tại 417 Bình Trị Đông, P. Bình Trị Đông, Q. Bình Tân. Phòng có máy lạnh, giờ tự do, cáp, nét, rác miễn phí. Phòng có gác lửng, toilet, bếp trong phòng. Giá phòng: 1,8t
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
                                    <i class="iconSave" data-productid="24546877" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; ph&amp;#242;ng trọ mới x&amp;#226;y 25m2, giờ tự do tại 417 B&amp;#236;nh Trị Đ&amp;#244;ng, P. B&amp;#236;nh Trị Đ&amp;#244;ng, Q. B&amp;#236;nh T&amp;#226;n&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê phòng trọ mới xây 25m2, giờ tự do tại 417 Bình Trị Đông, P. Bình Trị Đông, Q. Bình Tân" data-price="1.8 triệu/tháng" data-area="25 m²" data-pricesort="1800000" data-areasort="25" data-room="0" data-toilets="0" data-address="Bình Tân, Hồ Chí Minh" data-description="Cho thuê phòng trọ mới 25m2 xây tại 417 Bình Trị Đông, P. Bình Trị Đông, Q. Bình Tân. Phòng có máy lạnh, giờ tự do, cáp, nét, rác miễn phí. Phòng có gác lửng, toilet, bếp trong phòng. Giá phòng: 1,8t" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 18:03:25" data-contactname="Anh Minh" data-contactmobile="0912027870" data-url="/cho-thue-nha-tro-phong-tro-duong-binh-tri-dong-phuong-binh-tri-dong/cho-moi-xay-25m2-gio-tu-do-tai-417-p-q-tan-pr24546877" data-totalmedia="0" data-createbyuser="461527"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="461527">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-cong-hoa-phuong-15-8/cho-28m2-gio-tu-do-tai-184-10-au-co-p9-q-tan-binh-gia-chi-tu-2-5tr-th-0914280675-pr25784809" title="Cho thuê phòng đẹp tại 479 Cộng Hòa, P15, Tân Bình, giá từ 1,8 tr/th, full nội thất. LH: 0912027870" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê phòng đẹp tại 479 Cộng Hòa, P15, Tân Bình, giá từ 1,8 tr/th, full nội thất. LH: 0912027870" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="14">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-cong-hoa-phuong-15-8/cho-28m2-gio-tu-do-tai-184-10-au-co-p9-q-tan-binh-gia-chi-tu-2-5tr-th-0914280675-pr25784809" title="Cho thuê phòng đẹp tại 479 Cộng Hòa, P15, Tân Bình, giá từ 1,8 tr/th, full nội thất. LH: 0912027***" class="vipOne product-link" style="overflow: visible;">
                                CHO THUÊ PHÒNG ĐẸP TẠI 479 CỘNG HÒA, P15, TÂN BÌNH, GIÁ TỪ 1,8 TR/TH, FULL NỘI THẤT. LH: <span class="hidden-mobile m-on-title" raw="0912027870">0912027***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">1.8 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">20 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Tân Bình, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cho thuê phòng đẹp 20m2 tại số 479 Cộng Hòa, gần ETown 2, phường 15, quận Tân Bình. Phòng có máy lạnh, đầy đủ tiện nghi, giường, tủ, tivi, bồn tắm nước nóng lạnh. Giá cho thuê từ 1,8tr - 2tr - 2tr5 -
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
                                    <i class="iconSave" data-productid="25784809" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; ph&amp;#242;ng đẹp tại 479 Cộng H&amp;#242;a, P15, T&amp;#226;n B&amp;#236;nh, gi&amp;#225; từ 1,8 tr/th, full nội thất. LH: 0912027870&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê phòng đẹp tại 479 Cộng Hòa, P15, Tân Bình, giá từ 1,8 tr/th, full nội thất. LH: 0912027870" data-price="1.8 triệu/tháng" data-area="20 m²" data-pricesort="1800000" data-areasort="20" data-room="0" data-toilets="0" data-address="Tân Bình, Hồ Chí Minh" data-description="Cho thuê phòng đẹp 20m2 tại số 479 Cộng Hòa, gần ETown 2, phường 15, quận Tân Bình. Phòng có máy lạnh, đầy đủ tiện nghi, giường, tủ, tivi, bồn tắm nước nóng lạnh. Giá cho thuê từ 1,8tr - 2tr - 2tr5 -" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 18:03:06" data-contactname="Anh Minh" data-contactmobile="0914280675" data-url="/cho-thue-nha-tro-phong-tro-duong-cong-hoa-phuong-15-8/cho-28m2-gio-tu-do-tai-184-10-au-co-p9-q-tan-binh-gia-chi-tu-2-5tr-th-0914280675-pr25784809" data-totalmedia="0" data-createbyuser="461527"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="461527">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-au-co-phuong-9-13/cho-18m2-gio-tu-do-gia-1-8-2tr-2-2tr-tai-220-18-p9-q-tan-binh-0984162348-pr15827695" title="Cho thuê phòng trọ 18m2 giờ tự do giá 1,8tr 2tr, 2,2tr/th tại 220/18 Âu Cơ, P9, Tân Bình 0912027870" onclick="">
                            <img class="product-avatar-img" alt="Cho thuê phòng trọ 18m2 giờ tự do giá 1,8tr 2tr, 2,2tr/th tại 220/18 Âu Cơ, P9, Tân Bình 0912027870" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="15">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-au-co-phuong-9-13/cho-18m2-gio-tu-do-gia-1-8-2tr-2-2tr-tai-220-18-p9-q-tan-binh-0984162348-pr15827695" title="Cho thuê phòng trọ 18m2 giờ tự do giá 1,8tr 2tr, 2,2tr/th tại 220/18 Âu Cơ, P9, Tân Bình 0912027***" class="vipOne product-link" style="overflow: visible;">
                                CHO THUÊ PHÒNG TRỌ 18M2 GIỜ TỰ DO GIÁ 1,8TR 2TR, 2,2TR/TH TẠI 220/18 ÂU CƠ, P9, TÂN BÌNH <span class="hidden-mobile m-on-title" raw="0912027870">0912027***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">1.8 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">18 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Tân Bình, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Cho thuê phòng trọ giờ tự do tại 220/18 Âu Cơ, P. 9, Q. Tân Bình, TP HCM. DT: 18m2, có toilet gác lửng trong phòng. Giá: 1,8tr/th - 2tr/th - 2,2tr/th. Liên hệ: <span class="hidden-mobile des" raw="0912027870">0912027***</span>.
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
                                    <i class="iconSave" data-productid="15827695" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; ph&amp;#242;ng trọ 18m2 giờ tự do gi&amp;#225; 1,8tr 2tr, 2,2tr/th tại 220/18 &amp;#194;u Cơ, P9, T&amp;#226;n B&amp;#236;nh 0912027870&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cho thuê phòng trọ 18m2 giờ tự do giá 1,8tr 2tr, 2,2tr/th tại 220/18 Âu Cơ, P9, Tân Bình 0912027870" data-price="1.8 triệu/tháng" data-area="18 m²" data-pricesort="1800000" data-areasort="18" data-room="0" data-toilets="0" data-address="Tân Bình, Hồ Chí Minh" data-description="Cho thuê phòng trọ giờ tự do tại 220/18 Âu Cơ, P. 9, Q. Tân Bình, TP HCM. DT: 18m2, có toilet gác lửng trong phòng. Giá: 1,8tr/th - 2tr/th - 2,2tr/th. Liên hệ: 0912027870." data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 18:02:34" data-contactname="Anh" data-contactmobile="0912027870" data-url="/cho-thue-nha-tro-phong-tro-duong-au-co-phuong-9-13/cho-18m2-gio-tu-do-gia-1-8-2tr-2-2tr-tai-220-18-p9-q-tan-binh-0984162348-pr15827695" data-totalmedia="0" data-createbyuser="461527"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="300999">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-nguyen-dinh-khoi-phuong-4-20/chinh-chu-cho-dep-tai-giao-hoang-van-thu-p4-tan-binh-30m2-gia-4-8tr-th-pr18979774" title="Chính chủ cho thuê phòng đẹp tại Hoàng Văn Thụ, P4, Tân Bình, Full nội thất, 30m2 4.5tr/tháng" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cho thuê phòng đẹp tại Hoàng Văn Thụ, P4, Tân Bình, Full nội thất, 30m2 4.5tr/tháng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2018/12/24/20181224083507-669f_wm.jpg" is-lazy-image="true" lazy-id="16">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-nguyen-dinh-khoi-phuong-4-20/chinh-chu-cho-dep-tai-giao-hoang-van-thu-p4-tan-binh-30m2-gia-4-8tr-th-pr18979774" title="Chính chủ cho thuê phòng đẹp tại Hoàng Văn Thụ, P4, Tân Bình, Full nội thất, 30m2 4.5tr/tháng" class="vipOne product-link">
                                CHÍNH CHỦ CHO THUÊ PHÒNG ĐẸP TẠI HOÀNG VĂN THỤ, P4, TÂN BÌNH, FULL NỘI THẤT, 30M2 4.5TR/THÁNG
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">4.5 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">30 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Tân Bình, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Chính chủ cho thuê phòng đẹp tại đường Hoàng Văn Thụ, phường 4, Tân Bình, full nội thất, 30m2, giá thuê 4.5tr/tháng.1. Thuận tiện đi các quận, sân bay và vào trung tâm Sài Gòn. 2. Phòng ở sạch sẽ, mớ
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
                                    <i class="iconSave" data-productid="18979774" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; ph&amp;#242;ng đẹp tại Ho&amp;#224;ng Văn Thụ, P4, T&amp;#226;n B&amp;#236;nh, Full nội thất, 30m2 4.5tr/th&amp;#225;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2018/12/24/20181224083507-669f_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2018/12/24/20181224083507-669f_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê phòng đẹp tại Hoàng Văn Thụ, P4, Tân Bình, Full nội thất, 30m2 4.5tr/tháng" data-price="4.5 triệu/tháng" data-area="30 m²" data-pricesort="4500000" data-areasort="30" data-room="0" data-toilets="0" data-address="Tân Bình, Hồ Chí Minh" data-description="Chính chủ cho thuê phòng đẹp tại đường Hoàng Văn Thụ, phường 4, Tân Bình, full nội thất, 30m2, giá thuê 4.5tr/tháng.1. Thuận tiện đi các quận, sân bay và vào trung tâm Sài Gòn. 2. Phòng ở sạch sẽ, mớ" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 11:06:22" data-contactname="Thông Tin Liên Lạc Trong Bài Viết" data-contactmobile="0968397110" data-url="/cho-thue-nha-tro-phong-tro-duong-nguyen-dinh-khoi-phuong-4-20/chinh-chu-cho-dep-tai-giao-hoang-van-thu-p4-tan-binh-30m2-gia-4-8tr-th-pr18979774" data-totalmedia="4" data-createbyuser="300999"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1085387">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-tan-vinh-phuong-6/chinh-chu-cho-homestay-moi-xay-ngay-trung-tam-q4-full-noi-that-lh-a-tam-0913611737-pr27472746" title="Chính chủ cho thuê phòng homestay mới xây ngay trung tâm Q4, full nội thất, Lh: A Tâm 0913611737" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cho thuê phòng homestay mới xây ngay trung tâm Q4, full nội thất, Lh: A Tâm 0913611737" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/mb7zP5aT/20201020080233-fa10_wm.jpg" is-lazy-image="true" lazy-id="17">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-tan-vinh-phuong-6/chinh-chu-cho-homestay-moi-xay-ngay-trung-tam-q4-full-noi-that-lh-a-tam-0913611737-pr27472746" title="Chính chủ cho thuê phòng homestay mới xây ngay trung tâm Q4, full nội thất, Lh: A Tâm 0913611***" class="vipOne product-link" style="overflow: visible;">
                                CHÍNH CHỦ CHO THUÊ PHÒNG HOMESTAY MỚI XÂY NGAY TRUNG TÂM Q4, FULL NỘI THẤT, LH: A TÂM <span class="hidden-mobile m-on-title" raw="0913611737">0913611***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">4.6 triệu/tháng</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 4, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Chính chủ cho thuê phòng homestay mới xây ngay trung tâm Q4, full nội thất, Lh: A Tâm (<span class="hidden-mobile des" raw="0913611737">0913611***</span>). - Vị trí: Quá ngon cơm, nằm ngay mặt tiền đường Tân Vĩnh, P6, Q4 (đường rộng lộ giới 12m), xách xe 
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
                                    <i class="iconSave" data-productid="27472746" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cho thu&amp;#234; ph&amp;#242;ng homestay mới x&amp;#226;y ngay trung t&amp;#226;m Q4, full nội thất, Lh: A T&amp;#226;m 0913611737&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/mb7zP5aT/20201020080233-fa10_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/20/mb7zP5aT/20201020080233-fa10_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cho thuê phòng homestay mới xây ngay trung tâm Q4, full nội thất, Lh: A Tâm 0913611737" data-price="4.6 triệu/tháng" data-area="Không xác định" data-pricesort="4600000" data-areasort="0" data-room="0" data-toilets="0" data-address="Quận 4, Hồ Chí Minh" data-description="Chính chủ cho thuê phòng homestay mới xây ngay trung tâm Q4, full nội thất, Lh: A Tâm (0913611737). - Vị trí: Quá ngon cơm, nằm ngay mặt tiền đường Tân Vĩnh, P6, Q4 (đường rộng lộ giới 12m), xách xe " data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 09:30:16" data-contactname="Anh Tâm" data-contactmobile="0913611737" data-url="/cho-thue-nha-tro-phong-tro-duong-tan-vinh-phuong-6/chinh-chu-cho-homestay-moi-xay-ngay-trung-tam-q4-full-noi-that-lh-a-tam-0913611737-pr27472746" data-totalmedia="6" data-createbyuser="1085387"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="362933">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-nguyen-luong-bang-1-phuong-phu-my-9-prj-the-era-town/-trong-can-ho-chung-cu-bao-dien-nuoc-3-2-3-6tr-thang-pr21433573" title="Phòng full nội thất trong căn hộ chung cư Era Town, giá chỉ từ 2.4tr - 3.7tr/tháng" onclick="">
                            <img class="product-avatar-img" alt="Phòng full nội thất trong căn hộ chung cư Era Town, giá chỉ từ 2.4tr - 3.7tr/tháng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/27/20200827095131-5b75_wm.jpg" is-lazy-image="true" lazy-id="18">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">12</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-nguyen-luong-bang-1-phuong-phu-my-9-prj-the-era-town/-trong-can-ho-chung-cu-bao-dien-nuoc-3-2-3-6tr-thang-pr21433573" title="Phòng full nội thất trong căn hộ chung cư Era Town, giá chỉ từ 2.4tr - 3.7tr/tháng" class="vipOne product-link">
                                PHÒNG FULL NỘI THẤT TRONG CĂN HỘ CHUNG CƯ ERA TOWN, GIÁ CHỈ TỪ 2.4TR - 3.7TR/THÁNG
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">4 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">35 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 7, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cho thuê 1 phòng trong căn hộ chung cư Kỷ Nguyên Era Town, Đại lộ Nguyễn Lương Bằng, Quận 7.Hiện tại mình còn 4 phòng giá từ 2.4 đến 3.7 triệu/tháng.Phòng 15m2 giá 2.4tr (có điều hòa).Phòng 25m2 giá 
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
                                    <i class="iconSave" data-productid="21433573" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ph&amp;#242;ng full nội thất trong căn hộ chung cư Era Town, gi&amp;#225; chỉ từ 2.4tr - 3.7tr/th&amp;#225;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/08/27/20200827095131-5b75_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/08/27/20200827095131-5b75_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Phòng full nội thất trong căn hộ chung cư Era Town, giá chỉ từ 2.4tr - 3.7tr/tháng" data-price="4 triệu/tháng" data-area="35 m²" data-pricesort="4000000" data-areasort="35" data-room="0" data-toilets="0" data-address="Quận 7, Hồ Chí Minh" data-description="Cho thuê 1 phòng trong căn hộ chung cư Kỷ Nguyên Era Town, Đại lộ Nguyễn Lương Bằng, Quận 7.Hiện tại mình còn 4 phòng giá từ 2.4 đến 3.7 triệu/tháng.Phòng 15m2 giá 2.4tr (có điều hòa).Phòng 25m2 giá " data-duration="5 ngày trước" data-updatedtime="08/11/2020" data-datesort="11/08/2020 16:25:10" data-contactname="An" data-contactmobile="0974532550" data-url="/cho-thue-nha-tro-phong-tro-duong-nguyen-luong-bang-1-phuong-phu-my-9-prj-the-era-town/-trong-can-ho-chung-cu-bao-dien-nuoc-3-2-3-6tr-thang-pr21433573" data-totalmedia="12" data-createbyuser="362933"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="224931">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-tran-dang-ninh-phuong-dich-vong/-khep-kin-dieu-hoa-nong-lanh-du-do-chinh-chu-cho-thue-pr27241683" title="Phòng trọ khép kín điều hoà nóng lạnh đủ đồ chính chủ cho thuê" onclick="">
                            <img class="product-avatar-img" alt="Phòng trọ khép kín điều hoà nóng lạnh đủ đồ chính chủ cho thuê" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/30/20200930234524-c9f3_wm.jpeg" is-lazy-image="true" lazy-id="19">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-duong-tran-dang-ninh-phuong-dich-vong/-khep-kin-dieu-hoa-nong-lanh-du-do-chinh-chu-cho-thue-pr27241683" title="Phòng trọ khép kín điều hoà nóng lạnh đủ đồ chính chủ cho thuê" class="vipOne product-link">
                                PHÒNG TRỌ KHÉP KÍN ĐIỀU HOÀ NÓNG LẠNH ĐỦ ĐỒ CHÍNH CHỦ CHO THUÊ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">2.5 triệu/tháng</span>
                                <span class="dot">·</span>
                                <span class="area">25 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Cầu Giấy, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            • Chính chủ cho thuê phòng trọ tại địa chỉ 269 Trần Đăng Ninh - Cầu Giấy - Hà Nội. Giá từ 2,5 - 3 triệu. • Vị trí đối diện Làng Quốc Tế, khu dân cư, văn phòng văn minh, lịch sự, an ninh trật tự tốt, 
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
                                    <i class="iconSave" data-productid="27241683" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ph&amp;#242;ng trọ kh&amp;#233;p k&amp;#237;n điều ho&amp;#224; n&amp;#243;ng lạnh đủ đồ ch&amp;#237;nh chủ cho thu&amp;#234;&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/30/20200930234524-c9f3_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/30/20200930234524-c9f3_wm.jpeg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Phòng trọ khép kín điều hoà nóng lạnh đủ đồ chính chủ cho thuê" data-price="2.5 triệu/tháng" data-area="25 m²" data-pricesort="2500000" data-areasort="25" data-room="0" data-toilets="0" data-address="Cầu Giấy, Hà Nội" data-description="• Chính chủ cho thuê phòng trọ tại địa chỉ 269 Trần Đăng Ninh - Cầu Giấy - Hà Nội. Giá từ 2,5 - 3 triệu. • Vị trí đối diện Làng Quốc Tế, khu dân cư, văn phòng văn minh, lịch sự, an ninh trật tự tốt, " data-duration="5 ngày trước" data-updatedtime="08/11/2020" data-datesort="11/08/2020 15:23:54" data-contactname="Dương Hoàng Phong" data-contactmobile="0902222629" data-url="/cho-thue-nha-tro-phong-tro-duong-tran-dang-ninh-phuong-dich-vong/-khep-kin-dieu-hoa-nong-lanh-du-do-chinh-chu-cho-thue-pr27241683" data-totalmedia="4" data-createbyuser="224931"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="text-center">
                <div class="pagination">
    <a pid="1" class="actived" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro">1</a>
    <a pid="2" class="" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/p2">2</a>
    <a pid="3" class="" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/p3">3</a>
    <a pid="4" class="" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/p4">4</a>
    <a pid="5" class="" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/p5">5</a>
    <a pid="82" href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/p82"><img src="./assets/image/ic_double_caret_right.png"></a>
    </div>
    
            </div>
        </div>
    
    
    
    
    
    
        <div class="divide">&nbsp;</div>
    <div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Cho thuê nhà trọ gần Kinh Tế Quốc Dân" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-nha-tro-gan-kinh-te-quoc-dan">Cho thuê nhà trọ gần Kinh Tế Quốc Dân</a></li>    <li><a title="Cho thuê phòng trọ gần Kinh Tế Quốc Dân" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-phong-tro-gan-kinh-te-quoc-dan">Cho thuê phòng trọ gần Kinh Tế Quốc Dân</a></li>    <li><a title="Cho thuê phòng trọ chính chủ quận Đống Đa" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-phong-tro-chinh-chu-quan-dong-da">Cho thuê phòng trọ chính chủ quận Đống Đa</a></li>    <li><a title="Cho thuê phòng trọ chính chủ" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-phong-tro-chinh-chu">Cho thuê phòng trọ chính chủ</a></li>    <li><a title="Cho thuê phòng trọ giá rẻ quận Gò Vấp" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-phong-tro-gia-re-quan-go-vap">Cho thuê phòng trọ giá rẻ quận Gò Vấp</a></li>    <li><a title="Cho thuê phòng trọ giá rẻ" href="https://batdongsan.com.vn/tags/cho-thue/cho-thue-phong-tro-gia-re">Cho thuê phòng trọ giá rẻ</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
        <div class="product-seo-text">
            <div><strong>Cho thuê phòng trọ, nhà trọ Việt Nam giá rẻ</strong></div>
                                    <div>Tìm <strong>thuê phòng trọ Việt Nam giá rẻ</strong> là nhu cầu phổ biến không chỉ của đối tượng sinh viên mà còn dành cho người lao động, những gia đình trẻ chưa có điều kiện để mua nhà ở. Phân khúc giá phổ biến mà sinh viên tìm kiếm là <strong>thuê phòng trọ Việt Nam giá 1 triệu</strong> hoặc 2-3 triệu cho nhóm từ 2-3 người ở. Còn với đội tượng người đi làm hoặc gia đình trẻ thì thường thuê nhà trọ, phòng trọ với mức giá từ 2-4 triệu với chất lượng nhà ở tốt hơn.</div>
                                    <div>Tình trạng phòng trọ Việt Nam giá rẻ xuống cấp hiện nay khá phổ biến, vì vậy, cách tốt nhất để bạn có thể dễ dàng tìm kiếm được những thông tin uy tín về <strong>cho thuê phòng trọ Việt Nam chính chủ</strong> và chất lượng là truy cập vào trang web batdongsan.com.vn. Batdongsan.com.vn sở hữu một số lượng lớn tin rao được cập nhật hàng ngày, chi tiết và đáng tin cậy từ chính chủ cũng như các môi giới chuyên nghiệp về thông tin cho thuê nhà trọ, phòng trọ phù hợp với đa dạng nhu cầu của người thuê.</div>
                                    <div>Ngoài ra, khi tìm <strong>thuê phòng trọ Việt Nam ở ghép</strong>, ở một mình hay cho gia đình thì bạn cần phải lưu ý những điều sau đây để có môi trường sống tốt nhất:</div>
                                    <ul>
                                    <li>- Tìm kiếm thông tin cho thuê phòng trọ, nhà trọ giá rẻ trên kênh thông tin uy tín như batdongsan.com.vn.</li>
                                    <li>- Đến trực tiếp để quan sát và đánh giá tình trạng cũng như chất lượng nhà ở, tránh vội vàng tin những hình ảnh quảng cáo hay lời giới thiệu từ người cho thuê/môi giới.</li>
                                    <li>- Xem xét môi trường sống xung quanh như tình hình an ninh, an toàn, tình trạng giao thông, ngập úng quanh khu vực.</li>
                                    <li>- Ký hợp đồng thuê nhà rõ ràng, gồm có các điều khoản về chi phí đặt cọc, chi phí thuê nhà và các chi phí phát sinh khác như điện, nước, vệ sinh, internet...</li>
                                    </ul>
        </div>
    <form id="productListBinnova" method="post">
        <input id="hashAlias" type="hidden" value="3630e05e95e4ceac0d092efe57af40d6c1b730bfc9fe29ea142fefc4060b80aa">
    </form>
    <script type="text/javascript">
        (function callJQuery() {
            if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
                var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                    getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                    model: {
                        typeOfProduct: 49,
                        categoryId: 57,
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
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/-1/2/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam giá 1 - 3 triệu">1 - 3 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/-1/3/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam giá 3 - 5 triệu">3 - 5 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/-1/4/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam giá 5 - 10 triệu">5 - 10 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/-1/5/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam giá 10 - 40 triệu">10 - 40 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/-1/6/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam giá 40 - 70 triệu">40 - 70 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/-1/7/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam giá 70 - 100 triệu">70 - 100 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/-1/8/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam giá &gt; 100 triệu">&gt; 100 triệu</a></li>
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
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/1/-1/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/2/-1/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/3/-1/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/4/-1/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/5/-1/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/6/-1/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/7/-1/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/8/-1/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/9/-1/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro/10/-1/-1/-1" title="Cho thuê nhà trọ, phòng trọ Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
            <h2 class="box-title">Cho thuê nhà trọ, phòng trọ</h2>
    
            <div class="box-content link-hover-blue">
                <ul>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-tp-hcm" title="Cho thuê nhà trọ, phòng trọ tại Hồ Chí Minh">
                                    Hồ Chí Minh (1061)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-ha-noi" title="Cho thuê nhà trọ, phòng trọ tại Hà Nội">
                                    Hà Nội (473)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-da-nang" title="Cho thuê nhà trọ, phòng trọ tại Đà Nẵng">
                                    Đà Nẵng (29)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-binh-duong" title="Cho thuê nhà trọ, phòng trọ tại Bình Dương">
                                    Bình Dương (12)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-khanh-hoa" title="Cho thuê nhà trọ, phòng trọ tại Khánh Hòa">
                                    Khánh Hòa (12)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-dong-nai" title="Cho thuê nhà trọ, phòng trọ tại Đồng Nai">
                                    Đồng Nai (11)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-ba-ria-vung-tau" title="Cho thuê nhà trọ, phòng trọ tại Bà Rịa Vũng Tàu">
                                    Bà Rịa Vũng Tàu (6)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-hai-phong" title="Cho thuê nhà trọ, phòng trọ tại Hải Phòng">
                                    Hải Phòng (5)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-kien-giang" title="Cho thuê nhà trọ, phòng trọ tại Kiên Giang">
                                    Kiên Giang (3)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-can-tho" title="Cho thuê nhà trọ, phòng trọ tại Cần Thơ">
                                    Cần Thơ (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-dak-lak" title="Cho thuê nhà trọ, phòng trọ tại Đắk Lắk">
                                    Đắk Lắk (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-long-an" title="Cho thuê nhà trọ, phòng trọ tại Long An">
                                    Long An (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-lam-dong" title="Cho thuê nhà trọ, phòng trọ tại Lâm Đồng">
                                    Lâm Đồng (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-phu-yen" title="Cho thuê nhà trọ, phòng trọ tại Phú Yên">
                                    Phú Yên (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-bac-ninh" title="Cho thuê nhà trọ, phòng trọ tại Bắc Ninh">
                                    Bắc Ninh (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-ca-mau" title="Cho thuê nhà trọ, phòng trọ tại Cà Mau">
                                    Cà Mau (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-dong-thap" title="Cho thuê nhà trọ, phòng trọ tại Đồng Tháp">
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
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-tan-binh" title="Thuê phọng trọ Tân Bình">
                                        Thuê phọng trọ Tân Bình
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-quan-7" title="Thuê phọng trọ Quận 7">
                                        Thuê phọng trọ Quận 7
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-phu-nhuan" title="Thuê phọng trọ Phú Nhuận">
                                        Thuê phọng trọ Phú Nhuận
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-tan-phu" title="Thuê phòng trọ Tân Phú">
                                        Thuê phòng trọ Tân Phú
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-go-vap" title="Thuê phòng trọ Gò Vấp">
                                        Thuê phòng trọ Gò Vấp
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-quan-1" title="Thuê phòng trọ Quận 1">
                                        Thuê phòng trọ Quận 1
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-quan-2" title="Thuê phòng trọ Quận 2">
                                        Thuê phòng trọ Quận 2
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-quan-3" title="Thuê phòng trọ Quận 3">
                                        Thuê phòng trọ Quận 3
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-quan-4" title="Thuê phòng trọ Quận 4">
                                        Thuê phòng trọ Quận 4
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-quan-5" title="Thuê phòng trọ Quận 5">
                                        Thuê phòng trọ Quận 5
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-binh-thanh" title="Thuê nhà trọ Bình Thạnh">
                                        Thuê nhà trọ Bình Thạnh
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-quan-10" title="Thuê phòng trọ Quận 10">
                                        Thuê phòng trọ Quận 10
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-binh-tan" title="Thuê phòng trọ Bình Tân">
                                        Thuê phòng trọ Bình Tân
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng" title="Cho thuê nhà nguyên căn">
                                        Cho thuê nhà nguyên căn
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu" title="Cho thuê căn hộ">
                                        Cho thuê căn hộ
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
            