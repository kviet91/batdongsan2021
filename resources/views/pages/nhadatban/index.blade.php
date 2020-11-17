@extends('layouts.master')

@section('title', 'Mua Bán Nhà Đất Việt Nam Giá Rẻ, Mới Nhất 2020')

@section('styles')
<link rel="stylesheet" href="./assets/css/filestatic.ver202011110505.msvbds.productlisting.min.css" />
@endsection

@section('content')

<body class="bg-site">
    
<form id="boxSearchForm" action="/microservice-architecture-router/Product/ProductSearch/Index" method="post" novalidate="novalidate">
    <div class="search-bar shadow-lv-1 clearfix"><div class="search-guide" style="left: 985.083px; top: 64px; display: block;"><div class="icon-guide"><img src="./assets/image/ic_triangle.svg"></div>
	    </div>
        <ul class="search-bar-tab mar-left-16 pad-top-8 mar-right-16">
            <li class="actived" ptype="38">Bán</li>
            <li ptype="49">Cho thuê</li>
        </ul>
        <input data-val="true" data-val-required="The CateId field is required." id="type" name="CateId" type="hidden" value="38">

        <div class="search-bar-suggestion pad-top-8 mar-right-16">
            <input type="hidden" id="suggestionTemp">
            <input id="Keyword" name="Keyword" type="hidden" value="">
            <input type="text" placeholder="Tìm kiếm địa điểm, khu vực" class="search-bar-input ui-autocomplete-input" id="search-suggestion" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
            <span class="icon-close hiding">
                <img src="./assets/image/ic_close.png">
            </span>
        </div>
        <div id="divCategoryRe" class="select-control select-cate">
            <div class="select-control-label">
                <div class="dropbox-label">Loại nhà đất</div>
                <div class="custom-value">Tất cả</div>
            </div>
            <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="0">
            <div id="select-cate-options" class="custom-dropbox-cate hiding advance-select-options custom-scroll mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="display: none;"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr"><div id="divCate"><ul>
                                    <li vl="0"><span class="active current">Tất cả nhà đất</span></li>
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
                <div id="divCityOptions" class="custom-scroll mCustomScrollbar _mCS_4 mCS_no_scrollbar" hddvalue="hdCboCity,hdCboDistrict" defaulttext="Toàn quốc" ddlid="divCity" currlevel="1" style=""><div id="mCSB_4" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0"><div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
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
                        <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
                    </div>
                    <div class="custom-scroll mCustomScrollbar _mCS_5 mCS_no_scrollbar" id="divPriceOptions" minvalue="txtPriceMinValue" maxvalue="txtPriceMaxValue" unit="money" lblmin="lblPriceMin" lblmax="lblPriceMax" hddvalue="hdCboPrice" defaulttext="Tất cả" ddlid="divPrice" currlevel="1" style=""><div id="mCSB_5" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0"><div id="mCSB_5_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
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
                        <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
                    </div>
                    <div class="custom-scroll mCustomScrollbar _mCS_6 mCS_no_scrollbar" id="divAreaOptions" minvalue="txtAreaMinValue" maxvalue="txtAreaMaxValue" unit="area" hddvalue="hdCboArea" defaulttext="Tất cả" ddlid="divArea" currlevel="1" style=""><div id="mCSB_6" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0"><div id="mCSB_6_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
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
                <input type="text" class="select-text-content" placeholder="Tìm Dự án">
                <div id="divProjectsOptions" class="custom-scroll mCustomScrollbar _mCS_7 mCS_no_scrollbar" hddvalue="hdCboProjects" defaulttext="Tất cả" ddlid="divProjects" currlevel="1" style=""><div id="mCSB_7" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0"><div id="mCSB_7_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
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
                <div class="custom-scroll-outside mCustomScrollbar _mCS_9 mCS_no_scrollbar" style="position: relative; overflow: visible; max-height: 460px;"><div id="mCSB_9" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_outside" style="max-height: 0px;" tabindex="0"><div id="mCSB_9_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                    <div class="search-bar-filter"></div>

                    <div class="relative-control select-context">
                        <label class="mar-top-8">Phường/ Xã</label>
                        <div id="divWard" class="relative-control" aria-label="Bạn hãy chọn quận huyện trước" data-microtip-position="top" role="tooltip">
                            <div class="filter-label"><span>Tất cả phường, xã</span><i class="icon-arrow icon-arrow-down"></i></div>
                            <input type="hidden" id="hdCboWard" name="WardId" value="0">
                            <input type="text" placeholder="Tìm Phường, Xã" class="select-text-content icon-arrow-up hiding" style="display: none;">
                        </div>
                    </div>

                    <div class="relative-control select-context">
                        <label>Đường/ Phố</label>
                        <div id="divStreet" class="relative-control" aria-label="Bạn hãy chọn tỉnh thành trước" data-microtip-position="top" role="tooltip">
                            <div class="filter-label"><span>Tất cả đường, phố</span><i class="icon-arrow icon-arrow-down"></i></div>
                            <input type="hidden" id="hdCboStreet" name="StreetId" value="0">
                            <input type="text" placeholder="Tìm Đường/ Phố" class="select-text-content hiding icon-arrow-up" style="display: none;">
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

            <div id="divStreetOptions" ddlid="divStreet" class="fly-options custom-dropbox custom-dropbox hiding advance-select-options mCustomScrollbar _mCS_2 mCS_no_scrollbar" hddvalue="hdCboStreet" isfilter="true" currlevel="1" style="display: none;"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 48px;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                <ul class="advance-options"><li vl="0" class="advance-options active">Tất cả đường, phố</li></ul>
            </div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>

            <div id="divHomeDirectionOptions" ddlid="divHomeDirection" class="hiding fly-options custom-dropbox custom-scroll advance-select-options mCustomScrollbar _mCS_8 mCS_no_scrollbar" hddvalue="hdCboHomeDirection" isfilter="true" currlevel="1" style="display: none;"><div id="mCSB_8" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 308px;" tabindex="0"><div id="mCSB_8_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
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
                                categoryId: 0,
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
    <a href="https://batdongsan.com.vn/nha-dat-ban" level="1" title="Nhà đất bán tại Việt Nam">Bán</a><span>/</span><a href="https://batdongsan.com.vn/nha-dat-ban" level="2" title="Nhà đất bán tại Việt Nam">Tất cả BĐS trên toàn quốc</a>
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
    <h1>Mua bán nhà đất toàn quốc</h1>
        <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">183,364</span> bất động sản.</div>
    

</div>

    <div class="product-nav-bar pad-top-8 clearfix">
        <ul class="ul-tab fl mar-right-16">
            <li class="list-display actived">Danh sách</li>
            <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
            <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-nha-dat-ban">Bản đồ</a></li>
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
            <div class="vip0 product-item clearfix" uid="649852">
                <div class="product-image ">
                    <a class="product-avatar" href="{!! Route('bien_hoa_city') !!}" title="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY , DT 5 X 20 , 6 X 20 , 12 X 20 . ĐÃ NHẬN SỔ" onclick="">
                        <img class="product-avatar-img" alt="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY , DT 5 X 20 , 6 X 20 , 12 X 20 . ĐÃ NHẬN SỔ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201111095750-3277_wm.jpg" is-lazy-image="true" lazy-id="0">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="{!! Route('bien_hoa_city') !!}" title="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY , DT 5 X 20 , 6 X 20 , 12 X 20 . ĐÃ NHẬN SỔ" class="vipZero product-link">
                            KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY , DT 5 X 20 , 6 X 20 , 12 X 20 . ĐÃ NHẬN SỔ
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
                        Khách kẹt tiền muốn đẩy nhanh một số Lô Biên Hòa New City ở sân golf Long Thành
 DT : 5 x 20 m 
        6  x 18m 
        9  x 20 m 
       12 x 20 m
 Giá : 1.450 tỷ bao sang tên và ra sổ hồng.
 Tất 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27748072" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;KH&amp;#193;CH KẸT TIỀN CẦN B&amp;#193;N NHANH L&amp;#212; ĐẤT BI&amp;#202;N H&amp;#210;A NEW CITY , DT 5 X 20 , 6 X 20 , 12 X 20 . Đ&amp;#195; NHẬN SỔ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111095750-3277_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111095750-3277_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="KHÁCH KẸT TIỀN CẦN BÁN NHANH LÔ ĐẤT BIÊN HÒA NEW CITY , DT 5 X 20 , 6 X 20 , 12 X 20 . ĐÃ NHẬN SỔ" data-price="1.45 tỷ" data-area="100 m²" data-pricesort="1450000048" data-areasort="100" data-room="0" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Khách kẹt tiền muốn đẩy nhanh một số Lô Biên Hòa New City ở sân golf Long Thành
 DT : 5 x 20 m 
        6  x 18m 
        9  x 20 m 
       12 x 20 m
 Giá : 1.450 tỷ bao sang tên và ra sổ hồng.
 Tất " data-duration="Hôm nay" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:58:51" data-contactname="Thái Bá Lợi" data-contactmobile="0946722227" data-url="/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" data-totalmedia="3" data-createbyuser="649852"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1038653">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-37-xa-bich-son-prj-khu-do-thi-tnr-stars-bich-dong/trung-tam-cong-nghiep-viet-yen-dep-khong-vuong-gi-0973035888-pr27747706" title="TRUNG TÂM ĐẤT KHU CÔNG NGHIỆP-TNR BÍCH ĐỘNG VIỆT YÊN-LÔ ĐẸP KHÔNG VƯỚNG GÌ 0973035888" onclick="">
                        <img class="product-avatar-img" alt="TRUNG TÂM ĐẤT KHU CÔNG NGHIỆP-TNR BÍCH ĐỘNG VIỆT YÊN-LÔ ĐẸP KHÔNG VƯỚNG GÌ 0973035888" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201111094109-3a1a_wm.jpg" is-lazy-image="true" lazy-id="1">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">11</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-duong-quoc-lo-37-xa-bich-son-prj-khu-do-thi-tnr-stars-bich-dong/trung-tam-cong-nghiep-viet-yen-dep-khong-vuong-gi-0973035888-pr27747706" title="TRUNG TÂM ĐẤT KHU CÔNG NGHIỆP-TNR BÍCH ĐỘNG VIỆT YÊN-LÔ ĐẸP KHÔNG VƯỚNG GÌ 0973035***" class="vipZero product-link" style="overflow: visible;">
                            TRUNG TÂM ĐẤT KHU CÔNG NGHIỆP-TNR BÍCH ĐỘNG VIỆT YÊN-LÔ ĐẸP KHÔNG VƯỚNG GÌ <span class="hidden-mobile m-on-title" raw="0973035888">0973035***</span>
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
                        Trung tâm Thị Trấn Bích Động - huyện Việt 
