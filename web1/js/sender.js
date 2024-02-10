document.getElementById('input-form').addEventListener('submit', getData);
const xhr = new XMLHttpRequest();
function getData(event){
    event.preventDefault();

    xhr.open('POST', 'php/main.php');
    xhr.responseType = 'text';
    xhr.send();

    xhr.onload = () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
        }
        console.log(xhr.response);
        alert("awooga")
        addToTable(xhr.response);
    }
}