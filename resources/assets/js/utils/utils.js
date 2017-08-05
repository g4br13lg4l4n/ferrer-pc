import Logo from '../../img/discoduro.png'

module.exports = {

  getData() {
    return {
      name : 'Missha All Around Safe Block Sebum Zero Sun',
      price : 120,
      alt : 'soy un alt',
      img : Logo,
      price : 99.00,
      priceDesc : 79.00,
      discount : '20%',
      desc: 'OFERTA'

    }
  },

  fillArray (n) {

    let _self = this

    let items = []

    while(n-- > 0) {
      items.push({
      name : 'Missha All Around Safe Block Sebum Zero Sun',
      price : 120,
      alt : 'soy un alt',
      img : Logo,
      price : 99.00,
      priceDesc : 79.00,
      discount : '20%',
      desc: 'OFERTA'

    })
  }
    return items
  },

  getCategories: () =>  {
    return {
      categorie : {
        name : 'title',
        subcategories : [
          'A',
          'B',
          'C',
          'D'
        ]
      }
    }
  },

  fillCategories(n) {
    let categories = []

    while(n-- > 0) {
      categories.push({
      categorie : {
        name : 'Discos duros',
        subcategories : [
          'A',
          'B',
          'C',
          'D'
        ]
      }
    })
    }

    return categories

  }

}