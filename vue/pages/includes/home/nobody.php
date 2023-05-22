<?php
ob_start(); ?>

<style>
  .red-square {
    background-color: var(--color-2);
    width: 60%;
    float: left;
    word-wrap: break-word;
    white-space: normal;
    border-radius: 1.5%;
  }

  .green-square {
    background-color: var(--color-3);
    margin-top: 23px;
    width: 30%;
    position: relative;
    top: 1.5rem;
    border-radius: 1.5%;
  }

  .image-container {
    position: absolute;
    top: 45%;
    left: 68%;
    max-height: 70%;
    transform: translate(-50%, -50%);
    z-index: 1;

  }

  .parent {
    display: flex;
    position: relative;
    flex-shrink: 3;
    margin-bottom: 10%;
  }

  .section2 {

    margin-bottom: 10%;
  }

  .texte {
    margin-right: 10rem;
    color: var(--color-1);
    font-family: system-ui;
    viewport width: 100;
  }

  .texte::selection {
    color: var(--color-4);
    background: var(--color-6);
  }

  .get-started-button {
    background-color: var(--color-3);
    color: var(--color-1);
    border: none;

    text-align: center;
    width: 12rem;
    height: 4rem;
    font-size: 16px;
    margin: 8rem 5rem;
    cursor: pointer;
    border-radius: 1%;
  }

  .get-started-button:hover {
    background-color: var(--color-1);
    color: var(--color-4);
  }

  .txt {
    text-align: center;
    font-size: 1.5rem;
    font-family: system-ui;
    color: var(--color-1);
  }

  .txt2 {
    font-family: system-ui;
    color: var(--color-1);
  }

  .Troiscarre {
    background-color: var(--color-4);
    width: 20rem;
    max-width: 40rem;
    height: 10rem;
    border-radius: 3.5%;
    background-color: var(--color-2);

  }

  .TroiscarreSpecial {

    background-color: var(--color-2);
    width: 20rem;
    height: 10rem;
    margin-top: 5rem;
    border-radius: 3.5%;

  }

  .divparent {
    display: flex;
    justify-content: space-between;


  }

  .txtDeux {
    text-align: center;
    font-size: 25px;
    font-family: system-ui;
    font-weight: bold;
    color: var(--color-1);
  }

  .button-basdepage {
    background-color: var(--color-3);
    color: var(--color-1);
    font-weight: bold;
    border: none;
    text-align: center;
    width: 40rem;
    height: 5rem;
    font-size: 18px;
    cursor: pointer;
    position: relative;
    left: 50%;
    transform: translate(-50%, 15%);
    border-radius: 3.5%;
  }

  .button-basdepage:hover {
    background-color: var(--color-1);
    color: var(--color-4);
  }

</style>

<div class="parent">
  <div class="red-square">
    <h1 class="texte">Bienvenue sur notre site de formation en ligne<br><br></h1>
    <p class="texte">Nous sommes une plateforme éducative en ligne qui offre des cours dans différents domaines, tels
      que la programmation, le marketing, la finance, etc.<br><br></p>
    <p class="texte">Nous nous engageons à fournir des cours de qualité, dispensés par des experts dans leur domaine,
      pour vous aider à acquérir de nouvelles compétences et à améliorer votre carrière professionnelle.<br><br></p>
    <p class="texte">Nos cours sont conçus pour être interactifs et adaptés à votre rythme d'apprentissage. Vous
      pouvez suivre les cours à votre propre rythme et poser des questions à nos instructeurs en ligne si vous avez
      besoin d'aide.</p>
    <a href="./index.php?p=login"><button class="get-started-button">Get Started</button></a>
  </div>
  <div class="green-square"></div>
  <div class="image-container">
    <img src="/vue/assets/img/ImgHome.jpg" style="width:100% ; max-height: 38rem; border: 1px solid black;" />
  </div>
</div>

<div class="section2">
  <p class="txt"> ProForma te permet de...<br><br></p>
  <div class="divparent">
    <div class="Troiscarre">
      <p class="txt">Découvrir</p>
      <p class="txt2"><br>les cours qui donneront vie à votre carrière, étudiante.</p>
    </div>
    <div class="TroiscarreSpecial">
      <p class="txt">T'inserer</p>
      <p class="txt2"><br>dans le monde professionnel en t'offrant des compétences pertinentes et actualisées pour ta
        futur carriere.</p>
    </div>
    <div class="Troiscarre">
      <p class="txt">Te motiver</p>
      <p class="txt2"><br>est notre priorité afin que tu puisses atteindre tes objectifs académiques et professionnels
        avec succès.</p>
    </div>
  </div>
</div>

<div class="section3">
  <p class="txtDeux"> Bienvenue chez ProForma<br></p>
  <a href="./index.php?p=login"><button class="button-basdepage">Découvrez nos formations</button></a>
</div>
<?php
$content = ob_get_contents();
ob_get_clean();
