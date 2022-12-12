const letter = String.fromCharCode(Math.floor(Math.random() * 26) + 97);
function playGuessTheLetter() {
    let guessesLeft = 5;
    while (guessesLeft > 0) {
        const guess = prompt('I\'m thinking of a letter (a-z). Can you guess what it is? You have ' + guessesLeft + ' guesses.');
        guessesLeft--;
        if (guess === letter) {
            alert('You guessed it! The letter was ' + letter + '.');
            return;
        } else if (guessesLeft > 0) {
            alert('No, it\'s not the letter! Guess again, you have ' + guessesLeft + ' guesses left.');
        }
        if (guessesLeft == 0) {
            alert('Sorry, you are out of guesses. The letter was ' + letter + '.');
        }
    }
};
