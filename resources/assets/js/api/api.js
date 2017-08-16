import axios from 'axios'

module.exports = {

  getCategories(url){
    axios.get(url).then( (res) => {
      return res.data
    }).catch( (err) => {
      console.log(err)
    })
  },

}