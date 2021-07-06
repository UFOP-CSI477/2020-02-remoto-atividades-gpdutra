function Competidor(start, name, time) {
    this.start = start;
    this.name = name;
    this.time = time;
}

function compararNumeros(a, b) {
    return a - b;
}


function generateResults() {

    let aPosition = [];
    let aComp = [];
    let aPlayersPosition = [];

    const player1 = new Competidor(document.getElementById("startPlayer1").value, document.getElementById("namePlayer1").value, document.getElementById("timePlayer1").value);
    const player2 = new Competidor(document.getElementById("startPlayer2").value, document.getElementById("namePlayer2").value, document.getElementById("timePlayer2").value);
    const player3 = new Competidor(document.getElementById("startPlayer3").value, document.getElementById("namePlayer3").value, document.getElementById("timePlayer3").value);
    const player4 = new Competidor(document.getElementById("startPlayer4").value, document.getElementById("namePlayer4").value, document.getElementById("timePlayer4").value);
    const player5 = new Competidor(document.getElementById("startPlayer5").value, document.getElementById("namePlayer5").value, document.getElementById("timePlayer5").value);
    const player6 = new Competidor(document.getElementById("startPlayer6").value, document.getElementById("namePlayer6").value, document.getElementById("timePlayer6").value);



    aComp[0] = player1;
    aComp[1] = player2;
    aComp[2] = player3;
    aComp[3] = player4;
    aComp[4] = player5;
    aComp[5] = player6;


    for (let index = 0; index < aComp.length; index++) {
        aPosition[index] = parseInt(aComp[index].time);
    }

    aPosition.sort(function (a, b) {
        return a - b;
    });


    for (let i = 0; i < aPosition.length; i++) {

        for (let j = 0; j < aComp.length; j++) {
            if (aPosition[i] == aComp[j].time) {
                aPlayersPosition[i] = aComp[j];
                break;
            }
        }

    }


    const resultPlayer1 = new Competidor(aPlayersPosition[0].start, aPlayersPosition[0].name, aPlayersPosition[0].time);
    const resultPlayer2 = new Competidor(aPlayersPosition[1].start, aPlayersPosition[1].name, aPlayersPosition[1].time);
    const resultPlayer3 = new Competidor(aPlayersPosition[2].start, aPlayersPosition[2].name, aPlayersPosition[2].time);
    const resultPlayer4 = new Competidor(aPlayersPosition[3].start, aPlayersPosition[3].name, aPlayersPosition[3].time);
    const resultPlayer5 = new Competidor(aPlayersPosition[4].start, aPlayersPosition[4].name, aPlayersPosition[4].time);
    const resultPlayer6 = new Competidor(aPlayersPosition[5].start, aPlayersPosition[5].name, aPlayersPosition[5].time);

    document.getElementById("resultresultPlayer1").value = "Ganhador";
    document.getElementById("resultstartPlayer1").value = resultPlayer1.start;
    document.getElementById("resultnamePlayer1").value = resultPlayer1.name;
    document.getElementById("resulttimePlayer1").value = resultPlayer1.time;
    document.getElementById("resultpositionPlayer1").value = "1";

    let position = 1;

    if (resultPlayer2.time == resultPlayer1.time) {
        document.getElementById("resultresultPlayer2").value = "Ganhador";
        document.getElementById("resultpositionPlayer2").value = `${position}`;
    } else {
        position++;
        document.getElementById("resultpositionPlayer2").value = `${position}`;

    }

    document.getElementById("resultstartPlayer2").value = resultPlayer2.start;
    document.getElementById("resultnamePlayer2").value = resultPlayer2.name;
    document.getElementById("resulttimePlayer2").value = resultPlayer2.time;


    if (resultPlayer3.time == resultPlayer1.time) {
        document.getElementById("resultresultPlayer3").value = "Ganhador";
        document.getElementById("resultpositionPlayer3").value = `${position}`;
    } else {
        position++;
        document.getElementById("resultpositionPlayer3").value = `${position}`;

    }

    document.getElementById("resultstartPlayer3").value = resultPlayer3.start;
    document.getElementById("resultnamePlayer3").value = resultPlayer3.name;
    document.getElementById("resulttimePlayer3").value = resultPlayer3.time;


    if (resultPlayer4.time == resultPlayer1.time) {
        document.getElementById("resultresultPlayer4").value = "Ganhador";
        document.getElementById("resultpositionPlayer4").value = `${position}`;
    } else {
        position++;
        document.getElementById("resultpositionPlayer4").value = `${position}`;

    }

    document.getElementById("resultstartPlayer4").value = resultPlayer4.start;
    document.getElementById("resultnamePlayer4").value = resultPlayer4.name;
    document.getElementById("resulttimePlayer4").value = resultPlayer4.time;


    if (resultPlayer5.time == resultPlayer1.time) {
        document.getElementById("resultresultPlayer5").value = "Ganhador";
        document.getElementById("resultpositionPlayer5").value = `${position}`;
    } else {
        position++;
        document.getElementById("resultpositionPlayer5").value = `${position}`;

    }

    document.getElementById("resultstartPlayer5").value = resultPlayer5.start;
    document.getElementById("resultnamePlayer5").value = resultPlayer5.name;
    document.getElementById("resulttimePlayer5").value = resultPlayer5.time;


    if (resultPlayer6.time == resultPlayer1.time) {
        document.getElementById("resultresultPlayer6").value = "Ganhador";
        document.getElementById("resultpositionPlayer6").value = `${position}`;
    } else {
        position++;
        document.getElementById("resultpositionPlayer6").value = `${position}`;

    }

    document.getElementById("resultstartPlayer6").value = resultPlayer6.start;
    document.getElementById("resultnamePlayer6").value = resultPlayer6.name;
    document.getElementById("resulttimePlayer6").value = resultPlayer6.time;

    document.getElementById("resultTable").style.display = "";
    document.getElementById("entryTable").style.display = "none";
    document.getElementById("entryTableBtn").style.display = "none";
}