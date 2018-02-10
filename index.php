<!DOCTYPE html>
<html lang="nl">

<?php include 'head.php'; ?>

<body>



<div id="grid " class="grid">

  <div class="homepage" id="homepage">
    <?php include 'header.php';?> <!-- Roept de header op  -->

    <div class="textvlakwhitedoorzichtig1"><p>Het aspergeseizoen begint in<br> april 2018. </p></div>

      <div class="textvlakwhitedoorzichtigfresh">  <!--textvlakwhitedoorzichtig1 -->
        <h3>
          Asperges, lekker en gezond!

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
          <a href="de_boerderij.php"><img  src="images/rsz_de_boerderij.jpg" alt="Boerderij" style="max-width: 95%;"> </a>
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
              Vrijdag van 9.00 tot 18.00 uur;
              <br>
              Zaterdag van 9.00 tot 17.00 uur.
          </p>
        </div>
          <br>
          <div class="buttonplace">
            <a href="de_boerderij.php"><div class="button buttoncolorgreen"> <p>Boerderijwinkel & producten</p></div></a>
          </div>
          <br>
      </div>
</div>
<!-- __________________________Section2__________________________ -->
<div class="section2">
      <div class="buttonplacedown">
        <h2>SBS 6 op de aspergeboerderij </h2>
        <!-- <video class="sbs6video" src="videos/sbs6.mp4" width="400" controls></video> -->
        <a href="SBS6_aspergeboerderijsandur.php"><img src="videos/sbs6.png" alt="Boerderij" style="max-width: 95%;"> </a>
          <br><br>

          <p>SBS 6 heeft opnames op ons bedrijf gemaakt.<br><br> Neem een kijkje achter de schermen.</p>
          <br><br>
          <div class="buttonplace">
            <a href="SBS6_aspergeboerderijsandur.php"><div class="button buttoncolorgreen"> <p>SBS 6 op de aspergeboerderij</p></div></a>
          </div>
      </div>
    <br>
</div>

<!-- __________________________Section3__________________________ -->
<div class="section3">
        <div class="buttonplacedown">
          <h2>Excursies</h2>
          <a href="excursies.php"><img  src="images/rsz_excursies.jpg" alt="Boerderij" style="max-width: 95%;"> </a>
          <br><br>

        <div class="textvlak">
          <p>
            Personeelsdag, teamuitje, bijzondere familiedag, vriendenworkshop of een andere groepsactiviteit? We maken er een onvergetelijk moment van voor iedere doelgroep!
            <br><br>
            Mooie verhalen, een blos op de wangen en lekkers om te proeven!
          </p>
        </div>
          <br><br>
          <div class="buttonplace">
          <a href="excursies.php"><div class="button buttoncolorgreen"> <p>Overzicht van activiteiten & excursies</p></div></a>
          </div>
        </div>
      <br>
</div>

<!-- __________________________Section4__________________________ -->

  <div class="section4">
        <div class="buttonplacedown4">
          <h3>Nieuws</h3>
        <div class="textvlak">
          <p>Nieuw in de winkel: de aspergekroket. </p>
          <br>
          <h2>Stagiaires gezocht! </h2>

          <p>
          MBO niveau 2-4 voor de volgende opleidingen:<br><br>
          <li>Verkoopspecialist</li>
          <li>Verkoopspecialist groene detailhandel</li>
          <li>Manager retail</li>
          <br><br>
          <li>Medewerker teelt</li>
          <li>Vakbekwaam medewerkerteelt</li>
          <li>Vakexpert teelt en groene technologie</li>


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
      <a href="#"><div class="button buttoncolorgreen"> <p>Overzicht van activiteiten & excursies</p></div></a>
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

<div class="socialmedia center">

<br><br><br>
<!-- iconmonstr.com -->
	<A target=blank HREF="https://www.facebook.com/AspergeboerderijSandur">
	   <svg class="facebook" width="60" height="60" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"/>
     </svg>
  </a>

<A target=blank HREF="https://www.instagram.com/aspergeboerderijsandur">
  <svg class="instagram" width="60" height="60" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
  </svg>
</a>

