@extends('layouts.master')
@section('title', 'Thong tin du an bat dong san moi nhat 2020')
@section('content')
<div class="form-content">
        <div class="adPosition" positionCode="BANNER_POSITION_BACKGROUND" style=""></div>
<script type='text/javascript'> var bannerContext={"CateId":351,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":177};</script>

        <div id="staticDomain" statsDomain="https://statistic.batdongsan.com.vn" data-fileimg="https://file4.batdongsan.com.vn" data-web="https://batdongsan.com.vn" data-msvrouter="/microservice-architecture-router" data-msvrouter-personal="/microservice-architecture-router-personal" data-cssServer="https://staticfile.batdongsan.com.vn" data-oldsystem="https://batdongsan.com.vn" data-content="https://batdongsan.com.vn" data-domainorigin="batdongsan.com.vn" data-sug-sell="https://suggestion1.batdongsan.com.vn/" data-sug-rent="https://suggestion2.batdongsan.com.vn/" class="hide"></div>
        <div id="addonImage" addon-image="https://staticfile.batdongsan.com.vn/images/no-image.png"></div>
        <div id="SiteLeft" class="banner-left">
            <div class="container-default">
                <div>
                    <div id="ban_wide_left" class="ban_wide_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_WIDE_LEFT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":351,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":177};</script>
                    </div>

                    <div id="ban_left" class="ban_scroll" style="display: block; top: 0px; position: fixed; left: 321.5px;">
                        <div class="adPosition" positionCode="BANNER_POSITION_LEFT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":351,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":177};</script>
                    </div>
                </div>
            </div>
        </div>

        <div class="popupMarking  save" style="display: none">
            <img src="https://staticfile.batdongsan.com.vn/images/mobile/icons/24x24/filled/ic_unsave.svg">
            <span> L&#x1B0;u tin th&#xE0;nh c&#xF4;ng</span>
        </div>
        <div class="popupMarking  unsave" style="display: none">
            <img src="https://staticfile.batdongsan.com.vn/images/mobile/icons/24x24/outlined/ic_save.svg">
            <span> &#x110;&#xE3; b&#x1ECF; l&#x1B0;u tin</span>
        </div>
            <div class="site-center">
                <link rel="stylesheet" href="https://staticfile.batdongsan.com.vn/css/project.css" />
<link rel="stylesheet" href="https://staticfile.batdongsan.com.vn/css/excoloSlider.css" />
<div class="clear"></div>

    <div class="prj-top-search">
        <div class="col1">
            <div>Tìm kiếm dự án</div>
        </div>
        <div class="col2">
            <div style="position: relative;">
                <input type="text" id="txtAutoComplete" class="suggest" placeholder="Nhập từ khóa tìm kiếm (ví dụ: dự án quận Hà Đông)" value="">
                <input type="hidden" id="hddAutoComplete" value="">
            </div>
            <input type="hidden" name="hddProjectId" id="hddProjectId" />
            <div id="searchcontrol" style="display: none;">
                <div id="divCategory" class="comboboxs advance-select-box mr10" style="">
                    <input data-val="true" data-val-required="The CateId field is required." id="hdCateId" name="CateId" type="hidden" value="351" />
                    <span class="select-text" style="">
                        <span class="select-text-content" style="width: 75px;">Loại dự án</span>
                    </span>
                </div>
                <div id="divCategoryOptions" class="advance-select-options advance-options" hddvalue="hdCateId" ddlid="divCategory">
                    <ul class="advance-options">
                        <li vl="0" class="advance-options ">Loại dự án</li>
                                <li vl="155" class="advance-options ">C&#x103;n h&#x1ED9;, Chung c&#x1B0;</li>
                                <li vl="156" class="advance-options ">Cao &#x1ED1;c v&#x103;n ph&#xF2;ng</li>
                                <li vl="157" class="advance-options ">Trung t&#xE2;m th&#x1B0;&#x1A1;ng m&#x1EA1;i</li>
                                <li vl="150" class="advance-options ">Khu &#x111;&#xF4; th&#x1ECB; m&#x1EDB;i</li>
                                <li vl="160" class="advance-options ">Khu ph&#x1EE9;c h&#x1EE3;p</li>
                                <li vl="148" class="advance-options ">Nh&#xE0; &#x1EDF; x&#xE3; h&#x1ED9;i</li>
                                <li vl="158" class="advance-options ">Khu ngh&#x1EC9; d&#x1B0;&#x1EE1;ng, Sinh th&#xE1;i</li>
                                <li vl="159" class="advance-options ">Khu c&#xF4;ng nghi&#x1EC7;p</li>
                                <li vl="161" class="advance-options ">D&#x1EF1; &#xE1;n kh&#xE1;c</li>
                                <li vl="421" class="advance-options ">Bi&#x1EC7;t th&#x1EF1; li&#x1EC1;n k&#x1EC1;</li>
                    </ul>
                </div>

                <div id="divCity" class="comboboxs advance-select-box mr10" style="">
                    <span class="select-text" style="">
                        <span class="select-text-content" style="width: 75px;">Tỉnh thành</span>
                    </span>
                    <input id="hdCityId" name="CityCode" type="hidden" value="" />
                </div>
                <div id="divCityOptions" class="advance-select-options advance-options" hddvalue="hdCityId" ddlid="divCity">
                    <ul class="advance-options">
                        <li vl="0" class="advance-options current">Tỉnh thành</li>
                                <li vl="SG" class="advance-options ">H&#x1ED3; Ch&#xED; Minh</li>
                                <li vl="HN" class="advance-options ">H&#xE0; N&#x1ED9;i</li>
                                <li vl="DDN" class="advance-options ">&#x110;&#xE0; N&#x1EB5;ng</li>
                                <li vl="BD" class="advance-options ">B&#xEC;nh D&#x1B0;&#x1A1;ng</li>
                                <li vl="DNA" class="advance-options ">&#x110;&#x1ED3;ng Nai</li>
                                <li vl="KH" class="advance-options ">Kh&#xE1;nh H&#xF2;a</li>
                                <li vl="HP" class="advance-options ">H&#x1EA3;i Ph&#xF2;ng</li>
                                <li vl="LA" class="advance-options ">Long An</li>
                                <li vl="QNA" class="advance-options ">Qu&#x1EA3;ng Nam</li>
                                <li vl="VT" class="advance-options ">B&#xE0; R&#x1ECB;a V&#x169;ng T&#xE0;u</li>
                                <li vl="DDL" class="advance-options ">&#x110;&#x1EAF;k L&#x1EAF;k</li>
                                <li vl="CT" class="advance-options ">C&#x1EA7;n Th&#x1A1;</li>
                                <li vl="BTH" class="advance-options ">B&#xEC;nh Thu&#x1EAD;n  </li>
                                <li vl="LDD" class="advance-options ">L&#xE2;m &#x110;&#x1ED3;ng</li>
                                <li vl="TTH" class="advance-options ">Th&#x1EEB;a Thi&#xEA;n Hu&#x1EBF;</li>
                                <li vl="KG" class="advance-options ">Ki&#xEA;n Giang</li>
                                <li vl="BN" class="advance-options ">B&#x1EAF;c Ninh</li>
                                <li vl="QNI" class="advance-options ">Qu&#x1EA3;ng Ninh</li>
                                <li vl="TH" class="advance-options ">Thanh H&#xF3;a</li>
                                <li vl="NA" class="advance-options ">Ngh&#x1EC7; An</li>
                                <li vl="HD" class="advance-options ">H&#x1EA3;i D&#x1B0;&#x1A1;ng</li>
                                <li vl="GL" class="advance-options ">Gia Lai</li>
                                <li vl="BP" class="advance-options ">B&#xEC;nh Ph&#x1B0;&#x1EDB;c</li>
                                <li vl="HY" class="advance-options ">H&#x1B0;ng Y&#xEA;n</li>
                                <li vl="BDD" class="advance-options ">B&#xEC;nh &#x110;&#x1ECB;nh</li>
                                <li vl="TG" class="advance-options ">Ti&#x1EC1;n Giang</li>
                                <li vl="TB" class="advance-options ">Th&#xE1;i B&#xEC;nh</li>
                                <li vl="BG" class="advance-options ">B&#x1EAF;c Giang</li>
                                <li vl="HB" class="advance-options ">H&#xF2;a B&#xEC;nh</li>
                                <li vl="AG" class="advance-options ">An Giang</li>
                                <li vl="VP" class="advance-options ">V&#x129;nh Ph&#xFA;c</li>
                                <li vl="TNI" class="advance-options ">T&#xE2;y Ninh</li>
                                <li vl="TN" class="advance-options ">Th&#xE1;i Nguy&#xEA;n</li>
                                <li vl="LCA" class="advance-options ">L&#xE0;o Cai</li>
                                <li vl="NDD" class="advance-options ">Nam &#x110;&#x1ECB;nh</li>
                                <li vl="QNG" class="advance-options ">Qu&#x1EA3;ng Ng&#xE3;i</li>
                                <li vl="BTR" class="advance-options ">B&#x1EBF;n Tre</li>
                                <li vl="DNO" class="advance-options ">&#x110;&#x1EAF;k N&#xF4;ng</li>
                                <li vl="CM" class="advance-options ">C&#xE0; Mau</li>
                                <li vl="VL" class="advance-options ">V&#x129;nh Long</li>
                                <li vl="NB" class="advance-options ">Ninh B&#xEC;nh</li>
                                <li vl="PT" class="advance-options ">Ph&#xFA; Th&#x1ECD;</li>
                                <li vl="NT" class="advance-options ">Ninh Thu&#x1EAD;n</li>
                                <li vl="PY" class="advance-options ">Ph&#xFA; Y&#xEA;n</li>
                                <li vl="HNA" class="advance-options ">H&#xE0; Nam</li>
                                <li vl="HT" class="advance-options ">H&#xE0; T&#x129;nh</li>
                                <li vl="DDT" class="advance-options ">&#x110;&#x1ED3;ng Th&#xE1;p</li>
                                <li vl="ST" class="advance-options ">S&#xF3;c Tr&#x103;ng</li>
                                <li vl="KT" class="advance-options ">Kon Tum</li>
                                <li vl="QB" class="advance-options ">Qu&#x1EA3;ng B&#xEC;nh</li>
                                <li vl="QT" class="advance-options ">Qu&#x1EA3;ng Tr&#x1ECB;</li>
                                <li vl="TV" class="advance-options ">Tr&#xE0; Vinh</li>
                                <li vl="HGI" class="advance-options ">H&#x1EAD;u Giang</li>
                                <li vl="SL" class="advance-options ">S&#x1A1;n La</li>
                                <li vl="BL" class="advance-options ">B&#x1EA1;c Li&#xEA;u</li>
                                <li vl="YB" class="advance-options ">Y&#xEA;n B&#xE1;i</li>
                                <li vl="TQ" class="advance-options ">Tuy&#xEA;n Quang</li>
                                <li vl="DDB" class="advance-options ">&#x110;i&#x1EC7;n Bi&#xEA;n</li>
                                <li vl="LCH" class="advance-options ">Lai Ch&#xE2;u</li>
                                <li vl="LS" class="advance-options ">L&#x1EA1;ng S&#x1A1;n</li>
                                <li vl="HG" class="advance-options ">H&#xE0; Giang</li>
                                <li vl="BK" class="advance-options ">B&#x1EAF;c K&#x1EA1;n</li>
                                <li vl="CB" class="advance-options ">Cao B&#x1EB1;ng</li>
                    </ul>
                </div>

                <div id="divDistrict" class="comboboxs advance-select-box mr10" style="">
                    <span class="select-text" style="">
                        <span class="select-text-content" style="width: 75px;">Quận huyện</span>
                    </span>
                    <input data-val="true" data-val-required="The DistrictId field is required." id="hdDistrictId" name="DistrictId" type="hidden" value="0" />
                </div>
                <div id="divDistrictOptions" class="advance-select-options advance-options" hddvalue="hdDistrictId" ddlid="divDistrict">
                    <ul class="advance-options">
                        <li vl="0" class="advance-options current">Quận huyện</li>
                    </ul>
                </div>

                <div id="divPrice" class="comboboxs advance-select-box" style="">
                    <span class="select-text" style="">
                        <span class="select-text-content" style="width: 75px;">Mức giá</span>
                    </span>
                    <input data-val="true" data-val-required="The PriceLevel field is required." id="hdPriceId" name="PriceLevel" type="hidden" value="-1" />
                </div>
                <div id="divPriceOptions"
                     class="advance-select-options advance-options"
                     hddvalue="hdPriceId"
                     ddlid="divPrice"
                     minvalue="txtPriceMinValue"
                     maxvalue="txtPriceMaxValue"
                     lblmin="lblPriceMin"
                     lblmax="lblPriceMax">
                    <table class="header-options options">
                        <tbody>
                            <tr class="advance-options">
                                <td class="advance-options">
                                    <input type="text" id="txtPriceMinValue" name="pricemin" placeholder="từ" class="min-value advance-options" maxlength="6" numbersonly="true" decimal="true" style="width:65px;">
                                    <div id="lblPriceMin"></div>
                                </td>
                                <td class="advance-options">
                                    <span class="advance-options">- </span>
                                </td>
                                <td class="advance-options">
                                    <input type="text" id="txtPriceMaxValue" name="pricemax" placeholder="đến" class="max-value advance-options" maxlength="6" numbersonly="true" decimal="true" style="width:65px;">
                                    <div id="lblPriceMax"></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="advance-options">
                        <li vl="-1" class="advance-options current">Mức giá</li>
                                <li vl="1" class="advance-options ">&lt; 5 tri&#x1EC7;u/m2</li>
                                <li vl="2" class="advance-options ">5 - 10 tri&#x1EC7;u/m2</li>
                                <li vl="3" class="advance-options ">10 - 20 tri&#x1EC7;u/m2</li>
                                <li vl="4" class="advance-options ">20 - 35 tri&#x1EC7;u/m2</li>
                                <li vl="5" class="advance-options ">35 - 50 tri&#x1EC7;u/m2</li>
                                <li vl="6" class="advance-options ">50 - 80 tri&#x1EC7;u/m2</li>
                                <li vl="7" class="advance-options ">&gt; 80 tri&#x1EC7;u/m2</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="col3">
            <input type="button" value="Tìm kiếm" class="search" id="btnSearch">
        </div>
        <div class="clear"></div>
        <div class="expand">
                <div id="collapse" style="display: none;">
                    Thu gọn tiêu chí tìm kiếm
                    <img src="https://file4.batdongsan.com.vn/images/opt/uparrow.jpg">
                </div>
                <div id="explandctl" style="display: block;">
                    Mở rộng tiêu chí tìm kiếm
                    <img src="https://file4.batdongsan.com.vn/images/opt/downarrow.jpg">
                </div>
        </div>
    </div>


        <div class="tc-duan" id="rptProjects">
                <div class="item">
                    <div class="fleft">
                        <a class="avaslide" href="/khu-do-thi-moi-go-vap/cityland-park-hills-pj2409" title="CityLand Park Hills">
                            <img src="https://file4.batdongsan.com.vn/crop/760x270/2020/10/21/hmcVYWuR/20201021092453-5470.jpg" alt="CityLand Park Hills">
                        </a>
                    </div>
                    <div class="fright">
                        <div class="title">
                            <h3>
                                <a href="/khu-do-thi-moi-go-vap/cityland-park-hills-pj2409" title="CityLand Park Hills" class="prj-hl-title">CityLand Park Hills</a>
                            </h3>
                        </div>
                        <div class="sum prj-hl-sum">
                            Khu d&#xE2;n c&#x1B0; Cityland Park Hills l&#xE0; d&#x1EF1; &#xE1;n cao c&#x1EA5;p th&#x1EE9; 3 c&#x1EE7;a C&#xF4;ng ty TNHH &#x110;&#x1EA7;u t&#x1B0; &#x110;&#x1ECB;a &#x1ED1;c Th&#xE0;nh Ph&#x1ED1; (Cityland). T&#x1ECD;a l&#x1EA1;c t&#x1EA1;i s&#x1ED1; 18 Phan V&#x103;n Tr&#x1ECB;, ph&#x1B0;&#x1EDD;ng 10, qu&#x1EAD;n G&#xF2; V&#x1EA5;p, Tp.HCM, d&#x1EF1; &#xE1;n c&#xF3; t&#x1ED5;ng m&#x1EE9;c &#x111;&#x1EA7;u t&#x1B0; h&#x1A1;n 6.281 t&#x1EF7; &#x111;&#x1ED3;ng, quy m&#xF4; 27 ha.
                        </div>
                        <div class="dotdotdot"></div>
                        <div class="more" style="width: 41%;"><a href="/khu-do-thi-moi-go-vap/cityland-park-hills-pj2409">Chi tiết&nbsp;<span>&#8594;</span></a></div>
                    </div>
                </div>
                <div class="item">
                    <div class="fleft">
                        <a class="avaslide" href="/khu-do-thi-moi-dong-xoai-bp/khu-do-thi-phuc-hop-canh-quan-cat-tuong-phu-hung-pj4018" title="Khu &#x111;&#xF4; th&#x1ECB; ph&#x1EE9;c h&#x1EE3;p - c&#x1EA3;nh quan C&#xE1;t T&#x1B0;&#x1EDD;ng Ph&#xFA; H&#x1B0;ng">
                            <img src="https://file4.batdongsan.com.vn/crop/760x270/2018/12/18/hmcVYWuR/20181218093538-f2ef.jpg" alt="Khu &#x111;&#xF4; th&#x1ECB; ph&#x1EE9;c h&#x1EE3;p - c&#x1EA3;nh quan C&#xE1;t T&#x1B0;&#x1EDD;ng Ph&#xFA; H&#x1B0;ng">
                        </a>
                    </div>
                    <div class="fright">
                        <div class="title">
                            <h3>
                                <a href="/khu-do-thi-moi-dong-xoai-bp/khu-do-thi-phuc-hop-canh-quan-cat-tuong-phu-hung-pj4018" title="Khu &#x111;&#xF4; th&#x1ECB; ph&#x1EE9;c h&#x1EE3;p - c&#x1EA3;nh quan C&#xE1;t T&#x1B0;&#x1EDD;ng Ph&#xFA; H&#x1B0;ng" class="prj-hl-title">Khu &#x111;&#xF4; th&#x1ECB; ph&#x1EE9;c h&#x1EE3;p - c&#x1EA3;nh quan C&#xE1;t T&#x1B0;&#x1EDD;ng Ph&#xFA; H&#x1B0;ng</a>
                            </h3>
                        </div>
                        <div class="sum prj-hl-sum">
                            Khu &#x111;&#xF4; th&#x1ECB; ph&#x1EE9;c h&#x1EE3;p &#x2013; c&#x1EA3;nh quan C&#xE1;t T&#x1B0;&#x1EDD;ng Ph&#xFA; H&#x1B0;ng l&#xE0; m&#x1ED9;t s&#x1EA3;n ph&#x1EA9;m c&#x1EE7;a C&#xF4;ng Ty C&#x1ED5; Ph&#x1EA7;n T&#x1EAD;p &#x110;o&#xE0;n &#x110;&#x1ECB;a &#x1ED1;c C&#xE1;t T&#x1B0;&#x1EDD;ng, d&#x1EF1; &#xE1;n &#x111;&#x1B0;&#x1EE3;c quy ho&#x1EA1;ch &#x111;&#x1ED3;ng b&#x1ED9;, khoa h&#x1ECD;c m&#xE0; v&#x1EAB;n &#x111;&#x1EA3;m b&#x1EA3;o y&#x1EBF;u t&#x1ED1; h&#xE0;i h&#xF2;a v&#x1EDB;i c&#x1EA3;nh quan khu v&#x1EF1;c t&#x1EEB; t&#x1ED5;ng th&#x1EC3; &#x111;&#x1EBF;n t&#x1EEB;ng chi ti&#x1EBF;t.
                        </div>
                        <div class="dotdotdot"></div>
                        <div class="more" style="width: 41%;"><a href="/khu-do-thi-moi-dong-xoai-bp/khu-do-thi-phuc-hop-canh-quan-cat-tuong-phu-hung-pj4018">Chi tiết&nbsp;<span>&#8594;</span></a></div>
                    </div>
                </div>
                <div class="item">
                    <div class="fleft">
                        <a class="avaslide" href="/khu-do-thi-moi-tan-an-la/lavilla-green-city-pj4381" title="Lavilla Green City">
                            <img src="https://file4.batdongsan.com.vn/crop/760x270/2019/07/12/hmcVYWuR/20190712160935-e987.jpg" alt="Lavilla Green City">
                        </a>
                    </div>
                    <div class="fright">
                        <div class="title">
                            <h3>
                                <a href="/khu-do-thi-moi-tan-an-la/lavilla-green-city-pj4381" title="Lavilla Green City" class="prj-hl-title">Lavilla Green City</a>
                            </h3>
                        </div>
                        <div class="sum prj-hl-sum">
                            Lavilla Green City T&#xE2;n An l&#xE0; d&#x1EF1; &#xE1;n khu &#x111;&#xF4; th&#x1ECB; do Tr&#x1EA7;n Anh Group v&#xE0; &#x110;&#x1ED3;ng T&#xE2;m Group l&#xE0;m ch&#x1EE7; &#x111;&#x1EA7;u t&#x1B0;.
                        </div>
                        <div class="dotdotdot"></div>
                        <div class="more" style="width: 41%;"><a href="/khu-do-thi-moi-tan-an-la/lavilla-green-city-pj4381">Chi tiết&nbsp;<span>&#8594;</span></a></div>
                    </div>
                </div>
        </div>
    <div class="clear"></div>


        <div class="prj-inline">
            <div class="header">
                <div class="col1">&nbsp;</div>
                <div class="col2">
                    <h2 class="name">Dự án mới cập nhật</h2>
                </div>
                <div class="col1">&nbsp;</div>
                <div class="clear"></div>
            </div>
            <div class="prj-items prj-latest">
                <ul>
                        <li>
                            <div>
                                <a href="/khu-do-thi-moi-phu-giao-bd/khu-do-thi-sinh-thai-an-phu-long-garden-pj5042" title="Khu &#x111;&#xF4; th&#x1ECB; sinh th&#xE1;i An Ph&#xFA; Long Garden">
                                    <img src="https://file4.batdongsan.com.vn/crop/233x150/2020/08/21/hmcVYWuR/20200821113435-d214.jpg" alt="Khu &#x111;&#xF4; th&#x1ECB; sinh th&#xE1;i An Ph&#xFA; Long Garden" class="img230">
                                </a>
                            </div>
                            <div class="below-img">
                                <h3 class="prj-name">
                                    <a href="/khu-do-thi-moi-phu-giao-bd/khu-do-thi-sinh-thai-an-phu-long-garden-pj5042" title="Khu &#x111;&#xF4; th&#x1ECB; sinh th&#xE1;i An Ph&#xFA; Long Garden">
                                        Khu &#x111;&#xF4; th&#x1ECB; sinh th&#xE1;i An Ph&#xFA; Long Garden
                                    </a>
                                </h3>
                                <div class="prj-add">&#x110;&#x1B0;&#x1EDD;ng &#x110;T 750, X&#xE3; An Long, Ph&#xFA; Gi&#xE1;o, B&#xEC;nh D&#x1B0;&#x1A1;ng</div>
                                <div class="m-t-5">Giá từ: <span><strong>&#x110;ang c&#x1EAD;p nh&#x1EAD;t</strong></span></div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="/can-ho-chung-cu-my-tho-tg/victoria-premium-pj3548" title="Victoria Premium">
                                    <img src="https://file4.batdongsan.com.vn/crop/233x150/2020/09/22/hmcVYWuR/20200922143102-3ac3.jpg" alt="Victoria Premium" class="img230">
                                </a>
                            </div>
                            <div class="below-img">
                                <h3 class="prj-name">
                                    <a href="/can-ho-chung-cu-my-tho-tg/victoria-premium-pj3548" title="Victoria Premium">
                                        Victoria Premium
                                    </a>
                                </h3>
                                <div class="prj-add">&#x110;&#x1B0;&#x1EDD;ng Nguy&#x1EC5;n Trung Tr&#x1EF1;c, Ph&#x1B0;&#x1EDD;ng 3, M&#x1EF9; Tho, Ti&#x1EC1;n Giang</div>
                                <div class="m-t-5">Giá từ: <span><strong>13.72 tri&#x1EC7;u/m&#xB2;</strong></span></div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="/du-an-khac-long-thanh-dna/the-golden-city-long-thanh-pj3854" title="The Golden City Long Th&#xE0;nh">
                                    <img src="https://file4.batdongsan.com.vn/crop/233x150/2020/09/22/hmcVYWuR/20200922133529-ccb5.jpg" alt="The Golden City Long Th&#xE0;nh" class="img230">
                                </a>
                            </div>
                            <div class="below-img">
                                <h3 class="prj-name">
                                    <a href="/du-an-khac-long-thanh-dna/the-golden-city-long-thanh-pj3854" title="The Golden City Long Th&#xE0;nh">
                                        The Golden City Long Th&#xE0;nh
                                    </a>
                                </h3>
                                <div class="prj-add">&#x110;&#x1B0;&#x1EDD;ng Qu&#x1ED1;c L&#x1ED9; 51, X&#xE3; Long Ph&#x1B0;&#x1EDB;c, Long Th&#xE0;nh, &#x110;&#x1ED3;ng Nai</div>
                                <div class="m-t-5">Giá từ: <span><strong>&#x110;ang c&#x1EAD;p nh&#x1EAD;t</strong></span></div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="/du-an-khac-bien-hoa-dna/aqua-city-pj4282" title="Aqua City">
                                    <img src="https://file4.batdongsan.com.vn/crop/233x150/2019/05/17/zk7ggeWN/20190517145022-bb06.jpg" alt="Aqua City" class="img230">
                                </a>
                            </div>
                            <div class="below-img">
                                <h3 class="prj-name">
                                    <a href="/du-an-khac-bien-hoa-dna/aqua-city-pj4282" title="Aqua City">
                                        Aqua City
                                    </a>
                                </h3>
                                <div class="prj-add">X&#xE3; Long H&#x1B0;ng, Bi&#xEA;n H&#xF2;a, &#x110;&#x1ED3;ng Nai</div>
                                <div class="m-t-5">Giá từ: <span><strong>15 tri&#x1EC7;u/m&#xB2;</strong></span></div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="/du-an-khac-tan-phu-dna/tan-phu-garden-pj5056" title="T&#xE2;n Ph&#xFA; Garden">
                                    <img src="https://file4.batdongsan.com.vn/crop/233x150/2020/09/01/hmcVYWuR/20200901234128-348d.jpg" alt="T&#xE2;n Ph&#xFA; Garden" class="img230">
                                </a>
                            </div>
                            <div class="below-img">
                                <h3 class="prj-name">
                                    <a href="/du-an-khac-tan-phu-dna/tan-phu-garden-pj5056" title="T&#xE2;n Ph&#xFA; Garden">
                                        T&#xE2;n Ph&#xFA; Garden
                                    </a>
                                </h3>
                                <div class="prj-add">&#x110;&#x1B0;&#x1EDD;ng Tr&#x1B0;&#x1A1;ng C&#xF4;ng &#x110;&#x1ECB;nh, X&#xE3; Tr&#xE0; C&#x1ED5;, T&#xE2;n Ph&#xFA;, &#x110;&#x1ED3;ng Nai</div>
                                <div class="m-t-5">Giá từ: <span><strong>7 tri&#x1EC7;u/m&#xB2;</strong></span></div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="/khu-do-thi-moi-ninh-kieu-ct/khu-do-thi-moi-an-binh-pj5047" title="Khu &#x111;&#xF4; th&#x1ECB; m&#x1EDB;i An B&#xEC;nh">
                                    <img src="https://file4.batdongsan.com.vn/crop/233x150/2020/08/26/hmcVYWuR/20200826152400-3161.jpg" alt="Khu &#x111;&#xF4; th&#x1ECB; m&#x1EDB;i An B&#xEC;nh" class="img230">
                                </a>
                            </div>
                            <div class="below-img">
                                <h3 class="prj-name">
                                    <a href="/khu-do-thi-moi-ninh-kieu-ct/khu-do-thi-moi-an-binh-pj5047" title="Khu &#x111;&#xF4; th&#x1ECB; m&#x1EDB;i An B&#xEC;nh">
                                        Khu &#x111;&#xF4; th&#x1ECB; m&#x1EDB;i An B&#xEC;nh
                                    </a>
                                </h3>
                                <div class="prj-add">&#x110;&#x1B0;&#x1EDD;ng Nguy&#x1EC5;n V&#x103;n C&#x1EEB;, Ph&#x1B0;&#x1EDD;ng An B&#xEC;nh, Ninh Ki&#x1EC1;u, C&#x1EA7;n Th&#x1A1;</div>
                                <div class="m-t-5">Giá từ: <span><strong>17 tri&#x1EC7;u/m&#xB2;</strong></span></div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="/khu-do-thi-moi-hoai-duc/khu-do-thi-moi-lideco-bac-quoc-lo-32-pj573" title="Khu &#x111;&#xF4; th&#x1ECB; m&#x1EDB;i Lideco - B&#x1EAF;c Qu&#x1ED1;c l&#x1ED9; 32">
                                    <img src="https://file4.batdongsan.com.vn/crop/233x150/2020/07/30/hmcVYWuR/20200730135627-1414.jpg" alt="Khu &#x111;&#xF4; th&#x1ECB; m&#x1EDB;i Lideco - B&#x1EAF;c Qu&#x1ED1;c l&#x1ED9; 32" class="img230">
                                </a>
                            </div>
                            <div class="below-img">
                                <h3 class="prj-name">
                                    <a href="/khu-do-thi-moi-hoai-duc/khu-do-thi-moi-lideco-bac-quoc-lo-32-pj573" title="Khu &#x111;&#xF4; th&#x1ECB; m&#x1EDB;i Lideco - B&#x1EAF;c Qu&#x1ED1;c l&#x1ED9; 32">
                                        Khu &#x111;&#xF4; th&#x1ECB; m&#x1EDB;i Lideco - B&#x1EAF;c Qu&#x1ED1;c l&#x1ED9; 32
                                    </a>
                                </h3>
                                <div class="prj-add">&#x110;&#x1B0;&#x1EDD;ng Qu&#x1ED1;c l&#x1ED9; 32, Th&#x1ECB; tr&#x1EA5;n Tr&#x1EA1;m Tr&#xF4;i, Ho&#xE0;i &#x110;&#x1EE9;c, Ha&#x300; N&#xF4;&#x323;i</div>
                                <div class="m-t-5">Giá từ: <span><strong>30 tri&#x1EC7;u/m&#xB2;</strong></span></div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="/khu-phuc-hop-hoai-duc/tht-new-city-pj852" title="THT New City">
                                    <img src="https://file4.batdongsan.com.vn/crop/233x150/2016/03/14/0I4XNtd4/20160314154810-2fd8.jpg" alt="THT New City" class="img230">
                                </a>
                            </div>
                            <div class="below-img">
                                <h3 class="prj-name">
                                    <a href="/khu-phuc-hop-hoai-duc/tht-new-city-pj852" title="THT New City">
                                        THT New City
                                    </a>
                                </h3>
                                <div class="prj-add">&#x110;&#x1B0;&#x1EDD;ng Qu&#x1ED1;c l&#x1ED9; 32, X&#xE3; Kim Chung, Ho&#xE0;i &#x110;&#x1EE9;c, Ha&#x300; N&#xF4;&#x323;i</div>
                                <div class="m-t-5">Giá từ: <span><strong>14 tri&#x1EC7;u/m&#xB2;</strong></span></div>
                            </div>
                        </li>
                </ul>
            </div>
        </div>



    <div class="prj-inline">
        <div class="header">
            <div class="col1">&nbsp;</div>
            <div class="col2">
                <h2 class="name">Căn hộ mẫu</h2>
                <div class="count">
                    4717 mẫu thiết kế căn hộ
                </div>
            </div>
            <div class="col1">&nbsp;</div>
            <div class="clear"></div>
        </div>
        <div class="prj-items">
            <ul>
                    <li class="housetemplate">
                        <div>
                            <a href="/can-ho-chung-cu-binh-tan/can-ho-9x-golden-stella-pj5110/p3" title="C&#x103;n h&#x1ED9; 9x Golden Stella">
                                <img src="https://file4.batdongsan.com.vn/crop/233x150/2020/11/02/hmcVYWuR/20201102141343-3fde.jpg" alt="C&#x103;n h&#x1ED9; 9x Golden Stella" class="img230">
                            </a>
                        </div>
                        <div class="below-img">
                            <h3 class="prj-name">
                                <a href="/can-ho-chung-cu-binh-tan/can-ho-9x-golden-stella-pj5110/p3" title="C&#x103;n h&#x1ED9; 9x Golden Stella">
                                    C&#x103;n h&#x1ED9; 9x Golden Stella
                                </a>
                            </h3>
                            <div>Dự án: C&#x103;n h&#x1ED9; 9x Golden Stella</div>
                        </div>
                    </li>
                    <li class="housetemplate">
                        <div>
                            <a href="/can-ho-chung-cu-gia-lam/masteri-waterfront-pj5106/p3" title="C&#x103;n h&#x1ED9; Masteri Water Front">
                                <img src="https://file4.batdongsan.com.vn/crop/233x150/2020/10/23/hmcVYWuR/20201023091256-fc7f.jpg" alt="C&#x103;n h&#x1ED9; Masteri Water Front" class="img230">
                            </a>
                        </div>
                        <div class="below-img">
                            <h3 class="prj-name">
                                <a href="/can-ho-chung-cu-gia-lam/masteri-waterfront-pj5106/p3" title="C&#x103;n h&#x1ED9; Masteri Water Front">
                                    C&#x103;n h&#x1ED9; Masteri Water Front
                                </a>
                            </h3>
                            <div>Dự án: Masteri Waterfront</div>
                        </div>
                    </li>
                    <li class="housetemplate">
                        <div>
                            <a href="/can-ho-chung-cu-dong-anh/villa-avenue-van-tri-pj5101/p3" title="Bi&#x1EC7;t th&#x1EF1; Villa Avenue V&#xE2;n Tr&#xEC;">
                                <img src="https://file4.batdongsan.com.vn/crop/233x150/2020/10/16/hmcVYWuR/20201016160807-4001.jpg" alt="Bi&#x1EC7;t th&#x1EF1; Villa Avenue V&#xE2;n Tr&#xEC;" class="img230">
                            </a>
                        </div>
                        <div class="below-img">
                            <h3 class="prj-name">
                                <a href="/can-ho-chung-cu-dong-anh/villa-avenue-van-tri-pj5101/p3" title="Bi&#x1EC7;t th&#x1EF1; Villa Avenue V&#xE2;n Tr&#xEC;">
                                    Bi&#x1EC7;t th&#x1EF1; Villa Avenue V&#xE2;n Tr&#xEC;
                                </a>
                            </h3>
                            <div>Dự án: Villa Avenue V&#xE2;n Tr&#xEC;</div>
                        </div>
                    </li>
                    <li class="housetemplate">
                        <div>
                            <a href="/can-ho-chung-cu-quan-8/can-ho-d-aqua-pj5099/p3" title="C&#x103;n h&#x1ED9; D-Aqua">
                                <img src="https://file4.batdongsan.com.vn/crop/233x150/2020/10/15/hmcVYWuR/20201015104457-3f26.jpg" alt="C&#x103;n h&#x1ED9; D-Aqua" class="img230">
                            </a>
                        </div>
                        <div class="below-img">
                            <h3 class="prj-name">
                                <a href="/can-ho-chung-cu-quan-8/can-ho-d-aqua-pj5099/p3" title="C&#x103;n h&#x1ED9; D-Aqua">
                                    C&#x103;n h&#x1ED9; D-Aqua
                                </a>
                            </h3>
                            <div>Dự án: C&#x103;n h&#x1ED9; D-Aqua</div>
                        </div>
                    </li>
                    <li class="housetemplate">
                        <div>
                            <a href="/can-ho-chung-cu-thu-duc/dragon-sky-view-pj5091/p3" title="C&#x103;n h&#x1ED9; Dragon Sky View">
                                <img src="https://file4.batdongsan.com.vn/crop/233x150/2020/10/06/hmcVYWuR/20201006142543-91e1.jpg" alt="C&#x103;n h&#x1ED9; Dragon Sky View" class="img230">
                            </a>
                        </div>
                        <div class="below-img">
                            <h3 class="prj-name">
                                <a href="/can-ho-chung-cu-thu-duc/dragon-sky-view-pj5091/p3" title="C&#x103;n h&#x1ED9; Dragon Sky View">
                                    C&#x103;n h&#x1ED9; Dragon Sky View
                                </a>
                            </h3>
                            <div>Dự án: Dragon Sky View</div>
                        </div>
                    </li>
                    <li class="housetemplate">
                        <div>
                            <a href="/can-ho-chung-cu-thu-dau-mot-bd/opal-cityview-pj5089/p3" title="C&#x103;n h&#x1ED9; Opal Cityview">
                                <img src="https://file4.batdongsan.com.vn/crop/233x150/2020/10/05/hmcVYWuR/20201005112801-df80.jpg" alt="C&#x103;n h&#x1ED9; Opal Cityview" class="img230">
                            </a>
                        </div>
                        <div class="below-img">
                            <h3 class="prj-name">
                                <a href="/can-ho-chung-cu-thu-dau-mot-bd/opal-cityview-pj5089/p3" title="C&#x103;n h&#x1ED9; Opal Cityview">
                                    C&#x103;n h&#x1ED9; Opal Cityview
                                </a>
                            </h3>
                            <div>Dự án: Opal Cityview</div>
                        </div>
                    </li>
                    <li class="housetemplate">
                        <div>
                            <a href="/can-ho-chung-cu-quan-9/masteri-centre-point-pj5084/p3" title="C&#x103;n h&#x1ED9; Masteri Centre Point">
                                <img src="https://file4.batdongsan.com.vn/crop/233x150/2020/09/30/hmcVYWuR/20200930111401-25dc.jpg" alt="C&#x103;n h&#x1ED9; Masteri Centre Point" class="img230">
                            </a>
                        </div>
                        <div class="below-img">
                            <h3 class="prj-name">
                                <a href="/can-ho-chung-cu-quan-9/masteri-centre-point-pj5084/p3" title="C&#x103;n h&#x1ED9; Masteri Centre Point">
                                    C&#x103;n h&#x1ED9; Masteri Centre Point
                                </a>
                            </h3>
                            <div>Dự án: Masteri Centre Point</div>
                        </div>
                    </li>
                    <li class="housetemplate">
                        <div>
                            <a href="/can-ho-chung-cu-duc-hoa-la/can-ho-family-home-pj5077/p3" title="C&#x103;n h&#x1ED9; Family Home">
                                <img src="https://file4.batdongsan.com.vn/crop/233x150/2020/09/22/hmcVYWuR/20200922110939-9a5f.jpg" alt="C&#x103;n h&#x1ED9; Family Home" class="img230">
                            </a>
                        </div>
                        <div class="below-img">
                            <h3 class="prj-name">
                                <a href="/can-ho-chung-cu-duc-hoa-la/can-ho-family-home-pj5077/p3" title="C&#x103;n h&#x1ED9; Family Home">
                                    C&#x103;n h&#x1ED9; Family Home
                                </a>
                            </h3>
                            <div>Dự án: C&#x103;n h&#x1ED9; Family Home</div>
                        </div>
                    </li>
            </ul>
        </div>
    </div>

<div style="clear: both;"></div>
<div class="project-body-left">
    
    <div class="container-default">
        <div>
            <div class="prj-top-by-cate">
                <ul>
                        <li class="title_158">
                            <h2>
                                <a class="top-cate-header" href="javascript:void(0)" title="Khu ngh&#x1EC9; d&#x1B0;&#x1EE1;ng, Sinh th&#xE1;i" data-id="158">
                                    <span style="white-space: nowrap;">Khu ngh&#x1EC9; d&#x1B0;&#x1EE1;ng, Sinh th&#xE1;i</span>
                                </a>
                            </h2>
                        </li>
                        <li class="title_159">
                            <h2>
                                <a class="top-cate-header" href="javascript:void(0)" title="Khu c&#xF4;ng nghi&#x1EC7;p" data-id="159">
                                    <span style="white-space: nowrap;">Khu c&#xF4;ng nghi&#x1EC7;p</span>
                                </a>
                            </h2>
                        </li>
                        <li class="title_155">
                            <h2>
                                <a class="top-cate-header" href="javascript:void(0)" title="C&#x103;n h&#x1ED9;, Chung c&#x1B0;" data-id="155">
                                    <span style="white-space: nowrap;">C&#x103;n h&#x1ED9;, Chung c&#x1B0;</span>
                                </a>
                            </h2>
                        </li>
                </ul>
            </div>
            <div class="prj-top-by-content">
                    <div class="content_158 prjcontent" style="display: none">
                        <ul>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/khu-nghi-duong-sinh-thai-phu-quoc-kg/grand-world-phu-quoc-pj2172" title="Grand World Ph&#xFA; Qu&#x1ED1;c">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2015/08/08/0I4XNtd4/20150808120415-3a5c.jpg" class="bor-none" alt="Grand World Ph&#xFA; Qu&#x1ED1;c"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/khu-nghi-duong-sinh-thai-phu-quoc-kg/grand-world-phu-quoc-pj2172" title="Grand World Ph&#xFA; Qu&#x1ED1;c">Grand World Ph&#xFA; Qu&#x1ED1;c</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>X&#xE3; G&#xE0;nh D&#x1EA7;u, Ph&#xFA; Qu&#x1ED1;c, Ki&#xEA;n Giang</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">62 tri&#x1EC7;u/m&#xB2;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/khu-nghi-duong-sinh-thai-phuc-tho/khu-biet-thu-sinh-thai-cam-dinh-pj563" title="Khu bi&#x1EC7;t th&#x1EF1; sinh th&#xE1;i C&#x1EA9;m &#x110;&#xEC;nh">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2016/09/21/rSV267QK/20160921154657-ecc7.jpg" class="bor-none" alt="Khu bi&#x1EC7;t th&#x1EF1; sinh th&#xE1;i C&#x1EA9;m &#x110;&#xEC;nh"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/khu-nghi-duong-sinh-thai-phuc-tho/khu-biet-thu-sinh-thai-cam-dinh-pj563" title="Khu bi&#x1EC7;t th&#x1EF1; sinh th&#xE1;i C&#x1EA9;m &#x110;&#xEC;nh">Khu bi&#x1EC7;t th&#x1EF1; sinh th&#xE1;i C&#x1EA9;m &#x110;&#xEC;nh</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>&#x110;&#x1B0;&#x1EDD;ng Qu&#x1ED1;c l&#x1ED9; 32, X&#xE3; Hi&#x1EC7;p Thu&#x1EAD;n, Ph&#xFA;c Th&#x1ECD;, H&#xE0; N&#x1ED9;i</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">2.8 tri&#x1EC7;u/m&#xB2;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/khu-nghi-duong-sinh-thai-luong-son-hb/ivory-villas-resort-pj1896" title="Ivory Villas &amp; Resort">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2016/09/08/eGYiO6Tq/20160908082944-f14f.jpg" class="bor-none" alt="Ivory Villas &amp; Resort"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/khu-nghi-duong-sinh-thai-luong-son-hb/ivory-villas-resort-pj1896" title="Ivory Villas &amp; Resort">Ivory Villas &amp; Resort</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>&#x110;&#x1B0;&#x1EDD;ng Qu&#x1ED1;c l&#x1ED9; 6, X&#xE3; L&#xE2;m S&#x1A1;n, L&#x1B0;&#x1A1;ng S&#x1A1;n, H&#xF2;a B&#xEC;nh</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">4.2 tri&#x1EC7;u/m&#xB2;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/khu-nghi-duong-sinh-thai-luong-son-hb/green-oasis-villas-pj938" title="Green Oasis Villas">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2017/06/16/0I4XNtd4/20170616150426-2382.jpg" class="bor-none" alt="Green Oasis Villas"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/khu-nghi-duong-sinh-thai-luong-son-hb/green-oasis-villas-pj938" title="Green Oasis Villas">Green Oasis Villas</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>&#x110;&#x1B0;&#x1EDD;ng Qu&#x1ED1;c l&#x1ED9; 6, X&#xE3; Nhu&#x1EAD;n Tr&#x1EA1;ch, L&#x1B0;&#x1A1;ng S&#x1A1;n, H&#xF2;a B&#xEC;nh</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">2.1 tri&#x1EC7;u/m&#xB2;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/khu-nghi-duong-sinh-thai-la-gi-bth/fusion-alya-la-gi-pj474" title="Fusion Alya La Gi">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2017/02/10/hmcVYWuR/20170210104050-e961.jpg" class="bor-none" alt="Fusion Alya La Gi"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/khu-nghi-duong-sinh-thai-la-gi-bth/fusion-alya-la-gi-pj474" title="Fusion Alya La Gi">Fusion Alya La Gi</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>&#x110;&#x1B0;&#x1EDD;ng Tr&#x1EA7;n B&#xEC;nh Tr&#x1ECD;ng, Ph&#x1B0;&#x1EDD;ng Ph&#x1B0;&#x1EDB;c L&#x1ED9;c, La Gi, B&#xEC;nh Thu&#x1EAD;n</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">32 tri&#x1EC7;u/m&#xB2;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/khu-nghi-duong-sinh-thai-vung-tau-vt/the-maris-vung-tau-pj3192" title="The Maris V&#x169;ng T&#xE0;u">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2017/10/27/hmcVYWuR/20171027084835-faaf.jpg" class="bor-none" alt="The Maris V&#x169;ng T&#xE0;u"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/khu-nghi-duong-sinh-thai-vung-tau-vt/the-maris-vung-tau-pj3192" title="The Maris V&#x169;ng T&#xE0;u">The Maris V&#x169;ng T&#xE0;u</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>&#x110;&#x1B0;&#x1EDD;ng 3/2, Ph&#x1B0;&#x1EDD;ng 10, V&#x169;ng T&#xE0;u, B&#xE0; R&#x1ECB;a V&#x169;ng T&#xE0;u</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">18 tri&#x1EC7;u/m&#xB2;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                        </ul>
                    </div>
                    <div class="content_159 prjcontent" style="display: none">
                        <ul>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/khu-cong-nghiep-thu-dau-mot-bd/vsip-ii-binh-duong-pj1338" title="VSIP II B&#xEC;nh D&#x1B0;&#x1A1;ng">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2016/09/05/eGYiO6Tq/20160905103645-62c6.jpg" class="bor-none" alt="VSIP II B&#xEC;nh D&#x1B0;&#x1A1;ng"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/khu-cong-nghiep-thu-dau-mot-bd/vsip-ii-binh-duong-pj1338" title="VSIP II B&#xEC;nh D&#x1B0;&#x1A1;ng">VSIP II B&#xEC;nh D&#x1B0;&#x1A1;ng</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>&#x110;&#x1B0;&#x1EDD;ng D&#xE2;n Ch&#x1EE7;, Ph&#x1B0;&#x1EDD;ng Hi&#x1EC7;p An, Th&#x1EE7; D&#x1EA7;u M&#x1ED9;t, B&#xEC;nh D&#x1B0;&#x1A1;ng</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">3.3 tri&#x1EC7;u/m&#xB2;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/khu-cong-nghiep-thuan-an-bd/vsip-i-binh-duong-pj1337" title="VSIP I B&#xEC;nh D&#x1B0;&#x1A1;ng">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2016/09/05/us6Zzrro/20160905085511-7c50.jpg" class="bor-none" alt="VSIP I B&#xEC;nh D&#x1B0;&#x1A1;ng"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/khu-cong-nghiep-thuan-an-bd/vsip-i-binh-duong-pj1337" title="VSIP I B&#xEC;nh D&#x1B0;&#x1A1;ng">VSIP I B&#xEC;nh D&#x1B0;&#x1A1;ng</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>&#x110;&#x1B0;&#x1EDD;ng 10, Ph&#x1B0;&#x1EDD;ng B&#xEC;nh H&#xF2;a, Thu&#x1EAD;n An, B&#xEC;nh D&#x1B0;&#x1A1;ng</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">5.5 tri&#x1EC7;u/m&#xB2;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/khu-cong-nghiep-can-duoc-la/khu-cong-nghiep-cau-cang-img-phuoc-dong-pj5058" title="Khu C&#xF4;ng nghi&#x1EC7;p c&#x1EA7;u c&#x1EA3;ng IMG Ph&#x1B0;&#x1EDB;c &#x110;&#xF4;ng">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2020/10/06/hmcVYWuR/20201006085734-8df3.jpg" class="bor-none" alt="Khu C&#xF4;ng nghi&#x1EC7;p c&#x1EA7;u c&#x1EA3;ng IMG Ph&#x1B0;&#x1EDB;c &#x110;&#xF4;ng"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/khu-cong-nghiep-can-duoc-la/khu-cong-nghiep-cau-cang-img-phuoc-dong-pj5058" title="Khu C&#xF4;ng nghi&#x1EC7;p c&#x1EA7;u c&#x1EA3;ng IMG Ph&#x1B0;&#x1EDB;c &#x110;&#xF4;ng">Khu C&#xF4;ng nghi&#x1EC7;p c&#x1EA7;u c&#x1EA3;ng IMG Ph&#x1B0;&#x1EDB;c &#x110;&#xF4;ng</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>&#x110;&#x1B0;&#x1EDD;ng &#x110;T 826B, X&#xE3; Ph&#x1B0;&#x1EDB;c &#x110;&#xF4;ng, C&#x1EA7;n &#x110;&#x1B0;&#x1EDB;c, Long An</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">&#x110;ang c&#x1EAD;p nh&#x1EAD;t</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/khu-cong-nghiep-hai-an-hp/khu-cong-nghiep-nam-dinh-vu-pj5073" title="Khu c&#xF4;ng nghi&#x1EC7;p Nam &#x110;&#xEC;nh V&#x169;">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2020/09/17/hmcVYWuR/20200917165029-9600.jpg" class="bor-none" alt="Khu c&#xF4;ng nghi&#x1EC7;p Nam &#x110;&#xEC;nh V&#x169;"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/khu-cong-nghiep-hai-an-hp/khu-cong-nghiep-nam-dinh-vu-pj5073" title="Khu c&#xF4;ng nghi&#x1EC7;p Nam &#x110;&#xEC;nh V&#x169;">Khu c&#xF4;ng nghi&#x1EC7;p Nam &#x110;&#xEC;nh V&#x169;</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>Khu kinh t&#x1EBF; &#x110;&#xEC;nh V&#x169; &#x2013; C&#xE1;t H&#x1EA3;i, Ph&#x1B0;&#x1EDD;ng &#x110;&#xF4;ng H&#x1EA3;i 2, H&#x1EA3;i An, H&#x1EA3;i Ph&#xF2;ng</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">&#x110;ang c&#x1EAD;p nh&#x1EAD;t</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/khu-cong-nghiep-binh-chanh/khu-cong-nghiep-phong-phu-pj520" title="Khu c&#xF4;ng nghi&#x1EC7;p Phong Ph&#xFA;">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2020/07/22/hmcVYWuR/20200722091926-41d0.jpg" class="bor-none" alt="Khu c&#xF4;ng nghi&#x1EC7;p Phong Ph&#xFA;"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/khu-cong-nghiep-binh-chanh/khu-cong-nghiep-phong-phu-pj520" title="Khu c&#xF4;ng nghi&#x1EC7;p Phong Ph&#xFA;">Khu c&#xF4;ng nghi&#x1EC7;p Phong Ph&#xFA;</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>&#x110;&#x1B0;&#x1EDD;ng Tr&#x1ECB;nh Quang Ngh&#x1ECB;, X&#xE3; Phong Ph&#xFA;, B&#xEC;nh Ch&#xE1;nh, H&#x1ED3; Ch&#xED; Minh</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">&#x110;ang c&#x1EAD;p nh&#x1EAD;t</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/khu-cong-nghiep-duc-hoa-la/khu-cong-nghiep-tan-do-pj1284" title="Khu C&#xF4;ng Nghi&#x1EC7;p T&#xE2;n &#x110;&#xF4;">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2020/07/01/hmcVYWuR/20200701111003-0f78.jpg" class="bor-none" alt="Khu C&#xF4;ng Nghi&#x1EC7;p T&#xE2;n &#x110;&#xF4;"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/khu-cong-nghiep-duc-hoa-la/khu-cong-nghiep-tan-do-pj1284" title="Khu C&#xF4;ng Nghi&#x1EC7;p T&#xE2;n &#x110;&#xF4;">Khu C&#xF4;ng Nghi&#x1EC7;p T&#xE2;n &#x110;&#xF4;</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>&#x110;&#x1EE9;c H&#xF2;a , Long An , Vi&#x1EC7;t Nam</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">&#x110;ang c&#x1EAD;p nh&#x1EAD;t</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                        </ul>
                    </div>
                    <div class="content_155 prjcontent" style="display: none">
                        <ul>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/can-ho-chung-cu-dong-da/chung-cu-vuon-xuan-71-nguyen-chi-thanh-pj1256" title="Chung c&#x1B0; V&#x1B0;&#x1EDD;n Xu&#xE2;n - 71 Nguy&#x1EC5;n Ch&#xED; Thanh">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2016/09/19/hmcVYWuR/20160919165226-80ea.jpg" class="bor-none" alt="Chung c&#x1B0; V&#x1B0;&#x1EDD;n Xu&#xE2;n - 71 Nguy&#x1EC5;n Ch&#xED; Thanh"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/can-ho-chung-cu-dong-da/chung-cu-vuon-xuan-71-nguyen-chi-thanh-pj1256" title="Chung c&#x1B0; V&#x1B0;&#x1EDD;n Xu&#xE2;n - 71 Nguy&#x1EC5;n Ch&#xED; Thanh">Chung c&#x1B0; V&#x1B0;&#x1EDD;n Xu&#xE2;n - 71 Nguy&#x1EC5;n Ch&#xED; Thanh</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>71 Nguy&#x1EC5;n Ch&#xED; Thanh, &#x110;&#x1ED1;ng &#x110;a, H&#xE0; N&#x1ED9;i</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">33.5 tri&#x1EC7;u/m&#xB2;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/can-ho-chung-cu-ba-dinh/vinhomes-metropolis-lieu-giai-pj2292" title="Vinhomes Metropolis - Li&#x1EC5;u Giai">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2015/10/31/0I4XNtd4/20151031155148-8367.jpg" class="bor-none" alt="Vinhomes Metropolis - Li&#x1EC5;u Giai"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/can-ho-chung-cu-ba-dinh/vinhomes-metropolis-lieu-giai-pj2292" title="Vinhomes Metropolis - Li&#x1EC5;u Giai">Vinhomes Metropolis - Li&#x1EC5;u Giai</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>29 Ph&#x1ED1; Li&#x1EC5;u Giai, Ph&#x1B0;&#x1EDD;ng Ngo&#x323;c Kha&#x301;nh, Ba &#x110;&#xEC;nh, H&#xE0; N&#x1ED9;i</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">64 tri&#x1EC7;u/m&#xB2;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/can-ho-chung-cu-quan-8/diamond-riverside-pj788" title="Diamond Riverside">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2016/03/08/0I4XNtd4/20160308081655-5190.jpg" class="bor-none" alt="Diamond Riverside"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/can-ho-chung-cu-quan-8/diamond-riverside-pj788" title="Diamond Riverside">Diamond Riverside</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>&#x110;&#x1B0;&#x1EDD;ng V&#xF5; V&#x103;n Ki&#x1EC7;t, Ph&#x1B0;&#x1EDD;ng 16, Qu&#x1EAD;n 8, H&#x1ED3; Ch&#xED; Minh</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">15 tri&#x1EC7;u/m&#xB2;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/can-ho-chung-cu-di-an-bd/bcons-plaza-pj5102" title="Bcons Plaza">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2020/10/19/hmcVYWuR/20201019091550-3e03.jpg" class="bor-none" alt="Bcons Plaza"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/can-ho-chung-cu-di-an-bd/bcons-plaza-pj5102" title="Bcons Plaza">Bcons Plaza</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>&#x110;&#x1B0;&#x1EDD;ng Th&#x1ED1;ng Nh&#x1EA5;t, Ph&#x1B0;&#x1EDD;ng &#x110;&#xF4;ng H&#xF2;a, D&#x129; An, B&#xEC;nh D&#x1B0;&#x1A1;ng</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">29 tri&#x1EC7;u/m&#xB2;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/can-ho-chung-cu-hoang-mai/mandarin-garden-2-pj2408" title="Mandarin Garden 2">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2016/08/25/us6Zzrro/20160825155035-b7b0.jpg" class="bor-none" alt="Mandarin Garden 2"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/can-ho-chung-cu-hoang-mai/mandarin-garden-2-pj2408" title="Mandarin Garden 2">Mandarin Garden 2</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>S&#x1ED1; 493 &#x111;&#x1B0;&#x1EDD;ng Tr&#x1B0;&#x1A1;ng &#x110;&#x1ECB;nh, ph&#x1B0;&#x1EDD;ng T&#xE2;n Mai, Ho&#xE0;ng Mai, Ha&#x300; N&#xF4;&#x323;i</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">30 tri&#x1EC7;u/m&#xB2;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li>
                                    <div>
                                        <div class="thumb">
                                            <a href="/can-ho-chung-cu-quan-9/masteri-centre-point-pj5084" title="Masteri Centre Point">
                                                <img src="https://file4.batdongsan.com.vn/crop/220x144/2020/09/30/hmcVYWuR/20200930111355-d570.jpg" class="bor-none" alt="Masteri Centre Point"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3>
                                                <strong>
                                                    <a href="/can-ho-chung-cu-quan-9/masteri-centre-point-pj5084" title="Masteri Centre Point">Masteri Centre Point</a>
                                                </strong>
                                            </h3>
                                            <div>
                                                <span class="col1">Địa chỉ: </span>
                                                <p>&#x110;&#x1B0;&#x1EDD;ng Nguy&#x1EC5;n Xi&#x1EC3;n, Ph&#x1B0;&#x1EDD;ng Long Th&#x1EA1;nh M&#x1EF9;, Qu&#x1EAD;n 9, H&#x1ED3; Ch&#xED; Minh</p>
                                            </div>
                                            <div>
                                                <span class="col1">Giá từ: </span>
                                                <span class="price">49.5 tri&#x1EC7;u/m&#xB2;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                        </ul>
                    </div>
            <div class="clear"></div>
            </div>
        </div>
    </div>

</div>
<div class="project-body-right">
    

<div class="container-commom">
    <div class="hot-article">
        <h2 class="prj-line normal"><span>Đánh giá dự án</span></h2>
            <div class="bor_box">
                                <div id="firstavatar">
                    <a href="/tin-thi-truong/danh-gia-du-an-bcons-garden-can-ho-khu-dong-sai-gon-gia-chi-tu-1-2-ty-dong-ar105475">
                        <img src="https://file4.batdongsan.com.vn/resize/320x200/2020/11/10/tEfrXoEj/20201110083410-17e1.jpg">
                    </a>
                </div>
                <h3 class="firstTitle" id="firsttitle"><a href="/tin-thi-truong/danh-gia-du-an-bcons-garden-can-ho-khu-dong-sai-gon-gia-chi-tu-1-2-ty-dong-ar105475">&#x110;&#xE1;nh gi&#xE1; d&#x1EF1; &#xE1;n Bcons Garden: C&#x103;n h&#x1ED9; khu &#x110;&#xF4;ng S&#xE0;i G&#xF2;n, gi&#xE1; ch&#x1EC9; t&#x1EEB; 1,2 t&#x1EF7; &#x111;&#x1ED3;ng</a></h3>
                <ul id="hotarticle">
                    <li style="display: list-item;">
                        <h3>
                            <a href="/tin-thi-truong/danh-gia-du-an-hatay-millennium-can-ho-tam-trung-hiem-hoi-khu-tay-ha-noi-co-gi-ar104957" title="&#x110;&#xE1;nh gi&#xE1; d&#x1EF1; &#xE1;n Hatay Millennium: C&#x103;n h&#x1ED9; t&#x1EA7;m trung hi&#x1EBF;m hoi khu T&#xE2;y H&#xE0; N&#x1ED9;i c&#xF3; g&#xEC;?" img="https://file4.batdongsan.com.vn/crop/320x200/2020/09/08/hmcVYWuR/20200908090222-b7d9.jpg">
                                Đánh giá dự án Hatay Millennium: Căn hộ tầm trung hiếm hoi khu Tây Hà Nội có gì?<img class="news-image-video-icon" atl='' src='https://file4.batdongsan.com.vn/images/opt/bds-video.png' />
                            </a>
                        </h3>
                    </li>
                    <li style="display: list-item;">
                        <h3>
                            <a href="/tin-thi-truong/danh-gia-du-an-roman-plaza-can-ho-30-trieu-dong-m2-cua-ngo-khu-tay-co-gi-noi-troi-ar105141" title="&#x110;&#xE1;nh gi&#xE1; d&#x1EF1; &#xE1;n Roman Plaza: C&#x103;n h&#x1ED9; 30 tri&#x1EC7;u &#x111;&#x1ED3;ng/m2 c&#x1EED;a ng&#xF5; khu T&#xE2;y c&#xF3; g&#xEC; n&#x1ED5;i tr&#x1ED9;i?" img="https://file4.batdongsan.com.vn/crop/320x200/2020/09/29/hmcVYWuR/20200929083712-ea87.jpg">
                                Đánh giá dự án Roman Plaza: Căn hộ 30 triệu đồng/m2 cửa ngõ khu Tây có gì nổi trội?<img class="news-image-video-icon" atl='' src='https://file4.batdongsan.com.vn/images/opt/bds-video.png' />
                            </a>
                        </h3>
                    </li>
                    <li style="display: list-item;">
                        <h3>
                            <a href="/tin-thi-truong/danh-gia-du-an-stella-mega-city-can-canh-khu-do-thi-lon-nhat-can-tho-ar105310" title="&#x110;&#xE1;nh gi&#xE1; d&#x1EF1; &#xE1;n Stella Mega City: C&#x1EAD;n c&#x1EA3;nh khu &#x111;&#xF4; th&#x1ECB; l&#x1EDB;n nh&#x1EA5;t C&#x1EA7;n Th&#x1A1;" img="https://file4.batdongsan.com.vn/crop/320x200/2020/10/20/hmcVYWuR/20201020083522-f3eb.jpg">
                                Đánh giá dự án Stella Mega City: Cận cảnh khu đô thị lớn nhất Cần Thơ<img class="news-image-video-icon" atl='' src='https://file4.batdongsan.com.vn/images/opt/bds-video.png' />
                            </a>
                        </h3>
                    </li>
                    <li style="display: list-item;">
                        <h3>
                            <a href="/tin-thi-truong/danh-gia-du-an-bcons-garden-can-ho-khu-dong-sai-gon-gia-chi-tu-1-2-ty-dong-ar105475" title="&#x110;&#xE1;nh gi&#xE1; d&#x1EF1; &#xE1;n Bcons Garden: C&#x103;n h&#x1ED9; khu &#x110;&#xF4;ng S&#xE0;i G&#xF2;n, gi&#xE1; ch&#x1EC9; t&#x1EEB; 1,2 t&#x1EF7; &#x111;&#x1ED3;ng" img="https://file4.batdongsan.com.vn/crop/320x200/2020/11/10/tEfrXoEj/20201110083410-17e1.jpg">
                                Đánh giá dự án Bcons Garden: Căn hộ khu Đông Sài Gòn, giá chỉ từ 1,2 tỷ đồng<img class="news-image-video-icon" atl='' src='https://file4.batdongsan.com.vn/images/opt/bds-video.png' />
                            </a>
                        </h3>
                    </li>
                </ul>
                <div style="clear: both;"></div>
            </div>
    </div>
</div>
                    

    <div style="clear: both; margin-bottom: 10px;">
    </div>
    
    <div class="hot-article">
        <h2 class="prj-line normal"><span>Tiến độ dự án</span></h2>
        <div class="bor_box" id="prjProgress">
            <div class="prj-prgress">
                    <div class="progress clear">
                        <div class="imgthumb">
                            <a href="/du-an-khac-tan-phu/tan-phu-center-city-pj5120/p4">
                                <img src="https://file4.batdongsan.com.vn/crop/78x78/2020/11/09/hmcVYWuR/20201109105559-b86e.jpg"/>
                            </a>
                        </div>
                        <div class="arclink">
                            <h3>
                                <a href="/du-an-khac-tan-phu/tan-phu-center-city-pj5120/p4" title="T&#xE2;n Ph&#xFA; Center City">T&#xE2;n Ph&#xFA; Center City</a>
                            </h3>
                            <div>Tiến độ dự án cập nhật ngày <br />09/11/2020</div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="progress clear">
                        <div class="imgthumb">
                            <a href="/du-an-khac-nui-thanh-qna/chu-lai-riverside-pj5117/p4">
                                <img src="https://file4.batdongsan.com.vn/crop/78x78/2020/11/06/hmcVYWuR/20201106100551-570c.jpg"/>
                            </a>
                        </div>
                        <div class="arclink">
                            <h3>
                                <a href="/du-an-khac-nui-thanh-qna/chu-lai-riverside-pj5117/p4" title="Chu Lai Riverside">Chu Lai Riverside</a>
                            </h3>
                            <div>Tiến độ dự án cập nhật ngày <br />04/11/2020</div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="progress clear">
                        <div class="imgthumb">
                            <a href="/khu-nghi-duong-sinh-thai-phu-quoc-kg/grand-world-phu-quoc-pj2172/p4">
                                <img src="https://file4.batdongsan.com.vn/crop/78x78/2015/08/08/0I4XNtd4/20150808120415-3a5c.jpg"/>
                            </a>
                        </div>
                        <div class="arclink">
                            <h3>
                                <a href="/khu-nghi-duong-sinh-thai-phu-quoc-kg/grand-world-phu-quoc-pj2172/p4" title="Grand World Ph&#xFA; Qu&#x1ED1;c">Grand World Ph&#xFA; Qu&#x1ED1;c</a>
                            </h3>
                            <div>Tiến độ dự án cập nhật ngày <br />29/10/2020</div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="progress clear">
                        <div class="imgthumb">
                            <a href="/khu-do-thi-moi-lang-son-ls/apec-diamond-park-pj5107/p4">
                                <img src="https://file4.batdongsan.com.vn/crop/78x78/2020/10/28/hmcVYWuR/20201028173335-23fe.jpg"/>
                            </a>
                        </div>
                        <div class="arclink">
                            <h3>
                                <a href="/khu-do-thi-moi-lang-son-ls/apec-diamond-park-pj5107/p4" title="Apec Diamond Park">Apec Diamond Park</a>
                            </h3>
                            <div>Tiến độ dự án cập nhật ngày <br />28/10/2020</div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="progress clear">
                        <div class="imgthumb">
                            <a href="/khu-phuc-hop-quan-3/terra-royal-pj763/p4">
                                <img src="https://file4.batdongsan.com.vn/crop/78x78/2020/10/22/hmcVYWuR/20201022114237-ae30.jpg"/>
                            </a>
                        </div>
                        <div class="arclink">
                            <h3>
                                <a href="/khu-phuc-hop-quan-3/terra-royal-pj763/p4" title="Terra Royal">Terra Royal</a>
                            </h3>
                            <div>Tiến độ dự án cập nhật ngày <br />22/10/2020</div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="progress clear">
                        <div class="imgthumb">
                            <a href="/can-ho-chung-cu-quan-8/diamond-riverside-pj788/p4">
                                <img src="https://file4.batdongsan.com.vn/crop/78x78/2016/03/08/0I4XNtd4/20160308081655-5190.jpg"/>
                            </a>
                        </div>
                        <div class="arclink">
                            <h3>
                                <a href="/can-ho-chung-cu-quan-8/diamond-riverside-pj788/p4" title="Diamond Riverside">Diamond Riverside</a>
                            </h3>
                            <div>Tiến độ dự án cập nhật ngày <br />22/10/2020</div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="progress clear">
                        <div class="imgthumb">
                            <a href="/khu-do-thi-moi-go-vap/cityland-park-hills-pj2409/p4">
                                <img src="https://file4.batdongsan.com.vn/crop/78x78/2020/10/21/hmcVYWuR/20201021092453-5470.jpg"/>
                            </a>
                        </div>
                        <div class="arclink">
                            <h3>
                                <a href="/khu-do-thi-moi-go-vap/cityland-park-hills-pj2409/p4" title="CityLand Park Hills">CityLand Park Hills</a>
                            </h3>
                            <div>Tiến độ dự án cập nhật ngày <br />21/10/2020</div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="progress clear">
                        <div class="imgthumb">
                            <a href="/du-an-khac-cam-lam-kh/suoi-tan-diamond-town-pj5103/p4">
                                <img src="https://file4.batdongsan.com.vn/crop/78x78/2020/10/20/hmcVYWuR/20201020092750-94e6.jpg"/>
                            </a>
                        </div>
                        <div class="arclink">
                            <h3>
                                <a href="/du-an-khac-cam-lam-kh/suoi-tan-diamond-town-pj5103/p4" title="Su&#x1ED1;i T&#xE2;n Diamond Town">Su&#x1ED1;i T&#xE2;n Diamond Town</a>
                            </h3>
                            <div>Tiến độ dự án cập nhật ngày <br />20/10/2020</div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="progress clear">
                        <div class="imgthumb">
                            <a href="/khu-phuc-hop-ha-dong/toa-thap-thien-nien-ky-pj593/p4">
                                <img src="https://file4.batdongsan.com.vn/crop/78x78/2019/12/20/hmcVYWuR/20191220105709-e52c.jpg"/>
                            </a>
                        </div>
                        <div class="arclink">
                            <h3>
                                <a href="/khu-phuc-hop-ha-dong/toa-thap-thien-nien-ky-pj593/p4" title="T&#xF2;a Th&#xE1;p Thi&#xEA;n Ni&#xEA;n K&#x1EF7;">T&#xF2;a Th&#xE1;p Thi&#xEA;n Ni&#xEA;n K&#x1EF7;</a>
                            </h3>
                            <div>Tiến độ dự án cập nhật ngày <br />20/10/2020</div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="progress clear">
                        <div class="imgthumb">
                            <a href="/du-an-khac-ha-dong/him-lam-van-phuc-pj3433/p4">
                                <img src="https://file4.batdongsan.com.vn/crop/78x78/2018/04/03/hmcVYWuR/20180403161910-3c70.jpg"/>
                            </a>
                        </div>
                        <div class="arclink">
                            <h3>
                                <a href="/du-an-khac-ha-dong/him-lam-van-phuc-pj3433/p4" title="Him Lam V&#x1EA1;n Ph&#xFA;c">Him Lam V&#x1EA1;n Ph&#xFA;c</a>
                            </h3>
                            <div>Tiến độ dự án cập nhật ngày <br />20/10/2020</div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
            </div>
            <div class="slide">
                <span class="slideprevprogress"></span><span class="slidenextprogress"></span>
            </div>
        </div>
    </div>

    <div style="clear: both; margin-bottom: 10px;">
    </div>
    <div class="clear"></div>
    <div class="fb-fanpage">
    <div id="fb-root"></div>    
    <script>
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=302507473246792";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="fb-page" data-href="https://www.facebook.com/Batdongsandv/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/Batdongsandv/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Batdongsandv/">Batdongsan.com.vn</a></blockquote>
    </div>
</div>

    <div style="clear: both">
    </div>
</div>
<div style="clear: both"></div>

<div class="prj-newsletter">
    <div class="col1">Cập nhật thông tin nóng hổi về các dự án trên thị trường</div>
    <div class="col2">
        <div>
            <input type="text" id="txtEmail" placeholder="Địa chỉ email của bạn" maxlength="100" />
            <input type="hidden" id="hddUserEmail" value="" />
            <input id="btnShowPopup" type="button" value="Đăng ký" class="btn-green" />
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="pop-up" id="popupHotNewsSubscription" style="display:none;">
    <div class="action">
        <label>Nhập mã bảo mật</label>
        <span id="txtSecodeMessage"></span>
        <div class="captcha">
            <input type="text" placeholder="Mã bảo mật" id="txtSecode" class="secode" maxlength="4">
            <input type="hidden" id="hddSecode" />
            <img id="imgCaptcha" src="" alt="" noloaderror="1" class="imgCaptcha" />
            <img id="btnReloadCaptcha" class="reloadCapcha" title="Đổi mã an toàn" src="https://file4.batdongsan.com.vn/images/Home/images/icon-reload.png" />
        </div>
        <span id="txtEmailModalMessage"></span>
        <input type="text" id="txtEmailModal" placeholder="Địa chỉ email của bạn" class="email" maxlength="100" />
        <input id="btnSendEmail" type="button" value="Gửi" />
    </div>
    <div class="result" style="display: none; text-align: center; padding: 15px;">
        <div class="fa fa-close" id="closePopup"></div>
        <div class="loading">
            <img id="imgLoading" src="https://content.batdongsan.com.vn/Scripts/fancybox215/source/fancybox_loading.gif" />
        </div>
    </div>
</div>
<div class="lg-backdrop in" style="transition-duration: 150ms;display: none"></div>

                <div class="banner-bottom">
                    <div style="float: left; width: 560px">
                    </div>
                    <div style="float: left; width: 430px; margin-left: 5px">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="boxLinkFooter">
                        <div id="boxLink" class="footer-link-new">
        <ul><li><a href="/ban-can-ho-chung-cu-rivera-park-ha-noi">Chung cư Rivera Park Hà Nội</a></li><li><a href="/ban-can-ho-chung-cu-chung-cu-c1-c2-xuan-dinh">Chung cư C1 C2 Xuân Đỉnh</a></li><li><a href="/ban-can-ho-chung-cu-anland-nam-cuong">Chung cư Anland Nam Cường</a></li><li><a href="/ban-can-ho-chung-cu-hanhud-hoang-quoc-viet">Chung cư Hanhud Hoàng Quốc Việt</a></li><li><a href="/ban-can-ho-chung-cu-sunshine-center">Sunshine Center</a></li><li><a href="/ban-nha-biet-thu-lien-ke-khu-do-thi-lakeview-city">Bán biệt thự Lakeview City</a></li><li><a href="/ban-nha-biet-thu-lien-ke-ha-do-756-sai-gon">Bán biệt thự Hà Đô 756 Sài Gòn</a></li><li><a href="/ban-can-ho-chung-cu-park-12-park-hill-times-city">Bán chung cư Park 12 Park Hill Times City</a></li><li><a href="/ban-can-ho-chung-cu-vinpearl-condotel-da-nang">Bán căn hộ Vinpearl Condotel Đà Nẵng</a></li><li><a href="/ban-can-ho-chung-cu-soho-premier">Bán căn hộ Soho Premier</a></li></ul><ul><li><a href="/ban-can-ho-chung-cu-duc-long-golden-land">Bán căn hộ Đức Long Golden Land</a></li><li><a href="/ban-can-ho-chung-cu-hung-phat-golden-star">Bán căn hộ Hưng Phát Golden Star</a></li><li><a href="/ban-can-ho-chung-cu-chung-cu-129d-truong-dinh">Bán chung cư 129D Trương Định</a></li><li><a href="/ban-can-ho-chung-cu-e4-tower">Bán chung cư E4 Tower</a></li><li><a href="/ban-nha-rieng-duong-nguyen-trung-truc-66">Bán nhà Nguyễn Trung Trực Bình Thạnh</a></li><li><a href="/nha-dat-ban-bac-ninh">Nhà đất Bắc Ninh</a></li><li><a href="/ban-can-ho-chung-cu-n03-t3-t4-ngoai-giao-doan">Bán chung cư N03 T3 T4 Ngoại Giao Đoàn</a></li><li><a href="/ban-can-ho-chung-cu-valeo-dam-sen">Bán căn hộ Valeo Đầm Sen</a></li><li><a href="/ban-dat-nen-du-an-khu-do-thi-an-thinh">Bán đất nền Khu đô thị An Thịnh</a></li><li><a href="/ban-can-ho-chung-cu-golden-land">Chung cư Golden Land</a></li></ul><ul><li><a href="/ban-can-ho-chung-cu-happy-star-tower">Bán chung cư Happy Star Tower</a></li><li><a href="/ban-can-ho-chung-cu-sunrise-city">Căn hộ Sunrise City</a></li><li><a href="/nha-dat-ban-thai-nguyen">Nhà đất Thái Nguyên</a></li><li><a href="/khu-thuong-mai-dich-vu-long-bien/vincom-center-long-bien-pj994">Vincom Long Bien</a></li><li><a href="/ban-can-ho-chung-cu-sunview-1-2">Sunview Town</a></li><li><a href="/ban-can-ho-chung-cu-times-city">Chung cư Times City</a></li><li><a href="/ban-can-ho-chung-cu-chung-cu-golden-west-le-van-thiem">Chung cư Golden West</a></li><li><a href="/ban-can-ho-chung-cu-alphanam-luxury-apartment">Bán căn hộ Alphanam Luxury Apartment</a></li><li><a href="/ban-can-ho-chung-cu-ecolife-tay-ho">Bán chung cư Ecolife Tây Hồ</a></li><li><a href="/nha-dat-ban-nam-dinh">Nhà đất Nam Định</a></li></ul><ul><li><a href="/nha-dat-ban-hai-phong">Nhà đất Hải Phòng</a></li><li><a href="/nha-dat-ban-hai-duong">Nhà đất Hải Dương</a></li><li><a href="/nha-dat-ban-can-tho">Nhà đất Cần Thơ</a></li><li><a href="/ban-can-ho-chung-cu-centara-thu-thiem">Căn hộ Centara Thủ Thiêm</a></li><li><a href="/ban-can-ho-chung-cu-athena-complex">Chung cư Athena Complex</a></li><li><a href="/ban-can-ho-chung-cu-tu-hiep-plaza">Chung cư Tứ Hiệp Plaza</a></li><li><a href="/tags/cho-thue/Sang-quan-cafe">Sang quán café</a></li><li><a href="/ban-can-ho-chung-cu-gemek-premium">Chung cư Gemek Premium</a></li><li><a href="/ban-can-ho-chung-cu-vinpearl-condotel-nha-trang">Căn hộ Vinpearl Condotel Nha Trang</a></li><li><a href="https://batdongsan.com.vn/nha-dat-ban-kon-tum">Bán nhà Kon Tum</a></li></ul><ul><li><a href="https://batdongsan.com.vn/nha-dat-ban-phu-yen">Bán nhà Phú Yên</a></li><li><a href="https://batdongsan.com.vn/nha-dat-ban-thai-nguyen">Bán nhà Thái Nguyên</a></li><li><a href="https://batdongsan.com.vn/nha-dat-ban-phan-thiet-bth">Bán nhà Phan Thiết</a></li><li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-8-15">Bán nhà Phường 8 Vũng Tàu</a></li><li><a href="https://batdongsan.com.vn/ban-dat-phuong-phuoc-long-a">Bán đất Phước Long A</a></li><li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-tan-thoi-nhat-1">Bán nhà Tân Thới Nhất</a></li><li><a href="https://batdongsan.com.vn/ban-dat-xa-tan-loi-3">Bán đất Tân Lợi</a></li><li><a href="https://batdongsan.com.vn/nha-dat-ban-xa-thoi-tam-thon">Bán nhà Thới Tam Thôn</a></li><li><a href="https://batdongsan.com.vn/nha-dat-ban-xa-van-con">Bán nhà Vân Côn</a></li></ul>
    </div>



                </div>
            </div>

        <div id="SiteRight" class="banner-right clearfix">
            <div class="container-default">
                <div>
                    <div id="ban_wide_right" class="ban_wide_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_WIDE_RIGHT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":351,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":177};</script>
                    </div>

                    <div id="ban_right" class="ban_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_RIGHT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":351,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":177};</script>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="dialogPopup" role="dialog">
            <div class="nomodal"></div>
            <div class="modal-dialog">
                <div class="modal-content ">
                </div>
            </div>
        </div>

        <div class="adPosition" positionCode="BANNER_POSITION_FLOADING_BOTTOM" style=""></div>
<script type='text/javascript'> var bannerContext={"CateId":351,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":177};</script>

        <div class="hide" id="domainUserInfo" data-value="https://batdongsan.com.vn"></div>
        <div class="hide" id="domainWeb" data-value="https://batdongsan.com.vn"></div>
        <div class="hide" id="getBannerUrl" data-value="/microservice-architecture-router/Systems/Banner/GetBanners"></div>
        <div class="hide" id="domainStatistic" data-value="https://statistic.batdongsan.com.vn"></div>
        <div class="popup-content ">
        </div>
        <div class="lg-backdrop in" id="dialog-backdrop" style="transition-duration: 150ms;display: none;" onclick="account.CloseAccountPopup()"></div>
        <div id="gototop" title="Go to top"></div>
    </div>
    <div style="display: none"
         class="searching-histories-configs"
         max-searching-histories-length="20"
         sync-time-searching-histories="5"
         sync-searching-histories-url="/Product/ProductSearch/SyncSearchingHistories"
         remove-searching-histories-url="/Product/ProductSearch/RemoveSearchingHistory">
    </div>
    
    
            <script src="https://staticfile.batdongsan.com.vn/js/Common/filestatic.ver202010290634.msvbds.FrontEnd.Common.min.js"></script>
    
    <!--start BannerContext-->
    <script type='text/javascript'> var __bannerContext={"PageId":177,"CateId":351,"CityCode":null,"DistrictId":null,"CurrentPage":1};</script>
    <!--end BannerContext-->
    <!--Start of Zendesk Chat Script-->
    <script type="text/javascript">
        window.$zopim || (function (d, s) {
            var z = $zopim = function (c) { z._.push(c) }, $ = z.s =
                d.createElement(s), e = d.getElementsByTagName(s)[0]; z.set = function (o) {
                    z.set.
                        _.push(o)
                }; z._ = []; z.set._ = []; $.async = !0; $.setAttribute("charset", "utf-8");
            $.src = "https://v2.zopim.com/?6fJlcOXWwJofJZOzmeDIifb7bHGvvSte"; z.t = +new Date; $.
                type = "text/javascript"; e.parentNode.insertBefore($, e)
        })(document, "script");
    </script>
    <!--End of Zendesk Chat Script-->
    <script type="text/javascript">
            var newsLetterRegister = new newsLetterRegister.NewsLetterRegister();
            newsLetterRegister.InitializeLoad();

            var commentUser = new commentUser.CommentUser();
            commentUser.InitializeLoad();

            var paramAccount = {
                urlListLogin: '/Systems/Account/Login',
                urlListRegister: '/Systems/Account/Register',
                urlListForgetPass: '/Systems/Account/ForgetPassword',
                urlListCity: '/Contacts/CommonData/GetCityList',
                urlListDistrict: '/Contacts/CommonData/GetListDistrictByCity',
                urlListWard: '/Contacts/CommonData/GetWardList',
            };

            var account = new account.Content();
            account.Initialize(paramAccount);

            var footer = new footer.Footer();
            footer.Initialize();

            var menu = new menu.Menu();
            menu.Initialize();
    </script>

    <div sync-marked-products-url="/Product/MarkedProducts/SyncMarkedProducts"
         unmarked-product-url="/Product/MarkedProducts/UnmarkProduct"
         marked-product-ids-sync-time="0.5"></div>
    
    
    
        <script src="https://staticfile.batdongsan.com.vn/js/Project/filestatic.ver202010290634.msvbds.FrontEnd.Project.Home.min.js"></script>
        <script src="https://staticfile.batdongsan.com.vn/js/Project/filestatic.ver202010290634.msvbds.FrontEnd.Project.Newsletter.min.js"></script>
        <script src="https://staticfile.batdongsan.com.vn/js/Project/filestatic.ver202010290634.msvbds.FrontEnd.Project.Search.min.js"></script>
        <script src="https://staticfile.batdongsan.com.vn/js/filestatic.ver202010290634.msvbds.excoloSlider.min.js"></script>
    
    <script type="text/javascript">
        var paramsHome = {
            rptProjects: "#rptProjects",
        }
        var projectHome = projectHome.Home();
        projectHome.Initialize(paramsHome);

        var paramsSearch = {
            txtAutoComplete: "#txtAutoComplete",
            divCategory: "#divCategory",
            divCategoryOptions: "divCategoryOptions",
            hdCateId: "hdCateId",
            divCity: "#divCity",
            divCityOptions: "divCityOptions",
            hdCityId: "hdCityId",
            divDistrict: "#divDistrict",
            divDistrictOptions: "divDistrictOptions",
            hdDistrictId: "hdDistrictId",
            divPrice: "#divPrice",
            divPriceOptions: "divPriceOptions",
            hdPriceId: "hdPriceId",
            collapse: "#collapse",
            explandctl: "#explandctl",
            txtPriceMinValue: "#txtPriceMinValue",
            lblPriceMin: "#lblPriceMin",
            lblPriceMax: "#lblPriceMax",
            txtPriceMaxValue: "#txtPriceMaxValue",
            btnSearch: "#btnSearch",
            hddProjectId: "#hddProjectId",
            hddAutoComplete: "#hddAutoComplete",
            urlListDistrict: '/Contacts/CommonData/GetListDistrictByCity',
            urlSubmit: '/Project/ProjectSearch'
        };
        var projectSearch = projectSearch.Search();
        projectSearch.Initialize(paramsSearch);

        var paramsNewsletter = {
            txtEmail: "#txtEmail",
            btnShowPopup: "#btnShowPopup",
            txtSecode: "#txtSecode",
            hddSecode: "#hddSecode",
            imgCaptcha: "#imgCaptcha",
            btnReloadCaptcha: "#btnReloadCaptcha",
            txtEmailModal: "#txtEmailModal",
            btnSend: "#btnSendEmail",
            popup: "#popupHotNewsSubscription",
            closePopup: "#closePopup",
            btnRetry: "#btnRetry",
            url: '/Project/ProjectNewsletter'
        };
        var newsletter = projectNewsletter.Newsletter();
        newsletter.Initialize(paramsNewsletter);
    </script>

    <script type="text/javascript">
        try {
            var script_imported = document.createElement('script');
            script_imported.src = 'https://log.batdongsan.com.vn/js/bds/bds-msv-log.min.js?hv=2&dv=' + (new Date().toJSON().slice(0, 10));
            if (document.body != null && document.body != undefined) {
                document.body.appendChild(script_imported);
            } else {
                document.head.appendChild(script_imported);
            }
        } catch (e) { }
    </script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var lazyImages = [].slice.call(document.querySelectorAll('[src-lazy]'));
            window.countOfLazyImages = lazyImages.length;
            if ('IntersectionObserver' in window) {
                let lazyImageObserver = new IntersectionObserver(function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = entry.target;
                            if (lazyImage.attributes['src-lazy']) {
                                lazyImage.src = lazyImage.attributes['src-lazy'].value;
                                lazyImage.removeAttribute('src-lazy');
                                lazyImageObserver.unobserve(lazyImage);
                            }
                        };
                    });
                });
                lazyImages.forEach(function (lazyImage, i) {
                    lazyImage.setAttribute('lazy-id', i);
                    lazyImageObserver.observe(lazyImage);
                });
                (function checkDuplicate() {
                    var countOfLazyElements = [].slice.call(document.querySelectorAll('[lazy-id]'));
                    if (countOfLazyElements.length > window.countOfLazyImages) {
                        var elements = [].slice.call(document.querySelectorAll('[src-lazy]'));
                        elements.forEach(element => {
                            var lazyId = element.attributes['lazy-id'].value;
                            var lazyElements = [].slice.call(document.querySelectorAll(`[lazy-id="${lazyId}"]`));
                            if (lazyElements.length > 1) {
                                for (var i = 1; i < lazyElements.length; i++) {
                                    var lazyElement = lazyElements[i];
                                    lazyImageObserver.observe(lazyElement);
                                    lazyElement.setAttribute('lazy-id', window.countOfLazyImages);
                                    window.countOfLazyImages++;
                                }
                            }
                        });
                    }
                    setTimeout(checkDuplicate, 1000)
                })();
            } else {
                $('[src-lazy]').each(function () {
                    this.src = this.attributes['src-lazy'].value;
                    this.removeAttribute('src-lazy');
                });
            }
        });
    </script>
@endsection
@section('styles')
<link rel="stylesheet" href="https://staticfile.batdongsan.com.vn/css/filestatic.ver202010290634.msvbds.FrontEnd.min.css" />
<style>
    .arclink {
        line-height: normal;
    }

    #rptProjects {
        width: 102%;
    }
</style>
@endsection
