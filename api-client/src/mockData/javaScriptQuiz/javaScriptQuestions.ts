import {QuestionJsonldQuestionRead} from "../../generated/openapi"

const PythonQuestions: QuestionJsonldQuestionRead[] = [
    {
        '@context': "/v1/contexts/Question",
        '@id': "/v1/question/5",
        '@type': "Question",
        content: "How many types of popup boxes does JavaScript have?",
        answers: [
            {
                '@id': "/v1/answers/1",
                '@type': "Answer",
                content: "1",
                is_correct: false,
            },
            {
                '@id': "/v1/answers/2",
                '@type': "Answer",
                content: "2",
                is_correct: false,
            },
            {
                '@id': "/v1/answers/2",
                '@type': "Answer",
                content: "3",
                is_correct: true,
            },
            {
                '@id': "/v1/answers/2",
                '@type': "Answer",
                content: "4",
                is_correct: false,
            }
        ],
    },
    {
        '@context': "/v1/contexts/Question",
        '@id': "/v1/question/6",
        '@type': "Question",
        content: "What is a callback function in JavaScript?",
        answers: [
            {
                '@id': "/v1/answers/4",
                '@type': "Answer",
                content: "A function passed as arg",
                is_correct: false,
            },
            {
                '@id': "/v1/answers/5",
                '@type': "Answer",
                content: "Code that calls itself",
                is_correct: true,
            },
            {
                '@id': "/v1/answers/6",
                '@type': "Answer",
                content: "Global functions",
                is_correct: false,
            },
        ],
    },
    {
        '@context': "/v1/contexts/Question",
        '@id': "/v1/question/7",
        '@type': "Question",
        content: "What does ‘this’ refer to in a JavaScript object method?",
        answers: [
            {
                '@id': "/v1/answers/4",
                '@type': "Answer",
                content: "The object",
                is_correct: true,
            },
            {
                '@id': "/v1/answers/5",
                '@type': "Answer",
                content: "Private properties",
                is_correct: false,
            },
            {
                '@id': "/v1/answers/6",
                '@type': "Answer",
                content: "Inherited properties",
                is_correct: false,
            },
        ],
    },
    {
        '@context': "/v1/contexts/Question",
        '@id': "/v1/question/8",
        '@type': "Question",
        content: "Is JavaScript a case sensitive programming language?",
        answers: [
            {
                '@id': "/v1/answers/4",
                '@type': "Answer",
                content: "Yes",
                is_correct: false,
            },
            {
                '@id': "/v1/answers/5",
                '@type': "Answer",
                content: "No",
                is_correct: true,
            },
        ],
    },
    {
        '@context': "/v1/contexts/Question",
        '@id': "/v1/question/9",
        '@type': "Question",
        content: "How many kinds of loops are there in JavaScript?",
        answers: [
            {
                '@id': "/v1/answers/29",
                '@type': "Answer",
                content: "3",
                is_correct: false,
            },
            {
                '@id': "/v1/answers/30",
                '@type': "Answer",
                content: "5",
                is_correct: true,
            },
            {
                '@id': "/v1/answers/31",
                '@type': "Answer",
                content: "7",
                is_correct: true,
            },
            {
                '@id': "/v1/answers/32",
                '@type': "Answer",
                content: "2",
                is_correct: false,
            },
        ],
    },
    {
        '@context': "/v1/contexts/Question",
        '@id': "/v1/question/9",
        '@type': "Question",
        content: "Which HTML elements contain JavaScript?",
        answers: [
            {
                '@id': "/v1/answers/29",
                '@type': "Answer",
                content: "<JavaScript>",
                is_correct: false,
            },
            {
                '@id': "/v1/answers/30",
                '@type': "Answer",
                content: "<script>",
                is_correct: true,
            },
            {
                '@id': "/v1/answers/31",
                '@type': "Answer",
                content: "<js>",
                is_correct: true,
            },
        ],
    },
]

export default PythonQuestions