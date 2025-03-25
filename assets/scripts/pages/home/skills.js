document.addEventListener('alpine:init', () => {
   Alpine.data('skills', () => ({
      levels: pageProfile.skills.map((skill) => ({
         value: parseInt(skill.value),
         name: skill.name,
      })),

      getLevel(percent) {
         for (let i = this.levels.length - 1; i >= 0; i--) {
            if (percent >= this.levels[i].value) {
               return this.levels[i].name
            }
         }

         return this.levels[0].name
      },
   }))
})
