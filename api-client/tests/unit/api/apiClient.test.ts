import apiClient from "../../../src/api/apiClient";

describe('API Client headers', () => {
    it('Should have a content type of application/json', () => {
        let headers = apiClient.axiosClient.defaults.headers;
        expect(headers['Content-Type']).toEqual('application/json')
    })
    it('Should have a accept header with the value application/json', () => {
        let headers = apiClient.axiosClient.defaults.headers;
        expect(headers['Accept']).toEqual('application/json')
    })
})
