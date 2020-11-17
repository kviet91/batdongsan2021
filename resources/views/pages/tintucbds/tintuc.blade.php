@extends('layouts.master')
@section('title','Kênh thông tin bất động sản - Mua bán nhà đất số 1 Việt Nam')

@section('content')


    
    
        
        <div class="popupMarking  save" style="display: none">
            <img src="https://staticfile.batdongsan.com.vn/images/mobile/icons/24x24/filled/ic_unsave.svg">
            <span> L&#x1B0;u tin th&#xE0;nh c&#xF4;ng</span>
        </div>
        <div class="popupMarking  unsave" style="display: none">
            <img src="https://staticfile.batdongsan.com.vn/images/mobile/icons/24x24/outlined/ic_save.svg">
            <span> &#x110;&#xE3; b&#x1ECF; l&#x1B0;u tin</span>
        </div>
            <div class="site-center">
                
    <link rel="stylesheet" type="text/css" href="https://staticfile.batdongsan.com.vn/css/box.css" />
    <input type="hidden" value="3" id="activeTxtSelect" />
    <div id="MiddleSubMenu">
        <div class="home-top-search" style="padding-bottom: 10px !important;">
    <div class="home-top-search-keyword">
        <input type="text" placeholder="Nhập từ khóa để tìm theo cụm từ" id="txt1" class="txtKeyword">
    </div>
    <div class="advance-select-box" id="home-top-search">
        <span class="select-text hasvalue">
            <span class="select-text-content" style="width: 100px;">Hỏi đáp</span>
        </span>
        <input type="hidden" id="cboTypeSearch" value="4">
    </div>
    <div id="home-top-search-otions" class="advance-select-options advance-options" hddvalue="cboTypeSearch" ddlid="home-top-search" style="">
        <ul class="advance-options" style="min-width: 125px;">
            <li vl="1" class="advance-options" style="min-width: 93px;">Nhà đất bán</li>
            <li vl="2" class="advance-options" style="min-width: 93px;">Nhà đất cho thuê</li>
            <li vl="3" class="advance-options" style="min-width: 93px;">Tin tức</li>
            <li vl="5" class="advance-options" style="min-width: 93px;">Dự án</li>
            <li vl="6" class="advance-options" style="min-width: 93px;">Doanh nghiệp</li>
            <li vl="7" class="advance-options" style="min-width: 93px;">Môi giới</li>
        </ul>
    </div>
    <img src="https://file4.batdongsan.com.vn/images/header-bottom-button.jpg" onclick="SearchKeyword();" class="fg-button fg-button-bg-default fg-button-toggleable ui-corner-all" alt="Tìm kiếm" name="btnSearch" id="btnSearch">
</div>
<div id="gglbody"></div>
<div class="clear"></div>
    </div>
        <div id="MainContent"></div>
        <div class="parent-main-left">
            <!-- begin breakcrum-->
            <!-- end breakcrum-->
            <div id="TopContent" class="div_2col1"></div>

            <div class="div_2col1"></div>

            <div class="div_2col1">
                <div class="clear"></div>

                <div id="LeftMainContent" class="t_left1">
                    <div>
                        
    <div class="box-header">
        <div class="name_tit" align="left" style="padding-left:10px;">
            <h1 style="color: White; ">Tin t&#x1EE9;c b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n  - Tin n&#x1ED5;i b&#x1EAD;t</h1>
        </div>
    </div>
<div class="tc-tin-3cot-tit1"><div class="parent-cate-news">            <div class="tc-tin-3cot-tit1-left">
                <a title="D&#x1EF1; &#xE1;n Prime City &#x2013; Th&#xEA;m l&#x1EF1;a ch&#x1ECD;n h&#x1EA5;p d&#x1EAB;n cho ph&#xE2;n kh&#xFA;c &#x111;&#x1EA5;t n&#x1EC1;n gi&#xE1; r&#x1EBB; t&#x1EA1;i B&#xEC;nh Ph&#x1B0;&#x1EDB;c" href="/tin-thi-truong/du-an-prime-city-them-lua-chon-hap-dan-cho-phan-khuc-dat-nen-gia-re-tai-binh-phuoc-ar105488">
                    <img class="bor_img" src="https://file4.batdongsan.com.vn/crop/260x220/2020/11/12/b9sp0zUm/20201112120342-52be.jpg">
                </a>
                <h3>
                    <a class="font-link-box-item" href="/tin-thi-truong/du-an-prime-city-them-lua-chon-hap-dan-cho-phan-khuc-dat-nen-gia-re-tai-binh-phuoc-ar105488" title="D&#x1EF1; &#xE1;n Prime City &#x2013; Th&#xEA;m l&#x1EF1;a ch&#x1ECD;n h&#x1EA5;p d&#x1EAB;n cho ph&#xE2;n kh&#xFA;c &#x111;&#x1EA5;t n&#x1EC1;n gi&#xE1; r&#x1EBB; t&#x1EA1;i B&#xEC;nh Ph&#x1B0;&#x1EDB;c">
                        Dự án Prime City – Thêm lựa chọn hấp dẫn cho phân khúc đất nền giá rẻ tại Bình Phước
                    </a>
                </h3>
                <p>V&#x1EDB;i v&#x1ECB; tr&#xED; v&#xF4; c&#xF9;ng &#x111;&#x1EAF;c &#x111;&#x1ECB;a, ngay m&#x1EB7;t ti&#x1EC1;n &#x111;&#x1B0;&#x1EDD;ng song h&#xE0;nh DT. 753 &#x2013; tr&#x1EE5;c &#x111;&#x1B0;&#x1EDD;ng huy&#x1EBF;t m&#x1EA1;ch k&#x1EBF;t n&#x1ED1;i, giao th&#x1B0;&#x1A1;ng t&#x1EEB; &#x111;&#x1ECB;a ph&#x1B0;&#x1A1;ng &#x111;&#x1EBF;n c&#xE1;c khu v&#x1EF1;c l&#xE2;n c&#x1EAD;n, d&#x1EF1; &#xE1;n Prime City tr&#x1EDF; th&#xE0;nh s&#x1EF1; l&#x1EF1;a ch&#x1ECD;n m&#x1EDB;i, v&#xF4;...</p>
            </div>
            <div class="tc-tin-3cot-tit1-right">
                <a title="C&#x1EA5;t n&#xF3;c b&#x1EC7;nh vi&#x1EC7;n V&#x1EA1;n Ph&#xFA;c S&#xE0;i G&#xF2;n v&#x1EDB;i t&#x1ED5;ng v&#x1ED1;n &#x111;&#x1EA7;u t&#x1B0; 864 t&#x1EF7; &#x111;&#x1ED3;ng" href="/tin-thi-truong/cat-noc-benh-vien-van-phuc-sai-gon-voi-tong-von-dau-tu-864-ty-dong-ar105493">
                    <img class="bor_img" src="https://file4.batdongsan.com.vn/crop/260x220/2020/11/12/b9sp0zUm/20201112101630-3734.jpg" alt="C&#x1EA5;t n&#xF3;c b&#x1EC7;nh vi&#x1EC7;n V&#x1EA1;n Ph&#xFA;c S&#xE0;i G&#xF2;n v&#x1EDB;i t&#x1ED5;ng v&#x1ED1;n &#x111;&#x1EA7;u t&#x1B0; 864 t&#x1EF7; &#x111;&#x1ED3;ng">
                </a>
                <h3 class="normal">
                    <a class="tc-tin-3cot-tit1-right-link font-link-box-item" title="C&#x1EA5;t n&#xF3;c b&#x1EC7;nh vi&#x1EC7;n V&#x1EA1;n Ph&#xFA;c S&#xE0;i G&#xF2;n v&#x1EDB;i t&#x1ED5;ng v&#x1ED1;n &#x111;&#x1EA7;u t&#x1B0; 864 t&#x1EF7; &#x111;&#x1ED3;ng" href="/tin-thi-truong/cat-noc-benh-vien-van-phuc-sai-gon-voi-tong-von-dau-tu-864-ty-dong-ar105493">
                        Cất nóc bệnh viện Vạn Phúc Sài Gòn với tổng vốn đầu tư 864 tỷ đồng
                    </a>
                </h3>
                <div class="clear"></div>
            </div>
            <div class="tc-tin-3cot-tit1-right">
                <a title="Nh&#x1EEF;ng &#x111;i&#x1EC3;m n&#x1ED5;i b&#x1EAD;t c&#x1EE7;a VRES 2020 &#x2013; s&#x1EF1; ki&#x1EC7;n l&#x1EDB;n nh&#x1EA5;t n&#x103;m c&#x1EE7;a ng&#xE0;nh B&#x110;S" href="/tin-thi-truong/nhung-diem-noi-bat-cua-vres-2020-su-kien-lon-nhat-nam-cua-nganh-bds-ar105494">
                    <img class="bor_img" src="https://file4.batdongsan.com.vn/crop/260x220/2020/11/12/wxbwknn6/20201112105203-8ed8.jpg" alt="Nh&#x1EEF;ng &#x111;i&#x1EC3;m n&#x1ED5;i b&#x1EAD;t c&#x1EE7;a VRES 2020 &#x2013; s&#x1EF1; ki&#x1EC7;n l&#x1EDB;n nh&#x1EA5;t n&#x103;m c&#x1EE7;a ng&#xE0;nh B&#x110;S">
                </a>
                <h3 class="normal">
                    <a class="tc-tin-3cot-tit1-right-link font-link-box-item" title="Nh&#x1EEF;ng &#x111;i&#x1EC3;m n&#x1ED5;i b&#x1EAD;t c&#x1EE7;a VRES 2020 &#x2013; s&#x1EF1; ki&#x1EC7;n l&#x1EDB;n nh&#x1EA5;t n&#x103;m c&#x1EE7;a ng&#xE0;nh B&#x110;S" href="/tin-thi-truong/nhung-diem-noi-bat-cua-vres-2020-su-kien-lon-nhat-nam-cua-nganh-bds-ar105494">
                        Những điểm nổi bật của VRES 2020 – sự kiện lớn nhất năm của ngành BĐS
                    </a>
                </h3>
                <div class="clear"></div>
            </div>
            <div class="tc-tin-3cot-tit1-right">
                <a title="&#x110;&#x1EA5;t n&#x1EC1;n ph&#xED;a Nam &#x110;&#xE0; N&#x1EB5;ng &#x2013; k&#xEA;nh &#x111;&#x1EA7;u t&#x1B0; vua sau Covid-19" href="/tin-thi-truong/dat-nen-phia-nam-da-nang-kenh-dau-tu-vua-sau-covid-19-ar105492">
                    <img class="bor_img" src="https://file4.batdongsan.com.vn/crop/260x220/2020/11/12/YSUn3oGJ/20201112104527-2e17.jpg" alt="&#x110;&#x1EA5;t n&#x1EC1;n ph&#xED;a Nam &#x110;&#xE0; N&#x1EB5;ng &#x2013; k&#xEA;nh &#x111;&#x1EA7;u t&#x1B0; vua sau Covid-19">
                </a>
                <h3 class="normal">
                    <a class="tc-tin-3cot-tit1-right-link font-link-box-item" title="&#x110;&#x1EA5;t n&#x1EC1;n ph&#xED;a Nam &#x110;&#xE0; N&#x1EB5;ng &#x2013; k&#xEA;nh &#x111;&#x1EA7;u t&#x1B0; vua sau Covid-19" href="/tin-thi-truong/dat-nen-phia-nam-da-nang-kenh-dau-tu-vua-sau-covid-19-ar105492">
                        Đất nền phía Nam Đà Nẵng – kênh đầu tư vua sau Covid-19
                    </a>
                </h3>
                <div class="clear"></div>
            </div>
<div class="tc-tin-3cot-tit1-right-link2">            <ul>
                <li>
                    <h3 class="normal">
                        <a href="/tin-thi-truong/toan-bo-thong-tin-ve-vi-bang-nguoi-mua-nha-can-nam-ro-ar102832" title="To&#xE0;n b&#x1ED9; th&#xF4;ng tin v&#x1EC1; vi b&#x1EB1;ng ng&#x1B0;&#x1EDD;i mua nh&#xE0; c&#x1EA7;n n&#x1EAF;m r&#xF5;">
                            Toàn bộ thông tin về vi bằng người mua nhà cần nắm rõ
                        </a>
                    </h3>
                </li>
            </ul>
            <ul>
                <li>
                    <h3 class="normal">
                        <a href="/tin-thi-truong/tuyet-chung-nha-gia-re-nguoi-mua-san-nha-thu-cap-ar105486" title="&quot;Tuy&#x1EC7;t ch&#x1EE7;ng&quot; nh&#xE0; gi&#xE1; r&#x1EBB;, ng&#x1B0;&#x1EDD;i mua s&#x103;n nh&#xE0; th&#x1EE9; c&#x1EA5;p">
                            "Tuyệt chủng" nhà giá rẻ, người mua săn nhà thứ cấp
                        </a>
                    </h3>
                </li>
            </ul>
            <ul>
                <li>
                    <h3 class="normal">
                        <a href="/tin-thi-truong/masteri-centre-point-duoi-goc-nhin-cua-nha-phat-trien-du-an-ar105485" title="Masteri Centre Point d&#x1B0;&#x1EDB;i g&#xF3;c nh&#xEC;n c&#x1EE7;a nh&#xE0; ph&#xE1;t tri&#x1EC3;n d&#x1EF1; &#xE1;n">
                            Masteri Centre Point dưới góc nhìn của nhà phát triển dự án
                        </a>
                    </h3>
                </li>
            </ul>
            <ul>
                <li>
                    <h3 class="normal">
                        <a href="/tin-thi-truong/covid-19-lam-thay-doi-xu-huong-mua-nha-ar105491" title="Covid-19 l&#xE0;m thay &#x111;&#x1ED5;i xu h&#x1B0;&#x1EDB;ng mua nh&#xE0;">
                            Covid-19 làm thay đổi xu hướng mua nhà
                        </a>
                    </h3>
                </li>
            </ul>
