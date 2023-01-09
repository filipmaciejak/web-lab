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
    <link rel="stylesheet" href="css/fontello.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Handlee&family=Lato&display=swap');</style>
</head>
<body>
    <?php require 'personal_form_validation.php';?>
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
        <?php if ($submitted) { ?>
            <?php if (count($errors) != 0) { ?>
                <?php for ($i = 0; $i < count($errors); $i++) { ?>
                    <div class="error"><i class="icon-attention-circled"></i><?php echo $errors[$i]; ?></div>
                <?php } ?>
            <?php } ?>
            <?php if (count($errors) == 0) { ?>
                <div class="confirmation"><i class="icon-ok-circled"></i>Form submitted correctly!</div>
            <?php } ?>
            <div class="address">
                Client IP address: <?php echo (string)$ip_address; ?>
            </div>
        <?php } ?>
        <p>Fill the form</p>
        <form id="form" method="post" action="personal_form.php">
            <div class="field">
                <input type="text" id="name" name="name" placeholder="Name" size="25" maxlength="50" autocomplete="on" title="Type your name" autofocus onfocus="focusInput(this)" onblur="blurInput(this, 'Name')">
            </div>
            <div class="field">
                <input type="text" id="surname" name="surname" placeholder="Surname" size="30" maxlength="50" autocomplete="on" title="Type your surname" required onfocus="focusInput(this)" onblur="blurInput(this, 'Surname')">
            </div>
            <div class="field">
                Gender    
                <input type="radio" name="gender" id="male" value="male" required>
                <label for="male">male</label>
                <input type="radio" name="gender" id="female" value="female">
                <label for="female">female</label>
                <input type="radio" name="gender" id="other" value="other">
                <label for="other">other</label>
            </div>
            <div class="field">
                <input list="month_list" name="month" id="month" placeholder="Birth month" title="Choose birth month from a list" onfocus="focusInput(this)" onblur="blurInput(this, 'Birth month')">
            </div>
            <div class="field">
                <input type="email" name="mail" id="mail" placeholder="E-mail address" size="35" autocomplete="on" title="Type your e-mail address" required onfocus="focusInput(this)" onblur="blurInput(this, 'E-mail address')">
            </div>
            <div class="field">
                <input type="tel" name="phone" id="phone" placeholder="Phone number" autocomplete="on" title="Type your phone number" onfocus="focusInput(this)" onblur="blurInput(this, 'Phone number')"> (format: 999-999-999)
            </div>
            <div class="field">
                What languages do you know?
                <input type="checkbox" name="languages[]" id="english" value="english">
                <label for="english">English</label>
                <input type="checkbox" name="languages[]" id="german" value="german">
                <label for="german">German</label>
                <input type="checkbox" name="languages[]" id="spanish" value="spanish">
                <label for="spanish">Spanish</label>
                <input type="checkbox" name="languages[]" id="italian" value="italian">
                <label for="italian">Italian</label>
            </div>
            <div class="buttons">
                <input type="submit" name="submit" value="Submit">
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
