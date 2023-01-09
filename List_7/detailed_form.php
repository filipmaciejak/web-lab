<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="quiz, test, newsletter, nagrody, dane, formularz, dane osobowe, szczegóły">
    <meta name="description" content="Szczegółowy formularz zapisowy do newslettera">
    <title>Detailed form</title>
    <link rel="stylesheet" href="detailed_form.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Handlee&family=Lato&display=swap');</style>
</head>
<body>
    <?php require 'detailed_form_validation.php';?>
    <header>
        <h1 id="start">Maybe something else...</h1>
    </header>
    <datalist id="education_list">
        <option value="podstawowe"></option>
        <option value="gimnazjalne"></option>
        <option value="zasadnicze zawodowe"></option>
        <option value="zasadnicze branżowe"></option>
        <option value="średnie branżowe"></option>
        <option value="średnie"></option>
        <option value="wyższe"></option>
    </datalist>
    <main>
        <?php if ($submitted) { ?>
            <?php if (count($errors) != 0) { ?>
                <?php for ($i = 0; $i < count($errors); $i++) { ?>
                    <div class="error"><i class="icon-attention-circled"></i><?php echo $errors[$i]; ?></div>
                <?php } ?>
            <?php } ?>
            <?php if (count($errors) == 0) { ?>
                <div class="confirmation"><i class="icon-ok-circled"></i>Formularz wysłany poprawnie!</div>
            <?php } ?>
            <div class="address">
                Client IP address: <?php echo (string)$ip_address; ?><br>
                Your word: <?php echo (string)$contest_word; ?>
            </div>
        <?php } ?>
        <p>Give us more information about you.</p>
        <form id="form" method="post" action="detailed_form.php">
            <fieldset>
                <legend>Additional information:</legend>
                <div class="field">
                    <input type="text" id="pesel" name="pesel" size="15" maxlength="11" placeholder="PESEL number" autocomplete="on" title="Type your PESEL number" required pattern="[0-9]{11}" autofocus> (11 digits)
                </div>
                <div class="field">
                    <input type="text" id="mother_maiden_name" name="mother_maiden_name" placeholder="Mother's maiden name" size="30" maxlength="50" title="Type your mother's maiden name">
                </div>
                <div class="field">
                    <input list="education_list" name="education" id="education" placeholder="Education" title="Choose your education"> (from a list)
                </div>
                <div class="field">
                    <input type="text" id="id_card" name="id_card" size="15" pattern="[A-Z]{3}[0-9]{6}" placeholder="ID card" title="Type your ID card number" autocomplete="on" required> (np. ABC123456)
                </div>
                <div class="field">
                    <input type="month" name="card_expiration_date" id="card_expiration_date" placeholder="Student card expiration date" required title="Choose the expiration date of your student card">
                </div>
                <div class="field">
                    0 <input type="range" name="pin" id="pin" step="1" min="0" max="999999" placeholder="PIN number" title="Choose your PIN number"> 999999
                    Nr PIN do karty kredytowej: <output name="result" for="pin"></output>
                </div>
                <div class="field">
                    <input type="number" name="shoe_size" id="shoe_size" placeholder="Shoe size" min="0" max="100" step="1" required title="Choose your shoe size">
                </div>
                <div class="field">
                    <input type="color" name="fav_color" id="fav_color" placeholder="Favourite color" title="Choose your favourite color">
                </div>
                <div class="field">
                    <input type="search" name="fav_word" id="fav_word" placeholder="Word of the Year 2022" size="30" required title="Type the Word of the Year 2022">
                </div>
                <div class="field">
                    <input type="url" name="fb_link" id="fb_link" placeholder="Facebook link" size="100" required title="Paste your Facebook profile link">
                </div>
                <h5>2 + 2 * 2 = ?</h5>
                <div class="field">
                    <input type="number" name="guess" id="guess" placeholder="guess" step="1" required title="Choose your answer">
                </div>
                <div class="buttons">
                    <input type="submit" name="submit" value="Submit">
                    <input type="submit" name="submit" formnovalidate value="Submit without validation">
                    <input type="reset" value="Reset">
                </div>
            </fieldset>
        </form>
    </main>
    <footer>
        <p> Authors: <a href="mailto:wojciechdominiak80@gmail.com">Wojciech Dominiak</a> i <a href="mailto:fimaciejak@gmail.com">Filip Maciejak</a></p>
        <p>2022 &copy; All rights reserved.</p>
    </footer>
</body>
</html>