</div></div>    <div class="clear"></div>
    <div class="lblnewscateby"><strong>Tin t&#x1EE9;c b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n</strong>&nbsp; theo chuyên mục:</div>
</div>
                    </div>
                    <div style="clear:both;margin-bottom:5px;"></div>
                    <div class="container-default">
                        <div>
                            
        <div class="tc-duan-tin parent-cate-news">
            <h2 class="tit_l borderbold">
                <a class="news-category-root-box-title-link" href="/tin-thi-truong" title="Tin th&#x1ECB; tr&#x1B0;&#x1EDD;ng">
                    <span style="white-space:nowrap;">
                        Tin th&#x1ECB; tr&#x1B0;&#x1EDD;ng
                    </span>
                </a>
            </h2>

                    <div class="tintuc-row1 tc-tit">
                        <a class="avatar" title="Chi 3.837 t&#x1EF7; &#x111;&#x1ED3;ng l&#xE0;m &#x111;&#x1B0;&#x1EDD;ng v&#xE0;nh &#x111;ai ph&#xED;a T&#xE2;y C&#x1EA7;n Th&#x1A1;" href="/tin-thi-truong/chi-3-837-ty-dong-lam-duong-vanh-dai-phia-tay-can-tho-ar105490">
                            <img src="https://file4.batdongsan.com.vn/crop/216x152/2020/11/11/zk7ggeWN/20201111115619-eaa1.jpg" alt="Chi 3.837 t&#x1EF7; &#x111;&#x1ED3;ng l&#xE0;m &#x111;&#x1B0;&#x1EDD;ng v&#xE0;nh &#x111;ai ph&#xED;a T&#xE2;y C&#x1EA7;n Th&#x1A1;">
                        </a>
                        <h3>
                            <a class="font-link-news-parent" href="/tin-thi-truong/chi-3-837-ty-dong-lam-duong-vanh-dai-phia-tay-can-tho-ar105490" title="Chi 3.837 t&#x1EF7; &#x111;&#x1ED3;ng l&#xE0;m &#x111;&#x1B0;&#x1EDD;ng v&#xE0;nh &#x111;ai ph&#xED;a T&#xE2;y C&#x1EA7;n Th&#x1A1;">
                                <span style="font-weight: bold; color: #055699">
                                    Chi 3.837 tỷ đồng làm đường vành đai phía Tây Cần Thơ
                                </span>
                            </a>
                        </h3>
                        <br>
                        <p>D&#x1EF1; &#xE1;n &#x111;&#x1B0;&#x1EDD;ng v&#xE0;nh &#x111;ai ph&#xED;a T&#xE2;y TP. C&#x1EA7;n Th&#x1A1; c&#xF3; t&#x1ED5;ng chi&#x1EC1;u d&#xE0;i 19,4km, kinh ph&#xED; &#x111;&#x1EA7;u t&#x1B0; g&#x1EA7;n 4.000 t&#x1EF7; &#x111;&#x1ED3;ng. C&#xF4;ng tr&#xEC;nh s&#x1EBD; &#x111;i qua &#x111;&#x1ECB;a b&#xE0;n 5 qu&#x1EAD;n, huy&#x1EC7;n.</p>
                    </div>
<div class="tc-duan-tin-thumnai">                        <div class="tc-duan-tin-thumnai-row1">
                            <a class="tc-duan-tin-thumnai-img" title="S&#x1EF1; ki&#x1EC7;n tr&#x1EA3;i nghi&#x1EC7;m Capital Place &#x2013; Bi&#x1EC3;u t&#x1B0;&#x1EE3;ng m&#x1EDB;i c&#x1EE7;a H&#xE0; N&#x1ED9;i hi&#x1EC7;n &#x111;&#x1EA1;i" href="/tin-thi-truong/su-kien-trai-nghiem-capital-place-bieu-tuong-moi-cua-ha-noi-hien-dai-ar105482">
                                <img alt="S&#x1EF1; ki&#x1EC7;n tr&#x1EA3;i nghi&#x1EC7;m Capital Place &#x2013; Bi&#x1EC3;u t&#x1B0;&#x1EE3;ng m&#x1EDB;i c&#x1EE7;a H&#xE0; N&#x1ED9;i hi&#x1EC7;n &#x111;&#x1EA1;i" src="https://file4.batdongsan.com.vn/crop/132x100/2020/11/10/b9sp0zUm/20201110161912-6e9c.jpg">
                            </a>
                            <h3>
                                <a class="tc-duan-tin-thumnai-link" href="/tin-thi-truong/su-kien-trai-nghiem-capital-place-bieu-tuong-moi-cua-ha-noi-hien-dai-ar105482" title="S&#x1EF1; ki&#x1EC7;n tr&#x1EA3;i nghi&#x1EC7;m Capital Place &#x2013; Bi&#x1EC3;u t&#x1B0;&#x1EE3;ng m&#x1EDB;i c&#x1EE7;a H&#xE0; N&#x1ED9;i hi&#x1EC7;n &#x111;&#x1EA1;i">
                                    Sự kiện trải nghiệm Capital Place – Biểu tượng mới của Hà Nội hiện đại
                                </a>
                            </h3>
                        </div>
<div class="tc-tin-3cot-tit1-right-link2"><ul>                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/tin-thi-truong/gia-rao-ban-can-ho-tai-tp-hcm-tiep-tuc-tang-trong-thang-10-2020-ar105474" title="Gi&#xE1; rao b&#xE1;n c&#x103;n h&#x1ED9; t&#x1EA1;i TP.HCM ti&#x1EBF;p t&#x1EE5;c t&#x103;ng trong th&#xE1;ng 10/2020">
                                        Giá rao bán căn hộ tại TP.HCM tiếp tục tăng trong tháng 10/2020
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/tin-thi-truong/gia-rao-ban-can-ho-tai-tp-hcm-tiep-tuc-tang-trong-thang-10-2020-ar105474" title="Gi&#xE1; rao b&#xE1;n c&#x103;n h&#x1ED9; t&#x1EA1;i TP.HCM ti&#x1EBF;p t&#x1EE5;c t&#x103;ng trong th&#xE1;ng 10/2020"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/tin-thi-truong/tim-mua-nha-de-dang-hon-nho-cong-nghe-bat-dong-san-ar105468" title="T&#xEC;m mua nh&#xE0; d&#x1EC5; d&#xE0;ng h&#x1A1;n nh&#x1EDD; c&#xF4;ng ngh&#x1EC7; b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n">
                                        Tìm mua nhà dễ dàng hơn nhờ công nghệ bất động sản
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/tin-thi-truong/tim-mua-nha-de-dang-hon-nho-cong-nghe-bat-dong-san-ar105468" title="T&#xEC;m mua nh&#xE0; d&#x1EC5; d&#xE0;ng h&#x1A1;n nh&#x1EDD; c&#xF4;ng ngh&#x1EC7; b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/tin-thi-truong/hon-300-du-an-tham-gia-trien-lam-bds-thuc-te-ao-lon-nhat-chau-a-ar105480" title="H&#x1A1;n 300 d&#x1EF1; &#xE1;n tham gia tri&#x1EC3;n l&#xE3;m B&#x110;S th&#x1EF1;c t&#x1EBF; &#x1EA3;o l&#x1EDB;n nh&#x1EA5;t ch&#xE2;u &#xC1;">
                                        Hơn 300 dự án tham gia triển lãm BĐS thực tế ảo lớn nhất châu Á
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/tin-thi-truong/hon-300-du-an-tham-gia-trien-lam-bds-thuc-te-ao-lon-nhat-chau-a-ar105480" title="H&#x1A1;n 300 d&#x1EF1; &#xE1;n tham gia tri&#x1EC3;n l&#xE3;m B&#x110;S th&#x1EF1;c t&#x1EBF; &#x1EA3;o l&#x1EDB;n nh&#x1EA5;t ch&#xE2;u &#xC1;"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/tin-thi-truong/the-ruby-ha-long-va-tam-huyet-kien-tao-du-an-cao-cap-cua-mbland-ar105466" title="The Ruby H&#x1EA1; Long v&#xE0; t&#xE2;m huy&#x1EBF;t ki&#x1EBF;n t&#x1EA1;o d&#x1EF1; &#xE1;n cao c&#x1EA5;p c&#x1EE7;a MBLand">
                                        The Ruby Hạ Long và tâm huyết kiến tạo dự án cao cấp của MBLand
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/tin-thi-truong/the-ruby-ha-long-va-tam-huyet-kien-tao-du-an-cao-cap-cua-mbland-ar105466" title="The Ruby H&#x1EA1; Long v&#xE0; t&#xE2;m huy&#x1EBF;t ki&#x1EBF;n t&#x1EA1;o d&#x1EF1; &#xE1;n cao c&#x1EA5;p c&#x1EE7;a MBLand"></a>
                            </li>
</ul></div></div>            <div class="clear">
            </div>
        </div>
        <div class="tc-duan-tin parent-cate-news">
            <h2 class="tit_l borderbold">
                <a class="news-category-root-box-title-link" href="/phan-tich-nhan-dinh" title="Ph&#xE2;n t&#xED;ch - Nh&#x1EAD;n &#x111;&#x1ECB;nh">
                    <span style="white-space:nowrap;">
                        Ph&#xE2;n t&#xED;ch - Nh&#x1EAD;n &#x111;&#x1ECB;nh
                    </span>
                </a>
            </h2>

                    <div class="tintuc-row1 tc-tit">
                        <a class="avatar" title="Nh&#x1EEF;ng y&#x1EBF;u t&#x1ED1; &#x201C;&#x111;&#x1EAD;p tan&#x201D; k&#x1EF3; v&#x1ECD;ng gi&#xE1; b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n s&#x1EBD; gi&#x1EA3;m" href="/phan-tich-nhan-dinh/nhung-yeu-to-dap-tan-ky-vong-gia-bat-dong-san-se-giam-ar105453">
                            <img src="https://file4.batdongsan.com.vn/crop/216x152/2020/11/04/FTnaKngu/20201104114102-ddbe.jpg" alt="Nh&#x1EEF;ng y&#x1EBF;u t&#x1ED1; &#x201C;&#x111;&#x1EAD;p tan&#x201D; k&#x1EF3; v&#x1ECD;ng gi&#xE1; b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n s&#x1EBD; gi&#x1EA3;m">
                        </a>
                        <h3>
                            <a class="font-link-news-parent" href="/phan-tich-nhan-dinh/nhung-yeu-to-dap-tan-ky-vong-gia-bat-dong-san-se-giam-ar105453" title="Nh&#x1EEF;ng y&#x1EBF;u t&#x1ED1; &#x201C;&#x111;&#x1EAD;p tan&#x201D; k&#x1EF3; v&#x1ECD;ng gi&#xE1; b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n s&#x1EBD; gi&#x1EA3;m">
                                <span style="font-weight: bold; color: #055699">
                                    Những yếu tố “đập tan” kỳ vọng giá bất động sản sẽ giảm
                                </span>
                            </a>
                        </h3>
                        <br>
                        <p>X&#xE9;t trong trung v&#xE0; d&#xE0;i h&#x1EA1;n, gi&#xE1; nh&#xE0; &#x111;&#x1EA5;t &#x111;&#x1B0;&#x1EE3;c nh&#xEC;n nh&#x1EAD;n l&#xE0; s&#x1EBD; ti&#x1EBF;p t&#x1EE5;c &#x111;&#xE0; t&#x103;ng v&#x1EDB;i m&#x1EE9;c t&#x103;ng cao, th&#x1EA5;p t&#xF9;y thu&#x1ED9;c v&#xE0;o t&#x1EEB;ng khu v&#x1EF1;c v&#xE0; t&#x1EEB;ng ph&#xE2;n kh&#xFA;c.</p>
                    </div>
<div class="tc-duan-tin-thumnai">                        <div class="tc-duan-tin-thumnai-row1">
                            <a class="tc-duan-tin-thumnai-img" title="Gi&#x1EA3;i m&#xE3; hi&#x1EC7;n t&#x1B0;&#x1EE3;ng gi&#xE1; nh&#xE0; t&#x103;ng phi m&#xE3; d&#xF9; &#x111;&#x1EA1;i d&#x1ECB;ch ph&#x1EE9;c t&#x1EA1;p" href="/phan-tich-nhan-dinh/giai-ma-hien-tuong-gia-nha-tang-phi-ma-trong-dich-covid-ar105442">
                                <img alt="Gi&#x1EA3;i m&#xE3; hi&#x1EC7;n t&#x1B0;&#x1EE3;ng gi&#xE1; nh&#xE0; t&#x103;ng phi m&#xE3; d&#xF9; &#x111;&#x1EA1;i d&#x1ECB;ch ph&#x1EE9;c t&#x1EA1;p" src="https://file4.batdongsan.com.vn/crop/132x100/2020/11/05/YSUn3oGJ/20201105111218-7ecf.jpg">
                            </a>
                            <h3>
                                <a class="tc-duan-tin-thumnai-link" href="/phan-tich-nhan-dinh/giai-ma-hien-tuong-gia-nha-tang-phi-ma-trong-dich-covid-ar105442" title="Gi&#x1EA3;i m&#xE3; hi&#x1EC7;n t&#x1B0;&#x1EE3;ng gi&#xE1; nh&#xE0; t&#x103;ng phi m&#xE3; d&#xF9; &#x111;&#x1EA1;i d&#x1ECB;ch ph&#x1EE9;c t&#x1EA1;p">
                                    Giải mã hiện tượng giá nhà tăng phi mã dù đại dịch phức tạp
                                </a>
                            </h3>
                        </div>
