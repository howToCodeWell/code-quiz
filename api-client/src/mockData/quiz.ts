import {QuizDTO} from "../model/QuizDTO"
import HTMLQuiz from "./htmlQuiz/htmlQuiz";
import JavaScriptQuiz from "./javaScriptQuiz/javaScriptQuiz";

const quiz: QuizDTO[] = [
    HTMLQuiz, JavaScriptQuiz
]

export default quiz