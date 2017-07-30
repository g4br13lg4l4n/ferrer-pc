import React from 'react'
import {render} from 'react-dom'

import {Items} from './items'

export class Category extends React.Component {
  constructor () {
    super ()
  }

  render () {
    return (
      <section className="MainContent-category">
        <div className="MainContent-category-categoryMenu">
          <h1>Ahora si aqui van las cantegorias xD</h1>
        </div>

        <div className="MainContent-category-resultBox">
          <Items/>
        </div>
      </section>
    )
  }

}
