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
                <div class="custom-value hasvalue">Căn hộ chung cư</div>
            </div>
            <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="324">
            <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                    <li vl="0"><span class="current">Tất cả nhà đất</span></li>
                                    <li vl="324"><span class="active">Căn hộ chung cư</span></li>
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
                        <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                        <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
            <div class="select-filter-dropbox custom-dropbox advance-select-options hiding" style="display: none; height: 446px;">
                <div class="custom-scroll-outside mCustomScrollbar _mCS_9 mCS_no_scrollbar" style="position: relative; overflow: visible; max-height: 390px;"><div id="mCSB_9" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_outside" tabindex="0" style="max-height: 0px;"><div id="mCSB_9_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
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
                                categoryId: 324,
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
    <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu" level="1" title="Bán căn hộ chung cư tại Việt Nam">Bán</a><span>/</span><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu" level="2" title="Bán căn hộ chung cư tại Việt Nam">Căn hộ chung cư trên toàn quốc</a>
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
    <h1>Bán căn hộ chung cư tại Việt Nam</h1>
        <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">45,482</span> bất động sản.</div>
    

</div>

    <div class="product-nav-bar pad-top-8 clearfix">
        <ul class="ul-tab fl mar-right-16">
            <li class="list-display actived">Danh sách</li>
            <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
            <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-ban-can-ho-chung-cu">Bản đồ</a></li>
        </ul>
        <div class="fr">
            <div class="custom-drop-control sort-control">
                <div class="custom-control-label">
                    Sắp xếp
                </div>
                <div class="custom-dropbox hiding" id="divSort" style="display: none;">
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
            <div class="vip0 vipaddon product-item clearfix" uid="427197">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-le-duc-tho-phuong-my-dinh-2-prj-the-zei-my-dinh/ban-quy-hang-doc-quyen-thezei-gia-tot-nhat-thi-truong-lh-phong-kinh-doanh-0911991616-pr27766230" title="Bán quỹ hàng độc quyền The Zei giá tốt nhất thị trường LH phòng kinh doanh 0911991616" onclick="">
                        <img class="product-avatar-img" alt="Bán quỹ hàng độc quyền The Zei giá tốt nhất thị trường LH phòng kinh doanh 0911991616" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201112114949-e755_wm.jpg" is-lazy-image="true" lazy-id="0"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/20201112115008-0ecf_wm.jpg" is-lazy-image="true" lazy-id="1"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/20201112115014-775c_wm.jpg" is-lazy-image="true" lazy-id="2">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">9</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-le-duc-tho-phuong-my-dinh-2-prj-the-zei-my-dinh/ban-quy-hang-doc-quyen-thezei-gia-tot-nhat-thi-truong-lh-phong-kinh-doanh-0911991616-pr27766230" title="Bán quỹ hàng độc quyền The Zei giá tốt nhất thị trường LH phòng kinh doanh 0911991***" class="vipZero product-link" style="overflow: visible;">
                            BÁN QUỸ HÀNG ĐỘC QUYỀN THE ZEI GIÁ TỐT NHẤT THỊ TRƯỜNG LH PHÒNG KINH DOANH <span class="hidden-mobile m-on-title" raw="0911991616">0911991***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.5 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">94 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">3 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">2 WC</span>
                        <span class="location">Nam Từ Liêm, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Quỹ căn độc quyền, giá tốt nhất tại The Zei - Mỹ Đình. C�� đủ tầng đẹp căn đẹp kết bạn zalo <span class="hidden-mobile des" raw="0936044669">0936044***</span> để cập nhật bảng hàng và nhận giá tốt cũng chính sách khủng từ CĐT. - Căn 2PN: 84m2 - 89m2 - 92m2. - Căn 3PN: 94m2 - 103,4m2 - 104m2 - 106,7m2 - 107,7m2. LH GĐDA <span class="hidden-mobile des" raw="0911991616">0911991***</span> để hỏi trực tiếp.
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">12/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Pham Huy Hoang">
                                <span class="contact-name">... Huy Hoang</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0911991616" raw="0911991616">0911 991 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27766230" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n quỹ h&amp;#224;ng độc quyền The Zei gi&amp;#225; tốt nhất thị trường LH ph&amp;#242;ng kinh doanh 0911991616&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112114949-e755_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112115008-0ecf_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112115014-775c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/12/20201112114949-e755_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán quỹ hàng độc quyền The Zei giá tốt nhất thị trường LH phòng kinh doanh 0911991616" data-price="3.5 tỷ" data-area="94 m²" data-pricesort="3500000000" data-areasort="94" data-room="3" data-toilets="2" data-address="Nam Từ Liêm, Hà Nội" data-description="Quỹ căn độc quyền, giá tốt nhất tại The Zei - Mỹ Đình. Có đủ tầng đẹp căn đẹp kết bạn zalo 0936044669 để cập nhật bảng hàng và nhận giá tốt cũng chính sách khủng từ CĐT. - Căn 2PN: 84m2 - 89m2 - 92m2. - Căn 3PN: 94m2 - 103,4m2 - 104m2 - 106,7m2 - 107,7m2. LH GĐDA 0911991616 để hỏi trực tiếp." data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 13:14:54" data-contactname="Pham Huy Hoang" data-contactmobile="0911991616" data-url="/ban-can-ho-chung-cu-duong-le-duc-tho-phuong-my-dinh-2-prj-the-zei-my-dinh/ban-quy-hang-doc-quyen-thezei-gia-tot-nhat-thi-truong-lh-phong-kinh-doanh-0911991616-pr27766230" data-totalmedia="9" data-createbyuser="427197"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="430682">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-cao-lo-phuong-4-15-prj-topaz-elite/mua-truc-tiep-cdt-van-thai-cap-nhat-bang-gia-tat-ca-cac-2pn-3pn-gia-chi-1ty8-lh-0934138748-pr27766130" title="MUA TRỰC TIẾP CĐT VẠN THÁI: CẬP NHẬT BẢNG GIÁ TẤT CẢ CÁC CĂN 2PN-3PN GIÁ CHỈ 1TY8 LH: 0934138748" onclick="">
                        <img class="product-avatar-img" alt="MUA TRỰC TIẾP CĐT VẠN THÁI: CẬP NHẬT BẢNG GIÁ TẤT CẢ CÁC CĂN 2PN-3PN GIÁ CHỈ 1TY8 LH: 0934138748" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201112114800-d62a_wm.jpg" is-lazy-image="true" lazy-id="3">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-cao-lo-phuong-4-15-prj-topaz-elite/mua-truc-tiep-cdt-van-thai-cap-nhat-bang-gia-tat-ca-cac-2pn-3pn-gia-chi-1ty8-lh-0934138748-pr27766130" title="MUA TRỰC TIẾP CĐT VẠN THÁI: CẬP NHẬT BẢNG GIÁ TẤT CẢ CÁC CĂN 2PN-3PN GIÁ CHỈ 1TY8 LH: 0934138***" class="vipZero product-link" style="overflow: visible;">
                            MUA TRỰC TIẾP CĐT VẠN THÁI: CẬP NHẬT BẢNG GIÁ TẤT CẢ CÁC CĂN 2PN-3PN GIÁ CHỈ 1TY8 LH: <span class="hidden-mobile m-on-title" raw="0934138748">0934138***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1.9 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">78 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 8, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Liên hệ <span class="hidden-mobile des" raw="0934.138.748">0934.138.***</span> Uyên (zalo/viber/call). Chuyên căn hộ Topaz Elite, cập nhật giỏ hàng tháng 11/2020. Tin thật, giá thật 100%, không mất thời gian của khách hàng.
 
 Cập nhật mới nhất rất nhiều că
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
                                <i class="iconSave" data-productid="27766130" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;MUA TRỰC TIẾP CĐT VẠN TH&amp;#193;I: CẬP NHẬT BẢNG GI&amp;#193; TẤT CẢ C&amp;#193;C CĂN 2PN-3PN GI&amp;#193; CHỈ 1TY8 LH: 0934138748&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112114800-d62a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112114800-d62a_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="MUA TRỰC TIẾP CĐT VẠN THÁI: CẬP NHẬT BẢNG GIÁ TẤT CẢ CÁC CĂN 2PN-3PN GIÁ CHỈ 1TY8 LH: 0934138748" data-price="1.9 tỷ" data-area="78 m²" data-pricesort="1899999976" data-areasort="78" data-room="2" data-toilets="2" data-address="Quận 8, Hồ Chí Minh" data-description="Liên hệ 0934.138.748 Uyên (zalo/viber/call). Chuyên căn hộ Topaz Elite, cập nhật giỏ hàng tháng 11/2020. Tin thật, giá thật 100%, không mất thời gian của khách hàng.
 
 Cập nhật mới nhất rất nhiều că" data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 11:49:13" data-contactname="hoangthuyyuyen" data-contactmobile="0934138748" data-url="/ban-can-ho-chung-cu-duong-cao-lo-phuong-4-15-prj-topaz-elite/mua-truc-tiep-cdt-van-thai-cap-nhat-bang-gia-tat-ca-cac-2pn-3pn-gia-chi-1ty8-lh-0934138748-pr27766130" data-totalmedia="6" data-createbyuser="430682"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="480166">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-ho-tung-mau-phuong-phu-dien-prj-goldmark-city/-dual-key-mua-1-duoc-2-dong-1-ty-30-nhan-nha-ngay-loi-nhuan-c-thue-len-den-23tr-thang-pr27765824" title="Căn hộ Dual Key mua 1 được 2, đóng 1 tỷ (30%) nhận nhà ngay, Lợi nhuận cho thuê lên đến 23tr/tháng" onclick="">
                        <img class="product-avatar-img" alt="Căn hộ Dual Key mua 1 được 2, đóng 1 tỷ (30%) nhận nhà ngay, Lợi nhuận cho thuê lên đến 23tr/tháng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112113117-d4b4_wm.jpg" is-lazy-image="true" lazy-id="4">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-ho-tung-mau-phuong-phu-dien-prj-goldmark-city/-dual-key-mua-1-duoc-2-dong-1-ty-30-nhan-nha-ngay-loi-nhuan-c-thue-len-den-23tr-thang-pr27765824" title="Căn hộ Dual Key mua 1 được 2, đóng 1 tỷ (30%) nhận nhà ngay, Lợi nhuận cho thuê lên đến 23tr/tháng" class="vipZero product-link">
                            CĂN HỘ DUAL KEY MUA 1 ĐƯỢC 2, ĐÓNG 1 TỶ (30%) NHẬN NHÀ NGAY, LỢI NHUẬN CHO THUÊ LÊN ĐẾN 23TR/THÁNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">26 triệu/m²</span>
                            <span class="dot">·</span>
                            <span class="area">134 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bắc Từ Liêm, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Vị trí trung tâm Quận Mỹ Đình.
 - Diện tích 134m2, giá chỉ từ 26tr/m2 (Bàn giao thô, khách hàng tự do thiết kế theo nhu cầu).
 - Thiết kế 2 trong 1, căn 3 ngủ 90m2 &amp; căn Studio 44m2.
 - Giá chỉ từ 3,
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
                                <i class="iconSave" data-productid="27765824" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Căn hộ Dual Key mua 1 được 2, đ&amp;#243;ng 1 tỷ (30%) nhận nh&amp;#224; ngay, Lợi nhuận cho thu&amp;#234; l&amp;#234;n đến 23tr/th&amp;#225;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112113117-d4b4_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112113117-d4b4_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Căn hộ Dual Key mua 1 được 2, đóng 1 tỷ (30%) nhận nhà ngay, Lợi nhuận cho thuê lên đến 23tr/tháng" data-price="26 triệu/m²" data-area="134 m²" data-pricesort="3484000000" data-areasort="134" data-room="4" data-toilets="3" data-address="Bắc Từ Liêm, Hà Nội" data-description="Vị trí trung tâm Quận Mỹ Đình.
 - Diện tích 134m2, giá chỉ từ 26tr/m2 (Bàn giao thô, khách hàng tự do thiết kế theo nhu cầu).
 - Thiết kế 2 trong 1, căn 3 ngủ 90m2 &amp; căn Studio 44m2.
 - Giá chỉ từ 3," data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 11:32:45" data-contactname="Hải Phát Group" data-contactmobile="0376636718" data-url="/ban-can-ho-chung-cu-duong-ho-tung-mau-phuong-phu-dien-prj-goldmark-city/-dual-key-mua-1-duoc-2-dong-1-ty-30-nhan-nha-ngay-loi-nhuan-c-thue-len-den-23tr-thang-pr27765824" data-totalmedia="8" data-createbyuser="480166"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1491656">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-tam-trinh-phuong-yen-so-prj-gelexia-riverside/do-chuyen-cong-tac-nen-chinh-chu-ban-view-dep-2pn-2vs-gia-vo-ng-p-ly-pr27457550" title="Chính chủ chuyển công tác cần bán chung cư, view đẹp 2PN + 2VS, giá vô cùng hợp lý" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ chuyển công tác cần bán chung cư, view đẹp 2PN + 2VS, giá vô cùng hợp lý" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/18/20201018144244-9fa2_wm.jpg" is-lazy-image="true" lazy-id="5">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">20</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-tam-trinh-phuong-yen-so-prj-gelexia-riverside/do-chuyen-cong-tac-nen-chinh-chu-ban-view-dep-2pn-2vs-gia-vo-ng-p-ly-pr27457550" title="Chính chủ chuyển công tác cần bán chung cư, view đẹp 2PN + 2VS, giá vô cùng hợp lý" class="vipZero product-link">
                            CHÍNH CHỦ CHUYỂN CÔNG TÁC CẦN BÁN CHUNG CƯ, VIEW ĐẸP 2PN + 2VS, GIÁ VÔ CÙNG HỢP LÝ
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1.68 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">69.4 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hoàng Mai, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Căn hộ 2PN + 2VS, nhà view hồ Yên Sở thoáng đẹp (không bị mất view theo thời gian). - Tổng giá: 1.680 tỷ/tổng. - Diện tích: 69.4 m2. - Dự án Gelexia Riverside, Đường Tam Trinh, Phường Yên Sở, Hoàng M
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
                                <i class="iconSave" data-productid="27457550" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ chuyển c&amp;#244;ng t&amp;#225;c cần b&amp;#225;n chung cư, view đẹp 2PN + 2VS, gi&amp;#225; v&amp;#244; c&amp;#249;ng hợp l&amp;#253;&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/18/20201018144244-9fa2_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/18/20201018144244-9fa2_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ chuyển công tác cần bán chung cư, view đẹp 2PN + 2VS, giá vô cùng hợp lý" data-price="1.68 tỷ" data-area="69.4 m²" data-pricesort="1680000000" data-areasort="69.4" data-room="2" data-toilets="2" data-address="Hoàng Mai, Hà Nội" data-description="Căn hộ 2PN + 2VS, nhà view hồ Yên Sở thoáng đẹp (không bị mất view theo thời gian). - Tổng giá: 1.680 tỷ/tổng. - Diện tích: 69.4 m2. - Dự án Gelexia Riverside, Đường Tam Trinh, Phường Yên Sở, Hoàng M" data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:38:54" data-contactname="Mr Tuyên" data-contactmobile="0968119335" data-url="/ban-can-ho-chung-cu-duong-tam-trinh-phuong-yen-so-prj-gelexia-riverside/do-chuyen-cong-tac-nen-chinh-chu-ban-view-dep-2pn-2vs-gia-vo-ng-p-ly-pr27457550" data-totalmedia="20" data-createbyuser="1491656"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="730191">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-thuan-an-hoa-phuong-thuan-giao/-trung-tam-binh-2pn-60m2-gia-168tr-c-pr27764082" title="Căn hộ  trung tâm Thuận An-Bình Dương 2pn 60m2 giá 168tr/ căn" onclick="">
                        <img class="product-avatar-img" alt="Căn hộ  trung tâm Thuận An-Bình Dương 2pn 60m2 giá 168tr/ căn" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112093335-566a_wm.jpg" is-lazy-image="true" lazy-id="6"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112093352-819b_wm.jpg" is-lazy-image="true" lazy-id="7"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112093405-317e_wm.jpg" is-lazy-image="true" lazy-id="8">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">7</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-thuan-an-hoa-phuong-thuan-giao/-trung-tam-binh-2pn-60m2-gia-168tr-c-pr27764082" title="Căn hộ  trung tâm Thuận An-Bình Dương 2pn 60m2 giá 168tr/ căn" class="vipZero product-link">
                            CĂN HỘ  TRUNG TÂM THUẬN AN-BÌNH DƯƠNG 2PN 60M2 GIÁ 168TR/ CĂN
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">60 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">2 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">2 WC</span>
                        <span class="location">Thuận An, Bình Dương</span>
                    </div>
                    <div class="product-content">
                         Trung tâm căn hộ cao cấp tại TP Thuận An
  Chiết khấu lớn cho nhà đầu tư ở giai đoạn 1.
  Ngân hàng hỗ trợ 70%, ân hạn lãi và gốc 24 tháng.
  Đã có pháp lý hoàn thiện.
 Giá chỉ từ 168tr đến 300 tr
 
 TỔNG QUAN VỀ DỰ ÁN:
 Vị trí đắc địa: Tuyến Mêtro tiếp nối thông Mỹ Phước Tân Vạn trung tâm P. Thuận Giao, TP. Thuận An, Bình Dương.
  Diện tích: 10.089,9m2
  Quy mô: Gồm 2 Blook A
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">12/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Trịnh Cẩm Linh">
                                <span class="contact-name">Trịnh Cẩm Linh</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0938111345" raw="0938111345">0938 111 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27764082" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Căn hộ  trung t&amp;#226;m Thuận An-B&amp;#236;nh Dương 2pn 60m2 gi&amp;#225; 168tr/ căn&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112093335-566a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112093352-819b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112093405-317e_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/12/20201112093335-566a_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Căn hộ  trung tâm Thuận An-Bình Dương 2pn 60m2 giá 168tr/ căn" data-price="Giá thỏa thuận" data-area="60 m²" data-pricesort="0" data-areasort="60" data-room="2" data-toilets="2" data-address="Thuận An, Bình Dương" data-description=" Trung tâm căn hộ cao cấp tại TP Thuận An
  Chiết khấu lớn cho nhà đầu tư ở giai đoạn 1.
  Ngân hàng hỗ trợ 70%, ân hạn lãi và gốc 24 tháng.
  Đã có pháp lý hoàn thiện.
 Giá chỉ từ 168tr đến 300 tr
 
 TỔNG QUAN VỀ DỰ ÁN:
 Vị trí đắc địa: Tuyến Mêtro tiếp nối thông Mỹ Phước Tân Vạn trung tâm P. Thuận Giao, TP. Thuận An, Bình Dương.
  Diện tích: 10.089,9m2
  Quy mô: Gồm 2 Blook A" data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:26:41" data-contactname="Trịnh Cẩm Linh" data-contactmobile="0938111345" data-url="/ban-can-ho-chung-cu-duong-thuan-an-hoa-phuong-thuan-giao/-trung-tam-binh-2pn-60m2-gia-168tr-c-pr27764082" data-totalmedia="7" data-createbyuser="730191"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="598956">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-phan-van-dang-phuong-thanh-my-loi-prj-feliz-en-vista/cap-nhat-chuy-nhuong-1pn-gia-tu-2-5-ty-2pn-tu-3-3-ty-pr14519801" title="Feliz En Vista sang nhượng giá chỉ từ 3.20 tỷ" onclick="">
                        <img class="product-avatar-img" alt="Feliz En Vista sang nhượng giá chỉ từ 3.20 tỷ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/03/20/20200320170957-d7bf_wm.jpg" is-lazy-image="true" lazy-id="9">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-phan-van-dang-phuong-thanh-my-loi-prj-feliz-en-vista/cap-nhat-chuy-nhuong-1pn-gia-tu-2-5-ty-2pn-tu-3-3-ty-pr14519801" title="Feliz En Vista sang nhượng giá chỉ từ 3.20 tỷ" class="vipZero product-link">
                            FELIZ EN VISTA SANG NHƯỢNG GIÁ CHỈ TỪ 3.20 TỶ
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.2 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">57.77 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Cập nhật căn ký gửi sang nhượng giá tốt Feliz En Vista ngày 01/09/2020. Xem nhà 24/7. Quý khách hàng quan tâm inbox hoặc gọi Tuấn <span class="hidden-mobile des" raw="0938 478 839">0938 478 ***</span> (Zalo/Viber/WhatsApp). Trân trọng cảm ơn! 1PN: - C, xx. 
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
                                <i class="iconSave" data-productid="14519801" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Feliz En Vista sang nhượng gi&amp;#225; chỉ từ 3.20 tỷ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/03/20/20200320170957-d7bf_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/03/20/20200320170957-d7bf_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Feliz En Vista sang nhượng giá chỉ từ 3.20 tỷ" data-price="3.2 tỷ" data-area="57.77 m²" data-pricesort="3200000000" data-areasort="57.77" data-room="1" data-toilets="1" data-address="Quận 2, Hồ Chí Minh" data-description="Cập nhật căn ký gửi sang nhượng giá tốt Feliz En Vista ngày 01/09/2020. Xem nhà 24/7. Quý khách hàng quan tâm inbox hoặc gọi Tuấn 0938 478 839 (Zalo/Viber/WhatsApp). Trân trọng cảm ơn! 1PN: - C, xx. " data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 10:08:11" data-contactname="Nguyễn Anh Tuấn" data-contactmobile="0938478839" data-url="/ban-can-ho-chung-cu-duong-phan-van-dang-phuong-thanh-my-loi-prj-feliz-en-vista/cap-nhat-chuy-nhuong-1pn-gia-tu-2-5-ty-2pn-tu-3-3-ty-pr14519801" data-totalmedia="5" data-createbyuser="598956"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="1385604">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/cap-nhat-gio-hang-09-2020-gia-giam-sau-300-500tr-tu-3-95-ty-lh-24-7-my-0933-03-0911-pkd-pr26928773" title="Cập nhật 11/2020, giá giảm 300-500tr, giỏ hàng CĐT và chuyển nhượng, LH 24/7 Vũ 0961616611" onclick="">
                        <img class="product-avatar-img" alt="Cập nhật 11/2020, giá giảm 300-500tr, giỏ hàng CĐT và chuyển nhượng, LH 24/7 Vũ 0961616611" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/29/20200929132005-c505_wm.jpg" is-lazy-image="true" lazy-id="10"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/06/20200906150821-c9de_wm.jpg" is-lazy-image="true" lazy-id="11"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/29/20200929132005-32ca_wm.jpg" is-lazy-image="true" lazy-id="12">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">15</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/cap-nhat-gio-hang-09-2020-gia-giam-sau-300-500tr-tu-3-95-ty-lh-24-7-my-0933-03-0911-pkd-pr26928773" title="Cập nhật 11/2020, giá giảm 300-500tr, giỏ hàng CĐT và chuyển nhượng, LH 24/7 Vũ 0961616***" class="vipZero product-link" style="overflow: visible;">
                            CẬP NHẬT 11/2020, GIÁ GIẢM 300-500TR, GIỎ HÀNG CĐT VÀ CHUYỂN NHƯỢNG, LH 24/7 VŨ <span class="hidden-mobile m-on-title" raw="0961616611">0961616***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.95 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">53 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">1 PN</span>
                        <span class="location">Quận 10, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Chỉ từ 3.95 tỷ sở hữu CH nhận nhà ngay có chỗ ô tô Hado Centrosa.
 Liên hệ My <span class="hidden-mobile des" raw="0933030911">0933030***</span> - Vũ <span class="hidden-mobile des" raw="0961 61 6611">0961 61 6***</span>.
 
 - Căn hộ 1PN DT 53 m2, full nội thất 3tỷ95 - cho thuê 14tr/tháng.
 - Căn hộ 1PN + đa năng 61 m2 giá từ 4.6 tỷ - cho thuê 15.5 triệu.
 - Căn hộ 2PN 2WC giá từ 5tỷ6, view trung tâm 6 tỷ - cho thuê 17 - 20 triệu.
 - Căn hộ 2PN + đa năng (có thể là thành 03 phòng ngủ) giá 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">12/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Vũ">
                                <span class="contact-name">Vũ</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0961616611" raw="0961616611">0961 616 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="26928773" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;C&amp;#226;̣p nh&amp;#226;̣t 11/2020, giá giảm 300-500tr, giỏ hàng CĐT v&amp;#224; chuyển nhượng, LH 24/7 Vũ 0961616611&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/29/20200929132005-c505_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/06/20200906150821-c9de_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/29/20200929132005-32ca_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/09/29/20200929132005-c505_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cập nhật 11/2020, giá giảm 300-500tr, giỏ hàng CĐT và chuyển nhượng, LH 24/7 Vũ 0961616611" data-price="3.95 tỷ" data-area="53 m²" data-pricesort="3950000048" data-areasort="53" data-room="1" data-toilets="0" data-address="Quận 10, Hồ Chí Minh" data-description="Chỉ từ 3.95 tỷ sở hữu CH nhận nhà ngay có chỗ ô tô Hado Centrosa.
 Liên hệ My 0933030911 - Vũ 0961 61 6611.
 
 - Căn hộ 1PN DT 53 m2, full nội thất 3tỷ95 - cho thuê 14tr/tháng.
 - Căn hộ 1PN + đa năng 61 m2 giá từ 4.6 tỷ - cho thuê 15.5 triệu.
 - Căn hộ 2PN 2WC giá từ 5tỷ6, view trung tâm 6 tỷ - cho thuê 17 - 20 triệu.
 - Căn hộ 2PN + đa năng (có thể là thành 03 phòng ngủ) giá " data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 09:42:36" data-contactname="Vũ" data-contactmobile="0961616611" data-url="/ban-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/cap-nhat-gio-hang-09-2020-gia-giam-sau-300-500tr-tu-3-95-ty-lh-24-7-my-0933-03-0911-pkd-pr26928773" data-totalmedia="15" data-createbyuser="1385604"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="449687">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-truc-1-xa-xuan-quan-prj-khu-do-thi-ecopark/chuyen-nhuong-khong-chenh-re-nhat-truong-studio-1-02-ty-1pn-1-27-ty-2pn-1-54-ty-ls-0-24t-pr27761047" title="Chuyển nhượng không chênh rẻ nhất thị trường studio 1.02 tỷ, 1PN 1.27 tỷ, 2PN 1.54 tỷ, LS 0%/24t" onclick="">
                        <img class="product-avatar-img" alt="Chuyển nhượng không chênh rẻ nhất thị trường studio 1.02 tỷ, 1PN 1.27 tỷ, 2PN 1.54 tỷ, LS 0%/24t" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112084733-a30d_wm.jpg" is-lazy-image="true" lazy-id="13"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112084736-fa59_wm.jpg" is-lazy-image="true" lazy-id="14"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112084746-1005_wm.jpg" is-lazy-image="true" lazy-id="15">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">9</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-truc-1-xa-xuan-quan-prj-khu-do-thi-ecopark/chuyen-nhuong-khong-chenh-re-nhat-truong-studio-1-02-ty-1pn-1-27-ty-2pn-1-54-ty-ls-0-24t-pr27761047" title="Chuyển nhượng không chênh rẻ nhất thị trường studio 1.02 tỷ, 1PN 1.27 tỷ, 2PN 1.54 tỷ, LS 0%/24t" class="vipZero product-link">
                            CHUYỂN NHƯỢNG KHÔNG CHÊNH RẺ NHẤT THỊ TRƯỜNG STUDIO 1.02 TỶ, 1PN 1.27 TỶ, 2PN 1.54 TỶ, LS 0%/24T
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                                                <span class="location">Văn Giang, Hưng Yên</span>
                    </div>
                    <div class="product-content">
                        Tôi cần chuyển nhượng một số căn để thu hồi vốn đầu tư việc khác, trong đó có các căn studio, 1PN và 2PN giá chủ đầu tư, không chênh bất kỳ đồng nào, được tặng voucher nội thất 20-50tr tùy theo căn, ngân hàng hỗ trợ lãi suất 0%/24 tháng.
 
 Căn studio 30m2 giá 1.02 tỷ
 Căn 1PN 33m2 giá 1.27 tỷ
 Căn 2PN-1WC 52.33m2 giá 1.54 tỷ
 Căn 2PN-2WC 58m2 giá 2.13 tỷ
 Căn 3PN-2WC 73.31m2 t
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">12/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Dang Van Hai">
                                <span class="contact-name">Dang Van Hai</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0966292468" raw="0966292468">0966 292 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27761047" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chuyển nhượng kh&amp;#244;ng ch&amp;#234;nh rẻ nhất thị trường studio 1.02 tỷ, 1PN 1.27 tỷ, 2PN 1.54 tỷ, LS 0%/24t&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112084733-a30d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112084736-fa59_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112084746-1005_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/12/20201112084733-a30d_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chuyển nhượng không chênh rẻ nhất thị trường studio 1.02 tỷ, 1PN 1.27 tỷ, 2PN 1.54 tỷ, LS 0%/24t" data-price="Giá thỏa thuận" data-area="Không xác định" data-pricesort="0" data-areasort="0" data-room="0" data-toilets="0" data-address="Văn Giang, Hưng Yên" data-description="Tôi cần chuyển nhượng một số căn để thu hồi vốn đầu tư việc khác, trong đó có các căn studio, 1PN và 2PN giá chủ đầu tư, không chênh bất kỳ đồng nào, được tặng voucher nội thất 20-50tr tùy theo căn, ngân hàng hỗ trợ lãi suất 0%/24 tháng.
 
 Căn studio 30m2 giá 1.02 tỷ
 Căn 1PN 33m2 giá 1.27 tỷ
 Căn 2PN-1WC 52.33m2 giá 1.54 tỷ
 Căn 2PN-2WC 58m2 giá 2.13 tỷ
 Căn 3PN-2WC 73.31m2 t" data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 08:49:37" data-contactname="Dang Van Hai" data-contactmobile="0966292468" data-url="/ban-can-ho-chung-cu-duong-truc-1-xa-xuan-quan-prj-khu-do-thi-ecopark/chuyen-nhuong-khong-chenh-re-nhat-truong-studio-1-02-ty-1pn-1-27-ty-2pn-1-54-ty-ls-0-24t-pr27761047" data-totalmedia="9" data-createbyuser="449687"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1464019">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-tran-huu-duc-phuong-my-dinh-2-prj-iris-garden/doc-quyen-suat-ngoai-giao-3-phong-ngu-re-nhat-3-86-ty-29-5tr-m2-goi-quang-tang-335-trieu-pr27368683" title="Iris Garden Mỹ Đình - căn hộ xanh giữa Lòng Hà Nội DT 133m2 giá 3.9 tỷ, 29 triệu/m2 tặng 355 triệu!" onclick="">
                        <img class="product-avatar-img" alt="Iris Garden Mỹ Đình - căn hộ xanh giữa Lòng Hà Nội DT 133m2 giá 3.9 tỷ, 29 triệu/m2 tặng 355 triệu!" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/21/20201021155430-782c_wm.jpg" is-lazy-image="true" lazy-id="16">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">20</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-tran-huu-duc-phuong-my-dinh-2-prj-iris-garden/doc-quyen-suat-ngoai-giao-3-phong-ngu-re-nhat-3-86-ty-29-5tr-m2-goi-quang-tang-335-trieu-pr27368683" title="Iris Garden Mỹ Đình - căn hộ xanh giữa Lòng Hà Nội DT 133m2 giá 3.9 tỷ, 29 triệu/m2 tặng 355 triệu!" class="vipZero product-link">
                            IRIS GARDEN MỸ ĐÌNH - CĂN HỘ XANH GIỮA LÒNG HÀ NỘI DT 133M2 GIÁ 3.9 TỶ, 29 TRIỆU/M2 TẶNG 355 TRIỆU!
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.86 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">132.9 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Nam Từ Liêm, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Chung cư cao cấp. 3 phòng ngủ, 2 phòng tắm. Ngân hàng cho vay 65% gía trị căn hộ. Lãi suất 0% trong 18 tháng. Quà tặng 355 triệu.
 I. Thông tin dự án:
 A. Tên dự án: Iris Garden Mỹ Đình.
 B. Chủ đầu 
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
                                <i class="iconSave" data-productid="27368683" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Iris Garden Mỹ Đ&amp;#236;nh - căn hộ xanh giữa L&amp;#242;ng H&amp;#224; Nội DT 133m2 gi&amp;#225; 3.9 tỷ, 29 triệu/m2 tặng 355 triệu!&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/21/20201021155430-782c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/21/20201021155430-782c_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Iris Garden Mỹ Đình - căn hộ xanh giữa Lòng Hà Nội DT 133m2 giá 3.9 tỷ, 29 triệu/m2 tặng 355 triệu!" data-price="3.86 tỷ" data-area="132.9 m²" data-pricesort="3859999895" data-areasort="132.9" data-room="3" data-toilets="2" data-address="Nam Từ Liêm, Hà Nội" data-description="Chung cư cao cấp. 3 phòng ngủ, 2 phòng tắm. Ngân hàng cho vay 65% gía trị căn hộ. Lãi suất 0% trong 18 tháng. Quà tặng 355 triệu.
 I. Thông tin dự án:
 A. Tên dự án: Iris Garden Mỹ Đình.
 B. Chủ đầu " data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 07:55:06" data-contactname="Thành Công" data-contactmobile="0942948628" data-url="/ban-can-ho-chung-cu-duong-tran-huu-duc-phuong-my-dinh-2-prj-iris-garden/doc-quyen-suat-ngoai-giao-3-phong-ngu-re-nhat-3-86-ty-29-5tr-m2-goi-quang-tang-335-trieu-pr27368683" data-totalmedia="20" data-createbyuser="1464019"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="816792">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/phan-phoi-gio-hang-sang-nhuong-ha-do-hotline-pkd-0948-873-020-gap-em-hieu-pr25800209" title="Bán sang nhượng căn hộ Hà Đô. Hotline 0948.873.020 em Hiếu" onclick="">
                        <img class="product-avatar-img" alt="Bán sang nhượng căn hộ Hà Đô. Hotline 0948.873.020 em Hiếu" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/03/20200703114602-457f_wm.jpg" is-lazy-image="true" lazy-id="17">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/phan-phoi-gio-hang-sang-nhuong-ha-do-hotline-pkd-0948-873-020-gap-em-hieu-pr25800209" title="Bán sang nhượng căn hộ Hà Đô. Hotline 0948.873.*** em Hiếu" class="vipZero product-link" style="overflow: visible;">
                            BÁN SANG NHƯỢNG CĂN HỘ HÀ ĐÔ. HOTLINE <span class="hidden-mobile m-on-title" raw="0948.873.020">0948.873.***</span> EM HIẾU
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">6.6 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">107 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 10, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Phòng sang nhượng CĐT Hà Đô kính chào anh chị và các bạn. * Anh chị khách hàng có thể gọi theo số hotline <span class="hidden-mobile des" raw="0948.873.020">0948.873.***</span> để được tư vấn, tham quan thực tế cũng như chọn căn theo yêu cầu. * Các công ty 
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
                                <i class="iconSave" data-productid="25800209" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n sang nhượng căn hộ H&amp;#224; Đ&amp;#244;. Hotline 0948.873.020 em Hiếu&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/03/20200703114602-457f_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/07/03/20200703114602-457f_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán sang nhượng căn hộ Hà Đô. Hotline 0948.873.020 em Hiếu" data-price="6.6 tỷ" data-area="107 m²" data-pricesort="6600000000" data-areasort="107" data-room="2" data-toilets="0" data-address="Quận 10, Hồ Chí Minh" data-description="Phòng sang nhượng CĐT Hà Đô kính chào anh chị và các bạn. * Anh chị khách hàng có thể gọi theo số hotline 0948.873.020 để được tư vấn, tham quan thực tế cũng như chọn căn theo yêu cầu. * Các công ty " data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 21:04:11" data-contactname="A.hiếu" data-contactmobile="0948873020" data-url="/ban-can-ho-chung-cu-duong-3-2-2-phuong-12-5-prj-hado-centrosa-garden/phan-phoi-gio-hang-sang-nhuong-ha-do-hotline-pkd-0948-873-020-gap-em-hieu-pr25800209" data-totalmedia="1" data-createbyuser="816792"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="542537">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-dai-lo-binh-duong-phuong-binh-hoa-prj-astral-city/ban-goc-view-san-golf-du-an-astra-ck-ngay-3-thanh-toan-30-khong-lai-suat-den-nhan-nha-pr27758250" title="Bán Căn Góc View Sân Golf Dự Án Astral City, Ck Ngay 3%, Trả góp 30% Không Lãi Suất Đến Nhận Nhà " onclick="">
                        <img class="product-avatar-img" alt="Bán Căn Góc View Sân Golf Dự Án Astral City, Ck Ngay 3%, Trả góp 30% Không Lãi Suất Đến Nhận Nhà " error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112092019-0670_wm.jpg" is-lazy-image="true" lazy-id="18">
                    </a>
                    <span class="product-feature">
                                                                            <img src="./assets/image/ic_video.svg">
                    </span>
                        <span class="product-media">18</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-dai-lo-binh-duong-phuong-binh-hoa-prj-astral-city/ban-goc-view-san-golf-du-an-astra-ck-ngay-3-thanh-toan-30-khong-lai-suat-den-nhan-nha-pr27758250" title="Bán Căn Góc View Sân Golf Dự Án Astral City, Ck Ngay 3%, Trả góp 30% Không Lãi Suất Đến Nhận Nhà " class="vipZero product-link">
                            BÁN CĂN GÓC VIEW SÂN GOLF DỰ ÁN ASTRAL CITY, CK NGAY 3%, TRẢ GÓP 30% KHÔNG LÃI SUẤT ĐẾN NHẬN NHÀ 
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1.65 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">72 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thuận An, Bình Dương</span>
                    </div>
                    <div class="product-content">
                        Chương Trình Tri Ân Khách Hàng Đầu Tư Giai Đoạn 1: Chiết Khấu Ngay 3% Khi Đăng Ký Hôm Nay, Mua Nhà Trúng Xe Với 6 Giải Thưởng Xe Mercerdes và 50 Lượng Vàng May Mắn. 
               TÂM ĐIỂM THỊ TRƯỜN
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
                                <i class="iconSave" data-productid="27758250" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n Căn G&amp;#243;c View S&amp;#226;n Golf Dự &amp;#193;n Astral City, Ck Ngay 3%, Trả g&amp;#243;p 30% Kh&amp;#244;ng L&amp;#227;i Suất Đến Nhận Nh&amp;#224; &quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112092019-0670_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112092019-0670_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="true" data-title="Bán Căn Góc View Sân Golf Dự Án Astral City, Ck Ngay 3%, Trả góp 30% Không Lãi Suất Đến Nhận Nhà " data-price="1.65 tỷ" data-area="72 m²" data-pricesort="1649999976" data-areasort="72" data-room="2" data-toilets="2" data-address="Thuận An, Bình Dương" data-description="Chương Trình Tri Ân Khách Hàng Đầu Tư Giai Đoạn 1: Chiết Khấu Ngay 3% Khi Đăng Ký Hôm Nay, Mua Nhà Trúng Xe Với 6 Giải Thưởng Xe Mercerdes và 50 Lượng Vàng May Mắn. 
               TÂM ĐIỂM THỊ TRƯỜN" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 20:23:06" data-contactname="Nguyễn Thế Anh" data-contactmobile="0906359012" data-url="/ban-can-ho-chung-cu-duong-dai-lo-binh-duong-phuong-binh-hoa-prj-astral-city/ban-goc-view-san-golf-du-an-astra-ck-ngay-3-thanh-toan-30-khong-lai-suat-den-nhan-nha-pr27758250" data-totalmedia="18" data-createbyuser="542537"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="858879">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-ho-tung-mau-phuong-phu-dien-prj-goldmark-city/mua-3pn-1-studio-gia-chi-3-4-ty-tra-truoc-1ty-o-ngay-70-tra-cham-3-nam-lh-ngay-0914582293-pr27757638" title="Mua căn 3PN+1 Studio,giá chỉ 3.4 tỷ/căn,trả trước 1tỷ ở ngay,70% trả chậm 3 năm.LH ngay: 0914582293" onclick="">
                        <img class="product-avatar-img" alt="Mua căn 3PN+1 Studio,giá chỉ 3.4 tỷ/căn,trả trước 1tỷ ở ngay,70% trả chậm 3 năm.LH ngay: 0914582293" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111181046-56b2_wm.jpg" is-lazy-image="true" lazy-id="19"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111181046-eb64_wm.jpg" is-lazy-image="true" lazy-id="20"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111181046-d214_wm.jpg" is-lazy-image="true" lazy-id="21">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">20</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-ho-tung-mau-phuong-phu-dien-prj-goldmark-city/mua-3pn-1-studio-gia-chi-3-4-ty-tra-truoc-1ty-o-ngay-70-tra-cham-3-nam-lh-ngay-0914582293-pr27757638" title="Mua căn 3PN+1 Studio,giá chỉ 3.4 tỷ/căn,trả trước 1tỷ ở ngay,70% trả chậm 3 năm.LH ngay: 0914582***" class="vipZero product-link" style="overflow: visible;">
                            MUA CĂN 3PN+1 STUDIO,GIÁ CHỈ 3.4 TỶ/CĂN,TRẢ TRƯỚC 1TỶ Ở NGAY,70% TRẢ CHẬM 3 NĂM.LH NGAY: <span class="hidden-mobile m-on-title" raw="0914582293">0914582***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.4 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">143 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">4 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">3 WC</span>
                        <span class="location">Bắc Từ Liêm, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Ra mắt siêu phẩm căn hộ Dualkey, 2 cửa ra vào riêng biệt hot nhất tại trung tâm quận mỹ đình. Giá chỉ 3.4 tỷ/căn, thanh toán trước 1 tỷ nhận nhà ở ngay.
 
 Diện tích  : 143m2
 + 3PN,2WC diện tích : 103m2
 + Căn Studio diện tích : 40m2
 - Cửa vào Tây Nam, Ban công Đông Bắc chuẩn tựa núi nhìn Sông cực đẹp
 - Căn hộ dành cho gia đình đa thế hệ ông bà và con cháu nhưng vẫn sinh hoạ
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Thuhanguyen">
                                <span class="contact-name">Thuhanguyen</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0914582293" raw="0914582293">0914 582 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27757638" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Mua căn 3PN+1 Studio,gi&amp;#225; chỉ 3.4 tỷ/căn,trả trước 1tỷ ở ngay,70% trả chậm 3 năm.LH ngay: 0914582293&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111181046-56b2_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111181046-eb64_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111181046-d214_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/11/20201111181046-56b2_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Mua căn 3PN+1 Studio,giá chỉ 3.4 tỷ/căn,trả trước 1tỷ ở ngay,70% trả chậm 3 năm.LH ngay: 0914582293" data-price="3.4 tỷ" data-area="143 m²" data-pricesort="3400000095" data-areasort="143" data-room="4" data-toilets="3" data-address="Bắc Từ Liêm, Hà Nội" data-description="Ra mắt siêu phẩm căn hộ Dualkey, 2 cửa ra vào riêng biệt hot nhất tại trung tâm quận mỹ đình. Giá chỉ 3.4 tỷ/căn, thanh toán trước 1 tỷ nhận nhà ở ngay.
 
 Diện tích  : 143m2
 + 3PN,2WC diện tích : 103m2
 + Căn Studio diện tích : 40m2
 - Cửa vào Tây Nam, Ban công Đông Bắc chuẩn tựa núi nhìn Sông cực đẹp
 - Căn hộ dành cho gia đình đa thế hệ ông bà và con cháu nhưng vẫn sinh hoạ" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 18:34:04" data-contactname="Thuhanguyen" data-contactmobile="0914582293" data-url="/ban-can-ho-chung-cu-duong-ho-tung-mau-phuong-phu-dien-prj-goldmark-city/mua-3pn-1-studio-gia-chi-3-4-ty-tra-truoc-1ty-o-ngay-70-tra-cham-3-nam-lh-ngay-0914582293-pr27757638" data-totalmedia="20" data-createbyuser="858879"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1507924">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-phuong-binh-trung-tay-prj-diamond-island/gia-re-bat-ngo-chinh-chu-ban-gap-biet-thu-san-vuon-boi-776m2-tang-g-dao-kim-cuong-quan-2-pr27752050" title="Chính chủ bán gấp căn biệt thự sân vườn Diamond Island - Đảo Kim Cương Q.2 giá rẻ bất ngờ DT: 776m2" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ bán gấp căn biệt thự sân vườn Diamond Island - Đảo Kim Cương Q.2 giá rẻ bất ngờ DT: 776m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111133738-3536_wm.jpg" is-lazy-image="true" lazy-id="22">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-phuong-binh-trung-tay-prj-diamond-island/gia-re-bat-ngo-chinh-chu-ban-gap-biet-thu-san-vuon-boi-776m2-tang-g-dao-kim-cuong-quan-2-pr27752050" title="Chính chủ bán gấp căn biệt thự sân vườn Diamond Island - Đảo Kim Cương Q.2 giá rẻ bất ngờ DT: 776m2" class="vipZero product-link">
                            CHÍNH CHỦ BÁN GẤP CĂN BIỆT THỰ SÂN VƯỜN DIAMOND ISLAND - ĐẢO KIM CƯƠNG Q.2 GIÁ RẺ BẤT NGỜ DT: 776M2
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">63 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">776 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ bán gấp căn biệt thự sân vườn Diamond Island - Đảo Kim Cương Q. 2.Diện tích: 776 m2.Nhà kết cấu bao gồm 2 tầng, 5 phòng ngủ và 6 Toilet, thiết kế rất thông minh.Nhà đẹp, mới, hoàn thiện, có
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
                                <i class="iconSave" data-productid="27752050" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n gấp căn biệt thự s&amp;#226;n vườn Diamond Island - Đảo Kim Cương Q.2 gi&amp;#225; rẻ bất ngờ DT: 776m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111133738-3536_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111133738-3536_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ bán gấp căn biệt thự sân vườn Diamond Island - Đảo Kim Cương Q.2 giá rẻ bất ngờ DT: 776m2" data-price="63 tỷ" data-area="776 m²" data-pricesort="63000000000" data-areasort="776" data-room="5" data-toilets="6" data-address="Quận 2, Hồ Chí Minh" data-description="Chính chủ bán gấp căn biệt thự sân vườn Diamond Island - Đảo Kim Cương Q. 2.Diện tích: 776 m2.Nhà kết cấu bao gồm 2 tầng, 5 phòng ngủ và 6 Toilet, thiết kế rất thông minh.Nhà đẹp, mới, hoàn thiện, có" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 17:58:39" data-contactname="Thanh Đình" data-contactmobile="0762307823" data-url="/ban-can-ho-chung-cu-phuong-binh-trung-tay-prj-diamond-island/gia-re-bat-ngo-chinh-chu-ban-gap-biet-thu-san-vuon-boi-776m2-tang-g-dao-kim-cuong-quan-2-pr27752050" data-totalmedia="4" data-createbyuser="1507924"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="714689">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-xa-lo-ha-noi-phuong-an-phu-prj-estella-heights/hang-tot-2pn-view-boi-ban-cong-rong-da-co-so-ng-hay-goi-ngay-0932119577-phuc-pr27757299" title="Hàng tốt Estella Heights 2PN view hồ bơi ban công rộng đã có sổ hồng, hãy gọi ngay 0932119577 Phúc" onclick="">
                        <img class="product-avatar-img" alt="Hàng tốt Estella Heights 2PN view hồ bơi ban công rộng đã có sổ hồng, hãy gọi ngay 0932119577 Phúc" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111175140-ae89_wm.jpg" is-lazy-image="true" lazy-id="23">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">11</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-xa-lo-ha-noi-phuong-an-phu-prj-estella-heights/hang-tot-2pn-view-boi-ban-cong-rong-da-co-so-ng-hay-goi-ngay-0932119577-phuc-pr27757299" title="Hàng tốt Estella Heights 2PN view hồ bơi ban công rộng đã có sổ hồng, hãy gọi ngay 0932119*** Phúc" class="vipZero product-link" style="overflow: visible;">
                            HÀNG TỐT ESTELLA HEIGHTS 2PN VIEW HỒ BƠI BAN CÔNG RỘNG ĐÃ CÓ SỔ HỒNG, HÃY GỌI NGAY <span class="hidden-mobile m-on-title" raw="0932119577">0932119***</span> PHÚC
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">7.3 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">105 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Cực hot: Căn 135m2 view 2 hồ bơi giá cực tốt hàng hiếm duy nhất 1 căn. Giá chỉ từ 10,6 tỷ thấp hơn thị trường cả tỷ.Hãy chọn ngay, căn 2PN 100m2 giá chỉ từ 6.35 - 6.6 tỷ đang có hợp đồng thuê 53 triệ
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
                                <i class="iconSave" data-productid="27757299" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;H&amp;#224;ng tốt Estella Heights 2PN view hồ bơi ban c&amp;#244;ng rộng đ&amp;#227; c&amp;#243; sổ hồng, h&amp;#227;y gọi ngay 0932119577 Ph&amp;#250;c&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111175140-ae89_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111175140-ae89_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Hàng tốt Estella Heights 2PN view hồ bơi ban công rộng đã có sổ hồng, hãy gọi ngay 0932119577 Phúc" data-price="7.3 tỷ" data-area="105 m²" data-pricesort="7300000000" data-areasort="105" data-room="2" data-toilets="0" data-address="Quận 2, Hồ Chí Minh" data-description="Cực hot: Căn 135m2 view 2 hồ bơi giá cực tốt hàng hiếm duy nhất 1 căn. Giá chỉ từ 10,6 tỷ thấp hơn thị trường cả tỷ.Hãy chọn ngay, căn 2PN 100m2 giá chỉ từ 6.35 - 6.6 tỷ đang có hợp đồng thuê 53 triệ" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 17:52:12" data-contactname="Bùi Minh Phúc" data-contactmobile="0932119577" data-url="/ban-can-ho-chung-cu-duong-xa-lo-ha-noi-phuong-an-phu-prj-estella-heights/hang-tot-2pn-view-boi-ban-cong-rong-da-co-so-ng-hay-goi-ngay-0932119577-phuc-pr27757299" data-totalmedia="11" data-createbyuser="714689"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="343762">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-tran-thu-do-phuong-hoang-liet-prj-green-park-tran-thu-do/co-i-cuoi-cung-dat-mua-truc-tiep-gia-cdt-01-04-12-t-nhat-du-an-dong-park-pr27756500" title="Cơ hội cuối cùng đặt mua trực tiếp giá CĐT căn hộ: 01,04,12 hot nhất dự án Phương Đông Green Park" onclick="">
                        <img class="product-avatar-img" alt="Cơ hội cuối cùng đặt mua trực tiếp giá CĐT căn hộ: 01,04,12 hot nhất dự án Phương Đông Green Park" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111165500-d1c1_wm.jpg" is-lazy-image="true" lazy-id="24">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">7</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-tran-thu-do-phuong-hoang-liet-prj-green-park-tran-thu-do/co-i-cuoi-cung-dat-mua-truc-tiep-gia-cdt-01-04-12-t-nhat-du-an-dong-park-pr27756500" title="Cơ hội cuối cùng đặt mua trực tiếp giá CĐT căn hộ: 01,04,12 hot nhất dự án Phương Đông Green Park" class="vipZero product-link">
                            CƠ HỘI CUỐI CÙNG ĐẶT MUA TRỰC TIẾP GIÁ CĐT CĂN HỘ: 01,04,12 HOT NHẤT DỰ ÁN PHƯƠNG ĐÔNG GREEN PARK
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1.515 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">52 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hoàng Mai, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Mua nhà tặng ngay 5 chỉ vàng 999 và cơ hội cuối cùng cho quý khách hàng sở hữu căn hộ các tầng đẹp nhất: Tầng 6, tầng 8, tầng 10, tầng 11, tầng 25 và tầng 26 với những căn hộ hot nhất dự án. Cơ hội c
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
                                <i class="iconSave" data-productid="27756500" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cơ hội cuối c&amp;#249;ng đặt mua trực tiếp gi&amp;#225; CĐT căn hộ: 01,04,12 hot nhất dự &amp;#225;n Phương Đ&amp;#244;ng Green Park&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111165500-d1c1_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111165500-d1c1_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cơ hội cuối cùng đặt mua trực tiếp giá CĐT căn hộ: 01,04,12 hot nhất dự án Phương Đông Green Park" data-price="1.515 tỷ" data-area="52 m²" data-pricesort="1515000000" data-areasort="52" data-room="0" data-toilets="0" data-address="Hoàng Mai, Hà Nội" data-description="Mua nhà tặng ngay 5 chỉ vàng 999 và cơ hội cuối cùng cho quý khách hàng sở hữu căn hộ các tầng đẹp nhất: Tầng 6, tầng 8, tầng 10, tầng 11, tầng 25 và tầng 26 với những căn hộ hot nhất dự án. Cơ hội c" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 17:44:04" data-contactname="" data-contactmobile="0988390662" data-url="/ban-can-ho-chung-cu-duong-tran-thu-do-phuong-hoang-liet-prj-green-park-tran-thu-do/co-i-cuoi-cung-dat-mua-truc-tiep-gia-cdt-01-04-12-t-nhat-du-an-dong-park-pr27756500" data-totalmedia="7" data-createbyuser="343762"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1134377">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-thong-nhat-phuong-dong-hoa-prj-bcons-plaza/-lang-dai-c-chi-500-trieu-2pn-2wc-chiet-khau-7-bank-tro-vay-70-pr27563401" title="Căn hộ Bcons Plaza MT Thống Nhất chỉ 500 triệu/căn 2PN 2WC. Chiết khấu cao, thanh toán linh hoạt" onclick="">
                        <img class="product-avatar-img" alt="Căn hộ Bcons Plaza MT Thống Nhất chỉ 500 triệu/căn 2PN 2WC. Chiết khấu cao, thanh toán linh hoạt" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/27/20201027132631-39d8_wm.jpg" is-lazy-image="true" lazy-id="25">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-thong-nhat-phuong-dong-hoa-prj-bcons-plaza/-lang-dai-c-chi-500-trieu-2pn-2wc-chiet-khau-7-bank-tro-vay-70-pr27563401" title="Căn hộ Bcons Plaza MT Thống Nhất chỉ 500 triệu/căn 2PN 2WC. Chiết khấu cao, thanh toán linh hoạt" class="vipZero product-link">
                            CĂN HỘ BCONS PLAZA MT THỐNG NHẤT CHỈ 500 TRIỆU/CĂN 2PN 2WC. CHIẾT KHẤU CAO, THANH TOÁN LINH HOẠT
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1.58 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">51.33 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Dĩ An, Bình Dương</span>
                    </div>
                    <div class="product-content">
                        Kính chào quý Khách Hàng!- Dự án căn hộ Bcons Plaza. + Giữ chỗ 30 triệu/căn. Cam kết chọn căn đẹp nhất cho khách hàng liên hệ sớm nhất.Chỉ từ 1,45 tỷ/căn 2PN. Thanh toán trước chỉ 10%. Ngân hàng hỗ t
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
                                <i class="iconSave" data-productid="27563401" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Căn hộ Bcons Plaza MT Thống Nhất chỉ 500 triệu/căn 2PN 2WC. Chiết khấu cao, thanh to&amp;#225;n linh hoạt&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/27/20201027132631-39d8_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/27/20201027132631-39d8_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Căn hộ Bcons Plaza MT Thống Nhất chỉ 500 triệu/căn 2PN 2WC. Chiết khấu cao, thanh toán linh hoạt" data-price="1.58 tỷ" data-area="51.33 m²" data-pricesort="1580000000" data-areasort="51.33" data-room="2" data-toilets="2" data-address="Dĩ An, Bình Dương" data-description="Kính chào quý Khách Hàng!- Dự án căn hộ Bcons Plaza. + Giữ chỗ 30 triệu/căn. Cam kết chọn căn đẹp nhất cho khách hàng liên hệ sớm nhất.Chỉ từ 1,45 tỷ/căn 2PN. Thanh toán trước chỉ 10%. Ngân hàng hỗ t" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 17:19:31" data-contactname="Đinh Tuấn" data-contactmobile="0937787179" data-url="/ban-can-ho-chung-cu-duong-thong-nhat-phuong-dong-hoa-prj-bcons-plaza/-lang-dai-c-chi-500-trieu-2pn-2wc-chiet-khau-7-bank-tro-vay-70-pr27563401" data-totalmedia="8" data-createbyuser="1134377"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1491632">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-phuong-dong-ngac-prj-sunshine-city/ban-cat-lo-suat-ngoai-giao-dep-tang-trung-gia-re-nhat-thi-truong-lh-0868609118-pr27756600" title="BÁN CẮT LỖ SUẤT NGOẠI GIAO SUNSHINE CITY- CĂN ĐẸP TẦNG TRUNG GIÁ RẺ NHẤT THỊ TRƯỜNG LH: 0868609118" onclick="">
                        <img class="product-avatar-img" alt="BÁN CẮT LỖ SUẤT NGOẠI GIAO SUNSHINE CITY- CĂN ĐẸP TẦNG TRUNG GIÁ RẺ NHẤT THỊ TRƯỜNG LH: 0868609118" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111165720-e3a8_wm.jpg" is-lazy-image="true" lazy-id="26">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">11</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-phuong-dong-ngac-prj-sunshine-city/ban-cat-lo-suat-ngoai-giao-dep-tang-trung-gia-re-nhat-thi-truong-lh-0868609118-pr27756600" title="BÁN CẮT LỖ SUẤT NGOẠI GIAO SUNSHINE CITY- CĂN ĐẸP TẦNG TRUNG GIÁ RẺ NHẤT THỊ TRƯỜNG LH: 0868609***" class="vipZero product-link" style="overflow: visible;">
                            BÁN CẮT LỖ SUẤT NGOẠI GIAO SUNSHINE CITY- CĂN ĐẸP TẦNG TRUNG GIÁ RẺ NHẤT THỊ TRƯỜNG LH: <span class="hidden-mobile m-on-title" raw="0868609118">0868609***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.5 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">99 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bắc Từ Liêm, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        - 2PN chỉ từ 3,022 tỷ diện tích từ 74 - 80m2  - 3PN chỉ từ 3,2 tỷ diện tích từ 90m2 - 112.5m2  Liên hệ ngay: <span class="hidden-mobile des" raw="0868609118">0868609***</span> - Để được hỗ trợ thông tin và xem trực tiếp căn hộ. 	 -Chính sách ưu đãi: + Tặn
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
                                <i class="iconSave" data-productid="27756600" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#193;N CẮT LỖ SUẤT NGOẠI GIAO SUNSHINE CITY- CĂN ĐẸP TẦNG TRUNG GI&amp;#193; RẺ NHẤT THỊ TRƯỜNG LH: 0868609118&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111165720-e3a8_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111165720-e3a8_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="BÁN CẮT LỖ SUẤT NGOẠI GIAO SUNSHINE CITY- CĂN ĐẸP TẦNG TRUNG GIÁ RẺ NHẤT THỊ TRƯỜNG LH: 0868609118" data-price="3.5 tỷ" data-area="99 m²" data-pricesort="3500000000" data-areasort="99" data-room="3" data-toilets="2" data-address="Bắc Từ Liêm, Hà Nội" data-description="- 2PN chỉ từ 3,022 tỷ diện tích từ 74 - 80m2  - 3PN chỉ từ 3,2 tỷ diện tích từ 90m2 - 112.5m2  Liên hệ ngay: 0868609118 - Để được hỗ trợ thông tin và xem trực tiếp căn hộ. 	 -Chính sách ưu đãi: + Tặn" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 17:06:41" data-contactname="Tiến Đạt" data-contactmobile="0868609118" data-url="/ban-can-ho-chung-cu-phuong-dong-ngac-prj-sunshine-city/ban-cat-lo-suat-ngoai-giao-dep-tang-trung-gia-re-nhat-thi-truong-lh-0868609118-pr27756600" data-totalmedia="11" data-createbyuser="1491632"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="714685">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-phan-van-hon-phuong-tan-thoi-nhat-1-prj-prosper-plaza/chinh-chu-ban-q12-da-co-so-ng-2pn-2wc-gia-1-75-ty-lh-0979524762-pr27622467" title="Chính chủ cần bán căn hộ Prosper Plaza Q12 đã có sổ hồng 2PN 2WC, giá 1.75 tỷ. LH: 0979524762" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần bán căn hộ Prosper Plaza Q12 đã có sổ hồng 2PN 2WC, giá 1.75 tỷ. LH: 0979524762" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/01/20201101125750-68f5_wm.jpg" is-lazy-image="true" lazy-id="27">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">20</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-phan-van-hon-phuong-tan-thoi-nhat-1-prj-prosper-plaza/chinh-chu-ban-q12-da-co-so-ng-2pn-2wc-gia-1-75-ty-lh-0979524762-pr27622467" title="Chính chủ cần bán căn hộ Prosper Plaza Q12 đã có sổ hồng 2PN 2WC, giá 1.75 tỷ. LH: 0979524***" class="vipZero product-link" style="overflow: visible;">
                            CHÍNH CHỦ CẦN BÁN CĂN HỘ PROSPER PLAZA Q12 ĐÃ CÓ SỔ HỒNG 2PN 2WC, GIÁ 1.75 TỶ. LH: <span class="hidden-mobile m-on-title" raw="0979524762">0979524***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1.75 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">50 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 12, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Nhận mua bán ký gửi căn hộ - shophouse Prosper Plaza - thủ tục hồ sơ chuyển nhượng nhanh chóng, mau lẹ.- Chung cư thương mại Prosper Plaza mới bàn giao 2PN - 2WC, các căn hộ có ban công, hành lang th
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
                                <i class="iconSave" data-productid="27622467" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần b&amp;#225;n căn hộ Prosper Plaza Q12 đ&amp;#227; c&amp;#243; sổ hồng 2PN 2WC, gi&amp;#225; 1.75 tỷ. LH: 0979524762&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/01/20201101125750-68f5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/01/20201101125750-68f5_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần bán căn hộ Prosper Plaza Q12 đã có sổ hồng 2PN 2WC, giá 1.75 tỷ. LH: 0979524762" data-price="1.75 tỷ" data-area="50 m²" data-pricesort="1750000000" data-areasort="50" data-room="2" data-toilets="2" data-address="Quận 12, Hồ Chí Minh" data-description="Nhận mua bán ký gửi căn hộ - shophouse Prosper Plaza - thủ tục hồ sơ chuyển nhượng nhanh chóng, mau lẹ.- Chung cư thương mại Prosper Plaza mới bàn giao 2PN - 2WC, các căn hộ có ban công, hành lang th" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 16:29:19" data-contactname="Minh Lâm" data-contactmobile="0979524762" data-url="/ban-can-ho-chung-cu-duong-phan-van-hon-phuong-tan-thoi-nhat-1-prj-prosper-plaza/chinh-chu-ban-q12-da-co-so-ng-2pn-2wc-gia-1-75-ty-lh-0979524762-pr27622467" data-totalmedia="20" data-createbyuser="714685"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="591929">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-ho-tung-mau-phuong-phu-dien-prj-goldmark-city/hang-hiem-dual-key-toa-s1-chiet-khau-12-gia-3-4ty-thanh-toan-1ty-nhan-nha-o-ngay-pr27755531" title="HÀNG HIẾM CĂN HỘ DUAL KEY TÒA S1 CHIẾT KHẤU 12% GIÁ 3,4TỶ THANH TOÁN 1TỶ NHẬN NHÀ Ở NGAY" onclick="">
                        <img class="product-avatar-img" alt="HÀNG HIẾM CĂN HỘ DUAL KEY TÒA S1 CHIẾT KHẤU 12% GIÁ 3,4TỶ THANH TOÁN 1TỶ NHẬN NHÀ Ở NGAY" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111155900-76a8_wm.jpg" is-lazy-image="true" lazy-id="28"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111155907-5107_wm.jpg" is-lazy-image="true" lazy-id="29"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111160009-4a4b_wm.jpg" is-lazy-image="true" lazy-id="30">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">9</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-ho-tung-mau-phuong-phu-dien-prj-goldmark-city/hang-hiem-dual-key-toa-s1-chiet-khau-12-gia-3-4ty-thanh-toan-1ty-nhan-nha-o-ngay-pr27755531" title="HÀNG HIẾM CĂN HỘ DUAL KEY TÒA S1 CHIẾT KHẤU 12% GIÁ 3,4TỶ THANH TOÁN 1TỶ NHẬN NHÀ Ở NGAY" class="vipZero product-link">
                            HÀNG HIẾM CĂN HỘ DUAL KEY TÒA S1 CHIẾT KHẤU 12% GIÁ 3,4TỶ THANH TOÁN 1TỶ NHẬN NHÀ Ở NGAY
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.4 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">134 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">4 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">3 WC</span>
                        <span class="location">Bắc Từ Liêm, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Căn hộ 2 cửa - 2 chìa khóa đang trở thành xu thế mới trong chọn mua nhà chung cư tại các đô thị lớn. Căn hộ được thiết kế thông minh, hiện đại, gồm 2 phòng riêng biệt có hệ thống bếp và nhà tắm riêng.
 -Tổng diện tích sử dụng căn hộ 134m2.
 
 -Giá bán: từ 3,3tỷ đến 3,6tỷ (đã trừ chiết khấu 12% và có VAT)
 Thiết kế:
 + 1 căn studio riêng 35m2.
 + 1 căn 3 phòng ngủ, 2 vệ sinh.
 +
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Nguyễn Tuấn Anh">
                                <span class="contact-name">...ễn Tuấn Anh</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0945025665" raw="0945025665">0945 025 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27755531" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;H&amp;#192;NG HIẾM CĂN HỘ DUAL KEY T&amp;#210;A S1 CHIẾT KHẤU 12% GI&amp;#193; 3,4TỶ THANH TO&amp;#193;N 1TỶ NHẬN NH&amp;#192; Ở NGAY&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111155900-76a8_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111155907-5107_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111160009-4a4b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/11/20201111155900-76a8_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="HÀNG HIẾM CĂN HỘ DUAL KEY TÒA S1 CHIẾT KHẤU 12% GIÁ 3,4TỶ THANH TOÁN 1TỶ NHẬN NHÀ Ở NGAY" data-price="3.4 tỷ" data-area="134 m²" data-pricesort="3400000095" data-areasort="134" data-room="4" data-toilets="3" data-address="Bắc Từ Liêm, Hà Nội" data-description="Căn hộ 2 cửa - 2 chìa khóa đang trở thành xu thế mới trong chọn mua nhà chung cư tại các đô thị lớn. Căn hộ được thiết kế thông minh, hiện đại, gồm 2 phòng riêng biệt có hệ thống bếp và nhà tắm riêng.
 -Tổng diện tích sử dụng căn hộ 134m2.
 
 -Giá bán: từ 3,3tỷ đến 3,6tỷ (đã trừ chiết khấu 12% và có VAT)
 Thiết kế:
 + 1 căn studio riêng 35m2.
 + 1 căn 3 phòng ngủ, 2 vệ sinh.
 +" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 16:02:06" data-contactname="Nguyễn Tuấn Anh" data-contactmobile="0945025665" data-url="/ban-can-ho-chung-cu-duong-ho-tung-mau-phuong-phu-dien-prj-goldmark-city/hang-hiem-dual-key-toa-s1-chiet-khau-12-gia-3-4ty-thanh-toan-1ty-nhan-nha-o-ngay-pr27755531" data-totalmedia="9" data-createbyuser="591929"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="343762">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-ngoc-hoi-phuong-hoang-liet-prj-rose-town/1-5-ty-2pn-dinh-ngay-nha-moi-don-tet-am-em-q-mai-pr27754419" title="1.5 tỷ 2PN dinh ngay nhà mới đón tết ấm êm Q. Hoàng Mai" onclick="">
                        <img class="product-avatar-img" alt="1.5 tỷ 2PN dinh ngay nhà mới đón tết ấm êm Q. Hoàng Mai" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111151452-bbc3_wm.jpg" is-lazy-image="true" lazy-id="31"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111151452-eff4_wm.jpg" is-lazy-image="true" lazy-id="32"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111151452-71a1_wm.jpg" is-lazy-image="true" lazy-id="33">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-ngoc-hoi-phuong-hoang-liet-prj-rose-town/1-5-ty-2pn-dinh-ngay-nha-moi-don-tet-am-em-q-mai-pr27754419" title="1.5 tỷ 2PN dinh ngay nhà mới đón tết ấm êm Q. Hoàng Mai" class="vipZero product-link">
                            1.5 TỶ 2PN DINH NGAY NHÀ MỚI ĐÓN TẾT ẤM ÊM Q. HOÀNG MAI
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1.5 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">52 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">2 PN</span>
                        <span class="location">Hoàng Mai, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Nhận nhà ngay tháng này - giá rẻ nhất thị trường. Không những thế, tổ hợp dự án mang trong mình cả lòng tâm huyết của 1 chủ đầu tư uy tín Xuân Mai. Đưa chính sách đầy hấp dẫn, xóa mờ sự xuất hiện của dự án xung quanh. Với mức giá: + Căn 2PN từ 52m2 - 71m2 - 76m2: 1 tỷ 5xxtr | Đóng 20% về ở. + Căn 3PN 88m2: 2 tỷ 3xxtr | 11/2020 bàn giao có đồ. Chính sách: + Chiết khấu ngay 5% GT
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="">
                                <span class="contact-name"></span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0986368725" raw="0986368725">0986 368 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27754419" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;1.5 tỷ 2PN dinh ngay nh&amp;#224; mới đ&amp;#243;n tết ấm &amp;#234;m Q. Ho&amp;#224;ng Mai&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111151452-bbc3_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111151452-eff4_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111151452-71a1_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/11/20201111151452-bbc3_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="1.5 tỷ 2PN dinh ngay nhà mới đón tết ấm êm Q. Hoàng Mai" data-price="1.5 tỷ" data-area="52 m²" data-pricesort="1500000000" data-areasort="52" data-room="2" data-toilets="0" data-address="Hoàng Mai, Hà Nội" data-description="Nhận nhà ngay tháng này - giá rẻ nhất thị trường. Không những thế, tổ hợp dự án mang trong mình cả lòng tâm huyết của 1 chủ đầu tư uy tín Xuân Mai. Đưa chính sách đầy hấp dẫn, xóa mờ sự xuất hiện của dự án xung quanh. Với mức giá: + Căn 2PN từ 52m2 - 71m2 - 76m2: 1 tỷ 5xxtr | Đóng 20% về ở. + Căn 3PN 88m2: 2 tỷ 3xxtr | 11/2020 bàn giao có đồ. Chính sách: + Chiết khấu ngay 5% GT" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 15:51:07" data-contactname="" data-contactmobile="0986368725" data-url="/ban-can-ho-chung-cu-duong-ngoc-hoi-phuong-hoang-liet-prj-rose-town/1-5-ty-2pn-dinh-ngay-nha-moi-don-tet-am-em-q-mai-pr27754419" data-totalmedia="5" data-createbyuser="343762"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-center">
            <div class="pagination">
