import {QuizDTO} from "../model/QuizDTO"
import HTMLQuiz from "./htmlQuiz/htmlQuiz";
import JavaScriptQuiz from "./javaScriptQuiz/javaScriptQuiz";
import PythonQuiz from "./pythonQuiz/pythonQuiz";

const quiz: QuizDTO[] = [
    HTMLQuiz, JavaScriptQuiz, PythonQuiz
]

export default quiz