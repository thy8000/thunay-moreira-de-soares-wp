document.addEventListener('alpine:init', () => {
   Alpine.data('animeList', () => ({
      isEmpty: true,
      searchValue: '',
      filterMap: {
         search: '',
         genres: [],
         year: [],
         season: [],
         format: [],
      },

      filter() {
         let formData = new FormData()
         formData.append('filter', this.filterMap ?? '')

         let Fetch = new Fetch()

         // TODO: IMPLEMENTAR AJAX VIA REST API
      },
   }))
})
