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
        name: "group-items-1",
        put: ["group-items-2", "group-items-3"],
    },
    animation: sortableSpeed,
    onStart: function (e) {
        // Adiciona a classe 'grabbing' ao item arrastado
        e.item.classList.add("cursor-grabbing");
        // Aplica o cursor 'grabbing' no body (caso queira um efeito global)
        document.body.style.cursor = "grabbing";
    },
    onMove: function (e) {
        const dropGroup = e.to;
        groupItems2.classList.add("adding-item");
    },
    onSort: function (e) {
        console.log("group-items-1 on sort");
        e.from.classList.remove("adding-item");
    },
    onEnd: (e) => {
        groupItems2.classList.remove("adding-item");
        // Remove a classe 'grabbing' do item
        e.item.classList.remove("cursor-grabbing");
        // Restaura o cursor para o padrão
        document.body.style.cursor = "default";
        //Livewire.emit("update-groups");
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
        name: "group-items-2",
        put: ["group-items-1", "group-items-3"],
    },
    animation: sortableSpeed,
    onStart: function (e) {
        // Adiciona a classe 'grabbing' ao item arrastado
        e.item.classList.add("cursor-grabbing");
        // Aplica o cursor 'grabbing' no body (caso queira um efeito global)
        document.body.style.cursor = "grabbing";
    },
    onSort: function (e) {
        e.to.classList.remove("adding-item");
    },
    onEnd: (e) => {
        // Remove a classe 'grabbing' do item
        e.item.classList.remove("cursor-grabbing");
        // Restaura o cursor para o padrão
        document.body.style.cursor = "default";
        //Livewire.emit("update-groups");
    },
});

const sortable3 = Sortable.create(groupItems3, {
    group: {
        name: "group-items-3",
        put: ["group-items-1", "group-items-2"],
    },
    animation: sortableSpeed,
    onStart: function (e) {
        // Adiciona a classe 'grabbing' ao item arrastado
        e.item.classList.add("cursor-grabbing");
        // Aplica o cursor 'grabbing' no body (caso queira um efeito global)
        document.body.style.cursor = "grabbing";
    },
    onMove: function (e) {
        const dropGroup = e.to;
        dropGroup.classList.add("adding-item");
        e.from.classList.remove("adding-item");
    },
    onSort: function (e) {
        console.log("group-items-3 on sort");
        e.from.classList.remove("adding-item");
    },
    onEnd: function (e) {
        document
            .getElementById("group-items-2")
            .classList.remove("adding-item");

        // Remove a classe 'grabbing' do item
        e.item.classList.remove("cursor-grabbing");
        // Restaura o cursor para o padrão
        document.body.style.cursor = "default";
        //Livewire.emit("update-groups");
    },
});

function slideUpAndRemove(item) {
    item.style.transition = "height 500ms ease-in-out";
    item.style.height = "0";

    item.addEventListener("transitionend", () => {
        item.remove();
    });
}
