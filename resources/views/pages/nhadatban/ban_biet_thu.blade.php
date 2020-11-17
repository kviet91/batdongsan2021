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
                    <div class="custom-value hasvalue">Nhà biệt thự, liền kề</div>
                </div>
                <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="325">
                <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                        <li vl="0"><span class="current">Tất cả nhà đất</span></li>
                                        <li vl="324"><span>Căn hộ chung cư</span></li>
                                        <li vl="362"><span>Các loại nhà bán</span>
                                            <ul>
                                                <li vl="41"><span>Nhà riêng</span></li>
                                                <li vl="325"><span class="active">Nhà biệt thự, liền kề</span></li>
                                                <li vl="163"><span>Nhà mặt phố</span></li>
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
                            <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                            <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                <div class="select-filter-dropbox custom-dropbox advance-select-options hiding" style="display: none; height: 429px;">
                    <div class="custom-scroll-outside mCustomScrollbar _mCS_9 mCS_no_scrollbar" style="position: relative; overflow: visible; max-height: 373px;"><div id="mCSB_9" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_outside" tabindex="0" style="max-height: 0px;"><div id="mCSB_9_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
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
            <div id="link-reset" aria-label="Xóa tiêu chí lọc" data-microtip-position="bottom-left" role="tooltip"><img src="./assets/image/ic_reset.svg"></div>
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
                                    categoryId: 325,
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
        <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke" level="1" title="Bán nhà biệt thự, liền kề tại Việt Nam">Bán</a><span>/</span><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke" level="2" title="Bán nhà biệt thự, liền kề tại Việt Nam">Nhà biệt thự, liền kề trên toàn quốc</a>
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
        <h1>Bán nhà biệt thự, liền kề tại Việt Nam</h1>
            <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">14,258</span> bất động sản.</div>
        
    
    </div>
        <div class="product-search-most mar-top-8 mar-bot-8">
            <div class="box-title">Các khu vực, địa điểm nổi bật</div>
            <ul class="clearfix link-hover-blue">
                    <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-vinpearl-phu-quoc">Biệt thự Vinpearl Premium Phú Quốc</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-vinpearl-premium-golf-land">Biệt thự Vinpearl Premium Golf Land</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-vinpearl-premium-nha-trang-bay">Biệt thự Vinpearl Premium Nha Trang Bay</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-khanh-hoa">Bán biệt thự Khánh Hòa</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-tp-hcm">Bán biệt thự Hồ Chí Minh</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-saigon-mystery-villas">Biệt thự Saigon Mystery Villas</a></li>
            </ul>
        </div>
    
        <div class="product-nav-bar pad-top-8 clearfix">
            <ul class="ul-tab fl mar-right-16">
                <li class="list-display actived">Danh sách</li>
                <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
                <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-ban-nha-biet-thu-lien-ke">Bản đồ</a></li>
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
                <div class="vip0 product-item clearfix" uid="1162805">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-25-2-phuong-an-phu-prj-estella-heights/con-duy-nhat-1-240m2-vi-tri-vip-sat-canh-trung-tam-ong-mai-quan-2-pr27766358" title="CÒN DUY NHẤT 1 BIỆT THỰ 240M2 VỊ TRÍ VIP SÁT CẠNH (TRUNG TÂM THƯƠNG MẠI ESTELLA HEIGHTS) QUẬN 2." onclick="">
                            <img class="product-avatar-img" alt="CÒN DUY NHẤT 1 BIỆT THỰ 240M2 VỊ TRÍ VIP SÁT CẠNH (TRUNG TÂM THƯƠNG MẠI ESTELLA HEIGHTS) QUẬN 2." error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201112120227-c58b_wm.jpg" is-lazy-image="true" lazy-id="0">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-25-2-phuong-an-phu-prj-estella-heights/con-duy-nhat-1-240m2-vi-tri-vip-sat-canh-trung-tam-ong-mai-quan-2-pr27766358" title="CÒN DUY NHẤT 1 BIỆT THỰ 240M2 VỊ TRÍ VIP SÁT CẠNH (TRUNG TÂM THƯƠNG MẠI ESTELLA HEIGHTS) QUẬN 2." class="vipZero product-link">
                                CÒN DUY NHẤT 1 BIỆT THỰ 240M2 VỊ TRÍ VIP SÁT CẠNH (TRUNG TÂM THƯƠNG MẠI ESTELLA HEIGHTS) QUẬN 2.
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">240 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 2, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Bán Biệt thự vị trí đẹp đường rộng thoáng mát 16m không ngập nước ( 1 hướng về trung tâm thương mại Estella Heights 1 hướng thông ra đường Nguyễn Hoàng)
     - Cách Trung tâm Quận 1 chỉ 10 phút đi xe
     - 
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    Hôm nay
                                    <span class="tooltip-time">12/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27766358" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;C&amp;#210;N DUY NHẤT 1 BIỆT THỰ 240M2 VỊ TR&amp;#205; VIP S&amp;#193;T CẠNH (TRUNG T&amp;#194;M THƯƠNG MẠI ESTELLA HEIGHTS) QUẬN 2.&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112120227-c58b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112120227-c58b_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="CÒN DUY NHẤT 1 BIỆT THỰ 240M2 VỊ TRÍ VIP SÁT CẠNH (TRUNG TÂM THƯƠNG MẠI ESTELLA HEIGHTS) QUẬN 2." data-price="Giá thỏa thuận" data-area="240 m²" data-pricesort="0" data-areasort="240" data-room="0" data-toilets="0" data-address="Quận 2, Hồ Chí Minh" data-description="Bán Biệt thự vị trí đẹp đường rộng thoáng mát 16m không ngập nước ( 1 hướng về trung tâm thương mại Estella Heights 1 hướng thông ra đường Nguyễn Hoàng)
     - Cách Trung tâm Quận 1 chỉ 10 phút đi xe
     - " data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 17:37:36" data-contactname="Mk Land" data-contactmobile="0945281348" data-url="/ban-nha-biet-thu-lien-ke-duong-25-2-phuong-an-phu-prj-estella-heights/con-duy-nhat-1-240m2-vi-tri-vip-sat-canh-trung-tam-ong-mai-quan-2-pr27766358" data-totalmedia="3" data-createbyuser="1162805"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="836768">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-le-quang-dao-phuong-duong-noi-prj-an-vuong-villas/hot-10-lo-dt-160m2-khu-a-ra-hg-l-dau-gia-tot-nhat-thi-truong-pr27770830" title="Hot! 10 Lô Biệt Thự DT 160m2, Khu A An Vượng Villas Ra Hàng Lần Đầu, Giá Tốt Nhất Thị Trường." onclick="">
                            <img class="product-avatar-img" alt="Hot! 10 Lô Biệt Thự DT 160m2, Khu A An Vượng Villas Ra Hàng Lần Đầu, Giá Tốt Nhất Thị Trường." error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112164348-0a41_wm.jpg" is-lazy-image="true" lazy-id="1">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">8</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-le-quang-dao-phuong-duong-noi-prj-an-vuong-villas/hot-10-lo-dt-160m2-khu-a-ra-hg-l-dau-gia-tot-nhat-thi-truong-pr27770830" title="Hot! 10 Lô Biệt Thự DT 160m2, Khu A An Vượng Villas Ra Hàng Lần Đầu, Giá Tốt Nhất Thị Trường." class="vipZero product-link">
                                HOT! 10 LÔ BIỆT THỰ DT 160M2, KHU A AN VƯỢNG VILLAS RA HÀNG LẦN ĐẦU, GIÁ TỐT NHẤT THỊ TRƯỜNG.
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">160 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hà Đông, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Hiện tại Tôi đã có đầy đủ thông tin chi tiết quỹ căn Biệt thự An Vượng Villas chuẩn bị ra hàng trong tháng 11/2020, quỹ căn đa dạng các dòng diện tích với các phân khúc giá khác nhau: 160m2, 164,8m2,
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    Hôm nay
                                    <span class="tooltip-time">12/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27770830" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Hot! 10 L&amp;#244; Biệt Thự DT 160m2, Khu A An Vượng Villas Ra H&amp;#224;ng Lần Đầu, Gi&amp;#225; Tốt Nhất Thị Trường.&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112164348-0a41_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112164348-0a41_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Hot! 10 Lô Biệt Thự DT 160m2, Khu A An Vượng Villas Ra Hàng Lần Đầu, Giá Tốt Nhất Thị Trường." data-price="Giá thỏa thuận" data-area="160 m²" data-pricesort="0" data-areasort="160" data-room="5" data-toilets="5" data-address="Hà Đông, Hà Nội" data-description="Hiện tại Tôi đã có đầy đủ thông tin chi tiết quỹ căn Biệt thự An Vượng Villas chuẩn bị ra hàng trong tháng 11/2020, quỹ căn đa dạng các dòng diện tích với các phân khúc giá khác nhau: 160m2, 164,8m2," data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 16:46:53" data-contactname="Vũ Hoàng Anh" data-contactmobile="0971009323" data-url="/ban-nha-biet-thu-lien-ke-duong-le-quang-dao-phuong-duong-noi-prj-an-vuong-villas/hot-10-lo-dt-160m2-khu-a-ra-hg-l-dau-gia-tot-nhat-thi-truong-pr27770830" data-totalmedia="8" data-createbyuser="836768"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 vipaddon product-item clearfix" uid="1255761">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-21-1-xa-tien-xuan-prj-xanh-villas/hang-hot-nhat-lo-goc-mat-suoi-thiet-moi-nhat-du-an-gia-chi-7-4-ty-pr27754185" title="Hàng hot nhất Xanh Villas - lô góc mặt suối thiết kế mới nhất dự án giá chỉ 7,4 tỷ" onclick="">
                            <img class="product-avatar-img" alt="Hàng hot nhất Xanh Villas - lô góc mặt suối thiết kế mới nhất dự án giá chỉ 7,4 tỷ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112164513-7ad1_wm.jpg" is-lazy-image="true" lazy-id="2"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111145403-fcf2_wm.jpg" is-lazy-image="true" lazy-id="3"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111145048-815b_wm.jpg" is-lazy-image="true" lazy-id="4">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">9</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-21-1-xa-tien-xuan-prj-xanh-villas/hang-hot-nhat-lo-goc-mat-suoi-thiet-moi-nhat-du-an-gia-chi-7-4-ty-pr27754185" title="Hàng hot nhất Xanh Villas - lô góc mặt suối thiết kế mới nhất dự án giá chỉ 7,4 tỷ" class="vipZero product-link">
                                HÀNG HOT NHẤT XANH VILLAS - LÔ GÓC MẶT SUỐI THIẾT KẾ MỚI NHẤT DỰ ÁN GIÁ CHỈ 7,4 TỶ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">7.4 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">212 m²</span>
                                                            <span class="dot">·</span>
                                    <span class="bedroom">3 PN</span>
                            <span class="location">Thạch Thất, Hà Nội</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Biệt thự song lập đã có sổ đỏ mặt suối Xanh Villas. - Liên hệ: <span class="hidden-mobile des" raw="081.559.3668">081.559.3***</span>.- Diện tích đất 212m2, mặt tiền 15m, sâu 14,1m. - Ô đất vuông vắn, đảm bảo không thóp hậu. - Cửa chính Đông Bắc, hông nhà Đông Nam giúp nhà luôn thoáng mát tràn đầy vượng khí. - Cạnh bên là đảo Cọ thơ mộng là thiên đường để nướng BBQ. - Khoảng cách rất gần ra đường dạo bộ ven suối nhưng vẫn đảm bảo riên
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    Hôm nay
                                    <span class="tooltip-time">12/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Nguyễn Thị Hải Yến">
                                    <span class="contact-name">...ễn Thị Hải Yến</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0815593668" raw="0815593668">0815 593 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27754185" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;H&amp;#224;ng hot nhất Xanh Villas - l&amp;#244; g&amp;#243;c mặt suối thiết kế mới nhất dự &amp;#225;n gi&amp;#225; chỉ 7,4 tỷ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112164513-7ad1_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111145403-fcf2_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111145048-815b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/12/20201112164513-7ad1_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Hàng hot nhất Xanh Villas - lô góc mặt suối thiết kế mới nhất dự án giá chỉ 7,4 tỷ" data-price="7.4 tỷ" data-area="212 m²" data-pricesort="7400000000" data-areasort="212" data-room="3" data-toilets="0" data-address="Thạch Thất, Hà Nội" data-description="Biệt thự song lập đã có sổ đỏ mặt suối Xanh Villas. - Liên hệ: 081.559.3668.- Diện tích đất 212m2, mặt tiền 15m, sâu 14,1m. - Ô đất vuông vắn, đảm bảo không thóp hậu. - Cửa chính Đông Bắc, hông nhà Đông Nam giúp nhà luôn thoáng mát tràn đầy vượng khí. - Cạnh bên là đảo Cọ thơ mộng là thiên đường để nướng BBQ. - Khoảng cách rất gần ra đường dạo bộ ven suối nhưng vẫn đảm bảo riên" data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 16:16:46" data-contactname="Nguyễn Thị Hải Yến" data-contactmobile="0815593668" data-url="/ban-nha-biet-thu-lien-ke-duong-21-1-xa-tien-xuan-prj-xanh-villas/hang-hot-nhat-lo-goc-mat-suoi-thiet-moi-nhat-du-an-gia-chi-7-4-ty-pr27754185" data-totalmedia="9" data-createbyuser="1255761"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1024359">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/mo-ban-6-can-sieu-dep-tai-du-an-hills-pr27764366" title="MỞ BÁN 6 CĂN SIÊU ĐẸP TẠI DỰ ÁN CITYLAND PARK HILLS CK 11% TT TRƯỚC HẠN" onclick="">
                            <img class="product-avatar-img" alt="MỞ BÁN 6 CĂN SIÊU ĐẸP TẠI DỰ ÁN CITYLAND PARK HILLS CK 11% TT TRƯỚC HẠN" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112102822-91b8_wm.jpg" is-lazy-image="true" lazy-id="5">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">5</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/mo-ban-6-can-sieu-dep-tai-du-an-hills-pr27764366" title="MỞ BÁN 6 CĂN SIÊU ĐẸP TẠI DỰ ÁN CITYLAND PARK HILLS CK 11% TT TRƯỚC HẠN" class="vipZero product-link">
                                MỞ BÁN 6 CĂN SIÊU ĐẸP TẠI DỰ ÁN CITYLAND PARK HILLS CK 11% TT TRƯỚC HẠN
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">27.7 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Gò Vấp, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            DỰ ÁN CITYLAND PARK HILLS, PHƯỜNG 10, QUẬN GÒ VẤP 
     
      Tổng diện tích 27Ha trong đó có quảng trường nhạc nước rộng gần 20.000 đầu tiên tại HCM và cũng tọa lạc tại dự án Cityland Park Hills. 
     
     các t
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    Hôm nay
                                    <span class="tooltip-time">12/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27764366" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;MỞ B&amp;#193;N 6 CĂN SI&amp;#202;U ĐẸP TẠI DỰ &amp;#193;N CITYLAND PARK HILLS CK 11% TT TRƯỚC HẠN&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112102822-91b8_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112102822-91b8_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="MỞ BÁN 6 CĂN SIÊU ĐẸP TẠI DỰ ÁN CITYLAND PARK HILLS CK 11% TT TRƯỚC HẠN" data-price="27.7 tỷ" data-area="100 m²" data-pricesort="27700000763" data-areasort="100" data-room="0" data-toilets="0" data-address="Gò Vấp, Hồ Chí Minh" data-description="DỰ ÁN CITYLAND PARK HILLS, PHƯỜNG 10, QUẬN GÒ VẤP 
     
      Tổng diện tích 27Ha trong đó có quảng trường nhạc nước rộng gần 20.000 đầu tiên tại HCM và cũng tọa lạc tại dự án Cityland Park Hills. 
     
     các t" data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:36:15" data-contactname="Võ Quang Lộc" data-contactmobile="0933483963" data-url="/ban-nha-biet-thu-lien-ke-duong-phan-van-tri-phuong-10-8-prj-cityland-park-hills/mo-ban-6-can-sieu-dep-tai-du-an-hills-pr27764366" data-totalmedia="5" data-createbyuser="1024359"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="363485">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-xa-cam-hai-dong-prj-movenpick-cam-ranh-resort/chinh-chu-can-ban-gap-can-co-be-boi-rieng-san-vuon-rong-dep-pr27763166" title="Chính chủ cần bán gấp căn Movenpick Cam Ranh, có bể bơi riêng, sân vườn rộng , đẹp" onclick="">
                            <img class="product-avatar-img" alt="Chính chủ cần bán gấp căn Movenpick Cam Ranh, có bể bơi riêng, sân vườn rộng , đẹp" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/QXqyTfKK/20201112095013-7496_wm.jpg" is-lazy-image="true" lazy-id="6">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">17</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-xa-cam-hai-dong-prj-movenpick-cam-ranh-resort/chinh-chu-can-ban-gap-can-co-be-boi-rieng-san-vuon-rong-dep-pr27763166" title="Chính chủ cần bán gấp căn Movenpick Cam Ranh, có bể bơi riêng, sân vườn rộng , đẹp" class="vipZero product-link">
                                CHÍNH CHỦ CẦN BÁN GẤP CĂN MOVENPICK CAM RANH, CÓ BỂ BƠI RIÊNG, SÂN VƯỜN RỘNG , ĐẸP
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">25 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">518 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Cam Lâm, Khánh Hòa</span>
                        </div>
                        <div class="product-content">
                            - Cần chuyển nhượng Căn Movenpick, 1 PN - Diện tích: 518m2 đã bao gồm bể bơi riêng và sân vườn. - 100% các phòng ngủ, phòng khách, phòng bếp đều nhìn thấy biển. - Căn biệt thự chính chủ có sổ hồng sở
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    Hôm nay
                                    <span class="tooltip-time">12/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27763166" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần b&amp;#225;n gấp căn Movenpick Cam Ranh, c&amp;#243; bể bơi ri&amp;#234;ng, s&amp;#226;n vườn rộng , đẹp&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/QXqyTfKK/20201112095013-7496_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/QXqyTfKK/20201112095013-7496_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần bán gấp căn Movenpick Cam Ranh, có bể bơi riêng, sân vườn rộng , đẹp" data-price="25 tỷ" data-area="518 m²" data-pricesort="25000000000" data-areasort="518" data-room="0" data-toilets="0" data-address="Cam Lâm, Khánh Hòa" data-description="- Cần chuyển nhượng Căn Movenpick, 1 PN - Diện tích: 518m2 đã bao gồm bể bơi riêng và sân vườn. - 100% các phòng ngủ, phòng khách, phòng bếp đều nhìn thấy biển. - Căn biệt thự chính chủ có sổ hồng sở" data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 09:56:35" data-contactname="Trang" data-contactmobile="0903332648" data-url="/ban-nha-biet-thu-lien-ke-xa-cam-hai-dong-prj-movenpick-cam-ranh-resort/chinh-chu-can-ban-gap-can-co-be-boi-rieng-san-vuon-rong-dep-pr27763166" data-totalmedia="17" data-createbyuser="363485"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="562947">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-3-2-2-phuong-12-11-prj-la-vida-residences/hung-thinh-n-giu-cho-du-an-lavida-thanh-toan-30-n-5-5-ty-can-lh-0904335660-pr27756378" title="Hưng Thịnh nhận giữ chỗ dự án Lavida Residences, thanh toán 30% nhận nhà, 5.5 tỷ/căn. LH:0904335660" onclick="">
                            <img class="product-avatar-img" alt="Hưng Thịnh nhận giữ chỗ dự án Lavida Residences, thanh toán 30% nhận nhà, 5.5 tỷ/căn. LH:0904335660" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111164851-6ac3_wm.jpg" is-lazy-image="true" lazy-id="7">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">10</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-3-2-2-phuong-12-11-prj-la-vida-residences/hung-thinh-n-giu-cho-du-an-lavida-thanh-toan-30-n-5-5-ty-can-lh-0904335660-pr27756378" title="Hưng Thịnh nhận giữ chỗ dự án Lavida Residences, thanh toán 30% nhận nhà, 5.5 tỷ/căn. LH:0904335***" class="vipZero product-link" style="overflow: visible;">
                                HƯNG THỊNH NHẬN GIỮ CHỖ DỰ ÁN LAVIDA RESIDENCES, THANH TOÁN 30% NHẬN NHÀ, 5.5 TỶ/CĂN. LH:<span class="hidden-mobile m-on-title" raw="0904335660">0904335***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">5.5 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">86 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Vũng Tàu, Bà Rịa Vũng Tàu</span>
                        </div>
                        <div class="product-content">
                            * Nhận giữ chỗ dự án Lavida Residences - khu đô thị kiểu mẫu đầu tiên, Phú Mỹ Hưng tại thành phố Vũng Tàu, trả góp 2 năm không lãi suất, - Thanh toán chỉ 30% chờ nhận nhà.* Nhà phố thương mại. - Shop
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    Hôm qua
                                    <span class="tooltip-time">11/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27756378" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Hưng Thịnh nhận giữ chỗ dự &amp;#225;n Lavida Residences, thanh to&amp;#225;n 30% nhận nh&amp;#224;, 5.5 tỷ/căn. LH:0904335660&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111164851-6ac3_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111164851-6ac3_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Hưng Thịnh nhận giữ chỗ dự án Lavida Residences, thanh toán 30% nhận nhà, 5.5 tỷ/căn. LH:0904335660" data-price="5.5 tỷ" data-area="86 m²" data-pricesort="5500000000" data-areasort="86" data-room="0" data-toilets="0" data-address="Vũng Tàu, Bà Rịa Vũng Tàu" data-description="* Nhận giữ chỗ dự án Lavida Residences - khu đô thị kiểu mẫu đầu tiên, Phú Mỹ Hưng tại thành phố Vũng Tàu, trả góp 2 năm không lãi suất, - Thanh toán chỉ 30% chờ nhận nhà.* Nhà phố thương mại. - Shop" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 16:48:04" data-contactname="Pham Thi Ngoc" data-contactmobile="0904335660" data-url="/ban-nha-biet-thu-lien-ke-duong-3-2-2-phuong-12-11-prj-la-vida-residences/hung-thinh-n-giu-cho-du-an-lavida-thanh-toan-30-n-5-5-ty-can-lh-0904335660-pr27756378" data-totalmedia="10" data-createbyuser="562947"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1401556">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-tan-phuoc-khanh-10-phuong-tan-phuoc-khanh-prj-the-standard-central-park/khu-lap-dang-song-ho-tro-tt-30-den-n-chiet-khau-tu-2-12-pr27755923" title="Khu biệt lập đáng sống The Standard Central Park hỗ trợ tt 30% đến nhận nhà, chiết khấu từ 2 - 12%" onclick="">
                            <img class="product-avatar-img" alt="Khu biệt lập đáng sống The Standard Central Park hỗ trợ tt 30% đến nhận nhà, chiết khấu từ 2 - 12%" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111161410-c8a6_wm.jpg" is-lazy-image="true" lazy-id="8">
                        </a>
                        <span class="product-feature">
                                                                                <img src="./assets/image/ic_video.svg">
                        </span>
                            <span class="product-media">13</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-tan-phuoc-khanh-10-phuong-tan-phuoc-khanh-prj-the-standard-central-park/khu-lap-dang-song-ho-tro-tt-30-den-n-chiet-khau-tu-2-12-pr27755923" title="Khu biệt lập đáng sống The Standard Central Park hỗ trợ tt 30% đến nhận nhà, chiết khấu từ 2 - 12%" class="vipZero product-link">
                                KHU BIỆT LẬP ĐÁNG SỐNG THE STANDARD CENTRAL PARK HỖ TRỢ TT 30% ĐẾN NHẬN NHÀ, CHIẾT KHẤU TỪ 2 - 12%
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">4.5 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">85 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Tân Uyên, Bình Dương</span>
                        </div>
                        <div class="product-content">
                            Chỉ từ 4 - 5 tỷ/căn đã vat nhà như hình, thanh toán 30% đến nhận nhà, chiết khấu từ 2 - 12%. Đặc biệt ngân hàng cho vay đến 75% giá trị nhà.- Mặt tiền đường Tân Phước Khánh + Thủ Khoa Huân. - Chủ đầu
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    Hôm qua
                                    <span class="tooltip-time">11/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27755923" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Khu biệt lập đ&amp;#225;ng sống The Standard Central Park hỗ trợ tt 30% đến nhận nh&amp;#224;, chiết khấu từ 2 - 12%&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111161410-c8a6_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111161410-c8a6_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="true" data-title="Khu biệt lập đáng sống The Standard Central Park hỗ trợ tt 30% đến nhận nhà, chiết khấu từ 2 - 12%" data-price="4.5 tỷ" data-area="85 m²" data-pricesort="4500000000" data-areasort="85" data-room="0" data-toilets="0" data-address="Tân Uyên, Bình Dương" data-description="Chỉ từ 4 - 5 tỷ/căn đã vat nhà như hình, thanh toán 30% đến nhận nhà, chiết khấu từ 2 - 12%. Đặc biệt ngân hàng cho vay đến 75% giá trị nhà.- Mặt tiền đường Tân Phước Khánh + Thủ Khoa Huân. - Chủ đầu" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 16:27:11" data-contactname="Lan Anh" data-contactmobile="0906488698" data-url="/ban-nha-biet-thu-lien-ke-duong-tan-phuoc-khanh-10-phuong-tan-phuoc-khanh-prj-the-standard-central-park/khu-lap-dang-song-ho-tro-tt-30-den-n-chiet-khau-tu-2-12-pr27755923" data-totalmedia="13" data-createbyuser="1401556"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 vipaddon product-item clearfix" uid="1421822">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-huong-lo-2-xa-long-hung-6-prj-aqua-city/co-hoi-dau-tu-sieu-loi-nhuan-so-huu-pho-cuc-ki-de-dang-chi-6-350-ty-dt-8x20m-ngay-ben-du-thuyen-pr27751409" title="Cơ hội đầu tư siêu lợi nhuận sở hữu nhà phố cực kì dễ dàng chỉ 6,35 tỷ, DT 8x20m ngay bến du thuyền" onclick="">
                            <img class="product-avatar-img" alt="Cơ hội đầu tư siêu lợi nhuận sở hữu nhà phố cực kì dễ dàng chỉ 6,35 tỷ, DT 8x20m ngay bến du thuyền" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111114831-8bdb_wm.jpg" is-lazy-image="true" lazy-id="9"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111114835-55b8_wm.jpg" is-lazy-image="true" lazy-id="10"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111114850-4793_wm.jpg" is-lazy-image="true" lazy-id="11">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">10</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-huong-lo-2-xa-long-hung-6-prj-aqua-city/co-hoi-dau-tu-sieu-loi-nhuan-so-huu-pho-cuc-ki-de-dang-chi-6-350-ty-dt-8x20m-ngay-ben-du-thuyen-pr27751409" title="Cơ hội đầu tư siêu lợi nhuận sở hữu nhà phố cực kì dễ dàng chỉ 6,35 tỷ, DT 8x20m ngay bến du thuyền" class="vipZero product-link">
                                CƠ HỘI ĐẦU TƯ SIÊU LỢI NHUẬN SỞ HỮU NHÀ PHỐ CỰC KÌ DỄ DÀNG CHỈ 6,35 TỶ, DT 8X20M NGAY BẾN DU THUYỀN
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">6.35 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">160 m²</span>
                                                    <span class="location">Biên Hòa, Đồng Nai</span>
                        </div>
                        <div class="product-content">
                            Giỏ hàng chuyển nhượng cực kì hot nhà phố, biệt thự, shophouse đồng bộ được xây dựng 1 trệt 2 lầu với thiết kế mang âm hưởng hiện đại chuẩn Châu Âu đã và đang có mặt trên thị trường mang tên Aqua city khu đô thị thông minh đẳng cấp ở phía Đông của Thành phố Hồ Chí Minh.- Nhà phố: 8x20m giá 6.350 tỷ. - Nhà phố: 8x20m giá 6.6 tỷ đường thông thoáng mát. - Nhà phố: 8x20m giá 7.1 tỷ
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    Hôm qua
                                    <span class="tooltip-time">11/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Trúc Linh">
                                    <span class="contact-name">Trúc Linh</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0982436300" raw="0982436300">0982 436 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27751409" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cơ hội đầu tư si&amp;#234;u lợi nhuận sở hữu nh&amp;#224; phố cực k&amp;#236; dễ d&amp;#224;ng chỉ 6,35 tỷ, DT 8x20m ngay bến du thuyền&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111114831-8bdb_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111114835-55b8_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111114850-4793_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/11/20201111114831-8bdb_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cơ hội đầu tư siêu lợi nhuận sở hữu nhà phố cực kì dễ dàng chỉ 6,35 tỷ, DT 8x20m ngay bến du thuyền" data-price="6.35 tỷ" data-area="160 m²" data-pricesort="6350000000" data-areasort="160" data-room="0" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Giỏ hàng chuyển nhượng cực kì hot nhà phố, biệt thự, shophouse đồng bộ được xây dựng 1 trệt 2 lầu với thiết kế mang âm hưởng hiện đại chuẩn Châu Âu đã và đang có mặt trên thị trường mang tên Aqua city khu đô thị thông minh đẳng cấp ở phía Đông của Thành phố Hồ Chí Minh.- Nhà phố: 8x20m giá 6.350 tỷ. - Nhà phố: 8x20m giá 6.6 tỷ đường thông thoáng mát. - Nhà phố: 8x20m giá 7.1 tỷ" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 12:14:19" data-contactname="Trúc Linh" data-contactmobile="0982436300" data-url="/ban-nha-biet-thu-lien-ke-duong-huong-lo-2-xa-long-hung-6-prj-aqua-city/co-hoi-dau-tu-sieu-loi-nhuan-so-huu-pho-cuc-ki-de-dang-chi-6-350-ty-dt-8x20m-ngay-ben-du-thuyen-pr27751409" data-totalmedia="10" data-createbyuser="1421822"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1058295">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-tan-mai-phuong-thinh-liet-prj-louis-city-hoang-mai/ban-mat-pho-95m2-gia-chi-7-ty-dong-lh-0976-49-11-88-pr27349886" title="Bán nhà mặt phố Tân Mai, 95m2, giá chỉ 7 tỷ đồng, LH 0976.49.11.88" onclick="">
                            <img class="product-avatar-img" alt="Bán nhà mặt phố Tân Mai, 95m2, giá chỉ 7 tỷ đồng, LH 0976.49.11.88" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/09/20201009105149-12ff_wm.jpg" is-lazy-image="true" lazy-id="12">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">3</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-tan-mai-phuong-thinh-liet-prj-louis-city-hoang-mai/ban-mat-pho-95m2-gia-chi-7-ty-dong-lh-0976-49-11-88-pr27349886" title="Bán nhà mặt phố Tân Mai, 95m2, giá chỉ 7 tỷ đồng, LH 0976.49.1*.**" class="vipZero product-link" style="overflow: visible;">
                                BÁN NHÀ MẶT PHỐ TÂN MAI, 95M2, GIÁ CHỈ 7 TỶ ĐỒNG, LH <span class="hidden-mobile m-on-title" raw="0976.49.11.88">0976.49.1*.**</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">75 triệu/m²</span>
                                <span class="dot">·</span>
                                <span class="area">95 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hoàng Mai, Hà Nội</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Bán nhà mặt phố Tân Mai, 95m2 giá chỉ 7 tỷ đồng, LH <span class="hidden-mobile des" raw="0976.49.11.88">0976.49.1*.**</span>. Giá chỉ từ 75tr/m2 anh chị có thể mua được căn nhà khu vực nào có thể kinh doanh buôn bán được, mà lại được nằm trong quần thể hạ tầ
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    Hôm qua
                                    <span class="tooltip-time">11/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27349886" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; mặt phố T&amp;#226;n Mai, 95m2, gi&amp;#225; chỉ 7 tỷ đồng, LH 0976.49.11.88&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/09/20201009105149-12ff_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/09/20201009105149-12ff_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà mặt phố Tân Mai, 95m2, giá chỉ 7 tỷ đồng, LH 0976.49.11.88" data-price="75 triệu/m²" data-area="95 m²" data-pricesort="7125000000" data-areasort="95" data-room="0" data-toilets="0" data-address="Hoàng Mai, Hà Nội" data-description="Bán nhà mặt phố Tân Mai, 95m2 giá chỉ 7 tỷ đồng, LH 0976.49.11.88. Giá chỉ từ 75tr/m2 anh chị có thể mua được căn nhà khu vực nào có thể kinh doanh buôn bán được, mà lại được nằm trong quần thể hạ tầ" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 11:37:55" data-contactname="Em Thơm" data-contactmobile="0976491188" data-url="/ban-nha-biet-thu-lien-ke-duong-tan-mai-phuong-thinh-liet-prj-louis-city-hoang-mai/ban-mat-pho-95m2-gia-chi-7-ty-dong-lh-0976-49-11-88-pr27349886" data-totalmedia="3" data-createbyuser="1058295"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="233197">
                    <div class="product-image noimage">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-xa-long-hung-6-prj-aqua-city/co-hoi-hot-de-so-huu-pho-do-novaland-dau-tu-thanh-toan-chi-tu-600tr-2-5-ty-pr27364567" title="Cơ hội hot để sở hữu nhà phố biệt thự Aqua City do Novaland đầu tư thanh toán chỉ từ 600tr - 2.5 tỷ" onclick="">
                            <img class="product-avatar-img" alt="Cơ hội hot để sở hữu nhà phố biệt thự Aqua City do Novaland đầu tư thanh toán chỉ từ 600tr - 2.5 tỷ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/10/20201010133950-a0f4_wm.jpg" is-lazy-image="true" lazy-id="13">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-xa-long-hung-6-prj-aqua-city/co-hoi-hot-de-so-huu-pho-do-novaland-dau-tu-thanh-toan-chi-tu-600tr-2-5-ty-pr27364567" title="Cơ hội hot để sở hữu nhà phố biệt thự Aqua City do Novaland đầu tư thanh toán chỉ từ 600tr - 2.5 tỷ" class="vipZero product-link">
                                CƠ HỘI HOT ĐỂ SỞ HỮU NHÀ PHỐ BIỆT THỰ AQUA CITY DO NOVALAND ĐẦU TƯ THANH TOÁN CHỈ TỪ 600TR - 2.5 TỶ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">6.4 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">160 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Biên Hòa, Đồng Nai</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Tập đoàn Novaland cho ra mắt nhiều nhà phố, biệt thự mới với vị trí đẹp công viên hoặc view sông với chiết khấu khủng lên đến 1 tỷ. Call <span class="hidden-mobile des" raw="0977771919">0977771***</span>. Call <span class="hidden-mobile des" raw="0938179199">0938179***</span>. Booking Aqua City - River Park 1.
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    Hôm qua
                                    <span class="tooltip-time">11/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27364567" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cơ hội hot để sở hữu nh&amp;#224; phố biệt thự Aqua City do Novaland đầu tư thanh to&amp;#225;n chỉ từ 600tr - 2.5 tỷ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/10/20201010133950-a0f4_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/10/20201010133950-a0f4_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cơ hội hot để sở hữu nhà phố biệt thự Aqua City do Novaland đầu tư thanh toán chỉ từ 600tr - 2.5 tỷ" data-price="6.4 tỷ" data-area="160 m²" data-pricesort="6400000000" data-areasort="160" data-room="0" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Tập đoàn Novaland cho ra mắt nhiều nhà phố, biệt thự mới với vị trí đẹp công viên hoặc view sông với chiết khấu khủng lên đến 1 tỷ. Call 0977771919. Call 0938179199. Booking Aqua City - River Park 1." data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 11:12:09" data-contactname="Lê Nguyễn Viết Tùng" data-contactmobile="0938179199" data-url="/ban-nha-biet-thu-lien-ke-xa-long-hung-6-prj-aqua-city/co-hoi-hot-de-so-huu-pho-do-novaland-dau-tu-thanh-toan-chi-tu-600tr-2-5-ty-pr27364567" data-totalmedia="1" data-createbyuser="233197"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 vipaddon product-item clearfix" uid="181886">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-phuong-phuc-loi-prj-vinhomes-riverside/ban-cat-lo-royal-city-32tr-m2-so-do-vay-70-ls-0-thue-9tr-th-mp-dich-vu-0946528058-0976325668-pr25280371" title="Bán biệt thự Vinhomes Riverside giá rẻ nhất thị trường, SĐ, vay 70%, LS 0%. 0917269796, 0915469759" onclick="">
                            <img class="product-avatar-img" alt="Bán biệt thự Vinhomes Riverside giá rẻ nhất thị trường, SĐ, vay 70%, LS 0%. 0917269796, 0915469759" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/04/30/XGCHVV4L/20200430090924-7d6d_wm.jpg" is-lazy-image="true" lazy-id="14"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/04/30/XGCHVV4L/20200430090346-3b9e_wm.jpg" is-lazy-image="true" lazy-id="15"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/04/30/XGCHVV4L/20200430090349-b571_wm.jpg" is-lazy-image="true" lazy-id="16">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">20</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-phuong-phuc-loi-prj-vinhomes-riverside/ban-cat-lo-royal-city-32tr-m2-so-do-vay-70-ls-0-thue-9tr-th-mp-dich-vu-0946528058-0976325668-pr25280371" title="Bán biệt thự Vinhomes Riverside giá rẻ nhất thị trường, SĐ, vay 70%, LS 0%. 0917269***, 0915469***" class="vipZero product-link" style="overflow: visible;">
                                BÁN BIỆT THỰ VINHOMES RIVERSIDE GIÁ RẺ NHẤT THỊ TRƯỜNG, SĐ, VAY 70%, LS 0%. <span class="hidden-mobile m-on-title" raw="0917269796">0917269***</span>, <span class="hidden-mobile m-on-title" raw="0915469759">0915469***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">80 triệu/m²</span>
                                                            <span class="dot">·</span>
                                    <span class="bedroom">5 PN</span>
                                    <span class="dot">·</span>
                                    <span class="toilet">5 WC</span>
                            <span class="location">Long Biên, Hà Nội</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Tôi đang ở tại Vinhomes Riverside, nên tôi tự tin mình là người tư vấn cũng như hỗ trợ cho bạn tốt nhất về những vấn đề liên quan đến mua bán, cho thuê, thiết kế thi công tại đây. Quý khách vui lòng liên hệ: <span class="hidden-mobile des" raw="0917269796">0917269***</span> - <span class="hidden-mobile des" raw="0915469759">0915469***</span> (zalo, viber). https://nagroup.vn/ I: Biệt thự Vinhomes Reverside Long Biên, Hà Nội: 1) Hoa Sữa: - HS08 - 0X - 270m2 - nhà thô - đơn lập, Tây Bắc. -
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">10/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact" name="Ms Hoa">
                                    <span class="contact-name">Ms Hoa</span>
                                    <span class="hidden-phone contact-phone btn-blue-7" mobile="0917269796" raw="0917269796">0917 269 *** · Hiện số</span>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="25280371" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n biệt thự Vinhomes Riverside gi&amp;#225; rẻ nhất thị trường, SĐ, vay 70%, LS 0%. 0917269796, 0915469759&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/04/30/XGCHVV4L/20200430090924-7d6d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/04/30/XGCHVV4L/20200430090346-3b9e_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/04/30/XGCHVV4L/20200430090349-b571_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/04/30/XGCHVV4L/20200430090924-7d6d_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán biệt thự Vinhomes Riverside giá rẻ nhất thị trường, SĐ, vay 70%, LS 0%. 0917269796, 0915469759" data-price="80 triệu/m²" data-area="Không xác định" data-pricesort="0" data-areasort="0" data-room="5" data-toilets="5" data-address="Long Biên, Hà Nội" data-description="Tôi đang ở tại Vinhomes Riverside, nên tôi tự tin mình là người tư vấn cũng như hỗ trợ cho bạn tốt nhất về những vấn đề liên quan đến mua bán, cho thuê, thiết kế thi công tại đây. Quý khách vui lòng liên hệ: 0917269796 - 0915469759 (zalo, viber). https://nagroup.vn/ I: Biệt thự Vinhomes Reverside Long Biên, Hà Nội: 1) Hoa Sữa: - HS08 - 0X - 270m2 - nhà thô - đơn lập, Tây Bắc. -" data-duration="2 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 17:17:29" data-contactname="Ms Hoa" data-contactmobile="0917269796" data-url="/ban-nha-biet-thu-lien-ke-phuong-phuc-loi-prj-vinhomes-riverside/ban-cat-lo-royal-city-32tr-m2-so-do-vay-70-ls-0-thue-9tr-th-mp-dich-vu-0946528058-0976325668-pr25280371" data-totalmedia="20" data-createbyuser="181886"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="326550">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-to-huu-phuong-van-phuc-1-prj-tsq-galaxy/hot-9-can-ngoai-giao-gia-uu-dai-69-da-co-so-do-lh-chon-can-0982251985-pr27732789" title="Hot! 9 căn ngoại giao giá ưu đãi. Galaxy 69 tố hữu đã có sổ đỏ lh chọn căn 0824623333" onclick="">
                            <img class="product-avatar-img" alt="Hot! 9 căn ngoại giao giá ưu đãi. Galaxy 69 tố hữu đã có sổ đỏ lh chọn căn 0824623333" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110095536-58ea_wm.jpg" is-lazy-image="true" lazy-id="17">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-to-huu-phuong-van-phuc-1-prj-tsq-galaxy/hot-9-can-ngoai-giao-gia-uu-dai-69-da-co-so-do-lh-chon-can-0982251985-pr27732789" title="Hot! 9 căn ngoại giao giá ưu đãi. Galaxy 69 tố hữu đã có sổ đỏ lh chọn căn 0824623***" class="vipZero product-link" style="overflow: visible;">
                                HOT! 9 CĂN NGOẠI GIAO GIÁ ƯU ĐÃI. GALAXY 69 TỐ HỮU ĐÃ CÓ SỔ ĐỎ LH CHỌN CĂN <span class="hidden-mobile m-on-title" raw="0824623333">0824623***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">80 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hà Đông, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            GALAXY VẠN PHÚC - 69 TỐ HỮU. ========================== Đã có Sổ Đỏ từng lô. Nhận nhà ngay, yên tâm chất lượng. ----------------------1 SHOPHOUSE: 95m - 111m - 140m. Giá chỉ từ 25 tỷ - 32 tỷ/lô xây h
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">10/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27732789" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Hot! 9 căn ngoại giao gi&amp;#225; ưu đ&amp;#227;i. Galaxy 69 tố hữu đ&amp;#227; c&amp;#243; sổ đỏ lh chọn căn 0824623333&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110095536-58ea_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110095536-58ea_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Hot! 9 căn ngoại giao giá ưu đãi. Galaxy 69 tố hữu đã có sổ đỏ lh chọn căn 0824623333" data-price="Giá thỏa thuận" data-area="80 m²" data-pricesort="0" data-areasort="80" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="GALAXY VẠN PHÚC - 69 TỐ HỮU. ========================== Đã có Sổ Đỏ từng lô. Nhận nhà ngay, yên tâm chất lượng. ----------------------1 SHOPHOUSE: 95m - 111m - 140m. Giá chỉ từ 25 tỷ - 32 tỷ/lô xây h" data-duration="2 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 15:45:51" data-contactname="Hà Thành" data-contactmobile="0824623333" data-url="/ban-nha-biet-thu-lien-ke-duong-to-huu-phuong-van-phuc-1-prj-tsq-galaxy/hot-9-can-ngoai-giao-gia-uu-dai-69-da-co-so-do-lh-chon-can-0982251985-pr27732789" data-totalmedia="6" data-createbyuser="326550"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="942927">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-dinh-duc-thien-xa-binh-chanh-3-prj-nha-xinh-residential/mo-ban-30-can-pho-thuong-mai-kdt-1-tret-2-lau-shr-1-4-ty-can-pr23425276" title="Chỉ với 1.5 tỷ sở hữu ngay nhà phố TM - Nhà Xinh Residential, 1 trệt 2 lầu, NH hỗ trợ 70%, LS 0%" onclick="">
                            <img class="product-avatar-img" alt="Chỉ với 1.5 tỷ sở hữu ngay nhà phố TM - Nhà Xinh Residential, 1 trệt 2 lầu, NH hỗ trợ 70%, LS 0%" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2019/11/13/20191113100025-ff9b_wm.jpg" is-lazy-image="true" lazy-id="18">
                        </a>
                        <span class="product-feature">
                                <img src="./assets/image/ic_3d.svg">
                                                                                <img src="./assets/image/ic_video.svg">
                        </span>
                            <span class="product-media">21</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-dinh-duc-thien-xa-binh-chanh-3-prj-nha-xinh-residential/mo-ban-30-can-pho-thuong-mai-kdt-1-tret-2-lau-shr-1-4-ty-can-pr23425276" title="Chỉ với 1.5 tỷ sở hữu ngay nhà phố TM - Nhà Xinh Residential, 1 trệt 2 lầu, NH hỗ trợ 70%, LS 0%" class="vipZero product-link">
                                CHỈ VỚI 1.5 TỶ SỞ HỮU NGAY NHÀ PHỐ TM - NHÀ XINH RESIDENTIAL, 1 TRỆT 2 LẦU, NH HỖ TRỢ 70%, LS 0%
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">1.5 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Bình Chánh, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            * Mở bán chính thức 40 căn nhà phố thương mại 1 trệt 2 lầu với thiết kế đẹp và lạ mắt theo phong cách Châu Âu.* Nhà Xinh Residential với quy mô 20 ha, 750 căn bao gồm: + 419 nhà phố liền kề. + 109 nh
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">10/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="23425276" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chỉ với 1.5 tỷ sở hữu ngay nh&amp;#224; phố TM - Nh&amp;#224; Xinh Residential, 1 trệt 2 lầu, NH hỗ trợ 70%, LS 0%&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/11/13/20191113100025-ff9b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2019/11/13/20191113100025-ff9b_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="true" data-has360="false" data-hasvideo="true" data-title="Chỉ với 1.5 tỷ sở hữu ngay nhà phố TM - Nhà Xinh Residential, 1 trệt 2 lầu, NH hỗ trợ 70%, LS 0%" data-price="1.5 tỷ" data-area="100 m²" data-pricesort="1500000000" data-areasort="100" data-room="4" data-toilets="3" data-address="Bình Chánh, Hồ Chí Minh" data-description="* Mở bán chính thức 40 căn nhà phố thương mại 1 trệt 2 lầu với thiết kế đẹp và lạ mắt theo phong cách Châu Âu.* Nhà Xinh Residential với quy mô 20 ha, 750 căn bao gồm: + 419 nhà phố liền kề. + 109 nh" data-duration="2 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 15:40:01" data-contactname="Địa Ốc Nhà Xinh Sg" data-contactmobile="0917889494" data-url="/ban-nha-biet-thu-lien-ke-duong-dinh-duc-thien-xa-binh-chanh-3-prj-nha-xinh-residential/mo-ban-30-can-pho-thuong-mai-kdt-1-tret-2-lau-shr-1-4-ty-can-pr23425276" data-totalmedia="21" data-createbyuser="942927"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1112033">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-pho-le-trong-tan-phuong-duong-noi-prj-khu-do-thi-geleximco-le-trong-tan/chuyen-ban-lk-bt-dt-75m2-80m2-87m2-120m2-240m2-350m2-0911541368-pr25754834" title="Chuyên bán LK, BT Geleximco DT 75m2 - 80m2 - 87m2 - 120m2 - 240m2 - 350m2. 0989376961" onclick="">
                            <img class="product-avatar-img" alt="Chuyên bán LK, BT Geleximco DT 75m2 - 80m2 - 87m2 - 120m2 - 240m2 - 350m2. 0989376961" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/08/20200608172315-8260_wm.jpg" is-lazy-image="true" lazy-id="19">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">10</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-pho-le-trong-tan-phuong-duong-noi-prj-khu-do-thi-geleximco-le-trong-tan/chuyen-ban-lk-bt-dt-75m2-80m2-87m2-120m2-240m2-350m2-0911541368-pr25754834" title="Chuyên bán LK, BT Geleximco DT 75m2 - 80m2 - 87m2 - 120m2 - 240m2 - 350m2. 0989376961" class="vipZero product-link">
                                CHUYÊN BÁN LK, BT GELEXIMCO DT 75M2 - 80M2 - 87M2 - 120M2 - 240M2 - 350M2. 0989376961
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">50 triệu/m²</span>
                                <span class="dot">·</span>
                                <span class="area">95 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hà Đông, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Khu vực: Bán nhà biệt thự, liền kề tại khu đô thị Geleximco - Lê Trọng Tấn - Quận Hà Đông - Hà Nội. Thông tin mô tả. Trân trọng gửi tới quý khách một cơ hội đầu tư, tiềm năng vô cùng tuyệt vời, với s
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">10/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="25754834" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chuy&amp;#234;n b&amp;#225;n LK, BT Geleximco DT 75m2 - 80m2 - 87m2 - 120m2 - 240m2 - 350m2. 0989376961&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/08/20200608172315-8260_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/06/08/20200608172315-8260_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chuyên bán LK, BT Geleximco DT 75m2 - 80m2 - 87m2 - 120m2 - 240m2 - 350m2. 0989376961" data-price="50 triệu/m²" data-area="95 m²" data-pricesort="4750000000" data-areasort="95" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="Khu vực: Bán nhà biệt thự, liền kề tại khu đô thị Geleximco - Lê Trọng Tấn - Quận Hà Đông - Hà Nội. Thông tin mô tả. Trân trọng gửi tới quý khách một cơ hội đầu tư, tiềm năng vô cùng tuyệt vời, với s" data-duration="2 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 15:16:46" data-contactname="Bđs Hùng Dũng" data-contactmobile="0911541368" data-url="/ban-nha-biet-thu-lien-ke-pho-le-trong-tan-phuong-duong-noi-prj-khu-do-thi-geleximco-le-trong-tan/chuyen-ban-lk-bt-dt-75m2-80m2-87m2-120m2-240m2-350m2-0911541368-pr25754834" data-totalmedia="10" data-createbyuser="1112033"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="186076">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-nguyen-duy-trinh-phuong-truong-thanh-prj-khu-do-thi-moi-dong-tang-long/ban-gap-pho-5x20-mat-tien-a1-20m-view-cong-vien-ven-song-thong-tin-that-pr27735595" title="Bán gấp nhà phố Đông Tăng Long 5x20m, mặt tiền A1 đường 20m view công viên ven sông, thông tin thật" onclick="">
                            <img class="product-avatar-img" alt="Bán gấp nhà phố Đông Tăng Long 5x20m, mặt tiền A1 đường 20m view công viên ven sông, thông tin thật" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110113831-cd46_wm.jpg" is-lazy-image="true" lazy-id="20">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">6</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-nguyen-duy-trinh-phuong-truong-thanh-prj-khu-do-thi-moi-dong-tang-long/ban-gap-pho-5x20-mat-tien-a1-20m-view-cong-vien-ven-song-thong-tin-that-pr27735595" title="Bán gấp nhà phố Đông Tăng Long 5x20m, mặt tiền A1 đường 20m view công viên ven sông, thông tin thật" class="vipZero product-link">
                                BÁN GẤP NHÀ PHỐ ĐÔNG TĂNG LONG 5X20M, MẶT TIỀN A1 ĐƯỜNG 20M VIEW CÔNG VIÊN VEN SÔNG, THÔNG TIN THẬT
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">5.95 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Quận 9, Hồ Chí Minh</span>
                        </div>
                        <div class="product-content">
                            Khu đô thị có quy mô tầm cỡ với vị trí độc tôn tại Quận 9, Đông Tăng Long có bốn mặt tiếp giáp các đường trục chính gồm: - Đường Nguyễn Duy Trinh (30m). - Đường Liên Phường (60m). - Đường Lã Xuân Oai
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">10/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27735595" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n gấp nh&amp;#224; phố Đ&amp;#244;ng Tăng Long 5x20m, mặt tiền A1 đường 20m view c&amp;#244;ng vi&amp;#234;n ven s&amp;#244;ng, th&amp;#244;ng tin thật&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110113831-cd46_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110113831-cd46_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán gấp nhà phố Đông Tăng Long 5x20m, mặt tiền A1 đường 20m view công viên ven sông, thông tin thật" data-price="5.95 tỷ" data-area="100 m²" data-pricesort="5950000000" data-areasort="100" data-room="5" data-toilets="4" data-address="Quận 9, Hồ Chí Minh" data-description="Khu đô thị có quy mô tầm cỡ với vị trí độc tôn tại Quận 9, Đông Tăng Long có bốn mặt tiếp giáp các đường trục chính gồm: - Đường Nguyễn Duy Trinh (30m). - Đường Liên Phường (60m). - Đường Lã Xuân Oai" data-duration="2 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 11:38:52" data-contactname="Hằng Tony" data-contactmobile="0918799831" data-url="/ban-nha-biet-thu-lien-ke-duong-nguyen-duy-trinh-phuong-truong-thanh-prj-khu-do-thi-moi-dong-tang-long/ban-gap-pho-5x20-mat-tien-a1-20m-view-cong-vien-ven-song-thong-tin-that-pr27735595" data-totalmedia="6" data-createbyuser="186076"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="158541">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-to-huu-phuong-van-phuc-1-prj-him-lam-van-phuc/-shophouse-2-mat-tien-vi-tri-can-dep-bang-gia-goc-tu-0938-pr27735350" title="Him Lam Vạn Phúc shophouse 2 MT đường Tố Hữu, vị trí căn đẹp, bảng giá gốc từ Him Lam. 0938258878" onclick="">
                            <img class="product-avatar-img" alt="Him Lam Vạn Phúc shophouse 2 MT đường Tố Hữu, vị trí căn đẹp, bảng giá gốc từ Him Lam. 0938258878" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110112057-9456_wm.jpg" is-lazy-image="true" lazy-id="21">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">8</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-to-huu-phuong-van-phuc-1-prj-him-lam-van-phuc/-shophouse-2-mat-tien-vi-tri-can-dep-bang-gia-goc-tu-0938-pr27735350" title="Him Lam Vạn Phúc shophouse 2 MT đường Tố Hữu, vị trí căn đẹp, bảng giá gốc từ Him Lam. 0938258***" class="vipZero product-link" style="overflow: visible;">
                                HIM LAM VẠN PHÚC SHOPHOUSE 2 MT ĐƯỜNG TỐ HỮU, VỊ TRÍ CĂN ĐẸP, BẢNG GIÁ GỐC TỪ HIM LAM. <span class="hidden-mobile m-on-title" raw="0938258878">0938258***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">84.5 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hà Đông, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            * Hãy liên hệ trực tiếp phòng kinh doanh dự án để mua trực tiếp từ Him Lam.* Hãy liên hệ ngay để nhân viên của chính công ty Him Lam tư vấn cho quý khách, tư vấn chân thật và đầy đủ. Hotline: 0938 25
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">10/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27735350" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Him Lam Vạn Ph&amp;#250;c shophouse 2 MT đường Tố Hữu, vị tr&amp;#237; căn đẹp, bảng gi&amp;#225; gốc từ Him Lam. 0938258878&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110112057-9456_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110112057-9456_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Him Lam Vạn Phúc shophouse 2 MT đường Tố Hữu, vị trí căn đẹp, bảng giá gốc từ Him Lam. 0938258878" data-price="Giá thỏa thuận" data-area="84.5 m²" data-pricesort="0" data-areasort="84.5" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="* Hãy liên hệ trực tiếp phòng kinh doanh dự án để mua trực tiếp từ Him Lam.* Hãy liên hệ ngay để nhân viên của chính công ty Him Lam tư vấn cho quý khách, tư vấn chân thật và đầy đủ. Hotline: 0938 25" data-duration="2 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 11:28:18" data-contactname="Nguyễn Thị Thái Hòa" data-contactmobile="0938258878" data-url="/ban-nha-biet-thu-lien-ke-duong-to-huu-phuong-van-phuc-1-prj-him-lam-van-phuc/-shophouse-2-mat-tien-vi-tri-can-dep-bang-gia-goc-tu-0938-pr27735350" data-totalmedia="8" data-createbyuser="158541"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1436912">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-nguyen-chi-thanh-161/-pho-cao-cap-gold-house-riversde-pr27734970" title="Nhà phố cao cấp Gold House Riverside" onclick="">
                            <img class="product-avatar-img" alt="Nhà phố cao cấp Gold House Riverside" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110103938-6640_wm.jpg" is-lazy-image="true" lazy-id="22">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-nguyen-chi-thanh-161/-pho-cao-cap-gold-house-riversde-pr27734970" title="Nhà phố cao cấp Gold House Riverside" class="vipZero product-link">
                                NHÀ PHỐ CAO CẤP GOLD HOUSE RIVERSIDE
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">3.3 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">80 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Thuận An, Bình Dương</span>
                        </div>
                        <div class="product-content">
                            Gold House Riverside. - Thiết kế phong cách Châu Âu. 1 trệt 2 lầu - 4PN. - 4WC. - Sân thượng. Vị trí đắc địa: Ngay mặt tiền đường Nguyễn Chí Thanh, trung tâm TP Thuận An. - Sát bên chợ Búng, trường m
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">10/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27734970" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Nh&amp;#224; phố cao cấp Gold House Riverside&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110103938-6640_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110103938-6640_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Nhà phố cao cấp Gold House Riverside" data-price="3.3 tỷ" data-area="80 m²" data-pricesort="3300000000" data-areasort="80" data-room="4" data-toilets="4" data-address="Thuận An, Bình Dương" data-description="Gold House Riverside. - Thiết kế phong cách Châu Âu. 1 trệt 2 lầu - 4PN. - 4WC. - Sân thượng. Vị trí đắc địa: Ngay mặt tiền đường Nguyễn Chí Thanh, trung tâm TP Thuận An. - Sát bên chợ Búng, trường m" data-duration="2 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 11:16:39" data-contactname="Tạ Quang Nam" data-contactmobile="0336999617" data-url="/ban-nha-biet-thu-lien-ke-duong-nguyen-chi-thanh-161/-pho-cao-cap-gold-house-riversde-pr27734970" data-totalmedia="4" data-createbyuser="1436912"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="768497">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-3-2-2-phuong-12-11/mo-ban-khu-pho-lavida-residences-tp-vung-tau-booking-vi-tri-dep-lh-0938-06-8228-pr27733810" title="Mở bán khu nhà phố Lavida Residences, TP Vũng Tàu. Booking vị trí đẹp LH 0938.06.8228" onclick="">
                            <img class="product-avatar-img" alt="Mở bán khu nhà phố Lavida Residences, TP Vũng Tàu. Booking vị trí đẹp LH 0938.06.8228" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110103310-8822_wm.jpg" is-lazy-image="true" lazy-id="23">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">4</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-3-2-2-phuong-12-11/mo-ban-khu-pho-lavida-residences-tp-vung-tau-booking-vi-tri-dep-lh-0938-06-8228-pr27733810" title="Mở bán khu nhà phố Lavida Residences, TP Vũng Tàu. Booking vị trí đẹp LH 0938.06.8***" class="vipZero product-link" style="overflow: visible;">
                                MỞ BÁN KHU NHÀ PHỐ LAVIDA RESIDENCES, TP VŨNG TÀU. BOOKING VỊ TRÍ ĐẸP LH <span class="hidden-mobile m-on-title" raw="0938.06.8228">0938.06.8***</span>
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">Giá thỏa thuận</span>
                                <span class="dot">·</span>
                                <span class="area">86 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Vũng Tàu, Bà Rịa Vũng Tàu</span>
                        </div>
                        <div class="product-content" style="overflow: visible;">
                            Gem: Nhận giữ chỗ - Khu biệt lập duy nhất tại đường 3/2, TP Vũng Tàu.Dự án được mong chờ nhất Vũng Tàu 2020. Giá chỉ từ 70 - 80tr/m2. Ngân hàng hỗ trợ 70%. Đặt chỗ 100tr/căn. Hotline: <span class="hidden-mobile des" raw="0938.06.8228">0938.06.8***</span> đư
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">10/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27733810" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Mở b&amp;#225;n khu nh&amp;#224; phố Lavida Residences, TP Vũng T&amp;#224;u. Booking vị tr&amp;#237; đẹp LH 0938.06.8228&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110103310-8822_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110103310-8822_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Mở bán khu nhà phố Lavida Residences, TP Vũng Tàu. Booking vị trí đẹp LH 0938.06.8228" data-price="Giá thỏa thuận" data-area="86 m²" data-pricesort="0" data-areasort="86" data-room="0" data-toilets="0" data-address="Vũng Tàu, Bà Rịa Vũng Tàu" data-description="Gem: Nhận giữ chỗ - Khu biệt lập duy nhất tại đường 3/2, TP Vũng Tàu.Dự án được mong chờ nhất Vũng Tàu 2020. Giá chỉ từ 70 - 80tr/m2. Ngân hàng hỗ trợ 70%. Đặt chỗ 100tr/căn. Hotline: 0938.06.8228 đư" data-duration="2 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 10:34:16" data-contactname="Trần Chi" data-contactmobile="0938068228" data-url="/ban-nha-biet-thu-lien-ke-duong-3-2-2-phuong-12-11/mo-ban-khu-pho-lavida-residences-tp-vung-tau-booking-vi-tri-dep-lh-0938-06-8228-pr27733810" data-totalmedia="4" data-createbyuser="768497"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="1498958">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-da-ton-xa-da-ton-prj-vinhomes-ocean-park-gia-lam/mo-ban-shop-tmdv-khu-hai-dang-9-voi-chi-tu-8-6-ty-lo-pr27614225" title="Mở bán shop TMDV khu Hải Đăng 9 - Vinhomes Ocean Park với giá chỉ từ 8,6 tỷ/lô" onclick="">
                            <img class="product-avatar-img" alt="Mở bán shop TMDV khu Hải Đăng 9 - Vinhomes Ocean Park với giá chỉ từ 8,6 tỷ/lô" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/31/20201031094356-0e24_wm.jpg" is-lazy-image="true" lazy-id="24">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">7</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-da-ton-xa-da-ton-prj-vinhomes-ocean-park-gia-lam/mo-ban-shop-tmdv-khu-hai-dang-9-voi-chi-tu-8-6-ty-lo-pr27614225" title="Mở bán shop TMDV khu Hải Đăng 9 - Vinhomes Ocean Park với giá chỉ từ 8,6 tỷ/lô" class="vipZero product-link">
                                MỞ BÁN SHOP TMDV KHU HẢI ĐĂNG 9 - VINHOMES OCEAN PARK VỚI GIÁ CHỈ TỪ 8,6 TỶ/LÔ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">8.6 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">104 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Gia Lâm, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Cần bán lô shophouse TMDV dãy Hải Đăng 9 - Vinhomes Ocean Park.- Diện tích đất: 104m2. - Diện tích xây dựng: 308m2. - Hướng Tây Nam.Vị trí đắc địa, đối diện 4 tòa chung cư Ruby. Kết nối giao thông th
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">10/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27614225" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Mở b&amp;#225;n shop TMDV khu Hải Đăng 9 - Vinhomes Ocean Park với gi&amp;#225; chỉ từ 8,6 tỷ/l&amp;#244;&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/31/20201031094356-0e24_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/31/20201031094356-0e24_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Mở bán shop TMDV khu Hải Đăng 9 - Vinhomes Ocean Park với giá chỉ từ 8,6 tỷ/lô" data-price="8.6 tỷ" data-area="104 m²" data-pricesort="8600000000" data-areasort="104" data-room="0" data-toilets="0" data-address="Gia Lâm, Hà Nội" data-description="Cần bán lô shophouse TMDV dãy Hải Đăng 9 - Vinhomes Ocean Park.- Diện tích đất: 104m2. - Diện tích xây dựng: 308m2. - Hướng Tây Nam.Vị trí đắc địa, đối diện 4 tòa chung cư Ruby. Kết nối giao thông th" data-duration="2 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 10:33:40" data-contactname="Ms Diệp" data-contactmobile="0702529999" data-url="/ban-nha-biet-thu-lien-ke-duong-da-ton-xa-da-ton-prj-vinhomes-ocean-park-gia-lam/mo-ban-shop-tmdv-khu-hai-dang-9-voi-chi-tu-8-6-ty-lo-pr27614225" data-totalmedia="7" data-createbyuser="1498958"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vip0 product-item clearfix" uid="401871">
                    <div class="product-image ">
                        <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-phuong-duong-noi-prj-an-phu-shop-villa/b-2-c-suat-ngoai-giao-gia-cu-dt-180m2-10-5-ty-pr27732159" title="Bán 2 căn biệt thự An Phú Shop Villa suất ngoại giao giá cũ DT 180m2, 10.5 tỷ" onclick="">
                            <img class="product-avatar-img" alt="Bán 2 căn biệt thự An Phú Shop Villa suất ngoại giao giá cũ DT 180m2, 10.5 tỷ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110093313-b8bb_wm.jpg" is-lazy-image="true" lazy-id="25">
                        </a>
                        <span class="product-feature">
                                                                        </span>
                            <span class="product-media">8</span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-phuong-duong-noi-prj-an-phu-shop-villa/b-2-c-suat-ngoai-giao-gia-cu-dt-180m2-10-5-ty-pr27732159" title="Bán 2 căn biệt thự An Phú Shop Villa suất ngoại giao giá cũ DT 180m2, 10.5 tỷ" class="vipZero product-link">
                                BÁN 2 CĂN BIỆT THỰ AN PHÚ SHOP VILLA SUẤT NGOẠI GIAO GIÁ CŨ DT 180M2, 10.5 TỶ
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">10.5 tỷ</span>
                                <span class="dot">·</span>
                                <span class="area">180 m²</span>
                                                        <span class="dot">·</span>
                            <span class="location">Hà Đông, Hà Nội</span>
                        </div>
                        <div class="product-content">
                            Bán 2 căn biệt thự giá và chính sách cũ rẻ và đẹp nhất khu An Phú Shop Villa KĐT Dương Nội.1. Căn DT 180m2, mặt tiền 10m. Đã có sổ đỏ, nhận nhà được ngay. Đơn giá chỉ 47 triệu/m2 đất. Giá bán: 10,5 t
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    2 ngày trước
                                    <span class="tooltip-time">10/11/2020</span>
                                </span>
                            </div>
                            <div class="product-contact">
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                    <i class="iconSave" data-productid="27732159" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n 2 căn biệt thự An Ph&amp;#250; Shop Villa suất ngoại giao gi&amp;#225; cũ DT 180m2, 10.5 tỷ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110093313-b8bb_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110093313-b8bb_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán 2 căn biệt thự An Phú Shop Villa suất ngoại giao giá cũ DT 180m2, 10.5 tỷ" data-price="10.5 tỷ" data-area="180 m²" data-pricesort="10500000000" data-areasort="180" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="Bán 2 căn biệt thự giá và chính sách cũ rẻ và đẹp nhất khu An Phú Shop Villa KĐT Dương Nội.1. Căn DT 180m2, mặt tiền 10m. Đã có sổ đỏ, nhận nhà được ngay. Đơn giá chỉ 47 triệu/m2 đất. Giá bán: 10,5 t" data-duration="2 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 09:38:44" data-contactname="Thơm" data-contactmobile="0934588929" data-url="/ban-nha-biet-thu-lien-ke-phuong-duong-noi-prj-an-phu-shop-villa/b-2-c-suat-ngoai-giao-gia-cu-dt-180m2-10-5-ty-pr27732159" data-totalmedia="8" data-createbyuser="401871"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="text-center">
                <div class="pagination">
    <a pid="1" class="actived" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke">1</a>
    <a pid="2" class="" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/p2">2</a>
    <a pid="3" class="" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/p3">3</a>
    <a pid="4" class="" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/p4">4</a>
    <a pid="5" class="" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/p5">5</a>
    <a pid="713" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/p713"><img src="./assets/image/ic_double_caret_right.png"></a>
    </div>
    
            </div>
        </div>
    
    
    
    
    
    
        <div class="divide">&nbsp;</div>
    <div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Bán biệt thự chính chủ" href="https://batdongsan.com.vn/tags/ban/ban-biet-thu-chinh-chu">Bán biệt thự chính chủ</a></li>    <li><a title="Bán biệt thự giá rẻ" href="https://batdongsan.com.vn/tags/ban/ban-biet-thu-gia-re">Bán biệt thự giá rẻ</a></li>    <li><a title="Bán liền kề giá rẻ" href="https://batdongsan.com.vn/tags/ban/ban-lien-ke-gia-re">Bán liền kề giá rẻ</a></li>    <li><a title="Bán biệt thự gIÁ RẺ  Quận 7" href="https://batdongsan.com.vn/tags/ban/ban-biet-thu-gia-re-quan-7">Bán biệt thự gIÁ RẺ  Quận 7</a></li>    <li><a title="Bán biệt thự giá rẻ Quận 2" href="https://batdongsan.com.vn/tags/ban/ban-biet-thu-gia-re-quan-2">Bán biệt thự giá rẻ Quận 2</a></li>    <li><a title="nhà cho người nước ngoài thuê ở hà nội" href="https://batdongsan.com.vn/tags/ban/nha-cho-nguoi-nuoc-ngoai-thue-o-ha-noi">nhà cho người nước ngoài thuê ở hà nội</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
        <div class="product-seo-text">
            <div><strong>Batdongsan.com.vn</strong> mang đến kênh thông tin bất động sản hàng đầu tại Việt Nam, chúng tôi là cầu nối giúp việc <strong>mua bán nhà biệt thự liền kề tại Việt Nam</strong> trở nên nhanh và tiện lợi nhất. Nếu bạn đang có nhu cầu mua bán bất động sản tại Việt Nam hãy chọn Batdongsan.com.vn là kênh đăng tin rao bán bất động sản của bạn. Batdongsan.com.vn cung cấp những thông tin chính xác nhất về các dự án biệt thự liền kề tại Việt Nam và khu vực lân cận, 
                                    giúp người xem có cai nhìn tổng quan hơn về thị trường bất động sản đang quan tâm. </div>
                                    <div>Hãy lựa chọn <strong>Batdongsan.com.vn</strong>, chúng tôi sẽ mang đến nguồn thông tin bạn cần giúp bạn tham khảo để có những quyết định mua - bán một căn <strong>biệt thự liền kề</strong> 
                                    chính xác nhất, cùng với đó mang đến nhiều mức giá mua bán nhà biệt thự liền kề và cung cấp đầy đủ thông tin giúp bạn tìm được căn biệt thự ưng ý, hợp lý và giá rẻ nhất. 
                                    Những dự án mua bán nhà biệt thự liền kề tại Việt Nam và các thông tin về tình hình bất động sản sẽ được chúng tôi cập nhật thường xuyên để đảm bảo không bỏ lở bất kì nhu cầu nào của khách hàng.</div>
        </div>
    <form id="productListBinnova" method="post">
        <input id="hashAlias" type="hidden" value="2d894aab7988dd965cd9512e3b79697b61f87fae48b9c8c8621e8385c155aef0">
    </form>
    <script type="text/javascript">
        (function callJQuery() {
            if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
                var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                    getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                    model: {
                        typeOfProduct: 38,
                        categoryId: 325,
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
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/-1/2/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam giá 500 - 800 triệu">500 - 800 triệu</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/-1/3/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam giá 800 triệu - 1 tỷ">800 triệu - 1 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/-1/4/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam giá 1 - 2 tỷ">1 - 2 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/-1/5/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam giá 2 - 3 tỷ">2 - 3 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/-1/6/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam giá 3 - 5 tỷ">3 - 5 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/-1/7/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam giá 5 - 7 tỷ">5 - 7 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/-1/8/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam giá 7 - 10 tỷ">7 - 10 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/-1/9/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam giá 10 - 20 tỷ">10 - 20 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/-1/10/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam giá 20 - 30 tỷ">20 - 30 tỷ</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/-1/11/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam giá &gt; 30 tỷ">&gt; 30 tỷ</a></li>
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
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/1/-1/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/2/-1/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/3/-1/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/4/-1/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/5/-1/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/6/-1/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/7/-1/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/8/-1/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/9/-1/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                        <li><a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke/10/-1/-1/-1" title="Bán nhà biệt thự, liền kề Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
            <h2 class="box-title">Bán nhà biệt thự, liền kề</h2>
    
            <div class="box-content link-hover-blue">
                <ul>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-ha-noi" title="Bán nhà biệt thự, liền kề tại Hà Nội">
                                    Hà Nội (6187)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-tp-hcm" title="Bán nhà biệt thự, liền kề tại Hồ Chí Minh">
                                    Hồ Chí Minh (3844)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-dong-nai" title="Bán nhà biệt thự, liền kề tại Đồng Nai">
                                    Đồng Nai (809)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-ba-ria-vung-tau" title="Bán nhà biệt thự, liền kề tại Bà Rịa Vũng Tàu">
                                    Bà Rịa Vũng Tàu (455)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-quang-ninh" title="Bán nhà biệt thự, liền kề tại Quảng Ninh">
                                    Quảng Ninh (390)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-hai-phong" title="Bán nhà biệt thự, liền kề tại Hải Phòng">
                                    Hải Phòng (218)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-ha-giang" title="Bán nhà biệt thự, liền kề tại Hà Giang">
                                    Hà Giang (3)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-ben-tre" title="Bán nhà biệt thự, liền kề tại Bến Tre">
                                    Bến Tre (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-dong-thap" title="Bán nhà biệt thự, liền kề tại Đồng Tháp">
                                    Đồng Tháp (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-quang-ngai" title="Bán nhà biệt thự, liền kề tại Quảng Ngãi">
                                    Quảng Ngãi (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-lao-cai" title="Bán nhà biệt thự, liền kề tại Lào Cai">
                                    Lào Cai (4)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-binh-dinh" title="Bán nhà biệt thự, liền kề tại Bình Định">
                                    Bình Định (3)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-quang-nam" title="Bán nhà biệt thự, liền kề tại Quảng Nam">
                                    Quảng Nam (81)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-can-tho" title="Bán nhà biệt thự, liền kề tại Cần Thơ">
                                    Cần Thơ (13)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-tuyen-quang" title="Bán nhà biệt thự, liền kề tại Tuyên Quang">
                                    Tuyên Quang (1)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-long-an" title="Bán nhà biệt thự, liền kề tại Long An">
                                    Long An (333)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-vinh-phuc" title="Bán nhà biệt thự, liền kề tại Vĩnh Phúc">
                                    Vĩnh Phúc (65)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-nghe-an" title="Bán nhà biệt thự, liền kề tại Nghệ An">
                                    Nghệ An (23)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-ha-tinh" title="Bán nhà biệt thự, liền kề tại Hà Tĩnh">
                                    Hà Tĩnh (2)
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-kien-giang" title="Bán nhà biệt thự, liền kề tại Kiên Giang">
                                    Kiên Giang (336)
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
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-ha-noi" title="Bán nhà Hà Nội">
                                        Bán nhà Hà Nội
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-tp-hcm" title="Bán nhà Hồ Chí Minh">
                                        Bán nhà Hồ Chí Minh
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-da-nang" title="Bán nhà Đà Nẵng">
                                        Bán nhà Đà Nẵng
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-go-vap" title="Bán nhà Gò Vấp">
                                        Bán nhà Gò Vấp
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-12" title="Bán nhà Quận 12">
                                        Bán nhà Quận 12
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-hai-phong" title="Bán nhà Hải Phòng">
                                        Bán nhà Hải Phòng
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-vung-tau-vt" title="Bán nhà Vũng Tàu">
                                        Bán nhà Vũng Tàu
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-10" title="Bán nhà Quận 10">
                                        Bán nhà Quận 10
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-2" title="Bán nhà Quận 2">
                                        Bán nhà Quận 2
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-quan-7" title="Bán nhà Quận 7">
                                        Bán nhà Quận 7
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-cau-giay" title="Bán nhà Cầu Giấy">
                                        Bán nhà Cầu Giấy
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-nam-tu-liem" title="Bán nhà Nam Từ Liêm">
                                        Bán nhà Nam Từ Liêm
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-thanh-xuan" title="Bán nhà Thanh Xuân">
                                        Bán nhà Thanh Xuân
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-hoang-mai" title="Bán nhà Hoàng Mai">
                                        Bán nhà Hoàng Mai
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-ha-dong" title="Bán nhà Hà Đông">
                                        Bán nhà Hà Đông
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-long-bien" title="Bán nhà Long Biên">
                                        Bán nhà Long Biên
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