<div class="tc-tin-3cot-tit1-right-link2"><ul>                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/phan-tich-nhan-dinh/vi-sao-cac-nha-dau-tu-phia-nam-bac-tien-ar105368" title="V&#xEC; sao c&#xE1;c nh&#xE0; &#x111;&#x1EA7;u t&#x1B0; ph&#xED;a Nam &#x201C;B&#x1EAF;c ti&#x1EBF;n&#x201D;?">
                                        Vì sao các nhà đầu tư phía Nam “Bắc tiến”?
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/phan-tich-nhan-dinh/vi-sao-cac-nha-dau-tu-phia-nam-bac-tien-ar105368" title="V&#xEC; sao c&#xE1;c nh&#xE0; &#x111;&#x1EA7;u t&#x1B0; ph&#xED;a Nam &#x201C;B&#x1EAF;c ti&#x1EBF;n&#x201D;?"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/phan-tich-nhan-dinh/nen-hay-khong-viec-cam-cho-thue-can-ho-theo-gio-ngan-ngay-ar105314" title="N&#xEA;n hay kh&#xF4;ng vi&#x1EC7;c c&#x1EA5;m cho thu&#xEA; c&#x103;n h&#x1ED9; theo gi&#x1EDD;, ng&#x1EAF;n ng&#xE0;y?">
                                        Nên hay không việc cấm cho thuê căn hộ theo giờ, ngắn ngày?
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/phan-tich-nhan-dinh/nen-hay-khong-viec-cam-cho-thue-can-ho-theo-gio-ngan-ngay-ar105314" title="N&#xEA;n hay kh&#xF4;ng vi&#x1EC7;c c&#x1EA5;m cho thu&#xEA; c&#x103;n h&#x1ED9; theo gi&#x1EDD;, ng&#x1EAF;n ng&#xE0;y?"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/phan-tich-nhan-dinh/8-quyen-loi-nguoi-mua-bat-dong-san-hinh-thanh-trong-tuong-lai-can-biet-ar100340" title="8 quy&#x1EC1;n l&#x1EE3;i ng&#x1B0;&#x1EDD;i mua b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n h&#xEC;nh th&#xE0;nh trong t&#x1B0;&#x1A1;ng lai c&#x1EA7;n bi&#x1EBF;t">
                                        8 quyền lợi người mua bất động sản hình thành trong tương lai cần biết
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/phan-tich-nhan-dinh/8-quyen-loi-nguoi-mua-bat-dong-san-hinh-thanh-trong-tuong-lai-can-biet-ar100340" title="8 quy&#x1EC1;n l&#x1EE3;i ng&#x1B0;&#x1EDD;i mua b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n h&#xEC;nh th&#xE0;nh trong t&#x1B0;&#x1A1;ng lai c&#x1EA7;n bi&#x1EBF;t"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/phan-tich-nhan-dinh/vi-tri-bds-trong-cac-kenh-dau-tu-cuoi-nam-ar105289" title="B&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n c&#xF3; c&#xF2;n &#x111;&#x1B0;&#x1EE3;c &#x1B0;u ti&#xEA;n trong c&#xE1;c k&#xEA;nh &#x111;&#x1EA7;u t&#x1B0; cu&#x1ED1;i n&#x103;m?">
                                        Bất động sản có còn được ưu tiên trong các kênh đầu tư cuối năm?
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/phan-tich-nhan-dinh/vi-tri-bds-trong-cac-kenh-dau-tu-cuoi-nam-ar105289" title="B&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n c&#xF3; c&#xF2;n &#x111;&#x1B0;&#x1EE3;c &#x1B0;u ti&#xEA;n trong c&#xE1;c k&#xEA;nh &#x111;&#x1EA7;u t&#x1B0; cu&#x1ED1;i n&#x103;m?"></a>
                            </li>
</ul></div></div>            <div class="clear">
            </div>
        </div>
        <div class="tc-duan-tin parent-cate-news">
            <h2 class="tit_l borderbold">
                <a class="news-category-root-box-title-link" href="/chinh-sach-quan-ly" title="Ch&#xED;nh s&#xE1;ch - Qu&#x1EA3;n l&#xFD;">
                    <span style="white-space:nowrap;">
                        Ch&#xED;nh s&#xE1;ch - Qu&#x1EA3;n l&#xFD;
                    </span>
                </a>
            </h2>

                    <div class="tintuc-row1 tc-tit">
                        <a class="avatar" title="X&#xE2;y d&#x1EF1; &#xE1;n tr&#xE1;i ph&#xE9;p, l&#x1EEB;a ng&#x1B0;&#x1EDD;i mua chi&#x1EBF;m &#x111;o&#x1EA1;t 191 t&#x1EF7; &#x111;&#x1ED3;ng" href="/chinh-sach-quan-ly/chieu-lua-ban-can-ho-chiem-doat-191-ty-dong-ar105487">
                            <img src="https://file4.batdongsan.com.vn/crop/216x152/2020/11/11/zk7ggeWN/20201111095135-dbc1.jpg" alt="X&#xE2;y d&#x1EF1; &#xE1;n tr&#xE1;i ph&#xE9;p, l&#x1EEB;a ng&#x1B0;&#x1EDD;i mua chi&#x1EBF;m &#x111;o&#x1EA1;t 191 t&#x1EF7; &#x111;&#x1ED3;ng">
                        </a>
                        <h3>
                            <a class="font-link-news-parent" href="/chinh-sach-quan-ly/chieu-lua-ban-can-ho-chiem-doat-191-ty-dong-ar105487" title="X&#xE2;y d&#x1EF1; &#xE1;n tr&#xE1;i ph&#xE9;p, l&#x1EEB;a ng&#x1B0;&#x1EDD;i mua chi&#x1EBF;m &#x111;o&#x1EA1;t 191 t&#x1EF7; &#x111;&#x1ED3;ng">
                                <span style="font-weight: bold; color: #055699">
                                    Xây dự án trái phép, lừa người mua chiếm đoạt 191 tỷ đồng
                                </span>
                            </a>
                        </h3>
                        <br>
                        <p>B&#x1EB1;ng th&#x1EE7; &#x111;o&#x1EA1;n k&#xFD; h&#x1EE3;p &#x111;&#x1ED3;ng mua b&#xE1;n c&#xF9;ng c&#x103;n h&#x1ED9;, s&#xE0;n th&#x1B0;&#x1A1;ng m&#x1EA1;i cho nhi&#x1EC1;u ng&#x1B0;&#x1EDD;i, l&#xE3;nh &#x111;&#x1EA1;o m&#x1ED9;t c&#xF4;ng ty b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n chi&#x1EBF;m &#x111;o&#x1EA1;t 191 t&#x1EF7; &#x111;&#x1ED3;ng c&#x1EE7;a kh&#xE1;ch h&#xE0;ng.</p>
                    </div>
<div class="tc-duan-tin-thumnai">                        <div class="tc-duan-tin-thumnai-row1">
                            <a class="tc-duan-tin-thumnai-img" title="Ki&#x1EBF;n ngh&#x1ECB; c&#xF4;ng nh&#x1EAD;n TP. Th&#x1EE7; &#x110;&#x1EE9;c l&#xE0; &#x111;&#xF4; th&#x1ECB; lo&#x1EA1;i 1" href="/chinh-sach-quan-ly/kien-nghi-cong-nhan-tp-thu-duc-la-do-thi-loai-1-ar105467">
                                <img alt="Ki&#x1EBF;n ngh&#x1ECB; c&#xF4;ng nh&#x1EAD;n TP. Th&#x1EE7; &#x110;&#x1EE9;c l&#xE0; &#x111;&#xF4; th&#x1ECB; lo&#x1EA1;i 1" src="https://file4.batdongsan.com.vn/crop/132x100/2020/11/09/zk7ggeWN/20201109135727-1403.jpg">
                            </a>
                            <h3>
                                <a class="tc-duan-tin-thumnai-link" href="/chinh-sach-quan-ly/kien-nghi-cong-nhan-tp-thu-duc-la-do-thi-loai-1-ar105467" title="Ki&#x1EBF;n ngh&#x1ECB; c&#xF4;ng nh&#x1EAD;n TP. Th&#x1EE7; &#x110;&#x1EE9;c l&#xE0; &#x111;&#xF4; th&#x1ECB; lo&#x1EA1;i 1">
                                    Kiến nghị công nhận TP. Thủ Đức là đô thị loại 1
                                </a>
                            </h3>
                        </div>
<div class="tc-tin-3cot-tit1-right-link2"><ul>                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/chinh-sach-quan-ly/cham-dut-2-du-an-cham-tien-do-tai-bac-van-phong-khanh-hoa-ar105452" title="Ch&#x1EA5;m d&#x1EE9;t 2 d&#x1EF1; &#xE1;n ch&#x1EAD;m ti&#x1EBF;n &#x111;&#x1ED9; t&#x1EA1;i B&#x1EAF;c V&#xE2;n Phong (Kh&#xE1;nh Ho&#xE0;)">
                                        Chấm dứt 2 dự án chậm tiến độ tại Bắc Vân Phong (Khánh Hoà)
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/chinh-sach-quan-ly/cham-dut-2-du-an-cham-tien-do-tai-bac-van-phong-khanh-hoa-ar105452" title="Ch&#x1EA5;m d&#x1EE9;t 2 d&#x1EF1; &#xE1;n ch&#x1EAD;m ti&#x1EBF;n &#x111;&#x1ED9; t&#x1EA1;i B&#x1EAF;c V&#xE2;n Phong (Kh&#xE1;nh Ho&#xE0;)"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/chinh-sach-quan-ly/len-ke-hoach-thanh-tra-loat-du-an-phat-trien-nha-o-ar105424" title="L&#xEA;n k&#x1EBF; ho&#x1EA1;ch thanh tra lo&#x1EA1;t d&#x1EF1; &#xE1;n ph&#xE1;t tri&#x1EC3;n nh&#xE0; &#x1EDF;">
                                        Lên kế hoạch thanh tra loạt dự án phát triển nhà ở
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/chinh-sach-quan-ly/len-ke-hoach-thanh-tra-loat-du-an-phat-trien-nha-o-ar105424" title="L&#xEA;n k&#x1EBF; ho&#x1EA1;ch thanh tra lo&#x1EA1;t d&#x1EF1; &#xE1;n ph&#xE1;t tri&#x1EC3;n nh&#xE0; &#x1EDF;"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/chinh-sach-quan-ly/bo-tai-nguyen-va-moi-truong-yeu-cau-ra-soat-kiem-tra-mo-hinh-kinh-doanh-farmstay-ar105416" title="B&#x1ED9; T&#xE0;i nguy&#xEA;n v&#xE0; M&#xF4;i tr&#x1B0;&#x1EDD;ng y&#xEA;u c&#x1EA7;u r&#xE0; so&#xE1;t, ki&#x1EC3;m tra m&#xF4; h&#xEC;nh kinh doanh farmstay">
                                        Bộ Tài nguyên và Môi trường yêu cầu rà soát, kiểm tra mô hình kinh doanh farmstay
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/chinh-sach-quan-ly/bo-tai-nguyen-va-moi-truong-yeu-cau-ra-soat-kiem-tra-mo-hinh-kinh-doanh-farmstay-ar105416" title="B&#x1ED9; T&#xE0;i nguy&#xEA;n v&#xE0; M&#xF4;i tr&#x1B0;&#x1EDD;ng y&#xEA;u c&#x1EA7;u r&#xE0; so&#xE1;t, ki&#x1EC3;m tra m&#xF4; h&#xEC;nh kinh doanh farmstay"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/chinh-sach-quan-ly/gia-dat-bo-sung-de-boi-thuong-du-an-cao-toc-dau-giay-phan-thiet-cao-nhat-la-3-3-trieu-m2-ar105384" title="Gi&#xE1; &#x111;&#x1EA5;t b&#x1ED5; sung &#x111;&#x1EC3; b&#x1ED3;i th&#x1B0;&#x1EDD;ng d&#x1EF1; &#xE1;n cao t&#x1ED1;c D&#x1EA7;u Gi&#xE2;y - Phan Thi&#x1EBF;t cao nh&#x1EA5;t l&#xE0; 3,3 tri&#x1EC7;u/m2">
                                        Giá đất bổ sung để bồi thường dự án cao tốc Dầu Giây - Phan Thiết cao nhất là 3,3 triệu/m2
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/chinh-sach-quan-ly/gia-dat-bo-sung-de-boi-thuong-du-an-cao-toc-dau-giay-phan-thiet-cao-nhat-la-3-3-trieu-m2-ar105384" title="Gi&#xE1; &#x111;&#x1EA5;t b&#x1ED5; sung &#x111;&#x1EC3; b&#x1ED3;i th&#x1B0;&#x1EDD;ng d&#x1EF1; &#xE1;n cao t&#x1ED1;c D&#x1EA7;u Gi&#xE2;y - Phan Thi&#x1EBF;t cao nh&#x1EA5;t l&#xE0; 3,3 tri&#x1EC7;u/m2"></a>
                            </li>
