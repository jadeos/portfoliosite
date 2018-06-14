
<script type="text/javascript">
    //<![CDATA[
    function checkbox() {
        if (document.getElementById('swings').checked) {
            document.getElementById('swings').value = 1;
            alert(document.getElementById('swings').value);
        }
        else if (document.getElementById('slide').checked) {
            document.getElementById('slide').value = 1;
            alert(document.getElementById('slide').value);
        }
        else  if (document.getElementById('monkeybars').checked) {
            document.getElementById('monkeybars').value = 1;
            alert(document.getElementById('monkeybars').value);
        }
        else if (document.getElementById('merrygoroud').checked) {
            document.getElementById('merrygoroud').value = 1;
            alert(document.getElementById('merrygoroud').value);
        }
        else if (document.getElementById('springrider').checked) {
            document.getElementById('speingrider').value = 1;
            alert(document.getElementById('springrider').value);
        }
        else  if (document.getElementById('overheadladder').checked) {
            document.getElementById('overheadladder').value = 1;
            alert(document.getElementById('overheadladder').value);
        }
        else  if (document.getElementById('playhouses').checked) {
            document.getElementById('playhouses').value = 1;
            alert(document.getElementById('swings').value);
        }
        else if (document.getElementById('mazes').checked) {
            document.getElementById('mazes').value = 1;
            alert(document.getElementById('mazes').value);
        }
        else if (document.getElementById('seasaw').checked) {
            document.getElementById('seesaw').value = 1;
            alert(document.getElementById('seesaw').value);
        }
        else if (document.getElementById('zipline').checked) {
            document.getElementById('zipline').value = 1;
            alert(document.getElementById('zipline').value);
        }
        else if (document.getElementById('sandbox').checked) {
            document.getElementById('sandbox').value = 1;
            alert(document.getElementById('sandbox').value);
        }
        else if (document.getElementById('jumglegym').checked) {
            document.getElementById('junglegym').value = 1;
            alert(document.getElementById('junglegym').value);
        }
    }
    //]]>
</script>


<div class = "weather">
    <a href="http://www.accuweather.com/en/ie/cork/207697/weather-forecast/207697" class="aw-widget-legal">
        <!--
        By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
        -->
    </a><div id="awcc1448929915996" class="aw-widget-current"  data-locationkey="207697" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1448929915996">

    </div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>

</div>





<div id = "filtersearch" alt ="search for playground">


    <form method="post"action="filter.php">
        <label for "search">Search by Location: <input type="text" id="search" name="search"/ required> </label>
        <button type ="submit" alt="search location" id = "searchbutton" name ="searchb">search location</button>
    </form>



    <strong>OR</strong>
    <br/>
    <strong>Search by Facilties</strong>
    <br/>
    <form method="post" action="filter.php">
        <div id ="ckrow1">

            <li>  <input type="checkbox" name="check[]" id="swings" value="swings">Swings</input></li>
            <li>   <input type="checkbox" name="check[]"id="slide" value="slide">Slide</input></li>
            <li>   <input type="checkbox" name="check[]"id="monkeybars" value="monkeybars">monkeybars</input></li>
            <li>  <input type="checkbox" name="check[]"id="merrygoroud" value="merry_go_round">merry_go_round</input></li>
        </div>
        <div id ="ckrow2">

            <li> <input type="checkbox" name="check[]"id="springrider" value="spring_rider">spring_rider</input></li>
            <li>  <input type="checkbox" name="check[]"id="overheadladder" value="overhead_ladder">Overhead Ladder</input></li>
            <li> <input type="checkbox" name="check[]"id="playhouses" value="playhouses">Playhouses</input></li>
            <li> <input type="checkbox" name="check[]"id="mazes" value="mazes">Mazes</input></li>
        </div>
        <div id ="ckrow3">

            <li>   <input type="checkbox" name="check[]"id="seasaw" value="seesaw">Sea-Saw</input></li>
            <li>  <input type="checkbox" name="check[]"id="zipline" value="zipline">Zipline</input></li>
            <li>   <input type="checkbox" name="check[]"id="sandbox" value="sandbox">Sand Box</input></li>
            <li>  <input type="checkbox" name="check[]"id="jumglegym" value="jungle_gym">Jungle Gym</input></li>
        </div>
        <button type ="submit" alt ="search facilities"name ="searchf" id="facilitysearch" value="search">Search Facilitites</button>
    </form>
