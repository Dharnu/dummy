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
                        <div class="cal-event-list flexAlignCenterJustifyCenter">
                            <div class="calendarContentScroll">
                                <div>
                                    <div class="event-list flexAlignCenterJustifyStart" onclick="eventDetails();">
                                        <div class="event-time">All Day</div>
                                        <div class="divider"> - </div>
                                        <div class="event-name">Wednesday Bingo</div>
                                    </div>
                                    <div class="event-list flexAlignCenterJustifyStart" onclick="eventDetails();">
                                        <div class="event-time">12:30 PM</div>
                                        <div class="divider"> - </div>
                                        <div class="event-name">Wednesday Bingo</div>
                                    </div>
                                    <div class="event-list flexAlignCenterJustifyStart" onclick="eventDetails();">
                                        <div class="event-time">5:00 PM</div>
                                        <div class="divider"> - </div>
                                        <div class="event-name">Wednesday Bingo</div>
                                    </div>
                                    <div class="event-list flexAlignCenterJustifyStart" onclick="eventDetails();">
                                        <div class="event-time">12:30 PM</div>
                                        <div class="divider"> - </div>
                                        <div class="event-name">Wednesday Bingo</div>
                                    </div>
                                    <div class="event-list flexAlignCenterJustifyStart" onclick="eventDetails();">
                                        <div class="event-time">5:00 PM</div>
                                        <div class="divider"> - </div>
                                        <div class="event-name">Wednesday Bingo</div>
                                    </div>
                                    <div class="event-list flexAlignCenterJustifyStart" onclick="eventDetails();">
                                        <div class="event-time">12:30 PM</div>
                                        <div class="divider"> - </div>
                                        <div class="event-name">Wednesday Bingo</div>
                                    </div>
                                    <div class="event-list flexAlignCenterJustifyStart" onclick="eventDetails();">
                                        <div class="event-time">5:00 PM</div>
                                        <div class="divider"> - </div>
                                        <div class="event-name">Wednesday Bingo</div>
                                    </div>
                                    <div class="event-list flexAlignCenterJustifyStart" onclick="eventDetails();">
                                        <div class="event-time">12:30 PM</div>
                                        <div class="divider"> - </div>
                                        <div class="event-name">Wednesday Bingo</div>
                                    </div>
                                    <div class="event-list flexAlignCenterJustifyStart" onclick="eventDetails();">
                                        <div class="event-time">5:00 PM</div>
                                        <div class="divider"> - </div>
                                        <div class="event-name">Wednesday Bingo</div>
                                    </div>
                                    <div class="event-list flexAlignCenterJustifyStart" onclick="eventDetails();">
                                        <div class="event-time">12:30 PM</div>
                                        <div class="divider"> - </div>
                                        <div class="event-name">Wednesday Bingo</div>
                                    </div>
                                    <div class="event-list flexAlignCenterJustifyStart" onclick="eventDetails();">
                                        <div class="event-time">5:00 PM</div>
                                        <div class="divider"> - </div>
                                        <div class="event-name">Wednesday Bingo</div>
                                    </div>
                                    <div class="event-list flexAlignCenterJustifyStart" onclick="eventDetails();">
                                        <div class="event-time">12:30 PM</div>
                                        <div class="divider"> - </div>
                                        <div class="event-name">Wednesday Bingo</div>
                                    </div>
                                    <div class="event-list flexAlignCenterJustifyStart" onclick="eventDetails();">
                                        <div class="event-time">5:00 PM</div>
                                        <div class="divider"> - </div>
                                        <div class="event-name">Wednesday Bingo</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cal-event-list-empty centerItems"  style="display: none;">
                            <div class="empty-message">
                                No event information is available for this day. Please check back later for more updated information. Thank you for interacting with CATIE!
                            </div>
                        </div>
                    </div>
                    <div class="sideFooter">
                        <div class="flexDirectionColumn flexAlignEndJustifySapceBetween">
                            <div class="home-icon" onclick="home();"><img src="../images/home.png" alt="home"></div>
                            <div class="createEvent flexAlignCenterJustifyCenter" onclick="create_event();">Create Event</div>
                            <div class="home-icon" onclick="home();"><img src="../images/back.png" alt="back"></div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="footerMain flexAlignCenterJustifySpaceBetween displayFlex">
                    <div class="home-icon" onclick="home();"><img src="../images/home.png" alt="home"></div>
                    <div class="createEvent flexAlignCenterJustifyCenter" onclick="create_event();">Create Event</div>
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
        function eventDetails() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Calendar/event_details.php';
        }
        function create_event() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Calendar/create_event.php';
        }
        function createEvent() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Calendar/create_event.php';
        }
    </script>
</html>