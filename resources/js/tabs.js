// tabs.js
document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll(".tab-btn");
    const contents = document.querySelectorAll(".tab-content");

    // Only run if tabs exist on the page
    if (tabs.length === 0 || contents.length === 0) {
        return;
    }

    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            const target = tab.getAttribute("data-tab");
            const targetElement = document.getElementById(target);

            // Only proceed if the target element exists
            if (!targetElement) return;

            tabs.forEach((t) =>
                t.classList.remove("bg-[#FAFAFA]", "text-blue", "selected-tab")
            );
            contents.forEach((c) => c.classList.add("hidden"));

            tab.classList.add("bg-[#FAFAFA]", "text-blue", "selected-tab");
            targetElement.classList.remove("hidden");
        });
    });

    // Only activate first tab if it exists
    if (tabs.length > 0) {
        tabs[0].click(); // activate first tab
    }
});
