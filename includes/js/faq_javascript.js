/* FAQ MENU SCRIPTS */

currentMenu = "";
currentQuestion = "faq_default";

function displayMenu(menu) {
	currentTier1 = document.getElementById(currentMenu);
	currentMenu = document.getElementById(currentMenu + "_sub");
	if(currentMenu) {
		currentMenu.style.display = "none";
		currentTier1.className="";
	}
	newTier1 = document.getElementById(menu);
	newMenu = document.getElementById(menu + "_sub");
	if(newMenu) {
		if(currentMenu == newMenu) {
			currentMenu.style.display = "none";
			currentMenu = "";
			currentTier1.className="";
			displayQuestion("faq_default")
		} else {
			newMenu.style.display = "block";
			currentMenu = menu;
			newTier1.className="tier1_selected";
			displayQuestion("faq_default")
		}
	}
	window.scroll(0,0);
}

function displayQuestion(question) {
	currentLink = document.getElementById("link_" + currentQuestion);
	currentQuestionDiv = document.getElementById(currentQuestion);
	if(currentQuestionDiv) {
		if (currentQuestion != "faq_default") currentLink.className = "";
		currentQuestionDiv.style.display = "none";
	}
	newLink = document.getElementById("link_" + question);
	newQuestion = document.getElementById(question);
	if(newQuestion) {
		if(question != "faq_default") newLink.className = "selected";
		newQuestion.style.display = "block";
	}
	currentQuestion = question;
	window.scroll(0,0);
}

function displayAnswer(target) {
	question=document.getElementById("link_"+target);
	answer=document.getElementById(target);
	if (answer.className == "answer_hidden"){
		if(answer) question.className = "question_selected";
		if(answer) answer.className = "answer_visible";
	} else {
		if(answer) question.className = "question";
		if(answer) answer.className = "answer_hidden";
	}
	return false;
}

/* END FAQ MENU SCRIPTS */

