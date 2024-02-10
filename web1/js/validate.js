const xErrorMessage = "X должно быть числом в диапозоне от -5 до 3\n";
const yErrorMessage = "Значение Y должно быть выбрано\n";
const rErrorMessage = "Значение R должно быть выбрано\n";
function validateValues(x, y, r){
    let errorMessage = "Ошибка ввода:\n"
    let xFlag = true;
    let yFlag = true;
    let rFlag = true;
    if (!isNumber(x) || x < -5 || x > 3){
        xFlag = false;
        errorMessage += xErrorMessage;
    }
    if (y == null || y === ""){
        yFlag = false;
        errorMessage += yErrorMessage;
    }
    if (r == null || r === ""){
        rFlag = false;
        errorMessage += rErrorMessage;
    }
    if(!(xFlag && yFlag && rFlag)){
        alert(errorMessage);
        return false;
    }
    return true;
}
function isNumber(value){
    return value != null && value !== "" && !isNaN(Number(value));
}