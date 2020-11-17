@extends('layouts.master')

@section('title', 'Mua Bán Nhà Đất Việt Nam Giá Rẻ, Mới Nhất 2020')

@section('styles')
<link rel="stylesheet" href="./assets/css/filestatic.ver202011110505.msvbds.productlisting.min.css" />
@endsection

@section('content')

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
                <div class="custom-value hasvalue">Kho, nhà xưởng</div>
            </div>
            <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="45">
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
                                            <li vl="283"><span>Bán đất</span></li>
                                        </ul>
                                    </li>
                                    <li vl="44"><span>Trang trại, khu nghỉ dưỡng</span></li>
                                    <li vl="45"><span class="active">Kho, nhà xưởng</span></li>
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
                        <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-kho-nha-xuong#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-kho-nha-xuong#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                        <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-kho-nha-xuong#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-kho-nha-xuong#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                categoryId: 45,
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
    <a href="https://batdongsan.com.vn/ban-kho-nha-xuong" level="1" title="Bán kho, nhà xưởng tại Việt Nam">Bán</a><span>/</span><a href="https://batdongsan.com.vn/ban-kho-nha-xuong" level="2" title="Bán kho, nhà xưởng tại Việt Nam">Kho, nhà xưởng trên toàn quốc</a>
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
    <h1>Bán kho, nhà xưởng tại Việt Nam</h1>
        <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">627</span> bất động sản.</div>
    

