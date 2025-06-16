// ====== TAB Switching (Metode Pembayaran) ======
const tabs = document.querySelectorAll(".tab");
const panes = document.querySelectorAll(".pane");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    // ganti active tab
    tabs.forEach((t) => t.classList.remove("active"));
    tab.classList.add("active");

    // ganti pane
    panes.forEach((p) => p.classList.remove("active"));
    const targetPane = document.getElementById(tab.dataset.target);
    targetPane.classList.add("active");
  });
});

// ====== FORMAT ANGKA RUPIAH (contoh sederhana) ======
// Anda bisa menambah fungsionalitas lain (update total dinamis, validasi, dsb)
window.addEventListener("DOMContentLoaded", () => {
  const cart = JSON.parse(localStorage.getItem("cart"));
  if (cart) {
    const total = cart.reduce(
      (sum, item) => sum + item.price * item.quantity,
      0
    );
    document.querySelector(".summary-table").innerHTML += `
      <tr>
        <td><strong>Total Keranjang</strong></td>
        <td class="text-right"><strong>Rp ${total.toLocaleString(
          "id-ID"
        )}</strong></td>
      </tr>
    `;
  }
});
