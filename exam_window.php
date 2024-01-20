<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exam Window</title>

	<link rel="stylesheet" type="text/css" href="css/exam_window.css">

</head>
<body>
	<header>
		<img src="images/logo.png">

		<h1>Online Examination System</h1>

		<div class="timer-container">
			<span class="minutes" >00</span>
			<span class="dot">:</span>
			<span class="seconds">12</span>
			

			<a href="exam_window.php">
				<button class="btn">Submit</button>
			</a>
		</div>
	</header>


	<main class="flex">
		<div class="title-container">
			<h3 class="title">MongoDB Assessment</h3>
		</div>

		<div class="question-container">
			<p class="question">This is question</p>
		</div>

		<label for="radio_btn_a">
			<span class="option-container">
				<input type="radio" id="radio_btn_a" name="question">
				<span id="option_a">This is option a</span>
			</span>
		</label>

		<label for="radio_btn_b">
			<span class="option-container">
				<input type="radio" id="radio_btn_b" name="question">
				<span id="option_b">This is option b</span>
			</span>
		</label>

		<label for="radio_btn_c">
			<span class="option-container">
				<input type="radio" id="radio_btn_c" name="question">
				<span id="option_c">This is option c</span>
			</span>
		</label>

		<label for="radio_btn_d">
			<span class="option-container">
				<input type="radio" id="radio_btn_d" name="question">
				<span id="option_d">This is option d</span>
			</span>
		</label>

		<div class="btn-container">
			<button class="btn">Prev</button>

			<div class="question-count">
				<span>Ques : </span>
				<span id="currentQuestionId">00</span>
				/
				<span id="totalQuestions">12</span>
			</div>


			<button class="btn">Next</button>
		</div>
	</main>



</body>
</html>