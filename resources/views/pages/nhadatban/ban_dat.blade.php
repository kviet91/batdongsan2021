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
                    <div class="custom-value hasvalue">Bán đất</div>
                </div>
                <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="283">
                <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                        <li vl="0"><span class="current">Tất cả nhà đất</span></li>
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
                                                <li vl="283"><span class="active">Bán đất</span></li>
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
                            <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-dat#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-dat#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                            <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-dat#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-dat#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                    type: 38,
                                    categoryId: 283,
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
    
    
    
    <input type="hidden" value="1" id="activeTxtSelect">
    <div>
    </div>
    <div class="main-container clearfix">
        <div class="main-left">
            <!--Product List Binnova-->
            
    
    <!-- Header listing-->
    <div class="breadcrumb all-grey-7 link-hover-blue">
        <a href="https://batdongsan.com.vn/ban-dat" level="1" title="Bán đất tại Việt Nam">Bán</a><span>/</span><a href="https://batdongsan.com.vn/ban-dat" level="2" title="Bán đất tại Việt Nam">Bán đất trên toàn quốc</a>
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
    
    <div class="product-list-header pad-top-8">
        <h1>Bán đất tại Việt Nam</h1>
            <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">44,260</span> bất động sản.</div>
        
    
    </div>
        <div class="product-search-most mar-top-8 mar-bot-8">
            <div class="box-title">Các khu vực, địa điểm nổi bật</div>
            <ul class="clearfix link-hover-blue">
                    <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-cam-lam-kh">Đất nền Cam Lâm</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-binh-chanh">Bán đất Bình Chánh</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-binh-tan">Bán đất Bình Tân</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-cu-chi">Bán đất Củ Chi</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-nha-be">Bán đất Nhà Bè</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-tp-hcm">Bán đất TPHCM</a></li>
            </ul>
        </div>
    
        <div class="product-nav-bar pad-top-8 clearfix">
            <ul class="ul-tab fl mar-right-16">
                <li class="list-display actived">Danh sách</li>
                <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
                <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-ban-dat">Bản đồ</a></li>
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
                <div class="vip0 product-item clearfix" uid="334396">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-d400-phuong-tan-phu-12/-mat-tien-benh-vien-ung-buou-quan-9-doc-nhat-khong-co-lo-thu-hai-pr27772853" title="Đất mặt tiền Bệnh Viện Ung Bướu Quận 9, độc nhất không có lô thứ hai" onclick="">
                            <img class="product-avatar-img" alt="Đất mặt tiền Bệnh Viện Ung Bướu Quận 9, độc nhất không có lô thứ hai" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201112212924-d38c_wm.jpg" is-lazy-image="true" lazy-id="0">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">2</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-d400-phuong-tan-phu-12/-mat-tien-benh-vien-ung-buou-quan-9-doc-nhat-khong-co-lo-thu-hai-pr27772853" title="Đất mặt tiền Bệnh Viện Ung Bướu Quận 9, độc nhất không có lô thứ hai" class="vipZero product-link">
                                ĐẤT MẶT TIỀN BỆNH VIỆN UNG BƯỚU QUẬN 9, ĐỘC NHẤT KHÔNG CÓ LÔ THỨ HAI
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">31 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">240 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 9, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Chính chủ cần bán lô mặt tiền kinh doanh sát bệnh viện ung bướu. Thông tin chi tiết: Đất MT KD, liền kề bệnh viện ung bướu, gần BXMĐ mới tại Quận 9, khu đất vàng hiện nay tại Quận 9. Gần ga Metro, sâ
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
                                    <i class="iconSave" data-productid="27772853" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Đất mặt tiền Bệnh Viện Ung Bướu Quận 9, độc nhất kh&amp;#244;ng c&amp;#243; l&amp;#244; thứ hai&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112212924-d38c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112212924-d38c_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Đất mặt tiền Bệnh Viện Ung Bướu Quận 9, độc nhất không có lô thứ hai" data-price="31 tỷ" data-area="240 m²" data-pricesort="31000000000" data-areasort="240" data-room="5" data-toilets="2" data-address="Quận 9, Hồ Chí Minh" data-description="Chính chủ cần bán lô mặt tiền kinh doanh sát bệnh viện ung bướu. Thông tin chi tiết: Đất MT KD, liền kề bệnh viện ung bướu, gần BXMĐ mới tại Quận 9, khu đất vàng hiện nay tại Quận 9. Gần ga Metro, sâ" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:52:51" data-contactname="Nguyễn Minh An" data-contactmobile="0932628186" data-url="/ban-dat-duong-d400-phuong-tan-phu-12/-mat-tien-benh-vien-ung-buou-quan-9-doc-nhat-khong-co-lo-thu-hai-pr27772853" data-totalmedia="2" data-createbyuser="334396"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="660474">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-vanh-dai-4-phuong-my-phuoc/-goc-2-mat-tien-ngay-truong-hoc-quoc-te-viet-duc-va-doi-dien-la-tt-thuong-mai-pr24937301" title="Bán đất gần trường đại học Việt Đức, góc 3 mặt tiền đường đối diện trung tâm thương mại lớn" onclick="">
                            <img class="product-avatar-img" alt="Bán đất gần trường đại học Việt Đức, góc 3 mặt tiền đường đối diện trung tâm thương mại lớn" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201026091212-12f8.jpg" is-lazy-image="true" lazy-id="1">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">13</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-vanh-dai-4-phuong-my-phuoc/-goc-2-mat-tien-ngay-truong-hoc-quoc-te-viet-duc-va-doi-dien-la-tt-thuong-mai-pr24937301" title="Bán đất gần trường đại học Việt Đức, góc 3 mặt tiền đường đối diện trung tâm thương mại lớn" class="vipZero product-link">
                                BÁN ĐẤT GẦN TRƯỜNG ĐẠI HỌC VIỆT ĐỨC, GÓC 3 MẶT TIỀN ĐƯỜNG ĐỐI DIỆN TRUNG TÂM THƯƠNG MẠI LỚN
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">450 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bến Cát, Bình Dương</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Gọi tôi: <span class="hidden-mobile des" raw="098558 0878">098558 0***</span> (chính chủ). Cần tiền kinh doanh hàng tết Tôi đành bán đất gần trường đại học Việt Đức góc 2 mặt tiền tiện đối diện trung tâm thương mại đang xây dựng sắp hoàn thiện, Đối diện là
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
                                    <i class="iconSave" data-productid="24937301" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n đất gần trường đại học Việt Đức, g&amp;#243;c 3 mặt tiền đường đối diện trung t&amp;#226;m thương mại lớn&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/26/20201026091212-12f8.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/26/20201026091212-12f8.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất gần trường đại học Việt Đức, góc 3 mặt tiền đường đối diện trung tâm thương mại lớn" data-price="Giá thỏa thuận" data-area="450 m²" data-pricesort="0" data-areasort="450" data-room="0" data-toilets="0" data-address="Bến Cát, Bình Dương" data-description="Gọi tôi: 098558 0878 (chính chủ). Cần tiền kinh doanh hàng tết Tôi đành bán đất gần trường đại học Việt Đức góc 2 mặt tiền tiện đối diện trung tâm thương mại đang xây dựng sắp hoàn thiện, Đối diện là" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:42:13" data-contactname="Nguyễn" data-contactmobile="0985580878" data-url="/ban-dat-duong-vanh-dai-4-phuong-my-phuoc/-goc-2-mat-tien-ngay-truong-hoc-quoc-te-viet-duc-va-doi-dien-la-tt-thuong-mai-pr24937301" data-totalmedia="13" data-createbyuser="660474"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1057173">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-ben-cat-bd/can-von-lam-an-gia-dinh-ban-gap-300m2-tho-cu-gia-820tr-ngay-kdt-my-phuoc-1-shr-dan-cu-sam-uat-pr27774382" title="CẦN VỐN LÀM ĂN GIA ĐÌNH BÁN GẤP 300M2 ĐẤT THỔ CƯ GIÁ 820TR NGAY KĐT MỸ PHƯỚC 1 SHR, DÂN CƯ SẦM UẤT " onclick="">
                            <img class="product-avatar-img" alt="CẦN VỐN LÀM ĂN GIA ĐÌNH BÁN GẤP 300M2 ĐẤT THỔ CƯ GIÁ 820TR NGAY KĐT MỸ PHƯỚC 1 SHR, DÂN CƯ SẦM UẤT " error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113082956-129b_wm.jpg" is-lazy-image="true" lazy-id="2">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">9</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-ben-cat-bd/can-von-lam-an-gia-dinh-ban-gap-300m2-tho-cu-gia-820tr-ngay-kdt-my-phuoc-1-shr-dan-cu-sam-uat-pr27774382" title="CẦN VỐN LÀM ĂN GIA ĐÌNH BÁN GẤP 300M2 ĐẤT THỔ CƯ GIÁ 820TR NGAY KĐT MỸ PHƯỚC 1 SHR, DÂN CƯ SẦM UẤT " class="vipZero product-link">
                                CẦN VỐN LÀM ĂN GIA ĐÌNH BÁN GẤP 300M2 ĐẤT THỔ CƯ GIÁ 820TR NGAY KĐT MỸ PHƯỚC 1 SHR, DÂN CƯ SẦM UẤT 
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">520 triệu</span>
                                <span class="dot">·</span>
                                <span class="area">300 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bến Cát, Bình Dương</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            CẦN VỐN LÀM ĂN GIA ĐÌNH BÁN GẤP 300M2 ĐẤT THỔ CƯ GIÁ 820TR NGAY KĐT MỸ PHƯỚC 1 SHR, DÂN CƯ SẦM UẤT
     
     
     - Hàng Ngộp Cho AE đầu tư Hoặc Mua Để Ở
     
     - LH: <span class="hidden-mobile des" raw="0969.739.583">0969.739.***</span> Hoặc <span class="hidden-mobile des" raw="0795.494.127">0795.494.***</span> Gặp Anh Nam (để
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
                                    <i class="iconSave" data-productid="27774382" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;CẦN VỐN L&amp;#192;M ĂN GIA Đ&amp;#204;NH B&amp;#193;N GẤP 300M2 ĐẤT THỔ CƯ GI&amp;#193; 820TR NGAY KĐT MỸ PHƯỚC 1 SHR, D&amp;#194;N CƯ SẦM UẤT &quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113082956-129b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/13/20201113082956-129b_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="CẦN VỐN LÀM ĂN GIA ĐÌNH BÁN GẤP 300M2 ĐẤT THỔ CƯ GIÁ 820TR NGAY KĐT MỸ PHƯỚC 1 SHR, DÂN CƯ SẦM UẤT " data-price="520 triệu" data-area="300 m²" data-pricesort="520000000" data-areasort="300" data-room="0" data-toilets="0" data-address="Bến Cát, Bình Dương" data-description="CẦN VỐN LÀM ĂN GIA ĐÌNH BÁN GẤP 300M2 ĐẤT THỔ CƯ GIÁ 820TR NGAY KĐT MỸ PHƯỚC 1 SHR, DÂN CƯ SẦM UẤT
     
     
     - Hàng Ngộp Cho AE đầu tư Hoặc Mua Để Ở
     
     - LH: 0969.739.583 Hoặc 0795.494.127 Gặp Anh Nam (để" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 08:31:05" data-contactname="Pham Ngoc" data-contactmobile="0969739583" data-url="/ban-dat-ben-cat-bd/can-von-lam-an-gia-dinh-ban-gap-300m2-tho-cu-gia-820tr-ngay-kdt-my-phuoc-1-shr-dan-cu-sam-uat-pr27774382" data-totalmedia="9" data-createbyuser="1057173"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1179578">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-dt-769-xa-binh-son-4-prj-century-city/-so-do-cach-cach-cong-chinh-san-bay-long-thanh-2km-gia-chi-tu-15tr-m2-ho-tro-ngan-hang-den-70-pr27772109" title="ĐẤT SỔ ĐỎ CÁCH CÁCH CỔNG CHÍNH SÂN BAY LONG THÀNH 2KM, GIÁ CHỈ TỪ 15TR/M2, HỖ TRỢ NGÂN HÀNG ĐẾN 70%" onclick="">
                            <img class="product-avatar-img" alt="ĐẤT SỔ ĐỎ CÁCH CÁCH CỔNG CHÍNH SÂN BAY LONG THÀNH 2KM, GIÁ CHỈ TỪ 15TR/M2, HỖ TRỢ NGÂN HÀNG ĐẾN 70%" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112190304-136b_wm.jpg" is-lazy-image="true" lazy-id="3">
                        </a>
                        <span class="product-feature">
                                                                                <img src="./assets/image/ic_video.svg">
                        </span>
                            <span class="product-media">17</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-dt-769-xa-binh-son-4-prj-century-city/-so-do-cach-cach-cong-chinh-san-bay-long-thanh-2km-gia-chi-tu-15tr-m2-ho-tro-ngan-hang-den-70-pr27772109" title="ĐẤT SỔ ĐỎ CÁCH CÁCH CỔNG CHÍNH SÂN BAY LONG THÀNH 2KM, GIÁ CHỈ TỪ 15TR/M2, HỖ TRỢ NGÂN HÀNG ĐẾN 70%" class="vipZero product-link">
                                ĐẤT SỔ ĐỎ CÁCH CÁCH CỔNG CHÍNH SÂN BAY LONG THÀNH 2KM, GIÁ CHỈ TỪ 15TR/M2, HỖ TRỢ NGÂN HÀNG ĐẾN 70%
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">15 triệu/m²</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Long Thành, Đồng Nai</span>
                        </div>
                        <div class="product-content">
                            Vị trí đất: - Nằm ngay mặt tiền Tỉnh lộ 769. - Cách sân bay Quốc tế Long thành 2km. - Sát bên là khu tái định cư 284 Ha đền bù di dời người dân của Sân Bay Long Thành- Điểm mạnh lớn nhất là vị trí 49
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
                                    <i class="iconSave" data-productid="27772109" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;ĐẤT SỔ ĐỎ C&amp;#193;CH C&amp;#193;CH CỔNG CH&amp;#205;NH S&amp;#194;N BAY LONG TH&amp;#192;NH 2KM, GI&amp;#193; CHỈ TỪ 15TR/M2, HỖ TRỢ NG&amp;#194;N H&amp;#192;NG ĐẾN 70%&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112190304-136b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112190304-136b_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="true" data-title="ĐẤT SỔ ĐỎ CÁCH CÁCH CỔNG CHÍNH SÂN BAY LONG THÀNH 2KM, GIÁ CHỈ TỪ 15TR/M2, HỖ TRỢ NGÂN HÀNG ĐẾN 70%" data-price="15 triệu/m²" data-area="100 m²" data-pricesort="1500000000" data-areasort="100" data-room="0" data-toilets="0" data-address="Long Thành, Đồng Nai" data-description="Vị trí đất: - Nằm ngay mặt tiền Tỉnh lộ 769. - Cách sân bay Quốc tế Long thành 2km. - Sát bên là khu tái định cư 284 Ha đền bù di dời người dân của Sân Bay Long Thành- Điểm mạnh lớn nhất là vị trí 49" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 19:04:26" data-contactname="Nguyễn Triều Đăng" data-contactmobile="0937337375" data-url="/ban-dat-duong-dt-769-xa-binh-son-4-prj-century-city/-so-do-cach-cach-cong-chinh-san-bay-long-thanh-2km-gia-chi-tu-15tr-m2-ho-tro-ngan-hang-den-70-pr27772109" data-totalmedia="17" data-createbyuser="1179578"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="2328">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-duyen-hai-xa-long-hoa/-can-gio-can-ban-gap-ngay-vingroup-gia-12-ty-pr27771929" title="ĐẤT CẦN GIỜ CẦN BÁN GẤP ĐƯỜNG DUYÊN HẢI NGAY VINGROUP GIÁ 12 TỶ" onclick="">
                            <img class="product-avatar-img" alt="ĐẤT CẦN GIỜ CẦN BÁN GẤP ĐƯỜNG DUYÊN HẢI NGAY VINGROUP GIÁ 12 TỶ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112182114-be38_wm.jpg" is-lazy-image="true" lazy-id="4">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-duyen-hai-xa-long-hoa/-can-gio-can-ban-gap-ngay-vingroup-gia-12-ty-pr27771929" title="ĐẤT CẦN GIỜ CẦN BÁN GẤP ĐƯỜNG DUYÊN HẢI NGAY VINGROUP GIÁ 12 TỶ" class="vipZero product-link">
                                ĐẤT CẦN GIỜ CẦN BÁN GẤP ĐƯỜNG DUYÊN HẢI NGAY VINGROUP GIÁ 12 TỶ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">12 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">1050 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Cần Giờ, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Bán đất Cần Giờ đường Duyên Hải, đối diện dự án lấn biển Vingroup, cách biển hiện huũ 500m. Lô đất có kích thước 21x50, công nhận 1050m, có vị trí  nằm trên hẻm đường Duyên Hải, đường hiện hữu 6m, ot
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
                                    <i class="iconSave" data-productid="27771929" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;ĐẤT CẦN GIỜ CẦN B&amp;#193;N GẤP ĐƯỜNG DUY&amp;#202;N HẢI NGAY VINGROUP GI&amp;#193; 12 TỶ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112182114-be38_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112182114-be38_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="ĐẤT CẦN GIỜ CẦN BÁN GẤP ĐƯỜNG DUYÊN HẢI NGAY VINGROUP GIÁ 12 TỶ" data-price="12 tỷ" data-area="1050 m²" data-pricesort="12000000000" data-areasort="1050" data-room="0" data-toilets="0" data-address="Cần Giờ, Hồ Chí Minh" data-description="Bán đất Cần Giờ đường Duyên Hải, đối diện dự án lấn biển Vingroup, cách biển hiện huũ 500m. Lô đất có kích thước 21x50, công nhận 1050m, có vị trí  nằm trên hẻm đường Duyên Hải, đường hiện hữu 6m, ot" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 18:22:25" data-contactname="Nguen Van Dung" data-contactmobile="0937196006" data-url="/ban-dat-duong-duyen-hai-xa-long-hoa/-can-gio-can-ban-gap-ngay-vingroup-gia-12-ty-pr27771929" data-totalmedia="4" data-createbyuser="2328"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1508287">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-xa-thanh-duc/-ben-luc-tho-cu-100-341m2-co-nha-mat-tien-duong-10-met-lien-he-0765-000-488-c-trang-pr27757284" title="Đất Bến Lức, thổ cư 100%, 341m2 có nhà mặt tiền đường 10 mét, liên hệ 0765.000.488 (C.Trang)" onclick="">
                            <img class="product-avatar-img" alt="Đất Bến Lức, thổ cư 100%, 341m2 có nhà mặt tiền đường 10 mét, liên hệ 0765.000.488 (C.Trang)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111173651-133c_wm.jpg" is-lazy-image="true" lazy-id="5">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-xa-thanh-duc/-ben-luc-tho-cu-100-341m2-co-nha-mat-tien-duong-10-met-lien-he-0765-000-488-c-trang-pr27757284" title="Đất Bến Lức, thổ cư 100%, 341m2 có nhà mặt tiền đường 10 mét, liên hệ 0765.000.*** (C.Trang)" class="vipZero product-link" style="overflow: visible;">
                                ĐẤT BẾN LỨC, THỔ CƯ 100%, 341M2 CÓ NHÀ MẶT TIỀN ĐƯỜNG 10 MÉT, LIÊN HỆ <span class="hidden-mobile m-on-title" raw="0765.000.488">0765.000.***</span> (C.TRANG)
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">5.5 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">341 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bến Lức, Long An</span>
                        </div>
                        <div class="product-content">
                            Cần bán thửa 281 và 282 như trong hình. Hỗ trợ thương lượng để mua thêm nếu có nhu cầu.Ngã tư Bình nhựt QL1 đi vào 70 mét.Đường nhựa 10 mét, khu dân cư hiện hữu, có sẵn nhà cấp 4.Đất dài và rộng, phù
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
                                    <i class="iconSave" data-productid="27757284" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Đất Bến Lức, thổ cư 100%, 341m2 c&amp;#243; nh&amp;#224; mặt tiền đường 10 m&amp;#233;t, li&amp;#234;n hệ 0765.000.488 (C.Trang)&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111173651-133c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111173651-133c_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Đất Bến Lức, thổ cư 100%, 341m2 có nhà mặt tiền đường 10 mét, liên hệ 0765.000.488 (C.Trang)" data-price="5.5 tỷ" data-area="341 m²" data-pricesort="5500000000" data-areasort="341" data-room="0" data-toilets="0" data-address="Bến Lức, Long An" data-description="Cần bán thửa 281 và 282 như trong hình. Hỗ trợ thương lượng để mua thêm nếu có nhu cầu.Ngã tư Bình nhựt QL1 đi vào 70 mét.Đường nhựa 10 mét, khu dân cư hiện hữu, có sẵn nhà cấp 4.Đất dài và rộng, phù" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:28:39" data-contactname="Trang" data-contactmobile="0765000488" data-url="/ban-dat-xa-thanh-duc/-ben-luc-tho-cu-100-341m2-co-nha-mat-tien-duong-10-met-lien-he-0765-000-488-c-trang-pr27757284" data-totalmedia="4" data-createbyuser="1508287"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1073361">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-dt-716-xa-hoa-thang-1/can-ban-gap-4ha-trang-trai-ven-bien-binh-thuan-2-mat-tien-ngay-canh-trang-trai-dua-luoi-pr27763955" title="Cần bán gấp gần 4ha đất trang trại ven biển Bình Thuận, 2 mặt tiền, ngay cạnh trang trại dưa lưới" onclick="">
                            <img class="product-avatar-img" alt="Cần bán gấp gần 4ha đất trang trại ven biển Bình Thuận, 2 mặt tiền, ngay cạnh trang trại dưa lưới" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112102116-ecc4_wm.jpg" is-lazy-image="true" lazy-id="6">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">7</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-dt-716-xa-hoa-thang-1/can-ban-gap-4ha-trang-trai-ven-bien-binh-thuan-2-mat-tien-ngay-canh-trang-trai-dua-luoi-pr27763955" title="Cần bán gấp gần 4ha đất trang trại ven biển Bình Thuận, 2 mặt tiền, ngay cạnh trang trại dưa lưới" class="vipZero product-link">
                                CẦN BÁN GẤP GẦN 4HA ĐẤT TRANG TRẠI VEN BIỂN BÌNH THUẬN, 2 MẶT TIỀN, NGAY CẠNH TRANG TRẠI DƯA LƯỚI
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">4.668 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">37345 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bắc Bình, Bình Thuận  </span>
                        </div>
                        <div class="product-content">
                            Hàng hot cho khách làm trang trại dưa lưới.Lô đất mặt tiền đường 8m.Sở hữu 2 mặt tiền, 1 mặt đường, 1 mặt kênh, điện nước đầy đủ. Có sẵn điện nước, ngay khu làm trang trại dưa lưới Văn Minh.Diện tích
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
                                    <i class="iconSave" data-productid="27763955" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần b&amp;#225;n gấp gần 4ha đất trang trại ven biển B&amp;#236;nh Thuận, 2 mặt tiền, ngay cạnh trang trại dưa lưới&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112102116-ecc4_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112102116-ecc4_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần bán gấp gần 4ha đất trang trại ven biển Bình Thuận, 2 mặt tiền, ngay cạnh trang trại dưa lưới" data-price="4.668 tỷ" data-area="37345 m²" data-pricesort="4668000000" data-areasort="37345" data-room="0" data-toilets="0" data-address="Bắc Bình, Bình Thuận  " data-description="Hàng hot cho khách làm trang trại dưa lưới.Lô đất mặt tiền đường 8m.Sở hữu 2 mặt tiền, 1 mặt đường, 1 mặt kênh, điện nước đầy đủ. Có sẵn điện nước, ngay khu làm trang trại dưa lưới Văn Minh.Diện tích" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:22:32" data-contactname="Kim Quê Phạm Thị" data-contactmobile="0909364150" data-url="/ban-dat-duong-dt-716-xa-hoa-thang-1/can-ban-gap-4ha-trang-trai-ven-bien-binh-thuan-2-mat-tien-ngay-canh-trang-trai-dua-luoi-pr27763955" data-totalmedia="7" data-createbyuser="1073361"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1423800">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-xa-hong-thai-4/-garden-xu-huong-nghi-duong-diem-sang-dau-tu-cuoi-nam-2020-pr27377698" title="Hồng Thái Garden, xu hướng nghỉ dưỡng - điểm sáng đầu tư cuối năm 2020" onclick="">
                            <img class="product-avatar-img" alt="Hồng Thái Garden, xu hướng nghỉ dưỡng - điểm sáng đầu tư cuối năm 2020" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/12/20201012101640-e9ef_wm.jpg" is-lazy-image="true" lazy-id="7">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">8</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-xa-hong-thai-4/-garden-xu-huong-nghi-duong-diem-sang-dau-tu-cuoi-nam-2020-pr27377698" title="Hồng Thái Garden, xu hướng nghỉ dưỡng - điểm sáng đầu tư cuối năm 2020" class="vipZero product-link">
                                HỒNG THÁI GARDEN, XU HƯỚNG NGHỈ DƯỠNG - ĐIỂM SÁNG ĐẦU TƯ CUỐI NĂM 2020
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">300 triệu</span>
                                <span class="dot">·</span>
                                <span class="area">5000 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bắc Bình, Bình Thuận  </span>
                        </div>
                        <div class="product-content">
                            Hồng Thái Garden - cơ hội sở hữu sổ đỏ cầm tay chỉ 60.000đ/m2. Pháp lý rõ ràng - sang tên chính chủ. Hồng Thái Garden sở hữu safari Rạng Đông 3300ha, NovaWorld Hoà Thắng 1000ha, Nông thị Dubai Việt N
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
                                    <i class="iconSave" data-productid="27377698" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Hồng Th&amp;#225;i Garden, xu hướng nghỉ dưỡng - điểm s&amp;#225;ng đầu tư cuối năm 2020&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/12/20201012101640-e9ef_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/12/20201012101640-e9ef_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Hồng Thái Garden, xu hướng nghỉ dưỡng - điểm sáng đầu tư cuối năm 2020" data-price="300 triệu" data-area="5000 m²" data-pricesort="300000000" data-areasort="5000" data-room="0" data-toilets="0" data-address="Bắc Bình, Bình Thuận  " data-description="Hồng Thái Garden - cơ hội sở hữu sổ đỏ cầm tay chỉ 60.000đ/m2. Pháp lý rõ ràng - sang tên chính chủ. Hồng Thái Garden sở hữu safari Rạng Đông 3300ha, NovaWorld Hoà Thắng 1000ha, Nông thị Dubai Việt N" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:15:01" data-contactname="Hồng Thái" data-contactmobile="0566666688" data-url="/ban-dat-xa-hong-thai-4/-garden-xu-huong-nghi-duong-diem-sang-dau-tu-cuoi-nam-2020-pr27377698" data-totalmedia="8" data-createbyuser="1423800"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1490428">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-an-phu-35-phuong-an-phu-2/chi-590tr-so-huu-ngay-lo-mat-tien-32m-thuan-an-pr27761553" title="Chỉ 590 triệu sở hữu ngay lô đất mặt tiền 32m Thuận An" onclick="">
                            <img class="product-avatar-img" alt="Chỉ 590 triệu sở hữu ngay lô đất mặt tiền 32m Thuận An" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112090234-0986_wm.jpeg" is-lazy-image="true" lazy-id="8">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-an-phu-35-phuong-an-phu-2/chi-590tr-so-huu-ngay-lo-mat-tien-32m-thuan-an-pr27761553" title="Chỉ 590 triệu sở hữu ngay lô đất mặt tiền 32m Thuận An" class="vipZero product-link">
                                CHỈ 590 TRIỆU SỞ HỮU NGAY LÔ ĐẤT MẶT TIỀN 32M THUẬN AN
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">1.5 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">65 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Thuận An, Bình Dương</span>
                        </div>
                        <div class="product-content">
                            Chỉ với 590 triệu sở hữu ngay lô đất ngay tại mặt tiền An Phú 35, phường An Phú, TP Thuận An, Bình Dương. Tiện ích. + Liền kề chợ Thành Nam, chợ Phú Phong, chợ Bình Thuận, UBND P. An Phú, khu đô thị 
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
                                    <i class="iconSave" data-productid="27761553" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chỉ 590 triệu sở hữu ngay l&amp;#244; đất mặt tiền 32m Thuận An&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112090234-0986_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112090234-0986_wm.jpeg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chỉ 590 triệu sở hữu ngay lô đất mặt tiền 32m Thuận An" data-price="1.5 tỷ" data-area="65 m²" data-pricesort="1500000000" data-areasort="65" data-room="0" data-toilets="0" data-address="Thuận An, Bình Dương" data-description="Chỉ với 590 triệu sở hữu ngay lô đất ngay tại mặt tiền An Phú 35, phường An Phú, TP Thuận An, Bình Dương. Tiện ích. + Liền kề chợ Thành Nam, chợ Phú Phong, chợ Bình Thuận, UBND P. An Phú, khu đô thị " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 09:07:42" data-contactname="Lan Anh" data-contactmobile="0389989296" data-url="/ban-dat-duong-an-phu-35-phuong-an-phu-2/chi-590tr-so-huu-ngay-lo-mat-tien-32m-thuan-an-pr27761553" data-totalmedia="3" data-createbyuser="1490428"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 vipaddon product-item clearfix" uid="1049932">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-so-8-phuong-binh-hung-hoa-b/chinh-chu-an-nhanh-lo-8-p-hh-q-tan-pr27754666" title="Chính chủ bán nhanh lô đất đường Số 8, p. Bình Hưng Hòa B, q. Bình Tân" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ bán nhanh lô đất đường Số 8, p. Bình Hưng Hòa B, q. Bình Tân" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111152100-dc67_wm.jpg" is-lazy-image="true" lazy-id="9"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111152100-eaf1_wm.jpg" is-lazy-image="true" lazy-id="10"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111152100-d3ca_wm.jpg" is-lazy-image="true" lazy-id="11">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">7</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-so-8-phuong-binh-hung-hoa-b/chinh-chu-an-nhanh-lo-8-p-hh-q-tan-pr27754666" title="Chính chủ bán nhanh lô đất đường Số 8, p. Bình Hưng Hòa B, q. Bình Tân" class="vipZero product-link">
                                CHÍNH CHỦ BÁN NHANH LÔ ĐẤT ĐƯỜNG SỐ 8, P. BÌNH HƯNG HÒA B, Q. BÌNH TÂN
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">3.55 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">72 m²</span>
                                                    <span class="location">Bình Tân, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Chính chủ bán nhanh lô đất đường Số 8, p. Bình Hưng Hòa B, q. Bình Tân. Diện tích: 4m x 18m. Hiện trạng: Đất trống, tiện xây mới. Vị trí: Hẻm nhựa 6m, gần bệnh viện, xung quanh là các quán xá đông đúc: Cafe, quán ăn, siêu thị, Xe cộ qua lại tấp nập. Khu buôn bán đông đúc. Nhiều chuỗi hệ thống cửa hàng như Bách Hoá Xanh, vinmart. Giá: 3.550 tỷ, bớt lộc cho khách thiện chí. LH: 0
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">11/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Công Ty Tnhh Đầu Tư - Bđs- Đầu Tư Thành Công Group">
                                    <span class="contact-name">... Tư Thành Công Group</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0944371368" raw="0944371368">0944 371 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27754666" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n nhanh l&amp;#244; đất đường Số 8, p. B&amp;#236;nh Hưng H&amp;#242;a B, q. B&amp;#236;nh T&amp;#226;n&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111152100-dc67_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111152100-eaf1_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111152100-d3ca_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/11/20201111152100-dc67_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ bán nhanh lô đất đường Số 8, p. Bình Hưng Hòa B, q. Bình Tân" data-price="3.55 tỷ" data-area="72 m²" data-pricesort="3550000000" data-areasort="72" data-room="0" data-toilets="0" data-address="Bình Tân, Hồ Chí Minh" data-description="Chính chủ bán nhanh lô đất đường Số 8, p. Bình Hưng Hòa B, q. Bình Tân. Diện tích: 4m x 18m. Hiện trạng: Đất trống, tiện xây mới. Vị trí: Hẻm nhựa 6m, gần bệnh viện, xung quanh là các quán xá đông đúc: Cafe, quán ăn, siêu thị, Xe cộ qua lại tấp nập. Khu buôn bán đông đúc. Nhiều chuỗi hệ thống cửa hàng như Bách Hoá Xanh, vinmart. Giá: 3.550 tỷ, bớt lộc cho khách thiện chí. LH: 0" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 15:26:40" data-contactname="Công Ty Tnhh Đầu Tư - Bđs- Đầu Tư Thành Công Group" data-contactmobile="0944371368" data-url="/ban-dat-duong-so-8-phuong-binh-hung-hoa-b/chinh-chu-an-nhanh-lo-8-p-hh-q-tan-pr27754666" data-totalmedia="7" data-createbyuser="1049932"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="189542">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-so-8-phuong-truong-thanh/can-von-ban-nhanh-gia-chi-26tr-m-8-lo-lu-q9-pr27752519" title="Cần vốn bán nhanh giá chỉ 26tr/m2, đường Số 8, Lò Lu, Trường Thạnh, Q9" onclick="">
                            <img class="product-avatar-img" alt="Cần vốn bán nhanh giá chỉ 26tr/m2, đường Số 8, Lò Lu, Trường Thạnh, Q9" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111135953-e26e_wm.jpg" is-lazy-image="true" lazy-id="12">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">7</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-so-8-phuong-truong-thanh/can-von-ban-nhanh-gia-chi-26tr-m-8-lo-lu-q9-pr27752519" title="Cần vốn bán nhanh giá chỉ 26tr/m2, đường Số 8, Lò Lu, Trường Thạnh, Q9" class="vipZero product-link">
                                CẦN VỐN BÁN NHANH GIÁ CHỈ 26TR/M2, ĐƯỜNG SỐ 8, LÒ LU, TRƯỜNG THẠNH, Q9
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">3.95 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">151 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 9, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Kẹt vốn làm ăn nên cần bán gấp lô đất đường Số 8, Lò Lu, cách Vinhomes Grand Park 1,3km, khu Đông Tăng Long 500m, khu CNC 2km. Giao thông thuận tiện đi các hướng. Đường Lò Lu hiện đang mở rộng lên 30
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
                                    <i class="iconSave" data-productid="27752519" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần vốn b&amp;#225;n nhanh gi&amp;#225; chỉ 26tr/m2, đường Số 8, L&amp;#242; Lu, Trường Thạnh, Q9&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111135953-e26e_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111135953-e26e_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần vốn bán nhanh giá chỉ 26tr/m2, đường Số 8, Lò Lu, Trường Thạnh, Q9" data-price="3.95 tỷ" data-area="151 m²" data-pricesort="3950000000" data-areasort="151" data-room="0" data-toilets="0" data-address="Quận 9, Hồ Chí Minh" data-description="Kẹt vốn làm ăn nên cần bán gấp lô đất đường Số 8, Lò Lu, cách Vinhomes Grand Park 1,3km, khu Đông Tăng Long 500m, khu CNC 2km. Giao thông thuận tiện đi các hướng. Đường Lò Lu hiện đang mở rộng lên 30" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 14:03:41" data-contactname="Tran Cuong" data-contactmobile="0838189898" data-url="/ban-dat-duong-so-8-phuong-truong-thanh/can-von-ban-nhanh-gia-chi-26tr-m-8-lo-lu-q9-pr27752519" data-totalmedia="7" data-createbyuser="189542"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="189542">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-so-6-phuong-tang-nhon-phu-b/-quan-9-gia-dau-tu-re-khong-co-lo-thu-2-pr27752198" title="Đất Tăng Nhơn Phú B, Quận 9, giá đầu tư, rẻ không có lô thứ 2" onclick="">
                            <img class="product-avatar-img" alt="Đất Tăng Nhơn Phú B, Quận 9, giá đầu tư, rẻ không có lô thứ 2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111133753-ec02_wm.jpg" is-lazy-image="true" lazy-id="13">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">5</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-so-6-phuong-tang-nhon-phu-b/-quan-9-gia-dau-tu-re-khong-co-lo-thu-2-pr27752198" title="Đất Tăng Nhơn Phú B, Quận 9, giá đầu tư, rẻ không có lô thứ 2" class="vipZero product-link">
                                ĐẤT TĂNG NHƠN PHÚ B, QUẬN 9, GIÁ ĐẦU TƯ, RẺ KHÔNG CÓ LÔ THỨ 2
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">3.15 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">68.8 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 9, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Chính chủ cần bán lô đất đường Số 6, phường Tăng Nhơn Phú B, Q9. Vị trí gần trường Cao Đẳng Công Thương, Dệt Phong Phú chỉ 3p xe máy. Cách ngã tư Thủ Đức, Vincom, UBND Q9, khu Công Nghệ Cao chỉ 5p. G
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
                                    <i class="iconSave" data-productid="27752198" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Đất Tăng Nhơn Ph&amp;#250; B, Quận 9, gi&amp;#225; đầu tư, rẻ kh&amp;#244;ng c&amp;#243; l&amp;#244; thứ 2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111133753-ec02_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111133753-ec02_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Đất Tăng Nhơn Phú B, Quận 9, giá đầu tư, rẻ không có lô thứ 2" data-price="3.15 tỷ" data-area="68.8 m²" data-pricesort="3150000000" data-areasort="68.8" data-room="0" data-toilets="0" data-address="Quận 9, Hồ Chí Minh" data-description="Chính chủ cần bán lô đất đường Số 6, phường Tăng Nhơn Phú B, Q9. Vị trí gần trường Cao Đẳng Công Thương, Dệt Phong Phú chỉ 3p xe máy. Cách ngã tư Thủ Đức, Vincom, UBND Q9, khu Công Nghệ Cao chỉ 5p. G" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 13:47:00" data-contactname="Tran Cuong" data-contactmobile="0838189898" data-url="/ban-dat-duong-so-6-phuong-tang-nhon-phu-b/-quan-9-gia-dau-tu-re-khong-co-lo-thu-2-pr27752198" data-totalmedia="5" data-createbyuser="189542"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="559144">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-so-7-phuong-tan-tao/he-thong-ngan-hang-tp-hcm-thong-bao-thanh-ly-bds-quy-iv-nam-2020-pr27750022" title="Hệ thống ngân hàng Tp. HCM thông báo thanh lý BĐS quý IV năm 2020" onclick="">
                            <img class="product-avatar-img" alt="Hệ thống ngân hàng Tp. HCM thông báo thanh lý BĐS quý IV năm 2020" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111110909-db2a_wm.jpg" is-lazy-image="true" lazy-id="14">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">10</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-so-7-phuong-tan-tao/he-thong-ngan-hang-tp-hcm-thong-bao-thanh-ly-bds-quy-iv-nam-2020-pr27750022" title="Hệ thống ngân hàng Tp. HCM thông báo thanh lý BĐS quý IV năm 2020" class="vipZero product-link">
                                HỆ THỐNG NGÂN HÀNG TP. HCM THÔNG BÁO THANH LÝ BĐS QUÝ IV NĂM 2020
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">4.05 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">96.2 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bình Tân, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Thông tin bất động sản cần bán quận Bình Tân TP. HCM.Quyền sử dụng đất tại thửa đất số 164, tờ bản đồ số 129, địa chỉ: Đường số 7, P. Tân Tạo, Q. Bình Tân, Tp. Hồ Chí Minh.Thông tin chi tiết tài sản:
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
                                    <i class="iconSave" data-productid="27750022" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Hệ thống ng&amp;#226;n h&amp;#224;ng Tp. HCM th&amp;#244;ng b&amp;#225;o thanh l&amp;#253; BĐS qu&amp;#253; IV năm 2020&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111110909-db2a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111110909-db2a_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Hệ thống ngân hàng Tp. HCM thông báo thanh lý BĐS quý IV năm 2020" data-price="4.05 tỷ" data-area="96.2 m²" data-pricesort="4050000000" data-areasort="96.2" data-room="0" data-toilets="0" data-address="Bình Tân, Hồ Chí Minh" data-description="Thông tin bất động sản cần bán quận Bình Tân TP. HCM.Quyền sử dụng đất tại thửa đất số 164, tờ bản đồ số 129, địa chỉ: Đường số 7, P. Tân Tạo, Q. Bình Tân, Tp. Hồ Chí Minh.Thông tin chi tiết tài sản:" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 11:06:31" data-contactname="Trần Quang Phú" data-contactmobile="0934635758" data-url="/ban-dat-duong-so-7-phuong-tan-tao/he-thong-ngan-hang-tp-hcm-thong-bao-thanh-ly-bds-quy-iv-nam-2020-pr27750022" data-totalmedia="10" data-createbyuser="559144"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="838563">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-ben-cat-bd/can-tien-ban-2-nen-tai-thi-xa-duong-lon-dan-cu-dong-gan-khu-cong-nghiep-va-truong-dh-pr27748552" title="CHÍNH CHỦ CẦN TIỀN CHIỤ LỔ BÁN GẤP 300M2 ĐẤT THỔ CƯ,KĐT BÌNH DƯƠNG,SỔ RIÊNG,DÂN CƯ ĐÔNG GẦN KCN." onclick="">
                            <img class="product-avatar-img" alt="CHÍNH CHỦ CẦN TIỀN CHIỤ LỔ BÁN GẤP 300M2 ĐẤT THỔ CƯ,KĐT BÌNH DƯƠNG,SỔ RIÊNG,DÂN CƯ ĐÔNG GẦN KCN." error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112100720-9e88_wm.jpg" is-lazy-image="true" lazy-id="15">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-ben-cat-bd/can-tien-ban-2-nen-tai-thi-xa-duong-lon-dan-cu-dong-gan-khu-cong-nghiep-va-truong-dh-pr27748552" title="CHÍNH CHỦ CẦN TIỀN CHIỤ LỔ BÁN GẤP 300M2 ĐẤT THỔ CƯ,KĐT BÌNH DƯƠNG,SỔ RIÊNG,DÂN CƯ ĐÔNG GẦN KCN." class="vipZero product-link">
                                CHÍNH CHỦ CẦN TIỀN CHIỤ LỔ BÁN GẤP 300M2 ĐẤT THỔ CƯ,KĐT BÌNH DƯƠNG,SỔ RIÊNG,DÂN CƯ ĐÔNG GẦN KCN.
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">790 triệu</span>
                                <span class="dot">·</span>
                                <span class="area">300 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bến Cát, Bình Dương</span>
                        </div>
                        <div class="product-content">
                            Năm 2015 gia đình tôi có mua miếng đất ngay tại khu đô thị mới Bình Dương, vị trí gần trường học cấp 1, chợ này cần tiền bán gấp.
     
     Diện tích 300m2 =10x30 thổ cư 100% , sổ riêng , mặt tiền 16m thông
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
                                    <i class="iconSave" data-productid="27748552" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;CH&amp;#205;NH CHỦ CẦN TIỀN CHIỤ LỔ B&amp;#193;N GẤP 300M2 ĐẤT THỔ CƯ,KĐT B&amp;#204;NH DƯƠNG,SỔ RI&amp;#202;NG,D&amp;#194;N CƯ Đ&amp;#212;NG GẦN KCN.&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112100720-9e88_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112100720-9e88_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="CHÍNH CHỦ CẦN TIỀN CHIỤ LỔ BÁN GẤP 300M2 ĐẤT THỔ CƯ,KĐT BÌNH DƯƠNG,SỔ RIÊNG,DÂN CƯ ĐÔNG GẦN KCN." data-price="790 triệu" data-area="300 m²" data-pricesort="790000000" data-areasort="300" data-room="0" data-toilets="0" data-address="Bến Cát, Bình Dương" data-description="Năm 2015 gia đình tôi có mua miếng đất ngay tại khu đô thị mới Bình Dương, vị trí gần trường học cấp 1, chợ này cần tiền bán gấp.
     
     Diện tích 300m2 =10x30 thổ cư 100% , sổ riêng , mặt tiền 16m thông" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 10:16:19" data-contactname="Nguyen Thanh Vu" data-contactmobile="0898939441" data-url="/ban-dat-ben-cat-bd/can-tien-ban-2-nen-tai-thi-xa-duong-lon-dan-cu-dong-gan-khu-cong-nghiep-va-truong-dh-pr27748552" data-totalmedia="6" data-createbyuser="838563"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 vipaddon product-item clearfix" uid="1492337">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-mai-ba-huong-xa-le-minh-xuan/n-9-000m2-mat-tien-huong-pr27471886" title="Bán 9,000m2 mặt tiền đường Mai Bá Hương" onclick="">
                            <img class="product-avatar-img" alt="Bán 9,000m2 mặt tiền đường Mai Bá Hương" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019223842-e224_wm.jpg" is-lazy-image="true" lazy-id="16"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019224948-a8c4_wm.jpg" is-lazy-image="true" lazy-id="17"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019224957-240d_wm.jpg" is-lazy-image="true" lazy-id="18">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">5</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-mai-ba-huong-xa-le-minh-xuan/n-9-000m2-mat-tien-huong-pr27471886" title="Bán 9,000m2 mặt tiền đường Mai Bá Hương" class="vipZero product-link">
                                BÁN 9,000M2 MẶT TIỀN ĐƯỜNG MAI BÁ HƯƠNG
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">55 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">9000 m²</span>
                                                    <span class="location">Bình Chánh, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Bán 9,000m2 có 1,000m2 thổ cư có nhà, còn lại 8,000m2 đất trồng cây lâu năm. Có nhà xưởng sẵn, nhà ở công nhân, bình điện 500, mua xong chỉ việc vào ở và sản xuất. Vị trí rất thuận tiện, không tin anh chị có thể đến khảo sát. Đất đẹp vuông vức, còn miếng 2,300m2 liền kề, nếu anh chị mua thì sẽ ra 2 mặt tiền, thật sự khó khăn nên mới bán, anh chị có nhu cầu xin mời nghé thăm. Đi
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">11/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Doan Tuan">
                                    <span class="contact-name">Doan Tuan</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0393846510" raw="0393846510">0393 846 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27471886" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n 9,000m2 mặt tiền đường Mai B&amp;#225; Hương&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019223842-e224_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019224948-a8c4_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019224957-240d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/10/19/20201019223842-e224_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán 9,000m2 mặt tiền đường Mai Bá Hương" data-price="55 tỷ" data-area="9000 m²" data-pricesort="55000000000" data-areasort="9000" data-room="0" data-toilets="0" data-address="Bình Chánh, Hồ Chí Minh" data-description="Bán 9,000m2 có 1,000m2 thổ cư có nhà, còn lại 8,000m2 đất trồng cây lâu năm. Có nhà xưởng sẵn, nhà ở công nhân, bình điện 500, mua xong chỉ việc vào ở và sản xuất. Vị trí rất thuận tiện, không tin anh chị có thể đến khảo sát. Đất đẹp vuông vức, còn miếng 2,300m2 liền kề, nếu anh chị mua thì sẽ ra 2 mặt tiền, thật sự khó khăn nên mới bán, anh chị có nhu cầu xin mời nghé thăm. Đi" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:22:16" data-contactname="Doan Tuan" data-contactmobile="0393846510" data-url="/ban-dat-duong-mai-ba-huong-xa-le-minh-xuan/n-9-000m2-mat-tien-huong-pr27471886" data-totalmedia="5" data-createbyuser="1492337"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1473794">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-quoc-lo-22-thi-tran-cu-chi/chu-khanh-can-ban-manh-so-hong-rieng-o-673m-gia-1-ty-bao-xay-0918877715-pr27745890" title="Chú Khanh cần bán mảnh đất sổ hồng riêng ở Củ Chi, 574m2, giá 880 Triệu bao xây (0918877715)" onclick="">
                            <img class="product-avatar-img" alt="Chú Khanh cần bán mảnh đất sổ hồng riêng ở Củ Chi, 574m2, giá 880 Triệu bao xây (0918877715)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/6XB5gufv/20201112142211-8b54_wm.jpg" is-lazy-image="true" lazy-id="19">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-quoc-lo-22-thi-tran-cu-chi/chu-khanh-can-ban-manh-so-hong-rieng-o-673m-gia-1-ty-bao-xay-0918877715-pr27745890" title="Chú Khanh cần bán mảnh đất sổ hồng riêng ở Củ Chi, 574m2, giá 880 Triệu bao xây (0918877***)" class="vipZero product-link" style="overflow: visible;">
                                CHÚ KHANH CẦN BÁN MẢNH ĐẤT SỔ HỒNG RIÊNG Ở CỦ CHI, 574M2, GIÁ 880 TRIỆU BAO XÂY (<span class="hidden-mobile m-on-title" raw="0918877715">0918877***</span>)
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">880 triệu</span>
                                <span class="dot">·</span>
                                <span class="area">574 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Củ Chi, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Chú Khanh đang rao bán mảnh đất 574 đã nộp đơn lên thổ cư. Nằm trên đường nhà nước, lộ giới 12m chuẩn bị đổ nhựa. Sổ hồng riêng vừa được cấp ngày 20/08/2020 mới toanh. Đối diện nhà của đạo diễn Nguyễ
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
                                    <i class="iconSave" data-productid="27745890" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#250; Khanh cần b&amp;#225;n mảnh đất sổ hồng ri&amp;#234;ng ở Củ Chi, 574m2, gi&amp;#225; 880 Triệu bao x&amp;#226;y (0918877715)&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/6XB5gufv/20201112142211-8b54_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/6XB5gufv/20201112142211-8b54_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chú Khanh cần bán mảnh đất sổ hồng riêng ở Củ Chi, 574m2, giá 880 Triệu bao xây (0918877715)" data-price="880 triệu" data-area="574 m²" data-pricesort="880000000" data-areasort="574" data-room="0" data-toilets="0" data-address="Củ Chi, Hồ Chí Minh" data-description="Chú Khanh đang rao bán mảnh đất 574 đã nộp đơn lên thổ cư. Nằm trên đường nhà nước, lộ giới 12m chuẩn bị đổ nhựa. Sổ hồng riêng vừa được cấp ngày 20/08/2020 mới toanh. Đối diện nhà của đạo diễn Nguyễ" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:19:53" data-contactname="Khoa Huan Nguyen" data-contactmobile="0918877715" data-url="/ban-dat-duong-quoc-lo-22-thi-tran-cu-chi/chu-khanh-can-ban-manh-so-hong-rieng-o-673m-gia-1-ty-bao-xay-0918877715-pr27745890" data-totalmedia="4" data-createbyuser="1473794"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="498044">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-phuong-quang-cu/chinh-chu-ban-dich-vu-hong-thang-sam-son-mat-tien-10m-dien-tich-200m-tien-kinh-doanh-pr24598288" title="Chính chủ bán đất dịch vụ Hồng Thắng Sầm Sơn mặt tiền 10m, diện tích 200m2 tiện kinh doanh" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ bán đất dịch vụ Hồng Thắng Sầm Sơn mặt tiền 10m, diện tích 200m2 tiện kinh doanh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/03/10/20200310074538-8cd3.jpg" is-lazy-image="true" lazy-id="20">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">2</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-phuong-quang-cu/chinh-chu-ban-dich-vu-hong-thang-sam-son-mat-tien-10m-dien-tich-200m-tien-kinh-doanh-pr24598288" title="Chính chủ bán đất dịch vụ Hồng Thắng Sầm Sơn mặt tiền 10m, diện tích 200m2 tiện kinh doanh" class="vipZero product-link">
                                CHÍNH CHỦ BÁN ĐẤT DỊCH VỤ HỒNG THẮNG SẦM SƠN MẶT TIỀN 10M, DIỆN TÍCH 200M2 TIỆN KINH DOANH
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">200 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Sầm Sơn, Thanh Hóa</span>
                        </div>
                        <div class="product-content">
                            Chính chủ cần bán đất dịch vụ gần đường Thanh Niên Cải dịch, sát khu đô thị Sun Group triển khai, Sát quảng trường tiện kinh doanh cách biển 100m.Lô đất 200m2, mặt tiền 10m, đường nội bộ 12m có vỉa h
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
                                    <i class="iconSave" data-productid="24598288" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n đất dịch vụ Hồng Thắng Sầm Sơn mặt tiền 10m, diện t&amp;#237;ch 200m2 tiện kinh doanh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/03/10/20200310074538-8cd3.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/03/10/20200310074538-8cd3.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ bán đất dịch vụ Hồng Thắng Sầm Sơn mặt tiền 10m, diện tích 200m2 tiện kinh doanh" data-price="Giá thỏa thuận" data-area="200 m²" data-pricesort="0" data-areasort="200" data-room="0" data-toilets="0" data-address="Sầm Sơn, Thanh Hóa" data-description="Chính chủ cần bán đất dịch vụ gần đường Thanh Niên Cải dịch, sát khu đô thị Sun Group triển khai, Sát quảng trường tiện kinh doanh cách biển 100m.Lô đất 200m2, mặt tiền 10m, đường nội bộ 12m có vỉa h" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 16:05:44" data-contactname="Thanh Tùng" data-contactmobile="0906930555" data-url="/ban-dat-phuong-quang-cu/chinh-chu-ban-dich-vu-hong-thang-sam-son-mat-tien-10m-dien-tich-200m-tien-kinh-doanh-pr24598288" data-totalmedia="2" data-createbyuser="498044"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="718169">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-long-thuan-phuong-long-phuoc-2/ban-nha-vuon-1-000m2-tai-206-q9-pr27734392" title="Bán nhà vườn 1.000m2 tại 206 Long Thuận, phường Long Phước, Q9" onclick="">
                            <img class="product-avatar-img" alt="Bán nhà vườn 1.000m2 tại 206 Long Thuận, phường Long Phước, Q9" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110104320-fa13_wm.jpg" is-lazy-image="true" lazy-id="21">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">5</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-long-thuan-phuong-long-phuoc-2/ban-nha-vuon-1-000m2-tai-206-q9-pr27734392" title="Bán nhà vườn 1.000m2 tại 206 Long Thuận, phường Long Phước, Q9" class="vipZero product-link">
                                BÁN NHÀ VƯỜN 1.000M2 TẠI 206 LONG THUẬN, PHƯỜNG LONG PHƯỚC, Q9
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">7 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">1000 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 9, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Nhà vườn mới xây dựng rộng 1000 m2, Quận 9 (hẻm 206 đường Long Thuận). - Đường ô tô vào 4m. - Có đường kết nối từ đất lên Cao tốc Long Thành - Dầu Giây đi về Quận 1. (https://baomoi.com/de-xuat-ket-n
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
                                    <i class="iconSave" data-productid="27734392" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; vườn 1.000m2 tại 206 Long Thuận, phường Long Phước, Q9&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110104320-fa13_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110104320-fa13_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà vườn 1.000m2 tại 206 Long Thuận, phường Long Phước, Q9" data-price="7 tỷ" data-area="1000 m²" data-pricesort="7000000000" data-areasort="1000" data-room="0" data-toilets="0" data-address="Quận 9, Hồ Chí Minh" data-description="Nhà vườn mới xây dựng rộng 1000 m2, Quận 9 (hẻm 206 đường Long Thuận). - Đường ô tô vào 4m. - Có đường kết nối từ đất lên Cao tốc Long Thành - Dầu Giây đi về Quận 1. (https://baomoi.com/de-xuat-ket-n" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 10:55:45" data-contactname="Lê Kiên Giang" data-contactmobile="0982227771" data-url="/ban-dat-duong-long-thuan-phuong-long-phuoc-2/ban-nha-vuon-1-000m2-tai-206-q9-pr27734392" data-totalmedia="5" data-createbyuser="718169"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1448884">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-binh-gia-da-bac-xa-binh-gia/chinh-chu-can-ban-lo-ngay-dien-tich-566m2-13m-43m-no-hau-lh-0968773761-pr26793672" title="CHÍNH CHỦ CẦN BÁN LÔ ĐẤT NGAY ĐƯỜNG BÌNH GIÃ ĐÁ BẠC DT 566M2, 12.5M*43M, NỞ HẬU LH 0968773761" onclick="">
                            <img class="product-avatar-img" alt="CHÍNH CHỦ CẦN BÁN LÔ ĐẤT NGAY ĐƯỜNG BÌNH GIÃ ĐÁ BẠC DT 566M2, 12.5M*43M, NỞ HẬU LH 0968773761" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/25/sixAHNL2/20200825151813-93ab_wm.jpg" is-lazy-image="true" lazy-id="22">
                        </a>
                        <span class="product-feature">
                                                                                <img src="./assets/image/ic_video.svg">
                        </span>
                            <span class="product-media">7</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-binh-gia-da-bac-xa-binh-gia/chinh-chu-can-ban-lo-ngay-dien-tich-566m2-13m-43m-no-hau-lh-0968773761-pr26793672" title="CHÍNH CHỦ CẦN BÁN LÔ ĐẤT NGAY ĐƯỜNG BÌNH GIÃ ĐÁ BẠC DT 566M2, 12.5M*43M, NỞ HẬU LH 0968773***" class="vipZero product-link" style="overflow: visible;">
                                CHÍNH CHỦ CẦN BÁN LÔ ĐẤT NGAY ĐƯỜNG BÌNH GIÃ ĐÁ BẠC DT 566M2, 12.5M*43M, NỞ HẬU LH <span class="hidden-mobile m-on-title" raw="0968773761">0968773***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">1.31 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">566 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Châu Đức, Bà Rịa Vũng Tàu</span>
                        </div>
                        <div class="product-content">
                            Đất Chính Chủ Bình Giã Đá Bạc Huyện Châu Đức Bà Rịa Vũng Tàu.- Diện tích 566m2, 12.5m*43m, nở hậu rất đẹp. - Vị trí cực đẹp nằm ngay đường Bình Giã Đá Bạc 900m quẹo vào là tới. - Đường betong 4m  thô
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
                                    <i class="iconSave" data-productid="26793672" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;CH&amp;#205;NH CHỦ CẦN B&amp;#193;N L&amp;#212; ĐẤT NGAY ĐƯỜNG B&amp;#204;NH GI&amp;#195; Đ&amp;#193; BẠC DT 566M2, 12.5M*43M, NỞ HẬU LH 0968773761&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/08/25/sixAHNL2/20200825151813-93ab_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/08/25/sixAHNL2/20200825151813-93ab_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="true" data-title="CHÍNH CHỦ CẦN BÁN LÔ ĐẤT NGAY ĐƯỜNG BÌNH GIÃ ĐÁ BẠC DT 566M2, 12.5M*43M, NỞ HẬU LH 0968773761" data-price="1.31 tỷ" data-area="566 m²" data-pricesort="1310000000" data-areasort="566" data-room="0" data-toilets="0" data-address="Châu Đức, Bà Rịa Vũng Tàu" data-description="Đất Chính Chủ Bình Giã Đá Bạc Huyện Châu Đức Bà Rịa Vũng Tàu.- Diện tích 566m2, 12.5m*43m, nở hậu rất đẹp. - Vị trí cực đẹp nằm ngay đường Bình Giã Đá Bạc 900m quẹo vào là tới. - Đường betong 4m  thô" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 10:47:04" data-contactname="Anh Duy" data-contactmobile="0968773761" data-url="/ban-dat-duong-binh-gia-da-bac-xa-binh-gia/chinh-chu-can-ban-lo-ngay-dien-tich-566m2-13m-43m-no-hau-lh-0968773761-pr26793672" data-totalmedia="7" data-createbyuser="1448884"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="401642">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-ly-nhon-xa-tam-thon-hiep/chinh-chu-can-ban-6142-m2-mat-tien-an-thoi-dong-huyen-can-gio-pr27722430" title="Chính chủ cần Bán 6142 m2 đất mặt tiền đường Lý nhơn, xã An thới đông Huyện Cần Giờ" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cần Bán 6142 m2 đất mặt tiền đường Lý nhơn, xã An thới đông Huyện Cần Giờ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109141810-bc45_wm.jpg" is-lazy-image="true" lazy-id="23">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-duong-ly-nhon-xa-tam-thon-hiep/chinh-chu-can-ban-6142-m2-mat-tien-an-thoi-dong-huyen-can-gio-pr27722430" title="Chính chủ cần Bán 6142 m2 đất mặt tiền đường Lý nhơn, xã An thới đông Huyện Cần Giờ" class="vipZero product-link">
                                CHÍNH CHỦ CẦN BÁN 6142 M2 ĐẤT MẶT TIỀN ĐƯỜNG LÝ NHƠN, XÃ AN THỚI ĐÔNG HUYỆN CẦN GIỜ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">18.4 tỷ</span>
                                                        <span class="dot">·</span>
                            <span class="location">Cần Giờ, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Chính chủ cần Bán 6142 m2 đất mặt tiền đường Lý nhơn, xã An thới đông Huyện Cần Giờ. Vị trí siêu đẹp giao thông rất thuận tiện. Tương lai quy hoạch thành đất ở, Đất có 2 mặt tiền dễ phân lô bán nền. 
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
                                    <i class="iconSave" data-productid="27722430" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần B&amp;#225;n 6142 m2 đất mặt tiền đường L&amp;#253; nhơn, x&amp;#227; An thới đ&amp;#244;ng Huyện Cần Giờ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109141810-bc45_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109141810-bc45_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần Bán 6142 m2 đất mặt tiền đường Lý nhơn, xã An thới đông Huyện Cần Giờ" data-price="18.4 tỷ" data-area="Không xác định" data-pricesort="18400000000" data-areasort="0" data-room="0" data-toilets="0" data-address="Cần Giờ, Hồ Chí Minh" data-description="Chính chủ cần Bán 6142 m2 đất mặt tiền đường Lý nhơn, xã An thới đông Huyện Cần Giờ. Vị trí siêu đẹp giao thông rất thuận tiện. Tương lai quy hoạch thành đất ở, Đất có 2 mặt tiền dễ phân lô bán nền. " data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 15:47:16" data-contactname="Đại Dương" data-contactmobile="0985771133" data-url="/ban-dat-duong-ly-nhon-xa-tam-thon-hiep/chinh-chu-can-ban-6142-m2-mat-tien-an-thoi-dong-huyen-can-gio-pr27722430" data-totalmedia="4" data-createbyuser="401642"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="text-center">
                <div class="pagination">
    <a pid="1" class="actived" href="https://batdongsan.com.vn/ban-dat">1</a>
    <a pid="2" class="" href="https://batdongsan.com.vn/ban-dat/p2">2</a>
    <a pid="3" class="" href="https://batdongsan.com.vn/ban-dat/p3">3</a>
    <a pid="4" class="" href="https://batdongsan.com.vn/ban-dat/p4">4</a>
    <a pid="5" class="" href="https://batdongsan.com.vn/ban-dat/p5">5</a>
    <a pid="2213" href="https://batdongsan.com.vn/ban-dat/p2213"><img src="./assets/image/ic_double_caret_right.png"></a>
    </div>
    
            </div>
        </div>
    
    
    
    
    
    
        <div class="divide">&nbsp;</div>
    <div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Bán đất gần làng đại học Thủ Đức" href="https://batdongsan.com.vn/tags/ban/ban-dat-gan-lang-dai-hoc-thu-duc">Bán đất gần làng đại học Thủ Đức</a></li>    <li><a title="Bán đất chính chủ" href="https://batdongsan.com.vn/tags/ban/ban-dat-chinh-chu">Bán đất chính chủ</a></li>    <li><a title="Bán đất giá rẻ" href="https://batdongsan.com.vn/tags/ban/ban-dat-gia-re">Bán đất giá rẻ</a></li>    <li><a title="Bán đất gần cầu Đông Trù" href="https://batdongsan.com.vn/tags/ban/ban-dat-gan-cau-dong-tru">Bán đất gần cầu Đông Trù</a></li>    <li><a title="Bán đất quận Ngô Quyền" href="https://batdongsan.com.vn/tags/ban/ban-dat-quan-ngo-quyen">Bán đất quận Ngô Quyền</a></li>    <li><a title="Bán đất gần sân vận động Mỹ Đình" href="https://batdongsan.com.vn/tags/ban/ban-dat-gan-san-van-dong-my-dinh">Bán đất gần sân vận động Mỹ Đình</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
        <div class="product-seo-text">
            <div><strong>Batdongsan.com.vn</strong> mang đến kênh thông tin <strong>bán đất ở Việt Nam  - Việt Nam</strong>. 
                                    Mang đến nguồn thông tin bất động sản nhanh nhất và chính xác nhất, giúp bạn có cái nhìn tổng quan về tính hình bất động sản đang quan tâm. 
                                    Đến với Batdongsan.com.vn là đến với kênh thông tin mua bán, trao đổi, chuyển nhượng đất thổ cư,đất dịch vụ chính chủ hợp pháp.... 
                                    lớn nhất tại thị trường Việt Nam. Chúng tôi cung cấp cho bạn giải pháp tốt nhất về việc tiếp cận những khách hàng tiềm năng có chung mối quan tâm về thị trường <strong>bán đất ở Việt Nam</strong>. 
                                    Chúng tôi luôn luôn cố gắng là kênh thông tin cập nhật nhanh nhất các nhà đất bán Việt Nam đến tất cả người xem nhằm đáp ứng mọi nhu cầu để ở hoạc đầu tư kinh doanh nhà đất của mọi khách hàng.</div>
                                    <div>Hãy chọn Batdongsan.com.vn là kênh thông tin bất động sản đáng tin cậy của bạn.</div>
        </div>
    <form id="productListBinnova" method="post">
        <input id="hashAlias" type="hidden" value="fab4efd829ea58e9cd73bc981e641722ae1df4ab894a8d67d8bebea03cec22af">
    </form>
    <script type="text/javascript">
        (function callJQuery() {
            if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
                var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                    getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                    model: {
                        typeOfProduct: 38,
                        categoryId: 283,
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
                        <li><a href="https://batdongsan.com.vn/ban-dat/-1/2/-1/-1" title="Bán đất Việt Nam giá 500 - 800 triệu">500 - 800 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/-1/3/-1/-1" title="Bán đất Việt Nam giá 800 triệu - 1 tỷ">800 triệu - 1 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/-1/4/-1/-1" title="Bán đất Việt Nam giá 1 - 2 tỷ">1 - 2 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/-1/5/-1/-1" title="Bán đất Việt Nam giá 2 - 3 tỷ">2 - 3 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/-1/6/-1/-1" title="Bán đất Việt Nam giá 3 - 5 tỷ">3 - 5 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/-1/7/-1/-1" title="Bán đất Việt Nam giá 5 - 7 tỷ">5 - 7 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/-1/8/-1/-1" title="Bán đất Việt Nam giá 7 - 10 tỷ">7 - 10 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/-1/9/-1/-1" title="Bán đất Việt Nam giá 10 - 20 tỷ">10 - 20 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/-1/10/-1/-1" title="Bán đất Việt Nam giá 20 - 30 tỷ">20 - 30 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/-1/11/-1/-1" title="Bán đất Việt Nam giá &gt; 30 tỷ">&gt; 30 tỷ</a></li>
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
                        <li><a href="https://batdongsan.com.vn/ban-dat/1/-1/-1/-1" title="Bán đất Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/2/-1/-1/-1" title="Bán đất Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/3/-1/-1/-1" title="Bán đất Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/4/-1/-1/-1" title="Bán đất Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/5/-1/-1/-1" title="Bán đất Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/6/-1/-1/-1" title="Bán đất Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/7/-1/-1/-1" title="Bán đất Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/8/-1/-1/-1" title="Bán đất Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/9/-1/-1/-1" title="Bán đất Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat/10/-1/-1/-1" title="Bán đất Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
            <h2 class="box-title">Bán đất</h2>
    
            <div class="box-content link-hover-blue">
                <ul>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-tp-hcm" title="Bán đất tại Hồ Chí Minh">
                                    Hồ Chí Minh (11153)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-ha-noi" title="Bán đất tại Hà Nội">
                                    Hà Nội (8767)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-binh-duong" title="Bán đất tại Bình Dương">
                                    Bình Dương (4289)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-dong-nai" title="Bán đất tại Đồng Nai">
                                    Đồng Nai (4068)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-ba-ria-vung-tau" title="Bán đất tại Bà Rịa Vũng Tàu">
                                    Bà Rịa Vũng Tàu (2297)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-da-nang" title="Bán đất tại Đà Nẵng">
                                    Đà Nẵng (1514)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-thanh-hoa" title="Bán đất tại Thanh Hóa">
                                    Thanh Hóa (68)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-dak-lak" title="Bán đất tại Đắk Lắk">
                                    Đắk Lắk (58)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-long-an" title="Bán đất tại Long An">
                                    Long An (1308)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-vinh-phuc" title="Bán đất tại Vĩnh Phúc">
                                    Vĩnh Phúc (185)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-hoa-binh" title="Bán đất tại Hòa Bình">
                                    Hòa Bình (1263)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-an-giang" title="Bán đất tại An Giang">
                                    An Giang (14)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-vinh-long" title="Bán đất tại Vĩnh Long">
                                    Vĩnh Long (27)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-ca-mau" title="Bán đất tại Cà Mau">
                                    Cà Mau (8)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-hai-phong" title="Bán đất tại Hải Phòng">
                                    Hải Phòng (976)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-ha-tinh" title="Bán đất tại Hà Tĩnh">
                                    Hà Tĩnh (30)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-dien-bien" title="Bán đất tại Điện Biên">
                                    Điện Biên (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-dong-thap" title="Bán đất tại Đồng Tháp">
                                    Đồng Tháp (39)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-tien-giang" title="Bán đất tại Tiền Giang">
                                    Tiền Giang (90)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-tra-vinh" title="Bán đất tại Trà Vinh">
                                    Trà Vinh (14)
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
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-1" title="Nhà đất Quận 1">
                                        Nhà đất Quận 1
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-10" title="Nhà đất Quận 10">
                                        Nhà đất Quận 10
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-11" title="Nhà đất Quận 11">
                                        Nhà đất Quận 11
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-12" title="Nhà đất Quận 12">
                                        Nhà đất Quận 12
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-2" title="Nhà đất Quận 2">
                                        Nhà đất Quận 2
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-3" title="Nhà đất Quận 3">
                                        Nhà đất Quận 3
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-4" title="Nhà đất Quận 4">
                                        Nhà đất Quận 4
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-5" title="Nhà đất Quận 5">
                                        Nhà đất Quận 5
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-6" title="Nhà đất Quận 6">
                                        Nhà đất Quận 6
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-7" title="Nhà đất Quận 7">
                                        Nhà đất Quận 7
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-8" title="Nhà đất Quận 8">
                                        Nhà đất Quận 8
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-9" title="Nhà đất Quận 9">
                                        Nhà đất Quận 9
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-phuong-binh-thuan-3" title="Bán đất Bình Thuận">
                                        Bán đất Bình Thuận
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-binh-chanh" title="Nhà đất Bình Chánh">
                                        Nhà đất Bình Chánh
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-binh-tan" title="Nhà đất Bình Tân">
                                        Nhà đất Bình Tân
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-binh-thanh" title="Nhà đất Bình Thạnh">
                                        Nhà đất Bình Thạnh
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-can-gio" title="Nhà đất Cần Giờ">
                                        Nhà đất Cần Giờ
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-cu-chi" title="Nhà đất Củ Chi">
                                        Nhà đất Củ Chi
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-go-vap" title="Nhà đất Gò Vấp">
                                        Nhà đất Gò Vấp
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-hoc-mon" title="Nhà đất Hóc Môn">
                                        Nhà đất Hóc Môn
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
            