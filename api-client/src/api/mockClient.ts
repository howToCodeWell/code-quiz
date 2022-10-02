import * as dotenv from "dotenv"
import * as jsonServer from "json-server"
import data from "../mockData"
import routes from "../routes.json"

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

    server.use(middlewares)
    server.use(router)
    return server.listen(process.env.API_PORT)
}
