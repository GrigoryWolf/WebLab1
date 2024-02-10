document.getElementById('input-form').addEventListener('submit', getData);
const xhr = new XMLHttpRequest();
function getData(event){
    event.preventDefault();
    let form = document.getElementById('input-form');
    let x = form.x.value;
    let y = form.y.value;
    let r = form.r.value;
    x = x.replace(",", ".");
    if(validateValues(x, y, r)) {
        xhr.open('POST', 'php/main.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.responseType = 'text';
        let body = "x=" + x + "&y=" + y + "&r=" + r;
        xhr.send(body);
    }
    xhr.onload = () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.response);
            addToTable(xhr.response);
        }
    }
}