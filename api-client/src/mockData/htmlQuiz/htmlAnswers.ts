import {Answer} from "../../generated/openapi/src"

export const HTMLAnswerOne: Answer[] = [
    {
        id: 1,
        content: "Primary content",
        isCorrect: false,
        displayOrder: 1
    },
    {
        id: 2,
        content: "Empty content",
        isCorrect: false,
        displayOrder: 2
    },
    {
        id: 3,
        content: "Indirectly related content",
        isCorrect: true,
        displayOrder: 3
    },
]

export const HTMLAnswerTwo: Answer[] = [
    {
        id: 1,
        content: "4",
        isCorrect: false,
        displayOrder: 1
    },
    {
        id: 2,
        content: "6",
        isCorrect: true,
        displayOrder: 2
    },
    {
        id: 3,
        content: "8",
        isCorrect: false,
        displayOrder: 3
    },
    {
        id: 3,
        content: "Unlimited",
        isCorrect: false,
        displayOrder: 4
    },
]

module.exports = {
    HTMLAnswerOne,
    HTMLAnswerTwo
}