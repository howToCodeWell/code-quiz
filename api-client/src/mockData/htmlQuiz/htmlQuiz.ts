import {
    QuizJsonldRead,
} from "../../generated/openapi/src"

const HTMLQuiz: QuizJsonldRead =
    {
        context: "/api/v1/contexts/Quiz",
        id: "/api/v1/quizzes",
        type: "Quiz",
        title: "HTML Quiz",
        slug: 'html-quiz',
        questions: [
            "/api/v1/question/1",
            "/api/v1/question/2"
        ]
    }


export default HTMLQuiz