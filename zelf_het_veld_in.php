<html>
<?php include 'head.php'; ?>

<body>
<div class="container">
<?php include 'header.php';?> <!-- Roept de header op  -->

<div class="excursiepaginagrid">
<div class="excursie1">
  <h3>Zelf het veld in?</h3>
  <p6>
    <br>
    <li>Woensdag- en zaterdagmiddag van 15:30 uur tot 16:30 uur</li>
    <li>Excursie over de teelt van asperges</li>
    <li>Zelf een asperge steken</li>
    <li>Kinderen tot en met 12 jaar zijn gratis</li>
  </p6>
<br>
<br>
  <p6>
    Deze rondleiding kan aangepast worden aan de behoefte van de groep.<br><br>
    Zo kan er een film getoond worden over de groei van een asperge, een rondleiding door het bedrijf, er kunnen asperges gestoken worden,
    er kan informatie gegeven worden over het koken van asperges etc.

  </p6>

  <!-- <p6>
    We organiseren ook rondleidingen/activiteiten op afspraak.<br>
    Deze rondleidingen kunnen aangepast worden aan de behoeften van de groep.<br>
    Zo kan er een film getoond worden over de groei van een asperge, er kunnen asperges gestoken worden,<br>
    er kan informatie gegeven worden over het koken van asperges etc.<br>
    Ook kan een kok informatie geven over lekkere aspergehapjes en die ook voor u maken.<br>
    Wilt u tijdens uw bezoek iets drinken, een kopje aspergesoep met stokbrood of een ijsje eten?<br>
    Ook dat kunnen we voor u regelen.<br>
    Voor het reserveren van uw bezoek en een prijsopgave kunt u een e-mail sturen naar:
    <br><br>
    info@aspergeboerderijsandur.nl
    <br><br>
    tel: 0591-554375
  </p6> -->
</div>
<div class="excursie2">

    <h1>Reserveren</h1>
    <div class="centermobiel">
        <div class="contactveld">

          <form  action="action_page_zelf_het_veld_in.php" method="post">
<br>
            <label for="firstname"> </label>
            <input type="text" class="reserveren" style="width: 70%;" id="firstname" name="firstname" placeholder="Uw naam">
<br>
<br>
            <label for="email">  </label>
            <input type="text" class="reserveren" style="width: 70%;" id="email" name="email" placeholder="Uw E-mail">
<br>
<br>

            <select name="personen" id="personen" class="reserveren">
              <option value="aantal personen">aantal personen</option>
              <option value="1 personen">1 persoon</option>
              <option value="2 personen">2 personen</option>
              <option value="3 personen">3 personen</option>
              <option value="4 personen">4 personen</option>
              <option value="5 personen">5 personen</option>
              <option value="6 personen">6 personen</option>
              <option value="7 personen">7 personen</option>
              <option value="8 personen">8 personen</option>
              <option value="9 personen">9 personen</option>
              <option value="10 personen">10 personen</option>
              <option value="11 personen">11 personen</option>
              <option value="12 personen">12 personen</option>
              <option value="Meer personen">Meer personen graag vermelden in bijzonderheden</option>
            </select>



<br>
<br>



<input id="maand" name="maand" class="reserveren" type="date">



<br>
<br>
            <label for="subject"> <p1></p1> </label>
            <textarea id="subject" class="reserveren" name="subject" placeholder="Bijzonderheden" /*style="height:130px"*/></textarea>
<br>
<br>
            <input type="submit" value="Verzend">                      </input>
          </form>
        </div>
</div><!--/center mobiel-->

<?php include 'meerexcursies.php'; ?>
</div> <!--/excursie2-->




<div class="sectiontussen1"></div><!-- lege tussen ruimte van 7vh -->
<div class="sectiontussen2"></div><!-- lege tussen ruimte van 7vh -->
<div class="sectiontussen3"></div><!-- lege tussen ruimte van 7vh -->

</div><!--/excursiepaginagrid-->
</div><!--/container-->

<?php include 'footer.php'; ?>
</body>
</html>
