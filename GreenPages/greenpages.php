<!DOCTYPE html>
<html>
    <head>
        <title>CCRC-UI</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/ccrc_common_style.css">
        <link rel="stylesheet" href="../css/configuration.css">
        <link rel="stylesheet" href="greenpages_css.css">
    </head>
    <body>
        <div class="containerMain">
            <header class="flexAlignCenterJustifyCenter">
                <div class="displayResidentName flexAlignCenter" id="display_resident_name">
                    <img src="../images/user.png"  alt="user" />
                    <div class="residentName" id="resident_name">Resident 1</div>
                </div>
                <div class="headerTitle flexAlignCenterJustifyCenter">CCRC UI DESIGN</div>
                <div class="headerRight"></div>
            </header>
            <section>
                <div class="displayFlex contentContainer">
                    <div class="contentBody contentShadow flexAlignCenterJustifyCenter flexDirectionColumn">
                        <div id="greenpageGridHome" class="greenPageGridBoxMain" onclick="showSubCat();">
                            <div class="greenPageGridBox flexDirectionColumn">
                                <div class="greenpageImage flexAlignCenterJustifyCenter">
                                    <img src="../images/green1.png" />
                                </div>
                                <div class="greenPageCategory flexAlignStartJustifyCenter">
                                    Sponser in green page with all								
                                </div>
                            </div>
                            <div class="greenPageGridBox flexDirectionColumn">
                                <div class="greenpageImage flexAlignCenterJustifyCenter">
                                    <img src="../images/images.png" />
                                </div>
                                <div class="greenPageCategory flexAlignStartJustifyCenter">
                                    Green Pages One								
                                </div>
                            </div>
                            <div class="greenPageGridBox flexDirectionColumn">
                                <div class="greenpageImage flexAlignCenterJustifyCenter">
                                    <img src="../images/green1.png" />
                                </div>
                                <div class="greenPageCategory flexAlignStartJustifyCenter">
                                    Sponser in green page with all								
                                </div>
                            </div>
                            <div class="greenPageGridBox flexDirectionColumn">
                                <div class="greenpageImage flexAlignCenterJustifyCenter">
                                    <img src="../images/green1.png" />
                                </div>
                                <div class="greenPageCategory flexAlignStartJustifyCenter">
                                    Green Pages One								
                                </div>
                            </div>
                        </div>
                        <div id="greenpageGridSub" class="gridBoxSubMain" style="display: none;" onclick="">
                            <div class="greenPageSubCategory">
                                <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showVendor();">
                                    <span>Greenpage Subcategory one</span>									
                                </div>
                                <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn">
                                    <span>Greenpage Subcategory two</span>									
                                </div>
                                <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn">
                                    <span>Greenpage Subcategory 3</span>									
                                </div>
                                <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn">
                                    <span>Greenpage Subcategory 4</span>									
                                </div>
                                <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn">
                                    <span>Greenpage Subcategory 5</span>									
                                </div>
                                <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showVendor();">
                                    <span>Greenpage Subcategory one</span>									
                                </div>
                                <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn">
                                    <span>Greenpage Subcategory two</span>									
                                </div>
                                <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn">
                                    <span>Greenpage Subcategory 3</span>									
                                </div>
                                <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn">
                                    <span>Greenpage Subcategory 4</span>									
                                </div>
                                <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn">
                                    <span>Greenpage Subcategory 5</span>									
                                </div>
                                <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn">
                                    <span>Greenpage Subcategory 5</span>									
                                </div>
                            </div>
                            <div class="greenPageWithoutSubCategory" >
                                <div class="hrBar"><hr style="height:2px; border:none; color:#16bad6; background-color:#16bad6 ;"></div>
                                <div class="vendorListWithoutSubCategory">
                                    <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn">
                                        <span>Greenpage Subcategory two</span>									
                                    </div>
                                    <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn">
                                        <span>Vendor without Sub Category 1</span>									
                                    </div>
                                    <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn">
                                        <span>Vendor without Sub Category 2</span>									
                                    </div>
                                    <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn">
                                        <span>Vendor without Sub Category 3</span>									
                                    </div> 
                                    <div class="gridBox flexAlignCenterJustifyCenter flexDirectionColumn">
                                        <span>Vendor without Sub Category 4</span>									
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div id="vendorDetails" class="vendorDetailsContainer"  style="display: none;">
                            <div class="vendorImage">
                                <img src="../images/Desert.jpg" />
                            </div>
                            <div class="vendorDetails flexAlignCenterJustifyCenter">
                                <div>
                                    <div class="vendorAddressMain displayFlex">
                                        <div class="addresslabel">
                                            Address
                                        </div>
                                        <div class="addressAndCall displayFlex flexDirectionColumn">
                                            <div class="flexDirectionColumn">
                                                <span>5Th Avenue</span>
                                                <span>Besant Nagar</span>
                                                <span>Chennai 600090</span>
                                            </div>
                                            <div class="flexAlignCenterJustifyStart">
                                                <div class="callButton flexAlignCenterJustifyCenter">Call</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vendorOtherDetails flexAlignEndJustifyEnd">
                                        <div class="flexAlignEnd">
                                            <div class="vendorOthers flexDirectionColumn">
                                                <span>This is vendor one otherd</span>
                                                <span>Other details of the vendor</span>
                                                <span>Vendor other details fors</span>
                                            </div>
                                            <div class="vendorOption flexAlignCenterJustifySpaceAround flexDirectionColumn">
                                                <div class="vendorMenu flexAlignCenterJustifyEnd">
                                                    <div class="vendorOptionDiv flexAlignCenterJustifyCenter" onclick="showMenu();">Menu</div>
                                                </div>
                                                <div class="vendorMail displayFlex flexAlignCenterJustifySpaceBetween">
                                                    <div class="vendorOptionDiv flexAlignCenterJustifyCenter">Send Memo</div>
                                                    <div class="vendorOptionDiv flexAlignCenterJustifyCenter" onclick="sendMail();">Send Mail</div>
                                                </div>
                                                <div class=" vendorCoupon flexAlignCenterJustifyEnd">
                                                    <div class="vendorOptionDiv flexAlignCenterJustifyCenter" onclick="showCoupon();">Coupon</div>
                                                </div>
                                                <div class="vendorVideo flexAlignCenterJustifyEnd">
                                                    <div class="vendorOptionDiv flexAlignCenterJustifyCenter">Video</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="individualPhoto" class="photoDetails" style="display: none;">
                            <div class="galleryImage">
                                <div class="galleryPhoto flexAlignCenterJustifyCenter">
                                    <img id="galleryPhoto" src="../images/photo/Desert.jpg" />
                                </div>
                                <div class="galleryActions displayFlex flexAlignCenterJustifySpaceAround ">
                                    <div class="flexAlignCenterJustifyCenter" onclick="printCoupon('Please collect your print out at the front desk!');">Print Coupon</div>
                                    <div class="flexAlignCenterJustifyCenter" onclick="next();">Previous</div>
                                    <div class="flexAlignCenterJustifyCenter" onclick="next();">Next</div>
                                </div>
                            </div>
                        </div>
                        <div id="menuDetails" class="menuDetails" style="display: none;">
                            <div class="menuContent">
                                <div class="menuImage">
                                    <img src="../images/Desert.jpg" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sideFooter">
                        <div class="flexDirectionColumn flexAlignEndJustifySapceBetween">
                            <div class="home-icon" onclick="home();"><img src="../images/home.png" alt="home"></div>
                            <div class="home-icon" onclick="category();"><img src="../images/category.png" alt="category"></div>
                            <div class="home-icon" onclick="back();"><img src="../images/back.png" alt="back"></div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="footerMain greenPageFooter flexAlignCenterJustifySpaceBetween displayFlex">
                    <div id="homeButton" class="home-icon" onclick="home();"><img src="../images/home.png" alt="home"></div>
                    <div id="categoryButton" class="home-icon" onclick="category();" style="display: none;"><img src="../images/category.png" alt="category"></div>
                    <div id="previousButton" class="home-icon" onclick="next();" style="display: none;"><img src="../images/previous.png" alt="home"></div>
                    <div id="nextButton" class="home-icon" onclick="next();" style="display: none;"><img src="../images/next.png" alt="home"></div>
                    <div id="backButton" class="home-icon" onclick="back();" style="display: none;"><img src="../images/back.png" alt="back"></div>
                    <div id="referralButton" class="home-icon"><img src="../images/referral.png" alt="back"></div>
                </div>
            </footer>
        </div>
        <div class="overlay flexAlignCenterJustifyCenter" id="overlay">
            <div class="alert-popup" id="alert-popup">
                <div class="alert-icon-main flexAlignCenterJustifyCenter">
                    <div class="alert-icon flexAlignCenterJustifyCenter">
                        <div class="exc-symbol">!</div>
                    </div>
                </div>
                <div class="alert-message flexAlignCenterJustifyCenter" id="popupMsg"></div>
                <div class="alert-action flexAlignCenterJustifyCenter">
                    <div class="flexAlignCenterJustifyCenter" onclick="closePopup();">OK</div>
                </div>
            </div>
        </div>
    </body>
    <script>
        var i = 1;
        function showSubCat() {
            document.querySelector('#greenpageGridHome').style.display = 'none';
            document.querySelector('#greenpageGridSub').style.display = "block";
            document.querySelector('#referralButton').style.display = 'none';
            document.querySelector('#categoryButton').style.display = 'block';
            document.querySelector('#backButton').style.display = 'block';

        }

        function showVendor() {
            document.querySelector('#greenpageGridHome').style.display = 'none';
            document.querySelector('#greenpageGridSub').style.display = 'none';
            document.querySelector('#vendorDetails').style.display = "block";
            document.querySelector('#nextButton').style.display = 'block';
            document.querySelector('#previousButton').style.display = 'block';

        }

        function showCoupon() {
            document.querySelector('#vendorDetails').style.display = 'none';
            document.querySelector('#individualPhoto').style.display = "block";
            document.querySelector('#nextButton').style.display = 'none';
            document.querySelector('#previousButton').style.display = 'none';
        }
        function showMenu() {
            document.querySelector('#vendorDetails').style.display = 'none';
            document.querySelector('#individualPhoto').style.display = "none";
            document.querySelector('#menuDetails').style.display = "block";
            document.querySelector('#nextButton').style.display = 'none';
            document.querySelector('#previousButton').style.display = 'none';
        }

        function sendMail() {
            document.getElementById('overlay').style.display = '-webkit-flex';
            document.getElementById('popupMsg').innerHTML = "Service mail send to vendor";
        }

        function printCoupon(msg) {
            document.getElementById('overlay').style.display = '-webkit-flex';
            document.getElementById('popupMsg').innerHTML = msg;
        }

        function closePopup() {
            document.getElementById('overlay').style.display = 'none';
        }

        function home() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN';
        }
        function category() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/GreenPages/greenpages.php';
        }
        function back() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/GreenPages/greenpages.php';
        }

        function next() {
            i++;
            document.getElementById('galleryPhoto').src = '../images/photo/' + i + '.jpg';
            if (i === 5) {
                i = 1;
            }
        }

    </script>
</html>