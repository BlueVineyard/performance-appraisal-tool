// edit.js
document.addEventListener("DOMContentLoaded", () => {
    const editButton = document.querySelector("#appraisal_summary .btn_edit");

    // Only run if the edit button exists
    if (!editButton) {
        return;
    }

    editButton.addEventListener("click", () => {
        const appraisalSummary = document.getElementById("appraisal_summary");
        const appraisalForm = document.getElementById("appraisal_form");

        // Only proceed if both elements exist
        if (!appraisalSummary || !appraisalForm) {
            return;
        }

        appraisalSummary.classList.add("hidden");
        appraisalForm.classList.remove("hidden");

        const savedData =
            JSON.parse(localStorage.getItem("patFormResponses")) || [];

        savedData.forEach((item) => {
            const ratingInput = document.querySelector(
                `input[name="${getRatingName(item.question)}"][value="${
                    item.rating
                }"]`
            );
            if (ratingInput) {
                ratingInput.checked = true;
                ratingInput.dispatchEvent(new Event("change"));
            }

            const block = document.querySelector(
                `.question-block[data-question="${item.question}"]`
            );
            if (block) {
                const commentInput = block.querySelector("input.pat_input");
                if (commentInput) {
                    commentInput.value = item.comment;
                }
            }
        });

        const activeTab = document.querySelector(".tab-btn.selected-tab");
        let stepIndex = 0;
        if (activeTab?.dataset.tab === "CPB") stepIndex = 1;
        else if (activeTab?.dataset.tab === "CM") stepIndex = 2;

        if (typeof window.showStep === "function") {
            window.currentStep = stepIndex;
            window.showStep();
        }
    });
});

function getRatingName(questionId) {
    if (!questionId || typeof questionId !== "string") return "";
    const parts = questionId.split(".");
    if (parts.length !== 2) return "";
    const [section, q] = parts;
    return `s${section}_q${q}_rating`;
}
