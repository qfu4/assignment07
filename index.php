<?php include "inc/html-top.inc";?>

    <!-- Top Section -->
    <section id="index" class="index">
        <div class="indexContainer">

            <div class="content">
              
                <h2>The Ultimate Guide for <span>FOODIE</span></h2>

            </div><!-- .content -->

            <button onclick="window.location.href='survey.php'">Take the Survey</button>

       </div><!-- .container -->
    </section>

    <!-- first Section -->
    <section id="first">
        <div class="container firstContainer">

            <div class="content">

                <h2>About the Guide</h2>
                <p>Michelin Guides are a series of guide books published by the French tyre company Michelin for more than a century. The term normally refers to the annually published Michelin Red Guide, the oldest European hotel and restaurant reference guide, which awards up to three Michelin stars for excellence to a select few establishments. The acquisition or loss of a star can have dramatic effects on the success of a restaurant. Michelin also publishes a series of general guides to cities, regions, and countries, the Green Guides.</p>

            </div><!-- .content -->

            <img src="images/food.jpg">

       </div><!-- .container -->
    </section>

     <!-- Second Section -->
    <section id="second">
        <div class="container secondContainer">

            <h2>History of Michelin Guide</h2>

            <div class="content timeline">

              <ol>
                <li>
                  <div>
                    <time>1889</time>
                    Brothers Andre and Edouard Michelin founded their eponymous tire company, MICHELIN.
                </li>

                <li>
                  <div>
                    <time>1890</time>
                    In order to help motorists develop their trips - thereby boosting car sales and in turn, tire purchases - the Michelin brothers produced a small guide filled with handy information for travellers, especially, a listing of places to eat or take shelter for the night.
                  </div>
                </li>

                <li>
                  <div>
                    <time>1920</time>
                    A brand new MICHELIN Guide was launched and sold for seven francs based on the principle that “man only truly respects what he pays for.” 
                  </div>
                </li>

                <li>
                  <div>
                    <time>1926</time>
                    The guide began to award stars for fine dining establishments, initially marking them only with a single star.
                  </div>
                </li>

                <li>
                  <div>
                    <time>1936</time>
                    A hierarchy of zero, one, two, and three stars was introduced, and the criteria for the starred rankings were published.
                  </div>
                </li>

                <li>
                  <div>
                    <time>Late 20th Century</time>
                    The MICHELIN Guides became best-sellers without equals. 
                  </div>
                </li>

                <li>
                  <div>
                    <time>Today</time>
                    The remarkable foresight of the founding Michelin brothers has given the company a vocation to make driving, tourism and the search for unforgettable experiences available to all.
                  </div>
                </li>

                <li></li>

              </ol>

            </div><!-- .content -->

       </div><!-- .container -->
    </section>

    <!-- Third Section -->
    <section id="third">
        <div class="container thirdContainer">

            <h2>Core Values</h2>

            <div class="content">

           	<div>
           	 		<h3>Anonymity</h3>
            		<p>Although our "inspectors" work for the Michelin guide, they are above all customers like any other, testing restaurants in complete anonymity in order to ensure that they do not receive any special treatment.</p>
        		</div>

        		<div>
					      <h3>Independence</h3>
            		<p>All our inspectors are employees of the Michelin group, who always pay for their meals in the restaurants they are testing to ensure that they do not receive any special treatment</p>
       	 		</div>

       	 		<div>
            		<h3>Expertise</h3>
            		<p>Our inspectors are also real experts in the catering and hospitality industries, sectors in which many of them have previously worked.</p>
        		</div>
			
				    <div>
            		<h3>Reliability</h3>
            		<p>The different categories awarded by the guide are never just the result of one person's judgement; they are formed by a collective decision which is the result of a long process.</p>
        		</div>
			
				    <div>
					      <h3>Passion</h3>
           		 	<p>What would be the point of so much work and such a strict approach if our inspectors did not enjoy eating?</p>
        		</div>
        	
        		<div>    	
            		<h3>Quality</h3>
            		<p>Any restaurant can be recommended by our guide as long as its food is of high quality.</p>
        		</div>

        </div><!-- .content -->
   
       </div><!-- .container -->
    </section>

    <!-- Forth Section -->
    <section id="forth">
        <div class="container forthContainer">

            <h2>Assessment Criteria</h2>

            <div class="content">

              <p>To maintain the independence of their opinion, the inspectors always dine out anonymously, pay for their meals, and subsequently rate their experience according to five publicly acknowledged assessment criteria:</p>
              <ul>
                <li>Quality of the products</li>
                <li>Mastery of flavour and cooking techniques</li>
                <li>The personality of the chef in his cuisine</li>
                <li>Value for money</li>
                <li>Consistency between visits</li>
              </ul>

            </div><!-- .content -->


       </div><!-- .container -->
    </section>

    <!-- Forth Section -->
    <section id="fifth">
        <div class="fifthContainer">

            <h2>Three-Star Michelin Restaurants</h2>

            <div class="inner-container">

            <div class="map">
            	
            	<?php include "map.php";?>

            </div>

            <div class="list">

              <h3>Country</h3> <b><?php echo htmlspecialchars($_SESSION["countryName"]); ?></b>

            	<?php include "restaurantlist.php";?>

            </div><!-- .content -->

            </div>

       </div><!-- .container -->
    </section>

    <section id="sixth">
        <div class="container sixthContainer">

            <div class="content">
              <h2>Take Our Survey About Michelin Guides</h2>
              <p>Tell us your experience with Michelin Guides and with our website.</p>
              <button onclick="window.location.href='survey.php'">Take the Survey</button>
            </div><!-- .content -->

       </div><!-- .container -->
    </section>


    <footer>
    	<h2>Source</h2>
    	<ul>
    	<li><a href="https://guide.michelin.com/us/new-york/about-us">History</a></li>
    	<li><a href="https://guide.michelin.com/us/new-york/the-inspection-process">Inspection Process</a></li>
    	<li><a href="https://en.wikipedia.org/wiki/Michelin_Guide">Introduction</a></li>
    	<li><a href="https://en.wikipedia.org/wiki/List_of_Michelin_3-star_restaurants">List of Michelin 3-star restaurants</a></li></ul>
    </footer>
    <!-- Smooth scroll with current-section highligher, from https://codepen.io/joxmar/pen/NqqMEg -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
		var lastId,
 		topMenu = $(".main-menu"),
 		topMenuHeight = topMenu.outerHeight()+1,
 		menuItems = topMenu.find("a"),
 		scrollItems = menuItems.map(function(){
   		var item = $($(this).attr("href"));
    	if (item.length) { return item; }
 		});

		menuItems.click(function(e){
  		var href = $(this).attr("href"),
      		offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  		$('html, body').stop().animate({ 
      		scrollTop: offsetTop
  		}, 350);
  		e.preventDefault();
		});

		$(window).scroll(function(){
   			var fromTop = $(this).scrollTop()+topMenuHeight;
   			var cur = scrollItems.map(function(){
     	if ($(this).offset().top < fromTop)
       	return this;
   		});
   		cur = cur[cur.length-1];
   		var id = cur && cur.length ? cur[0].id : "";
   		if (lastId !== id) {
       		lastId = id;
       		menuItems
         	.parent().removeClass("is-current")
         	.end().filter("[href=#"+id+"]").parent().addClass("is-current");
   		}                   
		});

    $(document).ready(function(){
      $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll>300) {
          $(".main-menu").css("background-color" , "white");
        }
        else {
          $(".main-menu").css("background-color" , "transparent");
        }
        
      })
    });

    function myFunction(elementId) {
      document.getElementById("germany").style.display = "none";
      document.getElementById("us").style.display = "none";
      document.getElementById("france").style.display = "none";
      document.getElementById("japan").style.display = "none";
      document.getElementById("spain").style.display = "none";
      document.getElementById("china").style.display = "none";
      document.getElementById("italy").style.display = "none";
      document.getElementById("uk").style.display = "none";
      document.getElementById("switzerland").style.display = "none";
      document.getElementById("austria").style.display = "none";
      document.getElementById("denmark").style.display = "none";
      document.getElementById("norway").style.display = "none";
      document.getElementById("south-korea").style.display = "none";
      document.getElementById("sweden").style.display = "none";
      document.getElementById("netherlands").style.display = "none";
      document.getElementById(elementId).style.display = "block";
    }

</script>
</body>
</html>