<a pid="1" class="actived" href="https://batdongsan.com.vn/ban-can-ho-chung-cu">1</a>
<a pid="2" class="" href="https://batdongsan.com.vn/ban-can-ho-chung-cu/p2">2</a>
<a pid="3" class="" href="https://batdongsan.com.vn/ban-can-ho-chung-cu/p3">3</a>
<a pid="4" class="" href="https://batdongsan.com.vn/ban-can-ho-chung-cu/p4">4</a>
<a pid="5" class="" href="https://batdongsan.com.vn/ban-can-ho-chung-cu/p5">5</a>
<a pid="2275" href="https://batdongsan.com.vn/ban-can-ho-chung-cu/p2275"><img src="./assets/image/ic_double_caret_right.png"></a>
</div>

        </div>
    </div>






    <div class="divide">&nbsp;</div>
<div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Bán chung cư Mini Định Công" href="https://batdongsan.com.vn/tags/ban/ban-chung-cu-mini-dinh-cong">Bán chung cư Mini Định Công</a></li>    <li><a title="Bán căn hộ GẦN TRUNG TÂM" href="https://batdongsan.com.vn/tags/ban/ban-can-ho-gan-trung-tam">Bán căn hộ GẦN TRUNG TÂM</a></li>    <li><a title="Bán căn hộ giá rẻ  Quận 7" href="https://batdongsan.com.vn/tags/ban/ban-can-ho-gia-re-quan-7">Bán căn hộ giá rẻ  Quận 7</a></li>    <li><a title="Bán căn hộ gần cầu Bình Triệu" href="https://batdongsan.com.vn/tags/ban/ban-can-ho-gan-cau-binh-trieu">Bán căn hộ gần cầu Bình Triệu</a></li>    <li><a title="Bán căn hộ giá rẻ quận Thủ Đức" href="https://batdongsan.com.vn/tags/ban/ban-can-ho-gia-re-quan-thu-duc">Bán căn hộ giá rẻ quận Thủ Đức</a></li>    <li><a title="Bán chung cư giá rẻ Hà Đông" href="https://batdongsan.com.vn/tags/ban/ban-chung-cu-gia-re-ha-dong">Bán chung cư giá rẻ Hà Đông</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
    <div class="product-seo-text">
        <div><strong>Batdongsan.com.vn</strong> mang đến kênh thông tin <strong>bán căn hộ chung cư tại Việt Nam</strong>. 
                                Là kênh thông tin bất động sản hàng đầu tại Việt Nam, chúng tôi mang đến kênh thông tin nhằm giúp kết nối người cần bán và người có nhu cầu mua chung cư tại Việt Nam. 
                                Batdongsan.com.vn sẽ mang đến góc nhìn trực quan mọi thông tin về căn hộ chung cư tại Việt Nam nhanh nhất, chính xác và đầu đủ nhất. </div>
                                <div>Liên hệ với <strong>Batdongsan.com.vn</strong> để được tư vấn, giải đáp các thắc mắc hoạc các thông tin về dự án căn hộ chung cư tại Việt Nam cũng như thông tin về căn hộ chung cư ở những khu vực khác.</div>
    </div>
