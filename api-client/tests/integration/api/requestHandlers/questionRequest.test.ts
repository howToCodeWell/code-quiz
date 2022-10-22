import {getById} from "../../../../src/api/requestHandlers/questionRequest";
import {mockApp} from "../../../../src/api/mockClient";

// Start the JSONServer
const app = mockApp()

afterAll(() => {
    // Stop the JSONServer
    app.close()
});

describe("API Request '/v1/question/1'", () => {
    it('Should have a status code of 200', async () => {
        const response = await getById("1")
        expect(response.status).toEqual(200)
    })

    it("Should have @id '/v1/question/1'", async () => {
        const response = await getById("1")
        expect(response.data['@id']).toEqual('/v1/question/1')
    })

    it("Should have @context '/v1/contexts/Question'", async () => {
        const response = await getById("1")
        expect(response.data['@context']).toEqual('/v1/contexts/Question')
    })

    it("Should have @type 'Question'", async () => {
        const response = await getById("1")
        expect(response.data['@type']).toEqual('Question')
    })

    it("Should have content 'What is the <aside> tag for?'", async () => {
        const response = await getById("1")
        expect(response.data['@type']).toEqual('Question')
    })

    it("Should have three answers", async () => {
        const response = await getById("1")
        expect(Object.keys(response.data.answers).length).toEqual(3)
    })
})
