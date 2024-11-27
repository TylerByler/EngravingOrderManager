var stgOneBtn = document.getElementById("stgOneBtn");
var invoice_number;
var salesperson_name;

console.log("invoice_number: ", invoice_number);
console.log("salesperson_name: ", salesperson_name);

stgOneBtn.addEventListener("click", () => {
    invoice_number = document.getElementById("invoice_number").value;
    salesperson_name = document.getElementById("salesperson_name").value;
    
    if (invoice_number != null || salesperson_name != null) {
        
    }
});