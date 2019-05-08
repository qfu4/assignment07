<?php $nav = 'css/surveynav.css'; ?>
<?php include "inc/navhtml-top.php";?>
<div class="surveyContainer" id="surveyContainer">
    
     <form method="post" action="form-processor.php" >
   <!--  <form method="post" action="include.php"> -->
   
    

        <h2>Let's get to know about you</h2>

    	<fieldset class="ps">

<<<<<<< HEAD
    		<legend>Personal Information</legend>
    		<label for="name">Name</label><br><input type="text" name="name" id="name" placeholder="Full Name"><br>
    		<label for="email">E-mail</label><br><input type="email" name="email" id="email" placeholder="email@example.com"><br>
            <label for="email">Your City</label><br><input type="text" name="address" id="city" placeholder="Rochester"><br>
=======
    		<legend>Personal Information 个人信息</legend>
    		<label for="name">Name 名字</label><br><input type="text" name="name" id="name" placeholder="Full Name 全名"><br>
    		<label for="email">E-mail 邮箱</label><br><input type="email" name="email" id="email" placeholder="email@example.com"><br>
            <label for="address">Your City 你的城市</label><br><input type="text" name="address" id="address" placeholder="Rochester 罗切斯特"><br>
>>>>>>> 1261086641dd5cbdf7acac9b4a0dfbc43a315f95

    	</fieldset>

    	<fieldset class="questions">
    		<legend>Questions 问题</legend>
    		<h3>Have you ever heard of Michelin restaurant guides before? 你以前有听说过米其林餐厅指南吗？</h3>
                <div class="inputContainer">
                <div class="optionContainer">
    			<input type="radio" name="favorite1" id="yes-heard" value="Yes"><label for="yes-heard">Yes 有</label>
                </div>
                <div class="optionContainer">
    			<input type="radio" name="favorite1" id="no-heard" value="No"><label for="no-heard">No 没有</label>
                </div>
                </div>
    		<h3>Do you consider yourself as a foodie? 你认为自己是一个吃货吗？</h3>
                <div class="inputContainer">
                <div class="optionContainer">
    			<input type="radio" name="favorite2" id="yes-foodie" value="Yes"><label for="yes-foodie">Yes 是的</label>
                </div>
                <div class="optionContainer">
    			<input type="radio" name="favorite2" id="no-foodie" value="No"><label for="no-foodie">No 不是</label>
                </div>
                </div>
    		<h3>After reviewing our introduction, do you think Michelin restaurant guide is reliable or not? 从我们的网站了解了米其林餐厅指南后，你觉得米其林餐厅指南可靠吗？</h3>
                <div class="inputContainer">
                <div class="optionContainer">
    			<input type="radio" name="favorite3" id="reliable" value="Reliable"><label for="reliable">Reliable 可靠</label>
                </div>
                <div class="optionContainer">
    			<input type="radio" name="favorite3" id="neutral" value="Neutral"><label for="neutral">Neutral 保持中立</label>
                </div>
                <div class="optionContainer">
    			<input type="radio" name="favorite3" id="not-reliable" value="Not Reliable"><label for="not-reliable">Uneliable 不可靠</label>
                </div>
                </div>
    		<h3>Will you try a Michelin restaurant in the future? 未来你有打算尝试米其林餐厅指南推荐的餐厅吗？</h3>
                <div class="inputContainer">
                <div class="optionContainer">
    			<input type="radio" name="favorite4" id="try" value="Yes"><label for="try">Yes 有</label>
                </div>
                <div class="optionContainer">
    			<input type="radio" name="favorite4" id="unsure" value="Unsure"><label for="unsure">Unsure 不确定</label>
                </div>
                <div class="optionContainer">
    			<input type="radio" name="favorite4" id="not-try" value="No"><label for="not-try">No 没有</label>
                </div>
                </div>

    		<h3>On scale of 0 ~ 5, how helpful do you think our website is? 从0-5，你认为我们的网站值多少分？</h3>
                <div class="inputContainer">
                <div class="optionContainer">
    			<input type="radio" name="score" id="score-0" value="0"><label for="score-0">0</label>
                </div>
                <div class="optionContainer">
    			<input type="radio" name="score" id="score-1" value="1"><label for="score-1">1</label>
                </div>
                <div class="optionContainer">
    			<input type="radio" name="score" id="score-2" value="2"><label for="score-2">2</label>
                </div>
                <div class="optionContainer">
    			<input type="radio" name="score" id="score-3" value="3"><label for="score-3">3</label>
                </div>
                <div class="optionContainer">
    			<input type="radio" name="score" id="score-4" value="4"><label for="score-4">4</label>
                </div>
                <div class="optionContainer">
    			<input type="radio" name="score" id="score-5" value="5"><label for="score-5">5</label>
                </div>
                </div>
    	</fieldset>

        <div class="submit">
    	   <button name="send" type="submit" value="Submit!" onclick="required()">Submit！提交!</button>
        </div>

    </form>


</div>

<?php include "inc/footer.php";?>

<?php include "inc/js.php";?>

</body>
</html>