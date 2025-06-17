function loadCart() {
  const cart = JSON.parse(localStorage.getItem("cart")) || [];
  const cartContainer = document.getElementById("cart-items");
  const cartTotal = document.getElementById("cart-total");

  if (cart.length === 0) {
    cartContainer.innerHTML = "<p>Keranjang kosong.</p>";
    cartTotal.innerHTML = "";
    return;
  }

  let html = "<ul>";
  let total = 0;

  cart.forEach((item, index) => {
    const subtotal = item.price * item.qty;
    total += subtotal;

    html += `
          <li>
            <img src="${item.image}" />
            <div class="cart-info">
              <strong>${item.name}</strong><br>
              Harga: Rp.${item.price.toLocaleString()}<br>
              Jumlah: 
              <input type="number" min="1" class="qty-input" value="${
                item.qty
              }" onchange="updateQty(${index}, this.value)">
              <br>
              Subtotal: Rp.${subtotal.toLocaleString()}
            </div>
            <button class="remove-btn" onclick="removeItem(${index})">Hapus</button>
          </li>
        `;
  });

  html += "</ul>";
  cartContainer.innerHTML = html;
  cartTotal.innerHTML = `Total Belanja: Rp.${total.toLocaleString()}`;
}

function updateQty(index, newQty) {
  const cart = JSON.parse(localStorage.getItem("cart")) || [];
  const qty = parseInt(newQty);
  if (qty <= 0 || isNaN(qty)) return;

  cart[index].qty = qty;
  localStorage.setItem("cart", JSON.stringify(cart));
  loadCart();
}

function removeItem(index) {
  const cart = JSON.parse(localStorage.getItem("cart")) || [];
  cart.splice(index, 1);
  localStorage.setItem("cart", JSON.stringify(cart));
  loadCart();
}

// Load saat halaman dibuka
loadCart();