</div>
    <div class="product-search-most mar-top-8 mar-bot-8">
        <div class="box-title">Các khu vực, địa điểm nổi bật</div>
        <ul class="clearfix link-hover-blue">
                <li><a href="https://batdongsan.com.vn/nha-dat-ban-quan-12">Nhà đất Quận 12</a></li>
                <li><a href="https://batdongsan.com.vn/nha-dat-ban-quan-7">Nhà đất Quận 7</a></li>
                <li><a href="https://batdongsan.com.vn/nha-dat-ban-quan-9">Nhà đất Quận 9</a></li>
                <li><a href="https://batdongsan.com.vn/nha-dat-ban-ha-dong">Nhà đất Hà Đông</a></li>
                <li><a href="https://batdongsan.com.vn/nha-dat-ban-cau-giay">Nhà đất Cầu Giấy</a></li>
                <li><a href="https://batdongsan.com.vn/nha-dat-ban-tay-ho">Nhà đất Tây Hồ</a></li>
        </ul>
    </div>

    <div class="product-nav-bar pad-top-8 clearfix">
        <ul class="ul-tab fl mar-right-16">
            <li class="list-display actived">Danh sách</li>
            <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
            <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-ban-kho-nha-xuong">Bản đồ</a></li>
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
            <div class="vip1 product-item clearfix" uid="760905">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-no-trang-long-phuong-12-7/ban-van-phong-quan-binh-thanh-pr27759533" title="Bán nhà Xưởng, văn phòng Quận Bình Thạnh" onclick="">
                        <img class="product-avatar-img" alt="Bán nhà Xưởng, văn phòng Quận Bình Thạnh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201112061249-0abb_wm.jpg" is-lazy-image="true" lazy-id="0">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-no-trang-long-phuong-12-7/ban-van-phong-quan-binh-thanh-pr27759533" title="Bán nhà Xưởng, văn phòng Quận Bình Thạnh" class="vipOne product-link">
                            BÁN NHÀ XƯỞNG, VĂN PHÒNG QUẬN BÌNH THẠNH
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">119 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">2750 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bình Thạnh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Bán tòa nhà văn phòng, xưởng tại số 217/4 đường Nơ Trang Long, phường 12, Quận Bình Thạnh. TP.HCM, hẻm xe tải ra vào thuận tiện. Thích hợp làm trường học, nhà xưởng, văn phòng hoặc căn hộ cho thuê. D
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
                                <i class="iconSave" data-productid="27759533" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; Xưởng, văn ph&amp;#242;ng Quận B&amp;#236;nh Thạnh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112061249-0abb_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112061249-0abb_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà Xưởng, văn phòng Quận Bình Thạnh" data-price="119 tỷ" data-area="2750 m²" data-pricesort="119000000000" data-areasort="2750" data-room="0" data-toilets="12" data-address="Bình Thạnh, Hồ Chí Minh" data-description="Bán tòa nhà văn phòng, xưởng tại số 217/4 đường Nơ Trang Long, phường 12, Quận Bình Thạnh. TP.HCM, hẻm xe tải ra vào thuận tiện. Thích hợp làm trường học, nhà xưởng, văn phòng hoặc căn hộ cho thuê. D" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:27:55" data-contactname="Lương Vĩnh Kim" data-contactmobile="0833505050" data-url="/ban-kho-nha-xuong-duong-no-trang-long-phuong-12-7/ban-van-phong-quan-binh-thanh-pr27759533" data-totalmedia="6" data-createbyuser="760905"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="1505675">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-nguyen-son-ha-phuong-vinh-niem/ban-tai-san-tai-le-cn-i-phong-pr27715145" title="Bán tài sản tại đường Nguyễn Sơn Hà, phường Vĩnh Niệm, Lê Chân, Hải Phòng" onclick="">
                        <img class="product-avatar-img" alt="Bán tài sản tại đường Nguyễn Sơn Hà, phường Vĩnh Niệm, Lê Chân, Hải Phòng" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/no-image.png" is-lazy-image="true" lazy-id="1">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-nguyen-son-ha-phuong-vinh-niem/ban-tai-san-tai-le-cn-i-phong-pr27715145" title="Bán tài sản tại đường Nguyễn Sơn Hà, phường Vĩnh Niệm, Lê Chân, Hải Phòng" class="vipFour product-link">
                            BÁN TÀI SẢN TẠI ĐƯỜNG NGUYỄN SƠN HÀ, PHƯỜNG VĨNH NIỆM, LÊ CHÂN, HẢI PHÒNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">8 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">2834 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Lê Chân, Hải Phòng</span>
                    </div>
                    <div class="product-content">
                        Nằm mặt đường khu CN Vĩnh Niệm, cách đường Nguyễn Văn Linh khoảng 20m, thuận tiện giao thông, buôn bán, có nhà xưởng kết cấu khung thép. Giấy tờ chính chủ, không qua trung gian.
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
                                <i class="iconSave" data-productid="27715145" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n t&amp;#224;i sản tại đường Nguyễn Sơn H&amp;#224;, phường Vĩnh Niệm, L&amp;#234; Ch&amp;#226;n, Hải Ph&amp;#242;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán tài sản tại đường Nguyễn Sơn Hà, phường Vĩnh Niệm, Lê Chân, Hải Phòng" data-price="8 tỷ" data-area="2834 m²" data-pricesort="8000000000" data-areasort="2834" data-room="0" data-toilets="0" data-address="Lê Chân, Hải Phòng" data-description="Nằm mặt đường khu CN Vĩnh Niệm, cách đường Nguyễn Văn Linh khoảng 20m, thuận tiện giao thông, buôn bán, có nhà xưởng kết cấu khung thép. Giấy tờ chính chủ, không qua trung gian." data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 11:07:40" data-contactname="Anh Huy" data-contactmobile="0983467367" data-url="/ban-kho-nha-xuong-duong-nguyen-son-ha-phuong-vinh-niem/ban-tai-san-tai-le-cn-i-phong-pr27715145" data-totalmedia="0" data-createbyuser="1505675"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="1491042">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-tinh-lo-10-xa-pham-van-hai/chinh-chu-can-ban-3-mat-tien-10-pr27615709" title="Chính chủ - cần bán kho/xưởng 3 mặt tiền Tỉnh Lộ 10" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ - cần bán kho/xưởng 3 mặt tiền Tỉnh Lộ 10" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/31/20201031112122-48b1_wm.jpg" is-lazy-image="true" lazy-id="2">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-tinh-lo-10-xa-pham-van-hai/chinh-chu-can-ban-3-mat-tien-10-pr27615709" title="Chính chủ - cần bán kho/xưởng 3 mặt tiền Tỉnh Lộ 10" class="vipTwo product-link">
                            CHÍNH CHỦ - CẦN BÁN KHO/XƯỞNG 3 MẶT TIỀN TỈNH LỘ 10
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">50 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">2701 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bình Chánh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ - cần bán kho/xưởng 3 mặt tiền Tỉnh Lộ 10.- Cần bán kho, nhà xưởng mặt tiền Tỉnh Lộ 10 thuộc xã Phạm Văn Hai, Bình Chánh, TP. HCM. - Vị trí giao thông thuận tiện, khu dân cư đông đúc. - Diệ
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
                                <i class="iconSave" data-productid="27615709" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ - cần b&amp;#225;n kho/xưởng 3 mặt tiền Tỉnh Lộ 10&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/31/20201031112122-48b1_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/31/20201031112122-48b1_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ - cần bán kho/xưởng 3 mặt tiền Tỉnh Lộ 10" data-price="50 tỷ" data-area="2701 m²" data-pricesort="50000000000" data-areasort="2701" data-room="0" data-toilets="0" data-address="Bình Chánh, Hồ Chí Minh" data-description="Chính chủ - cần bán kho/xưởng 3 mặt tiền Tỉnh Lộ 10.- Cần bán kho, nhà xưởng mặt tiền Tỉnh Lộ 10 thuộc xã Phạm Văn Hai, Bình Chánh, TP. HCM. - Vị trí giao thông thuận tiện, khu dân cư đông đúc. - Diệ" data-duration="5 ngày trước" data-updatedtime="08/11/2020" data-datesort="11/08/2020 08:00:33" data-contactname="Nguyễn Thành Phương" data-contactmobile="0965422488" data-url="/ban-kho-nha-xuong-duong-tinh-lo-10-xa-pham-van-hai/chinh-chu-can-ban-3-mat-tien-10-pr27615709" data-totalmedia="8" data-createbyuser="1491042"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="561845">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-dt-743-phuong-an-phu-2/c-b-gap-cong-ty-g-dg-hoat-dong-binh-thuong-pr27750751" title="Cần bán gấp công ty gần An Phú đang hoạt động bình thường" onclick="">
                        <img class="product-avatar-img" alt="Cần bán gấp công ty gần An Phú đang hoạt động bình thường" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111113339-0cb5_wm.jpg" is-lazy-image="true" lazy-id="3">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">7</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-dt-743-phuong-an-phu-2/c-b-gap-cong-ty-g-dg-hoat-dong-binh-thuong-pr27750751" title="Cần bán gấp công ty gần An Phú đang hoạt động bình thường" class="vipThree product-link">
                            Cần bán gấp công ty gần An Phú đang hoạt động bình thường
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">10 triệu/m²</span>
                            <span class="dot">·</span>
                            <span class="area">3047.9 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thuận An, Bình Dương</span>
                    </div>
                    <div class="product-content">
                        Bán công ty ngay ngã 6 An Phú - Thuận An - Bình Dương. Tổng diện tích: 3047,9m2 (ngang 33m) 2 sổ. Đất SKC 1000m2. Nhà xưởng còn mới tinh. Giao thông thuận tiện. Có nhà ăn, khuôn viên. Không gian thoá
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
                                <i class="iconSave" data-productid="27750751" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần b&amp;#225;n gấp c&amp;#244;ng ty gần An Ph&amp;#250; đang hoạt động b&amp;#236;nh thường&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111113339-0cb5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111113339-0cb5_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần bán gấp công ty gần An Phú đang hoạt động bình thường" data-price="10 triệu/m²" data-area="3047.9 m²" data-pricesort="30479000000" data-areasort="3047.9" data-room="0" data-toilets="0" data-address="Thuận An, Bình Dương" data-description="Bán công ty ngay ngã 6 An Phú - Thuận An - Bình Dương. Tổng diện tích: 3047,9m2 (ngang 33m) 2 sổ. Đất SKC 1000m2. Nhà xưởng còn mới tinh. Giao thông thuận tiện. Có nhà ăn, khuôn viên. Không gian thoá" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 11:35:33" data-contactname="Võ Pha" data-contactmobile="0702001003" data-url="/ban-kho-nha-xuong-duong-dt-743-phuong-an-phu-2/c-b-gap-cong-ty-g-dg-hoat-dong-binh-thuong-pr27750751" data-totalmedia="7" data-createbyuser="561845"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="349495">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-le-dinh-chi-xa-le-minh-xuan/ban-mt-15-65-1000m-so-hong-hoan-cong-300m-tho-cu-pr27742728" title="Bán nhà xưởng MT Lê Đình Chi, DT 15x 65m= 1000m2 sổ hồng hoàn công 300m2 thổ cư" onclick="">
                        <img class="product-avatar-img" alt="Bán nhà xưởng MT Lê Đình Chi, DT 15x 65m= 1000m2 sổ hồng hoàn công 300m2 thổ cư" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111083441-8212.jpg" is-lazy-image="true" lazy-id="4">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">2</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-le-dinh-chi-xa-le-minh-xuan/ban-mt-15-65-1000m-so-hong-hoan-cong-300m-tho-cu-pr27742728" title="Bán nhà xưởng MT Lê Đình Chi, DT 15x 65m= 1000m2 sổ hồng hoàn công 300m2 thổ cư" class="vipThree product-link">
                            Bán nhà xưởng MT Lê Đình Chi, DT 15x 65m= 1000m2 sổ hồng hoàn công 300m2 thổ cư
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">11.8 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">1000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bình Chánh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Bán nhà xưởng MT Lê Đinh Chi, 15x65m= 1000m2. Sổ hồng 300m2 thổ cư. Hoàng công 190m2. Xây dưng tường rào kiên cố cai 3m. Nền cao hơn đường. Vị trí đẹp Trần Văn Giàu vào 1.5 km. Đường công 40 vi vu. Đ
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
                                <i class="iconSave" data-productid="27742728" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; xưởng MT L&amp;#234; Đ&amp;#236;nh Chi, DT 15x 65m= 1000m2 sổ hồng ho&amp;#224;n c&amp;#244;ng 300m2 thổ cư&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111083441-8212.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111083441-8212.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà xưởng MT Lê Đình Chi, DT 15x 65m= 1000m2 sổ hồng hoàn công 300m2 thổ cư" data-price="11.8 tỷ" data-area="1000 m²" data-pricesort="11800000000" data-areasort="1000" data-room="0" data-toilets="2" data-address="Bình Chánh, Hồ Chí Minh" data-description="Bán nhà xưởng MT Lê Đinh Chi, 15x65m= 1000m2. Sổ hồng 300m2 thổ cư. Hoàng công 190m2. Xây dưng tường rào kiên cố cai 3m. Nền cao hơn đường. Vị trí đẹp Trần Văn Giàu vào 1.5 km. Đường công 40 vi vu. Đ" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 19:17:06" data-contactname="Nguyễn Tiến" data-contactmobile="0973771307" data-url="/ban-kho-nha-xuong-duong-le-dinh-chi-xa-le-minh-xuan/ban-mt-15-65-1000m-so-hong-hoan-cong-300m-tho-cu-pr27742728" data-totalmedia="2" data-createbyuser="349495"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="181200">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-duong-cong-khi-xa-xuan-thoi-thuong/ban-hoc-mon-pr27721210" title="Bán nhà xưởng đường Dương Công Khi, xã Xuân Thới Thượng, Hóc Môn" onclick="">
                        <img class="product-avatar-img" alt="Bán nhà xưởng đường Dương Công Khi, xã Xuân Thới Thượng, Hóc Môn" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109130042-41d7_wm.jpg" is-lazy-image="true" lazy-id="5">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-duong-cong-khi-xa-xuan-thoi-thuong/ban-hoc-mon-pr27721210" title="Bán nhà xưởng đường Dương Công Khi, xã Xuân Thới Thượng, Hóc Môn" class="vipThree product-link">
                            Bán nhà xưởng đường Dương Công Khi, xã Xuân Thới Thượng, Hóc Môn
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">18.5 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">1409 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hóc Môn, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Cần bán nhà xưởng đường Dương Công Khi, Ấp 1, Xuân Thới Thượng, huyện Hóc Môn. - Diện tích khuôn viên 1409m2: Bao gồm nhà xưởng chính 850m2, bãi xe, khu văn phòng, phòng bảo vệ, đường container vào t
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
                                <i class="iconSave" data-productid="27721210" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; xưởng đường Dương C&amp;#244;ng Khi, x&amp;#227; Xu&amp;#226;n Thới Thượng, H&amp;#243;c M&amp;#244;n&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109130042-41d7_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109130042-41d7_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà xưởng đường Dương Công Khi, xã Xuân Thới Thượng, Hóc Môn" data-price="18.5 tỷ" data-area="1409 m²" data-pricesort="18500000000" data-areasort="1409" data-room="0" data-toilets="0" data-address="Hóc Môn, Hồ Chí Minh" data-description="Cần bán nhà xưởng đường Dương Công Khi, Ấp 1, Xuân Thới Thượng, huyện Hóc Môn. - Diện tích khuôn viên 1409m2: Bao gồm nhà xưởng chính 850m2, bãi xe, khu văn phòng, phòng bảo vệ, đường container vào t" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 13:01:14" data-contactname="Trung Hiếu" data-contactmobile="0913209636" data-url="/ban-kho-nha-xuong-duong-duong-cong-khi-xa-xuan-thoi-thuong/ban-hoc-mon-pr27721210" data-totalmedia="3" data-createbyuser="181200"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="1471747">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-tan-thoi-nhi-15-xa-tan-thoi-nhi/can-ban-cho-thue-cong-khi-hoc-mon-pr27689947" title="Chính chủ cần bán nhà xưởng Dương Công Khi, Hóc Môn, LH: 0917127385" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần bán nhà xưởng Dương Công Khi, Hóc Môn, LH: 0917127385" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106110843-1169_wm.jpg" is-lazy-image="true" lazy-id="6">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">2</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-tan-thoi-nhi-15-xa-tan-thoi-nhi/can-ban-cho-thue-cong-khi-hoc-mon-pr27689947" title="Chính chủ cần bán nhà xưởng Dương Công Khi, Hóc Môn, LH: 0917127***" class="vipThree product-link" style="overflow: visible;">
                            Chính chủ cần bán nhà xưởng Dương Công Khi, Hóc Môn, LH: <span class="hidden-mobile m-on-title" raw="0917127385">0917127***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">30 triệu/m²</span>
                            <span class="dot">·</span>
                            <span class="area">2000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hóc Môn, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cần bán nhà ở có thể làm nhà xưởng/ Nhà Kho, diện tích 2000m2, sân bãi có thể đậu 3 công 40feet, MT Tân Thới Nhì 15, cách Dương Công Khi 50m, cách QL22 1km, Quận Hóc Môn. Liên hệ: 091712738
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
                                <i class="iconSave" data-productid="27689947" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần b&amp;#225;n nh&amp;#224; xưởng Dương C&amp;#244;ng Khi, H&amp;#243;c M&amp;#244;n, LH: 0917127385&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106110843-1169_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/06/20201106110843-1169_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần bán nhà xưởng Dương Công Khi, Hóc Môn, LH: 0917127385" data-price="30 triệu/m²" data-area="2000 m²" data-pricesort="60000000000" data-areasort="2000" data-room="0" data-toilets="0" data-address="Hóc Môn, Hồ Chí Minh" data-description="Chính chủ cần bán nhà ở có thể làm nhà xưởng/ Nhà Kho, diện tích 2000m2, sân bãi có thể đậu 3 công 40feet, MT Tân Thới Nhì 15, cách Dương Công Khi 50m, cách QL22 1km, Quận Hóc Môn. Liên hệ: 091712738" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 11:55:49" data-contactname="Mthanh" data-contactmobile="0917127385" data-url="/ban-kho-nha-xuong-duong-tan-thoi-nhi-15-xa-tan-thoi-nhi/can-ban-cho-thue-cong-khi-hoc-mon-pr27689947" data-totalmedia="2" data-createbyuser="1471747"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 vipaddon product-item clearfix" uid="1465125">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-nguyen-duy-trinh-phuong-binh-trung-tay/ban-gap-quan-2-giao-thong-thuan-tien-chi-hon-70-trieu-m-pr27697794" title="BÁN GẤP NHÀ KHO QUẬN 2 GIAO THÔNG THUẬN TIỆN CHỈ HƠN 70 TRIỆU/M" onclick="">
                        <img class="product-avatar-img" alt="BÁN GẤP NHÀ KHO QUẬN 2 GIAO THÔNG THUẬN TIỆN CHỈ HƠN 70 TRIỆU/M" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106214356-f19b_wm.jpg" is-lazy-image="true" lazy-id="7"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106214551-a00d_wm.jpg" is-lazy-image="true" lazy-id="8"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106214638-f66d_wm.jpg" is-lazy-image="true" lazy-id="9">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-nguyen-duy-trinh-phuong-binh-trung-tay/ban-gap-quan-2-giao-thong-thuan-tien-chi-hon-70-trieu-m-pr27697794" title="BÁN GẤP NHÀ KHO QUẬN 2 GIAO THÔNG THUẬN TIỆN CHỈ HƠN 70 TRIỆU/M" class="vipThree product-link">
                            BÁN GẤP NHÀ KHO QUẬN 2 GIAO THÔNG THUẬN TIỆN CHỈ HƠN 70 TRIỆU/M
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">23.75 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">320 m²</span>
                                                        <span class="dot">·</span>
                                <span class="toilet">2 WC</span>
                        <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Tọa lạc gần tòa nhà HOMY LAND Nguyễn Duy Trinh - Quận 2.Nhà xưởng diện tích rộng : 10x32= 320m Xe tải vào kho lấy hàng.giá : 23 tỷ 750vừa ở vừa sử dụng làm Nhà Phân Phối thu nhập cũng hơn 100 triệu/ thángHiện Trạng : nhà kho 2 tầng rộng 250m, Sân trước rộng thênh thang để được 4 xe tải loại 3.5 tấn. ( có tường bao hết đất )Giao thông : giao với các đường lớn như : Mai Chí Thọ -
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                1 tuần trước
                                <span class="tooltip-time">06/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Hồ Mạnh Linh">
                                <span class="contact-name">Hồ Mạnh Linh</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0947528456" raw="0947528456">0947 528 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27697794" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#193;N GẤP NH&amp;#192; KHO QUẬN 2 GIAO TH&amp;#212;NG THUẬN TIỆN CHỈ HƠN 70 TRIỆU/M&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106214356-f19b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106214551-a00d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106214638-f66d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/06/20201106214356-f19b_wm.jpg" data-vipclass="vip3 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="BÁN GẤP NHÀ KHO QUẬN 2 GIAO THÔNG THUẬN TIỆN CHỈ HƠN 70 TRIỆU/M" data-price="23.75 tỷ" data-area="320 m²" data-pricesort="23750000000" data-areasort="320" data-room="0" data-toilets="2" data-address="Quận 2, Hồ Chí Minh" data-description="Tọa lạc gần tòa nhà HOMY LAND Nguyễn Duy Trinh - Quận 2.Nhà xưởng diện tích rộng : 10x32= 320m Xe tải vào kho lấy hàng.giá : 23 tỷ 750vừa ở vừa sử dụng làm Nhà Phân Phối thu nhập cũng hơn 100 triệu/ thángHiện Trạng : nhà kho 2 tầng rộng 250m, Sân trước rộng thênh thang để được 4 xe tải loại 3.5 tấn. ( có tường bao hết đất )Giao thông : giao với các đường lớn như : Mai Chí Thọ -" data-duration="1 tuần trước" data-updatedtime="06/11/2020" data-datesort="11/06/2020 21:51:10" data-contactname="Hồ Mạnh Linh" data-contactmobile="0947528456" data-url="/ban-kho-nha-xuong-duong-nguyen-duy-trinh-phuong-binh-trung-tay/ban-gap-quan-2-giao-thong-thuan-tien-chi-hon-70-trieu-m-pr27697794" data-totalmedia="8" data-createbyuser="1465125"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="486470">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-nguyen-thi-chien-xa-tan-an-hoi/ban-dt-1365m-tho-cu-990m-dt-xay-dung-500m-pr25672157" title="Bán nhà kho xưởng DT 1365m2, thổ cư 990m2, DT xây dựng 500m2" onclick="">
                        <img class="product-avatar-img" alt="Bán nhà kho xưởng DT 1365m2, thổ cư 990m2, DT xây dựng 500m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/02/20200602130741-8e14_wm.jpeg" is-lazy-image="true" lazy-id="10">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">12</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-nguyen-thi-chien-xa-tan-an-hoi/ban-dt-1365m-tho-cu-990m-dt-xay-dung-500m-pr25672157" title="Bán nhà kho xưởng DT 1365m2, thổ cư 990m2, DT xây dựng 500m2" class="vipThree product-link">
                            Bán nhà kho xưởng DT 1365m2, thổ cư 990m2, DT xây dựng 500m2
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">8.5 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">1365 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Củ Chi, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Bán nhà kho xưởng mặt đường Nguyễn Thị Chiên, 1365m2, thổ cư 990m2, dt xây dựng 500m, pháp lý, giấy pxd, xưởng mới xây dựng chưa đi vào hoạt động, nước máy, điện ba pha, đường xe công ra vào bình thư
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
                                <i class="iconSave" data-productid="25672157" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; kho xưởng DT 1365m2, thổ cư 990m2, DT x&amp;#226;y dựng 500m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/02/20200602130741-8e14_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/06/02/20200602130741-8e14_wm.jpeg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà kho xưởng DT 1365m2, thổ cư 990m2, DT xây dựng 500m2" data-price="8.5 tỷ" data-area="1365 m²" data-pricesort="8500000000" data-areasort="1365" data-room="0" data-toilets="0" data-address="Củ Chi, Hồ Chí Minh" data-description="Bán nhà kho xưởng mặt đường Nguyễn Thị Chiên, 1365m2, thổ cư 990m2, dt xây dựng 500m, pháp lý, giấy pxd, xưởng mới xây dựng chưa đi vào hoạt động, nước máy, điện ba pha, đường xe công ra vào bình thư" data-duration="1 tuần trước" data-updatedtime="06/11/2020" data-datesort="11/06/2020 13:16:33" data-contactname="Thai Duc Can" data-contactmobile="0906748698" data-url="/ban-kho-nha-xuong-duong-nguyen-thi-chien-xa-tan-an-hoi/ban-dt-1365m-tho-cu-990m-dt-xay-dung-500m-pr25672157" data-totalmedia="12" data-createbyuser="486470"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="191862">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-quoc-lo-27-xa-ea-bhok/ban-3-7ha-dat-co-15-000m2-dang-thue-3-5-ty-01-nam-gia-40-ty-pr27620144" title="Bán 3.7ha đất có 15.000m2 xưởng, đang thuê 3.5 tỷ/01 năm giá 40 tỷ" onclick="">
                        <img class="product-avatar-img" alt="Bán 3.7ha đất có 15.000m2 xưởng, đang thuê 3.5 tỷ/01 năm giá 40 tỷ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="11">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-quoc-lo-27-xa-ea-bhok/ban-3-7ha-dat-co-15-000m2-dang-thue-3-5-ty-01-nam-gia-40-ty-pr27620144" title="Bán 3.7ha đất có 15.000m2 xưởng, đang thuê 3.5 tỷ/01 năm giá 40 tỷ" class="vipThree product-link">
                            Bán 3.7ha đất có 15.000m2 xưởng, đang thuê 3.5 tỷ/01 năm giá 40 tỷ
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">40 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">37483 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Cư Kuin, Đắk Lắk</span>
                    </div>
                    <div class="product-content">
                        Đất công nghiệp chính chủ. Diện tích 37.383.4m2, đã xây tường bao xung quanh. Trên đất có 15.000m2 nhà xưởng. 6000m2 pin năng lượng. 1 trạm biến áp 1000kva. Đang chờ thuê 3.5 tỷ/01 năm. Liên hệ chính
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                1 tuần trước
                                <span class="tooltip-time">31/10/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27620144" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n 3.7ha đất c&amp;#243; 15.000m2 xưởng, đang thu&amp;#234; 3.5 tỷ/01 năm gi&amp;#225; 40 tỷ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán 3.7ha đất có 15.000m2 xưởng, đang thuê 3.5 tỷ/01 năm giá 40 tỷ" data-price="40 tỷ" data-area="37483 m²" data-pricesort="40000000000" data-areasort="37483" data-room="0" data-toilets="0" data-address="Cư Kuin, Đắk Lắk" data-description="Đất công nghiệp chính chủ. Diện tích 37.383.4m2, đã xây tường bao xung quanh. Trên đất có 15.000m2 nhà xưởng. 6000m2 pin năng lượng. 1 trạm biến áp 1000kva. Đang chờ thuê 3.5 tỷ/01 năm. Liên hệ chính" data-duration="1 tuần trước" data-updatedtime="31/10/2020" data-datesort="10/31/2020 22:16:12" data-contactname="Kiên Bộ Đội" data-contactmobile="0949123686" data-url="/ban-kho-nha-xuong-duong-quoc-lo-27-xa-ea-bhok/ban-3-7ha-dat-co-15-000m2-dang-thue-3-5-ty-01-nam-gia-40-ty-pr27620144" data-totalmedia="0" data-createbyuser="191862"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="1496754">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-bui-thanh-khiet-thi-tran-tan-tuc/toi-la-chinh-chu-can-ban-5-520m2-co-dien-3-pha-tt-binh-chanh-pr27552703" title="Tôi là chính chủ cần bán 5.540m2 kho có điện 3 pha đường Bùi Thanh Khiết, TT. Tân Túc, Bình Chánh" onclick="">
                        <img class="product-avatar-img" alt="Tôi là chính chủ cần bán 5.540m2 kho có điện 3 pha đường Bùi Thanh Khiết, TT. Tân Túc, Bình Chánh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/26/20201026162905-bd27_wm.jpg" is-lazy-image="true" lazy-id="12">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-bui-thanh-khiet-thi-tran-tan-tuc/toi-la-chinh-chu-can-ban-5-520m2-co-dien-3-pha-tt-binh-chanh-pr27552703" title="Tôi là chính chủ cần bán 5.540m2 kho có điện 3 pha đường Bùi Thanh Khiết, TT. Tân Túc, Bình Chánh" class="vipThree product-link">
                            Tôi là chính chủ cần bán 5.540m2 kho có điện 3 pha đường Bùi Thanh Khiết, TT. Tân Túc, Bình Chánh
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">4.8 triệu/m²</span>
                            <span class="dot">·</span>
                            <span class="area">5540 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bình Chánh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Tôi là chính chủ cần bán 5.540m2 ( 1 sổ đã có kho 1020m2 và 1 sổ 4520m2 đã xây tường bao đầy đủ), điện 3 pha, đầu đường Tập đoàn 7-11, từ Bùi Thanh Khiết vào 50 mét, đường rộng 8 mét mới làm, xe cont
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                2 tuần trước
                                <span class="tooltip-time">26/10/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27552703" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;T&amp;#244;i l&amp;#224; ch&amp;#237;nh chủ cần b&amp;#225;n 5.540m2 kho c&amp;#243; điện 3 pha đường B&amp;#249;i Thanh Khiết, TT. T&amp;#226;n T&amp;#250;c, B&amp;#236;nh Ch&amp;#225;nh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/26/20201026162905-bd27_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/26/20201026162905-bd27_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Tôi là chính chủ cần bán 5.540m2 kho có điện 3 pha đường Bùi Thanh Khiết, TT. Tân Túc, Bình Chánh" data-price="4.8 triệu/m²" data-area="5540 m²" data-pricesort="26592000000" data-areasort="5540" data-room="0" data-toilets="0" data-address="Bình Chánh, Hồ Chí Minh" data-description="Tôi là chính chủ cần bán 5.540m2 ( 1 sổ đã có kho 1020m2 và 1 sổ 4520m2 đã xây tường bao đầy đủ), điện 3 pha, đầu đường Tập đoàn 7-11, từ Bùi Thanh Khiết vào 50 mét, đường rộng 8 mét mới làm, xe cont" data-duration="2 tuần trước" data-updatedtime="26/10/2020" data-datesort="10/26/2020 17:13:12" data-contactname="Huyền Trần" data-contactmobile="0909095733" data-url="/ban-kho-nha-xuong-duong-bui-thanh-khiet-thi-tran-tan-tuc/toi-la-chinh-chu-can-ban-5-520m2-co-dien-3-pha-tt-binh-chanh-pr27552703" data-totalmedia="4" data-createbyuser="1496754"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip5 vipaddon product-item clearfix" uid="1060895">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-nguyen-tat-thanh-xa-dinh-trung-1/ban-dat-doanh-nghiep-3-mat-tien-tam-tp-vinh-yen-0987052592-pr27777983" title="Bán Đất Doanh Nghiệp 3 mặt tiền - Nguyễn Tất Thành- Trung tâm TP Vĩnh Yên . 0987052592" onclick="">
                        <img class="product-avatar-img" alt="Bán Đất Doanh Nghiệp 3 mặt tiền - Nguyễn Tất Thành- Trung tâm TP Vĩnh Yên . 0987052592" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113101733-5203_wm.jpg" is-lazy-image="true" lazy-id="13"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113102851-b31f_wm.jpg" is-lazy-image="true" lazy-id="14"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113102851-0ae1_wm.jpg" is-lazy-image="true" lazy-id="15">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-nguyen-tat-thanh-xa-dinh-trung-1/ban-dat-doanh-nghiep-3-mat-tien-tam-tp-vinh-yen-0987052592-pr27777983" title="Bán Đất Doanh Nghiệp 3 mặt tiền - Nguyễn Tất Thành- Trung tâm TP Vĩnh Yên . 0987052***" class="vipFive product-link" style="overflow: visible;">
                            Bán Đất Doanh Nghiệp 3 mặt tiền - Nguyễn Tất Thành- Trung tâm TP Vĩnh Yên . <span class="hidden-mobile m-on-title" raw="0987052592">0987052***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">33 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">2400 m²</span>
                                                <span class="location">Vĩnh Yên, Vĩnh Phúc</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        ------Cực Vip-------
 Bán Lô Doanh Nghiệp - Trung tâm Đẹp Nhất TP Vĩnh Yên 
 Đường Nguyễn Tất Thành - TP Vĩnh Yên - Vĩnh Phúc <span class="hidden-mobile des" raw="0987052592">0987052***</span>
 Diện tích : 2400m2
 
 Ba Mặt tiền : 30m x 80m
 Đường : Nguyễn Tất Thành 42m 
 Hai đường còn lại  xe container đỗ 
 Bìa Hồng Mới sang tên
 Trên đất sẵn nhà xưởng.
 Vị trí đắc địa, trung tâm tp vĩnh yên.
 Giao thông thuận tiện, tiện ích chung q
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">13/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Việt Anh">
                                <span class="contact-name">Việt Anh</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0987052592" raw="0987052592">0987 052 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27777983" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n Đất Doanh Nghiệp 3 mặt tiền - Nguyễn Tất Th&amp;#224;nh- Trung t&amp;#226;m TP Vĩnh Y&amp;#234;n . 0987052592&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113101733-5203_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113102851-b31f_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113102851-0ae1_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/13/20201113101733-5203_wm.jpg" data-vipclass="vip5 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán Đất Doanh Nghiệp 3 mặt tiền - Nguyễn Tất Thành- Trung tâm TP Vĩnh Yên . 0987052592" data-price="33 tỷ" data-area="2400 m²" data-pricesort="33000000000" data-areasort="2400" data-room="0" data-toilets="0" data-address="Vĩnh Yên, Vĩnh Phúc" data-description="------Cực Vip-------
 Bán Lô Doanh Nghiệp - Trung tâm Đẹp Nhất TP Vĩnh Yên 
 Đường Nguyễn Tất Thành - TP Vĩnh Yên - Vĩnh Phúc 0987052592
 Diện tích : 2400m2
 
 Ba Mặt tiền : 30m x 80m
 Đường : Nguyễn Tất Thành 42m 
 Hai đường còn lại  xe container đỗ 
 Bìa Hồng Mới sang tên
 Trên đất sẵn nhà xưởng.
 Vị trí đắc địa, trung tâm tp vĩnh yên.
 Giao thông thuận tiện, tiện ích chung q" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:34:22" data-contactname="Việt Anh" data-contactmobile="0987052592" data-url="/ban-kho-nha-xuong-duong-nguyen-tat-thanh-xa-dinh-trung-1/ban-dat-doanh-nghiep-3-mat-tien-tam-tp-vinh-yen-0987052592-pr27777983" data-totalmedia="4" data-createbyuser="1060895"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="472611">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-quoc-lo-37-xa-ha-thuong/ban-1ha-dat-co-san-mat-ql37-dai-tu-thai-nguyen-dt-thuc-te-1-5ha-pr27777725" title="Bán 1ha đất có sẵn nhà xưởng mặt QL37, Đại Từ, Thái Nguyên. Dt thực tế 1,5ha" onclick="">
                        <img class="product-avatar-img" alt="Bán 1ha đất có sẵn nhà xưởng mặt QL37, Đại Từ, Thái Nguyên. Dt thực tế 1,5ha" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113102555-ab3a_wm.jpg" is-lazy-image="true" lazy-id="16">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-quoc-lo-37-xa-ha-thuong/ban-1ha-dat-co-san-mat-ql37-dai-tu-thai-nguyen-dt-thuc-te-1-5ha-pr27777725" title="Bán 1ha đất có sẵn nhà xưởng mặt QL37, Đại Từ, Thái Nguyên. Dt thực tế 1,5ha" class="vipFive product-link">
                            Bán 1ha đất có sẵn nhà xưởng mặt QL37, Đại Từ, Thái Nguyên. Dt thực tế 1,5ha
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">10000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Đại Từ, Thái Nguyên</span>
                    </div>
                    <div class="product-content">
                        Cần bán 1ha (10.000m2) đất công nghiệp 50 năm Đại Từ, Thái Nguyên.
 Diện tích sử dụng thực tế: 15.000m2
 Trên đất có 4000m2 nhà xưởng, trạm điện, nhà văn phòng. 
 Vị trí: mặt quốc lộ 37A Đại Từ, Thái
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
                                <i class="iconSave" data-productid="27777725" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n 1ha đất c&amp;#243; sẵn nh&amp;#224; xưởng mặt QL37, Đại Từ, Th&amp;#225;i Nguy&amp;#234;n. Dt thực tế 1,5ha&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113102555-ab3a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/13/20201113102555-ab3a_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán 1ha đất có sẵn nhà xưởng mặt QL37, Đại Từ, Thái Nguyên. Dt thực tế 1,5ha" data-price="Giá thỏa thuận" data-area="10000 m²" data-pricesort="0" data-areasort="10000" data-room="0" data-toilets="0" data-address="Đại Từ, Thái Nguyên" data-description="Cần bán 1ha (10.000m2) đất công nghiệp 50 năm Đại Từ, Thái Nguyên.
 Diện tích sử dụng thực tế: 15.000m2
 Trên đất có 4000m2 nhà xưởng, trạm điện, nhà văn phòng. 
 Vị trí: mặt quốc lộ 37A Đại Từ, Thái" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:26:14" data-contactname="truong thi" data-contactmobile="0903483435" data-url="/ban-kho-nha-xuong-duong-quoc-lo-37-xa-ha-thuong/ban-1ha-dat-co-san-mat-ql37-dai-tu-thai-nguyen-dt-thuc-te-1-5ha-pr27777725" data-totalmedia="3" data-createbyuser="472611"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="354481">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-1-xa-duc-hoa-dong/ban-c-cho-thue-kcn-long-an-pr27305391" title="Bán hoặc cho thuê xưởng KCN Đức Hoà, Đức Hoà, Long An" onclick="">
                        <img class="product-avatar-img" alt="Bán hoặc cho thuê xưởng KCN Đức Hoà, Đức Hoà, Long An" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/06/20201006120626-cc95_wm.jpg" is-lazy-image="true" lazy-id="17">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-1-xa-duc-hoa-dong/ban-c-cho-thue-kcn-long-an-pr27305391" title="Bán hoặc cho thuê xưởng KCN Đức Hoà, Đức Hoà, Long An" class="vipFive product-link">
                            Bán hoặc cho thuê xưởng KCN Đức Hoà, Đức Hoà, Long An
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">30 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">3000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Đức Hòa, Long An</span>
                    </div>
                    <div class="product-content">
                        Cần Bán hoặc cho thuê xưởng KCN Đức Hoà: Diện tích: 3000 m2. + Xưởng: 1000 m2. + Nhà ở VP: 400 m2. Trạm điện - PCCC đầy đủ.
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
                                <i class="iconSave" data-productid="27305391" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n hoặc cho thu&amp;#234; xưởng KCN Đức Ho&amp;#224;, Đức Ho&amp;#224;, Long An&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/06/20201006120626-cc95_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/06/20201006120626-cc95_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán hoặc cho thuê xưởng KCN Đức Hoà, Đức Hoà, Long An" data-price="30 tỷ" data-area="3000 m²" data-pricesort="30000000000" data-areasort="3000" data-room="0" data-toilets="0" data-address="Đức Hòa, Long An" data-description="Cần Bán hoặc cho thuê xưởng KCN Đức Hoà: Diện tích: 3000 m2. + Xưởng: 1000 m2. + Nhà ở VP: 400 m2. Trạm điện - PCCC đầy đủ." data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:24:40" data-contactname="Lê Nguyễn Thanh Sơn" data-contactmobile="0903601346" data-url="/ban-kho-nha-xuong-duong-1-xa-duc-hoa-dong/ban-c-cho-thue-kcn-long-an-pr27305391" data-totalmedia="8" data-createbyuser="354481"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="329303">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-quach-dieu-xa-vinh-loc-a-1/bn-mt-tien-binh-chnh-dien-tich-8m-x-30m-lh-0908060303-pr27171315" title="Bán nhà kho mặt tiền đường Quách Điêu, Vĩnh Lộc A, Bình Chánh. Diện tích: 16m x 30m, LH: 0908060303" onclick="">
                        <img class="product-avatar-img" alt="Bán nhà kho mặt tiền đường Quách Điêu, Vĩnh Lộc A, Bình Chánh. Diện tích: 16m x 30m, LH: 0908060303" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/16/20201016104250-d754_wm.jpg" is-lazy-image="true" lazy-id="18">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-quach-dieu-xa-vinh-loc-a-1/bn-mt-tien-binh-chnh-dien-tich-8m-x-30m-lh-0908060303-pr27171315" title="Bán nhà kho mặt tiền đường Quách Điêu, Vĩnh Lộc A, Bình Chánh. Diện tích: 16m x 30m, LH: 0908060***" class="vipFive product-link" style="overflow: visible;">
                            Bán nhà kho mặt tiền đường Quách Điêu, Vĩnh Lộc A, Bình Chánh. Diện tích: 16m x 30m, LH: <span class="hidden-mobile m-on-title" raw="0908060303">0908060***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">24 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">480 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bình Chánh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Bán nhà kho mặt tiền đường Quách Điêu, Vĩnh Lộc A, Bình Chánh. Diện tích: 16m x 30m, có 450m2 thổ cư, kho cao ráo, xây dựng hết đất, đang cho thuê, Sổ hồng đầy đủ. Vị trí cực đẹp, gần chợ liên ấp 2 -
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
                                <i class="iconSave" data-productid="27171315" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; kho mặt tiền đường Qu&amp;#225;ch Đi&amp;#234;u, Vĩnh Lộc A, B&amp;#236;nh Ch&amp;#225;nh. Diện t&amp;#237;ch: 16m x 30m, LH: 0908060303&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/16/20201016104250-d754_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/16/20201016104250-d754_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà kho mặt tiền đường Quách Điêu, Vĩnh Lộc A, Bình Chánh. Diện tích: 16m x 30m, LH: 0908060303" data-price="24 tỷ" data-area="480 m²" data-pricesort="24000000000" data-areasort="480" data-room="0" data-toilets="0" data-address="Bình Chánh, Hồ Chí Minh" data-description="Bán nhà kho mặt tiền đường Quách Điêu, Vĩnh Lộc A, Bình Chánh. Diện tích: 16m x 30m, có 450m2 thổ cư, kho cao ráo, xây dựng hết đất, đang cho thuê, Sổ hồng đầy đủ. Vị trí cực đẹp, gần chợ liên ấp 2 -" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:06:30" data-contactname="Đất Cảnh" data-contactmobile="0908060303" data-url="/ban-kho-nha-xuong-duong-quach-dieu-xa-vinh-loc-a-1/bn-mt-tien-binh-chnh-dien-tich-8m-x-30m-lh-0908060303-pr27171315" data-totalmedia="1" data-createbyuser="329303"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="384084">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-so-5-thi-tran-thu-thua/ban-10000m2-dat-mat-tien-5-khu-cong-nghiep-long-hau-hoa-binh-long-an-pr21053913" title="Bán 5353m2 đất xưởng có 2 MT đường Số 5 và đường số 6 khu công nghiệp Long Hậu - Hòa Bình, Long An" onclick="">
                        <img class="product-avatar-img" alt="Bán 5353m2 đất xưởng có 2 MT đường Số 5 và đường số 6 khu công nghiệp Long Hậu - Hòa Bình, Long An" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2019/07/16/20190716145203-3a20_wm.jpg" is-lazy-image="true" lazy-id="19">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-so-5-thi-tran-thu-thua/ban-10000m2-dat-mat-tien-5-khu-cong-nghiep-long-hau-hoa-binh-long-an-pr21053913" title="Bán 5353m2 đất xưởng có 2 MT đường Số 5 và đường số 6 khu công nghiệp Long Hậu - Hòa Bình, Long An" class="vipFive product-link">
                            Bán 5353m2 đất xưởng có 2 MT đường Số 5 và đường số 6 khu công nghiệp Long Hậu - Hòa Bình, Long An
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">22 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">5353 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thủ Thừa, Long An</span>
                    </div>
                    <div class="product-content">
                        Cần tiền bán gấp 5353m2 đất 2 mặt tiền đường DT 818 gần Quốc lộ 1A, trong khu công nghiệp Long Hậu - Hòa Bình, Thủ Thừa, Long An. DT 60*87m sổ hồng. Đường nhựa 24m, mặt đường Số 5 87m, mặt đường Số 6
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
                                <i class="iconSave" data-productid="21053913" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n 5353m2 đất xưởng c&amp;#243; 2 MT đường Số 5 v&amp;#224; đường số 6 khu c&amp;#244;ng nghiệp Long Hậu - H&amp;#242;a B&amp;#236;nh, Long An&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/07/16/20190716145203-3a20_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2019/07/16/20190716145203-3a20_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán 5353m2 đất xưởng có 2 MT đường Số 5 và đường số 6 khu công nghiệp Long Hậu - Hòa Bình, Long An" data-price="22 tỷ" data-area="5353 m²" data-pricesort="22000000000" data-areasort="5353" data-room="0" data-toilets="0" data-address="Thủ Thừa, Long An" data-description="Cần tiền bán gấp 5353m2 đất 2 mặt tiền đường DT 818 gần Quốc lộ 1A, trong khu công nghiệp Long Hậu - Hòa Bình, Thủ Thừa, Long An. DT 60*87m sổ hồng. Đường nhựa 24m, mặt đường Số 5 87m, mặt đường Số 6" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 10:02:08" data-contactname="Nguyễn Văn Hiếu" data-contactmobile="0986753310" data-url="/ban-kho-nha-xuong-duong-so-5-thi-tran-thu-thua/ban-10000m2-dat-mat-tien-5-khu-cong-nghiep-long-hau-hoa-binh-long-an-pr21053913" data-totalmedia="3" data-createbyuser="384084"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="246873">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-quoc-lo-1a-xa-quat-dong/ban-3-300m2-dat-cong-nghiep-mat-khu-vuc-thuong-tin-thanh-pho-ha-noi-pr27208639" title="Bán 3.300m2 xưởng công nghiệp mặt đường Quốc Lộ 1A khu vực Quất Động, Thường Tín, thành phố Hà Nội" onclick="">
                        <img class="product-avatar-img" alt="Bán 3.300m2 xưởng công nghiệp mặt đường Quốc Lộ 1A khu vực Quất Động, Thường Tín, thành phố Hà Nội" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="20">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-quoc-lo-1a-xa-quat-dong/ban-3-300m2-dat-cong-nghiep-mat-khu-vuc-thuong-tin-thanh-pho-ha-noi-pr27208639" title="Bán 3.300m2 xưởng công nghiệp mặt đường Quốc Lộ 1A khu vực Quất Động, Thường Tín, thành phố Hà Nội" class="vipFive product-link">
                            Bán 3.300m2 xưởng công nghiệp mặt đường Quốc Lộ 1A khu vực Quất Động, Thường Tín, thành phố Hà Nội
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">27 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">3300 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thường Tín, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Bán 3300m2 đất công nghiệp mặt đường Quốc Lộ 1A khu vực Quất Động, Thường Tín, thành phố Hà Nội. Trên đất có 2.000m2 nhà xưởng. Đất thuê 50 năm trả tiền hàng năm (thời hạn đến năm 2053). Giá: 27 tỷ. 
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
                                <i class="iconSave" data-productid="27208639" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n 3.300m2 xưởng c&amp;#244;ng nghiệp mặt đường Quốc Lộ 1A khu vực Quất Động, Thường T&amp;#237;n, th&amp;#224;nh phố H&amp;#224; Nội&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán 3.300m2 xưởng công nghiệp mặt đường Quốc Lộ 1A khu vực Quất Động, Thường Tín, thành phố Hà Nội" data-price="27 tỷ" data-area="3300 m²" data-pricesort="27000000000" data-areasort="3300" data-room="0" data-toilets="0" data-address="Thường Tín, Hà Nội" data-description="Bán 3300m2 đất công nghiệp mặt đường Quốc Lộ 1A khu vực Quất Động, Thường Tín, thành phố Hà Nội. Trên đất có 2.000m2 nhà xưởng. Đất thuê 50 năm trả tiền hàng năm (thời hạn đến năm 2053). Giá: 27 tỷ. " data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:55:15" data-contactname="Cty Tnhh An Thịnh Việt" data-contactmobile="0916597356" data-url="/ban-kho-nha-xuong-duong-quoc-lo-1a-xa-quat-dong/ban-3-300m2-dat-cong-nghiep-mat-khu-vuc-thuong-tin-thanh-pho-ha-noi-pr27208639" data-totalmedia="0" data-createbyuser="246873"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="246873">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-xa-ninh-so/ban-1600m2-tai-huyen-thuong-tin-thanh-pho-ha-noi-pr26522976" title="Bán kho xưởng 1600m2 tại xã Ninh Sở, huyện Thường Tín, thành phố Hà Nội" onclick="">
                        <img class="product-avatar-img" alt="Bán kho xưởng 1600m2 tại xã Ninh Sở, huyện Thường Tín, thành phố Hà Nội" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="21">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-xa-ninh-so/ban-1600m2-tai-huyen-thuong-tin-thanh-pho-ha-noi-pr26522976" title="Bán kho xưởng 1600m2 tại xã Ninh Sở, huyện Thường Tín, thành phố Hà Nội" class="vipFive product-link">
                            Bán kho xưởng 1600m2 tại xã Ninh Sở, huyện Thường Tín, thành phố Hà Nội
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">7.5 triệu/m²</span>
                            <span class="dot">·</span>
                            <span class="area">1600 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thường Tín, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Bán kho xưởng tại xã Ninh Sở, huyện Thường Tín, thành phố Hà Nội. Diện tích 1600m2. Giá: 7,5 triệu/m2. LH: Anh Tuân, công ty ATV - ĐT: <span class="hidden-mobile des" raw="0916597356">0916597***</span> - <span class="hidden-mobile des" raw="0981041246">0981041***</span>.
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
                                <i class="iconSave" data-productid="26522976" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n kho xưởng 1600m2 tại x&amp;#227; Ninh Sở, huyện Thường T&amp;#237;n, th&amp;#224;nh phố H&amp;#224; Nội&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán kho xưởng 1600m2 tại xã Ninh Sở, huyện Thường Tín, thành phố Hà Nội" data-price="7.5 triệu/m²" data-area="1600 m²" data-pricesort="12000000000" data-areasort="1600" data-room="0" data-toilets="0" data-address="Thường Tín, Hà Nội" data-description="Bán kho xưởng tại xã Ninh Sở, huyện Thường Tín, thành phố Hà Nội. Diện tích 1600m2. Giá: 7,5 triệu/m2. LH: Anh Tuân, công ty ATV - ĐT: 0916597356 - 0981041246." data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:54:50" data-contactname="Cty Tnhh An Thịnh Việt" data-contactmobile="0916597356" data-url="/ban-kho-nha-xuong-xa-ninh-so/ban-1600m2-tai-huyen-thuong-tin-thanh-pho-ha-noi-pr26522976" data-totalmedia="0" data-createbyuser="246873"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="1498258">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-kenh-8-xa-tan-nhut/can-ban-lo-dat-dep-mat-tien-8-pr27768838" title="Cần bán lô đất kho xưởng đẹp mặt tiền Kênh 8" onclick="">
                        <img class="product-avatar-img" alt="Cần bán lô đất kho xưởng đẹp mặt tiền Kênh 8" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112150158-dae8_wm.jpg" is-lazy-image="true" lazy-id="22">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-duong-kenh-8-xa-tan-nhut/can-ban-lo-dat-dep-mat-tien-8-pr27768838" title="Cần bán lô đất kho xưởng đẹp mặt tiền Kênh 8" class="vipFive product-link">
                            Cần bán lô đất kho xưởng đẹp mặt tiền Kênh 8
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">22 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">4000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bình Chánh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Cần bán lô đất kho xưởng đẹp mặt tiền kênh 8. - Diện tích: Tổng diện tích 4.000m2 đã có hàng rào, san lấp có kho nhỏ, đất vuông vức rất đẹp. - Vị trí: Mặt tiền Kênh 8, Tân Nhựt, Bình Chánh. Đường xe 
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
                                <i class="iconSave" data-productid="27768838" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần b&amp;#225;n l&amp;#244; đất kho xưởng đẹp mặt tiền K&amp;#234;nh 8&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112150158-dae8_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/12/20201112150158-dae8_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần bán lô đất kho xưởng đẹp mặt tiền Kênh 8" data-price="22 tỷ" data-area="4000 m²" data-pricesort="22000000000" data-areasort="4000" data-room="0" data-toilets="0" data-address="Bình Chánh, Hồ Chí Minh" data-description="Cần bán lô đất kho xưởng đẹp mặt tiền kênh 8. - Diện tích: Tổng diện tích 4.000m2 đã có hàng rào, san lấp có kho nhỏ, đất vuông vức rất đẹp. - Vị trí: Mặt tiền Kênh 8, Tân Nhựt, Bình Chánh. Đường xe " data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:53:22" data-contactname="Ngô Thị Huyền" data-contactmobile="0906233154" data-url="/ban-kho-nha-xuong-duong-kenh-8-xa-tan-nhut/can-ban-lo-dat-dep-mat-tien-8-pr27768838" data-totalmedia="8" data-createbyuser="1498258"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip5 product-item clearfix" uid="246873">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-kho-nha-xuong-thi-tran-phu-xuyen/ban-30-000m2-dat-cong-nghiep-tai-thanh-pho-ha-noi-pr27208521" title="Bán 30.000m2 đất có nhà xưởng tại Phú Xuyên, thành phố Hà Nội" onclick="">
                        <img class="product-avatar-img" alt="Bán 30.000m2 đất có nhà xưởng tại Phú Xuyên, thành phố Hà Nội" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="23">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-thi-tran-phu-xuyen/ban-30-000m2-dat-cong-nghiep-tai-thanh-pho-ha-noi-pr27208521" title="Bán 30.000m2 đất có nhà xưởng tại Phú Xuyên, thành phố Hà Nội" class="vipFive product-link">
                            Bán 30.000m2 đất có nhà xưởng tại Phú Xuyên, thành phố Hà Nội
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">45 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">30000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Phú Xuyên, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Bán 30.000m2 đất có nhà xưởng tại Phú Xuyên, thành phố Hà Nội. Trên đất có 4.000m2 nhà xưởng. Đất thuê 50 năm trả tiền hàng năm (thời hạn đến năm 2055). Giá: 45 tỷ. LH: Anh Tuân, công ty ATV - ĐT: 09
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
                                <i class="iconSave" data-productid="27208521" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n 30.000m2 đất c&amp;#243; nh&amp;#224; xưởng tại Ph&amp;#250; Xuy&amp;#234;n, th&amp;#224;nh phố H&amp;#224; Nội&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán 30.000m2 đất có nhà xưởng tại Phú Xuyên, thành phố Hà Nội" data-price="45 tỷ" data-area="30000 m²" data-pricesort="45000000000" data-areasort="30000" data-room="0" data-toilets="0" data-address="Phú Xuyên, Hà Nội" data-description="Bán 30.000m2 đất có nhà xưởng tại Phú Xuyên, thành phố Hà Nội. Trên đất có 4.000m2 nhà xưởng. Đất thuê 50 năm trả tiền hàng năm (thời hạn đến năm 2055). Giá: 45 tỷ. LH: Anh Tuân, công ty ATV - ĐT: 09" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:53:21" data-contactname="Cty Tnhh An Thịnh Việt" data-contactmobile="0916597356" data-url="/ban-kho-nha-xuong-thi-tran-phu-xuyen/ban-30-000m2-dat-cong-nghiep-tai-thanh-pho-ha-noi-pr27208521" data-totalmedia="0" data-createbyuser="246873"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-center">
            <div class="pagination">
