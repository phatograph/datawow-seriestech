const App = () => {
  const $loadMore = document.querySelector('.Content__L__dl__load-more')

  if ($loadMore) {
    $loadMore.addEventListener('click', () => {
      const $items = document.querySelectorAll('.Content__L__dl__item')

      if ($loadMore.classList.contains('Content__L__dl__load-more--active')) {
        Array.prototype.forEach.call($items, (x) => {
          x.classList.remove('Content__L__dl__item--active')
        })

        $loadMore.classList.remove('Content__L__dl__load-more--active')
      }

      else {
        Array.prototype.forEach.call($items, (x) => {
          x.classList.add('Content__L__dl__item--active')
        })

        $loadMore.classList.add('Content__L__dl__load-more--active')
      }
    })
  }
}

document.addEventListener('DOMContentLoaded', App, false);
