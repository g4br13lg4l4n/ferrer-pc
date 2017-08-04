import React from 'react'
import Logo from '../../../img/discoduro.png'
import {render} from 'react-dom'

import {Items} from './items'

export class Category extends React.Component {
  constructor () {
    super ()
  }

  render () {

    let obj = {
      name : 'Missha All Around Safe Block Sebum Zero Sun',
      price : 120,
      alt : 'soy un alt',
      img : Logo,
      price : 99.00,
      priceDesc : 79.00,
      discount : '20%',
      desc: 'OFERTA'

    }

    return (
      <section className="MainContent-category">
        <div className="MainContent-category-categoryMenu">
          <h1>Ahora si aqui van las cantegorias xD</h1>
        </div>

        <div className="MainContent-category-resultBox">
          <Items product = {obj}/>
        </div>
      </section>
    )
  }

}
