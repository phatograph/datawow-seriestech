const App = () => {
  const $mobileMenuHandle = document.querySelector('.MobileMenu__handle')

  if ($mobileMenuHandle) {
    $mobileMenuHandle.addEventListener('click', () => {
      const $mobileMenuPanel = document.querySelector('.MobileMenu__panel')
      const $layout = document.querySelector('.Layout')

      $mobileMenuPanel.classList.toggle('MobileMenu__panel--active')
      $layout.classList.toggle('Layout--menu-open')
    })
  }
}

document.addEventListener('DOMContentLoaded', App, false);
