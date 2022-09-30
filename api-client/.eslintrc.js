module.exports = {
    extends: [
        'eslint:recommended',
        'plugin:@typescript-eslint/recommended'
    ],
    parser: '@typescript-eslint/parser',
    plugins: [
        '@typescript-eslint'
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