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

    function myFunction1(elementId1) {
      if (elementId1 == 'uk1') {var x = "United Kingdom"}
      else if (elementId1 == 'switzerland1') {var x = "Switzerland"}
      else if (elementId1 == 'netherlands1') {var x = "Netherlands"}
      else if (elementId1 == 'us1') {var x = "United States"}  
      else if (elementId1 == 'japan1') {var x = "Japan"}
      else if (elementId1 == 'norway1') {var x = "Norway"}
      else if (elementId1 == 'sweden1') {var x = "Sweden"}
      else if (elementId1 == 'spain1') {var x = "Spain"}
      else if (elementId1 == 'south-korea1') {var x = "South Korea"}
      else if (elementId1 == 'china1') {var x = "China"}
      else if (elementId1 == 'germany1') {var x = "Germany"}
      else if (elementId1 == 'france1') {var x = "France"}
      else if (elementId1 == 'denmark1') {var x = "Denmark"}
      else if (elementId1 == 'austria1') {var x = "Austria"}
      else if (elementId1 == 'italy1') {var x = "Italy"}
      document.getElementById("countryName").innerHTML = x;
    }

</script>