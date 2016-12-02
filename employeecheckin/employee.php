<html>
    <head>
        <title>CCRC-STAFF DIRECTOTY</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="employee_style.css">
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
                <div class="headerTitle communityHeader flexAlignCenterJustifyCenter">EMPLOYEE-CHECK-IN</div>
                <div class="headerRight"></div>
            </header>
            <section>
                <div class="displayFlex contentContainer">
                    <div class="contentBody contentShadow flexAlignCenterJustifyCenter flexDirectionColumn">
                        <div id="employee_checkIn" class="parentOfEmpCheckIn flexAlignCenterJustifyCenter flexDirectionColumn">
                            <div class="employeeIdContainer displayFlex">
                                <div class="enterIdLable flexAlignCenterJustifyCenter">Enter Id</div>
                                <div class="idContainer flexAlignCenterJustifyStart"><input type="text" name="id" value=" 012345" ></div>
                            </div>
                            <div class="idKeysContainer flexAlignCenterJustifyCenter">
                                <div class="idKeysContent flexAlignCenterJustifyCenter flexWrap ">
                                    <div class="idNumberKeys flexAlignCenterJustifyCenter">0</div>
                                    <div class="idNumberKeys flexAlignCenterJustifyCenter">1</div>
                                    <div class="idNumberKeys flexAlignCenterJustifyCenter">2</div>
                                    <div class="idNumberKeys flexAlignCenterJustifyCenter">3</div>
                                    <div class="idNumberKeys flexAlignCenterJustifyCenter">4</div>
                                    <div class="idNumberKeys flexAlignCenterJustifyCenter">5</div>
                                    <div class="idNumberKeys flexAlignCenterJustifyCenter">6</div>
                                    <div class="idNumberKeys flexAlignCenterJustifyCenter">7</div>
                                    <div class="idNumberKeys flexAlignCenterJustifyCenter">8</div>
                                    <div class="idNumberKeys flexAlignCenterJustifyCenter">9</div>
                                    <div class="idNumberKeys flexAlignCenterJustifyCenter"><<</div>
                                    <div class="idNumberKeys flexAlignCenterJustifyCenter">Clear</div>
                                </div>

                            </div>
                            <div class="submitActionContainer flexAlignCenterJustifyCenter">
                                <div id="submit_button" onclick="submitaction()" class="submitActionButton flexAlignCenterJustifyCenter">
                                    Submit
                                </div>
                            </div>
                        </div>
                        <div id="employee_LoginInContainer" class="employeeLoginPage flexDirectionColumn" style="display:none;">
                            <div class="loginTitle flexAlignCenterJustifyCenter">Status  Solution</div>
                            <div class="loginActionInOut flexAlignCenterJustifySpaceAround displayFlex">
                                <div id="in_action" onclick="loginAction();" class="InOutActionContent " >
                                    <div   class="actionInButton flexAlignCenterJustifyCenter">In</div>
                                </div>
                                <div  id="logOut_action" onclick="logOutAction();" class="InOutActionContent" style="display:none;"> 
                                    <div   class="actionOutButton flexAlignCenterJustifyCenter" >Out</div>

                                </div>
                                <div id="status" onclick="StatusAction();" class="InOutActionContent" style="display:none;"> 
                                    <div    class="statusText flexAlignCenterJustifyCenter" >Activity Logged</div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="sideFooter">
                        <div class="flexDirectionColumn flexAlignEndJustifySapceBetween">
                            <div class="home-icon" onclick="home();"><img src="../images/home.png" alt="home"></div>
                            <div class="home-icon" onclick="back();"><img src="../images/back.png" alt="back"></div>
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
        var count = 0;
        function home() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN';
        }
        function back() {
            document.getElementById('employee_checkIn').style.display = '-webkit-flex';
            document.getElementById('employee_LoginInContainer').style.display = 'none';
        }
        function submitaction() {
            document.getElementById('employee_checkIn').style.display = 'none';
            document.getElementById('employee_LoginInContainer').style.display = '-webkit-flex';
            if (count == 1) {
                document.getElementById('logOut_action').style.display = '-webkit-flex';
                document.getElementById('in_action').style.display = 'none';
                document.getElementById('status').style.display = 'none';
            }
            else {
                document.getElementById('in_action').style.display = '-webkit-flex';
                document.getElementById('status').style.display = 'none';
                document.getElementById('logOut_action').style.display = 'none'
            }
        }
        function loginAction() {
            count = 1;
            document.getElementById('employee_checkIn').style.display = 'none';
            document.getElementById('employee_LoginInContainer').style.display = '-webkit-flex';
            document.getElementById('in_action').style.display = 'none';
            document.getElementById('logOut_action').style.display = 'none';
            document.getElementById('status').style.display = 'block';
        }
        function logOutAction() {
            count = 0;
            document.getElementById('employee_checkIn').style.display = 'none';
            document.getElementById('employee_LoginInContainer').style.display = '-webkit-flex';
            document.getElementById('in_action').style.display = 'none';
            document.getElementById('logOut_action').style.display = 'none';
            document.getElementById('status').style.display = 'block';
        }
    </script>
</html>

