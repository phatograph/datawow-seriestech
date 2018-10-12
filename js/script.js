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

  const $searchForm = document.querySelector('.Header__top__search')

  if ($searchForm) {
    $searchForm.addEventListener('submit', (e) => {
      if (!e.target.elements.s.value) {
        e.preventDefault()

        document.querySelector('.Header__top__search__input')
          .classList.add('Header__top__search__input--active')
      }
    })
  }
}

document.addEventListener('DOMContentLoaded', App, false);
