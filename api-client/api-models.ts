export interface QuizDTO {
    id: string
    title: string
    slug: string
    questions: QuestionDTO[]
}

export interface QuestionDTO {
    id: string
    content: string
    answers: AnswerDTO[]
}

export interface AnswerDTO {
    id: string
    content: string
    is_correct: boolean
    display_order: number
}
