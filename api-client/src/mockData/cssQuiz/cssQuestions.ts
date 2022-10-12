import {QuestionJsonldQuestionRead} from "../../generated/openapi"

const CSSQuestions: QuestionJsonldQuestionRead[] = [
    {
        '@context': "/api/v1/contexts/Question",
        '@id': "/api/v1/question/1",
        '@type': "Question",
        content: "How many padding properties are there in CSS?",
        answers: [
            {
                '@id': "/api/v1/answers/1",
                '@type': "Answer",
                content: "3",
                is_correct: false,
            },
            {
                '@id': "/api/v1/answers/2",
                '@type': "Answer",
                content: "4",
                is_correct: false,
            },
            {
                '@id': "/api/v1/answers/3",
                '@type': "Answer",
                content: "5",
                is_correct: true,
            },
        ],
    },
    {
        '@context': "/api/v1/contexts/Question",
        '@id': "/api/v1/question/2",
        '@type': "Question",
        content: "In CSS which rule overrides a previous style?",
        answers: [
            {
                '@id': "/api/v1/answers/4",
                '@type': "Answer",
                content: "important",
                is_correct: false,
            },
            {
                '@id': "/api/v1/answers/5",
                '@type': "Answer",
                content: "!important",
                is_correct: true,
            },
            {
                '@id': "/api/v1/answers/6",
                '@type': "Answer",
                content: "important!",
                is_correct: false,
            },
        ],
    },
    {
        '@context': "/api/v1/contexts/Question",
        '@id': "/api/v1/question/3",
        '@type': "Question",
        content: "In CSS which property controls the text font?",
        answers: [
            {
                '@id': "/api/v1/answers/7",
                '@type': "Answer",
                content: "font-face",
                is_correct: false,
            },
            {
                '@id': "/api/v1/answers/8",
                '@type': "Answer",
                content: "font",
                is_correct: false,
            },
            {
                '@id': "/api/v1/answers/9",
                '@type': "Answer",
                content: "font-family",
                is_correct: true,
            },
            {
                '@id': "/api/v1/answers/10",
                '@type': "Answer",
                content: "font-style",
                is_correct: false,
            },
        ],
    },
    {
        '@context': "/api/v1/contexts/Question",
        '@id': "/api/v1/question/4",
        '@type': "Question",
        content: "What controls a repeating background in CSS?",
        answers: [
            {
                '@id': "/api/v1/answers/11",
                '@type': "Answer",
                content: "background: repeat",
                is_correct: false,
            },
            {
                '@id': "/api/v1/answers/12",
                '@type': "Answer",
                content: "image-repeat: repeat",
                is_correct: false,
            },
            {
                '@id': "/api/v1/answers/13",
                '@type': "Answer",
                content: "repeat-background: repeat",
                is_correct: true,
            },
            {
                '@id': "/api/v1/answers/14",
                '@type': "Answer",
                content: "background-repeat: repeat",
                is_correct: false,
            },
        ],
    },
    {
        '@context': "/api/v1/contexts/Question",
        '@id': "/api/v1/question/5",
        '@type': "Question",
        content: "In #css how would you remove an underline from a hyperlink?",
        answers: [
            {
                '@id': "/api/v1/answers/15",
                '@type': "Answer",
                content: "underline: none",
                is_correct: false,
            },
            {
                '@id': "/api/v1/answers/16",
                '@type': "Answer",
                content: "text-underline: none",
                is_correct: false,
            },
            {
                '@id': "/api/v1/answers/17",
                '@type': "Answer",
                content: "text-decoration: none",
                is_correct: true,
            },
        ],
    },
]

export default CSSQuestions