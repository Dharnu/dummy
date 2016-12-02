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
                <div class="headerTitle flexAlignCenterJustifyCenter">Personal Calendar</div>
                <div class="headerRight"></div>
            </header>
            <section>
                <div class="displayFlex contentContainer">
                    <div class="contentBody boxShadow">
                        <div class="cal-select-date displayFlex">
                            <div class="cal-date-day flexAlignCenterJustifyCenter">
                                <div class="cal-date-day-display flexDirectionColumn">
                                    <span class="cal-date">18</span>
                                    <span class="cal-day">WED</span>
                                </div>
                            </div>
                            <div class="cal-select-month flexAlignCenterJustifyStart">September 2013</div>
                        </div>
                        <div class="select-event flexAlignCenterJustifyStart">
                            <div class="cal-selected-event display">Wednesday Bingo Bingo Bingo Bingo </div>
                        </div>
                        <div class="event-description-main flexAlignCenterJustifyStart">
                            <div class="event-description">Event description</div>
                        </div>
                        <div class="event-message-main">
                            <div class="event-message flexDirectionColumn">
                                <div>Bingo in the mail hall special prize will be given</div>
                                <div>
                                    <span class="event-loc-host">Location:</span>
                                    <span>Main Lobby.</span>
                                </div>
                                <div>
                                    <span class="event-loc-host">Hosted By:</span>
                                    <span>MHKY.</span>
                                </div>

                            </div>
                        </div>
                        <div class="event-timing-main flexJustifyCenter">
                            <div class="event-timing displayFlex">
                                <div class="clock-icon flexAlignCenterJustifyStart">
                                    <img src="../images/clock_icon.png" width="70" height="70" alt="Clock" />
                                </div>
                                <div class="display-event-time flexJustifyCenter flexDirectionColumn">
                                    <div><span class="time-label">Start time</span><span class="time-divide">-</span><span class="from-to-time">5:00 PM</span></div>
                                    <div><span class="time-label">End time </span><span class="time-divide">-</span><span class="from-to-time">5:00 PM</span></div>
                                </div>

                            </div>
                        </div>
                        <div class="event-action-main flexAlignCenterJustifyCenter ">
                            <div class="event-actions flexAlignCenterJustifySpaceBetween">
                                <div style="width:72%;height:100%;" class="flexAlignCenterJustifySpaceAround">
                                    <div class="event-action flexAlignCenterJustifyCenter" style="display: none;">
                                        ADD TO PERSONAL CALENDAR
                                    </div>
                                    <div class="event-edit-delete flexAlignCenterJustifyCenter" style="display: none;">
                                        EDIT EVENT
                                    </div>
                                    <div class="event-edit-delete flexAlignCenterJustifyCenter" style="display: none;">
                                        DELETE EVENT
                                    </div>
                                    <div class="event-cancel flexAlignCenterJustifyCenter" style="display: none;">
                                        CANCEL EVENT
                                    </div>
                                    <div class="event-action-message flexAlignCenterJustifyCenter">
                                        This event will be added to your schedule.
                                    </div>
                                    <div class="event-action-transport flexAlignCenterJustifyCenter" style="display: none;" onclick="showPopup();">
                                        REGISTER FOR EVENT
                                    </div>
                                    <div class="event-action-transport flexAlignCenterJustifyCenter" style="display: none;" onclick="showRecPopup();">
                                        REGISTER FOR TRANSPORTATION
                                    </div>
                                </div>
                                <div class="flexAlignCenterJustifyCenter" style="width:28%;height:100%;">
                                    <div class="goto-eventlist flexAlignCenterJustifyCenter">
                                        EVENT LIST
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sideFooter">
                        <div class="flexDirectionColumn flexAlignEndJustifySapceBetween">
                            <div class="home-icon" onclick="home();"><img src="../images/home.png" alt="home"></div>
                            <div class="home-icon" onclick="calendar();"><img src="../images/calendar.png" alt="back"></div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="footerMain flexAlignCenterJustifySpaceBetween displayFlex">
                    <div class="home-icon" onclick="home();"><img src="../images/home.png" alt="home"></div>
                    <div class="home-icon" onclick="calendar();"><img src="../images/calendar.png" alt="back"></div>
                </div>
            </footer>
        </div>
        <div class="overlay flexAlignCenterJustifyCenter" id="overlay">
            <div class="recurrence-popup flexAlignCenterJustifyCenter" id="popup" style="display: none;">
                <div class="recurrence-main">
                    <div class="flexAlignCenter recurrence-allDay ">
                        <div class="radioButton" id="AddAll" >
                            <input type="radio" checked="checked" id="edit_1" value="1" name="recurence" style="width:40px;height:40px;border-radius:20px">
                        </div>
                        <div class="recurrence-msg">Add all occurrence of this event to my personal calendar</div>
                    </div>
                    <div class="flexAlignCenter recurrence-allDay ">
                        <div class="radioButton" id="AddOnly">
                            <input type="radio" id="edit_2" value="2" name="recurence" style="width:40px;height:40px;border-radius:20px">
                        </div>
                        <div class="recurrence-msg">Add only this event for the date <br>November 08, 2016 to my personal calendar</div>
                    </div>
                    <div class="recurrence-action-main flexAlignCenterJustifyCenter">
                        <div class="recurrence-action flexAlignCenterJustifySpaceAround">
                            <div class="recurrenrce-accept flexAlignCenterJustifyCenter"  onclick="closePopup();">OK</div>
                            <div class="recurrence-reject flexAlignCenterJustifyCenter"  onclick="closePopup();">CANCEL</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alert-popup" id="alert_popup" style="display: none;">
                <div class="alert-icon-main flexAlignCenterJustifyCenter">
                    <div class="alert-icon flexAlignCenterJustifyCenter">
                        <div class="exc-symbol">!</div>
                    </div>
                </div>
                <div class="alert-message flexAlignCenterJustifyCenter" id="popupMsg">You have registered for this event and it has been added to your Personal Calendar</div>
                <div class="alert-action flexAlignCenterJustifyCenter">
                    <div class="flexAlignCenterJustifyCenter" onclick="closePopup();">OK</div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    function home() {
        window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Calendar/multi_cal.php';
    }
    function calendar() {
        window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Calendar/Calendar.php';
    }

//    var register = document.getElementById('register');
//    var overlay = document.getElementById('overlay');
//    var alertAccept = document.getElementById('alert-accept');
//    // Show Overlay and Popup
//    register.onclick = function () {
//        overlay.className = "overlay flexAlignCenterJustifyCenter";
//    }
//    alertAccept.onclick = function () {
//        overlay.className = "overlay";
//    }
    function showPopup() {
        document.getElementById('overlay').style.display = '-webkit-flex';
        document.getElementById('popup').style.display = 'none';
        document.getElementById('alert_popup').style.display = 'block';

    }
    function showRecPopup() {
        document.getElementById('overlay').style.display = '-webkit-flex';
        document.getElementById('alert_popup').style.display = 'none';
        document.getElementById('popup').style.display = 'block';

    }
    function closePopup() {
        document.getElementById('overlay').style.display = 'none';
    }
</script>