Yên-Tỉnh Bắc Giang-Thủ phủ của khu công nghiệp-hạ tầng đồng bộ (khuôn 
viên cây xanh, hồ điều hòa,trung tâm vui chơi giải trí..đầy đủ tiện ích 
của khu đô thị 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27747706" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;TRUNG T&amp;#194;M ĐẤT KHU C&amp;#212;NG NGHIỆP-TNR B&amp;#205;CH ĐỘNG VIỆT Y&amp;#202;N-L&amp;#212; ĐẸP KH&amp;#212;NG VƯỚNG G&amp;#204; 0973035888&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111094109-3a1a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111094109-3a1a_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="TRUNG TÂM ĐẤT KHU CÔNG NGHIỆP-TNR BÍCH ĐỘNG VIỆT YÊN-LÔ ĐẸP KHÔNG VƯỚNG GÌ 0973035888" data-price="1.8 tỷ" data-area="73.2 m²" data-pricesort="1799999952" data-areasort="73.1999969482422" data-room="0" data-toilets="0" data-address="Việt Yên, Bắc Giang" data-description="Trung tâm Thị Trấn Bích Động - huyện Việt Yên-Tỉnh Bắc Giang-Thủ phủ của khu công nghiệp-hạ tầng đồng bộ (khuôn viên cây xanh, hồ điều hòa,trung tâm vui chơi giải trí..đầy đủ tiện ích của khu đô thị " data-duration="Hôm nay" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:45:53" data-contactname="Nguyễn Thị Thùy Dung" data-contactmobile="0973035888" data-url="/ban-dat-nen-du-an-duong-quoc-lo-37-xa-bich-son-prj-khu-do-thi-tnr-stars-bich-dong/trung-tam-cong-nghiep-viet-yen-dep-khong-vuong-gi-0973035888-pr27747706" data-totalmedia="11" data-createbyuser="1038653"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="1492337">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-mai-ba-huong-xa-le-minh-xuan/n-9-000m2-mat-tien-huong-pr27471886" title="Bán 9,000m2 mặt tiền đường Mai Bá Hương" onclick="">
                        <img class="product-avatar-img" alt="Bán 9,000m2 mặt tiền đường Mai Bá Hương" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201019223842-e224_wm.jpg" is-lazy-image="true" lazy-id="2"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019224948-a8c4_wm.jpg" is-lazy-image="true" lazy-id="3"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019224957-240d_wm.jpg" is-lazy-image="true" lazy-id="4">
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
                        Bán 9,000m2 có 1,000m2 thổ cư có nhà, còn lại 
8,000m2 đất trồng cây lâu năm. Có nhà xưởng sẵn, nhà ở công nhân, bình 
điện 500, mua xong chỉ việc vào ở và sản xuất. Vị trí rất thuận tiện, 
không tin anh chị có thể đến khảo sát. Đất đẹp vuông vức, còn miếng 
2,300m2 liền kề, nếu anh chị mua thì sẽ ra 2 mặt tiền, thật sự khó khăn 
nên mới bán, anh chị có nhu cầu xin mời nghé thăm. Đi
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Doan Tuan">
                                <span class="contact-name">Doan Tuan</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0393846510" raw="0393846510">0393 846 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27471886" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n 9,000m2 mặt tiền đường Mai B&amp;#225; Hương&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019223842-e224_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019224948-a8c4_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/19/20201019224957-240d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/10/19/20201019223842-e224_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán 9,000m2 mặt tiền đường Mai Bá Hương" data-price="55 tỷ" data-area="9000 m²" data-pricesort="55000000000" data-areasort="9000" data-room="0" data-toilets="0" data-address="Bình Chánh, Hồ Chí Minh" data-description="Bán 9,000m2 có 1,000m2 thổ cư có nhà, còn lại 8,000m2 đất trồng cây lâu năm. Có nhà xưởng sẵn, nhà ở công nhân, bình điện 500, mua xong chỉ việc vào ở và sản xuất. Vị trí rất thuận tiện, không tin anh chị có thể đến khảo sát. Đất đẹp vuông vức, còn miếng 2,300m2 liền kề, nếu anh chị mua thì sẽ ra 2 mặt tiền, thật sự khó khăn nên mới bán, anh chị có nhu cầu xin mời nghé thăm. Đi" data-duration="Hôm nay" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:22:16" data-contactname="Doan Tuan" data-contactmobile="0393846510" data-url="/ban-dat-duong-mai-ba-huong-xa-le-minh-xuan/n-9-000m2-mat-tien-huong-pr27471886" data-totalmedia="5" data-createbyuser="1492337"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1473794">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-duong-quoc-lo-22-thi-tran-cu-chi/chu-khanh-can-ban-manh-so-hong-rieng-o-673m-gia-1-ty-bao-xay-0918877715-pr27745890" title="Chú Khanh cần bán mảnh đất sổ hồng riêng ở Củ Chi, 673m2, giá 1 tỷ bao xây (0918877715)" onclick="">
                        <img class="product-avatar-img" alt="Chú Khanh cần bán mảnh đất sổ hồng riêng ở Củ Chi, 673m2, giá 1 tỷ bao xây (0918877715)" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111084532-b183_wm.jpg" is-lazy-image="true" lazy-id="5">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-dat-duong-quoc-lo-22-thi-tran-cu-chi/chu-khanh-can-ban-manh-so-hong-rieng-o-673m-gia-1-ty-bao-xay-0918877715-pr27745890" title="Chú Khanh cần bán mảnh đất sổ hồng riêng ở Củ Chi, 673m2, giá 1 tỷ bao xây (0918877***)" class="vipZero product-link" style="overflow: visible;">
                            CHÚ KHANH CẦN BÁN MẢNH ĐẤT SỔ HỒNG RIÊNG Ở CỦ CHI, 673M2, GIÁ 1 TỶ BAO XÂY (<span class="hidden-mobile m-on-title" raw="0918877715">0918877***</span>)
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">673 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Củ Chi, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chú Khanh đang rao bán mảnh đất 673m2 đã nộp đơn
 lên thổ cư. Nằm trên đường nhà nước, lộ giới 12m chuẩn bị đổ nhựa. Sổ 
hồng riêng vừa được cấp ngày 20/08/2020 mới toanh. Đối diện nhà của đạo 
diễn Ngu
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27745890" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#250; Khanh cần b&amp;#225;n mảnh đất sổ hồng ri&amp;#234;ng ở Củ Chi, 673m2, gi&amp;#225; 1 tỷ bao x&amp;#226;y (0918877715)&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111084532-b183_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111084532-b183_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chú Khanh cần bán mảnh đất sổ hồng riêng ở Củ Chi, 673m2, giá 1 tỷ bao xây (0918877715)" data-price="1 tỷ" data-area="673 m²" data-pricesort="1000000000" data-areasort="673" data-room="0" data-toilets="0" data-address="Củ Chi, Hồ Chí Minh" data-description="Chú Khanh đang rao bán mảnh đất 673m2 đã nộp đơn lên thổ cư. Nằm trên đường nhà nước, lộ giới 12m chuẩn bị đổ nhựa. Sổ hồng riêng vừa được cấp ngày 20/08/2020 mới toanh. Đối diện nhà của đạo diễn Ngu" data-duration="Hôm nay" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:19:53" data-contactname="Khoa Huan Nguyen" data-contactmobile="0918877715" data-url="/ban-dat-duong-quoc-lo-22-thi-tran-cu-chi/chu-khanh-can-ban-manh-so-hong-rieng-o-673m-gia-1-ty-bao-xay-0918877715-pr27745890" data-totalmedia="5" data-createbyuser="1473794"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="282289">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-pho-le-trong-tan-phuong-la-khe/chinh-chu-can-ban-ha-dong-pr27648615" title="Chính chủ Cần bán nhà đất mặt phố Lê Trọng Tấn, Hà Đông" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ Cần bán nhà đất mặt phố Lê Trọng Tấn, Hà Đông" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/20201103171451-deec.jpg" is-lazy-image="true" lazy-id="6">
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
                        Cần bán nhà mặt phố Lê Trọng Tấn - Hà Đông, diện
 tích 81m2 - 3 tầng - giá 11, x tỷ. + Vị trí nhà nằm trung tâm mặt phố 
Lê Trọng Tấn đường 56m vỉa hè rộng 8m, sổ đỏ phân lô, ô góc 2 mặt 
thoáng, đằng s
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27648615" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ Cần b&amp;#225;n nh&amp;#224; đất mặt phố L&amp;#234; Trọng Tấn, H&amp;#224; Đ&amp;#244;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/20201103171451-deec.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/03/20201103171451-deec.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ Cần bán nhà đất mặt phố Lê Trọng Tấn, Hà Đông" data-price="11.2 tỷ" data-area="81 m²" data-pricesort="11200000000" data-areasort="81" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="Cần bán nhà mặt phố Lê Trọng Tấn - Hà Đông, diện tích 81m2 - 3 tầng - giá 11, x tỷ. + Vị trí nhà nằm trung tâm mặt phố Lê Trọng Tấn đường 56m vỉa hè rộng 8m, sổ đỏ phân lô, ô góc 2 mặt thoáng, đằng s" data-duration="Hôm nay" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:18:36" data-contactname="Phạm Quang Kien" data-contactmobile="0865552368" data-url="/ban-nha-mat-pho-pho-le-trong-tan-phuong-la-khe/chinh-chu-can-ban-ha-dong-pr27648615" data-totalmedia="1" data-createbyuser="282289"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="994019">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-chau-van-liem-phuong-phu-do-prj-my-dinh-pearl/mo-ban-100-cuoi-truc-tiep-chu-dau-tu-nhan-nha-ngay-hotline-0938332255-pr27435170" title="Mở bán 100 căn cuối Mỹ Đình Pearl trực tiếp chủ đầu tư nhận nhà ngay, hotline: 0938332255" onclick="">
                        <img class="product-avatar-img" alt="Mở bán 100 căn cuối Mỹ Đình Pearl trực tiếp chủ đầu tư nhận nhà ngay, hotline: 0938332255" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/16/20201016095349-bdb0_wm.jpg" is-lazy-image="true" lazy-id="7"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/16/20201016095359-b9f0_wm.jpg" is-lazy-image="true" lazy-id="8"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/16/20201016095403-986f_wm.jpg" is-lazy-image="true" lazy-id="9">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">12</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-chau-van-liem-phuong-phu-do-prj-my-dinh-pearl/mo-ban-100-cuoi-truc-tiep-chu-dau-tu-nhan-nha-ngay-hotline-0938332255-pr27435170" title="Mở bán 100 căn cuối Mỹ Đình Pearl trực tiếp chủ đầu tư nhận nhà ngay, hotline: 0938332***" class="vipZero product-link" style="overflow: visible;">
                            MỞ BÁN 100 CĂN CUỐI MỸ ĐÌNH PEARL TRỰC TIẾP CHỦ ĐẦU TƯ NHẬN NHÀ NGAY, HOTLINE: <span class="hidden-mobile m-on-title" raw="0938332255">0938332***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.8 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">104 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">3 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">2 WC</span>
                        <span class="location">Nam Từ Liêm, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Chủ đầu tư dự án Mỹ Đình Pearl mở bán 100 căn hộ
 view công viên hồ điều hoà 14ha siêu đẹp.Liên hệ hotline: <span class="hidden-mobile des" raw="0938332255">0938332***</span>.1.
 Thông tin dự án:Tên dự án: Mỹ Đình Pearl. Chủ đầu tư: Tập đoàn SSG 
Group (chủ đầu tư của Sài Gòn Pearl, Thảo Điền Pearl, Sài Gòn Airport 
Plaza, Pearl Plaza). Vị trí: Số 1 Châu Văn Liêm, Phường Phú Đô, Q Nam Từ
 Liêm, Hà Nội. Đơn vị xây dựng: Phục Hưng Holding.
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Mỹ Đình Pearl">
                                <span class="contact-name">Mỹ Đình Pearl</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0938332255" raw="0938332255">0938 332 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27435170" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Mở b&amp;#225;n 100 căn cuối Mỹ Đ&amp;#236;nh Pearl trực tiếp chủ đầu tư nhận nh&amp;#224; ngay, hotline: 0938332255&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/16/20201016095349-bdb0_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/16/20201016095359-b9f0_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/16/20201016095403-986f_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/10/16/20201016095349-bdb0_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Mở bán 100 căn cuối Mỹ Đình Pearl trực tiếp chủ đầu tư nhận nhà ngay, hotline: 0938332255" data-price="3.8 tỷ" data-area="104 m²" data-pricesort="3800000000" data-areasort="104" data-room="3" data-toilets="2" data-address="Nam Từ Liêm, Hà Nội" data-description="Chủ đầu tư dự án Mỹ Đình Pearl mở bán 100 căn hộ view công viên hồ điều hoà 14ha siêu đẹp.Liên hệ hotline: 0938332255.1. Thông tin dự án:Tên dự án: Mỹ Đình Pearl. Chủ đầu tư: Tập đoàn SSG Group (chủ đầu tư của Sài Gòn Pearl, Thảo Điền Pearl, Sài Gòn Airport Plaza, Pearl Plaza). Vị trí: Số 1 Châu Văn Liêm, Phường Phú Đô, Q Nam Từ Liêm, Hà Nội. Đơn vị xây dựng: Phục Hưng Holding." data-duration="Hôm nay" data-updatedtime="11/11/2020" data-datesort="11/11/2020 08:52:39" data-contactname="Mỹ Đình Pearl" data-contactmobile="0938332255" data-url="/ban-can-ho-chung-cu-duong-chau-van-liem-phuong-phu-do-prj-my-dinh-pearl/mo-ban-100-cuoi-truc-tiep-chu-dau-tu-nhan-nha-ngay-hotline-0938332255-pr27435170" data-totalmedia="12" data-createbyuser="994019"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1459407">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-mai-chi-tho-prj-sadora-apartment/chinh-chu-ban-cao-cap-chuan-5-sao-sala-3pn-view-bitexco-pr27613337" title="Chính chủ bán căn hộ cao cấp chuẩn 5 sao Sala Sadora 3PN, nội thất cao cấp, view Bitexco." onclick="">
                        <img class="product-avatar-img" alt="Chính chủ bán căn hộ cao cấp chuẩn 5 sao Sala Sadora 3PN, nội thất cao cấp, view Bitexco." error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/16/SUOxTi2O/20200916143847-7b73_wm.jpg" is-lazy-image="true" lazy-id="10">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-mai-chi-tho-prj-sadora-apartment/chinh-chu-ban-cao-cap-chuan-5-sao-sala-3pn-view-bitexco-pr27613337" title="Chính chủ bán căn hộ cao cấp chuẩn 5 sao Sala Sadora 3PN, nội thất cao cấp, view Bitexco." class="vipZero product-link">
                            CHÍNH CHỦ BÁN CĂN HỘ CAO CẤP CHUẨN 5 SAO SALA SADORA 3PN, NỘI THẤT CAO CẤP, VIEW BITEXCO.
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">10.5 tỷ</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Gia đình mình cần bán căn hộ đẹp nhất khu Sala 
Sadora 03 phòng ngủ, 02WC, ban công lớn, vị trí vàng cạnh hồ Thủ Thiêm. 
Căn hộ Sadora A20X7 thuộc khu đô thị chuẩn 5 sao Sala view triệu đô nhìn
 lâm viê
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27613337" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n căn hộ cao cấp chuẩn 5 sao Sala Sadora 3PN, nội thất cao cấp, view Bitexco.&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/16/SUOxTi2O/20200916143847-7b73_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/16/SUOxTi2O/20200916143847-7b73_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ bán căn hộ cao cấp chuẩn 5 sao Sala Sadora 3PN, nội thất cao cấp, view Bitexco." data-price="10.5 tỷ" data-area="Không xác định" data-pricesort="10500000000" data-areasort="0" data-room="3" data-toilets="2" data-address="Quận 2, Hồ Chí Minh" data-description="Gia đình mình cần bán căn hộ đẹp nhất khu Sala Sadora 03 phòng ngủ, 02WC, ban công lớn, vị trí vàng cạnh hồ Thủ Thiêm. Căn hộ Sadora A20X7 thuộc khu đô thị chuẩn 5 sao Sala view triệu đô nhìn lâm viê" data-duration="Hôm nay" data-updatedtime="11/11/2020" data-datesort="11/11/2020 08:24:30" data-contactname="Chị Ngân" data-contactmobile="0932525567" data-url="/ban-can-ho-chung-cu-duong-mai-chi-tho-prj-sadora-apartment/chinh-chu-ban-cao-cap-chuan-5-sao-sala-3pn-view-bitexco-pr27613337" data-totalmedia="5" data-createbyuser="1459407"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1423800">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-nen-du-an-bac-binh-bth/dau-tu-hong-thai-garden-ngay-tu-hom-nay-chi-vui-50-trieu-1000m2-pr27032944" title="Đầu tư đất Hồng Thái Garden ngay từ hôm nay chỉ với 50 triệu/1000m2" onclick="">
                        <img class="product-avatar-img" alt="Đầu tư đất Hồng Thái Garden ngay từ hôm nay chỉ với 50 triệu/1000m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/14/20200914173752-5415_wm.jpg" is-lazy-image="true" lazy-id="11">
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
                        Bán đất nông nghiệp Hồng Thái Garden tại tỉnh 
Bình Thuận, huyện Bắc Bình. Với vị trí đắc địa liền kề các đại đô thị 
nghỉ dưỡng. Bắc Bình có vị trí chiến lược là cửa ngõ về kinh tế, chính 
trị của vùng
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27032944" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Đầu tư đất Hồng Th&amp;#225;i Garden ngay từ h&amp;#244;m nay chỉ với 50 triệu/1000m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/14/20200914173752-5415_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/14/20200914173752-5415_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Đầu tư đất Hồng Thái Garden ngay từ hôm nay chỉ với 50 triệu/1000m2" data-price="Giá thỏa thuận" data-area="1000 m²" data-pricesort="0" data-areasort="1000" data-room="0" data-toilets="0" data-address="Bắc Bình, Bình Thuận  " data-description="Bán đất nông nghiệp Hồng Thái Garden tại tỉnh Bình Thuận, huyện Bắc Bình. Với vị trí đắc địa liền kề các đại đô thị nghỉ dưỡng. Bắc Bình có vị trí chiến lược là cửa ngõ về kinh tế, chính trị của vùng" data-duration="Hôm nay" data-updatedtime="11/11/2020" data-datesort="11/11/2020 08:20:59" data-contactname="Hồng Thái" data-contactmobile="0566666688" data-url="/ban-dat-nen-du-an-bac-binh-bth/dau-tu-hong-thai-garden-ngay-tu-hom-nay-chi-vui-50-trieu-1000m2-pr27032944" data-totalmedia="6" data-createbyuser="1423800"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1101976">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-le-van-tho-phuong-8-12/ban-127-trung-tam-quan-go-vap-gan-cho-hanh-ng-tay-pr27742648" title="Bán nhà mặt 127 Lê Văn Thọ, trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây" onclick="">
                        <img class="product-avatar-img" alt="Bán nhà mặt 127 Lê Văn Thọ, trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110185937-3217_wm.jpg" is-lazy-image="true" lazy-id="12">
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
                        Bán nhà mặt 127 Lê Văn Thọ, Gò Vấp. Trung tâm 
quận Gò Vấp, gần chợ Hạnh Thông Tây, đang cho thuê làm khách sạn. Diện 
tích 4x26m, SHR. Khu dân cư rất đông, hiện hữu, tiện ích xung quanh. Vị 
trí đẹp, n
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27742648" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; mặt 127 L&amp;#234; Văn Thọ, trung t&amp;#226;m quận G&amp;#242; Vấp, gần chợ Hạnh Th&amp;#244;ng T&amp;#226;y&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110185937-3217_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110185937-3217_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà mặt 127 Lê Văn Thọ, trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây" data-price="22 tỷ" data-area="104 m²" data-pricesort="22000000000" data-areasort="104" data-room="0" data-toilets="0" data-address="Gò Vấp, Hồ Chí Minh" data-description="Bán nhà mặt 127 Lê Văn Thọ, Gò Vấp. Trung tâm quận Gò Vấp, gần chợ Hạnh Thông Tây, đang cho thuê làm khách sạn. Diện tích 4x26m, SHR. Khu dân cư rất đông, hiện hữu, tiện ích xung quanh. Vị trí đẹp, n" data-duration="Hôm qua" data-updatedtime="10/11/2020" data-datesort="11/10/2020 19:02:46" data-contactname="Bé Hường" data-contactmobile="0794686866" data-url="/ban-nha-mat-pho-duong-le-van-tho-phuong-8-12/ban-127-trung-tam-quan-go-vap-gan-cho-hanh-ng-tay-pr27742648" data-totalmedia="6" data-createbyuser="1101976"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="181886">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-nguyen-trai-phuong-thuong-dinh-prj-royal-city/-chu-nha-ban-cat-lo-sau-3-r4-dt-135m-r2-dt-90m-r1-dt-136m-0919084005-0987016576-pr26634600" title="CHỦ NHÀ BÁN CẮT LỖ CĂN 04 TẦNG 23 R4-4,3TỶ; R31512A-10 TỶ; R42110-6,3TỶ, R50906-4,5TỶ; R21715-5,1TỶ" onclick="">
                        <img class="product-avatar-img" alt="CHỦ NHÀ BÁN CẮT LỖ CĂN 04 TẦNG 23 R4-4,3TỶ; R31512A-10 TỶ; R42110-6,3TỶ, R50906-4,5TỶ; R21715-5,1TỶ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/05/06/XGCHVV4L/20200506091828-51ac_wm.jpg" is-lazy-image="true" lazy-id="13"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/XGCHVV4L/20201020104725-50c2_wm.jpg" is-lazy-image="true" lazy-id="14"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/XGCHVV4L/20201109171324-0fce_wm.jpg" is-lazy-image="true" lazy-id="15">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">22</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-nguyen-trai-phuong-thuong-dinh-prj-royal-city/-chu-nha-ban-cat-lo-sau-3-r4-dt-135m-r2-dt-90m-r1-dt-136m-0919084005-0987016576-pr26634600" title="CHỦ NHÀ BÁN CẮT LỖ CĂN 04 TẦNG 23 R4-4,3TỶ; R31512A-10 TỶ; R42110-6,3TỶ, R50906-4,5TỶ; R21715-5,1TỶ" class="vipZero product-link">
                            CHỦ NHÀ BÁN CẮT LỖ CĂN 04 TẦNG 23 R4-4,3TỶ; R31512A-10 TỶ; R42110-6,3TỶ, R50906-4,5TỶ; R21715-5,1TỶ
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.4 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">88.3 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">3 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">3 WC</span>
                        <span class="location">Thanh Xuân, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Quý khách vui lòng liên hệ: <span class="hidden-mobile des" raw="0915469759">0915469***</span>
 (Zalo, Viber). Tất cả các căn hộ đều đã có sổ đỏ và miễn phí dịch vụ 10
 năm. I: Chung cư Royalcity 72A Nguyễn Trãi, Hà Nội: 1) Tòa R1 và R2. 
Căn số 12 - DT 88,3m2 ban công Tây Bắc, giá bán 3,5 tỷ có sổ đỏ bao tên.
 Căn số 24 - DT 96,3m2 ban công ĐB giá 4,2 tỷ cả ba phòng thoáng sáng, 
view bể bơi. Căn số 05 - DT 109m2 ban công ĐN giá 4,2 tỷ 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Mr Hà">
                                <span class="contact-name">Mr Hà</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0915469759" raw="0915469759">0915 469 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="26634600" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;CHỦ NH&amp;#192; B&amp;#193;N CẮT LỖ CĂN 04 TẦNG 23 R4-4,3TỶ; R31512A-10 TỶ; R42110-6,3TỶ, R50906-4,5TỶ; R21715-5,1TỶ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/05/06/XGCHVV4L/20200506091828-51ac_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/20/XGCHVV4L/20201020104725-50c2_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/XGCHVV4L/20201109171324-0fce_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/05/06/XGCHVV4L/20200506091828-51ac_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="CHỦ NHÀ BÁN CẮT LỖ CĂN 04 TẦNG 23 R4-4,3TỶ; R31512A-10 TỶ; R42110-6,3TỶ, R50906-4,5TỶ; R21715-5,1TỶ" data-price="3.4 tỷ" data-area="88.3 m²" data-pricesort="3400000000" data-areasort="88.3" data-room="3" data-toilets="3" data-address="Thanh Xuân, Hà Nội" data-description="Quý khách vui lòng liên hệ: 0915469759 (Zalo, Viber). Tất cả các căn hộ đều đã có sổ đỏ và miễn phí dịch vụ 10 năm. I: Chung cư Royalcity 72A Nguyễn Trãi, Hà Nội: 1) Tòa R1 và R2. Căn số 12 - DT 88,3m2 ban công Tây Bắc, giá bán 3,5 tỷ có sổ đỏ bao tên. Căn số 24 - DT 96,3m2 ban công ĐB giá 4,2 tỷ cả ba phòng thoáng sáng, view bể bơi. Căn số 05 - DT 109m2 ban công ĐN giá 4,2 tỷ " data-duration="Hôm qua" data-updatedtime="10/11/2020" data-datesort="11/10/2020 17:36:08" data-contactname="Mr Hà" data-contactmobile="0915469759" data-url="/ban-can-ho-chung-cu-duong-nguyen-trai-phuong-thuong-dinh-prj-royal-city/-chu-nha-ban-cat-lo-sau-3-r4-dt-135m-r2-dt-90m-r1-dt-136m-0919084005-0987016576-pr26634600" data-totalmedia="22" data-createbyuser="181886"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="1416234">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-rieng-duong-hoa-hao-phuong-8-10/chinh-chu-can-ban-hem-402-quan-10-hem-xe-tai-1-tret-2-lau-gia-rat-tot-pr27741900" title="Chính chủ cần bán nhà hẻm 402 Đường Hòa Hảo, Quận 10, hẻm xe tải nhỏ , 1 trệt, 2 lầu, giá rất tốt" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần bán nhà hẻm 402 Đường Hòa Hảo, Quận 10, hẻm xe tải nhỏ , 1 trệt, 2 lầu, giá rất tốt" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/17/GSfXwqS5/20201017103113-129d_wm.jpg" is-lazy-image="true" lazy-id="16">
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
                        Chính chủ cần Bán nhà hẻm 402 Đường Hòa Hảo, 
