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
    inputContainer.innerHTML = "";
    inputContainer.insertAdjacentHTML("afterbegin", pelajaranHTML);
}

jurusan.addEventListener("input", function (event) {
    if (isBothValueIsNotNull(jurusan, kelas)) {
        showInput();
    }
});

kelas.addEventListener("input", function (event) {
    if (isBothValueIsNotNull(jurusan, kelas)) {
        showInput();
    }
});

const getInput = (string) => {
    return `<div class="form-group row">
    <label class="col-sm-12 col-md-2 col-form-label">${string}</label>
    <div class="col-sm-12 col-md-10">
        <input
            class="form-control"
            type="text"
            placeholder="Masukan Nilai"
            name="${string}"
        />
    </div>
    </div>`;
};

const TemplateXIRPL = (pelajaran) => {
    let HTML = ``;

    pelajaran.forEach((pel) => {
        HTML = HTML + getInput(pel);
    });

    HTML =
        HTML + `<input class="btn btn-primary" type="submit" value="Submit">`;

    return HTML;
};
