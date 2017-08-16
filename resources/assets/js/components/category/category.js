import React from 'react'
import {render} from 'react-dom'

import {api} from '../../api/api'

import {Categories} from './categories'

const url = 'api/productos'

export class Category extends React.Component {
  constructor () {
    super ()
    this.url = '/api/productos'
  }

  componentDidMount() {
    let result = api.getData(url).then( (res) => {
      console.log(res)
    })
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
