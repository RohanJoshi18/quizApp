function addQuiz() {
    var createClicked = document.getElementById("create-quiz").clicked;
    while (createClicked == false) {
        if (document.getElementById("add-option").clicked == true) {
            addOption();
        }
    }
}

function deleteQuestion() {
    
}

function removeQuiz() {
    // remove selected quiz
    // delete from database
}

function addQuestion() {
    // check if question exists
    // if not, add new one
}

function addOption() {
    var newLabel = document.createElement("label");
    newLabel.setAttribute("for", id_from_input)
}

function changeOption() {
    // select option
    // change contents
}

function modifyQuiz() {
    // change quiz contents
    // select quiz question and edit
    // save changes button
}

