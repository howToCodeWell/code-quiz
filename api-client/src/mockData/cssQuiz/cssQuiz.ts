import {QuizJsonldRead} from "../../generated/openapi"

const CSSQuiz: QuizJsonldRead =
    {
        '@context': "/v1/contexts/Quiz",
        '@id': "/v1/quiz/4",
        '@type': "Quiz",
        title: "CSS Quiz",
        slug: 'css-quiz',
        questions: [
            "/v1/question/15",
            "/v1/question/16",
            "/v1/question/17",
            "/v1/question/18",
            "/v1/question/19",            
        ]
    }


export default CSSQuiz