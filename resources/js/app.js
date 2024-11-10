import "./bootstrap";

import "remixicon/fonts/remixicon.css";
import { showNotification } from "./notifications";

document.addEventListener("livewire:init", () => {
    Livewire.on("notify-created", (event) => {
        if (event.length > 0 && event[0].msg !== "") {
            showNotification(event[0].type, event[0].msg);
        }
    });
});
