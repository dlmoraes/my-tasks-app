import "./bootstrap";
import { showNotification } from "./notifications";

import "remixicon/fonts/remixicon.css";
import Sortable, { MultiDrag, Swap } from "sortablejs";

document.addEventListener("livewire:init", () => {
    Livewire.on("notify-created", (event) => {
        if (event.length > 0 && event[0].msg !== "") {
            showNotification(event[0].type, event[0].msg);
        }
    });
});

Sortable.mount(new MultiDrag(), new Swap());

const groupItems1 = document.getElementById("group-items-1");
const groupItems2 = document.getElementById("group-items-2");
const groupItems3 = document.getElementById("group-items-3");

const sortableSpeed = 150;

const sortable1 = Sortable.create(groupItems1, {
    group: {
        name: "group1",
        put: "group2",
    },
    animation: sortableSpeed,
    onMove: function (e) {
        const dropGroup = e.to;
        groupItems2.classList.add("adding-item");
    },
    onSort: function (e) {
        console.log("group1 on sort");
        e.from.classList.remove("adding-item");
    },
    onEnd: () => {
        groupItems2.classList.remove("adding-item");
        Livewire.emit("update-groups");
    },
    filter: ".remove",
    onFilter: function (e) {
        const item = e.item;
        const ctrl = e.target;

        if (Sortable.utils.is(ctrl, ".remove")) {
            slideUpAndRemove(item);
        }
    },
});

const sortable2 = Sortable.create(groupItems2, {
    group: {
        name: "group2",
        put: ["group1", "group3"],
    },
    animation: sortableSpeed,
    onSort: function (e) {
        e.to.classList.remove("adding-item");
    },
});

const sortable3 = Sortable.create(groupItems3, {
    group: {
        name: "group3",
        put: "group2",
    },
    animation: sortableSpeed,
    onMove: function (e) {
        const dropGroup = e.to;
        dropGroup.classList.add("adding-item");
        e.from.classList.remove("adding-item");
    },
    onSort: function (e) {
        console.log("group3 on sort");
        e.from.classList.remove("adding-item");
    },
    onEnd: function (e) {
        document
            .getElementById("group-items-2")
            .classList.remove("adding-item");
    },
});

function slideUpAndRemove(item) {
    item.style.transition = "height 400ms ease-in-out";
    item.style.height = "0";

    item.addEventListener("transitionend", () => {
        item.remove();
    });
}
