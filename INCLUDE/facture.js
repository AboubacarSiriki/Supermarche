let total = 0;

function addProduct() {
    const productName = prompt("Nom du produit :");
    const unitPrice = parseFloat(prompt("Prix unitaire :"));
    const quantity = parseInt(prompt("Quantité :"));

    if (productName && !isNaN(unitPrice) && !isNaN(quantity)) {
        const itemTotal = unitPrice * quantity;
        total += itemTotal;

        const newRow = document.createElement("tr");
        newRow.innerHTML = `
            <td>${productName}</td>
            <td>${unitPrice}</td>
            <td>${quantity}</td>
            <td>${itemTotal}</td>
        `;
        document.getElementById("invoice-items").appendChild(newRow);

        document.getElementById("total").innerText = `Total : ${total}`;
    } else {
        alert("Veuillez saisir des valeurs valides.");
    }
}
