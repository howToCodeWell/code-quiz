
import {QuestionJsonldQuestionRead} from "../../generated/openapi/src"

const PythonQuestions: QuestionJsonldQuestionRead[] = [
    {
        context: "/api/v1/contexts/Question",
        id: "/api/v1/question/5",
        type: "Question",
        content: "Are Python Tuples mutable",
        answers: [
            {
                id: "/api/v1/answers/1",
                type: "Answer",
                content: "Yes",
                isCorrect: false,
            },
            {
                id: "/api/v1/answers/2",
                type: "Answer",
                content: "No",
                isCorrect: true,
            }
        ],
    },
    {
        context: "/api/v1/contexts/Question",
        id: "/api/v1/question/6",
        type: "Question",
        content: "What is __init__ in Python?",
        answers: [
            {
                id: "/api/v1/answers/4",
                type: "Answer",
                content: "Install method",
                isCorrect: false,
            },
            {
                id: "/api/v1/answers/5",
                type: "Answer",
                content: "Constructor method",
                isCorrect: true,
            },
            {
                id: "/api/v1/answers/6",
                type: "Answer",
                content: "Proxy method",
                isCorrect: false,
            },
            {
                id: "/api/v1/answers/6",
                type: "Answer",
                content: "Destructor method",
                isCorrect: false,
            },
        ],
    },
    {
        context: "/api/v1/contexts/Question",
        id: "/api/v1/question/7",
        type: "Question",
        content: "What do Python generators create?",
        answers: [
            {
                id: "/api/v1/answers/4",
                type: "Answer",
                content: "Iterator objects",
                isCorrect: false,
            },
            {
                id: "/api/v1/answers/5",
                type: "Answer",
                content: "A boolean",
                isCorrect: true,
            },
            {
                id: "/api/v1/answers/6",
                type: "Answer",
                content: "A function",
                isCorrect: false,
            },
            {
                id: "/api/v1/answers/6",
                type: "Answer",
                content: "Nothing",
                isCorrect: false,
            },
        ],
    },
    {
        context: "/api/v1/contexts/Question",
        id: "/api/v1/question/8",
        type: "Question",
        content: "What does PEP stand for in Python? Python _________ _________",
        answers: [
            {
                id: "/api/v1/answers/4",
                type: "Answer",
                content: "Empty path",
                isCorrect: false,
            },
            {
                id: "/api/v1/answers/5",
                type: "Answer",
                content: "Emergency process",
                isCorrect: true,
            },
            {
                id: "/api/v1/answers/6",
                type: "Answer",
                content: "Enhancement process",
                isCorrect: false,
            },
            {
                id: "/api/v1/answers/6",
                type: "Answer",
                content: "Enhancement proposal",
                isCorrect: false,
            },
        ],
    },
    {
        context: "/api/v1/contexts/Question",
        id: "/api/v1/question/9",
        type: "Question",
        content: "How many expressions can a Python Lambda function have?",
        answers: [
            {
                id: "/api/v1/answers/29",
                type: "Answer",
                content: "3",
                isCorrect: false,
            },
            {
                id: "/api/v1/answers/30",
                type: "Answer",
                content: "2",
                isCorrect: true,
            },
            {
                id: "/api/v1/answers/31",
                type: "Answer",
                content: "1",
                isCorrect: true,
            },
            {
                id: "/api/v1/answers/32",
                type: "Answer",
                content: "any",
                isCorrect: false,
            },
        ],
    },
]

export default PythonQuestions