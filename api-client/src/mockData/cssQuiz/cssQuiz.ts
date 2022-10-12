import {QuizJsonldRead} from "../../generated/openapi"

const CSSQuiz: QuizJsonldRead =
    {
        '@context': "/api/v1/contexts/Quiz",
        '@id': "/api/v1/quiz/4",
        '@type': "Quiz",
        title: "CSS Quiz",
        slug: 'css-quiz',
        questions: [
            "/api/v1/question/15",
            "/api/v1/question/16",
            "/api/v1/question/17",
            "/api/v1/question/18",
            "/api/v1/question/19",            
        ]
    }


export default CSSQuiz