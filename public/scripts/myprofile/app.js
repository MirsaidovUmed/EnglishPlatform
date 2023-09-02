'use strict';

const dropdownContent = document.querySelector('.dropdown-content');
const dropdown = document.querySelector('.dropdown');

dropdown.addEventListener('click', () => {
  dropdownContent.style.display = (dropdownContent.style.display === 'flex') ? 'none' : 'flex';
});





const profileBlock = document.getElementById('profileBlock');

const settingsButton = document.getElementById('settingsButton');
const settingsBlock = document.getElementById('settingsBlock');
const settingsBlockBack = document.getElementById('settingsBlockBack');

const editBlock = document.getElementById('editBlock');
const editButton = document.getElementById('editButton');
const editBlockBack = document.getElementById('editBlockBack');

// Установка начального состояния
setProgileMode();

function setProgileMode() {
  profileBlock.style.display = 'flex';
  settingsBlock.style.display = 'none';
  editBlock.style.display = 'none'
}

function setSettingsMode() {
  profileBlock.style.display = 'none';
  settingsBlock.style.display = 'flex';
}

function setEditMode() {
  profileBlock.style.display = 'none';
  editBlock.style.display = 'flex';
}


editButton.addEventListener('click', () => {
  setEditMode();
});

settingsButton.addEventListener('click', () => {
  setSettingsMode();
});

settingsBlockBack.addEventListener('click', () => {
  setProgileMode();
});
editBlockBack.addEventListener('click', () => {
  setProgileMode();
});

const showInput = document.querySelectorAll('#showInput');
const settingsBlockInputs = document.querySelectorAll('#settingsBlock form ul li input');

settingsBlockInputs.forEach((input, index) => {
  input.style.display = 'none';

  showInput[index].addEventListener('click', () => {
    if (input.style.display === 'none') {
      input.style.display = 'block';
    } else {
      input.style.display = 'none';
    }
  });
});
