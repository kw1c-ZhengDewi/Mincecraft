
    function nextStep(stepNumber) {
    // Hide all steps
    const steps = document.querySelectorAll('.form-step');
    steps.forEach(step => step.style.display = 'none');

    // Show the next step
    const next = document.getElementById('step' + stepNumber);
    if (next) {
    next.style.display = 'block';
}
}

    function prevStep(stepNumber) {
    // Hide all steps
    const steps = document.querySelectorAll('.form-step');
    steps.forEach(step => step.style.display = 'none');

    // Show the previous step
    const prev = document.getElementById('step' + stepNumber);
    if (prev) {
    prev.style.display = 'block';
}
}

    function showResults() {
        const form = document.querySelector('form');
        const questions = ['q1', 'q2', 'q3', 'q4', 'q5'];
        for (const name of questions) {
            const checked = form.querySelector(`input[name="${name}"]:checked`);
            if (!checked) {
                alert('Beantwoord alle vragen voordat je verdergaat.');
                return;
            }
        }

        // Submit via fetch to allow cookies to be set without reloading
        const formData = new FormData(form);
        fetch('', {
            method: 'POST',
            body: formData
        }).then(response => {
            if (response.ok) {
                // Hide the form and show a thank you message with a link
                form.style.display = 'none';
                const resultDiv = document.getElementById('result');
                resultDiv.style.display = 'block';
                resultDiv.innerHTML = `
        <h3>Bedankt voor het invullen!</h3>
        <p>Je kunt je resultaat bekijken op <a href="../pages/resultaat.php">deze pagina!</a>.</p>
      `;
            } else {
                alert('Er is iets misgegaan. Probeer het opnieuw.');
            }
        });
    }

