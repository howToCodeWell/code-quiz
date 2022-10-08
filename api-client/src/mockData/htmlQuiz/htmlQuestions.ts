import {QuestionJsonldQuestionRead} from "../../generated/openapi/src"

const HTMLQuestions: QuestionJsonldQuestionRead[] = [
    {
        context: "/api/v1/contexts/Question",
        id: "/api/v1/question/1",
        type: "Question",
        content: "What is the <aside> tag for?",
        answers: [
            {
                id: "/api/v1/answers/1",
                type: "Answer",
                content: "Primary content",
                isCorrect: false,
            },
            {
                id: "/api/v1/answers/2",
                type: "Answer",
                content: "Empty content",
                isCorrect: false,
            },
            {
                id: "/api/v1/answers/3",
                type: "Answer",
                content: "Indirectly related content",
                isCorrect: true,
            },
        ],
    },
    {
        context: "/api/v1/contexts/Question",
        id: "/api/v1/question/2",
        type: "Question",
        content: "How many HTML heading levels are there?",
        answers: [
            {
                id: "/api/v1/answers/4",
                type: "Answer",
                content: "Primary content",
                isCorrect: false,
            },
            {
                id: "/api/v1/answers/5",
                type: "Answer",
                content: "Answer",
                isCorrect: true,
            },
            {
                id: "/api/v1/answers/6",
                type: "Answer",
                content: "Indirectly related content",
                isCorrect: false,
            },
            {
                id: "/api/v1/answers/7",
                type: "Answer",
                content: "Unlimited",
                isCorrect: false,
            },
        ],
    },
]

export default HTMLQuestions