</ul></div></div>            <div class="clear">
            </div>
        </div>
        <div class="tc-duan-tin parent-cate-news">
            <h2 class="tit_l borderbold">
                <a class="news-category-root-box-title-link" href="/thong-tin-quy-hoach" title="Th&#xF4;ng tin quy ho&#x1EA1;ch">
                    <span style="white-space:nowrap;">
                        Th&#xF4;ng tin quy ho&#x1EA1;ch
                    </span>
                </a>
            </h2>

                    <div class="tintuc-row1 tc-tit">
                        <a class="avatar" title="B&#x1EAF;c Ninh m&#x1EDF; r&#x1ED9;ng di&#x1EC7;n t&#xED;ch &#x111;&#xF4; th&#x1ECB; Ph&#x1ED1; M&#x1EDB;i v&#xE0; ph&#x1EE5; c&#x1EAD;n l&#xEA;n 15.511ha" href="/thong-tin-quy-hoach/bac-ninh-mo-rong-dien-tich-do-thi-pho-moi-va-phu-can-ar105437">
                            <img src="https://file4.batdongsan.com.vn/crop/216x152/2020/11/04/zk7ggeWN/20201104141105-3bdc.jpg" alt="B&#x1EAF;c Ninh m&#x1EDF; r&#x1ED9;ng di&#x1EC7;n t&#xED;ch &#x111;&#xF4; th&#x1ECB; Ph&#x1ED1; M&#x1EDB;i v&#xE0; ph&#x1EE5; c&#x1EAD;n l&#xEA;n 15.511ha">
                        </a>
                        <h3>
                            <a class="font-link-news-parent" href="/thong-tin-quy-hoach/bac-ninh-mo-rong-dien-tich-do-thi-pho-moi-va-phu-can-ar105437" title="B&#x1EAF;c Ninh m&#x1EDF; r&#x1ED9;ng di&#x1EC7;n t&#xED;ch &#x111;&#xF4; th&#x1ECB; Ph&#x1ED1; M&#x1EDB;i v&#xE0; ph&#x1EE5; c&#x1EAD;n l&#xEA;n 15.511ha">
                                <span style="font-weight: bold; color: #055699">
                                    Bắc Ninh mở rộng diện tích đô thị Phố Mới và phụ cận lên 15.511ha
                                </span>
                            </a>
                        </h3>
                        <br>
                        <p>Theo quy ho&#x1EA1;ch &#x111;&#x1B0;&#x1EE3;c UBND t&#x1EC9;nh B&#x1EAF;c Ninh ph&#xEA; duy&#x1EC7;t, 3 x&#xE3; Chi L&#x103;ng, Y&#xEA;n Gi&#x1EA3;, H&#xE1;n Qu&#x1EA3;ng &#x111;&#x1B0;&#x1EE3;c b&#x1ED5; sung v&#xE0;o quy ho&#x1EA1;ch &#x111;&#xF4; th&#x1ECB; Ph&#x1ED1; M&#x1EDB;i v&#xE0; ph&#x1EE5; c&#x1EAD;n (&#x111;&#xF4; th&#x1ECB; Qu&#x1EBF; V&#xF5;).</p>
                    </div>
<div class="tc-duan-tin-thumnai">                        <div class="tc-duan-tin-thumnai-row1">
                            <a class="tc-duan-tin-thumnai-img" title="Chuy&#x1EC3;n nh&#x1B0;&#x1EE3;ng m&#x1ED9;t ph&#x1EA7;n d&#x1EF1; &#xE1;n Khu &#x111;&#xF4; th&#x1ECB; m&#x1EDB;i T&#xE2;y M&#x1ED7; - &#x110;&#x1EA1;i M&#x1ED7;" href="/thong-tin-quy-hoach/chuyen-nhuong-mot-phan-du-an-khu-do-thi-moi-tay-mo-dai-mo-ar105194">
                                <img alt="Chuy&#x1EC3;n nh&#x1B0;&#x1EE3;ng m&#x1ED9;t ph&#x1EA7;n d&#x1EF1; &#xE1;n Khu &#x111;&#xF4; th&#x1ECB; m&#x1EDB;i T&#xE2;y M&#x1ED7; - &#x110;&#x1EA1;i M&#x1ED7;" src="https://file4.batdongsan.com.vn/crop/132x100/2020/10/05/zk7ggeWN/20201005152101-a77e.jpg">
                            </a>
                            <h3>
                                <a class="tc-duan-tin-thumnai-link" href="/thong-tin-quy-hoach/chuyen-nhuong-mot-phan-du-an-khu-do-thi-moi-tay-mo-dai-mo-ar105194" title="Chuy&#x1EC3;n nh&#x1B0;&#x1EE3;ng m&#x1ED9;t ph&#x1EA7;n d&#x1EF1; &#xE1;n Khu &#x111;&#xF4; th&#x1ECB; m&#x1EDB;i T&#xE2;y M&#x1ED7; - &#x110;&#x1EA1;i M&#x1ED7;">
                                    Chuyển nhượng một phần dự án Khu đô thị mới Tây Mỗ - Đại Mỗ
                                </a>
                            </h3>
                        </div>
<div class="tc-tin-3cot-tit1-right-link2"><ul>                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/thong-tin-quy-hoach/mo-rong-cang-quy-nhon-binh-dinh-len-gan-90ha-ar105173" title="M&#x1EDF; r&#x1ED9;ng c&#x1EA3;ng Quy Nh&#x1A1;n (B&#xEC;nh &#x110;&#x1ECB;nh) l&#xEA;n g&#x1EA7;n 90ha">
                                        Mở rộng cảng Quy Nhơn (Bình Định) lên gần 90ha
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/thong-tin-quy-hoach/mo-rong-cang-quy-nhon-binh-dinh-len-gan-90ha-ar105173" title="M&#x1EDF; r&#x1ED9;ng c&#x1EA3;ng Quy Nh&#x1A1;n (B&#xEC;nh &#x110;&#x1ECB;nh) l&#xEA;n g&#x1EA7;n 90ha"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/thong-tin-quy-hoach/trinh-chinh-phu-de-an-thanh-lap-tp-phu-quoc-ar105169" title="Tr&#xEC;nh Ch&#xED;nh ph&#x1EE7; &#x111;&#x1EC1; &#xE1;n th&#xE0;nh l&#x1EAD;p TP. Ph&#xFA; Qu&#x1ED1;c">
                                        Trình Chính phủ đề án thành lập TP. Phú Quốc
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/thong-tin-quy-hoach/trinh-chinh-phu-de-an-thanh-lap-tp-phu-quoc-ar105169" title="Tr&#xEC;nh Ch&#xED;nh ph&#x1EE7; &#x111;&#x1EC1; &#xE1;n th&#xE0;nh l&#x1EAD;p TP. Ph&#xFA; Qu&#x1ED1;c"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/thong-tin-quy-hoach/de-xuat-dat-san-bay-thu-hai-cua-vung-thu-do-tai-huyen-ung-hoa-ar105153" title="&#x110;&#x1EC1; xu&#x1EA5;t &#x111;&#x1EB7;t s&#xE2;n bay th&#x1EE9; hai c&#x1EE7;a v&#xF9;ng Th&#x1EE7; &#x111;&#xF4; t&#x1EA1;i huy&#x1EC7;n &#x1EE8;ng H&#xF2;a">
                                        Đề xuất đặt sân bay thứ hai của vùng Thủ đô tại huyện Ứng Hòa
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/thong-tin-quy-hoach/de-xuat-dat-san-bay-thu-hai-cua-vung-thu-do-tai-huyen-ung-hoa-ar105153" title="&#x110;&#x1EC1; xu&#x1EA5;t &#x111;&#x1EB7;t s&#xE2;n bay th&#x1EE9; hai c&#x1EE7;a v&#xF9;ng Th&#x1EE7; &#x111;&#xF4; t&#x1EA1;i huy&#x1EC7;n &#x1EE8;ng H&#xF2;a"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/thong-tin-quy-hoach/ha-noi-6-sieu-du-an-muon-duoc-dieu-chinh-chuyen-nhuong-mot-phan-ar105105" title="H&#xE0; N&#x1ED9;i: 6 &quot;si&#xEA;u&quot; d&#x1EF1; &#xE1;n mu&#x1ED1;n &#x111;&#x1B0;&#x1EE3;c &#x111;i&#x1EC1;u ch&#x1EC9;nh, chuy&#x1EC3;n nh&#x1B0;&#x1EE3;ng m&#x1ED9;t ph&#x1EA7;n">
                                        Hà Nội: 6 "siêu" dự án muốn được điều chỉnh, chuyển nhượng một phần
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/thong-tin-quy-hoach/ha-noi-6-sieu-du-an-muon-duoc-dieu-chinh-chuyen-nhuong-mot-phan-ar105105" title="H&#xE0; N&#x1ED9;i: 6 &quot;si&#xEA;u&quot; d&#x1EF1; &#xE1;n mu&#x1ED1;n &#x111;&#x1B0;&#x1EE3;c &#x111;i&#x1EC1;u ch&#x1EC9;nh, chuy&#x1EC3;n nh&#x1B0;&#x1EE3;ng m&#x1ED9;t ph&#x1EA7;n"></a>
                            </li>
</ul></div></div>            <div class="clear">
            </div>
        </div>
        <div class="tc-duan-tin parent-cate-news">
            <h2 class="tit_l borderbold">
                <a class="news-category-root-box-title-link" href="/bat-dong-san-the-gioi" title="B&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n th&#x1EBF; gi&#x1EDB;i">
                    <span style="white-space:nowrap;">
                        B&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n th&#x1EBF; gi&#x1EDB;i
                    </span>
                </a>
            </h2>

                    <div class="tintuc-row1 tc-tit">
                        <a class="avatar" title="&quot;Soi&quot; kh&#x1ED1;i b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n tri&#x1EC7;u &#x111;&#xF4; c&#x1EE7;a t&#xE2;n T&#x1ED5;ng th&#x1ED1;ng M&#x1EF9; Joe Biden" href="/bat-dong-san-the-gioi/nhung-ngoi-nha-cua-ong-joe-biden-ar105472">
                            <img src="https://file4.batdongsan.com.vn/crop/216x152/2020/11/09/akCJKkFO/20201109165444-b782.jpg" alt="&quot;Soi&quot; kh&#x1ED1;i b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n tri&#x1EC7;u &#x111;&#xF4; c&#x1EE7;a t&#xE2;n T&#x1ED5;ng th&#x1ED1;ng M&#x1EF9; Joe Biden">
                        </a>
                        <h3>
                            <a class="font-link-news-parent" href="/bat-dong-san-the-gioi/nhung-ngoi-nha-cua-ong-joe-biden-ar105472" title="&quot;Soi&quot; kh&#x1ED1;i b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n tri&#x1EC7;u &#x111;&#xF4; c&#x1EE7;a t&#xE2;n T&#x1ED5;ng th&#x1ED1;ng M&#x1EF9; Joe Biden">
                                <span style="font-weight: bold; color: #055699">
                                    "Soi" khối bất động sản triệu đô của tân Tổng thống Mỹ Joe Biden
                                </span>
                            </a>
                        </h3>
                        <br>
                        <p>T&#x1ED5;ng th&#x1ED1;ng t&#xE2;n c&#x1EED; Joe Biden s&#x1EDF; h&#x1EEF;u nhi&#x1EC1;u b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n tr&#xEA;n kh&#x1EAF;p n&#x1B0;&#x1EDB;c M&#x1EF9;. &#xD4;ng b&#x1EAF;t &#x111;&#x1EA7;u &#x111;&#x1EA7;u t&#x1B0; b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n ngay t&#x1EEB; &#x111;&#x1ED9; tu&#x1ED5;i &#x111;&#xF4;i m&#x1B0;&#x1A1;i b&#x1EB1;ng c&#xE1;ch t&#x1EAD;n d&#x1EE5;ng nhi&#x1EC1;u kho&#x1EA3;n th&#x1EBF; ch&#x1EA5;p v&#xE0; vay ti&#x1EC1;n t&#x1EEB; b&#x1EA3;o hi&#x1EC3;m nh&#xE2;n th&#x1ECD;. Nh&#x1EEF;ng ng&#xF4;i nh&#xE0; hi&#x1EC7;n g&#xF3;p ph&#x1EA7;n &#x111;&#xE1;ng k&#x1EC3; trong kh&#x1ED1;i t&#xE0;i s&#x1EA3;n tr&#x1ECB; gi&#xE1; 9 tri&#x1EC7;u USD c&#x1EE7;a v&#x1EE3; ch&#x1ED3;ng &#xF4;ng Biden.</p>
                    </div>
<div class="tc-duan-tin-thumnai">                        <div class="tc-duan-tin-thumnai-row1">
                            <a class="tc-duan-tin-thumnai-img" title="B&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n g&#x1EA7;n s&#xE2;n bay r&#x1EDB;t gi&#xE1;, d&#xE2;n H&#x1ED3;ng K&#xF4;ng tranh th&#x1EE7; &#x201C;s&#x103;n&#x201D; nh&#xE0; gi&#xE1; h&#x1EDD;i" href="/bat-dong-san-the-gioi/bat-dong-san-gan-san-bay-rot-gia-dan-hong-kong-tranh-thu-san-nha-gia-hoi-ar105435">
                                <img alt="B&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n g&#x1EA7;n s&#xE2;n bay r&#x1EDB;t gi&#xE1;, d&#xE2;n H&#x1ED3;ng K&#xF4;ng tranh th&#x1EE7; &#x201C;s&#x103;n&#x201D; nh&#xE0; gi&#xE1; h&#x1EDD;i" src="https://file4.batdongsan.com.vn/crop/132x100/2020/11/04/akCJKkFO/20201104123200-f7b0.jpg">
                            </a>
                            <h3>
                                <a class="tc-duan-tin-thumnai-link" href="/bat-dong-san-the-gioi/bat-dong-san-gan-san-bay-rot-gia-dan-hong-kong-tranh-thu-san-nha-gia-hoi-ar105435" title="B&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n g&#x1EA7;n s&#xE2;n bay r&#x1EDB;t gi&#xE1;, d&#xE2;n H&#x1ED3;ng K&#xF4;ng tranh th&#x1EE7; &#x201C;s&#x103;n&#x201D; nh&#xE0; gi&#xE1; h&#x1EDD;i">
                                    Bất động sản gần sân bay rớt giá, dân Hồng Kông tranh thủ “săn” nhà giá hời
                                </a>
                            </h3>
                        </div>