<a pid="1" class="actived" href="https://batdongsan.com.vn/ban-kho-nha-xuong">1</a>
<a pid="2" class="" href="https://batdongsan.com.vn/ban-kho-nha-xuong/p2">2</a>
<a pid="3" class="" href="https://batdongsan.com.vn/ban-kho-nha-xuong/p3">3</a>
<a pid="4" class="" href="https://batdongsan.com.vn/ban-kho-nha-xuong/p4">4</a>
<a pid="5" class="" href="https://batdongsan.com.vn/ban-kho-nha-xuong/p5">5</a>
<a pid="32" href="https://batdongsan.com.vn/ban-kho-nha-xuong/p32"><img src="./assets/image/ic_double_caret_right.png"></a>
</div>

        </div>
    </div>






    <div class="divide">&nbsp;</div>
<div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="bán nhà hẻm 951 hương lộ 2" href="https://batdongsan.com.vn/tags/ban/ban-nha-hem-951-huong-lo-2">bán nhà hẻm 951 hương lộ 2</a></li>    <li><a title="mua bán đất giá rẻ hải phòng" href="https://batdongsan.com.vn/tags/ban/mua-ban-dat-gia-re-hai-phong">mua bán đất giá rẻ hải phòng</a></li>    <li><a title="Bán nhà xưởng Bến Cát" href="https://batdongsan.com.vn/tags/ban/ban-nha-xuong-ben-cat">Bán nhà xưởng Bến Cát</a></li>    <li><a title="Bán nhà xưởng khu công nghiệp Sóng Thần" href="https://batdongsan.com.vn/tags/ban/ban-nha-xuong-khu-cong-nghiep-song-than">Bán nhà xưởng khu công nghiệp Sóng Thần</a></li>    <li><a title="Bán nhà xưởng Tân Uyên" href="https://batdongsan.com.vn/tags/ban/ban-nha-xuong-tan-uyen">Bán nhà xưởng Tân Uyên</a></li>    <li><a title="Bán kho Quận 12" href="https://batdongsan.com.vn/tags/ban/ban-kho-quan-12">Bán kho Quận 12</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
    <div class="product-seo-text">
        <strong>Batdongsan.com.vn</strong> mang đến kênh thông tin số 1 Việt Nam về loại hình bất động sản <strong>đất nhà kho, xưởng sản xuất, đất xây dựng</strong> làm kho xưởng tại Việt Nam. 
                                Với hàng nghìn tin rao mỗi ngày được cập nhật trên Batdongsan.com.vn, chúng tôi mang đến một nguồn thông tin cực lớn, 
                                giúp bạn có thêm nhiều thông tin tham khảo về loại hình bất động sản đang quan tâm. Đáp ứng mọi nhu cầu mua bán, 
                                sang nhượng kho xưởng của các nhà đầu tư trong khu vực Việt Nam từ diện tích, vị trí, loại hình hợp đồng... Batdongsan.com.vn 
                                hỗ trợ mọi thắc mắc của bạn 24/7, giúp việc <strong>mua bán kho, nhà xưởng</strong> nhanh nhất và thuận tiện nhất.
    </div>
