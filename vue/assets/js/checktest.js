function resetans() {
  let dom_questions = document.querySelectorAll(".question");
  dom_questions.forEach(elmt => {
    elmt.querySelectorAll(".ansv").forEach(e => {
      e.parentElement.style.color = "inherit";
    });
    elmt.querySelectorAll(".ansf").forEach(e => {
      e.parentElement.style.color = "inherit";
    });
    let ans = elmt.querySelector(".ans");
    ans.style.color = "inherit";
    ans.innerHTML = "";
  });
}

function checktest() {
  resetans();
  let dom_questions = document.querySelectorAll(".question");
  let color_true = "var(--color-7)";
  let color_false = "var(--color-8)";

  dom_questions.forEach(elmt => {
    let valid = true;
    elmt.querySelectorAll(".ansv").forEach(e => {
      if (e.checked) {
        e.parentElement.style.color = color_true;
      } else {
        valid = false;
      }
    });
    elmt.querySelectorAll(".ansf").forEach(e => {
      if (e.checked) {
        e.parentElement.style.color = color_false;
        valid = false;
      }
    });
    let ans = elmt.querySelector(".ans");
    if (valid) {
      ans.style.color = color_true;
      ans.innerHTML = "Correct";
    } else {
      ans.style.color = color_false;
      ans.innerHTML = "Incorrect";
    }
  });
}
