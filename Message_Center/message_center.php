<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>CCRC - Bulletin Board</title>

        <link rel="stylesheet" href="message_center.css" />
        <link rel="stylesheet" href="../css/ccrc_common_style.css" />
        <link rel="stylesheet" href="../css/configuration.css" />

    </head>
    <body>
        <div class="containerMain">
            <header class="flexAlignCenterJustifyCenter">
                <div class="displayResidentName flexAlignCenter" id="display_resident_name">
                    <img src="../images/user.png"  alt="user" />
                    <div class="residentName" id="resident_name">Resident 1</div>
                </div>
                <div class="headerTitle flexAlignCenterJustifyCenter">BULLETIN BOARD</div>
                <div class="headerRight"></div>
            </header>
            <section>
                <div class="displayFlex contentContainer">
                    <div class="contentBody contentShadow">
                        <div class="bbHeader displayFlex" id="new_message">
                            <div class="messageIcon flexAlignCenterJustifyCenter"><img src="../images/messages_icon.png" width="70" height="50" alt="message" /></div>
                            <div class="messageText flexAlignCenter">New - Unread Messages</div>
                        </div>
                        <div class="bbHeader displayFlex" id="old_message" style="display: none;">
                            <div class="messageIcon flexAlignCenterJustifyCenter"><img src="../images/messages_icon.png" width="70" height="50" alt="message" /></div>
                            <div class="messageText flexAlignCenter">Old - Read Messages</div>
                        </div>
                        <div class="bbHeader displayFlex" id="urgent_message" style="display: none;">
                            <div class="messageIcon flexAlignCenterJustifyCenter"><img src="../images/messages_icon.png" width="70" height="50" alt="message" /></div>
                            <div class="messageText flexAlignCenter">Urgent Messages</div>
                        </div>
                        <div class="bbContentMain displayFlex">
                            <div class="bbContentScroll">
                                <div class="bbContent">
                                    <div class="bbMessage flexAlignCenter" id="bb_message" onclick="show_popup();">
                                        <div class="bbMessageText flexAlignCenter">Hey you stop working too much!</div>
                                        <div class="bbMessageAlertIcon flexAlignCenterJustifyCenter" id="urgent_icon" style="display: none;">&#x21;</div>
                                    </div>
                                    <div class="bbMessage flexAlignCenter" id="bb_message" onclick="show_popup();">
                                        <div class="bbMessageText flexAlignCenter">Thank you very much for that gift</div>
                                    </div>
                                    <div class="bbMessage flexAlignCenter" id="bb_message" onclick="show_popup();">
                                        <div class="bbMessageText flexAlignCenter">Hey you stop working too much!</div>
                                    </div>
                                    <div class="bbMessage flexAlignCenter" id="bb_message" onclick="show_popup();">
                                        <div class="bbMessageText flexAlignCenter">Thank you very much for that gift</div>
                                    </div>
                                    <div class="bbMessage flexAlignCenter" id="bb_message" onclick="show_popup();">
                                        <div class="bbMessageText flexAlignCenter">Hey you stop working too much!</div>
                                    </div>
                                    <div class="bbMessage flexAlignCenter" id="bb_message" onclick="show_popup();">
                                        <div class="bbMessageText flexAlignCenter">Thank you very much for that gift</div>
                                    </div>
                                    <div class="bbMessage flexAlignCenter" id="bb_message" onclick="show_popup();">
                                        <div class="bbMessageText flexAlignCenter">Hey you stop working too much!</div>
                                    </div>
                                    <div class="bbMessage flexAlignCenter" id="bb_message" onclick="show_popup();">
                                        <div class="bbMessageText flexAlignCenter">Thank you very much for that gift</div>
                                    </div>
                                    <div class="bbMessage flexAlignCenter" id="bb_message" onclick="show_popup();">
                                        <div class="bbMessageText flexAlignCenter">Hey you stop working too much!</div>
                                    </div>
                                    <div class="bbMessage flexAlignCenter" id="bb_message" onclick="show_popup();">
                                        <div class="bbMessageText flexAlignCenter">Thank you very much for that gift</div>
                                    </div>
                                    <div class="bbMessage flexAlignCenter" id="bb_message" onclick="show_popup();">
                                        <div class="bbMessageText flexAlignCenter">Hey you stop working too much!</div>
                                    </div>
                                    <div class="bbMessage flexAlignCenter" id="bb_message" onclick="show_popup();">
                                        <div class="bbMessageText flexAlignCenter">Thank you very much for that gift</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bbSwitch flexAlignCenterJustifySpaceAround">
                            <div class="flexAlignCenterJustifyCenter" id="show_urgent_message" onclick="show_urgent_message();">Urgent Messages</div>
                            <div class="flexAlignCenterJustifyCenter" id="show_new_message" onclick="show_new_message();" style="display: none;">New Messages</div>
                            <div class="flexAlignCenterJustifyCenter" id="show_old_message" onclick="show_old_message();">Saved Messages</div>
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
                    <div class="home-icon" onclick="home();"><img src="../images/home.png" alt="home"></div>
                    <div class="home-icon" onclick="home();"><img src="../images/back.png" alt="back"></div>
                </div>
            </footer>
        </div>
        <div class="overlay flexAlignCenterJustifyCenter" id="overlay_popup">
            <div class="popupConfirm popup_shadow flexAlignCenterJustifyCenter">
                <div class="popMessageBox">
                    <div class="popupMessage" id="popup_message">
                        Within the various uses of the word today, "nature" often refers to geology and wildlife. Nature can refer to the general realm of living plants and animals, and in some cases to the processes associated with inanimate objects – the way that particular types of things exist and change of their own accord, such as the weather and geology of the Earth. It is often taken to mean the "natural environment" or wilderness–wild animals, rocks, forest, and in general those things that have not been subst
                        Within the various uses of the word today, "nature" often refers to geology and wildlife. Within the various uses of the word today, "nature" often refers to geology and wildlife. Within the various uses of the word today, "nature" often refers to geology and wildlife.
                    </div>
                    <div class="bbSignature flexAlignStartJustifyCenter flexDirectionColumn">
                        <div>Status Solution</div>
                        <div>Administaror</div>
                        <div>(866) 844-7272</div>
                    </div>
                    <div class="popupActionMain displayFlex">
                        <div class="displayBbDate flexAlignCenter">
                            Fri, 28 Oct 2016, 04:01 PM
                        </div>
                        <div class="bbActions flexAlignCenterJustifySpaceBetween">
                            <div class="flexAlignCenterJustifyCenter" id="delete_message">DELETE</div>
                            <div class="flexAlignCenterJustifyCenter" id="save_message">SAVE</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        function show_old_message() {
            document.getElementById('new_message').style.display = 'none';
            document.getElementById('urgent_message').style.display = 'none';
            document.getElementById('old_message').style.display = '-webkit-flex';
            document.getElementById('show_new_message').style.display = '-webkit-flex';
            document.getElementById('show_old_message').style.display = 'none';
            document.getElementById('show_urgent_message').style.display = '-webkit-flex';
            document.getElementById('urgent_icon').style.display = 'none';
        }
        function show_new_message() {
            document.getElementById('new_message').style.display = '-webkit-flex';
            document.getElementById('old_message').style.display = 'none';
            document.getElementById('urgent_message').style.display = 'none';
            document.getElementById('show_new_message').style.display = 'none';
            document.getElementById('show_old_message').style.display = '-webkit-flex';
            document.getElementById('show_urgent_message').style.display = '-webkit-flex';
            document.getElementById('urgent_icon').style.display = 'none';
        }
        function show_urgent_message() {
            document.getElementById('new_message').style.display = 'none';
            document.getElementById('old_message').style.display = 'none';
            document.getElementById('urgent_message').style.display = '-webkit-flex';
            document.getElementById('show_new_message').style.display = '-webkit-flex';
            document.getElementById('show_old_message').style.display = '-webkit-flex';
            document.getElementById('show_urgent_message').style.display = 'none';
            document.getElementById('urgent_icon').style.display = '-webkit-flex';
        }
        //show popup
        function show_popup() {
            document.getElementById('overlay_popup').style.display = '-webkit-flex';
        }
        //hide popup
        document.getElementById('delete_message').addEventListener("click", function () {
            document.getElementById('overlay_popup').style.display = "none";
        });
        document.getElementById('save_message').addEventListener("click", function () {
            document.getElementById('overlay_popup').style.display = "none";
        });

        function home() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN';
        }


    </script>
</html>