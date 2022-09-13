const jsonServer = require('json-server')
const path = require('path')
const server = jsonServer.create()

server.use(jsonServer.rewriter({
    '/quiz/:slug': '/quiz?slug=:slug'
}))
const router = jsonServer.router(path.join(__dirname, 'quiz.json'), {})
const middlewares = jsonServer.defaults({})

server.use(middlewares)
server.use(router)
server.listen(3000, () => {
    console.log('JSON Server is running')
})