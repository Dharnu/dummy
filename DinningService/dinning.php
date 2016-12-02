<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>CCRC - dinning</title>

        <link rel="stylesheet" href="dinning_style.css" />
        <link rel="stylesheet" href="../css/ccrc_common_style.css" />
        <link rel="stylesheet" href="../css/configuration.css" />    
        <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" />
    </head>
    <body class="dinningCalendarBody">
        <div class="containerMain">
            <header class="flexAlignCenterJustifyCenter">
                <div class="displayResidentName flexAlignCenter" id="display_resident_name">
                    <img src="../images/user.png"  alt="user" />
                    <div class="residentName" id="resident_name">Resident 1</div>
                </div>
                <div id="dinning_header" class="headerTitle dinningHeader flexAlignCenterJustifyCenter">DINNING SERVICE</div>
                <div class="headerRight"></div>
            </header>
            <div id="main_calendar" class="displayFlex calendarSection" >
                <div class="calSection flexDirectionColumn">
                    <div class="cal-spring contentShadow1"></div>
                    <div class="cal-content flexJustifyCenter contentShadow" >
                        <div class="cal-innercontent " >                        
                            <div id="calendar" class="calendar">
                                <div class="cal-month-main flexAlignCenter">
                                    <div class="arrow-left"></div>
                                    <div class="cal-month displayFlex">
                                        <div class="cal-prevmonth flexAlignCenter">
                                            <p><span class="cal-prev">PREVIOUS</span><span class="cal-monthprev">MONTH</span></p>
                                        </div>
                                        <div  class="cal-curmonth flexAlignCenterJustifyCenter">
                                            NOVEMBER 2016
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
                                    <div class="withDate">1</div>
                                    <div class="withDate">2</div>
                                    <div class="withDate">3</div>
                                    <div class="withDate">4</div>
                                    <div class="withDate">5</div>
                                    <div class="withDate">6</div>
                                    <div class="withDate">7</div>
                                    <div class="withDate">8</div>
                                    <div class="withDate">9</div>
                                    <div class="withDate">10</div>
                                    <div class="withDate">11</div>
                                    <div class="withDate">12</div>
                                    <div class="withDate">13</div>
                                    <div class="selectedDate" onclick="showMenuList();">14</div>
                                    <div class="selectedDate" onclick="showMenuList();">15</div>
                                    <div class="selectedDate" onclick="showMenuList();">16</div>
                                    <div class="selectedDate" onclick="showMenuList();">17</div>
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
            <!--            calender ends here-->

            <!--   restaurants menu list starts here-->
            <section style="display:none;">
                <div  class=" displayFlex contentContainer  ">
                    <div class=" contentContainer flexAlignCenterJustifySpaceBetween flexDirectionColumn">
                        <div id="content_body" class="contentBody contentShadow  ">
                            <div id="menu_list_container" class="mainParentMenuList" style="display:none;">
                                <div class="restuarntmenuContainer flexAlignCenterJustifyCenter" >
                                    <div class="menuScroll">
                                        <div class="menuListContent">
                                            <div class="divBasic">
                                                <div class="mealCoursediv">
                                                    <div>Entree</div>
                                                </div>
                                                <div class="menuDiv flexAlignCenterJustifyCenter">
                                                    <div class="menuDivContent">
                                                        <div class="item displayFlex">
                                                            <div class="FoodName flexAlignCenterJustifyStart">Chicken fry,fish fry,egg Fried Rice</div>
                                                            <div class="tick  flexAlignCenterJustifyCenter">
                                                                <!--                                                                    <div class="fa flexAlignCenterJustifyCenter " ></div>-->
                                                            </div>
                                                        </div>
                                                        <div class="item displayFlex">
                                                            <div class="FoodName  itemNameSelected flexAlignCenterJustifyStart">Egg Fried Rice</div>
                                                            <div class="tick  flexAlignCenterJustifyCenter">
                                                                <div class="fa flexAlignCenterJustifyCenter " ></div>
                                                            </div>
                                                        </div>
                                                        <div class="item displayFlex">
                                                            <div class="FoodName flexAlignCenterJustifyStart">soda</div>
                                                            <div class="tick  flexAlignCenterJustifyCenter">
                                                                <!--                                                                    <div class="fa flexAlignCenterJustifyCenter " ></div>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="divBasic">
                                                <div class="mealCoursediv">
                                                    <div>Entree</div>
                                                </div>
                                                <div class="menuDiv flexAlignCenterJustifyCenter">
                                                    <div class="menuDivContent">
                                                        <div class="item displayFlex">
                                                            <div class="FoodName flexAlignCenterJustifyStart">Chicken fry,fish fry,egg Fried Rice</div>
                                                            <div class="tick  flexAlignCenterJustifyCenter">
                                                                <!--                                                                    <div class="fa flexAlignCenterJustifyCenter " ></div>-->
                                                            </div>
                                                        </div>
                                                        <div class="item displayFlex">
                                                            <div class="FoodName  itemNameSelected flexAlignCenterJustifyStart">Egg Fried Rice</div>
                                                            <div class="tick  flexAlignCenterJustifyCenter">
                                                                <div class="fa flexAlignCenterJustifyCenter " ></div>
                                                            </div>
                                                        </div>
                                                        <div class="item displayFlex">
                                                            <div class="FoodName flexAlignCenterJustifyStart">soda</div>
                                                            <div class="tick  flexAlignCenterJustifyCenter">
                                                                <!--                                                                    <div class="fa flexAlignCenterJustifyCenter " ></div>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="divBasic">
                                                <div class="mealCoursediv">
                                                    <div>Entree</div>
                                                </div>
                                                <div class="menuDiv flexAlignCenterJustifyCenter">
                                                    <div class="menuDivContent">
                                                        <div class="item displayFlex">
                                                            <div class="FoodName flexAlignCenterJustifyStart">Chicken fry,fish fry,egg Fried Rice</div>
                                                            <div class="tick  flexAlignCenterJustifyCenter">
                                                                <!--                                                                    <div class="fa flexAlignCenterJustifyCenter " ></div>-->
                                                            </div>
                                                        </div>
                                                        <div class="item displayFlex">
                                                            <div class="FoodName  itemNameSelected flexAlignCenterJustifyStart">Egg Fried Rice</div>
                                                            <div class="tick  flexAlignCenterJustifyCenter">
                                                                <div class="fa flexAlignCenterJustifyCenter " ></div>
                                                            </div>
                                                        </div>
                                                        <div class="item displayFlex">
                                                            <div class="FoodName flexAlignCenterJustifyStart">soda</div>
                                                            <div class="tick  flexAlignCenterJustifyCenter">
                                                                <!--                                                                    <div class="fa flexAlignCenterJustifyCenter " ></div>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="divBasic">
                                                <div class="mealCoursediv">
                                                    <div>Entree</div>
                                                </div>
                                                <div class="menuDiv flexAlignCenterJustifyCenter">
                                                    <div class="menuDivContent">
                                                        <div class="item displayFlex">
                                                            <div class="FoodName flexAlignCenterJustifyStart">Chicken fry,fish fry,egg Fried Rice</div>
                                                            <div class="tick  flexAlignCenterJustifyCenter">
                                                                <!--                                                                    <div class="fa flexAlignCenterJustifyCenter " ></div>-->
                                                            </div>
                                                        </div>
                                                        <div class="item displayFlex">
                                                            <div class="FoodName  itemNameSelected flexAlignCenterJustifyStart">Egg Fried Rice</div>
                                                            <div class="tick  flexAlignCenterJustifyCenter">
                                                                <div class="fa flexAlignCenterJustifyCenter " ></div>
                                                            </div>
                                                        </div>
                                                        <div class="item displayFlex">
                                                            <div class="FoodName flexAlignCenterJustifyStart">soda</div>
                                                            <div class="tick  flexAlignCenterJustifyCenter">
                                                                <!--                                                                    <div class="fa flexAlignCenterJustifyCenter " ></div>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menuActionContainer flexAlignCenterJustifyCenter">
                                    <div class="menuAction flexAlignCenterJustifySpaceAround displayFlex">
                                        <div class=" breakfastBS buttonStyle flexAlignCenterJustifyCenter">
                                            <div class="buttonContent displayFlex flexAlignCenterJustifyCenter ">
                                                <div class="star flexAlignCenterJustifyCenter">
                                                    <img src="../images/star_icon.png" alt="next" >
                                                </div>
                                                <div class="menuName flexAlignCenterJustifyCenter">Breakfast</div>
                                            </div>
                                        </div>

                                        <div class=" lunchBS buttonStyle flexAlignCenterJustifyCenter">
                                            <div class="buttonContent displayFlex flexAlignCenterJustifyCenter ">
                                                <div class="star flexAlignCenterJustifyCenter">
                                                    <img src="../images/star_icon.png" alt="next" >
                                                </div>
                                                <div class="menuName flexAlignCenterJustifyCenter">Lunch</div>
                                            </div>
                                        </div>

                                        <div class=" dinnerBS ButtonStyle  flexAlignCenterJustifyCenter">
                                            <div class="buttonContent displayFlex flexAlignCenterJustifyCenter ">
                                                <div class="star flexAlignCenterJustifyCenter">
                                                    <img src="../images/star_icon.png" alt="next" >
                                                </div>
                                                <div class="menuName flexAlignCenterJustifyCenter">Dinner</div>
                                            </div>
                                        </div>

                                        <div class="orderButtonStyle flexAlignCenterJustifyCenter">
                                            <div class="buttonContent displayFlex flexAlignCenterJustifyCenter ">
                                                <div id="place_order" onclick ="placeorderpage();" class="menuName flexAlignCenterJustifyCenter">PLACE ORDER</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--   restaurants name list starts here-->
                            <div id="hotel_avail_schedule" class="restaurantParent " style="display: none;">
                                <div class="restaurantScroll">
                                    <div class="restaurantContent">
                                        <div id="pre_Order" onclick ="preorder();" class="restaurantToOrder preOrdercolor flexAlignCenterJustifyCenter">
                                            <div class="preOrderHeadingDiv">
                                                <div class="toOrderMainDiv">
                                                    <div class="toOrderMainDivRadius preOrderRestaurant displayFlex">
                                                        <div class="preOrderstar flexAlignCenterJustifyCenter"><img src="../images/star_icon.png" alt="next" ></div>
                                                        <div class="Rsname flexAlignCenterJustifyCenter">HealthCare</div>
                                                        <div class="empty"></div>
                                                    </div>
                                                </div>
                                                <div class="mealTimmingContainer  flexAlignCenterJustifyCenter">
                                                    <div class="TimmingContent">
                                                        <div class="breakfastTimming displayFlex">
                                                            <div class="minpreOrderstar flexAlignCenterJustifyCenter"><img src="../images/star_icon.png" alt="next" ></div>
                                                            <div class="Lable flexAlignCenterJustifyStart">1 .Breakfast</div>
                                                        </div>
                                                        <div class="lunchTimming displayFlex">
                                                            <div class="minpreOrderstar flexAlignCenterJustifyCenter"><img src="../images/star_icon.png" alt="next" ></div>
                                                            <div class="Lable flexAlignCenterJustifyStart">2 .Lunch</div>
                                                        </div>
                                                        <div class="dinnerTimming displayFlex">
                                                            <div class="minpreOrderstar flexAlignCenterJustifyCenter"><img src="../images/star_icon.png" alt="next" ></div>
                                                            <div class="Lable flexAlignCenterJustifyStart">3 .Dinner</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="already_Ordered" onclick ="preorder();" class="restaurantAlreadtOrder alreadyOrderedColor flexAlignCenterJustifyCenter">
                                            <div class="ALOrderHeadingDiv">
                                                <div class="toOrderMainDiv">
                                                    <div class="toOrderMainDivRadius alreadyOrderedRestaurant displayFlex">
                                                        <div class="tickmark  flexAlignCenterJustifyCenter">
                                                            <div class="alreadyOrderedsymbol flexAlignCenterJustifyCenter"></div>
                                                        </div>
                                                        <div class="Rsname flexAlignCenterJustifyCenter">Pick Ups</div>
                                                        <div class="empty"></div>
                                                    </div>
                                                </div>
                                                <div class="mealTimmingContainer  flexAlignCenterJustifyCenter">
                                                    <div class="TimmingContent">
                                                        <div class="lunchTimming displayFlex">
    <!--                                                            <div class="minpreOrderstar flexAlignCenterJustifyCenter"><img src="../../images/star_icon.png" alt="next" ></div>-->
                                                            <div class="Lable flexAlignCenterJustifyCenter">2 .Lunch</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="pre_Order" onclick ="preorder();" class="restaurantToOrder preOrdercolor flexAlignCenterJustifyCenter">
                                            <div class="preOrderHeadingDiv">
                                                <div class="toOrderMainDiv">
                                                    <div class="toOrderMainDivRadius preOrderRestaurant displayFlex">
                                                        <div class="preOrderstar flexAlignCenterJustifyCenter"></div>
                                                        <div class="Rsname flexAlignCenterJustifyCenter">Emplyee</div>
                                                        <div class="empty"></div>
                                                    </div>
                                                </div>
                                                <div class="mealTimmingContainer  flexAlignCenterJustifyCenter">
                                                    <div class="TimmingContent">

                                                        <div class="lunchTimming displayFlex">
    <!--                                                        <div class="minpreOrderstar flexAlignCenterJustifyCenter"><img src="../../images/star_icon.png" alt="next" ></div>-->
                                                            <div class="Lable flexAlignCenterJustifyCenter">2 .Lunch</div>
                                                        </div>
                                                        <div class="dinnerTimming displayFlex">
    <!--                                                        <div class="minpreOrderstar flexAlignCenterJustifyCenter"><img src="../../images/star_icon.png" alt="next" ></div>-->
                                                            <div class="Lable flexAlignCenterJustifyCenter">3 .Dinner</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="pre_Order" onclick ="preorder();" class="restaurantToOrder preOrdercolor flexAlignCenterJustifyCenter">
                                            <div class="preOrderHeadingDiv">
                                                <div class="toOrderMainDiv">
                                                    <div class="toOrderMainDivRadius preOrderRestaurant displayFlex">
                                                        <div class="preOrderstar flexAlignCenterJustifyCenter"></div>
                                                        <div class="Rsname flexAlignCenterJustifyCenter">Emplyee</div>
                                                        <div class="empty"></div>
                                                    </div>
                                                </div>
                                                <div class="mealTimmingContainer  flexAlignCenterJustifyCenter">
                                                    <div class="TimmingContent">

                                                        <div class="lunchTimming displayFlex">
    <!--                                                        <div class="minpreOrderstar flexAlignCenterJustifyCenter"><img src="../../images/star_icon.png" alt="next" ></div>-->
                                                            <div class="Lable flexAlignCenterJustifyCenter">2 .Lunch</div>
                                                        </div>
                                                        <div class="dinnerTimming displayFlex">
    <!--                                                        <div class="minpreOrderstar flexAlignCenterJustifyCenter"><img src="../../images/star_icon.png" alt="next" ></div>-->
                                                            <div class="Lable flexAlignCenterJustifyCenter">3 .Dinner</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="pre_Order" onclick ="preorder();" class="restaurantToOrder preOrdercolor flexAlignCenterJustifyCenter">
                                            <div class="preOrderHeadingDiv">
                                                <div class="toOrderMainDiv">
                                                    <div class="toOrderMainDivRadius preOrderRestaurant displayFlex">
                                                        <div class="preOrderstar flexAlignCenterJustifyCenter"></div>
                                                        <div class="Rsname flexAlignCenterJustifyCenter">Emplyee</div>
                                                        <div class="empty"></div>
                                                    </div>
                                                </div>
                                                <div class="mealTimmingContainer  flexAlignCenterJustifyCenter">
                                                    <div class="TimmingContent">

                                                        <div class="lunchTimming displayFlex">
    <!--                                                        <div class="minpreOrderstar flexAlignCenterJustifyCenter"><img src="../images/star_icon.png" alt="next" ></div>-->
                                                            <div class="Lable flexAlignCenterJustifyCenter">2 .Lunch</div>
                                                        </div>
                                                        <div class="dinnerTimming displayFlex">
    <!--                                                        <div class="minpreOrderstar flexAlignCenterJustifyCenter"><img src="../images/star_icon.png" alt="next" ></div>-->
                                                            <div class="Lable flexAlignCenterJustifyCenter">3 .Dinner</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="pre_Order" onclick ="preorder();" class="restaurantToOrder preOrdercolor flexAlignCenterJustifyCenter">
                                            <div class="preOrderHeadingDiv">
                                                <div class="toOrderMainDiv">
                                                    <div class="toOrderMainDivRadius preOrderRestaurant displayFlex">
                                                        <div class="preOrderstar flexAlignCenterJustifyCenter"></div>
                                                        <div class="Rsname flexAlignCenterJustifyCenter">Emplyee</div>
                                                        <div class="empty"></div>
                                                    </div>
                                                </div>
                                                <div class="mealTimmingContainer  flexAlignCenterJustifyCenter">
                                                    <div class="TimmingContent">

                                                        <div class="lunchTimming displayFlex">
    <!--                                                        <div class="minpreOrderstar flexAlignCenterJustifyCenter"><img src="../images/star_icon.png" alt="next" ></div>-->
                                                            <div class="Lable flexAlignCenterJustifyCenter">2 .Lunch</div>
                                                        </div>
                                                        <div class="dinnerTimming displayFlex">
    <!--                                                        <div class="minpreOrderstar flexAlignCenterJustifyCenter"><img src="../images/star_icon.png" alt="next" ></div>-->
                                                            <div class="Lable flexAlignCenterJustifyCenter">3 .Dinner</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="pre_Order" onclick ="preorder();" class="restaurantToOrder preOrdercolor flexAlignCenterJustifyCenter">
                                            <div class="preOrderHeadingDiv">
                                                <div class="toOrderMainDiv">
                                                    <div class="toOrderMainDivRadius preOrderRestaurant displayFlex">
                                                        <div class="preOrderstar flexAlignCenterJustifyCenter"></div>
                                                        <div class="Rsname flexAlignCenterJustifyCenter">Emplyee</div>
                                                        <div class="empty"></div>
                                                    </div>
                                                </div>
                                                <div class="mealTimmingContainer  flexAlignCenterJustifyCenter">
                                                    <div class="TimmingContent">

                                                        <div class="lunchTimming displayFlex">
    <!--                                                        <div class="minpreOrderstar flexAlignCenterJustifyCenter"><img src="../images/star_icon.png" alt="next" ></div>-->
                                                            <div class="Lable flexAlignCenterJustifyCenter">2 .Lunch</div>
                                                        </div>
                                                        <div class="dinnerTimming displayFlex">
    <!--                                                        <div class="minpreOrderstar flexAlignCenterJustifyCenter"><img src="../images/star_icon.png" alt="next" ></div>-->
                                                            <div class="Lable flexAlignCenterJustifyCenter">3 .Dinner</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="avail_identity" class="restaurantAvailContainer ">
                                <div class="avaliablityContent displayFlex">
                                    <div class="preOrderAvailDiv  displayFlex">
                                        <div class="orderidentity flexAlignCenterJustifyStart">
                                            <div class="preOrderstar commonbackground backcolor flexAlignCenterJustifyCenter"><img src="../images/star_icon.png" alt="next" ></div>-->
                                        </div>
                                        <div class="nameOfIdentity flexAlignCenterJustifyStart">
                                            <div>Pre Order Avaliable</div>
                                        </div>
                                    </div>
                                    <div class="alreadyOrderedDiv displayFlex">
                                        <div class="orderidentity flexAlignCenterJustifyEnd">
                                            <div class="commonbackground ALbackcolor flexAlignCenterJustifyCenter">
                                                <div class="alreadyOrderedsymbol flexAlignCenterJustifyCenter "></div>
                                            </div>
                                        </div>
                                        <div class="AOnameOfIdentity flexAlignCenterJustifyEnd">
                                            <div class="flexJustifyCenter">Already Ordered</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--   restaurants name list ends here-->
                            <!--  delivery food layout starts here-->
                            <div id="Orderdetail_list_parent" class="detailsListParent">
                                <div class="itemsListContainer flexAlignCenterJustifyCenter ">
                                    <div class="placeOrderScroll">
                                        <div class="placeOrderContent">
                                            <div class="mealParent">
                                                <div class="mealCourseMaindiv">Entree</div>
                                                <div class="FoodNamediv flexAlignCenterJustifyCenter ">
                                                    <div>Scrambled EggScrambled EggScrambled EggScrambled EggScrambled EggScrambled EggScrambled EggScrambled EggScrambled Egg</div>
                                                </div>
                                            </div>
                                            <div class="mealParent">
                                                <div class="mealCourseMaindiv">Side Item</div>
                                                <div class="FoodNamediv flexAlignCenterJustifyCenter ">
                                                    <div>English Muffin</div>
                                                </div>
                                            </div>
                                            <div class="mealParent">
                                                <div class="mealCourseMaindiv">Soda</div>
                                                <div class="FoodNamediv flexAlignCenterJustifyCenter ">
                                                    <div>COCO</div>
                                                </div>
                                            </div>
                                            <div class="mealParent">
                                                 <div class="mealCourseMaindiv">Entree</div>
                                                <div class="MealParentContent">
                                                <div class="FoodNamediv FoodNamediv1 flexAlignCenterJustifyCenter ">
                                                    <div> Scrambled EggScrambled EggScrambled Egg</div>
                                                </div>
                                                <div class="FoodNamediv FoodNamediv1 flexAlignCenterJustifyCenter ">
                                                    <div>Scrambled Egg</div>
                                                </div>
                                                <div class="FoodNamediv FoodNamediv1 flexAlignCenterJustifyCenter ">
                                                    <div>Scrambled Egg</div>
                                                </div>
                                                </div>
                                                
                                            </div>
                                            <div class="mealParent">
                                                <div class="mealCourseMaindiv">Main Dish</div>
                                                <div class="FoodNamediv flexAlignCenterJustifyCenter ">
                                                    <div>Full Meals</div>
                                                </div>
                                            </div>

                                            <div class="mealParent">
                                                <div class="mealCourseMaindiv">Entree</div>
                                                <div class="FoodNamediv flexAlignCenterJustifyCenter ">
                                                    <div>Fried Chicken</div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="orderActionButton ">
                                    <div class="deliveryDetailsContainer ">
                                        <div class="locationDetailContainer flexAlignCenterJustifyCenter flexDirectionColumn ">
                                            <div class="locationDetailContent ">
                                                <div class="deliverylocation displayFlex">
                                                    <div class="deliverylable labelstyle">Service Location </div>
                                                    <div class="details detailsStyle  ">: In Room</div>
                                                </div>
                                                <div class="deliveryType displayFlex">
                                                    <div class="deliverylable labelstyle">Service Type </div>
                                                    <div class="details detailsStyle  ">: In Room</div>
                                                </div>
                                                <div class="deliveryTime displayFlex">
                                                    <div class="deliverylable labelstyle">Service Time </div>
                                                    <div class="details detailsStyle  ">: 03:58PM</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="TimmingContainer displayFlex">
                                            <div class="OrdermenuAction flexAlignCenterJustifySpaceBetween displayFlex">
                                                <div class="orderedbuttonStyle buttonBS flexAlignCenterJustifyCenter">
                                                    <div class="buttonContent displayFlex flexAlignCenterJustifyCenter ">
                                                        <div class="star1 starOrder flexAlignCenterJustifyCenter">
                                                            <img src="../images/star_icon.png" alt="next" >
                                                        </div>
                                                        <div class="menuName flexAlignCenterJustifyStart">Breakfast</div>
                                                    </div>
                                                </div>
                                                <div class="buttonStyleUnOdered buttonLU flexAlignCenterJustifyCenter">
                                                    <div class="buttonContent displayFlex flexAlignCenterJustifyCenter ">
                                                        <div class="star1 starOrder flexAlignCenterJustifyCenter">
                                                            <img src="../images/star_icon.png" alt="next" >
                                                        </div>
                                                        <div class="menuName flexAlignCenterJustifyStart">Lunch</div>
                                                    </div>
                                                </div>
                                                <div class="buttonStyleUnOdered buttonLU flexAlignCenterJustifyCenter">
                                                    <div class="buttonContent displayFlex flexAlignCenterJustifyCenter ">
                                                        <div class="star1 starOrder flexAlignCenterJustifyCenter">
                                                            <img src="../images/star_icon.png" alt="next" >
                                                        </div>
                                                        <div class="menuName flexAlignCenterJustifyStart">Dinner</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  delivery food layout ends here-->
                        </div>
                        <!--  delivery food layout starts here-->
                        <div id="parent_place_orderdiv" class="parentDeliveryDiv contentShadow flexAlignCenterJustifyCenter">
                            <div class="actionControl displayFlex ">
                                <div class="ActionButtondiv displayFlex flexAlignCenterJustifySpaceBetween">
                                    <div class="startButtonContainer  startButtonColor flexAlignCenterJustifyCenter ">
                                        <div>START OVER</div>
                                    </div>
                                    <div class="startButtonContainer  startButtonColor flexAlignCenterJustifyCenter ">
                                        <div>CANCEL</div>
                                    </div>

                                </div>
                                <div class="conformButton  flexAlignCenterJustifyEnd">
                                    <div class="startButtonContainer  conformButtonColor flexAlignCenterJustifyCenter ">
                                        <div>CONFIRM</div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--  delivery food layout ends here-->
                    </div>
                    <div class="sideFooter">
                        <div class="flexDirectionColumn flexAlignEndJustifySapceBetween">
                            <div class="home-icon" onclick="home();"><img src="../images/home.png" alt="home"></div>
                            <div class="home-icon" onclick="calendarpage();"><img src="../images/calendar.png" alt="home"></div>
                            <div class="home-icon" onclick="home();"><img src="../images/back.png" alt="back"></div>
                        </div>
                    </div>
                </div>

            </section>
            <!--   restaurants menu list ends here-->

            <footer>
                <div id="calender_footer" class="footerMain flexAlignCenterJustifySpaceBetween displayFlex" >
                    <div id="homebutton" class="home-icon" onclick="home();">
                        <img src="../images/home.png" alt="home">
                    </div>
                    <div id="calendarbutton" class="home-icon" onclick="calendarpage();" style="display: none;">
                        <img src="../images/calendar.png" alt="back">
                    </div>
                    <div id="backbutton" class="home-icon" onclick="home();">
                        <img src="../images/back.png" alt="back">
                    </div>
                </div>
            </footer>
        </div>

    </body>
    <script>
        function home() {
            window.location.href = 'http://10.10.1.166/CCRC_NEW_DESIGN';
        }

       
        function calendarpage() {
            document.getElementById('main_calendar').style.display = '-webkit-flex';
            var x = document.getElementsByTagName("section");
            x[0].style.display = 'none';
            document.getElementById('calendarbutton').style.display = 'none';
            document.getElementById('homebutton').style.display = '-webkit-flex';
            document.getElementById('backbutton').style.display = '-webkit-flex';
            document.getElementById('dinning_header').innerHTML = "DINNING SERVICES";
            document.getElementById('content_body').style.height = '100%';


        }

        function showMenuList() {

            document.getElementById('main_calendar').style.display = 'none';
            var x = document.getElementsByTagName("section");
            x[0].style.display = 'block';
            document.getElementById('menu_list_container').style.display = 'none';
            document.getElementById('parent_place_orderdiv').style.display = 'none';
            document.getElementById('Orderdetail_list_parent').style.display = 'none';
            document.getElementById('hotel_avail_schedule').style.display = '-webkit-flex';
            document.getElementById('avail_identity').style.display = '-webkit-flex';
            document.getElementById('calendarbutton').style.display = '-webkit-flex';
            document.getElementById('homebutton').style.display = '-webkit-flex';
            document.getElementById('backbutton').style.display = '-webkit-flex';
            document.getElementById('dinning_header').innerHTML = "RESTAURANT MENU Monday,September 9,2016";
            document.getElementById('content_body').style.height = '100%';


        }
        function preorder() {
            document.getElementById('main_calendar').style.display = 'none';
            var x = document.getElementsByTagName("section");
            x[0].style.display = 'block';
            document.getElementById('menu_list_container').style.display = 'block';
            document.getElementById('hotel_avail_schedule').style.display = 'none';
            document.getElementById('avail_identity').style.display = 'none';
            document.getElementById('Orderdetail_list_parent').style.display = 'none';
            document.getElementById('parent_place_orderdiv').style.display = 'none';
            document.getElementById('calendarbutton').style.display = '-webkit-flex';
            document.getElementById('homebutton').style.display = '-webkit-flex';
            document.getElementById('backbutton').style.display = '-webkit-flex';
            document.getElementById('dinning_header').innerHTML = "HEALTHCARE BREAKFAST Menu,September 9,2016";
            document.getElementById('content_body').style.height = '100%';
        }
        function placeorderpage() {
            document.getElementById('main_calendar').style.display = 'none';
            var x = document.getElementsByTagName("section");
            x[0].style.display = 'block';
            document.getElementById('menu_list_container').style.display = 'none';
            document.getElementById('hotel_avail_schedule').style.display = 'none';
            document.getElementById('avail_identity').style.display = 'none';
            document.getElementById('Orderdetail_list_parent').style.display = 'block';
            document.getElementById('parent_place_orderdiv').style.display = '-webkit-flex';
            document.getElementById('calendarbutton').style.display = '-webkit-flex';
            document.getElementById('homebutton').style.display = '-webkit-flex';
            document.getElementById('backbutton').style.display = '-webkit-flex';
            document.getElementById('content_body').style.height = '83%';

        }

    </script>
</html>