<div class="tc-tin-3cot-tit1-right-link2"><ul>                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/bat-dong-san-the-gioi/bat-dong-san-singapore-phuc-hoi-sau-covid-19-ar105422" title="&#x110;i&#x1EC1;u g&#xEC; gi&#xFA;p b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n Singapore ph&#x1EE5;c h&#x1ED3;i m&#x1EA1;nh m&#x1EBD; sau Covid-19?">
                                        Điều gì giúp bất động sản Singapore phục hồi mạnh mẽ sau Covid-19?
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/bat-dong-san-the-gioi/bat-dong-san-singapore-phuc-hoi-sau-covid-19-ar105422" title="&#x110;i&#x1EC1;u g&#xEC; gi&#xFA;p b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n Singapore ph&#x1EE5;c h&#x1ED3;i m&#x1EA1;nh m&#x1EBD; sau Covid-19?"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/bat-dong-san-the-gioi/10-bang-danh-thue-bat-dong-san-thap-nhat-nuoc-my-ar105367" title="10 bang &#x111;&#xE1;nh thu&#x1EBF; b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n th&#x1EA5;p nh&#x1EA5;t n&#x1B0;&#x1EDB;c M&#x1EF9;">
                                        10 bang đánh thuế bất động sản thấp nhất nước Mỹ
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/bat-dong-san-the-gioi/10-bang-danh-thue-bat-dong-san-thap-nhat-nuoc-my-ar105367" title="10 bang &#x111;&#xE1;nh thu&#x1EBF; b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n th&#x1EA5;p nh&#x1EA5;t n&#x1B0;&#x1EDB;c M&#x1EF9;"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/bat-dong-san-the-gioi/bds-cong-nghiep-trung-quoc-ra-sao-truoc-xu-huong-dich-chuyen-ar105299" title="B&#x110;S c&#xF4;ng nghi&#x1EC7;p Trung Qu&#x1ED1;c ra sao tr&#x1B0;&#x1EDB;c xu h&#x1B0;&#x1EDB;ng d&#x1ECB;ch chuy&#x1EC3;n?">
                                        BĐS công nghiệp Trung Quốc ra sao trước xu hướng dịch chuyển?
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/bat-dong-san-the-gioi/bds-cong-nghiep-trung-quoc-ra-sao-truoc-xu-huong-dich-chuyen-ar105299" title="B&#x110;S c&#xF4;ng nghi&#x1EC7;p Trung Qu&#x1ED1;c ra sao tr&#x1B0;&#x1EDB;c xu h&#x1B0;&#x1EDB;ng d&#x1ECB;ch chuy&#x1EC3;n?"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/bat-dong-san-the-gioi/thoi-covid-19-vi-tri-khong-con-la-tieu-chi-hang-dau-trong-giao-dich-nha-dat-ar105283" title="Th&#x1EDD;i Covid-19, v&#x1ECB; tr&#xED; kh&#xF4;ng c&#xF2;n l&#xE0; ti&#xEA;u ch&#xED; h&#xE0;ng &#x111;&#x1EA7;u trong giao d&#x1ECB;ch nh&#xE0; &#x111;&#x1EA5;t">
                                        Thời Covid-19, vị trí không còn là tiêu chí hàng đầu trong giao dịch nhà đất
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/bat-dong-san-the-gioi/thoi-covid-19-vi-tri-khong-con-la-tieu-chi-hang-dau-trong-giao-dich-nha-dat-ar105283" title="Th&#x1EDD;i Covid-19, v&#x1ECB; tr&#xED; kh&#xF4;ng c&#xF2;n l&#xE0; ti&#xEA;u ch&#xED; h&#xE0;ng &#x111;&#x1EA7;u trong giao d&#x1ECB;ch nh&#xE0; &#x111;&#x1EA5;t"></a>
                            </li>
</ul></div></div>            <div class="clear">
            </div>
        </div>
        <div class="tc-duan-tin parent-cate-news">
            <h2 class="tit_l borderbold">
                <a class="news-category-root-box-title-link" href="/tai-chinh-chung-khoan-bat-dong-san" title="T&#xE0;i ch&#xED;nh - Ch&#x1EE9;ng kho&#xE1;n - B&#x110;S">
                    <span style="white-space:nowrap;">
                        T&#xE0;i ch&#xED;nh - Ch&#x1EE9;ng kho&#xE1;n - B&#x110;S
                    </span>
                </a>
            </h2>

                    <div class="tintuc-row1 tc-tit">
                        <a class="avatar" title="L&#xE3;i su&#x1EA5;t vay mua nh&#xE0; ng&#xE2;n h&#xE0;ng n&#xE0;o th&#x1EA5;p nh&#x1EA5;t th&#xE1;ng 11/2020?" href="/tai-chinh-chung-khoan-bat-dong-san/lai-suat-vay-mua-nha-ngan-hang-nao-thap-nhat-thang-11-2020-ar103041">
                            <img src="https://file4.batdongsan.com.vn/crop/216x152/2020/09/07/b9sp0zUm/20200907163203-3dbb.jpg" alt="L&#xE3;i su&#x1EA5;t vay mua nh&#xE0; ng&#xE2;n h&#xE0;ng n&#xE0;o th&#x1EA5;p nh&#x1EA5;t th&#xE1;ng 11/2020?">
                        </a>
                        <h3>
                            <a class="font-link-news-parent" href="/tai-chinh-chung-khoan-bat-dong-san/lai-suat-vay-mua-nha-ngan-hang-nao-thap-nhat-thang-11-2020-ar103041" title="L&#xE3;i su&#x1EA5;t vay mua nh&#xE0; ng&#xE2;n h&#xE0;ng n&#xE0;o th&#x1EA5;p nh&#x1EA5;t th&#xE1;ng 11/2020?">
                                <span style="font-weight: bold; color: #055699">
                                    Lãi suất vay mua nhà ngân hàng nào thấp nhất tháng 11/2020?
                                </span>
                            </a>
                        </h3>
                        <br>
                        <p>Th&#xE1;ng 11/2020, c&#xE1;c ng&#xE2;n h&#xE0;ng ti&#x1EBF;p t&#x1EE5;c gia t&#x103;ng nhi&#x1EC1;u g&#xF3;i cho vay mua nh&#xE0; v&#x1EDB;i l&#xE3;i su&#x1EA5;t &#x1B0;u &#x111;&#xE3;i h&#x1EA5;p d&#x1EAB;n. B&#xEA;n c&#x1EA1;nh c&#xE1;c ng&#xE2;n h&#xE0;ng v&#x1EAB;n gi&#x1EEF; nguy&#xEA;n m&#x1EE9;c l&#xE3;i su&#x1EA5;t so v&#x1EDB;i th&#xE1;ng 10 th&#xEC; m&#x1ED9;t s&#x1ED1; ng&#xE2;n h&#xE0;ng &#x111;&#xE3; c&#xF3; &#x111;&#x1ED9;ng th&#xE1;i gi&#x1EA3;m l&#xE3;i su&#x1EA5;t t&#x1EA1;i th&#x1EDD;i &#x111;i&#x1EC3;m cu&#x1ED1;i n&#x103;m 2020 n&#xE0;y.</p>
                    </div>
<div class="tc-duan-tin-thumnai">                        <div class="tc-duan-tin-thumnai-row1">
                            <a class="tc-duan-tin-thumnai-img" title="VietinBank rao b&#xE1;n nhi&#x1EC1;u b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n &#x111;&#x1EC3; thu h&#x1ED3;i n&#x1EE3;" href="/tai-chinh-chung-khoan-bat-dong-san/vietinbank-rao-ban-nhieu-bat-dong-san-de-thu-hoi-no-ar105429">
                                <img alt="VietinBank rao b&#xE1;n nhi&#x1EC1;u b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n &#x111;&#x1EC3; thu h&#x1ED3;i n&#x1EE3;" src="https://file4.batdongsan.com.vn/crop/132x100/2020/11/04/zk7ggeWN/20201104105402-90c4.jpg">
                            </a>
                            <h3>
                                <a class="tc-duan-tin-thumnai-link" href="/tai-chinh-chung-khoan-bat-dong-san/vietinbank-rao-ban-nhieu-bat-dong-san-de-thu-hoi-no-ar105429" title="VietinBank rao b&#xE1;n nhi&#x1EC1;u b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n &#x111;&#x1EC3; thu h&#x1ED3;i n&#x1EE3;">
                                    VietinBank rao bán nhiều bất động sản để thu hồi nợ
                                </a>
                            </h3>
                        </div>
<div class="tc-tin-3cot-tit1-right-link2"><ul>                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/tai-chinh-chung-khoan-bat-dong-san/vay-mua-nha-ngan-hang-tpbank-voi-cac-goi-uu-dai-sieu-tien-ich-ar105407" title="Vay mua nh&#xE0; ng&#xE2;n h&#xE0;ng TPBank v&#x1EDB;i c&#xE1;c g&#xF3;i &#x1B0;u &#x111;&#xE3;i si&#xEA;u ti&#x1EC7;n &#xED;ch">
                                        Vay mua nhà ngân hàng TPBank với các gói ưu đãi siêu tiện ích
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/tai-chinh-chung-khoan-bat-dong-san/vay-mua-nha-ngan-hang-tpbank-voi-cac-goi-uu-dai-sieu-tien-ich-ar105407" title="Vay mua nh&#xE0; ng&#xE2;n h&#xE0;ng TPBank v&#x1EDB;i c&#xE1;c g&#xF3;i &#x1B0;u &#x111;&#xE3;i si&#xEA;u ti&#x1EC7;n &#xED;ch"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/tai-chinh-chung-khoan-bat-dong-san/chung-khoan-troi-day-bds-dang-mat-dan-vi-tri-ngoi-vuong-ar105335" title="Ch&#x1EE9;ng kho&#xE1;n tr&#x1ED7;i d&#x1EAD;y, B&#x110;S &#x111;ang m&#x1EA5;t d&#x1EA7;n v&#x1ECB; tr&#xED; ng&#xF4;i v&#x1B0;&#x1A1;ng?">
                                        Chứng khoán trỗi dậy, BĐS đang mất dần vị trí ngôi vương?
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/tai-chinh-chung-khoan-bat-dong-san/chung-khoan-troi-day-bds-dang-mat-dan-vi-tri-ngoi-vuong-ar105335" title="Ch&#x1EE9;ng kho&#xE1;n tr&#x1ED7;i d&#x1EAD;y, B&#x110;S &#x111;ang m&#x1EA5;t d&#x1EA7;n v&#x1ECB; tr&#xED; ng&#xF4;i v&#x1B0;&#x1A1;ng?"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/tai-chinh-chung-khoan-bat-dong-san/uu-nhuoc-diem-cua-2-hinh-thuc-giai-ngan-vay-von-mua-nha-ar92930" title="&#x1AF;u, nh&#x1B0;&#x1EE3;c &#x111;i&#x1EC3;m c&#x1EE7;a 2 h&#xEC;nh th&#x1EE9;c gi&#x1EA3;i ng&#xE2;n vay v&#x1ED1;n mua nh&#xE0;">
                                        Ưu, nhược điểm của 2 hình thức giải ngân vay vốn mua nhà
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/tai-chinh-chung-khoan-bat-dong-san/uu-nhuoc-diem-cua-2-hinh-thuc-giai-ngan-vay-von-mua-nha-ar92930" title="&#x1AF;u, nh&#x1B0;&#x1EE3;c &#x111;i&#x1EC3;m c&#x1EE7;a 2 h&#xEC;nh th&#x1EE9;c gi&#x1EA3;i ng&#xE2;n vay v&#x1ED1;n mua nh&#xE0;"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/tai-chinh-chung-khoan-bat-dong-san/lai-suat-giam-manh-co-nen-chop-thoi-co-vay-mua-nha-ar104729" title="L&#xE3;i su&#x1EA5;t gi&#x1EA3;m m&#x1EA1;nh, c&#xF3; n&#xEA;n &#x201C;ch&#x1EDB;p&#x201D; th&#x1EDD;i c&#x1A1; vay mua nh&#xE0;?">
                                        Lãi suất giảm mạnh, có nên “chớp” thời cơ vay mua nhà?
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/tai-chinh-chung-khoan-bat-dong-san/lai-suat-giam-manh-co-nen-chop-thoi-co-vay-mua-nha-ar104729" title="L&#xE3;i su&#x1EA5;t gi&#x1EA3;m m&#x1EA1;nh, c&#xF3; n&#xEA;n &#x201C;ch&#x1EDB;p&#x201D; th&#x1EDD;i c&#x1A1; vay mua nh&#xE0;?"></a>
                            </li>