</div>


<div class = "display_playgrounds">

    <div class="row">
        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="BandonPlayground.jpg" alt="wilton Playground">
                <div class="caption">
                    <h3 >Wilton Playground</h3>
                    <p>Wilton Playground is situated in the heart of Wilton. It is close by to many different amenities such
                        as Wilton Shopping Centre, bus routes and other shopping facilities.
                        It has the following features: </p>
                    <ul>
                        <li>Swings</li>
                        <li>Slides</li>
                        <li>Baby Swing</li>
                        <li>Climbing Frame</li>

                    </ul>
                    <div id="14491020063817" class="wE"><script src="http://widget-engine.com/w:0:003:14491020063817:4:000:40" type="text/javascript"></script>
                        <a href="http://widget-engine.com/ratingcode.php" class="wE" title="Free Rating Code for your webprojects">Get free premium widgets for your blog and website.</a></div>

                    <form method="get" action ="location.php ">
                        <p><button class="btn btn-primary" name ="address" value ="wilton" role="button">Click For More Information</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="Cloyne_Playground.jpg" alt="Togher Playground">
                <div class="caption">
                    <h3>Togher Playground</h3>
                    <p>Togher Playground has a range of different facilities available. It is situated on the main bus route that
                        services the city centre and is also close to the shops. Some of these include: </p>
                    <ul>
                        <li>Monkey Bars</li>
                        <li>Slides</li>
                        <li>SeeSaw</li>
                        <li>Climbing Frame</li>
                        <li>Sandbox</li>

                    </ul>
                    <div id="14491020063817" class="wE"><script src="http://widget-engine.com/w:0:003:14491020063817:4:000:40" type="text/javascript"></script>
                        <a href="http://widget-engine.com/ratingcode.php" class="wE" title="Free Rating Code for your webprojects">Get free premium widgets for your blog and website.</a></div>

                    <form method="get" action ="location.php ">

                        <p><button class="btn btn-primary" name ="address" value ="togher" role="button">Click For More Information</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="Fitzgeralds_Park.jpg" alt="Fitzgeralds Playground">
                <div class="caption">
                    <h3>Fitzgeralds Park</h3>
                    <p>Fitzgerald Park is located close to Cork City centre and is a great meeting place for Mums.
                        The playground caters for children of all ages and also ha some coffee shops nearby. It is
                        also only a short walk into town or a brief bus trip on a rainy day. Some of the facilities include: </p>
                    <ul>
                        <li>Monkey Bars</li>
                        <li>Swings</li>
                        <li>Baby Swings</li>
                        <li>Climbing Frame</li>
                        <li>Sandbox</li>
                        <li>Playhouses</li>

                    </ul>
                    <div id="14491020063817" class="wE"><script src="http://widget-engine.com/w:0:003:14491020063817:4:000:40" type="text/javascript"></script>
                        <a href="http://widget-engine.com/ratingcode.php" class="wE" title="Free Rating Code for your webprojects">Get free premium widgets for your blog and website.</a></div>

                    <form method="get" action ="location.php ">

                        <p><button class="btn btn-primary" name ="address" value ="cork" role="button">Click For More Information</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="Ballincollig2.jpg" alt="Ballincollig Playground">
                <div class="caption">
                    <h3>Ballincollig Playground</h3>
                    <p>Ballincollig Playground has a range of different facilities available. It is locate in the heart of Ballincollig and
                        has access to many different shops and coffee shops and is only a short walk from Ballincollig Town Centre. Some of these include: </p>
                    <ul>
                        <li>Monkey Bars</li>
                        <li>Slides</li>
                        <li>SeeSaw</li>
                        <li>Spring Rider</li>
                        <li>Merry Go Round</li>

                    </ul>
                    <div id="14491020063817" class="wE"><script src="http://widget-engine.com/w:0:003:14491020063817:4:000:40" type="text/javascript"></script>
                        <a href="http://widget-engine.com/ratingcode.php" class="wE" title="Free Rating Code for your webprojects">Get free premium widgets for your blog and website.</a></div>

                    <form method="get" action ="location.php ">

                        <p><button class="btn btn-primary" name ="address" value ="ballincollig" role="button">Click For More Information</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="BandonPlayground.jpg" alt="BallydehobPlayground">
                <div class="caption">
                    <h3>Ballydehob Playground</h3>

                    <p>Ballydehob Playground is a smaller playground but still has some nice facilities on offer. </p>
                    <ul>
                        <li>Monkey Bars</li>
                        <li>Slides</li>
                        <li>Climbing Frame</li>
                        <li>Sandbox</li>

                    </ul>
                    <div id="14491020063817" class="wE"><script src="http://widget-engine.com/w:0:003:14491020063817:4:000:40" type="text/javascript"></script>
                        <a href="http://widget-engine.com/ratingcode.php" class="wE" title="Free Rating Code for your webprojects">Get free premium widgets for your blog and website.</a></div>

                    <form method="get" action ="location.php ">
                        <p><button class="btn btn-primary" name ="address" value ="ballydehob" role="button">Click For More Information</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="Cloyne_Playground.jpg" alt="Cloyne Playground">
                <div class="caption">
                    <h3>Cloyne Playground</h3>
                    <p>Cloyne Playground has a great range of facilities for all different age groups and is located in the centre of Cloyne.
                        There are shops nearby and there is also a bus stop closeby. Some of these include: </p>
                    <ul>
                        <li>Zip Line</li>
                        <li>Playhouse</li>
                        <li>Slides</li>
                        <li>Climbing Frame</li>
                        <li>Swings</li>
                        <li>Baby Swings</li>
                    </ul>
                    <div id="14491020063817" class="wE"><script src="http://widget-engine.com/w:0:003:14491020063817:4:000:40" type="text/javascript"></script>
                        <a href="http://widget-engine.com/ratingcode.php" class="wE" title="Free Rating Code for your webprojects">Get free premium widgets for your blog and website.</a></div>

                    <form method="get" action ="location.php ">
                        <p><button class="btn btn-primary" name ="address" value ="cloyne" role="button">Click For More Information</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="Fitzgeralds_Park.jpg" alt="Fitzgeralds Playground">
                <div class="caption">
                    <h3>Macroom Playground</h3>
                    <p>Macroom Playground has a range of different facilities available. It is located just a short walk from the town centre
                        and many different shops and coffee shops. Some of these include: </p>
                    <ul>
                        <li>Swings</li>
                        <li>Slides</li>
                        <li>SeeSaw</li>
                        <li>Climbing Frame</li>
                        <li>Sandbox</li>

                    </ul>
                    <p>
                    <div id="14491020063817" class="wE"><script src="http://widget-engine.com/w:0:003:14491020063817:4:000:40" type="text/javascript"></script>
                        <a href="http://widget-engine.com/ratingcode.php" class="wE" title="Free Rating Code for your webprojects">Get free premium widgets for your blog and website.</a></div>

                    <form method="get" action ="location.php ">
                        <p><button class="btn btn-primary" name ="address" value ="cork" role="button">Click For More Information</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="Ballincollig2.jpg" alt="Ballincollig Playground">
                <div class="caption">
                    <h3> Coachford Playground</h3>
                    <p> This playground has a range of different facilities available. It is situated close to some of the local shops and has a bus
                        stop nearby. Some of the facilities include: </p>
                    <ul>
                        <li>Monkey Bars</li>
                        <li>Slides</li>
                        <li>SeeSaw</li>
                        <li>Climbing Frame</li>
                        <li>Sandbox</li>

                    </ul>
                    <p>
                    <div id="14491020063817" class="wE"><script src="http://widget-engine.com/w:0:003:14491020063817:4:000:40" type="text/javascript"></script>
                        <a href="http://widget-engine.com/ratingcode.php" class="wE" title="Free Rating Code for your webprojects">Get free premium widgets for your blog and website.</a></div>

                    <form method="get" action ="location.php ">
                        <p><button class="btn btn-primary" name ="address" value ="ballincollig" role="button">Click For More Information</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="BandonPlayground.jpg" alt="Bandon Playground">
                <div class="caption">
                    <h3>Glanmire Playground</h3>
                    <p>Glanmire Playground has a range of different facilities available.  It is just a short walk from local shops and coffee shops.
                        It has facilities to cater for all age groups. Some of these include: </p>
                    <ul>
                        <li>Monkey Bars</li>
                        <li>Slides</li>
                        <li>SeeSaw</li>
                        <li>Climbing Frame</li>
                        <li>Sandbox</li>
                        <li>Swings</li>


                    </ul>
                    <div id="14491020063817" class="wE"><script src="http://widget-engine.com/w:0:003:14491020063817:4:000:40" type="text/javascript"></script>
                        <a href="http://widget-engine.com/ratingcode.php" class="wE" title="Free Rating Code for your webprojects">Get free premium widgets for your blog and website.</a></div>

                    <form method="get" action ="location.php ">
                        <p><button class="btn btn-primary" name ="address" value ="bandon" role="button">Click For More Information</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="Cloyne_Playground.jpg" alt="Cloyne Playground">
                <div class="caption">
                    <h3>Rathcormac Playground</h3>
                    <p>Rathcormac Playground has a number of different facilites that caters for most ages. It is located just behind the main street of the town
                        giving you access to the local shop, coffee shop and bus stops. Some of these include: </p>
                    <ul>
                        <li>Monkey Bars</li>
                        <li>Slides</li>
                        <li>SeeSaw</li>
                        <li>Climbing Frame</li>
                        <li>Sandbox</li>
                        <li>Basket Swing</li>

                    </ul>

                    <div id="14491020063817" class="wE"><script src="http://widget-engine.com/w:0:003:14491020063817:4:000:40" type="text/javascript"></script>
                        <a href="http://widget-engine.com/ratingcode.php" class="wE" title="Free Rating Code for your webprojects">Get free premium widgets for your blog and website.</a></div>

                    <form method="get" action ="location.php ">
                        <p><button class="btn btn-primary" name ="address" value ="cloyne" role="button">Click For More Information</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="Fitzgeralds_Park.jpg" alt="Fitzgeralds Playground">
                <div class="caption">
                    <h3>Watergrasshill Playground</h3>
                    <p>Watergrasshill playground has a range of different facilities available. It is located just of the main street of the town
                        giving you access to the local shop and coffee shop. It also close to the bus stop. Some of the facilities include: </p>
                    <ul>
                        <li>Monkey Bars</li>
                        <li>Slides</li>
                        <li>SeeSaw</li>
                        <li>Climbing Frame</li>
                        <li>Sandbox</li>

                    </ul>
                    <p>
                    <div id="14491020063817" class="wE"><script src="http://widget-engine.com/w:0:003:14491020063817:4:000:40" type="text/javascript"></script>
                        <a href="http://widget-engine.com/ratingcode.php" class="wE" title="Free Rating Code for your webprojects">Get free premium widgets for your blog and website.</a></div>

                    <form method="get" action ="location.php ">
                        <p><button class="btn btn-primary" name ="address" value ="cork" role="button">Click For More Information</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="Ballincollig2.jpg" alt="Ballincollig Playground">
                <div class="caption">
                    <h3>Carrigaline Playground</h3>
                    <p>Carrigaline Playground is a short walk from the town centre that offers good shopping facilites and coffee shops. It
                        has a range of different facilities available that cater for most age groups.  Some of these include: </p>
                    <ul>
                        <li>Monkey Bars</li>
                        <li>Slides</li>
                        <li>SeeSaw</li>
                        <li>Climbing Frame</li>
                        <li>Sandbox</li>
                        <li>Basket Swing</li>

                    </ul>
                    <p>
                    <div id="14491020063817" class="wE"><script src="http://widget-engine.com/w:0:003:14491020063817:4:000:40" type="text/javascript"></script>
                        <a href="http://widget-engine.com/ratingcode.php" class="wE" title="Free Rating Code for your webprojects">Get free premium widgets for your blog and website.</a></div>

                    <form method="get" action ="location.php ">
                        <p><button class="btn btn-primary" name ="address" value ="ballincollig" role="button">Click For More Information</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
</div>

</div>