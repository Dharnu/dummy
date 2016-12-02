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
                <div class="headerTitle flexAlignCenterJustifyCenter">Sponser Template</div>
                <div class="headerRight"></div>
            </header>
            <section>
                <div class="displayFlex contentContainer">
                    <div class="contentBody contentShadow flexAlignCenterJustifyCenter flexDirectionColumn">

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
    </body>
</html>