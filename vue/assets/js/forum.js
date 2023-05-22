function sendMessage(){
// Define the data to be sent to the PHP script
    const data = {
        forumid:$("#forumid").val(),//forum_id
        message: $("#message").val()//message
    };
    console.table(data);
// Send an AJAX POST request to the PHP script
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../controller/forum/send_message_forum.php");
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