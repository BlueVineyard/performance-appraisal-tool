// rating.js
document.addEventListener("DOMContentLoaded", () => {
    const rateWrappers = document.querySelectorAll(".rate-wrapper");

    // Only run if rating elements exist on the page
    if (rateWrappers.length === 0) {
        return;
    }

    rateWrappers.forEach((wrapper) => {
        const rateInputs = wrapper.querySelectorAll(
            '.rate input[type="radio"]'
        );
        const progressFill = wrapper.querySelector(".progress-fill");
        const progressLine = wrapper.querySelector(".progress-line");

        // Skip this wrapper if it doesn't have all required elements
        if (!progressFill || !progressLine || rateInputs.length === 0) {
            return;
        }

        const totalRatings = 10;

        rateInputs.forEach((input) => {
            input.addEventListener("change", () => {
                progressLine.classList.add("active");
                const selectedValue = parseInt(input.value);
                const percentagePerDot = 100 / (totalRatings - 1);
                const percentage = (selectedValue - 1) * percentagePerDot;
                progressFill.style.width = `calc(${percentage}% + 8px)`;
            });
        });
    });
});
