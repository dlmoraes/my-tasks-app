export function showNotification(type, msg) {
    switch (type) {
        case "error":
            notificationErrorTemplate(msg);
            break;
        case "success":
            notificationSuccessTemplate(msg);
            break;
        default:
            console.error("Invalid notification type");
    }
}

function notificationSuccessTemplate(msg) {
    const target = document.getElementById("notify-target");
    target.innerHTML += `
        <div class="toast transition-all duration-300 ease-linear">
        <div class="alert alert-info">
            <span>${msg}</span>
        </div>
        </div>
    `;

    setTimeout(() => {
        const element = target.lastElementChild;
        element.classList.add("hidden-element");
    }, 3000);
}

function notificationErrorTemplate(msg) {
    const target = document.getElementById("notify-target");
    target.innerHTML += `
        <div class="toast transition-all duration-300 ease-linear">
        <div class="alert alert-error">
            <span>${msg}</span>
        </div>
        </div>
    `;

    setTimeout(() => {
        const element = target.lastElementChild;
        element.classList.add("hidden-element");
    }, 3000);
}
