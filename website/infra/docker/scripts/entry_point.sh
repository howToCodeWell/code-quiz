print "ENV mode = ${NODE_ENV}"

# IF NODE_ENV === 'PRODUCTION'
print "Running production build"
yarn build
node server.js

# IF NODE_ENV === 'DEV'
print "Running dev mode for hot reloading"
yarn dev