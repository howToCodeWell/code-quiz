module.exports = {
    extends: [
        'eslint:recommended',
        'plugin:@typescript-eslint/recommended',
        'plugin:import/recommended',
        'plugin:import/typescript'
    ],
    parser: '@typescript-eslint/parser',
    plugins: [
        '@typescript-eslint',
        'import'
    ],
    root: true,
    ignorePatterns: [
        'node_modules',
        'coverage'
    ],
    env: {
        "browser": true,
        "node": true,
        "jest": true,
    }
};