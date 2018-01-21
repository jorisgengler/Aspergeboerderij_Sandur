<!DOCTYPE html>
<html lang="nl">

<?php include 'head.php'; ?>

<body>



<div id="grid " class="grid">

  <div class="homepage" id="homepage">
    <?php include 'header.php';?> <!-- Roept de header op  -->

      <div class="textvlakwhitedoorzichtig1">
        <h3>
          Asperges <br>
          Lekker en gezond!

        </h3>
      </div>
<div class="demo">
  <a href="#sectiontussen1"><span></span></a>
</div>
  </div>

  <div id="sectiontussen1" class="sectiontussen1"></div><!-- lege tussen ruimte van 7vh -->
<!-- __________________________Section1__________________________ -->
<div class="section1" id="section1">
      <div class="buttonplacedown">
          <h2>De boerderij</h2>
          <img  src="images/rsz_de_boerderij.jpg" alt="Boerderij" style="max-width: 95%;">
          <br><br>
        <div class="textvlak">
          <p>
            In onze boerderijwinkel vindt u behalve vers gestoken asperges,
            ook een bijzondere selectie streekproducten.
            <br> <br>
          </p>
          <h2>Openingstijden:</h2>
            <p>Maandag t/m donderdag van 13.00 tot 18.00 uur;
              <br>
              Vrijdags van 9.00 tot 18.00 uur;
              <br>
              Zaterdags van 9.00 tot 17.00 uur.
          </p>
        </div>
          <br>
          <div class="buttonplace">
            <a href="contact.php"><div class="button buttoncolorgreen"> <p>Boerderijwinkel & producten</p></div></a>
          </div>
          <br>
      </div>
</div>
<!-- __________________________Section2__________________________ -->
<div class="section2">
      <div class="buttonplacedown">
        <h2>SBS6 op de aspergeboerderij! </h2>
        <!-- <video class="sbs6video" src="videos/sbs6.mp4" width="400" controls></video> -->
        <img  src="videos/sbs6.png" alt="Boerderij" style="max-width: 95%;">


          <br>
          <div class="buttonplace">
            <a href="contact.php"><div class="button buttoncolorgreen"> <p>Overzicht van activiteiten & excursies</p></div></a>
          </div>
      </div>
    <br>
</div>

<!-- __________________________Section3__________________________ -->
<div class="section3">
        <div class="buttonplacedown">
          <h2>Excursies</h2>
          <img  src="images/rsz_excursies.jpg" alt="Boerderij" style="max-width: 95%;">
          <br><br>

        <div class="textvlak">
          <p>
            Bedrijfsdag, teamuitje, bijzondere familiedag, vriendenworkshop of een andere groepsactiviteit? We maken er een onvergetelijk moment van voor iedere doelgroep!
            <br><br>
            Mooie verhalen, een blos op de wangen en lekkers om te proeven!
          </p>
        </div>
          <br><br>
          <div class="buttonplace">
          <a href="contact.php"><div class="button buttoncolorgreen"> <p>Overzicht van activiteiten & excursies</p></div></a>
          </div>
        </div>
      <br>
</div>

<!-- __________________________Section4__________________________ -->

  <div class="section4">
        <div class="buttonplacedown4">
          <h3>Nieuws</h3>
        <div class="textvlak">
          <p>Nieuw in de winkel de Asperge croquetten </p>
          <br>
          <h2>Stagiaires gezocht! </h2>

          <p>
          MBO niveau 2-4 voor de volgende opleidingen:<br><br>
          <li>Manager retail</li>
          <li>Medewerker teelt</li>
          <li>Vakbekwaam medewerkerteelt</li>
          <li>Vakexpert teelt en groene technologie</li>
          <li>Verkoopspecialist</li>
          <li>Verkoopspecialist groene detailhandel</li>
          <p>
        </div>
       </div>
<br><br><br>
    <div class="buttonplace">
      <a href="contact.php"><div class="button buttoncolorblue"> <p>Meer Nieuws </p></div></a>
    </div>

  </div>



<div class="sectiontussen2"></div><!-- lege tussen ruimte van 7vh -->
<!-- __________________________Section5__________________________ -->
<div class="section5">
  <h3>De boerderij</h3>
    <br>
    <img  src="images/rsz_winkelvierkant.jpg" alt="Winkel" style="max-width: 60%;">
