import {QuizJsonldRead} from "../../generated/openapi"

const CSSQuiz: QuizJsonldRead =
    {
        '@context': "/api/v1/contexts/Quiz",
        '@id': "/api/v1/quizzes",
        '@type': "Quiz",
        title: "CSS Quiz",
        slug: 'css-quiz',
        questions: [
            "/api/v1/question/1",
            "/api/v1/question/2",
            "/api/v1/question/3",
            "/api/v1/question/4",
            "/api/v1/question/5",            
        ]
    }


export default CSSQuiz