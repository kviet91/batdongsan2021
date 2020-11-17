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
                <div class="custom-value hasvalue">Trang trại, khu nghỉ dưỡng</div>
            </div>
            <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="44">
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
                                    <li vl="44"><span class="active">Trang trại, khu nghỉ dưỡng</span></li>
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
                        <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                        <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                categoryId: 44,
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
    <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong" level="1" title="Bán trang trại, khu nghỉ dưỡng tại Việt Nam">Bán</a><span>/</span><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong" level="2" title="Bán trang trại, khu nghỉ dưỡng tại Việt Nam">Trang trại, khu nghỉ dưỡng trên toàn quốc</a>
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
    <h1>Bán trang trại, khu nghỉ dưỡng tại Việt Nam</h1>
        <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">449</span> bất động sản.</div>
    

</div>
    <div class="product-search-most mar-top-8 mar-bot-8">
        <div class="box-title">Các khu vực, địa điểm nổi bật</div>
        <ul class="clearfix link-hover-blue">
                <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-hoa-binh">Bán trang trại Hòa Bình</a></li>
                <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-quan-9">Bán trang trại Quận 9</a></li>
                <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-long-khanh-dna">Bán trang trại Long Khánh</a></li>
                <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-trang-bom-dna">Bán trang trại Trảng Bom</a></li>
                <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-dong-nai">Bán trang trại Đồng Nai</a></li>
                <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-hoa-binh">Bán trang trại Hòa Bình</a></li>
        </ul>
    </div>

    <div class="product-nav-bar pad-top-8 clearfix">
        <ul class="ul-tab fl mar-right-16">
            <li class="list-display actived">Danh sách</li>
            <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
            <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-ban-trang-trai-khu-nghi-duong">Bản đồ</a></li>
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
            <div class="vip1 product-item clearfix" uid="1282152">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-my-binh-xa-my-binh-1/ban-biet-thu-vuon-long-an-cach-ql1a-chi-2km-pr27731096" title="Bán biệt thự vườn nghỉ dưỡng Long An - cách QL1A chỉ 2km" onclick="">
                        <img class="product-avatar-img" alt="Bán biệt thự vườn nghỉ dưỡng Long An - cách QL1A chỉ 2km" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201110090100-f7f7_wm.jpg" is-lazy-image="true" lazy-id="0">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">20</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-my-binh-xa-my-binh-1/ban-biet-thu-vuon-long-an-cach-ql1a-chi-2km-pr27731096" title="Bán biệt thự vườn nghỉ dưỡng Long An - cách QL1A chỉ 2km" class="vipOne product-link">
                            BÁN BIỆT THỰ VƯỜN NGHỈ DƯỠNG LONG AN - CÁCH QL1A CHỈ 2KM
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">12.5 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">4600 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tân Trụ, Long An</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cần bán khu đất biệt thự vườn nghỉ dưỡng rộng 4600 m2 gồm: - 800m2 đất thổ cư. - 3600m2 đất trồng cây.- Ngay sau nhà là Rạch Cầu Giáo, chiều ngang rộng 30m. Bên hông là con mương đào nhỏ, r
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
                                <i class="iconSave" data-productid="27731096" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n biệt thự vườn nghỉ dưỡng Long An - c&amp;#225;ch QL1A chỉ 2km&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110090100-f7f7_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110090100-f7f7_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán biệt thự vườn nghỉ dưỡng Long An - cách QL1A chỉ 2km" data-price="12.5 tỷ" data-area="4600 m²" data-pricesort="12500000000" data-areasort="4600" data-room="0" data-toilets="0" data-address="Tân Trụ, Long An" data-description="Chính chủ cần bán khu đất biệt thự vườn nghỉ dưỡng rộng 4600 m2 gồm: - 800m2 đất thổ cư. - 3600m2 đất trồng cây.- Ngay sau nhà là Rạch Cầu Giáo, chiều ngang rộng 30m. Bên hông là con mương đào nhỏ, r" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 09:51:17" data-contactname="Trần Lâm Quốc Bảo" data-contactmobile="0985648664" data-url="/ban-trang-trai-khu-nghi-duong-duong-my-binh-xa-my-binh-1/ban-biet-thu-vuon-long-an-cach-ql1a-chi-2km-pr27731096" data-totalmedia="20" data-createbyuser="1282152"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1191995">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-lien-xa-xa-cu-yen/can-chuyen-nhuong-khuon-vien-hoan-thien-2880m2-tai-luong-son-hoa-binh-pr27729169" title="Cần chuyển nhượng khuôn viên nghỉ dưỡng hoàn thiện 2880m2, tại Lương Sơn, Hòa Bình" onclick="">
                        <img class="product-avatar-img" alt="Cần chuyển nhượng khuôn viên nghỉ dưỡng hoàn thiện 2880m2, tại Lương Sơn, Hòa Bình" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201110062856-1fe3_wm.jpg" is-lazy-image="true" lazy-id="1">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">9</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-lien-xa-xa-cu-yen/can-chuyen-nhuong-khuon-vien-hoan-thien-2880m2-tai-luong-son-hoa-binh-pr27729169" title="Cần chuyển nhượng khuôn viên nghỉ dưỡng hoàn thiện 2880m2, tại Lương Sơn, Hòa Bình" class="vipOne product-link">
                            CẦN CHUYỂN NHƯỢNG KHUÔN VIÊN NGHỈ DƯỠNG HOÀN THIỆN 2880M2, TẠI LƯƠNG SƠN, HÒA BÌNH
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">2880 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Lương Sơn, Hòa Bình</span>
                    </div>
                    <div class="product-content">
                        Cần chuyển nhượng khuôn viên nghỉ dưỡng hoàn thiện. Diện tích 2880m2 tại Lương Sơn, Hòa Bình. Vị trí đắc địa nằm trên trục đường liên xã 2 làn xe tránh nhau, khu vực có quần thể người Hà Nội nghỉ dưỡ
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
                                <i class="iconSave" data-productid="27729169" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cần chuyển nhượng khu&amp;#244;n vi&amp;#234;n nghỉ dưỡng ho&amp;#224;n thiện 2880m2, tại Lương Sơn, H&amp;#242;a B&amp;#236;nh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110062856-1fe3_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110062856-1fe3_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần chuyển nhượng khuôn viên nghỉ dưỡng hoàn thiện 2880m2, tại Lương Sơn, Hòa Bình" data-price="Giá thỏa thuận" data-area="2880 m²" data-pricesort="0" data-areasort="2880" data-room="3" data-toilets="0" data-address="Lương Sơn, Hòa Bình" data-description="Cần chuyển nhượng khuôn viên nghỉ dưỡng hoàn thiện. Diện tích 2880m2 tại Lương Sơn, Hòa Bình. Vị trí đắc địa nằm trên trục đường liên xã 2 làn xe tránh nhau, khu vực có quần thể người Hà Nội nghỉ dưỡ" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 06:29:40" data-contactname="Nguyễn Văn Phú" data-contactmobile="0979762386" data-url="/ban-trang-trai-khu-nghi-duong-duong-lien-xa-xa-cu-yen/can-chuyen-nhuong-khuon-vien-hoan-thien-2880m2-tai-luong-son-hoa-binh-pr27729169" data-totalmedia="9" data-createbyuser="1191995"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1191995">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-lien-xa-xa-cu-yen/ban-biet-thu-5200m2-dang-kinh-doanh-homestay-tai-luong-son-hoa-binh-pr25856163" title="Bán biệt thự 5200m2 đang kinh doanh homestay tại Lương Sơn, Hòa Bình" onclick="">
                        <img class="product-avatar-img" alt="Bán biệt thự 5200m2 đang kinh doanh homestay tại Lương Sơn, Hòa Bình" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/15/20200615222642-2a87_wm.jpg" is-lazy-image="true" lazy-id="2">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-lien-xa-xa-cu-yen/ban-biet-thu-5200m2-dang-kinh-doanh-homestay-tai-luong-son-hoa-binh-pr25856163" title="Bán biệt thự 5200m2 đang kinh doanh homestay tại Lương Sơn, Hòa Bình" class="vipOne product-link">
                            BÁN BIỆT THỰ 5200M2 ĐANG KINH DOANH HOMESTAY TẠI LƯƠNG SƠN, HÒA BÌNH
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">5200 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Lương Sơn, Hòa Bình</span>
                    </div>
                    <div class="product-content">
                        Bán 5200m2 có 200m2 đất ở còn lại là đất trồng cây lâu năm (đất vườn) hiện tại đã có biệt thự 2 tầng đang kinh doanh homestay. Có đầy đủ các nội thất. Vị trí nằm trong khu quần thể Boca Garden. View 
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
                                <i class="iconSave" data-productid="25856163" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n biệt thự 5200m2 đang kinh doanh homestay tại Lương Sơn, H&amp;#242;a B&amp;#236;nh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/15/20200615222642-2a87_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/06/15/20200615222642-2a87_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán biệt thự 5200m2 đang kinh doanh homestay tại Lương Sơn, Hòa Bình" data-price="Giá thỏa thuận" data-area="5200 m²" data-pricesort="0" data-areasort="5200" data-room="0" data-toilets="0" data-address="Lương Sơn, Hòa Bình" data-description="Bán 5200m2 có 200m2 đất ở còn lại là đất trồng cây lâu năm (đất vườn) hiện tại đã có biệt thự 2 tầng đang kinh doanh homestay. Có đầy đủ các nội thất. Vị trí nằm trong khu quần thể Boca Garden. View " data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 13:50:39" data-contactname="Nguyễn Văn Phú" data-contactmobile="0979762386" data-url="/ban-trang-trai-khu-nghi-duong-duong-lien-xa-xa-cu-yen/ban-biet-thu-5200m2-dang-kinh-doanh-homestay-tai-luong-son-hoa-binh-pr25856163" data-totalmedia="4" data-createbyuser="1191995"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1191995">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-lien-xa-xa-cu-yen/sieu-pham-dat-dep-nhat-luong-son-hoa-binh-dien-tich-11-600m2-pr26737745" title="Siêu phẩm đất nghỉ dưỡng chính chủ đẹp nhất Lương Sơn, Hòa Bình, diện tích 6500m2" onclick="">
                        <img class="product-avatar-img" alt="Siêu phẩm đất nghỉ dưỡng chính chủ đẹp nhất Lương Sơn, Hòa Bình, diện tích 6500m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/20/20200820151225-3ed5_wm.jpg" is-lazy-image="true" lazy-id="3">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">7</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-lien-xa-xa-cu-yen/sieu-pham-dat-dep-nhat-luong-son-hoa-binh-dien-tich-11-600m2-pr26737745" title="Siêu phẩm đất nghỉ dưỡng chính chủ đẹp nhất Lương Sơn, Hòa Bình, diện tích 6500m2" class="vipOne product-link">
                            SIÊU PHẨM ĐẤT NGHỈ DƯỠNG CHÍNH CHỦ ĐẸP NHẤT LƯƠNG SƠN, HÒA BÌNH, DIỆN TÍCH 6500M2
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">6500 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Lương Sơn, Hòa Bình</span>
                    </div>
                    <div class="product-content">
                        Pháp lý: Tổng diện tích 6500m2 trong đó có 200m2 đất ở còn lại đất vườn (đã có sổ đỏ). - Miêu tả chung: Với vị trí đắc địa tọa lạc trên quả đồi thấp, view nhìn ra bốn hướng, cảnh quan thiên nhiên tuy
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
                                <i class="iconSave" data-productid="26737745" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Si&amp;#234;u phẩm đất nghỉ dưỡng ch&amp;#237;nh chủ đẹp nhất Lương Sơn, H&amp;#242;a B&amp;#236;nh, diện t&amp;#237;ch 6500m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/08/20/20200820151225-3ed5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/08/20/20200820151225-3ed5_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Siêu phẩm đất nghỉ dưỡng chính chủ đẹp nhất Lương Sơn, Hòa Bình, diện tích 6500m2" data-price="Giá thỏa thuận" data-area="6500 m²" data-pricesort="0" data-areasort="6500" data-room="0" data-toilets="0" data-address="Lương Sơn, Hòa Bình" data-description="Pháp lý: Tổng diện tích 6500m2 trong đó có 200m2 đất ở còn lại đất vườn (đã có sổ đỏ). - Miêu tả chung: Với vị trí đắc địa tọa lạc trên quả đồi thấp, view nhìn ra bốn hướng, cảnh quan thiên nhiên tuy" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 13:49:54" data-contactname="Nguyễn Văn Phú" data-contactmobile="0979762386" data-url="/ban-trang-trai-khu-nghi-duong-duong-lien-xa-xa-cu-yen/sieu-pham-dat-dep-nhat-luong-son-hoa-binh-dien-tich-11-600m2-pr26737745" data-totalmedia="7" data-createbyuser="1191995"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 vipaddon product-item clearfix" uid="1332376">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-luong-son-hb/ban-gap-4-784m2-dat-tho-cu-view-tuyet-dinh-tai-hoa-binh-pr27775427" title="Bán gấp 4.784m2 đất thổ cư view tuyệt đỉnh tại Lương Sơn, Hòa Bình." onclick="">
                        <img class="product-avatar-img" alt="Bán gấp 4.784m2 đất thổ cư view tuyệt đỉnh tại Lương Sơn, Hòa Bình." error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113090648-4991_wm.jpeg" is-lazy-image="true" lazy-id="4"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113090625-25c1_wm.jpeg" is-lazy-image="true" lazy-id="5"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113090628-0819_wm.jpeg" is-lazy-image="true" lazy-id="6">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">10</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-luong-son-hb/ban-gap-4-784m2-dat-tho-cu-view-tuyet-dinh-tai-hoa-binh-pr27775427" title="Bán gấp 4.784m2 đất thổ cư view tuyệt đỉnh tại Lương Sơn, Hòa Bình." class="vipTwo product-link">
                            BÁN GẤP 4.784M2 ĐẤT THỔ CƯ VIEW TUYỆT ĐỈNH TẠI LƯƠNG SƠN, HÒA BÌNH.
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">4784 m²</span>
                                                <span class="location">Lương Sơn, Hòa Bình</span>
                    </div>
                    <div class="product-content">
                        Bán gấp 4.784m2 đất thổ cư view tuyệt đỉnh tại Lương Sơn, Hòa Bình. - Tổng diện tích 4.784m2 có 100m2 đất ở còn lại là đất vườn (đã có sổ đỏ). - Lô đất có địa thế thoải nhẹ, view núi non tuyệt đẹp, đường ô tô vào tận đất. + Hiện lô đất đã được cải tạo san lấp mặt bằng, có 01 ao cá và đang trồng nhiều cây ăn quả lâu năm. Toàn bộ diện tích đã được phân định ranh giới rõ ràng. + L
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">13/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="trung nguyen">
                                <span class="contact-name">trung nguyen</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0966205816" raw="0966205816">0966 205 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27775427" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n gấp 4.784m2 đất thổ cư view tuyệt đỉnh tại Lương Sơn, H&amp;#242;a B&amp;#236;nh.&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113090648-4991_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113090625-25c1_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113090628-0819_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/13/20201113090648-4991_wm.jpeg" data-vipclass="vip2 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán gấp 4.784m2 đất thổ cư view tuyệt đỉnh tại Lương Sơn, Hòa Bình." data-price="3 tỷ" data-area="4784 m²" data-pricesort="3000000000" data-areasort="4784" data-room="0" data-toilets="0" data-address="Lương Sơn, Hòa Bình" data-description="Bán gấp 4.784m2 đất thổ cư view tuyệt đỉnh tại Lương Sơn, Hòa Bình. - Tổng diện tích 4.784m2 có 100m2 đất ở còn lại là đất vườn (đã có sổ đỏ). - Lô đất có địa thế thoải nhẹ, view núi non tuyệt đẹp, đường ô tô vào tận đất. + Hiện lô đất đã được cải tạo san lấp mặt bằng, có 01 ao cá và đang trồng nhiều cây ăn quả lâu năm. Toàn bộ diện tích đã được phân định ranh giới rõ ràng. + L" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:11:26" data-contactname="trung nguyen" data-contactmobile="0966205816" data-url="/ban-trang-trai-khu-nghi-duong-luong-son-hb/ban-gap-4-784m2-dat-tho-cu-view-tuyet-dinh-tai-hoa-binh-pr27775427" data-totalmedia="10" data-createbyuser="1332376"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 vipaddon product-item clearfix" uid="1332376">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-hoa-binh-hb/chi-voi-2-8-ty-so-huu-ngay-1-4-ha-mieu-ta-chung-s-14-000m2-1-4-ha-ont-400-13600-lnk-pr27775328" title="CHỈ VỚI 2,8 TỶ. SỞ HƯU NGAY 1,4 HA
