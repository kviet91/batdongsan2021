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
                <div class="custom-value hasvalue">Bất động sản khác</div>
            </div>
            <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagory" name="SubCateId" type="hidden" value="48">
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
                                    <li vl="45"><span>Kho, nhà xưởng</span></li>
                                    <li vl="48"><span class="active">Bất động sản khác</span></li>
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
                        <div id="price-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                        <div id="area-slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 100%;"></div><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></a></div>
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
                                categoryId: 48,
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
    <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac" level="1" title="Bán loại bất động sản khác tại Việt Nam">Bán</a><span>/</span><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac" level="2" title="Bán loại bất động sản khác tại Việt Nam">Loại bất động sản khác trên toàn quốc</a>
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
    <h1>Bán loại bất động sản khác tại Việt Nam</h1>
        <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">851</span> bất động sản.</div>
    

</div>

    <div class="product-nav-bar pad-top-8 clearfix">
        <ul class="ul-tab fl mar-right-16">
            <li class="list-display actived">Danh sách</li>
            <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
            <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-ban-loai-bat-dong-san-khac">Bản đồ</a></li>
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
            <div class="vip1 product-item clearfix" uid="1435844">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/ban-shophouse-nhin-thang-vinuni-soc-78tr-m2-lh-0936-202-399-pr27534071" title="Bán shophouse Vinhomes Ocean Park nhìn thẳng Vinuni, giá sốc 78tr/m2. LH: 0936.202.399" onclick="">
                        <img class="product-avatar-img" alt="Bán shophouse Vinhomes Ocean Park nhìn thẳng Vinuni, giá sốc 78tr/m2. LH: 0936.202.399" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/no-image.png" is-lazy-image="true" lazy-id="0">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/ban-shophouse-nhin-thang-vinuni-soc-78tr-m2-lh-0936-202-399-pr27534071" title="Bán shophouse Vinhomes Ocean Park nhìn thẳng Vinuni, giá sốc 78tr/m2. LH: 0936.202.***" class="vipOne product-link" style="overflow: visible;">
                            BÁN SHOPHOUSE VINHOMES OCEAN PARK NHÌN THẲNG VINUNI, GIÁ SỐC 78TR/M2. LH: <span class="hidden-mobile m-on-title" raw="0936.202.399">0936.202.***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">78 triệu/m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Gia Lâm, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Em cần tiền bán gấp căn shophouse đắc địa, mặt đường 52m, đối diện Vinuni, mặt sảnh ra vào. Giá chỉ 78tr/m2. Đã nhận nhà. Bác nào có nhu cầu liên hệ em (chính chủ): <span class="hidden-mobile des" raw="0936.202.399">0936.202.***</span>.
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
                                <i class="iconSave" data-productid="27534071" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n shophouse Vinhomes Ocean Park nh&amp;#236;n thẳng Vinuni, gi&amp;#225; sốc 78tr/m2. LH: 0936.202.399&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán shophouse Vinhomes Ocean Park nhìn thẳng Vinuni, giá sốc 78tr/m2. LH: 0936.202.399" data-price="78 triệu/m²" data-area="Không xác định" data-pricesort="0" data-areasort="0" data-room="0" data-toilets="0" data-address="Gia Lâm, Hà Nội" data-description="Em cần tiền bán gấp căn shophouse đắc địa, mặt đường 52m, đối diện Vinuni, mặt sảnh ra vào. Giá chỉ 78tr/m2. Đã nhận nhà. Bác nào có nhu cầu liên hệ em (chính chủ): 0936.202.399." data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 10:36:17" data-contactname="Trần Tuấn" data-contactmobile="0936202399" data-url="/ban-loai-bat-dong-san-khac-xa-duong-xa-prj-vinhomes-ocean-park-gia-lam/ban-shophouse-nhin-thang-vinuni-soc-78tr-m2-lh-0936-202-399-pr27534071" data-totalmedia="0" data-createbyuser="1435844"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="955897">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-nguyen-huu-canh-phuong-22-prj-shophouse-vinhomes-central-park/ban-suat-duy-nhat-tu-cdt-19ty-can-1-tret-1-lau-lh-0931-5555-69-pr27702229" title="Bán shophouse Vinhomes Central Park, suất duy nhất từ CĐT 19tỷ/căn 1 trệt, 1 lầu, LH 0931.5555.69" onclick="">
                        <img class="product-avatar-img" alt="Bán shophouse Vinhomes Central Park, suất duy nhất từ CĐT 19tỷ/căn 1 trệt, 1 lầu, LH 0931.5555.69" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201107104209-445a_wm.jpg" is-lazy-image="true" lazy-id="1">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-nguyen-huu-canh-phuong-22-prj-shophouse-vinhomes-central-park/ban-suat-duy-nhat-tu-cdt-19ty-can-1-tret-1-lau-lh-0931-5555-69-pr27702229" title="Bán shophouse Vinhomes Central Park, suất duy nhất từ CĐT 19tỷ/căn 1 trệt, 1 lầu, LH 0931.555*.**" class="vipOne product-link" style="overflow: visible;">
                            BÁN SHOPHOUSE VINHOMES CENTRAL PARK, SUẤT DUY NHẤT TỪ CĐT 19TỶ/CĂN 1 TRỆT, 1 LẦU, LH <span class="hidden-mobile m-on-title" raw="0931.5555.69">0931.555*.**</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">19 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">120 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bình Thạnh, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        LH <span class="hidden-mobile des" raw="0931.5555.69">0931.555*.**</span> và <span class="hidden-mobile des" raw="088.880.7117">088.880.7***</span>. Còn suất duy nhất từ CĐT Vin Group căn shophouse mặt tiền đường lớn tiện kinh doanh nhà hàng, spa, siêu thị... Chỉ 19 tỷ hoàn thiện thô bên trong, 1 trệt, 1 lầu...* C
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
                                <i class="iconSave" data-productid="27702229" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n shophouse Vinhomes Central Park, suất duy nhất từ CĐT 19tỷ/căn 1 trệt, 1 lầu, LH 0931.5555.69&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/07/20201107104209-445a_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/07/20201107104209-445a_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán shophouse Vinhomes Central Park, suất duy nhất từ CĐT 19tỷ/căn 1 trệt, 1 lầu, LH 0931.5555.69" data-price="19 tỷ" data-area="120 m²" data-pricesort="19000000000" data-areasort="120" data-room="0" data-toilets="0" data-address="Bình Thạnh, Hồ Chí Minh" data-description="LH 0931.5555.69 và 088.880.7117. Còn suất duy nhất từ CĐT Vin Group căn shophouse mặt tiền đường lớn tiện kinh doanh nhà hàng, spa, siêu thị... Chỉ 19 tỷ hoàn thiện thô bên trong, 1 trệt, 1 lầu...* C" data-duration="6 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 10:42:42" data-contactname="Phạm Hoài My" data-contactmobile="0931555569" data-url="/ban-loai-bat-dong-san-khac-duong-nguyen-huu-canh-phuong-22-prj-shophouse-vinhomes-central-park/ban-suat-duy-nhat-tu-cdt-19ty-can-1-tret-1-lau-lh-0931-5555-69-pr27702229" data-totalmedia="1" data-createbyuser="955897"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="124832">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-vo-chi-cong-phuong-phu-thuong-1-prj-udic-westlake/ban-shophouse-va-mai-van-phong-mat-cong-pr27696484" title="Bán shophouse Udic Westlake và sàn thương mại văn phòng Udic Westlake mặt Võ Chí Công" onclick="">
                        <img class="product-avatar-img" alt="Bán shophouse Udic Westlake và sàn thương mại văn phòng Udic Westlake mặt Võ Chí Công" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/20201106180722-c283_wm.jpg" is-lazy-image="true" lazy-id="2">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">2</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-vo-chi-cong-phuong-phu-thuong-1-prj-udic-westlake/ban-shophouse-va-mai-van-phong-mat-cong-pr27696484" title="Bán shophouse Udic Westlake và sàn thương mại văn phòng Udic Westlake mặt Võ Chí Công" class="vipOne product-link">
                            BÁN SHOPHOUSE UDIC WESTLAKE VÀ SÀN THƯƠNG MẠI VĂN PHÒNG UDIC WESTLAKE MẶT VÕ CHÍ CÔNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">65 triệu/m²</span>
                            <span class="dot">·</span>
                            <span class="area">280 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tây Hồ, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Bán shophouse Udic Westlake mặt Võ Chí Công và sàn văn phòng Udic Westlake. - Shophouse Udic Westlake mặt Võ Chí Công gồm 20 căn duy nhất, diện tích sử dụng từ 280m2 đến 485m2 gồm tầng 1, tầng 2, tần
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
                                <i class="iconSave" data-productid="27696484" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n shophouse Udic Westlake v&amp;#224; s&amp;#224;n thương mại văn ph&amp;#242;ng Udic Westlake mặt V&amp;#245; Ch&amp;#237; C&amp;#244;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106180722-c283_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/06/20201106180722-c283_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán shophouse Udic Westlake và sàn thương mại văn phòng Udic Westlake mặt Võ Chí Công" data-price="65 triệu/m²" data-area="280 m²" data-pricesort="18200000000" data-areasort="280" data-room="0" data-toilets="0" data-address="Tây Hồ, Hà Nội" data-description="Bán shophouse Udic Westlake mặt Võ Chí Công và sàn văn phòng Udic Westlake. - Shophouse Udic Westlake mặt Võ Chí Công gồm 20 căn duy nhất, diện tích sử dụng từ 280m2 đến 485m2 gồm tầng 1, tầng 2, tần" data-duration="1 tuần trước" data-updatedtime="06/11/2020" data-datesort="11/06/2020 18:08:19" data-contactname="Nhữ Đình Hiếu" data-contactmobile="0936668656" data-url="/ban-loai-bat-dong-san-khac-duong-vo-chi-cong-phuong-phu-thuong-1-prj-udic-westlake/ban-shophouse-va-mai-van-phong-mat-cong-pr27696484" data-totalmedia="2" data-createbyuser="124832"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1289963">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-nguyen-thi-thap-phuong-binh-thuan-3-prj-the-golden-star/ban-office-quan-7-chi-768-tr-co-vat-thanh-thanh-toan-50-nhan-nha-gop-18-thang-khong-lai-suat-pr27394207" title="Bán Office Quận 7 chỉ 768 triệu có VAT thanh toán 50% nhận nhà góp 18 tháng không lãi suất" onclick="">
                        <img class="product-avatar-img" alt="Bán Office Quận 7 chỉ 768 triệu có VAT thanh toán 50% nhận nhà góp 18 tháng không lãi suất" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/10/13/20201013113212-cd40_wm.jpg" is-lazy-image="true" lazy-id="3">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-nguyen-thi-thap-phuong-binh-thuan-3-prj-the-golden-star/ban-office-quan-7-chi-768-tr-co-vat-thanh-thanh-toan-50-nhan-nha-gop-18-thang-khong-lai-suat-pr27394207" title="Bán Office Quận 7 chỉ 768 triệu có VAT thanh toán 50% nhận nhà góp 18 tháng không lãi suất" class="vipOne product-link">
                            BÁN OFFICE QUẬN 7 CHỈ 768 TRIỆU CÓ VAT THANH TOÁN 50% NHẬN NHÀ GÓP 18 THÁNG KHÔNG LÃI SUẤT
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">768 triệu</span>
                            <span class="dot">·</span>
                            <span class="area">25 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 7, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Vị trí: Mặt tiền đường Nguyễn Thị Thập, phường Bình Thuận, Quận 7, TP. HCM.Diện tích: 25m2 giá 768 triệu.Diện tích: 27m2 giá 825 triệu.Diện tích: 33,2m2 giá 1 tỷ 008 triệu.Diện tích: 34m2 giá 1 tỷ 03
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
                                <i class="iconSave" data-productid="27394207" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n Office Quận 7 chỉ 768 triệu c&amp;#243; VAT thanh to&amp;#225;n 50% nhận nh&amp;#224; g&amp;#243;p 18 th&amp;#225;ng kh&amp;#244;ng l&amp;#227;i suất&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/13/20201013113212-cd40_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/13/20201013113212-cd40_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán Office Quận 7 chỉ 768 triệu có VAT thanh toán 50% nhận nhà góp 18 tháng không lãi suất" data-price="768 triệu" data-area="25 m²" data-pricesort="768000000" data-areasort="25" data-room="0" data-toilets="0" data-address="Quận 7, Hồ Chí Minh" data-description="Vị trí: Mặt tiền đường Nguyễn Thị Thập, phường Bình Thuận, Quận 7, TP. HCM.Diện tích: 25m2 giá 768 triệu.Diện tích: 27m2 giá 825 triệu.Diện tích: 33,2m2 giá 1 tỷ 008 triệu.Diện tích: 34m2 giá 1 tỷ 03" data-duration="1 tuần trước" data-updatedtime="06/11/2020" data-datesort="11/06/2020 13:35:58" data-contactname="Nguyễn Khoa Nam" data-contactmobile="0909536879" data-url="/ban-loai-bat-dong-san-khac-duong-nguyen-thi-thap-phuong-binh-thuan-3-prj-the-golden-star/ban-office-quan-7-chi-768-tr-co-vat-thanh-thanh-toan-50-nhan-nha-gop-18-thang-khong-lai-suat-pr27394207" data-totalmedia="8" data-createbyuser="1289963"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1280757">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-nguyen-huy-tuong-phuong-thanh-xuan-trung-prj-imperia-garden/chinh-chu-cho-thue-shophouse-chan-de-chung-cu-203-143-tuan-pr25799557" title="Chính chủ cần bán cắt lỗ shophouse chân đế Imperia Garden, 203 Nguyễn Huy Tưởng, 143 Nguyễn Tuân" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần bán cắt lỗ shophouse chân đế Imperia Garden, 203 Nguyễn Huy Tưởng, 143 Nguyễn Tuân" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/06/11/20200611115824-2e05_wm.jpg" is-lazy-image="true" lazy-id="4">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-nguyen-huy-tuong-phuong-thanh-xuan-trung-prj-imperia-garden/chinh-chu-cho-thue-shophouse-chan-de-chung-cu-203-143-tuan-pr25799557" title="Chính chủ cần bán cắt lỗ shophouse chân đế Imperia Garden, 203 Nguyễn Huy Tưởng, 143 Nguyễn Tuân" class="vipOne product-link">
                            CHÍNH CHỦ CẦN BÁN CẮT LỖ SHOPHOUSE CHÂN ĐẾ IMPERIA GARDEN, 203 NGUYỄN HUY TƯỞNG, 143 NGUYỄN TUÂN
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">9.8 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">168 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thanh Xuân, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        - Chính chủ cần bán cắt lỗ sâu hoặc cho thuê shophouse chân đế chung cư Imperia Garden, 203 Nguyễn Huy Tưởng, 143 Nguyễn Tuân - đã có sổ đỏ chính chủ.- Vị trí cực đẹp: Cạnh sảnh cư dân. 2 cửa ra vào,
                    </div>
                    <div class="product-wrap clearfix">
                        <div class="product-uptime">
                            <span class="product-labeltime">
                                1 tuần trước
                                <span class="tooltip-time">04/11/2020</span>
                            </span>
                        </div>
                        <div class="product-contact">
                            <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom" role="tooltip">
                                <i class="iconSave" data-productid="25799557" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần b&amp;#225;n cắt lỗ shophouse ch&amp;#226;n đế Imperia Garden, 203 Nguyễn Huy Tưởng, 143 Nguyễn Tu&amp;#226;n&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/11/20200611115824-2e05_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/06/11/20200611115824-2e05_wm.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần bán cắt lỗ shophouse chân đế Imperia Garden, 203 Nguyễn Huy Tưởng, 143 Nguyễn Tuân" data-price="9.8 tỷ" data-area="168 m²" data-pricesort="9800000000" data-areasort="168" data-room="0" data-toilets="0" data-address="Thanh Xuân, Hà Nội" data-description="- Chính chủ cần bán cắt lỗ sâu hoặc cho thuê shophouse chân đế chung cư Imperia Garden, 203 Nguyễn Huy Tưởng, 143 Nguyễn Tuân - đã có sổ đỏ chính chủ.- Vị trí cực đẹp: Cạnh sảnh cư dân. 2 cửa ra vào," data-duration="1 tuần trước" data-updatedtime="04/11/2020" data-datesort="11/04/2020 11:19:58" data-contactname="Vân Anh" data-contactmobile="0964065501" data-url="/ban-loai-bat-dong-san-khac-duong-nguyen-huy-tuong-phuong-thanh-xuan-trung-prj-imperia-garden/chinh-chu-cho-thue-shophouse-chan-de-chung-cu-203-143-tuan-pr25799557" data-totalmedia="3" data-createbyuser="1280757"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip1 product-item clearfix" uid="1498658">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-dt-725-xa-me-linh/ban-dat-ven-tp-da-lat-gia-re-chi-500-1ty-1000m2-pr27652007" title="Bán đất ven thành phố Đà Lạt giá rẻ chỉ 500 triệu - 1 tỷ/1000m2" onclick="">
                        <img class="product-avatar-img" alt="Bán đất ven thành phố Đà Lạt giá rẻ chỉ 500 triệu - 1 tỷ/1000m2" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/20201103220550-8b39.jpg" is-lazy-image="true" lazy-id="5">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-dt-725-xa-me-linh/ban-dat-ven-tp-da-lat-gia-re-chi-500-1ty-1000m2-pr27652007" title="Bán đất ven thành phố Đà Lạt giá rẻ chỉ 500 triệu - 1 tỷ/1000m2" class="vipOne product-link">
                            BÁN ĐẤT VEN THÀNH PHỐ ĐÀ LẠT GIÁ RẺ CHỈ 500 TRIỆU - 1 TỶ/1000M2
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">1000 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Lâm Hà, Lâm Đồng</span>
                    </div>
                    <div class="product-content">
                        Cần bán đất ven thành phố Đà Lạt, vị trí cực đẹp,  giá bao rẻ chỉ từ 500 triệu/1000m2.Ngoài ra chúng tôi còn chuyên cung cấp các loai đât nghỉ dưỡng, đầu tư phân lô, du lịch, đất view đẹp làm homstay
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
                                <i class="iconSave" data-productid="27652007" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n đất ven th&amp;#224;nh phố Đ&amp;#224; Lạt gi&amp;#225; rẻ chỉ 500 triệu - 1 tỷ/1000m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/03/20201103220550-8b39.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/03/20201103220550-8b39.jpg" data-vipclass="vip1" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất ven thành phố Đà Lạt giá rẻ chỉ 500 triệu - 1 tỷ/1000m2" data-price="1 tỷ" data-area="1000 m²" data-pricesort="1000000000" data-areasort="1000" data-room="0" data-toilets="0" data-address="Lâm Hà, Lâm Đồng" data-description="Cần bán đất ven thành phố Đà Lạt, vị trí cực đẹp,  giá bao rẻ chỉ từ 500 triệu/1000m2.Ngoài ra chúng tôi còn chuyên cung cấp các loai đât nghỉ dưỡng, đầu tư phân lô, du lịch, đất view đẹp làm homstay" data-duration="1 tuần trước" data-updatedtime="03/11/2020" data-datesort="11/03/2020 22:24:23" data-contactname="Nguyễn Xuân" data-contactmobile="0979919779" data-url="/ban-loai-bat-dong-san-khac-duong-dt-725-xa-me-linh/ban-dat-ven-tp-da-lat-gia-re-chi-500-1ty-1000m2-pr27652007" data-totalmedia="3" data-createbyuser="1498658"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="1508789">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-phuong-cua-dong/ban-khach-chuan-3-sao-khu-vuc-hang-da-vi-tri-dep-thuong-hieu-noi-tieng-pr27773362" title="BÁN KHÁCH SẠN CHUẨN 3 SAO KHU VỰC HÀNG DA, VỊ TRÍ ĐẸP, THƯƠNG HIỆU NỔI TIẾNG" onclick="">
                        <img class="product-avatar-img" alt="BÁN KHÁCH SẠN CHUẨN 3 SAO KHU VỰC HÀNG DA, VỊ TRÍ ĐẸP, THƯƠNG HIỆU NỔI TIẾNG" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113003316-fd91_wm.jpg" is-lazy-image="true" lazy-id="6">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-phuong-cua-dong/ban-khach-chuan-3-sao-khu-vuc-hang-da-vi-tri-dep-thuong-hieu-noi-tieng-pr27773362" title="BÁN KHÁCH SẠN CHUẨN 3 SAO KHU VỰC HÀNG DA, VỊ TRÍ ĐẸP, THƯƠNG HIỆU NỔI TIẾNG" class="vipFour product-link">
                            BÁN KHÁCH SẠN CHUẨN 3 SAO KHU VỰC HÀNG DA, VỊ TRÍ ĐẸP, THƯƠNG HIỆU NỔI TIẾNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">195 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">255 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hoàn Kiếm, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        - Bán khách sạn khu vực Hàng Da, Hoàn Kiếm. - Diện tích 255m2, 11 tầng bao gồm tầng hầm. - Hai mặt tiền, mặt tiền chính 10m. - Tổng 42 phòng lưu trú cho khách với các loại phòng khác nhau. - Có spa, 
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
                                <i class="iconSave" data-productid="27773362" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#193;N KH&amp;#193;CH SẠN CHUẨN 3 SAO KHU VỰC H&amp;#192;NG DA, VỊ TR&amp;#205; ĐẸP, THƯƠNG HIỆU NỔI TIẾNG&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/13/20201113003316-fd91_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/13/20201113003316-fd91_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="BÁN KHÁCH SẠN CHUẨN 3 SAO KHU VỰC HÀNG DA, VỊ TRÍ ĐẸP, THƯƠNG HIỆU NỔI TIẾNG" data-price="195 tỷ" data-area="255 m²" data-pricesort="195000000000" data-areasort="255" data-room="0" data-toilets="0" data-address="Hoàn Kiếm, Hà Nội" data-description="- Bán khách sạn khu vực Hàng Da, Hoàn Kiếm. - Diện tích 255m2, 11 tầng bao gồm tầng hầm. - Hai mặt tiền, mặt tiền chính 10m. - Tổng 42 phòng lưu trú cho khách với các loại phòng khác nhau. - Có spa, " data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 09:31:09" data-contactname="" data-contactmobile="0326556917" data-url="/ban-loai-bat-dong-san-khac-phuong-cua-dong/ban-khach-chuan-3-sao-khu-vuc-hang-da-vi-tri-dep-thuong-hieu-noi-tieng-pr27773362" data-totalmedia="3" data-createbyuser="1508789"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="269531">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-vo-chi-cong-phuong-xuan-la-prj-udic-westlake/ban-shophouse-va-thuong-mai-van-phong-mat-cong-pr27751883" title="Bán shophouse Udic Westlake và sàn thương mại văn phòng mặt Võ Chí Công" onclick="">
                        <img class="product-avatar-img" alt="Bán shophouse Udic Westlake và sàn thương mại văn phòng mặt Võ Chí Công" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111131605-cabc_wm.jpg" is-lazy-image="true" lazy-id="7">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">2</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-vo-chi-cong-phuong-xuan-la-prj-udic-westlake/ban-shophouse-va-thuong-mai-van-phong-mat-cong-pr27751883" title="Bán shophouse Udic Westlake và sàn thương mại văn phòng mặt Võ Chí Công" class="vipFour product-link">
                            BÁN SHOPHOUSE UDIC WESTLAKE VÀ SÀN THƯƠNG MẠI VĂN PHÒNG MẶT VÕ CHÍ CÔNG
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">65 triệu/m²</span>
                            <span class="dot">·</span>
                            <span class="area">285 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tây Hồ, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Bán shophouse Udic Westlake mặt Võ Chí Công và sàn văn phòng Udic Westlake. - Shophouse Udic Westlake mặt Võ Chí Công gồm 20 căn duy nhất, diện tích sử dụng từ 280m2 đến 485m2 gồm tầng 1, tầng 2, tần
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
                                <i class="iconSave" data-productid="27751883" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n shophouse Udic Westlake v&amp;#224; s&amp;#224;n thương mại văn ph&amp;#242;ng mặt V&amp;#245; Ch&amp;#237; C&amp;#244;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111131605-cabc_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111131605-cabc_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán shophouse Udic Westlake và sàn thương mại văn phòng mặt Võ Chí Công" data-price="65 triệu/m²" data-area="285 m²" data-pricesort="18525000000" data-areasort="285" data-room="3" data-toilets="0" data-address="Tây Hồ, Hà Nội" data-description="Bán shophouse Udic Westlake mặt Võ Chí Công và sàn văn phòng Udic Westlake. - Shophouse Udic Westlake mặt Võ Chí Công gồm 20 căn duy nhất, diện tích sử dụng từ 280m2 đến 485m2 gồm tầng 1, tầng 2, tần" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 13:21:59" data-contactname="Phạm Tuyết Anh" data-contactmobile="0947530629" data-url="/ban-loai-bat-dong-san-khac-duong-vo-chi-cong-phuong-xuan-la-prj-udic-westlake/ban-shophouse-va-thuong-mai-van-phong-mat-cong-pr27751883" data-totalmedia="2" data-createbyuser="269531"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="1193643">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-so-7-phuong-an-lac-a-prj-moonlight-park-view/chinh-chu-can-ban-can-shophouse-gia-3ty6-pr27731275" title="Chính chủ cần bán căn shophouse giá 3tỷ6" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ cần bán căn shophouse giá 3tỷ6" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110090321-1bc5_wm.jpg" is-lazy-image="true" lazy-id="8">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">4</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-so-7-phuong-an-lac-a-prj-moonlight-park-view/chinh-chu-can-ban-can-shophouse-gia-3ty6-pr27731275" title="Chính chủ cần bán căn shophouse giá 3tỷ6" class="vipTwo product-link">
                            CHÍNH CHỦ CẦN BÁN CĂN SHOPHOUSE GIÁ 3TỶ6
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">3.6 tỷ</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bình Tân, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Kẹt tiền cần bán gấp căn shophouse đẹp, nằm trong chung cư Moonlight Park View, thuận tiện kinh doanh, vị trí ngay hồ bơi, nhà trẻ, đã cho thuê 25tr/tháng. Cách Aeon Bình Tân 5, shop hoàn thiện đẹp, 
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
                                <i class="iconSave" data-productid="27731275" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ cần b&amp;#225;n căn shophouse gi&amp;#225; 3tỷ6&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110090321-1bc5_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110090321-1bc5_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ cần bán căn shophouse giá 3tỷ6" data-price="3.6 tỷ" data-area="Không xác định" data-pricesort="3600000000" data-areasort="0" data-room="0" data-toilets="1" data-address="Bình Tân, Hồ Chí Minh" data-description="Kẹt tiền cần bán gấp căn shophouse đẹp, nằm trong chung cư Moonlight Park View, thuận tiện kinh doanh, vị trí ngay hồ bơi, nhà trẻ, đã cho thuê 25tr/tháng. Cách Aeon Bình Tân 5, shop hoàn thiện đẹp, " data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 15:52:41" data-contactname="Le Thi Thanh Nga" data-contactmobile="0933576857" data-url="/ban-loai-bat-dong-san-khac-duong-so-7-phuong-an-lac-a-prj-moonlight-park-view/chinh-chu-can-ban-can-shophouse-gia-3ty6-pr27731275" data-totalmedia="4" data-createbyuser="1193643"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="1488389">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-minh-khai-phuong-vinh-tuy-prj-green-pearl-378-minh-khai/ban-shophouse-378-hai-ba-trung-lien-he-0902081000-pr27434153" title="Bán shophouse Green Pearl 378 Minh Khai, Hai Bà Trưng, Liên hệ 0902081000" onclick="">
                        <img class="product-avatar-img" alt="Bán shophouse Green Pearl 378 Minh Khai, Hai Bà Trưng, Liên hệ 0902081000" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/08/10/Sm2a5eVQ/20200810160308-bf70_wm.jpg" is-lazy-image="true" lazy-id="9">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">7</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-minh-khai-phuong-vinh-tuy-prj-green-pearl-378-minh-khai/ban-shophouse-378-hai-ba-trung-lien-he-0902081000-pr27434153" title="Bán shophouse Green Pearl 378 Minh Khai, Hai Bà Trưng, Liên hệ 0902081***" class="vipTwo product-link" style="overflow: visible;">
                            BÁN SHOPHOUSE GREEN PEARL 378 MINH KHAI, HAI BÀ TRƯNG, LIÊN HỆ <span class="hidden-mobile m-on-title" raw="0902081000">0902081***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">149.29 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hai Bà Trưng, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Cần bán 2 căn hộ Kinh doanh 9A và 10A tại Dự Án Green Pearl 378 Minh Khai, HBT, Hà Nội. Diện tích căn hộ KD 9A: 165.15m2, gồm 2 tầng: tầng 1 82.4m2, tầng 2 82.75m2 Diện tích căn hộ KD 10A: 149.29m2 g
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
                                <i class="iconSave" data-productid="27434153" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n shophouse Green Pearl 378 Minh Khai, Hai B&amp;#224; Trưng, Li&amp;#234;n hệ 0902081000&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/08/10/Sm2a5eVQ/20200810160308-bf70_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/08/10/Sm2a5eVQ/20200810160308-bf70_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán shophouse Green Pearl 378 Minh Khai, Hai Bà Trưng, Liên hệ 0902081000" data-price="Giá thỏa thuận" data-area="149.29 m²" data-pricesort="0" data-areasort="149.29" data-room="0" data-toilets="0" data-address="Hai Bà Trưng, Hà Nội" data-description="Cần bán 2 căn hộ Kinh doanh 9A và 10A tại Dự Án Green Pearl 378 Minh Khai, HBT, Hà Nội. Diện tích căn hộ KD 9A: 165.15m2, gồm 2 tầng: tầng 1 82.4m2, tầng 2 82.75m2 Diện tích căn hộ KD 10A: 149.29m2 g" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 17:35:33" data-contactname="Chính Chủ" data-contactmobile="0902081000" data-url="/ban-loai-bat-dong-san-khac-duong-minh-khai-phuong-vinh-tuy-prj-green-pearl-378-minh-khai/ban-shophouse-378-hai-ba-trung-lien-he-0902081000-pr27434153" data-totalmedia="7" data-createbyuser="1488389"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="1457607">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-tran-thu-do-phuong-hoang-liet-prj-green-park-tran-thu-do/shop-kiot-duy-nhat-tai-trung-tam-quan-mai-gia-chi-hon-ty-doc-hot-pr27703276" title="Shop kiot duy nhất tại trung tâm quận Hoàng Mai giá chỉ hơn tỷ, độc, hot" onclick="">
                        <img class="product-avatar-img" alt="Shop kiot duy nhất tại trung tâm quận Hoàng Mai giá chỉ hơn tỷ, độc, hot" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/07/20201107113200-fde7_wm.jpg" is-lazy-image="true" lazy-id="10">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">8</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-tran-thu-do-phuong-hoang-liet-prj-green-park-tran-thu-do/shop-kiot-duy-nhat-tai-trung-tam-quan-mai-gia-chi-hon-ty-doc-hot-pr27703276" title="Shop kiot duy nhất tại trung tâm quận Hoàng Mai giá chỉ hơn tỷ, độc, hot" class="vipFour product-link">
                            SHOP KIOT DUY NHẤT TẠI TRUNG TÂM QUẬN HOÀNG MAI GIÁ CHỈ HƠN TỶ, ĐỘC, HOT
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1.8 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">68 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hoàng Mai, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        - Bán kiot thương mại thiết kế như Vincom. Mặt đường 40m tại quận Hoàng Mai. - Giá đầu tư chỉ từ 1.5 tỷ đến 1.9 tỷ, dt từ 50.2 đến 132m. - Chỉ duy nhất tại Hà Nội hàng kiot DT nhỏ đầu tư thanh khoản 
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
                                <i class="iconSave" data-productid="27703276" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Shop kiot duy nhất tại trung t&amp;#226;m quận Ho&amp;#224;ng Mai gi&amp;#225; chỉ hơn tỷ, độc, hot&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/07/20201107113200-fde7_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/07/20201107113200-fde7_wm.jpg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Shop kiot duy nhất tại trung tâm quận Hoàng Mai giá chỉ hơn tỷ, độc, hot" data-price="1.8 tỷ" data-area="68 m²" data-pricesort="1800000000" data-areasort="68" data-room="0" data-toilets="0" data-address="Hoàng Mai, Hà Nội" data-description="- Bán kiot thương mại thiết kế như Vincom. Mặt đường 40m tại quận Hoàng Mai. - Giá đầu tư chỉ từ 1.5 tỷ đến 1.9 tỷ, dt từ 50.2 đến 132m. - Chỉ duy nhất tại Hà Nội hàng kiot DT nhỏ đầu tư thanh khoản " data-duration="6 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 11:35:29" data-contactname="Phạm Văn Vinh" data-contactmobile="0963860266" data-url="/ban-loai-bat-dong-san-khac-duong-tran-thu-do-phuong-hoang-liet-prj-green-park-tran-thu-do/shop-kiot-duy-nhat-tai-trung-tam-quan-mai-gia-chi-hon-ty-doc-hot-pr27703276" data-totalmedia="8" data-createbyuser="1457607"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip2 product-item clearfix" uid="1503743">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-so-63-phuong-binh-trung-dong-prj-blue-sky-tower/kiot-thuong-mai-dich-vu-thuong-mai-chi-900-trieu-pr27689756" title="Kiot thương mại dịch vụ thương mại chỉ 900 triệu" onclick="">
                        <img class="product-avatar-img" alt="Kiot thương mại dịch vụ thương mại chỉ 900 triệu" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106105957-c13d_wm.jpeg" is-lazy-image="true" lazy-id="11">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-so-63-phuong-binh-trung-dong-prj-blue-sky-tower/kiot-thuong-mai-dich-vu-thuong-mai-chi-900-trieu-pr27689756" title="Kiot thương mại dịch vụ thương mại chỉ 900 triệu" class="vipFour product-link">
                            KIOT THƯƠNG MẠI DỊCH VỤ THƯƠNG MẠI CHỈ 900 TRIỆU
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">900 triệu</span>
                            <span class="dot">·</span>
                            <span class="area">33 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Quận 2, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chỉ với 900 triệu sở hữu ngay ki ốt thương mại dịch vụ tại HQC Bình Trưng Đông (thành Phố Thủ Đức). Diện tích đa dạng từ 33 - 120m2. Giá từ 900 - 3,8 tỷ. Bàn giao quý 1/2021. Số 03, đường Số 63, khu 
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
                                <i class="iconSave" data-productid="27689756" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Kiot thương mại dịch vụ thương mại chỉ 900 triệu&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/06/20201106105957-c13d_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/06/20201106105957-c13d_wm.jpeg" data-vipclass="vip2" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Kiot thương mại dịch vụ thương mại chỉ 900 triệu" data-price="900 triệu" data-area="33 m²" data-pricesort="900000000" data-areasort="33" data-room="0" data-toilets="0" data-address="Quận 2, Hồ Chí Minh" data-description="Chỉ với 900 triệu sở hữu ngay ki ốt thương mại dịch vụ tại HQC Bình Trưng Đông (thành Phố Thủ Đức). Diện tích đa dạng từ 33 - 120m2. Giá từ 900 - 3,8 tỷ. Bàn giao quý 1/2021. Số 03, đường Số 63, khu " data-duration="1 tuần trước" data-updatedtime="06/11/2020" data-datesort="11/06/2020 11:13:48" data-contactname="Phạm Tâm" data-contactmobile="0908660330" data-url="/ban-loai-bat-dong-san-khac-duong-so-63-phuong-binh-trung-dong-prj-blue-sky-tower/kiot-thuong-mai-dich-vu-thuong-mai-chi-900-trieu-pr27689756" data-totalmedia="5" data-createbyuser="1503743"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="250475">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-pham-van-dong-phuong-dong-ngac-prj-ia20-ciputra/mua-thuong-mai-chung-cu-bo-quoc-phong-thong-tin-nhat-dinh-phai-biet-0971683588-pr25408827" title="Mua sàn thương mại chung cư IA20 - Bộ Quốc Phòng - thông tin nhất định phải biết - 0971683588" onclick="">
                        <img class="product-avatar-img" alt="Mua sàn thương mại chung cư IA20 - Bộ Quốc Phòng - thông tin nhất định phải biết - 0971683588" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/05/12/20200512160150-b347_wm.jpg" is-lazy-image="true" lazy-id="12">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">7</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-pham-van-dong-phuong-dong-ngac-prj-ia20-ciputra/mua-thuong-mai-chung-cu-bo-quoc-phong-thong-tin-nhat-dinh-phai-biet-0971683588-pr25408827" title="Mua sàn thương mại chung cư IA20 - Bộ Quốc Phòng - thông tin nhất định phải biết - 0971683***" class="vipThree product-link" style="overflow: visible;">
                            Mua sàn thương mại chung cư IA20 - Bộ Quốc Phòng - thông tin nhất định phải biết - <span class="hidden-mobile m-on-title" raw="0971683588">0971683***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">136 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Bắc Từ Liêm, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Hotline: <span class="hidden-mobile des" raw="0971683588">0971683***</span>.Quý khách cần tìm sàn thương mại tại khu chung cư đông, tập trung nhiều cư dân để dễ bề kinh doanh, đầu tư mua bán, cho thuê sinh lời. Hay mua bán sàn thương mại để đặt trụ sở văn
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
                                <i class="iconSave" data-productid="25408827" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Mua s&amp;#224;n thương mại chung cư IA20 - Bộ Quốc Ph&amp;#242;ng - th&amp;#244;ng tin nhất định phải biết - 0971683588&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/05/12/20200512160150-b347_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/05/12/20200512160150-b347_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Mua sàn thương mại chung cư IA20 - Bộ Quốc Phòng - thông tin nhất định phải biết - 0971683588" data-price="Giá thỏa thuận" data-area="136 m²" data-pricesort="0" data-areasort="136" data-room="0" data-toilets="0" data-address="Bắc Từ Liêm, Hà Nội" data-description="Hotline: 0971683588.Quý khách cần tìm sàn thương mại tại khu chung cư đông, tập trung nhiều cư dân để dễ bề kinh doanh, đầu tư mua bán, cho thuê sinh lời. Hay mua bán sàn thương mại để đặt trụ sở văn" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 13:03:49" data-contactname="Ms Nga" data-contactmobile="0971683588" data-url="/ban-loai-bat-dong-san-khac-duong-pham-van-dong-phuong-dong-ngac-prj-ia20-ciputra/mua-thuong-mai-chung-cu-bo-quoc-phong-thong-tin-nhat-dinh-phai-biet-0971683588-pr25408827" data-totalmedia="7" data-createbyuser="250475"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="4494">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-minh-khai-phuong-vinh-tuy-prj-vinhomes-times-city-park-hill/ban-lo-goc-shophouse-dep-nhat-tai-dt-195m2-gia-re-lh-0978-764-669-pr27751418" title="Bán lô góc shophouse đẹp nhất tại Times City Park Hill, DT 195m2, giá rẻ, LH: 0978.764.669" onclick="">
                        <img class="product-avatar-img" alt="Bán lô góc shophouse đẹp nhất tại Times City Park Hill, DT 195m2, giá rẻ, LH: 0978.764.669" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111120252-635d_wm.jpg" is-lazy-image="true" lazy-id="13">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">3</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-minh-khai-phuong-vinh-tuy-prj-vinhomes-times-city-park-hill/ban-lo-goc-shophouse-dep-nhat-tai-dt-195m2-gia-re-lh-0978-764-669-pr27751418" title="Bán lô góc shophouse đẹp nhất tại Times City Park Hill, DT 195m2, giá rẻ, LH: 0978.764.***" class="vipThree product-link" style="overflow: visible;">
                            Bán lô góc shophouse đẹp nhất tại Times City Park Hill, DT 195m2, giá rẻ, LH: <span class="hidden-mobile m-on-title" raw="0978.764.669">0978.764.***</span>
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">Giá thỏa thuận</span>
                            <span class="dot">·</span>
                            <span class="area">95 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hai Bà Trưng, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        - Cần bán 1 trong top 3 lô shophouse Times City Park Hill hoa hậu đẹp nhất ở khu đô thị Vinhomes Times City, Hai Bà Trưng.- Nằm ở ngay trên phố đi bộ của là lô shophouse góc Đông Nam, vị trí đắc địa 
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
                                <i class="iconSave" data-productid="27751418" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n l&amp;#244; g&amp;#243;c shophouse đẹp nhất tại Times City Park Hill, DT 195m2, gi&amp;#225; rẻ, LH: 0978.764.669&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111120252-635d_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111120252-635d_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán lô góc shophouse đẹp nhất tại Times City Park Hill, DT 195m2, giá rẻ, LH: 0978.764.669" data-price="Giá thỏa thuận" data-area="95 m²" data-pricesort="0" data-areasort="95" data-room="0" data-toilets="0" data-address="Hai Bà Trưng, Hà Nội" data-description="- Cần bán 1 trong top 3 lô shophouse Times City Park Hill hoa hậu đẹp nhất ở khu đô thị Vinhomes Times City, Hai Bà Trưng.- Nằm ở ngay trên phố đi bộ của là lô shophouse góc Đông Nam, vị trí đắc địa " data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 12:15:30" data-contactname="Nguyễn Thành Đạt" data-contactmobile="0978764669" data-url="/ban-loai-bat-dong-san-khac-duong-minh-khai-phuong-vinh-tuy-prj-vinhomes-times-city-park-hill/ban-lo-goc-shophouse-dep-nhat-tai-dt-195m2-gia-re-lh-0978-764-669-pr27751418" data-totalmedia="3" data-createbyuser="4494"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="1356985">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-xuan-lap-phuong-xuan-lap/ban-1600m2-dat-vuon-trai-cay-giap-suoi-thuoc-tp-long-khanh-pr27734106" title="Bán 1600m2 đất vườn trái cây giáp suối thuộc Phường Xuân Lập, TP Long Khánh" onclick="">
                        <img class="product-avatar-img" alt="Bán 1600m2 đất vườn trái cây giáp suối thuộc Phường Xuân Lập, TP Long Khánh" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110104239-127b_wm.jpeg" is-lazy-image="true" lazy-id="14">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-xuan-lap-phuong-xuan-lap/ban-1600m2-dat-vuon-trai-cay-giap-suoi-thuoc-tp-long-khanh-pr27734106" title="Bán 1600m2 đất vườn trái cây giáp suối thuộc Phường Xuân Lập, TP Long Khánh" class="vipThree product-link">
                            Bán 1600m2 đất vườn trái cây giáp suối thuộc Phường Xuân Lập, TP Long Khánh
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">2.5 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">1600 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Long Khánh, Đồng Nai</span>
                    </div>
                    <div class="product-content">
                        Chủ gửi em ra vườn trái cây ở Xuân Lập - TP Long Khánh. Diện tích: 1600m2 đang trồng cây ăn trái đã cho thu hoạch gồm (bơ, măng cụt, sầu riêng và chôm chôm). Vị trí: Cách UBND phường Xuân Lập đúng 1k
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
                                <i class="iconSave" data-productid="27734106" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n 1600m2 đất vườn tr&amp;#225;i c&amp;#226;y gi&amp;#225;p suối thuộc Phường Xu&amp;#226;n Lập, TP Long Kh&amp;#225;nh&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/10/20201110104239-127b_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/10/20201110104239-127b_wm.jpeg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán 1600m2 đất vườn trái cây giáp suối thuộc Phường Xuân Lập, TP Long Khánh" data-price="2.5 tỷ" data-area="1600 m²" data-pricesort="2500000000" data-areasort="1600" data-room="0" data-toilets="0" data-address="Long Khánh, Đồng Nai" data-description="Chủ gửi em ra vườn trái cây ở Xuân Lập - TP Long Khánh. Diện tích: 1600m2 đang trồng cây ăn trái đã cho thu hoạch gồm (bơ, măng cụt, sầu riêng và chôm chôm). Vị trí: Cách UBND phường Xuân Lập đúng 1k" data-duration="3 ngày trước" data-updatedtime="10/11/2020" data-datesort="11/10/2020 10:44:12" data-contactname="Đặng Nguyễn Rin" data-contactmobile="0965106774" data-url="/ban-loai-bat-dong-san-khac-duong-xuan-lap-phuong-xuan-lap/ban-1600m2-dat-vuon-trai-cay-giap-suoi-thuoc-tp-long-khanh-pr27734106" data-totalmedia="1" data-createbyuser="1356985"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="1391689">
                <div class="product-image noimage">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-to-huu-phuong-la-khe/ban-500m2-mat-ha-dong-pr27363857" title="Bán 500m2 mặt đường Tố Hữu, Hà Đông. Giá: 12 triệu/m" onclick="">
                        <img class="product-avatar-img" alt="Bán 500m2 mặt đường Tố Hữu, Hà Đông. Giá: 12 triệu/m" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://staticfile.batdongsan.com.vn/images/no-image.png" is-lazy-image="true" lazy-id="15">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-to-huu-phuong-la-khe/ban-500m2-mat-ha-dong-pr27363857" title="Bán 500m2 mặt đường Tố Hữu, Hà Đông. Giá: 12 triệu/m" class="vipThree product-link">
                            Bán 500m2 mặt đường Tố Hữu, Hà Đông. Giá: 12 triệu/m
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">12 triệu/m²</span>
                            <span class="dot">·</span>
                            <span class="area">500 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hà Đông, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Do không có nhu cầu sử dụng. Cần bán gấp 5000m2 sàn thương mại tại Tố Hữu, Hà Đông. Có thể bán thành các ô nhỏ diện tích từ 500, 1000, 1500m2. Giá bán thanh lý, cần bán gấp chỉ 12 triệu/m2. Sổ đỏ chí
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
                                <i class="iconSave" data-productid="27363857" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n 500m2 mặt đường Tố Hữu, H&amp;#224; Đ&amp;#244;ng. Gi&amp;#225;: 12 triệu/m&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán 500m2 mặt đường Tố Hữu, Hà Đông. Giá: 12 triệu/m" data-price="12 triệu/m²" data-area="500 m²" data-pricesort="6000000000" data-areasort="500" data-room="5" data-toilets="4" data-address="Hà Đông, Hà Nội" data-description="Do không có nhu cầu sử dụng. Cần bán gấp 5000m2 sàn thương mại tại Tố Hữu, Hà Đông. Có thể bán thành các ô nhỏ diện tích từ 500, 1000, 1500m2. Giá bán thanh lý, cần bán gấp chỉ 12 triệu/m2. Sổ đỏ chí" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 10:28:24" data-contactname="Phi Lan" data-contactmobile="0814541033" data-url="/ban-loai-bat-dong-san-khac-duong-to-huu-phuong-la-khe/ban-500m2-mat-ha-dong-pr27363857" data-totalmedia="0" data-createbyuser="1391689"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="832366">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-pho-le-van-thiem-phuong-nhan-chinh-prj-stellar-garden/truc-tiep-cdt-ban-phong-2300m2-50-nam-du-an-35-0976-875-161-pr23891321" title="Trực tiếp CĐT bán sàn VP từ 35 - 500m2, cấp sổ hồng 50 năm tại dự án Stellar Garden 35 Lê Văn Thiêm" onclick="">
                        <img class="product-avatar-img" alt="Trực tiếp CĐT bán sàn VP từ 35 - 500m2, cấp sổ hồng 50 năm tại dự án Stellar Garden 35 Lê Văn Thiêm" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/07/10/20200710084202-0f40_wm.jpg" is-lazy-image="true" lazy-id="16">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">12</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-pho-le-van-thiem-phuong-nhan-chinh-prj-stellar-garden/truc-tiep-cdt-ban-phong-2300m2-50-nam-du-an-35-0976-875-161-pr23891321" title="Trực tiếp CĐT bán sàn VP từ 35 - 500m2, cấp sổ hồng 50 năm tại dự án Stellar Garden 35 Lê Văn Thiêm" class="vipThree product-link">
                            Trực tiếp CĐT bán sàn VP từ 35 - 500m2, cấp sổ hồng 50 năm tại dự án Stellar Garden 35 Lê Văn Thiêm
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">33.6 triệu/m²</span>
                            <span class="dot">·</span>
                            <span class="area">111 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Thanh Xuân, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Hotline: Mr Cường: <span class="hidden-mobile des" raw="0976.875.161">0976.875.***</span> (Phó phòng KD - Bán và cho thuê văn phòng - TTTM).Bán sàn văn phòng Stellar Garden góc ngã tư Lê Văn Thiêm và Ngụy Như Kon Tum - chào bán trực tiếp từ chủ đầu tư CT Cổ
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
                                <i class="iconSave" data-productid="23891321" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Trực tiếp CĐT b&amp;#225;n s&amp;#224;n VP từ 35 - 500m2, cấp sổ hồng 50 năm tại dự &amp;#225;n Stellar Garden 35 L&amp;#234; Văn Thi&amp;#234;m&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/07/10/20200710084202-0f40_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/07/10/20200710084202-0f40_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Trực tiếp CĐT bán sàn VP từ 35 - 500m2, cấp sổ hồng 50 năm tại dự án Stellar Garden 35 Lê Văn Thiêm" data-price="33.6 triệu/m²" data-area="111 m²" data-pricesort="3729600000" data-areasort="111" data-room="0" data-toilets="0" data-address="Thanh Xuân, Hà Nội" data-description="Hotline: Mr Cường: 0976.875.161 (Phó phòng KD - Bán và cho thuê văn phòng - TTTM).Bán sàn văn phòng Stellar Garden góc ngã tư Lê Văn Thiêm và Ngụy Như Kon Tum - chào bán trực tiếp từ chủ đầu tư CT Cổ" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 09:28:04" data-contactname="Đỗ Quốc Cường" data-contactmobile="0976875161" data-url="/ban-loai-bat-dong-san-khac-pho-le-van-thiem-phuong-nhan-chinh-prj-stellar-garden/truc-tiep-cdt-ban-phong-2300m2-50-nam-du-an-35-0976-875-161-pr23891321" data-totalmedia="12" data-createbyuser="832366"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="1438870">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-n1-phuong-son-ky-prj-celadon-city/ban-gap-can-shop-house-264-m2-vi-tri-dep-gan-thac-nuoc-gia-thap-nhat-cdt-cam-ket-dau-tu-sinh-loi-pr27716257" title="Bán gấp căn shophouse 264m2 vị trí đẹp gần thác nước giá thấp nhất. CĐT cam kết đầu tư sinh lời" onclick="">
                        <img class="product-avatar-img" alt="Bán gấp căn shophouse 264m2 vị trí đẹp gần thác nước giá thấp nhất. CĐT cam kết đầu tư sinh lời" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109090750-2a64_wm.jpg" is-lazy-image="true" lazy-id="17">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">6</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-n1-phuong-son-ky-prj-celadon-city/ban-gap-can-shop-house-264-m2-vi-tri-dep-gan-thac-nuoc-gia-thap-nhat-cdt-cam-ket-dau-tu-sinh-loi-pr27716257" title="Bán gấp căn shophouse 264m2 vị trí đẹp gần thác nước giá thấp nhất. CĐT cam kết đầu tư sinh lời" class="vipThree product-link">
                            Bán gấp căn shophouse 264m2 vị trí đẹp gần thác nước giá thấp nhất. CĐT cam kết đầu tư sinh lời
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">21 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">246 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tân Phú, Hồ Chí Minh</span>
                    </div>
                    <div class="product-content">
                        Chính chủ cần bán gấp căn Shophouse khu Diamond Celadon. - Đại lộ rộng 61m. - Diện tích 246m2 (tầng trệt 136m2 tầng lửng 112m2). Mật độ cư dân chỉ tính riêng trong phân khu là 25.000 người. Chủ đầu t
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
                                <i class="iconSave" data-productid="27716257" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n gấp căn shophouse 264m2 vị tr&amp;#237; đẹp gần th&amp;#225;c nước gi&amp;#225; thấp nhất. CĐT cam kết đầu tư sinh lời&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109090750-2a64_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109090750-2a64_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán gấp căn shophouse 264m2 vị trí đẹp gần thác nước giá thấp nhất. CĐT cam kết đầu tư sinh lời" data-price="21 tỷ" data-area="246 m²" data-pricesort="21000000000" data-areasort="246" data-room="0" data-toilets="0" data-address="Tân Phú, Hồ Chí Minh" data-description="Chính chủ cần bán gấp căn Shophouse khu Diamond Celadon. - Đại lộ rộng 61m. - Diện tích 246m2 (tầng trệt 136m2 tầng lửng 112m2). Mật độ cư dân chỉ tính riêng trong phân khu là 25.000 người. Chủ đầu t" data-duration="4 ngày trước" data-updatedtime="09/11/2020" data-datesort="11/09/2020 09:09:04" data-contactname="Phương" data-contactmobile="0911116075" data-url="/ban-loai-bat-dong-san-khac-duong-n1-phuong-son-ky-prj-celadon-city/ban-gap-can-shop-house-264-m2-vi-tri-dep-gan-thac-nuoc-gia-thap-nhat-cdt-cam-ket-dau-tu-sinh-loi-pr27716257" data-totalmedia="6" data-createbyuser="1438870"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="109503">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-hoang-quoc-viet-6/ban-thuong-mai-kinh-doanh-tang-1-toa-thap-doi-chung-cu-do-hoc-vien-phong-sieu-hot-pr19731097" title="Bán sàn thương mại kinh doanh tầng 1, tòa tháp đôi chung cư Đông Đô Học Viện Quốc Phòng. Siêu hot" onclick="">
                        <img class="product-avatar-img" alt="Bán sàn thương mại kinh doanh tầng 1, tòa tháp đôi chung cư Đông Đô Học Viện Quốc Phòng. Siêu hot" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2019/03/10/20190310161930-04b4_wm.jpg" is-lazy-image="true" lazy-id="18">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">5</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-hoang-quoc-viet-6/ban-thuong-mai-kinh-doanh-tang-1-toa-thap-doi-chung-cu-do-hoc-vien-phong-sieu-hot-pr19731097" title="Bán sàn thương mại kinh doanh tầng 1, tòa tháp đôi chung cư Đông Đô Học Viện Quốc Phòng. Siêu hot" class="vipThree product-link">
                            Bán sàn thương mại kinh doanh tầng 1, tòa tháp đôi chung cư Đông Đô Học Viện Quốc Phòng. Siêu hot
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">45 triệu/m²</span>
                            <span class="dot">·</span>
                            <span class="area">573 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Tây Hồ, Hà Nội</span>
                    </div>
                    <div class="product-content">
                        Bán sàn kiot thương mại kinh doanh tầng 1 chân đế tòa tháp đôi chung cư Đông Đô Học Viện Quốc Phòng cao 33 tầng. Diện tích 573m2, có 2 mặt đường trước và sau, giá bán 45 triệu/m2. Vị trí kinh doanh s
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
                                <i class="iconSave" data-productid="19731097" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n s&amp;#224;n thương mại kinh doanh tầng 1, t&amp;#242;a th&amp;#225;p đ&amp;#244;i chung cư Đ&amp;#244;ng Đ&amp;#244; Học Viện Quốc Ph&amp;#242;ng. Si&amp;#234;u hot&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/03/10/20190310161930-04b4_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2019/03/10/20190310161930-04b4_wm.jpg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán sàn thương mại kinh doanh tầng 1, tòa tháp đôi chung cư Đông Đô Học Viện Quốc Phòng. Siêu hot" data-price="45 triệu/m²" data-area="573 m²" data-pricesort="25785000000" data-areasort="573" data-room="0" data-toilets="0" data-address="Tây Hồ, Hà Nội" data-description="Bán sàn kiot thương mại kinh doanh tầng 1 chân đế tòa tháp đôi chung cư Đông Đô Học Viện Quốc Phòng cao 33 tầng. Diện tích 573m2, có 2 mặt đường trước và sau, giá bán 45 triệu/m2. Vị trí kinh doanh s" data-duration="6 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 19:00:13" data-contactname="Phạm Xuân Duy" data-contactmobile="0985242709" data-url="/ban-loai-bat-dong-san-khac-duong-hoang-quoc-viet-6/ban-thuong-mai-kinh-doanh-tang-1-toa-thap-doi-chung-cu-do-hoc-vien-phong-sieu-hot-pr19731097" data-totalmedia="5" data-createbyuser="109503"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vip3 product-item clearfix" uid="654521">
                <div class="product-image ">
                    <a class="product-avatar" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-pho-phung-hung-1-phuong-phuc-la-prj-khu-do-thi-moi-xa-la/chinh-chu-ban-cat-lo-kiot-chung-cu-ct6b-la-pr27703884" title="Chính chủ bán cắt lỗ kiot chung cư CT6B Xa La" onclick="">
                        <img class="product-avatar-img" alt="Chính chủ bán cắt lỗ kiot chung cư CT6B Xa La" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src="./assets/image/lazy-preview-image-DFE3E8.png" src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/11/07/20201107123938-d57f_wm.jpeg" is-lazy-image="true" lazy-id="19">
                    </a>
                    <span class="product-feature">
                                                                    </span>
                        <span class="product-media">2</span>
                </div>
                <div class="product-main">
                    <h3 class="product-title">
                        <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-pho-phung-hung-1-phuong-phuc-la-prj-khu-do-thi-moi-xa-la/chinh-chu-ban-cat-lo-kiot-chung-cu-ct6b-la-pr27703884" title="Chính chủ bán cắt lỗ kiot chung cư CT6B Xa La" class="vipThree product-link">
                            Chính chủ bán cắt lỗ kiot chung cư CT6B Xa La
                        </a>
                    </h3>
                    <div class="product-info">
                        <span class="price">1.05 tỷ</span>
                            <span class="dot">·</span>
                            <span class="area">46 m²</span>
                                                    <span class="dot">·</span>
                        <span class="location">Hà Đông, Hà Nội</span>
                    </div>
                    <div class="product-content" style="overflow: visible;">
                        Chính chủ bán cắt lỗ kiot Xala toà CT6B diện tích 46m2, giá lỗ giá chỉ 1,05 tỷ, liên hệ xem nhà ngoài giờ hành chính <span class="hidden-mobile des" raw="0982379468">0982379***</span>.
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
                                <i class="iconSave" data-productid="27703884" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n cắt lỗ kiot chung cư CT6B Xa La&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/07/20201107123938-d57f_wm.jpeg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/07/20201107123938-d57f_wm.jpeg" data-vipclass="vip3" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Chính chủ bán cắt lỗ kiot chung cư CT6B Xa La" data-price="1.05 tỷ" data-area="46 m²" data-pricesort="1050000000" data-areasort="46" data-room="0" data-toilets="1" data-address="Hà Đông, Hà Nội" data-description="Chính chủ bán cắt lỗ kiot Xala toà CT6B diện tích 46m2, giá lỗ giá chỉ 1,05 tỷ, liên hệ xem nhà ngoài giờ hành chính 0982379468." data-duration="6 ngày trước" data-updatedtime="07/11/2020" data-datesort="11/07/2020 12:45:54" data-contactname="Nguyễn Thị Bích Thuận" data-contactmobile="0974179722" data-url="/ban-loai-bat-dong-san-khac-pho-phung-hung-1-phuong-phuc-la-prj-khu-do-thi-moi-xa-la/chinh-chu-ban-cat-lo-kiot-chung-cu-ct6b-la-pr27703884" data-totalmedia="2" data-createbyuser="654521"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-center">
            <div class="pagination">
