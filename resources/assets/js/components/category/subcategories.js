import React from 'react'

import {Items} from './items'

import axios from 'axios'

export class Subcategories extends React.Component {
  constructor (props) {
    super()
    this.state = {
      showItems : false
    }
    this.subcategories = props.data

    this.switchItems = this.switchItems.bind(this)
    this.showItems = this.showItems.bind(this)
  }

  switchItems() {
    this.setState({
      showItems : !this.state.showItems
    })
    console.log(this.state.showItems)
  }

  showItems() {
    return (
      <h1>soy un item xD</h1>
    )
    console.log('mostrare los items')
  }

  render () {
    console.log(this.subcategories)
    return (
      <li onClick={this.switchItems}>
        <h1>object</h1>
      </li>
    )
  }
}