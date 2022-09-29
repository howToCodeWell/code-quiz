import {AnswerDTO} from "./AnswerDTO";

export interface QuestionDTO {
    id: string
    content: string
    answers: AnswerDTO[]
}