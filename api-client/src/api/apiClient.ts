import axios from "axios";
import * as dotenv from "dotenv"
dotenv.config()

export const axiosClient = axios.create({
    baseURL: `${process.env.API_BASE_PATH}:${process.env.API_PORT}`,
    headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
    }
});

export default {
    axiosClient
};