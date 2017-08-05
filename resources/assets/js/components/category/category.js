import React from 'react'
import {render} from 'react-dom'

import {getData, fillArray, getCategories, fillCategories} from '../../utils/utils'
import {Items} from './items'
import {Categories} from './categories'

export class Category extends React.Component {
  constructor () {
    super ()

    this.state = {
      show : false
    }

    this.showCategories = this.showCategories.bind(this)
  }

  showCategories () {
    this.setState({
      show : !this.state.show
    })
  }
  
  render () {
    let categorias = fillCategories(6)
    let obj = getData()

    console.log(categorias)

    return (
      <section className="MainContent-category">
        <div className="MainContent-category-categoryMenu">

          <h2 className="MainContent-category-categoryTitle">Categorias</h2>
          {categorias.map( (el,i) => {
            return(
              <h1 key={i}>{el.categorie.name}</h1>
            )
          })}
        </div>

        <div className="MainContent-category-resultBox">
          {fillArray(5).map( (el, i) => <Items product = {obj} key={i}/>)}
        </div>
      </section>
    )
  }

}
