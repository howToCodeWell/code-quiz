import * as dotenv from "dotenv"
import jsonServer from "json-server"
import data from "../mockData"
import routes from "./routes.json";

dotenv.config()
const server = jsonServer.create()

server.use(jsonServer.rewriter({
    '/api/v1/': '/$1',
    '/api/v1/quiz/:slug': '/quiz?slug=:slug'
}))
const router = jsonServer.router(data)
const middlewares = jsonServer.defaults()

server.use(middlewares)
server.use(router)
server.listen(process.env.API_PORT, () => {
    console.log(`JSON Server is running\nAPI Version : ${process.env.API_VERSION}\n`)
})