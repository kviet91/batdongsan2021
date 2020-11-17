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
                    <div class="custom-value hasvalue">Đất nền dự án</div>
                </div>
                <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="40">
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
                                                <li vl="40"><span class="active">Đất nền dự án</span></li>
                                                <li vl="283"><span>Bán đất</span></li>
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
                            <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-dat-nen-du-an#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-dat-nen-du-an#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                            <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-dat-nen-du-an#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-dat-nen-du-an#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                    categoryId: 40,
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
        <a href="https://batdongsan.com.vn/ban-dat-nen-du-an" level="1" title="Bán đất nền dự án tại Việt Nam">Bán</a><span>/</span><a href="https://batdongsan.com.vn/ban-dat-nen-du-an" level="2" title="Bán đất nền dự án tại Việt Nam">Đất nền dự án trên toàn quốc</a>
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
        <h1>Bán đất nền dự án tại Việt Nam</h1>
            <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">16,590</span> bất động sản.</div>
        
    
    </div>
        <div class="product-search-most mar-top-8 mar-bot-8">
            <div class="box-title">Các khu vực, địa điểm nổi bật</div>
            <ul class="clearfix link-hover-blue">
                    <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-cam-lam-kh">Đất nền Cam Lâm</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-tp-hcm">Bán đất nền TPHCM</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-binh-duong">Bán đất nền Bình Dương</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-da-nang">Bán đất nền Đà Nẵng</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-dong-nai">Bán đất nền Đồng Nai</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-ba-ria-vung-tau">Bán đất nền Bà Rịa Vũng Tàu</a></li>
            </ul>
        </div>
    
        <div class="product-nav-bar pad-top-8 clearfix">
            <ul class="ul-tab fl mar-right-16">
                <li class="list-display actived">Danh sách</li>
                <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
                <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-ban-dat-nen-du-an">Bản đồ</a></li>
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
                <div class="vip0 product-item clearfix" uid="1062145">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-818-thi-tran-thu-thua/tap-doan-xanh-phan-phoi-truc-tiep-graden-riverside-a-pr27490693" title="Khu dân cư Garden Riverside Thủ Thừa đất vàng đầu tư giai đoạn 1, hotline PKD: 0934676906" onclick="">
                            <img class="product-avatar-img" alt="Khu dân cư Garden Riverside Thủ Thừa đất vàng đầu tư giai đoạn 1, hotline PKD: 0934676906" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201103150427-88e5_wm.jpg" is-lazy-image="true" lazy-id="0">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-818-thi-tran-thu-thua/tap-doan-xanh-phan-phoi-truc-tiep-graden-riverside-a-pr27490693" title="Khu dân cư Garden Riverside Thủ Thừa đất vàng đầu tư giai đoạn 1, hotline PKD: 0934676***" class="vipZero product-link" style="overflow: visible;">
                                KHU DÂN CƯ GARDEN RIVERSIDE THỦ THỪA ĐẤT VÀNG ĐẦU TƯ GIAI ĐOẠN 1, HOTLINE PKD: <span class="hidden-mobile m-on-title" raw="0934676906">0934676***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">14 triệu/m²</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Thủ Thừa, Long An</span>
                        </div>
                        <div class="product-content">
                            Khu nhà vườn bên sông Garden Riverside Thủ Thừa Long An. Mặt tiền đường 818, thị trấn Thủ Thừa, huyện Thủ Thừa, tỉnh Long An. Chủ đầu tư: Khu công nghiệp và đô thị Thủ Thừa IDICO - CONAC. Ngân hàng B
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
                                    <i class="iconSave" data-productid="27490693" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Khu d&amp;#226;n cư Garden Riverside Thủ Thừa đất v&amp;#224;ng đầu tư giai đoạn 1, hotline PKD: 0934676906&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/20201103150427-88e5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/03/20201103150427-88e5_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Khu dân cư Garden Riverside Thủ Thừa đất vàng đầu tư giai đoạn 1, hotline PKD: 0934676906" data-price="14 triệu/m²" data-area="100 m²" data-pricesort="1400000000" data-areasort="100" data-room="0" data-toilets="0" data-address="Thủ Thừa, Long An" data-description="Khu nhà vườn bên sông Garden Riverside Thủ Thừa Long An. Mặt tiền đường 818, thị trấn Thủ Thừa, huyện Thủ Thừa, tỉnh Long An. Chủ đầu tư: Khu công nghiệp và đô thị Thủ Thừa IDICO - CONAC. Ngân hàng B" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 08:49:45" data-contactname="Ngân Ngân" data-contactmobile="0934676906" data-url="/ban-dat-nen-du-an-duong-818-thi-tran-thu-thua/tap-doan-xanh-phan-phoi-truc-tiep-graden-riverside-a-pr27490693" data-totalmedia="6" data-createbyuser="1062145"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1493135">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-an-phu-35-phuong-an-phu-2-prj-queen-home-an-phu/b-g-vincom-plada-di-550-gap-con-5-duy-nhat-0933-833-256-pr27773424" title="BÁN ĐẤT GẦN VINCOM PLADA DĨ AN 550 GẤP CÒN 5 NỀN DUY NHẤT 0933 833 256 " onclick="">
                            <img class="product-avatar-img" alt="BÁN ĐẤT GẦN VINCOM PLADA DĨ AN 550 GẤP CÒN 5 NỀN DUY NHẤT 0933 833 256 " error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201113030724-3919_wm.jpg" is-lazy-image="true" lazy-id="1">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">12</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-an-phu-35-phuong-an-phu-2-prj-queen-home-an-phu/b-g-vincom-plada-di-550-gap-con-5-duy-nhat-0933-833-256-pr27773424" title="BÁN ĐẤT GẦN VINCOM PLADA DĨ AN 550 GẤP CÒN 5 NỀN DUY NHẤT 0933 833 *** " class="vipZero product-link" style="overflow: visible;">
                                BÁN ĐẤT GẦN VINCOM PLADA DĨ AN 550 GẤP CÒN 5 NỀN DUY NHẤT <span class="hidden-mobile m-on-title" raw="0933 833 256">0933 833 ***</span> 
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">22 triệu/m²</span>
                                <span class="dot">·</span>
                                <span class="area">70 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Thuận An, Bình Dương</span>
                        </div>
                        <div class="product-content">
                              DỰ ÁN : QUEEN HOME AN PHÚ ( Khơi Nguần Thịnh Vượng - Nâng Tầm Gía Trị)
     +CHỦ ĐẦU TƯ ;CTY ĐỊA ỐC NÚI HỒNG GRUOP
     +ĐƠN VỊ PHÁT TRIỂN DỰ ÁN : CTY XÂY DỰNG NÚI HỒNG
     +PHÂN PHỐI 
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
                                    <i class="iconSave" data-productid="27773424" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;BÁN Đ&amp;#194;́T G&amp;#194;̀N VINCOM PLADA DĨ AN 550 G&amp;#194;́P CÒN 5 N&amp;#202;̀N DUY NH&amp;#194;́T 0933 833 256 &quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113030724-3919_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/13/20201113030724-3919_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="BÁN ĐẤT GẦN VINCOM PLADA DĨ AN 550 GẤP CÒN 5 NỀN DUY NHẤT 0933 833 256 " data-price="22 triệu/m²" data-area="70 m²" data-pricesort="1540000000" data-areasort="70" data-room="0" data-toilets="0" data-address="Thuận An, Bình Dương" data-description="  DỰ ÁN : QUEEN HOME AN PHÚ ( Khơi Nguần Thịnh Vượng - Nâng Tầm Gía Trị)
     +CHỦ ĐẦU TƯ ;CTY ĐỊA ỐC NÚI HỒNG GRUOP
     +ĐƠN VỊ PHÁT TRIỂN DỰ ÁN : CTY XÂY DỰNG NÚI HỒNG
     +PHÂN PHỐI " data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 07:04:08" data-contactname="Bùi Diện" data-contactmobile="0933833256" data-url="/ban-dat-nen-du-an-duong-an-phu-35-phuong-an-phu-2-prj-queen-home-an-phu/b-g-vincom-plada-di-550-gap-con-5-duy-nhat-0933-833-256-pr27773424" data-totalmedia="12" data-createbyuser="1493135"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="761010">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-phuong-thanh-my-loi-prj-khu-dan-cu-thanh-my-loi/b-huy-hog-thh-q2-tphcm-gia-87tr-m2-lh-0932-873-561-mr-long-pr27759527" title="Bán đất dự án Huy Hoàng, phường Thạnh Mỹ Lợi, Q2, TPHCM giá 87tr/m2. LH: 0932.873.561 (Mr Long)" onclick="">
                            <img class="product-avatar-img" alt="Bán đất dự án Huy Hoàng, phường Thạnh Mỹ Lợi, Q2, TPHCM giá 87tr/m2. LH: 0932.873.561 (Mr Long)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201112060355-1222_wm.jpg" is-lazy-image="true" lazy-id="2">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-phuong-thanh-my-loi-prj-khu-dan-cu-thanh-my-loi/b-huy-hog-thh-q2-tphcm-gia-87tr-m2-lh-0932-873-561-mr-long-pr27759527" title="Bán đất dự án Huy Hoàng, phường Thạnh Mỹ Lợi, Q2, TPHCM giá 87tr/m2. LH: 0932.873.*** (Mr Long)" class="vipZero product-link" style="overflow: visible;">
                                BÁN ĐẤT DỰ ÁN HUY HOÀNG, PHƯỜNG THẠNH MỸ LỢI, Q2, TPHCM GIÁ 87TR/M2. LH: <span class="hidden-mobile m-on-title" raw="0932.873.561">0932.873.***</span> (MR LONG)
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">87 triệu/m²</span>
                                <span class="dot">·</span>
                                <span class="area">224 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 2, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Bán gấp các dự án khác trong quần thể 174ha, Q2, TPHCM như Huy Hoàng, Villa Thủ Thiêm, Tuổi Trẻ, Phú Nhuận1,2,3,4, Thế Kỉ 21, Khu 1, Thế Minh, Đá Bình Dương, Trung Tiến, Quang Trung, Phát Triển Nhà, 
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
                                    <i class="iconSave" data-productid="27759527" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n đất dự &amp;#225;n Huy Ho&amp;#224;ng, phường Thạnh Mỹ Lợi, Q2, TPHCM gi&amp;#225; 87tr/m2. LH: 0932.873.561 (Mr Long)&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112060355-1222_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112060355-1222_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất dự án Huy Hoàng, phường Thạnh Mỹ Lợi, Q2, TPHCM giá 87tr/m2. LH: 0932.873.561 (Mr Long)" data-price="87 triệu/m²" data-area="224 m²" data-pricesort="19488000000" data-areasort="224" data-room="0" data-toilets="0" data-address="Quận 2, Hồ Chí Minh" data-description="Bán gấp các dự án khác trong quần thể 174ha, Q2, TPHCM như Huy Hoàng, Villa Thủ Thiêm, Tuổi Trẻ, Phú Nhuận1,2,3,4, Thế Kỉ 21, Khu 1, Thế Minh, Đá Bình Dương, Trung Tiến, Quang Trung, Phát Triển Nhà, " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 06:07:47" data-contactname="Phamthanhlong" data-contactmobile="0932873561" data-url="/ban-dat-nen-du-an-phuong-thanh-my-loi-prj-khu-dan-cu-thanh-my-loi/b-huy-hog-thh-q2-tphcm-gia-87tr-m2-lh-0932-873-561-mr-long-pr27759527" data-totalmedia="3" data-createbyuser="761010"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 vipaddon product-item clearfix" uid="1480194">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-long-duc-loc-an-xa-an-phuoc-3-prj-gem-sky-world/mo-ban-khu-vuc-topaz-town-cua-sieu-pham-gia-re-va-uu-dai-tu-chinh-chu-dau-tu-pr27614237" title="Siêu đô thị Gem Sky World đất nền vị trí đẹp giá ưu đãi từ chủ đầu tư cam kết lấy được vị trí đẹp" onclick="">
                            <img class="product-avatar-img" alt="Siêu đô thị Gem Sky World đất nền vị trí đẹp giá ưu đãi từ chủ đầu tư cam kết lấy được vị trí đẹp" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111231413-36dc_wm.jpg" is-lazy-image="true" lazy-id="3"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111231417-c6ab_wm.jpg" is-lazy-image="true" lazy-id="4"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111231405-6cb2_wm.jpg" is-lazy-image="true" lazy-id="5">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-long-duc-loc-an-xa-an-phuoc-3-prj-gem-sky-world/mo-ban-khu-vuc-topaz-town-cua-sieu-pham-gia-re-va-uu-dai-tu-chinh-chu-dau-tu-pr27614237" title="Siêu đô thị Gem Sky World đất nền vị trí đẹp giá ưu đãi từ chủ đầu tư cam kết lấy được vị trí đẹp" class="vipZero product-link">
                                SIÊU ĐÔ THỊ GEM SKY WORLD ĐẤT NỀN VỊ TRÍ ĐẸP GIÁ ƯU ĐÃI TỪ CHỦ ĐẦU TƯ CAM KẾT LẤY ĐƯỢC VỊ TRÍ ĐẸP
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">22 triệu/m²</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                            <span class="dot">·</span>
                                    <span class="bedroom">3 PN</span>
                                    <span class="dot">·</span>
                                    <span class="toilet">3 WC</span>
                            <span class="location">Long Thành, Đồng Nai</span>
                        </div>
                        <div class="product-content">
                            * Đất nền (nhà phố tự xây theo thiết kế, không ép thời gian xây dựng): 3 tầng.
     + Quy mô: 357 nền (liên hệ Minh Hiển nhân viên chủ đầu tư để lấy được những vị trí đẹp).
     + Diện tích: 5x20m (vị trí góc: 100m - 300m2).
     + Giá: 22 triệu/m2, Pháp lý: Có 1/500, GPXD, Sở hữu lâu dài, Sổ riêng từng nền.
     -------------------
     * Những ưu thế: Mỗi bước đi chạm ngàn tiện ích tại Gem Sky W
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">11/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Hoàng Minh Hiển">
                                    <span class="contact-name">Hoàng Minh Hiển</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0902952298" raw="0902952298">0902 952 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27614237" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Si&amp;#234;u đ&amp;#244; thị Gem Sky World đất nền vị tr&amp;#237; đẹp gi&amp;#225; ưu đ&amp;#227;i từ chủ đầu tư cam kết lấy được vị tr&amp;#237; đẹp&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111231413-36dc_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111231417-c6ab_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111231405-6cb2_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/11/20201111231413-36dc_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Siêu đô thị Gem Sky World đất nền vị trí đẹp giá ưu đãi từ chủ đầu tư cam kết lấy được vị trí đẹp" data-price="22 triệu/m²" data-area="100 m²" data-pricesort="2200000000" data-areasort="100" data-room="3" data-toilets="3" data-address="Long Thành, Đồng Nai" data-description="* Đất nền (nhà phố tự xây theo thiết kế, không ép thời gian xây dựng): 3 tầng.
     + Quy mô: 357 nền (liên hệ Minh Hiển nhân viên chủ đầu tư để lấy được những vị trí đẹp).
     + Diện tích: 5x20m (vị trí góc: 100m - 300m2).
     + Giá: 22 triệu/m2, Pháp lý: Có 1/500, GPXD, Sở hữu lâu dài, Sổ riêng từng nền.
     -------------------
     * Những ưu thế: Mỗi bước đi chạm ngàn tiện ích tại Gem Sky W" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 23:11:02" data-contactname="Hoàng Minh Hiển" data-contactmobile="0902952298" data-url="/ban-dat-nen-du-an-duong-long-duc-loc-an-xa-an-phuoc-3-prj-gem-sky-world/mo-ban-khu-vuc-topaz-town-cua-sieu-pham-gia-re-va-uu-dai-tu-chinh-chu-dau-tu-pr27614237" data-totalmedia="4" data-createbyuser="1480194"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="649852">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" title="Khách kẹt tiền cần bán nhanh lô đất Biên Hòa New City, DT 5 x 20m, 6 x 20m, 12 x 20m, đã nhận sổ" onclick="">
                            <img class="product-avatar-img" alt="Khách kẹt tiền cần bán nhanh lô đất Biên Hòa New City, DT 5 x 20m, 6 x 20m, 12 x 20m, đã nhận sổ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111095750-3277_wm.jpg" is-lazy-image="true" lazy-id="6">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" title="Khách kẹt tiền cần bán nhanh lô đất Biên Hòa New City, DT 5 x 20m, 6 x 20m, 12 x 20m, đã nhận sổ" class="vipZero product-link">
                                KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY, DT 5 X 20M, 6 X 20M, 12 X 20M, ĐÃ NHẬN SỔ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">1.45 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Biên Hòa, Đồng Nai</span>
                        </div>
                        <div class="product-content">
                            Khách kẹt tiền muốn đẩy nhanh một số Lô Biên Hòa New City ở sân golf Long Thành. DT: 5 x 20m. 6 x 18m. 9 x 20 m. 12 x 20 m. Giá: 1.450 tỷ bao sang tên và ra sổ hồng. Tất cả đã có sổ hồng từng nền, mặ
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
                                    <i class="iconSave" data-productid="27748072" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Kh&amp;#225;ch kẹt tiền cần b&amp;#225;n nhanh l&amp;#244; đất Bi&amp;#234;n H&amp;#242;a New City, DT 5 x 20m, 6 x 20m, 12 x 20m, đ&amp;#227; nhận sổ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111095750-3277_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111095750-3277_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Khách kẹt tiền cần bán nhanh lô đất Biên Hòa New City, DT 5 x 20m, 6 x 20m, 12 x 20m, đã nhận sổ" data-price="1.45 tỷ" data-area="100 m²" data-pricesort="1450000000" data-areasort="100" data-room="0" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Khách kẹt tiền muốn đẩy nhanh một số Lô Biên Hòa New City ở sân golf Long Thành. DT: 5 x 20m. 6 x 18m. 9 x 20 m. 12 x 20 m. Giá: 1.450 tỷ bao sang tên và ra sổ hồng. Tất cả đã có sổ hồng từng nền, mặ" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:58:51" data-contactname="Thái Bá Lợi" data-contactmobile="0946722227" data-url="/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" data-totalmedia="3" data-createbyuser="649852"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1038653">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-37-xa-bich-son-prj-khu-do-thi-tnr-stars-bich-dong/trung-tam-cong-nghiep-viet-yen-dep-khong-vuong-gi-0973035888-pr27747706" title="Trung tâm đất khu công nghiệp - TNR Bích Động Việt Yên - lô đẹp không vướng gì 0973035888" onclick="">
                            <img class="product-avatar-img" alt="Trung tâm đất khu công nghiệp - TNR Bích Động Việt Yên - lô đẹp không vướng gì 0973035888" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111094109-3a1a_wm.jpg" is-lazy-image="true" lazy-id="7">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">11</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-37-xa-bich-son-prj-khu-do-thi-tnr-stars-bich-dong/trung-tam-cong-nghiep-viet-yen-dep-khong-vuong-gi-0973035888-pr27747706" title="Trung tâm đất khu công nghiệp - TNR Bích Động Việt Yên - lô đẹp không vướng gì 0973035***" class="vipZero product-link" style="overflow: visible;">
                                TRUNG TÂM ĐẤT KHU CÔNG NGHIỆP - TNR BÍCH ĐỘNG VIỆT YÊN - LÔ ĐẸP KHÔNG VƯỚNG GÌ <span class="hidden-mobile m-on-title" raw="0973035888">0973035***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">1.8 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">73.2 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Việt Yên, Bắc Giang</span>
                        </div>
                        <div class="product-content">
                            Trung tâm Thị Trấn Bích Động - huyện Việt Yên - Tỉnh Bắc Giang - Thủ phủ của khu công nghiệp - hạ tầng đồng bộ (khuôn viên cây xanh, hồ điều hòa, trung tâm vui chơi giải trí.. Đầy đủ tiện ích của khu
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
                                    <i class="iconSave" data-productid="27747706" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Trung t&amp;#226;m đất khu c&amp;#244;ng nghiệp - TNR B&amp;#237;ch Động Việt Y&amp;#234;n - l&amp;#244; đẹp kh&amp;#244;ng vướng g&amp;#236; 0973035888&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111094109-3a1a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111094109-3a1a_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Trung tâm đất khu công nghiệp - TNR Bích Động Việt Yên - lô đẹp không vướng gì 0973035888" data-price="1.8 tỷ" data-area="73.2 m²" data-pricesort="1800000000" data-areasort="73.2" data-room="0" data-toilets="0" data-address="Việt Yên, Bắc Giang" data-description="Trung tâm Thị Trấn Bích Động - huyện Việt Yên - Tỉnh Bắc Giang - Thủ phủ của khu công nghiệp - hạ tầng đồng bộ (khuôn viên cây xanh, hồ điều hòa, trung tâm vui chơi giải trí.. Đầy đủ tiện ích của khu" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:45:53" data-contactname="Nguyễn Thị Thùy Dung" data-contactmobile="0973035888" data-url="/ban-dat-nen-du-an-duong-quoc-lo-37-xa-bich-son-prj-khu-do-thi-tnr-stars-bich-dong/trung-tam-cong-nghiep-viet-yen-dep-khong-vuong-gi-0973035888-pr27747706" data-totalmedia="11" data-createbyuser="1038653"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1423800">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-bac-binh-bth/dau-tu-hong-thai-garden-ngay-tu-hom-nay-chi-vui-50-trieu-1000m2-pr27032944" title="Đầu tư đất Hồng Thái Garden ngay từ hôm nay chỉ với 50 triệu/1000m2" onclick="">
                            <img class="product-avatar-img" alt="Đầu tư đất Hồng Thái Garden ngay từ hôm nay chỉ với 50 triệu/1000m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/14/20200914173752-5415_wm.jpg" is-lazy-image="true" lazy-id="8">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bac-binh-bth/dau-tu-hong-thai-garden-ngay-tu-hom-nay-chi-vui-50-trieu-1000m2-pr27032944" title="Đầu tư đất Hồng Thái Garden ngay từ hôm nay chỉ với 50 triệu/1000m2" class="vipZero product-link">
                                ĐẦU TƯ ĐẤT HỒNG THÁI GARDEN NGAY TỪ HÔM NAY CHỈ VỚI 50 TRIỆU/1000M2
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">1000 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bắc Bình, Bình Thuận  </span>
                        </div>
                        <div class="product-content">
                            Bán đất nông nghiệp Hồng Thái Garden tại tỉnh Bình Thuận, huyện Bắc Bình. Với vị trí đắc địa liền kề các đại đô thị nghỉ dưỡng. Bắc Bình có vị trí chiến lược là cửa ngõ về kinh tế, chính trị của vùng
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
                                    <i class="iconSave" data-productid="27032944" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Đầu tư đất Hồng Th&amp;#225;i Garden ngay từ h&amp;#244;m nay chỉ với 50 triệu/1000m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/14/20200914173752-5415_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/14/20200914173752-5415_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Đầu tư đất Hồng Thái Garden ngay từ hôm nay chỉ với 50 triệu/1000m2" data-price="Giá thỏa thuận" data-area="1000 m²" data-pricesort="0" data-areasort="1000" data-room="0" data-toilets="0" data-address="Bắc Bình, Bình Thuận  " data-description="Bán đất nông nghiệp Hồng Thái Garden tại tỉnh Bình Thuận, huyện Bắc Bình. Với vị trí đắc địa liền kề các đại đô thị nghỉ dưỡng. Bắc Bình có vị trí chiến lược là cửa ngõ về kinh tế, chính trị của vùng" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 08:20:59" data-contactname="Hồng Thái" data-contactmobile="0566666688" data-url="/ban-dat-nen-du-an-bac-binh-bth/dau-tu-hong-thai-garden-ngay-tu-hom-nay-chi-vui-50-trieu-1000m2-pr27032944" data-totalmedia="6" data-createbyuser="1423800"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="340278">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-xa-la-phuong-kien-hung-prj-khu-do-thi-thanh-ha-muong-thanh/chinh-chu-can-ban-vai-lo-biet-thu-vip-kdt-cienco5-gia-p-dan-pr27738904" title="Chính chủ cần bán vài lô biệt thự VIP KĐT Thanh Hà Cienco5 giá hấp dẫn" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cần bán vài lô biệt thự VIP KĐT Thanh Hà Cienco5 giá hấp dẫn" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110145253-5166_wm.jpg" is-lazy-image="true" lazy-id="9">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">5</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-xa-la-phuong-kien-hung-prj-khu-do-thi-thanh-ha-muong-thanh/chinh-chu-can-ban-vai-lo-biet-thu-vip-kdt-cienco5-gia-p-dan-pr27738904" title="Chính chủ cần bán vài lô biệt thự VIP KĐT Thanh Hà Cienco5 giá hấp dẫn" class="vipZero product-link">
                                CHÍNH CHỦ CẦN BÁN VÀI LÔ BIỆT THỰ VIP KĐT THANH HÀ CIENCO5 GIÁ HẤP DẪN
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">29 triệu/m²</span>
                                <span class="dot">·</span>
                                <span class="area">200 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hà Đông, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Chính chủ cần bán một số lô biệt thự đẹp giá tốt tại khu đô thị Thanh Hà Cienco5. Địa thế đẹp, cơ hội tuyệt vời đầu tư, kinh doanh và sinh sống. - B2.4BT04 Địa thế đẹp gần trục đường lớn. - B2.4BT0 V
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
                                    <i class="iconSave" data-productid="27738904" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần b&amp;#225;n v&amp;#224;i l&amp;#244; biệt thự VIP KĐT Thanh H&amp;#224; Cienco5 gi&amp;#225; hấp dẫn&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110145253-5166_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110145253-5166_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần bán vài lô biệt thự VIP KĐT Thanh Hà Cienco5 giá hấp dẫn" data-price="29 triệu/m²" data-area="200 m²" data-pricesort="5800000000" data-areasort="200" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="Chính chủ cần bán một số lô biệt thự đẹp giá tốt tại khu đô thị Thanh Hà Cienco5. Địa thế đẹp, cơ hội tuyệt vời đầu tư, kinh doanh và sinh sống. - B2.4BT04 Địa thế đẹp gần trục đường lớn. - B2.4BT0 V" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 15:01:37" data-contactname="Nguyễn Linh Chi" data-contactmobile="0965836689" data-url="/ban-dat-nen-du-an-duong-xa-la-phuong-kien-hung-prj-khu-do-thi-thanh-ha-muong-thanh/chinh-chu-can-ban-vai-lo-biet-thu-vip-kdt-cienco5-gia-p-dan-pr27738904" data-totalmedia="5" data-createbyuser="340278"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="548859">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-dt753-xa-tan-phuoc-5-prj-prime-city/so-huu-vang-kdc-canh-kcn-becamex-chi-300trieu-pr27736806" title="Đất Thành Thị Giá Nông Thôn Cạnh KCN Becamex chỉ 300triệu chỉ có thể là Prime City" onclick="">
                            <img class="product-avatar-img" alt="Đất Thành Thị Giá Nông Thôn Cạnh KCN Becamex chỉ 300triệu chỉ có thể là Prime City" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/YnR8Ssou/20201110133155-572b_wm.jpg" is-lazy-image="true" lazy-id="10">
                        </a>
                        <span class="product-feature">
                                                                                <img src="./assets/image/ic_video.svg">
                        </span>
                            <span class="product-media">10</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-dt753-xa-tan-phuoc-5-prj-prime-city/so-huu-vang-kdc-canh-kcn-becamex-chi-300trieu-pr27736806" title="Đất Thành Thị Giá Nông Thôn Cạnh KCN Becamex chỉ 300triệu chỉ có thể là Prime City" class="vipZero product-link">
                                ĐẤT THÀNH THỊ GIÁ NÔNG THÔN CẠNH KCN BECAMEX CHỈ 300TRIỆU CHỈ CÓ THỂ LÀ PRIME CITY
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">5.5 triệu/m²</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Đồng Phú, Bình Phước</span>
                        </div>
                        <div class="product-content">
                            Prime City - tâm điểm đầu tư 2020. Đất Nền Bình Phước Đầu Tư Chỉ Với 350 Triệu (🔥 Tặng ngay 1 chỉ vàng) - Dự Án 1/500 - Sở hữu ngay - Sổ Hồng Riêng - Xây dựng tự do - hạ tầng hoàn thiện tại TP Đồng 
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
                                    <i class="iconSave" data-productid="27736806" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Đất Th&amp;#224;nh Thị Gi&amp;#225; N&amp;#244;ng Th&amp;#244;n Cạnh KCN Becamex chỉ 300triệu chỉ c&amp;#243; thể l&amp;#224; Prime City&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/YnR8Ssou/20201110133155-572b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/YnR8Ssou/20201110133155-572b_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="true" data-title="Đất Thành Thị Giá Nông Thôn Cạnh KCN Becamex chỉ 300triệu chỉ có thể là Prime City" data-price="5.5 triệu/m²" data-area="100 m²" data-pricesort="550000000" data-areasort="100" data-room="0" data-toilets="0" data-address="Đồng Phú, Bình Phước" data-description="Prime City - tâm điểm đầu tư 2020. Đất Nền Bình Phước Đầu Tư Chỉ Với 350 Triệu (🔥 Tặng ngay 1 chỉ vàng) - Dự Án 1/500 - Sở hữu ngay - Sổ Hồng Riêng - Xây dựng tự do - hạ tầng hoàn thiện tại TP Đồng " data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 14:48:17" data-contactname="Đặng Minh" data-contactmobile="0777739678" data-url="/ban-dat-nen-du-an-duong-dt753-xa-tan-phuoc-5-prj-prime-city/so-huu-vang-kdc-canh-kcn-becamex-chi-300trieu-pr27736806" data-totalmedia="10" data-createbyuser="548859"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 vipaddon product-item clearfix" uid="1423800">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-xa-hong-thai-4/xu-huong-nghi-duong-bac-binh-farmstay-diem-sang-dau-tu-cuoi-nam-2020-pr26337330" title="Xu hướng nghỉ dưỡng - Hồng Thái Garden, điểm sáng đầu tư cuối năm 2020" onclick="">
                            <img class="product-avatar-img" alt="Xu hướng nghỉ dưỡng - Hồng Thái Garden, điểm sáng đầu tư cuối năm 2020" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/03/20200903111734-706c_wm.jpg" is-lazy-image="true" lazy-id="11"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/03/20200903111736-7e2b_wm.jpg" is-lazy-image="true" lazy-id="12"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/03/20200903111736-91aa_wm.jpg" is-lazy-image="true" lazy-id="13">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-xa-hong-thai-4/xu-huong-nghi-duong-bac-binh-farmstay-diem-sang-dau-tu-cuoi-nam-2020-pr26337330" title="Xu hướng nghỉ dưỡng - Hồng Thái Garden, điểm sáng đầu tư cuối năm 2020" class="vipZero product-link">
                                XU HƯỚNG NGHỈ DƯỠNG - HỒNG THÁI GARDEN, ĐIỂM SÁNG ĐẦU TƯ CUỐI NĂM 2020
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">160 triệu</span>
                                <span class="dot">·</span>
                                <span class="area">2000 m²</span>
                                                    <span class="location">Bắc Bình, Bình Thuận  </span>
                        </div>
                        <div class="product-content">
                            Bán đất nông nghiệp Hồng Thái Garden tại tỉnh Bình Thuận, huyện Bắc Bình. Với vị trí đắc địa liền kề các đại đô thị nghỉ dưỡng. Bắc Bình có vị trí chiến lược là cửa ngõ về kinh tế, chính trị của vùng Đông Nam Bộ.Hồng Thái Garden - cơ hội sở hữu sổ đỏ cầm tay chỉ 50.000đ/m2. Pháp lý rõ ràng - sang tên chính chủ. Hồng Thái Garden sở hữu safari Rạng Đông 3300ha, NovaWorld Hoà Thắn
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    3 ngày trước
                                    <span class="tooltip-time">10/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Đất Tín">
                                    <span class="contact-name">Đất Tín</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0566666688" raw="0566666688">0566 666 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="26337330" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Xu hướng nghỉ dưỡng - Hồng Th&amp;#225;i Garden, điểm s&amp;#225;ng đầu tư cuối năm 2020&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/03/20200903111734-706c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/03/20200903111736-7e2b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/03/20200903111736-91aa_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/09/03/20200903111734-706c_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Xu hướng nghỉ dưỡng - Hồng Thái Garden, điểm sáng đầu tư cuối năm 2020" data-price="160 triệu" data-area="2000 m²" data-pricesort="160000000" data-areasort="2000" data-room="0" data-toilets="0" data-address="Bắc Bình, Bình Thuận  " data-description="Bán đất nông nghiệp Hồng Thái Garden tại tỉnh Bình Thuận, huyện Bắc Bình. Với vị trí đắc địa liền kề các đại đô thị nghỉ dưỡng. Bắc Bình có vị trí chiến lược là cửa ngõ về kinh tế, chính trị của vùng Đông Nam Bộ.Hồng Thái Garden - cơ hội sở hữu sổ đỏ cầm tay chỉ 50.000đ/m2. Pháp lý rõ ràng - sang tên chính chủ. Hồng Thái Garden sở hữu safari Rạng Đông 3300ha, NovaWorld Hoà Thắn" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 10:46:33" data-contactname="Đất Tín" data-contactmobile="0566666688" data-url="/ban-dat-nen-du-an-xa-hong-thai-4/xu-huong-nghi-duong-bac-binh-farmstay-diem-sang-dau-tu-cuoi-nam-2020-pr26337330" data-totalmedia="6" data-createbyuser="1423800"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="676115">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-34-2-phuong-binh-tri-dong-b/mo-ban-giai-doan-2-khu-dan-cu-ten-lua-nam-sau-lung-aeon-mail-q-tan-tp-hcm-pr27732450" title="Mở bán giai đoạn 2 - Khu dân cư Tên Lửa - Nằm sau lưng Aeon Mall Q. Bình Tân - TP. HCM" onclick="">
                            <img class="product-avatar-img" alt="Mở bán giai đoạn 2 - Khu dân cư Tên Lửa - Nằm sau lưng Aeon Mall Q. Bình Tân - TP. HCM" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110094418-b7d1_wm.jpg" is-lazy-image="true" lazy-id="14">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">9</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-34-2-phuong-binh-tri-dong-b/mo-ban-giai-doan-2-khu-dan-cu-ten-lua-nam-sau-lung-aeon-mail-q-tan-tp-hcm-pr27732450" title="Mở bán giai đoạn 2 - Khu dân cư Tên Lửa - Nằm sau lưng Aeon Mall Q. Bình Tân - TP. HCM" class="vipZero product-link">
                                MỞ BÁN GIAI ĐOẠN 2 - KHU DÂN CƯ TÊN LỬA - NẰM SAU LƯNG AEON MALL Q. BÌNH TÂN - TP. HCM
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">3.99 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">95 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bình Tân, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            1. Với vị trí ngay góc đường số 7 và đường 34 Khu dân cư Tên Lửa - P. Bình Trị Đông B - Quận Bình Tân - Khu dân cư được mệnh danh là " Tiểu Hồng Công " của - TP. HCM.+ Sở hữu vị trí vô cùng tiềm năng
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
                                    <i class="iconSave" data-productid="27732450" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Mở b&amp;#225;n giai đoạn 2 - Khu d&amp;#226;n cư T&amp;#234;n Lửa - Nằm sau lưng Aeon Mall Q. B&amp;#236;nh T&amp;#226;n - TP. HCM&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110094418-b7d1_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110094418-b7d1_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Mở bán giai đoạn 2 - Khu dân cư Tên Lửa - Nằm sau lưng Aeon Mall Q. Bình Tân - TP. HCM" data-price="3.99 tỷ" data-area="95 m²" data-pricesort="3990000000" data-areasort="95" data-room="0" data-toilets="0" data-address="Bình Tân, Hồ Chí Minh" data-description="1. Với vị trí ngay góc đường số 7 và đường 34 Khu dân cư Tên Lửa - P. Bình Trị Đông B - Quận Bình Tân - Khu dân cư được mệnh danh là &quot; Tiểu Hồng Công &quot; của - TP. HCM.+ Sở hữu vị trí vô cùng tiềm năng" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 09:48:07" data-contactname="Dương Thị Mỹ Hạnh" data-contactmobile="0907989112" data-url="/ban-dat-nen-du-an-duong-34-2-phuong-binh-tri-dong-b/mo-ban-giai-doan-2-khu-dan-cu-ten-lua-nam-sau-lung-aeon-mail-q-tan-tp-hcm-pr27732450" data-totalmedia="9" data-createbyuser="676115"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1423800">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-xa-hong-thai-4/ban-nong-nghiep-garden-tai-tinh-binh-thuan-huyen-bac-binh-pr26945962" title="Bán đất nông nghiệp Hồng Thái Garden tại tỉnh Bình Thuận, huyện Bắc Bình" onclick="">
                            <img class="product-avatar-img" alt="Bán đất nông nghiệp Hồng Thái Garden tại tỉnh Bình Thuận, huyện Bắc Bình" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/08/20200908083928-b451_wm.jpg" is-lazy-image="true" lazy-id="15">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">7</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-xa-hong-thai-4/ban-nong-nghiep-garden-tai-tinh-binh-thuan-huyen-bac-binh-pr26945962" title="Bán đất nông nghiệp Hồng Thái Garden tại tỉnh Bình Thuận, huyện Bắc Bình" class="vipZero product-link">
                                BÁN ĐẤT NÔNG NGHIỆP HỒNG THÁI GARDEN TẠI TỈNH BÌNH THUẬN, HUYỆN BẮC BÌNH
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">1000 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bắc Bình, Bình Thuận  </span>
                        </div>
                        <div class="product-content">
                            - Đầu tư đất Hồng Thái Garden: Bắc Bình có vị trí chiến lược là cửa ngõ về kinh tế, chính trị của vùng Đông Nam Bộ.+ Bên phải Quốc Lộ 1 hướng từ TP. HCM ra. + Từ Bình Thuận đi Đà Lạt chỉ 162km, đi Vũ
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
                                    <i class="iconSave" data-productid="26945962" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n đất n&amp;#244;ng nghiệp Hồng Th&amp;#225;i Garden tại tỉnh B&amp;#236;nh Thuận, huyện Bắc B&amp;#236;nh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/08/20200908083928-b451_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/08/20200908083928-b451_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nông nghiệp Hồng Thái Garden tại tỉnh Bình Thuận, huyện Bắc Bình" data-price="Giá thỏa thuận" data-area="1000 m²" data-pricesort="0" data-areasort="1000" data-room="0" data-toilets="0" data-address="Bắc Bình, Bình Thuận  " data-description="- Đầu tư đất Hồng Thái Garden: Bắc Bình có vị trí chiến lược là cửa ngõ về kinh tế, chính trị của vùng Đông Nam Bộ.+ Bên phải Quốc Lộ 1 hướng từ TP. HCM ra. + Từ Bình Thuận đi Đà Lạt chỉ 162km, đi Vũ" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 11:18:27" data-contactname="Hồng Thái" data-contactmobile="0566666688" data-url="/ban-dat-nen-du-an-xa-hong-thai-4/ban-nong-nghiep-garden-tai-tinh-binh-thuan-huyen-bac-binh-pr26945962" data-totalmedia="7" data-createbyuser="1423800"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 vipaddon product-item clearfix" uid="1371066">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-20-xa-dam-bri/-phu-my-duoc-cac-nha-dau-tu-s-don-co-hoi-sinh-loi-toi-thieu-20-30-naml-h0973425555-pr25418760" title="Đất nên trung tâm TP Bảo Lộc đầu tư siêu lợi nhuận chỉ với 450tr có ngay sổ hồng,LH 0909904446" onclick="">
                            <img class="product-avatar-img" alt="Đất nên trung tâm TP Bảo Lộc đầu tư siêu lợi nhuận chỉ với 450tr có ngay sổ hồng,LH 0909904446" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/15/BYOyRJiT/20201015155745-2ab9_wm.jpg" is-lazy-image="true" lazy-id="16"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/15/BYOyRJiT/20201015155744-b20e_wm.jpg" is-lazy-image="true" lazy-id="17"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/15/BYOyRJiT/20201015155744-b613_wm.jpg" is-lazy-image="true" lazy-id="18">
                        </a>
                        <span class="product-feature">
                                                                                <img src="./assets/image/ic_video.svg">
                        </span>
                            <span class="product-media">13</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-20-xa-dam-bri/-phu-my-duoc-cac-nha-dau-tu-s-don-co-hoi-sinh-loi-toi-thieu-20-30-naml-h0973425555-pr25418760" title="Đất nên trung tâm TP Bảo Lộc đầu tư siêu lợi nhuận chỉ với 450tr có ngay sổ hồng,LH 0909904***" class="vipZero product-link" style="overflow: visible;">
                                ĐẤT NÊN TRUNG TÂM TP BẢO LỘC ĐẦU TƯ SIÊU LỢI NHUẬN CHỈ VỚI 450TR CÓ NGAY SỔ HỒNG,LH <span class="hidden-mobile m-on-title" raw="0909904446">0909904***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">450 triệu</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                    <span class="location">Bảo Lộc, Lâm Đồng</span>
                        </div>
                        <div class="product-content">
                            Những lí do các nhà đầu tư đỗ bộ về TP Bảo Lộc đầu tư : -Vị trí địa lý thuận lợi, là trung tâm kết nối các thành phố lớn như: HCM, Đà Lạt, Nha Trang, Phan Thiết, Phan Rang... -TP Bảo Lộc cũng rất nhiều địa điểm du lịch nổi tiếng: thác Dambri, Tu viện Bát Nhã, Nhà thờ chính toà Bảo Lộc, Linh Quy Pháp Ấn, hồ Phương Nam, đập Dambri, đồi chè Tâm Châu, hồ Tảo Hồng, núi Đại Bình, ...
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    4 ngày trước
                                    <span class="tooltip-time">09/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Anh Phú">
                                    <span class="contact-name">Anh Phú</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0909904446" raw="0909904446">0909 904 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="25418760" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Đất n&amp;#234;n trung t&amp;#226;m TP Bảo Lộc đầu tư si&amp;#234;u lợi nhuận chỉ với 450tr c&amp;#243; ngay sổ hồng,LH 0909904446&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/15/BYOyRJiT/20201015155745-2ab9_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/15/BYOyRJiT/20201015155744-b20e_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/15/BYOyRJiT/20201015155744-b613_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/10/15/BYOyRJiT/20201015155745-2ab9_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="true" data-title="Đất nên trung tâm TP Bảo Lộc đầu tư siêu lợi nhuận chỉ với 450tr có ngay sổ hồng,LH 0909904446" data-price="450 triệu" data-area="100 m²" data-pricesort="450000000" data-areasort="100" data-room="0" data-toilets="0" data-address="Bảo Lộc, Lâm Đồng" data-description="Những lí do các nhà đầu tư đỗ bộ về TP Bảo Lộc đầu tư : -Vị trí địa lý thuận lợi, là trung tâm kết nối các thành phố lớn như: HCM, Đà Lạt, Nha Trang, Phan Thiết, Phan Rang... -TP Bảo Lộc cũng rất nhiều địa điểm du lịch nổi tiếng: thác Dambri, Tu viện Bát Nhã, Nhà thờ chính toà Bảo Lộc, Linh Quy Pháp Ấn, hồ Phương Nam, đập Dambri, đồi chè Tâm Châu, hồ Tảo Hồng, núi Đại Bình, ..." data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 08:32:55" data-contactname="Anh Phú" data-contactmobile="0909904446" data-url="/ban-dat-nen-du-an-duong-quoc-lo-20-xa-dam-bri/-phu-my-duoc-cac-nha-dau-tu-s-don-co-hoi-sinh-loi-toi-thieu-20-30-naml-h0973425555-pr25418760" data-totalmedia="13" data-createbyuser="1371066"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="829842">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-phuong-kien-hung-prj-khu-do-thi-thanh-ha-muong-thanh/bang-gia-lien-ke-biet-thu-nam-2020-cap-nt-moi-nt-gia-re-nt-pr27712215" title="Bảng giá đất liền kề biệt thự Thanh Hà năm 2020 cập nhật mới nhất giá rẻ nhất" onclick="">
                            <img class="product-avatar-img" alt="Bảng giá đất liền kề biệt thự Thanh Hà năm 2020 cập nhật mới nhất giá rẻ nhất" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108151717-cc9b_wm.jpg" is-lazy-image="true" lazy-id="19">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">2</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-phuong-kien-hung-prj-khu-do-thi-thanh-ha-muong-thanh/bang-gia-lien-ke-biet-thu-nam-2020-cap-nt-moi-nt-gia-re-nt-pr27712215" title="Bảng giá đất liền kề biệt thự Thanh Hà năm 2020 cập nhật mới nhất giá rẻ nhất" class="vipZero product-link">
                                BẢNG GIÁ ĐẤT LIỀN KỀ BIỆT THỰ THANH HÀ NĂM 2020 CẬP NHẬT MỚI NHẤT GIÁ RẺ NHẤT
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hà Đông, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Bảng giá đất liền kề biệt thự dự án Thanh Hà năm 2020 mới nhất. Ký hợp đồng trực tiếp với chủ đầu tư Công Ty Cổ Phần Địa Ốc Cienco 5. Nhận mua bán và ký gửi đất nền liền kề biệt thự dự án khu đô thị 
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
                                    <i class="iconSave" data-productid="27712215" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Bảng gi&amp;#225; đất liền kề biệt thự Thanh H&amp;#224; năm 2020 cập nhật mới nhất gi&amp;#225; rẻ nhất&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108151717-cc9b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/08/20201108151717-cc9b_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bảng giá đất liền kề biệt thự Thanh Hà năm 2020 cập nhật mới nhất giá rẻ nhất" data-price="Giá thỏa thuận" data-area="100 m²" data-pricesort="0" data-areasort="100" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="Bảng giá đất liền kề biệt thự dự án Thanh Hà năm 2020 mới nhất. Ký hợp đồng trực tiếp với chủ đầu tư Công Ty Cổ Phần Địa Ốc Cienco 5. Nhận mua bán và ký gửi đất nền liền kề biệt thự dự án khu đô thị " data-duration="5 ngày trước" data-updatedtime="08/11/2020" data-datesort="11/08/2020 15:14:11" data-contactname="Nguyễn Đức Lịch" data-contactmobile="0968116225" data-url="/ban-dat-nen-du-an-phuong-kien-hung-prj-khu-do-thi-thanh-ha-muong-thanh/bang-gia-lien-ke-biet-thu-nam-2020-cap-nt-moi-nt-gia-re-nt-pr27712215" data-totalmedia="2" data-createbyuser="829842"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="294078">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-phuong-kien-hung-prj-khu-do-thi-thanh-ha-muong-thanh/ban-biet-thu-gia-re-vi-tri-dep-cam-ket-dau-tu-la-co-lai-lh-0989-157-866-pr27709068" title="Bán đất biệt thự Thanh Hà, giá rẻ vị trí đẹp, cam kết đầu tư là có lãi, LH 0989.157.866" onclick="">
                            <img class="product-avatar-img" alt="Bán đất biệt thự Thanh Hà, giá rẻ vị trí đẹp, cam kết đầu tư là có lãi, LH 0989.157.866" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108053055-2278_wm.jpeg" is-lazy-image="true" lazy-id="20">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-phuong-kien-hung-prj-khu-do-thi-thanh-ha-muong-thanh/ban-biet-thu-gia-re-vi-tri-dep-cam-ket-dau-tu-la-co-lai-lh-0989-157-866-pr27709068" title="Bán đất biệt thự Thanh Hà, giá rẻ vị trí đẹp, cam kết đầu tư là có lãi, LH 0989.157.***" class="vipZero product-link" style="overflow: visible;">
                                BÁN ĐẤT BIỆT THỰ THANH HÀ, GIÁ RẺ VỊ TRÍ ĐẸP, CAM KẾT ĐẦU TƯ LÀ CÓ LÃI, LH <span class="hidden-mobile m-on-title" raw="0989.157.866">0989.157.***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">200 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hà Đông, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Tôi đang cần bán một số ô biệt thự tại dự án Thanh Hà Cienco 5 Hà Đông, Hà Nội. Giá rẻ nhất hiện nay, người mua hoặc các nhà đầu tư cứ vào tiền là có lãi vì đất nền ở đây đang có giá rẻ nhất khu vực 
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
                                    <i class="iconSave" data-productid="27709068" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n đất biệt thự Thanh H&amp;#224;, gi&amp;#225; rẻ vị tr&amp;#237; đẹp, cam kết đầu tư l&amp;#224; c&amp;#243; l&amp;#227;i, LH 0989.157.866&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108053055-2278_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/08/20201108053055-2278_wm.jpeg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất biệt thự Thanh Hà, giá rẻ vị trí đẹp, cam kết đầu tư là có lãi, LH 0989.157.866" data-price="Giá thỏa thuận" data-area="200 m²" data-pricesort="0" data-areasort="200" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="Tôi đang cần bán một số ô biệt thự tại dự án Thanh Hà Cienco 5 Hà Đông, Hà Nội. Giá rẻ nhất hiện nay, người mua hoặc các nhà đầu tư cứ vào tiền là có lãi vì đất nền ở đây đang có giá rẻ nhất khu vực " data-duration="5 ngày trước" data-updatedtime="08/11/2020" data-datesort="11/08/2020 06:07:31" data-contactname="Đoàn Sơn" data-contactmobile="0989157866" data-url="/ban-dat-nen-du-an-phuong-kien-hung-prj-khu-do-thi-thanh-ha-muong-thanh/ban-biet-thu-gia-re-vi-tri-dep-cam-ket-dau-tu-la-co-lai-lh-0989-157-866-pr27709068" data-totalmedia="4" data-createbyuser="294078"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1266558">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-xa-di-trach-prj-khu-do-thi-kim-chung-di-trach/ban-lien-ke-0988-03-03-03-pr27702507" title="Bán liền kề Kim Chung Di Trạch, LH 0988.03.03.03" onclick="">
                            <img class="product-avatar-img" alt="Bán liền kề Kim Chung Di Trạch, LH 0988.03.03.03" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/07/20201107105652-8fcc_wm.jpg" is-lazy-image="true" lazy-id="21">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-xa-di-trach-prj-khu-do-thi-kim-chung-di-trach/ban-lien-ke-0988-03-03-03-pr27702507" title="Bán liền kề Kim Chung Di Trạch, LH 0988.03.0*.**" class="vipZero product-link" style="overflow: visible;">
                                BÁN LIỀN KỀ KIM CHUNG DI TRẠCH, LH <span class="hidden-mobile m-on-title" raw="0988.03.03.03">0988.03.0*.**</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hoài Đức, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Tôi cần bán đất nền dự án Kim Chung Di Trạch. - Liền kề 18 ô 4x, nhìn ra khu cây xanh giá 3x tr/m2. - Liền kề 12, đường 12 m, giá 3x tr/m2. - Liền kề 16 đường 33 m, đã nộp xây thô tiện mở văn phòng, 
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
                                    <i class="iconSave" data-productid="27702507" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n liền kề Kim Chung Di Trạch, LH 0988.03.03.03&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/07/20201107105652-8fcc_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/07/20201107105652-8fcc_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán liền kề Kim Chung Di Trạch, LH 0988.03.03.03" data-price="Giá thỏa thuận" data-area="Không xác định" data-pricesort="0" data-areasort="0" data-room="0" data-toilets="0" data-address="Hoài Đức, Hà Nội" data-description="Tôi cần bán đất nền dự án Kim Chung Di Trạch. - Liền kề 18 ô 4x, nhìn ra khu cây xanh giá 3x tr/m2. - Liền kề 12, đường 12 m, giá 3x tr/m2. - Liền kề 16 đường 33 m, đã nộp xây thô tiện mở văn phòng, " data-duration="6 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 10:57:54" data-contactname="Công Ty Cổ Phần Bđs Sinh Land" data-contactmobile="0988030303" data-url="/ban-dat-nen-du-an-xa-di-trach-prj-khu-do-thi-kim-chung-di-trach/ban-lien-ke-0988-03-03-03-pr27702507" data-totalmedia="1" data-createbyuser="1266558"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 vipaddon product-item clearfix" uid="120839">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-le-hong-phong-xa-long-tho-prj-khu-do-thi-moi-long-tho/-so-phuoc-15x20-20m-gia-5-5tr-m2-pr27693711" title="Đất nền sổ đỏ khu Long Thọ Phước An (15x20m), đường 20m, giá 5.5tr/m2" onclick="">
                            <img class="product-avatar-img" alt="Đất nền sổ đỏ khu Long Thọ Phước An (15x20m), đường 20m, giá 5.5tr/m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="22"><img src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" is-lazy-image="true" lazy-id="23"><img src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" is-lazy-image="true" lazy-id="24">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-le-hong-phong-xa-long-tho-prj-khu-do-thi-moi-long-tho/-so-phuoc-15x20-20m-gia-5-5tr-m2-pr27693711" title="Đất nền sổ đỏ khu Long Thọ Phước An (15x20m), đường 20m, giá 5.5tr/m2" class="vipZero product-link">
                                ĐẤT NỀN SỔ ĐỎ KHU LONG THỌ PHƯỚC AN (15X20M), ĐƯỜNG 20M, GIÁ 5.5TR/M2
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">5.5 triệu/m²</span>
                                <span class="dot">·</span>
                                <span class="area">300 m²</span>
                                                    <span class="location">Nhơn Trạch, Đồng Nai</span>
                        </div>
                        <div class="product-content">
                            Đất nền sổ đỏ Nhơn Trạch, Đồng Nai: Với DT(15x20m)=300m2, hướng Đông Bắc, đường nhựa 20m, cạnh trục đường Huỳnh Thúc Kháng. Mua bán ra công chứng. Dự án khu đô thị Long Thọ, Nhơn Trạch, Đồng Nai, quy hoạch đồng bộ, hiện đại: Điện âm, nước máy, Internet tốc độ cao. Công trình tiện ích đầy đủ như: Công viên, trường học các cấp, trung tâm thương mại, trung tâm VH - TDTT. Đất nền s
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    1 tuần trước
                                    <span class="tooltip-time">06/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Hà Việt Quốc">
                                    <span class="contact-name">Hà Việt Quốc</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0948456111" raw="0948456111">0948 456 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27693711" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Đất nền sổ đỏ khu Long Thọ Phước An (15x20m), đường 20m, gi&amp;#225; 5.5tr/m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImageAddon.svg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Đất nền sổ đỏ khu Long Thọ Phước An (15x20m), đường 20m, giá 5.5tr/m2" data-price="5.5 triệu/m²" data-area="300 m²" data-pricesort="1650000000" data-areasort="300" data-room="0" data-toilets="0" data-address="Nhơn Trạch, Đồng Nai" data-description="Đất nền sổ đỏ Nhơn Trạch, Đồng Nai: Với DT(15x20m)=300m2, hướng Đông Bắc, đường nhựa 20m, cạnh trục đường Huỳnh Thúc Kháng. Mua bán ra công chứng. Dự án khu đô thị Long Thọ, Nhơn Trạch, Đồng Nai, quy hoạch đồng bộ, hiện đại: Điện âm, nước máy, Internet tốc độ cao. Công trình tiện ích đầy đủ như: Công viên, trường học các cấp, trung tâm thương mại, trung tâm VH - TDTT. Đất nền s" data-duration="1 tuần trước" data-updatedtime="06/11/2020" data-datesort="11/06/2020 15:15:32" data-contactname="Hà Việt Quốc" data-contactmobile="0948456111" data-url="/ban-dat-nen-du-an-duong-le-hong-phong-xa-long-tho-prj-khu-do-thi-moi-long-tho/-so-phuoc-15x20-20m-gia-5-5tr-m2-pr27693711" data-totalmedia="0" data-createbyuser="120839"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1503809">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-doan-khue-1-phuong-khue-my-prj-khu-do-thi-nam-cau-tuyen-son/can-tien-ban-gap-lo-viet-a-gia-re-nhat-truong-pr27691037" title="Cần tiền bán gấp lô Đoàn Khuê, Nam Việt Á, giá rẻ nhất thị trường" onclick="">
                            <img class="product-avatar-img" alt="Cần tiền bán gấp lô Đoàn Khuê, Nam Việt Á, giá rẻ nhất thị trường" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106090258-c087_wm.jpg" is-lazy-image="true" lazy-id="25">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-doan-khue-1-phuong-khue-my-prj-khu-do-thi-nam-cau-tuyen-son/can-tien-ban-gap-lo-viet-a-gia-re-nhat-truong-pr27691037" title="Cần tiền bán gấp lô Đoàn Khuê, Nam Việt Á, giá rẻ nhất thị trường" class="vipZero product-link">
                                CẦN TIỀN BÁN GẤP LÔ ĐOÀN KHUÊ, NAM VIỆT Á, GIÁ RẺ NHẤT THỊ TRƯỜNG
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">4.55 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">95 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Ngũ Hành Sơn, Đà Nẵng</span>
                        </div>
                        <div class="product-content">
                            Chính chủ nợ cần tiền bán gấp lô đất Đoàn Khuê, Nam Việt Á. + Diện tích: 5x19m = 95m2. + Sổ đỏ chính chủ. + Hướng: Đông Bắc. + Khu dân cư đông đúc. + Cách chợ Khuê Mỹ 1,5km. + Gần trường tiểu học, tr
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
                                    <i class="iconSave" data-productid="27691037" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần tiền b&amp;#225;n gấp l&amp;#244; Đo&amp;#224;n Khu&amp;#234;, Nam Việt &amp;#193;, gi&amp;#225; rẻ nhất thị trường&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106090258-c087_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/06/20201106090258-c087_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần tiền bán gấp lô Đoàn Khuê, Nam Việt Á, giá rẻ nhất thị trường" data-price="4.55 tỷ" data-area="95 m²" data-pricesort="4550000000" data-areasort="95" data-room="0" data-toilets="0" data-address="Ngũ Hành Sơn, Đà Nẵng" data-description="Chính chủ nợ cần tiền bán gấp lô đất Đoàn Khuê, Nam Việt Á. + Diện tích: 5x19m = 95m2. + Sổ đỏ chính chủ. + Hướng: Đông Bắc. + Khu dân cư đông đúc. + Cách chợ Khuê Mỹ 1,5km. + Gần trường tiểu học, tr" data-duration="1 tuần trước" data-updatedtime="06/11/2020" data-datesort="11/06/2020 12:07:53" data-contactname="Diep Thi Phuong Oanh" data-contactmobile="0905611869" data-url="/ban-dat-nen-du-an-duong-doan-khue-1-phuong-khue-my-prj-khu-do-thi-nam-cau-tuyen-son/can-tien-ban-gap-lo-viet-a-gia-re-nhat-truong-pr27691037" data-totalmedia="3" data-createbyuser="1503809"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 vipaddon product-item clearfix" uid="282483">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-xa-phuoc-an-1-prj-khu-do-thi-moi-long-tho/mua-b-ky-gui-xdhn-hud-so-hong-rieng-gia-hop-ly-lien-he-0981-880-800-pr16298933" title="Bán đất nền dự án XDHN và HUD, vị trí đẹp, giá đầu tư. DT đa dạng 100m2, 140m2, 300m2, 1000m2" onclick="">
                            <img class="product-avatar-img" alt="Bán đất nền dự án XDHN và HUD, vị trí đẹp, giá đầu tư. DT đa dạng 100m2, 140m2, 300m2, 1000m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609003424-a4ec_wm.jpg" is-lazy-image="true" lazy-id="26"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609003519-2beb_wm.jpg" is-lazy-image="true" lazy-id="27"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609004239-92a4_wm.jpg" is-lazy-image="true" lazy-id="28">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-xa-phuoc-an-1-prj-khu-do-thi-moi-long-tho/mua-b-ky-gui-xdhn-hud-so-hong-rieng-gia-hop-ly-lien-he-0981-880-800-pr16298933" title="Bán đất nền dự án XDHN và HUD, vị trí đẹp, giá đầu tư. DT đa dạng 100m2, 140m2, 300m2, 1000m2" class="vipZero product-link">
                                BÁN ĐẤT NỀN DỰ ÁN XDHN VÀ HUD, VỊ TRÍ ĐẸP, GIÁ ĐẦU TƯ. DT ĐA DẠNG 100M2, 140M2, 300M2, 1000M2
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">5.7 triệu/m²</span>
                                <span class="dot">·</span>
                                <span class="area">300 m²</span>
                                                    <span class="location">Nhơn Trạch, Đồng Nai</span>
                        </div>
                        <div class="product-content">
                            Mua bán, nhận ký gửi đất dự án XDHN và dự án HUD do tổng Cty Xây Dựng Hà Nội và Cty Phát Triển nhà và đô thị làm chủ đầu tư. Quy mô: Dự án XDHN (151 ha) và dự án HUD (223ha). Đa dạng các loại nền: Nhà phố, nhà vườn, liền kề, song lập, biệt thự. - Diện tích đa dạng: 100m2, 140m2, 300m2. 1000m2. - Sổ hồng đầy đủ, không vướng tranh chấp, có thể sang tên ngay. - Giá bán chỉ từ 5,7 
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    1 tuần trước
                                    <span class="tooltip-time">06/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Ca Phú Quí">
                                    <span class="contact-name">Ca Phú Quí</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0981883999" raw="0981883999">0981 883 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="16298933" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n đất nền dự &amp;#225;n XDHN v&amp;#224; HUD, vị tr&amp;#237; đẹp, gi&amp;#225; đầu tư. DT đa dạng 100m2, 140m2, 300m2, 1000m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609003424-a4ec_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609003519-2beb_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/09/20200609004239-92a4_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/06/09/20200609003424-a4ec_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án XDHN và HUD, vị trí đẹp, giá đầu tư. DT đa dạng 100m2, 140m2, 300m2, 1000m2" data-price="5.7 triệu/m²" data-area="300 m²" data-pricesort="1710000000" data-areasort="300" data-room="0" data-toilets="0" data-address="Nhơn Trạch, Đồng Nai" data-description="Mua bán, nhận ký gửi đất dự án XDHN và dự án HUD do tổng Cty Xây Dựng Hà Nội và Cty Phát Triển nhà và đô thị làm chủ đầu tư. Quy mô: Dự án XDHN (151 ha) và dự án HUD (223ha). Đa dạng các loại nền: Nhà phố, nhà vườn, liền kề, song lập, biệt thự. - Diện tích đa dạng: 100m2, 140m2, 300m2. 1000m2. - Sổ hồng đầy đủ, không vướng tranh chấp, có thể sang tên ngay. - Giá bán chỉ từ 5,7 " data-duration="1 tuần trước" data-updatedtime="06/11/2020" data-datesort="11/06/2020 10:57:11" data-contactname="Ca Phú Quí" data-contactmobile="0981883999" data-url="/ban-dat-nen-du-an-xa-phuoc-an-1-prj-khu-do-thi-moi-long-tho/mua-b-ky-gui-xdhn-hud-so-hong-rieng-gia-hop-ly-lien-he-0981-880-800-pr16298933" data-totalmedia="6" data-createbyuser="282483"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="562616">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-dt753-xa-tan-phuoc-5-prj-prime-city/tac-tac-vg-mo-b-gia-f0-cho-nha-dau-tu-gia-chi-330tr-lh-0909848081-pr27687649" title="Đất nền sổ đỏ - phân khúc giá rẻ được giới đầu tư quan tâm nhất năm 2020, LH: 0909848081" onclick="">
                            <img class="product-avatar-img" alt="Đất nền sổ đỏ - phân khúc giá rẻ được giới đầu tư quan tâm nhất năm 2020, LH: 0909848081" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106094110-6a1c_wm.jpg" is-lazy-image="true" lazy-id="29">
                        </a>
                        <span class="product-feature">
                                                                                <img src="./assets/image/ic_video.svg">
                        </span>
                            <span class="product-media">10</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-dt753-xa-tan-phuoc-5-prj-prime-city/tac-tac-vg-mo-b-gia-f0-cho-nha-dau-tu-gia-chi-330tr-lh-0909848081-pr27687649" title="Đất nền sổ đỏ - phân khúc giá rẻ được giới đầu tư quan tâm nhất năm 2020, LH: 0909848***" class="vipZero product-link" style="overflow: visible;">
                                ĐẤT NỀN SỔ ĐỎ - PHÂN KHÚC GIÁ RẺ ĐƯỢC GIỚI ĐẦU TƯ QUAN TÂM NHẤT NĂM 2020, LH: <span class="hidden-mobile m-on-title" raw="0909848081">0909848***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Đồng Phú, Bình Phước</span>
                        </div>
                        <div class="product-content">
                            Chỉ có ngành công nghiệp mới có thể khiến một đất nước trở nên hùng mạnh! Hoan nghênh quý nhà đầu tư đến với khu công nghiệp Becamex - Bình Phước. Đầu tư đất KCN giúp kiếm tiền ổn định hơn so với đầu
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
                                    <i class="iconSave" data-productid="27687649" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Đất nền sổ đỏ - ph&amp;#226;n kh&amp;#250;c gi&amp;#225; rẻ được giới đầu tư quan t&amp;#226;m nhất năm 2020, LH: 0909848081&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106094110-6a1c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/06/20201106094110-6a1c_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="true" data-title="Đất nền sổ đỏ - phân khúc giá rẻ được giới đầu tư quan tâm nhất năm 2020, LH: 0909848081" data-price="Giá thỏa thuận" data-area="100 m²" data-pricesort="0" data-areasort="100" data-room="0" data-toilets="0" data-address="Đồng Phú, Bình Phước" data-description="Chỉ có ngành công nghiệp mới có thể khiến một đất nước trở nên hùng mạnh! Hoan nghênh quý nhà đầu tư đến với khu công nghiệp Becamex - Bình Phước. Đầu tư đất KCN giúp kiếm tiền ổn định hơn so với đầu" data-duration="1 tuần trước" data-updatedtime="06/11/2020" data-datesort="11/06/2020 09:48:38" data-contactname="Trần Phương Nam" data-contactmobile="0934105081" data-url="/ban-dat-nen-du-an-duong-dt753-xa-tan-phuoc-5-prj-prime-city/tac-tac-vg-mo-b-gia-f0-cho-nha-dau-tu-gia-chi-330tr-lh-0909848081-pr27687649" data-totalmedia="10" data-createbyuser="562616"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="text-center">
                <div class="pagination">
    <a pid="1" class="actived" href="https://batdongsan.com.vn/ban-dat-nen-du-an">1</a>
    <a pid="2" class="" href="https://batdongsan.com.vn/ban-dat-nen-du-an/p2">2</a>
    <a pid="3" class="" href="https://batdongsan.com.vn/ban-dat-nen-du-an/p3">3</a>
    <a pid="4" class="" href="https://batdongsan.com.vn/ban-dat-nen-du-an/p4">4</a>
    <a pid="5" class="" href="https://batdongsan.com.vn/ban-dat-nen-du-an/p5">5</a>
    <a pid="830" href="https://batdongsan.com.vn/ban-dat-nen-du-an/p830"><img src="./assets/image/ic_double_caret_right.png"></a>
    </div>
    
            </div>
        </div>
    
    
    
    
    
    
        <div class="divide">&nbsp;</div>
    <div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Bán đất nền giá rẻ" href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-gia-re">Bán đất nền giá rẻ</a></li>    <li><a title="Bán đất gần chợ Lái Thiêu" href="https://batdongsan.com.vn/tags/ban/ban-dat-gan-cho-lai-thieu">Bán đất gần chợ Lái Thiêu</a></li>    <li><a title="Bán đất nền giá rẻ Quận 7" href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-gia-re-quan-7">Bán đất nền giá rẻ Quận 7</a></li>    <li><a title="Bán đất nền giá rẻ Tp.HCM" href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-gia-re-tphcm">Bán đất nền giá rẻ Tp.HCM</a></li>    <li><a title="Bán đất giá rẻ Bình Dương" href="https://batdongsan.com.vn/tags/ban/ban-dat-gia-re-binh-duong">Bán đất giá rẻ Bình Dương</a></li>    <li><a title="Bán đất giá rẻ Quận 8" href="https://batdongsan.com.vn/tags/ban/ban-dat-gia-re-quan-8">Bán đất giá rẻ Quận 8</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
        <div class="product-seo-text">
            <strong>Batdongsan.com.vn</strong> kênh thông tin <strong>mua bán đất nền dự án giá tốt tại Việt Nam</strong>. 
                                    Cung cấp thông tin mua bán, sang nhượng, trao đổi đất nền dự án, đất nền phân lô, đất liền kề dự án , đất nền biệt thự... tại Việt Nam  - Việt Nam, 
                                    mang đến cơ hội mua bán bất động sản để ở hoạc đầu tư bất động sản có khả năng sinh lời tốt. Batdongsan.com.vn mang đến nguồn thông tin một cách đầy đủ, 
                                    chính xác sẽ giúp bạn dễ dàng tìm hiểu và nắm bắt thông tin về các dự án đất nền giá rẻ tại Việt Nam. 
                                    Hãy chọn Batdongsan.com.vn là kênh thông tin <strong>mua bán đất nền</strong> Việt Nam của bạn.
        </div>
    <form id="productListBinnova" method="post">
        <input id="hashAlias" type="hidden" value="72d841a45265af55bf7c2ea91110050dc85065356c82daf36ca8bed237af8e4d">
    </form>
    <script type="text/javascript">
        (function callJQuery() {
            if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
                var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                    getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                    model: {
                        typeOfProduct: 38,
                        categoryId: 40,
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
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/-1/2/-1/-1" title="Bán đất nền dự án Việt Nam giá 500 - 800 triệu">500 - 800 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/-1/3/-1/-1" title="Bán đất nền dự án Việt Nam giá 800 triệu - 1 tỷ">800 triệu - 1 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/-1/4/-1/-1" title="Bán đất nền dự án Việt Nam giá 1 - 2 tỷ">1 - 2 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/-1/5/-1/-1" title="Bán đất nền dự án Việt Nam giá 2 - 3 tỷ">2 - 3 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/-1/6/-1/-1" title="Bán đất nền dự án Việt Nam giá 3 - 5 tỷ">3 - 5 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/-1/7/-1/-1" title="Bán đất nền dự án Việt Nam giá 5 - 7 tỷ">5 - 7 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/-1/8/-1/-1" title="Bán đất nền dự án Việt Nam giá 7 - 10 tỷ">7 - 10 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/-1/9/-1/-1" title="Bán đất nền dự án Việt Nam giá 10 - 20 tỷ">10 - 20 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/-1/10/-1/-1" title="Bán đất nền dự án Việt Nam giá 20 - 30 tỷ">20 - 30 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/-1/11/-1/-1" title="Bán đất nền dự án Việt Nam giá &gt; 30 tỷ">&gt; 30 tỷ</a></li>
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
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/1/-1/-1/-1" title="Bán đất nền dự án Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/2/-1/-1/-1" title="Bán đất nền dự án Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/3/-1/-1/-1" title="Bán đất nền dự án Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/4/-1/-1/-1" title="Bán đất nền dự án Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/5/-1/-1/-1" title="Bán đất nền dự án Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/6/-1/-1/-1" title="Bán đất nền dự án Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/7/-1/-1/-1" title="Bán đất nền dự án Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/8/-1/-1/-1" title="Bán đất nền dự án Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/9/-1/-1/-1" title="Bán đất nền dự án Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-dat-nen-du-an/10/-1/-1/-1" title="Bán đất nền dự án Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
            <h2 class="box-title">Bán đất nền dự án</h2>
    
            <div class="box-content link-hover-blue">
                <ul>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-tp-hcm" title="Bán đất nền dự án tại Hồ Chí Minh">
                                    Hồ Chí Minh (5290)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-dong-nai" title="Bán đất nền dự án tại Đồng Nai">
                                    Đồng Nai (1617)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-binh-duong" title="Bán đất nền dự án tại Bình Dương">
                                    Bình Dương (1271)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-long-an" title="Bán đất nền dự án tại Long An">
                                    Long An (1020)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-ha-noi" title="Bán đất nền dự án tại Hà Nội">
                                    Hà Nội (941)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-phu-tho" title="Bán đất nền dự án tại Phú Thọ">
                                    Phú Thọ (7)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-quang-tri" title="Bán đất nền dự án tại Quảng Trị">
                                    Quảng Trị (11)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-vinh-long" title="Bán đất nền dự án tại Vĩnh Long">
                                    Vĩnh Long (89)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-da-nang" title="Bán đất nền dự án tại Đà Nẵng">
                                    Đà Nẵng (630)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-hoa-binh" title="Bán đất nền dự án tại Hòa Bình">
                                    Hòa Bình (49)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-an-giang" title="Bán đất nền dự án tại An Giang">
                                    An Giang (9)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-binh-thuan" title="Bán đất nền dự án tại Bình Thuận  ">
                                    Bình Thuận   (202)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-dak-nong" title="Bán đất nền dự án tại Đắk Nông">
                                    Đắk Nông (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-lam-dong" title="Bán đất nền dự án tại Lâm Đồng">
                                    Lâm Đồng (871)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-kon-tum" title="Bán đất nền dự án tại Kon Tum">
                                    Kon Tum (67)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-quang-binh" title="Bán đất nền dự án tại Quảng Bình">
                                    Quảng Bình (29)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-vinh-phuc" title="Bán đất nền dự án tại Vĩnh Phúc">
                                    Vĩnh Phúc (179)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-hung-yen" title="Bán đất nền dự án tại Hưng Yên">
                                    Hưng Yên (66)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-tien-giang" title="Bán đất nền dự án tại Tiền Giang">
                                    Tiền Giang (8)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-hau-giang" title="Bán đất nền dự án tại Hậu Giang">
                                    Hậu Giang (59)
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
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-hai-chau-ddn" title="Bán đất nền Hải Châu">
                                        Bán đất nền Hải Châu
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-cau-giay" title="Bán đất nền Cầu Giấy">
                                        Bán đất nền Cầu Giấy
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-hoai-duc" title="Bán đất nền Hoài Đức">
                                        Bán đất nền Hoài Đức
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-tu-liem" title="Bán đất nền Từ Liêm">
                                        Bán đất nền Từ Liêm
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-tan-phu" title="Bán đất nền Tân Phú">
                                        Bán đất nền Tân Phú
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-tay-ho" title="Bán đất nền Tây Hồ">
                                        Bán đất nền Tây Hồ
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-long-bien" title="Bán đất nền Long Biên">
                                        Bán đất nền Long Biên
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-dan-phuong" title="Bán đất nền Đan Phượng">
                                        Bán đất nền Đan Phượng
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-kinh-hp" title="Bán đất nền Dương Kinh">
                                        Bán đất nền Dương Kinh
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-hai-an-hp" title="Bán đất nền Hải An">
                                        Bán đất nền Hải An
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-quoc-oai" title="Bán đất nền Quốc Oai">
                                        Bán đất nền Quốc Oai
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-thanh-khe-ddn" title="Bán đất nền Thanh Khê">
                                        Bán đất nền Thanh Khê
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-gia-lam" title="Bán đất nền Gia Lâm">
                                        Bán đất nền Gia Lâm
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-quan-3" title="Bán đất nền Quận 3">
                                        Bán đất nền Quận 3
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-quan-1" title="Bán đất nền Quận 1">
                                        Bán đất nền Quận 1
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-thong-nhat-dna" title="Bán đất nền Thống Nhất">
                                        Bán đất nền Thống Nhất
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
            