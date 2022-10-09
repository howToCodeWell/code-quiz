import apiClient from "../apiClient";

export function getById(id: string) {
    return apiClient.questionAPI.apiQuestionIdGet(id)
}