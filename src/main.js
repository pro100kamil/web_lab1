function checkX() {
    let count = 0;
    for (let radioBox of document.getElementsByName("param_x")) {
        if (radioBox.checked) {
            count += 1;
        }
    }
    if (count !== 1) {
        alert("Вы не выбрали X");
        return false;
    }
    return true;
}

function checkY() {
    let y = document.getElementById("param_y").value;
    if (isNaN(y) || y === "") {
        alert("Y должен быть числом!");
        return false;
    }
    if (y % 1 !== 0 && String(y).length > 7) {
        alert("Y должен быть числом, состоящим из менее 8 символов (<= 7)!");
        return false;
    }
    if (y <= -3 || y >= 5) {
        alert("Y на промежутке (-3:5)!");
        return false;
    }
    return true;
}

function checkR() {
    let count = 0;
    for (let checkBox of document.getElementsByName("param_r")) {
        if (checkBox.checked) {
            count++;
            console.log(checkBox.id);
        }
    }
    if (count !== 1) {
        alert("R должен быть один!");
        return false;
    }
    return true;
}

function check() {
    let validX = checkX();
    if (validX) {
        let validY = checkY();
        if (validY) {
            let validR = checkR();
            return validY && validR;
        }
        return validY;
    }
    return validX;
}

document.getElementById("submit").onclick = check;

//исправить длинные числа
//брать таймзону от юзера
