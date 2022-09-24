import {QuizDTO} from "../api-models"
import HTMLQuestions from "./htmlQuestions"
import JavaScriptQuestions from "./javaScriptQuestions"

const quiz: QuizDTO[] = [
    {
        id: "1",
        title: "HTML Quiz",
        slug: 'html-quiz',
        questions: HTMLQuestions
    },
    {
        id: "2",
        title: "JavaScript Quiz",
        slug: 'javascript-quiz',
        questions: JavaScriptQuestions
    },
    {
        id: "3",
        title: "CSS Quiz",
        slug: 'css-quiz',
        questions: []
    },

]

export default quiz