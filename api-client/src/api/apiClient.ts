import * as dotenv from "dotenv"

import {Configuration, QuestionApi, QuizApi} from "../generated/openapi/"

dotenv.config()

const configuration = new Configuration({
    basePath: `${process.env.API_BASE_PATH}:${process.env.API_PORT}`,
    baseOptions: {
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        }
    }
})

const apiClient = {
    quizAPI: new QuizApi(configuration),
    questionAPI: new QuestionApi(configuration),
    configuration: configuration
}

export default apiClient