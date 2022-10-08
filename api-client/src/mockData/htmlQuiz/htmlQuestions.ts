import {Question} from "../../generated/openapi/src"
import {HTMLAnswerOne, HTMLAnswerTwo} from "./htmlAnswers";

const HTMLQuestions: Question[] = [
    {
        id: 1,
        content: "What is the <aside> tag for?",
        answers: HTMLAnswerOne,
    },
    {
        id: 2,
        content: "How many HTML heading levels are there?",
        answers: HTMLAnswerTwo,
    },
]

export default HTMLQuestions