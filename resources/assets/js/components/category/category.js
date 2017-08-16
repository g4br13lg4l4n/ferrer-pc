import React from 'react'
import {render} from 'react-dom'

import {getCategories} from '../../api/api'

import {Categories} from './categories'

const url = 'api/productos'

export class Category extends React.Component {
  constructor () {
    super ()

  }

  componentDidMount() {
  }

  render () {
    return (
      <section className="MainContent-category">
        <div className="MainContent-category-categoryMenu">
          <h2 className="MainContent-category-categoryTitle">Categorias</h2>
          <h1>xD</h1>
        </div>
      </section>
    )
  }

}