<a pid="1" class="actived" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac">1</a>
<a pid="2" class="" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/p2">2</a>
<a pid="3" class="" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/p3">3</a>
<a pid="4" class="" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/p4">4</a>
<a pid="5" class="" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/p5">5</a>
<a pid="43" href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/p43"><img src="./assets/image/ic_double_caret_right.png"></a>
</div>

        </div>
    </div>






    <div class="divide">&nbsp;</div>
<div class="product-seo-tag">    <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>    <ul class="ul-round clearfix">    <li><a title="sang nhượng Quán" href="https://batdongsan.com.vn/tags/ban/sang-nhuong-quan">sang nhượng Quán</a></li>    <li><a title="sang quán cafe Quận 9" href="https://batdongsan.com.vn/tags/ban/sang-quan-cafe-quan-9">sang quán cafe Quận 9</a></li>    <li><a title="cần mua căn hộ giá rẻ" href="https://batdongsan.com.vn/tags/ban/can-mua-can-ho-gia-re">cần mua căn hộ giá rẻ</a></li>    <li><a title="cần bán nhà tập thể trung tự" href="https://batdongsan.com.vn/tags/ban/can-ban-nha-tap-the-trung-tu">cần bán nhà tập thể trung tự</a></li>    <li><a title="cần bán chung cư đại thanh chính chủ" href="https://batdongsan.com.vn/tags/ban/can-ban-chung-cu-dai-thanh-chinh-chu">cần bán chung cư đại thanh chính chủ</a></li>    <li><a title="chính chủ cần bán chung cư đại thanh" href="https://batdongsan.com.vn/tags/ban/chinh-chu-can-ban-chung-cu-dai-thanh">chính chủ cần bán chung cư đại thanh</a></li>    </ul></div>    <div class="divide">&nbsp;</div>
    <div class="product-seo-text">
        <div><strong>Batdongsan.com.vn</strong> mang đến kênh thông tin mua bán bất động sản hàng đầu tại Việt Nam. Chúng tôi tự hào là trang mua bán, giao dịch bất động sản đa dạng nhất tại thị trường 
                                <strong>Việt Nam</strong> như: ki ốt, sàn văn phòng, trung tâm tiếng anh, shop, cửa hàng tạp hóa, quán ăn, phòng tập, sàn thương mại, cây xăng, siêu thị, sạp bán hàng... Mang đến trang <strong>mua bán bất động sản tại Việt Nam</strong>. 
                                Batdongsan.com.vn giúp việc kết nối giữa người bán và người mua dễ dàng hơn, thúc đẩy việc mua bán bất động sản nhanh chóng và hiệu quả chỉ với một vài click chuột.</div>
                                <div>Hãy chọn <strong>Batdongsan.com.vn</strong> là kênh thông tin mua bán bất động sản đáng tin cậy của bạn.</div>
    </div>
