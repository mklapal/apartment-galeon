<h2 class="form-headline">Kontaktujte nás</h2>

<form class="js-send form-wrapper">

  <div class="form-left">

    <!-- action="<?php echo URL; ?>/pages/function-email.php" -->
    <div class="form-label">Vaše jméno</div>
    <div class="form-input">
      <input class="js-form-name js-hint-name js-hint" name="name" />
    </div>

    <div class="form-label">Telefon</div>
    <div class="form-input">
      <input class="js-form-phone js-hint-phone js-hint" name="phone" />
    </div>

    <div class="form-label">E-mail</div>
    <div class="form-input">
      <input class="js-form-email js-hint-email js-hint" name="email" />
    </div>

  </div>

  <div class="form-right">

    <div class="form-label">Text zprávy</div>
    <div class="form-input">
      <textarea class="js-form-text js-hint-text js-hint" name="text" rows="10" cols="40" ></textarea>
    </div>

    <noscript><p>Please write "nospam": <input class="js-form-check" name="form-check" size="6" /></p></noscript>
    <script type="text/javascript">
    document.write('<input type="hidden" class="js-form-check" name="form-check" value="no' + 'spam" />');
    </script>

    <input type="submit" value="Odeslat" class="js-btn-send" />
  </div>

</form>

<p class="js-sent js-info">
Děkujeme za Vaši zprávu! Budeme Vás kontaktovat v nejbližším možném termínu. Kopie zprávy byla odeslána na Váš email.
</p>

<p class="js-error js-info">
Chyba při odesílání zprávy. Prosím zkuste to znovu nebo nás kontaktujte přímo emailem na info@apartment-galeon.com. 
</p>