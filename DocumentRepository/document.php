<html>
    <head>
        <title>CCRC-STAFF DIRECTOTY</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="document_style.css">
        <link rel="stylesheet" href="../css/ccrc_common_style.css">
        <link rel="stylesheet" href="../css/configuration.css">
    </head>
    <body>
        <div class="containerMain">
            <header class="flexAlignCenterJustifyCenter">
                <div class="displayResidentName flexAlignCenter" id="display_resident_name">
                    <img src="../images/user.png"  alt="user" />
                    <div class="residentName" id="resident_name">Resident 1</div>
                </div>
                <div class="headerTitle communityHeader flexAlignCenterJustifyCenter">DOCUMENT REPOSITORY</div>
                <div class="headerRight"></div>
            </header>
            <section>
                <div class="displayFlex contentContainer">
                    <div class="contentBody contentShadow flexAlignCenterJustifyCenter flexDirectionColumn">
                        <div id="documentRepositorypageGridHome" class="documentRepositoryGridBoxMain" onclick="showpdf();">
                            <div class="documentRepositoryGridBox flexDirectionColumn">
                                <!--                                <div class="documentRepositoryImage flexAlignCenterJustifyCenter">
                                                                    <img src="../images/green1.png" />
                                                                </div>-->
                                <div class="documentRepositoryCategory flexAlignCenterJustifyCenter">
                                    Sponser in green page with all								
                                </div>
                            </div>
                            <div class="documentRepositoryGridBox flexDirectionColumn">
                                <!--                                <div class="documentRepositoryImage flexAlignCenterJustifyCenter">
                                                                    <img src="../images/green1.png" />
                                                                </div>-->
                                <div class="documentRepositoryCategory flexAlignCenterJustifyCenter">
                                    Sponser in green page with all								
                                </div>
                            </div>
                            <div class="documentRepositoryGridBox flexDirectionColumn">
                                <div class="documentRepositoryImage flexAlignCenterJustifyCenter">
                                    <img src="../images/green1.png" />
                                </div>
                                <div class="documentRepositoryCategory flexAlignCenterJustifyCenter">
                                    Sponser in green page with all.								
                                </div>
                            </div>
                            <div class="documentRepositoryGridBox flexDirectionColumn">
                                <div class="documentRepositoryImage flexAlignCenterJustifyCenter">
                                    <img src="../images/green1.png" />
                                </div>
                                <div class="documentRepositoryCategory flexAlignCenterJustifyCenter">
                                    Sponser in green page with all.								
                                </div>
                            </div>
                        </div>
                        <div id="show_pdf_page" class="showPdfPage" style="display: none;">
                            <div class="zoomActionContainer flexAlignCenterJustifyEnd">
                                <div class="flexAlignCenterJustifyCenter">ZOOM</div>
                            </div>
                            <div class="pdfDisplay"></div>
                               
                        </div>
                    </div>
                    <div class="sideFooter">
                        <div class="flexDirectionColumn flexAlignEndJustifySapceBetween">
                            <div class="home-icon" onclick="home();"><img src="../images/home.png" alt="home"></div>
                            <div class="home-icon" onclick="back();"><img src="../images/back.png" alt="back"></div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="footerMain flexAlignCenterJustifySpaceBetween displayFlex">
                    <div  id="home" class="home-icon" onclick="home();"><img src="../images/home.png" width="150" height="150" alt="home"></div>
                    <div  id="back" class="home-icon" onclick="back();" style="display: none;"><img src="../images/back.png" width="150" height="150" alt="home"></div>
                </div>
            </footer>
        </div>
    </body>
    <script>
        function home() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN';
        }
        function back(){
             document.getElementById('show_pdf_page').style.display = 'none';
               document.getElementById('documentRepositorypageGridHome').style.display = 'block';
        }
        function showpdf() {
            document.getElementById('show_pdf_page').style.display = 'block';
            document.getElementById('documentRepositorypageGridHome').style.display = 'none';
            document.getElementById('back').style.display = '-webkit-flex';

        }
    </script>
</html>


