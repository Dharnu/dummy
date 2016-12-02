<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>CCRC - Calendar</title>

        <link rel="stylesheet" href="calendar_style.css" />
        <link rel="stylesheet" href="../css/ccrc_common_style.css" />
        <link rel="stylesheet" href="../css/configuration.css" />
    </head>
    <body class="calendarBody">
        <div class="containerMain">
            <header class="flexAlignCenterJustifyCenter">
                <div class="displayResidentName flexAlignCenter" id="display_resident_name">
                    <img src="../images/user.png"  alt="user" />
                    <div class="residentName" id="resident_name">Resident 1</div>
                </div>
                <div class="headerTitle flexAlignCenterJustifyCenter">MULTI CALENDAR</div>
                <div class="headerRight"></div>
            </header>
            <section>
                <div class="displayFlex contentContainer">
                    <div class="contentBody boxShadow flexStartCenter grid-box-scroll">
                        <div class="gridBoxMain">
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="goToCal();" >
                                <span>Calendar</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="goToCal();" >
                                <span>Calendar</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="goToCal();" >
                                <span>Calendar</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="goToCal();" >
                                <span>Calendar</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="goToCal();" >
                                <span>Calendar</span>									
                            </div>
                        </div>
                    </div>
                    <div class="sideFooter">
                        <div class="flexDirectionColumn flexAlignEndJustifySapceBetween">
                            <div class="home-icon" onclick="home();"><img src="../images/home.png" alt="home"></div>
                            <div class="home-icon" onclick="home();"><img src="../images/back.png" alt="back"></div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="footerMain flexAlignCenterJustifySpaceBetween displayFlex">
                    <div class="home-icon" onclick="home();"><img src="../images/home.png" width="150" height="150" alt="home"></div>
                </div>
            </footer>
        </div>
    </body>
    <script>
        function goToCal() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Calendar/Calendar.php';
        }
        function home() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN';
        }

    </script>
</html>