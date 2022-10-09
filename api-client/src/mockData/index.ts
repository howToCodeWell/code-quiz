import htmlQuiz from "./htmlQuiz/htmlQuiz";
import htmlQuestions from "./htmlQuiz/htmlQuestions";
import pythonQuiz from "./pythonQuiz/pythonQuiz";
import pythonQuestions from "./pythonQuiz/pythonQuestions";
import JavaScriptQuiz from "./javaScriptQuiz/javaScriptQuiz";
import javaScriptQuestions from "./javaScriptQuiz/javaScriptQuestions";


const data = {
    quiz: [
        htmlQuiz,
        JavaScriptQuiz,
        pythonQuiz,
    ],
    question: [...htmlQuestions, ...javaScriptQuestions, ...pythonQuestions]
}

export default data