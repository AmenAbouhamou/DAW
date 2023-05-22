<?php
ob_start();
?>

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

</style>

<div>
  <a href="index.php?p=course"><button class="show-courses">Afficher mes cours</button></a>
  <a href="index.php?p=forum"><button class="show-courses">Afficher les forums</button></a>
</div>

<?php
$content = ob_get_contents();
ob_get_clean();
// done

