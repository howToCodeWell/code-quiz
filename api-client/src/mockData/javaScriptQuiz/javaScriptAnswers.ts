import {AnswerDTO} from "../../model/AnswerDTO"

export const JavaScriptAnswerOne: AnswerDTO[] = [
    {
        id: "1",
        content: "1",
        is_correct: false,
        display_order: 1
    },
    {
        id: "2",
        content: "3",
        is_correct: true,
        display_order: 2
    },
    {
        id: "3",
        content: "5",
        is_correct: false,
        display_order: 3
    },
    {
        id: "4",
        content: "2",
        is_correct: false,
        display_order: 4
    },
]

export const JavaScriptAnswerTwo: AnswerDTO[] = [
    {
        id: "1",
        content: "A function passed as arg",
        is_correct: true,
        display_order: 1
    },
    {
        id: "2",
        content: "Code that calls itself",
        is_correct: false,
        display_order: 2
    },
    {
        id: "3",
        content: "Global functions",
        is_correct: false,
        display_order: 3
    },
]

export const JavaScriptAnswerThree: AnswerDTO[] = [
    {
        id: "1",
        content: "The object",
        is_correct: true,
        display_order: 1
    },
    {
        id: "2",
        content: "Private properties",
        is_correct: false,
        display_order: 2
    },
    {
        id: "3",
        content: "Inherited properties",
        is_correct: false,
        display_order: 3
    },
]

export const JavaScriptAnswerFour: AnswerDTO[] = [
    {
        id: "1",
        content: "Yes",
        is_correct: true,
        display_order: 1
    },
    {
        id: "2",
        content: "No",
        is_correct: false,
        display_order: 2
    },
]

export const JavaScriptAnswerFive: AnswerDTO[] = [
    {
        id: "1",
        content: "3",
        is_correct: false,
        display_order: 1
    },
    {
        id: "2",
        content: "5",
        is_correct: true,
        display_order: 2
    },
    {
        id: "3",
        content: "7",
        is_correct: false,
        display_order: 3
    },
    {
        id: "4",
        content: "2",
        is_correct: false,
        display_order: 4
    },
]

export const JavaScriptAnswerSix: AnswerDTO[] = [
    {
        id: "1",
        content: "<JavaScript>",
        is_correct: false,
        display_order: 1
    },
    {
        id: "2",
        content: "<script>",
        is_correct: true,
        display_order: 2
    },
    {
        id: "3",
        content: "<js>",
        is_correct: false,
        display_order: 3
    },
]

module.exports = {
    JavaScriptAnswerOne,
    JavaScriptAnswerTwo,
    JavaScriptAnswerThree,
    JavaScriptAnswerFour,
    JavaScriptAnswerFive,
    JavaScriptAnswerSix
}