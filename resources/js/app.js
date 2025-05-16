// Import all JavaScript modules
// Import summary.js first since other files depend on it
import "./summary.js";
import "./multistep.js";
import "./tabs.js";
import "./rating.js";
import "./edit.js";

// You can add any global JavaScript here
console.log("JavaScript successfully connected!");

document.addEventListener("DOMContentLoaded", () => {
    const userToggle = document.getElementById("userMenuToggle");
    const dropdown = document.getElementById("userDropdown");

    // Only run if both elements exist
    if (userToggle && dropdown) {
        userToggle.addEventListener("click", (e) => {
            e.stopPropagation(); // Prevent bubbling
            dropdown.classList.toggle("hidden");
        });

        // Close dropdown if clicking outside
        document.addEventListener("click", (e) => {
            if (!userToggle.contains(e.target)) {
                dropdown.classList.add("hidden");
            }
        });
    }
});
