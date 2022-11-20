import {QuizJsonldRead} from "../../generated/openapi"

const PythonQuiz: QuizJsonldRead =
    {
        '@context': "/v1/contexts/Quiz",
        '@id': "/v1/quiz/3",
        '@type': "Quiz",
        title: "Python Quiz",
        slug: 'python-quiz',
        questions: [
            "/v1/question/5",
            "/v1/question/6",
            "/v1/question/7",
            "/v1/question/8",
            "/v1/question/9"
        ]
    }


export default PythonQuiz