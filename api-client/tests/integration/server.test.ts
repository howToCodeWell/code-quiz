import {app} from "../../src/server";

afterAll(() => {
    // Stop the JSONServer
    app.close()
});

describe('Server should be running', () => {
    it('should be listening for new connections', async () => {
        const isListening = app.listening
        expect(isListening).toBeTruthy()
    })
})
