import {AnswerDTO} from "../api-models"

export const HTMLAnswerOne: AnswerDTO[] = [
    {
        id: "1",
        content: "Primary content",
        is_correct: false,
        display_order: 1
    },
    {
        id: "2",
        content: "Empty content",
        is_correct: false,
        display_order: 2
    },
    {
        id: "3",
        content: "Indirectly related content",
        is_correct: true,
        display_order: 3
    },
]

export const HTMLAnswerTwo: AnswerDTO[] = [
    {
        id: "1",
        content: "4",
        is_correct: false,
        display_order: 1
    },
    {
        id: "2",
        content: "6",
        is_correct: true,
        display_order: 2
    },
    {
        id: "3",
        content: "8",
        is_correct: true,
        display_order: 3
    },
    {
        id: "3",
        content: "Unlimited",
        is_correct: false,
        display_order: 4
    },
]

module.exports = {
    HTMLAnswerOne,
    HTMLAnswerTwo
}