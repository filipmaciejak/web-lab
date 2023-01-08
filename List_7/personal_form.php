<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="data, form, personal form">
    <meta name="description" content="A simple form to collect your personal data">
    <title>Personal form</title>
    <link rel="stylesheet" href="personal_form.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Handlee&family=Lato&display=swap');</style>
</head>
<body>
    <header>
        <h1 id="start">Form</h1>
    </header>
    <datalist id="month_list">
        <option value="January"></option>
        <option value="February"></option>
        <option value="March"></option>
        <option value="April"></option>
        <option value="May"></option>
        <option value="June"></option>
        <option value="July"></option>
        <option value="August"></option>
        <option value="September"></option>
        <option value="October"></option>
        <option value="November"></option>
        <option value="December"></option>
    </datalist>
    <main>
        <p>Fill the form</p>
        <form id="form" method="post" action="personal_form.php">
            <div class="field">
                <input type="text" id="name" name="name" placeholder="Name" size="25" maxlength="50" autocomplete="on" title="Type your name" autofocus onfocus="focusInput(this)" onblur="blurInput(this, 'Name')">
            </div>
            <div class="field">
                <input type="text" id="surname" name="surname" placeholder="Surname" size="30" maxlength="50" autocomplete="on" title="Type your surname" required onfocus="focusInput(this)" onblur="blurInput(this, 'Surname')">
            </div>
            <div class="field">
                <input list="month_list" name="month" id="month" placeholder="Birth month" title="Choose birth month from a list" onfocus="focusInput(this)" onblur="blurInput(this, 'Birth month')">
            </div>
            <div class="field">
                <input type="email" name="mail" id="mail" placeholder="E-mail address" size="35" autocomplete="on" title="Type your e-mail address" required onfocus="focusInput(this)" onblur="blurInput(this, 'E-mail address')">
            </div>
            <div class="field">
                <input type="tel" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="Phone number" autocomplete="on" title="Type your phone number" onfocus="focusInput(this)" onblur="blurInput(this, 'Phone number')"> (format: 999-999-999)
            </div>
            <div class="buttons">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
        <script src="form.js"></script>
    </main>
    <footer>
        <p> Authors <a href="mailto:wojciechdominiak80@gmail.com">Wojciech Dominiak</a> and <a href="mailto:fimaciejak@gmail.com">Filip Maciejak</a></p>
        <p> 2022 &copy; All rights reserved.</p>
    </footer>
</body>
</html>
