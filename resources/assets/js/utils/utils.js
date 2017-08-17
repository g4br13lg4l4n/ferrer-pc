import Logo from '../../img/discoduro.png'

export const utils = {

  items() {
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

  getItems (n) {
    let items = []
    while(n-- > 0) {
      items.push(this.items())
  }
    return items
  },

  fillCategories(n) {
    let categories = []

    while(n-- > 0) {
      categories.push({
        name : 'Categoria',
        subcategories : [
          {
            subname : 'subCategorie name',
            items : [{
              name : 'Missha All Around Safe Block Sebum Zero Sun',
              price : 120,
              alt : 'soy un alt',
              img : Logo,
              price : 99.00,
              priceDesc : 79.00,
              discount : '20%',
              desc: 'OFERTA'
        
            }]
          },
          {
            subname : 'subCategorie name',
            items : [{
              name : 'Missha All Around Safe Block Sebum Zero Sun',
              price : 120,
              alt : 'soy un alt',
              img : Logo,
              price : 99.00,
              priceDesc : 79.00,
              discount : '20%',
              desc: 'OFERTA'
        
            }]
          }
        ]
      })
    }

    return categories

  }

}