import jsonServer from "json-server"
import data from "../mockData"

const server = jsonServer.create()

server.use(jsonServer.rewriter({
    '/api/v1/': '/$1',
    '/api/v1/quiz/:slug': '/quiz?slug=:slug'
}))
const router = jsonServer.router(data)
const middlewares = jsonServer.defaults()

server.use(middlewares)
server.use(router)
server.listen(3000, () => {
    console.log('JSON Server is running')
})