<html>
<?php include 'head.php'; ?>

<body>
<div class="container">

<?php include 'header.php';?> <!-- Roept de header op  -->

<div class="gridfreshfoodacademy">

  <div class="freshfoodacademyhome" id="freshfoodacademyhome"> <!-- home page freshfoodacademy -->
    <div class="textvlakwhitedoorzichtigfresh">  <!--textvlakwhitedoorzichtig1 -->
      <h3>
        Fresh food academy
      </h3>
    </div>
    <div class="demo">
      <a href="#freshfoodacademy1"><span></span></a> <!-- button -->
    </div>
  </div>



     <div id="freshfoodacademy1" class="mobielversie freshfoodacademy1">
       <h3>Fresh Food Academy</h3>
       <br>
       Voorlichting over gezond en lekker eten vinden wij heel belangrijk. Niet alleen over asperges, maar over verse groenten in het algemeen.
       Daarom hebben we de Fresh Food Academy opgezet, waar je meer te weten kunt komen over het verwerken van verse groente.
       Maar waar je ook kunt proeven of samen met een kok aan de slag kunt gaan.
       Natuurlijk wordt er dan ook meestal een kijkje op de velden genomen.
       <br><br>
       Probeer eens onze vegetarische aspergekroket,  gegrilde asperges omwikkeld met Italiaanse ham,
       broodje gezond met kaas, eitje, ham en asperges of een traditioneel aspergemaaltijd.
       <br><br>

     </div>

    <div class="mobielversie freshfoodacademy2">
    <img class="deboerderijfotoformaat" src="images/rsz_culinair-bord.jpg" alt="culinair-bord">
    </div>

    <div class="mobielversie freshfoodacademy3">
    <img class="deboerderijfotoformaat" src="images/ontbijt.jpg" alt="ontbijt">

    </div>
    <div class="mobielversie freshfoodacademy4">
      <p>
      <!-- Wij verzorgen voor bedrijven en particulieren informatieve programma‘s over vers voedsel.
      Op een ontspannen wijze nemen we u mee in de wereld van het bewaren en verwerken van geoogste producten.
      Deze programma‘s zijn ook geschikt als bedrijfsuitje of teambuilding.
      Wilt u meer informatie dan kunt u een e-mail sturen. -->



      <h1>Culinair genieten</h1>

      Lekker genieten van onze gerechten zonder zelf aan de slag te hoeven?
      Maar wel met de gezellige keukengeluiden en reuring van een professionele keuken?
      Onze Fresh Food Academy is vooral een geniet, ontdek en blijf-even-zitten-om-te-proeven-met-je-gezin-en-vrienden-ruimte.
<br><br>
      In samenwerking met koks uit de omgeving verzorgen we diverse culinaire middagen en avonden.
      De ene keer is het een 8 gangenmenu dan een live-cooking buffet of een kook-workshop.
<br><br>
      Onze professionele keuken is een grote open keuken waar u en uw gasten ontspannen een kijkje kunnen nemen tijdens het diner of lunch.
      De chef bereidt á la minute de diverse gerechten.
<br><br>



    </div>

    <div class="mobielversie freshfoodacademy5">
      <b>
          De datums voor de culinaire avonden die tot nu toe gepland zijn:
      <br><br>

          Zaterdag 28 april<br>
          Woensdag 2 mei (Voor ouders, opa's en oma's, met kinderen)<br>
          vrijdag 18 mei<br>
          Maandag 21 mei (2ᵉ Pinksterdag)<br>
          Zaterdag 26 mei<br>
          Zondag 17 juni (Vaderdag)
      </b>
            </p>
    </div>
    <div class="mobielversie freshfoodacademy6">
      <video id="videoElementId" controls loop muted>
       <source src="videos/FreshFoodAcademy.mp4" type="video/mp4">
       <source src="movie.ogg" type="video/ogg">
     Your browser does not support the video tag.
     </video>
     <script>
     window.addEventListener('load', function(){
         var newVideo = document.getElementById('videoElementId');
         newVideo.addEventListener('ended', function() {
             this.currentTime = 0;
             this.play();
         }, false);

         newVideo.play();

     });
     </script>
    </div>
      <div class="sectiontussen1"></div><!-- lege tussen ruimte van 7vh -->
</div><!--/end grid-->

</div><!--/container-->

<?php include 'footer.php'; ?>
</body>
</html>
