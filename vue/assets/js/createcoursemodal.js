var Bopen=document.querySelector('#create-course');
const modalForm = document.querySelector('#modal');
const closeModal = document.getElementById("close-modal");


Bopen.addEventListener("click",()=>{
  modalForm.style.display = 'flex';
})


closeModal.addEventListener("click", () => {
  modal.style.display = "none";
});

