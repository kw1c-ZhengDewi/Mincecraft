function nextStep(step) {
    let currentStep = step - 1;
    let inputs = document.querySelectorAll(`#step${currentStep} input[type="radio"]`);

    let selected = Array.from(inputs).some(input => input.checked);
    if (!selected) {
        alert("Please select an answer before proceeding.");
        return;
    }

    // Hide all steps
    document.querySelectorAll('.form-step').forEach(div => div.style.display = 'none');
    document.getElementById('step' + step).style.display = 'block';

    // If it's the last step, show the results before submitting
    if (step === 6) {
        showResults();
    }
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

    // Add the "Zie je Resultaten" link after displaying the results
    let resultLinkHTML = `
        <div>
            <span id="Form-div-BTN">
                <a id="Form-a-BTN" href="resultaat.php"><span id="BTN-Touches">Zie je Resultaten</span></a>
            </span>
        </div>
    `;

    // Add the link below the results
    document.getElementById('result').innerHTML += resultLinkHTML;

    // Submit the form after showing the results (after a delay)
    setTimeout(() => {
        let form = document.querySelector('form');
        form.submit(); // Submit the form after 3 seconds
}, 300000000000000); // Delay submission for 3 seconds (adjust as needed)
}