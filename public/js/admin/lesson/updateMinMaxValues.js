function updateMinValues() {
    var input1 = document.getElementById('ageFrom');
    var input2 = document.getElementById('ageTo');

    input2.min = input1.value;
}
function updateMaxValues() {
    var input1 = document.getElementById('ageFrom');
    var input2 = document.getElementById('ageTo');

    input1.max = input2.value;
}
