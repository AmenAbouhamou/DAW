
// Récupère la table et tous les lignes de la table
const table = document.getElementById("user-table");
const rows = table.getElementsByTagName("tr");
const filterSelect = document.getElementById("filter-select");
const searchInput = document.getElementById("search-input");
const userTable = document.getElementById("user-table");
const resetButton = document.getElementById("reset-button");
const deletebtn=document.getElementById("delete-user-btn");
function selectUser(userid){

  for (let i = 0; i < 8; i++) {
    console.table(i+" "+rows["user-" + userid].getElementsByTagName("td")[i].innerText);
  }
  const cells = rows["user-" + userid].getElementsByTagName("td");
  const nom = cells[1].innerText;
  const prenom = cells[2].innerText;
  const email = cells[3].innerText;
  const niveau = cells[4].innerText;
  const username = cells[5].innerText;
  const role = cells[6].innerText;
  const dateCreation = cells[7].innerText;

  // Crée la fenêtre modale avec les boutons Modifier et Supprimer
  const modal = document.getElementById("myModal");
  console.log(modal.style.display);
  if(modal.style.display=="none"){
    modal.style.display = "block";
    modal.innerHTML ="<button id='closeModal' onclick='closeModal();'>&times;</button>" +
        "<h2>" + nom + " " + prenom + "</h2>" +
        "<label for='email'>Email:</label>" +
        "<input type='text' id='email' value='" + email + "'><br><br>" +
        "<label for='niveau'>Niveau:</label>" +
        "<input type='text' id='niveau' value='" + niveau + "'><br><br>" +
        "<label for='username'>Username:</label>" +
        "<input type='text' id='username' value='" + username + "'><br><br>" +
        "<label for='role'>Role:</label>" +
        "<input type='text' id='role' value='" + role + "'><br><br>" +
        "<label for='dateCreation'>Date de création:</label>" +
        "<input type='text' id='dateCreation' value='" + dateCreation + "' disabled><br><br>" +
        "<button id='edit-user-btn' onclick='updateUser("+userid+")'>Modifier</button>" +
        "<button id='delete-user-btn' onclick='deleteUser("+userid+")'>Supprimer</button>";
  }
  else{
    $("#email").val(email);
    $("#niveau").val(niveau );
    $("#username").val(username);
    $("#role").val(role);
    $("#dateCreation").val(dateCreation);
  }
}

function updateUser(updateuserid){
  console.error(updateuserid);
// Define the data to be sent to the PHP script
  const data = {
    id:updateuserid,
    email: $("#email").val(),
    niveau: $("#niveau").val(),
    username:$("#username").val(),
    role:$("#role").val()
  };
  console.table(data);
// Send an AJAX POST request to the PHP script
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../controller/user/update_user.php");
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onload = function() {
    if (xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };
  const requestBody = "data=" + encodeURIComponent(JSON.stringify(data));
  xhr.send(requestBody);
  closeModal()
  location.href = window.location.href;
}

function deleteUser(deleteuserid){

// Send an AJAX POST request to the PHP script
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../controller/user/delete_user.php");
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onload = function() {
    if (xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };
  const requestBody = "deleteuserid=" + encodeURIComponent(deleteuserid);
  xhr.send(requestBody);
  closeModal()
  location.href = window.location.href;
}



// Crée la fenêtre modale avec les boutons Modifier et Supprimer
const modal = document.getElementById("myModal");
modal.style.display = "none";
modal.innerHTML ="<button id='closeModal' onclick='closeModal();'>&times;</button>" +
    "<h2></h2>" +
    "<label for='nom'>Nom:</label>" +
    "<input type='text' id='nom' ><br><br>" +
    "<label for='email'>Email:</label>" +
    "<input type='text' id='email' ><br><br>" +
    "<label for='niveau'>Niveau:</label>" +
    "<input type='text' id='niveau' ><br><br>" +
    "<label for='username'>Username:</label>" +
    "<input type='text' id='username'><br><br>" +
    "<label for='role'>Role:</label>" +
    "<input type='text' id='role' ><br><br>" +
    "<label for='dateCreation'>Date de création:</label>" +
    "<input type='text' id='dateCreation'><br><br>" +

    "<button id='edit-user-btn'>Modifier</button>" +
    "<button id='delete-user-btn'>Supprimer</button>";

// permet de fermer le modal
function closeModal() {
  let modal = document.getElementById("myModal");
  modal.style.display = "none";
  modal.innerHTML = "";
}

function search_user(){
  const filterValue = filterSelect.value;
  const searchTerm = searchInput.value.trim().toLowerCase();
  console.log("ciaocare "+filterValue+"   "+ searchTerm);
  //traiter toutes les lignes du tableau qui contient tous les utilisateurs

  // const row = userTable.rows[1];
  // console.table(row);
  // console.table(row.classList);

  for (let i = 1; i < userTable.rows.length; i++) {
    const row = userTable.rows[i];
    console.log(getColumnIndex(filterValue)+"   "+ row.getElementsByTagName("td")[getColumnIndex(filterValue)].innerText);
      let cell =row.getElementsByTagName("td")[getColumnIndex(filterValue)].innerText.trim().toLowerCase();
        if (cell.indexOf(searchTerm)>-1 || searchTerm == "") {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    }

}


// retourne l'indice de colonne correspondant au nom de colonne sélectionnée pour la recherche
function getColumnIndex(columnName) {
  switch (columnName) {
    case "nom":
      return 1;
    case "prenom":
      return 2;
    case "niveau":
      return 4;
    case "role":
      return 6;
    case "username":
      return 5;
    case "created_at":
      return 7;
    default:
      return -1;
  }
}

//Pour réinitialiser la recherche
resetButton.addEventListener("click", () => {
  filterSelect.value = "all";
  searchInput.value = "";
  for (let i = 0; i < userTable.rows.length; i++) {
    const row = userTable.rows[i];
    row.style.display = "";
  }
});
