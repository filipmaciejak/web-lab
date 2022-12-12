const targetFloat = Math.random();
const formFloat = document.querySelector('form.float');
const resultFloat = document.querySelector('#result_float');
const guessesFloat = document.querySelector('#guessesFloat');
let guessesLeftFloat = 5;
formFloat.onsubmit = function(event) {
    event.preventDefault();
    const guess = parseFloat(formFloat.elements.guessFloat.value);
    formFloat.elements.guessFloat.value = '';
    if (guess === targetFloat && guessesLeftFloat > 0) {
        resultFloat.textContent = 'You guessed it! The number was ' + targetFloat + '.';
    } else if (guess > targetFloat && guessesLeftFloat > 0) {
        resultFloat.textContent = 'Your guess was too high. Try again.';
        guessesLeftFloat--;
        guessesFloat.textContent = guessesLeftFloat
        if (guessesLeftFloat == 0) {
            resultFloat.textContent = 'Sorry, you are out of guesses. The number was ' + targetFloat + '.';
        }
    } else if (guessesLeftFloat > 0) {
        resultFloat.textContent = 'Your guess was too low. Try again.';
        guessesLeftFloat--;
        guessesFloat.textContent = guessesLeftFloat
        if (guessesLeftFloat == 0) {
            resultFloat.textContent = 'Sorry, you are out of guesses. The number was ' + targetFloat + '.';
        }
    } else {
        resultFloat.textContent = 'Sorry, you are out of guesses. The number was ' + targetFloat + '.';
    }
};
