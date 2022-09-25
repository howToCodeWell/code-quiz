import type {Config} from '@jest/types';

const config: Config.InitialOptions = {
    collectCoverage: true,
    collectCoverageFrom: ["./src/**", "./mockData/**", "!./src/routes.json"],
    testPathIgnorePatterns: ["./src/routes.json"],
    // TODO #88  https://github.com/howToCodeWell/code-quiz/issues/88
    // This needs to be un-commented once we reach 90% code coverage
    // coverageThreshold: {
    //     global: {
    //         lines: 90
    //     },
    // },
    verbose: true,
    transform: {
        "^.+\\.tsx?$": "ts-jest",
    },
};
export default config;