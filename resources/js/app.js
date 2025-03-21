import './bootstrap';
import '../../vendor/masmerise/livewire-toaster/resources/js'; // 👈

const cursor = document.getElementById('cursor');

// This will track the mouse movement
document.addEventListener('mousemove', (e) => {
  const mouseX = e.clientX + window.scrollX;  // Adjust for horizontal scroll
  const mouseY = e.clientY + window.scrollY;  // Adjust for vertical scroll

  // Apply a delay effect by using `setTimeout` or `requestAnimationFrame` for smooth movement
  setTimeout(() => {
    cursor.style.transform = `translate3d(${mouseX - cursor.offsetWidth / 2}px, ${mouseY - cursor.offsetHeight / 2}px, 0)`;
  }, 50); // Adjust delay time (50ms) for a smoother effect
});


