
// Reset fields on load
/*resets();*/

// Get references to form elements
const firstNameInput = document.getElementById('first-name');
const lastNameInput = document.getElementById('last-name');
const categoryInputs = document.getElementsByName('category');
const birthdateInput = document.getElementById('birthdate');
const mobilePhoneInput = document.getElementById('mobile-phone');
const athleteEmailInput = document.getElementById('athlete-email');
const citizenshipInput = document.getElementById('citizenship');
const eapMemberInputs = document.getElementsByName('eap-member');
const competition1Input = document.getElementById('competition1');
const competition2Input = document.getElementById('competition2');
const worldAthleticsProfileLinkInput = document.getElementById('profile-link');
const codeOfConductInput = document.getElementById('code-of-conduct');
const safeguardingPoliciesInput = document.getElementById('safeguarding-policies');
const runCleanCertificationInput = document.getElementById('run-clean-certification');
const registerButton = document.getElementById('register-button');

// Add select if EAP member is checked
eapMemberYes = document.getElementById('eap-member-yes');
eapMemberNo = document.getElementById('eap-member-no');
eapMemberYes.addEventListener('click', toggleEapMemberSelect);
eapMemberNo.addEventListener('click', toggleEapMemberSelect);

// Disable competition2 if it is the same as competition1
competition1Input.addEventListener('input', toggleCompetition2);
function toggleCompetition2() {
    if (competition2Input.value == competition1Input.value) {
        for (var i = 0; i < competition2Input.length; i++) {
            //remove the option if it is the same as competition1
            if (competition2Input[i].value == competition1Input.value) {
                while (competition2Input.firstChild)
                    competition2Input.removeChild(competition2Input.firstChild);
                for (var j = 0; j < competition1Input.length; j++) {
                    if (competition1Input[j].value != competition1Input.value) {
                        var text = document.createTextNode(competition1Input[j].value);
                        var option = document.createElement("option");
                        option.value = competition1Input[j].value;
                        option.appendChild(text);
                        competition2Input.appendChild(option);
                    }
                }
                return;
            }
        }
    } else {
        for (var i = 0; i < competition2Input.length; i++) {
            //remove the option if it is the same as competition1
            if (competition2Input[i].value == competition1Input.value) {
                competition2Input.removeChild(competition2Input[i]);
                return;
            }
        }
    }
}

// Add textarea for certification info if runCleanCertificationInput is checked
runCleanCertificationInput.addEventListener('click', IRCcertificate);

// Check if phone number is valid
mobilePhoneInput.addEventListener('input', checkPhoneNumber);
//Check if email is valid
athleteEmailInput.addEventListener('input', checkEmailFormat);
// Check if link is valid
worldAthleticsProfileLinkInput.addEventListener('input', checkLinkValidity);

// Add an event handler to check if all fields are filled
for (const input of [firstNameInput, lastNameInput, birthdateInput, mobilePhoneInput, athleteEmailInput, citizenshipInput, competition1Input, worldAthleticsProfileLinkInput, codeOfConductInput, safeguardingPoliciesInput, runCleanCertificationInput]) {
    input.addEventListener('input', toggleRegisterButton);
}
for (const input of categoryInputs) {
    input.addEventListener('click', toggleRegisterButton);
}
for (const input of eapMemberInputs) {
    input.addEventListener('click', toggleRegisterButton);
}
// Allow submit only if all required fields are filled
function toggleRegisterButton() {
    if (
        firstNameInput.value.trim() !== '' &&
        lastNameInput.value.trim() !== '' &&
        isCategorySelected() &&
        birthdateInput.value.trim() !== '' &&
        mobilePhoneInput.value.trim() !== '' &&
        athleteEmailInput.value.trim() !== '' &&
        citizenshipInput.value.trim() !== '' &&
        isEapMemberSelected() &&
        competition1Input.value.trim() !== '' && isCompetition1Selected() &&
        worldAthleticsProfileLinkInput.value.trim() !== '' &&
        codeOfConductInput.checked &&
        safeguardingPoliciesInput.checked
    ) {
        registerButton.removeAttribute('disabled');
    } else {
        registerButton.setAttribute('disabled', 'disabled');
    }
}

function isCategorySelected() {
    for (const categoryInput of categoryInputs) {
        if (categoryInput.checked) {
            return true;
        }
    }
    return false;
}
function isEapMemberSelected() {
    for (const eapMemberInput of eapMemberInputs) {
        if (eapMemberInput.checked) {
            return true;
        }
    }
    return false;
}
function isCompetition1Selected() {
    if (competition1Input.value.trim() !== '') {
        return true;
    }
    return false;
}



// Reset fields on load
function resets() {
    var inputs = document.getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].type == 'checkbox' || inputs[i].type == 'radio') {
            inputs[i].checked = false;
        }
    }
    // Reset submit button on load
    document.getElementById('register-button').setAttribute('disabled', 'disabled');
}


