// Harga satuan (angka, bukan string)
const unitPrice = 38500;

const quantityInput = document.getElementById("quantity");
const totalPriceDisplay = document.getElementById("total-price");
const buyButton = document.querySelector(".buy");

function formatRupiah(number) {
  return new Intl.NumberFormat("id-ID", {
    style: "currency",
    currency: "IDR",
  }).format(number);
}

function updateTotalPrice() {
  const quantity = parseInt(quantityInput.value);
  const total = unitPrice * quantity;

  totalPriceDisplay.textContent = formatRupiah(total);
  buyButton.textContent = `Beli Dengan Voucher - ${formatRupiah(total)}`;
}

quantityInput.addEventListener("input", updateTotalPrice);

// Set awal saat halaman dimuat
updateTotalPrice();
