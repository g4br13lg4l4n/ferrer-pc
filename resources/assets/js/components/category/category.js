import React from 'react'
import {render} from 'react-dom'

import {api} from '../../api/api'

import {Categories} from './categories'

const url = 'api/productos'

export class Category extends React.Component {
  constructor () {
    super ()
    this.state = {
      data : null
    }

    this.url = '/api/productos'
    this.showCategories = this.showCategories.bind(this)
  }

  componentDidMount() {
    let result = api.getData(url).then( (res) => {
      this.setState({
        data : res
      })
      console.log(this.state.data)
    })
  }

  showCategories () {
    if(this.state.data === null) {
      return (<h1>vacio :c</h1>)
    }

    return (<div>
      {this.state.data.map( (el,i) => {
        return <h1 key={i}>xD</h1>
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
