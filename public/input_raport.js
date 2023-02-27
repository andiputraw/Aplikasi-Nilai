import { TemplateXIRPL } from "./htmlTemplate.js";

const pelajaran = [
    "Matematika",
    "Bahasa Indonesia",
    "Bahasa Inggris",
    "Bahasa Sunda",
    "PPKN",
    "PABP",
    "PWPB",
    "PBO",
    "PPL",
    "PKK",
    "BasDat",
];

const jurusan = document.querySelector("#jurusan");
const kelas = document.querySelector("#kelas");
const inputContainer = document.querySelector("#input-container");

function isBothValueIsNotNull(element1, element2) {
    if (element1.value && element2.value) return true;

    return false;
}

async function getDataMurid(jurusan, kelas) {
    const data = {
        jurusan: jurusan,
        kelas: kelas,
    };

    const result = await fetch("http://127.0.0.1:8000/api/murid", {
        body: JSON.stringify(data),
    });

    return JSON.parse(result);
}

function showInput() {
    const pelajaranHTML = TemplateXIRPL(pelajaran);
    inputContainer.insertAdjacentElement("afterbegin", pelajaranHTML);
}

jurusan.addEventListener("input", function (event) {
    console.log("test");
    if (isBothValueIsNotNull(jurusan, kelas)) {
        showInput();
    }
});

kelas.addEventListener("input", function (event) {
    console.log("test");
    if (isBothValueIsNotNull(jurusan, kelas)) {
        showInput();
    }
});