</ul></div></div>            <div class="clear">
            </div>
        </div>
        <div class="tc-duan-tin parent-cate-news">
            <h2 class="tit_l borderbold">
                <a class="news-category-root-box-title-link" href="/tu-van-luat-bat-dong-san" title="T&#x1B0; v&#x1EA5;n lu&#x1EAD;t">
                    <span style="white-space:nowrap;">
                        T&#x1B0; v&#x1EA5;n lu&#x1EAD;t
                    </span>
                </a>
            </h2>

                    <div class="tintuc-row1 tc-tit">
                        <a class="avatar" title="Nh&#xE0; v&#x1EEB;a mua b&#x1ECB; l&#x169; cu&#x1ED1;n tr&#xF4;i c&#xF3; &#x111;&#xF2;i l&#x1EA1;i ti&#x1EC1;n &#x111;&#x1B0;&#x1EE3;c kh&#xF4;ng?" href="/quyen-so-huu/nha-vua-mua-bi-lu-cuon-troi-co-doi-lai-tien-duoc-khong-ar105477">
                            <img src="https://file4.batdongsan.com.vn/crop/216x152/2020/11/10/tEfrXoEj/20201110154724-81b2.jpg" alt="Nh&#xE0; v&#x1EEB;a mua b&#x1ECB; l&#x169; cu&#x1ED1;n tr&#xF4;i c&#xF3; &#x111;&#xF2;i l&#x1EA1;i ti&#x1EC1;n &#x111;&#x1B0;&#x1EE3;c kh&#xF4;ng?">
                        </a>
                        <h3>
                            <a class="font-link-news-parent" href="/quyen-so-huu/nha-vua-mua-bi-lu-cuon-troi-co-doi-lai-tien-duoc-khong-ar105477" title="Nh&#xE0; v&#x1EEB;a mua b&#x1ECB; l&#x169; cu&#x1ED1;n tr&#xF4;i c&#xF3; &#x111;&#xF2;i l&#x1EA1;i ti&#x1EC1;n &#x111;&#x1B0;&#x1EE3;c kh&#xF4;ng?">
                                <span style="font-weight: bold; color: #055699">
                                    Nhà vừa mua bị lũ cuốn trôi có đòi lại tiền được không?
                                </span>
                            </a>
                        </h3>
                        <br>
                        <p>&#x110;&#xE2;y l&#xE0; t&#xEC;nh hu&#x1ED1;ng tr&#x1EDB; tr&#xEA;u m&#xE0; ch&#x1ECB; H&#x1B0;&#x1A1;ng (Thanh H&#xF3;a) g&#x1EB7;p ph&#x1EA3;i khi &#x111;&#x1EA7;u th&#xE1;ng 10 v&#x1EEB;a ho&#xE0;n t&#x1EA5;t vi&#x1EC7;c thanh to&#xE1;n ti&#x1EC1;n mua m&#x1ED9;t ng&#xF4;i nh&#xE0; &#x1EDF; C&#x1EA9;m Nh&#x1B0;&#x1EE3;ng, C&#x1EA9;m Xuy&#xEA;n, H&#xE0; T&#x129;nh th&#xEC; b&#xE3;o l&#x169; &#x1EAD;p t&#x1EDB;i. Ng&#xF4;i nh&#xE0; b&#x1ECB; thi&#xEA;n tai &#x111;&#xE1;nh s&#x1EAD;p n&#xEA;n b&#xEA;n b&#xE1;n kh&#xF4;ng th&#x1EC3; b&#xE0;n giao theo &#x111;&#xFA;ng cam k&#x1EBF;t trong h&#x1EE3;p &#x111;&#x1ED3;ng. Khi &#x111;&#xF3;, ch&#x1ECB; H&#x1B0;&#x1A1;ng c&#xF3; th&#x1EC3; y&#xEA;u c&#x1EA7;u tr&#x1EA3; l&#x1EA1;i ti&#x1EC1;n c&#x1ECD;c, ti&#x1EC1;n mua nh&#xE0; hay kh&#xF4;ng?</p>
                    </div>
<div class="tc-duan-tin-thumnai">                        <div class="tc-duan-tin-thumnai-row1">
                            <a class="tc-duan-tin-thumnai-img" title="D&#x1ECB;ch v&#x1EE5; t&#x1B0; v&#x1EA5;n ph&#xE2;n chia t&#xE0;i s&#x1EA3;n th&#x1EEB;a k&#x1EBF; do b&#x1ED1; m&#x1EB9; &#x111;&#x1EC3; l&#x1EA1;i" href="/tranh-chap/dich-vu-tu-van-phan-chia-tai-san-thua-ke-do-bo-me-de-lai-ar105473">
                                <img alt="D&#x1ECB;ch v&#x1EE5; t&#x1B0; v&#x1EA5;n ph&#xE2;n chia t&#xE0;i s&#x1EA3;n th&#x1EEB;a k&#x1EBF; do b&#x1ED1; m&#x1EB9; &#x111;&#x1EC3; l&#x1EA1;i" src="https://file4.batdongsan.com.vn/crop/132x100/2020/11/10/b9sp0zUm/20201110092150-eeab.jpg">
                            </a>
                            <h3>
                                <a class="tc-duan-tin-thumnai-link" href="/tranh-chap/dich-vu-tu-van-phan-chia-tai-san-thua-ke-do-bo-me-de-lai-ar105473" title="D&#x1ECB;ch v&#x1EE5; t&#x1B0; v&#x1EA5;n ph&#xE2;n chia t&#xE0;i s&#x1EA3;n th&#x1EEB;a k&#x1EBF; do b&#x1ED1; m&#x1EB9; &#x111;&#x1EC3; l&#x1EA1;i">
                                    Dịch vụ tư vấn phân chia tài sản thừa kế do bố mẹ để lại
                                </a>
                            </h3>
                        </div>
<div class="tc-tin-3cot-tit1-right-link2"><ul>                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/trinh-tu-thu-tuc/dat-10-la-gi-quy-dinh-ve-viec-xay-nha-cap-so-do-cho-dat-ar105462" title="&#x110;&#x1EA5;t 10% l&#xE0; g&#xEC;? Quy &#x111;&#x1ECB;nh v&#x1EC1; vi&#x1EC7;c x&#xE2;y nh&#xE0;, c&#x1EA5;p s&#x1ED5; &#x111;&#x1ECF; cho &#x111;&#x1EA5;t 10%">
                                        Đất 10% là gì? Quy định về việc xây nhà, cấp sổ đỏ cho đất 10%
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/trinh-tu-thu-tuc/dat-10-la-gi-quy-dinh-ve-viec-xay-nha-cap-so-do-cho-dat-ar105462" title="&#x110;&#x1EA5;t 10% l&#xE0; g&#xEC;? Quy &#x111;&#x1ECB;nh v&#x1EC1; vi&#x1EC7;c x&#xE2;y nh&#xE0;, c&#x1EA5;p s&#x1ED5; &#x111;&#x1ECF; cho &#x111;&#x1EA5;t 10%"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/trinh-tu-thu-tuc/thu-tuc-cap-so-do-khi-mua-ban-nha-dat-bang-giay-viet-tay-ar105414" title="Th&#x1EE7; t&#x1EE5;c c&#x1EA5;p S&#x1ED5; &#x111;&#x1ECF; khi mua b&#xE1;n nh&#xE0; &#x111;&#x1EA5;t b&#x1EB1;ng gi&#x1EA5;y vi&#x1EBF;t tay m&#x1EDB;i nh&#x1EA5;t">
                                        Thủ tục cấp Sổ đỏ khi mua bán nhà đất bằng giấy viết tay mới nhất
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/trinh-tu-thu-tuc/thu-tuc-cap-so-do-khi-mua-ban-nha-dat-bang-giay-viet-tay-ar105414" title="Th&#x1EE7; t&#x1EE5;c c&#x1EA5;p S&#x1ED5; &#x111;&#x1ECF; khi mua b&#xE1;n nh&#xE0; &#x111;&#x1EA5;t b&#x1EB1;ng gi&#x1EA5;y vi&#x1EBF;t tay m&#x1EDB;i nh&#x1EA5;t"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/trinh-tu-thu-tuc/cap-nhat-dien-tich-toi-thieu-duoc-tach-thua-dat-theo-luat-moi-nhat-ar105400" title="C&#x1EAD;p nh&#x1EAD;t di&#x1EC7;n t&#xED;ch t&#x1ED1;i thi&#x1EC3;u &#x111;&#x1B0;&#x1EE3;c t&#xE1;ch th&#x1EED;a &#x111;&#x1EA5;t theo lu&#x1EAD;t m&#x1EDB;i nh&#x1EA5;t">
                                        Cập nhật diện tích tối thiểu được tách thửa đất theo luật mới nhất
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/trinh-tu-thu-tuc/cap-nhat-dien-tich-toi-thieu-duoc-tach-thua-dat-theo-luat-moi-nhat-ar105400" title="C&#x1EAD;p nh&#x1EAD;t di&#x1EC7;n t&#xED;ch t&#x1ED1;i thi&#x1EC3;u &#x111;&#x1B0;&#x1EE3;c t&#xE1;ch th&#x1EED;a &#x111;&#x1EA5;t theo lu&#x1EAD;t m&#x1EDB;i nh&#x1EA5;t"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/trinh-tu-thu-tuc/dieu-kien-nao-de-giao-dich-dan-su-ve-nha-o-dam-bao-co-hieu-luc-ar105397" title="&#x110;i&#x1EC1;u ki&#x1EC7;n n&#xE0;o &#x111;&#x1EC3; giao d&#x1ECB;ch d&#xE2;n s&#x1EF1; v&#x1EC1; nh&#xE0; &#x1EDF; &#x111;&#x1EA3;m b&#x1EA3;o c&#xF3; hi&#x1EC7;u l&#x1EF1;c?">
                                        Điều kiện nào để giao dịch dân sự về nhà ở đảm bảo có hiệu lực?
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/trinh-tu-thu-tuc/dieu-kien-nao-de-giao-dich-dan-su-ve-nha-o-dam-bao-co-hieu-luc-ar105397" title="&#x110;i&#x1EC1;u ki&#x1EC7;n n&#xE0;o &#x111;&#x1EC3; giao d&#x1ECB;ch d&#xE2;n s&#x1EF1; v&#x1EC1; nh&#xE0; &#x1EDF; &#x111;&#x1EA3;m b&#x1EA3;o c&#xF3; hi&#x1EC7;u l&#x1EF1;c?"></a>
                            </li>
</ul></div></div>            <div class="clear">
            </div>
        </div>
        <div class="tc-duan-tin parent-cate-news">
            <h2 class="tit_l borderbold">
                <a class="news-category-root-box-title-link" href="/loi-khuyen" title="L&#x1EDD;i khuy&#xEA;n">
                    <span style="white-space:nowrap;">
                        L&#x1EDD;i khuy&#xEA;n
                    </span>
                </a>
            </h2>

                    <div class="tintuc-row1 tc-tit">
                        <a class="avatar" title="B&#xE1;n nh&#xE0; &#x111;ang &#x1EDF; tr&#x1B0;&#x1EDB;c khi t&#xEC;m &#x111;&#x1B0;&#x1EE3;c nh&#xE0; m&#x1EDB;i: N&#xEA;n hay kh&#xF4;ng?" href="/loi-khuyen-cho-nguoi-ban/co-nen-ban-nha-dang-o-truoc-khi-tim-duoc-nha-moi-ar102322">
                            <img src="https://file4.batdongsan.com.vn/crop/216x152/2020/11/12/akCJKkFO/20201112163949-0fcf.jpg" alt="B&#xE1;n nh&#xE0; &#x111;ang &#x1EDF; tr&#x1B0;&#x1EDB;c khi t&#xEC;m &#x111;&#x1B0;&#x1EE3;c nh&#xE0; m&#x1EDB;i: N&#xEA;n hay kh&#xF4;ng?">
                        </a>
                        <h3>
                            <a class="font-link-news-parent" href="/loi-khuyen-cho-nguoi-ban/co-nen-ban-nha-dang-o-truoc-khi-tim-duoc-nha-moi-ar102322" title="B&#xE1;n nh&#xE0; &#x111;ang &#x1EDF; tr&#x1B0;&#x1EDB;c khi t&#xEC;m &#x111;&#x1B0;&#x1EE3;c nh&#xE0; m&#x1EDB;i: N&#xEA;n hay kh&#xF4;ng?">
                                <span style="font-weight: bold; color: #055699">
                                    Bán nhà đang ở trước khi tìm được nhà mới: Nên hay không?
                                </span>
                            </a>
                        </h3>
                        <br>
                        <p>H&#x1EA7;u h&#x1EBF;t nh&#x1EEF;ng ng&#x1B0;&#x1EDD;i mu&#x1ED1;n &#x111;&#x1ED5;i nh&#xE0; th&#x1B0;&#x1EDD;ng ti&#x1EBF;n h&#xE0;nh song song vi&#x1EC7;c b&#xE1;n nh&#xE0; c&#x169; v&#xE0; mua nh&#xE0; m&#x1EDB;i, t&#x1EA1;o th&#xE0;nh chu&#x1ED7;i giao d&#x1ECB;ch b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n. B&#xEA;n c&#x1EA1;nh &#x111;&#xF3;, c&#x169;ng c&#xF3; nh&#x1EEF;ng ng&#x1B0;&#x1EDD;i l&#xE0;m ng&#x1B0;&#x1EE3;c l&#x1EA1;i: b&#xE1;n nh&#xE0; &#x111;ang &#x1EDF; tr&#x1B0;&#x1EDB;c r&#x1ED3;i m&#x1EDB;i timf mua nh&#xE0; m&#x1EDB;i. C&#xE1;ch l&#xE0;m n&#xE0;y kh&#xF4;ng tr&#xE1;nh kh&#x1ECF;i nh&#x1EEF;ng r&#x1EE7;i ro nh&#x1EA5;t &#x111;&#x1ECB;nh, nh&#x1B0;ng c&#x169;ng th&#x1EC3; &#x111;em l&#x1EA1;i nh&#x1EEF;ng l&#x1EE3;i th&#x1EBF; b&#x1EA5;t ng&#x1EDD;.</p>
                    </div>
