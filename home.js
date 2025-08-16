
document.addEventListener("DOMContentLoaded", function () {
    const mainImage = document.getElementById("main-image");
    const mainButton = document.getElementById("main-button");
    const thumbnails = Array.from(document.querySelectorAll(".thumbnail"));
    const thumbnailsContainer = document.querySelector(".thumbnails");

    const leftArrow = document.querySelector(".arrow.left");
    const rightArrow = document.querySelector(".arrow.right");

    if (!mainImage || !mainButton || thumbnails.length === 0) return;

    const slides = thumbnails.map(t => ({
        src: t.src,
        url: t.dataset.url || "#",
        el: t
    }));

    let currentIndex = slides.findIndex(s => s.src === mainImage.src);
    if (currentIndex < 0) currentIndex = 0;

    function update(index) {
        currentIndex = (index + slides.length) % slides.length;
        const s = slides[currentIndex];
        mainImage.src = s.src;
        mainButton.href = s.url;

        thumbnails.forEach((t, i) => t.classList.toggle("active", i === currentIndex));

        if (thumbnailsContainer) {
            const tEl = s.el;
            const containerRect = thumbnailsContainer.getBoundingClientRect();
            const tRect = tEl.getBoundingClientRect();
            if (tRect.left < containerRect.left || tRect.right > containerRect.right) {
                thumbnailsContainer.scrollTo({
                    left: tEl.offsetLeft - (thumbnailsContainer.clientWidth / 2) + (tEl.clientWidth / 2),
                    behavior: "smooth"
                });
            }
        }
    }

    thumbnails.forEach((thumb, i) => {
        thumb.addEventListener("click", () => update(i));
    });

    if (leftArrow) leftArrow.addEventListener("click", () => update(currentIndex - 1));
    if (rightArrow) rightArrow.addEventListener("click", () => update(currentIndex + 1));

    document.addEventListener("keydown", (e) => {
        if (e.key === "ArrowLeft") update(currentIndex - 1);
        if (e.key === "ArrowRight") update(currentIndex + 1);
    });

    update(currentIndex);

    const prevBtn = document.querySelector(".thumb-btn.prev");
    const nextBtn = document.querySelector(".thumb-btn.next");
    if (prevBtn && thumbnailsContainer) {
        prevBtn.addEventListener("click", () => thumbnailsContainer.scrollBy({ left: -100, behavior: "smooth" }));
    }
    if (nextBtn && thumbnailsContainer) {
        nextBtn.addEventListener("click", () => thumbnailsContainer.scrollBy({ left: 100, behavior: "smooth" }));
    }
});


document.addEventListener('DOMContentLoaded', function() {
  var stream = document.querySelector('.gallery__stream');
  var items = document.querySelectorAll('.gallery__item');
  
  var prev = document.querySelector('.gallery__prev');
  prev.addEventListener('click', function() {
    stream.insertBefore(items[items.length - 1], items[0]);
    items = document.querySelectorAll('.gallery__item');
  });
  
  var next = document.querySelector('.gallery__next');
  next.addEventListener('click', function() {
    stream.appendChild(items[0]);
    items = document.querySelectorAll('.gallery__item');
  });
});
