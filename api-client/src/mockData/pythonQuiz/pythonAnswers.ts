import {AnswerDTO} from "../../model/AnswerDTO"

export const PythonAnswerOne: AnswerDTO[] = [
    {
        id: "1",
        content: "Yes",
        is_correct: false,
        display_order: 1
    },
    {
        id: "2",
        content: "No",
        is_correct: true,
        display_order: 2
    }
]

export const PythonAnswerTwo: AnswerDTO[] = [
    {
        id: "1",
        content: "Install method",
        is_correct: false,
        display_order: 1
    },
    {
        id: "2",
        content: "Constructor method",
        is_correct: true,
        display_order: 2
    },
    {
        id: "3",
        content: "Proxy method",
        is_correct: false,
        display_order: 3
    },
    {
        id: "4",
        content: "Deconstructor method",
        is_correct: false,
        display_order: 4
    },
]

export const PythonAnswerThree: AnswerDTO[] = [
    {
        id: "1",
        content: "Iterator objects",
        is_correct: true,
        display_order: 1
    },
    {
        id: "2",
        content: "A boolean",
        is_correct: false,
        display_order: 2
    },
    {
        id: "3",
        content: "A function",
        is_correct: false,
        display_order: 3
    },
    {
        id: "4",
        content: "Nothing",
        is_correct: false,
        display_order: 4
    },
]

export const PythonAnswerFour: AnswerDTO[] = [
    {
        id: "1",
        content: "Empty path",
        is_correct: false,
        display_order: 1
    },
    {
        id: "2",
        content: "Emergency process",
        is_correct: false,
        display_order: 2
    },
    {
        id: "3",
        content: "Enhancement process",
        is_correct: false,
        display_order: 3
    },
    {
        id: "4",
        content: "Enhancement proposal",
        is_correct: true,
        display_order: 4
    },
]

export const PythonAnswerFive: AnswerDTO[] = [
    {
        id: "1",
        content: "3",
        is_correct: false,
        display_order: 1
    },
    {
        id: "2",
        content: "1",
        is_correct: true,
        display_order: 2
    },
    {
        id: "3",
        content: "2",
        is_correct: false,
        display_order: 3
    },
    {
        id: "4",
        content: "Any",
        is_correct: false,
        display_order: 4
    },
]


module.exports = {
    PythonAnswerOne,
    PythonAnswerTwo,
    PythonAnswerThree,
    PythonAnswerFour,
    PythonAnswerFive,
}