<form id="productListBinnova" method="post">
    <input id="hashAlias" type="hidden" value="82f25598fc914ffd3122b233c799f216599e2dcbae89f4fdd25f9d076a93913f">
</form>
<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
            var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                model: {
                    typeOfProduct: 38,
                    categoryId: 48,
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
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/-1/2/-1/-1" title="Bán loại bất động sản khác Việt Nam giá 500 - 800 triệu">500 - 800 triệu</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/-1/3/-1/-1" title="Bán loại bất động sản khác Việt Nam giá 800 triệu - 1 tỷ">800 triệu - 1 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/-1/4/-1/-1" title="Bán loại bất động sản khác Việt Nam giá 1 - 2 tỷ">1 - 2 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/-1/5/-1/-1" title="Bán loại bất động sản khác Việt Nam giá 2 - 3 tỷ">2 - 3 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/-1/6/-1/-1" title="Bán loại bất động sản khác Việt Nam giá 3 - 5 tỷ">3 - 5 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/-1/7/-1/-1" title="Bán loại bất động sản khác Việt Nam giá 5 - 7 tỷ">5 - 7 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/-1/8/-1/-1" title="Bán loại bất động sản khác Việt Nam giá 7 - 10 tỷ">7 - 10 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/-1/9/-1/-1" title="Bán loại bất động sản khác Việt Nam giá 10 - 20 tỷ">10 - 20 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/-1/10/-1/-1" title="Bán loại bất động sản khác Việt Nam giá 20 - 30 tỷ">20 - 30 tỷ</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/-1/11/-1/-1" title="Bán loại bất động sản khác Việt Nam giá &gt; 30 tỷ">&gt; 30 tỷ</a></li>
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
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/1/-1/-1/-1" title="Bán loại bất động sản khác Việt Nam diện tích &lt;= 30 m2">&lt;= 30 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/2/-1/-1/-1" title="Bán loại bất động sản khác Việt Nam diện tích 30 - 50 m2">30 - 50 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/3/-1/-1/-1" title="Bán loại bất động sản khác Việt Nam diện tích 50 - 80 m2">50 - 80 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/4/-1/-1/-1" title="Bán loại bất động sản khác Việt Nam diện tích 80 - 100 m2">80 - 100 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/5/-1/-1/-1" title="Bán loại bất động sản khác Việt Nam diện tích 100 - 150 m2">100 - 150 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/6/-1/-1/-1" title="Bán loại bất động sản khác Việt Nam diện tích 150 - 200 m2">150 - 200 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/7/-1/-1/-1" title="Bán loại bất động sản khác Việt Nam diện tích 200 - 250 m2">200 - 250 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/8/-1/-1/-1" title="Bán loại bất động sản khác Việt Nam diện tích 250 - 300 m2">250 - 300 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/9/-1/-1/-1" title="Bán loại bất động sản khác Việt Nam diện tích 300 - 500 m2">300 - 500 m2</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac/10/-1/-1/-1" title="Bán loại bất động sản khác Việt Nam diện tích &gt;= 500 m2">&gt;= 500 m2</a></li>
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
        <h2 class="box-title">Bán loại bất động sản khác</h2>

        <div class="box-content link-hover-blue">
            <ul>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-tp-hcm" title="Bán loại bất động sản khác tại Hồ Chí Minh">
                                Hồ Chí Minh (364)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-ha-noi" title="Bán loại bất động sản khác tại Hà Nội">
                                Hà Nội (359)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-binh-duong" title="Bán loại bất động sản khác tại Bình Dương">
                                Bình Dương (36)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-dong-nai" title="Bán loại bất động sản khác tại Đồng Nai">
                                Đồng Nai (13)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-khanh-hoa" title="Bán loại bất động sản khác tại Khánh Hòa">
                                Khánh Hòa (13)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-vinh-long" title="Bán loại bất động sản khác tại Vĩnh Long">
                                Vĩnh Long (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-cao-bang" title="Bán loại bất động sản khác tại Cao Bằng">
                                Cao Bằng (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-dong-thap" title="Bán loại bất động sản khác tại Đồng Tháp">
                                Đồng Tháp (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-binh-dinh" title="Bán loại bất động sản khác tại Bình Định">
                                Bình Định (7)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-quang-nam" title="Bán loại bất động sản khác tại Quảng Nam">
                                Quảng Nam (4)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-quang-ninh" title="Bán loại bất động sản khác tại Quảng Ninh">
                                Quảng Ninh (4)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-vinh-phuc" title="Bán loại bất động sản khác tại Vĩnh Phúc">
                                Vĩnh Phúc (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-binh-thuan" title="Bán loại bất động sản khác tại Bình Thuận  ">
                                Bình Thuận   (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-hung-yen" title="Bán loại bất động sản khác tại Hưng Yên">
                                Hưng Yên (9)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-dak-lak" title="Bán loại bất động sản khác tại Đắk Lắk">
                                Đắk Lắk (4)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-nghe-an" title="Bán loại bất động sản khác tại Nghệ An">
                                Nghệ An (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-hoa-binh" title="Bán loại bất động sản khác tại Hòa Bình">
                                Hòa Bình (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-bac-ninh" title="Bán loại bất động sản khác tại Bắc Ninh">
                                Bắc Ninh (2)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-tay-ninh" title="Bán loại bất động sản khác tại Tây Ninh">
                                Tây Ninh (1)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-tra-vinh" title="Bán loại bất động sản khác tại Trà Vinh">
                                Trà Vinh (1)
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
            