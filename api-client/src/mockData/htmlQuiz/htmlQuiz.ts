import {
    QuizJsonldRead
} from "../../generated/openapi"

const HTMLQuiz: QuizJsonldRead =
    {
        '@context': "/v1/contexts/Quiz",
        '@id': "/v1/quizzes",
        '@type': "Quiz",
        title: "HTML Quiz",
        slug: 'html-quiz',
        questions: [
            "/v1/question/1",
            "/v1/question/2"
        ]
    }


export default HTMLQuiz