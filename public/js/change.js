
var getLine = document.querySelector(".linha");
var levelNow = document.querySelector(".levelNow");
var levelNowContent = levelNow.textContent;

var alertLevel = document.querySelector(".alertLevel");
var alertLevelContent = alertLevel.textContent;

var floodLevel = document.querySelector(".floodLevel");
var floodLevelContent = floodLevel.textContent;



function colorRow($hidro_stations) {
    

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

