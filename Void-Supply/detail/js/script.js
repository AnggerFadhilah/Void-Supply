// Harga satuan (angka, bukan string)
const unitPrice = [];

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
// add-cart
function addToCart(id, name, price, image) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  const existing = cart.find((item) => item.id === id);
  if (existing) {
    existing.qty += 1;
  } else {
    cart.push({
      id: id,
      name: name,
      price: price,
      image: image,
      qty: 1,
    });
  }

  localStorage.setItem("cart", JSON.stringify(cart));
  alert(name + " ditambahkan ke keranjang!");
}