➡️ Miêu tả chung. 
S=14.000m2. ( 1,4 ha ) ( ONT 400) + (13600 LNK" onclick="">
                        <img class="product-avatar-img" alt="CHỈ VỚI 2,8 TỶ. SỞ HƯU NGAY 1,4 HA
➡️ Miêu tả chung. 
S=14.000m2. ( 1,4 ha ) ( ONT 400) + (13600 LNK" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112182728-9422_wm.jpeg" is-lazy-image="true" lazy-id="7"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112182728-44ed_wm.jpeg" is-lazy-image="true" lazy-id="8"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112182729-ce5d_wm.jpeg" is-lazy-image="true" lazy-id="9">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-hoa-binh-hb/chi-voi-2-8-ty-so-huu-ngay-1-4-ha-mieu-ta-chung-s-14-000m2-1-4-ha-ont-400-13600-lnk-pr27775328" title="CHỈ VỚI 2,8 TỶ. SỞ HƯU NGAY 1,4 HA
➡️ Miêu tả chung. 
S=14.000m2. ( 1,4 ha ) ( ONT 400) + (13600 LNK" class="vipTwo product-link">
                            CHỈ VỚI 2,8 TỶ. SỞ HƯU NGAY 1,4 HA
➡️ MIÊU TẢ CHUNG. 
S=14.000M2. ( 1,4 HA ) ( ONT 400) + (13600 LNK
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">2.8 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">14000 m²</span>
                                                <span class="location">Hòa Bình, Hòa Bình</span>
                    </div>
                    <div class="product-content">
                        CHỈ VỚI 2,8 TỶ. SỞ HƯU NGAY 1,4 HA ➡️ Miêu tả chung.  S=14.000m2. ( 1,4 ha ) ( ONT 400) + (13600m LNK) Địa thế đẹp. Đất có sổ đỏ, pháp lý ranh giới rõ ràng. Gắn liền với mảnh đất là núi non hùng vĩ.... tầm view cao thoáng, cảnh quan thơ mộng vẻ đẹp của sự bình yên.... ➡️ Giao thông thuận lợi xe 29 chỗ vào tận đất..... Nơi đây là sẽ là sự lựa chọn, là điểm đến lý tưởng của các n
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">13/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="trung nguyen">
                                <span class="contact-name">trung nguyen</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0966205816" raw="0966205816">0966 205 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27775328" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;CHỈ VỚI 2,8 TỶ. SỞ HƯU NGAY 1,4 HA
➡️ Mi&amp;#234;u tả chung. 
S=14.000m2. ( 1,4 ha ) ( ONT 400) + (13600 LNK&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112182728-9422_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112182728-44ed_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112182729-ce5d_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/12/20201112182728-9422_wm.jpeg" data-vipclass="vip2 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="CHỈ VỚI 2,8 TỶ. SỞ HƯU NGAY 1,4 HA
➡️ Miêu tả chung. 
S=14.000m2. ( 1,4 ha ) ( ONT 400) + (13600 LNK" data-price="2.8 tỷ" data-area="14000 m²" data-pricesort="2800000000" data-areasort="14000" data-room="0" data-toilets="0" data-address="Hòa Bình, Hòa Bình" data-description="CHỈ VỚI 2,8 TỶ. SỞ HƯU NGAY 1,4 HA ➡️ Miêu tả chung.  S=14.000m2. ( 1,4 ha ) ( ONT 400) + (13600m LNK) Địa thế đẹp. Đất có sổ đỏ, pháp lý ranh giới rõ ràng. Gắn liền với mảnh đất là núi non hùng vĩ.... tầm view cao thoáng, cảnh quan thơ mộng vẻ đẹp của sự bình yên.... ➡️ Giao thông thuận lợi xe 29 chỗ vào tận đất..... Nơi đây là sẽ là sự lựa chọn, là điểm đến lý tưởng của các n" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:05:20" data-contactname="trung nguyen" data-contactmobile="0966205816" data-url="/ban-trang-trai-khu-nghi-duong-hoa-binh-hb/chi-voi-2-8-ty-so-huu-ngay-1-4-ha-mieu-ta-chung-s-14-000m2-1-4-ha-ont-400-13600-lnk-pr27775328" data-totalmedia="6" data-createbyuser="1332376"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 vipaddon product-item clearfix" uid="1229407">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-an-tay-xa-an-tay/nha-vuon-ben-cat-pr26375313" title="Nhà vườn nghỉ dưỡng An Tây - Bến Cát" onclick="">
                        <img class="product-avatar-img" alt="Nhà vườn nghỉ dưỡng An Tây - Bến Cát" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/23/20200723145546-1114_wm.jpg" is-lazy-image="true" lazy-id="10"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/23/20200723145457-da31_wm.jpg" is-lazy-image="true" lazy-id="11"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/23/20200723145521-4f6b_wm.jpg" is-lazy-image="true" lazy-id="12">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">12</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-an-tay-xa-an-tay/nha-vuon-ben-cat-pr26375313" title="Nhà vườn nghỉ dưỡng An Tây - Bến Cát" class="vipFour product-link">
                            NHÀ VƯỜN NGHỈ DƯỠNG AN TÂY - BẾN CÁT
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">46.25 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">14000 m²</span>
                                                <span class="location">Bến Cát, Bình Dương</span>
                    </div>
                    <div class="product-content">
                        Nhà vườn nghỉ dưỡng trên diện tích hơn 14.000m2 (Mặt tiền 250 mét x 57 mét) tại An Tây - Bến Cát - Bình Dương (cách ngã tư Bình Phước - Thủ Đức 35 km).- Nhà cấp 3 (156,25m2) đầy đủ tiện nghi - nội thất cao cấp - nhà mát (50m2) - Quan Âm Các - đã hoàn công tháng 1 năm 2019- Trồng nhiều loại cây trái khác nhau như: Măng cụt - sầu riêng - xoài - bưởi - chôm chôm - cóc - mít - bơ -
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                2 ngày trước
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Thuan Tb">
                                <span class="contact-name">Thuan Tb</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0989025969" raw="0989025969">0989 025 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="26375313" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Nh&amp;#224; vườn nghỉ dưỡng An T&amp;#226;y - Bến C&amp;#225;t&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/23/20200723145546-1114_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/23/20200723145457-da31_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/23/20200723145521-4f6b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/07/23/20200723145546-1114_wm.jpg" data-vipclass="vip2 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Nhà vườn nghỉ dưỡng An Tây - Bến Cát" data-price="46.25 tỷ" data-area="14000 m²" data-pricesort="46250000000" data-areasort="14000" data-room="0" data-toilets="0" data-address="Bến Cát, Bình Dương" data-description="Nhà vườn nghỉ dưỡng trên diện tích hơn 14.000m2 (Mặt tiền 250 mét x 57 mét) tại An Tây - Bến Cát - Bình Dương (cách ngã tư Bình Phước - Thủ Đức 35 km).- Nhà cấp 3 (156,25m2) đầy đủ tiện nghi - nội thất cao cấp - nhà mát (50m2) - Quan Âm Các - đã hoàn công tháng 1 năm 2019- Trồng nhiều loại cây trái khác nhau như: Măng cụt - sầu riêng - xoài - bưởi - chôm chôm - cóc - mít - bơ -" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 13:29:44" data-contactname="Thuan Tb" data-contactmobile="0989025969" data-url="/ban-trang-trai-khu-nghi-duong-duong-an-tay-xa-an-tay/nha-vuon-ben-cat-pr26375313" data-totalmedia="12" data-createbyuser="1229407"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="823616">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-xa-sai-son/ban-huyen-quoc-oai-thanh-pho-ha-noi-pr27576786" title="Bán trang trại xã Sài Sơn, huyện Quốc Oai, thành phố Hà Nội" onclick="">
                        <img class="product-avatar-img" alt="Bán trang trại xã Sài Sơn, huyện Quốc Oai, thành phố Hà Nội" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/28/20201028122153-43db_wm.jpg" is-lazy-image="true" lazy-id="13">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-xa-sai-son/ban-huyen-quoc-oai-thanh-pho-ha-noi-pr27576786" title="Bán trang trại xã Sài Sơn, huyện Quốc Oai, thành phố Hà Nội" class="vipTwo product-link">
                            BÁN TRANG TRẠI XÃ SÀI SƠN, HUYỆN QUỐC OAI, THÀNH PHỐ HÀ NỘI
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.99 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">3859 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quốc Oai, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Bán lô đất có trang trại tại thôn Năm Trại xã Sài Sơn, huyện Quốc Oai, thành phố Hà Nội. Diện tích: 3859m2. Hiện trạng có sẵn hàng rào bao quanh khuôn viên, nhà cấp 4, vườn bưởi đã đến kỳ bói quả, ao
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                2 tuần trước
                                <span class="tooltip-time">28/10/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27576786" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n trang trại x&amp;#227; S&amp;#224;i Sơn, huyện Quốc Oai, th&amp;#224;nh phố H&amp;#224; Nội&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/28/20201028122153-43db_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/28/20201028122153-43db_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán trang trại xã Sài Sơn, huyện Quốc Oai, thành phố Hà Nội" data-price="3.99 tỷ" data-area="3859 m²" data-pricesort="3990000000" data-areasort="3859" data-room="0" data-toilets="0" data-address="Quốc Oai, Hà Nội" data-description="Bán lô đất có trang trại tại thôn Năm Trại xã Sài Sơn, huyện Quốc Oai, thành phố Hà Nội. Diện tích: 3859m2. Hiện trạng có sẵn hàng rào bao quanh khuôn viên, nhà cấp 4, vườn bưởi đã đến kỳ bói quả, ao" data-duration="2 tuần trước" data-updatedtime="28/10/2020" data-datesort="10/28/2020 17:39:19" data-contactname="A.thuận" data-contactmobile="0353364435" data-url="/ban-trang-trai-khu-nghi-duong-xa-sai-son/ban-huyen-quoc-oai-thanh-pho-ha-noi-pr27576786" data-totalmedia="5" data-createbyuser="823616"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 vipaddon product-item clearfix" uid="1363540">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-lien-xa-xa-cu-yen/chinh-chu-can-ban-phan-lo-homtays-dang-kinh-doanh-rat-tot-gia-nao-cung-ban-pr27774849" title="Chính chủ cần bán khu phân lô, nghỉ dưỡng &amp; homtays đang kinh doanh rất tốt. giá nào cũng bán" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần bán khu phân lô, nghỉ dưỡng &amp; homtays đang kinh doanh rất tốt. giá nào cũng bán" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113084537-e218_wm.jpg" is-lazy-image="true" lazy-id="14"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113084414-4c9b_wm.jpg" is-lazy-image="true" lazy-id="15"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113084450-afe8_wm.jpg" is-lazy-image="true" lazy-id="16">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-lien-xa-xa-cu-yen/chinh-chu-can-ban-phan-lo-homtays-dang-kinh-doanh-rat-tot-gia-nao-cung-ban-pr27774849" title="Chính chủ cần bán khu phân lô, nghỉ dưỡng &amp; homtays đang kinh doanh rất tốt. giá nào cũng bán" class="vipThree product-link">
                            Chính chủ cần bán khu phân lô, nghỉ dưỡng &amp; homtays đang kinh doanh rất tốt. giá nào cũng bán
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">21000 m²</span>
                                                <span class="location">Lương Sơn, Hòa Bình</span>
                    </div>
                    <div class="product-content">
                        Do nhu cầu chuyển đổi nơi ở cần tìm chủ mới cho khu phân lô, nghỉ dưỡng &amp; homtays đang kinh doanh rất tốt
 + Diện tích 21.000m. đất ở 3.300m
 + Đã xây 12 căn biệt thự full nội thất cao cấp đang cho thuê.
 + Tiện ích, 2 phòng massage, phòng karaoke, bể bơi vô cực, nhà hàng 400m, khu vui chơi trẻ em. và thể thao.
 + Đã phân ra hơn 30 lô sổ đỏ đất ở và đất vườn
 + hạ tầng đường gi
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm nay
                                <span class="tooltip-time">13/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Lê Văn Thực">
                                <span class="contact-name">Lê Văn Thực</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0333305454" raw="0333305454">0333 305 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27774849" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần b&amp;#225;n khu ph&amp;#226;n l&amp;#244;, nghỉ dưỡng &amp;amp; homtays đang kinh doanh rất tốt. gi&amp;#225; n&amp;#224;o cũng b&amp;#225;n&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113084537-e218_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113084414-4c9b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113084450-afe8_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/13/20201113084537-e218_wm.jpg" data-vipclass="vip3 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần bán khu phân lô, nghỉ dưỡng &amp; homtays đang kinh doanh rất tốt. giá nào cũng bán" data-price="Giá thỏa thuận" data-area="21000 m²" data-pricesort="0" data-areasort="21000" data-room="0" data-toilets="0" data-address="Lương Sơn, Hòa Bình" data-description="Do nhu cầu chuyển đổi nơi ở cần tìm chủ mới cho khu phân lô, nghỉ dưỡng &amp; homtays đang kinh doanh rất tốt
 + Diện tích 21.000m. đất ở 3.300m
 + Đã xây 12 căn biệt thự full nội thất cao cấp đang cho thuê.
 + Tiện ích, 2 phòng massage, phòng karaoke, bể bơi vô cực, nhà hàng 400m, khu vui chơi trẻ em. và thể thao.
 + Đã phân ra hơn 30 lô sổ đỏ đất ở và đất vườn
 + hạ tầng đường gi" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 08:49:21" data-contactname="Lê Văn Thực" data-contactmobile="0333305454" data-url="/ban-trang-trai-khu-nghi-duong-duong-lien-xa-xa-cu-yen/chinh-chu-can-ban-phan-lo-homtays-dang-kinh-doanh-rat-tot-gia-nao-cung-ban-pr27774849" data-totalmedia="8" data-createbyuser="1363540"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 vipaddon product-item clearfix" uid="696934">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-dt-716-xa-hoa-thang-1/ban-lo-dat-2000m2-view-bien-gia-5-6-ty-mt-dt716-sat-novaworl-lh-0932611897-pr27769626" title="BÁN LÔ ĐẤT NGHỈ DƯỠNG 2000M2 VIEW BIỂN GIÁ 5,6 TỶ MT ĐT716 SÁT NOVAWORL HÒA THẮNG LH: 0932611897" onclick="">
                        <img class="product-avatar-img" alt="BÁN LÔ ĐẤT NGHỈ DƯỠNG 2000M2 VIEW BIỂN GIÁ 5,6 TỶ MT ĐT716 SÁT NOVAWORL HÒA THẮNG LH: 0932611897" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112153535-ec1a_wm.jpg" is-lazy-image="true" lazy-id="17"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112153542-fa88_wm.jpg" is-lazy-image="true" lazy-id="18"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112153556-0652_wm.jpg" is-lazy-image="true" lazy-id="19">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-dt-716-xa-hoa-thang-1/ban-lo-dat-2000m2-view-bien-gia-5-6-ty-mt-dt716-sat-novaworl-lh-0932611897-pr27769626" title="BÁN LÔ ĐẤT NGHỈ DƯỠNG 2000M2 VIEW BIỂN GIÁ 5,6 TỶ MT ĐT716 SÁT NOVAWORL HÒA THẮNG LH: 0932611***" class="vipThree product-link" style="overflow: visible;">
                            BÁN LÔ ĐẤT NGHỈ DƯỠNG 2000M2 VIEW BIỂN GIÁ 5,6 TỶ MT ĐT716 SÁT NOVAWORL HÒA THẮNG LH: <span class="hidden-mobile m-on-title" raw="0932611897">0932611***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">5.6 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">2000 m²</span>
                                                <span class="location">Bắc Bình, Bình Thuận  </span>
                    </div>
                    <div class="product-content">
                        Tôi đang cần bán gấp lô đất nghỉ dưỡng mặt tiền ĐT 716 view biển diện tích 2.000m2 ở xã Hoà Thắng, huyện Bắc Bình, tỉnh Bình Thuận cần Sang nhượng. - Đất và dự án tại các khu vực: + Ven hồ Bàu Trắng, Bàu Sen thôn Hồng Lâm. + Ven biển thuộc thôn Hồng Chính, Hồng Hải, Hồng Thắng. + Hai Bên đường đẹp nhất Việt Nam: Hoà Thắng - Hoà Phú. + Hai bên đường Tỉnh Lộ 715, 716 Và các cung 
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                Hôm qua
                                <span class="tooltip-time">12/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Lê Thị Thùy Tiên">
                                <span class="contact-name">Lê Thị Thùy Tiên</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0932611897" raw="0932611897">0932 611 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27769626" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#193;N L&amp;#212; ĐẤT NGHỈ DƯỠNG 2000M2 VIEW BIỂN GI&amp;#193; 5,6 TỶ MT ĐT716 S&amp;#193;T NOVAWORL H&amp;#210;A THẮNG LH: 0932611897&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112153535-ec1a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112153542-fa88_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/12/20201112153556-0652_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/12/20201112153535-ec1a_wm.jpg" data-vipclass="vip3 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="BÁN LÔ ĐẤT NGHỈ DƯỠNG 2000M2 VIEW BIỂN GIÁ 5,6 TỶ MT ĐT716 SÁT NOVAWORL HÒA THẮNG LH: 0932611897" data-price="5.6 tỷ" data-area="2000 m²" data-pricesort="5600000000" data-areasort="2000" data-room="0" data-toilets="0" data-address="Bắc Bình, Bình Thuận  " data-description="Tôi đang cần bán gấp lô đất nghỉ dưỡng mặt tiền ĐT 716 view biển diện tích 2.000m2 ở xã Hoà Thắng, huyện Bắc Bình, tỉnh Bình Thuận cần Sang nhượng. - Đất và dự án tại các khu vực: + Ven hồ Bàu Trắng, Bàu Sen thôn Hồng Lâm. + Ven biển thuộc thôn Hồng Chính, Hồng Hải, Hồng Thắng. + Hai Bên đường đẹp nhất Việt Nam: Hoà Thắng - Hoà Phú. + Hai bên đường Tỉnh Lộ 715, 716 Và các cung " data-duration="Hôm qua" data-updatedtime="12/11/2020" data-datesort="11/12/2020 15:39:33" data-contactname="Lê Thị Thùy Tiên" data-contactmobile="0932611897" data-url="/ban-trang-trai-khu-nghi-duong-duong-dt-716-xa-hoa-thang-1/ban-lo-dat-2000m2-view-bien-gia-5-6-ty-mt-dt716-sat-novaworl-lh-0932611897-pr27769626" data-totalmedia="4" data-createbyuser="696934"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="1363705">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-an-son-1-xa-an-son-1/chinh-chu-c-b-nhh-vuon-tp-thu-binh-gia-tot-nhat-vuc-pr27651530" title="Chính chủ cần bán nhanh khu vườn nghỉ dưỡng TP. Thuận An, Bình Dương - Giá tốt nhất khu vực" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần bán nhanh khu vườn nghỉ dưỡng TP. Thuận An, Bình Dương - Giá tốt nhất khu vực" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/20201103193218-0ed0_wm.jpg" is-lazy-image="true" lazy-id="20">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">11</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-an-son-1-xa-an-son-1/chinh-chu-c-b-nhh-vuon-tp-thu-binh-gia-tot-nhat-vuc-pr27651530" title="Chính chủ cần bán nhanh khu vườn nghỉ dưỡng TP. Thuận An, Bình Dương - Giá tốt nhất khu vực" class="vipThree product-link">
                            Chính chủ cần bán nhanh khu vườn nghỉ dưỡng TP. Thuận An, Bình Dương - Giá tốt nhất khu vực
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">15 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">2369 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thuận An, Bình Dương</span>
                    </div>
                    <div class="product-content">
                        - Chính chủ cần bán nhanh khu vườn nghỉ dưỡng ở ngoại ô thành phố Thuận An, tỉnh Bình Dương. Vườn được thiết kế theo phong cách rất hiện đại với diện tích hơn 2300m2 trong đó có 300m2 đất thổ cư. - V
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
                                <i class="iconSave" data-productid="27651530" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần b&amp;#225;n nhanh khu vườn nghỉ dưỡng TP. Thuận An, B&amp;#236;nh Dương - Gi&amp;#225; tốt nhất khu vực&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/20201103193218-0ed0_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/03/20201103193218-0ed0_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần bán nhanh khu vườn nghỉ dưỡng TP. Thuận An, Bình Dương - Giá tốt nhất khu vực" data-price="15 tỷ" data-area="2369 m²" data-pricesort="15000000000" data-areasort="2369" data-room="0" data-toilets="0" data-address="Thuận An, Bình Dương" data-description="- Chính chủ cần bán nhanh khu vườn nghỉ dưỡng ở ngoại ô thành phố Thuận An, tỉnh Bình Dương. Vườn được thiết kế theo phong cách rất hiện đại với diện tích hơn 2300m2 trong đó có 300m2 đất thổ cư. - V" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 14:37:24" data-contactname="Phạm Tấn Công" data-contactmobile="0929626457" data-url="/ban-trang-trai-khu-nghi-duong-duong-an-son-1-xa-an-son-1/chinh-chu-c-b-nhh-vuon-tp-thu-binh-gia-tot-nhat-vuc-pr27651530" data-totalmedia="11" data-createbyuser="1363705"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 vipaddon product-item clearfix" uid="1079154">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-xa-tan-linh/ban-vo-nha-vuon-36-m-mat-tien-45-chieu-sau-san-nha-dep-pr27742233" title="Bán nhà vườn 36m mặt tiền 45m, chiều sâu sẵn nhà đẹp" onclick="">
                        <img class="product-avatar-img" alt="Bán nhà vườn 36m mặt tiền 45m, chiều sâu sẵn nhà đẹp" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110180147-a97a_wm.jpeg" is-lazy-image="true" lazy-id="21"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110180156-4b8b_wm.jpeg" is-lazy-image="true" lazy-id="22"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110180204-5b07_wm.jpeg" is-lazy-image="true" lazy-id="23">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-xa-tan-linh/ban-vo-nha-vuon-36-m-mat-tien-45-chieu-sau-san-nha-dep-pr27742233" title="Bán nhà vườn 36m mặt tiền 45m, chiều sâu sẵn nhà đẹp" class="vipThree product-link">
                            Bán nhà vườn 36m mặt tiền 45m, chiều sâu sẵn nhà đẹp
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">1620 m²</span>
                                                <span class="location">Ba Vì, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Cần bán nguyên khu đã xây dựng. Nhà sàn tiểu cảnh bể bơi mặt đường Ao Vua bán tất những gì có trên đất cụ thể thông tin liên hệ trực tiếp.
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                2 ngày trước
                                <span class="tooltip-time">11/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Kien Dinh">
                                <span class="contact-name">Kien Dinh</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0911529371" raw="0911529371">0911 529 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27742233" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; vườn 36m mặt tiền 45m, chiều s&amp;#226;u sẵn nh&amp;#224; đẹp&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110180147-a97a_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110180156-4b8b_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110180204-5b07_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/10/20201110180147-a97a_wm.jpeg" data-vipclass="vip3 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà vườn 36m mặt tiền 45m, chiều sâu sẵn nhà đẹp" data-price="Giá thỏa thuận" data-area="1620 m²" data-pricesort="0" data-areasort="1620" data-room="0" data-toilets="0" data-address="Ba Vì, Hà Nội" data-description="Cần bán nguyên khu đã xây dựng. Nhà sàn tiểu cảnh bể bơi mặt đường Ao Vua bán tất những gì có trên đất cụ thể thông tin liên hệ trực tiếp." data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 07:48:26" data-contactname="Kien Dinh" data-contactmobile="0911529371" data-url="/ban-trang-trai-khu-nghi-duong-xa-tan-linh/ban-vo-nha-vuon-36-m-mat-tien-45-chieu-sau-san-nha-dep-pr27742233" data-totalmedia="5" data-createbyuser="1079154"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="125281">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-21a-xa-hoa-thach/nhuong-biet-thu-nha-vuon-n-thien-dep-dt-9700m2-tai-quoc-oai-lh-0988168636-pr27731950" title="Nhượng biệt thự nhà vườn hoàn thiện đẹp DT 9072m2 tại Hoà Thạch, Quốc Oai, LH: 0988168636" onclick="">
                        <img class="product-avatar-img" alt="Nhượng biệt thự nhà vườn hoàn thiện đẹp DT 9072m2 tại Hoà Thạch, Quốc Oai, LH: 0988168636" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110092423-bed0_wm.jpg" is-lazy-image="true" lazy-id="24">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">14</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-21a-xa-hoa-thach/nhuong-biet-thu-nha-vuon-n-thien-dep-dt-9700m2-tai-quoc-oai-lh-0988168636-pr27731950" title="Nhượng biệt thự nhà vườn hoàn thiện đẹp DT 9072m2 tại Hoà Thạch, Quốc Oai, LH: 0988168***" class="vipThree product-link" style="overflow: visible;">
                            Nhượng biệt thự nhà vườn hoàn thiện đẹp DT 9072m2 tại Hoà Thạch, Quốc Oai, LH: <span class="hidden-mobile m-on-title" raw="0988168636">0988168***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">25 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">9702 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quốc Oai, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Cần nhượng biệt thự nhà vườn hoàn thiện đẹp tại xã Hòa Thạch, Quốc Oai, tổng diện tích 9072m2. Vị trí cách trung tâm Hoà Lạc chỉ 3km, mặt đường 120m, có biệt thự, bể bơi, ao cá, non bộ tiểu cảnh, sân
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
                                <i class="iconSave" data-productid="27731950" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Nhượng biệt thự nh&amp;#224; vườn ho&amp;#224;n thiện đẹp DT 9072m2 tại Ho&amp;#224; Thạch, Quốc Oai, LH: 0988168636&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110092423-bed0_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110092423-bed0_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Nhượng biệt thự nhà vườn hoàn thiện đẹp DT 9072m2 tại Hoà Thạch, Quốc Oai, LH: 0988168636" data-price="25 tỷ" data-area="9702 m²" data-pricesort="25000000000" data-areasort="9702" data-room="7" data-toilets="5" data-address="Quốc Oai, Hà Nội" data-description="Cần nhượng biệt thự nhà vườn hoàn thiện đẹp tại xã Hòa Thạch, Quốc Oai, tổng diện tích 9072m2. Vị trí cách trung tâm Hoà Lạc chỉ 3km, mặt đường 120m, có biệt thự, bể bơi, ao cá, non bộ tiểu cảnh, sân" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 09:32:53" data-contactname="Hoàng Văn Hưng" data-contactmobile="0988168636" data-url="/ban-trang-trai-khu-nghi-duong-duong-21a-xa-hoa-thach/nhuong-biet-thu-nha-vuon-n-thien-dep-dt-9700m2-tai-quoc-oai-lh-0988168636-pr27731950" data-totalmedia="14" data-createbyuser="125281"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="1203812">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-xa-suoi-rao/ban-mat-tien-ho-lon-tai-chau-duc-lh-0986340312-pr24480293" title="Bán khu nghỉ dưỡng mặt tiền hồ lớn tại Suối Rao - Châu Đức. LH: 0986340312" onclick="">
                        <img class="product-avatar-img" alt="Bán khu nghỉ dưỡng mặt tiền hồ lớn tại Suối Rao - Châu Đức. LH: 0986340312" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/09/23/PcvAOz7g/20200923172235-72d9_wm.jpg" is-lazy-image="true" lazy-id="25">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-xa-suoi-rao/ban-mat-tien-ho-lon-tai-chau-duc-lh-0986340312-pr24480293" title="Bán khu nghỉ dưỡng mặt tiền hồ lớn tại Suối Rao - Châu Đức. LH: 0986340***" class="vipThree product-link" style="overflow: visible;">
                            Bán khu nghỉ dưỡng mặt tiền hồ lớn tại Suối Rao - Châu Đức. LH: <span class="hidden-mobile m-on-title" raw="0986340312">0986340***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">6.2 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">5000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Châu Đức, Bà Rịa Vũng Tàu</span>
                    </div>
                    <div class="product-content">
                        Bán khu nghỉ dưỡng mặt tiền hồ lớn tại Suối Rao - Châu Đức. Bán khu phức hợp homestay - Phim trường Hosura Hill. - Cần bán hoặc cho thuê đối với khách có nhu cầu kinh doanh homestay, nơi quay phim ch
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
                                <i class="iconSave" data-productid="24480293" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n khu nghỉ dưỡng mặt tiền hồ lớn tại Suối Rao - Ch&amp;#226;u Đức. LH: 0986340312&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/23/PcvAOz7g/20200923172235-72d9_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/23/PcvAOz7g/20200923172235-72d9_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán khu nghỉ dưỡng mặt tiền hồ lớn tại Suối Rao - Châu Đức. LH: 0986340312" data-price="6.2 tỷ" data-area="5000 m²" data-pricesort="6200000000" data-areasort="5000" data-room="0" data-toilets="0" data-address="Châu Đức, Bà Rịa Vũng Tàu" data-description="Bán khu nghỉ dưỡng mặt tiền hồ lớn tại Suối Rao - Châu Đức. Bán khu phức hợp homestay - Phim trường Hosura Hill. - Cần bán hoặc cho thuê đối với khách có nhu cầu kinh doanh homestay, nơi quay phim ch" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 09:03:22" data-contactname="Tam Dang" data-contactmobile="0986340312" data-url="/ban-trang-trai-khu-nghi-duong-xa-suoi-rao/ban-mat-tien-ho-lon-tai-chau-duc-lh-0986340312-pr24480293" data-totalmedia="6" data-createbyuser="1203812"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 vipaddon product-item clearfix" uid="671843">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-xa-lien-son-3/ban-gap-6000m2-bam-ho-to-tai-dong-suong-luong-saqnx-nha-cap-4-vuon-cay-an-qua-view-cao-pr27636551" title="Bán gấp 6000m2 bám hồ to tại Đồng Sương Liên Sơn Lương Sơn, sẵn nhà cấp 4 vườn cây ăn quả, view cao" onclick="">
                        <img class="product-avatar-img" alt="Bán gấp 6000m2 bám hồ to tại Đồng Sương Liên Sơn Lương Sơn, sẵn nhà cấp 4 vườn cây ăn quả, view cao" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102205017-661b_wm.jpg" is-lazy-image="true" lazy-id="26"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102205020-89dd_wm.jpg" is-lazy-image="true" lazy-id="27"><img error-image-src="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102205029-7d71_wm.jpg" is-lazy-image="true" lazy-id="28">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-xa-lien-son-3/ban-gap-6000m2-bam-ho-to-tai-dong-suong-luong-saqnx-nha-cap-4-vuon-cay-an-qua-view-cao-pr27636551" title="Bán gấp 6000m2 bám hồ to tại Đồng Sương Liên Sơn Lương Sơn, sẵn nhà cấp 4 vườn cây ăn quả, view cao" class="vipThree product-link">
                            Bán gấp 6000m2 bám hồ to tại Đồng Sương Liên Sơn Lương Sơn, sẵn nhà cấp 4 vườn cây ăn quả, view cao
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">6000 m²</span>
                                                <span class="location">Lương Sơn, Hòa Bình</span>
                    </div>
                    <div class="product-content">
                        Bán gấp 6000m2 sổ nông trường bám hồ to tại Đồng Sương, Liên Sơn, Lương Sơn, Hòa Bình sẵn nhà cấp 4 vườn cây ăn quả. Phù hợp làm nghỉ dưỡng hoặc đầu tư sinh lời. Thế đất cao thoáng hiện trên đất đã trồng nhiều bưởi diễn, nhãn, na, xưa đặc biệt có một đồi chè các loại cây đã cho thu hoạch. Lô đất chỉ cách đường QL21 vào chừng 2km cách đường bê tông chỉ 200m đường to ô tô vào tận
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                4 ngày trước
                                <span class="tooltip-time">09/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact" name="Dương Minh Dũng">
                                <span class="contact-name">Dương Minh Dũng</span>
                                <span class="hidden-phone contact-phone btn-blue-7" mobile="0982567995" raw="0982567995">0982 567 *** · Hiện số</span>
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="27636551" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n gấp 6000m2 b&amp;#225;m hồ to tại Đồng Sương Li&amp;#234;n Sơn Lương Sơn, sẵn nh&amp;#224; cấp 4 vườn c&amp;#226;y ăn quả, view cao&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102205017-661b_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102205020-89dd_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/02/20201102205029-7d71_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/11/02/20201102205017-661b_wm.jpg" data-vipclass="vip3 vipaddon" data-isaddon="true" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán gấp 6000m2 bám hồ to tại Đồng Sương Liên Sơn Lương Sơn, sẵn nhà cấp 4 vườn cây ăn quả, view cao" data-price="Giá thỏa thuận" data-area="6000 m²" data-pricesort="0" data-areasort="6000" data-room="0" data-toilets="0" data-address="Lương Sơn, Hòa Bình" data-description="Bán gấp 6000m2 sổ nông trường bám hồ to tại Đồng Sương, Liên Sơn, Lương Sơn, Hòa Bình sẵn nhà cấp 4 vườn cây ăn quả. Phù hợp làm nghỉ dưỡng hoặc đầu tư sinh lời. Thế đất cao thoáng hiện trên đất đã trồng nhiều bưởi diễn, nhãn, na, xưa đặc biệt có một đồi chè các loại cây đã cho thu hoạch. Lô đất chỉ cách đường QL21 vào chừng 2km cách đường bê tông chỉ 200m đường to ô tô vào tận" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 21:53:51" data-contactname="Dương Minh Dũng" data-contactmobile="0982567995" data-url="/ban-trang-trai-khu-nghi-duong-xa-lien-son-3/ban-gap-6000m2-bam-ho-to-tai-dong-suong-luong-saqnx-nha-cap-4-vuon-cay-an-qua-view-cao-pr27636551" data-totalmedia="8" data-createbyuser="671843"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="39980">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-xa-thanh-trieu/khach-can-ban-homestay-tai-ben-tre-hien-co-12-phong-khai-thac-homestay-4-choi-nghi-pr27609547" title="Khách cần bán homestay tại Bến Tre, hiện có 12 phòng khai thác homestay, 4 chòi nghỉ" onclick="">
                        <img class="product-avatar-img" alt="Khách cần bán homestay tại Bến Tre, hiện có 12 phòng khai thác homestay, 4 chòi nghỉ" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/30/D7NIyyMj/20201030170511-9fb5_wm.jpg" is-lazy-image="true" lazy-id="29">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-xa-thanh-trieu/khach-can-ban-homestay-tai-ben-tre-hien-co-12-phong-khai-thac-homestay-4-choi-nghi-pr27609547" title="Khách cần bán homestay tại Bến Tre, hiện có 12 phòng khai thác homestay, 4 chòi nghỉ" class="vipThree product-link">
                            Khách cần bán homestay tại Bến Tre, hiện có 12 phòng khai thác homestay, 4 chòi nghỉ
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">29 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">14959 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Châu Thành, Bến Tre</span>
                    </div>
                    <div class="product-content">
                        Khách cần bán Homestay tại Bến Tre. DTKV: 14959m2 đất TCLN, hiện có 2.500m2 dừa, hơn 1.000m2 sầu riêng, phần lớn diện tích còn lại trồng cây ăn trái nhiều loại khác cùng vườn rau, ao cá... Hiện có 12
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
                                <i class="iconSave" data-productid="27609547" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Kh&amp;#225;ch cần b&amp;#225;n homestay tại Bến Tre, hiện c&amp;#243; 12 ph&amp;#242;ng khai th&amp;#225;c homestay, 4 ch&amp;#242;i nghỉ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/30/D7NIyyMj/20201030170511-9fb5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/30/D7NIyyMj/20201030170511-9fb5_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Khách cần bán homestay tại Bến Tre, hiện có 12 phòng khai thác homestay, 4 chòi nghỉ" data-price="29 tỷ" data-area="14959 m²" data-pricesort="29000000000" data-areasort="14959" data-room="3" data-toilets="3" data-address="Châu Thành, Bến Tre" data-description="Khách cần bán Homestay tại Bến Tre. DTKV: 14959m2 đất TCLN, hiện có 2.500m2 dừa, hơn 1.000m2 sầu riêng, phần lớn diện tích còn lại trồng cây ăn trái nhiều loại khác cùng vườn rau, ao cá... Hiện có 12" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 15:17:32" data-contactname="Nguyễn Hòa Lê" data-contactmobile="0907894503" data-url="/ban-trang-trai-khu-nghi-duong-xa-thanh-trieu/khach-can-ban-homestay-tai-ben-tre-hien-co-12-phong-khai-thac-homestay-4-choi-nghi-pr27609547" data-totalmedia="4" data-createbyuser="39980"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="1490603">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-44a-xa-phuoc-hung-1/ban-du-lich-thuyen-va-bien-tai-long-dien-ba-ria-vung-tau-lh-0909-280-396-pr27439794" title="Bán khu du lịch thuyền và biển tại Long Điền, Bà Rịa Vũng Tàu  -Lh 0909.280.396" onclick="">
                        <img class="product-avatar-img" alt="Bán khu du lịch thuyền và biển tại Long Điền, Bà Rịa Vũng Tàu  -Lh 0909.280.396" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/16/rVFJvKR2/20201016143506-fbb8_wm.jpg" is-lazy-image="true" lazy-id="30">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">17</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-44a-xa-phuoc-hung-1/ban-du-lich-thuyen-va-bien-tai-long-dien-ba-ria-vung-tau-lh-0909-280-396-pr27439794" title="Bán khu du lịch thuyền và biển tại Long Điền, Bà Rịa Vũng Tàu  -Lh 0909.280.***" class="vipThree product-link" style="overflow: visible;">
                            Bán khu du lịch thuyền và biển tại Long Điền, Bà Rịa Vũng Tàu  -Lh <span class="hidden-mobile m-on-title" raw="0909.280.396">0909.280.***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">145 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">5700 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Long Điền, Bà Rịa Vũng Tàu</span>
                    </div>
                    <div class="product-content">
                        Địa chỉ tại: Đường 44A, tổ 27 Phước Lâm, xã Phước Hưng, Huyện Long Điền, Bà Rịa Vũng Tàu.Diện tích: Tổng diện tích đất 5.700 m2, thực tế sử dụng 7000m2, mặt tiền đường nhựa 40m, mặt tiền biển 62 m.Kh
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
                                <i class="iconSave" data-productid="27439794" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n khu du lịch thuyền v&amp;#224; biển tại Long Điền, B&amp;#224; Rịa Vũng T&amp;#224;u  -Lh 0909.280.396&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/16/rVFJvKR2/20201016143506-fbb8_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/16/rVFJvKR2/20201016143506-fbb8_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán khu du lịch thuyền và biển tại Long Điền, Bà Rịa Vũng Tàu  -Lh 0909.280.396" data-price="145 tỷ" data-area="5700 m²" data-pricesort="145000000000" data-areasort="5700" data-room="0" data-toilets="0" data-address="Long Điền, Bà Rịa Vũng Tàu" data-description="Địa chỉ tại: Đường 44A, tổ 27 Phước Lâm, xã Phước Hưng, Huyện Long Điền, Bà Rịa Vũng Tàu.Diện tích: Tổng diện tích đất 5.700 m2, thực tế sử dụng 7000m2, mặt tiền đường nhựa 40m, mặt tiền biển 62 m.Kh" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 14:04:26" data-contactname="Cao Văn Tuyến" data-contactmobile="0909280396" data-url="/ban-trang-trai-khu-nghi-duong-duong-44a-xa-phuoc-hung-1/ban-du-lich-thuyen-va-bien-tai-long-dien-ba-ria-vung-tau-lh-0909-280-396-pr27439794" data-totalmedia="17" data-createbyuser="1490603"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="1505271">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-xa-cu-yen/ban-tuyet-dep-tai-luong-son-hoa-binh-pr27720049" title="Bán khu nghỉ dưỡng tuyệt đẹp tại Lương Sơn - Hòa Bình" onclick="">
                        <img class="product-avatar-img" alt="Bán khu nghỉ dưỡng tuyệt đẹp tại Lương Sơn - Hòa Bình" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109111644-07e3_wm.jpeg" is-lazy-image="true" lazy-id="31">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">14</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-xa-cu-yen/ban-tuyet-dep-tai-luong-son-hoa-binh-pr27720049" title="Bán khu nghỉ dưỡng tuyệt đẹp tại Lương Sơn - Hòa Bình" class="vipThree product-link">
                            Bán khu nghỉ dưỡng tuyệt đẹp tại Lương Sơn - Hòa Bình
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">6.8 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">2100 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Lương Sơn, Hòa Bình</span>
                    </div>
                    <div class="product-content">
                        Bán khu nghỉ dưỡng diện tích 2100m2. Có 400m2 đất ở. Sẵn biệt thự 2 tầng. Đồ đạc đủ cả, chỉ việc dọn đến ở. Giá cả phải chăng. Khu ở gần ủy ban, trường học, chợ. Thuận tiện giao thông. Giá cả khu 6,8
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
                                <i class="iconSave" data-productid="27720049" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n khu nghỉ dưỡng tuyệt đẹp tại Lương Sơn - H&amp;#242;a B&amp;#236;nh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109111644-07e3_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109111644-07e3_wm.jpeg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán khu nghỉ dưỡng tuyệt đẹp tại Lương Sơn - Hòa Bình" data-price="6.8 tỷ" data-area="2100 m²" data-pricesort="6800000000" data-areasort="2100" data-room="0" data-toilets="0" data-address="Lương Sơn, Hòa Bình" data-description="Bán khu nghỉ dưỡng diện tích 2100m2. Có 400m2 đất ở. Sẵn biệt thự 2 tầng. Đồ đạc đủ cả, chỉ việc dọn đến ở. Giá cả phải chăng. Khu ở gần ủy ban, trường học, chợ. Thuận tiện giao thông. Giá cả khu 6,8" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 11:27:43" data-contactname="Trần Sơn" data-contactmobile="0973722269" data-url="/ban-trang-trai-khu-nghi-duong-xa-cu-yen/ban-tuyet-dep-tai-luong-son-hoa-binh-pr27720049" data-totalmedia="14" data-createbyuser="1505271"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="1046851">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-xa-tay-phong/can-ban-gap-5000m2-dat-co-2400-m2-dat-tho-cu-tai-cao-hoa-binh-pr27624674" title="Cần bán gấp 5000m2 đất có 2400 m2 đất thổ cư tại Cao phong Hòa bình " onclick="">
                        <img class="product-avatar-img" alt="Cần bán gấp 5000m2 đất có 2400 m2 đất thổ cư tại Cao phong Hòa bình " error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/01/20201101225416-a89f_wm.jpg" is-lazy-image="true" lazy-id="32">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-xa-tay-phong/can-ban-gap-5000m2-dat-co-2400-m2-dat-tho-cu-tai-cao-hoa-binh-pr27624674" title="Cần bán gấp 5000m2 đất có 2400 m2 đất thổ cư tại Cao phong Hòa bình " class="vipThree product-link">
                            Cần bán gấp 5000m2 đất có 2400 m2 đất thổ cư tại Cao phong Hòa bình 
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">5000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Cao Phong, Hòa Bình</span>
                    </div>
                    <div class="product-content">
                        - Cần chuyển nhượng 5000 m2 đất thổ cư nhà vườn trong đó có 2400 m2 đất thổ còn lại là đất vườn tại Cao Phong, Hòa Bình. - Thế đất bằng phẳng vuông vắn đã có tường bao xây dựng kiên cố giao thông đi 
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
                                <i class="iconSave" data-productid="27624674" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;C&amp;#226;̀n bán g&amp;#226;́p 5000m2 đ&amp;#226;́t có 2400 m2 đ&amp;#226;́t th&amp;#244;̉ cư tại Cao phong Hòa bình &quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/01/20201101225416-a89f_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/01/20201101225416-a89f_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Cần bán gấp 5000m2 đất có 2400 m2 đất thổ cư tại Cao phong Hòa bình " data-price="Giá thỏa thuận" data-area="5000 m²" data-pricesort="0" data-areasort="5000" data-room="0" data-toilets="0" data-address="Cao Phong, Hòa Bình" data-description="- Cần chuyển nhượng 5000 m2 đất thổ cư nhà vườn trong đó có 2400 m2 đất thổ còn lại là đất vườn tại Cao Phong, Hòa Bình. - Thế đất bằng phẳng vuông vắn đã có tường bao xây dựng kiên cố giao thông đi " data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 09:49:31" data-contactname="Hahuyquan" data-contactmobile="0986667861" data-url="/ban-trang-trai-khu-nghi-duong-xa-tay-phong/can-ban-gap-5000m2-dat-co-2400-m2-dat-tho-cu-tai-cao-hoa-binh-pr27624674" data-totalmedia="8" data-createbyuser="1046851"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="1408154">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-pham-van-dong-phuong-tan-thanh-1/ban-nha-vuon-ao-kinh-pr27711407" title="Bán nhà vườn - ao - Tân Thành, Dương Kinh" onclick="">
                        <img class="product-avatar-img" alt="Bán nhà vườn - ao - Tân Thành, Dương Kinh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108123216-d34f_wm.jpeg" is-lazy-image="true" lazy-id="33">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">11</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-duong-pham-van-dong-phuong-tan-thanh-1/ban-nha-vuon-ao-kinh-pr27711407" title="Bán nhà vườn - ao - Tân Thành, Dương Kinh" class="vipThree product-link">
                            Bán nhà vườn - ao - Tân Thành, Dương Kinh
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.5 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">3800 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Dương Kinh, Hải Phòng</span>
                    </div>
                    <div class="product-content">
                        Bán 3800m2 nhà đất. Đã có tất cả, nhà, ao, vườn toàn cây đắt tiền, tường bao bằng đá, khuôn viên xây mất hơn 2.5 tỷ rồi. Ô tô, container đua nhau trên đường. Ngay ở phường Tân Thành, quận Dương Kinh,
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
                                <i class="iconSave" data-productid="27711407" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; vườn - ao - T&amp;#226;n Th&amp;#224;nh, Dương Kinh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/08/20201108123216-d34f_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/08/20201108123216-d34f_wm.jpeg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán nhà vườn - ao - Tân Thành, Dương Kinh" data-price="3.5 tỷ" data-area="3800 m²" data-pricesort="3500000000" data-areasort="3800" data-room="0" data-toilets="0" data-address="Dương Kinh, Hải Phòng" data-description="Bán 3800m2 nhà đất. Đã có tất cả, nhà, ao, vườn toàn cây đắt tiền, tường bao bằng đá, khuôn viên xây mất hơn 2.5 tỷ rồi. Ô tô, container đua nhau trên đường. Ngay ở phường Tân Thành, quận Dương Kinh," data-duration="5 ngày trước" data-updatedtime="08/11/2020" data-datesort="11/08/2020 12:45:41" data-contactname="Sen Nguyễn" data-contactmobile="0906033556" data-url="/ban-trang-trai-khu-nghi-duong-duong-pham-van-dong-phuong-tan-thanh-1/ban-nha-vuon-ao-kinh-pr27711407" data-totalmedia="11" data-createbyuser="1408154"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-center">
            <div class="pagination">
<a pid="1" class="actived" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong">1</a>
<a pid="2" class="" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/p2">2</a>
<a pid="3" class="" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/p3">3</a>
<a pid="4" class="" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/p4">4</a>
<a pid="5" class="" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/p5">5</a>
<a pid="23" href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/p23"><img src="./assets/image/ic_double_caret_right.png"></a>
</div>

        </div>
    </div>






    <div class="divide">&nbsp;</div>
<div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="Bán trang trại giá rẻ" href="https://batdongsan.com.vn/tags/ban/ban-trang-trai-gia-re">Bán trang trại giá rẻ</a></li>    <li><a title="bán đất đồi giá rẻ" href="https://batdongsan.com.vn/tags/ban/ban-dat-doi-gia-re">bán đất đồi giá rẻ</a></li>    <li><a title="Bán khu nghỉ dưỡng Lương Sơn" href="https://batdongsan.com.vn/tags/ban/ban-khu-nghi-duong-luong-son">Bán khu nghỉ dưỡng Lương Sơn</a></li>    <li><a title="Bán trang trại Hội An" href="https://batdongsan.com.vn/tags/ban/ban-trang-trai-hoi-an">Bán trang trại Hội An</a></li>    <li><a title="Bán khu nghỉ dưỡng Tân Phú" href="https://batdongsan.com.vn/tags/ban/ban-khu-nghi-duong-tan-phu">Bán khu nghỉ dưỡng Tân Phú</a></li>    <li><a title="Bán trang trại Tân Phú" href="https://batdongsan.com.vn/tags/ban/ban-trang-trai-tan-phu">Bán trang trại Tân Phú</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
    <div class="product-seo-text">
        <strong>Batdongsan.com.vn</strong> - kênh thông tin số 1 Việt Nam về <strong>bán trang trại, khu nghỉ dưỡng tại Việt Nam</strong>. 
                                Mang đến kênh thông tin mua bán trang trại, khu nghỉ dưỡng, với các tin đăng được cập nhật liên tục, mang đến nguồn thông tin được nhanh nhất và chính xác nhất. 
                                Giúp người dùng có cái nhìn tổng quan về bất động sản mà mình đang quan tâm và kết nối người bán và người mua thuận lợi nhất. 
                                Mọi loại hình như: Mua bán, sang nhượng <strong>trang trại, khu nghỉ dưỡng</strong> nhanh chóng, tin cậy với đầy đủ giấy tờ pháp lý đều được chúng tôi cung cấp đầy đủ trong các tin đăng bán bất động sản. 
                                Batdongsan.com.vn cam kết cung mang đến nguồn thông tin chính xác và kịp thời nhất giúp bạn đưa ra quyết định mua bán chính xác nhất đối với bất động sản tại <strong>Việt Nam</strong>
    </div>
<form id="productListBinnova" method="post">
    <input id="hashAlias" type="hidden" value="45e9a18f3200db39c598e1fb56fd50e0a509e528aa76cf150f2e35187461d245">
</form>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
            var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                model: {
                    typeOfProduct: 38,
                    categoryId: 44,
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
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/-1/2/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam giá 500 - 800 triệu">500 - 800 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/-1/3/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam giá 800 triệu - 1 tỷ">800 triệu - 1 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/-1/4/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam giá 1 - 2 tỷ">1 - 2 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/-1/5/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam giá 2 - 3 tỷ">2 - 3 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/-1/6/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam giá 3 - 5 tỷ">3 - 5 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/-1/7/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam giá 5 - 7 tỷ">5 - 7 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/-1/8/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam giá 7 - 10 tỷ">7 - 10 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/-1/9/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam giá 10 - 20 tỷ">10 - 20 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/-1/10/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam giá 20 - 30 tỷ">20 - 30 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/-1/11/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam giá &gt; 30 tỷ">&gt; 30 tỷ</a></li>
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
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/1/-1/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/2/-1/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/3/-1/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/4/-1/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/5/-1/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/6/-1/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/7/-1/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/8/-1/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/9/-1/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong/10/-1/-1/-1" title="Bán trang trại, khu nghỉ dưỡng Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
        <h2 class="box-title">Bán trang trại, khu nghỉ dưỡng</h2>

        <div class="box-content link-hover-blue">
            <ul>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-hoa-binh" title="Bán trang trại, khu nghỉ dưỡng tại Hòa Bình">
                                Hòa Bình (88)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-ha-noi" title="Bán trang trại, khu nghỉ dưỡng tại Hà Nội">
                                Hà Nội (82)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-dong-nai" title="Bán trang trại, khu nghỉ dưỡng tại Đồng Nai">
                                Đồng Nai (63)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-ba-ria-vung-tau" title="Bán trang trại, khu nghỉ dưỡng tại Bà Rịa Vũng Tàu">
                                Bà Rịa Vũng Tàu (47)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-lam-dong" title="Bán trang trại, khu nghỉ dưỡng tại Lâm Đồng">
                                Lâm Đồng (29)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-bac-ninh" title="Bán trang trại, khu nghỉ dưỡng tại Bắc Ninh">
                                Bắc Ninh (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-binh-dinh" title="Bán trang trại, khu nghỉ dưỡng tại Bình Định">
                                Bình Định (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-hai-duong" title="Bán trang trại, khu nghỉ dưỡng tại Hải Dương">
                                Hải Dương (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-can-tho" title="Bán trang trại, khu nghỉ dưỡng tại Cần Thơ">
                                Cần Thơ (3)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-quang-nam" title="Bán trang trại, khu nghỉ dưỡng tại Quảng Nam">
                                Quảng Nam (3)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-tp-hcm" title="Bán trang trại, khu nghỉ dưỡng tại Hồ Chí Minh">
                                Hồ Chí Minh (10)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-khanh-hoa" title="Bán trang trại, khu nghỉ dưỡng tại Khánh Hòa">
                                Khánh Hòa (26)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-thanh-hoa" title="Bán trang trại, khu nghỉ dưỡng tại Thanh Hóa">
                                Thanh Hóa (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-phu-tho" title="Bán trang trại, khu nghỉ dưỡng tại Phú Thọ">
                                Phú Thọ (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-kien-giang" title="Bán trang trại, khu nghỉ dưỡng tại Kiên Giang">
                                Kiên Giang (4)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-vinh-phuc" title="Bán trang trại, khu nghỉ dưỡng tại Vĩnh Phúc">
                                Vĩnh Phúc (6)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-hai-phong" title="Bán trang trại, khu nghỉ dưỡng tại Hải Phòng">
                                Hải Phòng (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-nghe-an" title="Bán trang trại, khu nghỉ dưỡng tại Nghệ An">
                                Nghệ An (3)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-dak-lak" title="Bán trang trại, khu nghỉ dưỡng tại Đắk Lắk">
                                Đắk Lắk (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-trang-trai-khu-nghi-duong-binh-phuoc" title="Bán trang trại, khu nghỉ dưỡng tại Bình Phước">
                                Bình Phước (13)
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
            