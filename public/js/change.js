

var getLine = document.querySelector("#linha");

var levelNow = document.querySelector("#levelNow");
var levelNowContent = levelNow.textContent;

var alertLevel = document.querySelector("#alertLevel");
var alertLevelContent = alertLevel.textContent;

var floodLevel = document.querySelector("#floodLevel");
var floodLevelContent = floodLevel.textContent;

function colorRow() {
    if (
        levelNowContent === "Problema na PCD" ||
        levelNowContent === "Nível indisponível"
    ) {
        var color = "NivelNormal";
    } else {
        if (
            alertLevelContent - levelNowContent <= 500 &&
            alertLevelContent - levelNowContent > 0
        ) {
            var color = "NivelPreAlerta";
        } else if (
            levelNowContent >= alertLevelContent &&
            levelNowContent < floodLevelContent
        ) {
            var color = "NivelAlerta";
        } else if (levelNowContent >= floodLevelContent) {
            var color = "NivelInundacao";
        } else {
            var color = "NivelNormal";
        }
    }

    return getLine.classList.add(color);
}
