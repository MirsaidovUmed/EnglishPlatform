'use strict';



const dropdownContent = document.querySelector('.dropdown-content');
const dropdown = document.querySelector('.dropdown');

dropdown.addEventListener('click', () => {
  dropdownContent.style.display = (dropdownContent.style.display === 'flex') ? 'none' : 'flex';
});



