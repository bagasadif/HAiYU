var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');

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

function generateQuiz(questions, quizContainer, resultsContainer) {

    function showQuestions(questions, quizContainer) {
        // we'll need a place to store the output and the answer choices
        var output = [];
        var answers;

        // for each question...
        for (var i = 0; i < questions.length; i++) {

            // first reset the list of answers
            answers = [];

            // for each available answer to this question...
            for (letter in questions[i].answers) {

                // ...add an html radio button
                answers.push(
                    '<label>'
                    + '<span id="hide">' + '-- ' + '</span>'
                    + '<input type="radio" name="question' + i + '" value="' + letter + '" disabled>'
                    + questions[i].answers[letter]
                    + '</label>'
                );
            }

            // Tampilin jawaban yang benernya
            answers.push(
                '<p>'
                + '<span id="hide">' + '-- ' + '</span>'
                + 'Correct answer : '
                + questions[i].answers[questions[i].correctAnswer]
                + '</p>'
            )

            // add this question and its answers to the output
            output.push(
                '<div class="question">' + (i + 1) + '. ' + questions[i].question + '</div>'
                + '<div class="answers">' + answers.join('') + '</div>'
            );
        }

        // finally combine our output list into one string of html and put it on the page
        quizContainer.innerHTML = output.join('');
    }

    showQuestions(questions, quizContainer);
}

generateQuiz(myQuestions, quizContainer, resultsContainer);

