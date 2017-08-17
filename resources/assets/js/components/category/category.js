import React from 'react'
import {render} from 'react-dom'

import {utils} from '../../utils/utils'

//Component's
import {Categories} from './categories'
import {Spinner} from '../spinner/spinner'


export class Category extends React.Component {
  constructor () {
    super ()
    this.state = {
      categorias : null
    }

    this.showCategories = this.showCategories.bind(this)
  }

  componentDidMount(){
    setTimeout( () => {
      this.setState({
        categorias : utils.fillCategories(7)
      })
    },2000)
  }

  showCategories () {
    if(this.state.categorias === null) {
      return (<div><Spinner/></div>)
    }

    return (<div>
      {this.state.categorias.map( (el, i) => {
        return (<h1>xD</h1>)
      })}
    </div>)
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