<form id="productListBinnova" method="post">
    <input id="hashAlias" type="hidden" value="ed7e393d29f15f75061c138a71d7b57431a49c11b15889b3234069accce9593c">
</form>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
            var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                model: {
                    typeOfProduct: 38,
                    categoryId: 45,
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
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/-1/2/-1/-1" title="Bán kho, nhà xưởng Việt Nam giá 500 - 800 triệu">500 - 800 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/-1/3/-1/-1" title="Bán kho, nhà xưởng Việt Nam giá 800 triệu - 1 tỷ">800 triệu - 1 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/-1/4/-1/-1" title="Bán kho, nhà xưởng Việt Nam giá 1 - 2 tỷ">1 - 2 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/-1/5/-1/-1" title="Bán kho, nhà xưởng Việt Nam giá 2 - 3 tỷ">2 - 3 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/-1/6/-1/-1" title="Bán kho, nhà xưởng Việt Nam giá 3 - 5 tỷ">3 - 5 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/-1/7/-1/-1" title="Bán kho, nhà xưởng Việt Nam giá 5 - 7 tỷ">5 - 7 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/-1/8/-1/-1" title="Bán kho, nhà xưởng Việt Nam giá 7 - 10 tỷ">7 - 10 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/-1/9/-1/-1" title="Bán kho, nhà xưởng Việt Nam giá 10 - 20 tỷ">10 - 20 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/-1/10/-1/-1" title="Bán kho, nhà xưởng Việt Nam giá 20 - 30 tỷ">20 - 30 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/-1/11/-1/-1" title="Bán kho, nhà xưởng Việt Nam giá &gt; 30 tỷ">&gt; 30 tỷ</a></li>
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
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/1/-1/-1/-1" title="Bán kho, nhà xưởng Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/2/-1/-1/-1" title="Bán kho, nhà xưởng Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/3/-1/-1/-1" title="Bán kho, nhà xưởng Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/4/-1/-1/-1" title="Bán kho, nhà xưởng Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/5/-1/-1/-1" title="Bán kho, nhà xưởng Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/6/-1/-1/-1" title="Bán kho, nhà xưởng Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/7/-1/-1/-1" title="Bán kho, nhà xưởng Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/8/-1/-1/-1" title="Bán kho, nhà xưởng Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/9/-1/-1/-1" title="Bán kho, nhà xưởng Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-kho-nha-xuong/10/-1/-1/-1" title="Bán kho, nhà xưởng Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
        <h2 class="box-title">Bán kho, nhà xưởng</h2>

        <div class="box-content link-hover-blue">
            <ul>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-tp-hcm" title="Bán kho, nhà xưởng tại Hồ Chí Minh">
                                Hồ Chí Minh (224)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-binh-duong" title="Bán kho, nhà xưởng tại Bình Dương">
                                Bình Dương (92)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-ha-noi" title="Bán kho, nhà xưởng tại Hà Nội">
                                Hà Nội (86)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-long-an" title="Bán kho, nhà xưởng tại Long An">
                                Long An (47)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-dong-nai" title="Bán kho, nhà xưởng tại Đồng Nai">
                                Đồng Nai (42)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-binh-phuoc" title="Bán kho, nhà xưởng tại Bình Phước">
                                Bình Phước (5)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-da-nang" title="Bán kho, nhà xưởng tại Đà Nẵng">
                                Đà Nẵng (13)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-hai-duong" title="Bán kho, nhà xưởng tại Hải Dương">
                                Hải Dương (3)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-binh-thuan" title="Bán kho, nhà xưởng tại Bình Thuận  ">
                                Bình Thuận   (3)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-ba-ria-vung-tau" title="Bán kho, nhà xưởng tại Bà Rịa Vũng Tàu">
                                Bà Rịa Vũng Tàu (7)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-bac-ninh" title="Bán kho, nhà xưởng tại Bắc Ninh">
                                Bắc Ninh (7)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-vinh-phuc" title="Bán kho, nhà xưởng tại Vĩnh Phúc">
                                Vĩnh Phúc (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-hai-phong" title="Bán kho, nhà xưởng tại Hải Phòng">
                                Hải Phòng (8)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-tien-giang" title="Bán kho, nhà xưởng tại Tiền Giang">
                                Tiền Giang (4)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-tay-ninh" title="Bán kho, nhà xưởng tại Tây Ninh">
                                Tây Ninh (3)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-nghe-an" title="Bán kho, nhà xưởng tại Nghệ An">
                                Nghệ An (4)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-bac-giang" title="Bán kho, nhà xưởng tại Bắc Giang">
                                Bắc Giang (6)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-dong-thap" title="Bán kho, nhà xưởng tại Đồng Tháp">
                                Đồng Tháp (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-gia-lai" title="Bán kho, nhà xưởng tại Gia Lai">
                                Gia Lai (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-hung-yen" title="Bán kho, nhà xưởng tại Hưng Yên">
                                Hưng Yên (15)
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
            