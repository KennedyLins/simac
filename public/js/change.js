
var getLine = document.querySelector(".linha");
>>>>>>> 514f0a139ea41cc5f2b85bfe183d4e4a6167f819

var levelNow = document.querySelector(".levelNow");
var levelNowContent = levelNow.textContent;

var alertLevel = document.querySelector(".alertLevel");
var alertLevelContent = alertLevel.textContent;

var floodLevel = document.querySelector(".floodLevel");
var floodLevelContent = floodLevel.textContent;

function colorRow() {
    var color = "";
    if (
        levelNowContent === "Problema na PCD" ||
        levelNowContent === "Nível indisponível"
    ) {
        color = "Problema"; //NivelNormal
    } else {
        if (
            alertLevelContent - levelNowContent <= 500 &&
            alertLevelContent - levelNowContent > 0
        ) {
            color = "NivelPreAlerta";
        } else if (
            levelNowContent >= alertLevelContent &&
            levelNowContent < floodLevelContent
        ) {
            color = "NivelAlerta";
        } else if (levelNowContent >= floodLevelContent) {
            color = "NivelInundacao";
        } else {
            color = "NivelNormal";
        }
    }
    return console.log(color);
}

//getLine.classList.add(color);

//return getLine.classList.add(color);
//}
