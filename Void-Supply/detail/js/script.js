// add-cart
var addToCart = document.querySelectorAll(".toggle-btn")[0];
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
