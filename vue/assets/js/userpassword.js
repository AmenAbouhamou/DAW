
/////////////        USER        /////////////////////////////////////////////
function disabledivpass(){
    const divpass=document.getElementById("password");
    divpass.style.display="none";
}
function validPassword(){
    const pass=$("#new-password").val();
    const confpass=$("#confirm-password").val();
    const divpass=document.getElementById("password");
        // $("#password");
    if(pass!=confpass)
    {
        divpass.style.display="block";
        divpass.style.color="red";
        divpass.innerText="mot passe pas valide";
    }else{
        divpass.style.display="none";
        const data = {
            id:$("#iduser").val(),
            username:$("#username").val(),
            password:$("#new-password").val()
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
        location.href = window.location.href;
    }
}


