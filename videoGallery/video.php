<!DOCTYPE html>
<html>
    <head>
        <title>CCRC-STAFF DIRECTOTY</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="video_style.css">
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
                <div class="headerTitle communityHeader flexAlignCenterJustifyCenter">VIDEO GALLERY</div>
                <div class="headerRight"></div>
            </header>
            <section>
                <div class="displayFlex contentContainer">
                    <div class="contentBody contentShadow flexAlignCenterJustifyCenter flexDirectionColumn">
                        <div id="videogallery_list" class="videoGalleryParent flexAlignCenterJustifyCenter">
                            <div class="VideoScroll">
                                <div class="VideoListContent">
                                    <div class="VideoCategoryDetails">
                                        <div class="headingdiv headingStyle  flexAlignCenterJustifyCenter">
                                            Dance video ,Zumba Dance 
                                        </div>
                                        <div class="videoName  flexAlignCenter flexAlignCenterJustifyStart">
                                            <div id="video_name"  onclick="videoplay();" class="videoNameStyle flexAlignCenter"> Welcome to dance video </div>
                                        </div>
                                        <div class="videoName flexAlignCenter  flexAlignCenterJustifyStart">
                                            <div id="video_name"  onclick="videoplay();" class="videoNameStyle flexAlignCenter ">helloWorld Welcome </div>
                                        </div>
                                        <div class="videoName flexAlignCenter  flexAlignCenterJustifyStart">
                                            <div id="video_name"  onclick="videoplay();" class="videoNameStyle flexAlignCenter">helloWorld Welcome </div>
                                        </div>
                                    </div>
                                    <div class="VideoCategoryDetails">
                                        <div class="headingdiv headingStyle  flexAlignCenterJustifyCenter">
                                            Dance video ,Zumba Dance 
                                        </div>
                                        <div class="videoName flexAlignCenter  flexAlignCenterJustifyStart">
                                            <div id="video_name"  onclick="videoplay();" class="videoNameStyle flexAlignCenter">helloWorld Welcome </div>
                                        </div>
                                    </div>
                                    <div class="VideoCategoryDetails">
                                        <div class="headingdiv headingStyle  flexAlignCenterJustifyCenter">
                                            Dance video ,Zumba Dance 
                                        </div>
                                        <div class="videoName  flexAlignCenter flexAlignCenterJustifyStart">
                                            <div id="video_name"  onclick="videoplay();" class="videoNameStyle flexAlignCenter"> Welcome to dance video </div>
                                        </div>
                                        <div class="videoName flexAlignCenter  flexAlignCenterJustifyStart">
                                            <div id="video_name"  onclick="videoplay();" class="videoNameStyle flexAlignCenter">helloWorld Welcome </div>
                                        </div>
                                    </div>
                                    <div class="VideoCategoryDetails">
                                        <div class="headingdiv headingStyle  flexAlignCenterJustifyCenter">
                                            Dance video ,Zumba Dance 
                                        </div>
                                        <div class="videoName  flexAlignCenter flexAlignCenterJustifyStart">
                                            <div id="video_name"  onclick="videoplay();" class="videoNameStyle flexAlignCenter"> Welcome to dance video </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="videoscreen" class="native" style="display:none;">
                            
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
                    <div class="home-icon" onclick="back();"><img src="../images/back.png" width="150" height="150" alt="back"></div>
                </div>
            </footer>
        </div>
    </body>
    <script>
        function home() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN';
        }
        function back() {
             document.getElementById('videogallery_list').style.display = '-webkit-flex';
        }
        function videoplay(){
            document.getElementById('videoscreen').style.display = '-webkit-flex';
            document.getElementById('videogallery_list').style.display = 'none';
        }
    </script>
</html>



