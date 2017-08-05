import React from 'react'
import Logo from '../../../img/discoduro.png'
import {render} from 'react-dom'

import {getData, fillArray} from '../../utils/utils'
import {Items} from './items'

export class Category extends React.Component {
  constructor () {
    super ()
  }

  render () {
    
    let obj = getData()
    console.log(fillArray())

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
