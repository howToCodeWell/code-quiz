import {QuizJsonldRead} from "../../generated/openapi"

const javaScriptQuiz: QuizJsonldRead =
{
    '@context': "/v1/contexts/Quiz",
    '@id': "/v1/quiz/3",
    '@type': "Quiz",
    title: "JavaScript Quiz",
    slug: 'javascript-quiz',
    questions: [
        "/v1/question/10",
        "/v1/question/11",
        "/v1/question/12",
        "/v1/question/13",
        "/v1/question/14"
    ]
}

export default javaScriptQuiz