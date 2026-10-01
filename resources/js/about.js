const timelineData = {
    2016: {
        title: "2016 · Awal Perjalanan",
        description: "MIU memulai perjalanan pengembangan teknologi dan membangun fondasi perusahaan untuk menghadirkan solusi digital bagi kebutuhan bisnis."
    },
    2017: {
        title: "2017 · MIU KB IT Inventory",
        description: "MIU mengembangkan sistem IT Inventory untuk membantu pencatatan stok, pemantauan barang, serta pengelolaan persediaan dengan lebih teratur."
    },
    2018: {
        title: "2018 · E-Connote CN Barang Kiriman",
        description: "Pengembangan E-Connote CN diperluas untuk mendukung pengelolaan data dan proses administrasi barang kiriman dengan lebih efisien."
    },
    2023: {
        title: "2023 · CEISA 4.0 IT Inventory",
        description: "MIU mengembangkan IT Inventory yang mendukung integrasi dengan CEISA 4.0 untuk membantu pelaporan dan pertukaran data secara lebih lancar."
    }
};

const timelineItems = document.querySelectorAll(".timeline-item");
const detailTitle = document.querySelector("#detail-title");
const detailDescription = document.querySelector("#detail-description");
const detailYear = document.querySelector("#detail-year");
const detailBox = document.querySelector(".timeline-detail");

function activateTimeline(item) {
    const year = item.dataset.year;
    const data = timelineData[year];
    if (!data) return;

    timelineItems.forEach((element) => element.classList.toggle("active", element === item));
    detailTitle.textContent = data.title;
    detailDescription.textContent = data.description;
    detailYear.textContent = year;
    detailBox.style.animation = "none";
    void detailBox.offsetWidth;
    detailBox.style.animation = "fadeIn 0.35s ease";
}

timelineItems.forEach((item) => {
    item.addEventListener("click", () => activateTimeline(item));
    const dot = item.querySelector(".timeline-dot");
    dot?.addEventListener("keydown", (event) => {
        if (event.key === "Enter" || event.key === " ") activateTimeline(item);
    });
});

// Drag along the year rail to scrub through milestones.
const timelineTrack = document.querySelector(".timeline");
let dragStartX = 0;
let draggingTimeline = false;
let didDragTimeline = false;

function activateNearestTimelineItem(x) {
    let nearestItem = null;
    let nearestDistance = Infinity;
    timelineItems.forEach((item) => {
        const center = item.querySelector(".timeline-dot").getBoundingClientRect().left + item.querySelector(".timeline-dot").offsetWidth / 2;
        const distance = Math.abs(center - x);
        if (distance < nearestDistance) {
            nearestDistance = distance;
            nearestItem = item;
        }
    });
    if (nearestItem && !nearestItem.classList.contains("active")) activateTimeline(nearestItem);
}

timelineTrack?.addEventListener("pointerdown", (event) => {
    if (event.button !== undefined && event.button !== 0) return;
    draggingTimeline = true;
    didDragTimeline = false;
    dragStartX = event.clientX;
});

window.addEventListener("pointermove", (event) => {
    if (!draggingTimeline) return;
    if (Math.abs(event.clientX - dragStartX) > 5) didDragTimeline = true;
    if (didDragTimeline) {
        activateNearestTimelineItem(event.clientX);
        if (event.cancelable) event.preventDefault();
    }
});

function endTimelineDrag(event) {
    if (!draggingTimeline) return;
    if (didDragTimeline) activateNearestTimelineItem(event.clientX);
    draggingTimeline = false;
    // Prevent the pointer release from also firing a click on a different year.
    if (didDragTimeline) {
        const suppressClick = (clickEvent) => {
            clickEvent.preventDefault();
            clickEvent.stopPropagation();
        };
        timelineTrack.addEventListener("click", suppressClick, { capture: true, once: true });
        window.setTimeout(() => timelineTrack.removeEventListener("click", suppressClick, true), 0);
    }
}

window.addEventListener("pointerup", endTimelineDrag);
window.addEventListener("pointercancel", endTimelineDrag);

// Accordion: keep one reason open at a time.
document.querySelectorAll(".why-trigger").forEach((button) => {
    button.addEventListener("click", () => {
        const item = button.closest(".why-item");
        const willOpen = !item.classList.contains("is-open");
        document.querySelectorAll(".why-item").forEach((other) => {
            other.classList.remove("is-open");
            other.querySelector(".why-trigger").setAttribute("aria-expanded", "false");
        });
        if (willOpen) {
            item.classList.add("is-open");
            button.setAttribute("aria-expanded", "true");
        }
    });
});

const valueDescriptions = {
    Responsible: "Bertanggung jawab atas setiap komitmen dan hasil kerja kami.",
    Integrity: "Menjaga kepercayaan melalui sikap jujur dan konsisten dalam setiap keputusan.",
    Innovation: "Terus mencari cara yang lebih baik untuk menjawab kebutuhan bisnis Anda."
};
const valueNote = document.querySelector(".value-note");

document.querySelectorAll(".value-card").forEach((card) => {
    card.addEventListener("click", () => {
        document.querySelectorAll(".value-card").forEach((other) => {
            const selected = other === card;
            other.classList.toggle("is-selected", selected);
            other.setAttribute("aria-pressed", String(selected));
        });
        valueNote.textContent = valueDescriptions[card.querySelector("strong").textContent];
    });
});

const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector(".nav-menu");
const aboutDropdown = document.querySelector(".nav-dropdown");
const aboutTrigger = document.querySelector(".about-nav-trigger");

aboutTrigger?.addEventListener("click", () => {
    const isOpen = aboutDropdown.classList.toggle("is-open");
    aboutTrigger.setAttribute("aria-expanded", String(isOpen));
});

document.querySelectorAll(".nav-dropdown-link").forEach((link) => {
    link.addEventListener("click", () => {
        aboutDropdown?.classList.remove("is-open");
        aboutTrigger?.setAttribute("aria-expanded", "false");
        navMenu?.classList.remove("active");
    });
});

document.addEventListener("click", (event) => {
    if (aboutDropdown && !aboutDropdown.contains(event.target)) {
        aboutDropdown.classList.remove("is-open");
        aboutTrigger?.setAttribute("aria-expanded", "false");
    }
});

hamburger?.addEventListener("click", () => {
    const isOpen = navMenu.classList.toggle("active");
    hamburger.setAttribute("aria-expanded", String(isOpen));
});

document.querySelectorAll(".nav-link").forEach((link) => {
    link.addEventListener("click", () => navMenu.classList.remove("active"));
});

const navbar = document.querySelector(".navbar");
window.addEventListener("scroll", () => {
    navbar?.classList.toggle("scrolled", window.scrollY > 50);
});
