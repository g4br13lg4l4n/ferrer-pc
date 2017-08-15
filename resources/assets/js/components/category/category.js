import React from 'react'
import {render} from 'react-dom'

import {fillArray,fillCategories} from '../../utils/utils'

import {Categories} from './categories'

import axios from 'axios'

export class Category extends React.Component {
  constructor () {
    super ()

    this.showCategories = this.showCategories.bind(this)
  }

  componentDidMount() {
    axios.get('/admin').then( (res) => {
      console.log(res.data)
    }).catch( (err) => {
      console.log(err)
    })
    console.log('componente montado')
  }

  showCategories () {
    let categories = fillCategories(4)

    let el = categories.map( (el, i) => {
      return (
        <Categories data = {el} key= {i}/>
      )
    })
    
    return el
  }

  render () {
    return (
      <section className="MainContent-category">
        <div className="MainContent-category-categoryMenu">
          <h2 className="MainContent-category-categoryTitle">Categorias</h2>
          {this.showCategories()}
        </div>
      </section>
    )
  }

}
