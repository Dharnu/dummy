<!DOCTYPE html>
<html>
    <head>
        <title>CCRC-UI</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/ccrc_common_style.css">
        <link rel="stylesheet" href="css/configuration.css">

    </head>
    <body>
        <div class="containerMain">
            <header class="flexAlignCenterJustifyCenter">
                <div class="displayResidentName flexAlignCenter" id="display_resident_name">
                    <img src="images/user.png"  alt="user" />
                    <div class="residentName" id="resident_name">Resident 1</div>
                </div>
                <div class="headerTitle flexAlignCenterJustifyCenter">CCRC UI DESIGN</div>
                <div class="headerRight"></div>
            </header>
            <section>
                <div class="displayFlex contentContainer">
                    <div class="contentBody contentShadow flexAlignCenterJustifyCenter flexDirectionColumn">
                        <div class="gridBoxMain">
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="bulletinBoard();" >
                                <span>Bulletin Board</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="survey();" >
                                <span>Tell CATIE</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="catieMail();" >
                                <span>CATIE Mail</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="calendar();" >
                                <span>Calendar</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="maintanance();" >
                                <span>Request Service</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="greenpages();" >
                                <span>Green Pages</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="photogallery();" >
                                <span>Photo Gallery</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="sponser();" >
                                <span>Sponser</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="sponser_two();" >
                                <span>Sponser Two</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="communityDirectory();" >
                                <span>Community directory</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="dinning();" >
                                <span>Dinning</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="staffDirectory();" >
                                <span>Staff Directory</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="employee();" >
                                <span>employee-Check-in</span>									
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="Video();" >
                                <span>Video Gallery</span>                                  
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="DirectoryService();" >
                                <span>Directory service</span>                                  
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="DocumentRepository();" >
                                <span>Document Repository</span>                                  
                            </div>
                            <div class="calBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="reactSurvey();" >
                                <span>React JS</span>									
                            </div>
                        </div>
                    </div>
                    <div class="sideFooter">
                        <div class="flexDirectionColumn flexAlignEndJustifySapceBetween">
                            <div class="home-icon" onclick="home();"><img src="images/home.png" alt="home"></div>
                            <div class="home-icon" onclick="home();"><img src="images/back.png" alt="back"></div>
                        </div>
                    </div>
                </div>

            </section>
            <footer>
                <div class="footerMain flexAlignCenterJustifySpaceBetween displayFlex">
                    <div class="home-icon"><img src="images/home.png" alt="home"></div>
                    <div class="home-icon"><img src="images/back.png" alt="back"></div>
                </div>
            </footer>
        </div>
    </body>
    <script>

        function bulletinBoard() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Message_Center/message_center.php';
        }

        function survey() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Survey/survey.php';
        }

        function catieMail() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Catie_Mail/inbox.php';
        }

        function calendar() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Calendar/multi_cal.php';
        }
        function maintanance() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/RequestService/Maintenance.php';
        }
        function greenpages() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/GreenPages/greenpages.php';
        }
        function photogallery() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/PhotoGallery/photogallery.php';
        }
        function reactSurvey() {
            window.location.href = 'http://10.10.1.166/react/demo/public/';
        }
        function sponser() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Sponser/sponser.php';
        }
        function sponser_two() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Sponser_Two/sponser.php';
        }
        function communityDirectory() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/communityDirectory/community.php';
        }
        function dinning() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/DinningService/dinning.php';
        }
        function employee() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/employeecheckin/employee.php';
        }
        function Video() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/videoGallery/video.php';
        }
        function DirectoryService() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/DirectoryService/directory.php';
        }
        function DocumentRepository() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/DocumentRepository/document.php';
        }
        function staffDirectory() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/CommunityDirectory/staff.php';
        }
    </script>
</html>