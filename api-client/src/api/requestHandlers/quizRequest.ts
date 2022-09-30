import {axiosClient} from "../apiClient";

export function getAll() {
    return axiosClient.get('/quiz')
}