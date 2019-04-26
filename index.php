<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Michelin Guides</title>
	<link rel="stylesheet" href="css/long-scrolly.css">
	<link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/timeline.css">
	<link rel="stylesheet" href="css/map.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Scope+One" rel="stylesheet">
</head>

<body>
	 <!-- Navigation -->
    <nav class="main-menu">
        <a id="logo" href="index.html">
        	<h1>Michelin Guide</h1>
        </a>
        <ul>
            <li><a href="#first">Intro</a></li>
            <li><a href="#second">History</a></li>
            <li><a href="#third">Assessment Criteria</a></li>
            <li><a href="#forth">Three-Star Restaurants</a></li>
            <li><a href="#fifth">Survey</a><li>
        </ul>
    </nav>

    <!-- Top Section -->
    <section id="index" class="index">
        <div class="container">

            <div class="content">
              
                <h1>The Ultimate Guide to Finding The Best Restaurant</h1>

            </div><!-- .content -->

       </div><!-- .container -->
    </section>

    <!-- first Section -->
    <section id="first">
        <div class="container firstContainer">

            <div class="content">

                <h1>About the Guide</h1>
                <p>Michelin Guides are a series of guide books published by the French tyre company Michelin for more than a century. The term normally refers to the annually published Michelin Red Guide, the oldest European hotel and restaurant reference guide, which awards up to three Michelin stars for excellence to a select few establishments. The acquisition or loss of a star can have dramatic effects on the success of a restaurant. Michelin also publishes a series of general guides to cities, regions, and countries, the Green Guides.</p>

            </div><!-- .content -->

            <img src="images/food.jpg">

       </div><!-- .container -->
    </section>

     <!-- Second Section -->
    <section id="second">
        <div class="container secondContainer">

            <h1>History of Michelin Guides</h1>

            <div class="content timeline">

              <ol>
                <li>
                  <div>
                    <time>1889</time>
                    Brothers Andre and Edouard Michelin founded their eponymous tire company. In order to help motorists develop their trips - thereby boosting car sales and in turn, tire purchases - the Michelin brothers produced a small guide filled with handy information for travellers, especially, a listing of places to eat or take shelter for the night.
                  </div>
                </li>

                <li>
                  <div>
                    <time>1920 - 1926</time>
                    A brand new MICHELIN Guide was launched and sold for seven francs based on the principle that “man only truly respects what he pays for.” The guide began to award stars for fine dining establishments, initially marking them only with a single star.
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
                    <time>1940 - Today</time>
                    The MICHELIN Guides became best-sellers without equals. The remarkable foresight of the founding Michelin brothers has given the company a vocation to make driving, tourism and the search for unforgettable experiences available to all.
                  </div>
                </li>

                <li></li>

              </ol>

            </div><!-- .content -->

       </div><!-- .container -->
    </section>

    <!-- Third Section -->
    <section id="third">
        <div class="container">

            <h1>Assessment Criteria and Core Values</h1>


            <div class="content wells">
              	<h2>Assessment Criteria</h2>
            	<p>To maintain the independence of their opinion, the inspectors always dine out anonymously, pay for their meals, and subsequently rate their experience according to five publicly acknowledged assessment criteria:</p>
           		<ul>
            		<li>Quality of the products</li>
					<li>Mastery of flavour and cooking techniques</li>
					<li>The personality of the chef in his cuisine</li>
					<li>Value for money</li>
					<li>Consistency between visits</li>
            	</ul>


           		<h2>Core Values</h2>

           	    <section>
           	 		<h3>Anonymity</h3>
            		<p>Although our "inspectors" work for the Michelin guide, they are above all customers like any other, testing restaurants in complete anonymity in order to ensure that they do not receive any special treatment.</p>
        		</section>

        		<section>
					<h3>Independence</h3>
            		<p>All our inspectors are employees of the Michelin group, who always pay for their meals in the restaurants they are testing to ensure that they do not receive any special treatment</p>
       	 		</section>

       	 		<section>
            		<h3>Expertise</h3>
            		<p>Our inspectors are also real experts in the catering and hospitality industries, sectors in which many of them have previously worked.</p>
        		</section>
			
				<section>
            		<h3>Reliability</h3>
            		<p>The different categories awarded by the guide are never just the result of one person's judgement; they are formed by a collective decision which is the result of a long process.</p>
        		</section>
			
				<section>
					<h3>Passion</h3>
           		 	<p>What would be the point of so much work and such a strict approach if our inspectors did not enjoy eating?</p>
        		</section>
        	
        		<section>    	
            		<h3>Quality</h3>
            		<p>Any restaurant can be recommended by our guide as long as its food is of high quality.</p>
        		</section>

        </div><!-- .content -->
   
       </div><!-- .container -->
    </section>

    <!-- Forth Section -->
    <section id="forth">
        <div class="container">

            <h1>Three-Star Michelin Restaurants</h1>

            <div class="inner-container">

            <div class="map">
            	
            	<?php include "map.php";?>

            </div>

            <div class="content">

            	<?php include "restaurantlist.php";?>

            </div><!-- .content -->

            </div>

       </div><!-- .container -->
    </section>

    <section id="fifth">
        <div class="container">



            <div class="content">

              <h1>Take The Survey</h1>

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

</script>
</body>
</html>