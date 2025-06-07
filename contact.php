<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact formulier</title>
  <link rel="stylesheet" href="/CSS/style.css" />

  <link
    href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Sonsie+One&display=swap"
    rel="stylesheet" />
</head>

<body>
  <header></header>

  <main>

    <div id="contact-Form-Container">
      <div>
        <h2>Contact formulier</h2>
        <p id="form-paragraph">Vul het formulier in en ik neem zo snel mogelijk contact met je op.</p>
      </div>
      <form method="POST" action="/Email_handler/send_email.php" id="contact-Form">

        <div id="form-Input">
          <label for="Naam">Naam:</label>
          <input type="text" name="naam" placeholder="Naam" required />
          <small class="error"></small>

          <label for="Bedrijf">Bedrijf:</label>
          <input type="text" name="bedrijf" placeholder="Bedrijfsnaam" />
          <small class="error"></small>

          <label for="E-mailadres">E-mailadres:</label>
          <input type="text" name="email" placeholder="voorbeeld@gmail.com" required />
          <small class="error"></small>

          <label for="Telefoonnummer">Telefoonnummer:</label>
          <input type="text" name="telefoon" placeholder="0612345678" />
          <small class="error"></small>
        </div>

        <div id="form-Message">
          <label for="bericht-Input">Bericht:</label>
          <textarea
            id="bericht-Input"
            rows="12"
            style="resize: vertical"
            name="bericht"
            required></textarea>
          <small class="error"></small>
        </div>

        <div id="contact-Button-Container">
          <button class="button-layout" type="submit" name="form_button" value="send_data">Verstuur</button>
        </div>
      </form>
    </div>
  </main>

  <footer></footer>

  <script src="/JavaScript/script.js"></script>
  <script>
    includeHTML("header.php", "header");
    includeHTML("footer.php", "footer");
  </script>
</body>

</html>