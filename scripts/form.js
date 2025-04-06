document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent page reload
        showResults(); // Show results without form reset

        // Submit the form programmatically after showing results
        document.querySelector("form").submit();
    });
});



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
    // Hide all steps, including step 1
    document.querySelectorAll('.form-step').forEach(div => div.style.display = 'none');

    // Show only the result section
    document.getElementById('result').style.display = 'block';

    // Generate results text
    let result = "<h2>Your Answers:</h2>";
    for (let i = 1; i <= 5; i++) {
        let answer = document.querySelector(`input[name="q${i}"]:checked`);
        if (answer) {
            result += `<p>Question ${i}: ${answer.parentElement.innerText.trim()}</p>`;
        }
    }

    // Display results
    document.getElementById('result').innerHTML = result;

    // Add "Zie je Resultaten" link
    let resultLinkHTML = `
        <div>
            <span id="Form-div-BTN">
                <a id="Form-a-BTN" href="../pages/resultaat.php"><span id="BTN-Touches">Zie je Resultaten</span></a>
            </span>
        </div>
    `;
    document.getElementById('result').innerHTML += resultLinkHTML;

}