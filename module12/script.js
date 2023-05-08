const calculateBtn = document.getElementById("calculateBtn");
calculateBtn.addEventListener("click", calculateBMI);

function calculateBMI() {
    const weight = document.getElementById("weightInput").value;
    const height = document.getElementById("heightInput").value;

    const bmi = weight / (height * height);
    const resultDiv = document.getElementById("result");
    resultDiv.innerHTML = `Your BMI is ${bmi.toFixed(2)}`;
}