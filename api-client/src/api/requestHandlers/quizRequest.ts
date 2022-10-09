import apiClient from "../apiClient";

export function getById(id: string) {
    return apiClient.quizAPI.apiQuizIdGet(id)
}

export function getAll() {
    return apiClient.quizAPI.apiQuizzesGetCollection()
}