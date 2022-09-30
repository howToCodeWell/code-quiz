import { HTMLAnswerOne, HTMLAnswerTwo } from '../../../src/mockData/htmlQuiz/htmlAnswers'

const countCorrectAnswers = function(options)  {
    let correctAnswerCount = 0;
    options.forEach(function(option){
        if(option.is_correct === true) {
            correctAnswerCount++;
        }
    })
    return correctAnswerCount
}


describe('HTML Answer One', () => {
    it('Should have three possible options', () => {
        expect(HTMLAnswerOne.length).toEqual(3)
    })

    it('Should only have one correct option', () => {
        expect(countCorrectAnswers(HTMLAnswerOne)).toEqual(1)
    })
})

describe('HTML Answer Two', () => {
    it('Should have three possible options', () => {
        expect(HTMLAnswerTwo.length).toEqual(4)
    })
    it('Should only have one correct option', () => {
        expect(countCorrectAnswers(HTMLAnswerTwo)).toEqual(1)
    })
})