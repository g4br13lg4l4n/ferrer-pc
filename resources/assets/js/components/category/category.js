import React from 'react'
import {render} from 'react-dom'

import {getData, fillArray} from '../../utils/utils'
import {Items} from './items'
import {Categories} from './categories'

export class Category extends React.Component {
  constructor () {
    super ()
    this.state = {
      count : 0
    }
    this.showCategories = this.showCategories.bind(this)
  }

  showCategories() {
    this.setState = {
      count : this.state.count + 1
    }

    console.log(this.setState.count)
  }

  render () {
    
    let obj = getData()

    return (
      <section className="MainContent-category">
        <div className="MainContent-category-categoryMenu">
          <h3 className="MainContent-category-categoryTitle">CATEGORIAS</h3>
          {this.state.count}
          <Categories onClick={this.showCategories} show = {true}/>
        </div>

        <div className="MainContent-category-resultBox">
          {fillArray(5).map( (el, i) => <Items product = {obj} key={i}/>)}
        </div>
      </section>
    )
  }

}
