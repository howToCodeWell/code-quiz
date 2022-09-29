import {getAll} from "../../../../../src/api/requestHandlers/quizRequest";
import {mockApp} from "../../../../../src/api/mockClient";

// Start the JSONServer
const app = mockApp()

afterAll(() => {
    // Stop the JSONServer
    app.close()
});

describe('API Request /quiz', () => {
    it('Should have a status code of 200', async () => {
        const response = await getAll()
        expect(response.status).toEqual(200)
    })

    it('Should have three quizzes', async () => {
        const response = await getAll()
        expect(response.data.length).toEqual(3)
    })
})
