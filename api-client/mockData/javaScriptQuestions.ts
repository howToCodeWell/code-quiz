import {QuestionDTO} from "../api-models"
import {JavaScriptAnswerOne, JavaScriptAnswerTwo, JavaScriptAnswerThree, JavaScriptAnswerFour, JavaScriptAnswerFive, JavaScriptAnswerSix} from "./javaScriptAnswers";

const JavaScriptQuestions: QuestionDTO[] = [
    {
        id: "1",
        content: "How many types of popup boxes does JavaScript have?",
        answers: JavaScriptAnswerOne,
    },
    {
        id: "2",
        content: "What is a callback function in JavaScript?",
        answers: JavaScriptAnswerTwo,
    },
    {
        id: "3",
        content: "What does ‘this’ refer to in a JavaScript object method?",
        answers: JavaScriptAnswerThree,
    },
    {
        id: "4",
        content: "Is JavaScript a case sensitive programming language?",
        answers: JavaScriptAnswerFour,
    },
    {
        id: "5",
        content: "How many kinds of loops are there in JavaScript?",
        answers: JavaScriptAnswerFive,
    },
    {
        id: "6",
        content: "Which HTML elements contain JavaScript?",
        answers: JavaScriptAnswerSix,
    },
]

export default JavaScriptQuestions