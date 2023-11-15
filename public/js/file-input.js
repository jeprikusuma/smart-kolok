const fileInputHandler = e => {
    let name = e.target.files[0].name;
    e.target.parentElement.querySelector('label').innerHTML = name;
}