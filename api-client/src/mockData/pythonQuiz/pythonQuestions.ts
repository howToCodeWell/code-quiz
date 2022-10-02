import {QuestionDTO} from "../../model/QuestionDTO"
import {PythonAnswerOne, PythonAnswerTwo, PythonAnswerThree, PythonAnswerFour, PythonAnswerFive,} from "./pythonAnswers";

const PythonQuestions: QuestionDTO[] = [
    {
        id: "1",
        content: "Are Python Tuples mutable?",
        answers: PythonAnswerOne,
    },
    {
        id: "2",
        content: "What is __init__ in Python?",
        answers: PythonAnswerTwo,
    },
    {
        id: "3",
        content: "What do Python generators create?",
        answers: PythonAnswerThree,
    },
    {
        id: "4",
        content: "What does PEP stand for in Python? Python _________ _________",
        answers: PythonAnswerFour,
    },
    {
        id: "5",
        content: "How many expressions can a Python Lambda function have?",
        answers: PythonAnswerFive,
    },
]

export default PythonQuestions