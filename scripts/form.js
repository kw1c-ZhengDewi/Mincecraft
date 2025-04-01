function nextStep(step) {
    let currentStep = step - 1;
    let inputs = document.querySelectorAll(`#step${currentStep} input[type="radio"]`);

    // Check if at least one radio button is selected
    let selected = Array.from(inputs).some(input => input.checked);
    if (!selected) {
        alert("Please select an answer before proceeding.");
        return;
    }

    // Hide all steps
    document.querySelectorAll('.form-step').forEach(div => div.style.display = 'none');

    // Show the next step
    document.getElementById('step' + step).style.display = 'block';
}

function prevStep(step) {
    // Hide all steps
    document.querySelectorAll('.form-step').forEach(div => div.style.display = 'none');

    // Show the previous step
    document.getElementById('step' + step).style.display = 'block';
}

function showResults() {
    // Hide all steps
    document.querySelectorAll('.form-step').forEach(div => div.style.display = 'none');

    // Show the result
    let result = "<h2>Your Answers:</h2>";
    for (let i = 1; i <= 5; i++) {
        let answer = document.querySelector(`input[name="q${i}"]:checked`);
        if (answer) {
            result += `<p>Question ${i}: ${answer.parentElement.innerText.trim()}</p>`;
        }
    }

    // Display the result message
    document.getElementById('result').innerHTML = result;
    document.getElementById('result').style.display = 'block';
}
