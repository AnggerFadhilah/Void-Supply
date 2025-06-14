document.addEventListener("DOMContentLoaded", () => {
  // Jalankan feather.replace() DULU
  feather.replace();

  // Baru setelah itu ambil elemen icon
  const userIcon = document.getElementById("user-icon");
  const dropdownWrapper = userIcon.closest(".dropdown");

  userIcon.addEventListener("click", (e) => {
    e.stopPropagation();
    dropdownWrapper.classList.toggle("show");
  });

  window.addEventListener("click", (e) => {
    if (!dropdownWrapper.contains(e.target)) {
      dropdownWrapper.classList.remove("show");
    }
  });

  // Product carousel logic
  const productContainers = [...document.querySelectorAll(".product-container")];
  const nxtBtn = [...document.querySelectorAll(".nxt-btn")];
  const preBtn = [...document.querySelectorAll(".pre-btn")];

  productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener("click", () => {
      item.scrollLeft += containerWidth;
    });

    preBtn[i].addEventListener("click", () => {
      item.scrollLeft -= containerWidth;
    });
  });
});
