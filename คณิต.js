let text = document.getElementById('text-input')
let runButton = document.getElementById('run-button')

function search() {
    let text2 = text.value

    if (text2=='วิชาสังคมวันที่31/10/65') {
        window.location.href = './สังคม.html'
    }
}

runButton.addEventListener('click', search)

