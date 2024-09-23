// Toggle sections and save the selected tab to localStorage
function toggleSection(sectionNumber) {
    // Store the selected section in localStorage
    localStorage.setItem('selectedSection', sectionNumber);

    for (let i = 1; i <= 6; i++) {
        let section = document.getElementById(`section${i}`);
        if (i === sectionNumber) {
            section.classList.remove('hidden');
        } else {
            section.classList.add('hidden');
        }
    }
}

// Toggle details and save the selected details to localStorage
function details(detailsNumber) {
    // Store the selected details in localStorage
    localStorage.setItem('selectedDetails', detailsNumber);

    for (let i = 1; i <= 4; i++) {
        let details = document.getElementById(`details${i}`);
        if (i === detailsNumber) {
            details.classList.remove('hidden');
        } else {
            details.classList.add('hidden');
        }
    }
}

// Restore the last selected section and details after page load
window.onload = function () {
    let selectedSection = localStorage.getItem('selectedSection');
    let selectedDetails = localStorage.getItem('selectedDetails');

    // If there is a stored section, activate it
    if (selectedSection) {
        toggleSection(parseInt(selectedSection));
    } else {
        toggleSection(1); // Default to section 1 if none is stored
    }

    // If there is a stored details section, activate it
    if (selectedDetails) {
        details(parseInt(selectedDetails));
    } else {
        details(1); // Default to details 1 if none is stored
    }
}

// Toggle forms (simplified using a generic function)
function toggleForm(formId) {
    var form = document.getElementById(formId);
    form.classList.toggle('hidden');
}

// Toggle codes
function toggleCode(codeToShowId, codeToHideId) {
    var codeToShow = document.getElementById(codeToShowId);
    var codeToHide = document.getElementById(codeToHideId);
    codeToShow.classList.remove('hidden');
    codeToHide.classList.add('hidden');
}

function togglecode1() {
    console.log("togglecode1 triggered");
    var form = document.getElementById("formcode1");
    form.classList.toggle("hidden");
}


