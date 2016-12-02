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
                <div class="headerTitle flexAlignCenterJustifyCenter">CALENDAR</div>
                <div class="headerRight"></div>
            </header>
            <div class="displayFlex calendarSection">
                <div class="calSection flexDirectionColumn">
                    <div class="cal-spring boxShadow1"></div>
                    <div class="cal-content flexJustifyCenter boxShadow">
                        <div class="cal-innercontent">
                            <div class="cal-types displayFlex">
                                <div id="Community" class="cal-community-click flexAlignCenterJustifyCenter">
                                    Community Calendar
                                </div>
                                <div id="Personal" class="cal-personal-click flexAlignCenterJustifyCenter">
                                    Personal Calendar
                                </div>
                            </div>
                            <div id="calendar" class="calendar">
                                <div class="cal-month-main flexAlignCenter">
                                    <div class="arrow-left"></div>
                                    <div class="cal-month displayFlex">
                                        <div class="cal-prevmonth flexAlignCenter">
                                            <p><span class="cal-prev">PREVIOUS</span><span class="cal-monthprev">MONTH</span></p>
                                        </div>
                                        <div  class="cal-curmonth flexAlignCenterJustifyCenter">
                                            September 2013
                                        </div>
                                        <div  class="cal-nextmonth flexAlignCenter">
                                            <p><span class="cal-next">NEXT</span><span class="cal-monthnext">MONTH</span></p>
                                        </div>
                                    </div>
                                    <div class="arrow-right"></div>
                                </div>
                                <div class="cal-days displayFlex">
                                    <div>SUN</div>
                                    <div>MON</div>
                                    <div>TUE</div>
                                    <div>WED</div>
                                    <div>THU</div>
                                    <div>FRI</div>
                                    <div>SAT</div>
                                </div>
                                <div class="cal-dates flexAlignCenter">
                                    <div class="emptyDate"></div>
                                    <div class="emptyDate"></div>
                                    <div class="emptyDate"></div>
                                    <div class="emptyDate"></div>
                                    <div class="emptyDate"></div>
                                    <div class="emptyDate"></div>
                                    <div class="withDate" onclick="previousDate();">1</div>
                                    <div class="withDate" onclick="previousDate();">2</div>
                                    <div class="withDate" onclick="previousDate();">3</div>
                                    <div class="withDate" onclick="previousDate();">4</div>
                                    <div class="withDate" onclick="previousDate();">5</div>
                                    <div class="withDate" onclick="previousDate();">6</div>
                                    <div class="withDate" onclick="previousDate();">7</div>
                                    <div class="withDate">8</div>
                                    <div class="withDate">9</div>
                                    <div class="withDate">10</div>
                                    <div class="withDate">11</div>
                                    <div class="withDate">12</div>
                                    <div class="withDate">13</div>
                                    <div class="selectedDate" onclick="showEventList();">14</div>
                                    <div class="selectedDate" onclick="showEventList();">15</div>
                                    <div class="selectedDate" onclick="showEventList();">16</div>
                                    <div class="selectedDate" onclick="showEventList();">17</div>
                                    <div class="withDate">18</div>
                                    <div class="withDate">19</div>
                                    <div class="withDate">20</div>
                                    <div class="withDate">21</div>
                                    <div class="withDate">22</div>
                                    <div class="withDate">23</div>
                                    <div class="withDate">24</div>
                                    <div class="withDate">25</div>
                                    <div class="withDate">26</div>
                                    <div class="withDate">27</div>
                                    <div class="withDate">28</div>
                                    <div class="withDate">29</div>
                                    <div class="withDate">30</div>
                                    <div class="withDate">31</div>
                                    <div class="emptyDate"></div>
                                    <div class="emptyDate"></div>
                                    <div class="emptyDate"></div>
                                    <div class="emptyDate"></div>
                                    <div class="emptyDate"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sideFooter">
                    <div class="flexDirectionColumn flexAlignCenterJustifySpaceBetween">
                        <div class="home-icon" onclick="home();"><img src="../images/home.png" alt="home"></div>
                        <div class="home-icon" onclick="home();"><img src="../images/back.png" alt="back"></div>
                    </div>
                </div>

            </div>
            <footer>
                <div class="footerMain flexAlignCenterJustifySpaceBetween displayFlex">
                    <div class="home-icon" onclick="home();"><img src="../images/home.png" alt="home"></div>
                    <div class="home-icon" onclick="home();"><img src="../images/back.png" alt="back"></div>
                </div>
            </footer>
        </div>
        <div class="overlay flexAlignCenterJustifyCenter" id="overlay">
            <div class="alert-popup" id="alert-popup">
                <div class="alert-icon-main flexAlignCenterJustifyCenter">
                    <div class="alert-icon flexAlignCenterJustifyCenter">
                        <div class="exc-symbol">!</div>
                    </div>
                </div>
                <div class="alert-message flexAlignCenterJustifyCenter" id="popupMsg">Previous date not allowed.</div>
                <div class="alert-action flexAlignCenterJustifyCenter">
                    <div class="flexAlignCenterJustifyCenter" onclick="closePopup();">OK</div>
                </div>
            </div>
        </div>
    </body>
    <script>

        function home() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Calendar/multi_cal.php';
        }

        function showEventList() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN/Calendar/event_list.php';
        }

        function previousDate() {
            document.getElementById('overlay').style.display = '-webkit-flex';
        }
        function closePopup() {
            document.getElementById('overlay').style.display = 'none';
        }
    </script>
</html>