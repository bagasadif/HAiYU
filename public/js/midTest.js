function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');

var myQuestions = [
	{
		question: "What is 10/2 ?",
		answers: {
			a: '3',
			b: '5',
            c: '115',
            d: '2',
            e: '10',
		},
		correctAnswer: 'b'
	},
	{
		question: "What is 30/3 ?",
		answers: {
			a: '3',
			b: '5',
            c: '10',
            d: '30',
            e: '3',
		},
		correctAnswer: 'c'
    },
    {
		question: "What is 1+1+1+1+1+1x0 ?",
		answers: {
			a: '0',
			b: '1',
            c: '5',
            d: '6',
            e: '7',
		},
		correctAnswer: 'c'
    },
    {
		question: "The following number who defined as rational is ?",
		answers: {
			a: 'e',
			b: 'γ',
            c: 'π',
            d: '√8 ',
            e: '√9 ',
		},
		correctAnswer: 'e'
    },
    {
		question: "If x = √4 then x = ?",
		answers: {
			a: 'x = 2',
			b: 'x = -2',
            c: 'x = 2 or x = -2',
            d: 'x = 4 ',
            e: 'x = -4',
		},
		correctAnswer: 'a'
	},
];

function generateQuiz(questions, quizContainer, resultsContainer, submitButton){

	function showQuestions(questions, quizContainer){
        // we'll need a place to store the output and the answer choices
        var output = [];
        var answers;
    
        // for each question...
        for(var i=0; i<questions.length; i++){
            
            // first reset the list of answers
            answers = [];
    
            // for each available answer to this question...
            for(letter in questions[i].answers){
    
                // ...add an html radio button
                answers.push(
                    '<label>'
                        + '<span id="hide">' + '-- ' + '</span>' 
                        + '<input type="radio" name="question'+i+'" value="'+letter+'">'
                        + questions[i].answers[letter]
                    + '</label>'
                );
            }
    
            // add this question and its answers to the output
            output.push(
                '<div class="question">' + (i+1) + '. ' + questions[i].question + '</div>'
                + '<div class="answers">' + answers.join('') + '</div>'
            );
        }
    
        // finally combine our output list into one string of html and put it on the page
        quizContainer.innerHTML = output.join('');
    }

	function showResults(questions, quizContainer, resultsContainer){
	
        // gather answer containers from our quiz
        var answerContainers = quizContainer.querySelectorAll('.answers');
        
        // keep track of user's answers
        var userAnswer = '';
        var numCorrect = 0;
        
        // for each question...
        for(var i=0; i<questions.length; i++){
    
            // find selected answer
            userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;
            
            // if answer is correct
            if(userAnswer===questions[i].correctAnswer){
                // add to the number of correct answers
                numCorrect++;
                
                // color the answers green
                // answerContainers[i].style.color = 'lightgreen';
            }
            // if answer is wrong or blank
            else{
                // color the answers red
                // answerContainers[i].style.color = 'red';
            }
        }
    
        // show number of correct answers out of total
        // resultsContainer.innerHTML = 'Score : ' + numCorrect + ' out of ' + questions.length;

        // Pasang cookie score biar dimasukin ke database
        setCookie('score', numCorrect, 1);
    }

	// show the questions
	showQuestions(questions, quizContainer);

	// when user clicks submit, show results
	submitButton.onclick = function(){
        var submitted = confirm('Are you sure want to submit ? ');
        if (submitted){
        showResults(questions, quizContainer, resultsContainer);
        }
	}
}

generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);

