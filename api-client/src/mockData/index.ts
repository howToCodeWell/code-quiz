import htmlQuiz from "./htmlQuiz/htmlQuiz";
import htmlQuestions from "./htmlQuiz/htmlQuestions";
import pythonQuiz from "./pythonQuiz/pythonQuiz";
import pythonQuestions from "./pythonQuiz/pythonQuestions";


const data = {
    quiz: [
        htmlQuiz,
        pythonQuiz
    ],
    question: [...htmlQuestions, ...pythonQuestions]
}

export default data