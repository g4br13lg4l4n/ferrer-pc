import React from 'react'

import {Items} from './items'

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
  }

  showItems() {
    return (
      <h1>soy un item xD</h1>
    )
  }

  render () {
    return (
      <li onClick={this.switchItems}>
        <h1>soy un objeto ekis de</h1>
      </li>
    )
  }
}