const stgOneBtn = document.getElementById("stgOneBtn");
const stgArray = Array.from(document.getElementsByClassName("stg"));
const invoice_number = document.getElementById("invoice_number_temp");
const salesperson_name = document.getElementById("salesperson_name_temp");

const form = document.getElementsByName("entryForm");
const addEntry = document.getElementById("addEntry");
const removeEntry = document.getElementById("removeEntry");

var numEntries = 1;

stgOneBtn.addEventListener("click", () => {
    if (invoice_number.value == "" || salesperson_name.value == "") {
        // TELL USER INVALID INPUT
        invoice_number.value = "";
        salesperson_name.value = "";
    } else {
        stgArray.forEach(element => {
            if(element.classList.contains("hidden")) {
                element.classList.remove("hidden");
            } else {
                element.classList.add("hidden");
            }
        });

        document.getElementById("invoice-header").innerText = "Invoice #" + invoice_number.value;
        document.getElementById("salesperson-header").innerText = "Salesperson: " + salesperson_name.value;

        document.getElementById("invoice_number").value = invoice_number.value;
        document.getElementById("salesperson_name").value = salesperson_name.value;
    }
});

addEntry.addEventListener("click", () => {
    numEntries++;
    
});

removeEntry.addEventListener("click", () => {
    if (numEntries <= 1) {
        return;
    }

    numEntries--;

});

printValues = () => {
    console.log("Print New Values")
    console.log(invoice_number.value);
    console.log(salesperson_name.value);
}