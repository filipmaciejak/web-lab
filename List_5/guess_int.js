const targetInt = Math.floor(Math.random() * 100) + 1;
const formInt = document.querySelector('form.int');
const resultInt = document.querySelector('#result_int');
const guessesInt = document.querySelector('#guessesInt');
let guessesLeftInt = 5;
formInt.onsubmit = function(event) {
    event.preventDefault();
    const guess = parseInt(formInt.elements.guessInt.value);
    formInt.elements.guessInt.value = '';
    if (guess === targetInt && guessesLeftInt > 0) {
        resultInt.textContent = 'You guessed it! The number was ' + targetInt + '.';
    } else if (guess > targetInt && guessesLeftInt > 0) {
        resultInt.textContent = 'Your guess was too high. Try again.';
        guessesLeftInt--;
        guessesInt.textContent = guessesLeftInt
        if (guessesLeftInt == 0) {
            resultInt.textContent = 'Sorry, you are out of guesses. The number was ' + targetInt + '.';
        }
    } else if (guessesLeftInt > 0) {
        resultInt.textContent = 'Your guess was too low. Try again.';
        guessesLeftInt--;
        guessesInt.textContent = guessesLeftInt
        if (guessesLeftInt == 0) {
            resultInt.textContent = 'Sorry, you are out of guesses. The number was ' + targetInt + '.';
        }
    } else {
        resultInt.textContent = 'Sorry, you are out of guesses. The number was ' + targetInt + '.';
    }
};
