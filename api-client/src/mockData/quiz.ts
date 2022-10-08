import {QuizJsonldRead} from "../generated/openapi/src"
import HTMLQuiz from "./htmlQuiz/htmlQuiz";
import PythonQuiz from "./pythonQuiz/pythonQuiz";
import JavaScriptQuiz from "./javaScriptQuiz/javaScriptQuiz";

const quiz: QuizJsonldRead[] = [
    HTMLQuiz,
    PythonQuiz,
    // JavaScriptQuiz
]

export default quiz