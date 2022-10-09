import {QuizJsonldRead} from "../../generated/openapi"

const javaScriptQuiz: QuizJsonldRead =
{
    '@context': "/api/v1/contexts/Quiz",
    '@id': "/api/v1/quiz/3",
    '@type': "Quiz",
    title: "JavaScript Quiz",
    slug: 'javascript-quiz',
    questions: [
        "/api/v1/question/10",
        "/api/v1/question/11",
        "/api/v1/question/12",
        "/api/v1/question/13",
        "/api/v1/question/14"
    ]
}

export default javaScriptQuiz