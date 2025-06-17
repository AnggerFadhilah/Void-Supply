function changeQty(button, delta) {
  const qtyInput = button.parentElement.querySelector("input");
  let qty = parseInt(qtyInput.value);
  qty = Math.max(1, qty + delta);
  qtyInput.value = qty;

  const cartItem = button.closest(".cart-item");
  const price = parseInt(cartItem.querySelector(".unit-price").innerText);
  cartItem.querySelector(".item-total span").innerText = price * qty;

  updateGrandTotal();
}

function removeItem(button) {
  button.closest(".cart-item").remove();
  updateGrandTotal();
}

function updateGrandTotal() {
  const totals = document.querySelectorAll(".item-total span");
  let grandTotal = 0;
  totals.forEach((span) => {
    grandTotal += parseInt(span.innerText);
  });
  document.getElementById("grand-total").innerText = grandTotal;
}
document.querySelector(".add-to-cart").addEventListener("click", () => {
  const product = {
    name: "Tshirt",
    price: 100000,
    quantity: document.querySelector(".quantity input").value,
  };
  localStorage.setItem("cart", JSON.stringify([product]));
});
