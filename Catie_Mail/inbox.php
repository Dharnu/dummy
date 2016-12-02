<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>CCRC - CATIE Mail</title>

        <link rel="stylesheet" href="mail_css.css" />
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
                <div class="headerTitle flexAlignCenterJustifyCenter">CATIE Mail</div>
                <div class="headerRight"></div>
            </header>
            <section>
                <div class="displayFlex contentContainer">
                    <div class="contentBody contentShadow">
                        <div id="mailHeaderMain" class="mailHeader flexAlignCenter" >
                            <div class="mailIcon flexAlignCenterJustifyCenter"><img src="../images/mailicon.png" width="70" height="40" /></div>
                            <div id="mailHeader" class="inboxHeader displayFlex">
                                <div class="inboxCount">Inbox - 2 </div>
                                <div class="inboxMail">&nbsp;new mails</div>
                            </div>
                            <div id="createEmail" class="createMail flexAlignCenterJustifyCenter" onclick="createEmail();">Create Mail</div>
                        </div>
                        <div id="readMailHeader" class="readMailHeader displayFlex" style="display: none;">
                            <div class="mailFromHeader flexJustifyCenter flexDirectionColumn">
                                <div><span class="fromSubjectLabel">From : </span><span>Christopher Powell</span></div>
                                <div><span class="fromSubjectLabel">Subject : </span><span>RE: From our transport</span></div>
                            </div>
                            <div id="zoomIcon" class="zoomIcon flexAlignCenterJustifySpaceAround">
                                <img src="../images/zoom_in_icon.png" alt="ZoomIn" />
                                <img src="../images/zoom_out_icon.png" alt="ZoomOut" />
                            </div>
                        </div>
                        <div class="inbox" id="inbox">
                            <div class="inboxBody displayFlex">
                                <div class="inboxScroll">
                                    <div class="inboxContent flexDirectionColumn">
                                        <div class="mailList displayFlex" onclick="readMail();">
                                            <div class="newMail flexAlignCenterJustifyCenter"><div class="orangeCircle"></div></div>
                                            <div class="mailDisplay flexAlignCenterJustifyCenter">
                                                <div class="mailTitle ">
                                                    <div class="mailContent">Get 6 desktops for the price of 5</div>
                                                    <div class="mailFrom">HP Business Promotions</div>
                                                </div>
                                                <div id="mailTime" class="mailTime">Sep 16, 2013</div>
                                                <div id="restoreSavedMail" class="restoreEmail flexAlignCenterJustifyCenter" style="display: none;">Restore</div>
                                            </div>
                                        </div>
                                        <div class="mailList displayFlex" onclick="readMail();">
                                            <div class="newMail flexAlignCenterJustifyCenter"><div class="orangeCircle"></div></div>
                                            <div class="mailDisplay flexAlignCenterJustifyCenter">
                                                <div class="mailTitle ">
                                                    <div class="mailContent">Get 6 desktops for the price of 5</div>
                                                    <div class="mailFrom">HP Business Promotions</div>
                                                </div>
                                                <div id="mailTime" class="mailTime">Sep 16, 2013</div>
                                                <div id="restoreSavedMail" class="restoreEmail flexAlignCenterJustifyCenter" style="display: none;">Restore</div>
                                            </div>
                                        </div>
                                        <div class="mailList displayFlex" onclick="readMail();">
                                            <div class="newMail"></div>
                                            <div class="mailDisplay flexAlignCenterJustifyCenter">
                                                <div class="mailTitle ">
                                                    <div class="mailContentOld">Get 6 desktops for the price of 5</div>
                                                    <div class="mailFrom">HP Business Promotions</div>
                                                </div>
                                                <div id="mailTime" class="mailTime">Sep 16, 2013</div>
                                                <div id="restoreSavedMail" class="restoreEmail flexAlignCenterJustifyCenter" style="display: none;">Restore</div>
                                            </div>
                                        </div>
                                        <div class="mailList displayFlex" onclick="readMail();">
                                            <div class="newMail"></div>
                                            <div class="mailDisplay flexAlignCenterJustifyCenter">
                                                <div class="mailTitle ">
                                                    <div class="mailContentOld">Get 6 desktops for the price of 5</div>
                                                    <div class="mailFrom">HP Business Promotions</div>
                                                </div>
                                                <div id="mailTime" class="mailTime">Sep 16, 2013</div>
                                                <div id="restoreSavedMail" class="restoreEmail flexAlignCenterJustifyCenter" style="display: none;">Restore</div>
                                            </div>
                                        </div>
                                        <div class="mailList displayFlex" onclick="readMail();">
                                            <div class="newMail"></div>
                                            <div class="mailDisplay flexAlignCenterJustifyCenter">
                                                <div class="mailTitle ">
                                                    <div class="mailContentOld">Get 6 desktops for the price of 5</div>
                                                    <div class="mailFrom">HP Business Promotions</div>
                                                </div>
                                                <div id="mailTime" class="mailTime">Sep 16, 2013</div>
                                                <div id="restoreSavedMail" class="restoreEmail flexAlignCenterJustifyCenter" style="display: none;">Restore</div>
                                            </div>
                                        </div>
                                        <div class="mailList displayFlex" onclick="readMail();">
                                            <div class="newMail"></div>
                                            <div class="mailDisplay flexAlignCenterJustifyCenter">
                                                <div class="mailTitle ">
                                                    <div class="mailContentOld">Get 6 desktops for the price of 5</div>
                                                    <div class="mailFrom">HP Business Promotions</div>
                                                </div>
                                                <div id="mailTime" class="mailTime">Sep 16, 2013</div>
                                                <div id="restoreSavedMail" class="restoreEmail flexAlignCenterJustifyCenter" style="display: none;">Restore</div>
                                            </div>
                                        </div>
                                        <div class="mailList displayFlex" onclick="readMail();">
                                            <div class="newMail"></div>
                                            <div class="mailDisplay flexAlignCenterJustifyCenter">
                                                <div class="mailTitle ">
                                                    <div class="mailContentOld">Get 6 desktops for the price of 5</div>
                                                    <div class="mailFrom">HP Business Promotions</div>
                                                </div>
                                                <div id="mailTime" class="mailTime">Sep 16, 2013</div>
                                                <div id="restoreSavedMail" class="restoreEmail flexAlignCenterJustifyCenter" style="display: none;">Restore</div>
                                            </div>
                                        </div>
                                        <div class="mailList displayFlex" onclick="readMail();">
                                            <div class="newMail"></div>
                                            <div class="mailDisplay flexAlignCenterJustifyCenter">
                                                <div class="mailTitle ">
                                                    <div class="mailContentOld">Get 6 desktops for the price of 5</div>
                                                    <div class="mailFrom">HP Business Promotions</div>
                                                </div>
                                                <div id="mailTime" class="mailTime">Sep 16, 2013</div>
                                                <div id="restoreSavedMail" class="restoreEmail flexAlignCenterJustifyCenter" style="display: none;">Restore</div>
                                            </div>
                                        </div>
                                        <div class="mailList displayFlex" onclick="readMail();">
                                            <div class="newMail"></div>
                                            <div class="mailDisplay flexAlignCenterJustifyCenter">
                                                <div class="mailTitle ">
                                                    <div class="mailContentOld">Get 6 desktops for the price of 5</div>
                                                    <div class="mailFrom">HP Business Promotions</div>
                                                </div>
                                                <div id="mailTime" class="mailTime">Sep 16, 2013</div>
                                                <div id="restoreSavedMail" class="restoreEmail flexAlignCenterJustifyCenter" style="display: none;">Restore</div>
                                            </div>
                                        </div>
                                        <div class="mailList displayFlex" onclick="readMail();">
                                            <div class="newMail"></div>
                                            <div class="mailDisplay flexAlignCenterJustifyCenter">
                                                <div class="mailTitle ">
                                                    <div class="mailContentOld">Get 6 desktops for the price of 5</div>
                                                    <div class="mailFrom">HP Business Promotions</div>
                                                </div>
                                                <div id="mailTime" class="mailTime">Sep 16, 2013</div>
                                                <div id="restoreSavedMail" class="restoreEmail flexAlignCenterJustifyCenter" style="display: none;">Restore</div>
                                            </div>
                                        </div>
                                        <div class="mailList displayFlex" onclick="readMail();">
                                            <div class="newMail"></div>
                                            <div class="mailDisplay flexAlignCenterJustifyCenter">
                                                <div class="mailTitle ">
                                                    <div class="mailContentOld">Get 6 desktops for the price of 5</div>
                                                    <div class="mailFrom">HP Business Promotions</div>
                                                </div>
                                                <div id="mailTime" class="mailTime">Sep 16, 2013</div>
                                                <div id="restoreSavedMail" class="restoreEmail flexAlignCenterJustifyCenter" style="display: none;">Restore</div>
                                            </div>
                                        </div>
                                        <div class="mailList displayFlex" onclick="readMail();">
                                            <div class="newMail"></div>
                                            <div class="mailDisplay flexAlignCenterJustifyCenter">
                                                <div class="mailTitle ">
                                                    <div class="mailContentOld">Get 6 desktops for the price of 5</div>
                                                    <div class="mailFrom">HP Business Promotions</div>
                                                </div>
                                                <div id="mailTime" class="mailTime">Sep 16, 2013</div>
                                                <div id="restoreSavedMail" class="restoreEmail flexAlignCenterJustifyCenter" style="display: none;">Restore</div>
                                            </div>
                                        </div>
                                        <div class="mailList displayFlex" onclick="readMail();">
                                            <div class="newMail"></div>
                                            <div class="mailDisplay flexAlignCenterJustifyCenter">
                                                <div class="mailTitle ">
                                                    <div class="mailContentOld">Get 6 desktops for the price of 5</div>
                                                    <div class="mailFrom">HP Business Promotions</div>
                                                </div>
                                                <div id="mailTime" class="mailTime">Sep 16, 2013</div>
                                                <div id="restoreSavedMail" class="restoreEmail flexAlignCenterJustifyCenter" style="display: none;">Restore</div>
                                            </div>
                                        </div>
                                        <div class="mailList displayFlex" onclick="readMail();">
                                            <div class="newMail"></div>
                                            <div class="mailDisplay flexAlignCenterJustifyCenter">
                                                <div class="mailTitle ">
                                                    <div class="mailContentOld">Get 6 desktops for the price of 5</div>
                                                    <div class="mailFrom">HP Business Promotions</div>
                                                </div>
                                                <div id="mailTime" class="mailTime">Sep 16, 2013</div>
                                                <div id="restoreSavedMail" class="restoreEmail flexAlignCenterJustifyCenter" style="display: none;">Restore</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="composeEmail" class="composeEmail displayFlex" style="display: none;">
                            <div class="composeEmailBody">
                                <div class="composeEmailContent">
                                    <div class="composeEmailTo flexDirectionColumn flexJustifySpaceAround">
                                        <span>To</span>
                                        <input type="email" name="mailTo" id="mailTo" />
                                    </div>
                                    <div class="composeEmailCc flexDirectionColumn flexJustifySpaceAround">
                                        <span>CC</span>
                                        <input type="email" name="mailCc" id="mailCc" />
                                    </div>
                                    <div class="composeEmailSubject flexDirectionColumn flexJustifySpaceAround">
                                        <span>Subject</span>
                                        <div>
                                            <input type="email" name="mailSubject" id="mailSubject" />
                                            <textarea id="mailContent" name="mailContent" rows="7" cols="45"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="composeEmailAction flexAlignCenterJustifySpaceAround">
                                    <div class="flexAlignCenterJustifySpaceBetween">
                                        <div id="recordVoice" class="flexAlignCenterJustifyCenter">Record</div>
                                        <div id="saveEmail" class="flexAlignCenterJustifyCenter">Save</div>
                                        <div id="discardEmail" class="flexAlignCenterJustifyCenter">Discard</div>
                                        <div id="sendEmail" class="flexAlignCenterJustifyCenter">Send</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="readMail" class="readMail flexDirectionColumn" style="display: none;">
                            <div class="readMailBody flexDirectionColumn">
                                <div class="mailContentScroll">
                                    <div>
                                        <span>Hello Andrew,<br><br><br></span>
                                        <span>Within the various uses of the word today, "nature" often refers to geology and wildlife. Nature can refer to the general realm of living plants and animals, and in some cases to the processes associated with inanimate objects – the way that particular types of things exist and change of their own accord, such as the weather and geology of the Earth.Within the various uses of the word today, "nature" often refers to geology and wildlife. Nature can refer to the general realm of living plants and animals, and in some cases to the processes associated with inanimate objects – the way that particular types of things exist and change of their own accord, such as the weather and geology of the Earth.</span>
                                        <span><br><br><br>-Christopher</span>
                                    </div>

                                </div>
                            </div>
                            <div><hr style="height:2px; border:none; color:#16bad6; background-color:#16bad6 ;"></div>
                            <div class="readMailAction flexDirectionColumn">
                                <div class="flexAlignCenterJustifySpaceBetween">
                                    <div class="flexAlignCenterJustifyCenter">Reply</div>
                                    <div class="flexAlignCenterJustifyCenter">Reply All</div>
                                    <div class="flexAlignCenterJustifyCenter">Forward</div>
                                    <div class="flexAlignCenterJustifyCenter">Add to Contacts</div>
                                </div>
                                <div class="flexAlignCenterJustifySpaceBetween">
                                    <div class="flexAlignCenterJustifyCenter">Photos</div>
                                    <div class="flexAlignCenterJustifyCenter">Audio</div>
                                    <div class="flexAlignCenterJustifyCenter">Previous</div>
                                    <div class="flexAlignCenterJustifyCenter">Next</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contentEmpty flexAlignCenterJustifyCenter" style="display: none;">You have no new email messages at this moment. Please check back later for new email. Thank you for interacting with CATIE!</div>
                    <div id="sideFooter" class="sideFooter">
                        <div class="flexDirectionColumn flexAlignEndJustifySapceBetween">
                            <div id="homeButton"  onclick="home();"><img src="../images/home.png" alt="home" /></div>
                            <div id="trashButton"><img src="../images/deletedmail.png" alt="trash" /></div>
                            <div id="catieMailButton" onclick="savedMail();"><img src="../images/saved.png" alt="catiemail" /></div>
                            <div id="backButton" onclick="goHome();"><img src="../images/back.png" alt="back" /></div>
                        </div>
                    </div>
                </div>
            </section>
            <footer id="footer">
                <div class="footerMain flexAlignCenterJustifySpaceBetween">
                    <div id="homeButton"  onclick="home();"><img src="../images/home.png" alt="home" /></div>
                    <div id="trashButton"><img src="../images/deletedmail.png" alt="trash" /></div>
                    <div id="catieMailButton" onclick="savedMail();"><img src="../images/saved.png" alt="catiemail" /></div>
                    <div id="backButton" onclick="goHome();"><img src="../images/back.png" alt="back" /></div>
                </div>
            </footer>
        </div>
        <div class="overlay centerAll" id="overlay">
            <div class="confirm_popup popup_shadow  ">
                <div class="popup-header displayFlex">
                    <div class="confirm-alert_icon flexAlignCenterJustifyCenter">
                        <div class="exc-symbol">!</div>
                    </div>
                </div>
                <div class="popup-msg flexAlignCenterJustifyCenter">Are you sure you want to delete?</div>
                <div class="popup-action-main flexAlignCenterJustifyCenter ">
                    <div class="popup-action flexAlignCenterJustifyCenter" >YES</div>
                    <div class="popup-action flexAlignCenterJustifyCenter">NO</div>
                </div>
            </div>
        </div>
    </body>

    <script>
        function createEmail() {
            document.getElementById('inbox').style.display = 'none';
            document.getElementById('createEmail').style.display = 'none';
            document.getElementById('trashButton').style.display = 'none';
            document.getElementById('mailHeader').innerHTML = "Compose Email";
            document.getElementById('composeEmail').style.display = '-webkit-flex';
        }
        function savedMail() {
            document.getElementById('mailHeader').innerHTML = "Saved Mail";
            document.getElementById('createEmail').style.display = 'none';
            document.getElementById('inbox').style.display = '-webkit-flex';
            document.getElementById('composeEmail').style.display = 'none';
            document.getElementById('readMail').style.display = 'none';
            var x = document.getElementsByClassName("mailTime");
            for (var i = 0; i < x.length; i++)
                x[i].style.display = "none";
            var y = document.getElementsByClassName("restoreEmail");
            for (i = 0; i < y.length; i++)
                y[i].style.display = "-webkit-flex";
        }
        function goHome() {
            document.getElementById('inbox').style.display = '-webkit-flex';
            document.getElementById('createEmail').style.display = '-webkit-flex';
            document.getElementById('composeEmail').style.display = "none";
            document.getElementById('trashButton').style.display = 'block';
            document.getElementById('readMailHeader').style.display = 'none';
            document.getElementById('readMail').style.display = 'none';
            document.getElementById('mailHeaderMain').style.display = '-webkit-flex';
            document.getElementById('mailHeader').innerHTML = '<div class="inboxCount">Inbox - 2 </div><div class="inboxMail">&nbsp;new mails</div>';
            var x = document.getElementsByClassName("mailTime");
            for (var i = 0; i < x.length; i++)
                x[i].style.display = "-webkit-flex";
            var y = document.getElementsByClassName("restoreEmail");
            for (i = 0; i < y.length; i++)
                y[i].style.display = "none";
        }

        function readMail() {
            document.getElementById('mailHeaderMain').style.display = 'none';
            document.getElementById('readMailHeader').style.display = '-webkit-flex';
            document.getElementById('inbox').style.display = 'none';
            document.getElementById('readMail').style.display = '-webkit-flex';
        }
        function home() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN';
        }


    </script>
</html>