Phường 8, Quận 10  Kết cấu 1 trệt 2 lầu, 1 Sân Thượng, 5PN, 4wc, đúc. 
Diện tích 29.6 m2 Diện tích  sàn 105,4 m2 Pháp lý đầy đủ Hẻm xe tải 
nhỏ,2 hẻm trước 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27741900" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần b&amp;#225;n nh&amp;#224; hẻm 402 Đường H&amp;#242;a Hảo, Quận 10, hẻm xe tải nhỏ , 1 trệt, 2 lầu, gi&amp;#225; rất tốt&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/17/GSfXwqS5/20201017103113-129d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/17/GSfXwqS5/20201017103113-129d_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần bán nhà hẻm 402 Đường Hòa Hảo, Quận 10, hẻm xe tải nhỏ , 1 trệt, 2 lầu, giá rất tốt" data-price="6.5 tỷ" data-area="29.6 m²" data-pricesort="6500000000" data-areasort="29.6" data-room="0" data-toilets="0" data-address="Quận 10, Hồ Chí Minh" data-description="Chính chủ cần Bán nhà hẻm 402 Đường Hòa Hảo, Phường 8, Quận 10  Kết cấu 1 trệt 2 lầu, 1 Sân Thượng, 5PN, 4wc, đúc. Diện tích 29.6 m2 Diện tích  sàn 105,4 m2 Pháp lý đầy đủ Hẻm xe tải nhỏ,2 hẻm trước " data-duration="Hôm qua" data-updatedtime="10/11/2020" data-datesort="11/10/2020 17:32:30" data-contactname="Minh Hoàng" data-contactmobile="0931210272" data-url="/ban-nha-rieng-duong-hoa-hao-phuong-8-10/chinh-chu-can-ban-hem-402-quan-10-hem-xe-tai-1-tret-2-lau-gia-rat-tot-pr27741900" data-totalmedia="23" data-createbyuser="1416234"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="181886">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-phuong-phuc-loi-prj-vinhomes-riverside/ban-cat-lo-royal-city-32tr-m2-so-do-vay-70-ls-0-thue-9tr-th-mp-dich-vu-0946528058-0976325668-pr25280371" title="Bán biệt thự Vinhomes Riverside giá rẻ nhất thị trường, SĐ, vay 70%, LS 0%. 0917269796, 0915469759" onclick="">
                        <img class="product-avatar-img" alt="Bán biệt thự Vinhomes Riverside giá rẻ nhất thị trường, SĐ, vay 70%, LS 0%. 0917269796, 0915469759" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/04/30/XGCHVV4L/20200430090924-7d6d_wm.jpg" is-lazy-image="true" lazy-id="17"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/04/30/XGCHVV4L/20200430090346-3b9e_wm.jpg" is-lazy-image="true" lazy-id="18"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/04/30/XGCHVV4L/20200430090349-b571_wm.jpg" is-lazy-image="true" lazy-id="19">
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
                        Tôi đang ở tại Vinhomes Riverside, nên tôi tự 
