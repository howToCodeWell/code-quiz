import htmlQuiz from "./htmlQuiz/htmlQuiz";
import htmlQuestions from "./htmlQuiz/htmlQuestions";
import pythonQuiz from "./pythonQuiz/pythonQuiz";
import pythonQuestions from "./pythonQuiz/pythonQuestions";
import JavaScriptQuiz from "./javaScriptQuiz/javaScriptQuiz";
import javaScriptQuestions from "./javaScriptQuiz/javaScriptQuestions";
import cssQuiz from "./cssQuiz/cssQuiz";
import cssQuestions from "./cssQuiz/cssQuestions";


const data = {
    quiz: [
        htmlQuiz,
        JavaScriptQuiz,
        pythonQuiz,
        cssQuiz,
    ],
    question: [
        ...htmlQuestions,
        ...javaScriptQuestions,
        ...pythonQuestions,
        ...cssQuestions
    ]
}

export default data