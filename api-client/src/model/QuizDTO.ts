import {QuestionDTO} from "./QuestionDTO";

export interface QuizDTO {
    id: string
    title: string
    slug: string
    questions: QuestionDTO[]
}