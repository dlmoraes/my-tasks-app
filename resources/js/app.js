import "./bootstrap";

import "remixicon/fonts/remixicon.css";

document.addEventListener("livewire:init", () => {
    Livewire.on("notify-created", (event) => {
        if (event.length > 0 && event[0].msg !== "") {
            const target = document.getElementById("notify-target");
            target.innerHTML += `
                <div class="toast transition-all duration-300 ease-linear">
                <div class="alert alert-info">
                    <span>${event[0].msg}</span>
                </div>
                </div>
            `;

            setTimeout(() => {
                const element = target.lastElementChild;
                element.classList.add("hidden-element");
            }, 3000);
        }
    });
});
