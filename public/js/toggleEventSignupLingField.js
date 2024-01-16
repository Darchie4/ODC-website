function toggleSignupField() {
    var signupFieldContainer = document.getElementById("signupFieldContainer");
    var checkbox = document.getElementById("signupNeeded");

    if (checkbox.checked) {
        signupFieldContainer.style.display = "block";
    } else {
        signupFieldContainer.style.display = "none";
    }
}

function toggleLocationFields() {
    var textLocationContainer = document.getElementById("textLocationContainer");
    var selectLocationContainer = document.getElementById("selectLocationContainer");
    var checkbox = document.getElementById("showLocation");

    if (checkbox.checked) {
        textLocationContainer.style.display = "block";
        selectLocationContainer.style.display = "none";
    } else {
        textLocationContainer.style.display = "none";
        selectLocationContainer.style.display = "block";
    }
}

function validateDateTime() {
    var startTimeInput = document.getElementById("start_time");
    var endTimeInput = document.getElementById("end_time");

    // Get the current date and time
    var currentDate = new Date();

    // Convert input values to Date objects
    var startTime = new Date(startTimeInput.value);
    var endTime = new Date(endTimeInput.value);

    // Check if start_time is not in the past
    if (startTime < currentDate) {
        alert("Start tidspunkt må ikke være i fortiden.");
        startTimeInput.value = ""; // Clear the input value
        return;
    }

    // Check if end_time is after start_time
    if (endTime <= startTime) {
        alert("Slut tidspunkt skal være efter start tidspunkt.");
        endTimeInput.value = ""; // Clear the input value
        return;
    }
}
document.getElementById("teacherImg").addEventListener("change", handleFileSelect);

function handleFileSelect(event) {
    var input = event.target;
    var output = document.getElementById("fileList");

    output.innerHTML = ""; // Clear previous file list

    var files = input.files;

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var listItem = document.createElement("li");
        listItem.textContent = file.name;
        output.appendChild(listItem);
    }
}