tin mình là người tư vấn cũng như hỗ trợ cho bạn tốt nhất về những vấn 
đề liên quan đến mua bán, cho thuê tại đây. Quý khách vui lòng liên hệ: <span class="hidden-mobile des" raw="0917269796">0917269***</span> - <span class="hidden-mobile des" raw="0915469759">0915469***</span>
 (zalo, viber). Ngoài ra công ty chúng tôi còn mua bán, cho thuê và 
thiết kế thi công khu đô thị biệt thự Vinhomes Riverside Long Biên. 
https://nagroup.vn/ I: Biệt thự 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Ms Hoa">
                                <span class="contact-name">Ms Hoa</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0917269796" raw="0917269796">0917 269 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="25280371" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n biệt thự Vinhomes Riverside gi&amp;#225; rẻ nhất thị trường, SĐ, vay 70%, LS 0%. 0917269796, 0915469759&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/04/30/XGCHVV4L/20200430090924-7d6d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/04/30/XGCHVV4L/20200430090346-3b9e_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/04/30/XGCHVV4L/20200430090349-b571_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/04/30/XGCHVV4L/20200430090924-7d6d_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán biệt thự Vinhomes Riverside giá rẻ nhất thị trường, SĐ, vay 70%, LS 0%. 0917269796, 0915469759" data-price="80 triệu/m²" data-area="Không xác định" data-pricesort="0" data-areasort="0" data-room="5" data-toilets="5" data-address="Long Biên, Hà Nội" data-description="Tôi đang ở tại Vinhomes Riverside, nên tôi tự tin mình là người tư vấn cũng như hỗ trợ cho bạn tốt nhất về những vấn đề liên quan đến mua bán, cho thuê tại đây. Quý khách vui lòng liên hệ: 0917269796 - 0915469759 (zalo, viber). Ngoài ra công ty chúng tôi còn mua bán, cho thuê và thiết kế thi công khu đô thị biệt thự Vinhomes Riverside Long Biên. https://nagroup.vn/ I: Biệt thự " data-duration="Hôm qua" data-updatedtime="10/11/2020" data-datesort="11/10/2020 17:17:29" data-contactname="Ms Hoa" data-contactmobile="0917269796" data-url="/ban-nha-biet-thu-lien-ke-phuong-phuc-loi-prj-vinhomes-riverside/ban-cat-lo-royal-city-32tr-m2-so-do-vay-70-ls-0-thue-9tr-th-mp-dich-vu-0946528058-0976325668-pr25280371" data-totalmedia="20" data-createbyuser="181886"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="356511">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-pho-quang-phuong-9-12-prj-golden-mansion/ban-quan-ly-ban-2pn-gia-3-ty-3pn-gia-4-ty-full-noi-that-cao-cap-pr27741574" title="Ban quản lý Golden Mansion cần bán căn hộ 2PN giá 3 tỷ - 3PN giá 4 tỷ full nội thất cao cấp" onclick="">
                        <img class="product-avatar-img" alt="Ban quản lý Golden Mansion cần bán căn hộ 2PN giá 3 tỷ - 3PN giá 4 tỷ full nội thất cao cấp" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110170252-9a6d_wm.jpg" is-lazy-image="true" lazy-id="20">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-pho-quang-phuong-9-12-prj-golden-mansion/ban-quan-ly-ban-2pn-gia-3-ty-3pn-gia-4-ty-full-noi-that-cao-cap-pr27741574" title="Ban quản lý Golden Mansion cần bán căn hộ 2PN giá 3 tỷ - 3PN giá 4 tỷ full nội thất cao cấp" class="vipZero product-link">
                            BAN QUẢN LÝ GOLDEN MANSION CẦN BÁN CĂN HỘ 2PN GIÁ 3 TỶ - 3PN GIÁ 4 TỶ FULL NỘI THẤT CAO CẤP
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.8 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">69 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Phú Nhuận, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Chính chủ cần bán gấp CH Golden Mansion đường Phổ Quang ngăn 2PN, 69m2.Hotline xem nhà 24/7: <span class="hidden-mobile des" raw="0933.46.3434">0933.46.3***</span>.- Diện tích 69m2. Full nội thất cao cấp.- Thiết kế 2 PN và 2 WC. Ban công và logia tách riêng
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27741574" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ban quản l&amp;#253; Golden Mansion cần b&amp;#225;n căn hộ 2PN gi&amp;#225; 3 tỷ - 3PN gi&amp;#225; 4 tỷ full nội thất cao cấp&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110170252-9a6d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110170252-9a6d_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Ban quản lý Golden Mansion cần bán căn hộ 2PN giá 3 tỷ - 3PN giá 4 tỷ full nội thất cao cấp" data-price="3.8 tỷ" data-area="69 m²" data-pricesort="3800000000" data-areasort="69" data-room="2" data-toilets="2" data-address="Phú Nhuận, Hồ Chí Minh" data-description="Chính chủ cần bán gấp CH Golden Mansion đường Phổ Quang ngăn 2PN, 69m2.Hotline xem nhà 24/7: 0933.46.3434.- Diện tích 69m2. Full nội thất cao cấp.- Thiết kế 2 PN và 2 WC. Ban công và logia tách riêng" data-duration="Hôm qua" data-updatedtime="10/11/2020" data-datesort="11/10/2020 17:06:59" data-contactname="Nguyenvanquang" data-contactmobile="0933463434" data-url="/ban-can-ho-chung-cu-duong-pho-quang-phuong-9-12-prj-golden-mansion/ban-quan-ly-ban-2pn-gia-3-ty-3pn-gia-4-ty-full-noi-that-cao-cap-pr27741574" data-totalmedia="6" data-createbyuser="356511"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="1453083">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-thanh-xuan-13-phuong-thanh-xuan-prj-picity-high-park/sieu-t-mua-chi-dong-600-trieu-den-khi-nhan-nha-ck-den-17-tang-voucher-150-trieu-pr27736964" title="Siêu hot! Mua căn hộ PiCity chỉ đóng 600 triệu đến khi nhận nhà, CK đến 17%, tặng voucher 150 triệu" onclick="">
                        <img class="product-avatar-img" alt="Siêu hot! Mua căn hộ PiCity chỉ đóng 600 triệu đến khi nhận nhà, CK đến 17%, tặng voucher 150 triệu" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110133409-0b8e_wm.jpg" is-lazy-image="true" lazy-id="21"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110133520-ae0f_wm.jpg" is-lazy-image="true" lazy-id="22"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110133914-c07f_wm.jpg" is-lazy-image="true" lazy-id="23">
                    </a>
                    <span class="product-feature">
                                                                            <img src="./assets/image/ic_video.svg">
                    </span>
                        <span class="product-media">12</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-thanh-xuan-13-phuong-thanh-xuan-prj-picity-high-park/sieu-t-mua-chi-dong-600-trieu-den-khi-nhan-nha-ck-den-17-tang-voucher-150-trieu-pr27736964" title="Siêu hot! Mua căn hộ PiCity chỉ đóng 600 triệu đến khi nhận nhà, CK đến 17%, tặng voucher 150 triệu" class="vipZero product-link">
                            SIÊU HOT! MUA CĂN HỘ PICITY CHỈ ĐÓNG 600 TRIỆU ĐẾN KHI NHẬN NHÀ, CK ĐẾN 17%, TẶNG VOUCHER 150 TRIỆU
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">38 triệu/m²</span>
                            <span class="dot">·</span>
                            <span class="area">57 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">2 PN</span>
                                <span class="dot">·</span>
                                <span class="toilet">1 WC</span>
                        <span class="location">Quận 12, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Picity High Park được đánh giá là dự án độc tôn 