<div class="tc-duan-tin-thumnai">                        <div class="tc-duan-tin-thumnai-row1">
                            <a class="tc-duan-tin-thumnai-img" title="Nh&#xE0; &#x111;&#x1EA7;u t&#x1B0; c&#x1EA7;n l&#xE0;m g&#xEC; &#x111;&#x1EC3; kh&#xF4;ng m&#x1EA5;t tr&#x1EAF;ng t&#xE0;i s&#x1EA3;n khi mua farmstay?" href="/loi-khuyen-cho-nha-dau-tu/nha-dau-tu-can-lam-gi-de-khong-mat-trang-tai-san-khi-mua-farmstay-ar105495">
                                <img alt="Nh&#xE0; &#x111;&#x1EA7;u t&#x1B0; c&#x1EA7;n l&#xE0;m g&#xEC; &#x111;&#x1EC3; kh&#xF4;ng m&#x1EA5;t tr&#x1EAF;ng t&#xE0;i s&#x1EA3;n khi mua farmstay?" src="https://file4.batdongsan.com.vn/crop/132x100/2020/11/12/FTnaKngu/20201112122952-9661.jpg">
                            </a>
                            <h3>
                                <a class="tc-duan-tin-thumnai-link" href="/loi-khuyen-cho-nha-dau-tu/nha-dau-tu-can-lam-gi-de-khong-mat-trang-tai-san-khi-mua-farmstay-ar105495" title="Nh&#xE0; &#x111;&#x1EA7;u t&#x1B0; c&#x1EA7;n l&#xE0;m g&#xEC; &#x111;&#x1EC3; kh&#xF4;ng m&#x1EA5;t tr&#x1EAF;ng t&#xE0;i s&#x1EA3;n khi mua farmstay?">
                                    Nhà đầu tư cần làm gì để không mất trắng tài sản khi mua farmstay?
                                </a>
                            </h3>
                        </div>
<div class="tc-tin-3cot-tit1-right-link2"><ul>                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/loi-khuyen-cho-nguoi-mua/mua-nha-ha-noi-truoc-tuoi-30-ar102617" title="Ch&#x103;m ch&#x1EC9; v&#xE0; li&#x1EC1;u l&#x129;nh vay n&#x1EE3;, t&#xF4;i t&#x1EF1; mua &#x111;&#x1B0;&#x1EE3;c nh&#xE0; tr&#x1B0;&#x1EDB;c tu&#x1ED5;i 30">
                                        Chăm chỉ và liều lĩnh vay nợ, tôi tự mua được nhà trước tuổi 30
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/loi-khuyen-cho-nguoi-mua/mua-nha-ha-noi-truoc-tuoi-30-ar102617" title="Ch&#x103;m ch&#x1EC9; v&#xE0; li&#x1EC1;u l&#x129;nh vay n&#x1EE3;, t&#xF4;i t&#x1EF1; mua &#x111;&#x1B0;&#x1EE3;c nh&#xE0; tr&#x1B0;&#x1EDB;c tu&#x1ED5;i 30"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/loi-khuyen-cho-nguoi-mua/om-mong-lam-giau-tu-dat-cap-vo-chong-nga-dau-vi-mu-mo-phap-ly-ar103408" title="&#xD4;m m&#x1ED9;ng l&#xE0;m gi&#xE0;u t&#x1EEB; &#x111;&#x1EA5;t, c&#x1EB7;p v&#x1EE3; ch&#x1ED3;ng &quot;ng&#xE3; &#x111;au&quot; v&#xEC; m&#xF9; m&#x1EDD; ph&#xE1;p l&#xFD;">
                                        Ôm mộng làm giàu từ đất, cặp vợ chồng "ngã đau" vì mù mờ pháp lý
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/loi-khuyen-cho-nguoi-mua/om-mong-lam-giau-tu-dat-cap-vo-chong-nga-dau-vi-mu-mo-phap-ly-ar103408" title="&#xD4;m m&#x1ED9;ng l&#xE0;m gi&#xE0;u t&#x1EEB; &#x111;&#x1EA5;t, c&#x1EB7;p v&#x1EE3; ch&#x1ED3;ng &quot;ng&#xE3; &#x111;au&quot; v&#xEC; m&#xF9; m&#x1EDD; ph&#xE1;p l&#xFD;"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/loi-khuyen-cho-nguoi-mua/lieu-mua-nha-chi-sau-15-ngay-tim-kiem-vo-chong-tre-huong-trai-ngot-khong-ngo-ar105484" title="&#x201C;Li&#x1EC1;u&#x201D; mua nh&#xE0; ch&#x1EC9; sau 15 ng&#xE0;y t&#xEC;m ki&#x1EBF;m, v&#x1EE3; ch&#x1ED3;ng tr&#x1EBB; h&#x1B0;&#x1EDF;ng &#x201C;tr&#xE1;i ng&#x1ECD;t&#x201D; kh&#xF4;ng ng&#x1EDD;">
                                        “Liều” mua nhà chỉ sau 15 ngày tìm kiếm, vợ chồng trẻ hưởng “trái ngọt” không ngờ
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/loi-khuyen-cho-nguoi-mua/lieu-mua-nha-chi-sau-15-ngay-tim-kiem-vo-chong-tre-huong-trai-ngot-khong-ngo-ar105484" title="&#x201C;Li&#x1EC1;u&#x201D; mua nh&#xE0; ch&#x1EC9; sau 15 ng&#xE0;y t&#xEC;m ki&#x1EBF;m, v&#x1EE3; ch&#x1ED3;ng tr&#x1EBB; h&#x1B0;&#x1EDF;ng &#x201C;tr&#xE1;i ng&#x1ECD;t&#x201D; kh&#xF4;ng ng&#x1EDD;"></a>
                            </li>
                            <li>
                                <h3 class="normal">
                                    <a class="font-link-box-item" href="/loi-khuyen-cho-nguoi-mua/-infographic-nhung-quy-dinh-phap-ly-khong-the-bo-qua-khi-mua-ban-bat-dong-san-ar103077" title="[Infographic] Nh&#x1EEF;ng quy &#x111;&#x1ECB;nh ph&#xE1;p l&#xFD; kh&#xF4;ng th&#x1EC3; b&#x1ECF; qua khi mua b&#xE1;n b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n">
                                        [Infographic] Những quy định pháp lý không thể bỏ qua khi mua bán bất động sản
                                    </a>
                                </h3>
                                <a class="font-link-box-item" href="/loi-khuyen-cho-nguoi-mua/-infographic-nhung-quy-dinh-phap-ly-khong-the-bo-qua-khi-mua-ban-bat-dong-san-ar103077" title="[Infographic] Nh&#x1EEF;ng quy &#x111;&#x1ECB;nh ph&#xE1;p l&#xFD; kh&#xF4;ng th&#x1EC3; b&#x1ECF; qua khi mua b&#xE1;n b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n"></a>
                            </li>
</ul></div></div>            <div class="clear">
            </div>
        </div>

<div style="clear: both">
    &nbsp;
</div>
<div class="buttom-title-by-category">Trong chuyên mục <strong>Tin t&#x1EE9;c b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n</strong>, nếu quý vị chưa tìm thấy thông tin cần tìm hoặc muốn tham khảo thêm thông tin liên quan đến lĩnh vực <strong>Tin t&#x1EE9;c b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n</strong> thì hãy thử tìm thêm thông tin ở mục <strong>Hỏi đáp</strong> hoặc gửi email cho chúng tôi theo địa chỉ: <a href="mailto:hotro@batdongsan.com.vn">hotro@batdongsan.com.vn</a></div>

                        </div>
                    </div>
                </div>

                <div id="MiddleMainContent" class="t_right">

                    

    <div class="container-common">
        <div class="box-header">
            <div class="name_tit" align="center">
                <h2 style="color: White;">
                    Tin nhiều người đọc
                </h2>
            </div>
        </div>

        <div class="bor_box">

                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="B&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n Long Th&#xE0;nh bi&#x1EBF;n &#x111;&#x1ED9;ng m&#x1EA1;nh nh&#x1EDD; s&#xE2;n bay"  href="/tin-thi-truong/bat-dong-san-long-thanh-bien-dong-manh-nho-san-bay-ar105457">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/11/06/YSUn3oGJ/20201106152518-b889.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 70px;">
                        <a class="controls-view-date-contents-link"  href="/tin-thi-truong/bat-dong-san-long-thanh-bien-dong-manh-nho-san-bay-ar105457" title="B&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n Long Th&#xE0;nh bi&#x1EBF;n &#x111;&#x1ED9;ng m&#x1EA1;nh nh&#x1EDD; s&#xE2;n bay">
                            B&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n Long Th&#xE0;nh bi&#x1EBF;n &#x111;&#x1ED9;ng m&#x1EA1;nh nh&#x1EDD; s&#xE2;n bay
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="Nh&#x1EEF;ng y&#x1EBF;u t&#x1ED1; &#x201C;&#x111;&#x1EAD;p tan&#x201D; k&#x1EF3; v&#x1ECD;ng gi&#xE1; b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n s&#x1EBD; gi&#x1EA3;m"  href="/phan-tich-nhan-dinh/nhung-yeu-to-dap-tan-ky-vong-gia-bat-dong-san-se-giam-ar105453">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/11/04/FTnaKngu/20201104114102-ddbe.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 70px;">
                        <a class="controls-view-date-contents-link"  href="/phan-tich-nhan-dinh/nhung-yeu-to-dap-tan-ky-vong-gia-bat-dong-san-se-giam-ar105453" title="Nh&#x1EEF;ng y&#x1EBF;u t&#x1ED1; &#x201C;&#x111;&#x1EAD;p tan&#x201D; k&#x1EF3; v&#x1ECD;ng gi&#xE1; b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n s&#x1EBD; gi&#x1EA3;m">
                            Nh&#x1EEF;ng y&#x1EBF;u t&#x1ED1; &#x201C;&#x111;&#x1EAD;p tan&#x201D; k&#x1EF3; v&#x1ECD;ng gi&#xE1; b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n s&#x1EBD; gi&#x1EA3;m
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="Gi&#xE1; nh&#xE0; li&#x1EC1;n th&#x1ED5; l&#x1EAD;p &#x111;&#x1EC9;nh m&#x1EDB;i, c&#x1A1; h&#x1ED9;i n&#xE0;o cho nh&#xE0; &#x111;&#x1EA7;u t&#x1B0;?"  href="/tin-thi-truong/gia-nha-lien-tho-lap-dinh-moi-co-hoi-nao-cho-nha-dau-tu-ar105465">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/11/10/b9sp0zUm/20201110090821-b213.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 70px;">
                        <a class="controls-view-date-contents-link"  href="/tin-thi-truong/gia-nha-lien-tho-lap-dinh-moi-co-hoi-nao-cho-nha-dau-tu-ar105465" title="Gi&#xE1; nh&#xE0; li&#x1EC1;n th&#x1ED5; l&#x1EAD;p &#x111;&#x1EC9;nh m&#x1EDB;i, c&#x1A1; h&#x1ED9;i n&#xE0;o cho nh&#xE0; &#x111;&#x1EA7;u t&#x1B0;?">
                            Gi&#xE1; nh&#xE0; li&#x1EC1;n th&#x1ED5; l&#x1EAD;p &#x111;&#x1EC9;nh m&#x1EDB;i, c&#x1A1; h&#x1ED9;i n&#xE0;o cho nh&#xE0; &#x111;&#x1EA7;u t&#x1B0;?
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="&#x110;&#xE1;nh gi&#xE1; d&#x1EF1; &#xE1;n Bcons Garden: C&#x103;n h&#x1ED9; cho gia &#x111;&#xEC;nh tr&#x1EBB;, gi&#xE1; t&#x1EEB; 1,2 t&#x1EF7; &#x111;&#x1ED3;ng"  href="/tin-thi-truong/danh-gia-du-an-bcons-garden-can-ho-khu-dong-sai-gon-gia-chi-tu-1-2-ty-dong-ar105475">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/11/10/tEfrXoEj/20201110083410-17e1.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 70px;">
                        <a class="controls-view-date-contents-link"  href="/tin-thi-truong/danh-gia-du-an-bcons-garden-can-ho-khu-dong-sai-gon-gia-chi-tu-1-2-ty-dong-ar105475" title="&#x110;&#xE1;nh gi&#xE1; d&#x1EF1; &#xE1;n Bcons Garden: C&#x103;n h&#x1ED9; cho gia &#x111;&#xEC;nh tr&#x1EBB;, gi&#xE1; t&#x1EEB; 1,2 t&#x1EF7; &#x111;&#x1ED3;ng">
                            &#x110;&#xE1;nh gi&#xE1; d&#x1EF1; &#xE1;n Bcons Garden: C&#x103;n h&#x1ED9; cho gia &#x111;&#xEC;nh tr&#x1EBB;, gi&#xE1; t&#x1EEB; 1,2 t&#x1EF7; &#x111;&#x1ED3;ng
                                <img class="news-image-video-icon" atl="" src="https://file4.batdongsan.com.vn/images/opt/bds-video.png">
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="T&#xEC;m mua nh&#xE0; d&#x1EC5; d&#xE0;ng h&#x1A1;n nh&#x1EDD; c&#xF4;ng ngh&#x1EC7; b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n"  href="/tin-thi-truong/tim-mua-nha-de-dang-hon-nho-cong-nghe-bat-dong-san-ar105468">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2020/11/10/wxbwknn6/20201110081057-779d.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 70px;">
                        <a class="controls-view-date-contents-link"  href="/tin-thi-truong/tim-mua-nha-de-dang-hon-nho-cong-nghe-bat-dong-san-ar105468" title="T&#xEC;m mua nh&#xE0; d&#x1EC5; d&#xE0;ng h&#x1A1;n nh&#x1EDD; c&#xF4;ng ngh&#x1EC7; b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n">
                            T&#xEC;m mua nh&#xE0; d&#x1EC5; d&#xE0;ng h&#x1A1;n nh&#x1EDD; c&#xF4;ng ngh&#x1EC7; b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title="Tin t&#x1EE9;c b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n n&#x1ED5;i b&#x1EAD;t nh&#x1EA5;t tu&#x1EA7;n qua (2/11-7/11/2020)"  href="/tin-thi-truong/tin-tuc-bat-dong-san-noi-bat-nhat-tuan-2-thang-11-2020-ar105461">
                            <img style="width: 60px; height: 60px;" src="https://file4.batdongsan.com.vn/crop/60x60/2018/06/06/wxbwknn6/20180606091156-fe6d.jpg">
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 70px;">
                        <a class="controls-view-date-contents-link"  href="/tin-thi-truong/tin-tuc-bat-dong-san-noi-bat-nhat-tuan-2-thang-11-2020-ar105461" title="Tin t&#x1EE9;c b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n n&#x1ED5;i b&#x1EAD;t nh&#x1EA5;t tu&#x1EA7;n qua (2/11-7/11/2020)">
                            Tin t&#x1EE9;c b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n n&#x1ED5;i b&#x1EAD;t nh&#x1EA5;t tu&#x1EA7;n qua (2/11-7/11/2020)
                                                    </a>
                    </p>
                </div>
                <div style="clear: both;"></div>
        </div>
    </div>

                    <div style="clear: both; margin-bottom: 10px;"></div>

                    
