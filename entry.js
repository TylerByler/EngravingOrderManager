const stgOneBtn = document.getElementById("stgOneBtn");
const stg1 = document.getElementById("stg1");
const stg2 = document.getElementById("stg2");
const invoice_header = document.getElementById("invoice-header");
const salesperson_header = document.getElementById("salesperson-header");
const invoice_number = document.getElementById("invoice_number");
const salesperson_name = document.getElementById("salesperson_name");
var invoice_number_temp;
var salesperson_name_temp;


console.log("invoice_number: ", invoice_number_temp);
console.log("salesperson_name: ", salesperson_name_temp);

stgOneBtn.addEventListener("click", () => {
    invoice_number_temp = document.getElementById("invoice_number_temp").value;
    salesperson_name_temp = document.getElementById("salesperson_name_temp").value;

    printValues();

    if (invoice_number_temp == "" || salesperson_name_temp == "") {
        // TELL USER INVALID INPUT
        document.getElementById("invoice_number_temp").value = "";
        document.getElementById("salesperson_name_temp").value = "";
    } else {
        stg1.classList.add("hidden");
        stg2.classList.remove("hidden");

        invoice_header.innerText = "Invoice #" + invoice_number_temp;
        salesperson_header.innerText = "Salesperson: " + salesperson_name_temp;

        invoice_number.value = invoice_number_temp;
        salesperson_name.value = salesperson_name_temp;
    }
});

printValues = () => {
    console.log("Print New Values")
    console.log(invoice_number_temp.value);
    console.log(salesperson_name_temp.value);
}