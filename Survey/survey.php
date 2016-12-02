<!DOCTYPE html>
<html>
    <head>
        <title>CCRC-Survey</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="survey_style.css">
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
                <div class="headerTitle flexAlignCenterJustifyCenter">Tell CATIE</div>
                <div class="headerRight"></div>
            </header>
            <section>
                <div class="displayFlex contentContainer">
                    <div class="contentBody contentShadow flexAlignCenterJustifyCenter flexDirectionColumn">
                        <div class="surveyContentContainer flexAlignCenterJustifyCenter flexDirectionColumn">
                            <div class="surveyContent flexAlignCenterJustifyCenter">
                                <div id="surveyHome" class="surveyHome flexAlignCenterJustifyCenter flexDirectionColumn">
                                    <div class="flexAlignCenterJustifyCenter">2 New Survey(s) Available</div>
                                    <div class="flexAlignCenterJustifyCenter">Do you want to take it?</div>
                                </div>
                                <div id="surveyQuestionContainer" class="surveyQuestionsContainer flexDirectionColumn" style="display: none;">
                                    <div class="surveyQuestion">
                                        <div>1) How was our room service? Explain the reason why the service is good and give the rating accordingly
                                            give the status and what has to be improved. The survey message will be taken into considerate.and actions will be taken immediately.Within the various uses of the word today, </div>
                                    </div>
                                    <div class="surveySignature flexAlignEnd">
                                        <div>Status Solutions <br>Administrator</div>
                                    </div>
                                </div>
                            </div>
                            <div class="surveyActionContainer">
                                <div id="surveyActions" class="surveyActions flexAlignCenterJustifySpaceAround">
                                    <div id="takeSurvey" class="flexAlignCenterJustifyCenter" onclick="takeSurvey();">Now</div>
                                    <div id="exitSurvey" class="flexAlignCenterJustifyCenter" onclick="exitSurvey();" style="display: none;">Exit</div>
                                    <div id="skipSurvey" class="flexAlignCenterJustifyCenter" onclick="skipSurvey();">Later</div>
                                </div>
                                <div id="surveyOptions" class="surveyOptions flexAlignCenterJustifySpaceBetween flexWrap" style="display: none;">
                                    <div class="flexAlignCenterJustifyCenter">Excellent Good Bad Good Ok</div>
                                    <div class="flexAlignCenterJustifyCenter">Good</div>
                                    <div class="flexAlignCenterJustifyCenter">Bad</div>
                                    <div class="flexAlignCenterJustifyCenter">Not Bad</div>
                                </div>
                            </div>
                        </div>
                        <div id="surveyNavigation" class="surveyNavigation displayFlex" style="display: none;">
                            <div class="flexAlignStartJustifyStart">
                                <div id="previousSurvey" class="flexAlignCenterJustifyCenter" onclick="prevoiusSurvey();" style="display: none;">Previous</div>
                            </div>
                            <div class="flexAlignCenterJustifyEnd">
                                <div id="nextSurvey" class="flexAlignCenterJustifyCenter" onclick="nextSurvey();">Skip</div>
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
                    <div class="home-icon" onclick="home();"><img src="../images/home.png" width="150" height="150" alt="home"></div>
                    <div class="home-icon" onclick="home();"><img src="../images/back.png" width="150" height="150" alt="back"></div>
                </div>
            </footer>
        </div>
    </body>
    <script>
        function skipSurvey() {
            document.getElementById('skipSurvey').style.display = 'none';
            document.getElementById('takeSurvey').style.display = 'none';
            document.getElementById('exitSurvey').style.display = '-webkit-flex';
        }

        function takeSurvey() {
            document.getElementById('surveyHome').style.display = 'none';
            document.getElementById('surveyQuestionContainer').style.display = '-webkit-flex';
            document.getElementById('surveyNavigation').style.display = '-webkit-flex';
            document.getElementById('surveyActions').style.display = 'none';
            document.getElementById('surveyOptions').style.display = '-webkit-flex';
        }

        function exitSurvey() {

        }

        var count = 0;
        function nextSurvey() {
            document.getElementById('previousSurvey').style.display = '-webkit-flex';
            count++;
            if (count === 2) {
                document.getElementById('surveyQuestionContainer').style.display = 'none';
                document.getElementById('surveyNavigation').style.display = 'none';
                document.getElementById('surveyOptions').style.display = 'none';
                document.getElementById('surveyActions').style.display = '-webkit-flex';
                document.getElementById('surveyHome').style.display = '-webkit-flex';
                document.getElementById('skipSurvey').style.display = 'none';
                document.getElementById('takeSurvey').style.display = 'none';
                document.getElementById('exitSurvey').style.display = '-webkit-flex';
            }
        }

        function previousSurvey() {

        }

        function home() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN';
        }
    </script>
</html>
