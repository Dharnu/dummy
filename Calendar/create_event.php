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
                        <div class="event-details-main">
                            <div class="event-details flexDirectionColumn">
                                <div class="create-event-name flexAlignCenter">
                                    <div>Event Name</div>
                                    <div><textarea name="textarea" rows="7" cols="45"></textarea></div>
                                </div>
                                <div class="create-event-description flexAlignCenter">
                                    <div>Event Description</div>
                                    <div><textarea name="textarea" rows="10" cols="45"></textarea></div>
                                </div>
                                <div class="create-event-starttime flexAlignCenter">
                                    <div>Start Time</div>
                                    <div>
                                        <div class="event-start-end flexAlignCenterJustifyCenter">03:58 PM</div>
                                    </div>
                                </div>
                                <div class="create-event-endtime flexAlignCenter">
                                    <div>End Time</div>
                                    <div>
                                        <div class="event-start-end flexAlignCenterJustifyCenter">04:58 PM</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event-action-main flexAlignCenterJustifyCenter ">
                            <div class="event-actions flexAlignCenterJustifySpaceBetween">
                                <div style="width:72%;height:100%;" class="flexAlignCenterJustifySpaceAround">
                                    <div class="add-event flexAlignCenterJustifyCenter"  style="display: none;">
                                        ADD EVENT
                                    </div>
                                    <div class="add-event flexAlignCenterJustifyCenter">
                                        EDIT EVENT
                                    </div>
                                    <div class="add-event flexAlignCenterJustifyCenter">
                                        DELETE EVENT
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
                            <div class="home-icon" onclick="home();"><img src="../images/back.png" alt="back"></div>
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
    </body>
    <script>
        function home() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Calendar/multi_cal.php';
        }
        function calendar() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Calendar/Calendar.php';
        }
    </script>
</html>


