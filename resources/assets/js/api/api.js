import axios from 'axios'

export const api = {
  getData(url) {
    return new Promise( (resolve) => {
      axios.get(url).then(res => {
        resolve(res.data)
      })
    })
  }
}