</div>

<!-- __________________________Section6__________________________ -->
<div class="section6">
  <p2>
    De boerderij ligt aan de Vaart Noordzijde 186 tussen Erica en Nieuw Amsterdam.<br><br>
    De aspergevelden liggen op zandgronden en hebben volgens onze vaste klanten een zachte, iets zoete smaak.
    Bepalend voor deze smaak is onder andere de manier waarop we onze asperges verzorgen.<br><br>
    Het oogsten van onze witte asperges is puur handwerk.
    We halen de asperges met een speciaal steekmes uit de grond.
  </p2>
    <br><br><br>
    <div class="center">
      <a href="contact.php"><div class="button buttoncolorgreen"> <p>Overzicht van activiteiten & excursies</p></div></a>
    </div>
</div><!-- /section6 -->

<div class="sectiontussen3"></div><!-- lege tussen ruimte van 7vh -->
<!-- __________________________Section7__________________________ -->
<div class="section7">
<h3 class="center">Blijf op de hoogte</h3>
<br>
<p>
  Als u op de hoogte wilt blijven van onze activiteiten, laat dan hier uw naam en e-mailadres achter.

  <div class="nieuwsbrief" id="nieuwsbrief">
  <form name="nieuwsbrief" action="action_page_nieuwsbrief.php" onsubmit="return validateForm();" method="post">
  <label for="email"></label>
  <br>
  <input style="width: 90%;" type="text" id="email" name="email" placeholder="Email">
  <br><br>
  <input type="submit" name="register" value="Meld me aan"> </input>
  </form>
  </div>

</p>
</div>
<!-- __________________________Section8__________________________ -->
<div class="section8">
  <h3 class="center">Openingstijden</h3>
  <br>
  <p>
    Maandag t/m donderdag van 13.00 tot 18.00 uur<br>
    Vrijdags van 9.00 tot 18.00 uur<br>
    Zaterdags van 9.00 tot 17.00 uur
  </p>
  <br>
<p>
  Tel. 0591-554375
  <br>
  E-mail: info@aspergeboerderijsandur.nl
  <br><br>
  Voor bestellingen kunt u het volgende e-mailadres gebruiken: bestellen@aspergeboerderijsandur.nl
</p>
</div>
<!-- __________________________Section9__________________________ -->
<div class="section9">
<h3 class="center">Adres</h3>
<br>
  <div id="googleMap" style="width:100%;height:400px;"></div>
  <br>
  <p>
    <a target="_blank" href="https://www.google.nl/maps/place/Aspergeboerderij+Sandur/@52.7166898,6.8815538,15z/data=!4m5!3m4!1s0x47b7e579c0243853:0xc3ecc23e1520860d!8m2!3d52.7136985!4d6.8877246">Route >> </a>
  </p>
</div>

<!-- __________________________Section10__________________________ -->
<div class="section10">
  <h3 class="center">Facebook</h3>
  <br>
  <!-- Facebook -->
    <div class="fb-page" data-href="https://www.facebook.com/AspergeboerderijSandur/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/AspergeboerderijSandur/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AspergeboerderijSandur/">Aspergeboerderij Sandur (Nieuw-Amsterdam)</a></blockquote></div>
</div>


<!-- __________________________Emty spage for mobiel__________________________ -->
<div class="sectiontussen4"></div><!-- lege tussen ruimte van 7vh -->
<div class="sectiontussen5"></div><!-- lege tussen ruimte van 7vh -->
<div class="sectiontussen6"></div><!-- lege tussen ruimte van 7vh -->
<div class="sectiontussen7"></div><!-- lege tussen ruimte van 7vh -->
<div class="sectiontussen8"></div><!-- lege tussen ruimte van 7vh -->
<div class="sectiontussen9"></div><!-- lege tussen ruimte van 7vh -->
<div class="sectiontussen10"></div><!-- lege tussen ruimte van 7vh -->
<div class="sectiontussen11"></div><!-- lege tussen ruimte van 7vh -->


</div><!-- /End Grid -->

<?php include 'footer.php'; ?>

</body>
</html>
