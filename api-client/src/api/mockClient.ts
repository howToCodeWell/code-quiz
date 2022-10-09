import * as dotenv from "dotenv"
import * as jsonServer from "json-server"
import routes from "../routes.json"
import data from "../mockData";

export function mockApp() {
    dotenv.config()
    const server = jsonServer.create()
    const rules = {}
    for (const key in routes) {
        rules[`/api/${process.env.API_VERSION}${key}`] = routes[key]
    }
    server.use(jsonServer.rewriter(rules))
    const router = jsonServer.router(data)
    const middlewares = jsonServer.defaults()

    server.get('/quiz/*', (req, res) => {
        const id = (req.params[0])
        res.jsonp(data.quiz[id -1])
    })

    server.get('/question/*', (req, res) => {
        const id = (req.params[0])
        res.jsonp(data.question[id -1])
    })

    server.use(middlewares)
    server.use(router)
    return server.listen(process.env.API_PORT)
}
