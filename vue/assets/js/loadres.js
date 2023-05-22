function loadres(path, type) {
  let mod = document.getElementById("modal");
  let content = "<button id='closeModal' onclick='closeModal();'>&times;</button>";
  if (type === "video") {
    content +='<video width="400" controls>'+
        '<source src="'+path+'" type="video/mp4">'+
        'Your browser does not support HTML video.'+
  '</video>';

  } else if(type==="pdf") {
    content+='<embed src="'+path+'" width="500" height="600" type="application/pdf">';
  }else{
    content += '<a href="' + path + '">Télécharger</a>';
  }
  mod.innerHTML = content;
  mod.style.display = "block";
}

function closeModal() {
  var modal = document.getElementById("modal");
  modal.style.display = "none";
  modal.innerHTML = "";
}
