export const inputTemplate = `<div class="form-group row">
<label class="col-sm-12 col-md-2 col-form-label">B Inggris</label>
<div class="col-sm-12 col-md-10">
    <input
        class="form-control"
        type="text"
        placeholder="Johnny Brown"
    />
</div>
</div>`;

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

export const TemplateXIRPL = (pelajaran) => {
    let HTML = "";

    pelajaran.forEach((pel) => {
        HTML = +getInput(pel);
    });

    return HTML;
};