về quy mô lớn 8,6ha, cũng như trường sống đẳng cấp nhất quận 12 hiện tại
 - Đang nhận booking Park 1, thiết kế Indochine bán cổ điển.* Pháp lý 
hoàn chỉnh: Đã có GPXD đầy đủ. * Nhà thầu hạng A uy tín VIetnam: Hòa 
Bình &amp; Coteccons. * Tận hưởng không gian sống xanh: Công viên 3ha, 
diện tích xanh chiếm 77%. * Thanh toán: 600 triệu đến 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Sàn Pitaland">
                                <span class="contact-name">Sàn Pitaland</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0907228456" raw="0907228456">0907 228 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27736964" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Si&amp;#234;u hot! Mua căn hộ PiCity chỉ đ&amp;#243;ng 600 triệu đến khi nhận nh&amp;#224;, CK đến 17%, tặng voucher 150 triệu&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110133409-0b8e_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110133520-ae0f_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110133914-c07f_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/10/20201110133409-0b8e_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="true" data-title="Siêu hot! Mua căn hộ PiCity chỉ đóng 600 triệu đến khi nhận nhà, CK đến 17%, tặng voucher 150 triệu" data-price="38 triệu/m²" data-area="57 m²" data-pricesort="2166000000" data-areasort="57" data-room="2" data-toilets="1" data-address="Quận 12, Hồ Chí Minh" data-description="Picity High Park được đánh giá là dự án độc tôn về quy mô lớn 8,6ha, cũng như trường sống đẳng cấp nhất quận 12 hiện tại - Đang nhận booking Park 1, thiết kế Indochine bán cổ điển.* Pháp lý hoàn chỉnh: Đã có GPXD đầy đủ. * Nhà thầu hạng A uy tín VIetnam: Hòa Bình &amp; Coteccons. * Tận hưởng không gian sống xanh: Công viên 3ha, diện tích xanh chiếm 77%. * Thanh toán: 600 triệu đến " data-duration="Hôm qua" data-updatedtime="10/11/2020" data-datesort="11/10/2020 16:35:17" data-contactname="Sàn Pitaland" data-contactmobile="0907228456" data-url="/ban-can-ho-chung-cu-duong-thanh-xuan-13-phuong-thanh-xuan-prj-picity-high-park/sieu-t-mua-chi-dong-600-trieu-den-khi-nhan-nha-ck-den-17-tang-voucher-150-trieu-pr27736964" data-totalmedia="12" data-createbyuser="1453083"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="498044">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-dat-phuong-quang-cu/chinh-chu-ban-dich-vu-hong-thang-sam-son-mat-tien-10m-dien-tich-200m-tien-kinh-doanh-pr24598288" title="Chính chủ bán đất dịch vụ Hồng Thắng Sầm Sơn mặt tiền 10m, diện tích 200m2 tiện kinh doanh" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ bán đất dịch vụ Hồng Thắng Sầm Sơn mặt tiền 10m, diện tích 200m2 tiện kinh doanh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/03/10/20200310074538-8cd3.jpg" is-lazy-image="true" lazy-id="24">
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
                        Chính chủ cần bán đất dịch vụ gần đường Thanh 
