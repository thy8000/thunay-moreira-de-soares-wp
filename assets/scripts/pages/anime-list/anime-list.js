document.addEventListener('alpine:init', () => {
   Alpine.data('animeList', () => ({
      isEmpty: true,
      searchValue: '',
      restAPI: globals.restAPI,
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

         let fetchInstance = new Fetch(`${this.restAPI}anilist/api`)

         fetchInstance.post('/search/', {
            filter: {
               search: this.filterMap.search ?? [],
               genres: this.filterMap.genres ?? [],
               year: this.filterMap.year ?? [],
               season: this.filterMap.season ?? [],
               format: this.filterMap.format ?? [],
            }
         })
         .then(response => {
           console.log(response);
         })
         .catch(error => {
           console.error('Error while fetching:', error);
         });
      },
   }))
})
