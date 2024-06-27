// Retrieve locations data from data-locations attribute
const locations = JSON.parse(document.currentScript.getAttribute('data-locations'));

async function addTimeslot() {
    const container = document.getElementById('timeslotsContainer');
    const timeslotCount = container.getElementsByClassName('timeslot').length;

    const timeslotDiv = document.createElement('div');
    timeslotDiv.classList.add('timeslot');

    timeslotDiv.innerHTML = `
        <div id="timeslot">
            <hr class="hr">
            <div class="row g-2">
                <div class="col">
                    <label for="start_time_${timeslotCount}"><b>Start tidspunkt</b></label>
                    <input class="form-control" type="time" id="start_time_${timeslotCount}" name="start_times[]" required>
                </div>
                <div class="col">
                    <label for="end_time_${timeslotCount}"><b>Slut tidspunkt</b></label>
                    <input class="form-control" type="time" id="end_time_${timeslotCount}" name="end_times[]" required>
                </div>
            </div>
            <div class="row g-2">
                <div class="col">
                    <label for="day_${timeslotCount}"><b>Uge dag</b></label>
                    <select class="form-control" id="day_${timeslotCount}" name="days[]" required>
                        <option value="0">Mandag</option>
                        <option value="1">Tirsdag</option>
                        <option value="2">Onsdag</option>
                        <option value="3">Torsdag</option>
                        <option value="4">Fredag</option>
                        <option value="5">Lørdag</option>
                        <option value="6">Søndag</option>
                    </select>
                </div>
                <div class="col">
                    <label for="location_${timeslotCount}"><b>Lokale</b>
                    <select class="form-control" id="location_${timeslotCount}" name="locations[]" required>
                        ${locations.map(location => `<option value="${location.id}">${location.room_name}</option>`).join('')}
                    </select>
                </div>
            </div>
            <button type="button" class="btn btn-danger remove-timeslot-btn" onclick="removeTimeslot(this)">Slet</button>
        </div>
    `;

    container.appendChild(timeslotDiv);
}

let timeslotsToDelete = [];
function removeTimeslot(button) {
    const timeslotId = button.parentElement.value;
    timeslotsToDelete.push(timeslotId);
    const timeslotDiv = button.parentElement;
    timeslotDiv.remove();
}

// Function to submit the form
function submitForm() {
    console.log(timeslotsToDelete);
    // Add the array of timeslot IDs to a hidden input field in the form
    document.getElementById('timeslotsToDeleteInput').value = JSON.stringify(timeslotsToDelete);
    document.getElementById('lessonForm').submit();
}