Niên Cải dịch, sát khu đô thị Sun Group triển khai, Sát quảng trường 
tiện kinh doanh cách biển 100m.Lô đất 200m2, mặt tiền 10m, đường nội bộ 
12m có vỉa h
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="24598288" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n đất dịch vụ Hồng Thắng Sầm Sơn mặt tiền 10m, diện t&amp;#237;ch 200m2 tiện kinh doanh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/03/10/20200310074538-8cd3.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/03/10/20200310074538-8cd3.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ bán đất dịch vụ Hồng Thắng Sầm Sơn mặt tiền 10m, diện tích 200m2 tiện kinh doanh" data-price="Giá thỏa thuận" data-area="200 m²" data-pricesort="0" data-areasort="200" data-room="0" data-toilets="0" data-address="Sầm Sơn, Thanh Hóa" data-description="Chính chủ cần bán đất dịch vụ gần đường Thanh Niên Cải dịch, sát khu đô thị Sun Group triển khai, Sát quảng trường tiện kinh doanh cách biển 100m.Lô đất 200m2, mặt tiền 10m, đường nội bộ 12m có vỉa h" data-duration="Hôm qua" data-updatedtime="10/11/2020" data-datesort="11/10/2020 16:05:44" data-contactname="Thanh Tùng" data-contactmobile="0906930555" data-url="/ban-dat-phuong-quang-cu/chinh-chu-ban-dich-vu-hong-thang-sam-son-mat-tien-10m-dien-tich-200m-tien-kinh-doanh-pr24598288" data-totalmedia="2" data-createbyuser="498044"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="343762">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-tran-thu-do-phuong-hoang-liet-prj-green-park-tran-thu-do/so-huu-dong-chi-voi-450-trieu-dong-chiet-khau-4-5-qua-tang-3-5-chi-vang-pr27739964" title="Sở hữu căn hộ Phương Đông Green Park chỉ với 450 triệu đồng chiết khấu 4.5%, Quà tặng 3-5 chỉ vàng." onclick="">
                        <img class="product-avatar-img" alt="Sở hữu căn hộ Phương Đông Green Park chỉ với 450 triệu đồng chiết khấu 4.5%, Quà tặng 3-5 chỉ vàng." error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110154432-b305_wm.jpg" is-lazy-image="true" lazy-id="25"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110154431-08b7_wm.jpg" is-lazy-image="true" lazy-id="26"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110154431-dac7_wm.jpg" is-lazy-image="true" lazy-id="27">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">14</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-tran-thu-do-phuong-hoang-liet-prj-green-park-tran-thu-do/so-huu-dong-chi-voi-450-trieu-dong-chiet-khau-4-5-qua-tang-3-5-chi-vang-pr27739964" title="Sở hữu căn hộ Phương Đông Green Park chỉ với 450 triệu đồng chiết khấu 4.5%, Quà tặng 3-5 chỉ vàng." class="vipZero product-link">
                            SỞ HỮU CĂN HỘ PHƯƠNG ĐÔNG GREEN PARK CHỈ VỚI 450 TRIỆU ĐỒNG CHIẾT KHẤU 4.5%, QUÀ TẶNG 3-5 CHỈ VÀNG.
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">52 m²</span>
                                                <span class="location">Hoàng Mai, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Ưu đãi lớn nhất từ chủ đầu tư Phương Đông. Hỗ 
trợ lãi suất 0% và ân hạn nợ gốc đến khi nhận nhà. Tặng 3 đến 5 chỉ vàng
 - Chiết khấu tới 4,5% giá trị căn hộ (trừ trực tiếp vào HĐMB). Hotline 
trực tiếp CĐT: <span class="hidden-mobile des" raw="0899.161.593">0899.161.***</span>.
 - Chính sách ngân hàng hỗ trợ vay tới 65% GTCH lãi suất 0% đến khi nhận
 nhà, chỉ cần thanh toán trước 30% GTCH: + Với căn hộ 2 phòng ngủ 2 WC 
diện tích 57m2 giá 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="">
                                <span class="contact-name"></span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0899161593" raw="0899161593">0899 161 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27739964" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Sở hữu căn hộ Phương Đ&amp;#244;ng Green Park chỉ với 450 triệu đồng chiết khấu 4.5%, Qu&amp;#224; tặng 3-5 chỉ v&amp;#224;ng.&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110154432-b305_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110154431-08b7_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110154431-dac7_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/10/20201110154432-b305_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Sở hữu căn hộ Phương Đông Green Park chỉ với 450 triệu đồng chiết khấu 4.5%, Quà tặng 3-5 chỉ vàng." data-price="Giá thỏa thuận" data-area="52 m²" data-pricesort="0" data-areasort="52" data-room="0" data-toilets="0" data-address="Hoàng Mai, Hà Nội" data-description="Ưu đãi lớn nhất từ chủ đầu tư Phương Đông. Hỗ trợ lãi suất 0% và ân hạn nợ gốc đến khi nhận nhà. Tặng 3 đến 5 chỉ vàng - Chiết khấu tới 4,5% giá trị căn hộ (trừ trực tiếp vào HĐMB). Hotline trực tiếp CĐT: 0899.161.593. - Chính sách ngân hàng hỗ trợ vay tới 65% GTCH lãi suất 0% đến khi nhận nhà, chỉ cần thanh toán trước 30% GTCH: + Với căn hộ 2 phòng ngủ 2 WC diện tích 57m2 giá " data-duration="Hôm qua" data-updatedtime="10/11/2020" data-datesort="11/10/2020 15:45:59" data-contactname="" data-contactmobile="0899161593" data-url="/ban-can-ho-chung-cu-duong-tran-thu-do-phuong-hoang-liet-prj-green-park-tran-thu-do/so-huu-dong-chi-voi-450-trieu-dong-chiet-khau-4-5-qua-tang-3-5-chi-vang-pr27739964" data-totalmedia="14" data-createbyuser="343762"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="326550">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-to-huu-phuong-van-phuc-1-prj-tsq-galaxy/hot-9-can-ngoai-giao-gia-uu-dai-69-da-co-so-do-lh-chon-can-0982251985-pr27732789" title="Hot! 9 căn ngoại giao giá ưu đãi. Galaxy 69 tố hữu đã có sổ đỏ lh chọn căn 0824623333" onclick="">
                        <img class="product-avatar-img" alt="Hot! 9 căn ngoại giao giá ưu đãi. Galaxy 69 tố hữu đã có sổ đỏ lh chọn căn 0824623333" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110095536-58ea_wm.jpg" is-lazy-image="true" lazy-id="28">
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
                        GALAXY VẠN PHÚC - 69 TỐ HỮU. 
========================== Đã có Sổ Đỏ từng lô. Nhận nhà ngay, yên tâm 
chất lượng. ----------------------1 SHOPHOUSE: 95m - 111m - 140m. Giá 
chỉ từ 25 tỷ - 32 tỷ/lô xây h
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27732789" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Hot! 9 căn ngoại giao gi&amp;#225; ưu đ&amp;#227;i. Galaxy 69 tố hữu đ&amp;#227; c&amp;#243; sổ đỏ lh chọn căn 0824623333&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110095536-58ea_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110095536-58ea_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Hot! 9 căn ngoại giao giá ưu đãi. Galaxy 69 tố hữu đã có sổ đỏ lh chọn căn 0824623333" data-price="Giá thỏa thuận" data-area="80 m²" data-pricesort="0" data-areasort="80" data-room="0" data-toilets="0" data-address="Hà Đông, Hà Nội" data-description="GALAXY VẠN PHÚC - 69 TỐ HỮU. ========================== Đã có Sổ Đỏ từng lô. Nhận nhà ngay, yên tâm chất lượng. ----------------------1 SHOPHOUSE: 95m - 111m - 140m. Giá chỉ từ 25 tỷ - 32 tỷ/lô xây h" data-duration="Hôm qua" data-updatedtime="10/11/2020" data-datesort="11/10/2020 15:45:51" data-contactname="Hà Thành" data-contactmobile="0824623333" data-url="/ban-nha-biet-thu-lien-ke-duong-to-huu-phuong-van-phuc-1-prj-tsq-galaxy/hot-9-can-ngoai-giao-gia-uu-dai-69-da-co-so-do-lh-chon-can-0982251985-pr27732789" data-totalmedia="6" data-createbyuser="326550"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 product-item clearfix" uid="942927">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-dinh-duc-thien-xa-binh-chanh-3-prj-nha-xinh-residential/mo-ban-30-can-pho-thuong-mai-kdt-1-tret-2-lau-shr-1-4-ty-can-pr23425276" title="Chỉ với 1.5 tỷ sở hữu ngay nhà phố TM - Nhà Xinh Residential, 1 trệt 2 lầu, NH hỗ trợ 70%, LS 0%" onclick="">
                        <img class="product-avatar-img" alt="Chỉ với 1.5 tỷ sở hữu ngay nhà phố TM - Nhà Xinh Residential, 1 trệt 2 lầu, NH hỗ trợ 70%, LS 0%" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2019/11/13/20191113100025-ff9b_wm.jpg" is-lazy-image="true" lazy-id="29">
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
                        * Mở bán chính thức 40 căn nhà phố thương mại 1 
