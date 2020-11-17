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
                    <div class="custom-value hasvalue">Nhà mặt phố</div>
                </div>
                <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="163">
                <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                        <li vl="0"><span class="current">Tất cả nhà đất</span></li>
                                        <li vl="324"><span>Căn hộ chung cư</span></li>
                                        <li vl="362"><span>Các loại nhà bán</span>
                                            <ul>
                                                <li vl="41"><span>Nhà riêng</span></li>
                                                <li vl="325"><span>Nhà biệt thự, liền kề</span></li>
                                                <li vl="163"><span class="active">Nhà mặt phố</span></li>
                                            </ul>
                                        </li>
                                        <li vl="361"><span>Các loại đất bán</span>
                                            <ul>
                                                <li vl="40"><span>Đất nền dự án</span></li>
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
                            <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-nha-mat-pho#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-nha-mat-pho#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                            <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-nha-mat-pho#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-nha-mat-pho#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                    categoryId: 163,
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
        <a href="https://batdongsan.com.vn/ban-nha-mat-pho" level="1" title="Bán nhà mặt phố tại Việt Nam">Bán</a><span>/</span><a href="https://batdongsan.com.vn/ban-nha-mat-pho" level="2" title="Bán nhà mặt phố tại Việt Nam">Nhà mặt phố trên toàn quốc</a>
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
        <h1>Bán nhà mặt phố tại Việt Nam</h1>
            <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">20,529</span> bất động sản.</div>
        
    
    </div>
        <div class="product-search-most mar-top-8 mar-bot-8">
            <div class="box-title">Các khu vực, địa điểm nổi bật</div>
            <ul class="clearfix link-hover-blue">
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng-quan-12">Bán nhà Quận 12</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng-quan-2">Bán nhà Quận 2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng-tan-phu">Bán nhà Quận Tân Phú</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng-tan-binh">Bán nhà Quận Tân Bình</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng-thu-duc">Bán nhà Quận Thủ Đức</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng-go-vap">Bán nhà Quận Gò Vấp</a></li>
            </ul>
        </div>
    
        <div class="product-nav-bar pad-top-8 clearfix">
            <ul class="ul-tab fl mar-right-16">
                <li class="list-display actived">Danh sách</li>
                <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
                <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-ban-nha-mat-pho">Bản đồ</a></li>
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
                <div class="vip0 product-item clearfix" uid="370259">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-5b-65/ban-ngay-khu-ten-lua-binh-tan-xay-full-moi-dep-ngay-trung-tam-thuong-mai-pr27147962" title="Bán nhà mặt phố đường 5B ngay Khu Tên Lửa Bình Tân xây full, nhà mới đẹp ngay trung tâm thương mại" onclick="">
                            <img class="product-avatar-img" alt="Bán nhà mặt phố đường 5B ngay Khu Tên Lửa Bình Tân xây full, nhà mới đẹp ngay trung tâm thương mại" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20200923144811-aa53_wm.jpg" is-lazy-image="true" lazy-id="0">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">16</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-5b-65/ban-ngay-khu-ten-lua-binh-tan-xay-full-moi-dep-ngay-trung-tam-thuong-mai-pr27147962" title="Bán nhà mặt phố đường 5B ngay Khu Tên Lửa Bình Tân xây full, nhà mới đẹp ngay trung tâm thương mại" class="vipZero product-link">
                                BÁN NHÀ MẶT PHỐ ĐƯỜNG 5B NGAY KHU TÊN LỬA BÌNH TÂN XÂY FULL, NHÀ MỚI ĐẸP NGAY TRUNG TÂM THƯƠNG MẠI
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">10.3 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bình Tân, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Bán nhà mặt phố đường 5B ngay Khu Tên Lửa Bình Tân, diện tích 5*20=100m2 xây full 1 trệt 3 lầu, xe hơi có thể để trong nhà, bước mấy bước là tới siêu thị Aeon Mall, bệnh viện Quốc Tế City, trước mặt 
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
                                    <i class="iconSave" data-productid="27147962" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; mặt phố đường 5B ngay Khu T&amp;#234;n Lửa B&amp;#236;nh T&amp;#226;n x&amp;#226;y full, nh&amp;#224; mới đẹp ngay trung t&amp;#226;m thương mại&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/23/20200923144811-aa53_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/23/20200923144811-aa53_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà mặt phố đường 5B ngay Khu Tên Lửa Bình Tân xây full, nhà mới đẹp ngay trung tâm thương mại" data-price="10.3 tỷ" data-area="100 m²" data-pricesort="10300000000" data-areasort="100" data-room="5" data-toilets="6" data-address="Bình Tân, Hồ Chí Minh" data-description="Bán nhà mặt phố đường 5B ngay Khu Tên Lửa Bình Tân, diện tích 5*20=100m2 xây full 1 trệt 3 lầu, xe hơi có thể để trong nhà, bước mấy bước là tới siêu thị Aeon Mall, bệnh viện Quốc Tế City, trước mặt " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 11:04:52" data-contactname="Mã Thi Trung Dung" data-contactmobile="0909354839" data-url="/ban-nha-mat-pho-duong-5b-65/ban-ngay-khu-ten-lua-binh-tan-xay-full-moi-dep-ngay-trung-tam-thuong-mai-pr27147962" data-totalmedia="16" data-createbyuser="370259"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1507539">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-618-xa-phuoc-hiep/dinh-cu-can-ban-gap-biet-thu-huong-dong-2-tien-xe-tai-tranh-nhau-pr27748403" title="Định cư cần bán gấp biệt thự 2 mặt tiền xe tải. Thuận tiện kinh doanh, tặng kèm nội thất bên trong" onclick="">
                            <img class="product-avatar-img" alt="Định cư cần bán gấp biệt thự 2 mặt tiền xe tải. Thuận tiện kinh doanh, tặng kèm nội thất bên trong" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201111095604-5ddd_wm.jpg" is-lazy-image="true" lazy-id="1">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">11</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-618-xa-phuoc-hiep/dinh-cu-can-ban-gap-biet-thu-huong-dong-2-tien-xe-tai-tranh-nhau-pr27748403" title="Định cư cần bán gấp biệt thự 2 mặt tiền xe tải. Thuận tiện kinh doanh, tặng kèm nội thất bên trong" class="vipZero product-link">
                                ĐỊNH CƯ CẦN BÁN GẤP BIỆT THỰ 2 MẶT TIỀN XE TẢI. THUẬN TIỆN KINH DOANH, TẶNG KÈM NỘI THẤT BÊN TRONG
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">9.6 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">1328 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Củ Chi, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            - Cần bán biệt thự 2 mặt tiền bao gồm 10 phòng ngủ và 10 WC trong mỗi phòng. Có hồ bơi. - Mặt tiền đường nên rất thích hợp cho thuê hoặc kinh doanh văn phòng, trường học... - Đang kinh doanh mầm non,
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
                                    <i class="iconSave" data-productid="27748403" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Định cư cần b&amp;#225;n gấp biệt thự 2 mặt tiền xe tải. Thuận tiện kinh doanh, tặng k&amp;#232;m nội thất b&amp;#234;n trong&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111095604-5ddd_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111095604-5ddd_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Định cư cần bán gấp biệt thự 2 mặt tiền xe tải. Thuận tiện kinh doanh, tặng kèm nội thất bên trong" data-price="9.6 tỷ" data-area="1328 m²" data-pricesort="9600000000" data-areasort="1328" data-room="10" data-toilets="10" data-address="Củ Chi, Hồ Chí Minh" data-description="- Cần bán biệt thự 2 mặt tiền bao gồm 10 phòng ngủ và 10 WC trong mỗi phòng. Có hồ bơi. - Mặt tiền đường nên rất thích hợp cho thuê hoặc kinh doanh văn phòng, trường học... - Đang kinh doanh mầm non," data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 14:51:47" data-contactname="Thực Nguyễn" data-contactmobile="0938290909" data-url="/ban-nha-mat-pho-duong-618-xa-phuoc-hiep/dinh-cu-can-ban-gap-biet-thu-huong-dong-2-tien-xe-tai-tranh-nhau-pr27748403" data-totalmedia="11" data-createbyuser="1507539"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="282289">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-pho-le-trong-tan-phuong-la-khe/chinh-chu-can-ban-ha-dong-pr27648615" title="Chính chủ Cần bán nhà đất mặt phố Lê Trọng Tấn, Hà Đông" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ Cần bán nhà đất mặt phố Lê Trọng Tấn, Hà Đông" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201103171451-deec.jpg" is-lazy-image="true" lazy-id="2">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-pho-le-trong-tan-phuong-la-khe/chinh-chu-can-ban-ha-dong-pr27648615" title="Chính chủ Cần bán nhà đất mặt phố Lê Trọng Tấn, Hà Đông" class="vipZero product-link">
                                CHÍNH CHỦ CẦN BÁN NHÀ ĐẤT MẶT PHỐ LÊ TRỌNG TẤN, HÀ ĐÔNG
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">11.2 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">81 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hà Đông, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Cần bán nhà mặt phố Lê Trọng Tấn - Hà Đông, diện tích 81m2 - 3 tầng - giá 11, x tỷ. + Vị trí nhà nằm trung tâm mặt phố Lê Trọng Tấn đường 56m vỉa hè rộng 8m, sổ đỏ phân lô, ô góc 2 mặt thoáng, đằng s
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
                                    <i class="iconSave" data-productid="27648615" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ Cần b&amp;#225;n nh&amp;#224; đất mặt phố L&amp;#234; Trọng Tấn, H&amp;#224; Đ&amp;#244;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/20201103171451-deec.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/03/20201103171451-deec.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ Cần bán nhà đất mặt phố Lê Trọng Tấn, Hà Đông" data-price="11.2 tỷ" data-area="81 m²" data-pricesort="11200000000" data-areasort="81" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="Cần bán nhà mặt phố Lê Trọng Tấn - Hà Đông, diện tích 81m2 - 3 tầng - giá 11, x tỷ. + Vị trí nhà nằm trung tâm mặt phố Lê Trọng Tấn đường 56m vỉa hè rộng 8m, sổ đỏ phân lô, ô góc 2 mặt thoáng, đằng s" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:18:36" data-contactname="Phạm Quang Kien" data-contactmobile="0865552368" data-url="/ban-nha-mat-pho-pho-le-trong-tan-phuong-la-khe/chinh-chu-can-ban-ha-dong-pr27648615" data-totalmedia="1" data-createbyuser="282289"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1101976">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-le-van-tho-phuong-8-12/ban-127-trung-tam-quan-go-vap-gan-cho-hanh-ng-tay-pr27742648" title="Bán nhà mặt 127 Lê Văn Thọ, trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây" onclick="">
                            <img class="product-avatar-img" alt="Bán nhà mặt 127 Lê Văn Thọ, trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110185937-3217_wm.jpg" is-lazy-image="true" lazy-id="3">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-le-van-tho-phuong-8-12/ban-127-trung-tam-quan-go-vap-gan-cho-hanh-ng-tay-pr27742648" title="Bán nhà mặt 127 Lê Văn Thọ, trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây" class="vipZero product-link">
                                BÁN NHÀ MẶT 127 LÊ VĂN THỌ, TRUNG TÂM QUẬN GÒ VẤP, GẦN CHỢ HẠNH THÔNG TÂY
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">22 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">104 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Gò Vấp, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Bán nhà mặt 127 Lê Văn Thọ, Gò Vấp. Trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây, đang cho thuê làm khách sạn. Diện tích 4x26m, SHR. Khu dân cư rất đông, hiện hữu, tiện ích xung quanh. Vị trí đẹp, n
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
                                    <i class="iconSave" data-productid="27742648" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; mặt 127 L&amp;#234; Văn Thọ, trung t&amp;#226;m quận G&amp;#242; Vấp, gần chợ Hạnh Th&amp;#244;ng T&amp;#226;y&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110185937-3217_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110185937-3217_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà mặt 127 Lê Văn Thọ, trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây" data-price="22 tỷ" data-area="104 m²" data-pricesort="22000000000" data-areasort="104" data-room="0" data-toilets="0" data-address="Gò Vấp, Hồ Chí Minh" data-description="Bán nhà mặt 127 Lê Văn Thọ, Gò Vấp. Trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây, đang cho thuê làm khách sạn. Diện tích 4x26m, SHR. Khu dân cư rất đông, hiện hữu, tiện ích xung quanh. Vị trí đẹp, n" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 19:02:46" data-contactname="Bé Hường" data-contactmobile="0794686866" data-url="/ban-nha-mat-pho-duong-le-van-tho-phuong-8-12/ban-127-trung-tam-quan-go-vap-gan-cho-hanh-ng-tay-pr27742648" data-totalmedia="6" data-createbyuser="1101976"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1158609">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-dinh-nhat-tan-phuong-hoa-an/ban-nhanh-khu-can-ho-va-dat-nen-son-thuy-3-tai-da-nang-pr27736803" title="Bán nhanh khu căn hộ mini Đinh Nhật Tân (Đà Nẵng) lợi nhuận 18 triệu/tháng" onclick="">
                            <img class="product-avatar-img" alt="Bán nhanh khu căn hộ mini Đinh Nhật Tân (Đà Nẵng) lợi nhuận 18 triệu/tháng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110115317-bb81_wm.jpg" is-lazy-image="true" lazy-id="4">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-dinh-nhat-tan-phuong-hoa-an/ban-nhanh-khu-can-ho-va-dat-nen-son-thuy-3-tai-da-nang-pr27736803" title="Bán nhanh khu căn hộ mini Đinh Nhật Tân (Đà Nẵng) lợi nhuận 18 triệu/tháng" class="vipZero product-link">
                                BÁN NHANH KHU CĂN HỘ MINI ĐINH NHẬT TÂN (ĐÀ NẴNG) LỢI NHUẬN 18 TRIỆU/THÁNG
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">3.85 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">124.5 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Cẩm Lệ, Đà Nẵng</span>
                        </div>
                        <div class="product-content">
                            Cần bán nhanh khu căn hộ mini Đinh Nhật Tân (Đà Nẵng) cơ hội trao tay, sinh lợi nhuận kép.Giá chỉ từ: 1,5 tỷ. Giấy tờ pháp lý đầy đủ. Cam kết lợi nhuận: Trên 18 triệu/1 tháng. Hiện trạng tất cả các p
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
                                    <i class="iconSave" data-productid="27736803" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nhanh khu căn hộ mini Đinh Nhật T&amp;#226;n (Đ&amp;#224; Nẵng) lợi nhuận 18 triệu/th&amp;#225;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110115317-bb81_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110115317-bb81_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhanh khu căn hộ mini Đinh Nhật Tân (Đà Nẵng) lợi nhuận 18 triệu/tháng" data-price="3.85 tỷ" data-area="124.5 m²" data-pricesort="3850000000" data-areasort="124.5" data-room="0" data-toilets="0" data-address="Cẩm Lệ, Đà Nẵng" data-description="Cần bán nhanh khu căn hộ mini Đinh Nhật Tân (Đà Nẵng) cơ hội trao tay, sinh lợi nhuận kép.Giá chỉ từ: 1,5 tỷ. Giấy tờ pháp lý đầy đủ. Cam kết lợi nhuận: Trên 18 triệu/1 tháng. Hiện trạng tất cả các p" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 14:24:46" data-contactname="Địa Ốc Minh Trần" data-contactmobile="0931933567" data-url="/ban-nha-mat-pho-duong-dinh-nhat-tan-phuong-hoa-an/ban-nhanh-khu-can-ho-va-dat-nen-son-thuy-3-tai-da-nang-pr27736803" data-totalmedia="6" data-createbyuser="1158609"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1505561">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-tan-ky-tan-quy-phuong-son-ky/chinh-chu-xin-100-ban-mtkd-di-bo-ra-sieu-thi-3-phut-pr27684611" title="Chính chủ xịn 100% bán nhà MTKD Tân KỲ TÂN QUÝ - đi bộ ra siêu thị 3 phút giá chỉ 12.9 tỷ TL" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ xịn 100% bán nhà MTKD Tân KỲ TÂN QUÝ - đi bộ ra siêu thị 3 phút giá chỉ 12.9 tỷ TL" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/rLrM7JPN/20201109165252-9c61_wm.jpg" is-lazy-image="true" lazy-id="5">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">14</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-tan-ky-tan-quy-phuong-son-ky/chinh-chu-xin-100-ban-mtkd-di-bo-ra-sieu-thi-3-phut-pr27684611" title="Chính chủ xịn 100% bán nhà MTKD Tân KỲ TÂN QUÝ - đi bộ ra siêu thị 3 phút giá chỉ 12.9 tỷ TL" class="vipZero product-link">
                                CHÍNH CHỦ XỊN 100% BÁN NHÀ MTKD TÂN KỲ TÂN QUÝ - ĐI BỘ RA SIÊU THỊ 3 PHÚT GIÁ CHỈ 12.9 TỶ TL
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">12.9 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">164.2 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Tân Phú, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Nhà 1 trệt -2 lầu(trệt thông tuông tiện kinh doanh theo yêu cầu)- 3wc-4pn -1 mặt tiền đường (dự án mở rộng 30m)-1 mặt hẻm,nở hậu,thông thoáng-an ninh tốt. -Ngay kế bên trường mầm non của quận mới xây
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
                                    <i class="iconSave" data-productid="27684611" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ xịn 100% b&amp;#225;n nh&amp;#224; MTKD T&amp;#226;n KỲ T&amp;#194;N QU&amp;#221; - đi bộ ra si&amp;#234;u thị 3 ph&amp;#250;t gi&amp;#225; chỉ 12.9 tỷ TL&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/rLrM7JPN/20201109165252-9c61_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/rLrM7JPN/20201109165252-9c61_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ xịn 100% bán nhà MTKD Tân KỲ TÂN QUÝ - đi bộ ra siêu thị 3 phút giá chỉ 12.9 tỷ TL" data-price="12.9 tỷ" data-area="164.2 m²" data-pricesort="12900000000" data-areasort="164.2" data-room="4" data-toilets="3" data-address="Tân Phú, Hồ Chí Minh" data-description="Nhà 1 trệt -2 lầu(trệt thông tuông tiện kinh doanh theo yêu cầu)- 3wc-4pn -1 mặt tiền đường (dự án mở rộng 30m)-1 mặt hẻm,nở hậu,thông thoáng-an ninh tốt. -Ngay kế bên trường mầm non của quận mới xây" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 16:45:54" data-contactname="Quyên" data-contactmobile="0787270787" data-url="/ban-nha-mat-pho-duong-tan-ky-tan-quy-phuong-son-ky/chinh-chu-xin-100-ban-mtkd-di-bo-ra-sieu-thi-3-phut-pr27684611" data-totalmedia="14" data-createbyuser="1505561"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="364048">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-dt-719b-xa-tan-thanh-23-prj-thanh-long-bay/tap-doan-nam-group-mo-ban-dot-dau-2-tien-so-huu-vinh-vien-lh-0938-683-997-pr27675717" title=" MỞ BÁN ĐỢT ĐẦU NHÀ PHỐ 2 MẶT TIỀN - DỰ ÁN THANH LONG BAY - SỞ HỮU VĨNH VIỄN - LH: 0938.683.997" onclick="">
                            <img class="product-avatar-img" alt=" MỞ BÁN ĐỢT ĐẦU NHÀ PHỐ 2 MẶT TIỀN - DỰ ÁN THANH LONG BAY - SỞ HỮU VĨNH VIỄN - LH: 0938.683.997" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/05/20201105103712-9e56_wm.jpg" is-lazy-image="true" lazy-id="6">
                        </a>
                        <span class="product-feature">
                                                                                <img src="./assets/image/ic_video.svg">
                        </span>
                            <span class="product-media">7</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-dt-719b-xa-tan-thanh-23-prj-thanh-long-bay/tap-doan-nam-group-mo-ban-dot-dau-2-tien-so-huu-vinh-vien-lh-0938-683-997-pr27675717" title=" MỞ BÁN ĐỢT ĐẦU NHÀ PHỐ 2 MẶT TIỀN - DỰ ÁN THANH LONG BAY - SỞ HỮU VĨNH VIỄN - LH: 0938.683.***" class="vipZero product-link" style="overflow: visible;">
                                 MỞ BÁN ĐỢT ĐẦU NHÀ PHỐ 2 MẶT TIỀN - DỰ ÁN THANH LONG BAY - SỞ HỮU VĨNH VIỄN - LH: <span class="hidden-mobile m-on-title" raw="0938.683.997">0938.683.***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">1.5 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">108 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hàm Thuận Nam, Bình Thuận  </span>
                        </div>
                        <div class="product-content">
                            DỰ ÁN THANH LONG BAY DI CHUYỂN ĐẾN TPHCM CHỈ 2 GIỜ ĐỒNG HỒ ,NƠI ĐẦU TƯ ĐÓN ĐẦU SINH LỜI CAO Thanh Long Bay là tổ hợp đô thị nghỉ dưỡng và thể thao biển nằm tại xã Tân Thành, huyện Hàm Thuận Nam, tỉnh
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
                                    <i class="iconSave" data-productid="27675717" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot; MỞ B&amp;#193;N ĐỢT ĐẦU NH&amp;#192; PHỐ 2 MẶT TIỀN - DỰ &amp;#193;N THANH LONG BAY - SỞ HỮU VĨNH VIỄN - LH: 0938.683.997&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/05/20201105103712-9e56_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/05/20201105103712-9e56_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="true" data-title=" MỞ BÁN ĐỢT ĐẦU NHÀ PHỐ 2 MẶT TIỀN - DỰ ÁN THANH LONG BAY - SỞ HỮU VĨNH VIỄN - LH: 0938.683.997" data-price="1.5 tỷ" data-area="108 m²" data-pricesort="1500000000" data-areasort="108" data-room="3" data-toilets="4" data-address="Hàm Thuận Nam, Bình Thuận  " data-description="DỰ ÁN THANH LONG BAY DI CHUYỂN ĐẾN TPHCM CHỈ 2 GIỜ ĐỒNG HỒ ,NƠI ĐẦU TƯ ĐÓN ĐẦU SINH LỜI CAO Thanh Long Bay là tổ hợp đô thị nghỉ dưỡng và thể thao biển nằm tại xã Tân Thành, huyện Hàm Thuận Nam, tỉnh" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 15:38:23" data-contactname="Huynh Thanh Vu" data-contactmobile="0938683997" data-url="/ban-nha-mat-pho-duong-dt-719b-xa-tan-thanh-23-prj-thanh-long-bay/tap-doan-nam-group-mo-ban-dot-dau-2-tien-so-huu-vinh-vien-lh-0938-683-997-pr27675717" data-totalmedia="7" data-createbyuser="364048"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 vipaddon product-item clearfix" uid="1291356">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-to-huu-phuong-van-phuc-1-prj-him-lam-van-phuc/-land-chinh-thuc-ra-du-an-ha-dong-094-318-9939-pr27694219" title="Him Lam Land chính thức ra mắt dự án Him Lam Vạn Phúc Hà Đông: 094 318 9939" onclick="">
                            <img class="product-avatar-img" alt="Him Lam Land chính thức ra mắt dự án Him Lam Vạn Phúc Hà Đông: 094 318 9939" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106153332-6c37_wm.jpg" is-lazy-image="true" lazy-id="7"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106153332-057d_wm.jpg" is-lazy-image="true" lazy-id="8"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106153418-5b41_wm.jpg" is-lazy-image="true" lazy-id="9">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-to-huu-phuong-van-phuc-1-prj-him-lam-van-phuc/-land-chinh-thuc-ra-du-an-ha-dong-094-318-9939-pr27694219" title="Him Lam Land chính thức ra mắt dự án Him Lam Vạn Phúc Hà Đông: 094 318 9***" class="vipZero product-link" style="overflow: visible;">
                                HIM LAM LAND CHÍNH THỨC RA MẮT DỰ ÁN HIM LAM VẠN PHÚC HÀ ĐÔNG: <span class="hidden-mobile m-on-title" raw="094 318 9939">094 318 9***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">91 m²</span>
                                                    <span class="location">Hà Đông, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Him Lam Land chính thức Mở rộng "chào sân" thị trường bất động sản Miền Bắc:Ghi dấu ấn trên thị trường bất động sản với các dự án tầm cỡ, đầu tư bài bản, đáp ứng mọi giá trị thiết thực cho khách hàng và chủ đầu tư. Với liên tiếp các dự án đã thành công ở thị trường phía Nam, sẵn sàng " ra quân" tại thị trường BĐS phía Bắc.Cụ thể, trong năm 2020, Him Lam Land ghi danh trên bản đ
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    1 tuần trước
                                    <span class="tooltip-time">06/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Đoàn Nam">
                                    <span class="contact-name">Đoàn Nam</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0943189939" raw="0943189939">0943 189 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27694219" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Him Lam Land ch&amp;#237;nh thức ra mắt dự &amp;#225;n Him Lam Vạn Ph&amp;#250;c H&amp;#224; Đ&amp;#244;ng: 094 318 9939&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106153332-6c37_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106153332-057d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106153418-5b41_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/06/20201106153332-6c37_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Him Lam Land chính thức ra mắt dự án Him Lam Vạn Phúc Hà Đông: 094 318 9939" data-price="Giá thỏa thuận" data-area="91 m²" data-pricesort="0" data-areasort="91" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="Him Lam Land chính thức Mở rộng &quot;chào sân&quot; thị trường bất động sản Miền Bắc:Ghi dấu ấn trên thị trường bất động sản với các dự án tầm cỡ, đầu tư bài bản, đáp ứng mọi giá trị thiết thực cho khách hàng và chủ đầu tư. Với liên tiếp các dự án đã thành công ở thị trường phía Nam, sẵn sàng &quot; ra quân&quot; tại thị trường BĐS phía Bắc.Cụ thể, trong năm 2020, Him Lam Land ghi danh trên bản đ" data-duration="1 tuần trước" data-updatedtime="06/11/2020" data-datesort="11/06/2020 15:37:23" data-contactname="Đoàn Nam" data-contactmobile="0943189939" data-url="/ban-nha-mat-pho-duong-to-huu-phuong-van-phuc-1-prj-him-lam-van-phuc/-land-chinh-thuc-ra-du-an-ha-dong-094-318-9939-pr27694219" data-totalmedia="6" data-createbyuser="1291356"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 vipaddon product-item clearfix" uid="1498953">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-phan-thi-ut-phuong-tan-phu-19/-4-g-tien-p-quan-7-tp-hcm-pr27640278" title="Nhà 4 tầng mặt tiền Phan Thị Út, P. Tân Phú, Quận 7 TP. HCM" onclick="">
                            <img class="product-avatar-img" alt="Nhà 4 tầng mặt tiền Phan Thị Út, P. Tân Phú, Quận 7 TP. HCM" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/20201103093333-4ee3_wm.jpeg" is-lazy-image="true" lazy-id="10"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/20201103093437-eefb_wm.jpeg" is-lazy-image="true" lazy-id="11"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/20201103093345-9522_wm.jpeg" is-lazy-image="true" lazy-id="12">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">9</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-phan-thi-ut-phuong-tan-phu-19/-4-g-tien-p-quan-7-tp-hcm-pr27640278" title="Nhà 4 tầng mặt tiền Phan Thị Út, P. Tân Phú, Quận 7 TP. HCM" class="vipZero product-link">
                                NHÀ 4 TẦNG MẶT TIỀN PHAN THỊ ÚT, P. TÂN PHÚ, QUẬN 7 TP. HCM
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">7.89 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">54.8 m²</span>
                                                            <span class="dot">·</span>
                                    <span class="bedroom">4 PN</span>
                                    <span class="dot">·</span>
                                    <span class="toilet">4 WC</span>
                            <span class="location">Quận 7, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Nhà 4 tầng mặt tiền Phan Thị Út, P. Tân Phú, Quận 7 TP. HCM.Chinh chủ bán nhà 4 tầng mặt tiền Phan Thị Út P. Tân Phú Quận 7 TP. HCM.Giá 7 tỷ 890tr.Kêt cấu: 4x13,7m - trệt - lửng - 2 lầu - sân thượng 2 view thoáng mát.Vị trí: Ngay giao lộ Huỳnh Tấn Phát - Nguyễn Thị Thập, Siêu thị Big C, kế bên Phú Mỹ Hưng, bệnh viên Việt Pháp, Bách Hoá Xanh, Trường Đại học Rmit, Tôn Đức Thắng. 
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    1 tuần trước
                                    <span class="tooltip-time">03/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Nguyễn Hoàng Anh">
                                    <span class="contact-name">Nguyễn Hoàng Anh</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0962364959" raw="0962364959">0962 364 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27640278" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Nh&amp;#224; 4 tầng mặt tiền Phan Thị &amp;#218;t, P. T&amp;#226;n Ph&amp;#250;, Quận 7 TP. HCM&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/20201103093333-4ee3_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/20201103093437-eefb_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/20201103093345-9522_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/03/20201103093333-4ee3_wm.jpeg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Nhà 4 tầng mặt tiền Phan Thị Út, P. Tân Phú, Quận 7 TP. HCM" data-price="7.89 tỷ" data-area="54.8 m²" data-pricesort="7890000000" data-areasort="54.8" data-room="4" data-toilets="4" data-address="Quận 7, Hồ Chí Minh" data-description="Nhà 4 tầng mặt tiền Phan Thị Út, P. Tân Phú, Quận 7 TP. HCM.Chinh chủ bán nhà 4 tầng mặt tiền Phan Thị Út P. Tân Phú Quận 7 TP. HCM.Giá 7 tỷ 890tr.Kêt cấu: 4x13,7m - trệt - lửng - 2 lầu - sân thượng 2 view thoáng mát.Vị trí: Ngay giao lộ Huỳnh Tấn Phát - Nguyễn Thị Thập, Siêu thị Big C, kế bên Phú Mỹ Hưng, bệnh viên Việt Pháp, Bách Hoá Xanh, Trường Đại học Rmit, Tôn Đức Thắng. " data-duration="1 tuần trước" data-updatedtime="03/11/2020" data-datesort="11/03/2020 10:22:36" data-contactname="Nguyễn Hoàng Anh" data-contactmobile="0962364959" data-url="/ban-nha-mat-pho-duong-phan-thi-ut-phuong-tan-phu-19/-4-g-tien-p-quan-7-tp-hcm-pr27640278" data-totalmedia="9" data-createbyuser="1498953"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="564381">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-dang-thuc-vinh-xa-dong-thanh/ban-tien-hoc-mon-4x17m-gia-4-2-ty-pr24826971" title="Bán nhà mặt tiền giá 2,35 tỷ đường Đặng Thúc Vịnh, Đông Thạnh, Hóc Môn 4x17m" onclick="">
                            <img class="product-avatar-img" alt="Bán nhà mặt tiền giá 2,35 tỷ đường Đặng Thúc Vịnh, Đông Thạnh, Hóc Môn 4x17m" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/15/5X71G0yZ/20200615110156-0c38_wm.jpg" is-lazy-image="true" lazy-id="13">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-dang-thuc-vinh-xa-dong-thanh/ban-tien-hoc-mon-4x17m-gia-4-2-ty-pr24826971" title="Bán nhà mặt tiền giá 2,35 tỷ đường Đặng Thúc Vịnh, Đông Thạnh, Hóc Môn 4x17m" class="vipZero product-link">
                                BÁN NHÀ MẶT TIỀN GIÁ 2,35 TỶ ĐƯỜNG ĐẶNG THÚC VỊNH, ĐÔNG THẠNH, HÓC MÔN 4X17M
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">2.35 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">68 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hóc Môn, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Xuất cảnh cần bán nhà mặt tiền Đặng Thúc Vịnh, Đông Thạnh, Hóc Môn DT 4x17m nhà cấp 4, vị trí mặt tiền. Pháp lý công chứng vi bằng, nhà có đầy đủ giấy tờ số nhà huyện cấp từ năm 1998, Định cư cần bán
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
                                    <i class="iconSave" data-productid="24826971" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; mặt tiền gi&amp;#225; 2,35 tỷ đường Đặng Th&amp;#250;c Vịnh, Đ&amp;#244;ng Thạnh, H&amp;#243;c M&amp;#244;n 4x17m&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/15/5X71G0yZ/20200615110156-0c38_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/06/15/5X71G0yZ/20200615110156-0c38_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà mặt tiền giá 2,35 tỷ đường Đặng Thúc Vịnh, Đông Thạnh, Hóc Môn 4x17m" data-price="2.35 tỷ" data-area="68 m²" data-pricesort="2350000000" data-areasort="68" data-room="0" data-toilets="0" data-address="Hóc Môn, Hồ Chí Minh" data-description="Xuất cảnh cần bán nhà mặt tiền Đặng Thúc Vịnh, Đông Thạnh, Hóc Môn DT 4x17m nhà cấp 4, vị trí mặt tiền. Pháp lý công chứng vi bằng, nhà có đầy đủ giấy tờ số nhà huyện cấp từ năm 1998, Định cư cần bán" data-duration="1 tuần trước" data-updatedtime="03/11/2020" data-datesort="11/03/2020 10:01:25" data-contactname="Huỳnh Quốc Phi" data-contactmobile="0918577697" data-url="/ban-nha-mat-pho-duong-dang-thuc-vinh-xa-dong-thanh/ban-tien-hoc-mon-4x17m-gia-4-2-ty-pr24826971" data-totalmedia="6" data-createbyuser="564381"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="384731">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-an-son-phuong-4_3/chinh-chu-b-tien-24c-p-4-da-lat-thich-hop-de-o-hoac-kinh-doh-homestay-pr27600124" title="Chính chủ bán nhà mặt tiền 24C đường An Sơn, P.4, Đà Lạt thích hợp để ở hoặc kinh doanh homestay" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ bán nhà mặt tiền 24C đường An Sơn, P.4, Đà Lạt thích hợp để ở hoặc kinh doanh homestay" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/30/UaN6k8zq/20201030083959-14ac_wm.jpg" is-lazy-image="true" lazy-id="14">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">8</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-an-son-phuong-4_3/chinh-chu-b-tien-24c-p-4-da-lat-thich-hop-de-o-hoac-kinh-doh-homestay-pr27600124" title="Chính chủ bán nhà mặt tiền 24C đường An Sơn, P.4, Đà Lạt thích hợp để ở hoặc kinh doanh homestay" class="vipZero product-link">
                                CHÍNH CHỦ BÁN NHÀ MẶT TIỀN 24C ĐƯỜNG AN SƠN, P.4, ĐÀ LẠT THÍCH HỢP ĐỂ Ở HOẶC KINH DOANH HOMESTAY
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">10.5 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">166 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Đà Lạt, Lâm Đồng</span>
                        </div>
                        <div class="product-content">
                            Chính chủ Bán nhà riêng biệt mặt tiền tại 24C khu quy hoạch đường An Sơn, phường 4, Tp. Đà Lạt. - Tổng diện tích: 166m2. - Lộ giới: 10m. Trong đó: - Hiện trạng: Gồm phòng khách, bếp và 7 phòng ngủ, t
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 tuần trước
                                    <span class="tooltip-time">30/10/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27600124" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n nh&amp;#224; mặt tiền 24C đường An Sơn, P.4, Đ&amp;#224; Lạt th&amp;#237;ch hợp để ở hoặc kinh doanh homestay&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/30/UaN6k8zq/20201030083959-14ac_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/30/UaN6k8zq/20201030083959-14ac_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ bán nhà mặt tiền 24C đường An Sơn, P.4, Đà Lạt thích hợp để ở hoặc kinh doanh homestay" data-price="10.5 tỷ" data-area="166 m²" data-pricesort="10500000000" data-areasort="166" data-room="7" data-toilets="0" data-address="Đà Lạt, Lâm Đồng" data-description="Chính chủ Bán nhà riêng biệt mặt tiền tại 24C khu quy hoạch đường An Sơn, phường 4, Tp. Đà Lạt. - Tổng diện tích: 166m2. - Lộ giới: 10m. Trong đó: - Hiện trạng: Gồm phòng khách, bếp và 7 phòng ngủ, t" data-duration="2 tuần trước" data-updatedtime="30/10/2020" data-datesort="10/30/2020 08:49:19" data-contactname="Mai Nhat Thy" data-contactmobile="0944982692" data-url="/ban-nha-mat-pho-duong-an-son-phuong-4_3/chinh-chu-b-tien-24c-p-4-da-lat-thich-hop-de-o-hoac-kinh-doh-homestay-pr27600124" data-totalmedia="8" data-createbyuser="384731"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1219279">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-truong-dinh-phuong-6-7/can-ban-tien-so-19-6-quan-3-tp-ho-chi-minh-pr27509810" title="Cần bán nhà mặt tiền số 19 Trương Định, Phường 6, Quận 3, TP. Hồ Chí Minh" onclick="">
                            <img class="product-avatar-img" alt="Cần bán nhà mặt tiền số 19 Trương Định, Phường 6, Quận 3, TP. Hồ Chí Minh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/22/20201022163410-3a47_wm.jpg" is-lazy-image="true" lazy-id="15">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">7</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-truong-dinh-phuong-6-7/can-ban-tien-so-19-6-quan-3-tp-ho-chi-minh-pr27509810" title="Cần bán nhà mặt tiền số 19 Trương Định, Phường 6, Quận 3, TP. Hồ Chí Minh" class="vipZero product-link">
                                CẦN BÁN NHÀ MẶT TIỀN SỐ 19 TRƯƠNG ĐỊNH, PHƯỜNG 6, QUẬN 3, TP. HỒ CHÍ MINH
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">100 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">137.8 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 3, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cần bán nhà mặt tiền số 19 Trương Định, Phường 6, Quận 3, TP. Hồ Chí Minh. Vị trí: - Ngay góc ngã 4 Nguyễn Thị Minh Khai - Trương Định. Đoạn này chiều rộng đường Trương Định là 14m. - Thuộc khu kinh 
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    3 tuần trước
                                    <span class="tooltip-time">23/10/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27509810" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần b&amp;#225;n nh&amp;#224; mặt tiền số 19 Trương Định, Phường 6, Quận 3, TP. Hồ Ch&amp;#237; Minh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/22/20201022163410-3a47_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/22/20201022163410-3a47_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần bán nhà mặt tiền số 19 Trương Định, Phường 6, Quận 3, TP. Hồ Chí Minh" data-price="100 tỷ" data-area="137.8 m²" data-pricesort="100000000000" data-areasort="137.8" data-room="0" data-toilets="0" data-address="Quận 3, Hồ Chí Minh" data-description="Cần bán nhà mặt tiền số 19 Trương Định, Phường 6, Quận 3, TP. Hồ Chí Minh. Vị trí: - Ngay góc ngã 4 Nguyễn Thị Minh Khai - Trương Định. Đoạn này chiều rộng đường Trương Định là 14m. - Thuộc khu kinh " data-duration="3 tuần trước" data-updatedtime="23/10/2020" data-datesort="10/23/2020 09:54:22" data-contactname="A Thiệu" data-contactmobile="0913932111" data-url="/ban-nha-mat-pho-duong-truong-dinh-phuong-6-7/can-ban-tien-so-19-6-quan-3-tp-ho-chi-minh-pr27509810" data-totalmedia="7" data-createbyuser="1219279"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1142387">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-thanh-xuan-25-phuong-thanh-xuan/chinh-chu-ban-moi-xay-1-tret-1-lau-25-quan-12-gia-1-09-ty-pr27492565" title="Chính chủ bán nhà mới xây 1 trệt 1 lầu Thạnh Xuân 25 Quận 12 giá 1.09 tỷ" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ bán nhà mới xây 1 trệt 1 lầu Thạnh Xuân 25 Quận 12 giá 1.09 tỷ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/21/UaN6k8zq/20201021143003-45a1_wm.jpg" is-lazy-image="true" lazy-id="16">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">5</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-thanh-xuan-25-phuong-thanh-xuan/chinh-chu-ban-moi-xay-1-tret-1-lau-25-quan-12-gia-1-09-ty-pr27492565" title="Chính chủ bán nhà mới xây 1 trệt 1 lầu Thạnh Xuân 25 Quận 12 giá 1.09 tỷ" class="vipOne product-link">
                                CHÍNH CHỦ BÁN NHÀ MỚI XÂY 1 TRỆT 1 LẦU THẠNH XUÂN 25 QUẬN 12 GIÁ 1.09 TỶ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">1.09 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">60 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 12, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Cần bán nhà 1 trệt 1 lầu diện tích 3x10 = 60m2. Nhà mới đẹp gồm 2pn 2wc đường thạnh xuân 25 Quận 12. Khu vực đông dân cư, tiện tích liền kề, gần chợ, gần trường học cấp 1 2 3, giao thông thuận tiện q
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
                                    <i class="iconSave" data-productid="27492565" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n nh&amp;#224; mới x&amp;#226;y 1 trệt 1 lầu Thạnh Xu&amp;#226;n 25 Quận 12 gi&amp;#225; 1.09 tỷ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/21/UaN6k8zq/20201021143003-45a1_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/21/UaN6k8zq/20201021143003-45a1_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ bán nhà mới xây 1 trệt 1 lầu Thạnh Xuân 25 Quận 12 giá 1.09 tỷ" data-price="1.09 tỷ" data-area="60 m²" data-pricesort="1090000000" data-areasort="60" data-room="2" data-toilets="2" data-address="Quận 12, Hồ Chí Minh" data-description="Cần bán nhà 1 trệt 1 lầu diện tích 3x10 = 60m2. Nhà mới đẹp gồm 2pn 2wc đường thạnh xuân 25 Quận 12. Khu vực đông dân cư, tiện tích liền kề, gần chợ, gần trường học cấp 1 2 3, giao thông thuận tiện q" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 08:48:35" data-contactname="Trần Tuấn" data-contactmobile="0336966360" data-url="/ban-nha-mat-pho-duong-thanh-xuan-25-phuong-thanh-xuan/chinh-chu-ban-moi-xay-1-tret-1-lau-25-quan-12-gia-1-09-ty-pr27492565" data-totalmedia="5" data-createbyuser="1142387"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="26992">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-vung-tau-vt/ban-gap-mot-so-tien-vi-tri-dac-dia-de-kinh-doanh-cho-thue-lh-0945412112-pr27770835" title="BÁN GẤP MỘT SỐ NHÀ MẶT TIỀN VỊ TRÍ ĐẮC ĐỊA DỄ KINH DOANH CHO THUÊ - LH 0945412112" onclick="">
                            <img class="product-avatar-img" alt="BÁN GẤP MỘT SỐ NHÀ MẶT TIỀN VỊ TRÍ ĐẮC ĐỊA DỄ KINH DOANH CHO THUÊ - LH 0945412112" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112164226-0886_wm.jpg" is-lazy-image="true" lazy-id="17">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-vung-tau-vt/ban-gap-mot-so-tien-vi-tri-dac-dia-de-kinh-doanh-cho-thue-lh-0945412112-pr27770835" title="BÁN GẤP MỘT SỐ NHÀ MẶT TIỀN VỊ TRÍ ĐẮC ĐỊA DỄ KINH DOANH CHO THUÊ - LH 0945412***" class="vipOne product-link" style="overflow: visible;">
                                BÁN GẤP MỘT SỐ NHÀ MẶT TIỀN VỊ TRÍ ĐẮC ĐỊA DỄ KINH DOANH CHO THUÊ - LH <span class="hidden-mobile m-on-title" raw="0945412112">0945412***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                                        <span class="dot">·</span>
                            <span class="location">Vũng Tàu, Bà Rịa Vũng Tàu</span>
                        </div>
                        <div class="product-content">
                            Cần bán 01 số căn nhà nằm vị trí đẹp của trung tâm thành phố Vũng Tàu
     1/ Nhà 1 trệt 2 lầu mặt tiền Hùng Vương , Phường 4, VT
     Diện tích : 6.08m x 23.8m = 150m2 thổ cư ( nở hậu 8.22m )
     Hướng : ĐB
     H
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
                                    <i class="iconSave" data-productid="27770835" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#193;N GẤP MỘT SỐ NH&amp;#192; MẶT TIỀN VỊ TR&amp;#205; ĐẮC ĐỊA DỄ KINH DOANH CHO THU&amp;#202; - LH 0945412112&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112164226-0886_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112164226-0886_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="BÁN GẤP MỘT SỐ NHÀ MẶT TIỀN VỊ TRÍ ĐẮC ĐỊA DỄ KINH DOANH CHO THUÊ - LH 0945412112" data-price="Giá thỏa thuận" data-area="Không xác định" data-pricesort="0" data-areasort="0" data-room="0" data-toilets="0" data-address="Vũng Tàu, Bà Rịa Vũng Tàu" data-description="Cần bán 01 số căn nhà nằm vị trí đẹp của trung tâm thành phố Vũng Tàu
     1/ Nhà 1 trệt 2 lầu mặt tiền Hùng Vương , Phường 4, VT
     Diện tích : 6.08m x 23.8m = 150m2 thổ cư ( nở hậu 8.22m )
     Hướng : ĐB
     H" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 16:47:24" data-contactname="Đặng Ngọc Hiệp" data-contactmobile="0945412112" data-url="/ban-nha-mat-pho-vung-tau-vt/ban-gap-mot-so-tien-vi-tri-dac-dia-de-kinh-doanh-cho-thue-lh-0945412112-pr27770835" data-totalmedia="1" data-createbyuser="26992"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="857293">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-tan-chanh-hiep-10-xa-thoi-tam-thon/ban-gap-biet-thu-2-tien-10-huyen-hoc-mon-300-6m-lh-0901377699-pr27769642" title="Bán gấp biệt thự 2 mặt tiền đường Tân Chánh Hiệp 10, huyện Hóc Môn 300m2, LH: 0901377699" onclick="">
                            <img class="product-avatar-img" alt="Bán gấp biệt thự 2 mặt tiền đường Tân Chánh Hiệp 10, huyện Hóc Môn 300m2, LH: 0901377699" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/8YXboFFx/20201112152347-cadc_wm.jpg" is-lazy-image="true" lazy-id="18">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">7</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-tan-chanh-hiep-10-xa-thoi-tam-thon/ban-gap-biet-thu-2-tien-10-huyen-hoc-mon-300-6m-lh-0901377699-pr27769642" title="Bán gấp biệt thự 2 mặt tiền đường Tân Chánh Hiệp 10, huyện Hóc Môn 300m2, LH: 0901377***" class="vipOne product-link" style="overflow: visible;">
                                BÁN GẤP BIỆT THỰ 2 MẶT TIỀN ĐƯỜNG TÂN CHÁNH HIỆP 10, HUYỆN HÓC MÔN 300M2, LH: <span class="hidden-mobile m-on-title" raw="0901377699">0901377***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">14 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">300 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hóc Môn, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Bán nhà đường Tân Chánh Hiệp 10, Xã Thới Tam Thôn, huyện Hóc Môn, Tp Hồ Chí Minh. Nhà cấp 4 (phù hợp xây dựng biệt thự mới đã có giấy phép xây dựng và bản vẽ biệt thự). Hai mặt tiền vị trí cực đẹp gầ
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
                                    <i class="iconSave" data-productid="27769642" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n gấp biệt thự 2 mặt tiền đường T&amp;#226;n Ch&amp;#225;nh Hiệp 10, huyện H&amp;#243;c M&amp;#244;n 300m2, LH: 0901377699&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/8YXboFFx/20201112152347-cadc_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/8YXboFFx/20201112152347-cadc_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán gấp biệt thự 2 mặt tiền đường Tân Chánh Hiệp 10, huyện Hóc Môn 300m2, LH: 0901377699" data-price="14 tỷ" data-area="300 m²" data-pricesort="14000000000" data-areasort="300" data-room="2" data-toilets="0" data-address="Hóc Môn, Hồ Chí Minh" data-description="Bán nhà đường Tân Chánh Hiệp 10, Xã Thới Tam Thôn, huyện Hóc Môn, Tp Hồ Chí Minh. Nhà cấp 4 (phù hợp xây dựng biệt thự mới đã có giấy phép xây dựng và bản vẽ biệt thự). Hai mặt tiền vị trí cực đẹp gầ" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 15:59:41" data-contactname="Nguyen Quoc Cuong" data-contactmobile="0901377699" data-url="/ban-nha-mat-pho-duong-tan-chanh-hiep-10-xa-thoi-tam-thon/ban-gap-biet-thu-2-tien-10-huyen-hoc-mon-300-6m-lh-0901377699-pr27769642" data-totalmedia="7" data-createbyuser="857293"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="708879">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-quoc-lo-1a-thi-tran-mo-duc/ra-20-san-pham-dep-nhat-shoptel-kiot-cho-dong-cat-noi-kinh-doanh-buon-ban-sam-uat-nhat-khu-vuc-pr27764630" title="Ra mắt 20 sản phẩm đẹp nhất shoptel - ki ốt chợ Đồng Cát, nơi kinh doanh buôn bán sầm uất nhất khu" onclick="">
                            <img class="product-avatar-img" alt="Ra mắt 20 sản phẩm đẹp nhất shoptel - ki ốt chợ Đồng Cát, nơi kinh doanh buôn bán sầm uất nhất khu" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112104237-1e16_wm.jpg" is-lazy-image="true" lazy-id="19">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-quoc-lo-1a-thi-tran-mo-duc/ra-20-san-pham-dep-nhat-shoptel-kiot-cho-dong-cat-noi-kinh-doanh-buon-ban-sam-uat-nhat-khu-vuc-pr27764630" title="Ra mắt 20 sản phẩm đẹp nhất shoptel - ki ốt chợ Đồng Cát, nơi kinh doanh buôn bán sầm uất nhất khu" class="vipOne product-link">
                                RA MẮT 20 SẢN PHẨM ĐẸP NHẤT SHOPTEL - KI ỐT CHỢ ĐỒNG CÁT, NƠI KINH DOANH BUÔN BÁN SẦM UẤT NHẤT KHU
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">800 triệu</span>
                                <span class="dot">·</span>
                                <span class="area">126 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Mộ Đức, Quảng Ngãi</span>
                        </div>
                        <div class="product-content">
                            === Shoptel - Kiot chợ Đồng Cát ===. Điểm đến đầu tư - an cư thịnh vượng. Dòng SP đặc biệt - Lần đầu tiên xuất hiện tại Quảng Ngãi. ============== Vị trí CHIẾN LƯỢC. Nằm giao thoa giữa 2 trục đường l
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
                                    <i class="iconSave" data-productid="27764630" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ra mắt 20 sản phẩm đẹp nhất shoptel - ki ốt chợ Đồng C&amp;#225;t, nơi kinh doanh bu&amp;#244;n b&amp;#225;n sầm uất nhất khu&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112104237-1e16_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112104237-1e16_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Ra mắt 20 sản phẩm đẹp nhất shoptel - ki ốt chợ Đồng Cát, nơi kinh doanh buôn bán sầm uất nhất khu" data-price="800 triệu" data-area="126 m²" data-pricesort="800000000" data-areasort="126" data-room="2" data-toilets="2" data-address="Mộ Đức, Quảng Ngãi" data-description="=== Shoptel - Kiot chợ Đồng Cát ===. Điểm đến đầu tư - an cư thịnh vượng. Dòng SP đặc biệt - Lần đầu tiên xuất hiện tại Quảng Ngãi. ============== Vị trí CHIẾN LƯỢC. Nằm giao thoa giữa 2 trục đường l" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:45:15" data-contactname="Phạm Văn Chi" data-contactmobile="0707505505" data-url="/ban-nha-mat-pho-duong-quoc-lo-1a-thi-tran-mo-duc/ra-20-san-pham-dep-nhat-shoptel-kiot-cho-dong-cat-noi-kinh-doanh-buon-ban-sam-uat-nhat-khu-vuc-pr27764630" data-totalmedia="4" data-createbyuser="708879"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1024338">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/ban-tien-va-cac-can-noi-bo-gia-tot-t-thi-truong-lh-0985-32-34-36-pr27762416" title="Bán mặt tiền và các căn nhà phố Park Hills nội bộ giá tốt nhất thị trường. LH 0985 32 34 36" onclick="">
                            <img class="product-avatar-img" alt="Bán mặt tiền và các căn nhà phố Park Hills nội bộ giá tốt nhất thị trường. LH 0985 32 34 36" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112093059-ee89_wm.jpg" is-lazy-image="true" lazy-id="20">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/ban-tien-va-cac-can-noi-bo-gia-tot-t-thi-truong-lh-0985-32-34-36-pr27762416" title="Bán mặt tiền và các căn nhà phố Park Hills nội bộ giá tốt nhất thị trường. LH 0985 32 3* **" class="vipOne product-link" style="overflow: visible;">
                                BÁN MẶT TIỀN VÀ CÁC CĂN NHÀ PHỐ PARK HILLS NỘI BỘ GIÁ TỐT NHẤT THỊ TRƯỜNG. LH <span class="hidden-mobile m-on-title" raw="0985 32 34 36">0985 32 3* **</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">14 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Gò Vấp, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Phòng kinh doanh chủ đầu tư Cityland bán các căn khách ký gửi giá tốt bao gồm các căn nhà có sẵn nội thất chỉ vào là ở ngay, các căn hoàn thiện mặt ngoài khách có thể hoàn thiện theo ý thích và các c
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
                                    <i class="iconSave" data-productid="27762416" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n mặt tiền v&amp;#224; c&amp;#225;c căn nh&amp;#224; phố Park Hills nội bộ gi&amp;#225; tốt nhất thị trường. LH 0985 32 34 36&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112093059-ee89_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112093059-ee89_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán mặt tiền và các căn nhà phố Park Hills nội bộ giá tốt nhất thị trường. LH 0985 32 34 36" data-price="14 tỷ" data-area="100 m²" data-pricesort="14000000000" data-areasort="100" data-room="0" data-toilets="0" data-address="Gò Vấp, Hồ Chí Minh" data-description="Phòng kinh doanh chủ đầu tư Cityland bán các căn khách ký gửi giá tốt bao gồm các căn nhà có sẵn nội thất chỉ vào là ở ngay, các căn hoàn thiện mặt ngoài khách có thể hoàn thiện theo ý thích và các c" data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 09:31:59" data-contactname="Âu Thị Nguyên Thảo" data-contactmobile="0909272009" data-url="/ban-nha-mat-pho-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/ban-tien-va-cac-can-noi-bo-gia-tot-t-thi-truong-lh-0985-32-34-36-pr27762416" data-totalmedia="6" data-createbyuser="1024338"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="804570">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-luy-ban-bich-phuong-hoa-thanh/mtkd-486-tan-phu-166-5m2-ngay-huynh-thien-loc-khu-sung-sang-gia-23-5-ty-pr25549237" title="MTKD 486 đường Luỹ Bán Bích, Tân Phú 166.5m2. Ngay Huỳnh Thiện Lộc, khu sung, sáng, giá 23.5 tỷ" onclick="">
                            <img class="product-avatar-img" alt="MTKD 486 đường Luỹ Bán Bích, Tân Phú 166.5m2. Ngay Huỳnh Thiện Lộc, khu sung, sáng, giá 23.5 tỷ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/05/23/20200523034533-c6d5_wm.jpg" is-lazy-image="true" lazy-id="21">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-luy-ban-bich-phuong-hoa-thanh/mtkd-486-tan-phu-166-5m2-ngay-huynh-thien-loc-khu-sung-sang-gia-23-5-ty-pr25549237" title="MTKD 486 đường Luỹ Bán Bích, Tân Phú 166.5m2. Ngay Huỳnh Thiện Lộc, khu sung, sáng, giá 23.5 tỷ" class="vipOne product-link">
                                MTKD 486 ĐƯỜNG LUỸ BÁN BÍCH, TÂN PHÚ 166.5M2. NGAY HUỲNH THIỆN LỘC, KHU SUNG, SÁNG, GIÁ 23.5 TỶ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">23.5 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">166.5 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Tân Phú, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Mặt tiền 486 đường Luỹ Bán Bích, Phường Phú Thạnh, Quận Tân Phú. Diện tích: 6x27m tương đương 166.5m2. Vị trí đẹp, ngay góc 2 MTKD giữa Lũy Bán Bích và Huỳnh Thiện Lộc, tiện kinh doanh mọi ngành nghề
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
                                    <i class="iconSave" data-productid="25549237" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;MTKD 486 đường Luỹ B&amp;#225;n B&amp;#237;ch, T&amp;#226;n Ph&amp;#250; 166.5m2. Ngay Huỳnh Thiện Lộc, khu sung, s&amp;#225;ng, gi&amp;#225; 23.5 tỷ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/05/23/20200523034533-c6d5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/05/23/20200523034533-c6d5_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="MTKD 486 đường Luỹ Bán Bích, Tân Phú 166.5m2. Ngay Huỳnh Thiện Lộc, khu sung, sáng, giá 23.5 tỷ" data-price="23.5 tỷ" data-area="166.5 m²" data-pricesort="23500000000" data-areasort="166.5" data-room="0" data-toilets="0" data-address="Tân Phú, Hồ Chí Minh" data-description="Mặt tiền 486 đường Luỹ Bán Bích, Phường Phú Thạnh, Quận Tân Phú. Diện tích: 6x27m tương đương 166.5m2. Vị trí đẹp, ngay góc 2 MTKD giữa Lũy Bán Bích và Huỳnh Thiện Lộc, tiện kinh doanh mọi ngành nghề" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 22:15:33" data-contactname="Ngọc Thư" data-contactmobile="0947612039" data-url="/ban-nha-mat-pho-duong-luy-ban-bich-phuong-hoa-thanh/mtkd-486-tan-phu-166-5m2-ngay-huynh-thien-loc-khu-sung-sang-gia-23-5-ty-pr25549237" data-totalmedia="6" data-createbyuser="804570"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="804570">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-tan-son-nhi-phuong-tan-son-nhi/goc-2mtkd-phu-12-13-19m-duc-3-tam-doan-sung-tien-sang-gia-53-ty-pr24098943" title="Góc 2MTKD Tân Sơn Nhì, Tân Phú 12(13)x19m đúc 3 tấm, đoạn sung, mặt tiền sáng. Giá 49.5 tỷ TL" onclick="">
                            <img class="product-avatar-img" alt="Góc 2MTKD Tân Sơn Nhì, Tân Phú 12(13)x19m đúc 3 tấm, đoạn sung, mặt tiền sáng. Giá 49.5 tỷ TL" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/01/03/20200103171816-415e_wm.jpg" is-lazy-image="true" lazy-id="22">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-tan-son-nhi-phuong-tan-son-nhi/goc-2mtkd-phu-12-13-19m-duc-3-tam-doan-sung-tien-sang-gia-53-ty-pr24098943" title="Góc 2MTKD Tân Sơn Nhì, Tân Phú 12(13)x19m đúc 3 tấm, đoạn sung, mặt tiền sáng. Giá 49.5 tỷ TL" class="vipOne product-link">
                                GÓC 2MTKD TÂN SƠN NHÌ, TÂN PHÚ 12(13)X19M ĐÚC 3 TẤM, ĐOẠN SUNG, MẶT TIỀN SÁNG. GIÁ 49.5 TỶ TL
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">49.5 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">220 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Tân Phú, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Góc 2MTKD sầm uất 456A đường Tân Sơn Nhì, P. Tân Sơn Nhì, Q. Tân Phú. Vị trí: Gần ngã 3 Độc Lập - Tân Sơn Nhì khu cực kỳ sầm uất xung quanh nhiều nhà hàng, quán ăn, quán bar,... Diện tích: 12mx19m, n
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
                                    <i class="iconSave" data-productid="24098943" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;G&amp;#243;c 2MTKD T&amp;#226;n Sơn Nh&amp;#236;, T&amp;#226;n Ph&amp;#250; 12(13)x19m đ&amp;#250;c 3 tấm, đoạn sung, mặt tiền s&amp;#225;ng. Gi&amp;#225; 49.5 tỷ TL&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/01/03/20200103171816-415e_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/01/03/20200103171816-415e_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Góc 2MTKD Tân Sơn Nhì, Tân Phú 12(13)x19m đúc 3 tấm, đoạn sung, mặt tiền sáng. Giá 49.5 tỷ TL" data-price="49.5 tỷ" data-area="220 m²" data-pricesort="49500000000" data-areasort="220" data-room="0" data-toilets="0" data-address="Tân Phú, Hồ Chí Minh" data-description="Góc 2MTKD sầm uất 456A đường Tân Sơn Nhì, P. Tân Sơn Nhì, Q. Tân Phú. Vị trí: Gần ngã 3 Độc Lập - Tân Sơn Nhì khu cực kỳ sầm uất xung quanh nhiều nhà hàng, quán ăn, quán bar,... Diện tích: 12mx19m, n" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 22:14:05" data-contactname="Ngọc Thư" data-contactmobile="0947612039" data-url="/ban-nha-mat-pho-duong-tan-son-nhi-phuong-tan-son-nhi/goc-2mtkd-phu-12-13-19m-duc-3-tam-doan-sung-tien-sang-gia-53-ty-pr24098943" data-totalmedia="3" data-createbyuser="804570"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip1 product-item clearfix" uid="1436165">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-nguyen-chi-thanh-phuong-hung-dinh/ban-tien-ngay-trung-tam-thuan-an-binh-gia-tot-pr27749126" title="Bán nhà mặt tiền ngay trung tâm Thuận An, Bình Dương giá tốt" onclick="">
                            <img class="product-avatar-img" alt="Bán nhà mặt tiền ngay trung tâm Thuận An, Bình Dương giá tốt" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111103551-2e44_wm.jpg" is-lazy-image="true" lazy-id="23">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">10</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-nguyen-chi-thanh-phuong-hung-dinh/ban-tien-ngay-trung-tam-thuan-an-binh-gia-tot-pr27749126" title="Bán nhà mặt tiền ngay trung tâm Thuận An, Bình Dương giá tốt" class="vipOne product-link">
                                BÁN NHÀ MẶT TIỀN NGAY TRUNG TÂM THUẬN AN, BÌNH DƯƠNG GIÁ TỐT
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">2.3 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Thuận An, Bình Dương</span>
                        </div>
                        <div class="product-content">
                            Dự án: Nhà phố mặt tiền Thuận An. A. Thông tin chi tiết: Siêu phẩm nhà phố thương mại cao cấp tại trung tâm thành phố. Gold House Riverside.Mặt tiền đường Nguyễn Chí Thanh.Thiết kế nhà. - 1 trệt 2 lầ
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
                                    <i class="iconSave" data-productid="27749126" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; mặt tiền ngay trung t&amp;#226;m Thuận An, B&amp;#236;nh Dương gi&amp;#225; tốt&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111103551-2e44_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111103551-2e44_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà mặt tiền ngay trung tâm Thuận An, Bình Dương giá tốt" data-price="2.3 tỷ" data-area="100 m²" data-pricesort="2300000000" data-areasort="100" data-room="4" data-toilets="4" data-address="Thuận An, Bình Dương" data-description="Dự án: Nhà phố mặt tiền Thuận An. A. Thông tin chi tiết: Siêu phẩm nhà phố thương mại cao cấp tại trung tâm thành phố. Gold House Riverside.Mặt tiền đường Nguyễn Chí Thanh.Thiết kế nhà. - 1 trệt 2 lầ" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 16:48:52" data-contactname="Bùi Nguyên Hiếu" data-contactmobile="0979779716" data-url="/ban-nha-mat-pho-duong-nguyen-chi-thanh-phuong-hung-dinh/ban-tien-ngay-trung-tam-thuan-an-binh-gia-tot-pr27749126" data-totalmedia="10" data-createbyuser="1436165"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="text-center">
                <div class="pagination">
    <a pid="1" class="actived" href="https://batdongsan.com.vn/ban-nha-mat-pho">1</a>
    <a pid="2" class="" href="https://batdongsan.com.vn/ban-nha-mat-pho/p2">2</a>
    <a pid="3" class="" href="https://batdongsan.com.vn/ban-nha-mat-pho/p3">3</a>
    <a pid="4" class="" href="https://batdongsan.com.vn/ban-nha-mat-pho/p4">4</a>
    <a pid="5" class="" href="https://batdongsan.com.vn/ban-nha-mat-pho/p5">5</a>
    <a pid="1027" href="https://batdongsan.com.vn/ban-nha-mat-pho/p1027"><img src="./assets/image/ic_double_caret_right.png"></a>
    </div>
    
            </div>
        </div>
    
    
    
    
    
    
        <div class="divide">&nbsp;</div>
    <div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Bán nhà mặt phố gIÁ RẺ" href="https://batdongsan.com.vn/tags/ban/ban-nha-mat-pho-gia-re">Bán nhà mặt phố gIÁ RẺ</a></li>    <li><a title="Bán nhà mặt phố chính chủ" href="https://batdongsan.com.vn/tags/ban/ban-nha-mat-pho-chinh-chu">Bán nhà mặt phố chính chủ</a></li>    <li><a title="Bán nhà mặt phố chính chủ Hà Nội" href="https://batdongsan.com.vn/tags/ban/ban-nha-mat-pho-chinh-chu-ha-noi">Bán nhà mặt phố chính chủ Hà Nội</a></li>    <li><a title="chung cư mini ở hai bà trưng" href="https://batdongsan.com.vn/tags/ban/chung-cu-mini-o-hai-ba-trung">chung cư mini ở hai bà trưng</a></li>    <li><a title="bán khách sạn mặt tiền" href="https://batdongsan.com.vn/tags/ban/ban-khach-san-mat-tien">bán khách sạn mặt tiền</a></li>    <li><a title="bán nhà sổ hồng riêng giá rẻ" href="https://batdongsan.com.vn/tags/ban/ban-nha-so-hong-rieng-gia-re">bán nhà sổ hồng riêng giá rẻ</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
        <div class="product-seo-text">
            <strong>Batdongsan.com.vn</strong> mang đến kênh thông tin bất động sản hàng đầu tại Việt Nam, 
                                    giúp khách hàng có nhu cầu cần <strong>mua nhà mặt phố giá rẻ tại Việt Nam</strong>. 
                                    Bạn đang có nhu cầu tìm kiếm một ngôi nhà mặt phố có thiết kế độc đáo phục vụ cho việc kinh doanh hoạc dùng để ở, 
                                    có 2 mặt tiền hay những yếu tố quan trọng khác như hướng nhà mặt phố... chúng tôi đều có thể mang đến nguồn thông tin đó đến với bạn. 
                                    Mọi nguồn nhu cầu <strong>mua bán nhà nguyên căn mặt phố tại Việt Nam</strong> sẽ được chúng tôi cập nhật thường xuyên, 
                                    mang đến đầy đủ về về bất động sản như: diện tích căn nhà mặt phố, phong cách thiết kế, số tầng, số phòng, vị trí địa lý.... 
                                    Batdongsan.com.vn giúp việc tìm kiếm bất động sản của bạn trở nên dễ dàng hơn trong việc tìm kiếm thông tin mua bán nhà mặt phố tại Việt Nam, 
                                    giải quyết được băn khoăn của bạn về các câu hỏi như: nên mua ở đâu, giá nhà mặt phố bao nhiêu thì hợp lý...? 
                                    giúp việc đưa ra quyết định mua bán bất động sản biệt thự liền kề chính xác nhất.
        </div>
    <form id="productListBinnova" method="post">
        <input id="hashAlias" type="hidden" value="01477f2eb2dc6148fcfd67ff36a3c87ea2b04769ee6c68fec3bd465c7ec1dc60">
    </form>
    <script type="text/javascript">
        (function callJQuery() {
            if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
                var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                    getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                    model: {
                        typeOfProduct: 38,
                        categoryId: 163,
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
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/-1/2/-1/-1" title="Bán nhà mặt phố Việt Nam giá 500 - 800 triệu">500 - 800 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/-1/3/-1/-1" title="Bán nhà mặt phố Việt Nam giá 800 triệu - 1 tỷ">800 triệu - 1 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/-1/4/-1/-1" title="Bán nhà mặt phố Việt Nam giá 1 - 2 tỷ">1 - 2 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/-1/5/-1/-1" title="Bán nhà mặt phố Việt Nam giá 2 - 3 tỷ">2 - 3 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/-1/6/-1/-1" title="Bán nhà mặt phố Việt Nam giá 3 - 5 tỷ">3 - 5 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/-1/7/-1/-1" title="Bán nhà mặt phố Việt Nam giá 5 - 7 tỷ">5 - 7 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/-1/8/-1/-1" title="Bán nhà mặt phố Việt Nam giá 7 - 10 tỷ">7 - 10 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/-1/9/-1/-1" title="Bán nhà mặt phố Việt Nam giá 10 - 20 tỷ">10 - 20 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/-1/10/-1/-1" title="Bán nhà mặt phố Việt Nam giá 20 - 30 tỷ">20 - 30 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/-1/11/-1/-1" title="Bán nhà mặt phố Việt Nam giá &gt; 30 tỷ">&gt; 30 tỷ</a></li>
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
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/1/-1/-1/-1" title="Bán nhà mặt phố Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/2/-1/-1/-1" title="Bán nhà mặt phố Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/3/-1/-1/-1" title="Bán nhà mặt phố Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/4/-1/-1/-1" title="Bán nhà mặt phố Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/5/-1/-1/-1" title="Bán nhà mặt phố Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/6/-1/-1/-1" title="Bán nhà mặt phố Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/7/-1/-1/-1" title="Bán nhà mặt phố Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/8/-1/-1/-1" title="Bán nhà mặt phố Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/9/-1/-1/-1" title="Bán nhà mặt phố Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-mat-pho/10/-1/-1/-1" title="Bán nhà mặt phố Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
            <h2 class="box-title">Bán nhà mặt phố</h2>
    
            <div class="box-content link-hover-blue">
                <ul>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-tp-hcm" title="Bán nhà mặt phố tại Hồ Chí Minh">
                                    Hồ Chí Minh (11519)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-ha-noi" title="Bán nhà mặt phố tại Hà Nội">
                                    Hà Nội (5692)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-da-nang" title="Bán nhà mặt phố tại Đà Nẵng">
                                    Đà Nẵng (872)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-binh-duong" title="Bán nhà mặt phố tại Bình Dương">
                                    Bình Dương (572)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-hai-phong" title="Bán nhà mặt phố tại Hải Phòng">
                                    Hải Phòng (345)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-ha-nam" title="Bán nhà mặt phố tại Hà Nam">
                                    Hà Nam (3)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-vinh-long" title="Bán nhà mặt phố tại Vĩnh Long">
                                    Vĩnh Long (14)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-hai-duong" title="Bán nhà mặt phố tại Hải Dương">
                                    Hải Dương (18)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-gia-lai" title="Bán nhà mặt phố tại Gia Lai">
                                    Gia Lai (5)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-tien-giang" title="Bán nhà mặt phố tại Tiền Giang">
                                    Tiền Giang (13)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-quang-ninh" title="Bán nhà mặt phố tại Quảng Ninh">
                                    Quảng Ninh (50)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-bac-giang" title="Bán nhà mặt phố tại Bắc Giang">
                                    Bắc Giang (14)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-thanh-hoa" title="Bán nhà mặt phố tại Thanh Hóa">
                                    Thanh Hóa (18)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-hau-giang" title="Bán nhà mặt phố tại Hậu Giang">
                                    Hậu Giang (4)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-quang-ngai" title="Bán nhà mặt phố tại Quảng Ngãi">
                                    Quảng Ngãi (8)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-dong-nai" title="Bán nhà mặt phố tại Đồng Nai">
                                    Đồng Nai (130)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-binh-thuan" title="Bán nhà mặt phố tại Bình Thuận  ">
                                    Bình Thuận   (67)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-tay-ninh" title="Bán nhà mặt phố tại Tây Ninh">
                                    Tây Ninh (11)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-khanh-hoa" title="Bán nhà mặt phố tại Khánh Hòa">
                                    Khánh Hòa (258)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-mat-pho-phu-tho" title="Bán nhà mặt phố tại Phú Thọ">
                                    Phú Thọ (3)
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
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-pho-giang-vo-2" title="Bán nhà mặt phố Giảng Võ">
                                        Bán nhà mặt phố Giảng Võ
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-pho-trung-hoa-7" title="Bán nhà mặt phố Trung Hòa">
                                        Bán nhà mặt phố Trung Hòa
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-pho-thai-thinh-3" title="Bán nhà mặt phố Thái Thịnh">
                                        Bán nhà mặt phố Thái Thịnh
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-nguyen-khanh-toan-7" title="Bán nhà mặt phố Nguyễn Khánh Toàn">
                                        Bán nhà mặt phố Nguyễn Khánh Toàn
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-pho-ba-trieu-4" title="Bán nhà mặt phố Bà Triệu">
                                        Bán nhà mặt phố Bà Triệu
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-dao-tan-2" title="Bán nhà mặt phố Đào Tấn">
                                        Bán nhà mặt phố Đào Tấn
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-pho-chua-lang-3" title="Bán nhà mặt phố Chùa Láng">
                                        Bán nhà mặt phố Chùa Láng
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-hoang-quoc-viet-7" title="Bán nhà mặt phố Hoàng Quốc Việt">
                                        Bán nhà mặt phố Hoàng Quốc Việt
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-pho-ton-duc-thang-3" title="Bán nhà mặt phố Tôn Đức Thắng">
                                        Bán nhà mặt phố Tôn Đức Thắng
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-tay-son-3" title="Bán nhà mặt phố Tây Sơn">
                                        Bán nhà mặt phố Tây Sơn
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-tran-thai-tong-7" title="Bán nhà mặt phố Trần Thái Tông">
                                        Bán nhà mặt phố Trần Thái Tông
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-nguyen-chi-thanh-3" title="Bán nhà mặt phố Nguyễn Chí Thanh">
                                        Bán nhà mặt phố Nguyễn Chí Thanh
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-tran-khat-chan-4" title="Bán nhà mặt phố Trần Khát Chân">
                                        Bán nhà mặt phố Trần Khát Chân
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-kim-nguu-4" title="Bán nhà mặt phố Kim Ngưu">
                                        Bán nhà mặt phố Kim Ngưu
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-pho-hoang-cau-3" title="Bán nhà mặt phố Hoàng Cầu">
                                        Bán nhà mặt phố Hoàng Cầu
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-hoa-bang-7" title="Bán nhà mặt phố Hoa Bằng">
                                        Bán nhà mặt phố Hoa Bằng
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-tran-dang-ninh-7" title="Bán nhà mặt phố Trần Đăng Ninh">
                                        Bán nhà mặt phố Trần Đăng Ninh
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-pho-hang-bong-1" title="Bán nhà mặt phố Hàng Bông">
                                        Bán nhà mặt phố Hàng Bông
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-xuan-thuy-7" title="Bán nhà mặt phố Xuân Thủy">
                                        Bán nhà mặt phố Xuân Thủy
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-trieu-viet-vuong-4" title="Bán nhà mặt phố Triệu Việt Vương">
                                        Bán nhà mặt phố Triệu Việt Vương
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
            