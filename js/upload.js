
function updateFile() {
    const inputElement = document.getElementById("file").files
    
    sendForm(inputElement)
}

async function sendForm(data) {
    const res = await fetch ('./database/avatar.php', {
        method: "POST",
        headers: {'Content-type': 'application/json'},
        body: data
    })
}