<div class="container-common">
    <div class="box-header">
        <h2 class="name_tit" align="center">Ch&#x1EE7; &#x111;&#x1EC1; &#x111;&#x1B0;&#x1EE3;c quan t&#xE2;m</h2>
    </div>
    <div class="bor_box">
        <div class="list">
            <ul>
                        <li>
                            <a href="/Covid-19" title="B&#x110;S &amp; Covid-19">
                                <span class="faq-name">
                                    B&#x110;S &amp; Covid-19
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/kinh-nghiem-mua-ban-nha" title="Kinh nghi&#x1EC7;m mua b&#xE1;n nh&#xE0;">
                                <span class="faq-name">
                                    Kinh nghi&#x1EC7;m mua b&#xE1;n nh&#xE0;
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/bao-cao-thi-truong-batdongsancomvn" title="B&#xE1;o c&#xE1;o th&#x1ECB; tr&#x1B0;&#x1EDD;ng Batdongsan.com.vn">
                                <span class="faq-name">
                                    B&#xE1;o c&#xE1;o th&#x1ECB; tr&#x1B0;&#x1EDD;ng Batdongsan.com.vn
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/co-hen-voi-chuyen-gia-bat-dong-san" title="C&#xF3; h&#x1EB9;n v&#x1EDB;i chuy&#xEA;n gia b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n">
                                <span class="faq-name">
                                    C&#xF3; h&#x1EB9;n v&#x1EDB;i chuy&#xEA;n gia b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/dien-bien-thi-truong-bds-nam-2020" title="Di&#x1EC5;n bi&#x1EBF;n th&#x1ECB; tr&#x1B0;&#x1EDD;ng B&#x110;S n&#x103;m 2020">
                                <span class="faq-name">
                                    Di&#x1EC5;n bi&#x1EBF;n th&#x1ECB; tr&#x1B0;&#x1EDD;ng B&#x110;S n&#x103;m 2020
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/bao-ve-nguoi-mua-nha-dat" title="B&#x1EA3;o v&#x1EC7; ng&#x1B0;&#x1EDD;i mua nh&#xE0;, &#x111;&#x1EA5;t">
                                <span class="faq-name">
                                    B&#x1EA3;o v&#x1EC7; ng&#x1B0;&#x1EDD;i mua nh&#xE0;, &#x111;&#x1EA5;t
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/bai-infographic" title="Infographic">
                                <span class="faq-name">
                                    Infographic
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/bat-dong-san-tai-cac-dac-khu-kinh-te" title="B&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n t&#x1EA1;i c&#xE1;c &quot;&#x111;&#x1EB7;c khu&quot; kinh t&#x1EBF;">
                                <span class="faq-name">
                                    B&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n t&#x1EA1;i c&#xE1;c &quot;&#x111;&#x1EB7;c khu&quot; kinh t&#x1EBF;
                                </span>
                            </a>
                        </li>
            </ul>
        </div>
            <div style="padding-left: 20px; padding-top: 5px; border-top: 1px solid #ccc; margin-top: 10px;">
                <a href="/chu-de-trong-chu-de-ve-thong-tin-thi-truong" class="linktoall">Xem tất cả</a>
            </div>
    </div>
</div>
                    <div style="clear: both; margin-bottom: 10px;"></div>

                    
<div class="box1">
    <h2 class="h1">Dành cho người xây nhà</h2>
    <ul>
        <li>
            <a href="/quy-trinh-xay-nha" title="Quy tr&#xEC;nh x&#xE2;y nh&#xE0;" rel="nofollow">Quy tr&#xEC;nh x&#xE2;y nh&#xE0;</a>
        </li>
        <li class="last">
            <a href="/ho-tro-tien-ich/ht-xem-tuoi-xay-nha" title="Xem tu&#x1ED5;i x&#xE2;y nh&#xE0;" rel="nofollow">Xem tu&#x1ED5;i x&#xE2;y nh&#xE0;</a>
        </li>
    </ul>
</div>

                    <div style="clear: both; margin-bottom: 10px;"></div>

                    <div class="box-tien-ich">
    <div class="box-header aligncenter">
        <h2 class="name_tit">Hỗ trợ tiện ích</h2>
    </div>
    <div class="bor_box">
        <ul>
            <li>
                <a href="/ho-tro-tien-ich/ht-xem-huong-nha">
                    <img alt="Tư vấn phong thủy" src="https://file4.batdongsan.com.vn/images/icon-phongthuy.png">Tư vấn phong thủy
                </a>
            </li>
            <li>
                <a href="/ho-tro-tien-ich/ht-du-toan-chi-tiet">
                    <img alt="Tính lãi suất" src="https://file4.batdongsan.com.vn/images/icon-chiphi.png">Dự tính chi phí làm nhà
                </a>
            </li>
            <li>
                <a href="/ho-tro-tien-ich/ht-tinh-lai-suat">
                    <img alt="Tính lãi suất" src="https://file4.batdongsan.com.vn/images/icon-laisuat.png">Tính lãi suất
                </a>
            </li>
        </ul>
    </div>
</div>

                    <div class="clear10"></div>
                    <div style="clear:both;"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="col_right parent-main-right">
            <div>
                    <div class="container-common">
        <div>
            <div>
                <div class="newsletter-form-small">
                    <div class="mb5">
                        <div class="fl">
                            <img src="https://file4.batdongsan.com.vn/images/icon-newsletter-small.jpg">
                        </div>
                        <div class="fl news-text">Nhận bản tin từ Batdongsan.com.vn</div>
                        <div class="clear"></div>
                    </div>
                    <div class="newsletter-content">
                        <div class="newsletter-bound">
                            <div class="fl input">
                                <input type="text" id="email" placeholder="Nhập email của bạn">
                            </div>
                            <div class="fl a"><a href="#" class="newsletter-register" id="newsletterRegister">Đăng ký</a></div>
                            <div class="clear">&nbsp;</div>
                            <div id="emailValid"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

            </div>
            <div style="clear:both;"></div>
            <div class="adPosition" positionCode="BANNER_POSITION_RIGHT_MAIN_CONTENT" style=""></div>
<script type='text/javascript'> var bannerContext={"CateId":87,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":96};</script>
            <div style="clear:both;"></div>
            <div class="enterprise-rightContent">
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

                <div style="clear:both;"></div>
            </div>
        </div>
<div class="clear"></div>
<div class="banner-bottom">
    <div id="SubBottomLeftMainContent" style="float: left; width: 560px"></div>
    <div id="SubBottomRightMainContent" style="float: left; width: 430px; margin-left: 5px"></div>
</div>

                <div class="banner-bottom">
                    <div style="float: left; width: 560px">
                    </div>
                    <div style="float: left; width: 430px; margin-left: 5px">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="boxLinkFooter">
                        <div id="boxLink" class="footer-link-new">
        <ul>
<li>
<h4>Tìm kiếm nhiều</h4>
<ul>
<li><a href="/ban-can-ho-chung-cu-vinhomes-grand-park-quan-9">Vinhomes Grand Park</a></li>
<li><a href="/ban-dat-nen-du-an-phuc-an-garden">Phúc An Garden</a></li>
<li><a href="/ban-nha-biet-thu-lien-ke-sun-plaza-grand-world">Sun Plaza Grand World</a></li>
<li><a href="/ban-can-ho-chung-cu-vinhomes-central-park">Vinhomes Central Park</a></li>
<li><a href="/ban-can-ho-chung-cu-apec-mandala-wyndham-binh-thuan">Apec Mandala Wyndham</a></li>
<li><a href="/ban-nha-biet-thu-lien-ke-novaworld-phan-thiet">Biệt thự NovaWorld Phan Thiết</a></li>
<li><a href="/ban-nha-biet-thu-lien-ke-novaworld-ho-tram">Biệt thự NovaWorld Hồ Tràm</a></li>
<li><a href="/ban-nha-biet-thu-lien-ke-thanh-long-bay">Biệt thự Thanh Long Bay</a></li>
</ul>
</li>
<li>
<h4>Hà Nội</h4>
<ul>
<li><a href="/ban-can-ho-chung-cu-vinhomes-metropolis-lieu-giai">Vinhomes Metropolis</a></li>
<li><a href="/ban-can-ho-chung-cu-sunshine-city">Sunshine City</a></li>
<li><a href="/ban-can-ho-chung-cu-tsg-lotus-sai-dong">TSG Lotus Sài Đồng</a></li>
<li><a href="/ban-can-ho-chung-cu-imperia-sky-garden">Imperia Sky Garden</a></li>
<li><a href="/ban-can-ho-chung-cu-vinhomes-gardenia">Vinhomes Gardenia</a></li>
<li><a href="/ban-can-ho-chung-cu-vinhomes-ocean-park-gia-lam">Vinhomes Ocean Park Gia Lâm</a></li>
<li><a href="/nha-dat-ban-thanh-xuan">Nhà đất Thanh Xuân</a></li>
<li><a href="/tags/ban/ban-chung-cu-mini-ha-noi">Chung cư mini</a></li>
<li><a href="/ban-can-ho-chung-cu-ha-noi">Chung cư giá rẻ Hà Nội</a></li>
</ul>
</li>
<li>
<h4>Hồ Chí Minh</h4>
<ul>
<li><a href="/nha-dat-ban-quan-7">Nhà đất Quân 7</a></li>
<li><a href="/nha-dat-ban-binh-thanh">Nhà đất Bình Thạnh</a></li>
<li><a href="/nha-dat-ban-tan-binh">Nhà đất Tân Bình</a></li>
<li><a href="/nha-dat-ban-binh-tan">Nhà đất Bình Tân</a></li>
<li><a href="/nha-dat-ban-thu-duc">Nhà đất Thủ Đức</a></li>
<li><a href="/nha-dat-ban-quan-5">Nhà đất Quận 5</a></li>
<li><a href="Nhà đất Tân Bình">Nhà đất Tân Bình</a></li>
<li><a href="/ban-can-ho-chung-cu-tp-hcm">Căn hộ giá rẻ TPHCM</a></li>
<li><a href="/tags/ban/ban-can-ho-mini-tp-hcm">Căn hộ mini</a></li>
</ul>
</li>
<li>
<h4>Nhà đất bán</h4>
<ul>
<li><a href="/ban-dat-binh-phuoc">Bán đất Bình Phước</a></li>
<li><a href="/ban-nha-biet-thu-lien-ke-da-lat-ldd">Bán biệt thự Đà Lạt</a></li>
<li><a href="/ban-nha-mat-pho-lavilla-green-city">Lavilla Green City</a></li>
<li><a href="/nha-dat-ban-cau-giay">Nhà đất Cầu Giấy</a></li>
<li><a href="/nha-dat-ban-quy-nhon-bdd">Nhà đất Quy Nhơn</a></li>
<li><a href="/ban-can-ho-chung-cu-vung-tau-pearl">Vũng Tàu Pearl</a></li>
</ul>
</li>
</ul>

    </div>



                </div>
            </div>

        <div id="SiteRight" class="banner-right clearfix">
            <div class="container-default">
                <div>
                    <div id="ban_wide_right" class="ban_wide_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_WIDE_RIGHT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":87,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":96};</script>
                    </div>

                    <div id="ban_right" class="ban_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_RIGHT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":87,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":96};</script>
                    </div>
                </div>
            </div>
        </div>
    
</body>
@endsection