// Check if phone number is valid
function checkPhoneNumber() {
    if (mobilePhoneInput.value.length < 12 || mobilePhoneInput.value.length > 15 || isNaN(mobilePhoneInput.value)) {
        mobilePhoneInput.setCustomValidity('Phone number must be at least 10 digits');
        mobilePhoneInput.setAttribute('style', 'border-color: red; background-color: #fdd');
    } else {
        mobilePhoneInput.setCustomValidity('');
        mobilePhoneInput.setAttribute('style', 'border-color: #ccc');
    }
}
//Check if email is valid
function checkEmailFormat() {
    emailPattern = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,}\b/;

    if (!athleteEmailInput.value.match(emailPattern) || athleteEmailInput.value.length < 5 || athleteEmailInput.value.length > 254) {
        athleteEmailInput.setCustomValidity('Email not valid');
        athleteEmailInput.setAttribute('style', 'border-color: red; background-color: #fdd');
    } else {
        athleteEmailInput.setCustomValidity('');
        athleteEmailInput.setAttribute('style', 'border-color: #ccc');
    }
}
// Check if link is valid
async function checkLinkValidity() {
    /*const linkPattern = /^https?:\/\/(?:www\.)?worldathletics\.org\/athletes\/.+/;
    const linkValue = worldAthleticsProfileLinkInput.value.trim();

    if (linkValue === '' || !linkValue.match(linkPattern)) {
        worldAthleticsProfileLinkInput.setCustomValidity('Invalid World Athletics profile link');
        worldAthleticsProfileLinkInput.setAttribute('style', 'border-color: red; background-color: #fdd');
    } else {
        try {
            const response = await fetch(linkValue);
        	
            if (response.ok) {
                worldAthleticsProfileLinkInput.setCustomValidity('');
                worldAthleticsProfileLinkInput.setAttribute('style', 'border-color: #ccc');
                console.log('Valid: Live link');
            } else {
                worldAthleticsProfileLinkInput.setCustomValidity('Invalid: Link not reachable');
                worldAthleticsProfileLinkInput.setAttribute('style', 'border-color: red; background-color: #fdd');
                console.log('Invalid: Link not reachable');
            }
        } catch (error) {
            worldAthleticsProfileLinkInput.setCustomValidity('Invalid: Error checking link');
            worldAthleticsProfileLinkInput.setAttribute('style', 'border-color: red; background-color: #fdd');
            console.log('Invalid: Error checking link');
        }
        worldAthleticsProfileLinkInput.setCustomValidity('');
        worldAthleticsProfileLinkInput.setAttribute('style', 'border-color: #ccc');
    }*/
}



// Add textarea for certification info if runCleanCertificationInput is checked
function toggleEapMemberSelect() {
    if (eapMemberYes.checked && document.getElementById("athlete").childElementCount == 1) {
        select = document.createElement("select");
        select.required = true;
        select.append(createSelectOption("", "SELECT ONE -->"));
        select.append(createSelectOption("Amsterdam", "Amsterdam(NED)"));
        select.append(createSelectOption("Annecy", "Annecy(FRA)"));
        select.append(createSelectOption("Budapest", "Budapest(HUN)"));
        select.append(createSelectOption("Catania", "Catania(ITA)"));
        select.append(createSelectOption("Celle Ligure", "Celle Ligure(ITA)"));
        select.append(createSelectOption("Donnas", "Donnas(ITA)"));
        select.append(createSelectOption("Geneve", "Geneve(SUI)"));
        select.append(createSelectOption("Kuldiga", "Kuldiga(LAT)"));
        select.append(createSelectOption("Loughborough", "Loughborough(UK)"));
        select.append(createSelectOption("Malta", "Malta(MLT)"));
        select.append(createSelectOption("Nivelles", "Nivelles(BEL)"));
        select.append(createSelectOption("Palafrugell", "Palafrugell(ESP)"));
        select.append(createSelectOption("San Vito", "San Vito(ITA)"));
        select.append(createSelectOption("Villa Manin", "Villa Manin(ITA)"));
        //put in the table
        tr = document.createElement("tr");
        tr.setAttribute("id", "eap-member-number");
        td = document.createElement("td");
        td.setAttribute("style", "display: ruby-base; margin-left: 50%;");
        tr.append(td);
        td = document.createElement("td");
        td.append(select);
        tr.append(td);
        document.getElementById("athlete").appendChild(tr);
    }
    if (eapMemberNo.checked) {	//remove select
        var eapMemberNumberRow = document.getElementById('eap-member-number');
        if (eapMemberNumberRow) {
            document.getElementById("athlete").removeChild(eapMemberNumberRow);
        }
    }
}
// Create select options for EAP member number
function createSelectOption(value, text) {
    var option = document.createElement('option');
    option.value = value;
    option.text = text;
    return option;
}



// Add textarea for certification info if runCleanCertificationInput is checked
function IRCcertificate() {
    var checksElement = document.getElementById("checks");
    if (runCleanCertificationInput.checked && document.getElementById("checks").childElementCount == 1) {
        tr = document.createElement("tr");
        tr.setAttribute("id", "irc-certification");
        td = document.createElement("td");
        td.setAttribute("style", "width: 20%");
        tr.append(td);
        document.getElementById("checks").appendChild(tr);
        td = document.createElement("td");
        label = document.createElement("label");
        label.setAttribute("for", "certification-info");
        label.textContent = "If YES, add more info:";
        label.setAttribute("font-style", "italic");
        label.setAttribute("style", "text-align:left; margin-left: -15px; margin-top: -5%");
        label.required = true;
        textarea = document.createElement("textarea");
        textarea.setAttribute("style", "margin-left: 10px;");
        textarea.setAttribute("rows", "2");
        textarea.setAttribute("cols", "30");
        textarea.setAttribute("id", "certification-info");
        textarea.setAttribute("name", "certification-info");
        textarea.setAttribute("placeholder", "date of completion and certification number")
        td.append(label);
        td.append(textarea);
        tr.append(td);
        document.getElementById("checks").appendChild(tr);
    } else { //remove textarea
        var ircCertificationRow = document.getElementById('irc-certification');
        if (ircCertificationRow) {
            checksElement.removeChild(ircCertificationRow);
        }
    }
}