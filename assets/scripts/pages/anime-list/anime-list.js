document.addEventListener('alpine:init', () => {
   Alpine.data('animeList', () => ({
      isEmpty: true,
      searchValue: '',
      restAPI: globals.restAPI,
      filterMap: {
         search: '',
         genre: '',
         year: '',
         season: '',
         format: '',
      },
      searchListElement: document.querySelector('#anime-list-container'),

      filter() {
         let formData = new FormData()
         formData.append('filter', this.filterMap ?? '')

         let fetchInstance = new Fetch(`${this.restAPI}anilist/api`)

         fetchInstance
            .post('/search/', {
               filter: {
                  search: this.filterMap.search ?? '',
                  genre: this.filterMap.genres ?? '',
                  year: this.filterMap.year ?? '',
                  season: this.filterMap.season ?? '',
                  format: this.filterMap.format ?? '',
               },
               response_type: 'html',
            })
            .then((response) => {
               if (response) {
                  this.searchValue = response
                  this.searchListElement.innerHTML = response
               } else {
                  console.warn('Nenhum conteúdo encontrado na resposta', response)
               }
            })
            .catch((error) => {
               console.error('Error while fetching:', error)
            })
      },
   }))
})
