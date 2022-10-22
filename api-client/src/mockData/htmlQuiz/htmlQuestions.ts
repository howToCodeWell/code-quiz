import {QuestionJsonldQuestionRead} from "../../generated/openapi"

const HTMLQuestions: QuestionJsonldQuestionRead[] = [
    {
        '@context': "/v1/contexts/Question",
        '@id': "/v1/question/1",
        '@type': "Question",
        content: "What is the <aside> tag for?",
        answers: [
            {
                '@id': "/v1/answers/1",
                '@type': "Answer",
                content: "Primary content",
                is_correct: false,
            },
            {
                '@id': "/v1/answers/2",
                '@type': "Answer",
                content: "Empty content",
                is_correct: false,
            },
            {
                '@id': "/v1/answers/3",
                '@type': "Answer",
                content: "Indirectly related content",
                is_correct: true,
            },
        ],
    },
    {
        '@context': "/v1/contexts/Question",
        '@id': "/v1/question/2",
        '@type': "Question",
        content: "How many HTML heading levels are there?",
        answers: [
            {
                '@id': "/v1/answers/4",
                '@type': "Answer",
                content: "Primary content",
                is_correct: false,
            },
            {
                '@id': "/v1/answers/5",
                '@type': "Answer",
                content: "Answer",
                is_correct: true,
            },
            {
                '@id': "/v1/answers/6",
                '@type': "Answer",
                content: "Indirectly related content",
                is_correct: false,
            },
            {
                '@id': "/v1/answers/7",
                '@type': "Answer",
                content: "Unlimited",
                is_correct: false,
            },
        ],
    },
]

export default HTMLQuestions