
printf "Moving into /app"
cd /app

print "ENV mode = ${NODE_ENV}"

# IF NODE_ENV === 'PRODUCTION'
print "Installing from frozen lockfile"
yarn --frozen-lockfile

# IF NODE_ENV === 'DEV'
print "Installing yarn deps"
yarn install