trệt 2 lầu với thiết kế đẹp và lạ mắt theo phong cách Châu Âu.* Nhà Xinh
 Residential với quy mô 20 ha, 750 căn bao gồm: + 419 nhà phố liền kề. +
 109 nh
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="23425276" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chỉ với 1.5 tỷ sở hữu ngay nh&amp;#224; phố TM - Nh&amp;#224; Xinh Residential, 1 trệt 2 lầu, NH hỗ trợ 70%, LS 0%&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/11/13/20191113100025-ff9b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2019/11/13/20191113100025-ff9b_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="true" data-has360="false" data-hasvideo="true" data-title="Chỉ với 1.5 tỷ sở hữu ngay nhà phố TM - Nhà Xinh Residential, 1 trệt 2 lầu, NH hỗ trợ 70%, LS 0%" data-price="1.5 tỷ" data-area="100 m²" data-pricesort="1500000000" data-areasort="100" data-room="4" data-toilets="3" data-address="Bình Chánh, Hồ Chí Minh" data-description="* Mở bán chính thức 40 căn nhà phố thương mại 1 trệt 2 lầu với thiết kế đẹp và lạ mắt theo phong cách Châu Âu.* Nhà Xinh Residential với quy mô 20 ha, 750 căn bao gồm: + 419 nhà phố liền kề. + 109 nh" data-duration="Hôm qua" data-updatedtime="10/11/2020" data-datesort="11/10/2020 15:40:01" data-contactname="Địa Ốc Nhà Xinh Sg" data-contactmobile="0917889494" data-url="/ban-nha-biet-thu-lien-ke-duong-dinh-duc-thien-xa-binh-chanh-3-prj-nha-xinh-residential/mo-ban-30-can-pho-thuong-mai-kdt-1-tret-2-lau-shr-1-4-ty-can-pr23425276" data-totalmedia="21" data-createbyuser="942927"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="343762">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-tran-thu-do-phuong-hoang-liet-prj-green-park-tran-thu-do/-ban-gap-dong-quan-mai-gia-chi-1-4x-ty-tang-den-5-chi-vang-pr27737632" title="Cần bán gấp chung cư phương đông Green Park quận Hoàng Mai giá chỉ 1.4x tỷ tặng đến 5 chỉ vàng" onclick="">
                        <img class="product-avatar-img" alt="Cần bán gấp chung cư phương đông Green Park quận Hoàng Mai giá chỉ 1.4x tỷ tặng đến 5 chỉ vàng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110141212-37cd_wm.jpg" is-lazy-image="true" lazy-id="30"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110141211-2504_wm.jpg" is-lazy-image="true" lazy-id="31"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110141212-caca_wm.jpg" is-lazy-image="true" lazy-id="32">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">10</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-tran-thu-do-phuong-hoang-liet-prj-green-park-tran-thu-do/-ban-gap-dong-quan-mai-gia-chi-1-4x-ty-tang-den-5-chi-vang-pr27737632" title="Cần bán gấp chung cư phương đông Green Park quận Hoàng Mai giá chỉ 1.4x tỷ tặng đến 5 chỉ vàng" class="vipZero product-link">
                            CẦN BÁN GẤP CHUNG CƯ PHƯƠNG ĐÔNG GREEN PARK QUẬN HOÀNG MAI GIÁ CHỈ 1.4X TỶ TẶNG ĐẾN 5 CHỈ VÀNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">54.8 m²</span>
                                                <span class="location">Hoàng Mai, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        NHà xanh trong phố Phương Đông Green Park.Mua 
nhà tặng vàng_lên đến đến 5 chỉ vàng.Sở hữu ngay: Nhà xanh trong phố chỉ
 từ 1,4 tỷ/ 2PN _ 2.053 tỷ / 3ngủ. Chiều cao 29 tầng, 3 tầng thương mại,
 3 tầng hầm, tầng căn hộ từ tầng 4 - tầng 29 với 1248 căn hộ nội thất cơ
 bản liền tường. Diện tích thông thủy đa dạng từ 54,8m2 73,9m2 - 79,2m2 -
 85m2 - 98,6m2 được thiết kế tinh tế, hài hòa
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="">
                                <span class="contact-name"></span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0945466579" raw="0945466579">0945 466 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27737632" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần b&amp;#225;n gấp chung cư phương đ&amp;#244;ng Green Park quận Ho&amp;#224;ng Mai gi&amp;#225; chỉ 1.4x tỷ tặng đến 5 chỉ v&amp;#224;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110141212-37cd_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110141211-2504_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110141212-caca_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/10/20201110141212-37cd_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần bán gấp chung cư phương đông Green Park quận Hoàng Mai giá chỉ 1.4x tỷ tặng đến 5 chỉ vàng" data-price="Giá thỏa thuận" data-area="54.8 m²" data-pricesort="0" data-areasort="54.8" data-room="0" data-toilets="0" data-address="Hoàng Mai, Hà Nội" data-description="NHà xanh trong phố Phương Đông Green Park.Mua nhà tặng vàng_lên đến đến 5 chỉ vàng.Sở hữu ngay: Nhà xanh trong phố chỉ từ 1,4 tỷ/ 2PN _ 2.053 tỷ / 3ngủ. Chiều cao 29 tầng, 3 tầng thương mại, 3 tầng hầm, tầng căn hộ từ tầng 4 - tầng 29 với 1248 căn hộ nội thất cơ bản liền tường. Diện tích thông thủy đa dạng từ 54,8m2 73,9m2 - 79,2m2 - 85m2 - 98,6m2 được thiết kế tinh tế, hài hòa" data-duration="Hôm qua" data-updatedtime="10/11/2020" data-datesort="11/10/2020 15:37:08" data-contactname="" data-contactmobile="0945466579" data-url="/ban-can-ho-chung-cu-duong-tran-thu-do-phuong-hoang-liet-prj-green-park-tran-thu-do/-ban-gap-dong-quan-mai-gia-chi-1-4x-ty-tang-den-5-chi-vang-pr27737632" data-totalmedia="10" data-createbyuser="343762"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip0 vipaddon product-item clearfix" uid="1097247">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-xa-lo-ha-noi-phuong-thao-dien-prj-masteri-thao-dien/chuyen-chuyen-nhuong-ch-gia-re-nhat-thi-truong-tro-vay-80-lh-0906574444-dung-pr22156060" title="Đại lý bán CH Masteri Thảo Điền giá rẻ hơn thị trường đến 500tr, hỗ trợ vay 80%. LH 0906574444 Dung" onclick="">
                        <img class="product-avatar-img" alt="Đại lý bán CH Masteri Thảo Điền giá rẻ hơn thị trường đến 500tr, hỗ trợ vay 80%. LH 0906574444 Dung" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2019/08/19/20190819101222-8ef2_wm.jpg" is-lazy-image="true" lazy-id="33"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2019/08/19/20190819101223-ab72_wm.jpg" is-lazy-image="true" lazy-id="34"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2019/08/19/20190819101223-b168_wm.jpg" is-lazy-image="true" lazy-id="35">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">11</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-duong-xa-lo-ha-noi-phuong-thao-dien-prj-masteri-thao-dien/chuyen-chuyen-nhuong-ch-gia-re-nhat-thi-truong-tro-vay-80-lh-0906574444-dung-pr22156060" title="Đại lý bán CH Masteri Thảo Điền giá rẻ hơn thị trường đến 500tr, hỗ trợ vay 80%. LH 0906574*** Dung" class="vipZero product-link" style="overflow: visible;">
                            ĐẠI LÝ BÁN CH MASTERI THẢO ĐIỀN GIÁ RẺ HƠN THỊ TRƯỜNG ĐẾN 500TR, HỖ TRỢ VAY 80%. LH <span class="hidden-mobile m-on-title" raw="0906574444">0906574***</span> DUNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.4 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">70 m²</span>
                                                        <span class="dot">·</span>
                                <span class="bedroom">2 PN</span>
                        <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Liên hệ ngay để được hướng dẫn chọn căn nhà vừa ý nhất <span class="hidden-mobile des" raw="0906.57.4444">0906.57.4***</span>
 gặp Dung (24/7).Ở đâu giá rẻ, em có giá rẻ hơn.Hỗ trợ tư vấn nhiệt tình
 + tận tâm + lấy uy tín làm đầu + không mua cũng không sao.Bên em cam 
kết: Giá rẻ hơn thị trường, trả sát giá chủ nhà. Miễn sao khách hàng ưng
 ý, với mức giá thấp nhất.Hỗ trợ vay ngân hàng lên đến 80% giá trị căn 
