var nqnb = 0;

function inittest(num) {
  nqnb = num; // next question number
}

function deletequestion(qid) {
  let dom = document.querySelector("#q" + qid);
  dom.remove();
}

function addquestion() {
  let qcondom = document.querySelector("#question-container");
  let nqdom = '<div class="question" id="q' + nqnb + '">' +
  '<button type="button" onclick="deletequestion(' + nqnb + ')">&times;</button>' +
  '<textarea id="q' + nqnb + 'qt" name="q' + nqnb + 'qt" >Question</textarea><ul>';
  for (let ia = 1; ia <= 4; ia++) {
    nqdom += '<li><input id="q' + nqnb + 'a' + ia + 'v" name="q' + nqnb + 'a' + ia + 'v" type="checkbox" checked >' +
    '<input id="q' + nqnb + 'a' + ia + 't" name="q' + nqnb + 'a' + ia + 't" type="text" value="réponse"></li>';
  }
  nqdom += "</div>";
  nqnb++;
  qcondom.innerHTML += nqdom;
}

function sendData(){
  const length = document.querySelectorAll(".question").length;
  const idcourse=$("#courseid").val();
  let questions=new Array();
  for (let i = 0; i < length; i++) {
    let questionlist=new Array();
    const questioncontainer= document.getElementsByClassName("question")[i];
    const question=questioncontainer.getElementsByTagName("textarea")[0].innerHTML;
    questionlist.push({text:question});
    const answer=questioncontainer.getElementsByTagName("li");
    let answerlist=new Array();
    for (let j = 0; j < answer.length; j++) {
        let answercontainer=new Array();
        answercontainer.push({answer:answer[j].getElementsByTagName("input")[1].value});
        answercontainer.push({valid:answer[j].getElementsByTagName("input")[0].checked});
        answerlist.push(answercontainer);
    }
    questionlist.push(answerlist);
    questions.push(questionlist);
  }
  let test=new Array();
  test.push({id:idcourse});
  test.push({questions:questions});
  console.table(test);
  console.log(JSON.stringify(test))
  $.ajax({
    type: "POST",
    url: "../controller/courses/update_test.php",
    data: {test:JSON.stringify(test)},
    success: function(response){
      console.log(response);
    }
  });
  // location.href = window.location.href;
}
