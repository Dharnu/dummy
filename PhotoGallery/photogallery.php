<!DOCTYPE html>
<html>
    <head>
        <title>CCRC-UI</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/ccrc_common_style.css">
        <link rel="stylesheet" href="../css/configuration.css">
        <link rel="stylesheet" href="photogallery_style.css" />
    </head>
    <body>
        <div class="containerMain">
            <header class="flexAlignCenterJustifyCenter">
                <div class="displayResidentName flexAlignCenter" id="display_resident_name">
                    <img src="../images/user.png"  alt="user" />
                    <div class="residentName" id="resident_name">Resident 1</div>
                </div>
                <div class="headerTitle flexAlignCenterJustifyCenter">Photo Gallery</div>
                <div class="headerRight"></div>
            </header>
            <section>
                <div class="displayFlex contentContainer">
                    <div class="contentBody contentShadow flexAlignCenterJustifyCenter flexDirectionColumn">
                        <div id="photoGallery" class="gridBoxMain">
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/1.jpg" />								
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/2.jpg" />									
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/Desert.jpg" />									
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/Jellyfish.jpg" />										
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/Tulips.jpg" />									
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/5.jpg" />										
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/1.jpg" />								
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/2.jpg" />									
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/Desert.jpg" />									
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/Jellyfish.jpg" />										
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/Tulips.jpg" />									
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/5.jpg" />										
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/2.jpg" />									
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/Desert.jpg" />									
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/Jellyfish.jpg" />										
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/Tulips.jpg" />									
                            </div>
                            <div class="photoBox flexAlignCenterJustifyCenter flexDirectionColumn" onclick="showPhoto();" >
                                <img src="../images/photo/5.jpg" />										
                            </div>
                        </div>
                        <div id="individualPhoto" class="photoDetails" style="display: none;">
                            <div class="galleryImage">
                                <div class="galleryPhoto flexAlignCenterJustifyCenter">
                                    <img id="galleryPhoto" src="../images/photo/Desert.jpg" />
                                </div>
                                <div class="galleryActions displayFlex flexAlignCenterJustifySpaceAround ">
                                    <div class="flexAlignCenterJustifyCenter">Zoom In</div>
                                    <div class="flexAlignCenterJustifyCenter">Zoom Out</div>
                                    <img src="../images/photo/rotate_left.png" />
                                    <img src="../images/photo/rotate_right.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sideFooter">
                        <div class="flexDirectionColumn flexAlignEndJustifySapceBetween">
                            <div id="homeButtons" class="home-icon" onclick="home();" style="display: none;"><img src="../images/home.png" alt="home"></div>
                            <div id="backButtons" class="home-icon" onclick="back();"><img src="../images/back.png" alt="back"></div>
                            <div id="previousButtons" class="home-icon" onclick="next();"><img src="../images/previous.png" alt="home"></div>
                            <div id="nextButtons" class="home-icon" onclick="next();"><img src="../images/next.png" alt="home"></div>
                            <div id="deleteButtons" class="home-icon" onclick="back();"><img src="../images/delete.png" alt="home"></div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="footerMain flexAlignCenterJustifySpaceBetween displayFlex">
                    <div id="homeButton" class="home-icon" onclick="home();"><img src="../images/home.png" alt="home"></div>
                    <div id="backButton" class="home-icon" onclick="back();" style="display: none;"><img src="../images/back.png" alt="back"></div>
                    <div id="previousButton" class="home-icon" onclick="next();" style="display: none;"><img src="../images/previous.png" alt="home"></div>
                    <div id="nextButton" class="home-icon" onclick="next();" style="display: none;"><img src="../images/next.png" alt="home"></div>
                    <div id="deleteButton" class="home-icon" onclick="back();" style="display: none;"><img src="../images/delete.png" alt="home"></div>
                </div>
            </footer>
        </div>
    </body>
    <script>
        var i = 1;

        function showPhoto() {
            document.getElementById('photoGallery').style.display = 'none';
            document.getElementById('individualPhoto').style.display = 'block';
            document.getElementById('homeButton').style.display = 'none';
            document.getElementById('backButton').style.display = 'block';
            document.getElementById('previousButton').style.display = 'block';
            document.getElementById('nextButton').style.display = 'block';
            document.getElementById('deleteButton').style.display = 'block';
        }

        function next() {
            i++;
            document.getElementById('galleryPhoto').src = '../images/photo/' + i + '.jpg';
            if (i === 5) {
                i = 1;
            }
        }

        function back() {
            document.getElementById('individualPhoto').style.display = 'none';
            document.getElementById('photoGallery').style.display = 'block';
            document.getElementById('homeButton').style.display = 'block';
            document.getElementById('backButton').style.display = 'none';
            document.getElementById('previousButton').style.display = 'none';
            document.getElementById('nextButton').style.display = 'none';
            document.getElementById('deleteButton').style.display = 'none';
        }
        
        function home() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN';
        }
    </script>
</html>