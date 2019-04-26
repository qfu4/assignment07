

<?php include "inc/html-top.inc";?>

    <form method="post" action="form-processor.php">
    	<fieldset>
    		<legend>Personal Information</legend>
    		<label for="name">Name:</label><input type="text" name="name" id="name" placeholder="Full Name">
    		<label for="email">E-mail:</label><input type="email" name="email" id="email" placeholder="email@example.com"> 
            <label for="address">Address:</label><input type="address" name="address" id="address" placeholder="Rochester">
    	</fieldset>

    	<fieldset>
    		<legend>Questions</legend>
    		<h3>Have you ever heard of Michelin restaurant guides before?</h3>
    			<input type="radio" name="favorite1" id="yes-heard" value="Yes"><label for="yes-heard">Yes</label>
    			<input type="radio" name="favorite1" id="no-heard" value="No"><label for="no-heard">No</label>

    		<h3>Do you consider yourself as a foodie?</h3>
    			<input type="radio" name="favorite2" id="yes-foodie" value="Yes"><label for="yes-foodie">Yes</label>
    			<input type="radio" name="favorite2" id="no-foodie" value="No"><label for="no-foodie">No</label>

    		<h3>After reviewing our introduction, do you think Michelin restaurant guide is reliable or not?</h3>
    			<input type="radio" name="favorite3" id="reliable" value="Reliable"><label for="reliable">Reliable</label>
    			<input type="radio" name="favorite3" id="neutral" value="Neutral"><label for="neutral">Neutral</label>
    			<input type="radio" name="favorite3" id="not-reliable" value="Not Reliable"><label for="not-reliable">Not Reliable</label>

    		<h3>Will you try a Michelin restaurant in the future?</h3>
    			<input type="radio" name="favorite4" id="try" value="Yes"><label for="try">Yes</label>
    			<input type="radio" name="favorite4" id="unsure" value="Unsure"><label for="unsure">Unsure</label>
    			<input type="radio" name="favorite4" id="not-try" value="No"><label for="not-try">No</label>


    		<h3>On scale of 0 ~ 5, how helpful do you think our website is?</h3>
    			<input type="radio" name="score" id="score-0" value="0"><label for="score-0">0</label>
    			<input type="radio" name="score" id="score-1" value="1"><label for="score-1">1</label>
    			<input type="radio" name="score" id="score-2" value="2"><label for="score-2">2</label>
    			<input type="radio" name="score" id="score-3" value="3"><label for="score-3">3</label>
    			<input type="radio" name="score" id="score-4" value="4"><label for="score-4">4</label>
    			<input type="radio" name="score" id="score-5" value="5"><label for="score-5">5</label>
    	</fieldset>
        
    	<input name="send" type="submit" value="Submit!">
        <a href="login.php">Login as an administrative</a>
    </a>

    </form>
</body>
</html>