hộ. Vị trí nhà nào đa dạng, 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">10/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Hồ Thị Dung">
                                <span class="contact-name">Hồ Thị Dung</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0906574444" raw="0906574444">0906 574 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="22156060" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Đại l&amp;#253; b&amp;#225;n CH Masteri Thảo Điền gi&amp;#225; rẻ hơn thị trường đến 500tr, hỗ trợ vay 80%. LH 0906574444 Dung&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/08/19/20190819101222-8ef2_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/08/19/20190819101223-ab72_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/08/19/20190819101223-b168_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2019/08/19/20190819101222-8ef2_wm.jpg" data-vipclass="vip0 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Đại lý bán CH Masteri Thảo Điền giá rẻ hơn thị trường đến 500tr, hỗ trợ vay 80%. LH 0906574444 Dung" data-price="3.4 tỷ" data-area="70 m²" data-pricesort="3400000000" data-areasort="70" data-room="2" data-toilets="0" data-address="Quận 2, Hồ Chí Minh" data-description="Liên hệ ngay để được hướng dẫn chọn căn nhà vừa ý nhất 0906.57.4444 gặp Dung (24/7).Ở đâu giá rẻ, em có giá rẻ hơn.Hỗ trợ tư vấn nhiệt tình + tận tâm + lấy uy tín làm đầu + không mua cũng không sao.Bên em cam kết: Giá rẻ hơn thị trường, trả sát giá chủ nhà. Miễn sao khách hàng ưng ý, với mức giá thấp nhất.Hỗ trợ vay ngân hàng lên đến 80% giá trị căn hộ. Vị trí nhà nào đa dạng, " data-duration="Hôm qua" data-updatedtime="10/11/2020" data-datesort="11/10/2020 15:28:22" data-contactname="Hồ Thị Dung" data-contactmobile="0906574444" data-url="/ban-can-ho-chung-cu-duong-xa-lo-ha-noi-phuong-thao-dien-prj-masteri-thao-dien/chuyen-chuyen-nhuong-ch-gia-re-nhat-thi-truong-tro-vay-80-lh-0906574444-dung-pr22156060" data-totalmedia="11" data-createbyuser="1097247"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-center">
            <div class="pagination">
<a pid="1" class="actived" href="https://batdongsan.com.vn/nha-dat-ban">1</a>
<a pid="2" class="" href="https://batdongsan.com.vn/nha-dat-ban/p2">2</a>
<a pid="3" class="" href="https://batdongsan.com.vn/nha-dat-ban/p3">3</a>
<a pid="4" class="" href="https://batdongsan.com.vn/nha-dat-ban/p4">4</a>
<a pid="5" class="" href="https://batdongsan.com.vn/nha-dat-ban/p5">5</a>
<a pid="9169" href="https://batdongsan.com.vn/nha-dat-ban/p9169"><img src="./assets/image/ic_double_caret_right.png"></a>
</div>

        </div>
    </div>






    <div class="divide">&nbsp;</div>
<div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Bán đất gần làng đại học Thủ Đức" href="https://batdongsan.com.vn/tags/ban/ban-dat-gan-lang-dai-hoc-thu-duc">Bán đất gần làng đại học Thủ Đức</a></li>    <li><a title="Bán nhà chính chủ" href="https://batdongsan.com.vn/tags/ban/ban-nha-chinh-chu">Bán nhà chính chủ</a></li>    <li><a title="Bán nhà gần công viên Lê Thị Riêng" href="https://batdongsan.com.vn/tags/ban/ban-nha-gan-cong-vien-le-thi-rieng">Bán nhà gần công viên Lê Thị Riêng</a></li>    <li><a title="Bán chung cư chính chủ" href="https://batdongsan.com.vn/tags/ban/ban-chung-cu-chinh-chu">Bán chung cư chính chủ</a></li>    <li><a title="Bán đất chính chủ" href="https://batdongsan.com.vn/tags/ban/ban-dat-chinh-chu">Bán đất chính chủ</a></li>    <li><a title="Bán nhà mặt phố gIÁ RẺ" href="https://batdongsan.com.vn/tags/ban/ban-nha-mat-pho-gia-re">Bán nhà mặt phố gIÁ RẺ</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
    <div class="product-seo-text">
        <div>Hàng nghìn tin đăng <strong>mua bán nhà đất tại Việt Nam</strong> được rao trên <strong>Batdongsan.com.vn</strong>
 với đầy đủ các tiêu chí tìm kiếm của người mua và bán. 
                                Các thông tin mua bán nhà đất khu vực 
Việt Nam được tổng hợp từ các nguồn tin rao về nhà đất bao gồm tin đăng 
chính chủ và tin đăng qua môi giới, 
                                giúp đa dạng nguồn thông tin và sự lựa 
chọn đối với bất động sản đang quan tâm.</div>
                                <div>Bằng những tiện ích mà 
Batdongsan.com.vn mang đến cho người dùng, bạn có thể dễ dàng thao tác 
và tìm kiếm thông tin bất động sản bạn đang quan tâm chỉ trong vài click
 chuột. 
                                Batdongsan.com.vn sẽ là cầu nối giúp bạn
 tương tác và trao đổi với nhà cung cấp bất động sản bằng việc cung cấp 
thông tin chính xác, nhanh chóng..., 
                                cùng với đó là đội ngũ nhân viên tư vấn 
chuyên nghiệp. Chắc chắn bạn sẽ thực sự hài lòng về  kênh thông tin và 
dịch vụ của <strong>Batdongsan.com.vn</strong>!</div>
    </div>
<form id="productListBinnova" method="post">
    <input id="hashAlias" type="hidden" value="48f0d40b1731d909212598242194556c2306f2dde9c6827fab303276aa8fec92">
</form>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
            var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                model: {
                    typeOfProduct: 38,
                    categoryId: 0,
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
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/-1/2/-1/-1" title="Mua bán nhà đất toàn quốc giá 500 - 800 triệu">500 - 800 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/-1/3/-1/-1" title="Mua bán nhà đất toàn quốc giá 800 triệu - 1 tỷ">800 triệu - 1 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/-1/4/-1/-1" title="Mua bán nhà đất toàn quốc giá 1 - 2 tỷ">1 - 2 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/-1/5/-1/-1" title="Mua bán nhà đất toàn quốc giá 2 - 3 tỷ">2 - 3 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/-1/6/-1/-1" title="Mua bán nhà đất toàn quốc giá 3 - 5 tỷ">3 - 5 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/-1/7/-1/-1" title="Mua bán nhà đất toàn quốc giá 5 - 7 tỷ">5 - 7 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/-1/8/-1/-1" title="Mua bán nhà đất toàn quốc giá 7 - 10 tỷ">7 - 10 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/-1/9/-1/-1" title="Mua bán nhà đất toàn quốc giá 10 - 20 tỷ">10 - 20 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/-1/10/-1/-1" title="Mua bán nhà đất toàn quốc giá 20 - 30 tỷ">20 - 30 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/-1/11/-1/-1" title="Mua bán nhà đất toàn quốc giá &gt; 30 tỷ">&gt; 30 tỷ</a></li>
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
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/1/-1/-1/-1" title="Mua bán nhà đất toàn quốc diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/2/-1/-1/-1" title="Mua bán nhà đất toàn quốc diện tích 30 - 50 m2">30 - 50 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/3/-1/-1/-1" title="Mua bán nhà đất toàn quốc diện tích 50 - 80 m2">50 - 80 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/4/-1/-1/-1" title="Mua bán nhà đất toàn quốc diện tích 80 - 100 m2">80 - 100 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/5/-1/-1/-1" title="Mua bán nhà đất toàn quốc diện tích 100 - 150 m2">100 - 150 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/6/-1/-1/-1" title="Mua bán nhà đất toàn quốc diện tích 150 - 200 m2">150 - 200 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/7/-1/-1/-1" title="Mua bán nhà đất toàn quốc diện tích 200 - 250 m2">200 - 250 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/8/-1/-1/-1" title="Mua bán nhà đất toàn quốc diện tích 250 - 300 m2">250 - 300 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/9/-1/-1/-1" title="Mua bán nhà đất toàn quốc diện tích 300 - 500 m2">300 - 500 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban/10/-1/-1/-1" title="Mua bán nhà đất toàn quốc diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
        <h2 class="box-title">Mua bán nhà đất</h2>

        <div class="box-content link-hover-blue">
            <ul>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-tp-hcm" title="Mua bán nhà đất tại Hồ Chí Minh">
                                Hồ Chí Minh (72034)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-ha-noi" title="Mua bán nhà đất tại Hà Nội">
                                Hà Nội (57574)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-binh-duong" title="Mua bán nhà đất tại Bình Dương">
                                Bình Dương (10821)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-dong-nai" title="Mua bán nhà đất tại Đồng Nai">
                                Đồng Nai (7487)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-ba-ria-vung-tau" title="Mua bán nhà đất tại Bà Rịa Vũng Tàu">
                                Bà Rịa Vũng Tàu (4356)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-hai-phong" title="Mua bán nhà đất tại Hải Phòng">
                                Hải Phòng (2506)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-binh-thuan" title="Mua bán nhà đất tại Bình Thuận  ">
                                Bình Thuận   (1780)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-quang-ngai" title="Mua bán nhà đất tại Quảng Ngãi">
                                Quảng Ngãi (215)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-khanh-hoa" title="Mua bán nhà đất tại Khánh Hòa">
                                Khánh Hòa (3493)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-nghe-an" title="Mua bán nhà đất tại Nghệ An">
                                Nghệ An (210)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-yen-bai" title="Mua bán nhà đất tại Yên Bái">
                                Yên Bái (24)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-quang-tri" title="Mua bán nhà đất tại Quảng Trị">
                                Quảng Trị (30)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-thai-binh" title="Mua bán nhà đất tại Thái Bình">
                                Thái Bình (67)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-ben-tre" title="Mua bán nhà đất tại Bến Tre">
                                Bến Tre (88)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-dien-bien" title="Mua bán nhà đất tại Điện Biên">
                                Điện Biên (3)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-ca-mau" title="Mua bán nhà đất tại Cà Mau">
                                Cà Mau (23)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-dak-lak" title="Mua bán nhà đất tại Đắk Lắk">
                                Đắk Lắk (110)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-hoa-binh" title="Mua bán nhà đất tại Hòa Bình">
                                Hòa Bình (1541)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-son-la" title="Mua bán nhà đất tại Sơn La">
                                Sơn La (6)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/nha-dat-ban-binh-dinh" title="Mua bán nhà đất tại Bình Định">
                                Bình Định (403)
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

