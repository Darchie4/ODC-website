function hide(className){
    const lessonDescriptionContainer = document.getElementById("lessonDescriptionContainer");
    fetch(window.location.origin + '/lessonDescriptions/' + "file" + '.txt')
        .then(response => response.text())
        .then(text => {
            console.log(text)
            lessonDescriptionContainer.innerHTML = text
        })


    const elements = document.getElementsByClassName("scheduleTableElementContainer");

    for (let i = 0; i < elements.length; i++){
        if (elements[i].classList.contains(className + "Container")){
            elements[i].style.display = "table-row"
            continue;
        }
        elements[i].style.display = "none";
    }
}
