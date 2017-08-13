import React from 'react'
import {render} from 'react-dom'

import {fillArray,fillCategories} from '../../utils/utils'
import {Items} from './items'
import {Categories} from './categories'

export class Category extends React.Component {
  constructor () {
    super ()
  }

  render () {
    let categories = fillCategories(6)
    return (
      <section className="MainContent-category">
        <div className="MainContent-category-categoryMenu">

          <h2 className="MainContent-category-categoryTitle">Categorias</h2>
          {
            categories.map( (el, i) => {
              return (
                <Categories props = {el} key= {i}/>
              )
            })
          }
        </div>
      </section>
    )
  }

}
