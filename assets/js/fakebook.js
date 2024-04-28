// đổi thumbnail sang main image
function changeMainImage(thumbnail) {
    var mainImage = document.getElementById("mainImage");
    mainImage.src = thumbnail.src;
    mainImage.alt = thumbnail.alt;
}


// số lượng sách
document.addEventListener("DOMContentLoaded", function() {
    const decrementBtn = document.getElementById("decrement");
    const incrementBtn = document.getElementById("increment");
    const countElement = document.getElementById("count");
  
    let count = 1;
  
    decrementBtn.addEventListener("click", function() {
      if (count > 1) {
        count--;
        updateCount();
      }
    });
  
    incrementBtn.addEventListener("click", function() {
      count++;
      updateCount();
    });
  
    function updateCount() {
      countElement.textContent = count;
    }
  });
  


