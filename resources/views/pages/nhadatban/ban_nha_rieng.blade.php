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
                <div class="custom-value hasvalue">Nhà riêng</div>
            </div>
            <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="41">
            <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 0px;"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                    <li vl="0"><span class="current">Tất cả nhà đất</span></li>
                                    <li vl="324"><span>Căn hộ chung cư</span></li>
                                    <li vl="362"><span>Các loại nhà bán</span>
                                        <ul>
                                            <li vl="41"><span class="active">Nhà riêng</span></li>
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
                        <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-nha-rieng#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-nha-rieng#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                        <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-nha-rieng#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-nha-rieng#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                categoryId: 41,
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
    <a href="https://batdongsan.com.vn/ban-nha-rieng" level="1" title="Bán nhà riêng tại Việt Nam">Bán</a><span>/</span><a href="https://batdongsan.com.vn/ban-nha-rieng" level="2" title="Bán nhà riêng tại Việt Nam">Nhà riêng trên toàn quốc</a>
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
    <h1>Bán nhà riêng tại Việt Nam</h1>
        <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">43,216</span> bất động sản.</div>
    

</div>
    <div class="product-search-most mar-top-8 mar-bot-8">
        <div class="box-title">Các khu vực, địa điểm nổi bật</div>
        <ul class="clearfix link-hover-blue">
                <li><a href="https://batdongsan.com.vn/nha-dat-ban-tp-hcm">Bán nhà TPHCM</a></li>
                <li><a href="https://batdongsan.com.vn/ban-nha-rieng-quan-1">Bán nhà Quận 1</a></li>
                <li><a href="https://batdongsan.com.vn/nha-dat-ban-ha-noi">Bán nhà Hà Nội</a></li>
                <li><a href="https://batdongsan.com.vn/ban-nha-rieng-quan-7">Bán nhà Quận 7</a></li>
                <li><a href="https://batdongsan.com.vn/nha-dat-ban-quan-9">Bán nhà Quận 9</a></li>
                <li><a href="https://batdongsan.com.vn/nha-dat-ban-binh-chanh">Bán nhà Bình Chánh</a></li>
        </ul>
    </div>

    <div class="product-nav-bar pad-top-8 clearfix">
        <ul class="ul-tab fl mar-right-16">
            <li class="list-display actived">Danh sách</li>
            <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
            <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-ban-nha-rieng">Bản đồ</a></li>
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
            <div class="vip0 product-item clearfix" uid="430459">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-nguyen-van-dau-phuong-6-13/ban-pho-4-tang-hem-8m-45-binh-thanh-11-ty-pr14094717" title="Bán nhà phố 4 tầng hẻm 8m, 45 Nguyễn Văn Đậu, Bình Thạnh" onclick="">
                        <img class="product-avatar-img" alt="Bán nhà phố 4 tầng hẻm 8m, 45 Nguyễn Văn Đậu, Bình Thạnh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20171110132256-95e6_wm.jpg" is-lazy-image="true" lazy-id="0">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">2</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-nguyen-van-dau-phuong-6-13/ban-pho-4-tang-hem-8m-45-binh-thanh-11-ty-pr14094717" title="Bán nhà phố 4 tầng hẻm 8m, 45 Nguyễn Văn Đậu, Bình Thạnh" class="vipZero product-link">
                            BÁN NHÀ PHỐ 4 TẦNG HẺM 8M, 45 NGUYỄN VĂN ĐẬU, BÌNH THẠNH
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">14.5 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">65 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bình Thạnh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Bán nhà phố chính chủ HXH 8m, 45 đường Nguyễn Văn Đậu, gần Phan Đăng Lưu. 1 trệt, 3 lầu, 4PN, Phòng khách,phòng bếp riêng biệt, 4WC, phòng giặt, gara để xe hơi, 5 xe máy, ô giếng trời và 1 ô thang má
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
                                <i class="iconSave" data-productid="14094717" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; phố 4 tầng hẻm 8m, 45 Nguyễn Văn Đậu, B&amp;#236;nh Thạnh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2017/11/10/20171110132256-95e6_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2017/11/10/20171110132256-95e6_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà phố 4 tầng hẻm 8m, 45 Nguyễn Văn Đậu, Bình Thạnh" data-price="14.5 tỷ" data-area="65 m²" data-pricesort="14500000000" data-areasort="65" data-room="4" data-toilets="4" data-address="Bình Thạnh, Hồ Chí Minh" data-description="Bán nhà phố chính chủ HXH 8m, 45 đường Nguyễn Văn Đậu, gần Phan Đăng Lưu. 1 trệt, 3 lầu, 4PN, Phòng khách,phòng bếp riêng biệt, 4WC, phòng giặt, gara để xe hơi, 5 xe máy, ô giếng trời và 1 ô thang má" data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 17:01:49" data-contactname="Tran Minh Thong" data-contactmobile="0909490809" data-url="/ban-nha-rieng-duong-nguyen-van-dau-phuong-6-13/ban-pho-4-tang-hem-8m-45-binh-thanh-11-ty-pr14094717" data-totalmedia="2" data-createbyuser="430459"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="530272">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-quang-trung-phuong-11-8/chinh-chu-can-ban-gap-biet-thu-so-653-38-p11-quan-go-vap-a-tho-0903913087-pr27757343" title="Chính chủ cần bán gấp nhà biệt thự số 653/38 Đường Quang Trung, P11, Quận Gò Vấp. A. Thọ 0903913087" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần bán gấp nhà biệt thự số 653/38 Đường Quang Trung, P11, Quận Gò Vấp. A. Thọ 0903913087" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20200321132007-60fa_wm.jpg" is-lazy-image="true" lazy-id="1">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">24</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-quang-trung-phuong-11-8/chinh-chu-can-ban-gap-biet-thu-so-653-38-p11-quan-go-vap-a-tho-0903913087-pr27757343" title="Chính chủ cần bán gấp nhà biệt thự số 653/38 Đường Quang Trung, P11, Quận Gò Vấp. A. Thọ 0903913***" class="vipZero product-link" style="overflow: visible;">
                            CHÍNH CHỦ CẦN BÁN GẤP NHÀ BIỆT THỰ SỐ 653/38 ĐƯỜNG QUANG TRUNG, P11, QUẬN GÒ VẤP. A. THỌ <span class="hidden-mobile m-on-title" raw="0903913087">0903913***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">23 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">142.8 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Gò Vấp, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cần bán gấp nhà biệt thự số 653/38, đường Quang Trung, P. 11, Quận Gò Vấp. DT: 8.4m x 17m. DTXD 450m2. Nhà hướng Đông, xây một trệt, hai lầu, mái ngói, sân thượng: Phòng khách, phòng ăn, tầ
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
                                <i class="iconSave" data-productid="27757343" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần b&amp;#225;n gấp nh&amp;#224; biệt thự số 653/38 Đường Quang Trung, P11, Quận G&amp;#242; Vấp. A. Thọ 0903913087&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/03/21/20200321132007-60fa_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/03/21/20200321132007-60fa_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần bán gấp nhà biệt thự số 653/38 Đường Quang Trung, P11, Quận Gò Vấp. A. Thọ 0903913087" data-price="23 tỷ" data-area="142.8 m²" data-pricesort="23000000000" data-areasort="142.8" data-room="4" data-toilets="5" data-address="Gò Vấp, Hồ Chí Minh" data-description="Chính chủ cần bán gấp nhà biệt thự số 653/38, đường Quang Trung, P. 11, Quận Gò Vấp. DT: 8.4m x 17m. DTXD 450m2. Nhà hướng Đông, xây một trệt, hai lầu, mái ngói, sân thượng: Phòng khách, phòng ăn, tầ" data-duration="Hôm nay" data-updatedtime="12/11/2020" data-datesort="11/12/2020 08:29:58" data-contactname="Hoanganhchi" data-contactmobile="0903913087" data-url="/ban-nha-rieng-duong-quang-trung-phuong-11-8/chinh-chu-can-ban-gap-biet-thu-so-653-38-p11-quan-go-vap-a-tho-0903913087-pr27757343" data-totalmedia="24" data-createbyuser="530272"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1496204">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-pham-ngoc-thach-phuong-hiep-thanh-prj-khu-dan-cu-hiep-thanh-iii/quen-chung-di-500-trieu-so-huu-ngay-can-dep-trung-tam-tp-tdm-bank-ho-tro-6tr-thang-pr27758081" title="Quên chung cư đi - 500 triệu sở hữu ngay căn nhà đẹp trung tâm TP. TDM (bank hỗ trợ 6tr/tháng)" onclick="">
                        <img class="product-avatar-img" alt="Quên chung cư đi - 500 triệu sở hữu ngay căn nhà đẹp trung tâm TP. TDM (bank hỗ trợ 6tr/tháng)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111194916-a30d_wm.jpg" is-lazy-image="true" lazy-id="2">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-pham-ngoc-thach-phuong-hiep-thanh-prj-khu-dan-cu-hiep-thanh-iii/quen-chung-di-500-trieu-so-huu-ngay-can-dep-trung-tam-tp-tdm-bank-ho-tro-6tr-thang-pr27758081" title="Quên chung cư đi - 500 triệu sở hữu ngay căn nhà đẹp trung tâm TP. TDM (bank hỗ trợ 6tr/tháng)" class="vipZero product-link">
                            QUÊN CHUNG CƯ ĐI - 500 TRIỆU SỞ HỮU NGAY CĂN NHÀ ĐẸP TRUNG TÂM TP. TDM (BANK HỖ TRỢ 6TR/THÁNG)
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">80 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thủ Dầu Một, Bình Dương</span>
                    </div>
                    <div class="product-content">
                        Bạn đang muốn tìm một căn nhà đẹp tại TP Thủ Dầu Một thì không nên bỏ qua căn này? - Vị trí: Liền kề trung tâm của phường Hiệp Thành, Phú Hòa, bệnh viện tỉnh, trung tâm hành chính tỉnh Bình Dương. - 
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
                                <i class="iconSave" data-productid="27758081" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Qu&amp;#234;n chung cư đi - 500 triệu sở hữu ngay căn nh&amp;#224; đẹp trung t&amp;#226;m TP. TDM (bank hỗ trợ 6tr/th&amp;#225;ng)&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111194916-a30d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111194916-a30d_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Quên chung cư đi - 500 triệu sở hữu ngay căn nhà đẹp trung tâm TP. TDM (bank hỗ trợ 6tr/tháng)" data-price="Giá thỏa thuận" data-area="80 m²" data-pricesort="0" data-areasort="80" data-room="2" data-toilets="2" data-address="Thủ Dầu Một, Bình Dương" data-description="Bạn đang muốn tìm một căn nhà đẹp tại TP Thủ Dầu Một thì không nên bỏ qua căn này? - Vị trí: Liền kề trung tâm của phường Hiệp Thành, Phú Hòa, bệnh viện tỉnh, trung tâm hành chính tỉnh Bình Dương. - " data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 19:50:18" data-contactname="Trường Thịnh" data-contactmobile="0976200112" data-url="/ban-nha-rieng-duong-pham-ngoc-thach-phuong-hiep-thanh-prj-khu-dan-cu-hiep-thanh-iii/quen-chung-di-500-trieu-so-huu-ngay-can-dep-trung-tam-tp-tdm-bank-ho-tro-6tr-thang-pr27758081" data-totalmedia="1" data-createbyuser="1496204"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="812014">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-ngo-duc-ke-1-phuong-12-7/ban-cap-4-mat-tien-gia-re-117-m2-3-534-8-m-93-p-12-quan-binh-thanh-pr27748151" title="Bán nhà cấp 4 mặt tiền (giá rẻ): 117m2 (3,5x34m); đường 8m (93 Ngô Đức Kế P. 12 Quận Bình Thạnh)" onclick="">
                        <img class="product-avatar-img" alt="Bán nhà cấp 4 mặt tiền (giá rẻ): 117m2 (3,5x34m); đường 8m (93 Ngô Đức Kế P. 12 Quận Bình Thạnh)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111124211-ceeb_wm.jpg" is-lazy-image="true" lazy-id="3">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">9</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-ngo-duc-ke-1-phuong-12-7/ban-cap-4-mat-tien-gia-re-117-m2-3-534-8-m-93-p-12-quan-binh-thanh-pr27748151" title="Bán nhà cấp 4 mặt tiền (giá rẻ): 117m2 (3,5x34m); đường 8m (93 Ngô Đức Kế P. 12 Quận Bình Thạnh)" class="vipZero product-link">
                            BÁN NHÀ CẤP 4 MẶT TIỀN (GIÁ RẺ): 117M2 (3,5X34M); ĐƯỜNG 8M (93 NGÔ ĐỨC KẾ P. 12 QUẬN BÌNH THẠNH)
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">10.2 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">102 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bình Thạnh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ bán nhà cấp 4 mặt tiền (giá rẻ): ĐC: 93 Ngô Đức Kế (số mới: 113), Phường 12, Quận Bình Thạnh, TP. HCM (song song đường Bùi Đình Túy và Chu Văn An, gần Trường Học Viện Cán Bộ). - DTSD: 117m2
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
                                <i class="iconSave" data-productid="27748151" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; cấp 4 mặt tiền (gi&amp;#225; rẻ): 117m2 (3,5x34m); đường 8m (93 Ng&amp;#244; Đức Kế P. 12 Quận B&amp;#236;nh Thạnh)&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111124211-ceeb_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111124211-ceeb_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà cấp 4 mặt tiền (giá rẻ): 117m2 (3,5x34m); đường 8m (93 Ngô Đức Kế P. 12 Quận Bình Thạnh)" data-price="10.2 tỷ" data-area="102 m²" data-pricesort="10200000000" data-areasort="102" data-room="2" data-toilets="2" data-address="Bình Thạnh, Hồ Chí Minh" data-description="Chính chủ bán nhà cấp 4 mặt tiền (giá rẻ): ĐC: 93 Ngô Đức Kế (số mới: 113), Phường 12, Quận Bình Thạnh, TP. HCM (song song đường Bùi Đình Túy và Chu Văn An, gần Trường Học Viện Cán Bộ). - DTSD: 117m2" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 10:57:30" data-contactname="Hồ Lý Thanh Nhân" data-contactmobile="0909008799" data-url="/ban-nha-rieng-duong-ngo-duc-ke-1-phuong-12-7/ban-cap-4-mat-tien-gia-re-117-m2-3-534-8-m-93-p-12-quan-binh-thanh-pr27748151" data-totalmedia="9" data-createbyuser="812014"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="812014">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-pho-nguyen-xi-phuong-26/-cap-4-hem-o-to-6-m-gia-re-216-m2-7-629-82-binh-thanh-sat-ben-xe-mien-dong-pr27748689" title="Nhà cấp 4 hẻm ô tô 6m (giá rẻ): 216m2 (7,6x29m) (82 Nguyễn Xí, Bình Thạnh; sát bến xe Miền Đông)" onclick="">
                        <img class="product-avatar-img" alt="Nhà cấp 4 hẻm ô tô 6m (giá rẻ): 216m2 (7,6x29m) (82 Nguyễn Xí, Bình Thạnh; sát bến xe Miền Đông)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111124535-877b_wm.jpg" is-lazy-image="true" lazy-id="4">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">9</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-pho-nguyen-xi-phuong-26/-cap-4-hem-o-to-6-m-gia-re-216-m2-7-629-82-binh-thanh-sat-ben-xe-mien-dong-pr27748689" title="Nhà cấp 4 hẻm ô tô 6m (giá rẻ): 216m2 (7,6x29m) (82 Nguyễn Xí, Bình Thạnh; sát bến xe Miền Đông)" class="vipZero product-link">
                            NHÀ CẤP 4 HẺM Ô TÔ 6M (GIÁ RẺ): 216M2 (7,6X29M) (82 NGUYỄN XÍ, BÌNH THẠNH; SÁT BẾN XE MIỀN ĐÔNG)
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">23 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">216 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bình Thạnh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ bán nhà cấp 4 hẻm ô tô (giá rẻ): Phù hợp xây cao tầng để làm căn hộ dịch vụ, phòng cho thuê cao cấp, khách sạn, hoặc xây biệt thự... ĐC: Hẻm 82 Nguyễn Xí, Phường 26, Quận Bình Thạnh, TP. HC
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
                                <i class="iconSave" data-productid="27748689" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Nh&amp;#224; cấp 4 hẻm &amp;#244; t&amp;#244; 6m (gi&amp;#225; rẻ): 216m2 (7,6x29m) (82 Nguyễn X&amp;#237;, B&amp;#236;nh Thạnh; s&amp;#225;t bến xe Miền Đ&amp;#244;ng)&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111124535-877b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111124535-877b_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Nhà cấp 4 hẻm ô tô 6m (giá rẻ): 216m2 (7,6x29m) (82 Nguyễn Xí, Bình Thạnh; sát bến xe Miền Đông)" data-price="23 tỷ" data-area="216 m²" data-pricesort="23000000000" data-areasort="216" data-room="5" data-toilets="2" data-address="Bình Thạnh, Hồ Chí Minh" data-description="Chính chủ bán nhà cấp 4 hẻm ô tô (giá rẻ): Phù hợp xây cao tầng để làm căn hộ dịch vụ, phòng cho thuê cao cấp, khách sạn, hoặc xây biệt thự... ĐC: Hẻm 82 Nguyễn Xí, Phường 26, Quận Bình Thạnh, TP. HC" data-duration="Hôm qua" data-updatedtime="11/11/2020" data-datesort="11/11/2020 10:37:46" data-contactname="Hồ Lý Thanh Nhân" data-contactmobile="0909008799" data-url="/ban-nha-rieng-pho-nguyen-xi-phuong-26/-cap-4-hem-o-to-6-m-gia-re-216-m2-7-629-82-binh-thanh-sat-ben-xe-mien-dong-pr27748689" data-totalmedia="9" data-createbyuser="812014"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1416234">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-hoa-hao-phuong-8-10/chinh-chu-can-ban-hem-402-quan-10-hem-xe-tai-1-tret-2-lau-gia-rat-tot-pr27741900" title="Chính chủ cần bán nhà hẻm 402 Đường Hòa Hảo, Quận 10, hẻm xe tải nhỏ , 1 trệt, 2 lầu, giá rất tốt" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần bán nhà hẻm 402 Đường Hòa Hảo, Quận 10, hẻm xe tải nhỏ , 1 trệt, 2 lầu, giá rất tốt" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/17/GSfXwqS5/20201017103113-129d_wm.jpg" is-lazy-image="true" lazy-id="5">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">23</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-hoa-hao-phuong-8-10/chinh-chu-can-ban-hem-402-quan-10-hem-xe-tai-1-tret-2-lau-gia-rat-tot-pr27741900" title="Chính chủ cần bán nhà hẻm 402 Đường Hòa Hảo, Quận 10, hẻm xe tải nhỏ , 1 trệt, 2 lầu, giá rất tốt" class="vipZero product-link">
                            CHÍNH CHỦ CẦN BÁN NHÀ HẺM 402 ĐƯỜNG HÒA HẢO, QUẬN 10, HẺM XE TẢI NHỎ , 1 TRỆT, 2 LẦU, GIÁ RẤT TỐT
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">6.5 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">29.6 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 10, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cần Bán nhà hẻm 402 Đường Hòa Hảo, Phường 8, Quận 10  Kết cấu 1 trệt 2 lầu, 1 Sân Thượng, 5PN, 4wc, đúc. Diện tích 29.6 m2 Diện tích  sàn 105,4 m2 Pháp lý đầy đủ Hẻm xe tải nhỏ,2 hẻm trước 
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
                                <i class="iconSave" data-productid="27741900" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần b&amp;#225;n nh&amp;#224; hẻm 402 Đường H&amp;#242;a Hảo, Quận 10, hẻm xe tải nhỏ , 1 trệt, 2 lầu, gi&amp;#225; rất tốt&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/17/GSfXwqS5/20201017103113-129d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/17/GSfXwqS5/20201017103113-129d_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần bán nhà hẻm 402 Đường Hòa Hảo, Quận 10, hẻm xe tải nhỏ , 1 trệt, 2 lầu, giá rất tốt" data-price="6.5 tỷ" data-area="29.6 m²" data-pricesort="6500000000" data-areasort="29.6" data-room="0" data-toilets="0" data-address="Quận 10, Hồ Chí Minh" data-description="Chính chủ cần Bán nhà hẻm 402 Đường Hòa Hảo, Phường 8, Quận 10  Kết cấu 1 trệt 2 lầu, 1 Sân Thượng, 5PN, 4wc, đúc. Diện tích 29.6 m2 Diện tích  sàn 105,4 m2 Pháp lý đầy đủ Hẻm xe tải nhỏ,2 hẻm trước " data-duration="2 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 17:32:30" data-contactname="Minh Hoàng" data-contactmobile="0931210272" data-url="/ban-nha-rieng-duong-hoa-hao-phuong-8-10/chinh-chu-can-ban-hem-402-quan-10-hem-xe-tai-1-tret-2-lau-gia-rat-tot-pr27741900" data-totalmedia="23" data-createbyuser="1416234"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1201704">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-tien-son-4-46/chu-vao-binh-dinh-cu-can-ban-o-3-me-co-9-phong-tro-cho-thue-4-hai-chau-dang-pr27478552" title="Chủ nhà vào Bình Dương định cư cần bán nhà ở 3 mê có 9 phòng trọ cho thuê Tiên Sơn 4, Hải Châu" onclick="">
                        <img class="product-avatar-img" alt="Chủ nhà vào Bình Dương định cư cần bán nhà ở 3 mê có 9 phòng trọ cho thuê Tiên Sơn 4, Hải Châu" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/20201020131126-d36c_wm.jpg" is-lazy-image="true" lazy-id="6">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">23</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-tien-son-4-46/chu-vao-binh-dinh-cu-can-ban-o-3-me-co-9-phong-tro-cho-thue-4-hai-chau-dang-pr27478552" title="Chủ nhà vào Bình Dương định cư cần bán nhà ở 3 mê có 9 phòng trọ cho thuê Tiên Sơn 4, Hải Châu" class="vipZero product-link">
                            CHỦ NHÀ VÀO BÌNH DƯƠNG ĐỊNH CƯ CẦN BÁN NHÀ Ở 3 MÊ CÓ 9 PHÒNG TRỌ CHO THUÊ TIÊN SƠN 4, HẢI CHÂU
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">4.4 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">65.2 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hải Châu, Đà Nẵng</span>
                    </div>
                    <div class="product-content">
                        Chủ nhà chuyển vào Bình Dương sinh sống cần bán nhà cho khách mua thiện chí căn nhà số 17 đường Tiên Sơn 4, Quận Hải Châu, Tp Đà Nẵng, nhà hướng Bắc, vị trí đắc địa sát trường mầm non lớn, gần chợ đầ
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
                                <i class="iconSave" data-productid="27478552" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chủ nh&amp;#224; v&amp;#224;o B&amp;#236;nh Dương định cư cần b&amp;#225;n nh&amp;#224; ở 3 m&amp;#234; c&amp;#243; 9 ph&amp;#242;ng trọ cho thu&amp;#234; Ti&amp;#234;n Sơn 4, Hải Ch&amp;#226;u&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/20201020131126-d36c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/20/20201020131126-d36c_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chủ nhà vào Bình Dương định cư cần bán nhà ở 3 mê có 9 phòng trọ cho thuê Tiên Sơn 4, Hải Châu" data-price="4.4 tỷ" data-area="65.2 m²" data-pricesort="4400000000" data-areasort="65.2" data-room="1" data-toilets="1" data-address="Hải Châu, Đà Nẵng" data-description="Chủ nhà chuyển vào Bình Dương sinh sống cần bán nhà cho khách mua thiện chí căn nhà số 17 đường Tiên Sơn 4, Quận Hải Châu, Tp Đà Nẵng, nhà hướng Bắc, vị trí đắc địa sát trường mầm non lớn, gần chợ đầ" data-duration="2 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 10:30:21" data-contactname="Nguyễn Thị Duyên" data-contactmobile="0933426799" data-url="/ban-nha-rieng-duong-tien-son-4-46/chu-vao-binh-dinh-cu-can-ban-o-3-me-co-9-phong-tro-cho-thue-4-hai-chau-dang-pr27478552" data-totalmedia="23" data-createbyuser="1201704"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1506027">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-bo-de-phuong-bo-de/ban-ngo-12-pho-canh-cau-chuong-sdcc-50m2-o-to-vao-co-thang-may-pr27719209" title="CHÍNH CHỦ CẦN BÁN NHANH NHÀ 6 TẦNG SIÊU ĐẸP TẠI BỒ ĐỀ, LONG BIÊN, HÀ NỘI" onclick="">
                        <img class="product-avatar-img" alt="CHÍNH CHỦ CẦN BÁN NHANH NHÀ 6 TẦNG SIÊU ĐẸP TẠI BỒ ĐỀ, LONG BIÊN, HÀ NỘI" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109151419-e2b4.jpg" is-lazy-image="true" lazy-id="7">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">18</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-bo-de-phuong-bo-de/ban-ngo-12-pho-canh-cau-chuong-sdcc-50m2-o-to-vao-co-thang-may-pr27719209" title="CHÍNH CHỦ CẦN BÁN NHANH NHÀ 6 TẦNG SIÊU ĐẸP TẠI BỒ ĐỀ, LONG BIÊN, HÀ NỘI" class="vipZero product-link">
                            CHÍNH CHỦ CẦN BÁN NHANH NHÀ 6 TẦNG SIÊU ĐẸP TẠI BỒ ĐỀ, LONG BIÊN, HÀ NỘI
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">6.5 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">50 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Long Biên, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Vì có việc chuyển công tác tôi cần bán gấp nhà tại  số nhà 35E, ngõ 12 phố Bồ Đề  cạnh cầu Chương Dương  -Nhà mới tự xây, 5tầng 1tum có thang máy và gara ô tô xe 4 chỗ vào nhà ,thang máy chạy lên tần
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                3 ngày trước
                                <span class="tooltip-time">09/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27719209" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;CH&amp;#205;NH CHỦ CẦN B&amp;#193;N NHANH NH&amp;#192; 6 TẦNG SI&amp;#202;U ĐẸP TẠI BỒ ĐỀ, LONG BI&amp;#202;N, H&amp;#192; NỘI&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109151419-e2b4.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109151419-e2b4.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="CHÍNH CHỦ CẦN BÁN NHANH NHÀ 6 TẦNG SIÊU ĐẸP TẠI BỒ ĐỀ, LONG BIÊN, HÀ NỘI" data-price="6.5 tỷ" data-area="50 m²" data-pricesort="6500000000" data-areasort="50" data-room="10" data-toilets="3" data-address="Long Biên, Hà Nội" data-description="Vì có việc chuyển công tác tôi cần bán gấp nhà tại  số nhà 35E, ngõ 12 phố Bồ Đề  cạnh cầu Chương Dương  -Nhà mới tự xây, 5tầng 1tum có thang máy và gara ô tô xe 4 chỗ vào nhà ,thang máy chạy lên tần" data-duration="3 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 15:32:17" data-contactname="Anh Kiểm" data-contactmobile="0919761218" data-url="/ban-nha-rieng-duong-bo-de-phuong-bo-de/ban-ngo-12-pho-canh-cau-chuong-sdcc-50m2-o-to-vao-co-thang-may-pr27719209" data-totalmedia="18" data-createbyuser="1506027"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="494551">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-phuong-thuong-cat/ban-dat-so-do-30m-gia-790tr-va-3-tang-1-ty-450tr-o-to-do-cua-hot-t-quan-bac-tu-liem-pr25640124" title="Bán nhà 3 tầng mới xây 1 tỷ 450 triệu-ô tô đỗ cửa-gần đại học Công Nghiệp hot nhất Quận Bắc Từ Liêm" onclick="">
                        <img class="product-avatar-img" alt="Bán nhà 3 tầng mới xây 1 tỷ 450 triệu-ô tô đỗ cửa-gần đại học Công Nghiệp hot nhất Quận Bắc Từ Liêm" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/17/20200717105725-a464_wm.jpg" is-lazy-image="true" lazy-id="8"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/17/20200717105725-1ec6_wm.jpg" is-lazy-image="true" lazy-id="9"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/05/30/20200530104019-231c_wm.jpg" is-lazy-image="true" lazy-id="10">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">11</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-phuong-thuong-cat/ban-dat-so-do-30m-gia-790tr-va-3-tang-1-ty-450tr-o-to-do-cua-hot-t-quan-bac-tu-liem-pr25640124" title="Bán nhà 3 tầng mới xây 1 tỷ 450 triệu-ô tô đỗ cửa-gần đại học Công Nghiệp hot nhất Quận Bắc Từ Liêm" class="vipZero product-link">
                            BÁN NHÀ 3 TẦNG MỚI XÂY 1 TỶ 450 TRIỆU-Ô TÔ ĐỖ CỬA-GẦN ĐẠI HỌC CÔNG NGHIỆP HOT NHẤT QUẬN BẮC TỪ LIÊM
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1.45 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">35 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">3 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">2 WC</span>
                        <span class="location">Bắc Từ Liêm, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Tôi cần bán nhà tại Quận Bắc từ Liêm. Khu vực gần Cầu Diễn, cách Cầu Diễn 5Km gần Nhổn. Nhà đã có sổ đỏ. Cạnh dự án của Vinhomes Wonder Park 153 Ha cực đẹp, thành phố mới ngay gần nhà tôi bán.* Nhà 3 tầng xây mới cần bán giá 1,45 tỷ bao sang tên có nội thất cơ bản, nhà chưa ở, xây 35m2 đất. Mặt tiền nhà 4,5m. Nhà đỗ ô tô trước cửa nhà như xe taxi đỗ trên hình ảnh tôi gửi kèm th
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                3 ngày trước
                                <span class="tooltip-time">09/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Phạm">
                                <span class="contact-name">Phạm</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0984614487" raw="0984614487">0984 614 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="25640124" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; 3 tầng mới x&amp;#226;y 1 tỷ 450 triệu-&amp;#244; t&amp;#244; đỗ cửa-gần đại học C&amp;#244;ng Nghiệp hot nhất Quận Bắc Từ Li&amp;#234;m&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/17/20200717105725-a464_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/17/20200717105725-1ec6_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/05/30/20200530104019-231c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/07/17/20200717105725-a464_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà 3 tầng mới xây 1 tỷ 450 triệu-ô tô đỗ cửa-gần đại học Công Nghiệp hot nhất Quận Bắc Từ Liêm" data-price="1.45 tỷ" data-area="35 m²" data-pricesort="1450000000" data-areasort="35" data-room="3" data-toilets="2" data-address="Bắc Từ Liêm, Hà Nội" data-description="Tôi cần bán nhà tại Quận Bắc từ Liêm. Khu vực gần Cầu Diễn, cách Cầu Diễn 5Km gần Nhổn. Nhà đã có sổ đỏ. Cạnh dự án của Vinhomes Wonder Park 153 Ha cực đẹp, thành phố mới ngay gần nhà tôi bán.* Nhà 3 tầng xây mới cần bán giá 1,45 tỷ bao sang tên có nội thất cơ bản, nhà chưa ở, xây 35m2 đất. Mặt tiền nhà 4,5m. Nhà đỗ ô tô trước cửa nhà như xe taxi đỗ trên hình ảnh tôi gửi kèm th" data-duration="3 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 14:18:47" data-contactname="Phạm" data-contactmobile="0984614487" data-url="/ban-nha-rieng-phuong-thuong-cat/ban-dat-so-do-30m-gia-790tr-va-3-tang-1-ty-450tr-o-to-do-cua-hot-t-quan-bac-tu-liem-pr25640124" data-totalmedia="11" data-createbyuser="494551"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="163198">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-12-phuong-hiep-binh-phuoc/-3-lau-hem-5m-xe-hoi-thu-duc-pr27718846" title="Chính chủ cần bán nhà 3 lầu hẻm 5m xe hơi. SHR Hiệp Bình Phước, Thủ Đức." onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần bán nhà 3 lầu hẻm 5m xe hơi. SHR Hiệp Bình Phước, Thủ Đức." error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109100921-1f35_wm.jpg" is-lazy-image="true" lazy-id="11">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-12-phuong-hiep-binh-phuoc/-3-lau-hem-5m-xe-hoi-thu-duc-pr27718846" title="Chính chủ cần bán nhà 3 lầu hẻm 5m xe hơi. SHR Hiệp Bình Phước, Thủ Đức." class="vipZero product-link">
                            CHÍNH CHỦ CẦN BÁN NHÀ 3 LẦU HẺM 5M XE HƠI. SHR HIỆP BÌNH PHƯỚC, THỦ ĐỨC.
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.75 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">130 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thủ Đức, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                         Chính chủ cần bán nhà 3 lầu hẻm 5m xe hơi. SHR Hiệp Bình Phước, Thủ Đức - Diện tích đất 52m2 (4x13) thổ cư 100%. Đường Ôtô. - Nhà cấp 3 diện tích sàn: 129,72m2 đã hoàn công - Nhà 1 trệt 2 lầu, sân t
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                3 ngày trước
                                <span class="tooltip-time">09/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27718846" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần b&amp;#225;n nh&amp;#224; 3 lầu hẻm 5m xe hơi. SHR Hiệp B&amp;#236;nh Phước, Thủ Đức.&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109100921-1f35_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109100921-1f35_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần bán nhà 3 lầu hẻm 5m xe hơi. SHR Hiệp Bình Phước, Thủ Đức." data-price="3.75 tỷ" data-area="130 m²" data-pricesort="3750000000" data-areasort="130" data-room="3" data-toilets="0" data-address="Thủ Đức, Hồ Chí Minh" data-description=" Chính chủ cần bán nhà 3 lầu hẻm 5m xe hơi. SHR Hiệp Bình Phước, Thủ Đức - Diện tích đất 52m2 (4x13) thổ cư 100%. Đường Ôtô. - Nhà cấp 3 diện tích sàn: 129,72m2 đã hoàn công - Nhà 1 trệt 2 lầu, sân t" data-duration="3 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 11:27:59" data-contactname="Dang Phuc Quang" data-contactmobile="0976003343" data-url="/ban-nha-rieng-duong-12-phuong-hiep-binh-phuoc/-3-lau-hem-5m-xe-hoi-thu-duc-pr27718846" data-totalmedia="8" data-createbyuser="163198"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="337903">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-nguyen-cong-tru-phuong-van-quan/ban-5-tang-can-goc-2-mat-tien-pho-ha-dong-kinh-doanh-de-o-to-lh-0904778104-pr27714829" title="Bán nhà 5 tầng căn góc 2 mặt tiền phố Nguyễn Công Trứ - Hà Đông (kinh doanh để ô tô), LH 0904778104" onclick="">
                        <img class="product-avatar-img" alt="Bán nhà 5 tầng căn góc 2 mặt tiền phố Nguyễn Công Trứ - Hà Đông (kinh doanh để ô tô), LH 0904778104" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109071137-8a5a_wm.jpg" is-lazy-image="true" lazy-id="12">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">15</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-nguyen-cong-tru-phuong-van-quan/ban-5-tang-can-goc-2-mat-tien-pho-ha-dong-kinh-doanh-de-o-to-lh-0904778104-pr27714829" title="Bán nhà 5 tầng căn góc 2 mặt tiền phố Nguyễn Công Trứ - Hà Đông (kinh doanh để ô tô), LH 0904778***" class="vipZero product-link" style="overflow: visible;">
                            BÁN NHÀ 5 TẦNG CĂN GÓC 2 MẶT TIỀN PHỐ NGUYỄN CÔNG TRỨ - HÀ ĐÔNG (KINH DOANH ĐỂ Ô TÔ), LH <span class="hidden-mobile m-on-title" raw="0904778104">0904778***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">6.6 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">45 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hà Đông, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        * Bán nhà căn góc, hai mặt tiền, nhà 5 tầng, mặt phố Nguyễn Công Trứ - Hà Đông, kinh doanh cực tốt. Giá bán: 6.6 tỷ. (Đây là ảnh thật 100%). - Mặt tiền: 4m. - Hướng: Tây Nam và Đông - Nam. * Nhà xây 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                3 ngày trước
                                <span class="tooltip-time">09/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27714829" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; 5 tầng căn g&amp;#243;c 2 mặt tiền phố Nguyễn C&amp;#244;ng Trứ - H&amp;#224; Đ&amp;#244;ng (kinh doanh để &amp;#244; t&amp;#244;), LH 0904778104&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109071137-8a5a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109071137-8a5a_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà 5 tầng căn góc 2 mặt tiền phố Nguyễn Công Trứ - Hà Đông (kinh doanh để ô tô), LH 0904778104" data-price="6.6 tỷ" data-area="45 m²" data-pricesort="6600000000" data-areasort="45" data-room="4" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="* Bán nhà căn góc, hai mặt tiền, nhà 5 tầng, mặt phố Nguyễn Công Trứ - Hà Đông, kinh doanh cực tốt. Giá bán: 6.6 tỷ. (Đây là ảnh thật 100%). - Mặt tiền: 4m. - Hướng: Tây Nam và Đông - Nam. * Nhà xây " data-duration="3 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 07:21:23" data-contactname="Hải Nam" data-contactmobile="0904778104" data-url="/ban-nha-rieng-duong-nguyen-cong-tru-phuong-van-quan/ban-5-tang-can-goc-2-mat-tien-pho-ha-dong-kinh-doanh-de-o-to-lh-0904778104-pr27714829" data-totalmedia="15" data-createbyuser="337903"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="780898">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-10-phuong-hiep-binh-chanh/giam-soc-rong-chua-o-5x16-ngay-dai-hoc-luat-canh-cau-loi-pr27709267" title="Giảm sốc! Nhà rộng chưa ở 5x16m ngay Đại Học Luật cạnh cầu Bình Lợi" onclick="">
                        <img class="product-avatar-img" alt="Giảm sốc! Nhà rộng chưa ở 5x16m ngay Đại Học Luật cạnh cầu Bình Lợi" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108070457-e308_wm.jpeg" is-lazy-image="true" lazy-id="13">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">10</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-10-phuong-hiep-binh-chanh/giam-soc-rong-chua-o-5x16-ngay-dai-hoc-luat-canh-cau-loi-pr27709267" title="Giảm sốc! Nhà rộng chưa ở 5x16m ngay Đại Học Luật cạnh cầu Bình Lợi" class="vipZero product-link">
                            GIẢM SỐC! NHÀ RỘNG CHƯA Ở 5X16M NGAY ĐẠI HỌC LUẬT CẠNH CẦU BÌNH LỢI
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">6.5 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">80 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thủ Đức, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        - Không thể tìm đâu khu vực Hiệp Bình Chánh giáp Bình Thạnh có diện tích rộng và giá tốt như vậy. - Hàng thu hồi vốn nên bán nhanh giảm cực sâu lên đến 10% so với giá gốc. Nhờ anh em môi giới ra hàng
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                4 ngày trước
                                <span class="tooltip-time">08/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27709267" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Giảm sốc! Nh&amp;#224; rộng chưa ở 5x16m ngay Đại Học Luật cạnh cầu B&amp;#236;nh Lợi&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108070457-e308_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/08/20201108070457-e308_wm.jpeg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Giảm sốc! Nhà rộng chưa ở 5x16m ngay Đại Học Luật cạnh cầu Bình Lợi" data-price="6.5 tỷ" data-area="80 m²" data-pricesort="6500000000" data-areasort="80" data-room="4" data-toilets="5" data-address="Thủ Đức, Hồ Chí Minh" data-description="- Không thể tìm đâu khu vực Hiệp Bình Chánh giáp Bình Thạnh có diện tích rộng và giá tốt như vậy. - Hàng thu hồi vốn nên bán nhanh giảm cực sâu lên đến 10% so với giá gốc. Nhờ anh em môi giới ra hàng" data-duration="4 ngày trước" data-updatedtime="08/11/2020" data-datesort="11/08/2020 07:17:45" data-contactname="Trần Phương Thảo" data-contactmobile="0773838838" data-url="/ban-nha-rieng-duong-10-phuong-hiep-binh-chanh/giam-soc-rong-chua-o-5x16-ngay-dai-hoc-luat-canh-cau-loi-pr27709267" data-totalmedia="10" data-createbyuser="780898"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="1288185">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-thanh-liet-xa-thanh-liet/chinh-chu-ban-canh-cong-vien-chu-van-an-mien-trung-gian-pr27571842" title="Chính chủ bán nhà Thanh Liệt | Cạnh công viên Chu Văn An (Miễn trung gian)" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ bán nhà Thanh Liệt | Cạnh công viên Chu Văn An (Miễn trung gian)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/28/20201028084718-dd1e_wm.jpg" is-lazy-image="true" lazy-id="14"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/28/20201028084814-b9d2_wm.jpg" is-lazy-image="true" lazy-id="15"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/28/20201028084719-3889_wm.jpg" is-lazy-image="true" lazy-id="16">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-thanh-liet-xa-thanh-liet/chinh-chu-ban-canh-cong-vien-chu-van-an-mien-trung-gian-pr27571842" title="Chính chủ bán nhà Thanh Liệt | Cạnh công viên Chu Văn An (Miễn trung gian)" class="vipZero product-link">
                            CHÍNH CHỦ BÁN NHÀ THANH LIỆT | CẠNH CÔNG VIÊN CHU VĂN AN (MIỄN TRUNG GIAN)
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.85 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">35 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">4 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">3 WC</span>
                        <span class="location">Thanh Trì, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Nhà nằm sát dự án công viên Chu Văn An, cạnh Hồ Thanh Liệt (Hồ Đầm tròn). - Cạnh khu đô thị The Manor Central Park, cạnh khu biệt thự Eden Rose. - Cách trường tiểu học, THCS, mầm non 1 - 1,5km, cách chợ Quang 1,5km. - Nhà thông thủy, ngõ trước 2 ô tô tránh, ngõ sau ô tô đỗ. Phía trước nhà 300 - 400m không có công trình nào chắn. - Hướng Đông Nam, thoáng mát  - Nhà 4.5 tầng thiế
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                5 ngày trước
                                <span class="tooltip-time">07/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Hoàng Thị Hương">
                                <span class="contact-name">...g Thị Hương</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0902421389" raw="0902421389">0902 421 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27571842" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n nh&amp;#224; Thanh Liệt | Cạnh c&amp;#244;ng vi&amp;#234;n Chu Văn An (Miễn trung gian)&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/28/20201028084718-dd1e_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/28/20201028084814-b9d2_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/28/20201028084719-3889_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/10/28/20201028084718-dd1e_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ bán nhà Thanh Liệt | Cạnh công viên Chu Văn An (Miễn trung gian)" data-price="3.85 tỷ" data-area="35 m²" data-pricesort="3850000000" data-areasort="35" data-room="4" data-toilets="3" data-address="Thanh Trì, Hà Nội" data-description="Nhà nằm sát dự án công viên Chu Văn An, cạnh Hồ Thanh Liệt (Hồ Đầm tròn). - Cạnh khu đô thị The Manor Central Park, cạnh khu biệt thự Eden Rose. - Cách trường tiểu học, THCS, mầm non 1 - 1,5km, cách chợ Quang 1,5km. - Nhà thông thủy, ngõ trước 2 ô tô tránh, ngõ sau ô tô đỗ. Phía trước nhà 300 - 400m không có công trình nào chắn. - Hướng Đông Nam, thoáng mát  - Nhà 4.5 tầng thiế" data-duration="5 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 13:14:09" data-contactname="Hoàng Thị Hương" data-contactmobile="0902421389" data-url="/ban-nha-rieng-duong-thanh-liet-xa-thanh-liet/chinh-chu-ban-canh-cong-vien-chu-van-an-mien-trung-gian-pr27571842" data-totalmedia="8" data-createbyuser="1288185"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="494551">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-pho-le-trong-tan-phuong-duong-noi/mo-ban-60-can-chia-lo-3-tang-gan-va-sieu-thi-aeonmall-t-ban-tu-1-1-ty-den-1-5-ty-pr27691780" title="Mở bán 26 căn nhà ô tô đỗ cửa - 3 tầng Yên Nghĩa gần Dương Nội và siêu thị Aeon Mall 1,2 đến 1,4 tỷ" onclick="">
                        <img class="product-avatar-img" alt="Mở bán 26 căn nhà ô tô đỗ cửa - 3 tầng Yên Nghĩa gần Dương Nội và siêu thị Aeon Mall 1,2 đến 1,4 tỷ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106134551-e10c_wm.jpg" is-lazy-image="true" lazy-id="17"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112115524-8346_wm.jpg" is-lazy-image="true" lazy-id="18"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108091714-b0c3_wm.jpg" is-lazy-image="true" lazy-id="19">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-pho-le-trong-tan-phuong-duong-noi/mo-ban-60-can-chia-lo-3-tang-gan-va-sieu-thi-aeonmall-t-ban-tu-1-1-ty-den-1-5-ty-pr27691780" title="Mở bán 26 căn nhà ô tô đỗ cửa - 3 tầng Yên Nghĩa gần Dương Nội và siêu thị Aeon Mall 1,2 đến 1,4 tỷ" class="vipZero product-link">
                            MỞ BÁN 26 CĂN NHÀ Ô TÔ ĐỖ CỬA - 3 TẦNG YÊN NGHĨA GẦN DƯƠNG NỘI VÀ SIÊU THỊ AEON MALL 1,2 ĐẾN 1,4 TỶ
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1.2 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">32 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">3 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">2 WC</span>
                        <span class="location">Hà Đông, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        1 - Dự án 26 căn nhà chia lô ô tô đỗ cửa là 1 khu quần thể liền kề có cổng và tường bao quanh riêng biệt với chung quanh - Rất an toàn và văn minh, khách mua nhà 90% là người trẻ từ 20 đến 30 tuổi, nghề nghiệp chủ yếu là giáo viên bộ đội, văn phòng.
 
 2 - Giá nhà từ 1,2 tỷ đến 1,4 tỷ ô tô đỗ cửa - khu dân cư đông đúc sầm uất - có bán căn thô cho khách tự hoàn thiện theo ý muốn
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                5 ngày trước
                                <span class="tooltip-time">07/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="">
                                <span class="contact-name"></span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0904621681" raw="0904621681">0904 621 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27691780" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Mở b&amp;#225;n 26 căn nh&amp;#224; &amp;#244; t&amp;#244; đỗ cửa - 3 tầng Y&amp;#234;n Nghĩa gần Dương Nội v&amp;#224; si&amp;#234;u thị Aeon Mall 1,2 đến 1,4 tỷ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106134551-e10c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112115524-8346_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108091714-b0c3_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/06/20201106134551-e10c_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Mở bán 26 căn nhà ô tô đỗ cửa - 3 tầng Yên Nghĩa gần Dương Nội và siêu thị Aeon Mall 1,2 đến 1,4 tỷ" data-price="1.2 tỷ" data-area="32 m²" data-pricesort="1200000048" data-areasort="32" data-room="3" data-toilets="2" data-address="Hà Đông, Hà Nội" data-description="1 - Dự án 26 căn nhà chia lô ô tô đỗ cửa là 1 khu quần thể liền kề có cổng và tường bao quanh riêng biệt với chung quanh - Rất an toàn và văn minh, khách mua nhà 90% là người trẻ từ 20 đến 30 tuổi, nghề nghiệp chủ yếu là giáo viên bộ đội, văn phòng.
 
 2 - Giá nhà từ 1,2 tỷ đến 1,4 tỷ ô tô đỗ cửa - khu dân cư đông đúc sầm uất - có bán căn thô cho khách tự hoàn thiện theo ý muốn" data-duration="5 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 09:17:15" data-contactname="" data-contactmobile="0904621681" data-url="/ban-nha-rieng-pho-le-trong-tan-phuong-duong-noi/mo-ban-60-can-chia-lo-3-tang-gan-va-sieu-thi-aeonmall-t-ban-tu-1-1-ty-den-1-5-ty-pr27691780" data-totalmedia="8" data-createbyuser="494551"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1435994">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-so-7-xa-tan-vinh-hiep/toi-chinh-chu-can-ban-nh-can-64m2-gan-nga-tu-binh-chuan-tho-cu-100-ho-tro-vay-ngan-hang-pr26452977" title="Tôi chính chủ cần bán nhanh căn nhà 100m2 ngay Tân Vĩnh Hiệp thổ cư 100%, hỗ trợ vay ngân hàng" onclick="">
                        <img class="product-avatar-img" alt="Tôi chính chủ cần bán nhanh căn nhà 100m2 ngay Tân Vĩnh Hiệp thổ cư 100%, hỗ trợ vay ngân hàng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/2x63pygQ/20201106125943-072c_wm.jpg" is-lazy-image="true" lazy-id="20">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">7</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-so-7-xa-tan-vinh-hiep/toi-chinh-chu-can-ban-nh-can-64m2-gan-nga-tu-binh-chuan-tho-cu-100-ho-tro-vay-ngan-hang-pr26452977" title="Tôi chính chủ cần bán nhanh căn nhà 100m2 ngay Tân Vĩnh Hiệp thổ cư 100%, hỗ trợ vay ngân hàng" class="vipZero product-link">
                            TÔI CHÍNH CHỦ CẦN BÁN NHANH CĂN NHÀ 100M2 NGAY TÂN VĨNH HIỆP THỔ CƯ 100%, HỖ TRỢ VAY NGÂN HÀNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">2.3 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">100 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tân Uyên, Bình Dương</span>
                    </div>
                    <div class="product-content">
                        Tôi chủ nhà, cần bán nhanh giá rẻ căn nhà ngay chợ Tân Vĩnh Hiệp, Tân Uyên, Bình Dương, cam kết giá rẻ hơn thị trường và không đăng giá ảo.Nằm trong khu dân cư đông đúc, an ninh, vệ sinh, thoáng mát.
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                6 ngày trước
                                <span class="tooltip-time">06/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="26452977" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;T&amp;#244;i ch&amp;#237;nh chủ cần b&amp;#225;n nhanh căn nh&amp;#224; 100m2 ngay T&amp;#226;n Vĩnh Hiệp thổ cư 100%, hỗ trợ vay ng&amp;#226;n h&amp;#224;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/2x63pygQ/20201106125943-072c_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/06/2x63pygQ/20201106125943-072c_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Tôi chính chủ cần bán nhanh căn nhà 100m2 ngay Tân Vĩnh Hiệp thổ cư 100%, hỗ trợ vay ngân hàng" data-price="2.3 tỷ" data-area="100 m²" data-pricesort="2300000000" data-areasort="100" data-room="3" data-toilets="2" data-address="Tân Uyên, Bình Dương" data-description="Tôi chủ nhà, cần bán nhanh giá rẻ căn nhà ngay chợ Tân Vĩnh Hiệp, Tân Uyên, Bình Dương, cam kết giá rẻ hơn thị trường và không đăng giá ảo.Nằm trong khu dân cư đông đúc, an ninh, vệ sinh, thoáng mát." data-duration="6 ngày trước" data-updatedtime="06/11/2020" data-datesort="11/06/2020 06:53:06" data-contactname="Vũ Văn Lập" data-contactmobile="0968944993" data-url="/ban-nha-rieng-duong-so-7-xa-tan-vinh-hiep/toi-chinh-chu-can-ban-nh-can-64m2-gan-nga-tu-binh-chuan-tho-cu-100-ho-tro-vay-ngan-hang-pr26452977" data-totalmedia="7" data-createbyuser="1435994"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="494472">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-pho-le-trong-tan-phuong-duong-noi/-xay-moi-3-tang-gia-950-trieu-bao-ten-cach-1km-la-sieu-thi-nhat-aeon-mall-ha-dong-pr26745420" title="Nhà xây mới 3 tầng 1,1 tỷ gần siêu thị nhật Aeon Mall Hà Đông - Sổ đỏ tên tôi Phạm Trang" onclick="">
                        <img class="product-avatar-img" alt="Nhà xây mới 3 tầng 1,1 tỷ gần siêu thị nhật Aeon Mall Hà Đông - Sổ đỏ tên tôi Phạm Trang" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/21/20200821095754-6a80_wm.jpg" is-lazy-image="true" lazy-id="21"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/21/20200821095829-a492_wm.jpg" is-lazy-image="true" lazy-id="22"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/21/20200821095754-782b_wm.jpg" is-lazy-image="true" lazy-id="23">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">14</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-pho-le-trong-tan-phuong-duong-noi/-xay-moi-3-tang-gia-950-trieu-bao-ten-cach-1km-la-sieu-thi-nhat-aeon-mall-ha-dong-pr26745420" title="Nhà xây mới 3 tầng 1,1 tỷ gần siêu thị nhật Aeon Mall Hà Đông - Sổ đỏ tên tôi Phạm Trang" class="vipZero product-link">
                            NHÀ XÂY MỚI 3 TẦNG 1,1 TỶ GẦN SIÊU THỊ NHẬT AEON MALL HÀ ĐÔNG - SỔ ĐỎ TÊN TÔI PHẠM TRANG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1.1 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">33 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">3 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">2 WC</span>
                        <span class="location">Hà Đông, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Sổ đỏ chính chủ nhà đất tên tôi như ảnh sổ đỏ ở tin đăng: Phạm Thu Trang, không tiếp môi giới. * Chỉ 1,1 tỷ có ngay căn nhà xây mới 3 tầng.- Vị trí tại trung tâm thành phố mới của quận Hà Đông, cạnh ngã tư Tố Hữu và Lê Trọng Tấn. - Cạnh đại siêu thị của Nhật Bản Aeon Mall Hà Đông. - Gần Vinhomes Smart City là đại đô thị thông minh đẳng cấp quốc tế đầu tiên của Việt Nam với gần 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                1 tuần trước
                                <span class="tooltip-time">05/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Phạm Trang">
                                <span class="contact-name">Phạm Trang</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0969978480" raw="0969978480">0969 978 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="26745420" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Nh&amp;#224; x&amp;#226;y mới 3 tầng 1,1 tỷ gần si&amp;#234;u thị nhật Aeon Mall H&amp;#224; Đ&amp;#244;ng - Sổ đỏ t&amp;#234;n t&amp;#244;i Phạm Trang&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/08/21/20200821095754-6a80_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/08/21/20200821095829-a492_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/08/21/20200821095754-782b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/08/21/20200821095754-6a80_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Nhà xây mới 3 tầng 1,1 tỷ gần siêu thị nhật Aeon Mall Hà Đông - Sổ đỏ tên tôi Phạm Trang" data-price="1.1 tỷ" data-area="33 m²" data-pricesort="1100000000" data-areasort="33" data-room="3" data-toilets="2" data-address="Hà Đông, Hà Nội" data-description="Sổ đỏ chính chủ nhà đất tên tôi như ảnh sổ đỏ ở tin đăng: Phạm Thu Trang, không tiếp môi giới. * Chỉ 1,1 tỷ có ngay căn nhà xây mới 3 tầng.- Vị trí tại trung tâm thành phố mới của quận Hà Đông, cạnh ngã tư Tố Hữu và Lê Trọng Tấn. - Cạnh đại siêu thị của Nhật Bản Aeon Mall Hà Đông. - Gần Vinhomes Smart City là đại đô thị thông minh đẳng cấp quốc tế đầu tiên của Việt Nam với gần " data-duration="1 tuần trước" data-updatedtime="05/11/2020" data-datesort="11/05/2020 20:17:29" data-contactname="Phạm Trang" data-contactmobile="0969978480" data-url="/ban-nha-rieng-pho-le-trong-tan-phuong-duong-noi/-xay-moi-3-tang-gia-950-trieu-bao-ten-cach-1km-la-sieu-thi-nhat-aeon-mall-ha-dong-pr26745420" data-totalmedia="14" data-createbyuser="494472"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1502909">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-11-1-phuong-truong-tho-2/-hot-ban-1t3l-p-thu-duc-4pn-5wc-2-mt-7m-dt-91m2-xhr-lh-0938-235-628-pr27680506" title="(Hot) Bán nhà 1T 2L, P. Trường Thọ, Thủ Đức, 4PN, 5WC, 2 MT đường 7m DT 91.1m2, XHR, LH 0938235628" onclick="">
                        <img class="product-avatar-img" alt="(Hot) Bán nhà 1T 2L, P. Trường Thọ, Thủ Đức, 4PN, 5WC, 2 MT đường 7m DT 91.1m2, XHR, LH 0938235628" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/05/20201105162814-c1d9_wm.jpg" is-lazy-image="true" lazy-id="24">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-11-1-phuong-truong-tho-2/-hot-ban-1t3l-p-thu-duc-4pn-5wc-2-mt-7m-dt-91m2-xhr-lh-0938-235-628-pr27680506" title="(Hot) Bán nhà 1T 2L, P. Trường Thọ, Thủ Đức, 4PN, 5WC, 2 MT đường 7m DT 91.1m2, XHR, LH 0938235***" class="vipZero product-link" style="overflow: visible;">
                            (HOT) BÁN NHÀ 1T 2L, P. TRƯỜNG THỌ, THỦ ĐỨC, 4PN, 5WC, 2 MT ĐƯỜNG 7M DT 91.1M2, XHR, LH <span class="hidden-mobile m-on-title" raw="0938235628">0938235***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">6.5 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">91.1 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thủ Đức, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        - Nhà 1 trệt 2 lầu, gồm 4 phòng ngủ, 5WC, ban công đón gió. - Căn góc 2 mặt tiền đường nhựa 2 xe ô tô tránh nhau. Đường thông thoáng, sạch sẽ. - Vị trí: Đường 11, phường Trường Thọ, quận Thủ Đức. - D
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
                                <i class="iconSave" data-productid="27680506" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;(Hot) B&amp;#225;n nh&amp;#224; 1T 2L, P. Trường Thọ, Thủ Đức, 4PN, 5WC, 2 MT đường 7m DT 91.1m2, XHR, LH 0938235628&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/05/20201105162814-c1d9_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/05/20201105162814-c1d9_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="(Hot) Bán nhà 1T 2L, P. Trường Thọ, Thủ Đức, 4PN, 5WC, 2 MT đường 7m DT 91.1m2, XHR, LH 0938235628" data-price="6.5 tỷ" data-area="91.1 m²" data-pricesort="6500000000" data-areasort="91.1" data-room="4" data-toilets="5" data-address="Thủ Đức, Hồ Chí Minh" data-description="- Nhà 1 trệt 2 lầu, gồm 4 phòng ngủ, 5WC, ban công đón gió. - Căn góc 2 mặt tiền đường nhựa 2 xe ô tô tránh nhau. Đường thông thoáng, sạch sẽ. - Vị trí: Đường 11, phường Trường Thọ, quận Thủ Đức. - D" data-duration="1 tuần trước" data-updatedtime="05/11/2020" data-datesort="11/05/2020 16:30:32" data-contactname="Lê Văn Đắc" data-contactmobile="0938235628" data-url="/ban-nha-rieng-duong-11-1-phuong-truong-tho-2/-hot-ban-1t3l-p-thu-duc-4pn-5wc-2-mt-7m-dt-91m2-xhr-lh-0938-235-628-pr27680506" data-totalmedia="1" data-createbyuser="1502909"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="949453">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-pho-le-trong-tan-phuong-duong-noi/ban-1-3-ty-de-o-va-1-6-ty-o-to-do-cua-buon-ban-cuc-ky-tot-thuc-su-rat-tot-xem-thuc-te-pr23226717" title="Bán nhà kinh doanh tốt và ngõ gần không rẽ lòng vòng, thoáng, không bị chắn trung tâm mới Hà Đông" onclick="">
                        <img class="product-avatar-img" alt="Bán nhà kinh doanh tốt và ngõ gần không rẽ lòng vòng, thoáng, không bị chắn trung tâm mới Hà Đông" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/05/30/20200530111135-3224_wm.jpg" is-lazy-image="true" lazy-id="25"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/05/30/20200530111256-0d5b_wm.jpg" is-lazy-image="true" lazy-id="26"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/05/30/20200530111752-9ec6_wm.jpg" is-lazy-image="true" lazy-id="27">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">9</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-pho-le-trong-tan-phuong-duong-noi/ban-1-3-ty-de-o-va-1-6-ty-o-to-do-cua-buon-ban-cuc-ky-tot-thuc-su-rat-tot-xem-thuc-te-pr23226717" title="Bán nhà kinh doanh tốt và ngõ gần không rẽ lòng vòng, thoáng, không bị chắn trung tâm mới Hà Đông" class="vipZero product-link">
                            BÁN NHÀ KINH DOANH TỐT VÀ NGÕ GẦN KHÔNG RẼ LÒNG VÒNG, THOÁNG, KHÔNG BỊ CHẮN TRUNG TÂM MỚI HÀ ĐÔNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1.2 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">33 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">3 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">3 WC</span>
                        <span class="location">Hà Đông, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Chào anh chị! Sổ đỏ chính chủ - trực tiếp chủ nhà - chủ đầu tư là tôi không qua trung gian. - Tôi có nhà bán ở gần ngay quanh khu vực: Đường Lê Trọng Tấn. Đó là những khu trung tâm mới phát triển của 3 Quận Hà Đông - Nam Từ Liêm - Hoài Đức.- Giá nhà ở gần đường Lê Trọng Tấn: Xây mới 3 tầng căn rẻ nhất là 1 tỷ 200 triệu (thô). Hoàn thiện nội thất là 1 tỷ 320 triệu.* Giá nhà mặt 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                1 tuần trước
                                <span class="tooltip-time">05/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Nguyễn Anh Tuấn">
                                <span class="contact-name">...ễn Anh Tuấn</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0972232816" raw="0972232816">0972 232 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="23226717" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; kinh doanh tốt v&amp;#224; ng&amp;#245; gần kh&amp;#244;ng rẽ l&amp;#242;ng v&amp;#242;ng, tho&amp;#225;ng, kh&amp;#244;ng bị chắn trung t&amp;#226;m mới H&amp;#224; Đ&amp;#244;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/05/30/20200530111135-3224_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/05/30/20200530111256-0d5b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/05/30/20200530111752-9ec6_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/05/30/20200530111135-3224_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà kinh doanh tốt và ngõ gần không rẽ lòng vòng, thoáng, không bị chắn trung tâm mới Hà Đông" data-price="1.2 tỷ" data-area="33 m²" data-pricesort="1200000000" data-areasort="33" data-room="3" data-toilets="3" data-address="Hà Đông, Hà Nội" data-description="Chào anh chị! Sổ đỏ chính chủ - trực tiếp chủ nhà - chủ đầu tư là tôi không qua trung gian. - Tôi có nhà bán ở gần ngay quanh khu vực: Đường Lê Trọng Tấn. Đó là những khu trung tâm mới phát triển của 3 Quận Hà Đông - Nam Từ Liêm - Hoài Đức.- Giá nhà ở gần đường Lê Trọng Tấn: Xây mới 3 tầng căn rẻ nhất là 1 tỷ 200 triệu (thô). Hoàn thiện nội thất là 1 tỷ 320 triệu.* Giá nhà mặt " data-duration="1 tuần trước" data-updatedtime="05/11/2020" data-datesort="11/05/2020 16:25:48" data-contactname="Nguyễn Anh Tuấn" data-contactmobile="0972232816" data-url="/ban-nha-rieng-pho-le-trong-tan-phuong-duong-noi/ban-1-3-ty-de-o-va-1-6-ty-o-to-do-cua-buon-ban-cuc-ky-tot-thuc-su-rat-tot-xem-thuc-te-pr23226717" data-totalmedia="9" data-createbyuser="949453"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="1435455">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-hoang-van-thai-phuong-khuong-trung/chinh-chu-ban-100m2-4-tang-ngo-7m-khu-quan-doi-thai-pr26435685" title="Chính chủ bán nhà 100m2 x 4 tầng, ngõ 7m, khu quân đội Hoàng Văn Thái. LH: 0982283886 anh Thắng" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ bán nhà 100m2 x 4 tầng, ngõ 7m, khu quân đội Hoàng Văn Thái. LH: 0982283886 anh Thắng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/28/20200728120158-340e_wm.jpg" is-lazy-image="true" lazy-id="28"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/28/20200728120158-0f1b_wm.jpg" is-lazy-image="true" lazy-id="29"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/28/20200728120158-affb_wm.jpg" is-lazy-image="true" lazy-id="30">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-hoang-van-thai-phuong-khuong-trung/chinh-chu-ban-100m2-4-tang-ngo-7m-khu-quan-doi-thai-pr26435685" title="Chính chủ bán nhà 100m2 x 4 tầng, ngõ 7m, khu quân đội Hoàng Văn Thái. LH: 0982283*** anh Thắng" class="vipZero product-link" style="overflow: visible;">
                            CHÍNH CHỦ BÁN NHÀ 100M2 X 4 TẦNG, NGÕ 7M, KHU QUÂN ĐỘI HOÀNG VĂN THÁI. LH: <span class="hidden-mobile m-on-title" raw="0982283886">0982283***</span> ANH THẮNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">14.5 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">100 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">4 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">5 WC</span>
                        <span class="location">Thanh Xuân, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        - Nhà 100m2 chính chủ. Nhà 4 tầng kiên cố, tầng cao thoáng mát, sử dụng tốt, nước sơn mới. - Nhà có ban công, sân vườn, khoảng trống thoáng khí 1m phía sau. - Tầng 1 có gara ô tô và để thêm được 3 - 4 xe máy. - Nhà xây để ở nên cực kỳ kiên cố, các phòng ngủ đều được lát gỗ cao cấp chống trơn trượt. - Cầu thang rộng rãi: Sàn, lan can và tường được sử dụng gỗ Lim cao cấp, đảm bảo
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                1 tuần trước
                                <span class="tooltip-time">05/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Vũ Hữu Thắng">
                                <span class="contact-name">Vũ Hữu Thắng</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0982283886" raw="0982283886">0982 283 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="26435685" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n nh&amp;#224; 100m2 x 4 tầng, ng&amp;#245; 7m, khu qu&amp;#226;n đội Ho&amp;#224;ng Văn Th&amp;#225;i. LH: 0982283886 anh Thắng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/28/20200728120158-340e_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/28/20200728120158-0f1b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/28/20200728120158-affb_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/07/28/20200728120158-340e_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ bán nhà 100m2 x 4 tầng, ngõ 7m, khu quân đội Hoàng Văn Thái. LH: 0982283886 anh Thắng" data-price="14.5 tỷ" data-area="100 m²" data-pricesort="14500000000" data-areasort="100" data-room="4" data-toilets="5" data-address="Thanh Xuân, Hà Nội" data-description="- Nhà 100m2 chính chủ. Nhà 4 tầng kiên cố, tầng cao thoáng mát, sử dụng tốt, nước sơn mới. - Nhà có ban công, sân vườn, khoảng trống thoáng khí 1m phía sau. - Tầng 1 có gara ô tô và để thêm được 3 - 4 xe máy. - Nhà xây để ở nên cực kỳ kiên cố, các phòng ngủ đều được lát gỗ cao cấp chống trơn trượt. - Cầu thang rộng rãi: Sàn, lan can và tường được sử dụng gỗ Lim cao cấp, đảm bảo" data-duration="1 tuần trước" data-updatedtime="05/11/2020" data-datesort="11/05/2020 14:33:58" data-contactname="Vũ Hữu Thắng" data-contactmobile="0982283886" data-url="/ban-nha-rieng-duong-hoang-van-thai-phuong-khuong-trung/chinh-chu-ban-100m2-4-tang-ngo-7m-khu-quan-doi-thai-pr26435685" data-totalmedia="6" data-createbyuser="1435455"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1444871">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-quoc-lo-13-phuong-hiep-binh-phuoc-prj-khu-dan-cu-hong-long/can-ban-can-1-tret-2-lau-trong-kdc-thu-duc-hoan-cong-full-noi-that-shr-gia-5-6-ty-pr27673596" title="Bán căn nhà 1 trệt 2 lầu trong KDC Hồng Long - Thủ Đức, hoàn công, full nội thất, SHR, giá 4,4 tỷ" onclick="">
                        <img class="product-avatar-img" alt="Bán căn nhà 1 trệt 2 lầu trong KDC Hồng Long - Thủ Đức, hoàn công, full nội thất, SHR, giá 4,4 tỷ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/05/20201105102752-1bef_wm.jpg" is-lazy-image="true" lazy-id="31">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-quoc-lo-13-phuong-hiep-binh-phuoc-prj-khu-dan-cu-hong-long/can-ban-can-1-tret-2-lau-trong-kdc-thu-duc-hoan-cong-full-noi-that-shr-gia-5-6-ty-pr27673596" title="Bán căn nhà 1 trệt 2 lầu trong KDC Hồng Long - Thủ Đức, hoàn công, full nội thất, SHR, giá 4,4 tỷ" class="vipZero product-link">
                            BÁN CĂN NHÀ 1 TRỆT 2 LẦU TRONG KDC HỒNG LONG - THỦ ĐỨC, HOÀN CÔNG, FULL NỘI THẤT, SHR, GIÁ 4,4 TỶ
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">4.4 tỷ</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thủ Đức, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Tôi thiếu nợ ngân hàng đến ngày đáo hạn nhưng không có khả năng chi trả nên cần bán lại căn nhà đang ở để trả nợ ngân hàng.- Diện tích sàn 172m2.- Nhà gồm 1 tầng trệt 2 lầu (full nội thất) đã hoàn cô
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
                                <i class="iconSave" data-productid="27673596" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n căn nh&amp;#224; 1 trệt 2 lầu trong KDC Hồng Long - Thủ Đức, ho&amp;#224;n c&amp;#244;ng, full nội thất, SHR, gi&amp;#225; 4,4 tỷ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/05/20201105102752-1bef_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/05/20201105102752-1bef_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán căn nhà 1 trệt 2 lầu trong KDC Hồng Long - Thủ Đức, hoàn công, full nội thất, SHR, giá 4,4 tỷ" data-price="4.4 tỷ" data-area="Không xác định" data-pricesort="4400000000" data-areasort="0" data-room="4" data-toilets="5" data-address="Thủ Đức, Hồ Chí Minh" data-description="Tôi thiếu nợ ngân hàng đến ngày đáo hạn nhưng không có khả năng chi trả nên cần bán lại căn nhà đang ở để trả nợ ngân hàng.- Diện tích sàn 172m2.- Nhà gồm 1 tầng trệt 2 lầu (full nội thất) đã hoàn cô" data-duration="1 tuần trước" data-updatedtime="05/11/2020" data-datesort="11/05/2020 11:13:11" data-contactname="Hoanviet" data-contactmobile="0846553079" data-url="/ban-nha-rieng-duong-quoc-lo-13-phuong-hiep-binh-phuoc-prj-khu-dan-cu-hong-long/can-ban-can-1-tret-2-lau-trong-kdc-thu-duc-hoan-cong-full-noi-that-shr-gia-5-6-ty-pr27673596" data-totalmedia="5" data-createbyuser="1444871"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-center">
            <div class="pagination">
<a pid="1" class="actived" href="https://batdongsan.com.vn/ban-nha-rieng">1</a>
<a pid="2" class="" href="https://batdongsan.com.vn/ban-nha-rieng/p2">2</a>
<a pid="3" class="" href="https://batdongsan.com.vn/ban-nha-rieng/p3">3</a>
<a pid="4" class="" href="https://batdongsan.com.vn/ban-nha-rieng/p4">4</a>
<a pid="5" class="" href="https://batdongsan.com.vn/ban-nha-rieng/p5">5</a>
<a pid="2161" href="https://batdongsan.com.vn/ban-nha-rieng/p2161"><img src="./assets/image/ic_double_caret_right.png"></a>
</div>

        </div>
    </div>






    <div class="divide">&nbsp;</div>
<div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Bán nhà ngõ Yên Thế" href="https://batdongsan.com.vn/tags/ban/ban-nha-ngo-yen-the">Bán nhà ngõ Yên Thế</a></li>    <li><a title="Cho thuê nhà hẻm Nguyễn Trãi Quận 5" href="https://batdongsan.com.vn/tags/ban/cho-thue-nha-hem-nguyen-trai-quan-5">Cho thuê nhà hẻm Nguyễn Trãi Quận 5</a></li>    <li><a title="Bán nhà hẻm xe hơi Tô Hiến Thành" href="https://batdongsan.com.vn/tags/ban/ban-nha-hem-xe-hoi-to-hien-thanh">Bán nhà hẻm xe hơi Tô Hiến Thành</a></li>    <li><a title="Bán nhà chính chủ quận Thanh Xuân" href="https://batdongsan.com.vn/tags/ban/ban-nha-chinh-chu-quan-thanh-xuan">Bán nhà chính chủ quận Thanh Xuân</a></li>    <li><a title="Bán nhà chính chủ quận Hai Bà Trưng" href="https://batdongsan.com.vn/tags/ban/ban-nha-chinh-chu-quan-hai-ba-trung">Bán nhà chính chủ quận Hai Bà Trưng</a></li>    <li><a title="Bán nhà hẻm xe hơi Lê văn Sỹ" href="https://batdongsan.com.vn/tags/ban/ban-nha-hem-xe-hoi-le-van-sy">Bán nhà hẻm xe hơi Lê văn Sỹ</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
    <div class="product-seo-text">
        <div><strong>Batdongsan.com.vn</strong> mang đến kênh thông tin <strong>mua bán nhà riêng tại Việt Nam</strong>. 
                                Là kênh thông tin bất động sản lớn nhất tại Việt Nam Batdongsan.com.vn mang đến nguồn thông tin đa dạng từ nguồn tin rao bán nhà riêng tại Việt Nam 
                                với nhiều loại diện tích, thiết kế nhà khác nhau, mang đến cái nhìn tổng quan vệ thị trường bất động sản khu vực quan tâm. 
                                Là kênh thông tin chuyển nhượng mua bán nhà riêng tại Việt Nam trực quan, cung cấp đầy đủ các thông tin hữu ích cho việc giao dịch và mua bán nhà riêng. 
                                Chúng tôi luôn luôn cố gắng cung cấp đầy đủ các thông tin để việc mua bán nhà riêng được tiến hành thuận lợi nhất.</div>
                                <div>Hãy chọn Batdongsan.com.vn là kênh <strong>đăng tin bán nhà riêng tại</strong> Việt Nam của bạn.</div>
    </div>
<form id="productListBinnova" method="post">
    <input id="hashAlias" type="hidden" value="3700ca1422c6132db55e4dce9915e59efb2d4dddbab95b7697274cd83b8a0dd0">
</form>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
            var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                model: {
                    typeOfProduct: 38,
                    categoryId: 41,
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
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/-1/2/-1/-1" title="Bán nhà riêng Việt Nam giá 500 - 800 triệu">500 - 800 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/-1/3/-1/-1" title="Bán nhà riêng Việt Nam giá 800 triệu - 1 tỷ">800 triệu - 1 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/-1/4/-1/-1" title="Bán nhà riêng Việt Nam giá 1 - 2 tỷ">1 - 2 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/-1/5/-1/-1" title="Bán nhà riêng Việt Nam giá 2 - 3 tỷ">2 - 3 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/-1/6/-1/-1" title="Bán nhà riêng Việt Nam giá 3 - 5 tỷ">3 - 5 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/-1/7/-1/-1" title="Bán nhà riêng Việt Nam giá 5 - 7 tỷ">5 - 7 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/-1/8/-1/-1" title="Bán nhà riêng Việt Nam giá 7 - 10 tỷ">7 - 10 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/-1/9/-1/-1" title="Bán nhà riêng Việt Nam giá 10 - 20 tỷ">10 - 20 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/-1/10/-1/-1" title="Bán nhà riêng Việt Nam giá 20 - 30 tỷ">20 - 30 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/-1/11/-1/-1" title="Bán nhà riêng Việt Nam giá &gt; 30 tỷ">&gt; 30 tỷ</a></li>
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
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/1/-1/-1/-1" title="Bán nhà riêng Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/2/-1/-1/-1" title="Bán nhà riêng Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/3/-1/-1/-1" title="Bán nhà riêng Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/4/-1/-1/-1" title="Bán nhà riêng Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/5/-1/-1/-1" title="Bán nhà riêng Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/6/-1/-1/-1" title="Bán nhà riêng Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/7/-1/-1/-1" title="Bán nhà riêng Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/8/-1/-1/-1" title="Bán nhà riêng Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/9/-1/-1/-1" title="Bán nhà riêng Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-nha-rieng/10/-1/-1/-1" title="Bán nhà riêng Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
        <h2 class="box-title">Bán nhà riêng</h2>

        <div class="box-content link-hover-blue">
            <ul>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-ha-noi" title="Bán nhà riêng tại Hà Nội">
                                Hà Nội (19565)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-tp-hcm" title="Bán nhà riêng tại Hồ Chí Minh">
                                Hồ Chí Minh (18295)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-binh-duong" title="Bán nhà riêng tại Bình Dương">
                                Bình Dương (1512)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-dong-nai" title="Bán nhà riêng tại Đồng Nai">
                                Đồng Nai (708)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-hai-phong" title="Bán nhà riêng tại Hải Phòng">
                                Hải Phòng (603)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-ha-tinh" title="Bán nhà riêng tại Hà Tĩnh">
                                Hà Tĩnh (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-long-an" title="Bán nhà riêng tại Long An">
                                Long An (371)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-vinh-phuc" title="Bán nhà riêng tại Vĩnh Phúc">
                                Vĩnh Phúc (14)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-nam-dinh" title="Bán nhà riêng tại Nam Định">
                                Nam Định (4)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-tien-giang" title="Bán nhà riêng tại Tiền Giang">
                                Tiền Giang (22)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-hau-giang" title="Bán nhà riêng tại Hậu Giang">
                                Hậu Giang (3)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-phu-tho" title="Bán nhà riêng tại Phú Thọ">
                                Phú Thọ (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-ba-ria-vung-tau" title="Bán nhà riêng tại Bà Rịa Vũng Tàu">
                                Bà Rịa Vũng Tàu (217)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-thanh-hoa" title="Bán nhà riêng tại Thanh Hóa">
                                Thanh Hóa (10)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-binh-phuoc" title="Bán nhà riêng tại Bình Phước">
                                Bình Phước (28)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-quang-nam" title="Bán nhà riêng tại Quảng Nam">
                                Quảng Nam (40)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-bac-lieu" title="Bán nhà riêng tại Bạc Liêu">
                                Bạc Liêu (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-hoa-binh" title="Bán nhà riêng tại Hòa Bình">
                                Hòa Bình (44)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-tay-ninh" title="Bán nhà riêng tại Tây Ninh">
                                Tây Ninh (18)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-nha-rieng-kien-giang" title="Bán nhà riêng tại Kiên Giang">
                                Kiên Giang (37)
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
