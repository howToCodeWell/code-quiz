import {Quiz} from "../generated/openapi/src"
import HTMLQuiz from "./htmlQuiz/htmlQuiz";
import JavaScriptQuiz from "./javaScriptQuiz/javaScriptQuiz";
import PythonQuiz from "./pythonQuiz/pythonQuiz";

const quiz: Quiz[] = [
    HTMLQuiz,
    // JavaScriptQuiz,
    // PythonQuiz
]

export default quiz