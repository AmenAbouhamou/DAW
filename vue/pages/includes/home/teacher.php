<?php
ob_start(); ?>

<style>
  main>div {
    background-color: var(--color-4);
    color: var(--color-1);
    padding: 2rem;
  }

  main>div>a {
    color: var(--color-2);
    text-decoration: none;
  }

  .show-courses {
    background-color: var(--color-3);
    color: var(--color-4);
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    margin: 1rem;
  }

  .show-courses:hover {
    background-color: var(--color-1);
    color: var(--color-4);
  }

  #modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 9999;
  }

  #modal form {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    margin: auto;
    max-width: 500px;
    padding: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }

  #modal h1 {
    margin-top: 0;
  }

  #modal label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  #modal input[type="text"],
  #modal textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
  }

  #modal input[type="submit"] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 12px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 3px;
    cursor: pointer;
  }

  #modal input[type="submit"]:hover {
    background-color: #3e8e41;
  }

  #close-modal {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 25px;
    font-weight: bold;
    color: #050505;
    cursor: pointer;
  }

  #close-modal:hover {
    color: #000;
  }

</style>

<div>
  <a href="index.php?p=course"><button class="show-courses">Afficher mes cours</button></a>
  <a><button id="create-course" class="show-courses">Créer un nouveau cours</button></a>
</div>

<div id="modal">
  <form action="create_course.php" method="post">
    <span id="close-modal">&times;</span>
    <h1>Créer un nouveau cours</h1>
    <label for="course-name">Nom du cours :</label>
    <input type="text" name="course-name" id="course-name">
    <label for="course-desc">Description du cours :</label>
    <textarea name="course-desc" id="course-desc" rows="3" maxlength="65535"></textarea>
    <input type="submit" value="Créer">
  </form>
</div>

<script src="vue/assets/js/createcoursemodal.js"></script>

<?php
$content = ob_get_contents();
ob_get_clean();
// done

