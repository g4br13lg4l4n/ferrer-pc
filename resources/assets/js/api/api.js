import axios from 'axios'

module.exports = {

  async getCategories(url){
    try {
      const datos = await axios('api/productos')
    } catch (e) {
      console.log(e)
    }
    
  },

}