<A target=blank HREF="https://www.youtube.com/channel/UCqUx_VfsK4C9FsHUxygmOvw?view_as=subscriber">
  <svg class="youtube" width="60" height="60" viewBox="0 0 24 24"><path d="M9.279 13.52h-.939v5.027h-.908v-5.027h-.94v-.854h2.788v.854zm5.395 1.721v2.406c0 .537-.2.954-.736.954-.296 0-.541-.108-.767-.388v.333h-.813v-5.88h.813v1.893c.183-.222.429-.405.718-.405.59 0 .785.499.785 1.087zm-.83.049c0-.146-.027-.257-.086-.333-.098-.129-.279-.143-.42-.071l-.167.132v2.703l.19.153c.132.066.324.071.413-.045.046-.061.069-.161.069-.299v-2.24zm-2.347-5.859c.229 0 .354-.183.354-.431v-2.119c0-.255-.111-.434-.371-.434-.237 0-.353.185-.353.434v2.119c.001.24.137.431.37.431zm-.733 8.07c-.099.123-.317.325-.475.325-.172 0-.215-.118-.215-.292v-3.325h-.805v3.626c0 .88.597.885 1.031.636.16-.092.315-.227.464-.403v.479h.807v-4.338h-.807v3.292zm13.236-12.501v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-10.566 4.427c0 .45.137.813.592.813.256 0 .611-.133.979-.569v.503h.847v-4.554h-.847v3.457c-.104.129-.333.341-.498.341-.182 0-.226-.124-.226-.307v-3.491h-.847v3.807zm-3.177-2.621v2.233c0 .803.419 1.22 1.24 1.22.682 0 1.218-.456 1.218-1.22v-2.233c0-.713-.531-1.224-1.218-1.224-.745 0-1.24.493-1.24 1.224zm-3.155-2.806l1.135 3.67v2.504h.953v-2.504l1.11-3.67h-.969l-.611 2.468-.658-2.468h-.96zm11.564 11.667c-.014-2.978-.232-4.116-2.111-4.245-1.734-.118-7.377-.118-9.109 0-1.876.128-2.098 1.262-2.111 4.245.014 2.978.233 4.117 2.111 4.245 1.732.118 7.375.118 9.109 0 1.877-.129 2.097-1.262 2.111-4.245zm-1.011-.292v1.104h-1.542v.818c0 .325.027.607.352.607.34 0 .36-.229.36-.607v-.301h.83v.326c0 .836-.358 1.342-1.208 1.342-.771 0-1.164-.561-1.164-1.342v-1.947c0-.753.497-1.275 1.225-1.275.773-.001 1.147.491 1.147 1.275zm-.83-.008c0-.293-.062-.508-.353-.508-.299 0-.359.21-.359.508v.439h.712v-.439z"/>
  </svg>
</a>

	</div>

</div>
<!-- __________________________Section8__________________________ -->
<div class="section8">
  <h3 class="center">Openingstijden</h3>
  <br>
  <p>
    Maandag t/m donderdag van 13.00 tot 18.00 uur<br>
    Vrijdag van 9.00 tot 18.00 uur<br>
    Zaterdag van 9.00 tot 17.00 uur
  </p>
  <br>
<p>
  Tel. 0591-554375
  <br>
  E-mail: <a href='m&#97;i&#108;to&#58;inf&#111;&#37;40%61spe&#37;72&#103;&#37;65&#98;%6&#70;er&#100;er%69%6Asandur&#46;nl'>&#105;nf&#111;&#64;asp&#101;&#114;geb&#111;erderi&#106;sandu&#114;&#46;&#110;l</a>
  <br><br>
  Voor bestellingen kunt u het volgende e-mailadres gebruiken: <a href='&#109;a&#105;lto&#58;be%73tell&#101;&#37;6E%4&#48;a%&#55;3p&#37;&#54;5&#114;&#37;&#54;7&#101;%&#54;2o%6&#53;rderijsa%&#54;Ed&#117;r&#46;nl'>b&#101;stellen&#64;asp&#101;rge&#98;oer&#100;&#101;&#114;i&#106;sa&#110;&#100;ur&#46;nl</a>
</p>
</div>
<!-- __________________________Section9__________________________ -->
<div class="section9">
<h3 class="center">Adres</h3>
<br>
  <div id="googleMap" style="width:100%;height:400px;"></div>
  <br>
  <p>
    <a target="_blank" href="https://www.google.nl/maps/place/Aspergeboerderij+Sandur/@52.7166898,6.8815538,15z/data=!4m5!3m4!1s0x47b7e579c0243853:0xc3ecc23e1520860d!8m2!3d52.7136985!4d6.8877246"> <h4>Route >></h4> </a>
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