<form id="productListBinnova" method="post">
    <input id="hashAlias" type="hidden" value="5c6180b9089be31a97770105fcc241f5c36ae3e53bd90c475068d569bde176ef">
</form>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
            var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                model: {
                    typeOfProduct: 38,
                    categoryId: 324,
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
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/-1/2/-1/-1" title="Bán căn hộ chung cư Việt Nam giá 500 - 800 triệu">500 - 800 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/-1/3/-1/-1" title="Bán căn hộ chung cư Việt Nam giá 800 triệu - 1 tỷ">800 triệu - 1 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/-1/4/-1/-1" title="Bán căn hộ chung cư Việt Nam giá 1 - 2 tỷ">1 - 2 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/-1/5/-1/-1" title="Bán căn hộ chung cư Việt Nam giá 2 - 3 tỷ">2 - 3 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/-1/6/-1/-1" title="Bán căn hộ chung cư Việt Nam giá 3 - 5 tỷ">3 - 5 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/-1/7/-1/-1" title="Bán căn hộ chung cư Việt Nam giá 5 - 7 tỷ">5 - 7 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/-1/8/-1/-1" title="Bán căn hộ chung cư Việt Nam giá 7 - 10 tỷ">7 - 10 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/-1/9/-1/-1" title="Bán căn hộ chung cư Việt Nam giá 10 - 20 tỷ">10 - 20 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/-1/10/-1/-1" title="Bán căn hộ chung cư Việt Nam giá 20 - 30 tỷ">20 - 30 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/-1/11/-1/-1" title="Bán căn hộ chung cư Việt Nam giá &gt; 30 tỷ">&gt; 30 tỷ</a></li>
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
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/1/-1/-1/-1" title="Bán căn hộ chung cư Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/2/-1/-1/-1" title="Bán căn hộ chung cư Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/3/-1/-1/-1" title="Bán căn hộ chung cư Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/4/-1/-1/-1" title="Bán căn hộ chung cư Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/5/-1/-1/-1" title="Bán căn hộ chung cư Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/6/-1/-1/-1" title="Bán căn hộ chung cư Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/7/-1/-1/-1" title="Bán căn hộ chung cư Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/8/-1/-1/-1" title="Bán căn hộ chung cư Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/9/-1/-1/-1" title="Bán căn hộ chung cư Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-can-ho-chung-cu/10/-1/-1/-1" title="Bán căn hộ chung cư Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
        <h2 class="box-title">Bán căn hộ chung cư</h2>

        <div class="box-content link-hover-blue">
            <ul>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-tp-hcm" title="Bán căn hộ chung cư tại Hồ Chí Minh">
                                Hồ Chí Minh (22577)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-ha-noi" title="Bán căn hộ chung cư tại Hà Nội">
                                Hà Nội (17057)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-binh-duong" title="Bán căn hộ chung cư tại Bình Dương">
                                Bình Dương (2728)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-ba-ria-vung-tau" title="Bán căn hộ chung cư tại Bà Rịa Vũng Tàu">
                                Bà Rịa Vũng Tàu (593)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-khanh-hoa" title="Bán căn hộ chung cư tại Khánh Hòa">
                                Khánh Hòa (553)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-binh-thuan" title="Bán căn hộ chung cư tại Bình Thuận  ">
                                Bình Thuận   (141)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-phu-yen" title="Bán căn hộ chung cư tại Phú Yên">
                                Phú Yên (25)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-bac-giang" title="Bán căn hộ chung cư tại Bắc Giang">
                                Bắc Giang (17)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-thai-nguyen" title="Bán căn hộ chung cư tại Thái Nguyên">
                                Thái Nguyên (13)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-hai-phong" title="Bán căn hộ chung cư tại Hải Phòng">
                                Hải Phòng (137)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-dak-lak" title="Bán căn hộ chung cư tại Đắk Lắk">
                                Đắk Lắk (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-thai-binh" title="Bán căn hộ chung cư tại Thái Bình">
                                Thái Bình (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-kien-giang" title="Bán căn hộ chung cư tại Kiên Giang">
                                Kiên Giang (21)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-can-tho" title="Bán căn hộ chung cư tại Cần Thơ">
                                Cần Thơ (9)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinh-phuc" title="Bán căn hộ chung cư tại Vĩnh Phúc">
                                Vĩnh Phúc (56)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-dong-nai" title="Bán căn hộ chung cư tại Đồng Nai">
                                Đồng Nai (131)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-quang-ninh" title="Bán căn hộ chung cư tại Quảng Ninh">
                                Quảng Ninh (250)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-ben-tre" title="Bán căn hộ chung cư tại Bến Tre">
                                Bến Tre (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-thanh-hoa" title="Bán căn hộ chung cư tại Thanh Hóa">
                                Thanh Hóa (38)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-da-nang" title="Bán căn hộ chung cư tại Đà Nẵng">
                                Đà Nẵng (242)
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